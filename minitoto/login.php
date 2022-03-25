<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">    
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Mini Toto</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--------- account page ---------->

<div class="container3">
<div class="registration-page">
  	<h2>Login Form</h2>
  </div>
	 
  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn3" name="login_user">Login</button>
  	</div>
  	<p>
  		Not yet a member? <a href="register.php" class="btn2">Sign up &#8594;</a>
  	</p>
  </form>
  </div>
<!--------- footer ---------->

<div class="footer">
    <div class="container">
        <div class="row">
            <div class="footer-col-1">
                <h3>Download Our App</h3>
                <p>Download App for Android and ios mobile phone.</p>
                <div class="app-logo">
                    <img src="images/play-store.png">
                    <img src="images/app-store.png">
                </div>
            </div>
            <div class="footer-col-2">
               <img src="images/logo.png">
                <p>We continue to develop, expand our presence and improve our service to delight you every day!</p>
            </div>
             <div class="footer-col-3">
                <h3>Useful Links</h3>
                <ul>
                    <li>Return Policy</li>
                    <li>Blog Post</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>
               <div class="footer-col-4">
                <h3>Foolow us</h3>
                <ul>
                    <li><a href="https://www.instagram.com/mminitoto/" class="inst">Instagram</a></li>
                </ul>
            </div>
        </div>
        <hr>
        <p class="copyright">All Rights Reserved</p>
    </div>
</div>
<!--------- JavaScript for toggle menu ---------->
<script>
    var MenuItems = document.getElementById("MenuItems");
    
    MenuItems.style.maxHeight = "0px";
    
    function menutoggle()
    {
        if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
        else
            {
                MenuItems.style.maxHeight = "0px";
            }
    }
</script>

<!--------- JavaScript for toggle form ---------->
<script>
    var LoginForm = document.getElementById("LoginForm");
    var RegForm = document.getElementById("RegForm");
    var Indicator = document.getElementById("Indicator");
    
        function register() {
            RegForm.style.transform = "translateX(0px)";
            LoginForm.style.transform = "translateX(0px)";
            Indicator.style.transform = "translateX(100px)";
        }
    function login() {
            RegForm.style.transform = "translateX(300px)";
            LoginForm.style.transform = "translateX(300px)";
           Indicator.style.transform = "translateX(0px)";
        }
    
    </script>

</body>
</html>