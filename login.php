<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="Kodinger">
	<title>Projecta &mdash; Acesso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>
<body class="my-login-page">

	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/favicon.png">
					</div>
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Login</h4>
							<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
							 
								<div class="form-group">
									<label for="email">Endereço de email</label>

									<input id="email" data-inputmask="'alias': 'email'" type="text" class="form-control" name="inputEmail" value="" required autofocus>
								</div>

								<div class="form-group">
									<label for="password">Senha
										<a href="esqueceu_senha.php" class="float-right">
											Esqueceu sua senha?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="inputSenha" required data-eye>
								</div>

								<div class="form-group p-2">
									<!-- <label>
										<input type="checkbox" name="remember"> Remember Me
									</label> -->
								</div>

								<div class="form-group no-margin">
                                    <div class="btn-group-vertical w-100">
                                        <button type="submit" class="btn btn-primary btn-block has-spinner">Login</button>
                                        <!-- <a role="button" class="btn w-100 btn-sm btn-secondary" href="index.php">Voltar</a> -->
                                    </div>
								</div>
								<!-- <div class="margin-top20 text-center">
									Não tem conta? <a href="register.html">Crie aqui</a>
                                </div> -->
                                
                            </form>
                            
                        </div>
                    
                        
                    </div>
					<div class="footer">
                        Copyright &copy; Culturinvest 2018
					</div>
				</div>
			</div>
        </div>
        
    </section>
    

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/RobinHerbots/Inputmask/4.x/dist/min/jquery.inputmask.bundle.min.js"></script>
    
    
    <script src="js/login.js"></script>
    <?php
    if(isset($_POST['inputEmail'])){
        echo '<script type="text/javascript">$(".has-spinner").addClass("active");
		$(".has-spinner").addClass("btn-success");$(".has-spinner").html("'."<span class='spinner'><i class='fa fa-refresh fa-spin'></i></span>".'");</script>';
        require_once 'php/db_connect.php';
        $mysqli = new mysqli(db_host,db_usuario,db_senha,db_banco);
        extract($_POST);
        $query = sprintf("select * from usuario where email='%s'",$inputEmail);
        $result = $mysqli->query($query);
        if ($result->num_rows > 0) {
            if($result->num_rows > 1){
                $row = $result->fetch_assoc();
                $email = $row['email'];
                $senha = $row['senha'];
                $nome = $row['nome'];
                $id = $row['id_usuario'];
            }else{
                while($row = $result->fetch_assoc()) {
                    $email = $row['email'];
                    $senha = $row['senha'];
                    $nome = $row['nome'];
                    $id = $row['id_usuario'];
                    // print_r($row);
                }
            }
            if($senha == md5($inputSenha)){
                $_SESSION['email'] = $inputEmail;
                $_SESSION['nome'] = $nome;
                $GLOBALS['logado'] = true;
                $query = sprintf("select * from acesso where id_usuario =%s",$id);
                $result = $mysqli->query($query);
                

                if($result->num_rows > 0){
                    if($result->num_rows > 1){
                        $GLOBALS['contas'] = array();
                        while($row = $result->fetch_assoc()) {
                            $idEmpresa = $mysqli->query('select id_empresa from conta where id_conta='.$row['id_conta'])->fetch_assoc();
                            $nomeEmpresa = $mysqli->query('select nome_empresa from empresa where id_empresa='.$idEmpresa["id_empresa"])->fetch_assoc();
                            $contas[] = array('id_conta' => $row['id_conta'], 'tipo_acesso' => $row['tipo_acesso'], 'id_empresa' => $idEmpresa['id_empresa'], 'nome_empresa' => $nomeEmpresa['nome_empresa']);
                        }
                        options($contas);
                        
                    }else{
                        $GLOBALS['contas'] = array();
                        while($row = $result->fetch_assoc()) {
                            $idEmpresa = $mysqli->query('select id_empresa from conta where id_conta='.$row['id_conta'])->fetch_assoc();
                            $nomeEmpresa = $mysqli->query('select nome_empresa from empresa where id_empresa='.$idEmpresa["id_empresa"])->fetch_assoc();
                            $contas[] = array('id_conta' => $row['id_conta'], 'tipo_acesso' => $row['tipo_acesso'], 'id_empresa' => $idEmpresa['id_empresa'], 'nome_empresa' => $nomeEmpresa['nome_empresa']);
                        }
                        options($contas);
                    }
                }

                echo '<script type="text/javascript">$(".has-spinner").removeClass("btn-success");$(".has-spinner").removeClass("active");$(".has-spinner").html(window.htmlLogin);</script>';
                // echo '<br>';
                // print_r($_SESSION);
            }
        } else {
            echo '<script type="text/javascript">$(".has-spinner").removeClass("btn-success");$(".has-spinner").removeClass("active");</script>';
        }
    }
    function options($contas){
        $select = '<form method="POST" id="form" action="'.$_SERVER['PHP_SELF'].'" class="collapse w-100"><div class="form-check"><label for="form" class="card-title"><br><b>Selecione</b> uma conta para efetuar o login:</label>';
        $count = 0;
        foreach($contas as $conta){
            $select .= '<div class="form-check"><input class="form-check-input" type="radio" name="inputConta" id="inputConta'.$count.'" value="'.$conta["id_conta"].'"><label class="form-check-label" for="inputConta'.$count++.'"><b>Empresa: </b>'.$conta["nome_empresa"].' | | <b>Nivel de acesso: </b>'.$conta["tipo_acesso"].'</label></div>';
            $count++;
        }
        $select .= '</div><button class="btn-block mt-5 btn btn-sm btn-primary">ENTRAR</button></form><div class="w-100 text-center mt-2">ou <a class="text-muted text-sm w-100" href="javascript:refresh()" action="">conecte como outro usuário</a></div>';
        $titulo = '<h5 class="mb-2">Olá '.explode(' ',$GLOBALS['nome'])[0].',</h5> ';
        echo sprintf('
        <script type="text/javascript">
        $("form").addClass("collapse show");
        $("form").collapse("toggle");
        $(".card-body").append('."'".'%s'."'".');
        $(".card-body").append('."'".'%s'."'".');
        $("form").collapse("toggle");
        </script>
        ',$titulo,$select);
    }
    ?>
    <script>
        $('input').inputmask();
        function refresh(){
            window.location.replace("login.php");
        }
        <?php if(isset($logado) and $logado == true): ?>


        <?php else: ?>

        <?php endif ?>
    </script>
</body>
</html>
