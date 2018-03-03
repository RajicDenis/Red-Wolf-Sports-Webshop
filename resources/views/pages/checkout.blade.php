@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
		/*Checkbox*/
	input[type=checkbox] {
		display:none;
	} 
	input[type=checkbox] + label {
		background-image: url({{URL::asset('images/icons/empty-checkbox.png')}});
		background-size: cover;
		height: 30px;
		width: 30px;
		display:inline-block;
		padding: 0 0 0 0px;
		cursor: pointer;
	}
	input[type=checkbox]:checked + label {
		background-image: url({{URL::asset('images/icons/checked.png')}});
	    background-size: cover;
		height: 30px;
		width: 30px;
		display:inline-block;
		padding: 0 0 0 0px;
		cursor: pointer;
	}
</style>

<div class="checkout-wrap">
	
	<div class="check-banner"><span class="check-txt">C H E C K O U T</span></div>

	<div class="check-info">
		
		<div class="form-box">
			<form action="#" id="checkout" class="check-form" method="POST">

				@csrf

				<p class="req">*Required</p>

				<h2 class="inf">Your Information</h2>

				<div class="form-body">

					<div class="form-left">
						<input type="text" name="name" placeholder="*Name" required>

						<input type="text" name="postal" placeholder="*Postal Code" required>

						<input type="text" name="tel" placeholder="*Phone Number" required>

						<input type="email" name="email" placeholder="*E-mail Address" required>
					</div>

					<div class="form-right">
						<input type="text" name="address" placeholder="*Address" required>

						<input type="text" name="country" placeholder="*Country" required>

						<input type="text" name="company" placeholder="Company" required>
					</div>

				</div>

				<div class="form-product">
					<h2 class="inf">Your Products</h2>

					<div class="product-info-header">
						<p class="w40">PRODUCT</p>

						<p class="w10">SIZE</p>

						<p class="w10">NUMBER</p>

						<p class="w40 text-right">PRICE</p>
					</div>

					<div class="product-info-header">
						<p class="w40 h150 black"><img class="product-info-img" src="{{URL::asset('images/products/nike-vapor.jpg')}}"></p>

						<p class="w10 h150 black">45</p>

						<p class="w10 h150 black">1</p>

						<p class="w40 h150 text-right flexend black">EUR 120</p>
					</div>

					<div class="checkout-total-wrap">

						<div class="checkout-total">
							<div class="total-sum">
								<p class="gray">SUBTOTAL</p>
								<p>EUR 120</p>
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
									<p class="m-0 font20">EUR 120</p>
									<p class="m-0 t-vat text-right">EUR 30</p>
								</div>
							</div>

						</div>

						<div class="conditions">
							<!--<div><input type="checkbox" name="conditions" required>Accept conditions</div>-->
							<input type='checkbox' name='thing' value='valuable' id="thing"/><label for="thing"></label> 
							<p class="ml-4 cond-txt">Accept conditions</p>
						</div>

						<div class="shippment-info gray">Goods are delivered within 1-3 business days</div>

						<button class="pay" type="submit">PAY</button>
						
					</div>
				</div>

			</form>
		</div>

	</div>

</div>

@stop