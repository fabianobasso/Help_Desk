<?php
//session_start();

/**
 * Script com todas as funções uteis para o app help desk
 * 
 * @author Fabiano Basso <fabiano.basso.dev@gmail.com>
 */

/**
 * Função para criar o usuário administrador do sistema caso não esxita
 * email: adm@hd.com 
 * senha: 123456
 */
function configInicial(){
    $arquivo = 'app/user.hd';
    if(!file_exists($arquivo)){
        $arquivoUser = fopen('app/user.hd', 'a');
        $texto = 'id#1#email#adm@hd.com#senha#123456#perfil#1#status#ativo' . PHP_EOL;
        fwrite($arquivoUser, $texto);
        fclose($arquivoUser);
    }  
}

function formatarUser($usuarios){
    $usuariosFormatados = [];
    $usuarioIdentificado = [];
    foreach ($usuarios as $usuario ){
        $usuariosFormatados[] = explode('#', $usuario);
    } 
    $ultimaPosicao = count($usuariosFormatados) - 1;
    unset($usuariosFormatados[$ultimaPosicao]);
    
    foreach ($usuariosFormatados as $usuario){
        $criaArrayUsuario = [
            $usuario[0] => $usuario[1], 
            $usuario[2] => $usuario[3], 
            $usuario[4] => $usuario[5], 
            $usuario[6] => $usuario[7],
            $usuario[8] => $usuario[9],
            ];
        $usuarioIdentificado[] = $criaArrayUsuario;
    }
    
    return $usuarioIdentificado;
}

function recuperarUsuarios(){
    $usuarios = [];
    $arquivoUser = fopen('user.hd', 'r');
    while (!feof($arquivoUser)){
        $usuario = fgets($arquivoUser);
        $usuarios[] = $usuario;
    }
    fclose($arquivoUser);
    
   $usuariosFormatdo = formatarUser($usuarios);
    
    return $usuariosFormatdo;
}



/**
 * Função para recuperar e tratar todos os chamados abertos do arquivo chamados.hd,
 * e devolver com um array com todos os chamados
 * 
 * @return Array
 */
function recuperaChamados() {
    $chamados = [];
    
    $arquivo = fopen('app/chamados.hd', 'r');
    while (!feof($arquivo)){ 
        $linha = fgets($arquivo);
        $chamados[] = $linha;
    }
    fclose($arquivo);
    
    $chamadosRecuperados = [];
    
    foreach ($chamados as $chamado){
        $chamadosRecuperados[] = explode('#', $chamado);
    }
    // Eleminar sempre a ultima posição do array que retorna um valor vazio.
    $ultimaPosicao = count($chamadosRecuperados) - 1;
    unset($chamadosRecuperados[$ultimaPosicao]);
    
    return $chamadosRecuperados;
}


/**
 * Função responsável por listar os chamados de acordo com o perfil do usuário.
 * perfil 1 -> Administrador pode visualizar todos os chamados.
 * perfil 2 -> Usuário pode apenas ver os próprios chamados abertos.
 * 
 * @param Array $chamados Espera um array com todos os chamados.
 * @return Array
 */
function listarChamados($chamados) {
    
    if($_SESSION['perfil'] == 2){
        $listaChamados = [];
        
        foreach ($chamados as $chamado){
            
            if($_SESSION['id'] != $chamado[0]){
                continue;
            }
            
            $listaChamados[] = $chamado;
        }
        return $listaChamados;
    }
    return $chamados;
}

function cadastrarUsuario($texto){
    $arquivoUsuario = fopen('user.hd', 'a');
    fwrite($arquivoUsuario, $texto);
    fclose($arquivoUsuario);
}




