<?php
include("conexao.php");

$nomeEv = $_POST['evento'];
$dataEv = $_POST['dataEv'];
$tipev = $_POST['tipev'];
$coordev = $_POST['coordev'];
$colabev = $_POST['colabev'];
$partev = $_POST['partev'];
$obj = $_POST['obj'];
$loc = $_POST['loc'];
$horasev = $_POST['horasev'];
$custo = $_POST['custo'];
$popalvo = $_POST['popalvo'];
$nmpessoa = $_POST['nmpessoa'];


$sql = "INSERT INTO eventos(evento, dataev, tipev, coordev, colabev, partev, obj, loc, horasev, custo, popalvo, nmpessoa) 
VALUES ('$nomeEv','$dataEv','$tipev','$coordev', '$colabev', '$partev', '$obj', '$loc', '$horasev', '$custo', '$popalvo', '$nmpessoa')";

if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Evento cadastrado!')</script>";
    echo "<script>window.location.href = '../pag_sec/eventos2.html';</script>";
} else{
    echo "Erro ".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>