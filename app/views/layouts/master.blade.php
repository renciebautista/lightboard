
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Lightboard</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		{{ HTML::style('assets/plugins/twitter-bootstrap/css/bootstrap.css') }}
		{{ HTML::style('assets/plugins/twitter-bootstrap/css/bootswatch.min.css') }}
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="../bower_components/html5shiv/dist/html5shiv.js"></script>
			<script src="../bower_components/respond/dest/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<a href="../" class="navbar-brand">Lightboard</a>
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="navbar-collapse collapse" id="navbar-main">
					<ul class="nav navbar-nav">
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes">Maintenance <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="themes">
								<li><a href="/items">Items</a></li>
								<li><a href="/branch">Branches</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Transaction <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="download">
								<li><a href="./sales/create">Sales Entry</a></li>
								<li><a href="./bootstrap.css">Item Incomming</a></li>
								<li><a href="./bootstrap.css">Item Fullout</a></li>
								<li><a href="./bootstrap.css">Stock Adjustment</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="download">Report <span class="caret"></span></a>
							<ul class="dropdown-menu" aria-labelledby="download">
								<li><a href="./sales/create">Sales Report</a></li>
								<li><a href="./bootstrap.css">Inventory Report</a></li>
							</ul>
						</li>
						<li>
							<a href="../help/">Help</a>
						</li>
						
					</ul>

				</div>
			</div>
		</div>


		<div class="container">
			@yield('content')
		</div>

		{{ HTML::script('assets/js/jquery-1.11.1.min.js') }}
		{{ HTML::script('assets/plugins/twitter-bootstrap/js/bootstrap.min.js') }}
		<!-- {{ HTML::script('assets/plugins/twitter-bootstrap/js/bootswatch.js') }} -->
	</body>
</html>
