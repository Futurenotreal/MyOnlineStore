<?php
   if (isset($_SESSION["uid"])) {
   	header("location:profile.php");
   }
   if (isset($_POST["login_user_with_product"])) {
   	$product_list = $_POST["product_id"];
   	$json_e = json_encode($product_list);
   	setcookie("product_list",$json_e,strtotime("+1 day"),"/","","",TRUE);
   }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <meta charset="UTF-8">
      <title>Online Store</title>
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="css/bootstrap.min.css"/>
      <link rel="stylesheet" href="login_.css">
      <script src="js/jquery2.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="main.js"></script>
   </head>
   <body>
      <div id="container">
         <div id="inviteContainer">
         <div class="logoContainer"><img class="logo" src="images/simple-logo.png"/><img class="text" src="images/name-logo.png"/></div>
            <div class="acceptContainer">
               <form onsubmit="return false" id="login">
                  <h1>CUSTOMER LOGIN</h1>
                  <p class="message"></p>
                  <div class="formContainer">
                     <div class="formDiv" style="transition-delay: 0.2s">
                        <p>EMAIL</p>
                        <input type="email" type="email" name="email" id="email"  placeholder="Enter email" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.4s">
                        <p>PASSWSORD</p>
                        <input type="password" name="password" id="password" placeholder="Password" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.6s">
                        <button type="submit" class="btn btn-success" Value="Login">Login</button><span class="register">Need an account?<a href="customer_registration.php?register=1">Register</a></span>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="js/jquery2.js"></script>
      <script src="js/transit.js"></script>
      <script>
   $(function () {
     setTimeout(function () {
       $('.logoContainer').transition({ scale: 1 }, 700, 'ease');
       setTimeout(function () {
         $('.logoContainer .logo').addClass('loadIn');
         setTimeout(function () {
           $('.logoContainer .text').addClass('loadIn');
           setTimeout(function () {
             $('.acceptContainer').transition({ height: '431.5px' });
             setTimeout(function () {
               $('.acceptContainer').addClass('loadIn');
               setTimeout(function () {
                 $('.formDiv, form h1').addClass('loadIn');
               }, 500);
             }, 500);
           }, 500);
         }, 500);
       }, 1000);
     }, 10);
   });
       
</script>
   </body>
</html>






















