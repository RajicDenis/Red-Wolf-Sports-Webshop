@extends('app')

@section('content')

<div class="header">

    <div class="poster-box">
        <div class="poster-text">

            <h1 class="poster-title">{{ $sponsored->name}}</h1>

            <h4 class="poster-desc">{{ $sponsored->description}}</h4>

            <p>EUR<span class="pnbr">{{ $sponsored->price}}</span><br><span class="pvat">Excl. VAT</span></p>

            <div class="poster-buttons">
                <a href="{{URL::route('brand')}}" class="btn-a poster-btn white">EXPLORE</a>

                <a href="{{ action('ProductController@index', $sponsored->slug) }}" class="btn-a poster-btn buy white">BUY NOW</a>
            </div>
        
        </div>

    </div>
   
</div>


<div class="popular-wrap">
    
    <h1 class="section-title">Popular football shoes</h1>

    <div class="btn-a btn-all"><span class="btn-all-txt">ALL PRODUCTS</span><i class="fas fa-angle-double-right"></i></div>

    <div class="products-box">

        @foreach($products as $product)
        <div class="product">
            
            <img class="product-img" src="{{URL::asset('images/products/'.$product->image.'')}}">

            <h2 class="p-title">{{ $product->name }}</h2>

            <p class="p-desc">{{ $product->short }}</p>

            <a href="{{ action('ProductController@index', $product->slug) }}" class="btn-a buy price">{{ $product->price }}</a>

            <p class="vat">Excl. VAT</p>

        </div>
        @endforeach

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

@include('layouts.subscribe')

@stop