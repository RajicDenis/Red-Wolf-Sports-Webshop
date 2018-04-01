@extends('admin.admin_app')

@section('content')

	<div class="st-head">

		<div class="st-icon"><i class="fas fa-users fa-3x"></i></div>

		<div class="st-name">{{ $selectedTable}}</div>

		<a href="#" class="green_btn add-custom">Add New</a>

	</div>

	<div id="table-wrap">
		
		<table id="admin_table" class="table-striped">

			<thead>
				<tr>
					@foreach($tableName as $t)
						<th>{{ $t }}</th>
					@endforeach
				</tr>
			</thead>

			<tbody>
				@foreach($tableData as $t)
					<tr>
						@foreach($tableName as $tbl)
							<td>{{ $t->$tbl }}</td>
						@endforeach
					</tr>
				@endforeach
			</tbody>
			
		</table>

	</div>

@stop

@section('js')

	<script>
		
		$(document).ready(function() {

			$('#admin_table').dataTable();

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