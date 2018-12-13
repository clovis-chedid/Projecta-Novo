<!doctype html>
<html lang="pt">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body{
            background-color: #f5f5f5;
        }
        .center {     
            margin: auto;
            /* padding: 55px 0; */
            margin-top: 55px;
            display: flex;
            justify-content: center;
            
        }
        .card-form{
            width: 35%;
        }
        @media only screen and (max-width: 768px) {
            .card-form{
                width: 75%;
            }
        }
    </style>
    <title>Projecta :: Recuperação de senha</title>
  </head>
  <body>
    <?php if (!isset($_GET['email'])): ?>
    <div class="center">
    <div class="card border-dark mb-3 card-form" style="">
        <div class="card-header border-dark text-center"><b>Recuperação de Senha</b></div>
        <div class="card-body">
            <p class="card-text">Preencha os campos abaixo e enviaremos um email com instruções para recuperação de sua senha.</p>
            <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="form-group">
                    <label for="inputEmail">Endereço de Email <span class="text-danger"><b>*</b></span></label>
                    <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="descricao" required>
                    <small id="descricao" class="form-text text-muted">Preencha com o endereço correspondente a conta que deseja recuperar.</small>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><B>Enviar</B></button>
            </form>
        </div>
        <div class="card-footer text-center">
            <a role="button" class="btn w-25 btn-outline-primary" href="login.php">Voltar</a>
        </div>
    </div>
    </div>
    <?php else: ?> 
    <div class="center">
    
    <div class="card border-dark mb-3 card-form" style="">
        <div class="card-header border-dark text-center"><b>Recuperação de Senha</b></div>
        <div class="card-body">
            <h5 class="card-title text-success">Sucesso!</h5>
            <p class="card-text">Foi enviado um email para <b><?php echo $_GET['email'] ?></b>, nele estão contidas instruções para a recuperação de sua senha, caso não o veja, verifique o lixo eletrônico.</p>
        </div>
        <div class="card-footer text-center">
            <a role="button" class="btn w-25 btn-outline-primary" href="login.php">Voltar</a>
        </div>
    </div>
    </div>
    <?php endif ?>
   
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>