$(function()
{
	$("#iconNav a").click(function()
	{
		$("#mobileNav").animate({right: "0px"});
	});

	$("#iconClose").click(function()
	{
		$("#mobileNav").animate({right: "-100vw"});
	});
});