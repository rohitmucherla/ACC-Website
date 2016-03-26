var toggled = false;

//Makes hamburger menu's background change properly
$(document).ready(function(){
	$(document).click(function (event) {
    var clickover = $(event.target);
    console.log($(event.target));
    var $navbar = $(".navbar-collapse");               
    var _opened = $navbar.hasClass("in");
    if (_opened === true && !(clickover.hasClass("navbar-toggle") || clickover.hasClass("icon-bar"))) {      
        $navbar.collapse('hide');
        $(".navbar-default .navbar-toggle").css("background-color","transparent");
        toggled = false;
    }else if(clickover.hasClass("navbar-toggle") || clickover.hasClass("icon-bar")){
			if(toggled){
			$(".navbar-default .navbar-toggle").css("background-color","transparent");
			toggled = false;
			} else{
			$(".navbar-default .navbar-toggle").css("background-color","#ddd");
			toggled = true;
			};
		};
	console.log(toggled);
	});
});
