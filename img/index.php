<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./includes/cookie.php'); ?>
    <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Agence de communications franco-canadienne spécialiste de campagnes emailing créatif et performantes qui traite l'email marketing comme un média">
    <meta name="keywords" content="agence, emailing creatif, email, marketing, média">
    <meta name="author" content="">
    <title>Jack Russell : Agence d'emails marketing créatifs</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/landing.css">
    <link rel="stylesheet" href="css/modaal.css" media="screen">
    		<link rel="stylesheet" type="text/css" href="css/ns-default.css" />
		<link rel="stylesheet" type="text/css" href="css/ns-style-growl.css" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/modernizr.custom.js"></script>
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  class="cbp-spmenu-push">
    
    <?php require("includes/menu.php"); ?>
    <?php require("includes/top-bar.php"); ?>
    <!-- Intro Header -->
    
    <!--   -->
    <!-- Flèche Scroller -->
    <div class="col-xs-12 get-down">
        <button id="showgrid" class="button button--view" aria-label="Show me more">
            <svg width="100%" height="100%" viewBox="0 0 310 177" preserveAspectRatio="xMidYMid meet">
            <path fill="#FFFFFF" d="M159.875,174.481L306.945,27.41c2.93-2.929,2.93-7.678,0-10.606L292.803,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.896,0.79-5.303,2.197L154.572,130.287L26.946,2.661c-1.406-1.407-3.314-2.197-5.303-2.197c-1.989,0-3.897,0.79-5.303,2.197L2.197,16.804C0.733,18.269,0,20.188,0,22.107s0.732,3.839,2.197,5.303l147.071,147.071C152.197,177.411,156.945,177.411,159.875,174.481L159.875,174.481z"></path>
            </svg>
        </button>
        <!-- <img class="hidden-xs" src="img/arrow.gif" id="scroll-cta" alt="" width="80"> -->
    </div>
    <!--   -->
    
    
    <!--   -->
    <!-- Bandeau Creative Emails -->
    <div class="col-xs-12 creative">
        CREATIVE <?php echo EMAIL_PLUR_MAJ; ?>
    </div>

    <!--   -->
    <!-- Full Page Image Background Carousel Header -->
    <?php require('includes/carousel.php'); ?>
    <!--  -->

    <!--   -->    
    <!-- Page Content -->
    <?php require("includes/grid.php"); ?>

    
    
    <!-- About Section -->
    
    <?php require('includes/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/lazylinepainter.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
     <script src="js/smooth.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/notificationFx.js"></script>
    <script src="js/notification.js"></script>
    <script src="js/modaal.js" type="text/javascript"></script>
    
    <script>
        $(window).ready(function(){
            location.hash = '';
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
    </script>
    <script>
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        $(".modal1").modaal({fullscreen:true,custom_class:'modal-style'});
        $(".modal2").modaal({fullscreen:true});
        $(".modal3").modaal({fullscreen:true});
        $(".modal9").modaal({fullscreen:true});
        $(".closer").hide();
    }else{
        $("#grid1plus").click(function(){
        $("#grid-caption2").slideUp();
        $("#grid-caption3").slideUp();
        $("#grid-caption9").slideUp();
        $("#grid-caption1").delay(200).slideDown("slow");
        });

        $("#grid2plus").click(function(){
        $("#grid-caption1").slideUp();
        $("#grid-caption3").slideUp();
        $("#grid-caption9").slideUp();
        $("#grid-caption2").delay(200).slideDown("slow");
        });
        $("#grid3plus").click(function(){
        $("#grid-caption1").slideUp();
        $("#grid-caption2").slideUp();
        $("#grid-caption9").slideUp();
        $("#grid-caption3").delay(200).slideDown("slow");
        });
        $("#grid9plus").click(function(){
        $("#grid-caption1").slideUp();
        $("#grid-caption2").slideUp();
        $("#grid-caption3").slideUp();
        $("#grid-caption9").delay(200).slideDown("slow");
        });
        $("#close-caption1").click(function(){
        $("#grid-caption1").slideUp("slow");
        });
        $("#close-caption2").click(function(){
        $("#grid-caption2").slideUp("slow");
        });
        $("#close-caption3").click(function(){
        $("#grid-caption3").slideUp("slow");
        });
        $("#close-caption9").click(function(){
        $("#grid-caption9").slideUp("slow");
        });
    }


    var initScroll=0;
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });

    $(".logo-foot").click(function(){
        $.smoothScroll({
            scrollElement: null,
            scrollTarget: '#myCarousel',
            speed:1200
        });
        initScroll=0;
    });
        
        
    $(window).scroll(function() {
        if(initScroll===0){
            $(".navbar").fadeOut();
            $("#showgrid").fadeOut();
            $(".creative").fadeOut();
            $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
            $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
            $.smoothScroll({
            scrollElement: null,
            scrollTarget: '#grid2',
            speed:1200
            });
            initScroll=1;
            $(".ns-box").hide();
        }else if($(window).scrollTop() === 0){
            initScroll=0;
            $(".navbar").show();
            $(".creative").show();
            $("#showgrid").show();
        }
    });
        
    $("#showgrid").click(function(){
        $(".navbar").fadeOut();
        $("#showgrid").fadeOut();
        $(".creative").fadeOut();
        $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
        $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
        $.smoothScroll({
        scrollElement: null,
        scrollTarget: '#grid2',
        speed:1200
        });
        $(".ns-box").hide();
        initScroll=1;
    });
        
    $(".grid-child").hover(function(){
        $(this).children(".title").slideUp("fast");
        $(this).children(".intro").slideDown("slow");

        $("#grid1plus").lazylinepainter("paint");
        $("#grid2plus").lazylinepainter("paint");
        $("#grid3plus").lazylinepainter("paint");
        $("#grid4plus").lazylinepainter("paint");
        $("#grid5plus").lazylinepainter("paint");
        $("#grid5plus-mob").lazylinepainter("paint");
        $("#grid6plus").lazylinepainter("paint");
        $("#grid7plus").lazylinepainter("paint");
        $("#grid8plus").lazylinepainter("paint");
        $("#grid8plus-mob").lazylinepainter("paint");
        $("#grid9plus").lazylinepainter("paint");
    },
    function(){
        $(this).children(".intro").slideUp("fast");
        $(this).children(".title").delay(500).fadeIn("fast");
    }
    );


    $(window).ready(function(){
        var screenHeight = $(window).height();
        var gridHeight = screenHeight/3;
        $(".grid").height(gridHeight);
        $("#grid-caption1").hide();
        $("#grid-caption2").hide();
        $("#grid-caption3").hide();
        $("#grid-caption9").hide();
       
    });

    </script>
    <script>
    $(document).ready(function(){
        var pathObj = {
        "grid1plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid2plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid3plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid4plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid5plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid5plus-mob": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid6plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid7plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid8plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid8plus-mob": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        },
        "grid9plus": {
        "strokepath": [
        {
        "path": "M40,10c16.6,0,30,13.4,30,30S56.6,70,40,70  S10,56.6,10,40S23.4,10,40,10",
        "duration": 600
        },
        {
        "path": "M 40 24 L 40 56",
        "duration": 300
        },
        {
        "path": "M 24 40 L 56 40",
        "duration": 300
        }
        ],
        "dimensions": {
        "width": 80,
        "height": 80
        }
        }
        }; 
        $('#grid1plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid2plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#000000"
        });
        $('#grid3plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid4plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid5plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid5plus-mob').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid6plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid7plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });
        $('#grid8plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#000000"
        });
        $('#grid8plus-mob').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#000000"
        });
        $('#grid9plus').lazylinepainter( 
        {
        "svgData": pathObj,
        "strokeWidth": 3,
        "strokeColor": "#ffffff"
        });

    });
    </script>
</body>

</html>
