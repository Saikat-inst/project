<?php include "auth.php";?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>footer-page</title>
    <?php include "includes/database.php";?>
    <?php include "includes/head.php";?>
    <style>
        a{
            color:#333;
        }
    </style>
     <?php 
   //       //Updating
   //     $connect=mysqli_connect("localhost","root","");
   //    $dbname='carservice';
   //    if($connect)
   // {  
   //   $dbchk=mysqli_select_db($connect,$dbname);
   //   }else
   //  {
   //    echo "not connected yet";
   //   }

        if(isset($_POST['update'])){
            if (isset($_POST['email']) && isset($_POST['mobile'])) {
                # code...
            
            $email=$_POST['email'];
            $mobile=$_POST['mobile'];
            
                    $s="UPDATE `footer` SET `email` = '".$email."', `mobile` ='".$mobile."'";
                    if(mysqli_query($connect,$s)){
                        echo "<script>alert('Footer Updated');</script>";
                    
                }else{
                    echo "<script>alert('Footer already exists with same phone number or email');</script>";
                }   
        }}

    ?>
   
    <?php
        $s="SELECT * FROM `footer`";
        $res=mysqli_query($connect,$s);
        $data=mysqli_fetch_assoc($res);
    ?>
    
</head>

<body>
    <div id="app">
     <?php include "includes/sidebar.php";?>
         <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Update Footer</h3>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Footer</li>
                                </ol>
                            </nav>
                        </div>

                    </div>
                    <div class="card">
              <div class="card-header border-transparent">
                <h3 class="card-title">
                   Update-Footer
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-3" style="height:280px;overflow-y:scroll">
                     <div class="container mt-n10">
                                <form method="Post">
                                    <div class="form-group">
                                        <label for="user-email p-1"> <b>Email:</b></label>
                                        <input class="form-control my-2" id="user-email" name="email" type="text" placeholder="User email..." value="<?php echo $data['email'];?>"/>
                                    </div>
                                    <div class="form-group p-1">
                                        <label for="user-mobile"><b>Mobile Number: </b></label>
                                        <input class="form-control my-2" id="user-mobile" name="mobile" type="text" placeholder="User Password..." value="<?php echo $data['mobile'];?>"/>
                                    </div>
                                    </div>
                                    <div class="fo"></div>
                                    <button class="btn btn-primary ml-2 my-2" type="submit" name='update' >Update now!</button>
                                </form>
                <!-- /.card -->
              </div>
              </div>
     
                </div>
                 </div>

            <?php include "includes/footer.php";?>
        </div>
    </div>
    <script src="assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="assets/js/main.js"></script>
</body>

</html>