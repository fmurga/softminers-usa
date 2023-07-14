/** Código responsável pelo continue lendo da página do SoftExpert Excellence Suite na seção de O desafio.**/
function see_more_challenge(){		
	var see_more = document.getElementById("challenge_additional_information").style
	if(see_more.height=="0px"){
		see_more.height="300px"
		see_more.transition="500ms"
	}else{
		see_more.height="0px"
		see_more.transition="500ms"
	}
}
/** Fim Código responsável pelo continue lendo da página do SoftExpert Excellence Suite na seção de O desafio.**/
var margin_pos = 0
function right_slide_suite(){
	if(margin_pos<=1320){
	margin_pos -= 284
	document.querySelector(".owl-wrapper").style.marginLeft=margin_pos + `px`
	console.log(margin_pos)
	}else{

	}
}
function left_slide_suite(){
	if(margin_pos!==0){
	margin_pos += 284
	document.querySelector(".owl-wrapper").style.marginLeft=margin_pos + `px`
	console.log(margin_pos)
	}else{

	}
}


var margin_pos_2 = 0
function right_slide_suite_2(){
	if(margin_pos_2<=1320){
	margin_pos_2 -= 284
	document.querySelector(".owl-wrapper-2").style.marginLeft=margin_pos_2 + `px`
	console.log(margin_pos_2)
	}else{

	}
}
function left_slide_suite_2(){
	if(margin_pos_2!==0){
	margin_pos_2 += 284
	document.querySelector(".owl-wrapper-2").style.marginLeft=margin_pos_2 + `px`
	console.log(margin_pos_2)
	}else{

	}
}