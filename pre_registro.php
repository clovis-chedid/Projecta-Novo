  <!doctype html>
  <?php 
    require 'php/strings.php';
    $str = $strings['pagina-pre_registro'];
  ?>
  <html lang="pt">
    <head>
      <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <link rel="stylesheet" href="css/pre_registro.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title><?php echo $str['str-titulo-pagina'] ?></title>
      
    </head>
    <body class="text-center">
      <div class="container-fluid mh-100 center background-div">
          <div class="h-100 row align-items-center">
            <div class="col">
              <img class="background-img" src="img/logo.png" style="">
              <h3 class='mb-5' id='titulo-cards'><?php echo $str['str-titulo-cards']; ?></h1>
              <div class="card-deck mx-auto mb-2 row cards">
              <div class="card text-white border border-dark" style="max-width: 450px; background-color: #1A4B8EFF;">
                    <div class="card-body">
                      <h5 class="card-title" id="titulo-card-1"><?php echo $str['str-titulo-card-1'] ?></h5>
                      <p id="desc-card-1" class="card-text"><?php echo $str['str-desc-card-1'] ?></p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a id="btn_acesso" href="#" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalApoiador"><?php echo $str['str-btn_acesso'] ?></a>
                        
                      </div>
                  </div>
                  <div class="card text-white" style="max-width: 450px; background-color: #1A4B8EFF; height: auto;">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $str['str-titulo-card-2'] ?></h5>
                      <p id="desc-card-2" class="card-text"><?php echo $str['str-desc-card-2'] ?></p>
                    </div>
                    <div class="card-footer bg-transparent">
                      <a id="btn_acesso" href="#" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalCaptador"><?php echo $str['str-btn_acesso'] ?></a>
                      </div>
                  </div>
                  <div class="card text-white" style="max-width: 450px; background-color: #1A4B8EFF;">
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $str['str-titulo-card-3'] ?></h5>
                      <p id="desc-card-3" class="card-text"><?php echo $str['str-desc-card-3'] ?></p>
                    </div>
                      <div class="card-footer bg-transparent">
                        <a href="#" id="btn_acesso" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalRealizador"><?php echo $str['str-btn_acesso'] ?></a>
                      </div>
                  </div>
                </div>
              </div>
              <div class="modal fade" id="modalApoiador" tabindex="-1" role="dialog" aria-labelledby="modalTitulo" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content border border-dark">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTitulo">Entrar como Apoiador</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="php/login.php">
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" name="inputEmail" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="inputSenha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta? <a href="/Projecta-Novo/cadastro.php">Cadastre-se</a></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                        Fechar
                      </button>
                      
                    </div>
                  </div>
              </div>
              </div>
              <div class="modal fade" id="modalCaptador" tabindex="-1" role="dialog" aria-labelledby="modalTituloCaptador" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content border border-dark">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTituloCaptador">Entrar como Captador</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="php/login.php">
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" name="inputEmail" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="inputSenha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta? <a href="/Projecta-Novo/cadastro.php">Cadastre-se</a></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                        Fechar
                      </button>
                      
                    </div>
                  </div>
              </div>
              </div>
              <div class="modal fade" id="modalRealizador" tabindex="-1" role="dialog" aria-labelledby="modalTituloRealizador" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content border border-dark">
                    <div class="modal-header">
                      <h5 class="modal-title" id="modalTituloRealizador">Entrar como Realizador</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                    <form method="POST" action="php/login.php">
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" name="inputEmail" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" name="inputSenha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta? <a href="/Projecta-Novo/cadastro.php">Cadastre-se</a></p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                        Fechar
                      </button>
                      
                    </div>
                  </div>
              </div>
            </div> 
            
      </div>
      </div>
    </body>
    

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </html>