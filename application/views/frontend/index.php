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
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

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
    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
   
</head>

<body>
   
     
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
                   <a href="<?php echo site_url("website/index"); ?>"> <img src="<?php echo base_url("frontend")."/" ?>images/logo.png" class="img-responsive"></a>
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
                                               <p>We started with just one store, and today are 1000 stores strong with a presence across more than 130 cities. We are by far the largest CDIT retailer in India. We now service more than 30 million customers per year with resQ installations exceeding one million per year. I can assure you that no CDIT retailer in the world has ever grown so fast and dominated a market so completely in such a short time. </p>
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
                    <h3>share a feedback</h3>
                    <div class="left-form">
                        <select class="clas salut">
                           <?php foreach($salutations as $salut) { ?>
                            <option value="<?php echo $salut->id; ?>"><?php echo $salut->name; ?></option>
                            <?php }; ?>

                        </select>
                        
                        <br>
                        <form action="#" class="firstform">
                        <input class="fname userfirstname" required type="text" name="fname" placeholder="FIRST NAME *">
                        <input class="mname" type="text" required name="mname" placeholder="MIDDLE NAME *">
                        <input class="lname" type="text" required name="lname" placeholder="LAST NAME *">
                        <p><sup>*</sup>INDICATES A REQUIRED FEILD.</p>
                        <div class="left-btn text-center">
                        <a class="" href="#resp" rel="gallery"></a>
                        <button type="submit" class="enter" id="enterr">ENTER</button>
                        </form>
<!--                            <div id="response"></div>-->
                        </div>
                        <div style="display: none;color: #4D4D4D;padding: 15px;text-align: center;background: rgb(253, 253, 253);font-family: open sans;" id="resp">Your feedback is appreciated</div>
                        
                        <div class="set-form" >
                            <div class="left-form">
                                   <img class="ss-img" src="<?php echo base_url("frontend")."/" ?>images/close.png">
                                    <h2>hi <span class="userfirstname2">shalini</span>,</h2> 
                                    <h4>we look forward to your feedback..</h4> 

                        
                        <input class="fname" type="text" name="fname" placeholder="DESIGNATION" >
                        <input class="mname" type="text" name="mname" placeholder="ORGANIZATION">
                        <input class="lname" type="text" name="lname" placeholder="EMAIL ID">
                        <textarea style="margin-top:10px;" rows="4" cols="50" placeholder="COMMENTS / FEEDBACK"></textarea>
                        <p><sup>*</sup>INDICATES A REQUIRED FEILD.</p>
                        <div class="left-btns text-center">
                        
                        <button type="button"  class="enter">SUBMIT</button>
<!--                            <div id="response"></div>-->
                        </div>
                            </div>
                        </div>
                        <script>
                            $(document).ready(function () {
                                $(".set-form").hide();
                                $("#enterr").click(function() {
                                    var firstname=$(".firstform .fname").val();
                                    var middlename=$(".firstform .mname").val();
                                    var lastname=$(".firstform .lname").val();
                                    if(firstname!='' && middlename!='' && lastname!='')
                                    {
                                        $(".userfirstname2").text(firstname);
                                        $(".set-form").show();
                                    }
                                    
                                });
                                 $(".ss-img").click(function() {
                                $(".set-form").hide();
                                });
        });
                    </script>
                        
            <script>
            
            var salutation = 0;
            var fname="";
            var mname="";
            var lname="";
            //var location = location.protocol+'//'+location.host+'/reliance/uploads/';
            $(document).ready(function() {
                
                function showresult(data) {
                    //var location = ''+location.protocol+'//'+location.host+'/reliance/uploads/';
//                    $("#response").html('<p style="color: rgb(9, 9, 9);font-weight: bolder;background: white;padding: 6px 6px 12px 13px;text-align: center;font-family: open sans;border-radius: 4px;">Your feedback is appreciated</p>');
                    $( ".fancybox1" ).trigger( "click" );
                    
                };
                
                
                function submit(){
                    
                    console.log("submit");
                        $.getJSON("<?php echo site_url("website/sendfeedback"); ?>",{salut:salutation, fname:fname, mname:mname, lname:lname},function(data) {
                            console.log(data);
                            showresult(data);
                        });   
                };
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
          <div class="col-md-6" style="background: #f2f0ee;height: 324px;">
                <div class="vid-slid">
                    <div class="img-slid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="img-left">
                                    <div class="col-md-4" style="border-right:2px solid #a2a4a7;">
                                        <h2>video gallery</h2>
                                    </div>
                                    <div class="col-md-8">
                                       
                                        <p>
                                            See what the leaders from the CDIT industry have to say.</p>
                                            <p style="padding-left:20%;
float: none;">
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
                                    <img src="<?php echo base_url("frontend")."/" ?>images/award.png" class="img-responsive">
                                    <a href="<?php echo site_url("website/videogallery"); ?>">
                                        <button type="submit">CLICK HERE</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="vid-right">
                                    
<!--                                        <source src="https://www.youtube.com/watch?v=PuvZx5PUP10" type="video/mp4">-->
<iframe width="100%" height="170" src="https://www.youtube.com/embed/PuvZx5PUP10" frameborder="0" allowfullscreen></iframe>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.gallery.js"></script>
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.slicknav.js"></script>
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
        $(document).ready(function () {
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