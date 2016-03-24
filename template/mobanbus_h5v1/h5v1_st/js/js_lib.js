 //选择器
 function $t(id,tag){var obj=id&&typeof id!="string"?id:document.getElementById(id)||document;if(!tag){return obj;}else{return obj.getElementsByTagName(tag);}}

//缓冲滚动图 [ID,左边按钮,右边按钮,滚动方向,滚动条数,自动播放时间,当前样式,滚动速度]
function Scroll(id,leftbut,rightbut,path,page,autoPlayTime,nowClass,rate){
	var nowPage=0,setout,setIn,speed,remain,now_num,target_num,obj=id.split("/"),xy="+",rate=rate||10;
	var scrollId=$t(obj[0]);
	if(nowClass){page=1;$t(obj[0],"div")[0].innerHTML+=$t(obj[0],"div")[0].innerHTML;} //如果有当前样式，复制内容
	var scroll_List=$t(obj[0],obj[1]);
	var scroll_List_Total=scroll_List.length; //列表总数
	var offset_scrollId=(path=="scrollLeft")?scrollId.offsetWidth:scrollId.offsetHeight; //取外容器宽或高
	var offset_single=(path=="scrollLeft")?scroll_List[0].offsetWidth:scroll_List[0].offsetHeight; //取内部单个列表宽或高
	var frameInList=Math.round(offset_scrollId/offset_single); //外容器可见区域列表数
	if(nowClass){scroll_List[nowPage+nowClass].className="nowclass";}
	if(leftbut){$t(leftbut).onmousedown=function(){xy="-";ScrollSpace();};}
	if(leftbut){$t(rightbut).onmousedown=function(){xy="+";ScrollSpace();};}
	if(autoPlayTime){ScrollAutoPlay();}
	function ScrollAutoPlay(){if(remain!=0){setout=setTimeout(ScrollSpace,autoPlayTime);}} //自动播放函数
	function ScrollSpace(){  //执行函数
		clearInterval(setIn);clearInterval(setout);
		remain=(xy=="+")?scroll_List_Total-frameInList-nowPage:nowPage; //计算左右被隐藏的剩余列表数
		if(xy=="+"){nowPage=remain<page?nowPage+remain:nowPage+page;}else{nowPage=remain<page?remain-nowPage:remain-page;} //加向左,减向右
		setIn=setInterval(ScrollBuffer,5);
		if(nowClass){ //加当前样式
			if(xy=="+"&&scroll_List_Total/2+1<=nowPage){scrollId[path]=0;nowPage=1;}
			if(xy=="-"&&nowPage<=0){scrollId[path]=scroll_List_Total*offset_single/2+offset_single;nowPage=scroll_List_Total/2;}
			for(var n=0;n<scroll_List_Total;n++){scroll_List[n].className="";} 
			scroll_List[nowPage+nowClass].className="nowclass";
		}
	}
	function ScrollBuffer(){ //缓冲函数
		now_num=scrollId[path]; //当前值
		target_num=nowPage*offset_single; //目标值
		speed=(target_num<now_num)?Math.floor((target_num-now_num)/rate):Math.ceil((target_num-now_num)/rate); //目标值-当前值
		scrollId[path]+=speed;
		if(speed==0){clearInterval(setIn);ScrollAutoPlay();}
	}
}

function focusall(listid,ulid,imgid,imghref){
	var imgsobj=$t(listid,"img");
	var asobj=$t(listid,"a");
	var now=0;
	var nums=imgsobj.length;
	for(var lo=0;lo<nums;lo++){$t(ulid).innerHTML+="<li>"+(lo+1)+"</li>";}
	var listo=$t(ulid,"li");
	for(var i=0;i<nums;i++){och();chimgs(i);}
	function chimgs(i){listo[i].onmouseover=function(){clearInterval(tt);now=i-1;och();ft();}}
	function och(){
		now=(now<nums-1)?now+1:0;
		if(document.all){
		$t(imgid).style.filter="progid:DXImageTransform.Microsoft.Fade()";
		$t(imgid).filters[0].Apply();
		$t(imgid).filters[0].Play(duration=1);
		}
		$t(imgid).src=imgsobj[now].src;
		$t(imghref).href=asobj[now].href;
		for(var b=0;b<nums;b++){listo[b].className="";listo[now].className="show";}
	}
	function ft(){tt=setInterval(och,3000);}
	ft();
}


