<?php
session_start();
if (empty($_SESSION["accountid"]) && !isset($_SESSION["accountid"])) {
   echo "<script type=\"text/javascript\">".
        "alert('Please login');window.location.href = 'index.php';".
        "</script>";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="profile_stylesheet.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <link href="css/bootstrap.css" rel="stylesheet" />
        <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />
        <link href="css/ct-navbar.css" rel="stylesheet" />

        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/ct-navbar.js"></script>
        <title>Title</title>
    </head>

    <body>
        <div id="navbar-full">
            <div id="navbar">
                <!--
                 navbar-default can be changed with navbar-ct-blue navbar-ct-azzure navbar-ct-red navbar-ct-green navbar-ct-orange
                -->
                <nav class="navbar navbar-ct-blue navbar-fixed-top navbar-transparent" role="navigation">

                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <!--can be link here to home page-->
                            <a class="navbar-brand navbar-brand-logo" href="#">

                                <div class="brand"> <img src="Exium Logo.png" style="width:80px;height:80px;"> My Designs </div>
                            </a>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="javascript:void(0);" data-toggle="search" class="hidden-xs">
                                        <i class="pe-7s-search"></i>
                                        <p>Search</p>
                                    </a>
                                </li>

                                <li>
                                    <a href="#">
                                        <i class="pe-7s-mail">
                                            <span class="label">23</span>
                                        </i>
                                        <p>Messages</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="pe-7s-user"></i>
                                        <p>Account <b class="caret"></b></p>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Action</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li><a href="#">Another action</a></li>
                                        <li><a href="#">Something</a></li>
                                        <li class="divider"></li>
                                        <li><a href="php/function.php?logout=true">Log Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <form class="navbar-form navbar-right navbar-search-form" role="search">
                                <div class="form-group">
                                    <input type="text" value="" class="form-control" placeholder="Search...">
                                </div>
                            </form>

                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
                <div class="blurred-container">
                    <div class="img-src" style="background-image: url('pic/razer_keyboard.jpg')"></div>
                </div>
            </div><!--  end navbar -->
        </div>
        <div class="main">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6"></div>
                <div class="project-body">
                    <section id="projects">

                        <input type="button" value="Project 1" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 2" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 3" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 1" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 2" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 3" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 1" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 2" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 3" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 1" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 2" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <input type="button" value="Project 3" style="height: 400px; width: 250px" onClick="parent.location = 'Prototyper.html'">
                        <!--
                        <input type="button" value="Project 4" style="height: 400px; width: 250px" onClick="parent.location='Prototyper.html'">
                        <input type="button" value="Project 5" style="height: 400px; width: 250px" onClick="parent.location='Prototyper.html'">
                        <input type="button" value="Project 6" style="height: 400px; width: 250px" onClick="parent.location='Prototyper.html'">
                        -->
                    </section>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

    </body>
</html>