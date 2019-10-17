<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Search Optimization for B2b Ecommerce</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body style="background-color:#FFF;>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
           <h2 class="form-login-heading"> Admin Login </h2>
           
           <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
           
           <input type="password" class="form-control" placeholder="Your Password" id="admin_pass" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" id="admin_login" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
    	
    	$admin_email =$_POST['admin_email'];
        
        $admin_pass = $_POST['admin_pass'];
        
        $get_admin = "select id from admin_test where admin_email='$admin_email'";
        $run_admin = mysqli_query($con,$get_admin);
        	
        $count = mysqli_num_rows($run_admin);
        if($count>0){
       
       		$_SESSION['admin_email']= "Ali Akbari";
            
           		echo "<script>window.open('index.php?dashboard','_self')</script>";
           }
           
        else
        {
        
        	  echo "<script>alert('Email or Password is Wrong !')</script>";
        }
        
    }

?>

