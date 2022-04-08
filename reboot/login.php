<?php
    session_start();
    include "includes/database.php";
    $error="";
    if(isset($_POST['userid']) && isset($_POST['password'])){
        $userid=mysqli_real_escape_string($connect,$_POST['userid']);
        $password=mysqli_real_escape_string($connect,$_POST['password']);
        $s="SELECT * FROM `admin` WHERE `username`='".$userid."' ";
        $res=mysqli_query($connect,$s);
        if(mysqli_num_rows($res)){
            $data=mysqli_fetch_assoc($res);
            if($password==$data['password']){
                $_SESSION['login']=true;
                $_SESSION['userid']=$data['username'];
                echo "<script>window.location='index.php';</script>";
            }else{
                $error="<p style='color:red'>Please enter a valid password</p>";
            }
        }else{
            $error="<p style='color:red'>User with this userid not found</p>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BCTN Admin Dashboard Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/pages/auth.css">
</head>

<body>
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo" style='margin-bottom:1rem !important'>
                        <a href="index.php"><img src="../assets/images/logo_black.png" style='width:40%;height:auto;' alt="Logo"></a>
                    </div>
                    <p class="auth-subtitle mb-5">Log in with your data to continue to management system.</p>
                    <?php echo $error;?>
                    <form action="" method='post'>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" class="form-control form-control-xl" name='userid' placeholder="UserID">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name='password' class="form-control form-control-xl" placeholder="Password">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                Keep me logged in
                            </label>
                        </div>
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
</body>

</html>