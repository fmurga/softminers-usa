$(document).ready(function(){
  $('.recurso-item').on('click', function() {
    var thisImg = $(this).data('img');
    $('.recurso-img').fadeOut(function() {
      $(this).attr("src", thisImg).fadeIn();
    });
    $('.recurso-item.clicked').removeClass('clicked');
    $(this).addClass('clicked');
  });
});

function wpesClearPhoneMask() {
  jQuery('.phone_with_ddd').unmask();
}

function accentsTidy(s){
  var r=s.toLowerCase();
  r = r.replace(new RegExp(/\s/g),"");
  r = r.replace(new RegExp(/[àáâãäå]/g),"a");
  r = r.replace(new RegExp(/æ/g),"ae");
  r = r.replace(new RegExp(/ç/g),"c");
  r = r.replace(new RegExp(/[èéêë]/g),"e");
  r = r.replace(new RegExp(/[ìíîï]/g),"i");
  r = r.replace(new RegExp(/ñ/g),"n");                
  r = r.replace(new RegExp(/[òóôõö]/g),"o");
  r = r.replace(new RegExp(/œ/g),"oe");
  r = r.replace(new RegExp(/[ùúûü]/g),"u");
  r = r.replace(new RegExp(/[ýÿ]/g),"y");
  r = r.replace(new RegExp(/\W/g),"");
  return r;
};

function sortCountry() {
  if(jQuery('#pais option').length > 0) {
    var options = jQuery('#pais option');
    var arr = options.map(function(_, o) {
      return {
        t: jQuery(o).text(),
        v: o.value
      };
    }).get();
    arr.sort(function(o1, o2) {
      var t1 = accentsTidy(o1.t.toLowerCase()), t2 = accentsTidy(o2.t.toLowerCase());

      return t1 > t2 ? 1 : t1 < t2 ? -1 : 0;
    });
    options.each(function(i, o) {
      o.value = arr[i].v;
      jQuery(o).text(arr[i].t);
    });
      // if(jQuery("#pais").val() == "")
      jQuery("#pais").prepend(jQuery("#pais option[value='']")).val("").change();
    }
  };

  function wpesValidateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
  }


  jQuery('input[name="your-email"]').blur(function(){

    jQuery.ajax({
      type: "GET",
      url: '/softexpert-site/index/wp-content/themes/Zephyr-child/library/js/validaEmail.php?action=validaEmail&email='+jQuery('input[name="your-email"]').val(),
      success:function(data){

        validar = JSON.parse(data);

        if(validar == true){

          jQuery('input[name="your-email"]').addClass("wpcf7-not-valid");
          jQuery('input[name="your-email"]').val('');

          return false;
        }
      }
    });
  });

