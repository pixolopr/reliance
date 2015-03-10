<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Reliance Digital Forum  | Photo Gallery</title>
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slider.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/mobile.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/jquery.mCustomScrollbar.css">

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <!--    <script src="<?php echo base_url("frontend")."/" ?>js/script.js"></script>-->
    <!--[if lt IE 9]>
<script type="text/javascript" src="http://www.users.on.net/~nova/html5/js/CreateHTML5Elements.js">[B]</script>[/B]
<![endif]-->
<!--
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
-->
    <script src="<?php echo base_url("frontend")."/" ?>js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.pack.js"></script>
    <script src="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.js"></script>
    
     <script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>

    <link href="<?php echo base_url("frontend")."/" ?>fancy/jquery.fancybox.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/font-awesome.min.css">
       <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/slicknav.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/mobile.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!--
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url("frontend")."/" ?>css/bootstrap-theme.min.css">
-->

    <!--    <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/modernizr.custom.53451.js"></script>-->

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
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
                    <i class="fa fa-facebook-official"></i>
                    <i class="fa fa-twitter"></i>
                    <i class="fa fa-google-plus"></i>
                    <i class="fa fa-linkedin-square"></i>
                    <img src="<?php echo base_url("frontend")."/" ?>images/reliance.png">
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
                                <a href='<?php echo site_url("website/photogallery"); ?>' class="actives"><img src="<?php echo base_url("frontend")."/" ?>images/camera.png">
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
            <div class="pic-cont">
                <div class="col-md-6" style="border-right:2px solid #a2a4a7;">
                    <div class="pic-head">
                        <h2>photo gallery</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pic-det pull-left">
                        <p>All the excitement and energy at Reliance Digital events.</p><br>
                        <p style="text-align: center;
float: none;line-height:0">captured & showcased under one roof!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pic-con">
                <div class="col-md-12">
                    <div class="col-md-6">
                        <div class="pic-select text-center">
                            <h3>select an album</h3>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pic-set">
                            <select class="albumselect">
                                  <option value="0">View All Images</option>
                               <?php foreach($photoalbums as $photoalbum) { ?>
                                <option value="<?php echo $photoalbum->id; ?>"><?php echo $photoalbum->name; ?></option>
                                <?php }; ?>
                            </select>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row" style="padding-bottom:40px;">
            <div class="gallert-set scroll">
               <!--<?php foreach($photos as $photo) { ?>
                <div class="col-md-4 set-img img-responsive" >
                    <a class="fancybox img-responsive" rel="group" href="<?php echo base_url("uploads")."/".$photo->image; ?>"> <img class="pht-img img-responsive" src="<?php echo base_url("uploads")."/".$photo->image; ?>">
                    </a>
                </div>
                <?php }; ?>-->
            </div>
        </div>
        
        
        <script>
            
            
            var albumid=0;
            //var location = location.protocol+'//'+location.host+'/reliance/uploads/';
            $(document).ready(function() {
                
                function addphotos(data) {
                    //var location = ''+location.protocol+'//'+location.host+'/reliance/uploads/';
                    $(".scroll").html("");
                    var text = "";
                    if(data.length == 0)
                    {
                        $(".scroll").html("<p>Currently, there are no photos in this album</p>");
                    };
                    for(var i=0;i<data.length;i++)
                    {
                        var text = '<div class="col-md-4 set-img img-responsive" ><a class="fancybox img-responsive" rel="group" href="<?php echo base_url("uploads")."/"; ?>'+data[i].image+'" ><img class="img-responsive" src="<?php echo base_url("uploads")."/"; ?>'+data[i].image+'"></a></div>';
                        
                            $(".scroll").append(text);
                    };
                };
                
                
                function callfilter(){
                    console.log("abhau");
                        $.getJSON("<?php echo site_url("website/albumfilter"); ?>",{id:albumid},function(data) {
                            console.log(data);
                            addphotos(data);
                        });   
                };
                
                callfilter();
                
                $(".albumselect").change(function () {
                    albumid=$(this).val();
                    callfilter();
                });
                
                
            });
        </script>
        
    </div>
       <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.gallery.js"></script>
       <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.slicknav.js"></script>
       <script type="text/javascript" src="<?php echo base_url("frontend")."/" ?>js/jquery.mCustomScrollbar.min.js"></script>
       	<script>
		(function($){
			$(window).load(function(){
				
				$(".scroll").mCustomScrollbar({
					autoHideScrollbar:false,
					theme:"rounded"
				});
				
			});
		})(jQuery);
	</script>
    <script>
        $(document).ready(function () {
                    $(".fancybox").fancybox({
                       
                    
                        openEffect: 'elastic',
                        closeEffect: 'elastic',
                        beforeShow : function() {
    this.title = (this.title ? '' + this.title + '' : '') + ' ' + (this.index + 1) + ' of ' + this.group.length;
},
                        
                    });
        });
    </script>
        <script type="text/javascript">
        $(document).ready(function () {
            $('#menu').slicknav();
        });
    </script>
     
     
</body>

</html>