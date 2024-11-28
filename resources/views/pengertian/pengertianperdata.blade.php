@extends('navbar')

@section('content')


    <!-- Main Content -->
    <div class="container">
        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Perdata</h2>
        <p>Hukum perdata adalah salah satu cabang hukum yang mengatur hubungan antara individu atau badan hukum (seperti perusahaan) dalam masyarakat. Dalam hukum perdata, setiap orang memiliki hak dan kewajiban yang harus dihormati dan dilindungi.</p>
        <p>Misalnya, jika Anda meminjam uang dari teman, atau jika Anda menyewa rumah, itu adalah contoh hubungan yang diatur oleh hukum perdata.</p>
        <p>Tujuan dari hukum perdata adalah untuk menyelesaikan sengketa atau konflik antara individu. Hukum ini bertujuan untuk melindungi hak-hak seseorang dan memberikan keadilan dalam hubungan sosial.</p>
        <br>
        <p>Bidang-Bidang Hukum Perdata</p>
        <p>1.<b>Hukum Kontrak :</b>Mengatur kesepakatan antara dua pihak. Misalnya, jika Anda membuat perjanjian untuk menjual barang, hukum kontrak mengatur syarat-syarat dan kewajiban masing-masing pihak.</p>
        <p>2.<b>Hukum Keluarga:</b>Mengatur hubungan dalam keluarga, seperti pernikahan, perceraian, dan hak-hak anak.</p>
        <p>3.<b>Hukum Waris:</b>Mengatur pembagian harta warisan setelah seseorang meninggal dunia. Misalnya, siapa yang berhak menerima harta peninggalan.</p>
        <p>4.<b>Hukum Perbuatan Melawan Hukum:</b>Mengatur tindakan yang merugikan orang lain. Jika seseorang melakukan sesuatu yang merugikan Anda, seperti mencemarkan nama baik, Anda bisa menggunakan hukum ini untuk menuntut ganti rugi.</p>
        <br>
        <p>Proses dalam Hukum Perdata</p>
        <p>Penyelesaian Sengketa,Putusan Pengadilan,Penerapan Keputusan</p>

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


/* Breadcrumb */
/* .breadcrumb {
    padding: 20px 50px;
    font-size: 18px;
    background-color: #7E1C1C;
} */

.breadcrumb a {
    text-decoration: none;
    color: white;
}

.breadcrumb a:hover {
    color: #D6C3A5;
}

/* Main container */
.container {
    display: flex;
    padding: 40px 50px;
}

/* Sidebar */
.sidebar {
    width: 25%;
    padding-right: 20px;
}

.sidebar h3 {
    font-size: 22px;
    margin-bottom: 20px;
    color: #F1E1CE;
}

.sidebar ul {
    list-style: none;
}

.sidebar ul li {
    margin-bottom: 15px;
}

.sidebar ul li a {
    text-decoration: none;
    color: white;
    font-size: 18px;
    padding-bottom: 10px;
    border-bottom: 1px solid #D6C3A5;
}

.sidebar ul li a:hover {
    color: #D6C3A5;
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
