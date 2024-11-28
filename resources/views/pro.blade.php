@extends ('navbar')

@section('content')

<div class="container">
    <!-- Breadcrumb Navigation (optional) -->
    <div class="breadcrumb">
        Home > Solusi > Pro Bono
    </div>

    <!-- Main Heading -->
    <h1>Pemberian Layanan Bantuan Hukum Secara Gratis</h1>

    <!-- Pro Bono Section -->
    <div class="probono-section">
        <p>
            Pro Bono berasal dari bahasa latin yang berarti "for the public good" atau untuk kebaikan publik/masyarakat, yaitu pemberian cuma-cuma terhadap suatu layanan atau jasa kepada orang yang membutuhkan.
            Yang berhak mendapatkan fasilitas Pro Bono dari kami adalah orang atau kelompok orang miskin dan masyarakat atau kelompok masyarakat sebagai pencari keadilan yang berkategori miskin.
        </p>
        <h2>Peraturan terkait Pro Bono:</h2>
        <ul>
            <li> Kewajiban memberikan layanan Pro Bono oleh Advokat kepada pencari keadilan diatur dalam pasal 22 UU No. 18 Tahun 2003 tentang Advokat.</li>
            <li> Undang-Undang No. 16 Tahun 2011 tentang Bantuan Hukum.</li>
            <li> PP No 83 Tahun 2008 tentang persyaratan dan tata cara pemberian bantuan hukum secara cuma-cuma.</li>
        </ul>
        <h2>Persyaratan:</h2>
        <ul>
            <li>Surat Keterangan Tidak Mampu (SKTM) yang dikeluarkan oleh Kepala Desa/Lurah/Kepala Wilayah setempat yang menyatakan bahwa benar yang bersangkutan tidak mampu membayar biaya perkara, atau</li>
            <li>Surat Keterangan Tunjangan Sosial lainnya seperti Kartu Keluarga Miskin (KKM), Kartu Jaminan Kesehatan Masyarakat (Jamkesmas), Kartu Beras Miskin (Raskin), Kartu Program Keluarga Harapan (PKH),
                Kartu Bantuan Langsung Tunai (BLT), Kartu Perlindungan Sosial (KPS), atau dokumen lainnya yg berkaitan dengan daftar penduduk miskin dalam basis data terpadu pemerintah atau yg dikeluarkan oleh 
                instansi lain yg berwenang untuk memberikan ke terang tidak mampu.</li>

            <!-- Additional items can be added here -->
        </ul>

        <!-- Form with button on the left -->
        <form action="{{ route('question') }}" method="GET">
            <div style="display: flex; align-items: center;">
                <a href="{{ route('question') }}" class="question-btn">Tanya Kami</a>
            </div>
        </form>

    </div>
</div>

@endsection

<style>
    /* General Body Styling */
    body {
        font-family: Arial, sans-serif;
        background-color: #4D0F0F; /* Dark red background */
        color: #FFFFFF; /* White text */
        margin: 0;
        padding: 0;
    }

    /* Container Styling */
    .container {
        width: 90%;
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
    }

    /* Breadcrumb Styling */
    .breadcrumb {
        color: #D6C3A5; /* Gold color */
        font-size: 14px;
        margin-bottom: 20px;
    }

    /* Main Heading Styling */
    h1 {
        font-size: 28px;
        font-weight: bold;
        margin-bottom: 20px;
        color: #FFFFFF;
        margin-left: 35px;
    }

    /* Pro Bono Section Styling */
    .probono-section {
        background-color: #D6C3A5; /* Light brown background */
        padding: 20px;
        border-radius: 10px;
        color: #4D0F0F; /* Dark red text */
    }

    /* Paragraph Styling */
    .probono-section p {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    /* Subheading Styling */
    .probono-section h2 {
        font-size: 20px;
        font-weight: bold;
        margin-top: 20px;
        color: #4D0F0F;
    }

    /* List Styling */
    .probono-section ul {
        margin-top: 10px;
        padding-left: 20px;
    }

    .probono-section ul li {
        font-size: 16px;
        line-height: 1.6;
        margin-bottom: 10px;
        position: relative;
        padding-left: 20px;
    }

    /* Custom Bullet Point */
    .probono-section ul li::before {
        content: "\2022"; /* Unicode bullet point */
        color: #FFD700; /* Gold color for bullet point */
        font-weight: bold;
        position: absolute;
        left: 0;
    }

    /* Button Styling */
    .question-btn {
        padding: 15px 25px;
        background-color: #a34949; /* Gold background */
        color: white; /* Dark red text */
        border: none;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        text-decoration: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
        transition: background-color 0.3s;
    }

    .question-btn:hover {
        background-color: #E0C100; /* Darker gold color on hover */
    }
</style>
