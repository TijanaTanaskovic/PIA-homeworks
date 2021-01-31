

<?php 
    session_start();

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'imdb');


    if(isset($_POST['add'])){
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

        $con->query("INSERT INTO movies (name, shortDescription, genre, screenwriter, director, productionHouse, listOfActors, releaseYear, photo, duration) VALUES ('$name', '$short', '$genre', '$screen', '$director', '$production', '$actors', $year, '$photo', '$duration')") or die($con->error);

        //$s="INSERT INTO movies (name, short description, genre, screenwriter, director, production house, list of actors, release year, photo, duration) VALUES ('$name', '$short', '$genre', '$screen', '$director', '$production', '$actors', $year, '$photo', '$duration')";
        //mysqli_query($con, $s) or die($con->error);

    
        header('location:admin.php');
        
    
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
      <form action="admin.php" method="post">
      <label for="genre"><p class="problem1">Choose a genre:</p></label>
      <select name="genre1" id="genre">
      <option value="action">Action</option>
      <option value="comedy">Comedy</option>
      <option value="drama">Drama</option>
      <option value="thriller">Thriller</option>
      <option value="horror">Horror</option>
      <option value="romance">Romance</option>
      </select>
      <br><br>
      <input type="submit" class="btn btn-outline-light" value="Submit">
    </form>

    </ul>
    
    <form class="navbar-form navbar-right" action="admin.php" method="post">
            <input type="text" class="form-control mr-sm-2" placeholder="Search for a movie" name="find">
            <button type="submit" class="btn btn-outline-light">Search</button>
    </form>

    <div class="problem">
    <form class="navbar-form navbar-right">
    <a class="btn btn-outline-light" href="login.php">Log Out</a>
    </form>
  </div>
  </div>
</nav>


<?php
    

    $con = mysqli_connect('localhost', 'root', '');

    mysqli_select_db($con, 'imdb');

    if(isset($_POST['find'])) {
    $search = ($_POST['find']);
    $check = "SELECT * FROM movies WHERE name LIKE '%$search%'";
    }
    else if(isset($_POST['genre1'])) {
    $search = ($_POST['genre1']);
    $check = "SELECT * FROM movies WHERE genre LIKE '%$search%'";
    }
    else{
    $check = "SELECT * FROM movies";
    }

    $result = mysqli_query($con, $check);
    $resultCheck = mysqli_num_rows($result);
    if($resultCheck > 0){
        while($row = mysqli_fetch_assoc($result)){
        
?>
    <div class="container">
        <div class="content">
            <img class="movie-photo" src="<?= $row['photo'] ?>">
            <div class="title">
            <a href="moviedetails.php?name=<?php echo $row['name'];?>" >
            <p class="title"> <?php echo $row['name']; ?></p> 
            </a>
            </div>
        </div>
    <button type="submit"  name="delete" class="btn btn-dark">Delete</button>  
    <button type="submit"  name="edit" class="btn btn-dark">Edit</button> </br> </br> </br>
    </div>
<?php
  }}
?>



<form action="admin.php" method="post">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" placeholder="Enter name" name="name">
  </div>
  <div class="form-group">
    <label for="short">Short description:</label>
    <input type="text" class="form-control" placeholder="Enter short description" name="short">
  </div>
  <div class="form-group">
    <label for="genre">Genre:</label>
    <input type="text" class="form-control" placeholder="Enter genre" name="genre">
  </div>
  <div class="form-group">
    <label for="screen">Screenwriter:</label>
    <input type="text" class="form-control" placeholder="Enter screenwriter" name="screen">
  </div>
  <div class="form-group">
    <label for="director">Director:</label>
    <input type="text" class="form-control" placeholder="Enter director" name="director">
  </div>
  <div class="form-group">
    <label for="production">Production house:</label>
    <input type="text" class="form-control" placeholder="Enter production house" name="production">
  </div>
  <div class="form-group">
    <label for="actors">List of actors:</label>
    <input type="text" class="form-control" placeholder="Enter list of actors" name="actors">
  </div>
  <div class="form-group">
    <label for="year">Release year:</label>
    <input type="text" class="form-control" placeholder="Enter release year" name="year">
  </div>
  <div class="form-group">
    <label for="photo">Photo:</label>
    <input type="text" class="form-control" placeholder="Insert photo" name="photo">
  </div>
  <div class="form-group">
    <label for="duration">Duration:</label>
    <input type="text" class="form-control" placeholder="Enter duration" name="duration">
  </div>

  <button type="submit"  name="add" class="btn btn-dark">Add movie</button>
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
