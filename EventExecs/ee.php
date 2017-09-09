

<!DOCTYPE HTML>
<head>
<!-- This is the HTML File for EventExecs.com.
Created by Eddie L Taliaferro II.
P e a c e & Good\/ibeZ -->
<meta charset="utf-8">
<title>EventExecs</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest Bootstrap compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Bubbler+One|Nunito|Rajdhani|Caveat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Hind" rel="stylesheet">
    <!-- Hover -->
<link href=".\hover.css" rel="stylesheet">

<link href=".\ee.css" rel="stylesheet">
    <!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AnimateCSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Lettering -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js">
  <!-- WOW -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
<?php include 'send_form_email.php';?>
<script>
  new WOW().init();
</script>

<script src="ee.js"></script>

<script>
$(document).ready(function(){
// Add scrollspy to <body>
$('body').scrollspy({target: ".navbar", offset: 50});

// Add smooth scrolling on all links inside the navbar
$("a").on('click', function(event) {
  // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 800, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  }  // End if
});
});
</script>
<head>
<body data-spy="scroll" data-target=".navbar" data-offset="">
<!-- NAVBAR --><!-- NAVBAR --><!-- NAVBAR -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span style="color: red;"class="icon-bar"></span>
        <span style="color: red;"class="icon-bar"></span>
        <span style="color: red;"class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
    <ul class="nav navbar-nav" style="margin-left: 17%;">
      <li><a style="color: black; " href="#section1">WHO IS EVENTEXECS?</a></li>
      <li><a style="color: black; " href="#Services">SERVICES</a></li>
      <li><a style="color: black; " href="#sectionStaff">STAFF</a></li>
      <li><a style="color: black; " href="#section4">OUR CLIENTS</a></li>
      <li><a style="color: black; " href="#section2">LATEST EVENTS</a></li>
      <li><a style="color: black; " href="#section3">TESTIMONIALS</a></li>
      <li class="contactButton"><a style="color: black;" href="#section5" >CONTACT US TODAY</a></li>
    </ul>
    <div class="socialmedianav">
      <i class="fa fa-facebook fa-2x"></i>
      <i class="fa fa-twitter fa-2x"></i>
      <i class="fa fa-instagram fa-2x"></i>
      <i class="fa fa-linkedin fa-2x"></i>
    </div>

    </div>

  </div>
</nav>
<!-- NAVBAR --><!-- NAVBAR --><!-- NAVBAR -->

<div class="jumbotron" id="section1">
  <iframe style="margin-top: -50px;" class="bg-video"width="100%;" height="983px;" src="https://www.youtube.com/embed/videoseries?autoplay=1&loop=1&rel=0&controls=1&list=PLR1zdLmvBxXATJxJm2-EcYW_-aWcNTqNM"  playlist=nc0VIW4Dfzs
          frameborder="0" allowfullscreen></iframe>
        <div class="row">
          <div class="col-md-6 logo">

            <img src="http://i.imgur.com/zfE9wGK.png" class=" animated fadeInDown wow"
                 style="height: auto; margin-top: 50px;"><br>

        </div>


      </div>

</div>
<!--                 <h3 class="effect-underline " style="left: 20%;"><b>Volunteer Management</b><br><br></h3><br>
 -->
        <div class="row" id="Services">
          <div class="col-md-12 about">

            <div class="row">
              <div class="col-md-12 afterJumbotron">
                <div class="text">

                    <div style="text-align: center; margin-bottom: -50px; margin-top: 50px;">
                      <img style="margin-bottom: -35px;" src="http://i.imgur.com/JZzaGkF.png"></div>
                      <p style="font-family: 'Caveat', cursive; font-size: 30px; text-align: center; color: black; font-weight: bold; margin-bottom:130px;">
                        Providing Executive-Level Event Experiences, <span style="color: #f7c200;">every time</span> .</p>
                </div>
              </div>
            </div>

            <div class="row" style="margin-top:100px;">
              <h1 style="font-size:45px;" class="hOne">OUR SERVICES</h1>
              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-calendar fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Event Day Management</h1>
                  <div class="eventdaymgt">
                  </div>
                </div>
              </div>


              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-check fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Registration Management</h1>
                  <div class="regmgt">
                  </div>
                </div>
              </div>


              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-area-chart fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Production & Stage Management</h1>
                  <div class="prostagemgt">
                  </div>
                </div>
              </div>
            </div>




            <div class="row" style="margin-top: 50px;  padding-bottom: 60px;">
              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-star-o fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Marketing & Digital Media Management</h1>
                  <div class="markdigmgt">
                  </div>
                </div>
              </div>


              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-suitcase fa-3x" style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne lightSpeedIn animated wow">Vendor Management</h1>
                  <div class="vendormgt">
                  </div>
                </div>
              </div>


              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-users fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Volunteer Management</h1>
                  <div class="volmgt">
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>

