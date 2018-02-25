@extends('app')

@section('content')

<style>
	.header-nav {
		background: #1C1C1C !important;
	}
	.section-wrap {
		padding-top: 100px;
	}

	.filter-nav {
		display: flex;
		justify-content: space-between;
		align-items: center;
		position: fixed;
		width: 100%;
		height: 80px;
		background: white;
		color: #1C1C1C;
		padding: 0 50px;
	}
	.filter-btn {
		border: 2px solid rgba(8,8,8,0.4);
	}
	.f-txt {
	    font-size: 17px;
	}
	.filter-list {
		display: flex;
		align-items: center;
	}
	.list-btn {
		display: flex;
		justify-content: center;
		align-items: center;
		border: 1px solid #1C1C1C;
		border-radius: 50%;
		width: 40px;
		height: 40px;
	}
	.fs20 {
		font-size: 15px;
		top: 0;
	}
</style>

<div class="section-wrap">
	
	<div class="filter-nav">
		
		<h1>All Products</h1>

		<div class="btn-a filter-btn">FILTER<i class="fas fa-angle-double-down ml-3"></i></div>

		<div class="filter-list">

			<span class="f-txt mr-3">LIST DISPLAY</span>

			<a href="#" class="list-btn mr-3"><span class="glyphicons glyphicon glyphicon-stop fs20" aria-hidden="true"></span></span></a>

			<a href="#" class="list-btn mr-3"><span class="glyphicons glyphicon glyphicon-th-large fs20 ml-1" aria-hidden="true"></span></a>
						
			<a href="#" class="list-btn mr-3"><span class="glyphicons glyphicon glyphicon-th fs20 ml-1" aria-hidden="true"></span></span></a>

		</div>

	</div>


	

</div>

@stop