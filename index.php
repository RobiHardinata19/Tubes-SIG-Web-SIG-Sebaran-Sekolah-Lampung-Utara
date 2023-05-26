<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <title>Peta Administratif Lampung Utara</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark  position-absolute w-100 mt-0 position-fixed">
        <div class="container wrap-nav d-flex justify-content-between">
            <div class="logo d-flex align-items-center ">
                <div class="img-logo ">
                    <img src="images/logo.png" alt="">
                </div>
                <div class="nama-logo ms-3">
                    <h2 class="desaway mt-3">Lampung Utara</h2>
                    <p class="kabupaten">Sebaran Sekolah</p>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-5 bold-text">
                        <a class="nav-link fw-bold" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="sdgs.php">SDGs</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="data_sekolah.php">Data Sekolah</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="peta_sekolah.php">Peta Sebaran</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="login.php">Login Admin</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Home start -->
    <section id="home" class="home">
        <div class="container">
            <div class="teks-home">
                <div class="row">
                    <div class="col-lg-9">
                        <div class="heading-home">WEB GIS Sebaran Sekolah di Lampung Utara</div>
                        <p class="subheading-home">Sistem Informasi Geografis lampung utara, informasi yang cukup
                            terhadap keberadaan demografi sangat diperlukan untuk menyusun perencanaan pembangunan</p>
                        <div class="btn-home mt-5">
                            <a href="peta_sekolah.php">Lihat Peta Pendidikan</a>
                        </div>
                    </div>
                </div>
                <div class="arrow">
                    <a href="#latar"><i class='bx bx-chevron-down'></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Home end -->

    <!-- Latar start-->
    <section id="latar" class="latar margin2">
        <div class="container">
            <div class="wrap-latar">
                <h1 class="heading mb-4">Latar Belakang</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="teks-latar">
                            Pendidikan memiliki peranan yang sangat penting untuk menunjang kehidupan manusia karena
                            pada dasarnya manusia dalam melaksanakan kehidupannya tidak lepas dari pendidikan.
                            Implementasi dan pengembangan kajian pendidikan juga harus disesuaikan dengan kondisi serta
                            situasi sosial yang ada di masyarakat. Sebaran satuan pendidikan mulai dari SD, SMP, SMA dan
                            sederajat juga mempengaruhi kualitas pendidikan yang ada, pada kasus kali ini mengambil
                            kualitas pendidikan yang ada di Kabupaten Lampung Utara yang sesuai dengan Tujuan
                            Pembangunan Berkelanjutan atau SDGs yaitu Poin nomor 4 yaitu Pendidikan Berkualitas.
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/latar.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latar end -->

    <!-- tentang start -->
    <section id="tentang" class="tentang margin2">
        <div class="container">
            <div class="wrap-tentang">
                <div class="heading text-center" style="color: white">Tentang</div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="heading text-center">Pendidikan</div>
                            <div class="img-card text-center"> <img src="images/pendidikan.png" alt=""></div>
                            <p class="teks-card text-center">Pengertian pendidikan sendiri bermakna melakukan suatu
                                tindakan berupa memberikan pendidikan kepada pihak lain.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="heading text-center">SDGs</div>
                            <div class="img-card text-center"> <img src="images/sdgs-icon.png" alt=""></div>
                            <p class="teks-card text-center">Pembangunan yang menjaga peningkatan kesejahteraan ekonomi
                                masyarakat secara berkesinambingan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tentang end -->

    <!-- admin start-->
    <section id="admin" class="admin margin2">
        <div class="container">
            <div class="wrap-admin">
                <h1 class="heading mb-5 text-center">WEB SIG Sebaran Sekolah di Lampung Utara</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <img src="images/kabupaten.png" alt="" class="img-fluid">

                    </div>
                    <div class="col-lg-6">
                        <p class="teks-admin">
                            Lampung Utara adalah kabupaten di provinsi Lampung, Indonesia. Ibu kotanya adalah Kecamatan
                            Kotabumi. Jumlah penduduk kabupaten Lampung Utara pada tahun 2020 sebanyak 636.908 jiwa,
                            dengan kepadatan 234 jiwa/km2. Kabupaten ini dulunya adalah kabupaten terluas/terbesar di
                            Provinsi Lampung yang sekarang meliputi Kabupaten Lampung Utara sendiri, Kabupaten Way
                            Kanan, Kabupaten Lampung Barat (yang melahirkan Kabupaten Pesisir Barat), dan Kabupaten
                            Tulang Bawang (yang melahirkan Kabupaten Tulang Bawang Barat dan Kabupaten Mesuji).
                        </p>
                        <div class="btn-peta text-end mt-5">
                            <a href="map.html">Lihat Peta Administrasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- admin end -->


<!-- FOOTER -->
    <section id="footer" class="footer margin1">
        <div class="container">
            <div class="foto">
                <img src="images/logo.png" alt="">
                <p>Lampung Utara</p>
            </div>
            <div class="sosmed">
                <h4>Sistem Informasi Geografis</h4>
                <a href=""><i class='bx bxl-whatsapp me-4'></i></a>
                <a href=""><i class='bx bxl-facebook-circle me-4'></i></a>
                <a href=""><i class='bx bxl-instagram-alt'></i></i></a>
            </div>
        </div>
    </section>
    <!-- END FOOTER -->


    <!-- Script JS -->

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

    <script src="script/script.js"></script>


    <!-- Script JS -->
</body>

</html>