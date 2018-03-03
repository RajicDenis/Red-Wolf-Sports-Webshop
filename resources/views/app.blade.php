<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Red Wolf Sports</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bubblegum+Sans" rel="stylesheet">

        <!-- Styles --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {!! Html::style('css/footer.css')!!}
        {!! Html::style('css/homepage.css')!!}
        {!! Html::style('css/pages/product.css')!!}
        {!! Html::style('css/pages/allProducts.css')!!}
        {!! Html::style('css/pages/checkout.css')!!}

         <!-- jQuery & jQuery UI-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                font-family: 'Contrail One', cursive;
                background-color: #F1F1F1;
            }
            h1, h2, h3, h4 {
                margin: 30px 0;
            }
            a:link, a:focus, a:hover, a:visited {
                text-decoration: none;
                color: #1C1C1C;
            }
            .black {
                color: black !important;
            }
            .white {
                color: white !important;
            }
            .gray {
                color: gray;
            }
            .ul {
                text-decoration: underline;
            }
            .white-to-black:hover {
                background: #1C1C1C;
                color: white;
                transition: all 0.3s ease-in-out;
            }
            .header {
                background-image: url({{ URL::asset('images/header/adidas.jpg') }});
            }
            .header-nav {
                position: fixed;
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                height: 100px;
                border-bottom: 1px solid rgba(255,255,255, 0.6);
                background: rgba(8,8,8,0.6);
                z-index: 1000;
                transition: all 0.3s ease-in-out;
            }

        </style>

        <script>
            $('document').ready(function() {

                $(window).scroll(function() {
                    var scrollBottom = $(document).height() - $(window).height() - $(window).scrollTop();

                    // Make header transparent when on top of the page, add color when scrolled down
                    $('.header-nav').css('background-color', '#1C1C1C');
                    if($(window).scrollTop() == 0) {
                        $('.header-nav').css('background-color', 'rgba(8,8,8,0.7)');
                    }

                    // Product page - make product description follow user scroll
                    if(scrollBottom < 750) {
                       $('.pw-right').css({
                            'position': 'absolute',
                            'bottom': '150px',
                            'top': 'auto'
                        }); 
                    } else {
                        $('.pw-right').css({
                            'position': 'fixed',
                            'bottom': 'auto',
                            'top': '300px'
                        }); 
                    }
                })

                //Change list type on All products page
                $('.list-type-50').on('click', function() {
                    $('.list-btn').css('border', '2px solid darkgray');
                    $(this).css('border', '2px solid #1C1C1C');
                    $('.fs20').css('color', 'darkgray');
                    $('.t50').css('color', '#1C1C1C');
                    $('.product-list-item').css({
                        'width': '30%',
                        'margin': '30px 50px'
                    });
                });
                $('.list-type-33').on('click', function() {
                    $('.list-btn').css('border', '2px solid darkgray');
                    $(this).css('border', '2px solid #1C1C1C');
                    $('.fs20').css('color', 'darkgray');
                    $('.t33').css('color', '#1C1C1C');
                    $('.product-list-item').css({
                        'width': '33%',
                        'margin': '30px 0'
                    });
                });
                $('.list-type-25').on('click', function() {
                    $('.list-btn').css('border', '2px solid darkgray');
                    $(this).css('border', '2px solid #1C1C1C');
                    $('.fs20').css('color', 'darkgray');
                    $('.t25').css('color', '#1C1C1C');
                    $('.product-list-item').css({
                        'width': '25%',
                        'margin': '30px 0'
                    });
                });

            });

        </script>

    </head>
    <body>

        @include('layouts.header')

        @yield('content')

        @include('layouts.footer')
        
    </body>
</html>
