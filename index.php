<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>
<div>
	<img src="assets/images/carservice.jpg" alt="" style="width: 100%; max-height: 100vh;
	  background-size:contain; ">
</div>

<!-- --------------------------------------------Registration Form ----------------------------------------------------->

<div class="container-fluid bg-dark" style="color:white; padding: 35px;" id="registration-form">
      <?php


      $connect=mysqli_connect("localhost","root","");
      $dbname='carservice';
      if($connect)
{  
  $dbchk=mysqli_select_db($connect,$dbname);
}else
{
   echo "not connected yet";
}

    if(isset($_POST['submit'])){
      error_reporting(0);
  
       $mobile=$_POST['mobile'];
       $carname=$_POST['carname'];
       $carmodel=$_POST['carmodel'];
       $location=$_POST['location'];
      $query="INSERT INTO `enquiry` (`mobile`, `carname` , `carmodel` , `location`) VALUES ('".$mobile."','".$carname."','".$carmodel."','".$location."')"or die(mysql_error());
       $result=mysqli_query($connect,$query);
       if($result)
       {  
        
         $success="Enquiry Successfully";
       }else            
       {
         $error="Enquiry Unsuccessfull";
      
       }
     }
     ?>
	 <h3 class="text-center">Experience The Best Car Services</h3>
	<h5 class="text-center text-danger">Get instant quotes for your car service</h5>
     
	<form action="" method="POST" id="frm">		
   <?php 
       if(isset($error)){
         echo "<p class='alert alert-danger text-center font-weight-bold'>{$error}</p>";
       }
       if(isset($success)) {
         echo "<p class='alert alert-success text-center font-weight-bold'>{$success}</p>";
       }
       ?>
       		
	<div class="row">
		<div class="col-sm-12">
          <div class="form-group">
            <label><b>Enter Mobile Number</b></label>
            <input type='text' name='mobile' class='form-control'  placeholder="Enter Moble Number" required="required" id="fmobile" >
          </div>
          </div>
      </div>
       
          <div class="row">
          <div class="col-sm-12">
          	<div class="form-group">
          <label for="select1"><b>Select Your Car</b></label>
  		  <select class="form-control" id="select1" name="carname" id="fcarname">
  		 	<option value="Tata">Tata</option>
			<option value="Land Rover">Land Rover</option>
			<option value="Audi">Audi</option>
			<option value="Volvo">Volvo</option>
			</select>
			</div>
			</div>
			<div class="col-sm-12">
			<div class="form-group">
          <label for="select2"><b>Select Car Model</b></label>
  		  <select class="form-control" id="select2" name="carmodel" id="fcarmodel">
  	 	<option value="1001">1001</option>
			<option value="1002">1002</option>
			<option value="1003">1003</option>
			<option value="1004">1004</option>
			</select>
			</div>
			</div>
		</div>
    <div class="row">
      <div class="col-sm-12">
      <div class="form-group">
          <label for="select2"><b>Select Location</b></label>
        
     <select class="form-control" id="select3" name="location" id="flocation">
       <option class="dropdown-toggle" value="Kolkata">Kolkata</option>
       <option value="Mumbai">Mumbai</option>
       <option value="Delhi">Delhi</option>
       <option value="Gahiabad">Gahiabad</option>
       <option value="Bhopal">Bhopal</option>
       <option value="Indore">Indore</option>
       <option value="Chennai">Chennai</option>
      
    </select>
  </div>
</div>
</div>
   
	  <div class="row">
	  	<div class="col-sm-12">
	  	       <div class="form-group mt-4">
            <button class='btn btn-danger d-block w-100' name="submit" type="submit" value="submit" id="button"><b> CHECK PRICES FOR FREE</b></button>
          </div>
          </div>
          </div>

      		</form> 
	</div>
<!-- ----------------------------------------------------Service Section---------------------------------------- -->


	<div class="container">
    <h3 class="text-center pt-3">Our Services</h3>
		<div class="row">
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  
  
</div>
 <div class="row">
 <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  <div class=" col-md-3 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body text-center justify-content-center align-item-center">
      	 <img src="assets/images/check2.png" alt="" >
        <h6 class="card-title pt-2 text-danger">Periodic Services</h6>
      </div>
    </div>
  </div>
  
 </div>
	</div>


<!-- -------------------------------------------------- Slider Card section ------------------------------------------------>


  <div class="container brandslider" >
  <h2 class="text-center mt-2">Car service Summer spice</h2>
    <div class="logo-slider text-center justify-content-center align-item-center">
      <div class="item"><a href="#"><img src="assets/images/car1.jpg" alt="images" style= height="322px" width="332px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/car1.jpg" alt="images" style= height="322px" width="332px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/car1.jpg" alt="images" style= height="322px" width="332px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/car1.jpg" alt="images" style= height="322px" width="332px"></a></div>
      
    </div>
</div>