<!-- HOVRER TEXT ANIMATION  -->


          <div class="container-fluid services" style="height: auto; margin-bottom:0; box-shadow: 0 2px 6px -6px white;">
            <div class="container-fluid">
              <h1 style="padding-top: 20px; text-align: center; font-size:45px; color: black;">
                We specialize in the following types of events:</h1>
            <div class="row"  style="margin-top:0px; ">
              <div class="col-md-12 col-xs-12">
                <div class="container servicesCardOne">

                <p class="animate fadeIn wow cardTextOne"></p>

                <div class="row" style="margin-top: 50px;">
                  <div class="col-xs-3 servicesText slideInLeft animated wow" style="animation-delay: 0s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 0s; width: 300px; height: 300px; background-color: rgba(30,23,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Experiential Events</P>
                    </div>
                  </div>

                  <div class="col-xs-3 servicesText slideInLeft animated wow" style="animation-delay: 0.5s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 0.5s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Brand Activations</P>
                    </div>
                  </div>

                  <div class="col-xs-3 servicesText slideInLeft animated wow" style="animation-delay: 1s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 1s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Conferences</P>
                    </div>
                  </div>

                  <div class="col-xs-3 servicesText slideInLeft animated wow" style="animation-delay: 1.5s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 1.5s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Banquets</P>
                    </div>
                  </div>
                </div>


                <div class="row" style="width: 100%; margin: 0 auto; margin-top: 150px;">
                  <div class="col-xs-4 servicesTextTwo slideInLeft animated wow" style="animation-delay: 2.0s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 2s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Festivals</P>
                    </div>
                  </div>

                  <div class="col-xs-4 servicesTextTwo slideInLeft animated wow" style="animation-delay: 2.5s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 2.5s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Concerts</P>
                    </div>
                  </div>

                  <div class="col-xs-4 servicesTextTwo slideInLeft animated wow" style="animation-delay: 3.0s;">
                    <div class="container animated wow fadeIn" style="animation-delay: 3s; width: 300px; height: 300px; background-color: rgba(30,136,245,0.9); box-shadow: 1px 1px 10px -3px rgba(0,0,0,0.3);">
                      <P class="serviceTextt">Custom Events</P>
                    </div>
                  </div>
                </div>




              </div>
                <br><br>
              </div>
              </div>
            </div></div>


              <div class="container-fluid owner" id="sectionStaff">
                <div class="ownerHeader">
                <h1 class="zoomIn animated wow"style=" color: rgba(247,194,0, 0.9); font-size:40px;">MEET THE STAFF</h1>
              </div>
                    <div>
                      <img class="animate pulse wow photo"src="http://i.imgur.com/SzCjNGJ.jpg?1" style="margin-top: 50px; box-shadow: 0 10px 300px 0 rgba(255,255,255,0.6);  border-radius: 100%; border: 2px solid white;">
                        <i class="fa fa-plus fa-2x" data-toggle="modal" data-target="#staffModal"></i>
                          <ul style="margin-left: -70px; margin-top: 10px; line-height: 25px;">
                            <li style="font-style: italic"> Nina Payne </li>
                            <li style="font-style: italic"> CEO & General Manager </li>
                          </ul>
                      </div>
                <div class="container-fluid" style="width: 100%; height: auto;
                background-color: rgba(0,0,0,0.4); margin-top:52px; margin-bottom: 100px; height: auto;">


                </div>
              </div>


                <!-- Modal -->
                <div id="staffModal" class="modal fade" role="dialog">
                <div class="modal-dialog modal-lg" >

                  <!-- Modal content-->
                  <div class="modal-content"  style="margin-top: 0px;">
                    <div class="modal-body" style="background-color: rgba(245,245,245,0.8);">

                      <h1 style="margin-bottom: -70px; margin-top: 50px; ">NINA PAYNE</h1><br>

                      <p class=""style="padding: 100px;  font-weight: bold; height: auto;
                      font-family: 'Hind', sans-serif; font-family: 'NexaLight', sans-serif; font-size: 18px; text-align: center; line-height: 30px;">
                        Because of her executive-level client service, organizational skills, vendor relationships and a “Get it Done” determination, clients have trusted Nina Payne with their event management needs for over 15 years. Event Execs has provided Event Management, Logistics and Staffing for clients such as; General Motors, Detroit Riverfront Conservancy, Detroit Police Department, Chene Park Amphitheatre, Corporate Production Services, Detroit Public Safety Foundation and more.  Event Exec’s events include; Detroit Grand Prix 2016 and 2017, Delta Annual World Conference 2017, Above and Beyond Awards 2014 - present, Women in Blue 2015-Present, ASAE Conference 2016, Motown Recording Artist Kem’s Mack and Third 2 Day Concert Festival 2009-2014 and many more. She also has a passion for the community and is the Event Management Company for manages a few community events every year to give back.  Event Execs, a division of Foundation Management is always striving to meet the needs of its’ clients by continuing to provide services that meet budget and time constraints.
                      </p>
                      <button type="button" class="contactFormButton" style="float: right; font-family: 'NexaLight', sans-serif;"data-dismiss="modal">Close</button>
                    </div>

                  </div>
                </div>
              </div>
















