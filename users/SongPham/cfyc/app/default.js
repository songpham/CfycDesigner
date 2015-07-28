    // toggles menu
    var mobile-navigation = function(){
    $("#mobile-navigation-menu-close, #menu-toggle").click(function(e) {
        e.preventDefault();
        $("#mobile-navigation-wrapper").toggleClass("active");
    });
    
    			$('#desktop-nav a').click(function (e) {
			    if($(this).parent('li').hasClass('active')){
			        $( $(this).attr('href') ).hide();
			    }
			    else {
			        e.preventDefault();
			        $(this).tab('show');
			    }
			});
		}
			
    /* Lifestyle Menu */
    $('#mobile-lifestyle-menu').click(function (e) {
    	$("#club-menu, #dich-vu-menu").removeClass( "in");
    	$("#mobile-dich-vu-menu .glyphicon, #mobile-club-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
    	if ($('#mobile-lifestyle-menu .glyphicon').hasClass("glyphicon-chevron-right")){
			$("#mobile-lifestyle-menu .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
			} else {
			 $("#mobile-lifestyle-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
			}
	});
	/* Dich Vu Menu */
	$('#mobile-dich-vu-menu').click(function (e) {
		$("#lifestyle-menu, #club-menu").removeClass( "in");
		$("#mobile-club-menu .glyphicon, #mobile-lifestyle-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
    	if ($('#mobile-dich-vu-menu .glyphicon').hasClass("glyphicon-chevron-right")){
			$("#mobile-dich-vu-menu .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
			} else {
			 $("#mobile-dich-vu-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
			}
	});
	
	/* Club Menu */
	
	$('#mobile-club-menu').click(function (e) {
	    $("#lifestyle-menu, #dich-vu-menu").removeClass( "in");
	    $("#mobile-dich-vu-menu .glyphicon, #mobile-lifestyle-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
    	if ($('#mobile-club-menu .glyphicon').hasClass("glyphicon-chevron-right")){
			$("#mobile-club-menu .glyphicon").removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
				} else {
					$("#mobile-club-menu .glyphicon").removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
					}	
	});
