<!DOCTYPE html>
<html>
    <?php include "php/base.php"; ?>
    <head>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    
    <body>
        <?php include "php/navbar.php"; ?>
        <div class="parallax-container" id="parallax-header">
            <div class="section no-pad-bot">
                <div class="container">
                    <h1 class="header center <?=$textcolor;?>" style="padding-top: 120px;">Basic template</h1>
                    <hr>
                    <div class="row center">
                        <h5 class="header center light"></h5>
                    </div>
                    <div class="row center">
                        <a href="#" class="btn-large waves-effect waves-light <?=$color;?>">Find out more</a>
                    </div>
                </div>
            </div>
            <div class="parallax">
                <img src="images/header1.jpg" style="display: block;"></img>
            </div>
        </div>
        
        <div class="container white">
            nojj
        </div>
        
        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
        <script type="text/javascript" src="js/jpreloader.min.js"></script>
        <script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
    </body>
</html>