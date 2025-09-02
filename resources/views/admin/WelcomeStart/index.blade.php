@extends('layouts.app')

@section('content')
<div class="stats-management-container">
    <!-- Page Header -->
    <div class="page-header">
        <div class="header-content">
            <h2 class="page-title">Welcome Stats Management</h2>
            <p class="page-subtitle">Manage and organize your welcome statistics</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #667eea, #764ba2);">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ count($stats) }}</div>
                <div class="stat-label">Total Stats</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon" style="background: linear-gradient(135deg, #4facfe, #00f2fe);">
                <i class="fas fa-clock"></i>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ $stats->where('created_at', '>=', now()->subDays(7))->count() }}</div>
                <div class="stat-label">This Week</div>
            </div>
        </div>
    </div>

    <!-- Stats Table -->
    <div class="table-container">
        <div class="table-header">
            <h3 class="table-title">
                <i class="fas fa-list"></i>
                Stats Library
            </h3>
            <div class="table-actions">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Search stats..." id="searchInput">
                </div>
            </div>
        </div>

        @if(session('success'))
            <div class="success-message">
                {{ session('success') }}
            </div>
        @endif

        @if(count($stats) > 0)
            <div class="modern-table">
                <div class="table-scroll">
                    <table class="stats-table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Value</th>
                                <th>Title</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($stats as $stat)
                            <tr class="table-row" data-title="{{ strtolower($stat->title) }}">
                                <td>{{ $stat->id }}</td>
                                <td>{{ $stat->value }}</td>
                                <td class="title-cell">
                                    <div class="stat-title">{{ $stat->title }}</div>
                                </td>

                                <td class="actions-cell">
                                    <div class="action-buttons">
                                        <a href="{{ route('admin.welcome_stats.edit', $stat->id) }}" class="action-btn edit-btn" title="Edit Stat">
                                            <i class="fas fa-edit"></i>
                                        </a>
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
                    <i class="fas fa-chart-bar"></i>
                </div>
                <h3 class="empty-title">No Stats Found</h3>
                <p class="empty-text">Start building your stats library by adding your first stat.</p>
                <a href="{{ route('admin.welcome_stats.create') }}" class="empty-action-btn">
                    <i class="fas fa-plus"></i>
                    Add Your First Stat
                </a>
            </div>
        @endif
    </div>
</div>

<style>
    .stats-management-container {
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

    .stats-table {
        width: 100%;
        border-collapse: collapse;
    }

    .stats-table th {
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

    .stats-table td {
        padding: 1.5rem;
        vertical-align: middle;
    }

    .stat-title {
        color: white;
        font-size: 1rem;
        font-weight: 600;
        line-height: 1.3;
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

    /* Success Message */
    .success-message {
        background: rgba(76, 175, 80, 0.2);
        color: #4caf50;
        padding: 1rem;
        border-radius: 8px;
        margin: 1rem 2rem;
        border: 1px solid rgba(76, 175, 80, 0.3);
        text-align: center;
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

        .stats-table th,
        .stats-table td {
            padding: 1rem 0.75rem;
        }

        .stat-title {
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

            if (title.includes(searchTerm)) {
                row.classList.remove('hidden');
            } else {
                row.classList.add('hidden');
            }
        });
    });

    // Delete confirmation
    function confirmDelete(statId) {
        if (confirm('Are you sure you want to delete this stat? This action cannot be undone.')) {
            // Add your delete logic here (e.g., form submission or AJAX)
            console.log('Deleting stat with ID:', statId);
            // Example: document.getElementById(`delete-form-${statId}`).submit();
        }
    }
</script>
@endsection
