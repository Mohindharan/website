<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="portfolio">
    <meta name="author" content="mohindharan">
    <link rel="shortcut icon" href="favicon2.ico">

    <title>Mako-Man -Mohindharan</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/css/freelancer.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nav.css">

    <!-- Custom Fonts -->
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <?php
 
    include("Doc/navigation.php");
    ?>

        <!-- Header -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <img class="img-responsive" src="img/profile.png" alt="">
                        <div class="intro-text">
                            <span class="name">Mako-man</span>
                            <hr class="star-light">
                            <span class="skills">Web Developer - User Experience Designer</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-7">
                <h1>contact me <a href="email:mohindharan13@gmail.com">@mohindharan</a></h1>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <!-- About Section -->
        <section class="success" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Who is this guy? </h2>
                        <hr class="star-light">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-2">
                        <h4>This guy's name is Mohindharan</h4>
                        <p> he is awesome his code name Mako-Man
                        </p>
                        <br>
                        <p>This man Understands the requirements integrates a clear cut visual for the user and build the WEB APP.</p>
                    </div>
                    <div class="col-lg-4">
                        <p>Whether you're a student looking to showcase your work, a professional looking to attract clients, or a graphic artist looking to share your projects
                            <h4>This Guy can help You</h4>.</p>
                    </div>

                </div>
            </div>
        </section>


        <!-- Footer -->
        <footer class="text-center">
            <div class="footer-above">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-4">
                            <h3>Location</h3>
                            <p>172/10 Anna Nagar
                                <br>Verakerlam
                                <br>
                                <h4>Coimbatore</h4></p>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>Around the Web</h3>
                            <ul class="list-inline">
                                <li>
                                    <a href="https://www.facebook.com/MohiOSM" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="https://plus.google.com/113146351997371301134/about" class="btn-social btn-outline"><i class="fa fa-fw fa-google-plus"></i></a>
                                </li>
                                <li>
                                    <a href="https://github.com/mako-man" class="btn-social btn-outline"><i class="fa fa-fw fa-github"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-col col-md-4">
                            <h3>About Mako-Man</h3>
                            <p><a href="https://github.com/mako-man">@I'm</a> a self-independant Web developer
                                <br> UI/UX Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-below">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">

                        </div>
                    </div>
                </div>
            </div>
        </footer>



        <!-- jQuery -->
        <script src="assets/js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="assets/js/bootstrap.min.js"></script>

        <!-- Plugin JavaScript -->
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
        <script src="assets/js/classie.js"></script>
        <script src="assets/js/cbpAnimatedHeader.js"></script>


        <!-- Custom Theme JavaScript -->
        <script src="assets/js/freelancer.js"></script>

</body>
<script>
    $(function () {
        $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });
    });
</script>

</html>