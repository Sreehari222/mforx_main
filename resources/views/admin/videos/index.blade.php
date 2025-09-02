@extends('layouts.app')

@section('content')
    <div class="video-management-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-content">
                <h2 class="page-title">Video Management</h2>
                <p class="page-subtitle">Manage and organize your video content</p>
            </div>
            <a href="{{ route('admin.videos.create') }}" class="add-btn">
                <i class="fas fa-plus"></i>
                <span>Add New Video</span>
            </a>
        </div>

        <!-- Stats Cards -->
        <div class="stats-row">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                    <i class="fas fa-video"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-value">{{ count($videos) }}</div>
                    <div class="stat-label">Total Videos</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #f093fb, #f5576c);">
                    <i class="fas fa-play-circle"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-value">{{ $videos->sum('views') ?? '0' }}</div>
                    <div class="stat-label">Total Views</div>
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <div class="stat-value">{{ $videos->where('created_at', '>=', now()->subDays(7))->count() }}</div>
                    <div class="stat-label">This Week</div>
                </div>
            </div>
        </div>

        <!-- Videos Table -->
        <div class="table-container">
            <div class="table-header">
                <h3 class="table-title">
                    <i class="fas fa-list"></i>
                    Video Library
                </h3>
                <div class="table-actions">
                    <div class="search-box">
                        <i class="fas fa-search"></i>
                        <input type="text" placeholder="Search videos..." id="searchInput">
                    </div>
                </div>
            </div>

            @if (count($videos) > 0)
                <div class="modern-table">
                    <div class="table-scroll">
                        <table class="video-table">
                            <thead>
                                <tr>
                                    <th>Thumbnail</th>
                                    <th>Video Details</th>
                                    <th>Type</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($videos as $video)
                                    <tr class="table-row" data-title="{{ strtolower($video->title) }}"
                                        data-designation="{{ strtolower($video->designation) }}">
                                        <td class="thumbnail-cell">
                                            <div class="thumbnail-wrapper">
                                                <img src="{{ asset($video->thumbnail) }}" alt="{{ $video->title }}"
                                                    class="video-thumbnail">
                                                <div class="play-overlay">
                                                    <i class="fas fa-play"></i>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="details-cell">
                                            <div class="video-details">
                                                <h4 class="video-title">{{ $video->title }}</h4>
                                                <div class="video-meta">
                                                    <span class="meta-item">
                                                        <i class="fas fa-calendar"></i>
                                                        {{ $video->created_at->format('M d, Y') }}
                                                    </span>
                                                    @if (isset($video->views))
                                                        <span class="meta-item">
                                                            <i class="fas fa-eye"></i>
                                                            {{ number_format($video->views) }} views
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td class="designation-cell">
                                            <span class="designation-badge">{{ $video->type }}</span>
                                        </td>
                                        <td class="actions-cell">
                                            <div class="action-buttons">
                                                <a href="{{ route('admin.videos.edit', $video->id) }}"
                                                    class="action-btn edit-btn" title="Edit Video">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <!-- Delete Form -->
                                                <form id="delete-form-{{ $video->id }}"
                                                    action="{{ route('admin.videos.destroy', $video->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="action-btn delete-btn"
                                                        title="Delete Video" onclick="confirmDelete({{ $video->id }})">
                                                        <i class="fas fa-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @else
                <div class="empty-state">
                    <div class="empty-icon">
                        <i class="fas fa-video-slash"></i>
                    </div>
                    <h3 class="empty-title">No Videos Found</h3>
                    <p class="empty-text">Start building your video library by adding your first video.</p>
                    <a href="{{ route('admin.videos.create') }}" class="empty-action-btn">
                        <i class="fas fa-plus"></i>
                        Add Your First Video
                    </a>
                </div>
            @endif
        </div>
    </div>

    <style>
        .video-management-container {
            color: white;
        }

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
        }

        .add-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .add-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Stats Row */
        .stats-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
            margin-bottom: 2rem;
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
        }

        .stat-label {
            font-size: 0.9rem;
            opacity: 0.8;
            margin-top: 0.25rem;
        }

        /* Table Container */
        .table-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
        }

        .table-header {
            padding: 1.5rem 2rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 1rem;
        }

        .table-title {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.25rem;
            font-weight: 600;
            color: white;
            margin: 0;
        }

        .search-box {
            position: relative;
            display: flex;
            align-items: center;
        }

        .search-box i {
            position: absolute;
            left: 12px;
            color: rgba(255, 255, 255, 0.6);
            z-index: 1;
        }

        .search-box input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 8px 12px 8px 35px;
            color: white;
            font-size: 0.9rem;
            width: 250px;
            transition: all 0.3s ease;
        }

        .search-box input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        .search-box input:focus {
            outline: none;
            border-color: rgba(102, 126, 234, 0.6);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        /* Modern Table */
        .table-scroll {
            overflow-x: auto;
        }

        .video-table {
            width: 100%;
            border-collapse: collapse;
        }

        .video-table th {
            background: rgba(255, 255, 255, 0.05);
            color: white;
            font-weight: 600;
            padding: 1rem 1.5rem;
            text-align: left;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .table-row {
            transition: all 0.3s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.05);
        }

        .table-row:hover {
            background: rgba(255, 255, 255, 0.05);
            transform: scale(1.01);
        }

        .video-table td {
            padding: 1.5rem;
            vertical-align: middle;
        }

        /* Thumbnail Cell */
        .thumbnail-wrapper {
            position: relative;
            width: 80px;
            height: 60px;
            border-radius: 8px;
            overflow: hidden;
            cursor: pointer;
        }

        .video-thumbnail {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .play-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: all 0.3s ease;
        }

        .play-overlay i {
            color: white;
            font-size: 1.5rem;
        }

        .thumbnail-wrapper:hover .play-overlay {
            opacity: 1;
        }

        .thumbnail-wrapper:hover .video-thumbnail {
            transform: scale(1.1);
        }

        /* Details Cell */
        .video-details {
            min-width: 200px;
        }

        .video-title {
            color: white;
            font-size: 1rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            line-height: 1.3;
        }

        .video-meta {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
            font-size: 0.85rem;
            opacity: 0.8;
        }

        .meta-item {
            display: flex;
            align-items: center;
            gap: 4px;
        }

        .meta-item i {
            font-size: 0.75rem;
        }

        /* Designation Cell */
        .designation-badge {
            background: linear-gradient(135deg, rgba(102, 126, 234, 0.3), rgba(118, 75, 162, 0.3));
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 500;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        /* Actions Cell */
        .action-buttons {
            display: flex;
            gap: 8px;
        }

        .action-btn {
            width: 35px;
            height: 35px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: all 0.3s ease;
            font-size: 0.9rem;
        }

        .view-btn {
            background: rgba(76, 175, 80, 0.2);
            color: #4caf50;
            border: 1px solid rgba(76, 175, 80, 0.3);
        }

        .view-btn:hover {
            background: rgba(76, 175, 80, 0.3);
            color: #4caf50;
            transform: scale(1.1);
        }

        .edit-btn {
            background: rgba(255, 193, 7, 0.2);
            color: #ffc107;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }

        .edit-btn:hover {
            background: rgba(255, 193, 7, 0.3);
            color: #ffc107;
            transform: scale(1.1);
        }

        .delete-btn {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
            border: 1px solid rgba(244, 67, 54, 0.3);
        }

        .delete-btn:hover {
            background: rgba(244, 67, 54, 0.3);
            transform: scale(1.1);
        }

        /* Empty State */
        .empty-state {
            text-align: center;
            padding: 4rem 2rem;
        }

        .empty-icon {
            font-size: 4rem;
            color: rgba(255, 255, 255, 0.3);
            margin-bottom: 1.5rem;
        }

        .empty-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: white;
            margin-bottom: 0.5rem;
        }

        .empty-text {
            opacity: 0.8;
            margin-bottom: 2rem;
            font-size: 1rem;
        }

        .empty-action-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .empty-action-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
            color: white;
            text-decoration: none;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .page-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .stats-row {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                align-items: flex-start;
            }

            .search-box input {
                width: 100%;
            }

            .video-table th,
            .video-table td {
                padding: 1rem 0.75rem;
            }

            .video-details {
                min-width: 150px;
            }

            .video-title {
                font-size: 0.9rem;
            }

            .action-buttons {
                flex-direction: column;
                gap: 4px;
            }
        }

        /* Hidden class for search functionality */
        .hidden {
            display: none !important;
        }
    </style>

    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('.table-row');

            rows.forEach(row => {
                const title = row.dataset.title;
                const designation = row.dataset.designation;

                if (title.includes(searchTerm) || designation.includes(searchTerm)) {
                    row.classList.remove('hidden');
                } else {
                    row.classList.add('hidden');
                }
            });
        });

        // Delete confirmation
        function confirmDelete(videoId) {
            if (confirm('Are you sure you want to delete this video? This action cannot be undone.')) {
                document.getElementById(`delete-form-${videoId}`).submit();
            }
        }

        // Add loading animation for thumbnails
        document.querySelectorAll('.video-thumbnail').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });

            img.addEventListener('error', function() {
                this.src =
                    'data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="80" height="60" viewBox="0 0 80 60"><rect width="80" height="60" fill="%23f0f0f0"/><text x="40" y="35" text-anchor="middle" font-family="Arial" font-size="12" fill="%23999">No Image</text></svg>';
            });
        });
    </script>
@endsection
