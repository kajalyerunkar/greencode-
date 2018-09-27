$(document).ready(function(){
	//alert(1);
	$(".more_details").hide();
	$(".single-property").mouseenter(function(){
		$(this).children(".more_details").fadeIn(1000);
	})

	$(".single-property").mouseleave(function(){
		$(".more_details").fadeOut(1000);
	})

	$(".media-service-info").hover(function(){
	 	$(this).toggleClass('cn');
	 });

	$(".agent_slider").mouseenter(function(){
		$(this).children(".yellow_box").hover();
	})

	
				 


	    $(".buy_button_prop").hide();
		$(".property-image").mouseenter(function(){
			$(this).children(".buy_button_prop").fadeIn(1000);
		})

		$(".property-image").mouseleave(function(){
			$(".buy_button_prop").fadeOut(1000);
		})
		function myclick() {
		    var x = document.getElementById("myDIV");
		    if (x.style.display === "none") {
		        x.style.display = "block";
		    } else {
		        x.style.display = "none";
		    }
		}
		
         $(".content").hide();
    $(".show_hide").on("click", function () {
        var txt = $(".content").is(':visible') ? 'Read More' : 'Read Less';
        $(".show_hide").text(txt);
        $(this).next('.content').slideToggle(200);
    });

    	// rent form country code dropdown 
		$('#choose').click(function(){
			  $(this).siblings('select').css('width', $(this).outerWidth(true)).toggle();
		})
	
		// dashboard profile photo
		$(document).on('click', '.browse', function(){
		  var file = $(this).parent().parent().parent().find('.file');
		  file.trigger('click');
		});
		$(document).on('change', '.file', function(){
		  $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
		});
})