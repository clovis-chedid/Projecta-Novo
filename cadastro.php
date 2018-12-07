<!doctype html>
<html lang="pt">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
        .card-header{
            background-color: #1A4B8EFF;
        }
        @media only screen and (max-width: 768px) {
            .card-form{
                width: 75%;
            }
        }
    </style>
    <title>Projecta :: Cadastro</title>
  </head>
  <body>
    <div class="center">
    <div class="card border-dark mb-3 card-form" style="">
        <div class="card-header border-dark text-center text-white"><b>Cadastro Projecta</b></div>
        <div class="card-body">
            <p class="card-text">Campos marcados com <span class="text-danger"><b>*</b></span> são obrigatórios.</p>
            <form>
                <div class="form-group">
                    <label for="inputNome">Nome Completo <span class="text-danger"><b>*</b></span></label>
                    <input type="text" class="form-control" id="inputNome" required>
                </div>
                <div class="form-group">
                    <label for="inputEmail">Endereço de Email <span class="text-danger"><b>*</b></span></label>
                    <input type="email" class="form-control" id="inputEmail" required>
                </div>
                <div class="form-group">
                    <label for="inputEmpresa">Empresa</label>
                    <input type="text" class="form-control" id="inputEmpresa">
                </div>
                <div class="form-group">
                    <label for="inputCargo">Seu cargo na empresa</label>
                    <input type="text" class="form-control" id="inputCargo">
                </div>
                <div class="form-group">
                    <label for="inputTelefone">Telefone: <span class="text-danger"><b>*</b></span></label>
                    <input type="number" class="form-control" id="inputTelefone" required>
                </div>
                <div class="form-group">
                    <label for="inputProposito">Selecione seu propósito ao usar o Projecta <span class="text-danger"><b>*</b></span></label>
                    <select class="custom-select" id="inputProposito" required>
                    
                        <option hidden>-</option>
                        <option value="1">Realizar projetos</option>
                        <option value="2">Apoiar projetos financeiramente</option>
                        <option value="3">Captar recursos</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="inputPorte">Selecione o porte de sua empresa <span class="text-danger"><b>*</b></span></label>
                    <select class="custom-select" id="inputPropinputPorteosito" required>
                    
                        <option hidden>-</option>
                        <option>Grande empresa </option>
                        <option>Média empresa </option>
                        <option>Pequena empresa </option>
                        <option>Micro empresa </option>
                        <option>Empresa individual</option>
                        <option>Pessoa Física </option>
                    </select>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputSenha">Senha <span class="text-danger"><b>*</b></span></label>
                        <input type="password" class="form-control" id="inputSenha" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputConfirmarSenha">Confirme sua senha <span class="text-danger"><b>*</b></span></label>
                        <input type="password" class="form-control" id="inputConfirmarSenha" required>
                    </div>
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="termos">
                    <label class="form-check-label" for="termos">Aceito os <a href="#">termos</a></label>
                </div>
                <button type="submit" class="btn btn-primary btn-block"><B>REGISTRAR</B></button>
            </form>
        </div>
    </div>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>