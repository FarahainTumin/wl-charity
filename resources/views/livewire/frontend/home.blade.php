<!DOCTYPE html>
<html lang="en" style="background-color: lightgrey">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <title>
        Charity by MAIWP
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />
    <link id="pagestyle" href="../assets/css/material-dashboard.css" rel="stylesheet" />

    <style>
        /* CSS for the modal */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
            border-radius: 5px;
        }

        /* Close button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        @media (max-height: 1080px) {
            .heightForSlider {
                min-height: 51vh !important;
            }
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
            .heightForSlider {
                min-height: 42vh !important;
            }
            .fontSizeHeader {
                font-size: 42px;
            }
            /* Add your styles for larger screens here */
        }

        .mask {
            opacity: 0.4; }
    </style>
</head>

<body class="g-sidenav-show bg-white" style="width: 720px; height: 1280px; margin: 0 auto;">
<header id="header" style="background-color: #e7e7e7">
    <div class="row" style="margin: 0px;">
        <div class="col-sm-4" style="width:30%; padding: 10px 20px; text-align: center;">
            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 50%; max-width: 70px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="width:70%;text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;justify-content: center;display: flex;flex-direction: column;">
            <?php
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 30px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>

{{--<header id="header" style="background-color: #e7e7e7">--}}
{{--    <div class="row" style="margin: 0px;">--}}
{{--        <div class="col-sm-4" style="padding: 10px 20px; text-align: center;">--}}
{{--            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />--}}
{{--        </div>--}}
{{--        <div class="col-sm-8" style="text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;">--}}
{{--            <div style="font-style: italic; color: grey; font-size: 22px;" >--}}
{{--                <b>Past Program</b> : [P104 - Maiwp Run] &nbsp;--}}
{{--                <i class="fas fa-qrcode" id="btnQr"></i>--}}
{{--                <div id="popupQr" style="display: none;">--}}
{{--                    Sila scan : <br>--}}
{{--                    <img src="../../../../public/images/fulls/qr.webp" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />--}}
{{--                    <a href="#"><img src="images/fulls/qr.webp" style="width: 100%; max-width: 150px; position: relative; bottom: -470px; z-index: 0" alt="Description of the image" /></a>--}}
{{--                    <button type="button" class="btn bg-gradient-primary" id="closeBtn">Close</button>--}}
{{--                </div>--}}
{{--                <i class="fas fa-qrcode" id="btnQr"></i>--}}

