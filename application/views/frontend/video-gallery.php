<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reliance Digital Forum  | video Gallery</title>
    <link rel="shortcut icon" href="">
            <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/mobile.css">
    <!--    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/pgwslider.css">-->

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--    <script src="<?php echo base_url("frontend")."/" ?>js/script.js"></script>-->

    <script src="<?php echo base_url("frontend")."/" ?>js/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <!--    <script src="sliderengine/jquery.js"></script>-->
    <script src="<?php echo base_url("frontend")."/" ?>sliderengine/amazingslider.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("frontend")."/" ?>sliderengine/amazingslider-1.css">
    <script src="<?php echo base_url("frontend")."/" ?>sliderengine/initslider-1.js"></script>


    <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slicknav.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

    <!--    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/modernizr.custom.53451.js"></script>-->
 



</head>

<body>
  <div class="preloader">
       <img class="pre-set"src="<?php echo base_url("frontend")."/" ?>images/bx_loader.gif">
   </div>

    <div class="mobile-menu hidden-md hidden-lg">
        <ul id="menu">
            <li><a href="<?php echo site_url("website/index"); ?>">Home</a>
            </li>
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
            <li><a href="<?php echo site_url("website/videogallery"); ?>">video gallery</a>
            </li>
<!--
            <li><a href="#">comment scribbles</a>
            </li>
-->
        </ul>

    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="home-logo">
                    <a href="<?php echo site_url("website/index"); ?>"> <img src="<?php echo base_url("frontend")."/" ?>images/logo.png">
                    </a>
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
                                <a href='<?php echo site_url("website/index"); ?>'><img src="<?php echo base_url("frontend")."/" ?>images/home-menu.png">
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
                                <a href='<?php echo site_url("website/videogallery"); ?>' class="actives"><img src="<?php echo base_url("frontend")."/" ?>images/video.png">
                                    <br><span>video<br> gallery</span>
                                </a>
                            </li>
                            <li class='last'>
<!--
                                <a href='#'><img src="images/note.png">
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
            <div class="pic-cont">
                <div class="col-md-6" style="border-right:2px solid #a2a4a7;">
                    <div class="pic-head">
                        <h2>video gallery</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic-det dets pull-left">
                        <p>See what the leaders from the CDIT have to say.</p><br>
                        <p style="text-align: center;
