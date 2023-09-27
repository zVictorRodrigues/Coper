<?php 
include ("conexao.php");

$mail = $_POST['email'];
$senha = $_POST['senha'];
$nome = $_POST['nome'];
$cargo = $_POST['cargo'];

$sql = "INSERT INTO usuarios(mail, senha, nome, cargo) VALUES ('$mail', '$senha','$nome','$cargo')";

if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Cadastro efetuado!')</script>";
    echo "<script>window.location.href = '../pag_sec/cadastro.html';</script>";
} else{
    echo "Erro ".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>