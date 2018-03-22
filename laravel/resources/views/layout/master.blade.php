<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Shop</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/font-awesome.min.css')}}">	
	<link href="https://fonts.googleapis.com/css?family=Berkshire+Swash" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noticia+Text:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/slick.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/slick-theme.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/datatable.css')}}" >
	<link rel="stylesheet" type="text/css" href="{{asset('public/css/style.css')}}">
	<script type="text/javascript" src="{{asset('public/js/jquery-3.2.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('public/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/js/slick.min.js')}}"></script>
	<script src="{{asset('public/js/datatable.js')}}"></script>
</head>
<body>
	<div class="page home">
		<div class="nav-top">
			@include('layout.header')
		</div>
		<main>
			@yield('content')
		</main>	
		<footer>
			@include('layout.footer')
		</footer>
	</div>


<script>
	$(document).ready(function(){
		<!-- slick -->
		$('.autoplay').slick({
		  slidesToShow: 1,
		  slidesToScroll: 1,
		  autoplay: true,
		  autoplaySpeed: 9000,
		  arrows: false,
		  dots: true
		});
		
		//Table database
		$('table').DataTable();
	});
</script>
</body>
</html>