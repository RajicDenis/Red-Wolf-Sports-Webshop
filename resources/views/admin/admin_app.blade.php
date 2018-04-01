<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin Panel</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

        <!-- Styles --> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- DataTables -->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">

        <link rel="stylesheet" href="{{ URL::asset('css/plugins/sweetalert.css') }}">
        {{ Html::style('css/admin/admin_app.css') }}
        @yield('css')


         <!-- jQuery & jQuery UI-->
        <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.0/themes/smoothness/jquery-ui.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        
        <!-- JavaScripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

        <!-- DataTables -->
        <script src="//code.jquery.com/jquery-1.12.3.js"></script>
        <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>

        <script src="{{ URL::asset('js/sweetalert.min.js') }}"></script>

    </head>
    <body>

		<div class="admin_wrap">

			<div class="control_panel">
				
				<div class="img_wrap"><img class="cp_img" src="{{ URL::asset('images/users/user-default.jpg') }}"></div>

				<div class="cp_options">
					
					@foreach($tables as $table)
			
						<a href="{{ action('Admin\AdminController@showTable', ['slug' => ucfirst($table)]) }}"><div class="option-list-item">{{ str_replace('_', ' ', ucfirst($table)) }}</div></a>

					@endforeach

				</div>

			</div>

			<div class="admin_page">
				
				<div class="admin_top">
					
					<div class="at-left">
						<a href="{{ route('admin_home') }}"><i class="fas fa-home fa-2x"></i></a>
						<span class="breadcrumb-title ml-5">SyAdmin</span>
					</div>

					<div class="at-right">
						<img class="small_user_img" src="{{ URL::asset('images/users/user-default.jpg') }}">
					</div>

				</div>

                <div class="admin_container">

				    @yield('content')

                </div>

			</div>

        </div>

        @yield('js')
        
    </body>
</html>
