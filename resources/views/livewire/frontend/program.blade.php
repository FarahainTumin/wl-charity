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
        ul {
            list-style-type: decimal;
        }
        /* Hide items beyond the limit */
        .hidden {
            display: none;
        }

        /* Style for the "Read More" link */
        #readMore {
            display: none;
            cursor: pointer;
            color: blue;
            text-decoration: underline;
        }

        @media (max-height: 1080px) {
            .fontSizeHeader {
                font-size: 35px;
            }
            /* Add your styles for larger screens here */
        }
        @media (min-height: 1081px) {
            .fontSizeHeader {
                font-size: 42px;
            }
            /* Add your styles for larger screens here */
        }
    </style>
</head>
<body class="g-sidenav-show bg-white" style="width: 720px; height: 1280px; margin: 0 auto;">

<header id="header" style="background-color: #e7e7e7">
    <div class="row" style="margin: 0px;">
        <div class="col-sm-4" style="padding: 10px 20px; text-align: center;">
            <img src="assets/img/charity/logo-maiwp-2020.png" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
        </div>
        <div class="col-sm-8" style="text-align: justify;padding-top: 10px;padding-left: 0px; font-family: Cambria;">
            <div style="font-style: italic; color: grey; font-size: 22px;" >
                <b>Past Program</b> : [P101 - Infaq Al-Quran] &nbsp;
                <i class="fas fa-qrcode" id="btnQr"></i>
                <div id="popupQr" style="display: none;">
                    Sila scan : <br>
                    <img src="../../../../public/images/fulls/qr.webp" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="" />
                    <button type="button" class="btn bg-gradient-primary" id="closeBtn">Close</button>
                </div>
            </div>
            <div style="font-style: italic; color: grey; font-size: 22px;" >
                <i class="fas fa-globe"></i>
                <a href="/program">www.maiwp.gov.my/program</a>
            </div>
            <h6 class="fontSizeHeader" style="margin: 0px; padding: 0px; line-height: 50px;">Senarai <br>Program</h6>
            <?php
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 22px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </div>
</header>
{{--<div style="display: flex; flex-wrap: wrap;">--}}
{{--    <div >--}}
{{--        <a href="#"><img src="images/fulls/12.jpg" style="width: 150%; max-width: 700px; height: 908px;" alt="Description of the image" /></a>--}}
{{--    </div>--}}
{{--</div>--}}

<div style="padding: 20px 50px;">
{{--    <span class="mask bg-gradient-dark"></span>--}}

    <div class="">
        <ul id="myList" style="font-size: 20px; margin-top: 50px">
            <li><a href="/past_program">P101 - Infaq Al-Quran</a></li>
            <li><a href=""> P102 - Sadaqah untuk Masjid</a></li>
            <li><a href=""> P103 - Zakat Fitrah</a></li>
            <li><a href=""> P104 - Infaq Anak2 Yatim</a></li>
            <li><a href=""> P105 - Ikhlas Palestine</a></li>
            <li><a href=""> P106 - Tabung Bencana Türkiye & Syria</a></li>
            <li><a href=""> P107 - Wakaf Masjid</a></li>
            <li><a href=""> P108 - Program Name 7</a></li>
            <li><a href=""> P109 - Program Name 8</a></li>
            <li><a href=""> P110 - Program Name 9</a></li>
            <li><a href=""> P111 - Program Name 10</a></li>
            <li><a href=""> P112 - Program Name 11</a></li>
            <li><a href=""> P113 - Program Name 12</a></li>
            <li><a href=""> P114 - Program Name 13</a></li>
            <li><a href=""> P115 - Program Name 14</a></li>
            <li><a href=""> P116 - Program Name 15</a></li>
            <li><a href=""> P117 - Program Name 16</a></li>
            <li><a href=""> P118 - Program Name 17</a></li>
            <li><a href=""> P119 - Program Name 18</a></li>
            <li><a href=""> P120 - Program Name 19</a></li>
            <li class="hidden"><a href=""> P121 - Program Name 20</a></li>
        </ul>

        <div id="readMore">Read More</div>
    </div>
</div>
{{--<div style="display: flex; ">--}}
{{--    <a href="#" class="yellow-button" style="font-size: 25px; position: absolute; left: 230px; bottom: 110px; z-index: 100">--}}
{{--        RM 1--}}
{{--    </a>--}}
{{--    <div >--}}

{{--    </div>--}}
{{--</div>--}}

{{--<button class="floating-button"><i class="fas fa-phone"></i></button>--}}
<footer>
    <div class="position-fixed bottom-0 z-index-2" style="width:720px" id="footer">
        <button class="btn btn-icon btn-lg btn-3" onclick="window.location='/home';" type="button">
            <i class="fas fa-house-user" style="font-size: xxx-large; color: black"></i>
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
    // JavaScript to show/hide items and toggle "Read More" link
    const list = document.getElementById('myList');
    const readMoreBtn = document.getElementById('readMore');
    const hiddenItems = document.querySelectorAll('.hidden');

    if (hiddenItems.length > 0) {
        readMoreBtn.style.display = 'block';
    }

    readMoreBtn.addEventListener('click', function() {
        hiddenItems.forEach(item => {
            item.classList.toggle('hidden');
        });

        if (readMoreBtn.textContent === 'Read More') {
            readMoreBtn.textContent = 'Read Less';
        } else {
            readMoreBtn.textContent = 'Read More';
        }
    });
</script>
</body>

</html>
