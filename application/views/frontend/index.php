<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reliance Digital Forum | Home</title>
    <link rel="shortcut icon" href="">
   
        <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js" type="text/javascript"></script>
    <![endif]-->
    <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("frontend")."/" ?>css/ie9.css" />
<![endif]-->

<!--
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
-->
        <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap-theme.min.css">

    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/style.css">

    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slider.css">

     <link href="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/mobile.css">

   <script src="<?php echo base_url("frontend")."/" ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.js"></script>

    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!--    <script src="<?php echo base_url("frontend")."/" ?>js/script.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/modernizr.custom.53451.js"></script>
<!--    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>-->
<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>-->
   
</head>

<body>
    <div class="preloader">
       <img class="pre-set"src="<?php echo base_url("frontend")."/" ?>images/bx_loader.gif">
   </div>
     
            <div class="mobile-menu hidden-md hidden-lg">
                <ul id="menu">
                    <li><a href="<?php echo site_url("website/index"); ?>">Home</a></li>
                    <li class="avtives">Digital Events
                        <ul>
                           <?php foreach($eventmenu as $event) { ?>
                            <li><a href="<?php echo site_url("website/event")."?id=".$event->id; ?>"><?php echo $event->name; ?></a>
                            </li>
                            <?php }; ?>
                        </ul>
                    </li>
                    <li><a href="<?php echo site_url("website/photogallery"); ?>">photo gallery</a>
                    </li>
                        <li><a href="<?php echo site_url("website/videogallery"); ?>">video gallery</a></li>
<!--                        <li><a href="#">comment scribbles</a></li>-->
                </ul>

            </div>
  

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home-logo">
                   <a href="<?php echo site_url("website/index"); ?>"> <img src="<?php echo base_url("frontend")."/" ?>images/logo.png" class=""></a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="home-soci">
                    <a href="http://www.facebook.com/pages/Reliance-Digital/123437217685421" target="_blank"><i class="fa fa-facebook-official"></i></a>
                    <a href="http://www.twitter.com/reliancedigital"><i class="fa fa-twitter"  target="_blank"></i></a>
                    <a href="https://plus.google.com/116542364512862317573"  target="_blank"><i class="fa fa-google-plus"></i></a>
                    <a href="https://in.linkedin.com/pub/reliance-digital/35/1b9/721"  target="_blank"><i class="fa fa-linkedin-square"></i></a>
                    <a href="www.reliancedigital.in"><img src="<?php echo base_url("frontend")."/" ?>images/reliance.png">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="set-head">
                <div class="col-md-8">
                    <div class="home-menu">

                        <ul>
                            <li>
                                <a href='<?php echo site_url("website/index"); ?>' class="actives"><img src="<?php echo base_url("frontend")."/" ?>images/home-menu.png">
                                    <br><span>HOME</span>
                                </a>
                            </li>
                            <li class='has-sub'>
                                <a href='#'><img src="<?php echo base_url("frontend")."/" ?>images/calendar.png">
                                    <br><span>DIGITAL <br>EVENTS</span>
                                </a>
                                <ul>
                                   <?php foreach($eventmenu as $event) { ?>
                                    <li class='has-sub'><a href='<?php echo site_url("website/event")."?id=".$event->id; ?>'><span><?php echo $event->name; ?></span></a>
                                    </li>
                                    <?php }; ?>
                                </ul>
                            </li>
                            <li>
                                <a href='<?php echo site_url("website/photogallery"); ?>'><img src="<?php echo base_url("frontend")."/" ?>images/camera.png">
                                    <br><span>photo<br> gallery</span>
                                </a>
                            </li>
                            <li>
                                <a href='<?php echo site_url("website/videogallery"); ?>'><img src="<?php echo base_url("frontend")."/" ?>images/video.png">
                                    <br><span>video<br> gallery</span>
                                </a>
                            </li>
                            <li class='last'>
<!--
                                <a href='#'><img src="<?php echo base_url("frontend")."/" ?>images/note.png">
                                    <br><span>comment <br>scribbles</span>
                                </a>
-->
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="head-img">
                        <img src="<?php echo base_url("frontend")."/" ?>images/1000.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background:#a7a9ac;">
            <div class="">
                <div class="col-md-9 mid-left">
                    <div class="mid-cont">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="midd-img">

                                        <div class="col-md-6">
                                            <img style="padding-top: 18px;"src="<?php echo base_url("frontend")."/" ?>images/left-cont.png" class="img-responsive">
                                        </div>
                                        <div class="col-md-6">
                                           <div class="dis-set">
                                               <h6>MAKING TECHNOLOGY ACCESSIBLE TO EVERY INDIAN</h6>
                                               <p>We started with just one store, and today are 1000 stores strong with a presence across more than 130 cities. We are by far the largest CDIT retailer in India. We now service more than 30 million customers per year with resQ installations exceeding one million per year. </p>
                                               <p>In the spirit of our founder, our exuberance to break new boundaries is inexhaustible. A new era awaits us where we can create a truly digital India that stands out from the rest of the world where we will personalize technology and become the trusted expert that every Indian needs to bring technology to their life.</p>
                                               <h6>Brian Bade, CEO, Reliance Digital</h6>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="mid-right">
                    <h3>share your feedback</h3>
                    <div class="left-form">
                        <select class="clas salut salutation">
                           <?php foreach($salutations as $salut) { ?>
                            <option value="<?php echo $salut->id; ?>"><?php echo $salut->name; ?></option>
                            <?php }; ?>

                        </select>
                        
                        <br>
                        <form class="firstform" action="#" method="POST"  >
                        <input class="fname userfirstname" required type="text" placeholder="FIRST NAME *">
                        <input class="mname" type="text" required placeholder="MIDDLE NAME">
                        <input class="lname" type="text" required placeholder="LAST NAME *">
                        <p><sup>*</sup>INDICATES A REQUIRED FIELD.</p>
                        <div class="left-btn text-center">
                        <!--<a class="fancy" href="#resp" rel="gallery"></a>-->
                        <button class="enter" id="enterr">ENTER</button>
                            <!--</form>--></div>
