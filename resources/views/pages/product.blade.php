@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
</style>

<div class="test"></div>

<div class="section-wrap">

	<div class="addToBasket">

		<div class="close-basket"><i class="far fa-times-circle fa-3x"></i></div>
		
		<div class="size-box">
			<h2 class="white">CHOOSE SIZE</h2>

			<div class="sizes">
				<div class="size-circle">39</div>
				<div class="size-circle">40</div>
				<div class="size-circle">41</div>
				<div class="size-circle">42</div>
				<div class="size-circle">43</div>
				<div class="size-circle">44</div>
				<div class="size-circle">45</div>
				<div class="size-circle">46</div>
				<div class="size-circle">47</div>
			</div>
		</div>

		<form action="{{ action('CartController@store') }}" class="cart-form" method="POST">

			@csrf

			<h2 class="white">CHOOSE QUANTITY</h2>

			<input type="number" name="quantity" min="1" max="100" value="1">

			<input type="hidden" name="size" id="size" value="" required>

			<input type="hidden" name="name" id="name" value="{{ $product->name }}">

			<input type="hidden" name="pid" id="pid" value="{{ $product->id }}">

			<input type="hidden" name="price" id="price" value="{{ $product->price }}">

			<button class="pay crt-btn redbg" type="submit">ADD</button>
			
		</form>

	</div>
	
	<div class="addProduct">
		<div class="ap-desc"><span>{{ $product->name }}</span>:<span>EUR {{ $product->price }} (Excl. VAT)</span></div>

		<a href="#" class="ap-basket">ADD TO BASKET</a>
	</div>

	<div class="product-wrap">
		<div class="pw-left">

		@if(count($product->gallery) > 0)
			@foreach($product->gallery as $p)
				<img class="pwl-img" src="{{URL::asset('images/products/'.$p->image.'')}}">
			@endforeach
		@else
			<img class="pwl-img" src="{{URL::asset('images/icons/no_image.png')}}">	
		@endif
		</div>

		<div class="pw-right">
			
			<h1>{{ $product->name }}</h1>

			<p>{{ $product->description }}</p>

			<p>EUR<span class="pnbr">{{ $product->price }}</span><br><span class="pvat">Excl. VAT</span></p>

		</div>
	</div>

</div>

@stop