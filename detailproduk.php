<?php
include("database.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bouquet Shop - Produk</title>
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.php" class="logo">
                <img src="images/cat.png" alt="Logo" />
                <span>Bouquet Shop</span>
            </a>
            <ul class="nav-links">
                <li><a href="index.php"><i class="fas fa-home"></i>Beranda</a></li>
                <li><a href="produk.php" class="active"><i class="fas fa-paper-plane"></i>Produk</a></li>
                <li><a href="keranjang.html"><i class="fas fa-shopping-cart"></i>Keranjang<span class="cart-count">3</span></a></li>
                <li><a href="kontak.html"><i class="fas fa-phone-alt"></i>Kontak</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div id="detail-produk" class="page-content">
            <div
                class="breadcrumb"
                style="margin-bottom: 20px; justify-content: flex-start">
                <a href="index.php">Beranda</a>
                <span class="separator">/</span>
                <a href="produk.php">Produk</a>
                <span class="separator">/</span>
                <span>Detail Produk</span>
            </div>
            <div class="product-detail">
                <div class="main-image">
                    <img
                        src="images/pexels-pixabay-158028.jpg"
                        alt="Kucing Persia" />
                </div>

                <div class="product-info">
                    <h1 class="product-title">Kucing Persia Putih</h1>
                    <div class="product-meta">
                        <span class="product-price">Rp 1.500.000</span>
                        <span class="product-stock">Tersedia: 5 ekor</span>
                    </div>

                    <div class="product-rating" style="margin-bottom: 25px">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                        <span>(42 ulasan)</span>
                    </div>

                    <div class="product-description">
                        <p>
                            Kucing Persia Putih dengan bulu lembut dan panjang, mata biru
                            yang indah, dan sifat yang sangat kalem dan penyayang. Kucing
                            ini sangat cocok untuk keluarga yang mencari teman setia yang
                            penuh kasih sayang.
                        </p>
                        <p>
                            Kucing ini telah melalui pemeriksaan kesehatan menyeluruh,
                            divaksinasi lengkap, dan memiliki silsilah yang jelas. Usia
                            kucing ini sekitar 3 bulan dan sudah terbiasa dengan lingkungan
                            rumah.
                        </p>
                        <p><strong>Karakteristik:</strong></p>
                        <ul style="margin-left: 20px; margin-top: 10px">
                            <li>Bulu panjang dan lembut berwarna putih bersih</li>
                            <li>Mata biru cerah</li>
                            <li>Sangat ramah dan penyayang</li>
                            <li>Cocok untuk keluarga dengan anak-anak</li>
                            <li>Sudah divaksinasi dan bebas penyakit</li>
                        </ul>
                    </div>

                    <div class="product-actions">
                        <div class="quantity-selector">
                            <button class="quantity-btn">-</button>
                            <span class="quantity-value">1</span>
                            <button class="quantity-btn">+</button>
                        </div>
                        <button class="btn btn-primary" style="flex: 1">
                            <i class="fas fa-cart-plus"></i> Tambah ke Keranjang
                        </button>
                        <button
                            class="btn btn-outline"
                            style="
                  flex: 1;
                  border-color: var(--primary);
                  color: var(--primary);
                ">
                            <i class="fas fa-heart"></i> Favoritkan
                        </button>
                    </div>
                </div>
            </div>

            <div
                style="
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
          ">
                <h2 style="color: var(--primary); margin-bottom: 20px">
                    Deskripsi Lengkap
                </h2>
                <p>
                    Kucing Persia Putih adalah salah satu ras kucing paling populer di
                    dunia. Dengan penampilannya yang anggun dan sifatnya yang tenang,
                    kucing ini sangat cocok sebagai hewan peliharaan keluarga.
                </p>
                <p>
                    Kucing ini memiliki bulu panjang yang membutuhkan perawatan rutin.
                    Kami merekomendasikan penyikatan setiap hari untuk mencegah kusut
                    dan menjaga bulu tetap indah. Mata mereka juga perlu dibersihkan
                    secara teratur karena cenderung berair.
                </p>
                <p>
                    Kucing Persia dikenal sebagai kucing yang sangat tenang dan
                    penyayang. Mereka lebih suka lingkungan yang tenang dan stabil, dan
                    biasanya tidak terlalu aktif. Mereka sangat setia kepada pemiliknya
                    dan senang menghabiskan waktu di pangkuan Anda.
                </p>
                <p>Semua kucing dari PetLovers datang dengan:</p>
                <ul style="margin-left: 20px; margin-top: 10px">
                    <li>Sertifikat kesehatan dari dokter hewan</li>
                    <li>Vaksinasi lengkap</li>
                    <li>Garansi kesehatan 30 hari</li>
                    <li>Panduan perawatan dasar</li>
                    <li>Starter kit (makanan, mainan, dan perlengkapan dasar)</li>
                </ul>
            </div>
        </div>
    </main>
</body>

</html>