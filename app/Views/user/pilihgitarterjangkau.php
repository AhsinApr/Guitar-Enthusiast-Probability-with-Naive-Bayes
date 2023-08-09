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
            width: 70%;
            padding: 20px;
            border-radius: 6px;
            background-color: #fff;
            box-shadow: 0 0 20px 0 #a82877;




        }

        p {
            margin-left: 11%;
        }

        h3 {
            margin-left: 11%;
            margin-top: 2%;
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

                justify-content: center;
            }

            .name-item input,
            .city-item input {
                width: calc(100% - 20px);
            }

            .city-item select {
                width: calc(80% - 8px);
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

        .horizontal-line {
            width: 100%;
            height: 2px;
            background-color: #000000;
        }
    </style>
</head>

<body>
    <nav class="Navbar">
        <label>Jogja Guitar <span>Shop</span></label>

        <a href="/user/menuutama">Kembali<i data-feather="arrow-right"></i></a>
    </nav>


    <section class="tampilan">

        <div class="testbox">
            <form action="/user/ambildata" method="post" enctype="multipart/form-data">

                <div class="banner">
                    <h1>Pilih Gitar </h1>
                </div>
                <div>
                    <h3>Spesifikasi Disukai</h3>
                </div>
                <p>Jenis </p>
                <div class="city-item">
                    <select name="jenis">
                        <option value="">Jenis</option>
                        <option value="Elektrik">Akustik Elektrik</option>
                        <option value="Akustik">Akustik</option>
                        <option value="Lele">Lele</option>
                        <option value="Ukulele">Ukulele</option>

                    </select>
                </div>
                <p>Warna</p>
                <div class="city-item">
                    <select name="warna">
                        <option value="">Warna</option>
                        <option value="Natural">Natural</option>
                        <option value="Natural Doff">Natural Doff</option>
                        <option value="Coklat Doff">Coklat doff</option>
                        <option value="Hitam">Hitam</option>
                        <option value="Hitam Doff">Hitam Doff</option>
                        <option value="Merah">Merah</option>
                        <option value="Merah Tua">Merah Tua</option>
                        <option value="Hitam Kuning">Hitam Kuning</option>
                    </select>
                </div>
                <p>Ukuran Guitar</p>
                <div class="city-item">
                    <select name="ukuran">
                        <option value="">Ukuran</option>
                        <option value="Belum diisi">*Please select*</option>
                        <option value="Normal">Normal</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Kecil">Kecil</option>

                    </select>
                </div>

                <p>Harga</p>
                <div class="city-item">
                    <select name="harga">
                        <option value="Super">Super</option>
                        <option value="Terjangkau">terjangkau</option>
                        <option value="Murah">Murah</option>
                    </select>
                </div>
                <div>
                    <div class="horizontal-line"></div>

                    <h3>
                        Spesifikasi Tidak Disukai
                    </h3>
                </div>
                <p>Jenis</p>
                <div class="city-item">
                    <select name="jenis1">
                        <option value="">Jenis</option>
                        <option value="Elektrik">Akustik Elektrik</option>
                        <option value="Akustik">Akustik</option>
                        <option value="Lele">Lele</option>
                        <option value="Ukulele">Ukulele</option>

                    </select>
                </div>
                <P>Warna</P>
                <div class="city-item">
                    <select name="warna1">
                        <option value="">Warna</option>
                        <option value="Natural">Natural</option>
                        <option value="Natural Doff">Natural Doff</option>
                        <option value="Coklat Doff">Coklat doff</option>
                        <option value="Hitam">Hitam</option>
                        <option value="Hitam Doff">Hitam Doff</option>
                        <option value="Merah">Merah</option>
                        <option value="Merah Tua">Merah Tua</option>
                        <option value="Hitam Kuning">Hitam Kuning</option>
                    </select>
                </div>
                <p>Ukuran Guitar</p>
                <div class="city-item">

                    <select name="ukuran1">
                        <option value="">Ukuran</option>
                        <option value="Belum diisi">*Please select*</option>
                        <option value="Normal">Normal</option>
                        <option value="Sedang">Sedang</option>
                        <option value="Kecil">Kecil</option>

                    </select>
                </div>
                <p>Harga</p>
                <div class="city-item">
                    <select name="harga1">
                        <option value="Super">Super</option>
                        <option value="Terjangkau">terjangkau</option>
                        <option value="Murah">Murah</option>
                    </select>
                </div>
                <div class="btn-block">
                    <button type="submit" href="/">Hitung</button>
                </div>
        </div>



        </form>
        </div>


</body>

</html>