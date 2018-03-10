@extends('app')

@section('css')
	{!! Html::style('css/pages/checkout.css') !!}
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
	
	<div class="check-banner"><span class="check-txt">C H E C K O U T</span></div>

	<div class="check-info">
		
		<div class="form-box">
			<form action="#" id="checkout" class="check-form" method="POST">

				{{ csrf_field() }}

				@if(session()->has('success'))

					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>

				@endif

				@if(count($errors) > 0)
	
					<div class="alert alert-danger">
						<ul>
						@foreach($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
						</ul>
					</div>

				@endif

				<p class="req">*Required</p>

				<h2 class="inf">Billing Information</h2>

				<div class="form-body">

					<div class="form-left">

						<label for="email">*E-mail address</label>
						<input type="email" name="email" required>

						<label for="name">*Name</label>
						<input type="text" name="name" required>

						<label for="address">*Address</label>
						<input type="text" name="address" required>
						
						<label for="tel">Phone number</label>
						<input type="text" name="tel">	

						<label for="postal">Postal code</label>
						<input type="text" name="postal">

						<label for="country">Country</label>
						<input type="text" name="country" required>

						<label for="company">Company</label>
						<input type="text" name="company">

					</div>

				</div>

				<h2 class="inf">Payment Information</h2>

				<div class="form-body">

					<div class="form-left">

						<label for="card-name">*Name on Card</label>
						<input type="text" name="card-name" required>

						<label for="credit">*Credit Card Number</label>
						<input type="text" name="credit" required>

					</div>

				</div>

			</form> 

		</div>

		<div class="order-box">
			<div class="form-product">
				<h2 class="inf">Your Order</h2>

				@if(Cart::count() > 0)

				@foreach(Cart::content() as $item)

					<div class="product-info-header">
						<p class="w20 h150 black"><img class="product-info-img" src="{{URL::asset('images/products/'.$item->model->image.'')}}"></p>
						
						<div class="order-desc w70">

							<p class="black">{{ $item->model->name }}</p>

							<p class="black">Size: {{ $item->options->size }}</p>

							<p class="black">Price: € {{ $item->model->price }}</p>

						</div>

						<p class="w10 h150 black">{{ $item->qty }}</p>

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

					<div class="shippment-info mt-5 gray">Goods are delivered within 1-3 business days</div>
					
				</div><!-- END checkout-total-wrap -->
			</div> <!-- END form-product -->
		</div>

	</div>

</div>

@stop