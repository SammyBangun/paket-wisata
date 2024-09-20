<?php
include('./config/link.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VSGA JWD Kominfo</title>
    <link rel="stylesheet" href="./style/styling.css">
</head>

<body>
    <!-- Jumbotron -->
    <?php
    include('./config/jumbotron.php');
    ?>

    <!-- Navbar -->
    <?php
    include('./config/nav_index.php');
    ?>

    <!-- Main Content -->
    <div class="container-fluid mt-5 px-5">

        <!-- Video Link -->
        <div class="row my-4">
            <!-- Video Link -->
            <aside class="col-md-4">
                <h2 class="text-center">Video Kegiatan Wisata</h2>
                <div class="card p-3 m-3">
                    <h3>Paket 1</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8GBfWxF40rg"></iframe>
                    </div>
                </div>
                <div class="card p-3 m-3">
                    <h3>Paket 2</h3>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/werdXj10mjo"></iframe>
                    </div>
                </div>
            </aside>


            <!-- Packages List -->
            <div class="col-md-8 text-center" id="paket">
                <h1>Paket Wisata</h1>
                <div class="row">
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/photo/ceritanesia/2021/09/desa-dokan-1024x681.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Paket Desa Budaya Dokan</h5>
                                <p class="card-text"><small class="text-muted">24 Juli 2024</small></p>
                                <p class="card-text">Desa dokan menawarkan keunggulan dari bangunan rumat adat tradisional karo yang berusia 100 tahun. Anda yang menginginkan wisata tanpa begitu pada pengunjung, wisata di desa dokan salah satunya. atmosfir menyenangkan tanpa ribetnya keramaian, berfoto ria dan tempat instagramable khas ekstotis desa, tentu jadi tempat menarik.</p>
                                <a class="btn btn-primary" href="./utilities/input.php">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/photo/ceritanesia/2021/09/juma-bakal.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Paket Wisata Juma Bakal - Harga Promo Sampai Oktober</h5>
                                <p class="card-text"><small class="text-muted">29 Juni 2024</small></p>
                                <p class="card-text">uma bakal menawarkan tempat penginapan berkonsep glamping yang ada di desa dokan. terdapat 4 spot menarik yang bisa pengunjung nikmati berfoto, sembari meninkmati suasana khas pedesaan. Beberapa fasilitas seperti kamar mandi, tong sampah hadir disini.</p>
                                <a class="btn btn-primary" href="./utilities/input.php">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/photo/ceritanesia/2021/09/museum-karo-lingga-kabanjahe.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Paket Museum Karo lingga</h5>
                                <p class="card-text"><small class="text-muted">24 Agustus 2024</small></p>
                                <p class="card-text">letaknya ada di 5 kilometer sebelah barat kabanjahe, kelebihan museum ini ialah tempat penyimpanan dari segudang koleksi kesenian semisal topeng, peralatan musik, alat berburu, perlengkapan upacara adat, alat obat obatan bahkan koleksi kain tenun eksotik koleksi museum karo lingga kerap kali dianggap penggambaran masyarakat masyakarat dahulu.</p>
                                <a class="btn btn-primary" href="./utilities/input.php">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/photo/ceritanesia/2021/09/puncak-siosar-2000-kabanjahe.jpg" class="card-img-top img-fluid" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Puncak 2000 Siosar</h5>
                                <p class="card-text"><small class="text-muted">24 Juli 2024</small></p>
                                <p class="card-text">tempat wisata di kabanjahe selanjutnya, kita berada puncak 2000 siosar. lokasinya ada 30 km dari berastagi, tempat ini menawarkan pengalaman wisata yang menarik ketika berada tempat tertinggi pada puncak ini. pemandangan gunung sinabung maupun deretan perbukitan dapat disaksikan secara langsung dari sini, tentu anda dapat jadikan area ini sebagai penyegaran untuk mata.</p>
                                <a class="btn btn-primary" href="./utilities/input.php">Daftar Paket</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('./config/footer.php');

    ?>


</body>

</html>