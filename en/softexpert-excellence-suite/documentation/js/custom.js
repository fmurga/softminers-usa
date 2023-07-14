//function fixar menu no topo
(function(){   
	var nav = $('#menu-pages');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 250) { 
			nav.addClass("menu-fixo"); 
		} else { 
			nav.removeClass("menu-fixo"); 
		} 
	});  
});