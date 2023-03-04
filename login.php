<?php
session_start();

$conn = mysqli_connect('localhost', 'administrador', 'System32', 'eprosec');

if (isset($_POST['login'])) {
    $numero = $_POST['numero'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilizador WHERE numero='$numero' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1) {

        $row = mysqli_fetch_assoc($result);
        $_SESSION['logged_in'] = true;
        $_SESSION['numero'] = $numero;
        $_SESSION['cargo'] = $row['cargo'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['sobrenome'] = $row['sobrenome'];

        header("Location: dashboard.php");
    } else {

        echo "<p>Não existe este utilizador</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | EPROSEC</title>
</head>
<body>
    <div class="background">
        <img id="teste" src="EPROSEC (1).png" alt="">
    </div>
<section class="formulario">
    <form action="" method="post">
        <div class="login">
            <h1>Login</h1>
            <label for="numero">Número</label>
            <input type="text" name="numero" id="numero" required><br>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required><br>

            <button type="submit" id="button" name="login"> Login </button>
            </div>
    </form>
    </section>
</body>
</html>