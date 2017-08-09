<?php
$pageTitle = 'A Perfect Space';
include("includes/global_header.php");
?> 
<body class="">
    <div class="mega-width">
        <!-- Begin Header section -->
        <?php include('includes/header.php') ?>
        <!-- End Header section -->
        <div class="clearfix"></div>
        <!-- Begin Article section -->
        <div class="article__wrapper">
            <div class="article__slides">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="article__slides-content multiSlide">
                                <ul>
                                    <li class="image-covered" style="background-image: url('dist/images/demo2.png');"></li>
                                    <li class="image-covered" style="background-image: url('dist/images/demo2.png');"></li>
                                    <li class="image-covered" style="background-image: url('dist/images/demo2.png');"></li>
                                </ul>
                                <div class="article__slides-link">
                                    <a href="javascript:;">See all 8 Photos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article__main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="article__main-content">
                                <div class="row">
                                    <div class="col-12 col-md-8 col-lg-9">
                                        <div class="article__content">
                                            <div class="highlighters">
                                                <div class="highlighters__section main">
                                                    <div class="highlighters__head">
                                                        The Property Title
                                                        <span>in Keynton, Victoria</span>
                                                    </div>
                                                    <div class="highlighters__content">
                                                        <div class="tab__view tab__rounded">
                                                            <ul>
                                                                <li class="active channels__1">
                                                                    <a href="javascript:;">
                                                                        <span><i class="fa fa-camera"></i></span>
                                                                        Film
                                                                    </a>
                                                                </li>
                                                                <li class="channels__2">
                                                                    <a href="javascript:;">
                                                                        <span><i class="fa fa-camera"></i></span>
                                                                        Photography
                                                                    </a>
                                                                </li>
                                                                <li class="channels__3">
                                                                    <a href="javascript:;">
                                                                        <span><i class="fa fa-camera"></i></span>
                                                                        Video
                                                                    </a>
                                                                </li>
                                                                <li class="channels__4">
                                                                    <a href="javascript:;">
                                                                        <span><i class="fa fa-camera"></i></span>
                                                                        Events
                                                                    </a>
                                                                </li>
                                                                <li class="channels__5">
                                                                    <a href="javascript:;">
                                                                        <span><i class="fa fa-camera"></i></span>
                                                                        Productions
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="highlighters__section">
                                                    <div class="highlighters__head">
                                                        About this space
                                                    </div>
                                                    <div class="highlighters__content">
                                                        This is a paragraph. sit amet, consectetur adipiscing elit. Nullam luctus feugiat tortor, vel maximus.This is a paragraph. sit amet, consectetur adipiscing elit. Nullam luctus feugiat tortovel maximus.This is a paragraph. 
                                                    </div>
                                                </div>
                                                <div class="highlighters__section">
                                                    <div class="highlighters__head">
                                                        Key Features
                                                    </div>
                                                    <div class="highlighters__content">
                                                        <ul class="listing">
                                                            <li>Feature 1</li>
                                                            <li>Feature 2</li>
                                                            <li>Feature 3 over two lines
                                                            or more</li>
                                                            <li>Feature 4 </li>
                                                            <li>Feature 5</li>
                                                            <li>Feature 6</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="highlighters__section">
                                                    <div class="highlighters__head">
                                                        Logistics
                                                    </div>
                                                    <div class="highlighters__content">
                                                        This is a paragraph. sit amet, consectetur adipiscing elit. Nullam luctus feugiat tortor, vel maximus.
                                                    </div>
                                                </div>
                                                <div class="highlighters__section">
                                                    <div class="highlighters__head">
                                                        Availability
                                                    </div>
                                                    <div class="highlighters__content">
                                                        About this space
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-4 col-lg-3">
                                        <div class="article__form text-center">
                                            <div class="owner__info">
                                                <h3 class="owner__type">Space Owner</h3>
                                                <img src="dist/images/demo2.png" alt="image" class="img-fluid rounded-circle owner__image" />
                                                <h4 class="owner__name">Tom Spencer</h4>
                                            </div>
                                            <div class="owner__form">
                                                <h4>Get in touch with this owner.</h4>
                                                <div class="form-group">
                                                    <label class="sr-only">Name*</label>
                                                    <input class="form-control" type="text" placeholder="Name*" />
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="sr-only">Email*</label>
                                                    <input class="form-control" type="email" placeholder="Email*" />
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label class="sr-only">Phone Number*</label>
                                                    <input class="form-control" type="number" placeholder="Phone Number*" />
                                                </div>
                                                <button class="button button-grey button-block button-radius" type="submit">Inquire Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="article__main-related">
                                <h2>Related Spaces</h2>
                                <div class="card__view styles__2">
                                    <div class="row">
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <?php include('includes/cards.php'); ?>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <?php include('includes/cards.php'); ?>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <?php include('includes/cards.php'); ?>
                                        </div>
                                        <div class="col-12 col-md-6 col-lg-3">
                                            <?php include('includes/cards.php'); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin Article section -->
        <div class="clearfix"></div>
        <!-- Begin Footer section -->
        <?php include('includes/footer.php') ?>
        <!-- End Footer section -->
    </div>
    <div class="clearfix"><!-- Blank Tag --></div>
    <!-- Begin Javascripts(Load javascripts at bottom, this will reduce page load time) -->
    <?php include("includes/scripts.php"); ?>  
</body>
</html>