<!-- -------------------------------------------Single Full Width Card Section With Modal------------------------------------ -->


  <div class="container my-4" style="min-height: 230px; background-color: #2a8ffa; border-radius: 20px;">
    <div class="row">
      <div class="col-lg-3 p-5 text-center  d-flex justify-content-center align-item-center">
        <img src="assets/images/secure.png" alt="">
      </div>

      <div class="col-lg-9 text-white p-4">
        <h3>Car Service Assurance Program </h3>
        <ul class="p-3 my-2">
          <li>Upto Rs. 25,000 insurance Protection With every service request.</li>
          <li>Program Protect user from damages caused  during free pickup and delevery of car.</li>
         <li>Upto Rs. 25,000 insurance Protection With every service request.</li>
        </ul>
     <a href="" data-toggle="modal" data-target="#exampleModalCenter" style="text-decoration: none; color: white;"><b> KNOW MORE</b></a>
       </div>
    </div>
    
  </div>
  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Car Service Program</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body p-5">
       <ul>
         <li>Lorem ipsum <b>dolor</b> sit amet consectetur adipisicing elit. Dolore sunt ipsum officia quos impedit labore voluptatem fuga iste sequi aut reiciendis, nisi nobis maxime, eum eligendi recusandae ab aperiam, suscipit!</li>
          <li>Lorem ipsum dolor sit amet <b>Lorem</b> consectetur adipisicing elit. Dolore sunt ipsum officia quos impedit labore voluptatem fuga iste sequi aut reiciendis, nisi nobis maxime, eum eligendi recusandae ab aperiam, suscipit!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sunt ipsum officia quos impedit labore voluptatem fuga iste sequi aut reiciendis, nisi nobis <b>leofjd</b> maxime, eum eligendi recusandae ab aperiam, suscipit!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sunt ipsum officia quos impedit labore voluptatem fuga iste sequi aut reiciendis, nisi nobis maxime, eum eligendi recusandae ab aperiam, suscipit!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore sunt ipsum officia quos impedit labore voluptatem fuga iste sequi aut reiciendis, nisi nobis maxime, eum eligendi recusandae ab aperiam, suscipit!</li>

       </ul>
      </div>
      
    </div>
  </div>
</div>


<!-- ------------------------------------------------Card Slider For images----------------------------------------------->


<div class="container brandslider">
  <h2 class="text-center mt-2">Car service Summer spice</h2>
    <div class="logo-slider-2 text-center justify-content-center align-item-center">
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      <div class="item"><a href="#"><img src="assets/images/carimage.jpg" alt="images" height="200px" width="200px"></a></div>
      
    </div>
</div>


<!-- -------------------------------------------------Accordion Section of Questions----------------------------------- -->


 <h2 class="text-center mt-2">Frequenty Asked Question About Car Service</h2>
 <div class="container-fluid my-4">
    <div id="accordion" class="accordion">
        <div class="card mb-0">
            <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">
                <a class="card-title"> Question 1 : What kind of spare parts used for my car ? </a>
            </div>
            <div id="collapseOne" class="card-body collapse" data-parent="#accordion">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                <a class="card-title"> Question 2 : How do i book my service appointment ? </a>
            </div>
            <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">
                <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS. </p>
            </div>
            <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                <a class="card-title"> Question 3 : How do i book my service appointment ?</a>
            </div>
            <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS. </div>
            </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                <a class="card-title"> Qusetion 4 : What kind of spare parts used for my car ? </a>
            </div>
            <div id="collapseFour" class="collapse" data-parent="#accordion">
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS. </div>
            </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
                <a class="card-title"> Question 5 : How do i book my service appointment ?</a>
            </div>
            <div id="collapseFive" class="collapse" data-parent="#accordion">
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS. </div>
            </div>
                <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
                <a class="card-title"> Question 6 : What kind of spare parts used for my car ? </a>
            </div>
            <div id="collapseSix" class="collapse" data-parent="#accordion">
                <div class="card-body">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. samus labore sustainable VHS. </div>
            </div>

        </div>
    </div>
</div>
<!-- ------------------------------------------ Section to give information about Services-------------------------------- -->
 <div class="container">
   <h2 class="text-center mt-2">Why Choose Our Car Service ? </h2>
   <div class="row">
     <div class="col-lg-12">
       <div class="card">
      <div class="card-body">
    <p class="font-weight-bold">Car Service Offered in India.</p>
    <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
    <p class="font-weight-bold">Car Service Offered in India.</p>
    <ul class="pl-3">
      <li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li>
    <li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li><li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li><li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li><li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li><li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li><li>
    <p >Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.</p>
      
    </li>
  </ul>
   <p class="font-weight-bold">Car Service Offered in India.</p>
   
    <p>Lorem ipsum dolor sit amet, consectetur, adipisicing elit. Repellendus sequi beatae laboriosam nulla maiores deleniti doloremque hic totam ab iusto expedita dolores qui fugit aspernatur suscipit, fugiat, sunt modi maxime.
    </p>
       </div>
    </div>
 
     </div>
   </div>
 </div>
 <!-- --------------------------------------Table Which Shows the service and its price Section----------------------------- -->
<div class="container">
 <h2 class="text-center mt-2">Car Service Price List in India 2021</h2>
<div id="profile-description">
   <div class="text show-more-height">
<table class="table table-striped">
           
  <thead>
    <tr>
      <th scope="col">
        S NO.
      </th>
      <th scope="col">Service Type</th>
      <th scope="col">Price Starts From (Rs.)</th>
      <th scope="col">Saving</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Car Inspection</td>
      <td>499</td>
      <td>15%</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Car Inspection</td>
      <td>599</td>
      <td>15%</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Car Inspection</td>
      <td>699</td>
      <td>15%</td>
    </tr>
        <th scope="row">4</th>
      <td>Car Inspection</td>
      <td>799</td>
      <td>15%</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>Car Inspection</td>
      <td>899</td>
      <td>15%</td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>Car Inspection</td>
      <td>499</td>
      <td>15%</td>
    </tr>
  
  </tbody>
</table>
</div>
   <div class="show-more p-2 mb-2 font-weight-bold" style="float:right;"><b>SEE MORE </b></div><br>
</div>
</div>
<?php include "includes/footer.php"?>
