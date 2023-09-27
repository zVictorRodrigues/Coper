<?php
session_start();
include("../conexao.php");

$resultado = null;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tipev = $_POST['tipev'];
    $consulta = "SELECT * FROM eventos WHERE tipev = '$tipev'";
    $resultado = mysqli_query($conexao, $consulta);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background-color: #1d2c4c;
        }

        .container-prin{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #cad2e2;
            width: 30%;
            height: 50%;
            margin: 12% 35%;   
        }

        .grid-item-2 {
            background-color: #cad2e2;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            padding: 2px;
            transition: transform 0.3s ease;
            cursor: pointer;
            color: #1d2c4c;
            margin: 0 41%;
            width: 15%;
            height: 60px;
        }

        footer {
            display: block;
            justify-content: center;
            text-align: center;
        }

        footer a {
            text-decoration: none;
        }
    </style>
    <title>Projetos - COPER</title>
</head>
<body>
    <img src="../img/coper.jpeg">    
    <div class="container-prin">
    <br>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="tipev">Tipo do Evento:</label>
            <select name="tipev" class="select-cargo">
                <option value="curso">Curso</option>
                <option value="palestra">Palestra</option>
                <option value="atvex">Atividade Externa</option>
                <option value="apcul">Apresentação Cultural</option>
                <option value="exp">Exposição Artística</option>
                <option value="outro">outro</option>
            </select>
            <br>
            <input type="submit" value="Visualizar">
        </form>
    </div>
    <br>
    <div class = container-prin>
        <?php
        if ($resultado != null) {
            while($linha = mysqli_fetch_array($resultado)){
                $data = date_format(date_create($linha['dataev']),'d/m/Y');
                echo $linha['evento'] . "<br>" . $data . "<br>" . $linha['tipev'] . "<br>" .$linha['coordev'] . "<br>" .$linha['colabev'] ."<br>" .$linha['partev'] ."<br>" .$linha['obj'] ."<br>" .$linha['loc'] ."<br>" .$linha['horasev'] ."<br>" .$linha['custo'] ."<br>" .$linha['popalvo'] ."<br>" .$linha['nmpessoa'] ."<br> -------------- <br>"; 
            }
            mysqli_close($conexao);
        }
        ?>
    </div>
    <footer><button onclick="goBack()">Voltar</button>

<script>
function goBack() {
  window.history.back();
}
</script>
</footer>
</body>
</html>
