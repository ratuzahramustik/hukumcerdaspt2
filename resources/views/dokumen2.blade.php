@extends ('navbar')

@section('content')

<div class="container">
    <!-- <div class="breadcrumb">
        Home > Solusi > Pembuatan Dokumen
    </div> -->

    <h1>Surat Permohonan Keterangan Tidak Pernah Dipidana</h1>

    <div class="content">
        <p>Surat permohonan yang diajukan untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan oleh pengadilan negeri</p>
        <div class="button-container">
            <a href="{{route('solusi')}}" class="btn-download">Back</a>
        </div>
        <div class="button-container">
            <a href="{{route('pdf2')}}" class="btn-download">Download</a>
        </div>
    </div>

    <div class="preview-section">
        <h2>Preview Dokumen</h2>
        <p>Surat permohonan yang diajukan kepada pengadilan negeri dibuat pemohon untuk mendapatkan surat keterangan tidak pernah dipidana yang dikeluarkan pengadilan negeri</p>
        <a href="{{route('view2')}}">Surat Permohonan Keterangan Tidak Pernah Dipidana<br>PREVIEW</a>
    </div>
</div>

@endsection

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #4D0F0F; /* Dark red background */
            color: #FFFFFF; /* White text */
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
        }

        .breadcrumb {
            color: #FFD700; /* Gold color */
            font-size: 14px;
        }

        h1 {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #FFFFFF;
        }

        .content p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .button-container {
            text-align: left;
        }

        .btn-download {
            background-color: #D3A972; /* Light brown for button */
            color: #4D0F0F; /* Dark red text */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            text-decoration: none;
        }

        .btn-download:hover {
            background-color: #B88A5B; /* Darker brown */
        }

        .preview-section {
            background-color: #FFFFFF;
            color: #4D0F0F;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        .preview-section h2 {
            color: #4D0F0F;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .preview-section a {
            color: #B22222; /* Dark red for preview link */
            font-weight: bold;
            font-size: 16px;
            text-decoration: none;
        }

        .preview-section a:hover {
            text-decoration: underline;
        }
    </style>