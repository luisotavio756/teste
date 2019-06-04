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
    var aux = 0;
    $(".scrollsuave").click(function(event){        
        event.preventDefault();
        $('html,body').animate({scrollTop:$(this.hash).offset().top}, 600);
        closeNav();
        // aux = 1;
        // $(".navbar").addClass("top-75");
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

	// FILE IMAGE

	$(document).on('click', '.form-img .browse-img', function(){
		var file = $(this).parent().parent().find('.file-img');
		file.trigger('click');
	});

	$(document).on('change', '.form-img .file-img', function(){
		$(this).parent().find('.browse-input-img').val($(this).val().replace(/C:\\fakepath\\/i, ''));
	});

   	$(".telefone").mask('(00) 00000-0000');

   	var prevScrollpos = window.pageYOffset;
   	
	window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (currentScrollPos > 500) {
			document.getElementsByClassName("navbar")[0].classList.add('navbar-dark');
			$('.nav-link').addClass('nav-link-r')
			document.getElementById("myBtn").style.display = "block";
		}else{
			document.getElementsByClassName("navbar")[0].classList.remove('navbar-dark');
			$('.nav-link').removeClass('nav-link-r')
			document.getElementById("myBtn").style.display = "none";
		}
		if (1) {
			if (prevScrollpos > currentScrollPos) {
				document.getElementsByClassName("navbar")[0].style.top = "0";
			} else {
				document.getElementsByClassName("navbar")[0].style.top = "-75px";
			}
		}

		prevScrollpos = currentScrollPos;
		
	} 

   

});

function openNav() {
	$("#mob-sidenav ul, .closebtn").fadeIn()
	$("#mob-sidenav").css({"width" : "100%"})
  	document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
	$("#mob-sidenav ul, .closebtn").fadeOut(200)
	$("#mob-sidenav").css({"width" : "0"})
	document.body.style.backgroundColor = "white";

}