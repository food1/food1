
//快捷留言
$(".quickMessage li").click(function () {
	var lit = $(this).find("p").text()
	$(".Message").val(lit)
});

