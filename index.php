<?php 

    session_start();
	include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

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
</head>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
       
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                         }
                         
                    else if(isset($_GET['orders'])){
                    
                    	include("orders.php");
                    }
                    
                    else if(isset($_GET['view_products']))
                    {
                    	include("product_view.php");
                    	
                    }
                    
                    else if(isset($_GET['insert_product']))
                    {
                    	include("product_insert.php");
                    }
                    
                    else if(isset($_GET['insert_cat']))
                    {
                    	include("insert_category.php");
                    }
                    
                    else if(isset($_GET['view_cats']))
                    {
                    	include("view_category.php");
                    }
                    
                    else if(isset($_GET['view_customers']))
                    {
                    	include("customer.php");
                    }
                    
                    else if(isset($_GET['view_payments']))
                    {
                    	include("payment.php");
                    }
                    
                     else if(isset($_GET['delete_order']))
                    {
                    	include("delete_order.php");
                    }
                
                	 else if(isset($_GET['insert_user']))
                    {
                    	include("insert_user.php");
                    }
                    
                     else if(isset($_GET['delete_product']))
                    {
                    	include("delete_product.php");
                    }
                	
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>
<?php } ?>


