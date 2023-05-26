<?php
include 'admin/functions.php';
// masukan file php.ini

// penghubung database
$pdo = pdo_connect_mysql();
// Dapatkan halaman melalui permintaan GET (URL param: halaman), jika tidak ada default halaman ke 1
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;
// Jumlah record yang akan ditampilkan di setiap halaman
$records_per_page = 10;


// Persiapkan pernyataan SQL dan dapatkan catatan dari tabel sekolahdata kami, LIMIT akan menentukan halaman
$stmt = $pdo->prepare('SELECT * FROM sekolahdata ORDER BY id LIMIT :current_page, :record_per_page');
$stmt->bindValue(':current_page', ($page - 1) * $records_per_page, PDO::PARAM_INT);
$stmt->bindValue(':record_per_page', $records_per_page, PDO::PARAM_INT);
$stmt->execute();
// Ambil record agar kita bisa menampilkannya di template kita.
$contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);


// Dapatkan jumlah total sekolahdata, ini agar kami dapat menentukan apakah harus ada tombol berikutnya dan sebelumnya
$num_contacts = $pdo->query('SELECT COUNT(*) FROM sekolahdata')->fetchColumn();

// Templat Beranda di bawah ini.
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Raleway:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
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
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item ms-5 ">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="sdgs.php">SDGs</a>
                    </li>
                    <li class="nav-item ms-5 bold-text">
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
    <section class="banner" id="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wrap-banner2 d-flex flex-column justify-content-center align-items-center">
                        <h1 class="heading-banner bann-data">
                            Data Sekolah di Lampung Utara
                        </h1>
                        <p class="subheading-banner">
                            Berisikan data sekolah dari berbagai jenjang pendidikan yang ada di lampung utara sebagai
                            informasi dalam bentuk sebaran sekolah pada setiap kecamatan yang ada
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home end -->

    <!-- Latar start-->
    <section id="latar" class="latar margin2">
        <div class="container">
            <div class="wrap-latar">
                <h1 class="heading mb-4">Jenjang Pendidikan</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <p class="teks-latar">
                            Jenjang pendidikan mengacu pada tahapan-tahapan yang harus dilalui oleh seseorang dalam
                            memperoleh pendidikan formal. Jenjang pendidikan ini dibagi menjadi beberapa level, mulai
                            dari tingkat dasar hingga tingkat tinggi. Setiap level pada jenjang pendidikan memiliki
                            ciri-ciri dan tujuan yang berbeda-beda.
                            Berikut adalah beberapa level pada jenjang pendidikan secara umum: <br>
                            1. Pendidikan anak usia dini (PAUD) <br>
                            2. Sekolah dasar (SD) <br>
                            3. menengah pertama (SMP) <br>
                            4. Sekolah menengah atas (SMA) <br>
                            5. Perguruan tinggi atau universitas <br>

                        </p>
                    </div>
                    <div class="col-lg-6">
                        <img src="images/sdgs1.png" alt="" class="img-fluid">
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
                <div class="heading text-center" style="color: white">Tabel Data Adminstratif</div>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="heading text-center">Jenjang Pendidikan</div>
                            <div class="img-card text-center"> <img src="images/pendidikan.png" alt=""></div>
                            <p class="teks-card text-center">Tabel Data Administratif berdasarkan jenjang pendidikan di
                                kabupaten Lampung Utara
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="heading text-center">Kecamatan</div>
                            <div class="img-card text-center"> <img src="images/kecamatan.png" alt=""></div>
                            <p class="teks-card text-center">Tabel Data Administratif berdasarkan kecamatan di kabupaten
                                Lampung Utara</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- tentang end -->

    <!-- Tabel data sekolah start-->
    <section id="silsilah" class="silsilah margin1">
        <div class="container">
            <h1 class="heading">
                Tabel Data Jenjang Pendidikan di Kabupaten Lampung Utara
            </h1>
            <!-- fitur search -->

            <!-- <div class="wrap-btn d-flex justify-content-between mt-5">
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Urutkan sesuai
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">Nama Sekolah</a></li>
                        <li><a class="dropdown-item" href="#">Kecamatan</a></li>
                        <li><a class="dropdown-item" href="#">Jenjang Pendidikan</a></li>
                    </ul>
                </div>
                <form class="d-flex form-data" action="data_sekolah" method="get">
                    <input class="form-control me-2" type="search" placeholder="Pencarian" aria-label="Search" formmethod="post" name="search" id="Search">
                    <button class="btn btn-cari" type="submit">Cari</button>
                </form>
            </div> -->
            <!-- fitur search -->
            <?php

            ?>

            <!-- tabel -->
            <div class="content read mt-3">
                <table>
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Nama Sekolah</td>
                            <td>Jenjang Pendidikan</td>
                            <td>Kecamatan</td>
                            <td>Jumlah Siswa</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($contacts as $contact) : ?>
                            <tr>
                                <td><?= $contact['id'] ?></td>
                                <td><?= $contact['nama_sekolah'] ?></td>
                                <td><?= $contact['jenjang'] ?></td>
                                <td><?= $contact['kecamatan'] ?></td>
                                <td><?= $contact['jumlah_siswa'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="pagination">
                    <?php if ($page > 1) : ?>
                        <a href="data_sekolah.php?page=<?= $page - 1 ?>"><i class="fas fa-angle-double-left fa-sm"></i></a>
                    <?php endif; ?>
                    <?php if ($page * $records_per_page < $num_contacts) : ?>
                        <a href="data_sekolah.php?page=<?= $page + 1 ?>"><i class="fas fa-angle-double-right fa-sm"></i></a>
                    <?php endif; ?>
                </div>
            </div>
            <!-- tabel -->

        </div>

    </section>
    <!-- Silsilah kepala desa end -->
    <!-- Tabel data sekolah end -->




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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
        });
    </script>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <script src="script/script.js"></script>


    <!-- Script JS -->
</body>

</html>