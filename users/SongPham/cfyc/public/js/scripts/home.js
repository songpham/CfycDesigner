var homePage = (function () {
	var initModule = function () {
		$(document).ready(function($){
			//trainner img click event. turn black & white images to color
			$('.trainner_photo img').on('click',function(){
				var trainner_name = $(this).attr('id');
				$('.trainner_photo img,.trainner_text div').removeClass('active');
				$(this).addClass('active');	
				$('.trainner_text .'+trainner_name).addClass('active');

				/*var desc = $('.trainner_text #'+trainner_name).html();
				$('.show_desc').html(desc);
	            if($('.show_desc').parent('.slimScrollDiv').size() > 0) {
	              $('.show_desc').parent().replaceWith($('.show_desc'));
	              // now (re)assign slimScroll
	              $('.show_desc').slimScroll({
	                height: '500px',
	                alwaysVisible: true,
	                size: '5px'
	              });
	        	}*/
			});

			//trigger mouse over to click events
			/*$(".trainner_photo img").hover(function(){
			    $(this).trigger('click');
			    }, function(){
			});*/


			//start slimscroll on page load
			/*$('.show_desc').slimScroll({
		        height: '500px',
		        alwaysVisible: true,
		        size: '5px'
		    });*/

		});
	};
    return {
        initModule: initModule
    };
}());
homePage.initModule();