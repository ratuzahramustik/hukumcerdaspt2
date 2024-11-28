@extends('navbar')

@section('content')

    <!-- Main Content -->
    <div class="container">
        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Pidana</h2>
        <p>Hukum pidana adalah aturan yang mengatur tentang perbuatan-perbuatan yang dilarang oleh negara karena dapat merugikan atau membahayakan orang lain dan masyarakat. Jika seseorang melanggar aturan ini, maka ia bisa dikenakan hukuman atau sanksi. Tujuan dari hukum pidana adalah melindungi masyarakat, menjaga ketertiban, dan mencegah orang lain melakukan kejahatan yang sama dengan memberikan efek jera.</p>
        <p>Tujuan Hukum Pidana
        Hukum pidana memiliki beberapa tujuan utama, yaitu:</p>
        <p>1.<b>Mencegah Kejahatan:</b> Hukum pidana dibuat agar orang berpikir dua kali sebelum melakukan kejahatan karena takut hukuman.</p>
        <p>2.<b>Menegakkan Keadilan:</b> Hukum pidana memberikan hukuman yang sesuai untuk pelaku kejahatan, sehingga korban atau masyarakat merasa keadilan telah ditegakkan.</p>
        <p>3.<b>Melindungi Masyarakat:</b> Dengan hukum pidana, masyarakat merasa aman karena tahu bahwa ada aturan yang melindungi mereka dari tindakan jahat.</p>
        <p>Proses dalam Sistem Hukum Pidana:</p>
        <p>Penyidikan,Penuntutan,Pengadilan,Eksekusi</p>
        <p>Sanksi dalam Hukum Pidana:</p>
        <p>1.<b>Pidana Penjara</b> Hukuman penjara untuk jangka waktu tertentu.</p>
        <p>2.<b>Pidana Denda</b> Pelaku diharuskan membayar sejumlah uang sebagai ganti rugi atau sebagai bentuk hukuman.</p>
        <p>3.<b>Pidana Mati</b> Hukuman terberat yang dijatuhkan pada kasus kejahatan serius di beberapa negara.</p>
        <p>4.<b>Pidana Kurungan dan Pembatasan Kebebasan</b> Hukuman berupa pembatasan kebebasan dalam bentuk tahanan rumah atau wajib lapor.</p>
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
    line-height: 1.6; /* Menambah ruang antara baris untuk keterbacaan */
    padding: 20px;
}

/* Main container */
.container {
    display: flex;
    padding: 40px 50px;
}

/* Content with card */
.content {
    width: 75%;
    padding: 30px;
}

/* Card style */
.card {
    background-color: #7E1C1C;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    margin-bottom: 20px;
}

/* Card heading style */
.card h2 {
    font-size: 28px;
    margin-bottom: 15px;
    color: #F1E1CE; /* Warna teks lebih lembut */
}

/* Paragraph styles */
.card p {
    font-size: 18px;
    line-height: 1.8; /* Menambah jarak antar baris */
    margin-bottom: 20px; /* Menambah ruang antar paragraf */
    text-align: left;

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
