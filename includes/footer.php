<div id="more"></div>
<footer class="py-3 px-3 mt-3" style="background-color: #000015;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="accordion w-100 d-lg-flex" id="accordion-1"> 
          <div class="col-lg-3 col-md-12 ">
            <div id="footer-border">
            <a href="#one" class="h6 text-white py-2 d-lg-none pt-1 d-block" data-toggle="collapse">About Us <i class="fa fa-chevron-circle-down" aria-hidden="true" style="float: right; padding-right: 12px; padding-top: 4px;"></i></a>
          </div>
            <div class="h6 text-white d-lg-block d-none">About Us</div>
            <div class="collapse text-white d-lg-flex py-2" id="one" data-parent="#accordion-1">
                   <ul style="list-style-type: none;padding-left: 10px;">
               <li><a href="#">FAQs</a></li>
               <li><a href="#">Contact us</a></li>
               <li><a href="#">Careers</a></li>
               <li><a href="#">Terms and conditions</a></li>
               <li><a href="#">Privacy Policy</a></li>
               <li><a href="#">Carservice Partener</a></li>
               <li><a href="#">Offer</a></li>
               <li><a href="#">Reviews</a></li>
               <li><a href="#">Directory</a></li>
              
             </ul>
          
              </div>
          </div>
            <div class="col-lg-3 col-md-12">
            <div id="footer-border">
            <a href="#two" class=" h6 text-white py-2 d-lg-none pt-1 d-block" data-toggle="collapse">Our Services <i class="fa fa-chevron-circle-down" aria-hidden="true" style="float: right; padding-right: 12px; padding-top: 4px;"></i></a>
            </div>
              <div class="h6 text-white d-lg-block d-none">Our Services</div>
            <div class="collapse text-white d-lg-flex py-2" id="two" data-parent="#accordion-1">
               <ul style="list-style-type: none;padding-left: 10px;">
               <li><a href="#">Scheduled Service</a></li>
               <li><a href="#">AC service</a></li>
               <li><a href="#">Lights and fitments</a></li>
               <li><a href="#">Insaurance service</a></li>
               <li><a href="#">Other service</a></li>
               <li><a href="#">Custom repairs</a></li>
               <li><a href="#">Battery</a></li>
               <li><a href="#">Tyres</a></li>
               <li><a href="#">Accessories</a></li>
              
             </ul>
             </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div id="footer-border">
            <a href="#three" class=" h6 text-white py-2 d-lg-none pt-1 d-block" data-toggle="collapse">Luxury Brands <i class="fa fa-chevron-circle-down" aria-hidden="true" style="float: right; padding-right: 12px; padding-top: 4px;"></i></a>
          </div>
              <div class="h6 text-white d-lg-block d-none">Luxury Brands</div>
            <div class="collapse text-white d-lg-flex py-2" id="three" data-parent="#accordion-1">
             <ul style="list-style-type: none;padding-left: 10px;">
                <li><a href="#">Mercedes</a></li>
               <li><a href="#">BMW</a></li>
               <li><a href="#">Audi</a></li>
               <li><a href="#">Volvo</a></li>
               <li><a href="#">Land Rover</a></li>
               <li><a href="#">ferrari</a></li>
               <li><a href="#">Porsche</a></li>
               <li><a href="#">Jaguar</a></li>
               <li><a href="#">Land Rover</a></li>
                      
             </ul>
              </div>
          </div>
          <div class="col-lg-3 col-md-12">
            <div id="footer-border">
            <a href="#four" class="heading-acc h6 text-white d-lg-none py-2 d-block" data-toggle="collapse" >Popular Area Near You <i class="fa fa-chevron-circle-down" aria-hidden="true" style="float: right; padding-right: 12px; padding-top: 4px;"></i></a>
            </div>
              <div class="h6 text-white d-lg-block d-none">Popular Area Near You</div>
            <div class="collapse text-white d-lg-flex py-2" id="four" data-parent="#accordion-1">
              <ul style="display: block; list-style-type: none; text-decoration: none; margin-top: 10px;" id="footer-four-a">
                  <li><a href="#">Garage near me in Delhi</a></li>
                  <li><a href="#">Garage near me in New town</a></li>
                  <li><a href="#">Garage near me in Delhi</a></li>
                  <li><a href="#">Garage near me in New town</a></li>
                  <li><a href="#">Garage near me in Delhi</a></li>
                  <li><a href="#">Garage near me in New Town</a></li>
                  <li><a href="#">Garage near me in Delhi</a></li>
                  <li><a href="#">Garage near me in New town</a></li>
                  <li><a href="#">Garage near me in Delhi</a></li>
                </ul>
        
                    </div>
      
          </div>

           </div>
        </div>
      </div>
    </div>
  </div>
  
