<!DOCTYPE html>
<html>
<!--
Domaci 4 (PIA 2020/2021)
-->
<head>
    <title>PIA HW - IMDB</title>
    <link rel="stylesheet" href="home.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Tijana Tanaskovic" />
    <meta charset="utf-8" />
    <meta name="description" content="HTML/CSS/BOOTSTRAP/JAVASCRIPT/PHP homework assignment." />
    <meta name="keywords" content="pia, web programming, html, css, bootstrap, javascript, php" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.5.0/js/all.js%22%3E"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js%27%3E"> </script>
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" data-auto-a11y="true"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="imdb.jpg" alt="imdb" height=45px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Genres
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Comedy</a>
          <a class="dropdown-item" href="#">Drama</a>
        </div>
      </li>
    </ul>
    
    <form class="navbar-form navbar-right">
            <input type="text" class="form-control mr-sm-2" placeholder="Search">
            <button type="submit" class="btn btn-outline-light">Search</button>
    </form>
    <div class="problem">
    <form class="navbar-form navbar-right">
    <a class="btn btn-outline-light" href="login.php">Log Out</a>
    </form>
</div>
  </div>
</nav>

<footer class="container-fluid text-center">
  <div class="row py-4 d-flex align-items-center">
      <div class="col-md-12 text-center">
           <a href="#"><i class="fab fa-instagram-square mr-4"></i></a>
           <a href="#"><i class="fab fa-facebook mr-4"></i></a>
           <a href="#"><i class="fab fa-twitter-square mr-4"></i></a>
           <a href="#"><i class="fab fa-pinterest mr-4"></i></a>
         </div>
       </div>
 </footer>   
    

</body>  

</html>
