<?php
session_start();

// Tratando o texto para inserir no arquivo
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['categoria']);
$descricao = str_replace('#', '-', $_POST['descricao']);

// A constante PHP_EOL ela coloca uma quebra de linha idependente do sistema que esta usando
$texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

// Inserindo os dados no arquivo
$arquivo = fopen('chamados.hd', 'a');
fwrite($arquivo, $texto);
fclose($arquivo);

header('Location: ../abrirChamado.php');
