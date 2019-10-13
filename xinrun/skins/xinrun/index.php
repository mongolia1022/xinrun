<html>
<head>
    <!-- META DATA -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Free Responsive Html5 Templates">
    <meta name="author" content="">
    <meta name="keywords" content="<?php echo $tag['seo.keywords']; ?>" />
    <meta name="description" content="<?php echo $tag['seo.description'];  ?>" />

    <title><?php echo $tag['seo.title']; ?></title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/bootstrap.min.css"  type="text/css">

    <!-- Owl Carousel Assets -->
    <link href="<?php echo $tag['path.skin']; ?>owl-carousel/owl.carousel.css" rel="stylesheet">
    <!-- <link href="owl-carousel/owl.theme.css" rel="stylesheet"> -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $tag['path.skin']; ?>css/animate.min.css">

    <!-- Custom Fonts -->
    <link rel="stylesheet" href="<?php echo $tag['path.skin']; ?>font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php echo $tag['path.skin']; ?>js/html5shiv.js"></script>
    <script src="<?php echo $tag['path.skin']; ?>js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<header>

    <!-- /////////////////////////////////////////Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1 class="navbar-brand page-scroll">
                    <a href="#page-top">XINRUN</a>
                </h1>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="<?php echo $tag['path.root']; ?>/">Home</a>
                    </li>
                    <?php nav_main()?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <!-- Navigation -->
    <div class="box-shadow">
        <!-- Carousel -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php doc_article('24',0,0,0,0,0,true,true,'id',0)?>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div><!-- /carousel -->
    </div>
</header>


<!-- /////////////////////////////////////////Content -->
<div id="page-content">


    <!-- ////////////Content Box 02 -->
    <section class="box-content box-2" id="services">
        <div class="container">
            <div class="row heading">
                <div class="col-lg-12">
                    <h2>OUR PRODUCTS</h2>
                    <hr>
                    <div class="intro">Innovation is the soul</div>
                </div>
            </div>
            <div class="categories">
                <ul class="cat">
                    <li>
                        <ol class="type list-inline">
                            <li><a href="" data-filter="*" class="active">All</a></li>
                            <?php nav_sub(21,0);?>
                        </ol>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="portfolio-items">
                    <?php doc_product(21,8,0,0,0,0,true,false,'ordering',0)?>
                </div>
            </div>
        </div>
    </section>

    <!-- ////////////Content Box 04 -->
    <section class="box-content box-4 box-style-1" id="news">
        <div class="container">
            <div class="row heading">
                <div class="col-lg-12">
                    <h2>RECOMMEND</h2>
                    <hr class="line02">
                    <div class="intro">Quality is fundamental</div>
                </div>
            </div>
            <div class="row">
                <?php doc_product(30,8,1,0,0,0,true,false,'ordering',0)?>
            </div>
        </div>
    </section>

</div>

<!-- FOOTER -->
<footer>
    <!--<div class="top-footer">
        <div id="owl-brand" class="owl-carousel">
            <div class="item">
                <a href="single.html"><img src="images/15.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/16.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/17.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/18.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/19.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/20.jpg" /></a>
            </div>
            <div class="item">
                <a href="single.html"><img src="images/21.jpg" /></a>
            </div>
        </div>
    </div>-->
    <?php doc_article('31',0,0,0,0,0,true,true,'id',0)?>
</footer>

<!-- jQuery -->
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo $tag['path.skin']; ?>js/agency.js"></script>

<!-- Plugin JavaScript -->
<script src="<?php echo $tag['path.skin']; ?>js/jquery.easing.min.js"></script>
<script src="<?php echo $tag['path.skin']; ?>js/classie.js"></script>
<script src="<?php echo $tag['path.skin']; ?>js/cbpAnimatedHeader.js"></script>

<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/wow.min.js"></script>
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/jquery.isotope.js"></script>
<script type="text/javascript" src="<?php echo $tag['path.skin']; ?>js/main.js"></script>


<!-- carousel -->
<script src="owl-carousel/owl.carousel.js"></script>
<script>
    $(document).ready(function() {
        $("#owl-brand").owlCarousel({
            autoPlay: 3000,
            items : 6,
            itemsDesktop : [1199,4],
            itemsDesktopSmall : [979,2],
            navigation: true,
            navigationText: ['<i class="fa fa-chevron-left fa-5x"></i>', '<i class="fa fa-chevron-right fa-5x"></i>'],
            pagination: false
        });
    });
</script>

<script>
    $(function(){
        $("#form2").submit(function(e){
            var msg='subject：'+$('#subject').val();
            msg+=',content：'+$('#message').val();
            $('#msg').val(msg);
            console.log(msg);
            return true;
        });
    });


</script>

</body>
</html>