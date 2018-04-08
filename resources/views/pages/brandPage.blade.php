@extends('app')

@section('css')
	{!! Html::style('css/pages/brandPage.css') !!}
@stop

@section('content')

<div class="brandPage-wrap">

	<div class="partial-poster">

		<img class="partial-img" src="{{URL::asset('images/posters/adidas-partial.jpg')}}">
		
		<div class="brandName white">Football {{ $type }}</div>

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

@include('layouts.subscribe')

@stop