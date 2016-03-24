function ScrollPic(scrollContId,arrLeftId,arrRightId,dotListId){this.scrollContId=scrollContId;this.arrLeftId=arrLeftId;this.arrRightId=arrRightId;this.dotListId=dotListId;this.dotClassName="current";this.dotOnClassName="";this.dotObjArr=[];this.pageWidth=0;this.frameWidth=0;this.speed=10;this.space=10;this.pageIndex=0;this.autoPlay=true;this.autoPlayTime=5;var _autoTimeObj,_scrollTimeObj,_state="ready";this.stripDiv=document.createElement("DIV");this.listDiv01=document.createElement("DIV");this.listDiv02=document.createElement("DIV");if(!ScrollPic.childs){ScrollPic.childs=[]};this.ID=ScrollPic.childs.length;ScrollPic.childs.push(this);this.initialize=function(){if(!this.scrollContId){throw new Error("error");return};this.scrollContDiv=$(this.scrollContId);if(!this.scrollContDiv){throw new Error("error");return};this.scrollContDiv.style.width=this.frameWidth+"px";this.scrollContDiv.style.overflow="hidden";this.listDiv01.innerHTML=this.listDiv02.innerHTML=this.scrollContDiv.innerHTML;this.scrollContDiv.innerHTML="";this.scrollContDiv.appendChild(this.stripDiv);this.stripDiv.appendChild(this.listDiv01);this.stripDiv.appendChild(this.listDiv02);this.stripDiv.style.overflow="hidden";this.stripDiv.style.zoom="1";this.stripDiv.style.width="32766px";this.listDiv01.className="z";this.listDiv02.className="z";_attachEvent(this.scrollContDiv,"mouseover",Function("ScrollPic.childs["+this.ID+"].stop()"));_attachEvent(this.scrollContDiv,"mouseout",Function("ScrollPic.childs["+this.ID+"].play()"));if(this.arrLeftId){this.arrLeftObj=$(this.arrLeftId);if(this.arrLeftObj){_attachEvent(this.arrLeftObj,"mousedown",Function("ScrollPic.childs["+this.ID+"].rightMouseDown()"));_attachEvent(this.arrLeftObj,"mouseup",Function("ScrollPic.childs["+this.ID+"].rightEnd()"));_attachEvent(this.arrLeftObj,"mouseout",Function("ScrollPic.childs["+this.ID+"].rightEnd()"))}};if(this.arrRightId){this.arrRightObj=$(this.arrRightId);if(this.arrRightObj){_attachEvent(this.arrRightObj,"mousedown",Function("ScrollPic.childs["+this.ID+"].leftMouseDown()"));_attachEvent(this.arrRightObj,"mouseup",Function("ScrollPic.childs["+this.ID+"].leftEnd()"));_attachEvent(this.arrRightObj,"mouseout",Function("ScrollPic.childs["+this.ID+"].leftEnd()"))}};if(this.dotListId){this.dotListObj=$(this.dotListId);if(this.dotListObj){var pages=Math.round(this.listDiv01.offsetWidth/this.frameWidth+0.1),i,tempObj;this.listDiv01.style.width = (pages * this.pageWidth) + 'px';for(i=0;i<pages;i++){tempObj=document.createElement("span");this.dotListObj.appendChild(tempObj);this.dotObjArr.push(tempObj);if(i==this.pageIndex){tempObj.className=this.dotClassName}else{tempObj.className=this.dotOnClassName};_attachEvent(tempObj,"mouseover",Function("ScrollPic.childs["+this.ID+"].pageTo("+i+")"));}}};if(this.autoPlay){this.play()}};this.leftMouseDown=function(){if(_state!="ready"){return};_state="floating";_scrollTimeObj=setInterval("ScrollPic.childs["+this.ID+"].moveLeft()",this.speed)};this.rightMouseDown=function(){if(_state!="ready"){return};_state="floating";_scrollTimeObj=setInterval("ScrollPic.childs["+this.ID+"].moveRight()",this.speed)};this.moveLeft=function(){if(this.scrollContDiv.scrollLeft+this.space>=this.listDiv01.scrollWidth){this.scrollContDiv.scrollLeft=this.scrollContDiv.scrollLeft+this.space-this.listDiv01.scrollWidth}else{this.scrollContDiv.scrollLeft+=this.space};this.accountPageIndex()};this.moveRight=function(){if(this.scrollContDiv.scrollLeft-this.space<=0){this.scrollContDiv.scrollLeft=this.listDiv01.scrollWidth+this.scrollContDiv.scrollLeft-this.space}else{this.scrollContDiv.scrollLeft-=this.space};this.accountPageIndex()};this.leftEnd=function(){if(_state!="floating"){return};_state="stoping";clearInterval(_scrollTimeObj);var fill=this.pageWidth-this.scrollContDiv.scrollLeft%this.pageWidth;this.move(fill)};this.rightEnd=function(){if(_state!="floating"){return};_state="stoping";clearInterval(_scrollTimeObj);var fill=-this.scrollContDiv.scrollLeft%this.pageWidth;this.move(fill)};this.move=function(num,quick){var thisMove=num/5;if(!quick){if(thisMove>this.space){thisMove=this.space};if(thisMove<-this.space){thisMove=-this.space}};if(Math.abs(thisMove)<1&&thisMove!=0){thisMove=thisMove>=0?1:-1}else{thisMove=Math.round(thisMove)};var temp=this.scrollContDiv.scrollLeft+thisMove;if(thisMove>0){if(this.scrollContDiv.scrollLeft+thisMove>=this.listDiv01.scrollWidth){this.scrollContDiv.scrollLeft=this.scrollContDiv.scrollLeft+thisMove-this.listDiv01.scrollWidth}else{this.scrollContDiv.scrollLeft+=thisMove}}else{if(this.scrollContDiv.scrollLeft-thisMove<=0){this.scrollContDiv.scrollLeft=this.listDiv01.scrollWidth+this.scrollContDiv.scrollLeft-thisMove}else{this.scrollContDiv.scrollLeft+=thisMove}};num-=thisMove;if(Math.abs(num)==0){_state="ready";if(this.autoPlay){this.play()};this.accountPageIndex();return}else{this.accountPageIndex();setTimeout("ScrollPic.childs["+this.ID+"].move("+num+","+quick+")",this.speed)}};this.next=function(){if(_state!="ready"){return};_state="stoping";this.move(this.pageWidth,true)};this.play=function(){if(!this.autoPlay){return};clearInterval(_autoTimeObj);_autoTimeObj=setInterval("ScrollPic.childs["+this.ID+"].next()",this.autoPlayTime*1000)};this.stop=function(){clearInterval(_autoTimeObj)};this.pageTo=function(num){if(_state!="ready"){return};_state="stoping";var fill=num*this.pageWidth-this.scrollContDiv.scrollLeft;this.move(fill,true)};this.accountPageIndex=function(){this.pageIndex=Math.round(this.scrollContDiv.scrollLeft/this.frameWidth);if(this.pageIndex>Math.round(this.listDiv01.offsetWidth/this.frameWidth+0.4)-1){this.pageIndex=0};var i;for(i=0;i<this.dotObjArr.length;i++){if(i==this.pageIndex){this.dotObjArr[i].className=this.dotClassName}else{this.dotObjArr[i].className=this.dotOnClassName}}}};function comiis_marquee(h, speed, delay, sid) {var t = null;var p = false;var o = $(sid);o.innerHTML += o.innerHTML;o.onmouseover = function() {p = true};o.onmouseout = function() {p = false};o.scrollTop = 0;function start(){t = setInterval(scrolling, speed);if(!p) o.scrollTop += 2;};function scrolling(){if(p){return;}if(o.scrollTop % h != 0) {o.scrollTop += 2;if(o.scrollTop >= o.scrollHeight/2) {o.scrollTop = 0;}} else {clearInterval(t);setTimeout(start, delay);}};setTimeout(start, delay);}
var scrollPic_01 = new ScrollPic(); 
var scrollPic_02 = new ScrollPic(); 
var scrollPic_03 = new ScrollPic(); 
var scrollPic_04 = new ScrollPic(); 
var scrollPic_05 = new ScrollPic();
if($('comiis_swfimg_key')){
	scrollPic_01.dotListId = "comiis_swfimg_key";
	scrollPic_01.arrLeftId = "leftkey";
	scrollPic_01.arrRightId = "rightkey";
	scrollPic_01.scrollContId = "comiis_swfimg";
	scrollPic_01.frameWidth = 310;
	scrollPic_01.pageWidth = 310;
	scrollPic_01.speed = 10;
	scrollPic_01.space = 10;
	scrollPic_01.autoPlay = true;
	scrollPic_01.autoPlayTime = 5;
	scrollPic_01.initialize();
}
if($('comiis_twrd_imgkey')){
	scrollPic_02.dotListId = "comiis_twrd_imgkey";
	scrollPic_02.scrollContId = "comiis_twrd_img";
	scrollPic_02.frameWidth = 288;
	scrollPic_02.pageWidth = 294;
	scrollPic_02.speed = 10;
	scrollPic_02.space = 10;
	scrollPic_02.autoPlay = true;
	scrollPic_02.autoPlayTime = 5;
	scrollPic_02.initialize();
}
if($('comiis_msimgkey')){
	if(hasClass($('nv_portal'), 'comiis_wide')) {
		scrollPic_03.dotListId = "comiis_msimgkey";
		scrollPic_03.scrollContId = "comiis_msimg";
		scrollPic_03.frameWidth = 573;
		scrollPic_03.pageWidth = 585;
		scrollPic_03.speed = 10;
		scrollPic_03.space = 10;
		scrollPic_03.autoPlay = true;
		scrollPic_03.autoPlayTime = 5;
		scrollPic_03.initialize();
	}else{
		scrollPic_03.dotListId = "comiis_msimgkey";
		scrollPic_03.scrollContId = "comiis_msimg";
		scrollPic_03.frameWidth = 473;
		scrollPic_03.pageWidth = 480;
		scrollPic_03.speed = 10;
		scrollPic_03.space = 10;
		scrollPic_03.autoPlay = true;
		scrollPic_03.autoPlayTime = 5;
		scrollPic_03.initialize();
	}
}
if($('comiis_tjlp_imgkey')){
	scrollPic_04.dotListId = "comiis_tjlp_imgkey";
	scrollPic_04.scrollContId = "comiis_tjlp_img";
	scrollPic_04.frameWidth = 230;
	scrollPic_04.pageWidth = 240;
	scrollPic_04.speed = 10;
	scrollPic_04.space = 10;
	scrollPic_04.autoPlay = true;
	scrollPic_04.autoPlayTime = 5;
	scrollPic_04.initialize();
}
if($('comiis_yyimgkey')){
	if(hasClass($('nv_portal'), 'comiis_wide')) {
		scrollPic_05.dotListId = "comiis_yyimgkey";
		scrollPic_05.scrollContId = "comiis_yyimg";
		scrollPic_05.frameWidth = 573;
		scrollPic_05.pageWidth = 580;
		scrollPic_05.speed = 10;
		scrollPic_05.space = 10;
		scrollPic_05.autoPlay = true;
		scrollPic_05.autoPlayTime = 5;
		scrollPic_05.initialize();
	}else{
		scrollPic_05.dotListId = "comiis_yyimgkey";
		scrollPic_05.scrollContId = "comiis_yyimg";
		scrollPic_05.frameWidth = 473;
		scrollPic_05.pageWidth = 480;
		scrollPic_05.speed = 10;
		scrollPic_05.space = 10;
		scrollPic_05.autoPlay = true;
		scrollPic_05.autoPlayTime = 5;
		scrollPic_05.initialize();
	}
}
if($('comiis_shkx')){
	comiis_marquee(26, 60, 3000, 'comiis_shkx');
}
if($('comiis_igg')){
	comiis_marquee(20, 60, 3000, 'comiis_igg');
}