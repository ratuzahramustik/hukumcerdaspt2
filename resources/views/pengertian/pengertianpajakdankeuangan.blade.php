@extends('navbar')

@section('content')

    <!-- Main Content -->
    <div class="container">


        <!-- Content -->
        <div class="content">
    <div class="card">
        <h2>Hukum Pajak & Keuangan</h2>
        <p>Hukum pajak dan keuangan adalah dua aspek penting dalam pengelolaan ekonomi suatu negara.</p>
        <p>Apa itu Pajak?</p>
        <p>Pajak adalah sejumlah uang yang harus dibayar oleh individu atau perusahaan kepada pemerintah.
           Pajak digunakan untuk membiayai berbagai kebutuhan dan layanan publik, seperti pendidikan, kesehatan, infrastruktur, dan keamanan.</p>
        <P>Jenis-Jenis Pajak</P>
        <p>1.<b>Pajak Penghasilan (PPh):</b>Pajak yang dikenakan atas penghasilan yang diperoleh oleh individu atau perusahaan.</p>
        <p>2.<b>Pajak Pertambahan Nilai (PPN):</b>Pajak yang dikenakan pada setiap transaksi penjualan barang dan jasa.</p>
        <p>3.<b>Pajak Bumi dan Bangunan (PBB):</b>Pajak yang dikenakan atas kepemilikan tanah dan bangunan.</p>
        <br>
        <p>Hukum keuangan adalah aturan yang mengatur pengelolaan keuangan publik dan swasta. Ini termasuk bagaimana pemerintah mengumpulkan
           dan menggunakan dana, serta bagaimana individu dan perusahaan mengelola keuangan mereka.</p>
        <p>Aspek-Aspek Hukum Keuangan</p>
        <p>1.<b>Anggaran Negara:</b>Rencana keuangan pemerintah yang mencakup semua pendapatan dan pengeluaran untuk satu tahun anggaran.</p>
        <p>2.<b>Pengelolaan Utang:</b>Bagaimana pemerintah dan perusahaan mengelola utang untuk membiayai proyek dan operasi mereka.</p>
        <p>3.<b>Investasi:</b> Aturan mengenai bagaimana individu dan perusahaan dapat menginvestasikan uang mereka untuk mendapatkan keuntungan.</p>


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
