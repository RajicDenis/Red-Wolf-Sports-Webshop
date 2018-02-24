@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
	.addProduct {
		position: fixed;
		display: flex;
		justify-content: space-between;
		align-items: center;
		width: 100%;
		height: 80px;
		background: white;
		color: #1C1C1C;
		top: 100px;
		padding: 0 0 0 50px;
		font-size: 25px;
		z-index: 100;
	}
	.section-wrap {
		padding-top: 180px;
		padding-bottom: 100px;
		min-height: 300px;
	}
	.ap-basket {
		display: flex;
	    height: 100%;
	    width: 200px;
	    background: red;
	    color: white !important;
	    justify-content: center;
	    align-items: center;
	    padding: 0 20px;
	    transition: all 0.3s ease-in-out;
	}
	.ap-basket::before {
		content: '';
		position: absolute;
		right: 200px;
		width: 0;
		height: 0;
		border: 0 solid transparent;
		border-right-width: 0px;
		border-left-width: 80px;
		border-bottom: 80px solid red;
		transition: all 0.3s ease-in-out;
	}
	.ap-basket:hover {
		background: #1C1C1C;
	}
	.ap-basket:hover:before {
		border-bottom: 80px solid #1C1C1C;
	}

	
	.product-wrap {
		display: flex;
		position: relative;
		width: 100%;
	}
	.pw-left {
		display: flex;
		flex-direction: column;
		width: 70%;
		padding: 0 250px;
	}
	.pwl-img {
		position: relative;
    	width: 100%;
	}
	.pw-right {
		position: fixed;
		top: 300px;
		right: 20px;
		width: 30%;
	    padding: 0 20px;
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