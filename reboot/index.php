<?php include "auth.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard - Car Service</title>
    <?php include "includes/head.php";?>
</head>

<body>
    <div id="app">
        <?php include "includes/sidebar.php";?>
        <?php
         error_reporting(0);
            include "includes/database.php";
            //getting status
            $c="SELECT * FROM `enquiry` ";
            $cus=mysqli_query($connect,$c);
            $cus_count=mysqli_num_rows($cus);

            //count recharges
            $r="SELECT * FROM  `payment` WHERE `payment_status`='Success' ";
            $rc=mysqli_query($connect,$r);
            $recharge_count=mysqli_num_rows($rc);

            //count packages
            $p="SELECT * FROM `packages` ";
            $pk=mysqli_query($connect,$p);
            $pk_count=mysqli_num_rows($pk);

            //count recharges
            $f="SELECT * FROM  `payment` WHERE `payment_status`='Payment failed' ";
            $fm=mysqli_query($connect,$f);
            $fm_count=mysqli_num_rows($fm);
        ?>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <h3>Profile Statistics</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 col-lg-12">
                        <div class="row">
                            <div class="col-6 col-lg-3 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Enquiry</h6>
                                                <h6 class="font-extrabold mb-0"><?php echo $cus_count;?></h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Customer - enquiry</h4>
                                    </div>
                                    <div class="card-body">
                                    <table class="table table-striped" id="table1" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Enquiry ID</th>
                                                <th>Mobile No.</th>
                                                <th>Car Name</th>
                                                <th>Car Model</th>
                                                <th>Location</th>
                                           </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                         error_reporting(0);
                                            $s="SELECT * FROM `enquiry`";
                                            $res=mysqli_query($connect,$s);
                                            while($data=mysqli_fetch_array($res)){
                                                // $status="";
                                                // // //check if still active
                                                // $paymentDate = date('Y-m-d');
                                                // $paymentDate=date('Y-m-d', strtotime($paymentDate));
                                                // //echo $paymentDate; // echos today! 
                                                // $contractDateBegin = date('Y-m-d', strtotime($data['start']));
                                                // $contractDateEnd = date('Y-m-d', strtotime($data['end']));
                                                    
                                                // if (/*($paymentDate >= $contractDateBegin) &&*/ ($paymentDate <= $contractDateEnd)){
                                                //     $status="<span class='badge bg-success'>Active</span>";
                                                // }else{
                                                //     $status="<span class='badge bg-danger'>Expired</span>"; 
                                                // }
                                                // 
                                                echo "
                                                <tr>
                                                    <td>".$data['id']."</td>
                                                    <td>".$data['mobile']."</td>
                                                    <td>".$data['carname']."</td>
                                                    <td>".$data['carmodel']."</td>
                                                    <td>".$data['location']."</td>
                                                </tr>
                                                ";
                                            }
                                        ?>
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>
                     </section>
            </div>

            <?php include "includes/footer.php";?>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/apexcharts/apexcharts.js"></script>
    <script src="assets/js/pages/dashboard.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>