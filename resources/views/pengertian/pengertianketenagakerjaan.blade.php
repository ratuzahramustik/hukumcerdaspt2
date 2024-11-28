@extends('navbar')

@section('content')

    <!-- Main Content -->
    <div class="container">
       

        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Ketenagakerjaan</h2>
        <p>Hukum ketenagakerjaan adalah aturan yang mengatur hubungan antara pekerja dan pemberi kerja agar hak-hak dan kewajiban mereka terlindungi dengan baik. 
           Intinya, hukum ini dibuat agar pekerja dan perusahaan bisa bekerja sama dengan adil dan aman. Di Indonesia, aturan ini diatur dalam Undang-Undang Ketenagakerjaan dan beberapa peraturan tambahan lainnya.</p>
           <br>
        <p>1.<b>Perjanjian Kerja</b>Ini adalah kesepakatan tertulis antara pekerja dan pemberi kerja yang menjelaskan tugas, gaji, serta hak dan kewajiban masing-masing. </p>
        <p>2.<b>Upah dan Tunjangan</b>Ada upah minimum yang ditetapkan pemerintah, tergantung kebutuhan hidup di daerah tersebut. Selain upah, ada tunjangan seperti tunjangan hari raya (THR) yang wajib diberikan setiap tahun. </p>
        <p>3.<b>Jam Kerja dan Lembur</b>Normalnya, jam kerja adalah 40 jam per minggu. Kalau bekerja lebih dari itu, pekerja berhak dapat bayaran lembur.</p>
        <p>4.<b>Hak Cuti</b>Setiap pekerja berhak atas cuti tahunan minimal 12 hari setelah setahun bekerja. Ada juga cuti sakit, cuti melahirkan, dan cuti untuk urusan keluarga.</p>
        <p>5.<b>Keselamatan dan Kesehatan Kerja (K3)</b>Perusahaan harus menyediakan tempat kerja yang aman agar pekerja terhindar dari kecelakaan kerja atau penyakit akibat kerja.</p>
        <p>6.<b>Pemutusan Hubungan Kerja (PHK)</b>Jika terjadi PHK, perusahaan harus mengikuti prosedur yang ada dan memberi pesangon atau kompensasi kepada pekerja sesuai aturan.</p>
        <br>
        <p>Secara umum, hukum ketenagakerjaan bertujuan untuk menciptakan lingkungan kerja yang adil dan kondusif. Pemerintah juga mengawasi pelaksanaannya dan menyediakan cara untuk menyelesaikan perselisihan antara pekerja dan perusahaan.</p>

        <p></p>
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
