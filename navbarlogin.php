<?php
session_start();
?>
<!-- Navigation -->


    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top py-2 shadow-sm">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand">
                <img src="img/logos.png" alt="Logo" width="120px">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon">
                    <span class="sr-only">Menu bar</span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item active pr-3">
                        <a href="index.php" class="nav-link link-secondary h6">
                            Home 
                        </a>
                    </li>
                    <li class="nav-item pr-3">
                        <a href="recommend.php" class="nav-link link-secondary h6">
                            Recommend  
                        </a>
                    </li>
                    <li class="nav-item pr-3">
                        <a href="aboutus.php" class="nav-link link-secondary h6">
                            About Us 
                        </a>
                    </li>

                </ul>
                    
                    <div class="pull-left">
                    <div class="pull-right">
                        <div class="btn-group">                 
                                <a class="btn btn-outline-primary dropdown-toggle h6" data-toggle="dropdown" href="#">
                                    <span><?= $_SESSION['uname'] ?></span>
                                    <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                  <li><a href="list-history.php" class="nav-link link-secondary icon">History</a></li>
                                  <li><a href="loginsignupphp/logout_proses.php" class="nav-link link-secondary icon">Log Out</a></li>
                                </ul>
                            </div>
                    </div>
            </div>
        </div>
    </nav>