// function alert(){
//   alert('aaaaa');
// }
function wpesValidateForm() {

  var valid = true;

  jQuery('.wpcf7-not-valid-tip').remove();
  jQuery('.wpcf7-not-valid').removeClass("wpcf7-not-valid");


//  if(!jQuery('input[name="your-email"]').val()) {
//    jQuery('input[name="your-email"]').addClass('wpcf7-not-valid');
//    jQuery('input[name="your-email"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">'+wpes_translations.form_obrigatorio+'</span>');
//    valid = false;
//  }

if(! jQuery.trim(jQuery('input[name="your-email"]').val())) {
  jQuery('input[name="your-email"]').addClass('wpcf7-not-valid');
  jQuery('input[name="your-email"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo obligatório</span>');
  valid = false;
  return valid;
} else {
  if(!wpesValidateEmail(jQuery('input[name="your-email"]').val())) {
    jQuery('input[name="your-email"]').addClass('wpcf7-not-valid');
    jQuery('input[name="your-email"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo obligatorio</span>');
    valid = false;
    return valid;    
  }
}

if(! jQuery.trim(jQuery('input[name="your-name"]').val())) {
  jQuery('input[name="your-name"]').addClass('wpcf7-not-valid');
  jQuery('input[name="your-name"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(! jQuery.trim(jQuery('input[name="cargo"]').val())) {
  jQuery('input[name="cargo"]').addClass('wpcf7-not-valid');
  jQuery('input[name="cargo"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;

}

if(! jQuery.trim(jQuery('input[name="telefone"]').val())) {
  jQuery('input[name="telefone"]').addClass('wpcf7-not-valid');
  jQuery('input[name="telefone"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(! jQuery.trim(jQuery('input[name="mais-empresa"]').val())) {
  jQuery('input[name="mais-empresa"]').addClass('wpcf7-not-valid');
  jQuery('input[name="mais-empresa"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(!jQuery('select[name="mais-necessidade"]').val()) {
  jQuery('select[name="mais-necessidade"]').addClass('wpcf7-not-valid');
  jQuery('select[name="mais-necessidade"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(!jQuery('select[name="mais-industria"]').val()) {
  jQuery('select[name="mais-industria"]').addClass('wpcf7-not-valid');
  jQuery('select[name="mais-industria"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(!jQuery('select[name="mais-pais"]').val()) {
  jQuery('select[name="mais-pais"]').addClass('wpcf7-not-valid');
  jQuery('select[name="mais-pais"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(!jQuery('select[name="mais-estado"]').val() && jQuery('select[name="mais-pais"]').val() == 6) {
  jQuery('select[name="mais-estado"]').addClass('wpcf7-not-valid');
  jQuery('select[name="mais-estado"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

if(jQuery('textarea[name="Mensagem"]').length > 0 && !jQuery('textarea[name="Mensagem"]').val()) {
  jQuery('textarea[name="Mensagem"]').addClass('wpcf7-not-valid');
  jQuery('textarea[name="Mensagem"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">Campo Obligatorio</span>');
  valid = false;
  return valid;
}

return valid;

}
function CloseForm(formName) {
  var formHeight = jQuery('.form'+formName).height();
  jQuery('.form-'+formName).removeClass('aberto');
  jQuery('.form-'+formName).removeClass('carregado');
      //jQuery('.form-'+formName).css( 'top', "-900px" );
      jQuery('.popup-mascara').removeClass('visivel');

      ClearForm("demonstracao");
      ClearForm("mais-info");
      ClearForm("evento");
      ClearForm("evento-lot");
      ClearForm("apresentacao");
      jQuery(".sent-success").hide();
      jQuery(".popup-inputs").show();

    }

    function ClearForm(formName) {
      jQuery('.form-'+formName).find('.popup-input input').val('');
      jQuery('.form-'+formName).find('.popup-input select').val('');
      jQuery('.form-'+formName).find('.popup-input textarea').val('');
      jQuery('.form-'+formName).find('.form-direita').hide();
      jQuery('.form-'+formName).removeClass('carregado');      
    }

    function SentOK() {
      jQuery(".popup-inputs").hide();
      jQuery(".popup-inputs").after("<div class='sent-success'><div class='icone-sent'></div><h4>"+wpes_translations.form_sucesso+"</h4><p>"+wpes_translations.form_retorno+"</p></div>");

      ga('send', 'event', 'contato', jQuery('#type').val(), jQuery('input[name="titulo"]').val().replace(" &#8211;",""));

      //Remarketing

      var google_conversion_id = 1053700000;
      var google_conversion_language = "en";
      var google_conversion_format = "3";
      var google_conversion_color = "ffffff";
      var google_conversion_label = "KinzCIT56QkQoN-49gM"; 
      var google_remarketing_only = false;

      jQuery.getScript('//www.googleadservices.com/pagead/conversion.js');

      var image = new Image(1, 1); 
      image.src = "//www.googleadservices.com/pagead/conversion/1053700000/?label=KinzCIT56QkQoN-49gM&guid=ON&script=0";  
      /* Conversion Tracking End */

      /* Linkedin INI */
      
      _linkedin_data_partner_id = "29955";

      var s = document.getElementsByTagName("script")[0]; var b = document.createElement("script"); b.type = "text/javascript"; b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js"; s.parentNode.insertBefore(b, s);

      /* Linkedin END */  

    }

    function OpenForm(formName){


      if(formName == "mais-info") {

        jQuery('.form-'+formName + ' form').find('#type').val(formName);
      }
            //jQuery('.form-'+formName).css( 'top', '20%' );
            jQuery('.form-'+formName).addClass('aberto');
            jQuery('.popup-mascara').addClass('visivel');


          }

    // Botão menu funcionando
    // jQuery(".download-botao").click(function(){

    //   jQuery("#formulario").load('../form/formulario-ebook.php');
    //     var form =  "mais-info";
    //     if(jQuery('.form-mais-info').hasClass('aberto')){
    //       CloseForm(form);
    //     } else{
    //       OpenForm(form);
    //     }

    //   // Botão close funcionando
    //   jQuery('.popup-fechar-mais-info-close').on('click', function(){
    //     if(jQuery('.form-mais-info').hasClass('aberto')){
    //       CloseForm(form);
    //     } else{
    //       OpenForm(form);
    //     }
    //   });
    //   // Máscara funcionando
    //   // jQuery('.popup-mascara').on('click', function(){
    //   //   CloseForm(form);
    //   // });
    // });


    jQuery( document ).ready(function($) {

    //Checa se é mobile
    var $mobile = jQuery("body").hasClass("state_mobiles");  
    var $home = jQuery("body").hasClass("home");
    var $has_submenu = jQuery("body").hasClass("has-submenu");

    //Menu fixo header para mobile
    jQuery('.fmm-mtb-icon').on('click', function(){
      if((!$home) && ($mobile)){
        if(jQuery("#fmm_blue_flat_lb_ls_container").hasClass("fmm-active-mobile")){
          jQuery(".l-header").removeClass("pos_fixed");
        } else{
          jQuery(".l-header").addClass("pos_fixed");
        };
      };
    });

  /*****
  Home - Slider Testemunho
  ****/
  var slideCount = jQuery('#slider-testemunho ul li').length;
  var slideWidth = jQuery('#slider-testemunho ul li').width();
  var slideHeight = jQuery('#slider-testemunho ul li').height();
  var sliderUlWidth = slideCount * slideWidth;

  jQuery('#slider-testemunho').css({ width: slideWidth, height: slideHeight });

  jQuery('#slider-testemunho ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });

  jQuery('#slider-testemunho ul li:last-child').prependTo('#slider-testemunho ul');

  function moveLeft() {
    jQuery('#slider-testemunho ul').animate({
      left: + slideWidth
    }, 500, function () {
      jQuery('#slider-testemunho ul li:last-child').prependTo('#slider-testemunho ul');
      jQuery('#slider-testemunho ul').css('left', '');
    });
  };

  function moveRight() {
    jQuery('#slider-testemunho ul').animate({
      left: - slideWidth
    }, 500, function () {
      jQuery('#slider-testemunho ul li:first-child').appendTo('#slider-testemunho ul');
      jQuery('#slider-testemunho ul').css('left', '');
    });
  };

  jQuery('.control_prev').click(function () {
    moveLeft();
  });

  jQuery('.control_next').click(function () {
    moveRight();
  });

  setInterval(function () {
    moveRight();
  }, 14000);   
  /*****
  FIM - Home - Slider Testemunho
  ****/

  /*****
  Páginas internas - Menu fixo
  ****/
  jQuery(window).bind('scroll', function() {
    if(jQuery(window).scrollTop() > 300){
      jQuery('.menu-interno').addClass('fixed');
      if((!$mobile) && ($has_submenu)){
        jQuery('.l-content').css('padding-top', '54px');
      }
    }else{
      jQuery('.menu-interno').removeClass('fixed');
        // adicionando padding pra não pular
        // fixando menu
        jQuery('.l-content').css('padding-top', '0px');
      }
    });
  /****
  FIM - Páginas internas - Menu fixo
  ****/

  /****
  Página Serviços - Banner 
  ****/
  jQuery('.banner-sidebar-servicos').appendTo('.w-tabs-list');

    //Página Solução - Nav 
    // $('.recurso-item').on('click', function() {
    //   var thisImg = $(this).data('img');
    //     $('.recurso-img').fadeOut(function() {
    //       $(this).attr("src", thisImg).fadeIn();
    //     });
    //   $('.recurso-item.clicked').removeClass('clicked');
    //   $(this).addClass('clicked');
    // });
  /****
  FIM - Página Serviços - Banner 
  ****/

  /*****
  Páginas internas - Popup form
  ****/


    //popUpForm("perfil-corporativo");
    popUpForm("mais-info","mais-info");
    popUpForm("evento","mais-info");
    popUpForm("evento-lot","mais-info");
    popUpForm("apresentacao","apresentacao");

    //Form - Limpar tip quando clicar no campo
    jQuery('.wpcf7-form-control-wrap').on('click', function(){
      jQuery('.wpcf7-not-valid-tip').css( 'display', 'none' ); 
    });

    //Arrumando scroll com menu fixo
    jQuery('.link-visao-geral').on('click',function(e){
      jQuery(jQuery(this).attr('href')).offset().top - 100;
    });
    jQuery('.link-solucao').on('click',function(e){
      jQuery(jQuery(this).attr('href')).offset().top - 100;
    });
    jQuery('.link-beneficios').on('click',function(e){
      jQuery(jQuery(this).attr('href')).offset().top - 100;
    });
    jQuery('.link-recursos').on('click',function(e){
      jQuery(jQuery(this).attr('href')).offset().top - 100;
    });
  /*****
  FIM - Páginas internas - Popup form
  ****/

  /*****
  Páginas internas - Continue Lendo
  ****/
  
  jQuery('.w-tabs-section-content').css( 'display', 'none !important' ); 

  /*****
  FIM - Páginas internas - Continue Lendo
  ****/


  /****
  Toggle Download Center
  *****/
  $( '.list-custom-taxonomy-widget .widgettitle' ).click(function() {
    $(this).toggleClass('aberto');
    $(this).next().toggle( 'slow', function() {});
  });  
  /****
  FIM Toggle Download Center
  *****/


  /****
  Check Material - Download Center
  ****/
  $('.modo-tax').on('click', function() {
    if ($(this).find('input:checkbox').is(':checked')) {
      $(this).find('input:checkbox').attr('checked', false);
      $(this).removeClass('selected');
    }
    else {
      $(this).find('input:checkbox').prop('checked', true);
      $(this).addClass('selected');
    }
  });

  // Abrindo aba para download
  function CloseDownload(formName) {
    var formHeight = $('.download-baixar').height();
    $('.download-baixar').css( 'bottom', "-100px" );
    $('.download-baixar').removeClass('aberto');
  }
  // Fechando aba para download
  function OpenDownload(formName){
    $('.download-baixar').css( 'bottom', '0px' ); 
    $('.download-baixar').addClass('aberto');
  }

  // Removendo itens download
  function popUpDownload(){
      // Botão close funcionando
      $('.download-fechar').on('click', function(){
        if($('.download-baixar').hasClass('aberto')){
          CloseDownload('.download-baixar');
          //jQuery('.modo-tax input:checkbox').attr('checked','checked');
          $('.modo-tax').removeClass('selected');
          $('.modo-tax').find('input:checkbox').attr('checked', false);
        }
      });
    }

  //Se selecionar um material, abre a aba
  $('.download-center').click(function(){
    if ($(this).find('input:checkbox').is(':checked')){
      //$('.download-baixar').css( 'display', 'block' );
      //
      OpenDownload('.download-baixar');
      popUpDownload();
    } else {
      //$('.download-baixar').css( 'display', 'none' );
      CloseDownload('.download-baixar');
    }
    var check = $(this).find('input:checked').length;
    if(check > 1){
      $('.download-quantidade').html('<span class="number">' + check + '</span> ' + wpes_translations.dc_selecionado);
    } else{
      $('.download-quantidade').html('<span class="number">' + check + '</span> ' + wpes_translations.dc_selecionados);
    }
  });


  $(".download-baixar .bt-baixar").on("click", function() {

    var ids = [];
    $(".material-check:checked").each(function() {ids.push(jQuery(this).data("id"));});

    CloseDownload('.download-baixar');
    OpenForm("mais-info");

    $(".form-mais-info .conteudo .titulo").html(wpes_translations.titulo_download_center);
    $(".form-mais-info .conteudo .subtitulo").html(wpes_translations.subtitulo_download_center);

    $("#type").val("download").change();
    $("#ids").val(ids);
    

  });

  $(".shortcode-material-interno .bt-down").on("click", function(e) {

    if($(this).data('lp') == "0") {
      $(".form-mais-info .conteudo .titulo").html(wpes_translations.titulo_download_center);
      $(".form-mais-info .conteudo .subtitulo").html(wpes_translations.subtitulo_download_center);

      OpenForm("mais-info");

      $("#type").val("download").change();
      $("#ids").val($(this).data('material'));

    }

    
  });


  /****
  FIM Check Material - Download Center
  ****/

  /*****
  INI - CRM
  ****/

  $("#wpcf7-f509-o1 input[name='your-email']").on("change", function () {
    $(".form-mais-info input[name='your-email']").val($(this).val()).change();
    OpenForm("mais-info");
  });

  $(".form-mais-info input[name='your-email'], .contato-form-wrapper input[name='your-email']").on("change", function () {

    if(!wpesValidateEmail(jQuery(this).val())) {
      jQuery('input[name="your-email"]').addClass('wpcf7-not-valid');
      jQuery('input[name="your-email"]').parent().append('<span role="alert" class="wpcf7-not-valid-tip">'+wpes_translations.form_email_valido+'</span>');
      valid = false; 
      return false; 
    } else {
      jQuery('.wpcf7-not-valid-tip').remove();
      jQuery('.wpcf7-not-valid').removeClass("wpcf7-not-valid");
    }


    var data = {
      action: 'get_lead_data',
      email: $(this).val()
    };

    if($(".form-direita").css("display", "none")){

      $(".form-mais-info").find('.loader-wrapper').show();
    }

    $('.popup-inputs input, .popup-inputs textarea, .popup-inputs select, .popup-input span').attr("disabled", true).addClass("disabled");
    $('.popup-input span').addClass("disabled");

    $.post(esajax.ajax_url, data, function(response) {
      if(response && response.data) {
        $('input[name="your-email"]').val(response.email);
        $("input[name='telefone']").val(response.data.telephone1);
        $("input[name='mais-empresa']").val(response.data.companyname);

        var name = "";
        if(response.data.firstname)
          name = response.data.firstname;

        if(response.data.lastname)
          name = name + ' ' + response.data.lastname;

        $("input[name='your-name']").val(name);

        $("input[name='cargo']").val(response.data.sec_outrocargo);

        $("select[name='mais-industria']").val(response.data.industrycode).change();
        $("select[name='mais-encontrou']").val(response.data.sec_siteorigin).change();
        $("select[name='mais-departamento']").val(response.data.sec_department).change();
        $("select[name='mais-estado']").val(response.data.address1_stateorprovince).change();
        $("select[name='mais-pais']").val(response.data.address1_country).change();


        $(".form-direita").slideToggle();
        $(".popup-form.sombra-form.aberto").addClass("carregado");
        $(".form-mais-info").find('.loader-wrapper').hide();
        $('.popup-inputs input, .popup-inputs textarea, .popup-inputs select, .popup-input span').attr("disabled", false).removeClass("disabled");

        if($('#type').val() == "apresentacao") {
          $('#necessidade').val("1");
          $('.popup-input.necessidade').hide();
        } else {
          $('.popup-input.necessidade').show();
        }

      } else {
        $(this).val(response.email);
        $('.popup-inputs input, .popup-inputs textarea, .popup-inputs select, .popup-input span').attr("disabled", false).removeClass("disabled");
        $(".form-mais-info").find('.loader-wrapper').hide();
        $(".form-direita").slideToggle();
        $(".popup-form.sombra-form.aberto").addClass("carregado");

        if($('#type').val() == "apresentacao") {
          $('#necessidade').val("1");
          $('#necessidade').hide();
        } else {
          $('.popup-input.necessidade').show();
        }


      }
    }, "json");

  });

  $("select[name='mais-pais']").on("change", function () {
    if($(this).val() == "6")
      $("select[name='mais-estado']").parent().parent().parent().show();
    else
      $("select[name='mais-estado']").parent().parent().parent().hide();
  });

/*****
  FIM - CRM
  ****/
  
/*****
Responsividade
*****/

//Carrousels
jQuery('.logo-mobile').prependTo('#fmm_blue_flat_lb_ls_container');
$(".materiais-mobile").owlCarousel({
  items : 1,
  mouseDrag : true
});
$(".beneficios-row .beneficios-mobile").owlCarousel({
  items : 1,
  mouseDrag : true,
  singleItem: true,
  itemsScaleUp: true

});

$(".postid-444 .galeria-column .w-gallery-list .galeria-beneficios, .postid-4109 .galeria-column .w-gallery-list .galeria-beneficios, .postid-4132 .galeria-column .w-gallery-list .galeria-beneficios").owlCarousel({
  items : 4,
  mouseDrag : false,
  navigation: true,
  pagination: false,
  navigationText: false,
});

//Menu de serviços e produto
$(".menu-interno-mobile li").click(function() {
  $(".menu-interno-mobile").toggleClass("active", 200);
})

//Filtro Sidebar Download Center
$(".filtro-sidebar-download-center").click(function() {
  $(".sidebar-download-center").toggle("show");
});
/*****
FIM Responsividade
*****/

//Fim Document Ready
});

jQuery( document ).ready(function($) {
  $(".toggle").click(function(){
    $(this).next().slideToggle();
  });

  $(".post-type-archive-material .cat-item a").on("click", function() { $(this).parent().toggleClass("current-cat") } );    


  $(document).on('click', '.wpcf7-submit', function(e){
    if( $(this).next().css('visibility') != "hidden" ) {
      e.preventDefault();
      return false;
    }else{
      $(this).next().css("visibility", "visible" );
    }

  });

    $(".mais-info-close, .fundo-modal-cinza").click(function(){
      $(".form-mais-info").removeClass("aberto");
      jQuery('.fundo-modal-cinza').toggle();
    });

    $(".download-botao").click(function(){
      $(".form-mais-info").addClass("aberto");
      jQuery('.fundo-modal-cinza').toggle();

    });
  });


