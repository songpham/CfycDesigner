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

			$('.celeb-items a').on("click",function(){
				//remove active item first then add active to current one
				$(".celeb-items a.active").removeClass("active");
				$(this).addClass('active');
			});

		});
	};
    return {
        initModule: initModule
    };
}());
celebritymemberPage.initModule();