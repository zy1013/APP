function checkMainPage()
{
	var cookies = document.cookie;
	
}

function mainNewsClicked (node){
	var thisnode = $(node);
	if (!node.classList.contains('active')) {
		thisnode.addClass('active');
		thisnode.siblings().removeClass('active');
		$("#news").show();
		$("#instruction").hide();
	}
}
function mainInstructionClicked (node){
	var thisnode = $(node);
	if (!node.classList.contains('active')) {
		thisnode.addClass('active');
		thisnode.siblings().removeClass('active');
		$("#news").hide();
		$("#instruction").show();
		

	}
}