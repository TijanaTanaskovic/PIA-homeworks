<!DOCTYPE html>
<html>
<!--
Domaci 4 (PIA 2020/2021)
-->
<head>
    <title>PIA HW - IMDB</title>
    <link rel="stylesheet" href="imdb.css">
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

    <div class="bg">
        <div class="container-fluid">

        <h2>Welcome to the best movie review site</h2>

        <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
        
        <div id="id01" class="modal">
          
          <form class="modal-content animate" action="validation.php" method="post">
  
              <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

        
            <div class="container">
              <label for="uname"><b>Username or Email</b></label>
              <input type="text" placeholder="Enter Username or Email" name="uname" required>
        
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
                
              <button type="submit">Login</button>
            </div>
        
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>

            </div>
          </form>
        </div>
        
        <script>

        var modal = document.getElementById('id01');

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

        <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">Sign Up</button>

        <div id="id02" class="modal1">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <form class="modal1-content" action="registration.php"  method="post">
            <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill this form with your informations.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" required>

            <label for="surname"><b>Surname</b></label>
            <input type="text" placeholder="Enter Surname" name="surname" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" required>

            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
          

            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
            </div>
        </form>
        </div>

       <script>

        var modal1 = document.getElementById('id02');

        window.onclick = function(event) {
        if (event.target == modal1) {
            modal.style.display = "none";
        }
        }
        </script> 


        
        
        </div>
    </div>


</body>
</html>