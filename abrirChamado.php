<?php
    require_once 'app/validadorAcesso.php';
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
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="app/logoff.php"><i class="fas fa-sign-out-alt fa-2x"></i></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row">
            <div class="card-abrir-chamado">

                <div class="card">
                    <div class="card-header">
                        Abertura de Chamado
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <form action="app/registraChamado.php" method="post">
                                    <div class="form-group">
                                        <label for="titulo">Título</label>
                                        <input type="text" name="titulo" id="titulo" class="form-control" placeholder="Título">
                                    </div>

                                    <div class="form-group">
                                        <label for="categoria">Categoria</label>
                                        <select name="categoria" id="" class="form-control">
                                            <option value="Criação Usuário">Criação Usuário</option>
                                            <option value="Impressora">Impressora</option>
                                            <option value="Hardware">Hardware</option>
                                            <option value="Software">Software</option>
                                            <option value="Rede">Rede</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <textarea name="descricao" id="descricao" class="form-control" rows="3"></textarea>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-6">
                                            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>