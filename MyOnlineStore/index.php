<?php
require "config/constants.php";
session_start();
if(isset($_SESSION["uid"])){
	header("location:profile.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Online Store</title>
		<script src="js/jquery2.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
    	<link rel="stylesheet" type="text/css" href="style_main.css">
		<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://bootsnipp.com/dist/bootsnipp.min.css?ver=70eabcd8097cd299e1ba8efe436992b7">
	</head>
<body>


	<div class="container">
		<div class="container-fluid">	
		<nav class="navbar navbar-inverse">
    <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
		<a class="navbar-brand" href="index.php">Store</a>
	</div>

		<div class="collapse navbar-collapse" id="collapse">
			<ul class="nav navbar-nav navbar-right">
				
			<li class="dropdown"><a href="#" id="cart_container" class="dropdown-toggle" data-toggle="dropdown">Cart<span class="badge">0</span></a>
					<div class="dropdown-menu">
					<div class="shopping-cart">
    				<ul class="shopping-cart-items">
					<div id="cart_product"></div>
   					</ul>
  				</div> 		
			</div>
		</li>


				<li><a href="login_form.php" class="dropdown-toggle" data-toggle="dropdown-toggle"></span>SignIn</a>
					
				</li>
			</ul>
		</div>
	</div>
</div>	
	<p><br/></p>
	<p><br/></p>
	<p><br/></p>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-2 col-xs-12">
				<div id="get_category"></div>
				<div id="get_brand"></div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div class="row">
					<div class="col-md-12 col-xs-12" id="product_msg">
					</div>
				</div>
				<div class="panel panel-info">
					<div class="panel-heading">Products</div>
					<div class="panel-body">
						<div id="get_product"></div>
					</div>
				</div>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>

	
</body>
</html>



<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );

	
});
</script>
















































