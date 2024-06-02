<?
define('JangAnDiUb4HubAh', TRUE);
require_once 'konekin_mas.php';
if(!isset($_SESSION)) { 
	session_start(); 
	
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- link:fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet">
    <!-- link:CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">


    <style>
        a {
            text-decoration: none;
        }

        .nav-atas {
            font-family: 'Montserrat', sans-serif;
        }

        .logo-toko img {
            height: 90px;
        }

        .item-atas li a {
            font-size: 18px;
            margin: 10px;
        }

        .item-atas li a span {
            font-weight: 600;
        }

        .btn-outline-custom1 {
            background-color: rgb(1, 74, 209);
            color: white;
            box-shadow: 3px 3px #a2c7ff;
            padding-right: 25px;
            padding-left: 25px;
        }

        .btn-outline-custom2 {
            background-color: rgb(255, 255, 255);
            color: rgb(29, 70, 255);
            box-shadow: 3px 3px #b4d2ff;
            padding-right: 25px;
            padding-left: 25px;
        }

        .btn-outline-custom1:hover,
        .btn-outline-custom2:hover {
            background-color: rgb(0, 19, 80);
            color: white;
        }

        .salam {
            margin: 50px;
            color: rgb(41, 41, 41);
            font-family: 'Montserrat', sans-serif;
        }

        .salam h1 {
            font-weight: 500;
            font-size: 65px;
        }

        .salam-kecil {
            font-family: 'Poppins', sans-serif;
            font-size: 25px;
            font-weight: 300;
            margin-bottom: 30px;
        }

        .btn-beli {
            background-color: rgb(5, 53, 185);
            padding: 10px 15px;
            border-radius: 5px;
            transition: 0.3s;
        }

        .btn-beli:hover {
            background-color: rgb(8, 8, 34);
            box-shadow: 3px 3px white;
        }

        .card-fitur {
            width: 530px;
            height: 250px;
            padding: 10px;
            background-color: #f0f0f0;
            border: #ffffff;
            box-shadow: 6px 6px #ffffff7a;
            color: rgb(19, 19, 19);
        }

        .kotak-kecil {
            background-color: rgb(12, 0, 54);
            color: #ffffff;
            box-shadow: 3px 3px rgb(107, 138, 196);
            width: 160px;
            height: 80px;
            margin-top: -185px;
            right: -20px;
            position: absolute;
        }

        .btn-lanjut {
            color: #fff;
            font-size: 17px;
            background-color: rgb(57, 159, 255);
            border-radius: 3px;
            padding: 10px;
            transition: 0.3s;
        }

        .btn-lanjut:hover {
            background-color: rgb(31, 31, 31);
            color: white;
        }

        .kartu-why .card-body {
            background-color: rgb(0, 0, 53);
        }

        @media only screen and (max-width: 768px) {
            .logo-toko img {
                height: 64px;
            }

            .card-fitur {
                width: 430px;
            }
        }
    </style>
    <title>GolRoblox</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light nav-atas">
        <a class="navbar-brand logo-toko" href="#">
            <img src="./assets/img/logo.png" alt="logo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto item-atas">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Produk</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Riwayat</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-custom1 mr-2" href="./pengguna/login.php">
                        <span>Login</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-outline-custom2" href="#">
                        <span>Daftar</span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- header -->
    <div class="jumbotron jumbotron-fluid animated fadeIn" style="background: linear-gradient(90deg, rgb(39, 230, 255), #1338dd)">
        <div class="container">
            <div class="salam">
                <h1 style="font-weight: 500; font-size: 65px;">GolRoblox</h1>
                <p class="salam-kecil">Solusi kebutuhan Roblox anda</p>
                <a href="" class="btn-beli" style="text-decoration: none; color: white; font-weight: 500; font-size: 20px;">
                    Beli Robux
                </a>
            </div>
        </div>
    </div>

    <!-- card-status -->
    <div class="container kartu mb-5">
        <div class="card mx-auto mt-5 card-fitur">
            <div class="card-body">
                <h2 class="card-title">Proses Cepat</h2>
                <p class="card-text isi-fitur">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur natus iusto odit.</p>
                <a href="" class="btn-lanjut" style="text-decoration: none;">Beli yuk</a>
                <div class="kotak-kecil ml-auto text-center">
                    <h3 style="padding-top: 5px;" class="count">
                        245899
                    </h3>
                    <h5>Robux Terjual</h5>
                </div>
            </div>
        </div>
        <div class="card mx-auto mt-5 wow card-fitur">
            <div class="card-body">
                <h2 class="card-title">Stok Banyak</h2>
                <p class="card-text isi-fitur">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur natus iusto odit.</p>
                <a href="" class="btn-lanjut" style="text-decoration: none;">Cek yuk</a>
                <div class="kotak-kecil ml-auto text-center">
                    <h3 style="padding-top: 5px;" class="count">0</h3>
                    <h5>Stok Robux</h5>
                </div>
            </div>
        </div>
        <div class="card mx-auto mt-5 card-fitur">
            <div class="card-body">
                <h2 class="card-title">Banyak Dukungan</h2>
                <p class="card-text isi-fitur">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur natus iusto odit.</p>
                <a href="" class="btn-lanjut" style="text-decoration: none;">Cek yuk</a>
                <div class="kotak-kecil ml-auto text-center">
                    <h3 style="padding-top: 5px;" class="count">69</h3>
                    <h5>Member</h5>
                </div>
            </div>
        </div>
    </div>

    <!-- konteen bawah -->
    <div class="jumbotron jumbotron-fluid mt-5 mb-5" style="background-color:rgb(234, 242, 255);">
        <div class="container text-center why-section">
            <h1>Kenapa Pilih <span style="color: rgb(61, 139, 255); font-weight: 600; font-family: 'Montserrat', sans-serif;">GolRoblox?</span></h1>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mx-auto kartu-why" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mx-auto kartu-why" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mx-auto kartu-why" style="width: 18rem;">
                    <div class="card-body">
                        <img src="..." alt="">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- script -->

    <!-- link:js -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/noframework.waypoints.min.js" integrity="sha512-fHXRw0CXruAoINU11+hgqYvY/PcsOWzmj0QmcSOtjlJcqITbPyypc8cYpidjPurWpCnlB8VKfRwx6PIpASCUkQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha512-d8F1J2kyiRowBB/8/pAWsqUl0wSEOkG5KATkVV4slfblq9VRQ6MyDZVxWl2tWd+mPhuCbpTB4M7uU/x9FlgQ9Q==" crossorigin="anonymous"></script>
    <script>
        $('.count').counterUp({
            delay: 10,
            time: 1000
        });
    </script>
</body>

</html>