<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./includes/cookie.php'); ?>
    <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Baromètre de l'email Jack Russell et Médiamétrie : Outil de mesure de la performance des campagnes email">
    <meta name="keywords" content="Baromètre email, Jack Russell, Médiamétrie, performance email">
    <meta name="author" content="">
    <title>Baromètre de l'email</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link href="css/barometre.css" rel="stylesheet">
    
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
    <?php require("includes/pages/barometre.php"); ?>
    <?php require('includes/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/notificationFx.js"></script>
    <script src="js/notification.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <script type="text/javascript" src="js/Chart.js"></script>
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
            
            if (window.matchMedia("(min-width: 740px)").matches) {
            	
            	
                var screenHeight = $(window).height();
                $("#section-2").height(screenHeight);
                $("#section-3").height(screenHeight+100);
                
                
                var position = 1;
                var initScroll=0;
                
                
                $(".arrow-svg").click(function(){
                	
		                if(position == 1){
		                	$("#cbp-spmenu-s2").removeClass('cbp-spmenu-open');
                            $(".cbp-spmenu-push").removeClass('cbp-spmenu-push-toleft');
		                    $('html, body').stop().animate({
		                        scrollTop: $("#section-2").offset().top
		                    }, 1500, 'easeOutExpo');
		                    $("#arrow").css("fill","#E73635");
                            
		                    position = 2;
		                    event.preventDefault();
		                    
		                }else if(position == 2){
		                	
		                    $('html, body').stop().animate({
		                        scrollTop: $("#section-3").offset().top
		                    }, 1500, 'easeOutExpo');
		                    $("#arrow").css("display","none");
		                    position = 3;
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
                            scrollTop: $("#section-2").offset().top
                        }, 1500, 'easeOutExpo');
                        $("#arrow").css("fill","#E73635");
                        position = 2;
                        initScroll=1;
                        
                    }else if($(window).scrollTop() === 0){
                        initScroll=0;
                        $("#arrow").css("fill","#FFFFFF");
                        $("#arrow").css("display","block");
                        
                    }else if((position == 2)&&($(window).scrollTop()>$("#section-2").offset().top)){
                        $('html, body').stop().animate({
                            scrollTop: $("#section-3").offset().top
                        }, 1500, 'easeOutExpo');
                        $("#arrow").css("display","none");
                        position = 3;
                        
                        event.preventDefault();
                    }
                    
                    
                });
                
            } else {
                var screenHeight = $(window).height();
                $(".intro").height(screenHeight);
                $("#section-2").height("1500px");
                $("#section-3").height("800px");
                $(".scroller").hide();
            }
            var questions = [$("#section-3-subtitle-1"),$("#section-3-subtitle-2"),$("#section-3-subtitle-3")];
            
            questions[1].hide();
            questions[2].hide();
            Chart.defaults.global.legend.display = false;
            var chart1 = $("#myChart1");
            var chart2 = $("#myChart2");
            var chart3 = $("#myChart3");
            var myChart1 = new Chart(chart1, {
                type: 'bar',
                data: {
                    labels: ["Moins d'un", "Entre 1-2", "Entre 2-5", "Entre 5-10", "Entre 10-20", "Plus de 20"],
                    datasets: [{
                        data: [2.9, 9.4, 21.2, 28.3, 18.8, 19.4],
                        backgroundColor:"rgba(231, 54, 53, 1)"
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    },
                   tooltips: {
                   		backgroundColor:"rgba(0,0,0,1)"
                   }
                }
            });
            var myChart2 = new Chart(chart2, {
                type: 'bar',
                data: {
                    labels: ["Tous", "Les trois quarts", "La moitié", "1 sur 4", "Moins d'1 sur 4", "Aucun"],
                    datasets: [{
                        data: [19.1, 16.9, 19.3, 18.2, 19.6, 6.9],
                        backgroundColor:"rgba(231, 54, 53, 1)"
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            var myChart3 = new Chart(chart3, {
                type: 'horizontalBar',
                data: {
                    labels: ["Actualité et information", "Habillement", "Voyage/Tourisme", "Hygiène/Beauté/Santé", "Décoration maison", "Produits électroniques","Produits culturels","Jeux et jouets"],
                    datasets: [{
                        data: [53.4, 49.8, 47.9, 44.0, 34.9, 34.0,31,21.3],
                        backgroundColor:"rgba(231, 54, 53, 1)"
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero:true
                            }
                        }]
                    }
                }
            });
            
             
            
            $("#carousel-example-generic").on('slid.bs.carousel', function () {
                var currentIndex = $('div.active').index();
                $('.question-chart').hide();
                questions[currentIndex].fadeIn();
            });
           
            
            
	   });
    </script>
</body>

</html>
