<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Red Wolf Sports</title>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">

        <!-- Styles --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        {!! Html::style('css/footer.css')!!}
        {!! Html::style('css/homepage.css')!!}

         <!-- jQuery & jQuery UI-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


        <script>
            $('document').ready(function() {

                $(window).scroll(function() {
                    $('.header-nav').css('background-color', '#1C1C1C');
                    if($(window).scrollTop() == 0) {
                        $('.header-nav').css('background-color', 'rgba(8,8,8,0.7)');
                    }
                }) 

            }) 

        </script>

    </head>
    <body>

        <div class="header">

            <div class="header-nav">
                <div class="nav">
                    <ul class="list">
                        <li><i class="fas fa-bars white"></i></li>
                        <li>ABOUT US</li>
                        <li>CONTACT US</li>
                        <li>PRODUCTS</li>
                    </ul>
                </div>

                <div class="logo"><img class="logo-img" src="{{URL::asset('images/redwolf.png')}}"></div>

               <div class="nav2">
                    <ul class="list">
                        <li class="log-li"><div class="icon-box"><i class="far fa-user-circle s2x white"></i></div> Log In</li>
                        <li class="log-li"><div class="icon-box"><i class="fas fa-sign-in-alt s2x white"></i></div> Sign Up</li>
                        <li><div class="icon-box"><i class="fas fa-cart-arrow-down white"></i></div></li>
                    </ul>
                </div> 
            </div>

            <div class="poster-box">
                <div class="poster-text">

                    <h1 class="poster-title">NIKE T90 LASER IV</h1>

                    <h4 class="poster-desc">The Nike T90 Laser IV Elite Firm-Ground Football Boot wraps your foot for a perfect fit and exceptional ball touch, while the forefoot plate provides explosive acceleration on the pitch.</h4>

                    <p>EUR<span class="pnbr">100</span><br><span class="pvat">Excl. VAT</span></p>

                    <div class="poster-buttons">
                        <div class="btn-a poster-btn">EXPLORE</div>

                        <div class="btn-a poster-btn buy">BUY NOW</div>
                    </div>
                
                </div>

            </div>
           
        </div>

        
        <div class="popular-wrap">
            
            <h1 class="section-title">Popular football shoes</h1>

            <div class="btn-a btn-all"><span class="btn-all-txt">ALL PRODUCTS</span><i class="fas fa-angle-double-right"></i></div>

            <div class="products-box">

                <div class="product">
                    
                    <img class="product-img" src="{{URL::asset('images/products/nike-merc.jpg')}}">

                    <h2 class="p-title">Nike Mercurial VII</h2>

                    <p class="p-desc">Firm-Ground Football Boot</p>

                    <div class="btn-a buy price">€ 120</div>

                    <p class="vat">Excl. VAT</p>


                </div>

                <div class="product">

                    <img class="product-img" src="{{URL::asset('images/products/nike-vapor.jpg')}}">

                    <h2 class="p-title">Nike Vapor F11</h2>

                    <p class="p-desc">Firm-Ground Football Boot</p>

                    <div class="btn-a buy price">€ 150</div>

                    <p class="vat">Excl. VAT</p>

                </div>

                 <div class="product">

                    <img class="product-img" src="{{URL::asset('images/products/nike-t90.jpg')}}">

                    <h2 class="p-title">Nike T90 Laser III</h2>

                    <p class="p-desc">Firm-Ground Football Boot</p>

                    <div class="btn-a buy price">€ 140</div>

                    <p class="vat">Excl. VAT</p>

                </div>

            </div>

        </div>


        <div class="section">

            <div class="section-box">
                <img class="section-img" src="{{URL::asset('images/posters/adidas.jpg')}}">

                <div class="section-desc">

                    <h2 class="p-title sec">Adidas Football Shoes</h2>

                     <p class="p-desc tc">New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.</p>

                     <div class="btn-a explore">EXPLORE</div>

                </div>
            </div>
            
        </div>

        <div class="section">
            
            <div class="section-box sb-2">
                
                <div class="s2-left">
                    <h2 class="p-title sec wh">Never Follow!</h2>

                    <p class="p-desc wh tc">Whether you're playing in the biggest stadiums in the world, bossing the cage, or the king of your street, do it your own way. Those who create their own path never follow.</p>

                    <div class="btn-a explore2 wh">EXPLORE</div>
                </div>

                <div class="s2-right-box">
                    <img class="s2-right" src="{{URL::asset('images/video/pogba.jpg')}}">

                    <div class="play-btn"><img class="play-img" src="{{URL::asset('images/icons/play.png')}}"></div>
                </div>

            </div>

        </div>

        <div class="section">

            <div class="section-box">
                <img class="section-img inverse-img" src="{{URL::asset('images/posters/nike.jpg')}}">

                <div class="section-desc inverse-desc">

                    <h2 class="p-title sec">Nike Football Shoes</h2>

                     <p class="p-desc tc">New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.</p>

                     <div class="btn-a explore">EXPLORE</div>

                </div>
            </div>
            
        </div>
        
    </body>
</html>
