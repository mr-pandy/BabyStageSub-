<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    

    <!-- Optimized viewport for mobile -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no" />

    <!-- Website description -->
    <meta name="description" content="BabyStage: Save your Baby’s Memories with one click!" />
    <meta name="keywords" content="baby, HTML templates, memories, camera" />
    <meta name="author" content="Femiyhogurt">

    <!-- Website title-->
    <title>BabyStage</title>
    <link rel="shortcut icon" href="./assets/src/Vector.png" type="image/x-icon" />

    <!-- Slick Slider -->
    <link rel="stylesheet" type="text/css" href="./assets/slick/slick.css"/>

    <!-- Slick Slider theme -->
    <link rel="stylesheet" href="./assets/slick/slick-theme.css" />

    <!-- Bootstrap 4 CSS   -->
    <link rel="stylesheet" href="./assets/bootstrap-4.5.0-dist/css/bootstrap.min.css">

     <!-- Custom Style Link -->
     <link rel="stylesheet" href="./assets/CSS/styles.css">
</head>
<body>
    
        <!-- Header  -->
            <header>
                <!-- Desktop Navbar -->
                <nav class="navbar navbar-expand-md pt-4" id="mobNav"> 
                    <div class="container">
                        <a class="navbar-brand font-weight-bold" href="#" id="home"><img src="./assets/src/Vector.png" alt="Baby Stage Logo"> BabyStage</a>
                        <button class="navbar-toggler d-lg-none" type="button" >
                            <span class="navbar-toggler-icon mr-3">
                                <svg width="42" height="28" viewBox="0 0 42 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="42" height="2" fill="#EB2536"/>
                                    <rect x="14" y="13" width="28" height="2" fill="#EB2536"/>
                                    <rect x="28" y="26" width="14" height="2" fill="#EB2536"/>
                                    </svg>
                                    
                            </span>
                        </button>
                        <!-- Menu -->
                        <div class="collapse navbar-collapse" id="collapsibleNavId">
                            
                        </div>
                        
                        <!-- Menu -->
                </div><!--nav container end-->
                </nav>

                <!-- Content -->
                <div id="content">
                    <!-- Description -->
                    <div id="desc" class="px-5 pt-4">
                        <h1 class="font-weight-bold">Save your Baby’s Memories with one click!</h1>
                        <p class="py-5">Be the first to experience the thrill!!</p>
                    </div>

                    <!-- Button -->
                    <div id="subscription" >
                        <form action="thanks.php" method="post" id="postName">
                            <div class="form-group form-inline no-gutter">
                                <input type="text" name="email" id="email" class="form-control pl-5" placeholder="Email Address" aria-describedby="helpId" required>
                                <input type="submit" value="Sign Up" class="btn btn-primary " id="submit" name="submit">
                              </div>
                        </form>
                        
                    </div>
                    <!-- Demo -->
                    <button id="demo" class="text-center  mt-5">
                        <p class="font-weight-bold pt-3">Demo</p>
                    </button>
                </div>
                <!-- Content -->
            </header>
        <!-- Header Ends -->

         <!-- *** Slider Starts *** -->
         <section class="slider d-none">
            <!-- Sliders -->
            <div class="sliders">
            <div class="row home-sliders">
                <!-- Slider Item 1 -->
                <div class="col-md-12 slider-item">
                    <img src="./assets/src/finebaby.png" alt="Brand Logos" class="img-fluid slider-img"/>
                </div>
    
                <!-- Slider Item 2 -->
                <div class="col-md-12 slider-item">
                    <img src="./assets/src/finebaby.png" alt="Brand Logos" class="img-fluid slider-img"/>
                </div>
    
                <!-- Slider Item 3 -->
                <div class="col-md-12 slider-item">
                    <img src="./assets/src/finebaby.png" alt="Brand Logos" class="img-fluid slider-img"/>
                </div>
    
                <!-- Slider Item 4 -->
                <div class="col-md-12 slider-item">
                    <img src="./assets/src/finebaby.png" alt="Brand Logos" class="img-fluid slider-img"/>
                </div>
    
                <!-- Slider Item 5 -->
                <div class="col-md-12 slider-item">
                    <img src="./assets/src/finebaby.png" alt="Brand Logos" class="img-fluid slider-img"/>
                </div>
            </div>
            
            </div>
    
            
        </section>
        <!-- Slider End -->

    
    
    <!-- jQuery -->
    <script src="./assets/bootstrap-4.5.0-dist/js/jquery.min.js"></script>
    <!-- Popper -->
    <script src="./assets/bootstrap-4.5.0-dist/js/popper.min.js"></script>
    <!-- Boostrap JS Links -->
    <script src="./assets/bootstrap-4.5.0-dist/js/bootstrap.bundle.min.js"></script>
    <!-- Slick js -->
    <script type="text/javascript" src="./assets/slick/slick.min.js"></script>
    <!-- Custom Js -->
    <script src="./assets/JS/index.js"></script>
    
</body>
</html>