<!-- CLIENTS --><!-- CLIENTS --><!-- CLIENTS --><!-- CLIENTS --><!-- CLIENTS --><!-- CLIENTS -->

            <div class="container-fluid"  id="section4">
              <div class="clients">
                <h1 class="animated wow fadeIn" style="font-size:40px;">OUR CLIENTS</h1>

                <div class="tech-slideshow wow animated fadeInUp" style="margin-bottom: 300px;">
                  <div class="mover-2"></div>
              </div>
            </div>



        <div class="container-fluid" id="section2" style="width: 100%;">
          <div class="row">
          <div class="col-md-12 latest">
            <h1 style="font-size:40px;">EVENT GALLERY</h1><br>
            <div id="myCarousel" class="carousel slide animated fadeInLeftBig wow" data-ride="carousel">
<!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

<!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <div class="container-fluid" style="text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/ogTJy8I.jpg?1">
              </div>
            </div>

              <div class="item" >
                <div class="container-fluid" style="text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/RYRsZbX.jpg">
                </div>
              </div>

              <div class="item">
                <div class="container-fluid" style="text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/i9Qn3si.jpg">
                </div>
              </div>

              <div class="item" style="height: 200px;">
                <div class="container-fluid" style="text-align: center; margin-top: 200px;">
                  <img class="" src="http://i.imgur.com/Haq2kfS.jpg?1">
                </div>
              </div>

              <div class="item">
                <div class="container-fluid" style=" text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/EhthgDm.png?2">
                </div>
              </div>

              <div class="item">
                <div class="container-fluid" style="text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/E9De3E8.png?1">
                </div>
              </div>

              <div class="item">
                <div class="container-fluid" style="text-align: center;">
                  <img class="carouselImage" src="http://i.imgur.com/KVnVaQA.jpg">
                </div>
              </div>
            <!-- Left and right controls -->

            </div>


                        </div>
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>

                        </a>
                        <a  class="right carousel-control" href="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>

                        </a>
                      </div>

                      <!-- TESTIMONIALS--><!-- TESTIMONIALS--><!-- TESTIMONIALS-->
                      <div class="container-fluid "  id="section3" >
                        <div class="row">
                                <div class="col-md-12 col-xs-12 testOne" style="margin-top: 200px;">
                                  <h1 style="font-size:40px;">TESTIMONIALS</h1>
                                  <p style="font-family: 'NexaLight'"> " Nina is an affable, smart, and determined professional.   She will work tirelessly until the job is complete. " </p><br>
                                  <ul style="margin-left: ; margin-top: 10px; list-style: none;">
                                    <li style="font-weigh ; color: black;"> Troy Springer </li>
                                    <li style="font-style: italics; color: black;"> CEO </li>
                                    <li style="font-style: italics; color: black;"> Corporate Production Services </li>
                                  </ul>
                                </div>
                            </div></div></div>
                          </div>
                          </div>
                        </div>
                      <!-- TESTIMONIALS--><!-- TESTIMONIALS--><!-- TESTIMONIALS-->


                      <!-- CONTACT --><!-- CONTACT --><!-- CONTACT -->
                      <?php
                        if(isset($_POST['submit'])){
                          $fname=$_POST['fname'];
                          $lname=$_POST['lname'];
                          $phone=$_POST['phone'];
                          $years=$_POST['years'];
                          $mang=$_POST['mang'];
                          $positions=$_POST['positions'];

                          $to='eddielacrosse2@gmail.com';
                          $subject='EventExecs';

                          $message=

                          $headers="From: ".$email;

                          if(mail($to, $subject, $message, $headers  )) {
                            echo "<h1>Form 1 Sent</h1>";
                              }
                          else{
                            echo "Something went wrong nigguh!!!";
                          }
                        }

                        if(isset($_POST['submit2'])){
                          $firstname=$_POST['first_name'];
                          $lastname=$_POST['last_name'];
                          $emailcontact=$_POST['emails'];
                          $message=$_POST['message'];


                          $to='eddielacrosse2@gmail.com';
                          $subject='EventExecs';

                          $message=


                          $headers="From: ".$email;

                          if(mail($to, $subject, $message, $headers  )) {
                            echo "<h1>Form 2 Sent</h1>";
                              }
                          else{
                            echo "Something went wrong nigguh!!!";
                          }
                        }
                      ?>




                      <div class="wrapper" id="section5">
                        <div class="conatiner" style="width: auto; box-shadow: inset -1px 0 20px -5px rgba(0,0,0,0.5)">
                          <div class="textWrapper ">
                            <h1 class="zoomIn animated wow"style="color: black;;
                                font-size: 80px; width: 55%; margin: 0 auto; margin-top: 50px;
                                text-shadow: 2px 4px 3px rgba(0,0,0,0.1);">Contact Us Today!</h1>
                            <p class="animated wow fadeIn" style="color: #f74e47; font-size: 25px; width: 50%; margin: 0 auto; padding-top: 20px;"> We are here to help! Click below to get started!
                            </p>
                            <div class="socialmedianav" style="float: none; margin: 0 auto; margin-bottom: -100px; margin-top: 50px;">
                              <i class="fa fa-facebook fa-2x" href="facebook.com"></i>
                              <i class="fa fa-twitter fa-2x"></i>
                              <i class="fa fa-instagram fa-2x"></i>
                              <i class="fa fa-linkedin fa-2x"></i>
                            </div>
                          </div>

                        <div class="contactWrapper">
                          <div class="row">
                            <div class="col-md-6 col-xs-12 join animated wow slideInLeftOne">
                              <button class="contactFormButton" style="float: right; width: auto; font-family: NexaLight"data-toggle="modal" data-target="#joinModal">Join Our Event Team</button>
                            </div>
                            <div class="col-md-6 col-xs-12 contact animated wow slideInRightOne">
                              <button class="contactFormButton" style="float: left; font-family: NexaLight" data-toggle="modal" data-target="#contactModal">How Can We Help You?</button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>





                      <!-- Modal -->
                      <div id="joinModal" class="modal fade" role="dialog"
                        style="  box-shadow: 0 2px 1px 0 rgba(0,0,0,0.24), 0 3px 10px 0 rgba(0,0,0,0.19);">
                        <div class="modal-dialog">

                        <!-- Modal content-->
                          <div class="modal-contentOne">
                          <div class="modal-body" style="margin-top: 57px;">

                            <form>
                              <input class="inputFields" name="fname" placeholder="First Name"><br>
                              <input class="inputFields" name="lname" placeholder="Last Name">
                              <input class="inputFields" name="phone" placeholder="Phone Number">
                              <input class="inputFields" name="years" placeholder="How many years in the business?">
                              <input class="inputFields" name="mang" placeholder="Managerial Experience?">

                            </form>

                          <div class="form-group">
                          <label for="sel1">Position Desired:</label>
                          <select class="positions" id="sel1">
                          <option>Select Position</option>
                          <option>Event Manager</option>
                          <option>Production Manager</option>
                          <option>Stage Manager</option>
                          <option>Stage Hand</option>
                          <option>Volunteer Manager</option>
                          <option>Vendor Manager</option>
                          <option>Event/Production Assistant</option>
                          </select>
                          </div>


                          </div>
                          <div class="modal-footer">
                          <button class="submit" style="font-family: NexaLight" data-dismiss="modal">Submit</button>
                          </div>
                          </div>

                        </div>
                      </div>

                      <div id="contactModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                        <!-- Modal content-->
                          <div class="modal-contentOne">
                          <div class="modal-body" style="margin-top: 50px;">
                            <div class="form-group">
                              <label class="col-md-4 control-label">First Name</label>
                              <div class="inputGroupContainer">
                              <div class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                              <input name="first_name" placeholder="first name" class="form-control"  type="text">
                              </div>
                              </div>
                            </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">Last Name</label>
                            <div class="inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="last_name" placeholder="last name" class="form-control"  type="text">
                            </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label class="col-md-4 control-label">E-Mail</label>
                            <div class="inputGroupContainer">
                            <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input  name="emails" placeholder="email" class="form-control"  type="text">
                            </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <label for="comment">Message:</label>
                            <textarea class="message" rows="5" id="comment"></textarea>
                            </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" name="submit2" class="btn btn-success" data-dismiss="modal">Submit</button>

                            </div>
                          </div>

                        </div>
                      </div>


                      <!-- CONTACT --><!-- CONTACT --><!-- CONTACT -->

                      <form name="contactform" method="post">
                        <form method="post" name="form2">
                          <input type="first_name" name="first_name" placeholder="First Name:" required><br>
                          <input type="last_name" name="last_name" placeholder="Last Name" required><br>
                          <input type="emails" name="emails" placeholder="Phone2" required><br>
                          <textarea type="message" name="msg" placeholder="Message Goes Here" required></textarea><br>
                          <input type="submit" name="submit2" value="send" class="sub-btn"><br>
                        </form>





</body>
