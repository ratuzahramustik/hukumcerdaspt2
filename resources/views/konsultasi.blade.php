@extends('navbar')

@section('content')

<div class="container">
    <div class="contact-header">
        <h2>Tim Hukum Cerdas</h2>
    </div>

    <div class="contact-row">
        <div class="contact-card">
            <img src="{{ asset('assets/img/konsul.png') }}" alt="Maheswari Maudino, S.H">
            <h3>Maheswari Maudino, S.H</h3>
            <p><a href="https://wa.me/6285932940537" style="color: inherit; text-decoration: none;">+62 859-3294-0537</a></p>
            </div>

        <div class="contact-card">
            <img src="{{ asset('assets/img/konsul.png') }}" alt="Maheswari Maudino, S.H">
            <h3>Maheswari Maudino, S.H</h3>
            <p><a href="https://wa.me/6285932940537" style="color: inherit; text-decoration: none;">+62 859-3294-0537</a></p>
        </div>
    </div>

    <div class="info-row">
        <div class="info-block">
            <h4>Address</h4>
            <p>Paledang, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat</p>
        </div>

        <div class="info-block">
            <h4>Email</h4>
            <p>hukumcerdas@humdas.id</p>
        </div>

        <div class="info-block">
            <h4>Telephone</h4>
            <p>+62 859-3294-0537</p>
        </div>
    </div>
</div>

@endsection

<style>
    /* Global Styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #4D0F0F;
        /* Dark red background */
        color: #FFFFFF;
        /* White text */
        margin: 0;
        padding: 0;
    }

    /* Container */
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 80px auto 30px;
        padding: 20px;
        text-align: center;
    }

    /* Header Styling */
    .contact-header {
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 40px;
        color: #FFD700;
        /* Gold color */
    }

    /* Contact Cards */
    .contact-row {
        
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 30px;
        flex-wrap: wrap;
    }

    .contact-card {
        width: 250px;
        background-color: #FFFFFF;
        color: #4D0F0F;
        padding: 20px;
        border-radius: 10px;
        text-align: center;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .contact-card img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 15px;
        object-fit: cover;
        /* Ensures the image fills the circle */
    }

    .contact-card h3 {
        font-size: 18px;
        margin: 10px 0;
    }

    .contact-card p {
        margin: 5px 0;
        font-size: 14px;
    }

    .contact-card:hover {
        transform: scale(1.05);
        /* Slight zoom effect on hover */
    }

    /* Info Section */
    .info-row {
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 30px;
        margin-top: 50px;
        flex-wrap: wrap;
    }

    .info-block {
        width: 250px;
        background-color: rgba(255, 255, 255, 0.2);
        padding: 20px;
        border-radius: 8px;
        text-align: center;
    }

    .info-block h4 {
        font-size: 16px;
        margin-bottom: 10px;
        color: #FFD700;
        /* Gold color */
    }

    .info-block p {
        margin: 5px 0;
        font-size: 14px;
        color: #FFFFFF;
    }

    /* Responsive Design */
    @media (max-width: 768px) {

        .contact-row,
        .info-row {
            flex-direction: column;
            align-items: center;
        }

        .contact-card,
        .info-block {
            width: 80%;
            margin-bottom: 20px;
        }
    }
</style>