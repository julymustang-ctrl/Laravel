<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'Admin Panel') - {{ config('app.name', 'Laravel') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Admin Styles -->
    <style>
        :root {
            --admin-primary: #3b82f6;
            --admin-primary-dark: #2563eb;
            --admin-secondary: #64748b;
            --admin-success: #10b981;
            --admin-warning: #f59e0b;
            --admin-danger: #ef4444;
            --admin-info: #06b6d4;
            --admin-light: #f8fafc;
            --admin-dark: #1e293b;
            --admin-border: #e2e8f0;
            --admin-sidebar-width: 260px;
            --admin-topbar-height: 70px;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f1f5f9;
            color: #334155;
            line-height: 1.6;
        }
        
        .admin-container {
            display: flex;
            min-height: 100vh;
        }
        
        /* Sidebar */
        .admin-sidebar {
            width: var(--admin-sidebar-width);
            background: white;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
            position: fixed;
            left: 0;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            z-index: 1000;
            transition: all 0.3s ease;
        }
        
        .admin-sidebar.collapsed {
            width: 80px;
        }
        
        .sidebar-header {
            padding: 20px;
            border-bottom: 1px solid var(--admin-border);
            text-align: center;
        }
        
        .sidebar-logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--admin-primary);
            text-decoration: none;
        }
        
        .sidebar-nav {
            padding: 20px 0;
        }
        
        .nav-section {
            margin-bottom: 30px;
        }
        
        .nav-section-title {
            padding: 0 20px 10px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--admin-secondary);
            letter-spacing: 0.5px;
        }
        
        .nav-item {
            margin-bottom: 4px;
        }
        
        .nav-link {
            display: flex;
            align-items: center;
            padding: 12px 20px;
            color: #64748b;
            text-decoration: none;
            transition: all 0.2s ease;
            border-left: 3px solid transparent;
        }
        
        .nav-link:hover {
            background-color: #f8fafc;
            color: var(--admin-primary);
            border-left-color: var(--admin-primary);
        }
        
        .nav-link.active {
            background-color: #eff6ff;
            color: var(--admin-primary);
            border-left-color: var(--admin-primary);
            font-weight: 500;
        }
        
        .nav-icon {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            flex-shrink: 0;
        }
        
        /* Main Content */
        .admin-main {
            margin-left: var(--admin-sidebar-width);
            width: calc(100% - var(--admin-sidebar-width));
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        
        .admin-sidebar.collapsed + .admin-main {
            margin-left: 80px;
            width: calc(100% - 80px);
        }
        
        /* Top Bar */
        .admin-topbar {
            height: var(--admin-topbar-height);
            background: white;
            border-bottom: 1px solid var(--admin-border);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 30px;
            position: sticky;
            top: 0;
            z-index: 999;
        }
        
        .topbar-left {
            display: flex;
            align-items: center;
        }
        
        .sidebar-toggle {
            background: none;
            border: none;
            padding: 8px;
            margin-right: 20px;
            border-radius: 6px;
            cursor: pointer;
            color: var(--admin-secondary);
            transition: all 0.2s ease;
        }
        
        .sidebar-toggle:hover {
            background-color: #f1f5f9;
            color: var(--admin-primary);
        }
        
        .topbar-title {
            font-size: 24px;
            font-weight: 600;
            color: var(--admin-dark);
        }
        
        .topbar-right {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .user-dropdown {
            position: relative;
            display: inline-block;
        }
        
        .user-menu-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            background: none;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .user-menu-btn:hover {
            background-color: #f1f5f9;
        }
        
        .user-avatar {
            width: 32px;
            height: 32px;
            background: linear-gradient(45deg, var(--admin-primary), var(--admin-info));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: 600;
            font-size: 14px;
        }
        
        /* Content Area */
        .admin-content {
            padding: 30px;
        }
        
        /* Page Header */
        .page-header {
            margin-bottom: 30px;
        }
        
        .page-title {
            font-size: 28px;
            font-weight: 700;
            color: var(--admin-dark);
            margin-bottom: 8px;
        }
        
        .page-subtitle {
            color: var(--admin-secondary);
            font-size: 16px;
        }
        
        /* Breadcrumbs */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }
        
        .breadcrumb-item {
            color: var(--admin-secondary);
        }
        
        .breadcrumb-item a {
            color: var(--admin-primary);
            text-decoration: none;
        }
        
        .breadcrumb-separator {
            color: var(--admin-border);
        }
        
        /* Cards */
        .card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.1);
            border: 1px solid var(--admin-border);
            overflow: hidden;
        }
        
        .card-header {
            padding: 20px 24px;
            border-bottom: 1px solid var(--admin-border);
            background-color: #fafbfc;
        }
        
        .card-title {
            font-size: 18px;
            font-weight: 600;
            color: var(--admin-dark);
        }
        
        .card-body {
            padding: 24px;
        }
        
        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all 0.2s ease;
            line-height: 1.5;
        }
        
        .btn-primary {
            background-color: var(--admin-primary);
            color: white;
        }
        
        .btn-primary:hover {
            background-color: var(--admin-primary-dark);
            color: white;
        }
        
        .btn-secondary {
            background-color: #f1f5f9;
            color: var(--admin-secondary);
        }
        
        .btn-secondary:hover {
            background-color: #e2e8f0;
            color: var(--admin-dark);
        }
        
        .btn-success {
            background-color: var(--admin-success);
            color: white;
        }
        
        .btn-warning {
            background-color: var(--admin-warning);
            color: white;
        }
        
        .btn-danger {
            background-color: var(--admin-danger);
            color: white;
        }
        
        .btn-sm {
            padding: 6px 12px;
            font-size: 12px;
        }
        
        /* Alerts */
        .alert {
            padding: 16px 20px;
            border-radius: 8px;
            margin-bottom: 20px;
            border: 1px solid;
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
        
        .alert-warning {
            background-color: #fffbeb;
            border-color: #fed7aa;
            color: #d97706;
        }
        
        .alert-info {
            background-color: #f0f9ff;
            border-color: #bae6fd;
            color: #0284c7;
        }
        
        /* Forms */
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: var(--admin-dark);
        }
        
        .form-control {
            width: 100%;
            padding: 10px 14px;
            border: 1px solid var(--admin-border);
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.2s ease;
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--admin-primary);
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        /* Tables */
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        
        .table th,
        .table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid var(--admin-border);
        }
        
        .table th {
            background-color: #fafbfc;
            font-weight: 600;
            color: var(--admin-dark);
        }
        
        .table tbody tr:hover {
            background-color: #f8fafc;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .admin-sidebar {
                transform: translateX(-100%);
            }
            
            .admin-sidebar.mobile-open {
                transform: translateX(0);
            }
            
            .admin-main {
                margin-left: 0;
                width: 100%;
            }
            
            .admin-content {
                padding: 20px;
            }
        }
        
        /* Utilities */
        .text-center { text-align: center; }
        .text-right { text-align: right; }
        .text-muted { color: var(--admin-secondary); }
        .text-success { color: var(--admin-success); }
        .text-warning { color: var(--admin-warning); }
        .text-danger { color: var(--admin-danger); }
        .text-info { color: var(--admin-info); }
        
        .mb-0 { margin-bottom: 0; }
        .mb-1 { margin-bottom: 0.25rem; }
        .mb-2 { margin-bottom: 0.5rem; }
        .mb-3 { margin-bottom: 1rem; }
        .mb-4 { margin-bottom: 1.5rem; }
        .mb-5 { margin-bottom: 3rem; }
        
        .mt-0 { margin-top: 0; }
        .mt-1 { margin-top: 0.25rem; }
        .mt-2 { margin-top: 0.5rem; }
        .mt-3 { margin-top: 1rem; }
        .mt-4 { margin-top: 1.5rem; }
        .mt-5 { margin-top: 3rem; }
        
        .d-flex { display: flex; }
        .align-items-center { align-items: center; }
        .justify-content-between { justify-content: space-between; }
        .gap-2 { gap: 0.5rem; }
        .gap-3 { gap: 1rem; }
    </style>
    
    @stack('head')
