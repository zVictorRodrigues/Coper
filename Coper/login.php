<?php

session_start();
include("conexao.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $consulta = "SELECT * FROM usuarios WHERE mail = '$email' AND senha = '$senha'";
    $resultado = mysqli_query($conexao, $consulta);

    if (mysqli_num_rows($resultado) == 1) {
        $dadosUsuario = mysqli_fetch_assoc($resultado);
        $cargo = $dadosUsuario["cargo"];

        switch($cargo){
            case "coord";
            header("Location: pag_usu/coord.html");
            break;
            case "prof";
            header("Location: pag_usu/prof.html");
            break;
            default:
            die("<script>alert('Cadastro inválido!')</script>");
        }

       
    } else {
        
        $erro = "Email ou senha inválidos.";
    }

  
    mysqli_close($conexao);
}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img/coper.png"/>

    <link rel="stylesheet" href="css/style.css">
    <title>Login - COPER</title>
</head>
<body>
    <div class="container">
    <img src="img/coper.jpeg" alt="logo coper" class="logo_coper">
    <br><br>
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <b><label class="label-log">Email</label><br></b>
        <input type="email" name="email" required class="box-log" placeholder="Digite seu email"><br><br>
        <b><label class="label-log">Senha</label><br></b>
        <input type="password" name="senha" required class="box-log" placeholder="Digite a senha"><br><br>
        <b><input type="submit" value="Entrar" class="botao-log"><br><br></b>
    </div>
        <?php
        
        if (isset($erro)) {
            echo "<p>$erro</p>";
        }
        ?>
    </form>
</body>
</html>
