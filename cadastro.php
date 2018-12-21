<!doctype html>
<html lang="pt">
<?php
    require 'php/strings.php';
    $str = $strings['pagina-cadastro'];
    $erros = array(
        '1' => 'Não foi possível enviar o email, verifique se o mesmo é válido',
        '2' => 'Email já existente',
        '3' => 'Ocorreu um erro inesperado, tente novamente mais tarde'
    )

?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/cadastro.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/select2/4.0.1/css/select2.min.css">
  
    <title><?php echo $str['str-titulo-pagina'] ?></title>
  </head>
  <body>
    <div class="center">
    
    <div class="card border-dark mb-3 card-form">
    
        <div class="card-header border-dark text-center text-white">
        <a role="button" class="btn btn-back btn-outline-light btn-sm" href="index.php"><b>Voltar</b></a>
        <b id="titulo-card"><?php echo $str['str-titulo-card'] ?></b>
        
        </div>
        <style>
            .col{
                transition: display 1s;
            }
        </style>
        <div class="card-body">
        <?php if(!isset($_GET['e']) or $_GET['e'] == '2'): ?>
            <p class="card-text" id="desc-card"><?php echo $str['str-desc-card'] ?></p>
            <form method="POST" action="php/register.php">
                <div class="form-group">
                    <label for="inputNome" id="label-inputNome"><?php echo $str['str-label-inputNome'] ?></label>
                    <input type="text" class="form-control" name="inputNome" id="inputNome" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail"  id="label-inputEmail"><?php echo $str['str-label-inputEmail'] ?></label>
                    <input data-inputmask="'alias': 'email'" type="text" class="<?php if(isset($_GET['e']) and $_GET['e'] == '2') { echo 'is-invalid';} ?> form-control" name="inputEmail" id="email" required>
                    <?php if(isset($_GET['e']) and $_GET['e'] == '2'): ?>
                    <div class="invalid-feedback" id="emailInvalido">
                        Email já existente, para recuperar sua conta clique <a style="color: red;" href="esqueceu_senha.php"><b>aqui</b></a>
                    </div>
                    <?php endif ?>
                </div>
                <div class="form-group">
                    <div class="dropdown">
                    <label for="inputEmpresa" id="label-inputEmpresa"><?php echo $str['str-label-inputEmpresa'] ?></label>
                    <input type="text" data-toggle="dropdown" class="form-control" name="inputEmpresa" id="inputEmpresa">
                   
                        <!-- <div class="dropdown-menu" aria-labelledby="dropdownMenuReference" id="dropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>
                        </div> -->
                    </div>
                </div>
                <div style="display: none;" class="form-group col" id="cargoEmpresa">
                    <label for="inputCargo" id="label-inputCargo"><?php echo $str['str-label-inputCargo'] ?></label>
                    <input type="text" disabled class="form-control" name="inputCargo"id="inputCargo">
                </div>
                <div class="form-group">
                    <label for="inputTelefone" id="label-inputCargo"><?php echo $str['str-label-inputTelefone'] ?></label>
                    <input type="text" class="form-control" data-inputmask="'mask': '(99) 99999-9999'" name="inputTelefone" id="inputTelefone" required>
                </div>
                <div class="form-group">
                    <label for="inputProposito" id="label-inputProposito"><?php echo $str['str-label-inputProposito'] ?></label>
                    <select class="custom-select" name="inputProposito" id="inputProposito" required>
                        <option hidden>-</option>
                        <?php
                            $optionNumber = 1;
                            foreach($str['options-select-inputProposito'] as $option){
                                    echo '<option value='.$optionNumber.'>'.$option.'</option>';
                                    $optionNumber++;
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPorte" id="label-inputPorte"><?php echo $str['str-label-inputPorte'] ?></label>
                    <select class="custom-select" name="inputPorte" id="inputPorte" required>
                        <option hidden>-</option>
                        <?php
                            $optionNumber = 1;
                            foreach($str['options-select-inputPorte'] as $option){
                                if($option == 'Pessoa física'){
                                    echo '<option id="pessoaFisica" value='.$optionNumber.' selected>'.$option.'</option>';
                                }else{
                                    echo '<option value='.$optionNumber.'>'.$option.'</option>';
                                }
                                $optionNumber++;
                            }
                        
                        ?>
                    </select>
                </div>
                
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSenha" id='label-inputSenha'><?php echo $str['str-label-inputSenha'] ?></label>
                        <input type="password" class="form-control" name="inputSenha" id="inputSenha" required>
                        <div id="divCheckPasswordMatch" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div id="divCheckPasswordMatch" class="form-group col-md-6">
                        <label for="inputConfirmarSenha" id='label-inputConfirmarSenha'><?php echo $str['str-label-inputConfirmarSenha'] ?></label>
                        <input type="password" class="form-control" name="inputConfirmarSenha" id="inputConfirmarSenha" required>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="termos" required>
                    <label class="form-check-label" for="termos"><?php echo $str['str-label-inputTermos'] ?></label>
                </div>
                <!-- <div id="btn-submit"> -->
                    <button class="btn btn-primary btn-block has-spinner" id="no-edit-submit"><b id="texto-btn-registrar"><?php echo $str['str-texto-btn-registrar']; ?></b></button>
                <!-- </div> -->
            </form>
        <?php elseif($_GET['e'] == '0'): ?>
        <h4 class="card-title text-success">Sucesso!</h4>
        <p class="card-text text-justify">Foi enviado um email para o endereço <?php if(isset($_GET['email'])){echo '<b>'.$_GET['email'].'</b>';}else{echo 'de email fornecido';} ?></b> com um link para a <b>ativação de sua conta</b>, o link só é válido por 24 horas, após isso é necessário que se preencha o formulário novamente.</p>
        <?php elseif($_GET['e'] == '1'): ?>
        <h4 class="card-title text-danger">Erro!</h4>
        <p class="card-text text-justify"><?php echo $erros[$_GET['e']]; ?></p>
        <?php elseif($_GET['e'] == '3'): ?>
        <h4 class="card-title text-danger">Erro!</h4>
        <p class="card-text text-justify"><?php echo $erros[$_GET['e']]; ?></p>
        <?php endif ?>
        </div>
    </div>
    </div>

    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/4.x/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="js/cadastro.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">
    $('input').inputmask();
    // $(document).ready(function(){
    //     $('#inputEmpresa').focus(function(){
    //         $('.dropdown').dropdown('toggle');
    //         window.console.log('in');
    //     });
    //     $('#inputEmpresa').focusout(function(){
    //         $('.dropdown-menu').removeClass('show');
    //     });
    //     $('#inputEmpresa').ready(function(){
            
    //     });
    // });
    </script>
  </body>
</html>