<?php
    require_once 'app/utils.php';
    configInicial();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    
</head>
<body>
    
    <nav class="navbar navbar-dark bg-dark">
        <a href="" class="navbar-brand">
            <i class="fas fa-headset fa-2x d-inline-block align-top text-info"></i>
            <span class="ml-2">Help Desk</span>
        </a>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-login">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="app/validarLogin.php" method="post">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="E-mail" name="email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" id="" class="form-control" placeholder="Senha">
                            </div>
                            
                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erro'): ?>
                                    
                                    <div class="text-danger">
                                        Usuário ou senha invalido(s)
                                    </div>
                            
                           <?php endif; ?>
                            
                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erroSession'): ?>
                                    
                                    <div class="text-danger">
                                        Você precisa estar autenticado.
                                    </div>
                            
                           <?php endif; ?>
                            
                            <?php
                                if(isset($_GET['login']) && $_GET['login'] == 'erroInativo'): ?>
                                    
                                    <div class="text-danger">
                                        Usuário não está mais ativo contate o Administrador.
                                    </div>
                            
                           <?php endif; ?>    
                                
                            <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>