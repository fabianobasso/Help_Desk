<?php
session_start();

// Script de funções importantes do App
require_once 'utils.php';

$usuarioDoSistema = recuperarUsuarios();
$usuarioAutenticado = false;
$usuarioID = null;
$usuarioPerfil = null;
$erro = 'erro';

// Verificar se o usuário existe no sistema
foreach ($usuarioDoSistema as $usuario){
    if($usuario['email'] == $_POST['email'] && $usuario['senha'] == $_POST['senha']){
        if(trim($usuario['status']) === "ativo"){
           $usuarioAutenticado = true;
           $usuarioID = $usuario['id'];
           $usuarioPerfil = $usuario['perfil'];
        } else {
            $erro = 'erroInativo';
        }
        
    }
}
echo $usuarioAutenticado;
if($usuarioAutenticado){
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuarioID;
    $_SESSION['perfil'] = $usuarioPerfil;
    header('Location: ../home.php');
}else{
    $_SESSION['autenticado'] = 'NAO';
    header("Location: ../index.php?login=$erro");
}
