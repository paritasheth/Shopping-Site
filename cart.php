<!DOCTYPE html>
<html>
	<head>
		<title>Cart page</title>
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
        </nav><br><br><br>
		<div class="container">
            <div class="table-responsive">
            <table class="table table-hover">
                <tbody>
                    <tr><th>Item Number</th> <th>Item Name</th> <th>Price</th><th></th></tr>
                    <tr><td></td> <td></td> <td></td><td></td></tr>
					<tr><td></td> <td>Total</td> <td>Rs 0/-</td><td><button class="btn btn-primary">Confirm Order</button></td></tr>
                </tbody>
            </table>
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