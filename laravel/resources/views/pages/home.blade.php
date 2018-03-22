@extends('layout.master')

@section('content')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	<!-- Indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	</ol>

	<!-- Wrapper for slides -->
	<div class="carousel-inner relative" role="listbox">					
		<div class="item active">
			<div class="pgoto">	
				<div class="masked black"></div>
				<img src="{{asset('public/images/banner.jpg')}}" alt="...">
			</div>
			<div class="carousel-caption">
				<h3 class="color-fec300">The Taste Of Our</h3>
				<h2>Amazing Cakes</h2>
				<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
			</div>
		</div>
		<div class="item">
			<div class="pgoto">	
				<div class="masked black"></div>						
				<img src="{{asset('public/images/banner1.jpg')}}" alt="...">
			</div>
			<div class="carousel-caption">
				<h3 class="color-fec300">The Taste Of Our</h3>
				<h2>Amazing Cakes</h2>
				<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
			</div>
		</div>
		<div class="item">
			<div class="pgoto">	
				<div class="masked black"></div>
				<img src="{{asset('public/images/banner2.jpg')}}" alt="...">
			</div>
			<div class="carousel-caption">
				<h3 class="color-fec300">The Taste Of Our</h3>
				<h2>Amazing Cakes</h2>
				<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
			</div>
		</div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<div class="section products sweet">
	<div class="container">
		<div class="wapper">
			<div class="head">
				<h5 class="subtitle color-fec300">Discover More Of</h5>
				<h2 class="title">Our Sweet Selection</h2>
				<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam.</p>
			</div>
			<div class="content">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="product">
							<h4 class="name">Chocolate Muffin</h4>
							<div class="portrait relative">
								<img src="{{asset('public/images/img-376464.jpg')}}">
								<div class="masked"><div class="add"></div></div>
							</div>
							<div class="description">
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
							</div>
							<div class="price color-fec300"><span>$ 3.00</span></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="product">
							<h4 class="name">Chocolate Muffin</h4>
							<div class="portrait relative">
								<img src="{{asset('public/images/img-68903.jpg')}}">
								<div class="masked"><div class="add"></div></div>
							</div>
							<div class="description">
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
							</div>
							<div class="price color-fec300"><span>$ 5.00</span></div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="product">										
							<div class="wap relative">
								<h4 class="name">Chocolate Muffin</h4>
								<div class="portrait relative">
									<img src="{{asset('public/images/img-808941.jpg')}}">
									<div class="masked"><div class="add"></div></div>
								</div>
								<div class="description">
									<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
								</div>
								<div class="price color-fec300"><span>$ 4.50</span></div>
							</div>										
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-3">
						<div class="product">
							<h4 class="name">Chocolate Muffin</h4>
							<div class="portrait relative">
								<img src="{{asset('public/images/img-890577.jpg')}}">
								<div class="masked"><div class="add"></div></div>
							</div>
							<div class="description">
								<p>Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
							</div>
							<div class="price color-fec300"><span>$ 3.99</span></div>
						</div>
					</div>
				</div>
			</div>
			<div class="look-more">
				<a class="btn" href="#">Look More</a>
			</div>	
		</div>
	</div>
</div>
<div class="section about-us relative">
	<div class="masked black"></div>
	<div class="container wapper">
		<div class="head">
			<h2 class="title">About Company</h2>
			<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam.</p>
		</div>
		<div class="slider autoplay">
			<div class="block-conten">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-5">
						<div class="content photo">
							<img src="{{asset('public/images/img-842876.jpg')}}">
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-7">
						<div class="content text">
							<h2>We create brand</h2>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<div class="btn"><a href="#">Read More</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-conten">
				<div class="row">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<div class="content title">
							<h2>How you can enjoy it ?</h2>
						</div>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9">
						<div class="content text">
							<h2>We create brand</h2>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience. Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<div class="btn"><a href="#">Read More</a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="block-conten">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-md-5">
						<div class="content photo crile">
							<img src="{{asset('public/images/img-696205.jpg')}}">
						</div>
					</div>
					<div class="col-xs-12 col-sm-8 col-md-6">
						<div class="content text">
							<h2>We create brand</h2>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<p>Understanding your requirements and objectives is important to us. We listen and work together to create a trully unique and unforgettable experience.</p>
							<div class="btn"><a href="#">Read More</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div></div>
@endsection