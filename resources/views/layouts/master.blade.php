<!DOCTYPE html>
<html>
<head>
	<title>ProgQuest - @yield('title')</title>
    <!-- BOOTSTRAP-LIB-STYLES ==========(Persistent)================================================ -->
    <!--<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">-->
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
</head>
<body>
   
   	@include('shared.header')

	<div class="container">
		@yield('content')	
	</div>

	@include('shared.footer')

    <!-- BOOTSTRAP-LIB-SCRIPTS ===================================================================== -->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="{{asset('js/jquery-2.2.4.js')}}"></script>
    
    <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
</body>
</html>