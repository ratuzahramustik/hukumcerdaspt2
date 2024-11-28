@extends('navbar')

@section('content')

<!-- Decorative circles -->
<div class="circle1"></div>
<div class="circle2"></div>

<!-- About Section -->
<div class="about-section">
    <h1>About</h1>
    <p>Hukum Cerdas adalah platform digital yang didedikasikan untuk memberikan informasi hukum yang akurat, mudah
        dipahami, dan dapat diakses oleh semua kalangan. Kami hadir untuk membantu masyarakat dalam memahami dan
        menerapkan hukum dalam kehidupan sehari-hari, baik untuk kepentingan pribadi, bisnis, maupun komunitas.</p>
    <!-- <button class="btn-read-more">read more</button> -->
</div>

@endsection

<style>
    /* Reset margin and padding, set box-sizing */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    html,
    body {
        height: 100%;
        font-family: 'Arial', sans-serif;
    }

    body {
        background-color: #691a20 !important;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
    }

    /* Navbar Styles */
    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        padding: 20px 50px;
        background-color: transparent;
    }

    .navbar .logo {
        font-size: 24px;
        font-weight: bold;
        color: white;
    }

    .navbar ul {
        list-style-type: none;
        display: flex;
        gap: 20px;
    }

    .navbar ul li {
        display: inline;
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

    /* About Section Styles */
    .about-section {
        text-align: center; /* Mengatur teks ke tengah */
        color: white;
        max-width: 800px;
        margin-top: 100px;
        padding: 20px;
        margin-left: 60px;
        margin-right: 30px;
        margin-top: 10%;
    }

    .about-section h1 {
        font-size: 48px;
        margin-bottom: 20px;
        margin-top: 5%;
        margin-left: auto; /* Hapus atau set ke auto */
        margin-right: auto; /* Hapus atau set ke auto */
    }

    .about-section p {
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 30px;
        margin-left: auto; /* Hapus atau set ke auto */
        margin-right: auto;
    }

    /* Circular shapes (decorative elements) */
    .circle1,
    .circle2 {
        position: fixed;
        border-radius: 50%;
        opacity: 0.4;
    }

    .circle1 {
        width: 400px;
        height: 400px;
        background-color: #b46366;
        top: 150px;
        left: -100px;
    }

    .circle2 {
        width: 300px;
        height: 300px;
        background-color: #b46366;
        bottom: 100px;
        right: -100px;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .about-section h1 {
            font-size: 36px;
        }

        .about-section p {
            font-size: 16px;
        }

        .navbar {
            padding: 20px 20px;
        }
    }
</style>
