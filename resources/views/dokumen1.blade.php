@extends('navbar')

@section('content')
<div class="container">
    <h1>Surat Pernyataan Tidak Pernah Dipidana Penjara</h1>

    <div class="button-container">
        <a href="{{ route('solusi') }}" class="btn-download">Back</a>
        <a href="{{ route('pdf1') }}" class="btn-download">Download</a>
    </div>

    <div class="card">
        <div class="card-content">
            <h2>Preview Dokumen</h2>
            <div class="details">
                <p><strong>Yang bertanda tangan di bawah ini:</strong></p>
                <p>Nama Lengkap: .....<br>
                    Tempat, Tanggal Lahir: ....., ..... <br>
                    Agama: .....<br>
                    Pendidikan Terakhir: .....<br>
                    Alamat: .....<br>
                    No. Handphone: .....<br>
                    Email: .....</p>

                <p>Dengan ini saya menyatakan bahwa saya tidak pernah dipidana dengan pidana penjara
                    berdasarkan putusan pengadilan yang sudah mempunyai kekuatan hukum tetap karena
                    melakukan tindak pidana dengan pidana penjara 2 (dua) tahun atau lebih.</p>
                
                <p>Demikian Surat Pernyataan ini saya buat dengan penuh kesadaran dan tanpa ada paksaan
                    atau tekanan dari pihak manapun. Apabila pernyataan ini dikemudian hari tidak benar, maka
                    saya bersedia menerima sanksi. Demikian saya sampaikan.</p>

                <p>Demikian Surat Pernyataan ini dibuat dengan sebenarnya untuk dipergunakan sebagaimana mestinya.</p>
                <br>
                <p class="text-right">Tempat, ......2024</p>
                <p class="text-right">Yang Membuat Pernyataan,</p>
                <br><br>
                <p class="text-right">.................................</p>
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #4D0F0F;
        color: #FFFFFF;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }

    h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
        margin-top: 60px;
        text-align: center;
        color: white;
    }

    .button-container {
        text-align: center;
        margin-bottom: 30px;
    }

    .btn-download {
        background-color: #D3A972;
        color: #4D0F0F;
        padding: 12px 25px;
        border-radius: 5px;
        font-size: 16px;
        text-decoration: none;
        margin: 0 10px;
        display: inline-block;
        transition: background-color 0.3s ease;
    }

    .btn-download:hover {
        background-color: #B88A5B;
    }

    .card {
        background-color: #FFFFFF;
        color: #4D0F0F;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-top: 20px;
    }

    .card-content {
        text-align: left;
    }

    .card-content h2 {
        font-size: 20px;
        margin-bottom: 15px;
        text-align: center;
    }

    .card-content p,
    .card-content ul {
        font-size: 16px;
        line-height: 1.5;
        margin-bottom: 15px;
    }

    .card-content ul {
        list-style-type: disc;
        padding-left: 40px;
    }

    .details strong {
        font-size: 18px;
    }

    /* Aligning "Tempat" to the right */
    .text-right {
        text-align: right;
    }

    @media (max-width: 768px) {
        .container {
            width: 95%;
        }

        h1 {
            font-size: 24px;
        }

        .btn-download {
            font-size: 14px;
            padding: 10px 20px;
        }

        .card-content h2 {
            font-size: 18px;
        }

        .card-content p,
        .card-content ul {
            font-size: 14px;
        }
    }
</style>