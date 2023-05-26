<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/L.Control.Locate.min.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-search.css">
    <link rel="stylesheet" href="css/leaflet-control-geocoder.Geocoder.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">

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
    <title>Peta Administratif Lampung Utara</title>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

    <style>
        #map {
            width: 100%;
            height: 100vh;
        }

        .wrap-map {
            height: 100vh;
        }
    </style>
    <title></title>
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
                    <li class="nav-item ms-5 ">
                        <a class="nav-link " href="data_sekolah.php">Data Sekolah</a>
                    </li>
                    <li class="nav-item ms-5 bold-text">
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
                    <div class="wrap-banner3 d-flex flex-column justify-content-center align-items-center">
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
                <h1 class="heading mb-4 text-center">Peta Jenjang Pendidikan</h1>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="wrap-map">
                            <div id="map">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latar end -->

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


    <!-- SCRIPT -->
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/L.Control.Locate.min.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-control-geocoder.Geocoder.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <script src="js/leaflet-search.js"></script>
    <script src="data/ADMINISTRASIKECAMATAN_AR_50K_1.js"></script>
    <script src="data/Sekolah_2.js"></script>
    <script>
        var highlightLayer;

        function highlightFeature(e) {
            highlightLayer = e.target;

            if (e.target.feature.geometry.type === 'LineString') {
                highlightLayer.setStyle({
                    color: '#ffff00',
                });
            } else {
                highlightLayer.setStyle({
                    fillColor: '#ffff00',
                    fillOpacity: 1
                });
            }
        }
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-5.153164351173684, 104.3194176020136],
            [-4.52370807867587, 105.5460503381633]
        ]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix(
            '<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>'
        );
        var autolinker = new Autolinker({
            truncate: {
                length: 30,
                location: 'smart'
            }
        });
        L.control.locate({
            locateOptions: {
                maxZoom: 19
            }
        }).addTo(map);
        var measureControl = new L.Control.Measure({
            position: 'topleft',
            primaryLengthUnit: 'meters',
            secondaryLengthUnit: 'kilometers',
            primaryAreaUnit: 'sqmeters',
            secondaryAreaUnit: 'hectares'
        });
        measureControl.addTo(map);
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .innerHTML = '';
        document.getElementsByClassName('leaflet-control-measure-toggle')[0]
            .className += ' fas fa-ruler';
        var bounds_group = new L.featureGroup([]);

        function setBounds() {}
        map.createPane('pane_GoogleRoad_0');
        map.getPane('pane_GoogleRoad_0').style.zIndex = 400;
        var layer_GoogleRoad_0 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            pane: 'pane_GoogleRoad_0',
            opacity: 1.0,
            attribution: '<a href="https://www.google.at/permissions/geoguidelines/attr-guide.html">Map data ©2015 Google</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 20
        });
        layer_GoogleRoad_0;
        map.addLayer(layer_GoogleRoad_0);

        function pop_ADMINISTRASIKECAMATAN_AR_50K_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature
                .properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature
                .properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMKK'] !== null ? autolinker.link(feature
                .properties['WADMKK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WADMPR'] !== null ? autolinker.link(feature
                .properties['WADMPR'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Leng'] !== null ? autolinker.link(feature
                .properties['Shape_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Shape_Area'] !== null ? autolinker.link(feature
                .properties['Shape_Area'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_ADMINISTRASIKECAMATAN_AR_50K_1_0(feature) {
            switch (String(feature.properties['NAMOBJ'])) {
                case 'ABUNG BARAT':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(125,169,224,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNG SELATAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(202,67,109,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNG TENGAH':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,79,223,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNG TIMUR':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(201,132,20,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNGKUNANG':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(177,236,126,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNGPEKURUN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(99,239,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNGSEMULI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(81,201,26,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNGSURAKARTA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(203,85,158,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ABUNGTINGGI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(218,42,42,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ANAKRATUAJI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(30,207,83,1.0)',
                            interactive: true,
                    }
                    break;
                case 'ANAKTUHA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(95,45,204,1.0)',
                            interactive: true,
                    }
                    break;
                case 'BANJIT':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(212,91,148,1.0)',
                            interactive: true,
                    }
                    break;
                case 'BLAMBANGANPAGAR':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(208,146,95,1.0)',
                            interactive: true,
                    }
                    break;
                case 'BUKITKEMUNING':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(65,208,175,1.0)',
                            interactive: true,
                    }
                    break;
                case 'BUNGAMAYANG':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(120,233,190,1.0)',
                            interactive: true,
                    }
                    break;
                case 'GUNUNGLABUHAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(234,122,73,1.0)',
                            interactive: true,
                    }
                    break;
                case 'HULU SUNGKAI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(15,46,221,1.0)',
                            interactive: true,
                    }
                    break;
                case 'HUTAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,68,45,1.0)',
                            interactive: true,
                    }
                    break;
                case 'KEBUNTEBU':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(84,239,154,1.0)',
                            interactive: true,
                    }
                    break;
                case 'KOTABUMI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(177,92,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'KOTABUMI SELATAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(215,54,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'KOTABUMI UTARA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(147,132,235,1.0)',
                            interactive: true,
                    }
                    break;
                case 'MUARASUNGKAI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(60,231,85,1.0)',
                            interactive: true,
                    }
                    break;
                case 'NEGERIAGUNG':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(19,203,16,1.0)',
                            interactive: true,
                    }
                    break;
                case 'NEGERIBESAR':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,179,209,1.0)',
                            interactive: true,
                    }
                    break;
                case 'PAKUANRATU':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(171,233,71,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SELAGAILINGGA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,187,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUMBERJAYA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(37,91,217,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUNGKAI BARAT':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(226,76,214,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUNGKAI SELATAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(213,200,53,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUNGKAI TENGAH':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(197,210,13,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUNGKAI UTARA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(47,213,13,1.0)',
                            interactive: true,
                    }
                    break;
                case 'SUNGKAIJAYA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(229,78,194,1.0)',
                            interactive: true,
                    }
                    break;
                case 'TANJUNGRAJA':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(207,119,132,1.0)',
                            interactive: true,
                    }
                    break;
                case 'TERUSANNUNYAI':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(176,47,215,1.0)',
                            interactive: true,
                    }
                    break;
                case 'TULANGBAWANG UDIK':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(79,195,206,1.0)',
                            interactive: true,
                    }
                    break;
                case 'TUMIJAJAR':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,221,123,1.0)',
                            interactive: true,
                    }
                    break;
                case 'WAYPENGUBUAN':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(120,27,227,1.0)',
                            interactive: true,
                    }
                    break;
                case 'NULL':
                    return {
                        pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
                            opacity: 1,
                            color: 'rgba(35,35,35,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(213,185,93,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1');
        map.getPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1').style.zIndex = 401;
        map.getPane('pane_ADMINISTRASIKECAMATAN_AR_50K_1').style['mix-blend-mode'] = 'normal';
        var layer_ADMINISTRASIKECAMATAN_AR_50K_1 = new L.geoJson(json_ADMINISTRASIKECAMATAN_AR_50K_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_ADMINISTRASIKECAMATAN_AR_50K_1',
            layerName: 'layer_ADMINISTRASIKECAMATAN_AR_50K_1',
            pane: 'pane_ADMINISTRASIKECAMATAN_AR_50K_1',
            onEachFeature: pop_ADMINISTRASIKECAMATAN_AR_50K_1,
            style: style_ADMINISTRASIKECAMATAN_AR_50K_1_0,
        });
        bounds_group.addLayer(layer_ADMINISTRASIKECAMATAN_AR_50K_1);
        map.addLayer(layer_ADMINISTRASIKECAMATAN_AR_50K_1);

        function pop_Sekolah_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    for (i in e.target._eventParents) {
                        e.target._eventParents[i].resetStyle(e.target);
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMOBJ'] !== null ? autolinker.link(feature
                .properties['NAMOBJ'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature
                .properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature
                .properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Sekolah_2_0() {
            return {
                pane: 'pane_Sekolah_2',
                radius: 4.0,
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(183,72,75,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_Sekolah_2');
        map.getPane('pane_Sekolah_2').style.zIndex = 402;
        map.getPane('pane_Sekolah_2').style['mix-blend-mode'] = 'normal';
        var layer_Sekolah_2 = new L.geoJson(json_Sekolah_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Sekolah_2',
            layerName: 'layer_Sekolah_2',
            pane: 'pane_Sekolah_2',
            onEachFeature: pop_Sekolah_2,
            pointToLayer: function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_Sekolah_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_Sekolah_2);
        map.addLayer(layer_Sekolah_2);
        var osmGeocoder = new L.Control.Geocoder({
            collapsed: true,
            position: 'topleft',
            text: 'Search',
            title: 'Testing'
        }).addTo(map);
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .className += ' fa fa-search';
        document.getElementsByClassName('leaflet-control-geocoder-icon')[0]
            .title += 'Search for a place';
        var baseMaps = {};
        L.control.layers(baseMaps, {
            '<img src="legend/Sekolah_2.png" /> Sekolah': layer_Sekolah_2,
            'ADMINISTRASIKECAMATAN_AR_50K<br /><table><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGBARAT0.png" /></td><td>ABUNG BARAT</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGSELATAN1.png" /></td><td>ABUNG SELATAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGTENGAH2.png" /></td><td>ABUNG TENGAH</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGTIMUR3.png" /></td><td>ABUNG TIMUR</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGKUNANG4.png" /></td><td>ABUNGKUNANG</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGPEKURUN5.png" /></td><td>ABUNGPEKURUN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGSEMULI6.png" /></td><td>ABUNGSEMULI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGSURAKARTA7.png" /></td><td>ABUNGSURAKARTA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ABUNGTINGGI8.png" /></td><td>ABUNGTINGGI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ANAKRATUAJI9.png" /></td><td>ANAKRATUAJI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_ANAKTUHA10.png" /></td><td>ANAKTUHA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_BANJIT11.png" /></td><td>BANJIT</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_BLAMBANGANPAGAR12.png" /></td><td>BLAMBANGANPAGAR</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_BUKITKEMUNING13.png" /></td><td>BUKITKEMUNING</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_BUNGAMAYANG14.png" /></td><td>BUNGAMAYANG</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_GUNUNGLABUHAN15.png" /></td><td>GUNUNGLABUHAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_HULUSUNGKAI16.png" /></td><td>HULU SUNGKAI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_HUTAN17.png" /></td><td>HUTAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_KEBUNTEBU18.png" /></td><td>KEBUNTEBU</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_KOTABUMI19.png" /></td><td>KOTABUMI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_KOTABUMISELATAN20.png" /></td><td>KOTABUMI SELATAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_KOTABUMIUTARA21.png" /></td><td>KOTABUMI UTARA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_MUARASUNGKAI22.png" /></td><td>MUARASUNGKAI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_NEGERIAGUNG23.png" /></td><td>NEGERIAGUNG</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_NEGERIBESAR24.png" /></td><td>NEGERIBESAR</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_PAKUANRATU25.png" /></td><td>PAKUANRATU</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SELAGAILINGGA26.png" /></td><td>SELAGAILINGGA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUMBERJAYA27.png" /></td><td>SUMBERJAYA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUNGKAIBARAT28.png" /></td><td>SUNGKAI BARAT</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUNGKAISELATAN29.png" /></td><td>SUNGKAI SELATAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUNGKAITENGAH30.png" /></td><td>SUNGKAI TENGAH</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUNGKAIUTARA31.png" /></td><td>SUNGKAI UTARA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_SUNGKAIJAYA32.png" /></td><td>SUNGKAIJAYA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_TANJUNGRAJA33.png" /></td><td>TANJUNGRAJA</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_TERUSANNUNYAI34.png" /></td><td>TERUSANNUNYAI</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_TULANGBAWANGUDIK35.png" /></td><td>TULANGBAWANG UDIK</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_TUMIJAJAR36.png" /></td><td>TUMIJAJAR</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_WAYPENGUBUAN37.png" /></td><td>WAYPENGUBUAN</td></tr><tr><td style="text-align: center;"><img src="legend/ADMINISTRASIKECAMATAN_AR_50K_1_38.png" /></td><td></td></tr></table>': layer_ADMINISTRASIKECAMATAN_AR_50K_1,
            "Google Road": layer_GoogleRoad_0,
        }).addTo(map);
        setBounds();
        var i = 0;
        layer_ADMINISTRASIKECAMATAN_AR_50K_1.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #ffffff; font-size: 10pt; font-weight: bold; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_ADMINISTRASIKECAMATAN_AR_50K_1'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        var i = 0;
        layer_Sekolah_2.eachLayer(function(layer) {
            var context = {
                feature: layer.feature,
                variables: {}
            };
            layer.bindTooltip((layer.feature.properties['NAMOBJ'] !== null ? String(
                '<div style="color: #323232; font-size: 10pt; font-family: \'Open Sans\', sans-serif;">' +
                layer.feature.properties['NAMOBJ']) + '</div>' : ''), {
                permanent: true,
                offset: [-0, -16],
                className: 'css_Sekolah_2'
            });
            labels.push(layer);
            totalMarkers += 1;
            layer.added = true;
            addLabel(layer, i);
            i++;
        });
        map.addControl(new L.Control.Search({
            layer: layer_Sekolah_2,
            initial: false,
            hideMarkerOnCollapse: true,
            propertyName: 'NAMOBJ'
        }));
        document.getElementsByClassName('search-button')[0].className +=
            ' fa fa-binoculars';
        resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1, layer_Sekolah_2]);
        map.on("zoomend", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1, layer_Sekolah_2]);
        });
        map.on("layeradd", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1, layer_Sekolah_2]);
        });
        map.on("layerremove", function() {
            resetLabels([layer_ADMINISTRASIKECAMATAN_AR_50K_1, layer_Sekolah_2]);
        });
    </script>
</body>

</html>