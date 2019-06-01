$(document).ready(function($) {
	let show = 'show';

	$('input, textarea').on('checkval', function () {
		let label = $(this).next('label');
		if(this.value !== '') {
			label.addClass(show);
		} else {
			label.removeClass(show);
		}
	}).on('keyup', function () {
		$(this).trigger('checkval');
	}); 

	$('select').on('checkval', function () {
		let label = $(this).next('label');
		if(this.value !== '') {
			label.addClass(show);
		} else {
			label.removeClass(show);
		}
	}).on('click', function () {
		$(this).trigger('checkval');
	}); 

 
    $("#myBtn").click(function(event){        
        event.preventDefault();
        $('html, body').animate({scrollTop: 0 }, 600);
   	});

    $(".scrollsuave").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
   	});
	

   	$("label").click(function(){
   		if ($(this).attr('id') != 'label-browse') {
	   		var t = $(this).parent();
	   		t.find('input, select, textarea').focus()
   			
   		}
   	})

   	$(document).on('click', '.browse', function(){
		var file = $(this).parent().parent().find('.file');
		file.trigger('click');
	});

	$(document).on('change', '.file', function(){
		$(this).parent().find('.browse-input').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		$(this).parent().find('.browse-cancel').show();
	});

	$(document).on('click', '.browse-cancel', function(){
		var file = $(this).parent().parent().find('.file');
		$(this).parent().parent().find('.browse-input').val($(this).val().replace(null));
		file.val(null);
		$(this).hide()
	});

   	$(".telefone").mask('(00) 00000-0000');

});