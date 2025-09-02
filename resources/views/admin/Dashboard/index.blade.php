@extends('layouts.app')

@section('content')
    <div class="dashboard-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-content">
                <h2 class="page-title">Admin Dashboard</h2>
                <p class="page-subtitle">Overview of your platform's key metrics and management tools</p>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="dashboard-content">
            <!-- Left Side - Toggle Stat Visibility -->
            <div class="stats-visibility-section">
                <div class="stats-visibility-container">
                    <h2>Toggle Stat Visibility</h2>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <form action="{{ route('toggle-visibility') }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php
                            use App\Models\Stat;
                            $stats = Stat::all()->keyBy('key');
                        @endphp

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="visible_job_seekers" id="visible_job_seekers"
                                    {{ $stats['job_seekers']->visible ? 'checked' : '' }}>
                                <label class="form-check-label" for="visible_job_seekers">
                                    Show Job Seekers
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="visible_companies" id="visible_companies"
                                    {{ $stats['companies']->visible ? 'checked' : '' }}>
                                <label class="form-check-label" for="visible_companies">
                                    Show Companies
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="visible_profiles" id="visible_profiles"
                                    {{ $stats['profiles']->visible ? 'checked' : '' }}>
                                <label class="form-check-label" for="visible_profiles">
                                    Show Profiles
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="visible_connections" id="visible_connections"
                                    {{ $stats['connections']->visible ? 'checked' : '' }}>
                                <label class="form-check-label" for="visible_connections">
                                    Show Connections
                                </label>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-update">Update Visibility</button>
                    </form>
                </div>
            </div>

            <!-- Right Side - Stats Cards -->
            <div class="stats-section">
                <div class="stats-row">
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                            <i class="fas fa-video"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">{{ $videos->count() }}</div>
                            <div class="stat-label">Total Videos</div>
                            <a href="{{ route('admin.videos.index') }}" class="stat-link">Manage Videos</a>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">{{ $stats->count() }}</div>
                            <div class="stat-label">Welcome Stats</div>
                            <a href="{{ route('admin.welcome_stats.index') }}" class="stat-link">Manage Stats</a>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">
                            <i class="fas fa-comment-alt"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">{{ $testimonials->count() }}</div>
                            <div class="stat-label">Testimonials</div>
                            <a href="{{ route('admin.testimonials.index') }}" class="stat-link">Manage Testimonials</a>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon" style="background: linear-gradient(135deg, #ff9a8b, #ff6a88);">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="stat-info">
                            <div class="stat-value">{{ $galleries->count() }}</div>
                            <div class="stat-label">Gallery Images</div>
                            <a href="{{ route('admin.gallery.index') }}" class="stat-link">Manage Gallery</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>

        /* Page Header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .header-content .page-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            background: linear-gradient(135deg, #fff, #e2e8f0);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .page-subtitle {
            opacity: 0.8;
            font-size: 1rem;
            color: #a1a1aa;
        }

        /* Main Content Layout */
        .dashboard-content {
            display: flex;
            gap: 2rem;
            align-items: flex-start;
        }

        .stats-visibility-section {
            flex: 0 0 350px;
        }

        .stats-section {
            flex: 1;
        }

        /* Stats Visibility Section */
        .stats-visibility-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 2rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .stats-visibility-container h2 {
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            color: white;
            text-align: center;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .stats-visibility-container h2::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 3px;
        }

        .form-group {
            margin-bottom: 1.25rem;
        }

        .form-check {
            display: flex;
            align-items: center;
            padding: 0.75rem 1rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .form-check:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .form-check-input {
            width: 1.25rem;
            height: 1.25rem;
            margin-right: 0.75rem;
            cursor: pointer;
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .form-check-input:checked {
            background-color: #667eea;
            border-color: #667eea;
        }

        .form-check-label {
            cursor: pointer;
            font-weight: 500;
            color: #e5e7eb;
            flex: 1;
        }

        .btn-update {
            display: block;
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 1.5rem;
        }

        .btn-update:hover {
            background: linear-gradient(135deg, #5a6fd1, #674399);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        /* Stats Cards Section */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            padding: 1.5rem;
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            gap: 1rem;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
            background: rgba(255, 255, 255, 0.15);
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
            flex-shrink: 0;
        }

        .stat-info {
            flex: 1;
        }

        .stat-value {
            font-size: 1.8rem;
            font-weight: 700;
            color: white;
            margin: 0;
            line-height: 1;
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.5rem;
            color: #d1d5db;
        }

        .stat-link {
            display: inline-block;
            margin-top: 0.75rem;
            color: #667eea;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .stat-link:hover {
            color: #a5b4fc;
            text-decoration: underline;
        }

        .alert {
            padding: 0.75rem 1.25rem;
            margin-bottom: 1.5rem;
            border-radius: 8px;
            font-size: 0.9rem;
        }

        .alert-success {
            background-color: rgba(74, 222, 128, 0.2);
            border: 1px solid rgba(74, 222, 128, 0.3);
            color: #4ade80;
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .dashboard-content {
                flex-direction: column;
            }

            .stats-visibility-section {
                flex: 1;
                width: 100%;
            }

            .stats-section {
                width: 100%;
            }
        }

        @media (max-width: 768px) {
            .dashboard-container {
                padding: 1.5rem;
            }

            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .stats-row {
                grid-template-columns: 1fr 1fr;
            }

            .stats-visibility-container {
                padding: 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .stats-row {
                grid-template-columns: 1fr;
            }

            .stats-visibility-container {
                padding: 1.25rem;
            }

            .form-check {
                padding: 0.5rem;
            }
        }
    </style>

    <script>
        // Search functionality (if needed)
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            if (searchInput) {
                searchInput.addEventListener('keyup', function() {
                    const searchTerm = this.value.toLowerCase();
                    const rows = document.querySelectorAll('.table-row');

                    rows.forEach(row => {
                        const title = row.dataset.title;

                        if (title.includes(searchTerm)) {
                            row.classList.remove('hidden');
                        } else {
                            row.classList.add('hidden');
                        }
                    });
                });
            }
        });
    </script>
@endsection
