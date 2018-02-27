<!DOCTYPE html>
<html>
	<head>
		<title>Products page</title>
		<!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" type="text/css" href="style_ass.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>				<!--to place hamberger icon....adds one horizontol line in the button-->
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
						<li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
                        <li><a href="setting.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                        <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br>
		<div class="container">								<!--panels-->
			<div class="jumbotron">
				<h1>Welcome to our Lifestyle Store!</h1>
				<p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="products.php#cameras" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="camera">
                            <div class="caption">
                                <h3>Cannon EOS</h3>
                                <p>Price: Rs. 36000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#cameras" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="camera">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs. 40000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#cameras" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="camera">
                            <div class="caption">
                                <h3>Sony DSLR</h3>
                                <p>Price: Rs. 50000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#cameras" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="camera">
                            <div class="caption">
                                <h3>Olympus DSLR</h3>
                                <p>Price: Rs. 80000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="products.php#shirts" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="shirt">
                            <div class="caption">
                                <h3>H&W</h3>
                                <p>Price: Rs. 800.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#shirts" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="shirt">
                            <div class="caption">
                                <h3>Luis Phil</h3>
                                <p>Price: Rs. 1000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#shirts" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="shirt">
                            <div class="caption">
                                <h3>John Zok</h3>
                                <p>Price: Rs. 1500.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#shirts" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="shirt">
                            <div class="caption">
                                <h3>Jhalsani</h3>
                                <p>Price: Rs.1300.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3 col-sm-6">
					<a href="products.php#watches" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="watch">
                            <div class="caption">
                                <h3>Titan model #301</h3>
                                <p>Price: Rs. 13000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#watches" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="watch">
                            <div class="caption">
                                <h3>Titan model #201</h3>
                                <p>Price: Rs. 3000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#watches" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="watch">
                            <div class="caption">
                                <h3>HMT Milan</h3>
                                <p>Price: Rs. 8000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
				<div class="col-md-3 col-sm-6">
					<a href="products.php#watches" >
						<div class="thumbnail">
                            <img src="img/1.jpg" alt="watch">
                            <div class="caption">
                                <h3>Faber Luba #111</h3>
                                <p>Price: Rs. 18000.00</p>
								<button class="btn btn-primary btn-block">Add to cart</button>
                            </div>
                        </div> 
                    </a>
				</div>
			</div>
		</div>
		<footer>
			<div class="container">
				<center>
					Copyright @ Lifestyle Store. All Rights Reserved|Contact Us: +91 90000 00000
				</center>
			</div>
		</footer>
	</body>
</html>