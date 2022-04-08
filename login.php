<?php
    session_start();
    include "reboot/includes/database.php";
    $error="";
    if(isset($_POST['user_email']) && isset($_POST['user_password'])){
        $user_email=mysqli_real_escape_string($connect,$_POST['user_email']);
        $password=mysqli_real_escape_string($connect,$_POST['user_password']);
        $s="SELECT * FROM `userlogin` WHERE `user_email`='".$user_email."' ";
        $res=mysqli_query($connect,$s);
        if(mysqli_num_rows($res)){
            $data=mysqli_fetch_assoc($res);
            if($password==$data['user_password']){
                $_SESSION['login']=true;
                $_SESSION['user_email']=$data['user_email'];
                echo "<script>window.location='reboot/index.php';</script>";
            }else{
                $error="<p style='color:red'>Please enter a valid password</p>";
            }
        }else{
            $error="<p style='color:red'>User with this Email not found</p>";
        }
    }
?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<div class="container ">
<div class="row justify-content-center align-item-center">
	<div class="col-lg-6 ">
	<div class="card bg-info">
		<div class="card-title h2  text-danger text-center pt-4"><i class="fa fa-user text-danger" style="font-size:48px;"></i>
		LOGIN</div>
			   <?php
			   if (isset($error)) {
			   echo $error;
			   }
			  ?>
		<div class="card-body">
                 
			  <form action="login.php" method="post">
               <div class="form-group"><label class="text-white mb-1" for="inputEmailAddress">Email</label><input name="user_email"class="form-control" id="inputEmailAddress" type="email" placeholder="Enter Email" /></div>
                <div class="form-group"><label class="text-white mb-1" for="inputPassword">Password</label><input  name="user_password"class="form-control " id="inputPassword" type="password" placeholder="Enter Password" /></div>
                          <!--  <div class="form-group">
                <div class="custom-control custom-checkbox"><input name="check" class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                            </div> -->
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="#"></a><button name="submit" class="btn btn-danger btn-block">SIGN IN</button></div>
                                        </form>

   
		</div>
	</div>
	</div>
	</div>
</div>


<?php include "includes/footer.php"?>

