@extends('admin.admin_app')

@section('content')
	
	<div class="st-head">

		<div class="st-icon"><i class="far fa-plus-square fa-3x"></i></div>

		<div class="st-name">{{ $selectedTable }} table</div>

	</div>

	@if(Session::has('success'))
		<div class="center">
			<div class="alert alert-success fade in">
				<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
				{{ Session::get('success') }}
			</div>
		</div>
	@endif

	<div id="table-wrap">

		<div class="add-form">
			
			<div class="af-title">Add Data to {{ $selectedTable }}</div>

			<form id="add_form" action="{{ action('Admin\AdminController@store') }}" method="POST" enctype="multipart/form-data">
				
				{{ csrf_field() }}

				<input type="hidden" name="tableName" value="{{ $selectedTable }}">

				@foreach($tableName as $t)

					<div class="form-group">

						<label for="{{ $t }}">{{ str_replace('_', ' ', ucfirst($t)) }}</label>

						@if(in_array(Helpers::getFieldType($selectedTable, $t), Helpers::numericTypes()))

							<input class="custom_input" type="number" name="{{ $t }}" required>

						@elseif($t == 'email')

							<input class="custom_input" type="email" name="{{ $t }}" required>

						@elseif(Helpers::getFieldType($selectedTable, $t) == 'text')

							<textarea name="{{ $t }}" rows="5"></textarea>

						@elseif(Helpers::getFieldType($selectedTable, $t) == 'date')

							<input type="date" name="{{ $t }}">

						@elseif($t == 'image' || $t == 'picture' || $t == 'img')

							<input class="custom_input" type="text" name="destination" placeholder="File destination folder (has to be inside the public folder) e.g. images/products" required><br>

							<input type="file" name="image" id="{{ $t }}">

						@else

							<input class="custom_input" type="text" name="{{ $t }}">

						@endif
					</div>

				@endforeach

				<button class="btn btn-success">Save</button>

			</form>

		</div>

	</div>

@stop

@section('js')

	<script>
		$(document).ready(function() {

			// Create breadcrumb
			$('.at-left').append('<i class="fas fa-angle-right fa-2x bread-arrow"></i><a href="{{ action('Admin\AdminController@showTable', ['slug' => $selectedTable]) }}" class="breadcrumb-title breadcrumb-item">{{ $selectedTable }}</a>');

		});

	</script>

@stop