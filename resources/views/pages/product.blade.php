@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
</style>

<div class="section-wrap">
	
	<div class="addProduct">
		<div class="ap-desc"><span>NEMESIS 17+</span>:<span>EUR 100 (Excl. VAT)</span></div>

		<a href="#" class="ap-basket">ADD TO BASKET</a>
	</div>

	<div class="product-wrap">
		<div class="pw-left">
			<img class="pwl-img" src="{{URL::asset('images/products/nemesis-tr.png')}}">

			<img class="pwl-img" src="{{URL::asset('images/products/nemesis-tr2.png')}}">

		</div>

		<div class="pw-right">
			
			<h3>ADIDAS NEMESIS 17+</h3>

			<p>New series updated with energizing boost™ for a hybrid look that brings together the best of iconic stadium style and modern performance. A leather upper keeps them connected to their predecessor.</p>

			<p>EUR<span class="pnbr">100</span><br><span class="pvat">Excl. VAT</span></p>

		</div>
	</div>

</div>

@stop