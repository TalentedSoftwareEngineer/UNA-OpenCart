
 {
function BxDolLiveUpdates(oOptions){this._sActionsUrl=oOptions.sActionsUrl==undefined?sUrlRoot+'live_updates.php':oOptions.sActionsUrl;this._sObjName=oOptions.sObjName==undefined?'oLiveUpdates':oOptions.sObjName;this._iInterval=oOptions.iInterval==undefined?3000:oOptions.iInterval;this._aSystemsActive=oOptions.aSystemsActive==undefined?{}:oOptions.aSystemsActive;this._aSystemsTransient=oOptions.aSystemsTransient==undefined?{}:oOptions.aSystemsTransient;this._bServerRequesting=oOptions.bServerRequesting==undefined?!1:oOptions.bServerRequesting;this._sHash=oOptions.sHash==undefined?'':oOptions.sHash;this._iIndex=0;this._iHandler=0;this._bBusy=!1;this.init()}
BxDolLiveUpdates.prototype.init=function(){var $this=this;if(this._iHandler)
this.destroy();$(document).ready(function(){$this.perform();$this._iHandler=setInterval(function(){$this.perform()},$this._iInterval)})};BxDolLiveUpdates.prototype.add=function(oData){if(!oData)
return;if(oData.name!=undefined&&oData.value!=undefined){if(!this._aSystemsActive[oData.name])
this._aSystemsActive[oData.name]=oData.value;if(!this._aSystemsTransient[oData.name])
this._aSystemsTransient[oData.name]=1}
if(oData.hash!=undefined)
this._sHash=oData.hash};BxDolLiveUpdates.prototype.destroy=function(){if(this._iHandler)
clearInterval(this._iHandler);};BxDolLiveUpdates.prototype.perform=function(){if(!this._bServerRequesting||this._bBusy||('undefined'!==typeof(document.hidden)&&document.hidden))
return;var $this=this;var oDate=new Date();this._bBusy=!0;$.post(this._sActionsUrl,{index:this._iIndex,systems_active:this._aSystemsActive,systems_transient:this._aSystemsTransient,hash:this._sHash,_t:oDate.getTime()},function(aData){$.each(aData,function(iIndex,oValue){if(oValue.system&&$this._aSystemsActive[oValue.system]!=undefined&&oValue.data)
$this._aSystemsActive[oValue.system]=oValue.data.count_new;if(oValue.method){var oFunc=function(oData){eval(oValue.method)};oFunc(oValue.data)}});$this._bBusy=!1},'json');this._iIndex+=1}
 }

 {
function BxArtificerMenuMoreAuto(oOptions){BxDolMenuMoreAuto.call(this,oOptions)}
BxArtificerMenuMoreAuto.prototype=Object.create(BxDolMenuMoreAuto.prototype);BxArtificerMenuMoreAuto.prototype.constructor=BxArtificerMenuMoreAuto;BxArtificerMenuMoreAuto.prototype.init=function(bForceInit){BxDolMenuMoreAuto.prototype.init.call(this);var $this=this;$(document).ready(function(){$this.update()});$('#bx-toolbar').find('img').bind('load',function(){$this.update()})}
 }

 {
function BxArtificerUtils(oOptions){this._sActionUri=oOptions.sActionUri;this._sActionUrl=oOptions.sActionUrl;this._sObject=oOptions.sObject;this._aHtmlIds=undefined==oOptions.aHtmlIds?{}:oOptions.aHtmlIds;this._sColorScheme=undefined==oOptions.sColorScheme?'auto':oOptions.sColorScheme;this.init()}
BxArtificerUtils.prototype.init=function(){var $this=this;switch(this._sColorScheme){case 'auto':window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change',event=>{$this.setColorSchemeIcon();$this.setColorSchemeHtml()});break;case 'light_only':this.setColorScheme(1);break;case 'dark_only':this.setColorScheme(2);break}
this.setColorSchemeHtml();$(document).ready(function(){$this.setColorSchemeIcon()})};BxArtificerUtils.prototype.setColorScheme=function(iCode){switch(iCode){case 0:localStorage.removeItem('theme');break;case 1:localStorage.theme='sun'
break;case 2:localStorage.theme='dark'
break}
this.setColorSchemeIcon();this.setColorSchemeHtml()};BxArtificerUtils.prototype.setColorSchemeHtml=function(){if(localStorage.theme==='dark'||(!('theme' in localStorage)&&window.matchMedia('(prefers-color-scheme: dark)').matches))
$('html').addClass('dark')
else $('html').removeClass('dark')};BxArtificerUtils.prototype.setColorSchemeIcon=function(){if(localStorage.theme==='dark'||(!('theme' in localStorage)&&window.matchMedia('(prefers-color-scheme: dark)').matches)){$('.bx-sb-theme-switcher .sys-icon').addClass('moon').removeClass('sun')}
if(localStorage.theme==='sun'||(!('theme' in localStorage)&&!window.matchMedia('(prefers-color-scheme: dark)').matches)){$('.bx-sb-theme-switcher .sys-icon').addClass('sun').removeClass('moon')}};BxArtificerUtils.prototype.getColorSchemeMenu=function(){$('#bx-sb-theme-switcher-menu').dolPopup({pointer:{el:$('.bx-sb-theme-switcher')},moveToDocRoot:!0,cssClass:'bx-popup-menu'})};BxArtificerUtils.prototype.getAddContentMenu=function(sMenu,e,sPosition){$('.bx-popup-applied:visible').dolPopupHide();var sSidebar='account';if(bx_sidebar_active(sSidebar))
bx_sidebar_toggle(sSidebar);bx_menu_popup_inline(sMenu,e,{})}
 }
