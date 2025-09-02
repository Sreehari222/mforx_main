@extends('layouts.app')

@section('content')
<div class="gallery-create-container">
    <div class="page-header">
        <h2>Edit Media</h2>
        <a href="{{ route('admin.gallery.index') }}" class="back-btn">Back</a>
    </div>

    <div class="form-container">
        <form method="POST" action="{{ route('admin.gallery.update', $gallery->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="{{ old('name', $gallery->name) }}" required>
            </div>

            <div class="form-group">
                <label>Role</label>
                <input type="text" name="role" value="{{ old('role', $gallery->role) }}" required>
            </div>

            <div class="form-group">
                <label>Replace Media (optional)</label>
                <input type="file" name="media" accept="image/*,video/*">
            </div>

            <div class="current-media">
                <p>Current File:</p>
                @if ($gallery->type == 'image')
                    <img src="{{ asset('storage/' . $gallery->file_path) }}" width="200">
                @else
                    <video width="320" controls>
                        <source src="{{ asset('storage/' . $gallery->file_path) }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                @endif
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</div>
@endsection
 