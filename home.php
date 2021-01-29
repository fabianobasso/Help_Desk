<?php
    //session_start();
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
    
    <script src="assets/js/app.js"></script>  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>

<?php if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'campo'){ ?>

<body onload="modalErroCadastro()">

<?php }elseif (isset($_GET['cadastro']) && $_GET['cadastro'] == 'sucesso') { ?>
<body onload="modalSucessoCadastro()">
<?php }elseif (isset($_GET['cadastro']) && $_GET['cadastro'] == 'existe') { ?>
 <body onload="modalUsuarioExiste()">  
<?php } else { ?>
<body>
<?php } ?>    
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

            <div class="card-home">
                <div class="card">
                    <div class="card-header">
                        Menu
                    </div>
                    <div class="card-body">
                        <?php if($_SESSION['perfil'] == 1){ ?>
                        <!-- Inicio link direcionamento -->    
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <a href="abrirChamado.php">
                                      <i class="fas fa-edit fa-5x"></i>
                                </a>
                            </div>
                            
                            <div class="col-4 d-flex justify-content-center">
                                <button class="btn btn-link" onclick="abrirModal()">
                                     <i class="fas fa-user-plus fa-5x"></i>
                                </button>    
                            </div>
                            
                            <div class="col-4 d-flex justify-content-center">
                                <a href="consultarChamado.php">
                                    <i class="fas fa-search fa-5x"></i>
                                </a>    
                            </div>
                            
                        </div>
                        <!-- FIM link direcionamento -->
                        
                        <!-- Inicio Texto explicativos -->
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                               <strong>Abrir chamado</strong> 
                            </div>
                            
                            <div class="col-4 d-flex justify-content-center">
                                <strong>Criar Usuário</strong> 
                            </div>
                            
                            <div class="col-4 d-flex justify-content-center">
                                <strong>Consultar chamado</strong> 
                            </div>
                        </div>
                        <!-- FIM Texto explicativos -->
                        
                        <div class="mt-5 row">
                            <div class="col-4 d-flex justify-content-center">
                                <a href="listarUsuario.php">
                                    <i class="fas fa-address-card fa-5x"></i>
                                </a>    
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-4 d-flex justify-content-center">
                                <strong>Listar Usuários</strong> 
                            </div>
                        </div>
                        
                        <?php } else { ?>
                        
                        <!-- Inicio link direcionamento -->    
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                                <a href="abrirChamado.php">
                                    <i class="fas fa-edit fa-5x"></i>
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <a href="consultarChamado.php">
                                    <i class="fas fa-search fa-5x"></i>
                                </a>    
                            </div>
                        </div>
                        <!-- FIM link direcionamento -->
                        
                        <!-- Inicio Texto explicativos -->
                        <div class="row">
                            <div class="col-6 d-flex justify-content-center">
                               <strong>Abrir chamado</strong> 
                            </div>
                            <div class="col-6 d-flex justify-content-center">
                                <strong>Consultar chamado</strong> 
                            </div>
                        </div>
                        <!-- FIM Texto explicativos -->
                        <?php }?>
                        
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal  Cadastro-->
        <div class="modal fade" id="modalCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastro de Usuário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <div>
                   <form action="app/cadastrarUsuario.php" method="post"> 
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">

                                      <div class="form-group row">
                                          <label for="email" class="col-2 col-form-label">E-mail: </label>
                                          <div class="col-10">
                                              <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                          </div>
                                     </div>

                                     <div class="form-group row">
                                          <label for="senha" class="col-2 col-form-label">Senha: </label>
                                          <div class="col-10">
                                              <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                                          </div>
                                     </div>

                                      <div class="form-group row">
                                          <span class="col-6">Administrado do Sistema ?</span>
                                          <div class="form-check">
                                              <input type="radio" name="adm" class="form-check-input" id="radio1" value="2" checked>
                                              <label class="form-check-label" for="radio1">Não</label>
                                          </div>

                                          <div class="ml-2 form-check">
                                              <input type="radio" name="adm" class="form-check-input" id="radio2" value="1">
                                              <label class="form-check-label" for="radio2">Sim</label>
                                          </div>

                                     </div>

                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </div>

                    </form>
               </div>
            </div>
          </div>
        </div>

        <!-- Modal Erro de Cadastro-->
        <div class="modal fade" id="modalErroCadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="" id="modalTitulo"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

                <div>
                        <div class="modal-body" id="modalTexto">
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal" id="btnModal"></button>
                        </div>
               </div>
            </div>
          </div>
        </div>
        
    </div>
   
    
    
</body>
</html>