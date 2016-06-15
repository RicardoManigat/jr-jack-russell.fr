<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./includes/cookie.php'); ?>
     <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Exemples d'emails créatifs, responsive, interactifs, personnalisés et performants dans les secteurs du luxe, automobile, ecommerce, détail, télécommunication">
    <meta name="keywords" content="emails créatifs, responsive, performants">
    <meta name="author" content="">
    <title>Nos réalisations</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/animations.css">
    <link rel="stylesheet" href="css/modaal.css">
    <link rel="stylesheet" href="css/emails.css">
    <script src="js/snap.svg-min.js"></script>
    <style>
        .scroller{
            position: fixed;
            bottom: 15px;
            width: 100%;
            z-index:1030;
        }
        
        .scroller .arrow-svg {
            -webkit-animation: pointDown 0.6s 0.6s ease-in infinite alternate forwards;
            animation: pointDown 0.6s 0.6s ease-in infinite alternate forwards;
            z-index: 1000;
        }
        .arrow-svg:hover #arrow {
            fill: #E73635;
        }
        .intro {
            display: table;
            width: 100%;
            height: auto;
            padding: 100px 0;
            text-align: center;
            color: #fff;
            background: url(./img/emails-intro.png) no-repeat bottom center scroll ;
            background-color: #000;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .intro .intro-body {
            display: table-cell;
            vertical-align: middle;
        }

        .intro .intro-body .brand-heading {
            font-family: JackRussellBlack, sans-serzif;
            font-size: 50px;
        }

        .intro .intro-body .pre-title{
            font-family: JackRussellBlack, sans-serif;
            font-size: 30px;
            margin-bottom: 3px;
        }

        .intro .intro-body .intro-text {
            font-family: Roboto, sans-serif;
            font-size: 25px;
            font-weight: 300;
            line-height: 1.2;
        }
        @media(min-width:768px) {
            .intro {
                height: 100%;
                padding: 0;
            }

            .intro .intro-body .brand-heading {
                font-size: 50px;
            }

            .intro .intro-body .intro-text {
                font-size: 26px;
            }
        }

        
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  class="cbp-spmenu-push">
    <div class="container-fluid" id="conteneur">
    <?php require("includes/menu.php"); ?>
    <?php require("includes/top-bar.php"); ?>
    <?php require("includes/pages/emails.php"); ?>
    <?php require('includes/footer.php'); ?>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/classie.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/notificationFx.js"></script>
    <script src="js/notification.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/svgicons-config.js"></script>
    <script src="js/svgicons.js"></script>
    <script src="js/modaal.js"></script>
    <script>
        $(window).ready(function(){
            var menuposition = 0;
            $("#menu-open").click(function(){
                $("#cbp-spmenu-s2").toggleClass('cbp-spmenu-open');
                $(".cbp-spmenu-push").toggleClass('cbp-spmenu-push-toleft');
            });
            $('html').click(function(event){
                 if(event.target.id == 'cbp-spmenu-s2') {
                    
                 } else {
                     if(menuposition==1){
                        $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                        $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
                     }
                     if(menuposition==0){
                         menuposition = 1;
                     }
                     if($("#cbp-spmenu-s2").hasClass("cbp-spmenu-open")){
                         
                     }else{
                         menuposition=0;
                     }
                   
                 }
             });
        });
        
        var position = 1;
        var initScroll = 0;
        
        		var screenHeight = $(window).height();
                $(".intro").height(screenHeight);

            (function() {
				// initialize all
				new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom1' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
                new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom2' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
                new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom3' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
                new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom4' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
                new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom5' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
                new svgIcon( document.querySelector( '.si-icons-hover .si-icon-zoom6' ), svgIconConfig, { easing : mina.backin, evtoggle : 'mouseover', size : { w : 128, h : 128 } } );
			})();
            
            if (window.matchMedia("(min-width: 730px)").matches) {
				  $(".arrow-svg").click(function(){ 	
                if(position == 1){
                    $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                    $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
                    $('html, body').stop().animate({
                        scrollTop: $("#content").offset().top -90
                    }, 1500, 'easeOutExpo');
                    $("#arrow").css("display","none");
                    position = 2;
                    event.preventDefault();
                }
        });
        $(window).scroll(function() {
                	
                    if(initScroll===0){
                        $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                        $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
                        $('html, body').stop().animate({
                            scrollTop: $("#content").offset().top -90
                        }, 1500, 'easeOutExpo');
                        $("#arrow").css("display","none");
                        position = 2;
                        initScroll=1;
                        
                    }else if($(window).scrollTop() === 0){
                        initScroll=0;
                        position=1;
                        $("#arrow").css("fill","#FFFFFF");
                        $("#arrow").css("display","block");
                        
                    }
                    
                    
                });
			} else {
                 $("#arrow").css("display","none");
                $(".mail-preview").each(function(){
                    var newSource = $(this).data('alt-href');
                    $(this).data('alt-href', $(this).attr('href'));
                    $(this).attr('href', newSource);
                });
    
			}
            $('.mail-preview').modaal({
	                   type: 'iframe',
	                    width: $(window).width(),
			              height: $(window).height(),
	                    animation:'fade',
	                fullscreen:'true'
	            });
    </script>
</body>

</html>
