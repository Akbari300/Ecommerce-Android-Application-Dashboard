<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> Dashboard / View Categories
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-10"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> View Categories
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> Category Title </th>
                                <th> Image</th>
                                <th> Category Desc </th>
                                
                                <th> Edit</th>
                                <th> Delete </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            
                            
                            <tr><!-- tr begin -->
                                
                                <td>Electronics</td>
                                <td><img src="images/elec.jpg"/></td>
                                <td width="300">Electronic devices and components An electronic component is any physical entity in an electronic system</td>
                                
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            
                             <tr><!-- tr begin -->
                                
                                <td>Lifestyle</td>
                                <td><img src="images/life.jpg"/></td>
                                <td width="300"> lifestyle. In the magazine and television industries, "lifestyle" is used to describe a category of publications or programs</td>
                                
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            
                            <tr><!-- tr begin -->
                                
                                <td>Home Appliances</td>
                                <td><img src="images/home.jpg"/></td>
                                <td width="300">Home Appliances Large Appliances Kitchen & Dining Furniture Home Furnishing Home Decor Home Improvemen</td>
                                
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            
                            <tr><!-- tr begin -->
                                
                                <td>Book</td>
                                <td><img src="images/book.jpg"/></td>
                                <td width="300">Category for different types of books, as distinct and separate from the Category:Books by genre</td>
                                
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            
                                 <tr><!-- tr begin -->
                                
                                <td>More</td>
                                <td><img src="images/more.jpg"/></td>
                                <td width="300">Learn more about available product categories for selling , including categories that require approval</td>
                                
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-pencil"></i> Edit
                                    </a>
                                </td>
                                <td> 
                                    <a href="#">
                                        <i class="fa fa-trash"></i> Delete
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                         
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>