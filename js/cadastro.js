			   $(document).ready(function () {
               $("#inputSenha, #inputConfirmarSenha").keyup(function() {
                var senha = $("#inputSenha").val();
                var confirmarSenha = $("#inputConfirmarSenha").val();
                var html = '<button type="submit" id="submit" class="btn btn-primary btn-block" disabled><B>REGISTRAR</B></button><br><b>Confira os campos.</b>'
                var htmlOk = '<button type="submit" id="submit" class="btn btn-primary btn-block"><B>REGISTRAR</B></button><br>'

                if (senha != confirmarSenha){
                    document.getElementById("inputSenha").className = "form-control is-invalid";
                    document.getElementById("inputConfirmarSenha").className = "form-control is-invalid";
                    document.getElementById("no-edit-submit").className = "btn btn-primary btn-block disabled";
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
            