{{--                <!-- Modal popup -->--}}
{{--                <div id="myModal" class="modal" style="z-index: 100;">--}}
{{--                    <div class="modal-content" style="width: fit-content">--}}
{{--                        <span class="close">&times;</span>--}}
{{--                        <p>Sila scan :</p>--}}
{{--                        <img src="images/fulls/qr.webp" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />--}}
{{--                        <div style="display: flex; flex-direction: row-reverse;"><button type="button" style="width: 100px; margin: 0px" class="btn bg-gradient-primary" id="closeBtn">Close</button></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div style="font-style: italic; color: grey; font-size: 22px;" >--}}
{{--                <i class="fas fa-globe"></i>--}}
{{--                <a onclick="window.location='/program';">www.maiwp.gov.my/program</a>--}}
{{--            </div>--}}
{{--            <h6 class="fontSizeHeader" style="margin: 0px; padding: 0px; line-height: 50px;">Dana Terkumpul : <br>--}}
{{--                <div style="color: forestgreen">RM3,450.00</div></h6>--}}
{{--            <?php--}}
{{--            $current_datetime = date("Y-m-d H:i:s");--}}
{{--            ?>--}}
{{--            <div style="font-style: italic; color: grey; font-size: 22px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</header>--}}

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner" style="padding-bottom: 5px;">
        <div class="carousel-item active" onclick="window.location='/qr';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/masjid.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top ml-" type="button" style="bottom:160px; left:20px;">
                    <span class="btn-inner--text">P102</span><br>
                    <span class="btn-inner--text">Sadaqah untuk Masjid</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item" onclick="window.location='/qr2';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/Zakat_Fitrah.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top ml-" type="button" style="bottom:160px; left:20px">
                    <span class="btn-inner--text">P103</span><br>
                    <span class="btn-inner--text">Zakat Fitrah</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item " onclick="window.location='/qr3';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/infaq_yatim.png');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top" type="button" style="bottom:160px; left:20px">
                    <span class="btn-inner--text">P104</span><br>
                    <span class="btn-inner--text">Infaq Anak-Anak Yatim</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item " onclick="window.location='/qr4';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/palestine.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top" type="button" style="bottom:160px; left:20px">
                    <span class="btn-inner--text">P105</span><br>
                    <span class="btn-inner--text">Ikhlas Palestine</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item " onclick="window.location='/qr5';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/bantuan_turki_syria.png');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top" type="button" style="bottom:160px; left:20px">
                    <span class="btn-inner--text">P106</span><br>
                    <span class="btn-inner--text">Tabung Bantuan Türkiye & Syria</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item " onclick="window.location='/qr6';">
            <div class="page-header heightForSlider" style="background-image: url('../images/fulls/masjid2.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <button class="btn btn-icon btn-lg btn-3 btn-primary top" type="button" style="bottom:160px; left:20px">
                    <span class="btn-inner--text">P107</span><br>
                    <span class="btn-inner--text">Wakaf Masjid</span>
                </button>
                <div class="container">
                    <div class="row" style="margin: 0px;">
                        <div class="my-auto text-end">
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan)</span>&nbsp;
                                <span class="btn-inner--icon"><i class="fas fa-qrcode" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="heightForSlider position-absolute w-100 top-0">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselExampleControls" data-bs-slide-to="5"></li>
        </ol>
    </div>
</div>


<div style="margin-bottom: 20px">
    <div class="row" style="margin: 0px;">
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr';" style="background-image: url('../images/fulls/masjid.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P102 : Sadaqah untuk Masjid</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr2';" style="background-image: url('../images/fulls/Zakat_Fitrah.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P103 : Zakat Fitrah</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr3';" style="background-image: url('../images/fulls/infaq_yatim.png');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P104 : Infaq Anak-Anak Yatim</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" style="margin: 0px;">
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr4';" style="background-image: url('../images/fulls/palestine.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P105 : Ikhlas Palestine</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr5';" style="background-image: url('../images/fulls/bantuan_turki_syria.png');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P106 : Tabung Türkiye & Syria</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col p-1">
            <div class="page-header" onclick="window.location='/qr6';" style="background-image: url('../images/fulls/masjid2.jpg');">
                <span class="mask bg-gradient-dark"></span>
                <div class="container" style="padding-left: 10px; padding-right: 10px">
                    <div class="row" style="margin: 0px;">
                        <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; margin-top: 20px; padding: 0.625rem 1.5rem; width: 90%; margin-left: 10px;">
                            <span class="btn-inner--text">P107 : Wakaf Masjid</span>
                        </button>
                        <div class="my-auto text-end p-0">

                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Dana Terkumpul : <br> RM280.31</h4>
                            <h4 class="text-white mb-0 fadeIn1 fadeInBottom" style="font-size: 15px">Sasaran Dana : <br> RM800.00</h4>
                            <p class="lead text-white opacity-8 fadeIn3 fadeInBottom" style="font-size: 15px">22 Jan - 15 Feb (20 baki hari)</p>
                            <button class="btn btn-icon btn-lg btn-3 btn-primary" type="button" style="font-size: 8px; padding: 0.625rem 1.5rem;">
                                <span class="btn-inner--text">Imbas Kod QR (Sumbangan) <i class="fas fa-qrcode" style="vertical-align: calc(15px - 20px);" id="btnQr"></i></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="position-fixed bottom-0" style="width: 720px; z-index: 100" id="footer">
        <div class="fix">
            <div class="row bg-gray-900" style="margin-right: 0px; margin-left: 0px">
                <div class="col-md-offset-3 text-center pt-3">
                    <p style="color: white; font-size: 23px; text-align: center; font-family: Cambria;">Copyright 2024 Maiwp. All Rights Reserved. <br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--   Core JS Files   -->
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>

<!-- Plugin for the charts, full documentation here: https://www.chartjs.org/ -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<script src="../assets/js/plugins/Chart.extension.js"></script>

<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/material-dashboard.min.js"></script>

<script>
    // JavaScript code to handle the click event
    document.getElementById("btnQr").addEventListener("click", function() {
        document.getElementById("myModal").style.display = "block";
    });

    // Close button functionality
    document.getElementsByClassName("close")[0].addEventListener("click", function() {
        document.getElementById("myModal").style.display = "none";
    });

    // Close modal when clicking outside of it
    window.onclick = function(event) {
        var modal = document.getElementById("myModal");
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
</body>

</html>
