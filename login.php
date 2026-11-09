<?php
  session_start();

    if(isset($_SESSION['username'])){


    header("Location: catalogo.php");
    }


    if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if($_POST['username'] == "admin" && $_POST['password'] == "password1234"){
    $_SESSION['username'] = "admin";

    
 
    header("Location: catalogo.php");

    }


    }


    $error = "User name o password sbagliati";



?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Accedi</h1>
    <?php
    
    echo $error;
    
    ?>
   

    <form method="post" action="login.php">
        <label>
            <h3>Username</h3>:
            <input type="text" name="username" required>
        </label>
        <br>

        <label>
           <h3>Password</h3> :
            <input type="password" name="password" required>
        </label>
        <br>

        <button type="submit">Accedi</button>
    </form>
</body>
</html>