<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class AdminAuthController extends Controller
{
    /**
     * Show login form
     */
    public function showLogin()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        
        return view('admin.auth.login');
    }

    /**
     * Handle login attempt
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $credentials = $request->only('email', 'password');
        $remember = $request->filled('remember');

        // Add is_active check to credentials
        $credentials['is_active'] = true;

        if (Auth::guard('admin')->attempt($credentials, $remember)) {
            $request->session()->regenerate();
            
            // Update last login time
            Auth::guard('admin')->user()->update([
                'last_login_at' => now()
            ]);

            return redirect()->intended(route('admin.dashboard'))
                ->with('success', 'Welcome back, ' . Auth::guard('admin')->user()->name . '!');
        }

        throw ValidationException::withMessages([
            'email' => ['The provided credentials do not match our records or account is inactive.'],
        ]);
    }

    /**
     * Handle logout
     */
    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        return redirect()->route('admin.login')
            ->with('success', 'You have been logged out successfully.');
    }

    /**
     * Show password reset form
     */
    public function showResetForm()
    {
        return view('admin.auth.reset-password');
    }

    /**
     * Handle password reset
     */
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:admin_users,email',
            'current_password' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $admin = AdminUser::where('email', $request->email)->first();
        
        if (!$admin || !Hash::check($request->current_password, $admin->password)) {
            return back()->withErrors([
                'current_password' => 'Current password is incorrect.'
            ]);
        }

        $admin->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.login')
            ->with('success', 'Password updated successfully. Please login with your new password.');
    }

    /**
     * Show profile page
     */
    public function showProfile()
    {
        return view('admin.auth.profile', [
            'admin' => Auth::guard('admin')->user()
        ]);
    }

    /**
     * Update profile
     */
    public function updateProfile(Request $request)
    {
        $admin = Auth::guard('admin')->user();
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admin_users,email,' . $admin->id,
            'current_password' => 'nullable|required_with:password',
            'password' => 'nullable|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        // If password is being updated, verify current password
        if ($request->filled('password')) {
            if (!Hash::check($request->current_password, $admin->password)) {
                return back()->withErrors([
                    'current_password' => 'Current password is incorrect.'
                ]);
            }
            
            $data['password'] = Hash::make($request->password);
        }

        $admin->update($data);

        return back()->with('success', 'Profile updated successfully.');
    }
}
