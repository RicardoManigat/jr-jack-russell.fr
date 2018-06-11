<!DOCTYPE html>
<html lang="en">
<head>
    <?php require('./includes/cookie.php'); ?>
    <?php require('./includes/lang/fr_fr.php'); ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="canonical" href="http://jack-russell.net/contact.php" /> 
    <meta name="description" content="Nous sommes basés à Paris et à Montréal.">
    <meta name="keywords" content="Paris, Montréal">
    <meta name="author" content="">
    <title>Nous joindre</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <link rel="stylesheet" href="css/contact.css">
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
    <?php require("includes/pages/contact.php"); ?> 
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
        
        $(".form-contact").submit(function(e){
            e.preventDefault();
            var nom = $("#form-nom").val();
            var societe = $("#form-societe").val();
            var email = $("#form-email").val();
            var sujet = $("#form-sujet").val();
            var prenom = $("#prenom").val();
            var message = $("#form-message").val();
            $.post( "send.php", { nom: nom, societe: societe, email:email,sujet:sujet,message:message })
              .done(function( data ) {
                $("#form-content").html(data);
                $(".col-white").height($(".col-black").height());
                
              });
        });
        
        jQuery.each(jQuery('textarea[data-autoresize]'), function() {
            var offset = this.offsetHeight - this.clientHeight;

            var resizeTextarea = function(el) {
                jQuery(el).css('height', 'auto').css('height', el.scrollHeight + offset);
            };
            jQuery(this).on('keyup input', function() { resizeTextarea(this); }).removeAttr('data-autoresize');
        });
    </script>
</body>

</html>
