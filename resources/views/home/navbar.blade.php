<style>
    .navbar-brand img {
        max-height: 40px; /* Ukuran maksimum tinggi logo */
    }

    .navbar-nav {
        margin-left: auto; /* Memposisikan menu di sebelah kanan */
    }

    .navbar-nav .nav-item {
        margin-left: 15px; /* Jarak antar menu */
    }

    @media (max-width: 991.98px) {
        .navbar-nav {
            margin-left: 0;
        }

        .navbar-collapse {
            background-color: #fff; /* Warna latar belakang navbar saat di-collapse */
            box-shadow: 0 8px 16px rgba(0,0,0,0.1); /* Shadow untuk tampilan drop-down */
        }

        .navbar-nav .nav-item {
            margin-left: 0; /* Jarak antar menu saat di-collapse */
            margin-bottom: 10px; /* Jarak antara menu */
        }
    }
</style>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-white sticky-top">
<div class="container">
    <a class="navbar-brand" href="#">
        <img src="./assets/images/logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#hero">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#jadwal-kegiatan">Agenda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#galeri">Galeri</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#alternatif">Alternatif Kunjungan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#riwayat">Riwayat Acara</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#faq">FAQ</a>
            </li>
        </ul>
    </div>
</div>
</nav>
