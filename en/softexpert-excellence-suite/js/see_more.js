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
