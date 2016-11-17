// accordion for "About" page

window.onload = function () {
	$("#accordion").accordion();
	collapsible: true
	autoHeight: false
	
};

// hover and blur with text on music page


// rainier

$(document).ready(function(){
    $("#rain_btn").click(function(){
        $("#rainier").animate({
            height: 'toggle'
        });
    });
});

$(document).ready(function(){
    $("#rain_btn2").click(function(){
        $("#rain_btn").animate({
            height: 'toggle'
        });
    });
});

$(document).ready(function(){
    $("#hello").click(function(){
        $("form").animate({
            height: 'toggle'
        });
    });
});