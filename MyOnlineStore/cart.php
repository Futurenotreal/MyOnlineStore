<?php
require "config/constants.php";
session_start();
if(!isset($_SESSION["uid"])){
	header("location:login_form.php");
}
if (isset($_POST['CHECK_OUT'])) {
	return ['status'=> 202, 'message'=> 'Success'];
	exit();
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Online Store</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
		<link rel="stylesheet" type="text/css" href="style_main.css">
		<link rel="stylesheet" href="css/bootstrap.css"/>
    	<link rel="stylesheet" href="css/bootstrap_.css">
	</head>
<body>
<div class="container">
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo "Hi,".$_SESSION["name"]; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="cart.php">Cart</a></li>
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </li>
      </ul>
	</div>
  </nav>
</div>
	<div class="container-fluid">
		<div class="row">
		<div class="col-md-10" id="cart_msg"></div>
			<div class="col-md-12">
				<div class="panel panel-primary">
					<div class="panel-heading">Cart Checkout</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-2 col-xs-2"><b>Action</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Image</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Name</b></div>
							<div class="col-md-2 col-xs-2"><b>Quantity</b></div>
							<div class="col-md-2 col-xs-2"><b>Product Price</b></div>
							<div class="col-md-2 col-xs-2"><b>Price in <?php echo CURRENCY; ?></b></div>
						</div>
						<div id="cart_checkout"></div>
						</div> 
					</div>
				</div>
			</div>
		</div>

<script>var CURRENCY = '<?php echo CURRENCY; ?>';</script>
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
</body>	
</html>
















		