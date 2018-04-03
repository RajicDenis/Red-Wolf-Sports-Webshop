@extends('admin.admin_app')

@section('content')

	<div class="st-head">

		<div class="st-icon"><i class="fas fa-users fa-3x"></i></div>

		<div class="st-name">{{ ucfirst($selectedTable) }}</div>

		<a href="{{ action('Admin\AdminController@addToTable', ['slug' => $selectedTable]) }}" class="green_btn add-custom">Add New</a>

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
		
		<table id="admin_table" class="table-striped">

			<thead>
				<tr>
					@foreach($tableName as $t)
						<th>{{ $t }}</th>
					@endforeach
						<th></th>
				</tr>
			</thead>

			<tbody>
				@if(count($tableData) != 0)
					@foreach($tableData as $t)
						<tr>
							@foreach($tableName as $tbl)
								@if($tbl != 'image')
									<td>{{ $t->$tbl }}</td>
								@else
									<td><img style="width: 80px; height: 80px;" src="{{ URL::asset('images/'.$selectedTable.'/'.$t->$tbl.'') }}"></td>
								@endif
							@endforeach
								<td style="text-align: right; width: 120px;">
									<a href="{{ action('Admin\AdminController@addToTable', ['slug' => $selectedTable, 'pid' => $t->id]) }}" class="btn btn-warning"><i class="fas fa-pencil-alt white"></i></a>
									<form action="{{ action('Admin\AdminController@delete', $t->id) }}" method="POST" id="delete_form_{{ $t->id }}" style="display: none;">
										{{ csrf_field() }}
										<input name="_method" type="hidden" value="DELETE">
										<input type="hidden" name="tableName" value="{{ $selectedTable }}">
									</form>
									<div class="btn btn-danger del" data-id='delete_form_{{ $t->id }}'><i class="fas fa-trash white"></i></div>
								</td>
						</tr>
					@endforeach
				@else
					<tr>
						<td style="text-align: center;" colspan="{{ count($tableName) }}">The table is empty!</td>
					</tr>
				@endif
			</tbody>
			
		</table>

	</div>

@stop

@section('js')

	<script>
		
		$(document).ready(function() {

			$('#admin_table').dataTable({
				"columnDefs": [
				    { "orderable": false, "targets": [6] }
				]
			});

			// Edit datatables css 
			$('#admin_table_wrapper > .row').each(function($index) {

				if($index == 0) {
					$(this).css({
						'margin-bottom': '40px',
						'width': '100%'
					});
				} 

				if($index == 1) {
					$(this).css('width', '100%');
				} 

				if($index == 2) {
					$(this).css({
						'margin-top': '50px',
						'width': '100%',
						'display': 'flex',
						'justify-content': 'center'
					});
				}

			});


		});

	</script>

@stop