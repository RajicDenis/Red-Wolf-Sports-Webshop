@extends('admin.admin_app')

@section('content')
	
	<div class="featured-box">
		
		<div class="fb" style="background-image: url('{{ URL::asset('images/admin/bg/users.jpg') }}')">
			
			<div class="fb-circle zi20"><i class="fas fa-users fa-3x"></i></div>

			<div class="fb-title zi20">2 USERS</div>

			<div class="fb-desc zi20">You have 1 user in your database. Click "View" to see all users.</div>

			<a href="#" class="green_btn zi20">VIEW</a>

		</div>

		<div class="fb" style="background-image: url('{{ URL::asset('images/admin/bg/office.jpg') }}')">
			
			<div class="fb-circle zi20"><i class="fas fa-book fa-3x"></i></div>

			<div class="fb-title zi20">10 PRODUCTS</div>

			<div class="fb-desc zi20">You have 10 products in your database. Click "View" to see all products.</div>

			<a href="#" class="green_btn zi20">VIEW</a>

		</div>

		<div class="fb" style="background-image: url('{{ URL::asset('images/admin/bg/office2.jpg') }}')">
			
			<div class="fb-circle zi20"><i class="fas fa-briefcase fa-3x"></i></div>

			<div class="fb-title zi20">7 ORDERS</div>

			<div class="fb-desc zi20">You have 7 orders in your database. Click "View" to see all orders.</div>

			<a href="#" class="green_btn zi20">VIEW</a>

		</div>

	</div>
		
@stop