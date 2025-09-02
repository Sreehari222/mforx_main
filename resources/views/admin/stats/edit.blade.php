@extends('layouts.app')

@section('content')
<div class="stats-update-container">
    <!-- Page Header -->
    <div class="page-header">
        <div class="header-content">
            <h2 class="page-title">Update Statistics</h2>
            <p class="page-subtitle">Modify key statistics for your platform</p>
        </div>
    </div>

    <!-- Form Container -->
    <div class="form-container">
        @if (session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('admin.stats.bulkUpdate') }}" class="stats-form">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="job_seekers">Job Seekers Hired Daily</label>
                <input type="number" name="job_seekers" id="job_seekers" value="{{ $stats['job_seekers']->value ?? 0 }}" class="form-input" required>
                @error('job_seekers')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="companies">Verified Companies</label>
                <input type="number" name="companies" id="companies" value="{{ $stats['companies']->value ?? 0 }}" class="form-input" required>
                @error('companies')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="profiles">Instant Profile Creation (%)</label>
                <input type="number" name="profiles" id="profiles" value="{{ $stats['profiles']->value ?? 0 }}" class="form-input" required>
                @error('profiles')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="connections">Direct Connect Success (X)</label>
                <input type="number" name="connections" id="connections" value="{{ $stats['connections']->value ?? 0 }}" class="form-input" required>
                @error('connections')
                    <span class="error-message">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-actions">
                <button type="submit" class="submit-btn">
                    <i class="fas fa-save"></i>
                    Update Statistics
                </button>
            </div>
        </form>
    </div>
</div>

<style>
    .stats-update-container {
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

    /* Success Message */
    .success-message {
        background: rgba(76, 175, 80, 0.2);
        color: #4caf50;
        padding: 1rem;
        border-radius: 8px;
        margin-bottom: 1.5rem;
        border: 1px solid rgba(76, 175, 80, 0.3);
        text-align: center;
    }

    /* Form Styling */
    .stats-form {
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
    }

    .form-input:focus {
        outline: none;
        border-color: rgba(102, 126, 234, 0.6);
        box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-input::placeholder {
        color: rgba(255, 255, 255, 0.6);
    }

    .error-message {
        color: #f44336;
        font-size: 0.85rem;
        margin-top: 0.25rem;
    }

    .form-actions {
        display: flex;
        justify-content: flex-end;
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
            width: 100%;
            justify-content: center;
        }
    }
</style>
@endsection
