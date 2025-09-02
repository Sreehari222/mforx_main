<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar Styles */
        .sidebar {
            width: 280px;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-right: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            z-index: 1000;
        }

        .sidebar.collapsed {
            width: 70px;
        }

        .sidebar-header {
            padding: 2rem 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
            font-size: 1.25rem;
            font-weight: 700;
            transition: opacity 0.3s ease;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #ff6b6b, #ee5a24);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .sidebar.collapsed .logo-text {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .toggle-btn {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            color: white;
            width: 35px;
            height: 35px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .toggle-btn:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        /* Navigation Styles */
        .nav-menu {
            padding: 1rem 0;
            list-style: none;
        }

        .nav-item {
            margin: 0.5rem 1rem;
        }

        .nav-link {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 1rem 1.25rem;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.1), transparent);
            transition: left 0.5s ease;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.15);
            color: white;
            transform: translateX(5px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }

        .nav-link:hover::before {
            left: 100%;
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.25);
            color: white;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            border-left: 4px solid #fff;
        }

        .nav-icon {
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .nav-text {
            font-weight: 500;
            transition: opacity 0.3s ease;
        }

        .sidebar.collapsed .nav-text {
            opacity: 0;
            width: 0;
            overflow: hidden;
        }

        .sidebar.collapsed .nav-link {
            justify-content: center;
            padding: 1rem;
        }

        /* Main Content Styles */
        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            margin: 1rem;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .topbar {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            padding: 1.5rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .page-title {
            color: white;
            font-size: 1.5rem;
            font-weight: 600;
        }

        .user-info {
            display: flex;
            align-items: center;
            gap: 12px;
            color: white;
        }

        .user-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
        }

        .content-area {
            flex: 1;
            padding: 2rem;
            color: white;
        }

        /* Welcome Card */
        .welcome-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #fff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .welcome-subtitle {
            opacity: 0.8;
            font-size: 1.1rem;
        }

        /* Stats Grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
        }

        .stat-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: white;
            margin-bottom: 1rem;
        }

        .stat-title {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-bottom: 0.5rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .sidebar {
                width: 70px;
            }

            .sidebar .nav-text,
            .sidebar .logo-text {
                display: none;
            }

            .main-content {
                margin: 0.5rem;
            }

            .content-area {
                padding: 1rem;
            }
        }

        /* Animation for page transitions */
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Custom Scrollbar */
        .sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.1);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.3);
            border-radius: 2px;
        }

        /* Logout Button */
        .logout-section {
            padding: 1rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }

        .logout-btn {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 1rem 1.25rem;
            background: rgba(255, 255, 255, 0.1);
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            border-radius: 12px;
            border: none;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .logout-btn:hover {
            background: rgba(255, 77, 77, 0.2);
            color: #ff4d4d;
        }
    </style>
</head>

<body>
    <div class="admin-container">
        <!-- Sidebar -->
        <nav class="sidebar" id="sidebar">
            <div class="sidebar-header">
                <a href="{{route('dashboard') }}" class="logo">
                    <div class="logo-icon">
                        <i class="fas fa-crown"></i>
                    </div>
                    <span class="logo-text">Admin Panel</span>
                </a>

                <button class="toggle-btn" onclick="toggleSidebar()">
                    <i class="fas fa-bars"></i>
                </button>
            </div>

            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="{{ route('admin.videos.index') }}"
                        class="nav-link {{ request()->routeIs('admin.videos.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-video"></i>
                        </div>
                        <span class="nav-text">Main Page Video</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.welcomevideos.index') }}"
                        class="nav-link {{ request()->routeIs('admin.welcomevideos.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-play-circle"></i>
                        </div>
                        <span class="nav-text">Welcome Videos</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.admin.stats.index') }}"
                        class="nav-link {{ request()->routeIs('admin.admin.stats.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <span class="nav-text">Statistics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.welcome_stats.index') }}"
                        class="nav-link {{ request()->routeIs('admin.welcome_stats.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <span class="nav-text">Welcome Stats</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.testimonials.index') }}"
                        class="nav-link {{ request()->routeIs('admin.testimonials.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <span class="nav-text">Testimonials</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.gallery.index') }}"
                        class="nav-link {{ request()->routeIs('admin.gallery.*') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-images"></i>
                        </div>
                        <span class="nav-text">Gallery</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('partners.index') }}"
                        class="nav-link {{ request()->routeIs('admin.partners.create') ? 'active' : '' }}">
                        <div class="nav-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <span class="nav-text">Add Partners</span>
                    </a>
                </li>
            </ul>

            <!-- Logout Section -->
            <div class="logout-section">
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" class="logout-btn">
                        <div class="nav-icon">
                            <i class="fas fa-sign-out-alt"></i>
                        </div>
                        <span class="nav-text">Logout</span>
                    </button>
                </form>
            </div>
        </nav>

        <!-- Main Content -->
        <main class="main-content">
            <div class="topbar">
                <h1 class="page-title">
                    @if (request()->routeIs('dashboard'))
                        Dashboard
                    @elseif(request()->routeIs('admin.videos.*'))
                        Video Management
                    @elseif(request()->routeIs('admin.welcomevideos.*'))
                        Welcome Videos
                    @elseif(request()->routeIs('admin.admin.stats.*'))
                        Statistics
                    @elseif(request()->routeIs('admin.welcome_stats.*'))
                        Welcome Stats
                    @elseif(request()->routeIs('admin.testimonials.*'))
                        Testimonials
                    @elseif(request()->routeIs('admin.gallery.*'))
                        Gallery Management
                    @else
                        Admin Panel
                    @endif
                </h1>
                <div class="user-info">
                    <span>Welcome, {{ auth()->user()->name ?? 'Admin' }}</span>
                    <div class="user-avatar">
                        <i class="fas fa-user"></i>
                    </div>
                </div>
            </div>

            <div class="content-area fade-in">
                @yield('content')
            </div>
        </main>
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('collapsed');

            // Store sidebar state in localStorage if needed
            if (typeof(Storage) !== "undefined") {
                const isCollapsed = sidebar.classList.contains('collapsed');
                localStorage.setItem('sidebarCollapsed', isCollapsed);
            }
        }

        // Restore sidebar state on page load
        document.addEventListener('DOMContentLoaded', function() {
            if (typeof(Storage) !== "undefined") {
                const sidebarCollapsed = localStorage.getItem('sidebarCollapsed');
                if (sidebarCollapsed === 'true') {
                    document.getElementById('sidebar').classList.add('collapsed');
                }
            }
        });

        // Auto-collapse sidebar on mobile
        function checkScreenSize() {
            const sidebar = document.getElementById('sidebar');
            if (window.innerWidth <= 768) {
                sidebar.classList.add('collapsed');
            }
        }

        window.addEventListener('resize', checkScreenSize);
        checkScreenSize(); // Check on initial load

        // Add smooth hover effects
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('mouseenter', function() {
                if (!this.classList.contains('active')) {
                    this.style.transform = 'translateX(5px)';
                }
            });

            link.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    </script>
</body>

</html>