//选项卡 [ID1,ID2,鼠标事件,当前显示,自动播放时间]
function Tag(id1,id2,mouse,num,time,fun){
	var o1=id1.split('/'),o2=id2.split('/');
	var ocon=$t(o2[0],o2[1]),olist=$t(o1[0],o1[1]);
	var olist_sum=olist.length;
	var m=mouse||"onmouseover",now=num||0,setIn;
	tag_ch(now); //默认执行切换函数
	if(time){TagAutoPlay();} //判断是否是需要自动播放
	function TagAutoPlay(){  //自动播放函数
		setIn=setInterval(function (){now=(now<olist_sum-1)?now+1:0;tag_ch(now);},time);
	}
	for(var i=0;i<olist_sum;i++){mousefun(i);} //默认执行鼠标事件函数
	function mousefun(i){ //鼠标事件函数
		olist[i][m]=ocon[i][m]=function(){
			clearInterval(setIn);now=i;tag_ch(i);
			if(fun){eval(fun);}
		};
		if(time){olist[i]["onmouseout"]=ocon[i]["onmouseout"]=function(){TagAutoPlay();};}
	}
	function tag_ch(i){ //切换函数
		for(var v=0;v<olist_sum;v++){
			olist[v].className=olist[v].className.replace("_ show","");
			ocon[v].className=ocon[v].className.replace("_ show","");
			olist[olist_sum-1].className="end "+olist[olist_sum-1].className.replace("end ",""); //处理最后一个选项卡
		}
		olist[i].className=olist[i].className+"_ show";
		ocon[i].className=ocon[i].className+"_ show";
	}
}



//input
function checkInput(el){
    if (!$t(el)) {
        return
    }
    var obj = $t(el);
    var old = obj.className;
    var ov = obj.value;
    
	obj.onclick = function(){obj.className = old + '_';obj.value = '';}
	obj.onblur = function(){ov = obj.value; if (ov == '') {obj.className = old;obj.value = obj.defaultValue;}}
}




//焦点图
function addImg(url){var img = new Image();img.src = url;return img;};
function FocusImg(){
    var img = $t("bigPicList", "img");
    var url = $t("bigPicList", "a");
    var now = 1, len = img.length, tm;
    var burl = $t("bigPic", "a")[0];
	var box = $t("focusBox");
    var bul = $t("focusList", "ul")[0];
	var lbtn = $t('rbtn');
	var rbtn = $t('lbtn');
    burl.appendChild(addImg(img[0].src));
    burl.href = url[0].href;
    var bimg = $t("bigPic", "img")[0];
    var bli = $t("focusList", "li");
	var size = bli[0].offsetWidth;
    bli[0].className = "on";
    function pfn(i){bli[i].onclick = function(){go(i,'right');}};
    for (var i = 0; i < len; i++) {pfn(i);}
	
	rbtn.onclick = function(){
		if(now==0){now=len-2;}else{now = now-2;}
		if(now<=-1){now=0;}
		go(now,'right');
	}
	lbtn.onclick = function(){if(now==0){return;}go(now,'left');}
	
	setTimeout(function(){box.style.cssText='height:6px;background:#010000;border:0px;'},3000)
	
	bimg.onmouseover = function(){box.style.cssText ='';}
	bimg.onmouseout  = function(){box.style.cssText ='height:6px;background:#010000;border:0px;';}
	box.onmouseover = function(){box.style.cssText ='';}
	box.onmouseout  = function(){box.style.cssText ='height:6px;background:#010000;border:0px;';}
    function xunhuan(path){
        if(!path){path='left'}
		uleft = bul.offsetLeft;
		if (/*@cc_on!@*/false) {
            bimg.style.filter = "progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,motion=forward)";
            bimg.filters[0].Apply();
            bimg.filters[0].Play(duration = 1);
        }
        burl.href = url[now].href;
        bimg.src = img[now].src;
        for (var i = 0; i < len; i++) {
            bli[i].className = "";
        }
		if(now==0){bul.style.left='0px'}
		if( now%3 == 0 && now !=0 && path=='left'){
			bul.style.left = (len-now >=3 ? uleft-3*size : uleft - (len-now)*size) + 'px';
		}
		if( (bli[now].offsetLeft+ bul.offsetLeft) <0 && path=='right'){
			bul.style.left = (now >=3 ? uleft+3*size : uleft + now*size) + 'px';
		}
        bli[now].className = "on";
		if(now < len - 1){
			now++
		}else{
			now = 0;
		}
    }
    function init(){
        tm = setInterval(xunhuan, 5000);
    }
    function go(n,p){
        clearInterval(tm);
        now = n;
        xunhuan(p);
        init();
    };
    init();
}

function $t(id,tag){var obj=id&&typeof id!="string"?id:document.getElementById(id)||document;if(!tag){return obj;}else{return obj.getElementsByTagName(tag);}}

