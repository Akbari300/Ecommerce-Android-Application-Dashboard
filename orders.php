<?php
	
	session_start(); 
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li class="active"><!-- active begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / View Orders
                
            </li><!-- active finish -->
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
               <h3 class="panel-title"><!-- panel-title begin -->
               
                   <i class="fa fa-tags"></i>  View Orders
                
               </h3><!-- panel-title finish --> 
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-striped table-bordered table-hover"><!-- table table-striped table-bordered table-hover begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> No: </th>
                                <th> Customer Email: </th>
                                <th> Product Name: </th>
                                <th> Product Qty: </th>
                                <th> Company name: </th>
                                <th> Order Date: </th>
                                <th> Status: </th>
                                <th> Delete: </th>
                                <th>Edit:</th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                           
                           
                           <?php 
          
                                $i=0;
                            
                                $get_orders = "select * from pending_orders";
                                
                                $run_orders = mysqli_query($con,$get_orders);
          
                                while($row_order=mysqli_fetch_array($run_orders)){
                                    $id = $row_order['id'];
                                    $order_id = $row_order['order_id'];
                                    
                                    $cus_email = $row_order['cus_email'];
                                    
                                    $product_name = $row_order['pro_name'];
                                    
                                    $qty = $row_order['quantity'];
                                    
                                    $company_name = $row_order['company_name'];
                                    
                                    $order_date= $row_order['order_date'];
                                    
                                    $order_status = $row_order['status'];
                                    
                                    $i++;
                            
                            ?>
                        
                           
                           
                            
                          <tr><!-- tr begin -->
                                <td> <?php echo $order_id; ?> </td>
                                <td> <?php echo $cus_email; ?></td>
                                <td> <?php echo $product_name; ?> </td>
                                <td> <?php echo $qty; ?></td>
                                <td><?php echo $company_name; ?></td>
                                <td><?php echo  $order_date; ?></td>
                                <td> <?php echo $order_status; ?> </td>
                                 <td> 
                                     
                                     <a href="index.php?delete_order=<?php echo $id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                </td>
                                <td>
                                	<a href="#" class="btn btn-info btn-sm">
         							 <span class="glyphicon glyphicon-ok"></span> Edit 
        							</a>
                                </td>
                                
                            </tr><!-- tr finish -->
                           
                           
                           <?php } ?>
                            
                           
                            
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- table table-striped table-bordered table-hover finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<?php } ?>