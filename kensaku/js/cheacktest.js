function initFunc(){
				selectArray = [-1,-1,-1,-1,-1];
				scoreArray = [0,0,0,0,0];
				qNum = selectArray.length;
			}

//-----画像のプリロード
function preloadFunc() {
	for(var i = 0; i< arguments.length; i++){
		$("<img>").attr("src", arguments[i]);
	}
}

function againFunc(){
				moveFunc(-1);
				for (var i in selectArray){
					var selectID = selectArray[i];
					$("#" + i + "_" + selectID).removeClass("selected");
				}
				initFunc();//---初期化
			}


function quesFunc(){
	var idArray = this.id.split("_");
	var qID = Number(idArray[0]);
	var ansID = Number(idArray[1]);
	var selectID = selectArray[qID];
	if (ansID == selectID) return;
	$("#" + qID + "_" + ansID).addClass("selected");
	$("#" + qID + "_" + selectID).removeClass("selected");
	selectArray[qID] = ansID;
	moveFunc(qID);

	scoreArray[qID] =  Number($(this).attr("sc"));
	if (qID+1 >= qNum) resultFunc();
}

function resultFunc(){
	var totalScore = 0;
	for(var i in scoreArray){
		totalScore += scoreArray[i];
	}
	
	switch (true){
		case totalScore >= 70:
			var lv = 4;
			break;
		case totalScore >= 50:
			var lv = 3;
			break;
		case totalScore >= 30:
			var lv = 2;
			break;
		case totalScore >= 0:
			var lv = 1;
			break;
		default:
			var lv = 0;
	}
//	$("#resultPoint").text(totalScore);
//	$("#resultImage").css("background-image", "url('img/cheacktest/lv"+lv+".png')");
	if (lv === 4){
		document.getElementById("resultTitle").innerHTML = 'あなたにオススメの資格は・・・<h2><a href="#">社会保険労務士</a></h2>';
		document.getElementById("resultText").innerHTML = '<p>ちょっとお堅いあなたは社会保険労務士の資格がオススメ！将来安定間違いなしやで！</p>';
		document.getElementById("here").innerHTML = '<p>社会保険労務士を取得するなら⇒</p>';
		document.getElementById("ad").innerHTML = '<a href="http://h.accesstrade.net/sp/cc?rk=01007ha700ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=01007ha700ddpb" alt="" border="0" /></a>';
		document.getElementById("resultImage").innerHTML = '<img src="http://www.imashimaro.jp/wp-content/themes/kensaku/img/cheacktest/res1.png" width="230" height="230" alt="">';

	}　else if (lv === 3){
		document.getElementById("resultTitle").innerHTML = 'あなたにオススメの資格は・・・<h2><a href="#">インテリアコーディネーター</a></h2>';
		document.getElementById("resultText").innerHTML = '<p>センスに溢れるあなたはインテリアコーディネーターがオススメ、資格取得して、あなたの人生もコーディネート！</p>';
		document.getElementById("here").innerHTML = '<p>インテリアコーディネーターを取得する⇒</p>';
		document.getElementById("ad").innerHTML = '<a href="http://h.accesstrade.net/sp/cc?rk=01007haa00ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=01007haa00ddpb" alt="" border="0" /></a>';
		document.getElementById("resultImage").innerHTML = '<img src="http://www.imashimaro.jp/wp-content/themes/kensaku/img/cheacktest/res2.png" width="230" height="230" alt="">';

	}　else if (lv === 2){
		document.getElementById("resultTitle").innerHTML = 'あなたにオススメの資格は・・・<h2><a href="#">危険物取扱者</a></h2>';
		document.getElementById("resultText").innerHTML = '<p>ちょっとスリリングなことが好きなあなたは危険物取扱者の資格取得がオススメ。仕事もプライベートもスリリングな毎日を</p>';
		document.getElementById("here").innerHTML = '<p>危険物取扱者の資格を取得する⇒</p>';
		document.getElementById("ad").innerHTML = '<a href="http://h.accesstrade.net/sp/cc?rk=01007hb300ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=01007hb300ddpb" alt="" border="0" /></a>';
		document.getElementById("resultImage").innerHTML = '<img src="http://www.imashimaro.jp/wp-content/themes/kensaku/img/cheacktest/res3.png" width="230" height="230" alt="">';

	}　else if (lv === 1){
		document.getElementById("resultTitle").innerHTML = 'あなたにオススメの資格は・・・<h2><a href="#">世界遺産検定</a></h2>';
		document.getElementById("resultText").innerHTML = '<p>どんなときでもアクティブなあなたには世界遺産検定がオススメ！世界を知って知見を広めよう！</p>';
		document.getElementById("here").innerHTML = '<p>世界遺産検定を取得する⇒</p>';
		document.getElementById("ad").innerHTML = '<a href="http://h.accesstrade.net/sp/cc?rk=0100em9400ddpb" target="_blank"><img src="http://h.accesstrade.net/sp/rr?rk=0100em9400ddpb" alt="生涯学習のユーキャン　教材購入プロモーション" border="0" /></a>';
		document.getElementById("resultImage").innerHTML = '<img src="http://www.imashimaro.jp/wp-content/themes/kensaku/img/cheacktest/res4.png" width="230" height="230" alt="">';

	}
}

function moveFunc(vol){
	var myPos = (vol+1) * -620;
	$("#qContainer").delay(500).animate({left: myPos},500);
}

$(function(){
	initFunc();//---初期化
	//画像のプリロード
	preloadFunc("img/cheacktest/lv0.png","img/cheacktest/lv1.png","img/cheacktest/lv2.png","img/cheacktest/lv3.png","img/cheacktest/lv4.png", "img/cheacktest/againOn.png");
	$("ul>li").click(quesFunc);
	$("#againButton").click(againFunc);
});

