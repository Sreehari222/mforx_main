@extends('layouts.app')

@section('content')
    <div class="gallery-create-container">
        <!-- Page Header -->
        <div class="page-header">
            <div class="header-content">
                <h2 class="page-title">Add New Gallery Image</h2>
                <p class="page-subtitle">Upload a new image to your gallery</p>
            </div>
            <a href="{{ route('admin.gallery.index') }}" class="back-btn">
                <i class="fas fa-arrow-left"></i>
                Back to Gallery
            </a>
        </div>

        <!-- Form Container -->
        <div class="form-container">
            @if ($errors->any())
                <div class="error-message-container">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data"
                class="gallery-form">
                @csrf

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-input"
                        required>
                    @error('name')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="role">Role</label>
                    <input type="text" name="role" id="role" value="{{ old('role') }}" class="form-input"
                        required>
                    @error('role')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="media">Upload Image/Video</label>
                    <input type="file" name="media" id="media" accept="image/*,video/*" class="form-input"
                        required>
                    @error('media')
                        <span class="error-message">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-actions">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-upload"></i>
                        Upload Image
                    </button>
                    <a href="{{ route('admin.gallery.index') }}" class="cancel-btn">
                        <i class="fas fa-times"></i>
                        Cancel
                    </a>
                </div>
            </form>
        </div>
    </div>

    <style>
        .gallery-create-container {
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

        .back-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: 1px solid rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
        }

        .back-btn:hover {
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

        /* Success and Error Messages */
        .success-message {
            background: rgba(76, 175, 80, 0.2);
            color: #4caf50;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(76, 175, 80, 0.3);
            text-align: center;
        }

        .error-message-container {
            background: rgba(244, 67, 54, 0.2);
            color: #f44336;
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            border: 1px solid rgba(244, 67, 54, 0.3);
            text-align: center;
        }

        .error-message-container ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .error-message-container li {
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }

        .error-message {
            color: #f44336;
            font-size: 0.85rem;
            margin-top: 0.25rem;
        }

        /* Form Styling */
        .gallery-form {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
            position: relative;
        }

        .form-group label {
            font-size: 1rem;
            font-weight: 600;
            color: white;
            opacity: 0.9;
        }

        .form-input {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 10px 12px;
            color: white;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
            box-sizing: border-box;
        }

        .form-input:focus {
            outline: none;
            border-color: rgba(102, 126, 234, 0.6);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-input::placeholder {
            color: rgba(255, 255, 255, 0.6);
        }

        /* File Input Styling */
        .form-group input[type="file"] {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 8px;
            padding: 10px 12px;
            color: rgba(255, 255, 255, 0.8);
            font-size: 1rem;
            transition: all 0.3s ease;
            cursor: pointer;
            position: relative;
            width: 100%;
            box-sizing: border-box;
        }

        .form-group input[type="file"]::-webkit-file-upload-button {
            background: linear-gradient(135deg, #667eea, #764ba2);
            border: none;
            border-radius: 6px;
            padding: 8px 16px;
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-right: 10px;
        }

        .form-group input[type="file"]::-webkit-file-upload-button:hover {
            transform: translateY(-1px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .form-group input[type="file"]:focus {
            outline: none;
            border-color: rgba(102, 126, 234, 0.6);
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 1rem;
        }

        .submit-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .cancel-btn {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            padding: 12px 24px;
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }

        .cancel-btn:hover {
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

            .form-container {
                padding: 1.5rem;
            }

            .form-group {
                gap: 0.4rem;
            }

            .form-group label {
                font-size: 0.95rem;
            }

            .form-input,
            .form-group input[type="file"] {
                font-size: 0.95rem;
                padding: 8px 10px;
            }

            .form-group input[type="file"]::-webkit-file-upload-button {
                padding: 6px 12px;
                font-size: 0.9rem;
            }

            .form-actions {
                flex-direction: column;
                gap: 0.75rem;
            }

            .submit-btn,
            .cancel-btn {
                width: 100%;
                justify-content: center;
            }
        }
    </style>
@endsection
