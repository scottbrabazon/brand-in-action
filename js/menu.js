
			$(document).ready(function(){
				$(".hamburger").click(function(){
					$(this).toggleClass("open");
				});
			});
			$(document).ready(function(){
				$(".open-close-button").click(function(){
					$(this).toggleClass("open");
				});
			});

			$(document).ready(function(){

			    $(".menu-toggle").click(function(){
			        $(".menu-overlay").toggle();
			        $(this).toggleClass("open");
			    });
			    $(".our-work-toggle").click(function(){
			        $(".menu-links").toggle();
			        $(this).toggleClass("open");
			    });
			    $(".contact-us-toggle").click(function(){
			        $(".contact-us-details").toggle();
			        $(this).toggleClass("open");
			    });
			    $(".menu-overlay a").click(function( event ){
			        $(".menu-overlay").toggle();
			        console.log(this.hash);
			        $("html, body").animate({
						scrollTop: $(this.hash).offset().top
					}, 1000);
			        $(".menu-toggle").removeClass("open");
			        event.preventDefault();
			        $(".hamburger").removeClass("open");
			        event.preventDefault();
			        $(".our-work-toggle").removeClass("open");
			        event.preventDefault();
			        $(".contact-us-toggle").removeClass("open");
			        event.preventDefault();
			    });
			});
