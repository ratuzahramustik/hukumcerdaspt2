@extends('navbar')

@section('content')
<div class="container">
    <h1>Surat Pernyataan Semua Pengurus Dan Badan Usaha Tidak Masuk Dalam Daftar Hitam</h1>

    <div class="button-container">
        <a href="{{ route('solusi') }}" class="btn-download">Back</a>
        <a href="{{ route('pdf2') }}" class="btn-download">Download</a>
    </div>

    <div class="card">
        <div class="card-content">
            <h2>Preview Dokumen</h2>
            <p>Dengan ini kami menyatakan dengan sebenarnya, bahwa semua pengurus dan badan usaha tidak masuk dalam Daftar Hitam, apabila dikemudian hari ternyata data / dokumen tersebut tidak benar.</p>

            <div class="details">
                <p><strong>Yang bertanda tangan di bawah ini:</strong></p>
                <p>Nama: .....<br>
                Jabatan: ..... <br>
                Dalam hal ini bertindak untuk atas nama:<br>
                Nama Perusahaan: .....<br>
                N.P.W.P: .....<br>
                Alamat: .....</p>

                <p><strong>Dengan ini menyatakan bahwa perusahaan yang saya pimpin:</strong></p>
                <ul>
                    <li>Semua pengurus dan badan usaha tidak masuk dalam Daftar Hitam. Apabila di kemudian hari ternyata data/dokumen tersebut tidak benar, maka kami sanggup dikenakan sanksi sesuai dengan peraturan perundang-undangan yang berlaku.</li>
                    <li>Tidak dalam pengawasan pengadilan.</li>
                    <li>Kegiatan usaha perusahaan tidak sedang dalam kondisi pailit.</li>
                    <li>Tidak sedang menjalani sanksi hukum baik secara pidana maupun perdata.</li>
                </ul>

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

    .card-content p, .card-content ul {
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

        .card-content p, .card-content ul {
            font-size: 14px;
        }
    }
</style>
