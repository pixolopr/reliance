<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reliance Digital Forum  | Digital Events</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap.css">
<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">-->
 
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/mobile.css">
<!--    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/flexslider.css">-->
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/jquery.bxslider.css">
         <link href="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.css" rel="stylesheet" type="text/css">
    

    <link type='text/css' rel='stylesheet' href='<?php echo base_url("frontend")."/" ?>css/liquidcarousel.css' />

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--    <script src="<?php echo base_url("frontend")."/" ?>js/script.js"></script>-->
<!--
  <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/font-awesome.min.css">
-->
<!--
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap-theme.min.css">
-->
    <script src="<?php echo base_url("frontend")."/" ?>js/jquery-2.1.3.min.js"></script>
        <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<!--    <script src="sliderengine/jquery.js"></script>-->
<!--    <script src="sliderengine/amazingslider.js"></script>-->
<!--    <link rel="stylesheet" type="text/css" href="sliderengine/amazingslider-1.css">-->
<!--    <script src="sliderengine/initslider-1.js"></script>-->
<!--    <script src="<?php echo base_url("frontend")."/" ?>js/jquery.flexslider-min.js"></script>-->
    <script src="<?php echo base_url("frontend")."/" ?>js/jquery.bxslider.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>js/jquery.fitvids.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>js/jquery.liquidcarousel.js"></script>
    
    

    
       <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
        
      <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slicknav.css">
      
<!--      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>-->
    


    <style>
        .carousel-inner > .item > img,
        .carousel-inner > .item > a > img {
            width: 70%;
            margin: auto;
        }
    </style>
    	<script type="text/javascript">
	
		$(document).ready(function() {
			$('#liquid1').liquidcarousel({height:90, duration:600, hidearrows:false});
		});

	</script>
 <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url("frontend")."/" ?>css/ie9.css" />
<![endif]-->
    
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
                      <a href="<?php echo site_url("website/index"); ?>"> <img src="<?php echo base_url("frontend")."/" ?>images/logo.png"></a>
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
                                <a href='<?php echo site_url("website/index"); ?>' ><img src="<?php echo base_url("frontend")."/" ?>images/home-menu.png">
                                    <br><span>HOME</span>
                                </a>
                            </li>
                            <li class='has-sub'>
                                <a href='#'class="actives"><img src="<?php echo base_url("frontend")."/" ?>images/calendar.png">
                                    <br><span>DIGITAL <br>EVENTS</span>
                                </a>
                                <ul>
                                    <?php foreach($eventmenu as $event) { ?>
                                    <li class='has-sub'><a href="<?php echo site_url("website/event")."?id=".$event->id; ?>"><span><?php echo $event->name; ?></span></a>
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
        <div class="row">
            <div class="col-md-4">
                <div class="set-event text-center">
                    <img class="eve-img" src="<?php echo base_url("uploads")."/".$eventdata->image; ?>">

                    <div class="mid-event">
                        <img src="<?php echo base_url("frontend")."/" ?>images/cale.png">
                        <p style="text-decoration:underline;"> date</p>
                        <p><?php echo $eventdata->date; ?></p>
                    </div>
                    <div class="loc-mid">
                        <img src="<?php echo base_url("frontend")."/" ?>images/location.png">
                        <p style="text-decoration:underline;">held at</p>
                        <p><?php echo $eventdata->venue; ?></p>
                    </div>
                    <div class="not-mid">
                        <img src="<?php echo base_url("frontend")."/" ?>images/notes.png">
                        <p>description</p>
                    </div>
                    <div class="eve-det">
                        <p><?php echo $eventdata->description; ?> </p>
                    </div>
                </div>

            </div>
            <div class="col-md-8">
                <div class="right-eve text-center">
                    <div class="row">
                        <div class="col-md-6" style="border-right:2px solid #a2a4a7;margin-top:15px;">
                            <div class="eve-head pull-right">
                                <h2>photo gallery</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-desc pull-left">
                                <p>view photos from the events</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                   <div class="col-md-1"></div>
                    <div class="col-md-10" style="border-bottom: 1px solid #a2a4a7;
padding-bottom: 10px;">

<div id="liquid1" class="liquid">
	<span class="previous"></span>
	<div class="wrapper">
		<ul>
		<?php foreach($eventphotos as $eventphoto) { ?>
			<li><a class="fancybox img-responsive"  rel="gallery1" href="<?php echo base_url("uploads")."/".$eventphoto->image; ?>" title="<?php echo $eventphoto->name; ?>"><img src="<?php echo base_url("uploads")."/".$eventphoto->image ?>" width="126" height="126" alt="<?php echo $eventphoto->name; ?>" border="0" /></a></li>
       <?php }; ?>
        </ul>
	</div>
	<span class="next"></span>
</div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
                <div class="text-center">
                    <div class="row">
                        <div class="col-md-6" style="border-right:2px solid #a2a4a7;margin-top:15px;">
                            <div class="eve-head pull-right">
                                <h2>video gallery</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="right-desc pull-left">
                                <p>view videos from the events</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                       <div class="right-slic">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                                <li data-target="#myCarousel" data-slide-to="3"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <iframe src="<?php echo "https://www.youtube.com/embed/".$eventvideos[0]->url; ?>" width="550" height="250" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                <?php for($i=1;$i<count($eventvideos);$i++) { ?>
                                <div class="item">
                                    <iframe src="<?php echo "https://www.youtube.com/embed/".$eventvideos[$i]->url; ?>" width="550" height="250" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                                </div>
                                <?php }; ?>


                                <!-- Left and right controls -->
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <img src="<?php echo base_url("frontend")."/" ?>images/left-event.png">
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <img src="<?php echo base_url("frontend")."/" ?>images/right-event.png">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
<!--
            <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
           
-->
                <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.gallery.js"></script>
       <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.slicknav.js"></script>
       
           <script>
                            function msieversion() {

        var ua = window.navigator.userAgent;
        var msie = ua.indexOf("MSIE ");

        if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer, return version number
            return true;
        else                 // If another browser, return 0
            return false;

   return false;
}`  
          if(  msieversion() )
           {
               $(".carousel-control").css("background-image","none");
             
               
           }
               
               
        $(document).ready(function () {
              $(".fancybox").fancybox({
 openEffect	: 'none',
		closeEffect	: 'none'
 
});
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('#menu').slicknav();
        });
    </script>
            <script>
                $('.bxslider').bxSlider({
                    video: true,
                    useCSS: false
                });
            </script>
</body>

</html>