<!DOCTYPE html>
<html lang="en"><head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ICASTE</title>
<link rel="icon" type="image/gif/png" href="images/logo.ico">

<link href="css/scrolling-nav.css" rel="stylesheet">
<link href="css/rotating-card.css" rel="stylesheet">
<link rel="stylesheet" href="css/animation.css">
<!-- Bootstrap -->
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="css/bootstrap-3.3.6.css" rel="stylesheet" type="text/css">
<link href="css/agency.css" rel="stylesheet"> 
<link href="css/loginform.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="js/jquery-1.11.3.min.js"></script>

<!-- Include all compiled plugins (below), or include individual files as needed --> 
<!-- <script src="js/bootstrap.js"></script> -->
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
<script src="js/bootstrap-3.3.6.js"></script>



    <!-- Scrolling Nav JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
    <script src='js/css3-animate-it.js'></script>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- <style>body {padding-top:50px;} </style>-->
   
   <script type="text/javascript">
function MM_openBrWindow(theURL,winName,features) { //v2.0
  window.open(theURL,winName,features);
}
  </script>
  <script type="text/javascript">
// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});

    
    $(document).ready(function(){
        $("#civil-btn").click(function(){
            $("#extcengg").hide(400);
            $("#compitengg").hide(400);
            $("#handassci").hide(400);
            $("#mechengg").hide(400);
            $("#inter").hide(400);
            $("#civilengg").show(400);
            scrollToAnchor('civilengg-tab');
        });
         $("#extc-btn").click(function(){
            $("#compitengg").hide(400);
            $("#handassci").hide(400);
            $("#mechengg").hide(400);
            $("#inter").hide(400);
            $("#civilengg").hide(400);
            $("#extcengg").show(400);
            scrollToAnchor('extcengg-tab');
        });
         $("#compit-btn").click(function(){
            $("#extcengg").hide(400);
            $("#handassci").hide(400);
            $("#mechengg").hide(400);
            $("#inter").hide(400);
            $("#civilengg").hide(400);
            $("#compitengg").show(400);
            scrollToAnchor('compitengg-tab');
        });
         $("#handassci-btn").click(function(){
            $("#extcengg").hide(400);
            $("#compitengg").hide(400);
            $("#mechengg").hide(400);
            $("#inter").hide(400);
            $("#civilengg").hide(400);
            $("#handassci").show(400);
            scrollToAnchor('handassci-tab');
        });
         $("#mech-btn").click(function(){
            $("#extcengg").hide(400);
            $("#compitengg").hide(400);
            $("#handassci").hide(400);
            $("#inter").hide(400);
            $("#civilengg").hide(400);
            $("#mechengg").show(400);
            scrollToAnchor('mechanicalengg-tab');
        });
         $("#inter-btn").click(function(){
            $("#extcengg").hide(400);
            $("#compitengg").hide(400);
            $("#handassci").hide(400);
            $("#mechengg").hide(400);
            $("#civilengg").hide(400);
            $("#inter").show(400);
            scrollToAnchor('interdisciplinary-tab');
        });


    });

    function scrollToAnchor(aid){
    var aTag = $("a[name='"+ aid +"']");
    $('html,body').animate({scrollTop: aTag.offset().top},'slow');
}

</script>

<script>
  $(document).ready(function(){
        $(window).on("scroll",function(){
          var rk = $(window).scrollTop();
          var ag = $(window).scrollTop();
          var ap = $(window).scrollTop();
          var hv = $(window).scrollTop();
          var am = $(window).scrollTop();
          var sb = $(window).scrollTop();
          var rs = $(window).scrollTop();
         if(rk > 1800){
          document.getElementById('animationrk').style.display="flex";
        document.getElementById('animationrk').classList.add("animated");
        document.getElementById('animationrk').classList.add("fadeInLeft");
        document.getElementById('animationrk').classList.add("go");
        }
        if(ag > 2100){
          document.getElementById('animationag').style.display="flex";
        document.getElementById('animationag').classList.add("animated");
        document.getElementById('animationag').classList.add("fadeInRight");
        document.getElementById('animationag').classList.add("go");
        }
        if(ap > 2350){
          document.getElementById('animationap').style.display="flex";
        document.getElementById('animationap').classList.add("animated");
        document.getElementById('animationap').classList.add("fadeInLeft");
        document.getElementById('animationap').classList.add("go");
        }
        if(hv > 2600){
          document.getElementById('animationhv').style.display="flex";
        document.getElementById('animationhv').classList.add("animated");
        document.getElementById('animationhv').classList.add("fadeInRight");
        document.getElementById('animationhv').classList.add("go");
        }
        if(am > 2900){
          document.getElementById('animationam').style.display="flex";
        document.getElementById('animationam').classList.add("animated");
        document.getElementById('animationam').classList.add("fadeInLeft");
        document.getElementById('animationam').classList.add("go");
        }
        if(sb > 3150){
          document.getElementById('animationsb').style.display="flex";
        document.getElementById('animationsb').classList.add("animated");
        document.getElementById('animationsb').classList.add("fadeInRight");
        document.getElementById('animationsb').classList.add("go");
        }
        if(rs > 3500){
          document.getElementById('animationrs').style.display="flex";
        document.getElementById('animationrs').classList.add("animated");
        document.getElementById('animationrs').classList.add("fadeInLeft");
        document.getElementById('animationrs').classList.add("go");
        }
        });
      });
  </script>

