@section('header')

    <!-- Header -->
    <header id="header" style="display: flex; flex-direction: row; padding: 1.5em 2.25em 1em 2.25em">
        <div style="padding: 0px 25px;">
            <a href="#"><img src="images/fulls/logo-maiwp-2020.png" style="width: 100%; max-width: 130px; height: auto; border-radius: 25px; margin: 10px; margin-bottom: 0px" alt="Description of the image" /></a>
        </div>
        <div style="text-align: justify;padding-top: 10px;padding-left: 30px;">
            <h1 style="margin: 0px; padding: 0px; font-family: Cambria; font-size: 45px">Bantuan<br> Terkumpul : <br><div style="color: forestgreen">RM3,450.00</div></h1>
            <?php
            $current_datetime = date("Y-m-d H:i:s");
            ?>
            <div style="font-style: italic; color: grey; font-size: 25px; padding-top: 5px;" ><?php echo $current_datetime; ?></div>
        </div>
    </header>

@endsection

@extends('livewire.frontend.master')

@section('footer')

<footer style="position:fixed; bottom: 0; width: 100%; background-color: black">
    <div id="footer">
        <div class="container fix">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
{{--                    <p class="fh5co-social-icons">--}}
{{--                        <a href="#"><i class="icon-twitter2"></i></a>--}}
{{--                        <a href="#"><i class="icon-facebook2"></i></a>--}}
{{--                        <a href="#"><i class="icon-instagram"></i></a>--}}
{{--                        <a href="#"><i class="icon-dribbble2"></i></a>--}}
{{--                        <a href="#"><i class="icon-youtube"></i></a>--}}
{{--                    </p>--}}
                    <p style="color: white; font-size: 23px; text-align: center;">Copyright 2024 <a href="#">Maiwp</a>. All Rights Reserved. <br>
{{--                        Made with <i class="icon-heart3"></i> by --}}
{{--                        <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> --}}
{{--                        / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a>--}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

@endsection


