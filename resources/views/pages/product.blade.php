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
	}
	.section-wrap {
		padding-top: 100px;
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
</style>

<div class="section-wrap">
	
	<div class="addProduct">
		<div class="ap-desc"><span>NEMESIS 17+</span>:<span>EUR 100 (Excl. VAT)</span></div>

		<a href="#" class="ap-basket">ADD TO BASKET</a>
	</div>

</div>

@stop