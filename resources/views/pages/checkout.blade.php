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
			<form action="{{ action('CheckoutController@store') }}" id="payment_form" class="check-form" method="POST">

				{{ csrf_field() }}

				@if(session()->has('success'))

					<div class="alert alert-success">
						{{ session()->get('success') }}
					</div>

				@endif

				@if(count($errors) > 0)
	
					<div class="alert alert-danger centered">
						<ul class="d-flex fdc">
						@foreach($errors->all() as $error)
							<li class="black">{{ $error }}</li>
						@endforeach
						</ul>
					</div>

				@endif

				<p class="req">*Required</p>

				<h2 class="inf">Billing Information</h2>

				<div class="form-body">

					<div class="form-left">

						<label for="email">*E-mail address</label>
						<input type="email" id="email" name="email" required>

						<label for="name">*Name</label>
						<input type="text" id="name" name="name" required>

						<label for="address">*Address</label>
						<input type="text" id="address" name="address">
						
						<label for="phone">Phone number</label>
						<input type="text" id="phone" name="phone">	

						<label for="postal">Postal code</label>
						<input type="text" id="postal" name="postal">

						<label for="city">City</label>
						<input type="text" id="city" name="city">

						<label for="company">Company</label>
						<input type="text" id="company" name="company">

					</div>

				</div>

				<h2 class="inf">Payment Information</h2>

				<div class="form-body">

					<div class="form-left">

						<label for="card-name">*Name on Card</label>
						<input type="text" id="card_name" name="card-name" required>

						<label for="card-element">Credit or debit card</label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>

					    <button type="submit" id="order_btn" class="order_btn">COMPLETE ORDER</button>

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

@section('js')

<script>
	
	(function() {

		// Create a Stripe client.
		var stripe = Stripe('pk_test_rHtOGSMVZ5qKhuIPcWKBQPYA');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
		    lineHeight: '18px',
		    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
		    fontSmoothing: 'antialiased',
		    fontSize: '16px',
		    '::placeholder': {
		      color: '#aab7c4'
		    }
		  },
		  invalid: {
		    color: '#fa755a',
		    iconColor: '#fa755a'
		  }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {
			style: style,
			hidePostalCode: true 
		});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		// Handle form submission.
		var form = document.getElementById('payment_form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		  document.getElementById('order_btn').disabled = true;

		  var options = {
		  	name: document.getElementById('name').value,
		  	address_line1: document.getElementById('address').value,
		  	address_city: document.getElementById('city').value,
		  	address_zip: document.getElementById('postal').value,
		  }

		  stripe.createToken(card, options).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;

		      document.getElementById('order_btn').disabled = false;

		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		function stripeTokenHandler(token) {
			// Insert the token ID into the form so it gets submitted to the server
			var form = document.getElementById('payment_form');
			var hiddenInput = document.createElement('input');
			hiddenInput.setAttribute('type', 'hidden');
			hiddenInput.setAttribute('name', 'stripeToken');
			hiddenInput.setAttribute('value', token.id);
			form.appendChild(hiddenInput);

			// Submit the form
			form.submit();
		}

	})()

</script>

@stop
