<!doctype html>
<html lang="en">

<head>
   @include('home.css')
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!-- NAVBAR -->
    
    @include('home.navbar')

    <!-- BERANDA -->
    @include('home.beranda')

    

    <!-- Jadwal Kegiatan -->
    @include('home.agenda')

    <!-- Galeri -->
   @include('home.galeri')

    <!-- Sekitar -->
    @include('home.alternatif')
   
            <!-- Section 2 -->


    <!-- BLOG -->
    @include('home.riwayat')

    <!--FAQ-->
    @include('home.faq')

    <!-- FOOTER -->
   @include('home.footer')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>