function Scroll(id,leftbut,rightbut,path,page,autoPlayTime,nowClass,rate){
	var nowPage=0,setout,setIn,speed,remain,now_num,target_num,obj=id.split("/"),xy="+",rate=rate||10;
	var scrollId=$t(obj[0]);
	var ttag = obj[2] || 'div';
	if(nowClass){page=1;$t(obj[0],ttag)[0].innerHTML+=$t(obj[0],ttag)[0].innerHTML;} 
	var scroll_List=$t(obj[0],obj[1]);
	var scroll_List_Total=scroll_List.length;
	var offset_scrollId=(path=="scrollLeft")?scrollId.offsetWidth:scrollId.offsetHeight; 
	var offset_single=(path=="scrollLeft")?scroll_List[0].offsetWidth:scroll_List[0].offsetHeight; 
	var frameInList=Math.round(offset_scrollId/offset_single); 
	if(nowClass){scroll_List[nowPage+nowClass].className="nowclass";}
	if(leftbut){$t(leftbut).onmousedown=function(){xy="-";ScrollSpace();};}
	if(leftbut){$t(rightbut).onmousedown=function(){xy="+";ScrollSpace();};}
	if(autoPlayTime){ScrollAutoPlay();}
	function ScrollAutoPlay(){if(remain!=0){setout=setTimeout(ScrollSpace,autoPlayTime);}} 
	function ScrollSpace(){  
		clearInterval(setIn);clearInterval(setout);
		remain=(xy=="+")?scroll_List_Total-frameInList-nowPage:nowPage;
		if(xy=="+"){nowPage=remain<page?nowPage+remain:nowPage+page;}else{nowPage=remain<page?remain-nowPage:remain-page;} 
		setIn=setInterval(ScrollBuffer,5);
		if(nowClass){ 
			if(xy=="+"&&scroll_List_Total/2+1<=nowPage){scrollId[path]=0;nowPage=1;}
			if(xy=="-"&&nowPage<=0){scrollId[path]=scroll_List_Total*offset_single/2+offset_single;nowPage=scroll_List_Total/2;}
			for(var n=0;n<scroll_List_Total;n++){scroll_List[n].className="";} 
			scroll_List[nowPage+nowClass].className="nowclass";
		}
	}
	function ScrollBuffer(){
		now_num=scrollId[path]; 
		target_num=nowPage*offset_single; 
		speed=(target_num<now_num)?Math.floor((target_num-now_num)/rate):Math.ceil((target_num-now_num)/rate); 
		scrollId[path]+=speed;
		if(speed==0){clearInterval(setIn);ScrollAutoPlay();}
	}
}

function focusall(listid,ulid,imgid,imghref){
	var imgsobj=$t(listid,"img");
	var asobj=$t(listid,"a");
	var now=0;
	var nums=imgsobj.length;
	for(var lo=0;lo<nums;lo++){$t(ulid).innerHTML+="<li>"+(lo+1)+"</li>";}
	var listo=$t(ulid,"li");
	for(var i=0;i<nums;i++){och();chimgs(i);}
	function chimgs(i){listo[i].onmouseover=function(){clearInterval(tt);now=i-1;och();ft();}}
	function och(){
		now=(now<nums-1)?now+1:0;
		if(document.all){
		$t(imgid).style.filter="progid:DXImageTransform.Microsoft.Fade()";
		$t(imgid).filters[0].Apply();
		$t(imgid).filters[0].Play(duration=1);
		}
		$t(imgid).src=imgsobj[now].src;
		$t(imghref).href=asobj[now].href;
		for(var b=0;b<nums;b++){listo[b].className="";listo[now].className="show";}
	}
	function ft(){tt=setInterval(och,3000);}
	ft();
}


function Tag(id1,id2,mouse,num,time,fun){
	var o1=id1.split('/'),o2=id2.split('/');
	var ocon=$t(o2[0],o2[1]),olist=$t(o1[0],o1[1]);
	var olist_sum=olist.length;
	var m=mouse||"onmouseover",now=num||0,setIn;
	tag_ch(now); 
	if(time){TagAutoPlay();} 
	function TagAutoPlay(){ 
		setIn=setInterval(function (){now=(now<olist_sum-1)?now+1:0;tag_ch(now);},time);
	}
	for(var i=0;i<olist_sum;i++){mousefun(i);} 
	function mousefun(i){
		olist[i][m]=ocon[i][m]=function(){
			clearInterval(setIn);now=i;tag_ch(i);
			if(fun){eval(fun);}
		};
		if(time){olist[i]["onmouseout"]=ocon[i]["onmouseout"]=function(){TagAutoPlay();};}
	}
	function tag_ch(i){ 
		for(var v=0;v<olist_sum;v++){
			olist[v].className=olist[v].className.replace("_ show","");
			ocon[v].className=ocon[v].className.replace("_ show","");
			olist[olist_sum-1].className="end "+olist[olist_sum-1].className.replace("end ","");
		}
		olist[i].className=olist[i].className+"_ show";
		ocon[i].className=ocon[i].className+"_ show";
	}
}



