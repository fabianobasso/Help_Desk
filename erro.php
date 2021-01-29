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
    
    <style>
        .card-error{
            padding: 20px;
            width: 800px;
              
        }
    </style>
    
</head>    

    <body>
        
        <div class="container ">
            <div class="row d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="card-error">
                    <div class="card" style="height: 600px;">
                        <div class="card-header bg-danger text-white text-center">
                            Acesso Negado
                        </div>
                        <div class="card-body text-center d-flex justify-content-center align-items-center">
                            <strong>Parece que você não tem acesso</strong> 
                        </div>
                        <div class="card-footer text-center">
                            <?= Date('d/m/Y H:i') ?>
                        </div>
                    </div>
                </div>
            </div>    
        </div>    
    </body>
</html>
