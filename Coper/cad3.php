<?php
include("conexao.php");

$proj = $_POST['proj'];
$moda = $_POST['moda'];
$coordp = $_POST['coordp'];
$colap = $_POST['colap'];
$partep = $_POST['partep'];
$obj = $_POST['obj'];
$obje = $_POST['obje'];
$dura = $_POST['dura'];
$metod = $_POST['metod'];
$crono = $_POST['crono'];
$popalvo = $_POST['popalvo'];
$recne = $_POST['recne'];


$sql = "INSERT INTO projetos (proj,moda,coordp,colap,partep,obj,obje,dura,metod,crono,popalvo,recne) VALUES ('$proj', '$moda','$coordp','$colap','$partep','$obj','$obje','$dura','$metod','$crono','$popalvo','$recne')";

if(mysqli_query($conexao, $sql)){
    echo "<script>alert('Projeto cadastrado!')</script>";
    echo "<script>window.location.href = '../pag_sec/projetos2.html';</script>";
} else{
    echo "Erro ".mysqli_connect_error($conexao);
}
mysqli_close($conexao);

?>


?>