<link rel="stylesheet" href="css/pmad.css"/>

<style type="text/css">
  /*Hollow Button Code*/
    .btn.outline {
        background: none;
        padding: 12px 22px;
    }


    .btn-primary.outline {
        border: 2px solid #0099cc;
        color: #0099cc;
    }

    .btn-primary.outline:hover, .btn-primary.outline:focus, .btn-primary.outline:active, .btn-primary.outline.active, .open > .dropdown-toggle.btn-primary {
        color: #33a6cc;
        border-color: #33a6cc;
    }
    .btn-primary.outline:active, .btn-primary.outline.active {
        border-color: #007299;
        color: #007299;
        box-shadow: none;
    }
    /*Hollow input type code*/
    .input.outline {
        background: none;
        /*padding: 16px 22px;*/
    }


    .input-primary.outline {
        border: 2px solid #0099cc;
        color: #0099cc;
    }

    .input-primary.outline:hover, .input-primary.outline:focus, .input-primary.outline:active, .input-primary.outline.active, .open > .dropdown-toggle.input-primary {
        color: #33a6cc;
        border-color: #33a6cc;
    }
    .input-primary.outline:active, .input-primary.outline.active {
        border-color: #007299;
        color: #007299;
        box-shadow: none;
    }

    .event_head{
              height:255px;
              letter-spacing:5px;
              background-color: black;
              color:white;
              width: 90%;
              font-size:35px;
              text-align:center;
              padding:100px 0px;
              border-top-left-radius: 10px;
              border-top-right-radius: 10px;
              margin: 0px 5%;
            }

    .more_info{
              font-size:20px;
              letter-spacing:2px;
              width:90%;
              border-top-width: 0px;
              margin: 0px 5%;
              border-top-left-radius: 0px;
              border-top-right-radius: 0px;
            }

    .custom-btn{
        color: white !important;
        border-color: white !important;
        width: 90%
    }

    .domain{
        list-style-type: none;
        font-size: 16px;
        letter-spacing: 1px;
        line-height: 25px;
        font-weight: bold;
        width: 100%;
        text-align: center;
    }

    .domain a:hover{
        background-color: #149896 !important;
        color: white;
        border-radius: 5px;
    }

    .domain-tab{
        background-color: #149896 !important;
        color: white !important;
        border-radius: 5px;

    }

    .domain-list-tab{
        background-color: #149896 !important;
        color: white;
        border-radius: 5px;
        text-align: center
    }

    .domain a{
        color: black;
    }

    .col-lg-6{
        padding: 0px;
    }

    .domain-list{
        width: 100%;
        padding-top: 10px;
        padding-bottom: 10px;
        list-style-type: none;
        font-size: 16px;
        letter-spacing: 0.5px;
        line-height: 20px;
    }

    hr{
        margin: 0px auto;
        width: 80%;
    }

    @media only screen and (max-width: 480px){
        .btn-lg{
            font-size: 12px;
        }
        .call-row {
            display: block !important;
        }
        .custom-btn-width{
            width: 70% !important;
        }

        .custom-size{
            margin-bottom: 50px !important;

        }

        .row{
            width: 90%;
            margin-right: auto;
            margin-left: auto;
        }

    }

     .overlay:before{
          position: absolute;
          content:" ";

          width:100%;
          height:100%;
          z-index:0;
          background-color: rgba(0,0,0,0.5);
        }

        .c-overlay {
          position: relative;
          color:white;
        }

        .c-overlay * {
            position: relative;
        }

         .com-int-name{
            background-color: #8e44ad;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-int-org{
            background-color: #9b59b6;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .com-nal-name{
            background-color: #27ae60;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-nal-org{
            background-color: #2ecc71;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
        }

         .com-tech-name{
            background-color: #2980b9;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-tech-org{
            background-color: #3498db;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;

        }

        .com-org-name{
            background-color: #c0392b;
            padding-top: 20px;
            padding-bottom: 20px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .com-org-org{
            background-color: #e74c3c;
             padding-top: 20px;
            padding-bottom: 20px;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;

        }

        .com-padding{
            margin-bottom: 50px;
        }

        .com-blurb{
            margin: auto;
            border-radius: 100%;
            width: 180px;
            height: 180px;
            background-color: white
        }

        .com-blurb:hover{
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
            transition: 0.3s;
        }

        .call-padding{
            padding: 0px;
        }

        .scroll-top{
            background-color: #9b59b6;
            height: 75px;
            width: 75px;
            border-radius: 100%;
            display: flex;
            position: fixed;
            bottom: 20px;
            right: 20px;
        }

        .glyphicon-menu-up{
            color: white;
            font-size: 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0px auto;
        }

        .scroll-top-icon {

        }

</style>

</head>

<body  id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

 <!--Navbar--><!-- Fixed the navbar by class navbar-fixed-top-->
 <!-- Navigation -->
    <nav class="navbar-default navbar-fixed-top navbar" role="navigation" style="height: 70px;">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-ex1-collapse" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" style="padding: 0px;" href="#page-top"><img src="images/logo.png" height="70px" width="auto"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse" >
                <ul class="nav navbar-nav navbar-right" style="margin-top: 10px">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a href="#maininfo" class="page-scroll" >ABOUT</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#schedule">SCHEDULE</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#callforpapers">CALL FOR PAPERS</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#teaminfo">COMITTEE</a>
                    </li>
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#venue">VENUE</a>
                    </li>                
                    <li style="font-weight:bolder; letter-spacing:1px;">
                        <a class="page-scroll" href="#contact">CONTACT</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


  
  
 <!--Background Image--> 
<!-- <img src="images/wallnew.jpg" class="img-responsive" alt="Placeholder image"> -->

<!-- <div style="background: linear-gradient(to right, #62559b,#149896);height: 600px"> -->
      <!-- <div style="background-image: url('Image/1.jpg');height: 600px;"> -->

        <div class="overlay c-overlay" style="background: url(images/cover.jpg) no-repeat center center fixed;background-size: cover;height: 800px;" >
        
          <div class="container" style="padding-top: 0px;width: fit-content">
            <div class="col-lg-12" style="margin: 250px auto 30px auto">
                <div  style="display: flex;justify-content: center;"><img src="images/apsitlogo.png" height="80px" width="auto"></div>
            </div>
            <div class="row" style="text-align: center;"> <span style="letter-spacing: 2px;font-size: 23px;color: white;font-weight: bold">A. P. Shah Institute of Technology</span><br/><br/>
                <span style="letter-spacing: 2px;font-size: 23px;color: white;font-weight: bold">International Conference on Advances in Science,<br/> Technology and Engineering ( ICASTe-2018 )</span><br/>
            <!-- <div style="width: inherit;margin: auto;display: flex;align-items: center;justify-content: center;">
              <div  class="col-lg-5 col-xs-5" style="display: inline-block;"> <span style="letter-spacing: 1px;font-size: 18px;color: white;">SUBMIT A PROPOSAL</span></div>
              <div  class="col-lg-2 col-xs-2" style="display: inline-block;"><span style="color:white;font-size: 18px;">|</span></div>
              <div  class="col-lg-5 col-xs-5" style="display: inline-block;"><span style="letter-spacing: 1px;font-size: 18px;color: white;">SOMETHING</span></div></div>
            </div> -->

            <div align="center" style="margin-top: 70px">
              <div class="col-lg-6 col-xs-6"> <form action="submission_form.php"> <button type="submit" class="btn btn-primary btn-lg outline button_bg custom-btn">Paper Template</button> </form> </div>
              <div class="col-lg-6 col-xs-6"> <form action="register.php"> <button type="submit" class="btn btn-primary btn-lg outline button_bg custom-btn">Submit your Abstract</button> </form> </div>
            </div>
          </div>
      </div>
      </div>



<!--Main Information-->
        <div class="jumbotron maininfo" id="maininfo" style="background-color:#EBEBEB;color:#151515;">
          <span style="font-size: 30px;font-weight: bold"> <center> ICASTe-2018 </center></span><br><br><br>
            <div class="TextContainer" style="width:85%;margin-left:auto; margin-right:auto;">
                <div class="row">
                    
                    <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                        <p  class="text-content" style=" font-size:16px; line-height:35px; text-align: justify;"><span style="font-weight:bold;">About Conference</span><br/>International Conference on Advances in Science, Technology and Engineering ( ICASTe-2018 ) to be organised by the allied departments of A. P. Shah Institute of Technology, Thane in the college campus on 20th and 21st April 2018.
                        The broader objective of ICASTe-2018 is to provide a forum for students, faculty, industry and researchers to share their ideas, stimulate creativity, facilitate interdisciplinary development, motivate and inspire emerging talents.
                        The purpose of the conference is to bring together researcher from around the world who are interested in exploring new trends in the field of technology. 
                        </p><br>  
                    </div>
                    <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                        <p class="text-content" style=" font-size:16px; line-height:35px;text-align: justify;"><span style="font-weight:bold;">About College</span><br/>A. P. Shah Institute of Technology (APSIT) has started functioning with commitment of imparting state of art technical education so as to inculcate conceptual know-how, analyzing skills, decision making abilities and leadership qualities in the students. APSIT stands committed to the intellectual and moral growth of every student.
                        APSIT has experienced and proficient team which aspires to unlock the hidden potential in subconscious minds of students and to create competent Engineers with vision &amp; social commitment.
                        </p>
                    </div>
                    
                </div>
                 <div class="row">
                    
                    <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                        <p  class="text-content" style=" font-size:16px; line-height:35px; text-align: justify;"><span style="font-weight:bold;">Vision</span><br/>APSIT aspires to evolve as a renowned center for technological training and research.
                        </p><br>  
                    </div>
                    <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                        <p class="text-content" style=" font-size:16px; line-height:35px;text-align: justify;"><span style="font-weight:bold;">Mission</span><br/>APSIT endeavors to impart in-depth and authentic technical knowhow and to inculcate professional and human values in the budding minds of the aspirants.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
       
  <!--Main Information Ends--> 
             

<!--General Information-->
<div class="jumbotron maininfo" style="background-color:#149896;color:white;">
    <h2> <center> General Information </center></h2><br><br><br>
    <div class="TextContainer" style="width:85%;margin-left:auto; margin-right:auto;">
        <div class="row">
            <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                <p class="text-content" style=" font-size:18px; line-height:40px;color:white; text-align: justify;"><span style="font-weight:bold;">Objectives</span><br/>Strengthening collaboration among universities, research centers and industry exchanging and sharing professional skills among students, academicians, researchers and industry personnel. Addressing the current challenges faced by the industry. Providing an international forum for information dissemination and discussions on research and practices. Forum exchange with the various researchers.</p>
            </div>
            <div class="col-md-6" style="padding-right: 30px;padding-left: 30px">
                <p class="text-content" style=" font-size:18px; line-height:40px;color:white; text-align: justify;"><span style="font-weight:bold;">Scope &amp; benefits</span><br/>Skill &amp; entrepreneurship development facilitating business incubation services conducting frontier area research developing world class managerial talent promoting co-operation and networking provides the premier interdisciplinary and multidisciplinary forum for researchers, practitioners and educators to present and discuss the most recent innovations, trends and concerns, practical challenges encountered and the solutions adopted</p>
            </div>
        </div>
    </div>
</div>
             <!--General Information Ends-->
                         
     <!-- About Section -->
    <section id="schedule">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Schedule</h2>
                   <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="timeline">
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class=" img-circle img-responsive ratio" alt="" style="background-image: url(images/paper.png);">
                            </div>
                            <div id="animationrk" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Oct 4<sup>th</sup>,2017</h4>
                                    <h4 class="subheading">Start uploading of Abstract and Full Paper</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationag" class="timeline-panel" style="display: none;padding-bottom: 0px;">
                                    <div class="timeline-heading">
                                        <h4>Nov 20<sup>th</sup>,2017</h4>
                                        <h4 class="subheading">Last date of Abstract Submission</h4>
                                    </div>
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationap" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Dec 30<sup>th</sup>,2017</h4>
                                    <h4 class="subheading">Last date of Full length Paper Submission</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationhv" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Feb 10<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Acceptance of Notification</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationam" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Feb 20<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Early Bind Registration</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationsb" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Mar 01<sup>st</sup>,2018</h4>
                                    <h4 class="subheading">Last date of Registration</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li style="display:flex;">
                            <div class="timeline-image">
                                <img class="img-circle img-responsive ratio" style="background-image: url(images/paper.png);" alt="">
                            </div>
                            <div id="animationrs" class="timeline-panel" style="display: none;align-items: center;justify-content: center;padding-bottom: 0px;">
                                <div class="timeline-heading">
                                    <h4>Mar 05<sup>th</sup>,2018</h4>
                                    <h4 class="subheading">Camera ready copy</h4>
                                </div>
                                
                            </div>
                        </li>
                        <li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4>Be Part
                                    <br>Of Our
                                    <br>Story!</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
<!-- About us ends-->


<!--Call for paper STARTS-->

<section id="callforpapers"  class="bg-light-gray">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">CALL FOR PAPERS</h2><br><br>
                
            </div>
        </div>
        <div class="row call-row" style="display: flex;">
            <div class="col-lg-6" style="margin-bottom: 30px;display: flex;align-items: center;justify-content: center;">
                
                    <a href="IEEE_Conf_Paper_format.doc" class="custom-btn-width" style="width: 50%" download>
                        <button type="submit" class="btn btn-primary btn-lg outline button_bg"  style="width: 100%">Paper Template</button>
                    </a>
                
            </div>
            <div class="col-lg-6" style="margin-bottom: 30px;display: flex;align-items: center;justify-content: center;">
                <form action="submission_form.php" class="custom-btn-width" style="width: 50%">
                    <button type="submit" class="btn btn-primary btn-lg outline button_bg"  style="width: 100%">Submit your Abstract</button>
                </form>
            </div>
        </div>
        
</div>
<div class="container" style="margin-top: 100px"> 
            <a name="civilengg-tab"></a>
            <div id="civilengg" hidden="hidden">
                <div class="row mob-row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        CIVIL ENGINEERING
                    </div>
                    
                </div>
                <div class="row mob-row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                        <li class="domain-list">Structures and materials</li><hr>
                      <li class="domain-list">Earthquake Engineering</li><hr>
                      <li class="domain-list">Geotechnical Engineering</li><hr>
                      <li class="domain-list">Transportation Engineering</li><hr>
                      <li class="domain-list">Concrete Technology</li><hr>
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                                    <li class="domain-list">Water and Environmental Engineering</li><hr>
                      <li class="domain-list">Construction Management</li><hr>
                      <li class="domain-list">Sustainability and Green Structures</li><hr>
                      <li class="domain-list">Remote Sensing and GIS</li>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <a name="extcengg-tab"></a>
            <div id="extcengg" hidden="hidden">
                <div class="row mob-row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        EXTC ENGINEERING
                    </div>
                    
                </div>
                <div class="row mob-row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                
                              <li class="domain-list">Antenna and Wave Propagation </li><hr>
                              <li class="domain-list">Communication Electronics and Microwave </li><hr>
                              <li class="domain-list">Communication Network and Systems </li><hr>
                              <li class="domain-list">Computer Architecture</li><hr>
                              <li class="domain-list">Computer Network</li><hr>
                              <li class="domain-list">Computer Security</li><hr>
                              <li class="domain-list">Computer Security</li><hr>
                              <li class="domain-list">Dependable Computing</li><hr>
                              
                              <li class="domain-list">Digital Signal Processing</li><hr>
                              <li class="domain-list">Distributed Platform</li><hr>

                              <li class="domain-list">Electric Power Generation</li><hr>
                              <li class="domain-list">Electric Traction</li><hr>
                              <li class="domain-list">Electrical Engineering Materials</li><hr>
                              <li class="domain-list">Electrical Measurements</li><hr>
                              <li class="domain-list">Electromagnetic Compatibility</li><hr>
                              <li class="domain-list">Electronic Instrumentation Using CAD Tools</li><hr>
                              <li class="domain-list">Electronic Materials</li><hr>
                              <li class="domain-list">Embedded System</li><hr>


                              <li class="domain-list">High Performance Computing</li><hr>
                              <li class="domain-list">High Voltage Insulation Technologies</li><hr>
                              <li class="domain-list">Human—Computer Interaction</li><hr>
                              <li class="domain-list">Human-Machine Interface</li><hr>
                              <li class="domain-list">Information Theory and Coding</li><hr>
                              <li class="domain-list">Design and Implementation of Application Specific Integrated Circuits (ASIC)</li><hr>
                              
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                               <li class="domain-list">Intelligent Systems</li><hr>
                              <li class="domain-list">Microelectronic System</li><hr>
                              <li class="domain-list">Modulation and Signal Processing for Telecommunication</li><hr>
                              <li class="domain-list">Networking Technology</li><hr>
                              <li class="domain-list">Optical Communication Technology</li><hr>
                              <li class="domain-list">Parallel and Distributed Computer</li><hr>
                              <li class="domain-list">Performance Modeling</li><hr>
                              <li class="domain-list">Pervasive Computing</li><hr>
                              <li class="domain-list">Power Economic</li><hr>
                              <li class="domain-list">Power Electronics</li><hr>
                              <li class="domain-list">Power Quality</li><hr>
                              <li class="domain-list">Power System Analysis</li><hr>
                              <li class="domain-list">Radar Imaging</li><hr>
                              <li class="domain-list">Radio Communication</li><hr>
                              <li class="domain-list">Renewable Energy</li><hr>
                              <li class="domain-list">SCADA</li><hr>
                              <li class="domain-list">Security Network</li><hr>
                              <li class="domain-list">System-on-a-Chip (SoC)</li><hr>
                              <li class="domain-list">Telecommunication Engineering</li><hr>
                              <li class="domain-list">Telematics Services</li><hr>
                              <li class="domain-list">Transmission and Distribution</li><hr>
                              <li class="domain-list">Virtual/Augmented Reality</li><hr>
                              <li class="domain-list">VLSI Design-Network Traffic Modeling</li><hr>
                              <li class="domain-list">Wireless and Mobile Communications</li>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <a name="compitengg-tab"></a>
            <div id="compitengg" hidden="hidden">
                <div class="row mob-row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        COMPS &amp; IT ENGINEERING
                    </div>
                    
                </div>
                <div class="row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                               <li class="domain-list">Algorithms Performance Evaluation and Optimization.</li><hr> 
                      <li class="domain-list">Computer Architecture, VLSI and Embedded Systems </li><hr>
                      <li class="domain-list">Computer networks, network security and Data Communication</li><hr> 
                      <li class="domain-list">Computer Simulation and Vision</li><hr>
                      <li class="domain-list">Database, data mining and big data</li><hr>
                      <li class="domain-list">Distributed and Parallel Processing </li><hr>
                      
                      <li class="domain-list">E-commerce, E-governance, Internet and Web Applications </li><hr>
                      <li class="domain-list">High-performance and cloud computing</li><hr>
                      <li class="domain-list">Human Computer Interaction and Ubiquitous Computing</li><hr>
                      <li class="domain-list">Artificial Intelligence, Computational Intelligence, Virtual Reality &amp; Expert Systems </li><hr>
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                <li class="domain-list">Image Processing and Data Compression</li><hr>
                      <li class="domain-list">Information Systems &amp; Retrieval </li><hr>
                      <li class="domain-list">Mass network storage system, parallel storage system</li><hr>
                      <li class="domain-list">Wireless,  Ad hoc Networks and Sensors/actuators network</li><hr>
                      <li class="domain-list">Software Engineering</li><hr>
                      <li class="domain-list">Computer Graphics, Multimedia technology and application</li><hr>
                      <li class="domain-list">Natural Language Processing and Neural Networks </li><hr>
                      <li class="domain-list">Network computing and Mobile Computing</li><hr>
                      <li class="domain-list">Security &amp; Cryptography </li><hr>
                      <li class="domain-list">Theoretical Computer Science, Compilers and Interpreters </li>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <a name="handassci-tab"></a>
            <div id="handassci" hidden="hidden">
                <div class="row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        Humanities &amp; Applied Science
                    </div>
                    
                </div>
                <div class="row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                            <li class="domain-list">Physics</li><hr>
                      <li class="domain-list">Chemistry</li><hr>
                      <li class="domain-list">Environmental Science Applied Mathematics </li><hr>
                      <li class="domain-list">Quantitative Techniques</li><hr>
                      <li class="domain-list">Cryptography </li><hr>
                      <li class="domain-list">Coding theory</li><hr>
                      <li class="domain-list">Computational mathematics </li><hr>
                      <li class="domain-list">Mathematical  Modelling and simulation</li><hr>
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                <li class="domain-list">Numerical analysis</li><hr>
                      <li class="domain-list">Optimization</li><hr>
                      <li class="domain-list">Financial Mathematics</li><hr>
                      <li class="domain-list">Linear Algebra and Applications</li><hr>
                      <li class="domain-list">Industrial Mathematics</li><hr>
                      <li class="domain-list">Applications of Mathematics in Virtual Reality</li><hr>
                      <li class="domain-list">Statistics</li>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <a name="mechanicalengg-tab"></a>
            <div id="mechengg" hidden="hidden">
                <div class="row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        Mechanical ENGINEERING
                    </div>
                    
                </div>
                <div class="row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                <li class="domain-list">Quality management and tools.</li><hr>
                            <li class="domain-list">E- Manufacturing.</li><hr>
                            <li class="domain-list">Engineering economy and cost analysis.</li><hr>
                            <li class="domain-list">Sustainable manufacturing.</li><hr>
                            <li class="domain-list">Industrial Design and training.</li><hr>
                            <li class="domain-list">Supply Chain Management (SCM).</li><hr>
                            <li class="domain-list">Trends in Industrial Manufacturing.</li><hr>
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                            <li class="domain-list">Advance energy systems and management.</li><hr>
                            <li class="domain-list">Material and energy recovery.</li><hr>
                            <li class="domain-list">Process industries.</li><hr>
                            <li class="domain-list">Plant engineering and Maintenance.</li><hr>
                            <li class="domain-list">Fluid power system and technology.</li><hr>
                            <li class="domain-list">Risk Management.</li><hr>
                            <li class="domain-list">Electromechanical Engineering.</li>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
            <a name="interdisciplinary-tab"></a>
            <div id="inter" hidden="hidden">
                <div class="row" style="margin:100px 0px 0px 0px;">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2980b9;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;padding-bottom: 10px;padding-top: 10px;">
                        Interdisciplinary
                    </div>
                    
                </div>
                <div class="row" style="background-color: #3498db;margin: auto 0px;">
                    
                    <div class="col-lg-12" style="padding: 0px">
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                Lorem Ipsum<br/>
                            
                               Lorem Ipsum<br/>
                            
                               Lorem Ipsum<br/>
                            </div>
                        </div>
                        <div style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white;line-height: 50px">
                            <div class="col-lg-6 call-padding">
                                Lorem Ipsum<br/>
                            
                               Lorem Ipsum<br/>
                            
                               Lorem Ipsum<br/>
                            </div>
                        </div>
                        
                    </div>
                    
                </div>
            </div>
                

</div> 

            

            

<div class="container" style="margin-top: ">
    <div class="row">
        <div id="civil-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="0"> 
                <div class="com-blurb">
                    <img src="images/civil.png" style="padding:40px;" height="180px" width="180px">

                </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">Civil Engineering</h3>
        </div>
        <div id="extc-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="1">
                <div class="com-blurb">
                    <img src="images/Electronics.png" style="padding:40px;" height="180px" width="180px">
                </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">EXTC Engineering</h3>
        </div>
        <div id="compit-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="2">
                <div class="com-blurb">
                    <img src="images/CGIP.png" style="padding:40px;" height="180px" width="180px">
                </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">Comp &amp; IT Engineering</h3>
        </div>
    </div>
    <div class="row">
        <div id="handassci-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="3">
                <div class="com-blurb"><img src="images/H&amp;AS.png" style="padding:40px;" height="180px" width="180px">
            </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">Humanities &amp; Applied Science</h3>
        </div>
        <div id="mech-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="4">
                <div class="com-blurb"><img src="images/Mech.png" style="padding:40px;" height="180px" width="180px">
            </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">Mechanical Engineering</h3>
        </div>
        <div id="inter-btn" class="col-lg-4" style="margin-top: 50px;margin-bottom: 50px">
            <a href="#myCarousel" data-slide-to="5">
                <div class="com-blurb"><img src="images/Interdisciplinary.png" style="padding:40px;" height="180px" width="180px">
            </div>
            </a>
            <h3 style="color: black;padding-top: 20px;text-align: center;letter-spacing: 1px">Interdisciplinary</h3>
        </div>
    </div>
    
</div>



</section>

<!--Call for paper ENDS-->


 <!--Team Information-->
    <section id="teaminfo" style="background-color: white;">
        <div class="container-fluid" style="padding: 0px;">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Comittee</h2><br><br>
                    
                </div>
            </div>
            <div class="row">
                
                <div class="row" style="margin:100px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2c3e50;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;margin: 20px auto;padding-top: 20px;padding-bottom: 20px;">
                        INTERNATIONAL
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name">Dr. Jose Humberto Dias da Silva</div>
                                <div class="com-int-org">Brazil</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name">Dr. Jolanta Prywer</div>
                                <div class="com-int-org">Poland</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name">Dr. Kontanstinos Moutzouris</div>
                                <div class="com-int-org">Greece</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name">Dr. Ijeoma B. Anumaka</div>
                                <div class="com-int-org">Uganda</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name">Prof. Shiv Prasad Peddi</div>
                                <div class="com-int-org">Saudi Arabia</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-int-name">Mr. Manish Kumar Singh</div>
                                <div class="com-int-org">Johnson and Johnson (USA)</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-int-name">Mr. Ashish Yadav</div>
                                <div class="com-int-org">The Digital Group (USA)</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                
                <div class="row" style="margin:100px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2c3e50;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;margin: 20px auto;padding-top: 20px;padding-bottom: 20px;">
                        NATIONAL
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name">Dr. Varadraj Bapat</div>
                                <div class="com-nal-org">IIT Bombay</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. Mahesh Kolekar</div>
                                <div class="com-nal-org">IIT Bombay</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. B.K. Lande</div>
                                <div class="com-nal-org">NMIMS Mumbai</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name">Dr. Anil Nandgaokar</div>
                                <div class="com-nal-org">BATU</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. Udhav Bhosale</div>
                                <div class="com-nal-org">Rajiv Gandhi</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. D K Bodhe</div>
                                <div class="com-nal-org">P K Institute Pune</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name">Dr. Sirsagar</div>
                                <div class="com-nal-org">Nagpur University</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. Jai Bhatnagar</div>
                                <div class="com-nal-org">Manav Rachna University

Delhi</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. Sanjay Kherde</div>
                                <div class="com-nal-org">KGCE Amravati</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-nal-name">Dr. D.G. Wakade</div>
                                <div class="com-nal-org">P R Potte College of
Engineering Amravati</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Dr. Hemant Kothari</div>
                                <div class="com-nal-org">Paher Udaipur</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-nal-name">Prof. Sandip Bhale</div>
                                <div class="com-nal-org">Organization</div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="row">
                
                <div class="row" style="margin:100px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2c3e50;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;margin: 20px auto;padding-top: 20px;padding-bottom: 20px;">
                        TECHNICAL
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name">Dr. Kivlekar</div>
                                <div class="com-tech-org">BATU</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. B R Patil</div>
                                <div class="com-tech-org">Vishawaniketan College</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. R.B. Ghongade</div>
                                <div class="com-tech-org">Bhartiya Vidyapeeth</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name">Dr. Khandpekar</div>
                                <div class="com-tech-org">Birla College</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. Madhukar Langre</div>
                                <div class="com-tech-org">Kokan Gyanpeeth</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. Rashmi Chaughale</div>
                                <div class="com-tech-org">S G Godhavat Kolhapur</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name">Dr. Ulhas Shivurkar</div>
                                <div class="com-tech-org">Devgiri College of Engineering</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. M S Kurhade</div>
                                <div class="com-tech-org">DTSS Mumbai</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Dr. Uday Pandit Khot</div>
                                <div class="com-tech-org">SFIT Mumbai</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name">Mr. Sachin Chawan</div>
                                <div class="com-tech-org">ONGC</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Mr. Sandip Kuprekar</div>
                                <div class="com-tech-org">Industrialist</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-tech-name">Mrs. Sandhya Pandey</div>
                                <div class="com-tech-org">Industrialist</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-tech-name">Dr. B N Jagdale</div>
                                <div class="com-tech-org">Organization</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                
                <div class="row" style="margin:100px 0px 50px 0px;width: 100%">
                    
                    <div class="col-lg-12 col-xs-12" style="background-color: #2c3e50;font-size: 30px;color: white;letter-spacing: 2px;text-align: center;margin: 20px auto;padding-top: 20px;padding-bottom: 20px;">
                        ORGANIZING
                    </div>
                    
                </div>
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. Rahul Ambekar</div>
                                <div class="com-org-org">Organizing Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Vaibhav Narawade</div>
                                <div class="com-org-org">Organizing Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Jay Mehta</div>
                                <div class="com-org-org">Organizing Chair</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. Amol Shinde</div>
                                <div class="com-org-org">Organizing Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. A M Deshpande</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Sachin Malawe</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. Kiran Deshpnade</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Dilip Kunte</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Pooja Rao</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. Shivshankar Kore</div>
                                <div class="com-org-org">Technical Program Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Sangram Savargave</div>
                                <div class="com-org-org">Publication Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Ganesh Gourshetye</div>
                                <div class="com-org-org">Publication Chair</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. N.R. Chindarkar</div>
                                <div class="com-org-org">Publicity Chair</div>
                            </div>
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. M.G. Gadale</div>
                                <div class="com-org-org">Publicity Chair</div>
                            </div>
                       
                            <div class="col-lg-4 com-padding">
                               <div class="com-org-name">Prof. Mayuri Jain</div>
                                <div class="com-org-org">Website &amp; Content Development</div>
                            </div>
                        </div>
                        <div class="row" style="text-align: center;font-size: 24px;letter-spacing: 1px;color: white">
                            <div class="col-lg-4 com-padding">
                                <div class="com-org-name">Prof. Brinal Colaco</div>
                                <div class="com-org-org">Website &amp; Content Development</div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-lg-offset-2 text-center">
                    <p class="large text-muted"></p>
                </div>
            </div>
        </div>
    </section>

 <!--Team Information Ends-->



    <!-- Venue Details Starts -->

  
    <section id="venue" style="padding-bottom: 0px;background-color: white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Venue</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.3326484100703!2d72.9652036144368!3d19.267895050920608!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7bba2e15f6c7b%3A0x20e1357d640bef7e!2sA.+P.+Shah+Institute+of+Technology!5e0!3m2!1sen!2sin!4v1505903976451" width="100%" height="350px" frameborder="0" style="border-bottom-left-radius:15px;border-bottom-right-radius: 15px;" allowfullscreen></iframe>
           
         </div>



    </section>
    <!-- <div id="googlemaps" ></div>
            <div id="contactform">
              <! You can even embed a Google Form here 
            </div>-->

    <!-- Venue Details Ends -->
             
    <!-- Contact Form Starts -->
    <section id="contact"  style="background-color:#44ACDF;color:white;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="Memail" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="Mphone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div><br><br><br>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" style="background-color: #1C6CD8;">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Form Ends-->

    

<!--Footer-->
          <div id="footer" class="text-content"><br>
          		 <br><br>
                <a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/in/" style="background-color:#3BBAF8; border-radius:50%;">
    				<span class="fa fa-linkedin"></span>
  				</a>
                <a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/" style="background-color:#3BBAF8;border-radius:50%;">
    				<span class="fa fa-facebook"></span>
  				</a>
  				<a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/" style="background-color:#3BBAF8;border-radius:50%;">
    				<span class="fa fa-instagram"></span>
  				</a>
                <br> <br> <br>
          </div>
          <!--Footer Ends-->

    <div class="scroll-top">
        <a href="#page-top" class=" scroll-top-icon"><span class="glyphicon glyphicon-menu-up"></span></a>
    </div>

</body>
</html>
