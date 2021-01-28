<?php
require_once 'utils.php';
$cadastro = false;
$erro = 'campo';
$usuarioExite = false;

if($_POST['email'] != '' && $_POST['senha'] != ''){
    // Gerar o id do proximo usuário
    $usuarios = recuperarUsuarios();
    $id = count($usuarios) + 1;

    $texto = 'id#' . $id 
               . '#email#' . $_POST['email']
               . '#senha#' . $_POST['senha']
               . '#perfil#' . $_POST['adm']
               . '#status#ativo' . PHP_EOL;
    
    foreach ($usuarios as $usuario){
        if(trim($usuario['email']) == trim($_POST['email'])){
            $usuarioExite = true;
        }  
    }
    
    if($usuarioExite){
        $erro = 'existe';
    } else {
        cadastrarUsuario($texto);
        $cadastro = true;
    } 

}

if($cadastro){
        header("Location: ../home.php?cadastro=sucesso");
    } else {
        header("Location: ../home.php?cadastro=$erro");
    }



