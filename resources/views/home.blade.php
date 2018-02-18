<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Red Wolf Sports</title>

        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Francois+One" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Contrail+One" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .black {
                color: black;
            }
            .white {
                color: white;
            }
            .header {
                width: 100%;
                height: 100vh;
                background-size: cover;
                background-position: center;
                background-image: url({{ URL::asset('images/header/adidas.jpg') }});
            }
            .header-nav {
                position: relative;
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                height: 100px;
                border-bottom: 1px solid rgba(255,255,255, 0.6);
                background: rgba(8,8,8,0.6);
            }
            .logo {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 200px;
                max-width: 20%;
                height: 100px;
            }
            .logo-img {
                position: absolute;
                width: 100%;
                height: 100%;
            }
            .nav, .nav2 {
                max-width: 40%;
            }
            ul {
                display: flex;
                color: white;
                list-style-type: none;
                font-family: 'Francois One', sans-serif;
                font-size: 18px;
            }
            li {
                margin: 0 20px;
            }
            .icon-box {
                position: relative;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 40px;
                height: 40px;
                border-radius: 50%;
                border: 1px solid white;
                background-color: white;
                margin-right: 5px;
            }
            .icon-img {
                position: absolute;
                width: 70%;
                height: 70%;
            }
            .log-li {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 14px;
            }
            .s2x {
                font-size: 17px;
            }
            .poster-box {
                display: flex;
                justify-content: center;
                align-items: center;
                top: 100px;
                width: 100%;
                height: calc(100% - 100px);
            }
            .poster-text {
                display: flex;
                flex-direction: column;
                color: white;
                font-family: 'Contrail One', cursive;
                width: 40%;
                padding: 20px;
                background: rgba(8,8,8,0.7);
                border-radius: 30px;
                border: 1px solid rgba(255,255,255,0.3);
            }
            .poster-title {
                text-align: center;
                font-size: 50px;
                font-weight: 400;
            }
            .poster-desc {
                font-weight: 400;
                font-size: 18px;
            }
            .poster-buttons {
                display: flex;
                justify-content: center;
            }
            .btn-a {
                display: flex;
                align-items: center;
                padding: 15px 35px;
                border-radius: 30px;
            }
            .poster-btn {
                color: white;
                border: 2px solid white;
                margin: 0 10px;
            }
            .pnbr {
                font-size: 35px;
            }
            .pvat {
                font-size: 15px;
                color: lightgray;
            }
            .buy {
                background-color: #ea0d27;
                border: none;
            }

        </style>
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
                        <li class="log-li"><div class="icon-box"><i class="far fa-user-circle s2x black"></i></div> Log In</li>
                        <li class="log-li"><div class="icon-box"><i class="fas fa-sign-in-alt s2x black"></i></div> Sign Up</li>
                        <li><div class="icon-box"><i class="fas fa-cart-arrow-down black"></i></div></li>
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

        <style>
            .popular-wrap {
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
                background-color: #F1F1F1;
                font-family: 'Contrail One', cursive;
            }
            .section-title {
                text-align: center;
                margin: 60px 0; 
                font-weight: 400;
            }
            .btn-all {
                justify-content: center;
                font-family: 'Contrail One', cursive;
                font-size: 20px;
                width: 200px;
                border: 2px solid black;
                margin-bottom: 100px;
            }
            .btn-all-txt {
                margin-right: 15px;
            }
            .products-box {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: row;
                width: 100%;
            }
            .product {
                position: relative;
                display: flex;
                flex-direction: column;
                align-items: center;
                width: 25%;
                height: 450px;
                margin: 0 15px 100px 15px;
                background-color: white;
            }
            .product-img {
                width: 80%;
                height: 50%;
                background-size: cover;
                background-position: center;
            }
            .p-title {
                color: black;
                font-weight: 400;
                text-align: center;
            }
            .price {
                justify-content: center;
                width: 80px;
                font-size: 25px;
                color: white;
                text-align: center;
                padding: 9px 18px;
            }
            .p-desc {
                margin-top: 0;
                color: darkgray;
            }
        </style>

        
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

        
    </body>
</html>
