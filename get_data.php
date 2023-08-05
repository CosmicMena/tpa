<?php
include_once('config.php');

// Consulta para obter os dados do título e do texto
$sql = "SELECT * FROM info";
$result = $conexao->query($sql);

// Verificar se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    // Construir um array com os dados do título e do texto
    $data = array(
        'titulo' => $row['titulo'],
        'texto' => $row['texto'],
        'controle' => $row['controle']
    );

    // Converter o array para JSON e retornar os dados
    echo json_encode($data);
} else {
    // Caso não haja resultados, retornar um JSON vazio
    echo json_encode(array());
}

$conexao->close();
?>