//input
function checkInput(el){
    if (!$t(el)) {
        return
    }
    var obj = $t(el);
    var old = obj.className;
    var ov = obj.value;
    
	obj.onclick = function(){obj.className = old + '_';obj.value = '';}
	obj.onblur = function(){ov = obj.value; if (ov == '') {obj.className = old;obj.value = obj.defaultValue;}}
}




function addImg(url){var img = new Image();img.src = url;return img;}
function FocusImg(time,foc,fbimg)
{
var beg=$t($t(fbimg,"dd")[0],"div")[0];beg.check=true;
 var au=$t(foc,"a"),now=1,tm;var bimgs=$t(foc,"img");var vimg=new Image();vimg.src=bimgs[0].src;
 var ba=$t($t(fbimg,"dt")[0],"a")[0];ba.href=au[0].href;ba.onfocus=function(){this.blur()};
 var bt=$t(fbimg,"dt")[0];bt.appendChild(vimg);
 var bi=$t(bt,"img")[1];bi.alt=bimgs[0].alt;
 var bp=$t($t(fbimg,"dd")[0],"ul")[0];
 var len=au.length;
 for(var i=0;i<len;i++){bp.innerHTML+="<li>"+(i+1)+"</li>";}
 var bps=$t(bp,"li");
 bps[0].className="show";
 function pfn(m){
	 bps[m].onclick = function(e){
		  e = e || window.event;
		  if(e.stopPropagation){
				e.stopPropagation();
				e.preventDefault();
		  }else{
				e.cancelBubble = true;
				e.returnValue = false;
		  }
		 go(m);
		 if(beg.check){
			clearInterval(tm);
			init();
		}else{
			clearInterval(tm)
		}
	}
}
for(var i=0;i<len;i++){pfn(i);}
function xunhuan(){
	if(/*@cc_on!@*/false){
		bi.style.filter="progid:DXImageTransform.Microsoft.Wipe(GradientSize=1.0,motion=forward)";
		bi.filters[0].Apply();
		bi.filters[0].Play(duration=1);
	}
	ba.href=au[now].href;
	bi.src=bimgs[now].src;
	bi.alt=bimgs[now].alt;
	for(var i=0;i<len;i++){
		bps[i].className="";
	}
	bps[now].className="show";
	(now<len-1)?now++:now=0;
}
function init(){tm=setInterval(xunhuan,time);};
function go(n){
	clearInterval(tm);
	now=n;
	xunhuan();
	init();
}
init();
beg.onclick=function(){
	if(beg.check){
		beg.check=false;
		clearInterval(tm);
		beg.innerHTML="PLAY";
	}else{
		beg.check=true;
		clearInterval(tm);
		xunhuan();
		init();
		beg.innerHTML="STOP";
	}
};
} 



