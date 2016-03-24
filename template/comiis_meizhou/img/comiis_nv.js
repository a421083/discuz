var comiis_nv = $('comiis_nv');
var comiis_nvoffset = parseInt(fetchOffset(comiis_nv)['top']);
_attachEvent(window, 'scroll', function () {
var comiis_scrollTop = Math.max(document.documentElement.scrollTop, document.body.scrollTop);
if(comiis_scrollTop >= comiis_nvoffset){
	comiis_nv.className = 'comiis_nvs';
	if (BROWSER.ie && BROWSER.ie < 7) {
		comiis_nv.style.position = 'absolute';
		comiis_nv.style.top = comiis_scrollTop + 'px';
	}else{
		comiis_nv.style.position = 'fixed';
	}
}else{
	comiis_nv.style.position = 'static';
	comiis_nv.className = '';
}
});