@extends('layout.master')

@section('content')
<div class="banner">
	<div class="masked black"></div>
	<div class="container">
		<div class="wapper">
			<div class="content">
				<h4 class="color-fec300">Get In Touch</h4>
				<h2 class="title">Our Contacts</h2>
				<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
			</div>
		</div>
	</div>
</div>
<div class="section contact-us">
	<div class="container">
		<div class="wapper">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="element">
						<div class="icon-area">
							<div class="process-icon">
								<i class="fa fa-map-marker"></i>
							</div>
						</div>
						<div class="content-area">
							<p>167, Ngô Xuân Quảng</p>
							<p>Gia Lâm</p>
							<p>Hà Nội</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="element">
						<div class="icon-area">
							<div class="process-icon">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
						</div>
						<div class="content-area">
							<p>0123.456.789</p>
							<p>0987.456.333</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="element">
						<div class="icon-area">
							<div class="process-icon">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
						</div>
						<div class="content-area">
							<p>suporter@xxx.com</p>
							<p>tester@xxx.com</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><div class="break black"></div></div>
<div class="section our-professionals">
	<div class="container">
		<div class="head">
			<h4 class="color-fec300">Meet With</h4>
			<h2>Our Professionals</h2>
			<p>Proin mattis rutrum magna, et pretium erat tincidunt at. Donec lectus ipsum, pulvinar id sollicitudin id, bibendum vel quam. Suspendisse nec ante non lacusvel sed sem</p>
		</div>
		<div class="wapper">
			<div class="row">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="professional">
						<div class="photo">
							<img src="images/our-team.png">
						</div>
						<div class="info">
							<h3 class="name">Ted Cortney</h3>
							<p class="info-except">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="professional">
						<div class="photo">
							<img src="images/our-team1.png">
						</div>
						<div class="info">
							<h3 class="name">Ted Cortney</h3>
							<p class="info-except">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
						</div>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<div class="professional">
						<div class="photo">
							<img src="images/our-team2.png">
						</div>
						<div class="info">
							<h3 class="name">Ted Cortney</h3>
							<p class="info-except">Suspendisse potenti. Etiam non euismod augue. Nam aliquam sit amet tortor sit amet consectetur.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container"><div class="break black"></div></div>
<div class="section contact-form">
	<div class="container">
		<div class="head">
			<h2>Got Some Questions?</h2>
			<p>Please, feel yourself comfortable to fill in our contact form</p>
		</div>
		<div class="wapper">
			<form>
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Full name" aria-describedby="basic-addon1">
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Email" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Subject" aria-describedby="basic-addon1">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<textarea name="textarea" rows="10" class="form-control" aria-invalid="false" placeholder="Message..."></textarea>
					</div>
				</div>
				<div class="row">
					<div class="btn"><a href="#" tabindex="0">Read More</a></div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection