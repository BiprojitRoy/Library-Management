<!DOCTYPE html>
<html>
<head>
  <title>Library Management System</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Latest compiled and minified JQuery -->
  <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script> 

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> 

</head>
<body>
<!-- navigation start -->

  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Library Management System</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home<span class="sr-only">(current)</span></a></li>
          <li class="active"><a href="http://localhost/lib_db/m_login.php">Member Login<span class="sr-only">(current)</span></a></li>
		  <li class="active"><a href="http://localhost/lib_db/a_login.php">Admin Login<span class="sr-only">(current)</span></a></li>

          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICES <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="http://localhost/lib_db/show_all.php">All Items</a></li>
              <li><a href="http://localhost/lib_db/category.php">All category</a></li>
              <li><a href="http://localhost/lib_db/reqdateshowall.php">Show by requested</a></li>
              
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
         
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">About Library</a></li>
              <li><a href="#">Library Committee</a></li>
              <li><a href="#">Training</a></li>
              
              
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

<!-- navigation ends -->
</body>
</html>