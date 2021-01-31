
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

<?php
    session_start();

    if(isset($_GET['name'])){  
     
    $mysqli = new mysqli('localhost', 'root', '', 'imdb');
    $name=$_GET['name'];
    $res=$mysqli->query("SELECT * FROM movies WHERE name='$name'")  or die($mysqli->error);

    while($row = $res->fetch_assoc()):
 
       
?>
    
    <tr>
                <br>
                <br>        
            </tr>
            <tr>
               <td>
                <div class="topinfo"> 
                <?php echo $row['name']?>  (<?php echo $row['releaseYear'] ?>) <?php echo $row['duration'] ?> | <?php echo $row['genre'] ?>
                </div>
               </td> 
        
            </tr>
                
            <tr>
                <td rowspan=2>
                  
                    <img class="image" style="width:400px; height:600px" src="<?php echo $row['photo'] ?>"> 
                 <br>
                </td>
                <br>
                <td> <div class="short">     <p> <strong> Short description: </strong> </p>    <?php echo $row['shortDescription'] ?></div> 
                <br>
                </td> 
            </tr>
            <tr>
                <td>
                  <div class="inf" >  <p> <strong> Director: </strong> </p>  <?php echo $row['director']?></div> </br>
                  <div class="inf">  <p> <strong> Screenwriter: </strong> </p>  <?php echo  $row['screenwriter'] ?></div> </br> 
                  <div class="inf">  <p> <strong> List of actors: </strong></p>  <?php echo  $row['listOfActors'] ?></div> </br>
                  <div class="inf"> <p> <strong> Production house: </strong> </p> <?php echo $row['productionHouse']  ?></div> </br>
                </td>
            </tr>


    <?php endwhile;
}
?>


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
