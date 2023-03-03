<?php
session_start();

$conn = mysqli_connect('localhost', 'administrador', 'System32', 'eprosec');

if (isset($_POST['login'])) {
    $username = $_POST['nome'];
    $password = $_POST['password'];

    $query = "SELECT * FROM utilizador WHERE nome='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);
    $num_rows = mysqli_num_rows($result);

    if ($num_rows == 1) {

        session_start();
        $_SESSION['logged_in'] = true;
        $_SESSION['nome'] = $username;

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
    <h1>Login</h1>
    <form action="" method="post">
        <div class="login">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>

            <button type="submit" name="login"> Login </button>
        </div>
    </form>
</body>
</html>