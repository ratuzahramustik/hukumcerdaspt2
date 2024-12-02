@extends('navbar')

@section('content')

<!-- Main Content Section -->
<div class="main-content">
    <!-- Document Cards Section -->
    <div class="document-grid">
        <div class="document-card">
            <h3>Surat Permohonan Keterangan Tidak Pernah Dipidana</h3>
            <p>Surat permohonan yang diajukan untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan oleh pengadilan negeri.</p>
            <button><a href="{{ route('dokumen1') }}">Lihat template</a></button>
        </div>

        <div class="document-card">
            <h3>Surat Pernyataan Semua Pengurus Dan Badan Usaha Tidak Masuk Dalam Daftar Hitam</h3>
            <p>Surat yang menyatakan bahwa semua pengurus dan badan usaha tidak masuk dalam Daftar Hitam yang dikeluarkan oleh pengadilan negeri.</p>
            <button><a href="{{ route('dokumen2') }}">Lihat template</a></button>
        </div>
    </div>
</div>

@endsection

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background-color: #5b1b1b;
        color: white;
    }

    /* Breadcrumb */
    .breadcrumb {
        margin: 20px 50px;
        font-size: 18px;
    }

    .breadcrumb span {
        color: #D6C3A5;
    }

    .breadcrumb a {
        text-decoration: none;
        color: white;
    }

    /* Main Content */
    .main-content {
        padding: 200px 50px;
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Document Cards */
    .document-grid {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .document-card {
        background-color: #813636;
        padding: 20px;
        width: 48%;
        border-radius: 10px;
        border: 2px solid white;
        text-align: center;
        transition: all 0.3s ease;
    }

    .document-card:hover {
        background-color: #5b1b1b;
    }

    .document-card h3 {
        font-size: 18px;
        color: white;
        margin-bottom: 10px;
    }

    .document-card p {
        font-size: 16px;
        color: #D6C3A5;
        margin-bottom: 15px;
    }

    .document-card button {
        padding: 10px 20px;
        background-color: #D6C3A5;
        color: #5b1b1b;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .document-card button a {
        color: #5b1b1b;
        text-decoration: none;
        font-weight: bold;
    }

    .document-card button:hover {
        background-color: #c1b197;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .document-grid {
            flex-direction: column;
        }

        .document-card {
            width: 100%;
        }
    }
</style>
