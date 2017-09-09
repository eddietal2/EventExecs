

<!DOCTYPE HTML>
<head>
<!-- This is the HTML File for EventExecs.com.
Created by Eddie L Taliaferro II.
P e a c e & Good\/ibeZ -->
<meta charset="utf-8">
<title>EventExecs</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
<link href="hover.css" rel="stylesheet">

<link href="ee.css" rel="stylesheet">
    <!-- FontAwesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- AnimateCSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
  <!-- Lettering -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js">
  <!-- WOW -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

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
    <div class="navbar-header" style="margin-top: -20px; margin-left: 10px;">
      <img src="https://i.imgur.com/9HVNHkJ.png?1">
        </div>
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span style="color: red;"class="icon-bar"></span>
        <span style="color: red;"class="icon-bar"></span>
        <span style="color: red;"class="icon-bar"></span>
      </button>

    <div class="collapse navbar-collapse" id="myNavbar" >
    <ul class="nav navbar-nav" style="margin-left: 12%;">
      <li><a style="color: black; font-size: auto;" href="#section1">WHO IS EVENTEXECS?</a></li>
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
  <iframe style="margin-top: -50px;" class="bg-video"width="100%;" height="985px;" src="https://www.youtube.com/embed/videoseries?autoplay=1&loop=1&rel=0&controls=1&list=PLR1zdLmvBxXATJxJm2-EcYW_-aWcNTqNM"  playlist=nc0VIW4Dfzs
          frameborder="0" allowfullscreen></iframe>
        <div class="row">
          <div class="col-xs-12 logo">

            <img src="http://i.imgur.com/zfE9wGK.png" class=" animated fadeInDown wow"
                 style="height: auto; width: 100%; margin: 0 auto; "><br>

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
                      <img class="logo2" style="margin-bottom: -35px;" src="http://i.imgur.com/JZzaGkF.png"></div>
                      <p class="motto" style="font-family: 'Caveat', cursive; font-size: 30px; text-align: center; color: black; font-weight: bold; margin-bottom:130px;">
                        Providing Executive-Level Event Experiences, <span style="color: #f7c200;">every time</span> .</p>
                </div>
              </div>
            </div>

            <div class="row" style="margin-top:100px;">
              <h1  class="hOne ourservices sectionHeader">OUR SERVICES</h1>

              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-calendar fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class=" edm lightSpeedIn animated wow">Event Day Management</h1>
                  <div class="servicesBox eventdaymgt">
                  </div>
                </div>
              </div>


              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-check fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Registration Management</h1>
                  <div class="servicesBox regmgt">
                  </div>
                </div>
              </div>


              <div style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-area-chart fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Production & Stage Management</h1>
                  <div class="servicesBox prostagemgt">
                  </div>
                </div>
              </div>
            </div>




            <div class="row" style="margin-top: 50px;  padding-bottom: 60px;">
              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-star-o fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Marketing & Digital Media Management</h1>
                  <div class="servicesBox markdigmgt">
                  </div>
                </div>
              </div>


              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-suitcase fa-3x" style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne lightSpeedIn animated wow">Vendor Management</h1>
                  <div class="servicesBox vendormgt">
                  </div>
                </div>
              </div>


              <div  style=" height: auto;" class="col-md-4 col-xs-12 s1 ">
                <i class="hOne animated wow bounceInDown fa fa-users fa-3x " style="color: white; margin-bottom: 40px;"></i>
                <div class="container">
                  <h1 class="hOne  lightSpeedIn animated wow">Volunteer Management</h1>
                  <div class="servicesBox volmgt">
                  </div>
                </div>
              </div>

              </div>
            </div>
          </div>

<!-- HOVRER TEXT ANIMATION  -->


          <div class="container-fluid services" style="height: auto; margin-bottom:0; box-shadow: 0 2px 6px -6px white;">

              <h1 class="sectionHeader" style="padding-top: 20px; text-align: center; color: black;">
                We specialize in the following types of events:</h1>
            <div class="row" style="background-color: rgba(215,215,215,0.2); box-shadow: inset 1px 1px 10px -2px rgba(0,0,0,0.4); height: auto;">
              <div class="col-xs-12">
              <div class="col-xs-12 col-md-6"  style="background-color: rgba(215,215,215,1);">
                <ul>
                  <li class="animate wow fadeInLeft" style="animation-delay: 0.5s">Experiential Events</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 0.75s">Brand Activations</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 1s">Conferences</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 1.25s">Banquets</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 1.50s">Festivals</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 1.75s">Concerts</li>
                  <li class="animate wow fadeInLeft" style="animation-delay: 2s">Custom Events</li>
                </ul>
                <br><br>
              </div>
              <div class="col-xs-3"  style="background-color:red ; height: 400px; width: auto;">
                <!-- <img style="margin: 30px;" src="https://i.imgur.com/Llo4kUa.jpg?1"> -->
              </div>
              </div>
              </div>
            </div></div>


              <div class="container-fluid owner" id="sectionStaff">
                <h1 class="zoomIn animated wow sectionHeader"style=" color: white;">MEET THE STAFF</h1>

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
                <h1 class="animated wow fadeIn sectionHeader">OUR CLIENTS</h1>
                <div class="tech-slideshow wow animated fadeInUp" style="margin-bottom: 60px;">
                  <div class="mover-2"></div>
              </div>
            </div></div>



        <div class="container-fluid" id="section2" style="width: 100%;">
          <div class="row">
          <div class="col-md-12 latest">
            <h1 class="sectionHeader">EVENT GALLERY</h1><br>
            <div id="myCarousel" class="carousel slide animated fadeInLeftBig wow" data-ride="carousel">
