<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Projecta &mdash; Acesso</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    
</head>
<body class="my-login-page">
<?php session_start(); ob_start(); $erros = array('1' => 'O usuário que está tentando utilizar ainda não foi confirmado', '2' => 'Um erro inesperado ocorreu','3' => 'Email e/ou senha incorretos'); $sucesso = array('1' => 'Email confirmado, agora você pode efetuar seu login'); ?>
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
					<div class="brand">
						<img src="img/favicon.png">
					</div>
					<div class="card fat">
						<div class="card-body">
                            <?php //echo '<pre>';print_r($_POST);print_r($_SESSION);echo '</pre>'; ?>
                            <h4 class="card-title">Login</h4>
                            
                            <?php if(isset($_GET['e'])): ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                
                                <strong>Erro:</strong> <br><?php if(array_key_exists($_GET['e'], $erros)){ echo $erros[$_GET['e']];}else{ echo 'Erro desconhecido';} ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>
                            <?php elseif(isset($_GET['s'])): ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                
                                <strong>Sucesso:</strong> <br><?php if(array_key_exists($_GET['s'], $erros)){ echo $sucesso[$_GET['s']];}else{ echo 'Erro desconhecido';} ?>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>

                            <?php endif ?>
							<form method="POST" id="firstForm" action="<?php echo $_SERVER['PHP_SELF'] ?>">
							 
								<div class="form-group">
									<label for="email">Endereço de email</label>
                                    <input id="inputEmail" data-inputmask="'alias': 'email'" type="text" class="form-control" name="inputEmail" value="" required autofocus>
                                    <div class="invalid-feedback" id="helpEmail" style="display: none;">
                                        Preencha este campo
                                    </div>
								</div>

								<div class="form-group">
									<label for="password">Senha
										
									</label>
                                    <input id="inputSenha" type="password"class="form-control" name="inputSenha" required data-eye>
                                    <div class="invalid-feedback" id="helpSenha" style="display: none;">
                                        Preencha este campo
                                    </div>
                                    <a href="esqueceu_senha.php" class="float-right mt-1">
											Esqueceu sua senha?
										</a>
								</div>

								<div class="form-group p-2">
									<!-- <label>
										<input type="checkbox" name="remember"> Remember Me
									</label> -->
								</div>

								<div class="form-group no-margin">
                                    <!-- <div class="btn-group-vertical w-100"> -->
                                        <button type="submit" class="btn btn-primary btn-block has-spinner">Login</button>
                                        <div class="w-100 text-center mt-2">ou <a class="text-muted w-100" href="/Projecta-Novo/cadastro.php" action="">crie uma conta trial</a></div>
                                        <!-- <a role="button" class="btn w-100 btn-sm btn-secondary" href="index.php">Voltar</a> -->
                                    <!-- </div> -->
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
        $(".has-spinner").addClass("btn-success");$(".has-spinner").html("'."<span class='spinner'><i class='fa fa-refresh fa-spin'></i></span>".'");$("img").addClass("rotate");</script>';
        
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
                    $situacao = $row['situacao'];
                    $id = $row['id_usuario'];
                    // print_r($row);
                }
            }
            if($senha == md5($inputSenha)){
                if($situacao != "1"){
                    session_regenerate_id();
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
                                $idCategoria = $mysqli->query('select id_categoria from conta where id_conta='.$row['id_conta'])->fetch_assoc();
                                $categoria = $mysqli->query('select categoria from categoria_conta where id_categoria='.$idCategoria['id_categoria'])->fetch_assoc();
                                $nomeEmpresa = $mysqli->query('select nome_empresa from empresa where id_empresa='.$idEmpresa["id_empresa"])->fetch_assoc();
                                $contas[$row['id_conta']] = array('id_conta' => $row['id_conta'], 'id_empresa' => $idEmpresa['id_empresa'], 'id_categoria' => $idCategoria['id_categoria'], 'tipo_acesso' => $row['tipo_acesso'], 'nome_empresa' => $nomeEmpresa['nome_empresa'], 'categoria' => $categoria['categoria']);
                            
                        }
                        if(!isset($erro)){
                        options($contas);
                        }
                            
                        }else{
                            $GLOBALS['contas'] = array();
                            while($row = $result->fetch_assoc()) {
                                    $idEmpresa = $mysqli->query('select id_empresa from conta where id_conta='.$row['id_conta'])->fetch_assoc();
                                    $idCategoria = $mysqli->query('select id_categoria from conta where id_conta='.$row['id_conta'])->fetch_assoc();
                                    $categoria = $mysqli->query('select categoria from categoria_conta where id_categoria='.$idCategoria['id_categoria'])->fetch_assoc();
                                    $nomeEmpresa = $mysqli->query('select nome_empresa from empresa where id_empresa='.$idEmpresa["id_empresa"])->fetch_assoc();
                                    $contas[$row['id_conta']] = array('id_conta' => $row['id_conta'], 'id_empresa' => $idEmpresa['id_empresa'], 'id_categoria' => $idCategoria['id_categoria'], 'tipo_acesso' => $row['tipo_acesso'], 'nome_empresa' => $nomeEmpresa['nome_empresa'], 'categoria' => $categoria['categoria']);
                                
                            }
                            if(!isset($erro)){
                            options($contas);
                            }
                        }
                    }else{
                        $erro = '2';
                        header('location: '.$_SERVER['PHP_SELF'].'?e='.$erro);
                    }

                    echo '<script type="text/javascript">$(".has-spinner").removeClass("btn-success");$(".has-spinner").removeClass("active");$(".has-spinner").html(window.htmlLogin);</script>';
                    // echo '<br>';
                    // print_r($_SESSION);
            }else{
                $GLOBALS['erro'] = '1';
                header('location: '.$_SERVER['PHP_SELF'].'?e='.$erro);
            }
        } else {
            $GLOBALS['erro'] = '3';
            header('location: '.$_SERVER['PHP_SERVER'].'?e='.$erro);
            echo '<script type="text/javascript">$(".has-spinner").removeClass("btn-success");$(".has-spinner").removeClass("active");</script>';
        }
    }else{
        $GLOBALS['erro'] = '3';
        header('location: '.$_SERVER['PHP_SERVER'].'?e='.$erro);
    }
}
if(isset($_POST['type']) and $_POST['type'] == 'conta'){
    session_regenerate_id();
    $_SESSION['conta_selecionada'] = $_SESSION['contas'][$_POST['inputConta']];
    $_SESSION['logado'] = true;
    $contaSelecionada = $_SESSION['conta_selecionada'];
    switch($contaSelecionada['id_categoria']){
        case '1':
            header('location: dashboard/painel/');
            $_SESSION['categoria_conta_selecionada'] = '1';
            break;
        case '2':
            header('location: dashboard/apoiador/');
            $_SESSION['categoria_conta_selecionada'] = '2';
            break;
        case '3':
            header('location: dashboard/realizador/');
            $_SESSION['categoria_conta_selecionada'] = '3';
            break;
        case '4':
            header('location: dashboard/captador/');
            $_SESSION['categoria_conta_selecionada'] = '4';
            break;
    }



}
    function options($contas){
        $select = '<form method="POST" id="form" action="'.$_SERVER['PHP_SELF'].'" class="collapse w-100"><input type="hidden" name="type" value="conta"><div class="form-check"><label for="form" class="card-title"><br><b>Selecione</b> uma conta para efetuar o login:</label>';
        $count = 0;
        foreach($contas as $conta){
            $select .= '<div class="form-check mt-3"><input class="form-check-input" type="radio" name="inputConta" id="inputConta'.$count.'" value="'.$conta["id_conta"].'"><label style="cursor:pointer;"class="form-check-label" for="inputConta'.$count++.'"><b>Empresa: </b>'.$conta["nome_empresa"].'<br><b>Nivel de acesso: </b>'.$conta["tipo_acesso"].'<br><b>Categoria:</b> '.$conta["categoria"].'</label></div>';
            $count++;
        }
        $select .= '</div><button class="btn-block mt-5 btn btn-sm btn-primary" type="submit" form="form">ENTRAR</button></form><div class="w-100 text-center mt-2">ou <a class="text-muted text-sm w-100" href="javascript:refresh()" action="">conecte como outro usuário</a></div>';
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
        $_SESSION['contas'] = $contas;
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
