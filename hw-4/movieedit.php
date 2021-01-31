
<?php
    if(isset($_GET['edit1'])) {
        $mysqli = new mysqli('localhost', 'root', '', 'imdb') or die(mysqli_error($mysqli));
        $s=$_GET['edit1'];
        $res=$mysqli->query("SELECT * FROM movies WHERE id=$s") or die($mysqli->error);
        $row=$res->fetch_assoc();
}
?>


<?php 
    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'imdb');


    if(isset($_POST['edit'])){
        $name=$_POST['name'];
        $short=$_POST['short'];
        $genre=$_POST['genre'];
        $screen=$_POST['screen'];
        $director=$_POST['director'];
        $production=$_POST['production'];
        $actors=$_POST['actors'];
        $year=$_POST['year'];
        $photo=$_POST['photo'];
        $duration=$_POST['duration'];
        $s=$_POST['s'];

        $con->query("UPDATE movies SET name='$name', shortDescription='$short', genre='$genre', screenwriter='$screen', director='$director', productionHouse='$production' , listOfActors='$actors', releaseYear=$year, photo='$photo', duration='$duration' WHERE id=$s") or die($con->error);

    
        header("location:admin.php");
        
    }
?>


<!DOCTYPE html>
<html>
<!--
Domaci 4 (PIA 2020/2021)
-->
<head>
    <title>PIA HW - IMDB</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="movies.css">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <a class="navbar-brand"><img src="imdb.jpg" alt="imdb" height=45px></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="admin.php">Home <span class="sr-only">(current)</span></a>
      </li>
    </ul>

    <div class="problem">
    <form class="navbar-form navbar-right">
    <a class="btn btn-outline-light" href="login.php">Log Out</a>
    </form>
  </div>
  </div>
</nav>




<form action="movieedit.php" method="post">
<input value="<?php echo $row['id']?>" name="s" style="visibility:hidden;">
</br> </br> </br>
  <div class="form-group">
    <label for="name">Name:</label>
    <input value="<?php echo $row['name']?>" type="text" class="form-control" placeholder="Edit name" name="name">
  </div>
  <div class="form-group">
    <label for="short">Short description:</label>
    <input  value="<?php echo $row['shortDescription']?>" type="text" class="form-control" placeholder="Edit short description" name="short">
  </div>
  <div class="form-group">
    <label for="genre">Genre:</label>
    <input  value="<?php echo $row['genre']?>" type="text" class="form-control" placeholder="Edit genre" name="genre">
  </div>
  <div class="form-group">
    <label for="screen">Screenwriter:</label>
    <input  value="<?php echo $row['screenwriter']?>" type="text" class="form-control" placeholder="Edit screenwriter" name="screen">
  </div>
  <div class="form-group">
    <label for="director">Director:</label>
    <input  value="<?php echo $row['director']?>" type="text" class="form-control" placeholder="Edit director" name="director">
  </div>
  <div class="form-group">
    <label for="production">Production house:</label>
    <input  value="<?php echo $row['productionHouse']?>" type="text" class="form-control" placeholder="Edit production house" name="production">
  </div>
  <div class="form-group">
    <label for="actors">List of actors:</label>
    <input  value="<?php echo $row['listOfActors']?>" type="text" class="form-control" placeholder="Edit list of actors" name="actors">
  </div>
  <div class="form-group">
    <label for="year">Release year:</label>
    <input  value="<?php echo $row['releaseYear']?>" type="text" class="form-control" placeholder="Edit release year" name="year">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input  value="<?php echo $row['photo']?>" type="text" class="form-control" placeholder="Insert photo" name="photo">
  </div>
  <div class="form-group">
    <label for="duration">Duration:</label>
    <input  value="<?php echo $row['duration']?>" type="text" class="form-control" placeholder="Edit duration" name="duration">
  </div>

  <button type="submit"  name="edit" class="btn btn-dark">Edit</button>
</form>





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
