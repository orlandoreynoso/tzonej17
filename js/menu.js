$(function(){
	var ancho   = $(window).width(),
		enlaces = $("#men"),
		icono   = $("#btn-menu .icono"),
		btnmenu = $(".resp");

	
	if (ancho < 480) {
		enlaces.hide();
		icono.addClass('fa fa-bars');
	}

	btnmenu.on('click', function(e) {
		enlaces.slideToggle();
		icono.toggleClass('fa-bars');
		icono.toggleClass('fa-times');
	});

	$(window).on('resize', function() {
		if ($(this).width() > 480) {
			enlaces.show();
			icono.addClass('fa-times');
			icono.removeClass('fa-bars');
		}
		else{
			enlaces.hide();
			icono.addClass('fa-bars');
			icono.removeClass('fa-times');
		}
	});
});