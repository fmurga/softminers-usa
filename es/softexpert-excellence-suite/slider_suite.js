/** Função Slider 1 **/
var qtd_click = 0
var margin_slide_position = 0

function right_slide_suite(){
    var elementCount = $('#lista-carousel #slide').length;
    var passo_slide = elementCount - 4.
    if (window.matchMedia("(max-width:1280px)").matches) {passo_slide = elementCount - 3}
    if (window.matchMedia("(max-width:1024px)").matches) {passo_slide = elementCount - 2}
    if (window.matchMedia("(max-width:650px)").matches) {passo_slide = elementCount - 1}

    if(qtd_click == passo_slide){}else{
        qtd_click += 1
        margin_slide_position -= 284
        document.getElementById("lista-carousel").style.marginLeft=margin_slide_position + `px`
        console.log(margin_slide_position)
    }
}

function left_slide_suite(){
    var elementCount = $('#lista-carousel #slide').length;
    var passo_slide = elementCount - 4
    if(qtd_click == 0){}else{
        qtd_click -= 1
	    margin_slide_position += 284
	    document.getElementById("lista-carousel").style.marginLeft=margin_slide_position + `px`
	    console.log(margin_slide_position)
    }
}


/** Função Slider 2 **/

var qtd_click_2 = 0
var margin_slide_position_2 = 0

function right_slide_suite_2(){
    var elementCount_2 = $('#lista-carousel_2 #slide').length;
    var passo_slide_2 = elementCount_2 - 4.
    if (window.matchMedia("(max-width:1280px)").matches) {passo_slide_2 = elementCount_2 - 3}
    if (window.matchMedia("(max-width:1024px)").matches) {passo_slide_2 = elementCount_2 - 2}
    if (window.matchMedia("(max-width:650px)").matches) {passo_slide_2 = elementCount_2 - 1}

    if(qtd_click_2 == passo_slide_2){}else{
        qtd_click_2 += 1
        margin_slide_position_2 -= 284
        document.getElementById("lista-carousel_2").style.marginLeft=margin_slide_position_2 + `px`
        console.log(margin_slide_position_2)
    }
}

function left_slide_suite_2(){
    var elementCount_2 = $('#lista-carousel_2 #slide').length;
    var passo_slide_2 = elementCount_2 - 4
    if(qtd_click_2 == 0){}else{
        qtd_click_2 -= 1
	    margin_slide_position_2 += 284
	    document.getElementById("lista-carousel_2").style.marginLeft=margin_slide_position_2 + `px`
	    console.log(margin_slide_position_2)
    }
}

/***** FALTA JAVASCRIPT PARA OUTRAS RESOLUÇÕES */