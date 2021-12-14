
<?php 
session_start();  
if (!isset($_SESSION['admin_id'])) {
  header("location:login.php");
}
?>
<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Online Store</title>
      <link rel="stylesheet" href="/./css/bootstrap.min.css">
      <link rel="stylesheet" href="register_.css">
   </head>
   <body>
      <div id="container">
         <div id="inviteContainer">
            <div class="logoContainer"><img class="logo" src="/../images/simple-logo.png"/><img class="text" src="/../images/name-logo.png"/></div>
            <div class="acceptContainer">
               <form id="admin-register-form">
                  <h1>ADMIN REGISTER</h1>
                  <p class="message"></p>
                  <div class="formContainer">
                     <div class="formDiv" style="transition-delay: 0.1s">
                        <p>NAME</p>
                        <input type="email" name="name" id="name" placeholder="Enter name" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.2s">
                        <p>EMAIL</p>
                        <input type="email" name="email" id="email" placeholder="Enter email" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.3s">
                        <p>PASSWSORD</p>
                        <input type="password" name="password" id="password" placeholder="Password" required=""/>
                     </div>
                     <div class="formDiv" style="transition-delay: 0.4s">
                        <p>CONFIRM PASSWSORD</p>
                        <input type="password"  name="cpassword" id="cpassword" placeholder="Password" required=""/>
                     </div>
                     <input type="hidden" name="admin_register" value="1">
                     <div class="formDiv" style="transition-delay: 0.5s">
                        <button class="btn btn-primary register-btn" type="button" type="submit">Register</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
      <script src="/../js/jquery2.js"></script>
      <script src="/../js/transit.js"></script>
      <script src="./js/dashboard.js"></script>
      <script src="./js/main.js"></script>
      <script>
         $(function () {
           setTimeout(function () {
             $('.logoContainer').transition({ scale: 1 }, 700, 'ease');
             setTimeout(function () {
               $('.logoContainer .logo').addClass('loadIn');
               setTimeout(function () {
                 $('.logoContainer .text').addClass('loadIn');
                 setTimeout(function () {
                   $('.acceptContainer').transition({ height: '631.5px' });
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
