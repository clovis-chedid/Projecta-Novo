<?php
// $strings = array(
// 'pagina-login' => array(
// 						'str-titulo-card-1' => 'APOIADOR',
// 						'str-titulo-card-2' => 'CAPTADOR',
// 						'str-titulo-card-3' => 'REALIZADOR',
// 						'str-desc-card-1' => 'O portal do apoiador é onde você poderá encontrar projetos para serem apoiados.',
// 						'str-desc-card-2' => 'O portal do captador é onde você poderá encontrar clientes para realizar a captação de recursos.',
// 						'str-desc-card-3' => 'O portal do realizador é onde você poderá cadastrar seus novos projetos.',
// 						'str-titulo-pagina' => 'Projecta :: Acesso',
// 						'str-titulo-cards' => 'Acesse um de nossos portais:',
// 						'str-btn_acesso' => 'ACESSAR'),
// 'pagina-cadastro' => array(
// 						'str-titulo-card' => 'Abrir conta Trial',
// 						'str-desc-card' => 'Campos marcados com <span class="text-danger"><b>*</b></span> são obrigatórios.',
// 						'str-label-inputNome' => 'Nome completo <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputEmail' => 'Endereço de Email <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputEmpresa' => 'Empresa',
// 						'str-label-inputCargo' => 'Seu cargo na empresa',
// 						'str-label-inputTelefone' => 'Telefone <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputProposito' => 'Selecione seu propósito ao usar o Projecta <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputPorte' => 'Selecione o porte de sua empresa <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputSenha' => 'Senha <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputConfirmarSenha' => 'Confirme sua senha <span class="text-danger"><b>*</b></span>',
// 						'str-label-inputTermos' => 'Aceito os <a href="#">termos</a>',
// 						'str-titulo-pagina' => 'Projecta :: Cadastro',
// 						'str-texto-btn-registrar' => 'REGISTRAR',
// 						'options-select-inputProposito' => array(
// 														'Realizar projetos',
// 														'Apoiar projetos financeiramente',
// 														'Captar recursos',
// 														),
// 						'options-select-inputPorte' => array(
// 														'Grande empresa',
// 														'Média empresa',
// 														'Pequena empresa',
// 														'Micro empresa',
// 														'Empresa individual',
// 														'Pessoa física'
// 														)),
// 'pagina-esqueceu_senha' => array(
// 							'str-titulo-card' => 'Recuperação de Senha',
// 							'str-desc-card' => 'Preencha os campos abaixo e enviaremos um email com instruções para recuperação de sua senha.',
// 							'str-label-inputEmail' => 'Endereço de Email <span class="text-danger"><b>*</b></span>',
// 							'str-help-inputEmail' => 'Preencha com o endereço correspondente a conta que deseja recuperar.',
// 							'str-texto-btn-enviar' => 'Enviar',
// 							'str-texto-btn-voltar' => 'Voltar',
// 							'str-titulo-pagina' => 'Projecta :: Recuperação de senha',
// 							'str-header-card-sucesso' => 'Sucesso',
// 							'str-desc-card-sucesso' => 'Foi enviado um email para <b>'.(isset($_GET["email"])? $_GET["email"] : '').'</b>, nele estão contidas instruções para a recuperação de sua senha, caso não o veja, verifique o lixo eletrônico.',
// 							)
// );
$strings = json_decode(file_get_contents(__DIR__.'/strings.json'),true);
// echo '<pre>';
// print_r($strings);
// echo '</pre>';
?>