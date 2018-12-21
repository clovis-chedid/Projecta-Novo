$(function() {
	$("input[type='password'][data-eye]").each(function(i) {
		let $this = $(this);

		$this.wrap($("<div/>", {
			style: 'position:relative'
		}));
		$this.css({
			paddingRight: 60
		});
		$this.after($("<div/>", {
			html: '<i class="far fa-eye"></i>',
			class: 'btn btn-primary btn-sm',
			id: 'passeye-toggle-'+i,
			style: 'position:absolute;right:10px;top:50%;transform:translate(0,-50%);padding: 2px 7px;font-size:12px;cursor:pointer;'
		}));
		$this.after($("<input/>", {
			type: 'hidden',
			id: 'passeye-' + i
		}));
		$this.on("keyup paste", function() {
			$("#passeye-"+i).val($(this).val());
		});
		$("#passeye-toggle-"+i).on("click", function() {
			if($this.hasClass("show")) {
				$this.attr('type', 'password');
				$(this).html('<i class="far fa-eye"></i>')
				$this.removeClass("show");
				$(this).removeClass("btn-outline-primary");
			}else{
				$this.attr('type', 'text');
				$this.val($("#passeye-"+i).val());				
				$this.addClass("show");
				
				$(this).addClass("btn-outline-primary");
				$(this).html('<i class="far fa-eye-slash"></i>')
			}
		});
	});
});
window.htmlLogin = $('.has-spinner').html();
$(function(){
    $('.has-spinner').click(function() {
		if($(this).hasClass('active')){
		}else{
			window.html = $(this).html();
		}
		window.clicado = true;
		$(this).addClass('active');
		$(this).addClass('btn-success');
		$('img').addClass('rotate');
		if($(this).hasClass('active')){
			$(this).html('<span class="spinner"><i class="fa fa-refresh fa-spin"></i></span>');
			
				if($('#inputEmail').val() == '' || $('#inputSenha').val() == ''){
					$(this).html(html);
					$(this).removeClass('btn-success');
					$(this).removeClass('active');
					$('#inputEmail').addClass('is-invalid');
					$('#helpEmail').css('display','block');
					$('#inputSenha').addClass('is-invalid');
					$('#helpSenha').css('display','block');
					$('img').removeClass('rotate');
				}
			
		}else{
			$(this).html(html);
		}
		
    });
});
$('input').keyup(function(){
	$('input').removeClass('is-invalid');
	$('#helpEmail').css('display','none');
	$('#helpSenha').css('display','none');
});
function sleep(milliseconds) {
	var start = new Date().getTime();
	for (var i = 0; i < 1e7; i++) {
	  if ((new Date().getTime() - start) > milliseconds){
		break;
	  }
	}
}