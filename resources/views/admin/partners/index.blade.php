@extends('layouts.app')

@section('content')
<div class="partner-list-container">
    <!-- Page Header -->
    <div class="page-header">
        <div class="left-content">
            <h2 class="page-title">Partner Logos</h2>
        </div>
        <div class="right-content">
            <a href="{{ route('partners.create') }}" class="add-btn">
                <i class="fas fa-plus-circle"></i> Add New
            </a>
        </div>
    </div>

    <!-- Flash Message -->
    @if (session('success'))
        <div class="success-message">{{ session('success') }}</div>
    @endif

    <!-- Table -->
    <div class="table-wrapper">
        <table class="partner-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Partner Name</th>
                    <th>Logo</th>
                    <th>Uploaded At</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($partners as $partner)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $partner->name }}</td>
                        <td>
                            @if($partner->logo)
                                <img src="{{ asset('storage/' . $partner->logo) }}" alt="Logo">
                            @else
                                <span>No Logo</span>
                            @endif
                        </td>
                        <td>{{ $partner->created_at->format('d M Y') }}</td>
                        <td>
                            <!-- Delete Button -->
                            <form action="{{ route('partners.destroy', $partner->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this partner?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="delete-btn">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No partners found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- CSS -->
<style>
.partner-list-container {
    padding: 2rem;
    color: white;
}

/* Header */
.page-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
}

.page-title {
    font-size: 2rem;
    font-weight: 700;
    background: linear-gradient(135deg, #fff, #e2e8f0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

/* Add Button */
.add-btn {
    background: rgba(255, 255, 255, 0.1);
    color: white;
    padding: 10px 20px;
    border-radius: 10px;
    text-decoration: none;
    font-weight: 600;
    border: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}

.add-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
}

/* Flash Message */
.success-message {
    background: rgba(76, 175, 80, 0.2);
    color: #4caf50;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    border: 1px solid rgba(76, 175, 80, 0.3);
    text-align: center;
}

/* Table */
.table-wrapper {
    background: rgba(255, 255, 255, 0.05);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    overflow-x: auto;
}

.partner-table {
    width: 100%;
    border-collapse: collapse;
    color: white;
}

.partner-table thead {
    background: rgba(255, 255, 255, 0.1);
}

.partner-table th, .partner-table td {
    padding: 1rem;
    text-align: left;
    border-bottom: 1px solid rgba(255, 255, 255, 0.05);
}

.partner-table img {
    height: 50px;
    border-radius: 8px;
}

/* Delete Button */
.delete-btn {
    background: rgba(255, 0, 0, 0.1);
    color: #ff4d4d;
    padding: 6px 12px;
    border-radius: 8px;
    border: 1px solid rgba(255, 0, 0, 0.3);
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.delete-btn:hover {
    background: rgba(255, 0, 0, 0.2);
    box-shadow: 0 5px 15px rgba(255, 0, 0, 0.3);
    transform: translateY(-1px);
}

/* Responsive */
@media (max-width: 768px) {
    .page-header {
        flex-direction: column;
        align-items: flex-start;
        gap: 1rem;
    }

    .partner-table th, .partner-table td {
        padding: 0.75rem;
        font-size: 0.95rem;
    }
}
</style>
@endsection
