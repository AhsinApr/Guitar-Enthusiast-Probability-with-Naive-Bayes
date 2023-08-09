<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Rekomendasi Jogja Guitar Shop</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet" />
    <!-- Memanggil Feather Icons -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Memanggil CSS -->
    <link rel="stylesheet" href="/assets/CSS Code/style menu utama.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="Navbar">
        <label>Jogja Guitar <span>Shop</span></label>
        <a href="/user/contentbased">Pilih Gitar</a>
        <div class="dropdown">
            <a class="dropdown-btn" href="">Kelola Data</a>
            <div class="dropdown-content">
                <a href="/user/editdata">Edit Data</a>
                <a href="/user/tambahdata">Tambah Data</a>

            </div>
        </div>
    </nav>
    <!-- Navbar End -->
    <!-- Membuat Tampilan Layar -->
    <section class="Tampilan">
        <main class="container">
            <h1>Jogja Guitar Shop</h1>
            <p>
                Toko Musik di Daerah Istimewa Yogyakarta yang menjual berbagai gitar
                akustik terbaik
            </p>
            <br />
            <!-- <a href="/user/lihatproduk" class="button">Lihat Produk</a> -->
            <!-- <a href="/home/index" class="button">Finish</a> -->
        </main>
    </section>
    <!-- Feather Icons -->
    <script>
        feather.replace();
    </script>
    <!-- Membuat Marquee -->
    <div class="container">
        <div class="bottom">
            <marquee behavior="scroll" direction="left" scrollamount="5">
                Selamat Datang Kembali , Ayo bantu pelanggan dalam menentukan gitar
                kesukaannya
            </marquee>
        </div>
    </div>
</body>

</html>