<!-- Indicators -->


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
                        <a class="left carousel-control" data-target="#myCarousel" data-slide="prev">
                          <span class="glyphicon glyphicon-chevron-left"></span>

                        </a>
                        <a  class="right carousel-control" data-target="#myCarousel" data-slide="next">
                          <span class="glyphicon glyphicon-chevron-right"></span>

                        </a>
                      </div></div></div>

                      <!-- TESTIMONIALS--><!-- TESTIMONIALS--><!-- TESTIMONIALS-->
                      <div class="container-fluid testimonials"  id="section3" >
                        <div class="row" style="margin: 0 auto;">
                                <div class="col-md-12 col-xs-12 testOne" style="margin-top: 50px;">
                                  <h1 class="sectionHeader">TESTIMONIALS</h1>
                                  <p style="font-family: 'NexaLight'"> " Nina is an affable, smart, and determined professional.   She will work tirelessly until the job is complete. " </p><br>
                                  <ul style="float: right; margin-top: 10px; list-style: none;">
                                    <li style="font-style: italic; color: black;"> Troy Springer </li>
                                    <li style="font-style: italic; color: black;"> CEO </li>
                                    <li style="font-style: italic; color: black;"> Corporate Production Services </li>
                                  </ul>
                                </div>
                            </div></div>

                          </div>

                      <!-- TESTIMONIALS--><!-- TESTIMONIALS--><!-- TESTIMONIALS-->


                      <!-- CONTACT --><!-- CONTACT --><!-- CONTACT -->





                      <div class="wrapper" id="section5">
                        <div class="conatiner" style="width: auto; box-shadow: inset -1px 0 20px -5px rgba(0,0,0,0.9)">
                          <div class="textWrapper ">
                            <h1 class="contactHeader zoomIn animated wow">Contact Us Today!</h1>
                            <!-- <p class="animated wow fadeIn" style="color: #f74e47; font-size: 25px; width: 50%; margin: 0 auto; padding-top: 20px;"> We are here to help! Click below to get started!
                            </p> -->
                            <div class="socialmedianav" style="float: none; margin: 0 auto; margin-bottom: -100px; margin-top: 50px;">
                              <i class="fa fa-facebook fa-3x" href="facebook.com"></i>
                              <i class="fa fa-twitter fa-3x"></i>
                              <i class="fa fa-instagram fa-3x"></i>
                              <i class="fa fa-linkedin fa-3x"></i>
                            </div>
                          </div>

                        <div class="contactWrapper">
                          <div class="row">
                            <div class="col-md-6 col-xs-12 join animated wow slideInLeftOne">
                              <button class="contactFormButton" style="color: rgba(245,245,245,0.9); float: right; font-family: NexaLight"data-toggle="modal" data-target="#joinModal">Join Our Event Team</button>
                            </div>
                            <div class="col-md-6 col-xs-12 contact animated wow slideInRightOne">
                              <button class="contactFormButton" style="color: rgba(245,245,245,0.9); float: left; font-family: NexaLight" data-toggle="modal" data-target="#contactModal">How Can We Help You?</button>
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

                            <form  method="post">
                              <input class="inputFields" name="fname" placeholder="First Name"><br>
                              <input class="inputFields" name="lname" placeholder="Last Name">
                              <input class="inputFields" name="phone" placeholder="Phone Number">
                              <input class="inputFields" name="years" placeholder="How many years in the business?">
                              <input class="inputFields" name="mang" placeholder="Managerial Experience?">



                          <div class="form-group">
                          <select class="positions inputFields" placeholder="Select Position">
                          <option class="inputFields" value="1">Select Position</option>
                          <option class="inputFields" value="2">Event Manager</option>
                          <option class="inputFields" value="3">Production Manager</option>
                          <option class="inputFields" value="4">Stage Manager</option>
                          <option class="inputFields" value="5">Stage Hand</option>
                          <option class="inputFields" value="6">Volunteer Manager</option>
                          <option class="inputFields" value="7">Vendor Manager</option>
                          <option class="inputFields" value="8">Event/Production Assistant</option>
                          </select>
                          </div>


                          </div>
                          <div class="modal-footer">
                            <button class="contactFormButton modalButton" type="submit" name="submit" value="send" style="float: right; font-family: NexaLight">SEND</button>

                            </form>
                          </div>
                          </div>

                        </div>
                      </div>

                      <div id="contactModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                        <!-- Modal content-->
                          <div class="modal-contentOne">
                          <div class="modal-body" style="margin-top: 50px; padding-bottom: 150px;">

                            <form method="post" name="form2">
                              <input class="inputFields" type="name" name="first_name" placeholder="First Name :" required><br>
                              <input class="inputFields" type="email" name="last_name" placeholder="Last Name :" required><br>
                              <input class="inputFields" type="phone" name="emails" placeholder="Email :" required><br>
                              <textarea style="width: 100%;" rows="10"type="msg" name="message" placeholder="How can we help you? Explain the Event you need handled here: " required></textarea><br>
                              <button class="contactFormButton modalButton" type="submit2" name="submit2" value="send" style="float: right; font-family: NexaLight">SEND</button>
                            </form>                   </div>
                          </div>

                        </div>
                      </div>


                      <!-- CONTACT --><!-- CONTACT --><!-- CONTACT -->







</body>
