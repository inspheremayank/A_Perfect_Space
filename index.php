<?php
$pageTitle = 'A Perfect Space';
include("includes/global_header.php");
?> 
<body class="">
    <header class="header">
        <div class="container">
            <div class="col-12">
                <div class="header__section d-flex align-items-center">
                    <div class="header__section-logo">
                        <img src="dist/images/logo.png" alt="Logo" />
                    </div>
                    <div class="header__section-navigation d-flex justify-content-end">
                        <div class="navigation__main">
                            <ul>
                                <li><a href="javascript:;">List A Space</a></li>
                                <li><a href="javascript:;">Find A Space</a></li>
                                <li><a href="javascript:;">Your Spaces</a></li>
                                <li><a href="javascript:;">Contact</a></li>
                            </ul>
                        </div>
                        <div class="navigation__user">
                            <ul class="navigation__user-login">
                                <li><a href="javascript:;">Sign Up</a></li>
                                <li><a href="javascript:;">Login</a></li>
                            </ul>
                            <div class="navigation__user-loginProfile hide">
                                <div class="navigation__user-loginProfile-image image-covered" data-toggle="dropdown" style="background-image: url('dist/images/avtar.png');"></div>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="clearfix"><!-- Blank Tag --></div>
    <!-- Begin Javascripts(Load javascripts at bottom, this will reduce page load time) -->
    <?php include("includes/scripts.php"); ?>  
</body>
</html>