/* 20110907 tiger update */
var menFocus = function(bigList,infos,smallList,data){
	var blist = document.getElementById(bigList),
		div = document.getElementById(infos),
		link = div.getElementsByTagName('a')[0],
		info = div.getElementsByTagName('p')[0],
		small = document.getElementById(smallList),
		list = small.getElementsByTagName('dl')[0],
		btn = small.getElementsByTagName('span')[0],
		current = 0,
		old = -1,
		bimgs,
		m=[],
		m_div = new Anima(div),
		m_btn = new Anima(btn),
		m_list = new Anima(list),
		btnHeight = btn.offsetHeight,
		liHeight = 0;
		timer = null,
		max = 0,
		t = 0;
		

	function init(){
		var str = '',
			str2='';
		for(var i=0,l=data.length;i<l;i++){
			var a=0;
			if(i>=1){
				a = l-i;
			}
			str += '<li style="opacity:0;filter:alpha(opacity=0);"><a href="'+ data[i].link +'"><img src="'+ data[i].big +'" /></a></li>';
			str2 += '<dd><a href="'+ data[a].link +'"><img src="'+ data[a].little +'" /></a></dd>';
		}
		str2 += str2;
		blist.innerHTML = str;
		list.innerHTML = str2;

		bimgs = blist.getElementsByTagName('img');
		blist = blist.getElementsByTagName('li');
		max = blist.length;
		liHeight = list.getElementsByTagName('dd')[0].offsetHeight;
		t = -liHeight*(max+1);
		list.style.marginTop = t + 'px';
		
		for(var i=0,l=blist.length;i<l;i++){
			m[i] = new Anima(blist[i]);
		}
		isLoad(bimgs[current],function(){
			show(current);
			m_div.start({
				bottom:0
			})
		})
		
		Event.add(btn,'click',function(){
			m_list.start({
				marginTop:t + liHeight
			})
		})
		
	}
	m_list.complete = function(){
		hide(current);
		current++;
		t = t + liHeight;
		if(current == max){
			current = 0;
			t = -liHeight*(max+1)
			list.style.marginTop = t + 'px';
		}
		show(current);
	}

	function show(n){
		hide(old);
		m[n].start({
			opacity:1
		})
		link.innerHTML = data[n].title;
		link.href = data[n].link;
		info.innerHTML = data[n].info;
	}
	function hide(n){
		if(n==-1) return;
		blist[n].style.cssText = 'opacity:0;filter:alpha(opacity=0);';
	}

	function isLoad(o,callback){
		if(o.complete || o.readyState =='loaded' || o.readyState == 'complete'){
			callback();
			return;
		}
		o.onload = callback;
	}
	init();
}

function switchImg(){
	var obj = document.getElementById('c2_row4'),
		lis = obj.getElementsByTagName('li'),
		links = obj.getElementsByTagName('a'),
		div = obj.getElementsByTagName('div')[0],
		current = 0,
		img = new Image(),
		a = document.createElement('a');

	function init(){
		a.appendChild(img);
		div.appendChild(a);
		set(0);
	}

	function set(n){
		lis[current].className = '';
		lis[n].className = 'on';
		img.src = links[n].getAttribute('dataSrc');
		a.href = links[n].href;
		current = n;
	}
	for(var i=0,l=lis.length;i<l;i++){
		(function(m){
			Event.add(lis[m],'mouseover',function(){set(m)})
		})(i);
	}
	init();
}
function menFocus2(o,t,t2){
	var b=$o(o,'dl')[0],bImg=b.get('dt'),bText=b.get('dd'),c=$o(o,'li'),l=c.length,crt=0,crtUp=0,fimg=c[crt].get('img')[0],fdiv=c[crt].get('div')[0],timer=null;
	fimg.style.cssText='filter:alpha(opacity=100);opacity:1';
	fdiv.style.top='0';
	bImg[crt].style.cssText='display:block;filter:alpha(opacity=100);opacity:1;z-index:3';
	bText[crt].style.bottom='0';
	for(var i=0;i<l;i++){
		doit(i);
	}
	function doit(n){
		c[n].addEvent('click',function(){
			changeTabs(n);
			});
	}
	
	b.addEvent('mouseover',function(){
		clearTimeout(timer);timer=null;
			});
	b.addEvent('mouseout',function(){
		clearTimeout(timer);timer=null;
		timer=setTimeout(autoFunc,5000);
			});
	function autoFunc(){
		crtUp++;
		crtUp=crtUp===l?0:crtUp;
		changeTabs(crtUp);
	}
	setTimeout(autoFunc,5000);
	function changeTabs(n){
			if(n===crt)return;
			var _that=c[crt],img=_that.get('img')[0],div=_that.get('div')[0],txt=_that.get('span')[0],oldImg=bImg[crt];
			oldImg.style.zIndex='2';
			var animas1=new Anima(div,{'time':t}),animas2=new Anima(bText[crt],{'time':t2});
			animas1.start({top:5});
			animas2.start({bottom:-30});
			img.style.cssText='filter:alpha(opacity=40);opacity:0.4';
			crt=crtUp=n;
			var _this=c[crt];
			img=_this.get('img')[0],div=_this.get('div')[0],txt=_this.get('span')[0],newImg=bImg[crt];
			newImg.style.zIndex='4';
			animas1=new Anima(div,{'time':t}),animas2=new Anima(bText[crt],{'time':t2}),animas3=new Anima(newImg,{'time':t2});
			animas1.start({top:0});
			animas2.start({bottom:0});
			animas3.start({opacity:1});
			animas3.complete=function(){
				timer=setTimeout(autoFunc,5000);
				oldImg.style.cssText='filter:alpha(opacity=0);opacity:0';
				}
			img.style.cssText='filter:alpha(opacity=100);opacity:1';
			}

}