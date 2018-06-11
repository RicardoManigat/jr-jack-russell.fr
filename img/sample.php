<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Jack Russell - Emplois</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic' rel='stylesheet' type='text/css'>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/header-footer.css">
    <style>
        .scroller{
            position: fixed;
            bottom: 15px;
            width: 100%;
            z-index:1030;
        }
        .intro {
            display: table;
            width: 100%;
            height: auto;
            padding: 100px 0;
            text-align: center;
            color: #fff;
            background: url(../img/presentation-intro.png) no-repeat bottom center scroll;
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
        
    </style>
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
    <!-- Intro Header -->
    
    <div class="container-fluid" id="wrapper">
        <div class="container">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
        <p class="page-title">SAMPLE</p>
        
        </div>    
    </div>
    
    <br><br>
   
    </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
    
    
    <!-- About Section -->
    
    <?php require('includes/footer.php'); ?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/grayscale.js"></script>
    <script>
        $(window).ready(function(){
            $("#menu-open").click(function(){
                $("#cbp-spmenu-s2").toggleClass('cbp-spmenu-open');
                $(".cbp-spmenu-push").toggleClass('cbp-spmenu-push-toleft');
            });
        });
    </script>
</body>

</html>
