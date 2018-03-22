<div class="container">
	<div class="line-top">
		<div class="row">
			<div class="col-xs-4 col-sm-5 col-md-5">
				<div class="logo pull-left">
					<a href="#">Brand</a>
				</div>
			</div>
			<div class="col-xs-8 col-sm-7 col-md-7">	
				<div class="search-for pull-right">
					<form class="navbar-form search" role="search">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Search" name="q">
							<div class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
							</div>
						</div>
					</form>
					<div class="cart">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
						<span>0</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<nav class="navbar navbar-default" data-spy="affix" data-offset-top="48">
	<div class="container">	
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-left">
				<li><a class="active" href="{{asset('')}}">Home</a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Danh Mục <span class="caret"></span></a> 
					<ul class="dropdown-menu">
						@foreach ($cats as $cat)
							<li><a href="{{asset('')}}category/{{$cat['name']}}">{{$cat['name']}}</a></li>
						@endforeach
					</ul>
				<li><a href="{{asset('')}}product">Product</a></li>
				<li><a href="{{asset('')}}about">About Us</a></li>
				<li><a href="{{asset('')}}contact">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>
<div class="bp"></div>