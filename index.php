<!DOCTYPE html>
<html>
    <?php include "php/base.php"; ?>
    <head>
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/materialize.min.css" type="text/css" />
        <link rel="stylesheet" href="css/animate.css" type="text/css" />
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        
        <!-- Scripts -->
        <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="js/materialize.min.js"></script>
        <script type="text/javascript" src="js/jpreloader.min.js"></script>
        <script type="text/javascript" src="js/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="js/noframework.waypoints.min.js"></script>
        <script type="text/javascript" src="js/script.js"></script>
    </head>
    
    <body>
        <?php include "php/navbar.php"; ?>
        <section id="home">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="home-inner">
                            <div class="center home-content">
                                <h1 class="home-title">Basic<span class="<?=$textcolor;?>"> template</span></h1>
                                <h2 class="home-subtitle">The most basic starter template!</h2>
                                <a href="#" class="btn-large waves-effect waves-light <?=$color;?>">Find out more</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section-call-to-area">
                    <div class="container">
                        <div class="row">
                            <a href="#about" class="btn-floating btn-large btn-middle call-to-about section-call-to-btn animated btn-show" data-section="#about">
                                <i class="mdi-navigation-expand-more"></i>
                            </a>
                        </div>  
                    </div>
                </div>
                
            </div>
        </section>

        <div id="yo">
            
        </div>
        
        
        
    </body>
    
    <div id="jSplash" class="preloader-wrapper big active">
            <div class="spinner-layer spinner-blue-only <?=$bordercolor;?>">
                <div class="circle-clipper left">
                    <div class="circle"></div>
                </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
            </div>
        </div>
        
        
</html>