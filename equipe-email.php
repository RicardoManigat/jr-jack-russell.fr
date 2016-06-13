<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <?php require('./includes/cookie.php'); ?>
    <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Equipe multidisciplinaire experte en email marketing comprenant stratégie, conseil, conception, création, design, programmation, intégration, analyse, data ">
    <meta name="keywords" content="equipe experte, email marketing, strategie, intégration">
    <meta name="author" content="">
    <title>L'équipe</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
   <!-- <link rel="stylesheet" href="css/main.css"> -->
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/team.css">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        document.documentElement.className = 'js';
    </script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top"  class="cbp-spmenu-push">
    
    <div class="view">
        <?php require("includes/menu.php"); ?>
        <?php require("includes/top-bar.php"); ?>
        <?php require("includes/pages/team.php"); ?>
        <?php require('includes/footer.php'); ?>
    </div>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/notificationFx.js"></script>
    <script src="js/notification.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/dynamics.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/team.js"></script>
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
        var sourceSwap = function () {
                var $this = $(this);
                var newSource = $this.data('alt-src');
                $this.data('alt-src', $this.attr('src'));
                $this.attr('src', newSource);
            }
             $('img.grid__img').hover(sourceSwap, sourceSwap);
            
            $(document).ready(function(){
                var menuopen = false;
                var imgheight=$("img.grid__img").height();
                var imgwidth=$("img.grid__img").width();
                $(".grid__hover").width(imgwidth);
                
                
                 $('img.grid__img').click(function() {
                      var clicks = $(this).data('clicks');
                      if (clicks) {
                         $(this).prev(".grid__hover").height(0);
                         $(this).prev(".grid__hover").css("padding","0px");
                      } else {
                        $(".grid__hover").height(0);
                        $(".grid__hover p").fadeOut();
                        $("img.grid__img").data("clicks",false);
                        $(this).prev(".grid__hover").css("padding-left","2em");
                        $(this).prev(".grid__hover").children("p").css("padding-right","2em");
                        $(this).prev(".grid__hover").height($(this).height());
                        $(this).prev(".grid__hover").children("p").delay(200).fadeIn("slow");
                       
                      }
                      $(this).data("clicks", !clicks);
                    });
               
                $(document).mouseup(function (e){
                    var container = $(".grid__hover");
                    if (container.has(e.target).length === 0)
                        $(".grid__hover p").hide();
                        $(".grid__hover").css("padding","0px");
                        $(".grid__hover").height(0);
                });
                    
                $(".grid__hover").click(function(){
                   $(this).height(0); 
                    $(".grid__hover p").hide();
                });
                $("#menu__mobile").click(function(){
                    if(menuopen){
                       $(".mobile-menu").slideUp("slow");
                        menuopen = !menuopen;
                    }else{
                       $(".mobile-menu").slideDown("slow"); 
                        menuopen = !menuopen;
                    }
                    
                    
                });
            });
    </script>
</body>

</html>
