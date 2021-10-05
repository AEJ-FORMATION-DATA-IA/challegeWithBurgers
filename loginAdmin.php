<?php

    $success="";
    $error="";
    


    if(isset($_POST['submit'])){
        if ($_POST['uname'] == "admin"){
            if($_POST['pass'] =="password"){
                $error="";
                $success="Welcome Admin !!!";
                // rediredct to another page on successful login
                header("Location :welcome.php");
                exit();
            }
            else{
                $error="Invalid Password !!!";
                $success="";
            }
        }
        else{
            $error="Invalid UserName !!!";
            $success="";
        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.mini.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    
    <title>Document</title>
</head>
<body>
    

<div class="container">
    <form  method="post">
    <p class="error"><?php echo $error ; ?></p>   <p class="succes"><?php echo $success ; ?></p>
        <div class="form-input">
            <i class="fa fa-user fa-2x cust" aria-hidden="true"></i>
            <input type="text" name="uname" placeholder="User Name" required><br>
           
            <i class="fa fa-lock fa-2x cust" aria-hidden="true"></i>
            <input type="password" name="pass" placeholder="Enter Password"><br>
           
            <input type="submit" name="submit" value="SUBMIT">
        </div>
    </form>
</div>

</body>
</html>