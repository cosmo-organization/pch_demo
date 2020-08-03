var __cfRLUnblockHandlers = 1 ;
if ( typeof( phplive_base_url ) == "undefined" ) { if ( typeof( phplive_utf8_encode ) == "undefined" ){ function phplive_utf8_encode(r){if(null===r||"undefined"==typeof r)return"";var e,n,t=r+"",a="",o=0;e=n=0,o=t.length;for(var f=0;o>f;f++){var i=t.charCodeAt(f),l=null;if(128>i)n++;else if(i>127&&2048>i)l=String.fromCharCode(i>>6|192,63&i|128);else if(55296!=(63488&i))l=String.fromCharCode(i>>12|224,i>>6&63|128,63&i|128);else{if(55296!=(64512&i))throw new RangeError("Unmatched trail surrogate at "+f);var d=t.charCodeAt(++f);if(56320!=(64512&d))throw new RangeError("Unmatched lead surrogate at "+(f-1));i=((1023&i)<<10)+(1023&d)+65536,l=String.fromCharCode(i>>18|240,i>>12&63|128,i>>6&63|128,63&i|128)}null!==l&&(n>e&&(a+=t.slice(e,n)),a+=l,e=n=f+1)}return n>e&&(a+=t.slice(e,o)),a} function phplive_md5(n){var r,t,u,e,o,f,c,i,a,h,v=function(n,r){return n<<r|n>>>32-r},g=function(n,r){var t,u,e,o,f;return e=2147483648&n,o=2147483648&r,t=1073741824&n,u=1073741824&r,f=(1073741823&n)+(1073741823&r),t&u?2147483648^f^e^o:t|u?1073741824&f?3221225472^f^e^o:1073741824^f^e^o:f^e^o},s=function(n,r,t){return n&r|~n&t},d=function(n,r,t){return n&t|r&~t},l=function(n,r,t){return n^r^t},w=function(n,r,t){return r^(n|~t)},A=function(n,r,t,u,e,o,f){return n=g(n,g(g(s(r,t,u),e),f)),g(v(n,o),r)},C=function(n,r,t,u,e,o,f){return n=g(n,g(g(d(r,t,u),e),f)),g(v(n,o),r)},b=function(n,r,t,u,e,o,f){return n=g(n,g(g(l(r,t,u),e),f)),g(v(n,o),r)},m=function(n,r,t,u,e,o,f){return n=g(n,g(g(w(r,t,u),e),f)),g(v(n,o),r)},y=function(n){for(var r,t=n.length,u=t+8,e=(u-u%64)/64,o=16*(e+1),f=new Array(o-1),c=0,i=0;t>i;)r=(i-i%4)/4,c=i%4*8,f[r]=f[r]|n.charCodeAt(i)<<c,i++;return r=(i-i%4)/4,c=i%4*8,f[r]=f[r]|128<<c,f[o-2]=t<<3,f[o-1]=t>>>29,f},L=function(n){var r,t,u="",e="";for(t=0;3>=t;t++)r=n>>>8*t&255,e="0"+r.toString(16),u+=e.substr(e.length-2,2);return u},S=[],_=7,j=12,k=17,p=22,q=5,x=9,z=14,B=20,D=4,E=11,F=16,G=23,H=6,I=10,J=15,K=21;for(n=this.phplive_utf8_encode(n),S=y(n),c=1732584193,i=4023233417,a=2562383102,h=271733878,r=S.length,t=0;r>t;t+=16)u=c,e=i,o=a,f=h,c=A(c,i,a,h,S[t+0],_,3614090360),h=A(h,c,i,a,S[t+1],j,3905402710),a=A(a,h,c,i,S[t+2],k,606105819),i=A(i,a,h,c,S[t+3],p,3250441966),c=A(c,i,a,h,S[t+4],_,4118548399),h=A(h,c,i,a,S[t+5],j,1200080426),a=A(a,h,c,i,S[t+6],k,2821735955),i=A(i,a,h,c,S[t+7],p,4249261313),c=A(c,i,a,h,S[t+8],_,1770035416),h=A(h,c,i,a,S[t+9],j,2336552879),a=A(a,h,c,i,S[t+10],k,4294925233),i=A(i,a,h,c,S[t+11],p,2304563134),c=A(c,i,a,h,S[t+12],_,1804603682),h=A(h,c,i,a,S[t+13],j,4254626195),a=A(a,h,c,i,S[t+14],k,2792965006),i=A(i,a,h,c,S[t+15],p,1236535329),c=C(c,i,a,h,S[t+1],q,4129170786),h=C(h,c,i,a,S[t+6],x,3225465664),a=C(a,h,c,i,S[t+11],z,643717713),i=C(i,a,h,c,S[t+0],B,3921069994),c=C(c,i,a,h,S[t+5],q,3593408605),h=C(h,c,i,a,S[t+10],x,38016083),a=C(a,h,c,i,S[t+15],z,3634488961),i=C(i,a,h,c,S[t+4],B,3889429448),c=C(c,i,a,h,S[t+9],q,568446438),h=C(h,c,i,a,S[t+14],x,3275163606),a=C(a,h,c,i,S[t+3],z,4107603335),i=C(i,a,h,c,S[t+8],B,1163531501),c=C(c,i,a,h,S[t+13],q,2850285829),h=C(h,c,i,a,S[t+2],x,4243563512),a=C(a,h,c,i,S[t+7],z,1735328473),i=C(i,a,h,c,S[t+12],B,2368359562),c=b(c,i,a,h,S[t+5],D,4294588738),h=b(h,c,i,a,S[t+8],E,2272392833),a=b(a,h,c,i,S[t+11],F,1839030562),i=b(i,a,h,c,S[t+14],G,4259657740),c=b(c,i,a,h,S[t+1],D,2763975236),h=b(h,c,i,a,S[t+4],E,1272893353),a=b(a,h,c,i,S[t+7],F,4139469664),i=b(i,a,h,c,S[t+10],G,3200236656),c=b(c,i,a,h,S[t+13],D,681279174),h=b(h,c,i,a,S[t+0],E,3936430074),a=b(a,h,c,i,S[t+3],F,3572445317),i=b(i,a,h,c,S[t+6],G,76029189),c=b(c,i,a,h,S[t+9],D,3654602809),h=b(h,c,i,a,S[t+12],E,3873151461),a=b(a,h,c,i,S[t+15],F,530742520),i=b(i,a,h,c,S[t+2],G,3299628645),c=m(c,i,a,h,S[t+0],H,4096336452),h=m(h,c,i,a,S[t+7],I,1126891415),a=m(a,h,c,i,S[t+14],J,2878612391),i=m(i,a,h,c,S[t+5],K,4237533241),c=m(c,i,a,h,S[t+12],H,1700485571),h=m(h,c,i,a,S[t+3],I,2399980690),a=m(a,h,c,i,S[t+10],J,4293915773),i=m(i,a,h,c,S[t+1],K,2240044497),c=m(c,i,a,h,S[t+8],H,1873313359),h=m(h,c,i,a,S[t+15],I,4264355552),a=m(a,h,c,i,S[t+6],J,2734768916),i=m(i,a,h,c,S[t+13],K,1309151649),c=m(c,i,a,h,S[t+4],H,4149444226),h=m(h,c,i,a,S[t+11],I,3174756917),a=m(a,h,c,i,S[t+2],J,718787259),i=m(i,a,h,c,S[t+9],K,3951481745),c=g(c,u),i=g(i,e),a=g(a,o),h=g(h,f);var M=L(c)+L(i)+L(a)+L(h);return M.toLowerCase( )} }
var phplive_base64={_keyStr:"ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",encode:function(a){var d="",c=0;for(a=phplive_base64._utf8_encode(a);c<a.length;){var b=a.charCodeAt(c++);var e=a.charCodeAt(c++);var f=a.charCodeAt(c++);var g=b>>2;b=(b&3)<<4|e>>4;var h=(e&15)<<2|f>>6;var k=f&63;isNaN(e)?h=k=64:isNaN(f)&&(k=64);d=d+this._keyStr.charAt(g)+this._keyStr.charAt(b)+this._keyStr.charAt(h)+this._keyStr.charAt(k)}return d},decode:function(a){var d="",c=0;for(a=a.replace(/[^A-Za-z0-9\+\/\=]/g,"");c<a.length;){var b=this._keyStr.indexOf(a.charAt(c++));var e=this._keyStr.indexOf(a.charAt(c++));var f=this._keyStr.indexOf(a.charAt(c++));var g=this._keyStr.indexOf(a.charAt(c++));b=b<<2|e>>4;e=(e&15)<<4|f>>2;var h=(f&3)<<6|g;d+=String.fromCharCode(b);64!=f&&(d+=String.fromCharCode(e));64!=g&&(d+=String.fromCharCode(h))}return d=phplive_base64._utf8_decode(d)},_utf8_encode:function(a){a=a.replace(/\r\n/g,"\n");for(var d="",c=0;c<a.length;c++){var b=a.charCodeAt(c);128>b?d+=String.fromCharCode(b):(127<b&&2048>b?d+=String.fromCharCode(b>>6|192):(d+=String.fromCharCode(b>>12|224),d+=String.fromCharCode(b>>6&63|128)),d+=String.fromCharCode(b&63|128))}return d},_utf8_decode:function(a){var d="",c=0;for(c1=c2=0;c<a.length;){var b=a.charCodeAt(c);128>b?(d+=String.fromCharCode(b),c++):191<b&&224>b?(c2=a.charCodeAt(c+1),d+=String.fromCharCode((b&31)<<6|c2&63),c+=2):(c2=a.charCodeAt(c+1),c3=a.charCodeAt(c+2),d+=String.fromCharCode((b&15)<<12|(c2&63)<<6|c3&63),c+=3)}return d}};
var phplive_base_url_orig = "https://www.corporates.com/phplive" ;
var phplive_base_url = phplive_base_url_orig ;
var phplive_proto = ( location.href.indexOf("https") == 0 ) ? 1 : 0 ; // to avoid JS proto error, use page proto for areas needing to access the JS objects
if ( !phplive_proto && ( phplive_base_url.match( /http/i ) == null ) ) { phplive_base_url = "http:"+phplive_base_url_orig ; }
else if ( phplive_proto && ( phplive_base_url.match( /https/i ) == null ) ) { phplive_base_url = "https:"+phplive_base_url_orig ; }
var phplive_regex_replace = new RegExp( phplive_base_url_orig, "g" ) ; var undeefined ;
var phplive_browser = navigator.appVersion ; var phplive_mime_types = "" ;
var phplive_display_width = screen.availWidth ; var phplive_display_height = screen.availHeight ; var phplive_display_color = screen.colorDepth ; var phplive_timezone = new Date( ).getTimezoneOffset( ) ;
if ( navigator.mimeTypes.length > 0 ) { for (var x=0; x < navigator.mimeTypes.length; x++) { phplive_mime_types += navigator.mimeTypes[x].description ; } }
var phplive_browser_token = phplive_md5( phplive_display_width+phplive_display_height+phplive_display_color+phplive_timezone+phplive_browser+phplive_mime_types ) ;
var phplive_mobile = 0 ; var phplive_userAgent = navigator.userAgent || navigator.vendor || window.opera ; var phplive_ipad = 0 ;
if ( phplive_userAgent.match( /iPad/i ) || phplive_userAgent.match( /iPhone/i ) || phplive_userAgent.match( /iPod/i ) )
{ if ( phplive_userAgent.match( /iPad/i ) ) { phplive_mobile = 1 ; phplive_ipad = 1 ; } else { phplive_mobile = 1 ; } }
else if ( phplive_userAgent.match( /Android/i ) ) { phplive_mobile = 2 ; }
var phplive_stat_refer = phplive_base64.encode( document.referrer.replace("http", "hphp") ) ;
var phplive_stat_onpage_raw = location.toString( ) ;
var phplive_stat_onpage = encodeURIComponent( phplive_base64.encode( phplive_stat_onpage_raw.replace("http", "hphp") ) ) ;
var phplive_stat_title = ( document.title ) ? document.title : "- no title -" ;
var phplive_stat_title_temp = phplive_stat_title.replace( / /g,'' ) ;
if ( !phplive_stat_title_temp ) { phplive_stat_title = "- no title -" ; } phplive_stat_title = phplive_base64.encode( phplive_stat_title ) ;
var phplive_resolution = encodeURI( screen.width + " x " + screen.height ) ;
var phplive_query_extra = "&r="+phplive_stat_refer+"&tl="+phplive_stat_title+"&resolution="+phplive_resolution ;
var phplive_fetch_status_url = phplive_base_url+"/ajax/status.php?action=js&token="+phplive_browser_token+"&deptid={deptid}&pst=1" ;
var phplive_preview_query = ( 0 ) ? "&preview=1" : "" ;
var phplive_request_url_query = "token="+phplive_browser_token+"&pg="+phplive_stat_onpage+"&tl="+phplive_stat_title+phplive_preview_query ;
var phplive_request_url = phplive_base_url+"/phplive.php?d={deptid}&"+phplive_request_url_query ;
var phplive_si_phplive_fetch_status = parseInt( 25 ) ;
var phplive_si_phplive_fetch_footprints = parseInt( 60 ) ;
var phplive_si_fetch_status = new Object ; var phplive_st_fetch_footprints ;
var phplive_depts = new Object ; var phplive_btns = new Object ; var phplive_chat_icons = new Object ; var phplive_globals = new Object ;
phplive_globals["icon_initiate"] = "https://www.corporates.com/phplive/themes/initiate/initiate.gif".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_globals["icon_initiate_close"] = "https://www.corporates.com/phplive/themes/initiate/close_box.png".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_globals["icon_initiate_bg"] = "https://www.corporates.com/phplive/themes/initiate/bg_trans.png".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_globals["icon_embed_loading"] = "https://www.corporates.com/phplive/themes/initiate/loading_embed.gif".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_globals["icon_space"] = "https://www.corporates.com/phplive/pics/space.png".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_globals["popout"] = 0 ;
phplive_globals["embedinvite"] = 1 ;
phplive_globals["exclude_process"] = 0 ;
phplive_globals["exclude_string"] = "place-holder_text" ;
phplive_globals["exclude_string_invite"] = "" ;
phplive_globals["initiate_duration"] = 0 ;
phplive_globals["newwin_width"] = 540 ;
phplive_globals["newwin_height"] = 580 ;
phplive_globals["mobile_newwin"] = 0 ;
phplive_globals["embed_pos"] = "right" ;
phplive_globals["embed_padding"] = ( phplive_mobile ) ? "0px" : "20px" ;
phplive_globals["embed_padding_bottom"] = ( phplive_mobile ) ? "0px" : "20px" ;
phplive_globals["embed_padding_radius"] = ( phplive_mobile ) ? "0px" : "6px" ;
phplive_globals["embed_box_shadow"] = "-webkit-box-shadow: -0px 7px 29px rgba(0, 0, 0, 0.34); -moz-box-shadow: 0px 7px 29px rgba(0, 0, 0, 0.34); box-shadow: 0px 7px 29px rgba(0, 0, 0, 0.34);" ; phplive_globals["embed_loaded"] = false ;
phplive_globals["invite_pos"] = 1 ;
phplive_globals["invite_start"] = "top: 40%; left: -800px;" ;
phplive_globals["invite_show"] = "left,3em" ;
phplive_globals["invite_dur"] = 0 ;
phplive_globals["invite_exin"] = "" ;
phplive_globals["invite_andor"] = 0 ;
phplive_globals["invite_exin_pages"] = "" ;
phplive_globals["invite_doit"] = 0 ;
phplive_globals["foot_log"] = "on" ;
phplive_globals["icon_check"] = "on" ;
phplive_globals["phplive_misc_01"] = 0 ;
phplive_globals["addon_proactionid"] = 0 ; var phplive_proaction_localstorage = new Object ; var phplive_proactions_processed = new Object ; var phplive_addon_proaction_priority = new Array() ; var phplive_addon_proaction = new Object ; var phplive_addon_proaction_pics = new Array( "https://www.corporates.com/phplive/web/profile_0.JPEG?1590601118" ) ;    var phplive_proaction_duration_counter = 0 ;
phplive_globals["processes"] = 0 ; phplive_globals["deptid"] ;
var phplive_js_lib = document.createElement("script") ;
phplive_js_lib.type = "text/javascript" ;
phplive_js_lib.async = true ;
phplive_js_lib.src = phplive_base_url+"/js/phplive.js?4.7.9.9.9.2-v8-0" ;
document.getElementsByTagName("head")[0].appendChild( phplive_js_lib ) ; }
if ( typeof( phplive_depts[0] ) == "undefined" ) {
phplive_depts[0] = new Object ;
phplive_depts[0]["redirect_url"] = "" ;
phplive_depts[0]["icon_hide"] = 0 ;
phplive_depts[0]["embed_online"] = 1 ;
phplive_depts[0]["embed_offline"] = 1 ;
phplive_depts[0]["tabbed_offline"] = 0 ;
phplive_depts[0]["tabbed_online"] = 0 ;
phplive_depts[0]["isonline"] = -1 ;
phplive_depts[0]["redirect"] = "" ;
phplive_depts[0]["loaded"] = 0 ;
phplive_depts[0]["embed_width"] = "415" ;
phplive_depts[0]["embed_height"] = "550" ;
if ( typeof( phplive_embed_win_width ) != "undefined" ) { phplive_depts[0]["embed_width"] = phplive_embed_win_width+"" ; }
if ( typeof( phplive_embed_win_height ) != "undefined" ) { phplive_depts[0]["embed_height"] = phplive_embed_win_height+"" ; }
phplive_depts[0]["embed_width"] = ( !phplive_depts[0]["embed_width"].match( /%/ ) ) ? phplive_depts[0]["embed_width"] + "px" : phplive_depts[0]["embed_width"] ;
phplive_depts[0]["embed_height"] = ( !phplive_depts[0]["embed_height"].match( /%/ ) ) ? phplive_depts[0]["embed_height"] + "px" : phplive_depts[0]["embed_height"] ;
if ( phplive_mobile ) { phplive_depts[0]["embed_width"] = "100%" ; phplive_depts[0]["embed_height"] = "100%" ; }
var phplive_si_check_jquery_0 = setInterval(function( ){
if ( typeof( phplive_jquery ) != "undefined" ) {
clearInterval( phplive_si_check_jquery_0 ) ;
var fetch_url = phplive_fetch_status_url.replace( /{deptid}/, 0 ) ;
if ( ( typeof( phplive_stop_chat_icon ) == "undefined" ) || !parseInt( phplive_stop_chat_icon ) ) {
phplive_fetch_status( 0, fetch_url ) ;
phplive_si_fetch_status[0] = setInterval(function( ){
	phplive_fetch_status( 0, fetch_url ) ;
}, phplive_si_phplive_fetch_status * 1000 ) ; } }
}, 100 ) ; window.phplive_launch_chat_0 = function( ) { phplive_launch_chat( 0, 0 ) ; } ; }
if ( typeof( phplive_btns[1524769221] ) == "undefined" ) {
phplive_btns[1524769221] = new Object ;
phplive_btns[1524769221]["deptid"] = 0 ;
phplive_btns[1524769221]["isonline"] = -1 ;
phplive_btns[1524769221]["datauri"] = 0 ;
phplive_btns[1524769221]["icon_online"] = "https://www.corporates.com/phplive/web/icon_online_0.GIF?1590604150".replace( phplive_regex_replace, phplive_base_url ) ;
phplive_btns[1524769221]["icon_offline"] = "https://www.corporates.com/phplive/web/icon_offline_0.GIF?1590604199".replace( phplive_regex_replace, phplive_base_url ) ;
} 