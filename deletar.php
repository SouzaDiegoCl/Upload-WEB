<?php
include("conexao.php");
$file = $_GET["deletarArquivo"];

$dir = "arquivos/";
/* Excluir do diretório */
mysqli_query($conexao, "DELETE from img where img_name_random = '$file' ");

unlink($dir . $file);
/* Excluir do DataBase */

echo ("Arquivo apagado!");
header("location:arquivo.php");

?>