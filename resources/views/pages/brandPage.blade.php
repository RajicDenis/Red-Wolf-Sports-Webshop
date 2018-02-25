@extends('app')

@section('content')

<style>
	h3, h4, p {
		position: relative;
		z-index: 10;
		margin-left: 40px;
	}
	.partial-poster {
		position: relative;
		display: flex;
		justify-content: center;
		width: 100%;
		height: 500px;
		overflow: hidden;
	}
	.partial-poster::after {
		content: '';
		position: absolute;
		background: rgba(8,8,8,0.5);
		width: 100%;
		height: calc(100% - 100px);
		top: 100px;
	}
	.partial-img {
		position: absolute;
	}
	.brandName {
		display: flex;
	    justify-content: center;
	    align-items: center;
	    z-index: 100;
		font-size: 70px;
	}

	.brand-style-box {
		display: flex;
		justify-content: center;
		align-content: center;
		padding: 100px 0;
		color: white;
	}
	.bs-box {
		position: relative;
		display: flex;
	    flex-direction: column;
	    justify-content: center;
		width: 400px;
		height: 330px;
		margin: 0 10px;
		overflow: hidden;
	}
	.bs-box::after {
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		background: rgba(8,8,8,0.3);
	}
	.bs-img {
		position: absolute;
		height: 100%;
	}
	.custom-btn {
		position: relative;
		display: flex;
		justify-content: center;
		align-items: center;
		width: 150px;
		border-radius: 20px;
		border: 1px solid white;
		background: transparent;
		color: white;
		padding: 10px 20px;
		z-index: 10;
		margin-left: 40px;
	}

	.brand-products {
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		margin: 20px 0 100px 0;
	}
	.bp-box {
		display: flex;
		width: 65%;
		background: white;
		margin-bottom: 50px;
	}
	.bp-left, .bp-right {
		width: 50%;
	}
	.bp-left {
		display: flex;
		flex-direction: column;
		justify-content: center;
	    padding: 40px 0;
	}
	.bp-title {
		font-family: 'Bubblegum Sans', cursive;
	}
	.product-desc {
		display: flex;
	    flex-direction: column;
	    font-size: 17px;
		color: darkgray;
		list-style-type: disc;
		font-family: 'Bubblegum Sans', cursive;
	}
	.inverse {
		background: #ea0d27;
		border: none;
	}
	.right-img {
		width: 100%;
	}
</style>

<div class="brandPage-wrap">

	<div class="partial-poster">

		<img class="partial-img" src="{{URL::asset('images/posters/adidas-partial.jpg')}}">
		
		<div class="brandName white">ADIDAS FOOTBALL SHOES</div>

	</div>

	<div class="brand-style-box d-flex">
		
		<div class="bs-box">

			<img class="bs-img" src="{{URL::asset('images/posters/nemesis.jpg')}}">
			
			<h3>PREDATOR</h3>

			<p>Built for revolutionary ball controll</p>

			<div class="custom-btn">EXPLORE</div>

		</div>

		<div class="bs-box">

			<img class="bs-img" src="{{URL::asset('images/posters/copa.jpg')}}">
			
			<h3>NEMESIS</h3>

			<p>Designed for explosive mobility</p>

			<div class="custom-btn">EXPLORE</div>

		</div>

		<div class="bs-box">

			<img class="bs-img" src="{{URL::asset('images/posters/predator.jpg')}}">
			
			<h3>COPA</h3>

			<p>Get a first touch like no other</p>

			<div class="custom-btn">EXPLORE</div>

		</div>

	</div>


	<div class="brand-products">
		
		<div class="bp-box">
			
			<div class="bp-left">
				<h3 class="bp-title">NEMESIS TANGO 17+</h3>

				<ul class="product-desc">
					<li class="mb-3">Foot-hugging Agility Knit 2.0 forefoot for perfect fit and response right out of the box</li>
					<li class="mb-3">Lateral and medial support from 360 Torsion Tape inspired by sports taping</li>
					<li class="mb-3">Highest mobility and bandaged fit during radical play with the revolutionary Torsion Tape of the 360 Agility Bandage System, inspired by sports taping</li>
					<li class="mb-3">Secure lockdown and ankle stability with a Dual Lock Collar</li>
				</ul>

				<p>EUR<span class="pnbr">100</span><br><span class="pvat">Excl. VAT</span></p>

				<div class="custom-btn inverse">EXPLORE</div>
			</div>

			<div class="bp-right">
				<img class="right-img" src="{{URL::asset('images/products/nike-merc.jpg')}}">
			</div>

		</div>

		<div class="bp-box">
			
			<div class="bp-left">
				<h3 class="bp-title">PREDATOR VIPER 3</h3>

				<ul class="product-desc">
					<li class="mb-3">Foot-hugging Agility Knit 2.0 forefoot for perfect fit and response right out of the box</li>
					<li class="mb-3">Lateral and medial support from 360 Torsion Tape inspired by sports taping</li>
					<li class="mb-3">Highest mobility and bandaged fit during radical play with the revolutionary Torsion Tape of the 360 Agility Bandage System, inspired by sports taping</li>
					<li class="mb-3">Secure lockdown and ankle stability with a Dual Lock Collar</li>
				</ul>

				<p>EUR<span class="pnbr">100</span><br><span class="pvat">Excl. VAT</span></p>

				<div class="custom-btn inverse">EXPLORE</div>
			</div>

			<div class="bp-right">
				<img class="right-img" src="{{URL::asset('images/products/nike-t90.jpg')}}">
			</div>

		</div>

	</div>

</div>

@stop