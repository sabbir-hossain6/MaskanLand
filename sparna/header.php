<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo "$title"; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" type="image/png" href="img/icon.png">
  <link href="https://fonts.googleapis.com/css?family=Oleo+Script" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><img src="img/sparna.png" alt="Sparna Home"></a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Products
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="tops.php">Tops</a></li>
              <li><a href="western.php">Western Dresses</a></li>
              <li><a href="tshirts.php">T-Shirts</a></li>
              <li><a href="jeans.php">Jeans</a></li>
              <li><a href="leggings.php">Leggings</a></li>
              <li><a href="skirts.php">Skirts</a></li>
              <li><a href="accessories.php">Accessories</a></li>
            </ul>
          </li> 
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li>
    	    <form class="navbar-form navbar-left" action="search.php" method="post">
    	      <div class="input-group">
    	        <input type="text" class="form-control" placeholder="Search">
    	        <div class="input-group-btn">
    	          <button class="btn btn-default" type="submit">
    	            <i class="glyphicon glyphicon-search"></i>
    	          </button>
    	        </div>
    	      </div>
    	    </form>
          </li>
          <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
      </div>
    </nav>


	<div>