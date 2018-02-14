<!DOCTYPE html>
<html lang="en" class="full-height">

<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1">
    <title>The Mighty E</title>

    <!--CDNs-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--end CDNs-->

    <link rel="stylesheet" type="text/css" href="stylesheets/index.css">
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
                <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a>
                </li>
                <li><a href="school-projects.php">School Projects<span
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

<!--<div class="background">-->
<div class="container">
    <div class="jumbotron" id="main-heading">
        <h1 style="text-align: center" id="main-heading-txt">Syed Emad Khalid</h1>
        <h2 style="text-align: center" id="subtitle-txt">Bachelor of Computer Science</h2>
    </div>
</div>


<div class="container">
    <div class="jumbotron" id="jt-current-goal">
        <h2 id="curr-goal-title">Current Goal</h2>
        <p id="objective"></p>
    </div>
</div>

<div class="container">
    <div class="jumbotron" id="education">
        <h2>Education</h2>
        <ul id="edu-list"></ul>
        <!-- TODO: Fix list-->

    </div>
</div>
<div class="container">
    <div class="jumbotron" id="jt-skills">
        <h2 id="my-skils-title">Some of My Skills</h2>
        <ul id="skill-list"></ul>

    </div>
</div>
<!--</div>-->

<script>
    loadObjective();
    loadEducation();
    loadSkills();
</script>

</body>


</html>