<!--                            <div id="response"></div>-->
                        </form>
                        <div style="display: none;color: #4D4D4D;padding: 15px;text-align: center;background: rgb(253, 253, 253);font-family: open sans;" id="resp">Your feedback is appreciated</div>
                        
                        <div class="set-form" >
                            <form class="left-form innerform">
                                   <img class="ss-img" src="<?php echo base_url("frontend")."/" ?>images/close.png">
                                    <h2>hi <span class="userfirstname2">shalini</span>,</h2> 
                                    <div class="formbeforethankyou">
                                    <h4>we look forward to your feedback..</h4> 

                        
                        <input class="designation" type="text" name="fname" placeholder="DESIGNATION" >
                        <input class="organization" type="text" name="mname" placeholder="ORGANIZATION">
                        <input class="email" type="email" name="lname" placeholder="EMAIL ID">
                        <textarea class="comments" style="margin-top:10px;" rows="4" cols="50" placeholder="COMMENTS / FEEDBACK"></textarea>
                        <p><sup>*</sup>INDICATES A REQUIRED FIELD.</p>
                        <div class="left-btns text-center">
                        <a class="fancybox1" href="#resp" rel="gallery"></a>
                        <button type="submit"  class="feedbacksend">SUBMIT</button>
                           </div>
                            