</footer>
<footer class="bg-dark py-3 px-3">
  <div class="container-fluid">
    <div class="row">
           <div class="col-lg-4">
            <div class="h3 text-white">Car Service</div>
            <div class="text-white py-2 px-3"  style="letter-spacing: 2px;">
              3rd Floor,Landmark Tower,Moti Vihar,Ashok marg,South City 1,Sector 41,Gurugram,Harayana 202201
              </div>
                <div class="footer-section socials" id="footer-links">
                  <a href="#"><span><i class="fa fa-linkedin-square" aria-hidden="true"></i></span></a>
                  <a href="#" ><span ><i class="fa fa-facebook-square" aria-hidden="true"></i></span></a>
                  <a href="#"><span><i class= "fa fa-twitter-square" aria-hidden="true"></i></span></a>
                  <a href="#"><span><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
                  <a href="#"><span><i class="fa fa-github" aria-hidden="true"></i></span></a>
                </div>
  
          </div>
            <div class="col-lg-5">
            <div id="footer-section-2">
              <?php 

                include 'includes/database.php';
                  $s="SELECT * FROM `footer`";
                 $res=mysqli_query($connect,$s);
                 $data=mysqli_fetch_assoc($res);
   
              ?>
            <div class="text-white py-2">
               <ul style="list-style-type: none;padding-left: 10px;">
               <li><i class="fa fa-envelope"></i>Email<a href="#" style="text-decoration: none ; color:white;"> <?php echo $data['email'] ?> </a></li>
               <li><i class="fa fa-phone"></i>Phone Number<a href="#" style="text-decoration: none ; color:white;"><?php echo $data['mobile']?></a></li>
               <li><i class="fa fa-calendar" aria-hidden="true"></i>Working Days<a href="#" style="text-decoration: none ; color:white;">Monday-Saturday</a></li>
               <li><i class="fa fa-clock-o" aria-hidden="true"></i>Working Hours<a href="#" style="text-decoration: none ; color:white;">7:00AM-9:00PM</a></li>
               
             </ul>
             </div>
          </div>
        </div>
         
          <div class="col-lg-3">
           <div class="h3 text-white ">Download the app</div>
            <div class=" text-white py-2" >
                 </div>
        <ul style="display: block; list-style-type: none; text-decoration: none; margin-top: 10px;" id="footer-four-a">
                  <li><a href="#" style="text-decoration: none ; color:white; margin: 10px;">From Play Store</a></li>
                  <li><a href="#" style="text-decoration: none ; color:white; padding: 10px;">From Other Store</a></li>
                  </ul>
        
          </div>

        
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
  <div class="container text-white text-center py-3">
       &copy; 2016-2021  ||  carService Private Limited
    </div>
  </div>
</footer>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script>
  $('.logo-slider').slick({
    slidesToShow:3,
    slidesToScroll:1,
    dots:true,
    arrows:false,
    autoPlay:true,
    autoPlaySpeed:1000,
     infinite: true,

     responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        infinite: true
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        dots: true
      }

    }, ]
  });
</script>
<script>
  $('.logo-slider-2').slick({
    slidesToShow:3,
    slidesToScroll:1,
    dots:true,
    arrows:true,
    autoPlay:true,
    autoPlaySpeed:1000,
     infinite: true,

     responsive: [{

      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        infinite: true
      }

    }, {

      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        dots: true
      }

    }, ]
  });
</script>
<script>
  $(".show-more").click(function () {
        if($(".text").hasClass("show-more-height")) {
            $(this).text("SEE LESS");
        } else {
            $(this).text("SEE MORE");
        }

        $(".text").toggleClass("show-more-height");
    });
</script>
<!-- <script>
  $(document).ready(function(){ //Make script DOM ready
    $('#myselect').click(function() { //jQuery Change Function
                                    //Compare it and if true
            $('.bd-example-modal-lg').modal("show"); //Open Modal
        
    });
});

</script>
 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>