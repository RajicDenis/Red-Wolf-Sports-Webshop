@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
	.check-banner {
		display: flex;
		justify-content: center;
		align-items: center;
		height: 350px;
		background: #1F1F1F;
		color: white;
	}
	.check-txt {
		margin-top: 50px;
		font-size: 40px;
	}
	.form-box {
		display: flex;
		justify-content: center;
		width: 100%;
		padding: 50px 0;
	}
	.check-form {
		display: flex;
		flex-direction: column;
		width: 90%;
		background: white;
		padding-bottom: 60px;
	}
	.form-body {
		display: flex;
		justify-content: space-around;
	}
	.form-left, .form-right {
		display: flex;
    	flex-direction: column;
    	width: 40%;
	}
	.form-left > input, .form-right > input {
		height: 50px;
	    margin-bottom: 40px;
	    border: none;
	    padding: 0 20px;
	    background: #C0C0C0;
	    color: white;
	    box-shadow: inset 0 0 5px black;
	}
	input::placeholder {
		color: white;
	}
	.req {
		margin: 40px 0 0 100px;
	}
	.inf {
		margin: 30px 0 50px 100px;
	}
	.product-info-header {
		display: flex;
		margin: 0 100px;
		color: gray;
		border-bottom: 1px solid #1C1C1C;
	}
	.w40 {
		width: 40%;
	}
	.w10 {
		width: 10%;
	}
	.h150 {
		display: flex;
		align-items: center;
		font-size: 20px;
		height: 150px;
		font-family: 'Bree Serif', sans-serif;
	}
	.product-info-img {
		height: 100%;
	}
	.flexend {
		justify-content: flex-end;
	}

	.checkout-total-wrap {
		display: flex;
		flex-direction: column;
		align-items: flex-end;
		margin: 0 100px;
	}
	.checkout-total {
		display: flex;
		flex-direction: column;
		width: 300px;
	}
	.total-sum {
		display: flex;
		justify-content: space-between;
		height: 60px;
	    align-items: center;
	    font-size: 17px;
	    border-bottom: 1px solid rgba(8,8,8,0.4);
	}
	.t-vat {
		font-size: 13px;
		color: gray;
	}
	.fatb {
		border-bottom: 2px solid #1C1C1C;
	}
	.font20 {
		font-size: 20px;
	}
	.conditions {
		display: flex;
	    width: 300px;
	    margin-top: 30px;
	}
	.cond-txt {
		font-size: 18px;
	}
	.shippment-info {
		width: 300px;
    	margin-top: 20px;
	}
	.pay {
		height: 45px;
		width: 300px;
		border-radius: 20px;
		background: #1C1C1C;
		color: white;
		font-size: 18px;
		margin-top: 30px;
		transition: all 0.3s ease-in-out;
	}
	.pay:hover {
		background: #ea0d27;
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
			<form id="checkout" class="check-form">

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