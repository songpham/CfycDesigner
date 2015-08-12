var vipmemberPage = (function () {
	var initModule = function () {
		
			$('a.cta ').on('click',function(){
				var  booknow = $('.booknow');
				console.log(booknow);
				animateTo(booknow);
			});			
		
	};
    return {
        initModule: initModule
    };
}());
$(document).ready(function($) {
    vipmemberPage.initModule();
});