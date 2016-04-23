<!DOCTYPE html>
<html>
    <head>
        <title>Aanan a Travel | Home </title>
        <link href="<?php echo base_url(); ?>assets/frontend/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <!-- jQuery (Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/frontend/js/bootstrap.js"></script>
        <!-- Custom Theme files -->
        <link href="<?php echo base_url(); ?>assets/frontend/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <!-- Custom Theme files -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Travelo  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--webfont-->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Raleway:400,800,300,100,500,700,600,900' rel='stylesheet' type='text/css'>
        <!--animated-css-->
        <link href="<?php echo base_url(); ?>assets/frontend/css/animate.css" rel="stylesheet" type="text/css" media="all">
        <script src="<?php echo base_url(); ?>assets/frontend/js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
        <!--/animated-css-->
        <!--script-->
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/move-top.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/easing.js"></script>
        <!--/script-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $(".scroll").click(function (event) {
                    event.preventDefault();
                    $('html,body').animate({scrollTop: $(this.hash).offset().top}, 900);
                });
            });
            
            function funSubmitFlight(){
                alert('work');
                $('#exampleModal2').modal('show');
                return false;
            }
        </script>
    </head>
    <body>
        <!---->
        <div class="banner-bg" >
            <video autoplay muted poster="<?php echo base_url(); ?>assets/frontend/images/beach-sea-travels-n-tour.jpg" width="100%"  loop>
                <source src="<?php echo base_url(); ?>assets/frontend/srix.mp4" type="video/mp4" type="video/mp4">
            </video>
            <div class="banner">
                <div class="header">   
                    <div class="logo wow fadeInLeft" data-wow-delay="0.5s">
                    <a href="<?php echo base_url('home'); ?>"><h1 style = "color: #FFF; font-size: 51px;">Aanan</h1><!--<img src="images/logo2.png" alt=""/>--></a>
                    </div>  
                    <div class="top-menu">
                        <span class="menu"></span> 
                        <ul class="cl-effect-1">
                            <li><a class="scroll" href="#home">HOME</a></li>
                            <li><a class="scroll" href="#brief">BRIEF</a></li>
                            <li><a class="scroll" href="#features">FEATURES</a></li>
                            <li><a class="scroll" href="#screenshots">TOURS</a></li>
                            <li><a class="scroll" href="#testimonial">TESTIMONIAL</a></li>
                            <li><a class="scroll" href="#contact">CONTACT</a></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- script-for-menu -->
                    <script>
                        $("span.menu").click(function () {
                            $("ul.cl-effect-1").slideToggle(300, function () {
                                // Animation complete.
                            });
                        });
                    </script>
                    <!-- script-for-menu -->       
                </div>
                <div class="banner-text wow fadeInUp" data-wow-delay="0.5s">
                    <h1>Plan and <span>Book</span> Your Perfect Trip</h1>
                </div>
                <div class="booking-form">
                    <!---strat-date-piker---->
                    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/jquery-ui.css" />
                    <script src="<?php echo base_url(); ?>assets/frontend/js/jquery-ui.js"></script>
                    <script>
                        $(function () {
                            $("#datepicker,#datepicker1").datepicker();
                        });
                    </script>
                    <!---/End-date-piker---->
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/JFGrid.css" />
                    <link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>assets/frontend/css/JFFormStyle-1.css" />
                    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/JFCore.js"></script>
                    <script type="text/javascript" src="<?php echo base_url(); ?>assets/frontend/js/JFForms.js"></script>
                    <!-- Set here the key for your domain in order to hide the watermark on the web server -->
                    <script type="text/javascript">
                       (function () {
                           JC.init({
                               domainKey: ''
                           });
                       })();
                    </script>
                    <style>
                        .tab_ber{
                            height: 49px;
                            width: 33.33%;
                            float: left;
                            background-color:#666;
                            border: 1px #CCCCCC solid;
                            cursor: pointer;
                            padding: 10px;
                            color: white; 
                            font-size: 13px; 
                            text-align: center;

                        }
                        .tab_ber:hover{ 
                            background:#2955ac; 
                            color:#ffffff;
                        }
                        .tab_ber.current, .tab_ber.current:hover { background-color: #fd8e22 !important; color: white; }
                    </style>
                    <div class="online_reservation">
                        <div class="b_tab" >
                            <div class = "tab_ber  current">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/plane.png" alt="plane"  style="width:25px;" align="absmiddle" /> &nbsp;<strong>Flight</strong>
                            </div>
                            <div class = "tab_ber">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/hotel.png" alt="plane"  style="width:25px;" align="absmiddle" />&nbsp;&nbsp;<strong>Hotels</strong>
                            </div>
                            <div class = "tab_ber">
                                <img src="<?php echo base_url(); ?>assets/frontend/images/calender.png"   alt="plane"  style="height:20px; width:20px; border-radius:0px" align="absmiddle" />&nbsp;&nbsp;<strong>Holiday Planner</strong>
                            </div>
                        </div>
                        <div class="b_room">
                            <div class="booking_room">
                                <div class="reservation">
                                    <ul>
                                        <?php
                                            foreach($types as $type_key => $type){
                                                ?>
                                                <li  class="span1_of_4 left">
                                                    <h5 style = "width: 100%;">
                                                        <?= form_radio('trip_category', $type, array('style' => 'float: left;' ) ); ?>
                                                        <?= $type; ?>
                                                    </h5>      
                                                </li>
                                                <?php
                                            }
                                            foreach($trips as $trip){
                                                ?>
                                                <li  class="span1_of_4 left">
                                                    <h5 style = "width: 100%;"><input type="radio" name = "trip_category" style = " float: left;"><?= $trip->trip_type; ?></h5>      
                                                </li>
                                                <?php
                                            }
                                        ?>
                                        <li  class="span1_of_4 left">
                                            <h5>From</h5>
                                            <div class="book_date">
                                                    <input type="text" placeholder="Type Depature City" required>
                                            </div>          
                                        </li>
                                        <li  class="span1_of_4 left">
                                            <h5>To</h5>
                                            <div class="book_date">
                                                    <input type="text" placeholder="Type Destination City" required>
                                            </div>    
                                        </li>
                                        <li  class="span1_of_4 left">
                                            <h5>Arrival</h5>
                                            <div class="book_date">
                                                    <input class="date" id="datepicker" type="text" value="2/04/2015" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                                     this.value = '2/04/2015';
                                                                                                                 }" required=>
                                            </div>          
                                        </li>
                                        <li  class="span1_of_4 left">
                                            <h5>Depature</h5>
                                            <div class="book_date">
                                                    <input class="date" id="datepicker1" type="text" value="22/08/2015" onfocus="this.value = '';" onblur="if (this.value == '') {
                                                                                                                    this.value = '22/08/2015';
                                                                                                                }" required=>
                                            </div>    
                                        </li>
                                        <li class="span1_of_3">
                                            <h5>Adult</h5>
                                            <div class="section_room">
                                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <?php
                                                for($i=0;$i<=9;$i++){
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }
                                            ?>
                                                </select>
                                            </div>  
                                        </li>
                                        <li class="span1_of_3">
                                            <h5>Children</h5>
                                            <div class="section_room">
                                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <?php
                                                for($i=0;$i<=9;$i++){
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }
                                            ?>
                                                </select>
                                            </div>  
                                        </li>
                                        <li class="span1_of_3">
                                            <h5>Infants</h5>
                                            <div class="section_room">
                                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                            <?php
                                                for($i=0;$i<=3;$i++){
                                                    echo '<option value="'.$i.'">'.$i.'</option>';
                                                }
                                            ?>
                                                </select>
                                            </div>  
                                        </li>
                                        <li class="span1_of_4">
                                            <h5>Class</h5>
                                            <div class="section_room">
                                                <select id="country" onchange="change_country(this.value)" class="frm-field required">
                                                    <option value="null">Economy</option>
                                                    <option value="null">Business</option>         
                                                    <option value="AX">First Class</option>
                                                    <option value="AX">Premium Economy</option>
                                                </select>
                                            </div>  
                                        </li>
                                        <li class="span1_of_1">
                                            <div class="date_btn">
                                                <form onsubmit="return funSubmitFlight();" action = "" method = "post">
                                                    <input type="button" value="Book Now" onclick="return funSubmitFlight();"/>
                                                </form>
                                            </div>
                                        </li>
                                        <div class="clearfix"></div>
                                    </ul>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div> 
                <div class="online-form">
                    <a class="play-icon popup-with-zoom-anim" href="#small-dialog2">Booking Here</a>
                </div>
                
                <!-- Start modal -->
                
                <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="exampleModalLabel">Flight Enquiry Form</h4>
                            </div>
                            <div class="modal-body">
                                <div class="signup">
                                    <form>
                                        <br>
                                        <b>Name:</b><br>
                                        <input type="text" class="email" placeholder="Type Your Name" required  />
                                        <br>
                                        <b>Email:</b><br>
                                        <input type="email" class="email" placeholder="Type Your Email" required />
                                        <br>
                                        <b>Contact Number:</b><br>
                                        <input type="text" class="email" placeholder="Type Your Contact Number" required  />
                                        <br>
                                        <b>Your Query:</b><br>
                                        <textarea class = "form_text_area"></textarea>
                                        <input type="submit"  value="Send Now" class = "form_submit"/>
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- end of modal -->
                
                <div id="small-dialog2" class="mfp-hide">
                    <div class="signup">
                        <form>
                            <input type="text" class="email" placeholder="Type Depature City" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                            <input type="text" class="email" placeholder="Type Destination City" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                            <input type="text" class="email" placeholder="2/04/2015" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                            <input type="text" class="email" placeholder="22/08/2015" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                            <input type="submit"  value="Book Now"/>
                        </form>
                    </div>
                    <div class="clearfix"> </div>
                </div>  
                <script>
                    $(document).ready(function () {
                        $('.popup-with-zoom-anim').magnificPopup({
                            type: 'inline',
                            fixedContentPos: false,
                            fixedBgPos: true,
                            overflowY: 'auto',
                            closeBtnInside: true,
                            preloader: false,
                            midClick: true,
                            removalDelay: 300,
                            mainClass: 'my-mfp-zoom-in'
                        });

                    });
                </script> 
            </div>
        </div>
        <!---->
        <div id="brief" class="brief">
            <div class="container">
                <div class="col-md-6 brief-grids wow fadeInLeft" data-wow-delay="0.5s">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/browse.jpg" alt=""/>
                    <div class="brief-grid">
                        <div class="brief-grid-text">
                            <h3>TRAVEL DOCUMENTS</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut.Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse 
                                potenti. Quisque vel mauris euismod, imperdiet lectus fringilla, posuere quam. Suspendisse 
                                vel enim ut odio dapibus tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 brief-grids wow fadeInRight" data-wow-delay="0.5s">
                    <img src="<?php echo base_url(); ?>assets/frontend/images/browse2.jpg" alt=""/>
                    <div class="brief-grid">
                        <div class="brief-grid-text">
                            <h3>Describe what we are Provide</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco 
                                laboris nisi ut.Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse 
                                potenti. Quisque vel mauris euismod, imperdiet lectus fringilla, posuere quam. Suspendisse 
                                vel enim ut odio dapibus tempor.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>     
            </div>
        </div>
        <!---->
        <div id="features" class="features">
            <div class="container">
                <div class="feature-text text-center">
                    <h3>Features</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="features-section">
                    <div class="col-md-6 feature-grid text-center">
                        <i class="f1 wow bounceIn" data-wow-delay="0.5s"></i>
                        <h3>Easy to Customize</h3>
                        <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement.
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-6 feature-grid text-center">
                        <i class="f2 wow bounceIn" data-wow-delay="0.5s"></i>
                        <h3>Travel Documents</h3>
                        <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement.
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-6 feature-grid text-center">
                        <i class="f3 wow bounceIn" data-wow-delay="0.5s"></i>
                        <h3>Visa Support</h3>
                        <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement.
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <div class="col-md-6 feature-grid text-center">
                        <i class="f4 wow bounceIn" data-wow-delay="0.5s"></i>
                        <h3>Consultation</h3>
                        <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement.
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <!---->
        <div class="video">
            <div class="container">
                <div class="video-text text-center">
                    <h3>Watch Video</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="video-grids">
                    <div class="col-md-8 video-left">
                        <h4>Lorem ipsum dolor sit amet, consectetur 
                            a maximus metus semper et. 
                        </h4>
                        <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas congue gravida ex,
                            a maximus metus semper et. Curabitur non enim pharetra, dictum tortor quis, hendr
                            erit tortor.
                        </h5>
                        <p>Maecenas finibus quis nulla id facilisis. Aenean dignissim magna et est elit porttitor 
                            gravida lacinia. Fusce elementum massa at eros lacinia imperdiet. Aenean mollis ultricies 
                            dictum.Praesent suscipit urna eget elit porttitor mollis. Quisque mollis rhoncus ante, eu 
                            interdum quam vehicula cursus. Nam bibendum odio eu sem semper posuere. Fusce elementum massa at eros lacinia imperdiet. Aenean mollis ultricies 
                            dictum.Fusce elementum massa at eros lacinia imperdiet. Aenean mollis ultricies 
                            dictum.Fusce elementum massa at eros lacinia imperdiet. Aenean mollis ultricies 
                            dictum. 
                        </p>
                    </div>
                    <div class="col-md-4 video-right">
                        <img src="<?php echo base_url(); ?>assets/frontend/images/1.jpg" alt="" />
                        <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><span> </span></a>
                        <div id="small-dialog" class="mfp-hide">
                            <iframe src="https://player.vimeo.com/video/40301191" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                        </div>
                        <link href="<?php echo base_url(); ?>assets/frontend/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
                        <script src="<?php echo base_url(); ?>assets/frontend/js/jquery.magnific-popup.js" type="text/javascript"></script>
                        <script>
                            $(document).ready(function () {
                                $('.popup-with-zoom-anim').magnificPopup({
                                    type: 'inline',
                                    fixedContentPos: false,
                                    fixedBgPos: true,
                                    overflowY: 'auto',
                                    closeBtnInside: true,
                                    preloader: false,
                                    midClick: true,
                                    removalDelay: 300,
                                    mainClass: 'my-mfp-zoom-in'
                                });
                            });
                        </script>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
        <!---->
        <div id="screenshots" class="screenshots">
            <div class="container">
                <div class="screen-text text-center">
                    <h3>Resent Tours</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <!-- requried-jsfiles-for owl -->
                <link href="<?php echo base_url(); ?>assets/frontend/css/owl.carousel.css" rel="stylesheet">
                <script src="<?php echo base_url(); ?>assets/frontend/js/owl.carousel.js"></script>
                <script>
                    $(document).ready(function () {
                        $("#owl-demo").owlCarousel({
                            items: 1,
                            lazyLoad: true,
                            autoPlay: true,
                            navigation: false,
                            navigationText: false,
                            pagination: true,
                        });
                    });
                </script>
                <!-- //requried-jsfiles-for owl -->
                <div id="owl-demo" class="owl-carousel">
                    <div class="item text-center guide-sliders">
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc1.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc2.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc3.jpg">          
                        </div>           
                    </div>        
                    <div class="item text-center guide-sliders">
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc4.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc5.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc1.jpg">          
                        </div>            
                    </div>
                    <div class="item text-center guide-sliders">
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc5.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc4.jpg">          
                        </div>
                        <div class="col-md-4 image-grid">
                            <img src="<?php echo base_url(); ?>assets/frontend/images/sc2.jpg">          
                        </div>            
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <div id="testimonial" class="trusted">
            <div class="container">
                <div class="trusted-text text-center">
                    <h3>Trusted by Thousands</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="box-grids">
                    <div class="col-md-4 client wow fadeInLeft" data-wow-delay="0.5s">
                        <div class="box-grid">
                            <span></span>
                            <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement A/B testing shrink a market venture capital pitch deck. 
                                Social bookmarking group buying crowded market pivot onboarding.</p>
                            <label></label>
                        </div>
                        <h4><a href="#">Market Diaz</a></h4>
                        <p class="ceo">Abz Network</p>
                    </div>
                    <div class="col-md-4 client wow fadeInUp" data-wow-delay="0.5s">
                        <div class="box-grid">
                            <span></span>
                            <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement A/B testing shrink a market venture capital pitch deck. 
                                Social bookmarking group buying crowded market pivot onboarding.</p>
                            <label></label>
                        </div>
                        <h4><a href="#">Market Diaz</a></h4>
                        <p class="ceo">Abz Network</p>
                    </div>
                    <div class="col-md-4 client wow fadeInRight" data-wow-delay="0.5s">
                        <div class="box-grid">
                            <span></span>
                            <p>Lorem lean startup ipsum product market fit customer development acquihire technical cofounder. User engagement A/B testing shrink a market venture capital pitch deck. 
                                Social bookmarking group buying crowded market pivot onboarding.</p>
                            <label></label>
                        </div>  
                        <h4><a href="#">Market Diaz</a></h4>
                        <p class="ceo">Abz Network</p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---->
        <div class="get-started">
            <div class="container">
                <h4 class="wow bounceInLeft" data-wow-delay="0.5s">We Ready  to Help You</h4>
                <h3 class="wow bounceInRight" data-wow-delay="0.5s">Get the Best Solution for Your Tour</h3>
                <a href="#">GET STARTED</a>
            </div>
        </div>
        <!---->
        <div id="contact" class="contact">
            <div class="container">
                <div class="contact-text text-center">
                    <h3>Contact</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="contact-form">
                    <form>
                        <div class="col-md-6 text-box">
                            <form>
                                <input class="wow fadeInLeft" data-wow-delay="0.5s" type="text" placeholder="Name" required/>
                                <input class="wow fadeInLeft" data-wow-delay="0.5s" type="text" placeholder="Email" required pattern="([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?" />
                                <input class="wow fadeInLeft" data-wow-delay="0.5s" type="text" placeholder="Subject" required />
                            </form>
                        </div>
                        <div class="col-md-6 textarea">
                            <form>
                                <textarea class="wow fadeInRight" data-wow-delay="0.5s" required>Message</textarea>
                                <input class="wow fadeInRight" data-wow-delay="0.5s" type="submit" value="SUBMIT" />
                            </form>
                        </div>
                        <div class="clearfix"> </div>           
                    </form>
                </div>
                <div class="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d118560.66194971421!2d-48.15623890000003!3d-21.77946039999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1426765295728" frameborder="0" style="border:0"></iframe>
                </div>
            </div>    
        </div>
        <!---->
        <div class="footer">
            <div class="container">
                <div class="ftr-logo">
                        <a class="wow bounceIn" data-wow-delay="0.5s" href="<?php base_url('home'); ?>"><h1 style = "color: #FFF; font-size: 51px;">Aanan</h1><!--<img src="images/logo2.png" alt=""/>--></a>
                </div>
                <div class="copy-right wow bounceInUp" data-wow-delay="0.5s">
                    <p>Copyright &#169; 2015 Aanan . All Rights Reserved.</p>
                    <p>Design by  Codesketchsolution</p>
                </div>

            </div>
        </div>
        <!---->
        <script type="text/javascript">
            $(document).ready(function () {
                /*
                 var defaults = {
                 containerID: 'toTop', // fading element id
                 containerHoverID: 'toTopHover', // fading element hover id
                 scrollSpeed: 1200,
                 easingType: 'linear' 
                 };
                 */
                $().UItoTop({easingType: 'easeOutQuart'});
            });
        </script>
        <a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
        <!----> 
    </body>
</html>