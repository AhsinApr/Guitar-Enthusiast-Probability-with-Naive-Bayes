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

    <link rel="stylesheet" href="/assets/CSS Code/style edit data.css" />
    <!-- Memanggil CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
            background-image: url("/img/gitar.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }


        div,
        form,
        input,
        select,
        textarea,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            font-size: 32px;
            color: #fff;
            z-index: 2;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 10%;
        }

        form,
        table {
            width: 100%;
            padding: 20px;
            border-radius: 6px;
            background: #fff;
            box-shadow: 0 0 20px 0 #a82877;
        }

        .banner {
            position: relative;
            height: 210px;
            background-image: url("/img/gitar.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .banner::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        /* Reset default margin and padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Body styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        /* Form styling */
        .guitar-form {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 1200px;
        }

        .form-group {
            margin-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        input[type="text"],
        select,
        button[type="submit"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            color: #333;
        }

        input[type="file"],
        input[type="text"],
        select {
            background-color: #740D04;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"] {
            background-color: #238ABE;
            color: #fff;
            cursor: pointer;
        }

        button[type="submit"] {
            padding: 10px 20px;
            font-weight: bold;
            border: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        /* Responsive styling */
        @media (max-width: 600px) {
            .guitar-form {
                width: 100%;
            }
        }
    </style>
</head>
<?php if (session()->getFlashdata('pesan')) : ?>
    <div class="alert alert-success" role="alert">
        <?= session()->getFlashdata('pesan'); ?>
    </div>
<?php endif; ?>

<body>

    <nav class="Navbar">
        <label>Jogja Guitar <span>Shop</span></label>

        <a href="/user/menuutama">Kembali<i data-feather="arrow-right"></i></a>
    </nav>


    <section class="tampilan">

        <div class="testbox">
            <form action="/user/save" method="post" enctype="multipart/form-data" class="guitar-form">
                <div class="banner">
                    <h1>Form Tambah Data Guitar</h1>
                </div>
                <div class="form-group">
                    <label for="ukuran">Ukuran Guitar</label>
                    <select name="ukuran" id="ukuran">
                        <option value="" disabled selected>*Please select*</option>
                        <option value="Normal">Normal</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Kecil">Kecil</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="id_merk">Merk Guitar</label>
                    <input type="text" name="id_merk" id="nama" placeholder="Yamaha, Segovia, Cetta, dll" />
                    <label for="nama">Nama Guitar</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama" />
                </div>
                <div class="form-group">
                    <label for="jenis">Jenis</label>
                    <select name="jenis" id="jenis">
                        <option value="" disabled selected>Jenis</option>
                        <option value="Akustik Elektrik">Akustik Elektrik</option>
                        <option value="Akustik">Akustik</option>
                        <option value="Lele">Lele</option>
                        <option value="Ukulele">Ukulele</option>
                    </select>
                    <label for="warna">Warna</label>
                    <select name="warna" id="warna">
                        <option value="" disabled selected>Warna</option>
                        <option value="Natural">Natural</option>
                        <option value="Natural Doff">Natural Doff</option>
                        <option value="Coklat Doff">Coklat Doff</option>
                        <option value="Hitam">Hitam</option>
                        <option value="Hitam Doff">Hitam Doff</option>
                        <option value="Merah">Merah</option>
                        <option value="Merah Tua">Merah Tua</option>
                        <option value="Hitam Kuning">Hitam Kuning</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="harga">Harga</label>
                    <input type="text" name="harga" id="harga" placeholder="Terjangkau, Murah, Super" />
                    <label for="gambar">Gambar</label>
                    <input type="file" name="gambar" id="gambar" />
                </div>
                <div class="form-group">
                    <label for="hasil">Hasil</label>
                    <input type="text" name="hasil" id="harga" placeholder="Disukai, Tidak" />
                </div>
                <div class="btn-block">
                    <button type="submit">Tambah Data</button>
                </div>
            </form>
        </div>


</body>

</html>