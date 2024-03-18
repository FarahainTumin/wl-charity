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

    <style>
        @media (max-height: 1080px) {
            .heightForQrBg {
                min-height: 150vh !important;
            }
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
            .heightForQrBg {
                min-height: 85vh !important;
            }
            .fontSizeHeader {
                font-size: 42px;
            }
            /* Add your styles for larger screens here */
        }
        .mask {
            opacity: 0.4; }
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 9999;
        }

        .popup-content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: white;
            padding: 20px;
            text-align: center;
            font-family: Cambria, serif;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            font-size: 30px;
        }

        .loading {
            border: 8px solid #f3f3f3; /* Light grey */
            border-top: 8px solid #3498db; /* Blue */
            border-radius: 50%;
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
            margin: 20px auto;
            font-size: 30px;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

    </style>
</head>
<body class="g-sidenav-show bg-white" style="width: 720px; height: 1280px; margin: 0 auto;">

<header id="header" style="background-color: #e7e7e7">
    <div class="row" style="margin: 0px;">
        <div class="col-sm-4" style="padding: 10px 20px; text-align: center;">
            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 50%; max-width: 70px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;justify-content: center;display: flex;flex-direction: column;">
            <?php
            date_default_timezone_set('Asia/Kuala_Lumpur');
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 30px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>

<div class="heightForQrBg page-header align-items-start" style="display:block; padding-right: 20px; padding-left: 20px; background-image: url('../images/fulls/masjid2.jpg');">
    <span class="mask bg-gradient-dark"></span>
    <div class="row" style="margin: 0px;">
        <div class="my-auto text-end">
            <h4 class="text-white mb-0 pt-6 position-relative" style="font-size: xx-large; line-height: 50px">Dana Terkumpul : <br> RM280.31</h4>
            <h4 class="text-white mb-0 pt-6 position-relative" style="font-size: xx-large; line-height: 50px">Sasaran Dana : <br> RM800.00</h4>
            <p class="lead text-white pt-6 position-relative" style="font-size: xx-large"><b>22 Jan - 15 Feb (20 baki hari)</b></p>
            <div style="padding-top: 50px;">
                <button class="btn btn-icon btn-lg btn-3 btn-primary" style="left:0px; font-size: x-large" type="button">
                    <span class="btn-inner--text">Imbas Kod QR</span>&nbsp;
                    <span class="btn-inner--icon" style="font-size: xx-large"><i class="fas fa-qrcode" id="btnQr"></i></span>
                </button>
                <a href="#"><img src="images/fulls/qr.webp" style="width: 100%; max-width: 150px; position: relative; z-index: 0" alt="Description of the image" /></a>
                <a href="#" id="debitLink" class="text-white"><p class="lead text-white pt-6 position-relative text-decoration-underline italic" style="font-size: xx-large"><b>Pembayaran melalui kad Debit</b></p></a>
                <div id="popup" class="popup">
                    <div class="popup-content" >
                        <div style="z-index: 99; position: relative;">
                            <div class="loading"></div>
                            <p style="font-size: xx-large; font-family: Cambria; z-index: 99;">Memuatkan...<br>
                                Sila scan kad anda</p>
                        </div>
                        <div style="z-index: 0; align-content: center">
                            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                            <script src="https://unpkg.com/@dotlottie/player-component@latest/dist/dotlottie-player.mjs" type="module"></script>
                            <dotlottie-player src="https://lottie.host/40689f79-dee9-418b-ba6f-28b7057e8a3d/sJHXGR1drY.json" background="transparent" speed="1" style="margin-top: -50px; margin-bottom: -50px;
                             height: 200px;" loop autoplay></dotlottie-player>
                        </div>

                    </div>
                </div>
                <a href="#" id="creditLink" class="text-white"><p class="lead text-white pt-2 position-relative text-decoration-underline italic" style="font-size: xx-large"><b>Pembayaran melalui kad Credit</b></p></a>
                <div id="popup" class="popup">
                    <div class="popup-content">
                        <div class="loading"></div>
                        <p style="font-size: xx-large; font-family: Cambria;">Memuatkan...</p>
                    </div>
                </div>

                <div id="successPopup" class="popup">
                    <div class="popup-content">
                        <p style="font-size: xx-large; font-family: Cambria;">Pembayaran telah diterima.<br>Terima kasih.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="position-fixed bottom-0 z-index-2" style="width:720px" id="footer">
        <button class="btn btn-icon btn-lg btn-3" onclick="window.location='/home';" type="button">
            <i class="fas fa-house-user" style="font-size: xxx-large; color: white"></i>
        </button>
        <button class="btn btn-icon btn-lg btn-3 btn-primary" style="font-size: x-large; float: right; right: 30px" type="button" onclick="window.location='/doa_penutup';">
            <span class="btn-inner--text">Tamat</span>
        </button>
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


<script>
    document.getElementById("debitLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        document.getElementById("popup").style.display = "block"; // Show popup
        // Simulate loading for 3 seconds
        setTimeout(function() {
            document.getElementById("popup").style.display = "none"; // Hide popup
            document.getElementById("successPopup").style.display = "block"; // Show success popup
            // Close success popup after 3 seconds
            setTimeout(function() {
                document.getElementById("successPopup").style.display = "none"; // Hide success popup
                window.location = '/doa_penutup';
            }, 3000);

        }, 3000);
    });
    document.getElementById("creditLink").addEventListener("click", function(event) {
        event.preventDefault(); // Prevent default link behavior
        document.getElementById("popup").style.display = "block"; // Show popup
        // Simulate loading for 3 seconds
        setTimeout(function() {
            document.getElementById("popup").style.display = "none"; // Hide popup
            document.getElementById("successPopup").style.display = "block"; // Show success popup
            // Close success popup after 3 seconds
            setTimeout(function() {
                document.getElementById("successPopup").style.display = "none"; // Hide success popup
                window.location = '/doa_penutup';
            }, 3000);
        }, 3000);
    });
</script>
</body>

</html>