float: none;line-height:0">Views from those who matter.</p>
<!--                        <p style="float: none;text-align: center;">view from those who matter.</p>-->
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pic-con">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="pic-select text-center">
                            <h3>select a video</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pic-set">
                            <select class="videoalbumselect">
                                <option value="0">View All Videos</option>
                                <?php foreach($videoalbums as $videoalbum) { ?>
                                <option value="<?php echo $videoalbum->id; ?>"><?php echo $videoalbum->name; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom:40px;">
            <div class="gallert-sets">
                <div class="col-md-12">
                    <div class="vid-set text-center">

                        <div id="amazingslider-wrapper-1" style="display:block;position:relative;max-width:746px;padding-left:0px; padding-right:83px;margin:0px auto 0px;">
                            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                <ul class="amazingslider-slides addvids" style="display:none;">
                                   
                                    <li>
                                        <img src="<?php echo base_url("frontend")."/" ?>images/tmeOjFno6Do.jpg" alt="The Lighter Side - Reliance Digital 1000 Store Celebration" />
                                        <video preload="none" src="http://www.youtube.com/embed/ilc0bOV8O2I"></video>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url("frontend")."/" ?>images/tmeOjFno6Do.jpg" alt="The Lighter Side - Reliance Digital 1000 Store Celebration" />
                                        <video preload="none" src="http://www.youtube.com/embed/ilc0bOV8O2I"></video>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url("frontend")."/" ?>images/tmeOjFno6Do.jpg" alt="The Lighter Side - Reliance Digital 1000 Store Celebration" />
                                        <video preload="none" src="http://www.youtube.com/embed/ilc0bOV8O2I"></video>
                                    </li>
                                    <li>
                                        <img src="<?php echo base_url("frontend")."/" ?>images/tmeOjFno6Do.jpg" alt="The Lighter Side - Reliance Digital 1000 Store Celebration" />
                                        <video preload="none" src="http://www.youtube.com/embed/ilc0bOV8O2I"></video>
                                    </li>
                                    
                                    
                                    
                                </ul>
        <script>
            
            
            var albumid=0;
            $(document).ready(function() {
                
                function addvideos(data) {
                    $(".addvids").html("");
                    $(".videothumbs").html("");
                    var text = "";
                    var text2="";
                    
                    if(data.length == 0)
                    {
                        $(".addvids").html("<p>Currently, there are no Videos in this album</p>");
                    };
                    for(var i=0;i<data.length;i++)
                    {
                        text = '<li><img src="http://img.youtube.com/vi/'+data[i].url+'/hqdefault.jpg" alt="The Lighter Side - Reliance Digital 1000 Store Celebration"/><video preload="none" src="http://www.youtube.com/embed/'+data[i].url+'"></video></li>';                        
                            $(".addvids").append(text);
                        text2='<li><img src="http://img.youtube.com/vi/'+data[i].url+'/hqdefault.jpg" alt="How To Install MIUI v6 on Xiaomi Redmi 1S" />';
                        $(".videothumbs").append(text);
                        
                    };
                    recallvideo();
                };
                
                
                function callfilter(){
                        $.getJSON("<?php echo site_url("website/videofilter"); ?>",{id:albumid},function(data) {
                            console.log(data);
                            addvideos(data);
                        });   
                };
                
                callfilter();
                
                $(".videoalbumselect").change(function () {
                    albumid=$(this).val();
                    callfilter();
                });
                
                
            });
        </script>
                                
                                <ul class="amazingslider-thumbnails videothumbs" style="display:none;">
                                    <li><img src="<?php echo base_url("frontend")."/" ?>images/tmeOjFno6Do-tn.jpg" alt="Marvel&apos;s &quot;Avengers: Age of Ultron&quot; - Teaser Trailer (OFFICIAL)" />
                                    </li>
                                    <li><img src="<?php echo base_url("frontend")."/" ?>images/tMShlthBgKw-tn.jpg" alt="How To Install MIUI v6 on Xiaomi Redmi 1S" />
                                    </li>
                                    <li><img src="<?php echo base_url("frontend")."/" ?>images/Yj0l7iGKh8g-tn.jpg" alt="The Flash - Extended Trailer" />
                                    </li>
                                    <li><img src="<?php echo base_url("frontend")."/" ?>images/WFjABnTOGuI-tn.jpg" alt="Arrow - Stunts : Arrow vs. Ra&apos;s Al Ghul" />
                                    </li>
                                    <li><img src="<?php echo base_url("frontend")."/" ?>images/UWfd0boBMGM-tn.jpg" alt="Arrow Season 2 Bloopers" />
                                    </li>
                                </ul>
                                <div class="amazingslider-engine">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-10">

                <div class="vid-des">
<!--                    <h4>stalwarts speaks - <span> loren ipsum loren ipsum loren ipsum loren ipsum</span></h4>-->
                    <p>share<span><a class="fb-share-button" style="padding-left:15px;"data-href="https://developers.facebook.com/docs/plugins/" data-layout="button_count"></a>
                    
                    <span class="inline-block"><a style="margin-top:10px;" class="twitter-share-button" href="https://twitter.com/share" ></a></span>
                   </span>
                    
                    
                    </p>
                </div>
            </div>
        </div>
    </div>
<!--    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.gallery.js"></script>-->
    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.slicknav.js"></script>
    <div id="fb-root"></div>
           <script>
    	$(window).load(function() { $(".preloader").hide(); });
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
         if(  msieversion() )
           {
               $(".dis-set p").css("font-size","10px");
               $(".left-form select").css("background","#888888");
               $(".pic-set").css("content","none");
               $(".left-form input[type=text]").css("background","#888888");
               
           }
    </script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=329228207248886&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#menu').slicknav();
        });
    </script>
    <script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>

</body>

</html>