var homePage = (function () {
	var initModule = function () {
		// console.log('1');
		$(document).ready(function($){
			
			$('.trainner_photo img').on('click',function(){
				var trainner_name = $(this).attr('id');
				$('.trainner_photo img,.trainner_text div').removeClass('active');
				$(this).addClass('active');	
				$('.trainner_text .'+trainner_name).addClass('active');
			});
		});
	};
    return {
        initModule: initModule
    };
}());
homePage.initModule();