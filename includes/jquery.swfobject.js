/* jquery.swfobject.license.txt */
(function(A){A.flashPlayerVersion=function(){var D,B=null,I=false,H="ShockwaveFlash.ShockwaveFlash";if(!(D=navigator.plugins["Shockwave Flash"])){try{B=new ActiveXObject(H+".7")}catch(G){try{B=new ActiveXObject(H+".6");D=[6,0,21];B.AllowScriptAccess="always"}catch(F){if(D&&D[0]===6){I=true}}if(!I){try{B=new ActiveXObject(H)}catch(E){D="X 0,0,0"}}}if(!I&&B){try{D=B.GetVariable("$version")}catch(C){}}}else{D=D.description}D=D.match(/^[A-Za-z\s]*?(\d+)(\.|,)(\d+)(\s+r|,)(\d+)/);return[D[1]*1,D[3]*1,D[5]*1]}();A.flashExpressInstaller="expressInstall.swf";A.hasFlashPlayer=(A.flashPlayerVersion[0]!==0);A.hasFlashPlayerVersion=function(C){var B=A.flashPlayerVersion;C=(/string|integer/.test(typeof C))?C.toString().split("."):C;return(C)?(B[0]>=(C.major||C[0]||B[0])&&B[1]>=(C.minor||C[1]||B[1])&&B[2]>=(C.release||C[2]||B[2])):(B[0]!==0)};A.flash=function(M){if(!A.hasFlashPlayer){return false}var C=M.swf||"",K=M.params||{},E=document.createElement("body"),B,L,H,D,J,I,G,F;M.height=M.height||180;M.width=M.width||320;if(M.hasVersion&&!A.hasFlashPlayerVersion(M.hasVersion)){A.extend(M,{id:"SWFObjectExprInst",height:Math.max(M.height,137),width:Math.max(M.width,214)});C=M.expressInstaller||A.flashExpressInstaller;K={flashvars:{MMredirectURL:window.location.href,MMplayerType:(A.browser.msie&&A.browser.win)?"ActiveX":"PlugIn",MMdoctitle:document.title.slice(0,47)+" - Flash Player Installation"}}}if(M.flashvars&&typeof K==="object"){A.extend(K,{flashvars:M.flashvars})}for(J in (I=["swf","expressInstall","hasVersion","params","flashvars"])){delete M[I[J]]}B=[];for(J in M){if(typeof M[J]==="object"){L=[];for(I in M[J]){L.push(I.replace(/([A-Z])/,"-$1").toLowerCase()+":"+M[J][I]+";")}M[J]=L.join("")}B.push(J+'="'+M[J]+'"')}M=B.join(" ");if(typeof K==="object"){B=[];for(J in K){if(typeof K[J]==="object"){L=[];for(I in K[J]){if(typeof K[J][I]==="object"){H=[];for(G in K[J][I]){if(typeof K[J][I][G]==="object"){D=[];for(F in K[J][I][G]){D.push(F.replace(/([A-Z])/,"-$1").toLowerCase()+":"+K[J][I][G][F]+";")}K[J][I][G]=D.join("")}H.push(G+"{"+K[J][I][G]+"}")}K[J][I]=H.join("")}L.push(window.escape(I)+"="+window.escape(K[J][I]))}K[J]=L.join("&amp;")}B.push('<PARAM NAME="'+J+'" VALUE="'+K[J]+'">')}K=B.join("")}if(!(/style=/.test(M))){M+=' style="vertical-align:text-top;"'}if(!(/style=(.*?)vertical-align/.test(M))){M=M.replace(/style="/,'style="vertical-align:text-top;')}if(A.browser.msie){M+=' classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"';K='<PARAM NAME="movie" VALUE="'+C+'">'+K}else{M+=' type="application/x-shockwave-flash" data="'+C+'"'}E.innerHTML="<OBJECT "+M+">"+K+"</OBJECT>";return A(E.firstChild)};A.fn.flash=function(C){if(!A.hasFlashPlayer){return this}var B=0,D;while((D=this.eq(B++))[0]){D.html(A.flash(A.extend({},C)));if(D[0].firstChild.getAttribute("id")==="SWFObjectExprInst"){B=this.length}}return this}}(jQuery));