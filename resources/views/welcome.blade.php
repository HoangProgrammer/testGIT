<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Change Navigation Active Class on Page Scroll with Bootstrap 3 Navigation & jQuery">
    <meta name="author" content="Vo Tuan Trung">

    <meta property="og:url" content="http://trungk18.github.io/" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="I help companies and agencies build standards-compliant front-ends for fast, accessible and responsive web sites and applications." />
    <meta property="og:image" content="http://trungk18.github.io/img/facebook-logo.jpg" />

    <title>Change Navigation Active Class on Page Scroll with Bootstrap 3 Navigation & jQuery</title>
    <!-- Bootstrap Core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel='shortcut icon' type='image/x-icon' href='http://trungk18.github.io/favicon.ico' />

    <style type="text/css">
        @media screen and (min-width: 1170px) {

            .navbar-default {
                padding: 30px 0;
                transition: padding 0.3s;
            }

            .navbar-default.navbar-shrink {
                padding: 10px 0;
            }
        }

        .navbar-default a {
            color: #4D4D4D;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-transform: uppercase;
            text-decoration: none;
            line-height: 42px;
            font-weight: 700;
            font-size: 20px;
        }

        .navbar-default a.brand > img {
            max-width: 70px;
        }

        .navbar-default a.active {
            color: #2dbccb;
        }


        .content {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .content > section {
            width: 100%;
            height: 100%;
        }

        #portfolio {
            background: #2dbccb;
        }

        #about {
            background-color: #eb7e7f;
        }

        #contact {
            background-color: #415c71;
        }
    </style>

</head>
<body>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#top-nav">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="brand" href="http://trungk18.github.io/"><img src="http://trungk18.github.io/img/trungk18.png" class="img-responsive" title="trungk18" alt="trungk18" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="top-nav">
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="#portfolio">Portfolio</a>
                </li>
                <li>
                    <a href="#about">About</a>
                </li>
                <li>
                    <a href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Content Section -->
<div class="content">
    <section id="portfolio"></section>
    <section id="about"></section>
    <section id="contact"></section>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        //Smooth scrolling when click to nav
        $('#top-nav > ul > li > a').click(function (e) {
            e.preventDefault();
            var curLink = $(this);
            var scrollPoint = $(curLink.attr('href')).position().top;
            $('body,html').animate({
                scrollTop: scrollPoint
            }, 500);
        })

        $(window).scroll(function () {
            onScrollHandle();
        });

        function onScrollHandle() {
            //Navbar shrink when scroll down
            $(".navbar-default").toggleClass("navbar-shrink", $(this).scrollTop() > 50);

            //Get current scroll position
            var currentScrollPos = $(document).scrollTop();

            //Iterate through all node
            $('#top-nav > ul > li > a').each(function () {
                var curLink = $(this);
                var refElem = $(curLink.attr('href'));
                //Compare the value of current position and the every section position in each scroll
                if (refElem.position().top <= currentScrollPos && refElem.position().top + refElem.height() > currentScrollPos) {
                    //Remove class active in all nav
                    $('#top-nav > ul > li').removeClass("active");
                    //Add class active
                    curLink.parent().addClass("active");
                }
                else {
                    curLink.parent().removeClass("active");
                }
            });
        }
    });
</script>
</body>
</html>
