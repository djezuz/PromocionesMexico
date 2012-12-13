$(document).on("ready", inicio);

function inicio()
{
	$("header div a img").on("hover", opacidad);
	$("header div a img").on("mouse", normal);
};

function opacidad()
{
	$(this).css("opacity", ".7");
};

function normal()
{
	$(this).css("opacity", "1");
}

