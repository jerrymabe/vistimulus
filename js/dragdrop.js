function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  if(ev.target.childNodes.length == 1 || ev.target.childNodes.length == 3 || ev.target.childNodes.length == 4)
	ev.target.appendChild(document.getElementById(data));
}

function clickset1(){
	var img = [], len = [], attrID = [];
	for(var i = 1; i< 5; i++){
		img[i] = $('#drag'+ (parseInt('12')+parseInt(i)) + '').find('img');
		len[i] = img[i].length;
	}
	if(len[1]>0 && len[2]>0 && len[3]>0 && len[4]>0){
		for(var i = 1; i< 5; i++){
			attrID[i] = img[i].first().attr('id');
			document.getElementById(attrID[i]).setAttribute('draggable', false);
		}
		$('.flex-container2').css('display','flex');
		$('#set4').attr('onclick','clickset2()');
	}
}

function clickset2(){
	var img = [], len = [], attrID = [];
	for(var i = 5; i< 9; i++){
		img[i] = $('#drag'+ (parseInt('12')+parseInt(i)) + '').find('img');
		len[i] = img[i].length;
	}
	if(len[5]>0 && len[6]>0 && len[7]>0 && len[8]>0){
		for(var i = 5; i< 9; i++){
			attrID[i] = img[i].first().attr('id');
			document.getElementById(attrID[i]).setAttribute('draggable', false);
		}
		$('.flex-container3').css('display','flex');
		$('#set4').attr('onclick','clickset3()');
	}
}

function clickset3(){
	var img = [], len = [], attrID = [];
	for(var i = 9; i< 13; i++){
		img[i] = $('#drag'+ (parseInt('12')+parseInt(i)) + '').find('img');
		len[i] = img[i].length;
	}
	if(len[9]>0 && len[10]>0 && len[11]>0 && len[12]>0){
		for(var i = 9; i< 13; i++){
			attrID[i] = img[i].first().attr('id');
			document.getElementById(attrID[i]).setAttribute('draggable', false);
		}
	document.getElementById('button-stop').click();
	}
}