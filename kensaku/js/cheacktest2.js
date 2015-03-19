var selectArray = [-1,-1,-1,-1,-1];


$(function(){
	$("ul.cheacktest>li").click(function(){
		var idArray = this.id.split("_");
		var qID = Number(idArray[0]);
		var ansID = Number(idArray[1]);

		selectArray[qID] = ansID;

		$(this).addClass("selected");
		var selectID = selectArray[qiD];
			$("#" + qID + "_" + ansID).addClass("selected");
			$("#" + qID + "_" + selectID).removeClass("selected");
	});

});
