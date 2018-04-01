@extends('admin.admin_app')

@section('content')
	
	<div class="st-head">

		<div class="st-icon"><i class="far fa-plus-square fa-3x"></i></div>

		<div class="st-name">New {{ substr($selectedTable, 0, -1) }}</div>

	</div>

	<div id="table-wrap">

		<div class="add-form">
			
			<div class="af-title">Add New {{ substr($selectedTable, 0, -1) }}</div>

			<form id="add_form" action="#" method="POST">
				
				{{ csrf_field() }}

				@foreach($tableName as $t)
				<div class="form-group">
					<label for="{{ $t }}">{{ str_replace('_', ' ', ucfirst($t)) }}</label>
					@if(in_array(Helpers::getFieldType($selectedTable, $t), Helpers::numericTypes()))
						<input class="custom_input" type="number" name="{{ $t }}">
					@elseif($t == 'email')
						<input class="custom_input" type="email" name="{{ $t }}">
					@elseif(Helpers::getFieldType($selectedTable, $t) == 'text')
						<textarea name="{{ $t }}" rows="5"></textarea>
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