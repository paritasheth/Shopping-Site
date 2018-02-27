<!DOCTYPE html>
<html>
	<head>
		<title>Login page</title>
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
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav><br><br>
		<div class="container">								<!--panels-->
			<div class="row">
				<div class="col-xs-6">
					<div class="panel panel-primary">						<!--panel:basic panel properties-->
						<div class="panel-heading">LOGIN</div>			<!--header and footer are not compulsary-->
						<div class="panel-body">
							<p class="text-warning">Login to make a purchase</p>
							<form>
								<div class="form-group">
									<input type="email" placeholder="Email" class="form-control" >
								</div>
								<div class="form-group">
									<input type="password" placeholder="Password" class="form-control" >
								</div>
								<button class="btn btn-primary">Login</button>
							</form>
						</div>
						<div class="panel-footer">Don't have an account?<a href="">Register</a></div>
					</div>
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