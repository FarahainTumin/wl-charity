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
        body{
            background-color: white;
            height: 1280px;
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
    </style>

</head>



<body class="is-preload-0 is-preload-1 is-preload-2" style="background-color: white;">
<!-- Main -->
<div id="">
    <div class="floating-button-amount">
        RM1049
    </div>
@yield('header')
    <section id="youtube-video" style="margin: 20px;">
        <iframe width="681" height="383" src="https://www.youtube.com/embed/phjcOeF62Gk" title="ZIARAH ASNAF Siri 2 Bersama Menteri Di Jabatan Perdana Menteri (Hal Ehwal Agama) Jilid 2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <a class="thumbnail" href="https://www.youtube.com/watch?v=phjcOeF62Gk" data-position="left center">
        </a>
    </section>
    <div style="display: flex; flex-wrap: wrap;">
        <div style="display: flex; flex-wrap: wrap; flex-direction: column">
            <a href="#"><img src="images/fulls/06.jpeg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 10px 10px 0px 10px;" alt="Description of the image" /></a>
            <a href="#"><img src="images/fulls/09.jpg" style="width: 100%; max-width: 230px; height: auto; border-radius: 25px; margin: 0px 10px 10px 10px;" alt="Description of the image" /></a>
        </div>
        <div >
            <a href="#"><img src="images/fulls/08.jpg" style="width: 100%; max-width: 450px; height: auto; border-radius: 25px; margin: 10px;" alt="Description of the image" /></a>
        </div>
    </div>

    <button class="floating-button"><i class="fas fa-phone"></i></button>




</div>
@yield('footer')
<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/browser.min.js"></script>
<script src="assets/js/breakpoints.min.js"></script>
{{--<script src="assets/js/main.js"></script>--}}
@livewireScripts

<script>
    let timer;

    // Function to switch to layout 2
    function switchToLayout2() {
        document.getElementById('layout1').style.display = 'none';
        document.getElementById('layout2').style.display = 'block';
    }

    // Reset the timer on any interaction
    function resetTimer() {
        clearTimeout(timer);
        timer = setTimeout(switchToLayout2, 2000); // Switch to layout 2 after 5 seconds of no interaction
    }

    // Attach the resetTimer function to various events (e.g., mousemove, keydown, etc.)
    document.addEventListener('mousemove', resetTimer);
    document.addEventListener('keydown', resetTimer);

    // Initial setup to start the timer
    resetTimer();
</script>

</body>

</html>
