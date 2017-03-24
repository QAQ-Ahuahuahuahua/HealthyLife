/**
 * @author zjh
 */
$(document).ready(function () {
	size_li = $("#myList li").size();
	x=2;
	$('#myList li:lt('+x+')').show();
	$('#loadMore').click(function () {
		x= (x+1 <= size_li) ? x+1 : size_li;
		$('#myList li:lt('+x+')').show();
	});
		    
	$('#showLess').click(function () {
		x=(x-1<0) ? 1 : x-1;
		$('#myList li').not(':lt('+x+')').hide();
	});
});

