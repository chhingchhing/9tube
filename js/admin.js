// Nav left side, as default is hide
$("ul.nav-second-level").hide();

$("body").on("click", "a.nav-left-9", function(){
	// $("ul.nav-second-level").toggle();

	$(this).siblings("ul").toggle();
	// $(this).closest("ul").toggle();
	$(this).parent().parent("li").addClass("active");
	// $(this).parent().closest("ul").addClass("collapse in");
	// $(this).siblings().addClass("ul").addClass("scollapse in");
});