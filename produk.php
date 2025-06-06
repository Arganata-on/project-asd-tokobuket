<?php
include("database.php");

$kategori = $_GET['kategori'] ?? 'semua';

if ($kategori == 'semua') {
    $sql = "   SELECT * FROM produk";
} else {
    $sql = "SELECT * FROM produk WHERE id_kategori = '$kategori'";
}

$result = mysqli_query($conn, $sql);

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

        <form action="produk.php" method="get">
            <div class="categories">
                <button type="submit" name="kategori" value="semua" class="category active">Semua</button>
                <button type="submit" name="kategori" value="1" class="category">Kategori A</button>
                <button type="submit" name="kategori" value="2" class="category">Kategori B</button>
                <button type="submit" name="kategori" value="3" class="category">Kategori C</button>
                <button type="submit" name="kategori" value="4" class="category">Kategori D</button>
                <button type="submit" name="kategori" value="5" class="category">Kategori E</button>
                <button type="submit" name="kategori" value="6" class="category">Kategori F</button>
            </div>
        </form>

        <ul class="product-list">
            <?php while ($row = mysqli_fetch_assoc($result)): ?>

                <li class="product">
                    <div class="product-image">
                        <img src="<?php echo htmlspecialchars($row['gambar_produk']) ?>" alt="<?php echo htmlspecialchars($row['nama_produk']) ?>" />
                    </div>

                    <div class="product-content">
                        <h2>
                            <?php echo htmlspecialchars($row['nama_produk']) ?>
                        </h2>
                        <p class="product-description"><?php echo htmlspecialchars($row['deskripsi_produk']) ?></p>
                        <span class="product-price">Rp <?php echo number_format($row['harga_produk'], 0, ',', '.') ?>
                        </span>
                        <div class="product-buttons">
                            <a href="detail-produk.php" class="btn btn-outline">
                                <i class="fas fa-info-circle"></i> Detail
                            </a>
                            <button class="btn btn-primary">
                                <i class="fas fa-cart-plus"></i> Beli
                            </button>
                        </div>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    </main>
</body>

</html>