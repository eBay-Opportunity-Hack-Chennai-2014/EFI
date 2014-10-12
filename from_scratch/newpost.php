<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>EFI | Home</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="css/style.css"> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
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
                <li><a href="search.php">Search</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="main_wrapper">
    <form class="add-form">
        <div class="form-group">
            <label for="fileName">Filepath</label>
            <input type="text" class="form-control" id="fileName" placeholder="path/to/file.jpg" required>
        </div>
        <div class="form-group">
            <label for="img_title">Title</label>
            <input type="text" class="form-control" id="img_title" placeholder="e.g This is about Crane" required>
        </div>
        <div class="form-group">
            <label for="img_description">Description</label>
            <input type="text" class="form-control" id="img_description" placeholder="e.g Facts about crane" required>
        </div>
        <div class="form-group">
            <label for="img_tag">Tags</label>
            <input type="text" class="form-control" id="img_tag" placeholder="e.g crane, white crane, long nose" required>
        </div>
        <div class="form-group">
            <label for="img_highlight">Highlights</label>
            <input type="text" class="form-control" id="img_highlight" placeholder="Wow fact(s) about crane, may not have too" >
        </div>
        <button type="button" id="add_data" class="btn btn-primary">Add</button>
    </form> 
</div>
<script type="text/javascript">
    $(document).on('click','#add_data', function(){

        var img_title = $('#img_title').val();
        var img_description = $('#img_description').val();
        var img_tag = $('#img_tag').val();
        var img_highlight = $('#img_highlight').val();
        var fileName = $('#fileName').val();

        if (fileName.length === 0 ||
            img_title.length === 0 ||
            img_description.length === 0 ||
            img_tag.length === 0 ) {
            alert("Title, Description and Tags are must");
            return;
        }

        var params = {
            fileName: fileName,
            img_title: img_title,
            img_description: img_description,
            img_tag: img_tag,
            img_highlight: img_highlight
        };

        $.post("upload.php", params, function(data) {
            $('#img_title').val("");
            $('#img_description').val("");
            $('#img_tag').val("");
            $('#img_highlight').val("");
        });

    });

</script>
</body>
</html>