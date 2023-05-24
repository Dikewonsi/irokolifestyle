<?php  
    include ("../config/db-conn.php");
    include('myfunctions.php');
    session_start();

    if (!isset($_SESSION['admin_id'])) {
        // code...
        header("location:login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="IrokoLifestyle admin is super flexible, powerful, clean &amp; modern responsive bootstrap 5 admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, IrokoLifestyle admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <title>IrokoLifestyle - Order Tracking</title>

    <?php include('header.php'); ?>
            <!-- Page Sidebar Ends-->

            <!-- Settings Section Start -->
            <div class="page-body">
                <div class="title-header">
                    <h5>Order Tracking</h5>
                    <p>Track any order by searching with the tracking number</p>
                </div>                
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Details Start -->
                                    <div class="card">
                                        <div class="card-body">
                                            <form class="theme-form theme-form-2 mega-form" method="POST" action="code.php">
                                                <div class="row">
                                                    <div class="mb-4 row align-items-center">
                                                        <label class="form-label-title col-sm-2 mb-0">Tracking Number</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="text" name="trackingNo" placeholder="Enter Tracking No">
                                                        </div>                                                        
                                                    </div>                                                    

                                                    <div class="card-footer text-end border-0 pt-0">
                                                        <button type="submit" name="trackOrderBtn" class="btn btn-primary me-3">Submit</button>
                                                        <a href="index.php" class="btn btn-outline-primary">Cancel</a>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- Details End -->                                    
                                    <!-- Address End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>               
            </div>
            <!-- Settings Section End -->
        </div>
        <!-- Page Body End-->

    </div>
    <!-- page-wrapper End-->

   <?php include('footer.php'); ?>

</body>

</html>