  <!doctype html>
  <html lang="pt">
    <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <style>
        .center {
          position: absolute;
          
          left: 0%;
          top: 20%;
          width: 100%;
          text-align: center;
          font-size: 18px;
        }
        .mb-5 {
          margin-bottom: ($spacer * .75);
        }
        body{
          background-image: url('https://www.peakwebstudio.com/wp-content/uploads/2014/09/298711-office.jpg');
          background-repeat: no-repeat;
          background-color: #f5f5f5;
          background-size: cover;
        }
        .background-div{
          height: 40%;
          background: rgba(255,255,255,0.8);
        }
        .background-img{
          position: sticky;
          margin-bottom: 55px;
          filter: drop-shadow(8px 8px 10px gray);
        }
        .cards{
            width: 60%;
            filter: drop-shadow(8px 8px 10px black);
        }
        @media only screen and (max-width: 800px) {
          [class*="background-div"]{
            height: 100%;
            background: rgba(255,255,255,0.8);
          }
          .col{
            height: 100%;
            background: rgba(255,255,255,0.9);

          }
          .cards{
            width: 90%;
            filter: drop-shadow(8px 8px 10px black);
          }
          [class*="background-img"]{
            height: device-height;
          }
          body{
            background-image: url();
            background-repeat: no-repeat;
            background-color: #f5f5f5;
            background-size: auto;
          }
          .background-img{
            margin-top: 15px;            
          }
          .background-div{
          height: 40%;
          background: rgba(255,255,255,0);
        }
        }
      </style>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <title>Projecta :: Acesso</title>
      
    </head>
    <body class="text-center">
      <div class="container-fluid mh-100 center background-div">
          <div class="h-100 row align-items-center">
            <div class="col">
              <img class="background-img" src="http://www.2webmakers.com.br/projecta/media/watermark2.png" style="">
              <h3 class='mb-5'>Acesse um de nossos portais:</h1>
              <div class="card-deck mx-auto mb-2 row cards">
              <div class="card text-white border border-dark" style="max-width: 450px; background-color: #1A4B8EFF;">
                    <div class="card-body">
                      <h5 class="card-title">APOIADOR</h5>
                      <p class="card-text">O portal do apoiador é onde você poderá encontrar projetos para serem apoiados.</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalApoiador">ACESSAR</a>
                        
                      </div>
                  </div>
                  <div class="card text-white" style="max-width: 450px; background-color: #1A4B8EFF; height: auto;">
                    <div class="card-body">
                      <h5 class="card-title">CAPTADOR</h5>
                      <p class="card-text">O portal do captador é onde você poderá encontrar clientes para realizar a captação de recursos.</p>
                    </div>
                    <div class="card-footer bg-transparent">
                      <a href="#" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalCaptador">ACESSAR</a>
                      </div>
                  </div>
                  <div class="card text-white" style="max-width: 450px; background-color: #1A4B8EFF;">
                    <div class="card-body">
                      <h5 class="card-title">REALIZADOR</h5>
                      <p class="card-text">O portal do realizador é onde você poderá cadastrar seus novos projetos.</p>
                    </div>
                      <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-outline-primary text-white border-light btn-block btn-lg" data-toggle="modal" data-target="#modalRealizador">ACESSAR</a>
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
                    <form>
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta?<a href="/Projecta-Novo/cadastro.php"> Cadastre-se</a></p>
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
                    <form>
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta?<a href="/Projecta-Novo/cadastro.php"> Cadastre-se</a></p>
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
                    <form>
                      <div class="form-group">
                        <label for="email">Endereço de Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Endereço de Email">
                      </div>
                      <div class="form-group">
                        <label for="senha">Senha:</label>
                        <input type="password" class="form-control" id="senha" placeholder="Senha">
                      </div>
                      <button type="submit" class="btn btn-primary mb-3">Entrar</button>
                    </form>
                    <a href="/Projecta-Novo/esqueceu_senha.php">Esqueceu sua senha?</a>
                    <p class="mt-2">Não tem conta?<a href="/Projecta-Novo/cadastro.php"> Cadastre-se</a></p>
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
    </body>

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </html>