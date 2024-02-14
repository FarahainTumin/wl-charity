<!DOCTYPE HTML>
<html lang="en">

{{--@livewire('image-grid')--}}

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <title>Charity</title>
    <link rel="stylesheet" href="assets/css/main.css" />
    @livewireStyles
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
    <style>
        /* Add your custom CSS for the layout here */
        #thumbnails {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Adjust the sizes as needed */
            gap: 20px; /* Adjust the gap between items */
        }

        article {
            width: 100%;
        }

        body{
            background-color: white;
            height: 1280px;
        }

        @media screen and (min-width: 600px) {
            article {
                width: calc(50% - 20px);
            }
        }

        @media screen and (min-width: 900px) {
            article {
                width: calc(33.33% - 20px);
            }
        }
        .floating-button {
            position: fixed;
            bottom: 100px;
            right: 20px;
            background-color: #376724;
            color: #fff;
            border: none;
            padding: 23px 20px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 30px;
            border-radius: 50px;
            transform: rotate(95deg);
        }
        .floating-button-amount {
            position: fixed;
            top: 85px;
            right: -38px;
            background-color: #376724;
            color: #fff;
            border: none;
            padding: 13px 60px 13px 43px;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-size: 30px;
            border-radius: 50px;
        }
        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body class="is-preload-0 is-preload-1 is-preload-2" style="background-color: white;">
<!-- Main -->
<div id="">
    <div class="floating-button-amount">
        RM1049
    </div>

    @yield('header')


    <div style="display: flex; flex-wrap: wrap;">
        <div style="display: flex; flex-wrap: wrap; flex-direction: column">
            <a href="#"><img src="images/fulls/07.jpg" style="width: 100%; max-width: 374px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
            <a href="#"><img src="images/fulls/14.jpg" style="width: 100%; max-width: 374px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
        </div>
        <div >
            <a href="#"><img src="images/fulls/12.jpg" style="width: 100%; max-width: 315px; height: auto; border-radius: 25px; margin: 10px 10px 10px 0px;" alt="Description of the image" /></a>
        </div>
        <div >
            <a href="#"><img src="images/fulls/13.jpeg" style="width: 100%; max-width: 700px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
        </div>
    </div>



    <button class="floating-button" onclick="showPopup()"><i class="fas fa-phone"></i></button>

    <div class="popup" id="contactPopup">
        <p>Contact information goes here...</p>
        <button onclick="closePopup()">Close</button>
    </div>



</div>
@yield('footer')
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
{{--<script src="assets/js/main.js"></script>--}}
@livewireScripts
<script>
    function showPopup() {
        document.getElementById('contactPopup').style.display = 'block';
        setTimeout(function() {
            closePopup();
        }, 10000);
    }

    function closePopup() {
        document.getElementById('contactPopup').style.display = 'none';
    }
</script>

</body>

</html>
