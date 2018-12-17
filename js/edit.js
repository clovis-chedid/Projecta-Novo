
$("body").append('<nav class="navbar navbar-dark bg-dark fixed-top"><button class="btn btn-success" onclick="save()" id="btn-salvar" type="button">Salvar</button></nav>');
window.isOpen = false;
window.arrayChanges = [];
function closeText(texto){
  window.isOpen = false;
  if(window.targetHTML != $("#no-edit").val()){
    window.targetHTML = $("#no-edit").val();
    arrayChanges.push([''+target.id+'',''+targetHTML+'', '']);
  }
  
  $(target).html(targetHTML);  
}
function save(){
  window.linkRedirect = '?action=edit';
	arrayChanges.forEach(link);
	if(arrayChanges.length == 0){
	 	alert('Não foram feitas alterações');
	}else{
    window.location.replace('php/edit.php'+linkRedirect);
	}
}
function link(value){
    var url = window.location.pathname;
    var filename = url.substring(url.lastIndexOf('/')+1);
    window.linkRedirect += "&" + value[0] + "=" + value[1] + ';;;' + value[0] + ';;;' + filename;
}
$(document).dblclick(function(){
  if(isOpen == true){
    closeText();
  }
  window.target = event.target;
  window.targetHTML = event.target.innerHTML;
  if(target.id != "no-edit" && target.id != "no-edit-btn" && target.id != ''){
    window.isOpen = true;
    $(target).html('<textarea cols="50" rows="3" style="width: 100%" id="no-edit">'+target.innerHTML+'</textarea><br><button id="no-edit-btn" class="btn btn-sm btn-primary" onclick="closeText()">Fechar</button>');
  }else{
    if(isOpen == true){
		closeText();
    }
  }
});
$(function(){
  $('a').attr('data-toggle','null');
  $('button').attr('form','null');
  $('button').attr('type','null');
  $('#btn-salvar').prop('disabled',false);
});