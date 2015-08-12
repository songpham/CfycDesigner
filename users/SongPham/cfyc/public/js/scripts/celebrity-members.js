var celebritymemberPage = (function () {
	var initModule = function () {
		$(document).ready(function($){
			// $('#tab-content a').click(function (e) {
			// 	console.log($(this).attr('href'));
			//     if($(this).parent('li').hasClass('active')){
			//         $( $(this).attr('href') ).hide();
			//     }else {
			//         e.preventDefault();
			//         $(this).tab('show');
			//     }
			// });

			// $('.celeb-items a').on("click",function(){
			// 	//remove active item first then add active to current one
			// 	$(".celeb-items a.active").removeClass("active");
			// 	$(this).addClass('active');
			// 	console.log($(this).attr('href'));
			// });

			if(window.location.hash) {
				//this will regcosise the who have click from homepage. Lam will code more when page finish
				var celeb = window.location.hash.substring(1);
				switch(celeb){
					case 'hongocha': console.log('hongocha');break;
					case 'xuanlan': console.log('xuanlan');break;
					case 'phuongmai': console.log('phuongmai');break;
					case 'diemmy': console.log('diemmy');break;
					case 'hoangmy': console.log('hoangmy');break;
					case 'hovinhkhoa': console.log('hovinhkhoa');break;
					case 'chipu': console.log('chipu');break;
					case 'randydobson': console.log('randydobson');break;
					default: console.log('hongocha');
				}
			}

		});
	};
    return {
        initModule: initModule
    };
}());
celebritymemberPage.initModule();