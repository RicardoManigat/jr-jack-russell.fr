<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./includes/cookie.php'); ?>
    <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Réalisation de campagnes d'emails créatifs et de newsletters, segmentés, personnalisés,  avec des scénarios temps réels et des dashboards interactifs.">
    <meta name="keywords" content="campagnes, email, créatif, newsletter, personnalisés, scenario, temps réel, dashboard, interactifs">
    <meta name="author" content="">
    <title>L'agence</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/animations.css">
    <link href="css/presentation.css" rel="stylesheet">

    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  class="cbp-spmenu-push">
    
    <?php require("includes/menu.php"); ?>
    <?php require("includes/top-bar.php"); ?>
    <?php require("includes/pages/presentation.php"); ?>
    <?php require('includes/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/notificationFx.js"></script>
    <script src="js/notification.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
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
        $(window).ready(function(){
            
            if (window.matchMedia("(min-width: 750px)").matches) {
                var screenHeight = $(window).height();
                $("#section-2").height("800px");
                var position = 1;
                var initScroll=0;
                $(".arrow-svg").click(function(){
                    if(position == 1){
                        $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                        $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
                        $('html, body').stop().animate({
                            scrollTop: $("#section-2").offset().top -90
                        }, 1200, 'easeOutExpo');
                         $("#arrow").css("display","none");
                        position = 2;
                        event.preventDefault();
                    }
                        
                });
				var lastScrollTop = 0;
                $(window).scroll(function() {
                	var st = $(this).scrollTop();
                    if(initScroll===0){
                        $("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                        $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
                        $('html, body').stop().animate({
                            scrollTop: $("#section-2").offset().top-90
                        }, 1500, 'easeInOutExpo');
                        $("#arrow").css("display","none");
                        position = 2;
                        initScroll=1;
                    }else if((initScroll == 1) && (st == 0)){
                    	$("#arrow").css("display","block");
						initScroll=0;
                        position = 1;
                    }
                    
                  
                });
               
            } else {
                $("#section-2").height("1800px");
                $("#section-3").height("500px");
                $(".scroller").hide();
            }
            
             
           
            
            
	   });
    </script>
</body>

</html>
