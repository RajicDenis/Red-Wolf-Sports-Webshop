@extends('app')

@section('css')
	{!! Html::style('css/pages/cart.css') !!}
@stop

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}

	/*Checkbox*/
	input[type=checkbox] + label {
		background-image: url({{URL::asset('images/icons/empty-checkbox.png')}});
	}
	input[type=checkbox]:checked + label {
		background-image: url({{URL::asset('images/icons/checked.png')}});
	}
</style>

<div class="checkout-wrap">
	
	<div class="check-banner"><span class="check-txt">C A R T</span></div>

	<div class="check-info">

		<div class="form-product">
			<h2 class="inf">Your Products</h2>

			<div class="product-info-header">
				<p class="w20">PRODUCT</p>

				<p class="w20">NAME</p>

				<p class="w10">SIZE</p>

				<p class="w10">NUMBER</p>

				<p class="w30 text-right">PRICE</p>

				<p class="w10"></p>
			</div>

			@if(Cart::count() > 0)

			@foreach(Cart::content() as $item)

				<div class="product-info-header">
					<p class="w20 h150 black"><img class="product-info-img" src="{{URL::asset('images/products/'.$item->model->image.'')}}"></p>

					<p class="w20 h150 black">{{ $item->model->name }}</p>

					<p class="w10 h150 black">{{ $item->options->size }}</p>

					<p class="w10 h150 black">{{ $item->qty }}</p>

					<p class="w30 h150 text-right flexend black">€ {{ $item->subtotal() }}</p>

					<form class="w10 d-flex align-items-center flexend" action="{{ action('CartController@destroy', $item->rowId) }}" id="cart_remove_{{$item->model->id}}" method="POST">

						{{ csrf_field() }}

						{{ method_field('DELETE') }} 

						<a class="w10 black trash" onclick="document.getElementById('cart_remove_{{$item->model->id}}').submit();"><i class="far fa-trash-alt"></i></a>
					</form>

				</div>

			@endforeach

			@else

				<div class="product-info-header">
				
					<p class="w40 h150 black">No items in cart!</p>

				</div>

			@endif

			<div class="checkout-total-wrap">

				<div class="checkout-total">
					<div class="total-sum">
						<p class="gray">SUBTOTAL</p>
						<p>€ {{ Cart::subtotal() }}</p>
					</div>

					<div class="total-sum fatb">
						<p class="gray">SHIPPING</p>
						<p>FREE</p>
					</div>

					<div class="total-sum">
						<div class="ts-box">
							<p class="m-0 font20">TOTAL</p>
							<p class="m-0 t-vat">OF WHICH VAT</p>
						</div>

						<div class="ts-box">
							<p class="m-0 font20">€ {{ Cart::total() }}</p>
							<p class="m-0 t-vat text-right">€ {{ Cart::tax() }}</p>
						</div>
					</div>

				</div>

				<div class="conditions">
					<!--<div><input type="checkbox" name="conditions" required>Accept conditions</div>-->
					<input type='checkbox' name='accept_cond' value='valuable' id="accept_cond"/><label for="accept_cond"></label> 
					<p class="ml-4 cond-txt">Accept conditions</p>
				</div>

				<div class="shippment-info gray">Goods are delivered within 1-3 business days</div>

				<a href="{{ action('CheckoutController@index') }}" id="checkout_btn" class="pay white centered disable">CHECKOUT</a>
				
			</div><!-- END checkout-total-wrap -->
		</div> <!-- END form-product -->

	</div><!-- END check-info -->

</div><!-- END checkout-wrap -->

@include('layouts.subscribe')

@stop
