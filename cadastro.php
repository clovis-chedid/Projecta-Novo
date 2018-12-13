<!doctype html>
<html lang="pt">
<?php
    require 'strings.php';
    $str = $strings['pagina-cadastro'];


?>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title><?php echo $str['str-titulo-pagina'] ?></title>
  </head>
  <body>
    <div class="center">
    <div class="card border-dark mb-3 card-form">
        <div class="card-header border-dark text-center text-white">
        <a role="button" class="btn btn-back btn-outline-light btn-sm" href="index.php"><b>Voltar</b></a>
        <b><?php echo $str['str-titulo-card'] ?></b>
        
        </div>
        <style>
            .col{
                transition: display 1s;
            }
        </style>
        <div class="card-body">
        <?php if(!isset($_GET['e'])): ?>
            <p class="card-text"><?php echo $str['str-desc-card'] ?></p>
            <form method="POST" action="register.php">
                <div class="form-group">
                    <label for="inputNome"><?php echo $str['str-label-inputNome'] ?></label>
                    <input type="text" class="form-control" name="inputNome" id="inputNome" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail"><?php echo $str['str-label-inputEmail'] ?></label>
                    <input type="email" class="form-control" name="inputEmail" id="inputEmail" required>
                </div>
                <div class="form-group">
                    <label for="inputEmpresa"><?php echo $str['str-label-inputEmpresa'] ?></label>
                    <input type="text" class="form-control" name="inputEmpresa" id="inputEmpresa">
                </div>
                <div style="display: none;" class="form-group col" id="cargoEmpresa">
                    <label for="inputCargo"><?php echo $str['str-label-inputCargo'] ?></label>
                    <input type="text" disabled class="form-control" name="inputCargo"id="inputCargo">
                </div>
                <div class="form-group">
                    <label for="inputTelefone"><?php echo $str['str-label-inputTelefone'] ?></label>
                    <input type="number" class="form-control"  name="inputTelefone" id="inputTelefone" required>
                </div>
                <div class="form-group">
                    <label for="inputProposito"><?php echo $str['str-label-inputProposito'] ?></label>
                    <select class="custom-select" name="inputProposito" id="inputProposito" required>
                        <option hidden>-</option>
                        <option value="1">Realizar projetos</option>
                        <option value="2">Apoiar projetos financeiramente</option>
                        <option value="3">Captar recursos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPorte"><?php echo $str['str-label-inputPorte'] ?></label>
                    <select class="custom-select" name="inputPorte" id="inputPorte" required>
                        <option hidden>-</option>
                        <?php 
                            foreach($str['options-select-inputPorte'] as $option){
                                if($option == 'Pessoa física'){
                                    echo '<option id="pessoaFisica" selected>'.$option.'</option>';
                                }else{
                                    echo '<option>'.$option.'</option>';
                                }
                            }
                        
                        ?>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSenha"><?php echo $str['str-label-inputSenha'] ?></label>
                        <input type="password" class="form-control" name="inputSenha" id="inputSenha" required>
                        <div id="divCheckPasswordMatch" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div id="divCheckPasswordMatch" class="form-group col-md-6">
                        <label for="inputConfirmarSenha"><?php echo $str['str-label-inputConfirmarSenha'] ?></label>
                        <input type="password" class="form-control" name="inputConfirmarSenha" id="inputConfirmarSenha" required>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="termos" required>
                    <label class="form-check-label" for="termos"><?php echo $str['str-label-inputTermos'] ?></label>
                </div>
                <div id="btn-submit">
                    <button type="submit" id="submit" class="btn btn-primary btn-block"><B>REGISTRAR</B></button>
                </div>
            </form>
        <?php elseif($_GET['e'] == '0'): ?>
        <h4 class="card-title text-success">Sucesso!</h4>
        <p class="card-text text-justify">Foi enviado um email para o endereço <?php if(isset($_GET['email'])){echo '<b>'.$_GET['email'].'</b>';}else{echo 'de email fornecido';} ?></b> com um link para a <b>ativação de sua conta</b>, o link só é válido por 24 horas, após isso é necessário que se preencha o formulário novamente.</p>
        <?php endif ?>
        </div>
    </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
            $(document).ready(function () {
               $("#inputSenha, #inputConfirmarSenha").keyup(function() {
                var senha = $("#inputSenha").val();
                var confirmarSenha = $("#inputConfirmarSenha").val();
                var html = '<button type="submit" id="submit" class="btn btn-primary btn-block" disabled><B>REGISTRAR</B></button><br><b>Confira os campos.</b>'
                var htmlOk = '<button type="submit" id="submit" class="btn btn-primary btn-block"><B>REGISTRAR</B></button><br>'

                if (senha != confirmarSenha){
                    document.getElementById("inputSenha").className = "form-control is-invalid";
                    document.getElementById("inputConfirmarSenha").className = "form-control is-invalid";
                    document.getElementById("submit").className = "btn btn-primary btn-block disabled";
                    $("#divCheckPasswordMatch").html("<b>As senhas não concidem.</b>");
                    $("#btn-submit").html(html);
                }else{
                    document.getElementById("inputSenha").className = "form-control is-valid";
                    document.getElementById("submit").className = "btn btn-primary btn-block";
                    document.getElementById("inputConfirmarSenha").className = "form-control is-valid";
                    $("#btn-submit").html(htmlOk);
                    $("#divCheckPasswordMatch").html("<b>As senhas concidem.</b>");
                }
                });
                $("#inputEmpresa").keyup(function() {
                    var empresa = $("#inputEmpresa").val();
                    
                    if($("#inputEmpresa").val() == ""){
                        $("#inputCargo").prop("disabled", true);
                        $("#pessoaFisica").prop("selected", true);
                        $("#cargoEmpresa").css("display","none");

                    }else{
                        $("#pessoaFisica").prop("selected", false);
                        $("#inputCargo").prop( "disabled", false);
                        $("#cargoEmpresa").css("display","block");
                    }
                });
            });

            
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>