<!--<div id="response"></div>-->
                        </div>
                            <div class="thn">
                                <h5 style="font-weight:bold;padding-bottom:20px;"> Thank you for sharing your feedback.</h5>
                            </div>
                            </form>
                           
                        </div>
                        <script>
                            function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
};
                            
                            var firstname= '';
                            var middlename='';
                            var lastname='';
                            var designation= '';
                            var organization='';
                            var email='';
                            var comments = '';
                            
                            $(document).ready(function () {
                                    firstname= '';
                                        middlename='';
                                        lastname='';
                                designation= '';
                                        organization='';
                                        email='';
                                comments = '';
                                id = 0;
                                
                                $(".set-form").hide();
                                $(".thn").hide();
                                
                                var showresult = function()
                                {
                                    
                                        $(".userfirstname2").text(firstname);
                                        $(".set-form").show();
                                };
                                
                                $("#enterr").click(function() {
                                    salutation=$(".salutation").val();
                                    firstname=$(".fname").val();
                                    middlename=$(".mname").val();
                                    lastname=$(".lname").val();
                                    if(firstname!='' && middlename!='' && lastname!='')
                                    {
                                        
                                        $.getJSON("<?php echo site_url("website/sendfeedback"); ?>",{salut:salutation, fname:firstname, mname:middlename, lname:lastname},function(data) {
                            console.log(data);
                                            id = data;
                            showresult(data);
                                           
                        }); 
                                          
                                        return false;
                                    };
                                     
                                    
                                });
                                $(".ss-img").click(function() {
                                    $(".set-form").hide();
                                    $(".formbeforethankyou").show();
                                    $(".thn").hide();
                                });
                                
                                var feedbackresult = function()
                                {
                                    $(".formbeforethankyou").hide();
                                    $(".thn").show();
                                    $(".designation").val('');
                                    $(".organization").val('');
                                    $(".email").val('');
                                    $(".comments").val('');
                                    
                                        $(".fname").val('');
                                        $(".mname").val('');
                                        $(".lname").val('');
                                };
                                
                                $(".feedbacksend").click(function(evt) {
                                    designation  = $(".designation").val();
                                    email = $(".email").val();
                                    organization = $(".organization").val();
                                    comments = $(".comments").val();
                                    
                                    if($(".innerform")[0].checkValidity() === false) {
                                      return true;
                                    }

                                    evt.preventDefault();
                                    //$(".set-form").hide();
                                    feedbackresult();
                                    $.getJSON("<?php echo site_url("website/sendfeedbackdetails"); ?>",{id:id,designation:designation, organization:organization, email:email, comments:comments},function(data) {
                            console.log(data);
                            
                                           
                        }); 
                                    
                                    
                                    //$( ".fancybox1" ).trigger( "click" );
                                });
        });
                    </script>
                        
            <script>
            
            var salutation = 1;
            var fname="";
            var mname="";
            var lname="";
            //var location = location.protocol+'//'+location.host+'/reliance/uploads/';
            $(document).ready(function() {
                
                /*function showresult(data) {
                    //var location = ''+location.protocol+'//'+location.host+'/reliance/uploads/';
//                    $("#response").html('<p style="color: rgb(9, 9, 9);font-weight: bolder;background: white;padding: 6px 6px 12px 13px;text-align: center;font-family: open sans;border-radius: 4px;">Your feedback is appreciated</p>');
                    //$( ".fancybox1" ).trigger( "click" );
                    
                };
                
                
                function submit(){
                    
                    console.log("submit");
                        $.getJSON("<?php echo site_url("website/sendfeedback"); ?>",{salut:salutation, fname:fname, mname:mname, lname:lname},function(data) {
                            console.log(data);
                            showresult(data);
                        });   
                };*/
//                $(".enter").click(function () {
//                    console.log("clicked");
//                    salutation = $(".salut").val();
//                    fname=$(".fname").val();
//                    mname=$(".mname").val();
//                    lname=$(".lname").val();
//                    if(fname != "")
//                    {
//                    submit();
//                    };
//                });
                
                
            });
        </script>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6" style="background: #bcbec0;height: 324px;">
                <div class="img-slid">
                    <div class="row">
                        <div class="img-left">
                            <div class="col-md-4" style="border-right:2px solid #a2a4a7;">
                                <h2>photo gallery</h2>
                            </div>
                            <div class="col-md-8">
                                <p class="text-center">
                                    It is great to see everybody from consumer electronics and IT get together. Catch the photos from the 1000 stores celebration event. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pht-slider">
                    <section id="dg-container" class="dg-container">
                        <nav>
                            <span class="dg-prev">&lt;</span>
                            <span class="dg-next">&gt;</span>
                        </nav>
                        <div class="dg-wrapper">
                              
                            <?php foreach($indexphotos as $photo) { ?>
                             <a class="fancybox img-responsive" rel="group" href="<?php echo base_url("uploads")."/".$photo->image; ?>"><img src="<?php echo base_url("uploads")."/".$photo->image; ?>" alt="image02" class="img-responsive">

                            </a>
                            <?php }; ?>
                           

                        </div>

                    </section>
                </div>
            </div>
          <div class="col-md-6 mob"
                <div class="vid-slid">
                    <div class="img-slid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-left">
                                    <div class="col-md-4" style="border-right:2px solid #a2a4a7;">
                                        <h2>video gallery</h2>
                                    </div>
                                    <div class="col-md-8">
                                       
                                        <p class="ap">
                                            See what the leaders from the CDIT industry have to say.</p>
                                            <p class="pp">
                                             Views from those who matter. 

                                      </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">

                            <div class="col-md-6">
                                <div class="events-img text-center">
                                    <img src="<?php echo base_url("frontend")."/" ?>images/award.png" class="img-responsive" usemap="#map">
<!--
                                    <map name="map">
  <area shape="circle" coords="32,150,100"  class="vidmap" href="#video1">
  <area shape="circle" coords="80,30,99,93" class="vidmap" href="#video2">
  <area shape="circle" coords="226,102,192,167" class="vidmap" href="#video3">
</map>
-->
                                    <a href="<?php echo site_url("website/videogallery"); ?>">
                                        <button type="submit">CLICK HERE</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vid-right">
                                    
<!--                                        <source src="https://www.youtube.com/watch?v=PuvZx5PUP10" type="video/mp4">-->
<iframe width="100%" class="vid1" height="170" src="https://www.youtube.com/embed/PuvZx5PUP10" frameborder="0" allowfullscreen ></iframe>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/bootstrap.min.js"></script>
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.gallery.js"></script>
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.slicknav.js"></script>
     
            <script>
    	$(window).load(function() { $(".preloader").hide(); });
    </script>
     
      <script>
    $(".fancybox1").fancybox({
        width	: 300,
				height	: 300,
    openEffect: 'none',
    closeEffect: 'none',
    nextEffect: 'none',
    prevEffect: 'none',
    nextSpeed: 0,
    prevSpeed: 0,
    preload: 3,
    padding: 15
    // 'speedIn'     :   0, // not a valid option for v2.x
    //'speedOut'    :   0, // not a valid option for v2.x
    //'overlayShow' :   true // not a valid option for v2.x
});
    
    </script>
       
        <script>
             function msieversion() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
            return true;
        else                 // If another browser, return 0
            return false;

   return false;
}
            
            
        $(document).ready(function () {
            
           if(  msieversion() )
           {
               $(".dis-set p").css("font-size","10px");
               $(".left-form select").css("background","#888888");
               $(".left-form").css("content","none");
               $(".left-form input[type=text]").css("background","#888888");
               $(".set-form textarea").css("background","#888888");
               
           }
            
            
                    $(".fancybox").fancybox({
                       
                    
                        openEffect: 'elastic',
                        closeEffect: 'elastic',
                        
                    });
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#dg-container').gallery();
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu').slicknav();
        });
    </script>
</body>

</html>