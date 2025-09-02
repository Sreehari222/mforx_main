@extends('layouts.app')

@section('content')
<div class="videos-management-container">
    <!-- Page Header -->
    <div class="page-header">
        <div class="header-content">
            <h2 class="page-title">Edit Welcome Video</h2>
            <p class="page-subtitle">Update your welcome video details</p>
        </div>
        <a href="{{ route('admin.welcomevideos.index') }}" class="add-btn back-btn">
            <i class="fas fa-arrow-left"></i>
            Back to Videos
        </a>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        @if ($errors->any())
            <div class="error-message">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('admin.welcomevideos.update', $welcomevideo->id) }}" method="POST" enctype="multipart/form-data" class="video-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Video Title</label>
                <input type="text" name="title" id="title" placeholder="Enter video title" value="{{ old('title', $welcomevideo->title) }}" required class="@error('title') is-invalid @enderror">
                @error('title')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="position">Position (optional)</label>
                <input type="text" name="position" id="position" placeholder="Enter position (e.g., 1, 2, 3)" value="{{ old('position', $welcomevideo->position) }}" class="@error('position') is-invalid @enderror">
                @error('position')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="video_url">Video URL (YouTube or file URL)</label>
                <input type="text" name="video_url" id="video_url" placeholder="Enter YouTube or file URL" value="{{ old('video_url', $welcomevideo->video_url) }}" required class="@error('video_url') is-invalid @enderror">
                @error('video_url')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group file-upload-group">
                <label for="thumbnail">Thumbnail Image (optional)</label>
                <div class="file-upload-wrapper">
                    <input type="file" name="thumbnail" id="thumbnail" class="file-input @error('thumbnail') is-invalid @enderror" accept="image/*">
                    <span class="file-upload-text">Choose an image...</span>
                    <button type="button" class="file-upload-btn">
                        <i class="fas fa-upload"></i>
                        Browse
                    </button>
                </div>
                @error('thumbnail')
                    <span class="error-text">{{ $message }}</span>
                @enderror
                @if ($welcomevideo->thumbnail)
                    <div class="thumbnail-preview">
                        <p>Current Thumbnail:</p>
                        <img src="{{ asset('storage/' . $welcomevideo->thumbnail) }}" alt="Current Thumbnail" class="thumbnail-img">
                    </div>
                @endif
            </div>

            <button type="submit" class="submit-btn">
                <i class="fas fa-save"></i>
                Update Video
            </button>
        </form>
    </div>
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

    /* Form Container */
    .form-container {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 16px;
        border: 1px solid rgba(255, 255, 255, 0.2);
        padding: 2rem;
        max-width: 600px;
        margin: 0 auto;
    }

    .video-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .form-group label {
        font-size: 1rem;
        font-weight: 600;
        color: white;
    }

    .form-group input {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        padding: 10px 12px;
        color: white;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .form-group input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .form-group input:focus {
        outline: none;
        border-color: rgba(102, 126, 234, 0.6);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-group input.is-invalid {
        border-color: rgba(244, 67, 54, 0.6);
        box-shadow: 0 0 0 3px rgba(244, 67, 54, 0.1);
    }

    /* File Upload Styling */
    .file-upload-group {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }

    .file-upload-wrapper {
        position: relative;
        display: flex;
        align-items: center;
        gap: 0.5rem;
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        padding: 10px 12px;
        transition: all 0.3s ease;
    }

    .file-input {
        position: absolute;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
        z-index: 2;
    }

    .file-upload-text {
        flex: 1;
        color: rgba(255, 255, 255, 0.6);
        font-size: 0.9rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .file-upload-btn {
        display: flex;
        align-items: center;
        gap: 6px;
        background: linear-gradient(135deg, #667eea, #764ba2);
        color: white;
        padding: 8px 16px;
        border-radius: 8px;
        border: none;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        z-index: 1;
    }

    .file-upload-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .file-upload-wrapper:hover,
    .file-upload-wrapper:focus-within {
        border-color: rgba(102, 126, 234, 0.6);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .file-input.is-invalid ~ .file-upload-btn,
    .file-input.is-invalid ~ .file-upload-text,
    .file-input.is-invalid {
        border-color: rgba(244, 67, 54, 0.6);
    }

    .file-input.is-invalid ~ .file-upload-text {
        color: #f44336;
    }

    .thumbnail-preview {
        margin-top: 1rem;
    }

    .thumbnail-preview p {
        font-size: 0.9rem;
        opacity: 0.8;
        margin-bottom: 0.5rem;
    }

    .thumbnail-img {
        width: 150px;
        height: auto;
        border-radius: 8px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .error-text {
        color: #f44336;
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    /* Submit Button */
    .submit-btn {
        display: flex;
        align-items: center;
        gap: 8px;
        background: linear-gradient(135deg, #4facfe, #00f2fe);
        color: white;
        padding: 12px 24px;
        border-radius: 12px;
        border: none;
        font-weight: 600;
        cursor: pointer;
        transition: all 0.3s ease;
        align-self: flex-start;
    }

    .submit-btn:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(79, 172, 254, 0.4);
    }

    /* Success and Error Messages */
    .success-message {
        background: rgba(76, 175, 80, 0.2);
        color: #4caf50;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: 1px solid rgba(76, 175, 80, 0.3);
        text-align: center;
    }

    .error-message {
        background: rgba(244, 67, 54, 0.2);
        color: #f44336;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1rem;
        border: 1px solid rgba(244, 67, 54, 0.3);
        text-align: center;
    }

    .error-message ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .error-message li {
        font-size: 0.9rem;
        margin-bottom: 0.5rem;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .page-header {
            flex-direction: column;
            align-items: flex-start;
            gap: 1rem;
        }

        .form-container {
            padding: 1.5rem;
        }

        .submit-btn {
            align-self: stretch;
            justify-content: center;
        }

        .file-upload-wrapper {
            flex-direction: column;
            align-items: flex-start;
        }

        .file-upload-btn {
            width: 100%;
            justify-content: center;
        }

        .file-upload-text {
            width: 100%;
            text-align: center;
        }
    }
</style>

<script>
    // Update file input text when a file is selected
    document.getElementById('thumbnail').addEventListener('change', function() {
        const fileName = this.files.length > 0 ? this.files[0].name : 'Choose an image...';
        this.parentElement.querySelector('.file-upload-text').textContent = fileName;
    });
</script>
@endsection
