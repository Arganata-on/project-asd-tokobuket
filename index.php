<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bouquet Shop - Buket Terlengkap</title>
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <header class="header">
        <nav class="navbar">
            <a href="index.php" class="logo"><img src="images/cat.png" alt="Logo" />
                <span>Bouquet Shop</span>
            </a>
            <ul class="nav-links">
                <li>
                    <a href="index.php" class="active"><i class="fas fa-home"></i>Beranda</a>
                </li>
                <li>
                    <a href="produk.php"><i class="fas fa-paper-plane"></i>Produk</a>
                </li>
                <li>
                    <a href="keranjang.html"><i class="fas fa-shopping-cart"></i>Keranjang<span
                            class="cart-count">3</span></a>
                </li>
                <li>
                    <a href="kontak.html"><i class="fas fa-phone-alt"></i>Kontak</a>
                </li>
            </ul>
        </nav>
    </header>

    <main>
        <div id="beranda" class="page-content active">
            <section class="hero">
                <h1>Selamat Datang di Toko Kami!</h1>
                <p>
                    Menghadirkan koleksi buket bunga terbaik untuk setiap momen spesial.
                    Dari kejutan romantis hingga hadiah penuh makna, kami siap membantu
                    Anda memilih bunga yang paling berkesan. Temukan keindahan dalam
                    setiap rangkaian!
                </p>
                <div class="hero-buttons">
                    <a href="produk.php" class="btn btn-primary"><i class="fas fa-cart-plus"></i>Belanja Sekarang</a>
                    <a href="kontak.php" class="btn btn-outline"><i class="fas fa-clock"></i>Jadwal Buka</a>
                </div>
            </section>
            <h1 class="section-title">Produk Unggulan Kami</h1>
            <ul class="product-list">
                <li class="product">
                    <div class="product-badge">Terlaris</div>
                    <div class="product-image">
                        <img
                            src="images/cat.png"
                            alt="Item 1" />
                    </div>
                    <div class="product-content">
                        <h2>Item 1</h2>
                        <p class="product-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, blanditiis quas neque sint rerum dicta dolore quasi porro illo distinctio aut ipsam quos esse vitae eaque reiciendis mollitia veritatis. Facere.</p>
                        <span class="product-price">Rp 1.500.000</span>
                        <div class="product-buttons">
                            <a href="detail-produk.html" class="btn btn-outline"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-primary">
                                <i class="fas fa-cart-plus"></i> Beli
                            </button>
                        </div>
                    </div>
                </li>

                <li class="product">
                    <div class="product-badge">Baru</div>
                    <div class="product-image">
                        <img
                            src="images/cat.png"
                            alt="Item 2" />
                    </div>
                    <div class="product-content">
                        <h2>Item 2</h2>
                        <p class="product-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, blanditiis quas neque sint rerum dicta dolore quasi porro illo distinctio aut ipsam quos esse vitae eaque reiciendis mollitia veritatis. Facere.</p>
                        <span class="product-price">Rp 8.500.000</span>
                        <div class="product-buttons">
                            <a href="detail-produk.html" class="btn btn-outline"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-primary">
                                <i class="fas fa-cart-plus"></i> Beli
                            </button>
                        </div>
                    </div>
                </li>

                <li class="product">
                    <div class="product-image">
                        <img
                            src="images/cat.png"
                            alt="Item 3" />
                    </div>
                    <div class="product-content">
                        <h2>Item 3</h2>
                        <p class="product-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ea, blanditiis quas neque sint rerum dicta dolore quasi porro illo distinctio aut ipsam quos esse vitae eaque reiciendis mollitia veritatis. Facere.</p>
                        <span class="product-price">Rp 12.000.000</span>
                        <div class="product-buttons">
                            <a href="detail-produk.html" class="btn btn-outline"><i class="fas fa-info-circle"></i> Detail</a>
                            <button class="btn btn-primary">
                                <i class="fas fa-cart-plus"></i> Beli
                            </button>
                        </div>
                    </div>
                </li>
            </ul>

    </main>
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>Bouquet Shop</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. A illo dignissimos qui sapiente hic possimus, repellat dolorem repudiandae, explicabo consequatur facere laudantium magnam doloremque! Asperiores sequi deserunt quidem cupiditate veniam!
                </p>
            </div>
            <div class="footer-column">
                <h3>Kontak Kami</h3>
                <ul class="footer-links">
                    <li>
                        <a href="#"><i class="fas fa-map-marker-alt"></i> Jl. Kucing No. 123,
                            Jakarta</a>
                    </li>
                    <li>
                        <a href="tel:+628123456789"><i class="fas fa-phone-alt"></i> (021) 123-4567</a>
                    </li>
                    <li>
                        <a href="mailto:arganata.on@gmail.com"><i class="fas fa-envelope"></i>arganata.on@gmail.com</a>
                    </li>
                    <li>
                        <a href="kontak.php"><i class="fas fa-clock"></i> Buka Setiap Hari: 08:00 - 20:00</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="copyright">&copy; 2025 Bouquet Shop. Hak Cipta Dilindungi.</div>
    </footer>
</body>

</html>