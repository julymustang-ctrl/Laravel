<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Admin Login - {{ config('app.name', 'Laravel') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --admin-primary: #3b82f6;
            --admin-primary-dark: #2563eb;
            --admin-secondary: #64748b;
            --admin-success: #10b981;
            --admin-danger: #ef4444;
            --admin-border: #e2e8f0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }
        
        .login-container {
            background: white;
            border-radius: 16px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            width: 100%;
            max-width: 400px;
        }
        
        .login-header {
            padding: 40px 40px 30px;
            text-align: center;
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        }
        
        .login-logo {
            font-size: 32px;
            font-weight: 700;
            color: var(--admin-primary);
            margin-bottom: 8px;
        }
        
        .login-subtitle {
            color: var(--admin-secondary);
            font-size: 16px;
        }
        
        .login-body {
            padding: 30px 40px 40px;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #1e293b;
            font-size: 14px;
        }
        
        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 2px solid var(--admin-border);
            border-radius: 12px;
            font-size: 16px;
            transition: all 0.2s ease;
            background-color: #fafbfc;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-primary);
            background-color: white;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, 0.1);
        }
        
        .form-control.is-invalid {
            border-color: var(--admin-danger);
            background-color: #fef2f2;
        }
        
        .invalid-feedback {
            color: var(--admin-danger);
            font-size: 13px;
            margin-top: 6px;
            display: block;
        }
        
        .form-check {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }
        
        .form-check-input {
            width: 18px;
            height: 18px;
            border: 2px solid var(--admin-border);
            border-radius: 4px;
            cursor: pointer;
        }
        
        .form-check-label {
            font-size: 14px;
            color: var(--admin-secondary);
            cursor: pointer;
        }
        
        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 14px 24px;
            border: none;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
            width: 100%;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--admin-primary) 0%, var(--admin-primary-dark) 100%);
            color: white;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, var(--admin-primary-dark) 0%, #1d4ed8 100%);
            transform: translateY(-1px);
            box-shadow: 0 10px 25px -5px rgba(59, 130, 246, 0.4);
        }
        
        .btn-primary:active {
            transform: translateY(0);
        }
        
        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 24px;
            border: 1px solid;
            font-size: 14px;
        }
        
        .alert-success {
            background-color: #f0fdf4;
            border-color: #bbf7d0;
            color: #166534;
        }
        
        .alert-danger {
            background-color: #fef2f2;
            border-color: #fecaca;
            color: #dc2626;
        }
        
        .login-footer {
            padding: 20px 40px;
            background-color: #f8fafc;
            text-align: center;
            border-top: 1px solid var(--admin-border);
        }
        
        .login-footer a {
            color: var(--admin-primary);
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        
        .login-footer a:hover {
            text-decoration: underline;
        }
        
        .back-to-site {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            position: absolute;
            top: 20px;
            left: 20px;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.2s ease;
        }
        
        .back-to-site:hover {
            color: white;
            text-decoration: none;
        }
        
        .loading {
            display: none;
        }
        
        .btn:disabled {
            opacity: 0.7;
            cursor: not-allowed;
            transform: none !important;
        }
        
        @media (max-width: 480px) {
            .login-container {
                margin: 20px;
            }
            
            .login-header,
            .login-body,
            .login-footer {
                padding-left: 24px;
                padding-right: 24px;
            }
        }
    </style>
</head>
<body>
    <a href="{{ url('/') }}" class="back-to-site">
        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
        </svg>
        Back to Site
    </a>
    
    <div class="login-container">
        <div class="login-header">
            <div class="login-logo">Admin Panel</div>
            <div class="login-subtitle">Sign in to your account</div>
        </div>
        
        <div class="login-body">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            
            <form method="POST" action="{{ route('admin.login.submit') }}" id="loginForm">
                @csrf
                
                <div class="form-group">
                    <label for="email" class="form-label">Email Address</label>
                    <input type="email" 
                           class="form-control @error('email') is-invalid @enderror" 
                           id="email" 
                           name="email" 
                           value="{{ old('email') }}" 
                           required 
                           autocomplete="email" 
                           autofocus
                           placeholder="Enter your email">
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" 
                           class="form-control @error('password') is-invalid @enderror" 
                           id="password" 
                           name="password" 
                           required 
                           autocomplete="current-password"
                           placeholder="Enter your password">
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        Remember me for 30 days
                    </label>
                </div>
                
                <button type="submit" class="btn btn-primary" id="loginBtn">
                    <span class="login-text">Sign In</span>
                    <span class="loading">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2v4m0 12v4m9-9h-4m-12 0H3m15.364-6.364l-2.828 2.828M6.464 6.464L3.636 3.636m12.728 12.728l-2.828-2.828M6.464 17.536L3.636 20.364"></path>
                        </svg>
                        Signing In...
                    </span>
                </button>
            </form>
        </div>
        
        <div class="login-footer">
            <a href="{{ route('admin.password.reset') }}">Forgot your password?</a>
        </div>
    </div>
    
    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            const btn = document.getElementById('loginBtn');
            const loginText = btn.querySelector('.login-text');
            const loading = btn.querySelector('.loading');
            
            btn.disabled = true;
            loginText.style.display = 'none';
            loading.style.display = 'flex';
        });
        
        // Auto-hide alerts after 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            const alerts = document.querySelectorAll('.alert');
            alerts.forEach(function(alert) {
                setTimeout(function() {
                    alert.style.opacity = '0';
                    setTimeout(function() {
                        alert.remove();
                    }, 300);
                }, 5000);
            });
        });
    </script>
</body>
</html>