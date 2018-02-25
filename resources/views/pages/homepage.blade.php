@extends('app')

@section('content')

<div class="header">

    <div class="poster-box">
        <div class="poster-text">

            <h1 class="poster-title">NIKE T90 LASER IV</h1>

            <h4 class="poster-desc">The Nike T90 Laser IV Elite Firm-Ground Football Boot wraps your foot for a perfect fit and exceptional ball touch, while the forefoot plate provides explosive acceleration on the pitch.</h4>

            <p>EUR<span class="pnbr">100</span><br><span class="pvat">Excl. VAT</span></p>

            <div class="poster-buttons">
                <a href="{{URL::route('brand')}}" class="btn-a poster-btn white">EXPLORE</a>

                <a href="{{URL::route('product')}}" class="btn-a poster-btn buy white">BUY NOW</a>
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

            <a href="{{URL::route('product')}}" class="btn-a buy price">€ 120</a>

            <p class="vat">Excl. VAT</p>


        </div>

        <div class="product">

            <img class="product-img" src="{{URL::asset('images/products/nike-vapor.jpg')}}">

            <h2 class="p-title">Nike Vapor F11</h2>

            <p class="p-desc">Firm-Ground Football Boot</p>

            <a href="{{URL::route('product')}}" class="btn-a buy price">€ 150</a>

            <p class="vat">Excl. VAT</p>

        </div>

         <div class="product">

            <img class="product-img" src="{{URL::asset('images/products/nike-t90.jpg')}}">

            <h2 class="p-title">Nike T90 Laser III</h2>

            <p class="p-desc">Firm-Ground Football Boot</p>

            <a href="{{URL::route('product')}}" class="btn-a buy price">€ 140</a>

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

            <a href="{{URL::route('brand')}}" class="btn-a explore white-to-black">EXPLORE</a>

        </div>
    </div>
    
</div>

<div class="section">
    
    <div class="section-box sb-2">
        
        <div class="s2-left">
            <h2 class="p-title sec wh">Never Follow!</h2>

            <p class="p-desc wh tc">Whether you're playing in the biggest stadiums in the world, bossing the cage, or the king of your street, do it your own way. Those who create their own path never follow.</p>

            <a href="{{URL::route('brand')}}" class="btn-a explore2 wh white">EXPLORE</a>
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

            <a href="{{URL::route('brand')}}" class="btn-a explore white-to-black">EXPLORE</a>

        </div>
    </div>
    
</div>

@stop