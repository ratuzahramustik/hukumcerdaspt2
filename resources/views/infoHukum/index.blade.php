@extends('navbar')

@section('content')

<div class="content-container">

    <!-- Card Grid -->
    <div class="card-grid">
        <a href="{{ route('pengertianpidana') }}" class="card">
            <div class="icon">⚖️</div>
            <h3>Pidana</h3>
            <p>Hukum pidana mengatur perbuatan yang dianggap sebagai kejahatan atau pelanggaran terhadap masyarakat atau negara, seperti pencurian, penipuan, atau kekerasan.</p>
        </a>
        <a href="{{ route('pengertianperdata') }}" class="card">
            <div class="icon">📄</div>
            <h3>Perdata</h3>
            <p>Hukum perdata mengatur hak dan kewajiban antar individu atau pihak dalam urusan pribadi.</p>
        </a>
        <a href="{{ route('pengertianpajakdankeuangan') }}" class="card">
            <div class="icon">💰</div>
            <h3>Pajak & Keuangan</h3>
            <p>Hukum pajak mengatur kewajiban setiap warga negara dan badan usaha untuk membayar pajak kepada pemerintah, seperti pajak penghasilan, pajak perusahaan.</p>
        </a>
        <a href="{{ route('pengertianketenagakerjaan') }}" class="card">
            <div class="icon">💼</div>
            <h3>Ketenagakerjaan</h3>
            <p>Hukum ketenagakerjaan mengatur hubungan antara pekerja dan pemberi kerja, termasuk hak dan kewajiban di tempat kerja.</p>
        </a>
        <a href="{{ route('pengertianham') }}" class="card">
            <div class="icon">🧑‍⚖️</div>
            <h3>Hak Asasi Manusia</h3>
            <p>HAM adalah hak-hak dasar yang dimiliki setiap manusia sejak lahir, seperti hak hidup, kebebasan berpendapat.</p>
        </a>
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
        font-family: Arial, sans-serif;
        background-color:#691a20;
        color: white;
        line-height: 1.6;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px 50px;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .navbar ul {
        list-style-type: none;
        display: flex;
        gap: 15px;
    }

    .navbar ul li a {
        color: white;
        text-decoration: none;
        font-size: 18px;
        transition: color 0.3s;
    }

    .navbar ul li a:hover {
        color: #D6C3A5;
    }

    /* Main Content Container */
    .content-container {
        display: flex;
        gap: 20px;
        padding: 20px;
        width: 100%;
        max-width: 1200px;
        margin: 80px auto; /* Added margin to adjust for navbar */
    }

    .card-grid {
        flex: 3;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: #a34949;
        padding: 25px;
        border-radius: 15px;
        color: white;
        text-align: center;
        transition: background-color 0.3s, transform 0.3s;
        text-decoration: none;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card:hover {
        background-color: #813636;
        transform: translateY(-5px);
    }

    .card .icon {
        font-size: 40px;
        margin-bottom: 15px;
    }

    .card h3 {
        margin-bottom: 10px;
        font-size: 24px;
    }

    .card p {
        font-size: 16px;
        line-height: 1.4;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .content-container {
            flex-direction: column;
            padding: 10px;
        }

        .sidebar {
            width: 100%;
            margin-bottom: 20px;
        }

        .card-grid {
            grid-template-columns: 1fr;
        }
    }
</style>
