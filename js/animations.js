$(document).ready(function(){
	$(".div_shift_text input").focusout(function(){
		if($(this).val() != ""){
			$(this).addClass("has_content");
		}else{
			$(this).removeClass("has_content");
		}
	});
});