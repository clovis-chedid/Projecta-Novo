			$(document).ready(function () {
               $("#inputSenha, #inputConfirmarSenha").keyup(function() {
                var senha = $("#inputSenha").val();
                var confirmarSenha = $("#inputConfirmarSenha").val();
                // var html = '<button type="submit" id="submit" class="btn btn-primary btn-block" disabled><B>REGISTRAR</B></button><br><b>Confira os campos.</b>'
                // var htmlOk = '<button type="submit" id="submit" class="btn btn-primary btn-block"><B>REGISTRAR</B></button><br>'

                if (senha != confirmarSenha){
                    document.getElementById("inputSenha").className = "form-control is-invalid";
                    document.getElementById("inputConfirmarSenha").className = "form-control is-invalid";
                    document.getElementById("no-edit-submit").className = "btn btn-primary btn-block has-spinner disabled";
                    $("#divCheckPasswordMatch").html("<b>As senhas não concidem.</b>");
                    $("#no-edit-submit").prop('disabled',true);
                }else{
                    document.getElementById("inputSenha").className = "form-control is-valid";
                    document.getElementById("no-edit-submit").className = "btn btn-primary has-spinner btn-block";
                    document.getElementById("inputConfirmarSenha").className = "form-control is-valid";
                    $("#no-edit-submit").prop('disabled',false);
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
                $('#inputEmail').keydown(function() {
                    $("#emailInvalido").css('display','none');
                    $("#inputEmail").removeClass('is-invalid');
                });
            });
            window.htmlLogin = $('.has-spinner').html();
            $(document).ready(function(){
                $('.has-spinner').click(function() {
                    window.clicado = true;
                    if($(this).hasClass('active')){
                    }else{
                        window.console.log('a');
                        window.html = $(this).html();
                    }
                    window.console.log('b');
                    $(this).addClass('active');
                    $(this).addClass('btn-success');
                    if($(this).hasClass('active')){
                        window.console.log('c');
                        $(this).html('<span class="spinner"><i class="fa fa-refresh fa-spin"></i></span>');
                        if(checkEmpty()){
                            $(this).html(html);
                            $(this).removeClass('btn-success');
                            $(this).removeClass('active');
                        }
                    }else{
                        $(this).html(html);
                        $(this).removeClass('btn-success');
                        $(this).removeClass('active');
                    }
                    
                });
            });
            function checkEmpty(){
            var a = [];
            var b = [];
            $('input[type="text"]').each(function(){
                if($(this).val()!=""){
                    a.push(a.length);
                }else{
                    b.push(b.length);
                }
            });
            if(b.length == 0){
                return false;
            }else{
                return true;
            }
        }