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
					@if(App\Http\Helpers::getFieldType($selectedTable, $t) == 'integer')
						<input type="number" name="{{ $t }}">
					@else
						<input type="text" name="{{ $t }}">
					@endif
				</div>
				@endforeach

			</form>

		</div>

	</div>

@stop