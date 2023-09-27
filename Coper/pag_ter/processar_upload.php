<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['arquivo'])) {
    $arquivo = $_FILES['arquivo'];

    // Verifique se o arquivo foi carregado sem erros
    if ($arquivo['error'] === UPLOAD_ERR_OK) {
        $nomeTemporario = $arquivo['tmp_name'];
        $nomeArquivo = $arquivo['name'];

        // Mova o arquivo para o diretório de destino (pasta "uploads" neste exemplo)
        $destino = 'uploads/' . $nomeArquivo;
        move_uploaded_file($nomeTemporario, $destino);

        // Exiba uma mensagem de sucesso e o link para visualizar a imagem
        echo 'Arquivo enviado com sucesso!<br>';
        echo 'Visualizar imagem: <a href="' . $destino . '">' . $nomeArquivo . '</a>';
    } else {
        // Ocorreu um erro durante o envio do arquivo
        echo 'Erro ao enviar o arquivo. Código do erro: ' . $arquivo['error'];
    }
}
?>
