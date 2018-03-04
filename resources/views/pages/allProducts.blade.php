@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
	.section-wrap {
		padding-top: 100px;
	}
	.t25 {
		color: #1C1C1C;
	}
	.list-type-25 {
		border: 2px solid #1C1C1C;
	}

</style>

<div class="section-wrap d-flex justify-content-center">
	
	<div class="filter-nav">
		
		<h1>All Products</h1>

		<div class="btn-a filter-btn">FILTER<i class="fas fa-angle-double-down ml-3"></i></div>

		<div class="filter-list">

			<span class="f-txt mr-3">LIST DISPLAY</span>

			<a href="#" class="list-btn mr-3 list-type-50"><span class="glyphicons glyphicon glyphicon-stop fs20 t50" aria-hidden="true"></span></span></a>

			<a href="#" class="list-btn mr-3 list-type-33"><span class="glyphicons glyphicon glyphicon-th-large fs20 t33 ml-1" aria-hidden="true"></span></a>
						
			<a href="#" class="list-btn mr-3 list-type-25"><span class="glyphicons glyphicon glyphicon-th fs20 t25 ml-1" aria-hidden="true"></span></span></a>

		</div>

	</div>


	<div class="products-list">
		
		@foreach($products as $product)
		<div class="product-list-item">

			<img class="list-item-img" src="{{URL::asset('images/products/'.$product->image.'')}}">
			
			<h1>{{ $product->name }}</h1>

			<p>{{ $product->short }}</p>

			<a href="{{URL::route('product')}}" class="btn-a buy price">€ {{ $product->price }}</a>

            <p class="vat">Excl. VAT</p>

		</div>
		@endforeach

	</div>

</div>

@stop