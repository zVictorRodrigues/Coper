<?php
include("conexao.php");

$nomeEv = $_POST['evento'];
$dataEv = $_POST['dataEv'];
$respon = $_POST['respon'];
$nucleo = $_POST['nuc'];
$descri = $_POST['descri'];

$sql = "INSERT INTO eventos(evento, dataev, respon, nuc, descri) VALUES ('$nomeEv','$dataEv','$respon','$nucleo','$descri')";

if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Evento cadastrado!')</script>";
    echo "<script>window.location.href = '../pag_sec/eventos.html';</script>";
} else{
    echo "Erro ".mysqli_connect_error($conexao);
}
mysqli_close($conexao);
?>