<?php
   if (isset($_GET["register"])) {
   	?>
<!doctype html>
<html>
<head>
      <meta charset="utf-8">
      <title>Online Store</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="customer_registration.css">
      <script src="js/jquery2.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="main.js"></script>
   </head>
   <body>
      <div id="container">
         <div id="inviteContainer">
         <div class="logoContainer"><img class="logo" src="/../images/simple-logo.png"/><img class="text" src="/../images/name-logo.png"/></div>
            <div class="acceptContainer">
               <form id="signup_form" onsubmit="return false">
                  <h1>CUSTOMER REGISTER</h1>
                  <div class="formContainer">
                     <div class="formDiv" style="transition-delay: 0.1s">
                        <p>NICK NAME</p>
                        <input type="text" id="nick_name" name="nick_name" placeholder="Enter nick name"  required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.2s">
                        <p>EMAIL</p>
                        <input type="text" id="email" name="email" placeholder="Enter email" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.2s">
                        <p>PASSWSORD</p>
                        <input type="password" id="password" name="password" placeholder="Password" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.3s">
                        <p>ADDRESS LINE</p>
                        <input type="text" id="address" name="address" placeholder="Enter your address"  required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.4s">
                        <button value="Sign Up" type="submit" name="signup_button"class="btn btn-success btn-lg">Register</button><span class="register">Already have?<a href="../login_form.php">Login</a></span>
                     </div>
                     <div class="col-md-8" id="signup_msg">
                        <!--allert-->
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
                   $('.acceptContainer').transition({ height: '651.5px' });
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
	<?php
}
?>
