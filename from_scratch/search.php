<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EFI | Home</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="../from_scratch/css/dropzone.css">
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="../from_scratch/js/dropzone.js"></script>
</head>
<body ng-app="efi" ng-controller="masterCtrl">
<nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">India Environment</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li class="active"><a href="search.php" >Search</a></li>
                <li><a href="newpost.php" >Add a New</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container">
    
    <!-- Drop and drag functionality-->
    <div ng-hide="hideUpload">
        <div id="dropzoneArea" class="dropzone">
        </div>
        <div id="searchButton">
            <button id="search" type="button" class="btn btn-primary" style="width:20%" disabled>Search</button>
        </div>
    </div>  
    <div id="page-content-wrapper" ng-show="hideUpload">
        <div class="container-fluid">
            <div class="posts">
                <efi-search ng-repeat="post in posts"></efi-search>
            </div>
        </div>
    </div>
</div>
    <script src="../from_scratch/js/upload.js"></script>
</body>
</html>                                     