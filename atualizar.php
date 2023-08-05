<?php
include('config.php');

if(isset($_POST['enviar']))
{
    $titulo = $_POST['titulo'];
    $texto = $_POST['info'];
    $controle = $_POST['controle'];

    $sqlupdate = "UPDATE info SET texto='$texto', titulo='$titulo', controle='$controle' WHERE id='1'";

    $result = $conexao->query($sqlupdate);
}

$conexao->close();
header('Location: script.php');
exit();
?>