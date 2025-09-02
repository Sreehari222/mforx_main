@extends('layouts.app')

@section('content')
<div class="videos-management-container">
    <!-- Page Header -->
    <div class="page-header">
        <div class="header-content">
            <h2 class="page-title">Welcome Videos</h2>
            <p class="page-subtitle">Manage and organize your welcome videos</p>
        </div>
        <a href="{{ route('admin.welcomevideos.create') }}" class="add-btn">
            <i class="fas fa-plus"></i>
            Add Video
        </a>
    </div>

    <!-- Videos Grid -->
    @if(session('success'))
        <div class="success-message">
            {{ session('success') }}
        </div>
    @endif

    @if(count($videos) > 0)
        <div class="videos-grid">
            @foreach($videos as $video)
                <div class="video-card" data-title="{{ strtolower($video->title) }}">
                    <div class="video-thumbnail">
                        <img src="{{ asset('storage/' . $video->thumbnail) }}" alt="{{ $video->title }}" class="thumbnail-img">
                        <a href="{{ $video->video_url }}" target="_blank" class="play-overlay">
                            <i class="fas fa-play"></i>
                        </a>
                    </div>
                    <div class="video-info">
                        <h4 class="video-title">{{ $video->title }}</h4>
                        <p class="video-position">Position: {{ $video->position }}</p>
                        <div class="action-buttons">
                            <a href="{{ route('admin.welcomevideos.edit', $video->id) }}" class="action-btn edit-btn" title="Edit Video">
                                <i class="fas fa-edit"></i>
                            </a>
                            <form action="{{ route('admin.welcomevideos.destroy', $video->id) }}" method="POST" class="delete-form">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="action-btn delete-btn" title="Delete Video" onclick="return confirmDelete({{ $video->id }})">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <div class="empty-state">
            <div class="empty-icon">
                <i class="fas fa-video"></i>
            </div>
            <h3 class="empty-title">No Videos Found</h3>
            <p class="empty-text">Start building your video library by adding your first video.</p>
            <a href="{{ route('admin.welcomevideos.create') }}" class="empty-action-btn">
                <i class="fas fa-plus"></i>
                Add Your First Video
            </a>
        </div>
    @endif
</div>

<style>
    .videos-management-container {
        color: white;
        padding: 2rem;
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

    /* Videos Grid */
    .videos-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 1.5rem;
        margin-bottom: 2rem;
    }

    .video-card {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 16px;
        padding: 1rem;
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
    }

    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
    }

    .video-thumbnail {
        position: relative;
        border-radius: 12px;
        overflow: hidden;
        margin-bottom: 1rem;
    }

    .thumbnail-img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        display: block;
    }

    .play-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.4);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-decoration: none;
    }

    .video-card:hover .play-overlay {
        opacity: 1;
    }

    .play-overlay i {
        color: white;
        font-size: 2rem;
        opacity: 0.8;
    }

    .video-info {
        padding: 0 0.5rem;
    }

    .video-title {
        font-size: 1.1rem;
        font-weight: 600;
        color: white;
        margin-bottom: 0.5rem;
    }

    .video-position {
        font-size: 0.9rem;
        opacity: 0.8;
        margin-bottom: 1rem;
    }

    /* Action Buttons */
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

    .delete-form {
        display: inline;
    }

    /* Success Message */
    .success-message {
        background: rgba(76, 175, 80, 0.2);
        color: #4caf50;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 0;
        border: 1px solid rgba(76, 175, 80, 0.3);
        text-align: center;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
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

        .videos-grid {
            grid-template-columns: 1fr;
        }

        .video-title {
            font-size: 1rem;
        }

        .action-buttons {
            flex-direction: column;
            gap: 4px;
        }
    }
</style>

<script>
    // Delete confirmation
    function confirmDelete(videoId) {
        return confirm('Are you sure you want to delete this video? This action cannot be undone.');
    }
</script>
@endsection
