@extends('layouts.app')

@section('content')
    <div class="premium-form-container">
        <!-- Header Section -->
        <div class="form-header">
            <div class="header-content">
                <div class="title-section">
                    <a href="{{ route('admin.videos.index') }}" class="back-btn">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                    <div>
                        <h1 class="form-title">
                            <i class="fas fa-plus-circle"></i>
                            Add New Video
                        </h1>
                        <p class="form-subtitle">Upload and manage your video content</p>
                    </div>
                </div>
                <div class="form-progress">
                    <div class="progress-circle active">1</div>
                    <div class="progress-line"></div>
                    <div class="progress-circle">2</div>
                </div>
            </div>
        </div>

        <!-- Form Container -->
        <div class="form-wrapper">
            <form action="{{ route('admin.videos.store') }}" method="POST" enctype="multipart/form-data"
                class="premium-form" id="videoForm">
                @csrf

                <!-- Basic Information Section -->
                <div class="form-section">
                    <div class="section-header">
                        <h3><i class="fas fa-info-circle"></i> Basic Information</h3>
                        <p>Enter the basic details for your video</p>
                    </div>

                    <div class="form-grid">
                        <div class="form-group full-width">
                            <label class="form-label">
                                <i class="fas fa-heading"></i>
                                Video Title
                                <span class="required">*</span>
                            </label>
                            <input type="text" name="title" class="form-input" placeholder="Enter video title..."
                                required>
                            <div class="input-helper">Choose a descriptive title for your video</div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-tag"></i>
                                Video Type
                            </label>
                            <div class="select-wrapper">
                                <select name="type" class="form-select" id="videoType">
                                    <option value="self">Self Hosted</option>
                                    <option value="premium">Premium Content</option>
                                </select>

                            </div>
                            <div class="input-helper">Select the type of video content</div>
                        </div>
                    </div>
                </div>

                <!-- Media Upload Section -->
                <div class="form-section">

                    <div class="form-grid">
                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-image"></i>
                                Thumbnail Image
                            </label>
                            <div class="file-upload-area" id="thumbnailUpload">
                                <input type="file" name="thumbnail" class="file-input" id="thumbnailInput"
                                    accept="image/*">
                                <div class="upload-content">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                    <h4>Drop thumbnail here</h4>
                                    <p>or <span class="upload-link">browse files</span></p>
                                    <small>PNG, JPG up to 5MB</small>
                                </div>
                                <div class="file-preview" id="thumbnailPreview"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">
                                <i class="fas fa-video"></i>
                                Video File
                            </label>
                            <div class="file-upload-area" id="videoUpload">
                                <input type="file" name="video_url" class="file-input" id="videoInput" accept="video/*">
                                <div class="upload-content">
                                    <i class="fas fa-film"></i>
                                    <h4>Drop video here</h4>
                                    <p>or <span class="upload-link">browse files</span></p>
                                    <small>MP4, AVI, MOV up to 100MB</small>
                                </div>
                                <div class="file-preview" id="videoPreview"></div>
                            </div>
                        </div>
                    </div>

                    <!-- External Link Option -->
                    <div class="form-group full-width">
                        <label class="form-label">
                            <i class="fas fa-external-link-alt"></i>
                            External Link (Optional)
                        </label>
                        <input type="url" name="external_link" class="form-input"
                            placeholder="https://youtube.com/watch?v=..." id="externalLink">
                        <div class="input-helper">Add YouTube, Vimeo, or other video platform links</div>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="form-actions">
                    <a href="{{ route('admin.videos.index') }}" class="btn btn-secondary">
                        <i class="fas fa-times"></i>
                        Cancel
                    </a>
                    <button type="submit" class="btn btn-primary" id="submitBtn">
                        <i class="fas fa-save"></i>
                        <span>Save Video</span>
                        <div class="btn-loader"></div>
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .premium-form-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 2rem;
            min-height: calc(100vh - 80px);
        }

        /* Header Styles */
        .form-header {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }

        .title-section {
            display: flex;
            align-items: center;
            gap: 1rem;
            flex: 1;
        }

        .back-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 48px;
            height: 48px;
            background: rgba(248, 250, 252, 0.8);
            border-radius: 14px;
            color: #64748b;
            text-decoration: none;
            transition: all 0.3s ease;
            border: 1px solid rgba(226, 232, 240, 0.5);
        }

        .back-btn:hover {
            background: white;
            color: #667eea;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-title {
            font-size: 2rem;
            font-weight: 700;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            margin: 0 0 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .form-title i {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .form-subtitle {
            color: #6b7280;
            margin: 0;
            font-size: 1rem;
        }

        .form-progress {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .progress-circle {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e5e7eb;
            color: #9ca3af;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .progress-circle.active {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }

        .progress-line {
            width: 60px;
            height: 2px;
            background: #e5e7eb;
            border-radius: 1px;
        }

        /* Form Wrapper */
        .form-wrapper {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 24px;
            padding: 2.5rem;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* Form Sections */
        .form-section {
            margin-bottom: 3rem;
        }

        .form-section:last-child {
            margin-bottom: 2rem;
        }

        .section-header {
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid rgba(226, 232, 240, 0.5);
        }

        .section-header h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #374151;
            margin: 0 0 0.5rem 0;
            display: flex;
            align-items: center;
            gap: 0.75rem;
        }

        .section-header p {
            color: #6b7280;
            margin: 0;
        }

        .section-header i {
            color: #667eea;
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1.5rem;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        /* Form Elements */
        .form-group {
            display: flex;
            flex-direction: column;
        }

        .form-label {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.75rem;
            font-size: 0.95rem;
        }

        .form-label i {
            color: #667eea;
            font-size: 0.9rem;
        }

        .required {
            color: #ef4444;
            margin-left: 0.25rem;
        }

        .form-input,
        .form-select {
            padding: 1rem 1.25rem;
            border: 2px solid #e5e7eb;
            border-radius: 12px;
            background: white;
            font-size: 0.95rem;
            transition: all 0.3s ease;
            outline: none;
        }

        .form-input:focus,
        .form-select:focus {
            border-color: #667eea;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            transform: translateY(-1px);
        }

        .select-wrapper {
            position: relative;
        }

        .select-arrow {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: #9ca3af;
            pointer-events: none;
        }

        .input-helper {
            font-size: 0.875rem;
            color: #6b7280;
            margin-top: 0.5rem;
        }

        /* File Upload Areas */
        .file-upload-area {
            position: relative;
            border: 2px dashed #d1d5db;
            border-radius: 16px;
            padding: 2rem;
            text-align: center;
            transition: all 0.3s ease;
            cursor: pointer;
            background: rgba(249, 250, 251, 0.5);
        }

        .file-upload-area:hover {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.05);
        }

        .file-upload-area.dragover {
            border-color: #667eea;
            background: rgba(102, 126, 234, 0.1);
            transform: scale(1.02);
        }

        .file-input {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .upload-content i {
            font-size: 2.5rem;
            color: #9ca3af;
            margin-bottom: 1rem;
        }

        .upload-content h4 {
            font-size: 1.1rem;
            font-weight: 600;
            color: #374151;
            margin: 0 0 0.5rem 0;
        }

        .upload-content p {
            color: #6b7280;
            margin: 0 0 0.5rem 0;
        }

        .upload-link {
            color: #667eea;
            font-weight: 600;
            cursor: pointer;
        }

        .upload-content small {
            color: #9ca3af;
            font-size: 0.875rem;
        }

        /* File Preview */
        .file-preview {
            display: none;
            margin-top: 1rem;
            padding: 1rem;
            background: white;
            border-radius: 8px;
            border: 1px solid #e5e7eb;
        }

        .file-preview.active {
            display: block;
        }

        .preview-item {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .preview-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
        }

        .preview-info h5 {
            margin: 0 0 0.25rem 0;
            font-weight: 600;
            color: #374151;
        }

        .preview-info p {
            margin: 0;
            font-size: 0.875rem;
            color: #6b7280;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            gap: 1rem;
            justify-content: flex-end;
            padding-top: 2rem;
            border-top: 1px solid rgba(226, 232, 240, 0.5);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2rem;
            border-radius: 12px;
            font-weight: 600;
            text-decoration: none;
            border: none;
            cursor: pointer;
            font-size: 0.95rem;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .btn-secondary {
            background: #f8fafc;
            color: #64748b;
            border: 2px solid #e2e8f0;
        }

        .btn-secondary:hover {
            background: #f1f5f9;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
            min-width: 140px;
        }

        .btn-primary:hover:not(.loading) {
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
        }

        .btn-primary.loading {
            pointer-events: none;
        }

        .btn-primary.loading span {
            opacity: 0;
        }

        .btn-loader {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-top: 2px solid white;
            border-radius: 50%;
            animation: spin 1s linear infinite;
            opacity: 0;
        }

        .btn-primary.loading .btn-loader {
            opacity: 1;
        }

        @keyframes spin {
            0% {
                transform: translate(-50%, -50%) rotate(0deg);
            }

            100% {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .premium-form-container {
                padding: 1rem;
            }

            .form-header {
                padding: 1.5rem;
            }

            .header-content {
                flex-direction: column;
                align-items: flex-start;
                gap: 1.5rem;
            }

            .form-title {
                font-size: 1.5rem;
            }

            .form-wrapper {
                padding: 1.5rem;
            }

            .form-grid {
                grid-template-columns: 1fr;
                gap: 1rem;
            }

            .form-actions {
                flex-direction: column-reverse;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('videoForm');
            const submitBtn = document.getElementById('submitBtn');
            const thumbnailInput = document.getElementById('thumbnailInput');
            const videoInput = document.getElementById('videoInput');
            const thumbnailPreview = document.getElementById('thumbnailPreview');
            const videoPreview = document.getElementById('videoPreview');
            const externalLink = document.getElementById('externalLink');

            // File upload handlers
            function setupFileUpload(input, preview, type) {
                const uploadArea = input.closest('.file-upload-area');

                // Click to upload
                uploadArea.addEventListener('click', (e) => {
                    if (e.target === input) return;
                    input.click();
                });

                // Drag and drop
                uploadArea.addEventListener('dragover', (e) => {
                    e.preventDefault();
                    uploadArea.classList.add('dragover');
                });

                uploadArea.addEventListener('dragleave', () => {
                    uploadArea.classList.remove('dragover');
                });

                uploadArea.addEventListener('drop', (e) => {
                    e.preventDefault();
                    uploadArea.classList.remove('dragover');
                    const files = e.dataTransfer.files;
                    if (files.length > 0) {
                        input.files = files;
                        showPreview(files[0], preview, type);
                    }
                });

                // File input change
                input.addEventListener('change', (e) => {
                    if (e.target.files.length > 0) {
                        showPreview(e.target.files[0], preview, type);
                    }
                });
            }

            function showPreview(file, previewElement, type) {
                const uploadContent = previewElement.previousElementSibling;
                uploadContent.style.display = 'none';
                previewElement.classList.add('active');

                const icon = type === 'image' ? 'fas fa-image' : 'fas fa-video';
                const size = (file.size / (1024 * 1024)).toFixed(2) + ' MB';

                previewElement.innerHTML = `
                <div class="preview-item">
                    <div class="preview-icon">
                        <i class="${icon}"></i>
                    </div>
                    <div class="preview-info">
                        <h5>${file.name}</h5>
                        <p>${size} • Ready to upload</p>
                    </div>
                </div>
            `;
            }

            // Setup file uploads
            setupFileUpload(thumbnailInput, thumbnailPreview, 'image');
            setupFileUpload(videoInput, videoPreview, 'video');

            // Form validation and submission
            form.addEventListener('submit', function(e) {
                e.preventDefault();

                // Show loading state
                submitBtn.classList.add('loading');

                // Validate form
                const title = form.querySelector('input[name="title"]').value.trim();
                const hasVideo = videoInput.files.length > 0;
                const hasExternalLink = externalLink.value.trim();

                if (!title) {
                    showError('Please enter a video title');
                    submitBtn.classList.remove('loading');
                    return;
                }

                if (!hasVideo && !hasExternalLink) {
                    showError('Please upload a video file or provide an external link');
                    submitBtn.classList.remove('loading');
                    return;
                }

                // Simulate upload delay (remove in production)
                setTimeout(() => {
                    form.submit();
                }, 1500);
            });

            // External link input handler
            externalLink.addEventListener('input', function() {
                if (this.value.trim()) {
                    videoInput.disabled = true;
                    videoInput.closest('.file-upload-area').style.opacity = '0.5';
                } else {
                    videoInput.disabled = false;
                    videoInput.closest('.file-upload-area').style.opacity = '1';
                }
            });

            // Video input handler
            videoInput.addEventListener('change', function() {
                if (this.files.length > 0) {
                    externalLink.disabled = true;
                    externalLink.style.opacity = '0.5';
                } else {
                    externalLink.disabled = false;
                    externalLink.style.opacity = '1';
                }
            });

            function showError(message) {
                // Create error notification (you can customize this)
                const errorDiv = document.createElement('div');
                errorDiv.className = 'error-notification';
                errorDiv.innerHTML = `
                <div style="background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); color: white; padding: 1rem 2rem; border-radius: 12px; margin-bottom: 1rem; display: flex; align-items: center; gap: 1rem; animation: slideInFromTop 0.3s ease;">
                    <i class="fas fa-exclamation-triangle"></i>
                    ${message}
                </div>
            `;

                form.insertBefore(errorDiv, form.firstChild);

                setTimeout(() => {
                    errorDiv.remove();
                }, 5000);
            }

            // Add entrance animations
            const sections = document.querySelectorAll('.form-section');
            sections.forEach((section, index) => {
                section.style.animation = `slideInUp 0.6s ease ${index * 0.1}s both`;
            });
        });

        // Add keyframes for animations
        const style = document.createElement('style');
        style.textContent = `
        @keyframes slideInFromTop {
            from { transform: translateY(-20px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes slideInUp {
            from { transform: translateY(30px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
    `;
        document.head.appendChild(style);
    </script>
@endsection
