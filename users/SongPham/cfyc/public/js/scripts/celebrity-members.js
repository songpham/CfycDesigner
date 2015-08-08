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
				//try to remove all celeb-items ahave class active.
				$('.carousel-inner .item').each(function(index, el) {
					var aaa = $(this).find('a').attr('class');
					console.log(aaa);
				});
				//$(this).addClass('active');
			});

		});
	};
    return {
        initModule: initModule
    };
}());
celebritymemberPage.initModule();