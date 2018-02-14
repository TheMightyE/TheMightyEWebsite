<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>School Projects</title>
    <!--CDNs-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--end CDNs-->

    <link rel="stylesheet" type="text/css" href="stylesheets/school-projects.css">
    <script src="helper-methods.js"></script>

</head>
<body>
<?php include 'user_info.php' ?>


<!--navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target=".navbar-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php" id="nav-logo">
                <img style="width: 50px; height: 50px" src="resources/logo.png">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li class="active"><a href="school-projects.php">School Projects<span
                                class="sr-only">(current)</span></a>
                </li>
                <li><a href="personal-projects.php">Personal Projects</a></li>
                <li><a href="about-me.php">About Me</a></li>
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--end navbar-->
<header>
    <div class="container" id="header-txt-container">
        <!--<img class="img-responsive" id="header-img" src="resources/project-wide.jpg">-->
        <h1 class="text-center" id="header-txt">My School Projects</h1>
    </div>
</header>

<!--Knight's tour-->
<div class="container projects-title">
    <h2>Knight's Tour
        <span class="btn-group">
            <button class="btn btn-default">View on GitHub</button>
        </span>
    </h2>
</div>
<div class="container projects">
    <img class="pull-left project-img" src="resources/knights-tour.gif" alt="Knight's Tour gif">
    <p id="knights-tour-description"></p>
</div>

<!--Stocks-->
<div class="container projects-title">
    <h2>Web Scraping
        <span class="btn-group">
            <button class="btn btn-default"
                    onclick="window.open('https://github.com/TheMightyE/NJIT_F17/tree/master/cs288/hw09')">View on GitHub</button>
        </span>
    </h2>
</div>
<div class="container projects">
    <a href="resources/stocks-full-picture.png">
        <img class="pull-right project-img" src="resources/stocks.png" alt="Stocks">
    </a>
    <p id="stocks-description"></p>
</div>

<footer>
    <div class="container-fluid text-center" id="footer-container">
        <p>footer</p>

    </div>
</footer>

<script>
    loadKnightsTour();
    loadStocks();
</script>

</body>

</html>