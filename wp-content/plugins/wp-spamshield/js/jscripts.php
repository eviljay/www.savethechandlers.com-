
function GetCookie(e){var t=document.cookie.indexOf(e+'=');var n=t+e.length+1;if(!t&&e!=document.cookie.substring(0,e.length)){return null}if(t==-1)return null;var r=document.cookie.indexOf(';',n);if(r==-1)r=document.cookie.length;return unescape(document.cookie.substring(n,r))}function SetCookie(e,t,n,r,i,s){var o=new Date;o.setTime(o.getTime());if(n){n=n*1e3*60*60*24}var u=new Date(o.getTime()+n);document.cookie=e+'='+escape(t)+(n?';expires='+u.toGMTString():'')+(r?';path='+r:'')+(i?';domain='+i:'')+(s?';secure':'')}function DeleteCookie(e,t,n){if(getCookie(e))document.cookie=e+'='+(t?';path='+t:'')+(n?';domain='+n:'')+';expires=Thu, 01-Jan-1970 00:00:01 GMT'}
function commentValidation(){SetCookie('d69547d2e648fc82efd2234d5048f0e1','5e5ca1aa4b7c8ed4cdd3feb0b124bf98','','/');SetCookie('SJECT14','CKON14','','/');}
commentValidation();
// Generated in: 0.001961 seconds
