@extends('navbar')

@section('content')


    <!-- Main Content -->
    <div class="container">


        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Hak Asasi Manusia (HAM)</h2>
        <p>Hukum Hak Asasi Manusia mengatur hak-hak dasar yang dimiliki setiap manusia sejak lahir, seperti hak hidup, kebebasan berpendapat, hak untuk bebas dari penyiksaan, dan hak atas perlindungan hukum. 
        Tujuannya adalah untuk melindungi martabat dan kesejahteraan individu, memastikan bahwa setiap orang diperlakukan dengan adil dan setara di mata hukum, tanpa diskriminasi.</p>
        <br>
        <p>Prinsip Dasar Ham:</p>
        <P>Universal,Tidak bisa dicabut,Tidak ada diskriminasi,Saling terhubung</P>
        <br>
        <p>Jenis Jenis Ham</p>
        <p>1.<b>Hak Sipil dan Politik: </b>Ini termasuk hak-hak untuk hidup, bebas berpendapat, memilih dalam pemilu, dan dilindungi oleh hukum. Contohnya: hak untuk tidak disiksa, hak memilih, dan kebebasan berbicara.</p>
        <p>2.<b>Hak Ekonomi, Sosial, dan Budaya: </b>Hak-hak ini berkaitan dengan kesejahteraan, seperti hak untuk mendapatkan pekerjaan, pendidikan, dan pelayanan kesehatan yang layak. Contohnya: hak mendapatkan pendidikan dan hak atas kesehatan.</p>
        <p>3.<b>Hak Kelompok atau Kolektif: </b> Hak-hak yang dimiliki oleh kelompok-kelompok tertentu, seperti masyarakat adat yang punya hak untuk menjaga tanah dan budaya mereka.</p>
        <br>
        <p>Secara sederhana, hukum HAM ada untuk memastikan setiap orang diperlakukan dengan adil, bermartabat, dan terlindungi dari penyalahgunaan kekuasaan.</p>
    </div>
</div>

@endsection

<style>
/* Reset margin and padding */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Base styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #581B1B;
    color: white;
    min-height: 100vh;
}

/* Content with card */
.content {
    width: 75%;
    padding: 30px;
}

.card {
    background-color: #7E1C1C;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

.card h2 {
    font-size: 28px;
    margin-bottom: 20px;
}

.card p {
    font-size: 18px;
    line-height: 1.6;
    text-align: left;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .container {
        flex-direction: column;
    }

    .sidebar,
    .content {
        width: 100%;
    }
}


    </style>
