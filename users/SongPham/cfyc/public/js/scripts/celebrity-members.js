var celebritymemberPage = (function () {
	var initModule = function () {
		$(document).ready(function($){
			$('#tab-content a').click(function (e) {
			    if($(this).parent('li').hasClass('active')){
			        $( $(this).attr('href') ).hide();
			    }
			    else {
			        e.preventDefault();
			        $(this).tab('show');
			    }
			});

		});
	};
    return {
        initModule: initModule
    };
}());
celebritymemberPage.initModule();