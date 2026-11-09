<?php
  session_start();
 
    if (isset($_SESSION['username'])) {
    header('Location: catalogo.php');
    exit;
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'password123') {
        $_SESSION['username'] = $username;

        header('Location: catalogo.php');
        exit;
    }

    $error = 'Username o password non corretti.';
}





?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Accedi</h1>

   

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