</head>
<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <div class="sidebar-header">
                <a href="{{ route('admin.dashboard') }}" class="sidebar-logo">
                    Admin Panel
                </a>
            </div>
            
            <nav class="sidebar-nav">
                <div class="nav-section">
                    <div class="nav-section-title">Main</div>
                    <div class="nav-item">
                        <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2H5a2 2 0 00-2-2z"></path>
                            </svg>
                            Dashboard
                        </a>
                    </div>
                </div>
                
                <div class="nav-section">
                    <div class="nav-section-title">Content Management</div>
                    <div class="nav-item">
                        <a href="{{ route('admin.content.index') }}" class="nav-link {{ request()->routeIs('admin.content*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Content Sections
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ route('admin.pages.index') }}" class="nav-link {{ request()->routeIs('admin.pages*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Pages & SEO
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ route('admin.media.index') }}" class="nav-link {{ request()->routeIs('admin.media*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Media Library
                        </a>
                    </div>
                </div>
                
                @if(Auth::guard('admin')->user()->isSuperAdmin())
                <div class="nav-section">
                    <div class="nav-section-title">Administration</div>
                    <div class="nav-item">
                        <a href="{{ route('admin.settings.index') }}" class="nav-link {{ request()->routeIs('admin.settings*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                            Settings
                        </a>
                    </div>
                    <div class="nav-item">
                        <a href="{{ route('admin.settings.users') }}" class="nav-link {{ request()->routeIs('admin.settings.users*') ? 'active' : '' }}">
                            <svg class="nav-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                            </svg>
                            User Management
                        </a>
                    </div>
                </div>
                @endif
            </nav>
        </aside>
        
        <!-- Main Content -->
        <main class="admin-main">
            <!-- Top Bar -->
            <header class="admin-topbar">
                <div class="topbar-left">
                    <button class="sidebar-toggle" onclick="toggleSidebar()">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                    <h1 class="topbar-title">@yield('page-title', 'Admin Panel')</h1>
                </div>
                
                <div class="topbar-right">
                    <a href="{{ url('/') }}" class="btn btn-secondary btn-sm" target="_blank">
                        <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                        </svg>
                        View Site
                    </a>
                    
                    <div class="user-dropdown">
                        <button class="user-menu-btn" onclick="toggleUserMenu()">
                            <div class="user-avatar">
                                {{ substr(Auth::guard('admin')->user()->name, 0, 1) }}
                            </div>
                            <span>{{ Auth::guard('admin')->user()->name }}</span>
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                        
                        <div class="user-menu" id="userMenu" style="display: none; position: absolute; top: 100%; right: 0; background: white; border: 1px solid var(--admin-border); border-radius: 8px; box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); min-width: 200px; z-index: 1000;">
                            <div style="padding: 10px 16px; border-bottom: 1px solid var(--admin-border); font-size: 12px; color: var(--admin-secondary);">
                                {{ Auth::guard('admin')->user()->role === 'super_admin' ? 'Super Admin' : 'Admin' }}
                            </div>
                            <a href="{{ route('admin.profile') }}" style="display: block; padding: 12px 16px; color: var(--admin-dark); text-decoration: none; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#f8fafc'" onmouseout="this.style.backgroundColor='transparent'">
                                Profile Settings
                            </a>
                            <form method="POST" action="{{ route('admin.logout') }}" style="margin: 0;">
                                @csrf
                                <button type="submit" style="width: 100%; text-align: left; padding: 12px 16px; background: none; border: none; color: var(--admin-danger); cursor: pointer; transition: background-color 0.2s;" onmouseover="this.style.backgroundColor='#fef2f2'" onmouseout="this.style.backgroundColor='transparent'">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>
            
            <!-- Content Area -->
            <div class="admin-content">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
                
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul style="margin: 0; padding-left: 20px;">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                
                @yield('content')
            </div>
        </main>
    </div>
    
    <script>
        // Toggle sidebar
        function toggleSidebar() {
            const sidebar = document.getElementById('adminSidebar');
            sidebar.classList.toggle('collapsed');
        }
        
        // Toggle user menu
        function toggleUserMenu() {
            const menu = document.getElementById('userMenu');
            menu.style.display = menu.style.display === 'none' ? 'block' : 'none';
        }
        
        // Close user menu when clicking outside
        document.addEventListener('click', function(event) {
            const userDropdown = document.querySelector('.user-dropdown');
            const userMenu = document.getElementById('userMenu');
            
            if (!userDropdown.contains(event.target)) {
                userMenu.style.display = 'none';
            }
        });
        
        // Mobile sidebar toggle
        function toggleMobileSidebar() {
            const sidebar = document.getElementById('adminSidebar');
            sidebar.classList.toggle('mobile-open');
        }
        
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
        
        // CSRF token setup for AJAX requests
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        // Global AJAX setup
        if (typeof $ !== 'undefined') {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': token
                }
            });
        }
    </script>
    
    @stack('scripts')
</body>
</html>