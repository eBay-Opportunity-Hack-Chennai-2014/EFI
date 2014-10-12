<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>EFI | Home</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script type="text/javascript" src="//momentjs.com/downloads/moment.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
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
                        <li class="active"><a href="">Home</a></li>
                        <li><a href="search.php" >Search</a></li>
                        <li><a href="newpost.php" >Add a New</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li>
                        Choose a Category
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="category" value="all" checked>All
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="category" value="animals">Animals
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="category" value="birds">Birds
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="category" value="places">Places
                        </label>
                    </li>
                    <li>
                        <label>
                            <input type="radio" name="category" value="herbs">Herbs
                        </label>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper">
                <div class="container-fluid">
                    <div class="posts">
                        <efi-post ng-repeat="post in posts">

                        </efi-post>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </div>
        <!-- /#wrapper -->
    </body>
</html>                                     