<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> 
 <link rel="stylesheet" href="style1.css">
<title>Document</title>
</head>
<body >
    
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <img src="images (1).png" width="40px" alt="" >
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Menu</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Restaurant</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">contact</a>
                    </ul>
                  </div>
                </div>
              </nav>


              <div class="cercle">
                  <img src="burger.png" width="550px" alt="">
              </div>

            <div class="sign">
                <form class="d-flex ">
                    <button class="btn " type="submit">Sign in</button>
                    <button class="btn1 " type="submit">Sign up</button>
                  </form>
            </div>

            <div class="text-gauche">
                <h1>Burger Brothers</h1><br>
                <p>The Burgers Brothers were created <br>
                    according to a secret recipe that<br>
                    gives them the greatest pleasure <br>
                    while tastinng it.    
                </p><br><br>
                <p>Due to the pandemic you can book <br>
                 on online visit to our restautant<br>
                    branches 
                </p><br>

                <h2>Or order  by delivery</h2><br>
                <input type="button" class="buttonD" value="Input Button">
            </div>


            <div class="grid-container">
                <div class="premier">
                    <h2>Restaurant</h2>
                    <p><a href="#">Click and see</a></p>
                    <p><a href="#">locations</a></p>
                </div>
                <div class="deuxieme">
                    <h2>Calendar</h2>
                    <p><a href="#">Click and see free</a></p>
                    <p><a href="#">times</a></p>
                </div>
                <div class="troisiem">
                    <br><h2>Phone number</h2>
                    <input type="button" class="button" value="+995 512 345 678" >

                    
                </div>  
                <div class="quatre">
                    <input type="button" class="buttonD" value="Input Button">

                </div>
                
              </div>



              <div class="dernier">
                
                <div class="">
                    <input type="button" class="buttonz" value="Facebook" >

                    
                </div>  
                <div class="">
                    <input type="button" class="buttonz" value="Instagram">

                </div>
                <div class="">
                    <input type="button" class="buttonz" value="twitter">

                </div>
                
              </div>
        </div>
</body>
</html>

<?php 
}else{
     header("Location: indexF.php");
     exit();
}
 ?>