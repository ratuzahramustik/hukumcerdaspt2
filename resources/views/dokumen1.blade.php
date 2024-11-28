@extends('navbar')

@section('content')

<div class="container">
    <h1>Surat Permohonan Keterangan Tidak Pernah Dipidana</h1>

    <div class="content">
        <p>Surat permohonan yang diajukan untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan oleh pengadilan negeri.</p>

        <div class="button-container">
            <a href="{{ route('solusi') }}" class="btn-download">Back</a>
            <a href="{{ route('pdf1') }}" class="btn-download">Download</a>
        </div>
    </div>

    <div class="preview-section">
        <h2>Preview Dokumen</h2>
        <p>Surat permohonan yang diajukan kepada pengadilan negeri dibuat pemohon untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan pengadilan negeri.</p>
        <a href="{{ route('view1') }}" class="preview-link">Surat Permohonan Keterangan Tidak Pernah Dipidana<br>PREVIEW</a>
    </div>
</div>

@endsection

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #4D0F0F; /* Dark red background */
        color: #FFFFFF; /* White text */
        margin: 0;
        padding: 0;
    }

    /* Container Styling */
    .container {
        width: 80%;
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }

    /* Header Styling */
    h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
        text-align: center;
        color: #FFD700; /* Gold color */
    }

    /* Content Section */
    .content {
        text-align: center;
        margin-bottom: 30px;
    }

    .content p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    /* Button Container */
    .button-container {
        text-align: center;
        margin-top: 20px;
    }

    /* Button Styling */
    .btn-download {
        background-color: #D3A972; /* Light brown */
        color: #4D0F0F; /* Dark red */
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        margin: 0 10px;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .btn-download:hover {
        background-color: #B88A5B; /* Darker brown on hover */
    }

    /* Preview Section */
    .preview-section {
        background-color: #FFFFFF;
        color: #4D0F0F;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
    }

    .preview-section h2 {
        font-size: 20px;
        color: #4D0F0F;
        margin-bottom: 15px;
    }

    .preview-section p {
        font-size: 16px;
        margin-bottom: 20px;
    }

    .preview-link {
        color: #B22222; /* Dark red */
        font-weight: bold;
        font-size: 16px;
        text-decoration: none;
    }

    .preview-link:hover {
        text-decoration: underline;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .container {
            width: 95%;
        }

        h1 {
            font-size: 24px;
        }

        .content p {
            font-size: 14px;
        }

        .btn-download {
            font-size: 14px;
            padding: 10px 20px;
        }

        .preview-section h2 {
            font-size: 18px;
        }

        .preview-section p {
            font-size: 14px;
        }

        .preview-link {
            font-size: 14px;
        }
    }
</style>
