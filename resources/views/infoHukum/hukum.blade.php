@extends('navbar')

@section('content')
    <!-- Main Container for Sidebar and Content Area -->
    <div class="main-container">
        <!-- Sidebar Category -->
        <aside class="sidebar">
            <h2>Kategori</h2>
            <hr>
            <a href="{{ route('katpidana') }}">Pidana</a>
            <hr>
            <a href="{{ route('katperdata') }}">Perdata</a>
            <hr>
            <a href="{{ route('katpajak') }}">Pajak & Keuangan</a>
            <hr>
            <a href="{{ route('katkerja') }}">Ketenagakerjaan</a>
            <hr>
            <a href="{{ route('katham') }}">Hak Asasi Manusia</a>
        </aside>

        <!-- Content Area -->
        <section class="content-area">
            <!-- Add Category Button on the Right -->
            <div class="header-section">
                <h2>Hukum</h2>
                @if (auth()->check() && auth()->user()->role === 'admin')
                    <a href="{{ route('kategori.create') }}" class="btn-add-category">+ Tambah Kategori</a>
                @endif
            </div>

            <!-- Posts -->
            @foreach ($hukum as $post)
                <div class="post">
                    <a href="{{ route('deskpidana', ['id' => $post->id]) }}" class="post-title">{{ $post->judul }}</a>
                    <div class="post-meta">{{ $post->created_at->format('d.m.Y') }} • {{ $post->kategori }}</div>
                    @if (auth()->check() && auth()->user()->role === 'admin')
                        <div class="button-group">
                            <form action="{{ route('kategori.delete', ['kategori' => $post->id]) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn danger">Hapus</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endforeach
        </section>
    </div>
@endsection

<style>
    /* Global Styling */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #691a20;
        color: white;
        display: flex;
        justify-content: center;
    }

    /* Main Container for Layout */
    .main-container {
        display: flex;
        width: 90%;
        max-width: 1200px;
        margin-top: 20px;
        gap: 20px;
    }

    /* Sidebar Styling */
    .sidebar {
        width: 250px;
        background-color: #D6C3A5;
        padding: 20px;
        border-radius: 15px;
        position: sticky;
        top: 20px;
        /* Keeps sidebar fixed when scrolling */
    }

    .sidebar h2 {
        margin-bottom: 15px;
        font-size: 24px;
        color: #5b1b1b;
        text-align: center;
    }

    .sidebar hr {
        border: 1px solid #5b1b1b;
        margin: 10px 0;
    }

    .sidebar a {
        display: block;
        margin: 8px 0;
        color: #5b1b1b;
        font-size: 18px;
        text-decoration: none;
        padding: 8px;
        border-radius: 8px;
        transition: background-color 0.3s;
    }

    .sidebar a:hover {
        background-color: #8f4a4a;
        color: white;
    }

    /* Content Area */
    .content-area {
        flex-grow: 1;
        background-color: #813636;
        padding: 20px;
        border-radius: 15px;
    }

    /* Header Section */
    .header-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .header-section h2 {
        font-size: 28px;
        color: #D6C3A5;
    }

    .btn-add-category {
        background-color: #D6C3A5;
        color: #5b1b1b;
        padding: 10px 15px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        transition: background-color 0.3s ease, color 0.3s ease;
        margin-left: auto;
    }

    .btn-add-category:hover {
        background-color: #5b1b1b;
        color: #D6C3A5;
    }

    /* Post Styling */
    .post {
        background-color: #964545;
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 8px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .post-title {
        font-size: 20px;
        font-weight: bold;
        color: #D6C3A5;
        text-decoration: none;
    }

    .post-meta {
        font-size: 14px;
        color: #D6C3A5;
    }

    .post-title:hover {
        color: #5b1b1b;
    }

    /* Button Group */
    .button-group {
        display: flex;
        gap: 10px;
    }

    .btn {
        padding: 5px 10px;
        border-radius: 4px;
        cursor: pointer;
        font-size: 14px;
        border: none;
        transition: background-color 0.3s;
    }

    .btn.danger {
        background-color: #f44336;
        color: white;
    }

    .btn.danger:hover {
        background-color: #d32f2f;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .main-container {
            flex-direction: column;
            align-items: stretch;
        }

        .sidebar,
        .content-area {
            width: 100%;
        }

        .header-section {
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
        }

        .btn-add-category {
            width: 100%;
            text-align: center;
        }
    }
</style>
