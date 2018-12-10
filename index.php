<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">

    <title>Projecta :: Home</title>
    <nav id="navbar" class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="padding-left: 15%;padding-right: 15%;">
        <a class="navbar-brand" href="#index"><img src="http://www.2webmakers.com.br/projecta/media/watermark.png" style="max-height: 25px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse ml-auto" style="height: auto;" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#home" style="height: 100%;">Sobre nós</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#about">Parceiros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tres">Contatos</a>
            </li>
            </ul>
            <a href="/Projecta-Novo/cadastro.php" role="button" class="btn btn-success text-white my-2 my-sm-0">Registre-se</a>
        </div>
    </nav>
    
    <script>
    window.onscroll = function () {
        if (document.body.scrollTop > 15 || document.documentElement.scrollTop > 15) {
            document.getElementById("navbar").className = "navbar sticky-top navbar-expand-lg navbar-light";
        } else {
            document.getElementById("navbar").className = "navbar sticky-top navbar-expand-lg navbar-light bg-light";
        }
    };

    
    </script>
  </head>
  <body data-spy="scroll" data-target="#navbar" data-offset="0">
    
    <section id="index">
        <div class="container section-container">
            <div class="text-center">
                <img class="logo" src="http://www.2webmakers.com.br/projecta/media/culturinvest-branco.png"><br>
                <a role="button" href="login.php" class="btn btn-primary border-dark text-white btn-lg btn-login">Entrar</a>                
            </div>
        </div>
    </section>
    <section id="home"  style="background-color: white;">
        <div class="container section-container">
            <div class="row">
                <div class="col-md-4">
                <h3 class="about">SOBRE NÓS</h3><br>
                <small>Portal criado com objetivo de facilitar o processo de aplicação de testes e provas no meio acadêmico.</small><br>
                <a href="cadastro.php" role="button" class="btn btn-primary mt-4 text-white">Cadastre-se</a>  
                </div>
            </div>
        </div>
    </section>
    <section id="about" style="background-color: #00bcd4;">
        <div id='container-about' class="container" >
            <div class="text-center">
                <h1 style="color: white;">PARCEIROS</h1><br>
                <p style="color: white;">Somos parceiros das melhores empresas do País.</p>
                <div class="card-deck">
                    <div class="card" style="max-width: 18rem;">
                        <img class="card-img-top" src="http://www.2webmakers.com.br/projecta/media/logo-wevinc.png" alt="Wevinc Logo">
                        <div class="card-body">
                            <p class="card-text">A Wevinc é uma empresa criada com a junção da Culturinvest e Tolentinos.</p>
                        </div>
                        <div class="card-footer">
                            <small class="card-text">Origem: Belo Horizonte/MG</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section  id="tres">
        <div class="container section-container">
            <div class="text-center">
                
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>