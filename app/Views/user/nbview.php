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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Memanggil CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            padding-left: 10%;
            padding-top: 10%;
            padding-right: 10%;
        }

        .testbox1 {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding-left: 10%;
            padding-top: 2%;
            padding-right: 10%;
            padding-bottom: 3%;
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

        input,
        textarea,
        select {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 10px);
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 7px 0;
            background: transparent;
        }

        textarea {
            width: calc(100% - 12px);
            padding: 5px;
        }

        .item:hover p,
        .item:hover i,
        .question:hover p,
        .question label:hover,
        input:hover::placeholder {
            color: #a82877;
        }

        .item input:hover,
        .item select:hover,
        .item textarea:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #a82877;
            color: #a82877;
        }

        .item {
            position: relative;
            margin: 10px 0;
        }

        input[type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        .item i,
        input[type="date"]::-webkit-calendar-picker-indicator {
            position: absolute;
            font-size: 20px;
            color: #a9a9a9;
        }

        .item i {
            right: 1%;
            top: 30px;
            z-index: 1;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
            right: 0;
            z-index: 2;
            opacity: 0;
            cursor: pointer;
        }

        input[type="time"]::-webkit-inner-spin-button {
            margin: 2px 22px 0 0;
        }

        input[type=radio],
        input.other {
            display: none;
        }

        label.radio {
            position: relative;
            display: inline-block;
            margin: 5px 20px 10px 0;
            cursor: pointer;
        }

        .question span {
            margin-left: 30px;
        }

        label.radio:before {
            content: "";
            position: absolute;
            top: 2px;
            left: 0;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            border: 2px solid #ccc;
        }

        #radio_5:checked~input.other {
            display: block;
        }

        input[type=radio]:checked+label.radio:before {
            border: 2px solid #a82877;
            background: #a82877;
        }

        label.radio:after {
            content: "";
            position: absolute;
            top: 7px;
            left: 5px;
            width: 7px;
            height: 4px;
            border: 3px solid #fff;
            border-top: none;
            border-right: none;
            transform: rotate(-45deg);
            opacity: 0;
        }

        input[type=radio]:checked+label:after {
            opacity: 1;
        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: #a82877;
            font-size: 16px;
            color: #fff;
            cursor: pointer;
        }

        button:hover {
            background: #bf1e81;
        }

        @media (min-width: 568px) {

            .name-item,
            .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input,
            .city-item input {
                width: calc(50% - 20px);
            }

            .city-item select {
                width: calc(50% - 8px);
            }
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .btn1 {
            background: white;
            border: none;
            color: black;
            padding: 12px 16px;
            font-size: 16px;
            cursor: pointer;
        }
    </style>
</head>


<body>
    <nav class="Navbar">
        <label>Jogja Guitar <span>Shop</span></label>

        <a href="/user/menuutama">Kembali<i data-feather="arrow-right"></i></a>
    </nav>

    </div>

    <section class="tampilan">

        <div class="testbox">

            <form action="">
                <div class="banner">
                    <h1>Data Tester</h1>
                </div>
                <table>

                    <tr>
                        <th>NO</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Hasil</th>
                        <!-- <th>Hitung</th> -->
                    </tr>
                    <?php foreach ($gitar as $index => $value) : ?>
                        <form action="/user/uji_dataaction">
                            <tr>
                                <td><?= $index++; ?></td>
                                <td>
                                    <input style="border: none;" name="nama" type="text" readonly value="<?= $value->nama; ?>">
                                </td>
                                <td>
                                    <input style="border: none;" name="jenis" type="text" readonly value="<?= $value->jenis; ?>">
                                </td>
                                <td>
                                    <input style="border: none;" name="ukuran" type="text" readonly value="<?= $value->ukuran; ?>">
                                </td>
                                <td>
                                    <input style="border: none;" name="warna" type="text" readonly value="<?= $value->warna; ?>">
                                </td>
                                <input type="hidden" name="harga" value="<?= $value->harga; ?>">
                                <td>
                                    <?= $value->hasil; ?>
                                </td>
                                <!-- <td>
                                    <button class="btn1"><i class="fa fa-calculator"></i>

                                    </button>
                                </td> -->
                            </tr>
                        </form>
                    <?php endforeach; ?>
                </table>

                <!-- <div class="btn-block">
                    <button type="submit" href="/">Cek Data</button>
                </div> -->

                <form action="/user/uji_data">
                    <div class="banner">
                        <h1>Uji Data</h1>
                    </div>
                    <p>Jenis dan Warna</p>
                    <div class="city-item">
                        <select name="jenis">
                            <option value="lele">Lele</option>
                            <option value="Akustik">Akustik</option>
                            <option value="Elektrik">Akustik Elektrik</option>
                            <option value="Ukulele">Ukulele</option>

                        </select>
                        <select name="warna">

                            <option value="Natural">Natural</option>
                            <option value="Natural Doff">Natural Doff</option>
                            <option value="Hitam">Hitam</option>
                            <option value="Merah">Merah</option>

                        </select>
                    </div>
                    <p>ukuran dan harga</p>
                    <div class="city-item">
                        <select name="ukuran">

                            <option value="Sedang">Sedang</option>
                            <option value="Normal">Normal</option>
                            <option value="Kecil">Kecil</option>


                        </select>
                        <select name="harga">

                            <option value="Super">Super</option>
                            <option value="Terjangkau">terjangkau</option>
                            <option value="Murah">Murah</option>

                        </select>
                    </div>
                    <div class="btn-block">
                        <button type="submit" href="/">Cek Data</button>
                    </div>

                </form>
        </div>

        <div class="testbox1">

            <?php if (session()->getFlashdata('hasil')) : ?>


            <?php endif; ?>


</body>

</html>