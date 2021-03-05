<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>



<head>
<style>
.bg-image {
  /* The image used */
  background-image: url("uploads/bg15.png");
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.login-page {
	border-radius: 25px;
	background-color: #81e1ec;
}

</style>
</head>
<?php include_once('layouts/sub-header.php'); ?>
<div class="bg-image">



<?php include_once('layouts/header.php'); ?>



<div class="login-page">
    <div class="text-center">
       <h1><i><b>Welcome</b></i></h1>
	   <div><img src="uploads/logo/logo-cofim.png"/></div>
	   <h4><i><b>COFI-M IMS Portal</b></i></h4>
       <p>Sign in to start your session</p>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
        </div>
    </form>
</div>
</div>
<?php include_once('layouts/footer.php'); ?>
