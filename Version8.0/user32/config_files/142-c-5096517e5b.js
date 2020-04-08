(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[142],{"0Pgl":function(e,t,n){"use strict"
var r=n("GLiE")
var o=n.n(r)
var i=n("FIFq")
var a=n("fPNa")
var _=function(e,t){for(var n in t)d.call(t,n)&&(e[n]=t[n])
function r(){this.constructor=e}r.prototype=t.prototype
e.prototype=new r
e.__super__=t.prototype
return e},d={}.hasOwnProperty
t["a"]=function(e){_(t,e)
function t(){return t.__super__.constructor.apply(this,arguments)}t.mixin(a["a"])
t.prototype.initialize=function(){t.__super__.initialize.apply(this,arguments)
if(o.a.has(this,"url"))return delete this.url}
t.prototype.resourceName="external_tools"
t.prototype.computedAttributes=[{name:"custom_fields_string",deps:["custom_fields"]}]
t.prototype.urlRoot=function(){return"/api/v1/"+this._contextPath()+"/create_tool_with_verification"}
t.prototype.custom_fields_string=function(){var e,t
return function(){var n,r
n=this.get("custom_fields")
r=[]
for(e in n){t=n[e]
r.push(e+"="+t)}return r}.call(this).join("\n")}
t.prototype.launchUrl=function(e,t){var n,r,o,i
null==t&&(t={})
r=function(){var e
e=[]
for(n in t){i=t[n]
e.push(n+"="+i)}return e}()
o="/"+this._contextPath()+"/external_tools/"+this.id+"/resource_selection?launch_type="+e
r.length>0&&(o=o+"&"+r.join("&"))
return o}
t.prototype.assetString=function(){return"context_external_tool_"+this.id}
return t}(i["Model"])},"Ds/H":function(e,t,n){"use strict"
n.d(t,"a",(function(){return o}))
var r=n("vknZ")
function o(e){const t=r["a"].fromEvent(e,i)
if(t)return t.process()}async function i(){if(this.contentItems.length>0)return this.contentItems[0]}},iLq2:function(e,t,n){"use strict"
var r=n("ouhR")
var o=n.n(r)
var i=n("FIFq")
var a=n.n(i)
var _=n("3O+N")
var d=n.n(_)
var l=n("pQTu")
var s=n("m0r6")
Object(s["a"])(JSON.parse('{"ar":{"the_following_content_is_partner_provided_ed1da756":"المحتوى التالي تم إدخاله بواسطة شريك","the_preceding_content_is_partner_provided_d753928c":"المحتوى السابق تم إدخاله بواسطة شريك","tool_content_2924d18f":"محتوى الأداة"},"cy":{"the_following_content_is_partner_provided_ed1da756":"Mae’r cynnwys canlynol yn cael ei ddarparu gan bartner","the_preceding_content_is_partner_provided_d753928c":"Mae’r cynnwys blaenorol yn cael ei ddarparu gan bartner","tool_content_2924d18f":"Cynnwys adnodd"},"da":{"the_following_content_is_partner_provided_ed1da756":"Følgende indhold er partnerleveret","the_preceding_content_is_partner_provided_d753928c":"Foregående indhold er partnerleveret","tool_content_2924d18f":"Værktøjsindhold"},"da-x-k12":{"the_following_content_is_partner_provided_ed1da756":"Følgende indhold er partnerleveret","the_preceding_content_is_partner_provided_d753928c":"Foregående indhold er partnerleveret","tool_content_2924d18f":"Værktøjsindhold"},"de":{"the_following_content_is_partner_provided_ed1da756":"Der folgende Content stammt von einem Partner.","the_preceding_content_is_partner_provided_d753928c":"Der vorhergehende Content stammt von einem Partner.","tool_content_2924d18f":"Tool-Inhalt"},"el":{"tool_content_2924d18f":"Περιεχόμενο εργαλείου"},"en-AU":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"en-AU-x-unimelb":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"en-CA":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"en-GB":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"en-GB-x-lbs":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"en-GB-x-ukhe":{"the_following_content_is_partner_provided_ed1da756":"The following content is partner provided","the_preceding_content_is_partner_provided_d753928c":"The preceding content is partner provided","tool_content_2924d18f":"Tool content"},"es":{"the_following_content_is_partner_provided_ed1da756":"El siguiente contenido está proporcionado por un socio","the_preceding_content_is_partner_provided_d753928c":"El contenido anterior está proporcionado por un socio","tool_content_2924d18f":"Contenido de herramienta"},"fa":{"the_following_content_is_partner_provided_ed1da756":"محتوای زیر توسط شریک فراهم شده است","the_preceding_content_is_partner_provided_d753928c":"محتوای پیشین توسط شریک ارائه شده است","tool_content_2924d18f":"محتوای ابزار"},"fi":{"the_following_content_is_partner_provided_ed1da756":"Seuraava sisältö on kumppanin toimittajaa","the_preceding_content_is_partner_provided_d753928c":"edeltävä sisältö on kumppanin toimittamaa","tool_content_2924d18f":"Työkalun sisältö"},"fr":{"the_following_content_is_partner_provided_ed1da756":"Le contenu suivant est fourni par un partenaire","the_preceding_content_is_partner_provided_d753928c":"Le contenu qui précède était fourni par un partenaire","tool_content_2924d18f":"Contenu de l\'outil"},"fr-CA":{"the_following_content_is_partner_provided_ed1da756":"Le contenu suivant est fourni par le partenaire","the_preceding_content_is_partner_provided_d753928c":"Le contenu précédent est fourni par le partenaire","tool_content_2924d18f":"Contenu de l\'outil"},"he":{"tool_content_2924d18f":"תוכן הכלי"},"ht":{"the_following_content_is_partner_provided_ed1da756":"Kontni annapre a se yon asosye ki bay li","the_preceding_content_is_partner_provided_d753928c":"Kontni anvan an se yon asosye ki bay li","tool_content_2924d18f":"Zouti kontni"},"hu":{"tool_content_2924d18f":"Eszköztartalom"},"hy":{"tool_content_2924d18f":"Գործիքակազմի բովանդակություն"},"is":{"the_following_content_is_partner_provided_ed1da756":"Eftirfarandi efni er gefið upp af samstarfsaðila","the_preceding_content_is_partner_provided_d753928c":"Framangreint efni er gefið upp af samstarfsaðila","tool_content_2924d18f":"Tólaefni"},"it":{"the_following_content_is_partner_provided_ed1da756":"I contenuti seguenti sono forniti dal partner","the_preceding_content_is_partner_provided_d753928c":"I contenuti precedenti sono forniti dal partner","tool_content_2924d18f":"Contenuto strumento"},"ja":{"the_following_content_is_partner_provided_ed1da756":"以下のコンテンツはパートナーが提供しています","the_preceding_content_is_partner_provided_d753928c":"上記のコンテンツはパートナーが提供しています","tool_content_2924d18f":"ツールコンテンツ"},"mi":{"the_following_content_is_partner_provided_ed1da756":"Ko ngā kōrero e whai ake nei he hoa mahi","the_preceding_content_is_partner_provided_d753928c":"Ko te tuhinga o mua he hoa mahi","tool_content_2924d18f":"ihirangi taputapu"},"nb":{"the_following_content_is_partner_provided_ed1da756":"Følgende innhold er gitt av en partner","the_preceding_content_is_partner_provided_d753928c":"Det foregående innholdet er gitt av en partner","tool_content_2924d18f":"Verktøy-innhold"},"nb-x-k12":{"the_following_content_is_partner_provided_ed1da756":"Følgende innhold er gitt av en partner","the_preceding_content_is_partner_provided_d753928c":"Det foregående innholdet er gitt av en partner","tool_content_2924d18f":"Verktøy-innhold"},"nl":{"the_following_content_is_partner_provided_ed1da756":"De volgende inhoud is door een partner geleverd","the_preceding_content_is_partner_provided_d753928c":"De voorgaande inhoud is door een partner geleverd","tool_content_2924d18f":"Toolinhoud"},"nn":{"the_following_content_is_partner_provided_ed1da756":"Følgande innhald er lagt til av partnar","the_preceding_content_is_partner_provided_d753928c":"Det føregåande innhaldet er lagt til av partnar","tool_content_2924d18f":"Verktøyinnhald"},"pl":{"the_following_content_is_partner_provided_ed1da756":"Następującą zawartość dostarcza partner","the_preceding_content_is_partner_provided_d753928c":"Poprzednią zawartość dostarcza partner","tool_content_2924d18f":"Zawartość narzędzi"},"pt":{"the_following_content_is_partner_provided_ed1da756":"O parceiro fornece o seguinte conteúdo","the_preceding_content_is_partner_provided_d753928c":"O conteúdo anterior é parceiro fornecido","tool_content_2924d18f":"Conteúdo de Ferramentas"},"pt-BR":{"the_following_content_is_partner_provided_ed1da756":"O seguinte conteúdo é fornecido por parceiro","the_preceding_content_is_partner_provided_d753928c":"O conteúdo precedente é fornecido por parceiro","tool_content_2924d18f":"Conteúdo de ferramentas"},"ru":{"the_following_content_is_partner_provided_ed1da756":"Последующий контент предоставляется партнером","the_preceding_content_is_partner_provided_d753928c":"Предыдущий контент предоставляется партнером","tool_content_2924d18f":"Контент инструмента"},"sl":{"the_following_content_is_partner_provided_ed1da756":"Naslednjo vsebino zagotavljajo partnerji.","the_preceding_content_is_partner_provided_d753928c":"Predhodno vsebino zagotavljajo partnerji.","tool_content_2924d18f":"Vsebina orodja"},"sv":{"the_following_content_is_partner_provided_ed1da756":"Följande innehåll har tillhandahållits av partner","the_preceding_content_is_partner_provided_d753928c":"Det föregående innehållet har tillhandahållits av partner","tool_content_2924d18f":"Verktygsinnehåll"},"sv-x-k12":{"the_following_content_is_partner_provided_ed1da756":"Följande innehåll har tillhandahållits av partner","the_preceding_content_is_partner_provided_d753928c":"Det föregående innehållet har tillhandahållits av partner","tool_content_2924d18f":"Verktygsinnehåll"},"tr":{"tool_content_2924d18f":"Araç içeriği"},"uk":{"the_following_content_is_partner_provided_ed1da756":"Наступний контент наданий партнером","the_preceding_content_is_partner_provided_d753928c":"Попередній контент наданий партнером","tool_content_2924d18f":"Контент інструменту"},"zh-Hans":{"the_following_content_is_partner_provided_ed1da756":"以下内容由合作伙伴提供","the_preceding_content_is_partner_provided_d753928c":"以上内容由合作伙伴提供","tool_content_2924d18f":"工具内容"},"zh-Hant":{"the_following_content_is_partner_provided_ed1da756":"以下內容由合作夥伴提供","the_preceding_content_is_partner_provided_d753928c":"上述內容由合作夥伴提供","tool_content_2924d18f":"工具內容"}}'))
n("jQeR")
n("0sPK")
l["default"].scoped("external_tools.external_content_return_view")
n("DfGn")
var c=d.a.default
var p=c.template,h=c.templates=c.templates||{}
var u="ExternalTools/ExternalContentReturnView"
h[u]=p((function(e,t,n,r,o){this.compilerInfo=[4,">= 1.0.0"]
n=this.merge(n,e.helpers)
o=o||{}
var i,a,_,d="",l=n.helperMissing,s=this.escapeExpression,c="function"
d+='<div class="before_external_content_info_alert screenreader-only" tabindex="0">\n  <div class="ic-flash-info">\n    <div class="ic-flash__icon" aria-hidden="true">\n      <i class="icon-info"></i>\n    </div>\n    '+s((a=n.t||t&&t.t,_={hash:{scope:"external_tools.external_content_return_view"},data:o},a?a.call(t,"The following content is partner provided",_):l.call(t,"t","The following content is partner provided",_)))+'\n  </div>\n</div>\n<iframe\n  tabindex="0"\n  class="tool_launch"\n  src="'
if(a=n.launch_url)i=a.call(t,{hash:{},data:o})
else{a=t&&t.launch_url
i=typeof a===c?a.call(t,{hash:{},data:o}):a}d+=s(i)+'"\n  title="'+s((a=n.t||t&&t.t,_={hash:{i18n_inferred_key:true},data:o},a?a.call(t,"tool_content_2924d18f","Tool content",_):l.call(t,"t","tool_content_2924d18f","Tool content",_)))+'"\n  allow="'
if(a=n.allowances)i=a.call(t,{hash:{},data:o})
else{a=t&&t.allowances
i=typeof a===c?a.call(t,{hash:{},data:o}):a}d+=s(i)+'"\n  data-lti-launch="true"\n>\n</iframe>\n<div class="after_external_content_info_alert screenreader-only" tabindex="0">\n  <div class="ic-flash-info">\n    <div class="ic-flash__icon" aria-hidden="true">\n      <i class="icon-info"></i>\n    </div>\n    '+s((a=n.t||t&&t.t,_={hash:{scope:"external_tools.external_content_return_view"},data:o},a?a.call(t,"The preceding content is partner provided",_):l.call(t,"t","The preceding content is partner provided",_)))+"\n  </div>\n</div>\n"
return d}))
var f=h[u]
var g=n("mykf")
var v=function(e,t){return function(){return e.apply(t,arguments)}},m=function(e,t){for(var n in t)y.call(t,n)&&(e[n]=t[n])
function r(){this.constructor=e}r.prototype=t.prototype
e.prototype=new r
e.__super__=t.prototype
return e},y={}.hasOwnProperty
t["a"]=function(e){m(t,e)
function t(){this._contentCancel=v(this._contentCancel,this)
this._contentReady=v(this._contentReady,this)
this.removeDialog=v(this.removeDialog,this)
this.handleAlertBlur=v(this.handleAlertBlur,this)
return t.__super__.constructor.apply(this,arguments)}t.prototype.template=f
t.optionProperty("launchType")
t.optionProperty("launchParams")
t.optionProperty("displayAsModal")
t.prototype.defaults={displayAsModal:true}
t.prototype.els={"iframe.tool_launch":"$iframe"}
t.prototype.events={"focus .before_external_content_info_alert":"handleAlertFocus","focus .after_external_content_info_alert":"handleAlertFocus","blur .before_external_content_info_alert":"handleAlertBlur","blur .after_external_content_info_alert":"handleAlertBlur"}
t.prototype.handleAlertFocus=function(e){o()(e.target).removeClass("screenreader-only")
return this.$el.find("iframe").addClass("info_alert_outline")}
t.prototype.handleAlertBlur=function(e){o()(e.target).addClass("screenreader-only")
return this.$el.find("iframe").removeClass("info_alert_outline")}
t.prototype.attach=function(){return this.model.on("change",(e=this,function(){return e.render()}))
var e}
t.prototype.toJSON=function(){var e
e=t.__super__.toJSON.apply(this,arguments)
e.allowances=Object(g["a"])()
e.launch_url=this.model.launchUrl(this.launchType,this.launchParams)
return e}
t.prototype.afterRender=function(){var e,t
this.attachLtiEvents()
t=this.model.get(this.launchType)||{}
this.$iframe.width("100%")
this.$iframe.height(t.selection_height)
if(this.displayAsModal)return this.$el.dialog({title:(null!=(e=this.model.get(this.launchType))?e.label:void 0)||"",width:t.selection_width,height:t.selection_height,resizable:true,close:this.removeDialog})}
t.prototype.attachLtiEvents=function(){o()(window).on("externalContentReady",this._contentReady)
return o()(window).on("externalContentCancel",this._contentCancel)}
t.prototype.detachLtiEvents=function(){o()(window).off("externalContentReady",this._contentReady)
return o()(window).off("externalContentCancel",this._contentCancel)}
t.prototype.removeDialog=function(){this.detachLtiEvents()
return this.remove()}
t.prototype._contentReady=function(e,t){this.trigger("ready",t)
return this.removeDialog()}
t.prototype._contentCancel=function(e,t){this.trigger("cancel",t)
return this.removeDialog()}
return t}(a.a.View)},vknZ:function(e,t,n){"use strict"
var r=n("ouhR")
var o=n.n(r)
var i=n("mykf")
class a{constructor(e){this.assignProperties(e)}toHtmlString(){}assignProperties(e){this.properties.forEach(t=>{this[t]=e[t]})}linkThumbnail(){return this.imageTag(this.thumbnail)}iframeTag(){const e=this.iframe
if(e){const t=document.createElement("iframe")
t.setAttribute("src",e.src)
t.setAttribute("title",this.title||"")
t.setAttribute("allowfullscreen","true")
t.setAttribute("allow",Object(i["a"])())
e.width&&(t.style.width="".concat(e.width,"px"))
e.height&&(t.style.height="".concat(e.height,"px"))
return t.outerHTML}}imageTag(e,t,n){const r=document.createElement("img")
r.setAttribute("src",e)
this.text&&r.setAttribute("alt",this.text)
t&&r.setAttribute("width",t)
n&&r.setAttribute("height",n)
return r.outerHTML}anchorTag(e){const t=document.createElement("a")
t.setAttribute("href",this.safeUrl())
t.setAttribute("title",this.title)
t.setAttribute("target","_blank")
t.innerHTML=e
return t.outerHTML}safeUrl(){return this.url.replace(/^(data:text\/html|javascript:)/,"#$1")}}class _ extends a{constructor(e,t,n){super(e)
this.type=_.type
n&&""!==n&&(this.text=n)}get properties(){return Object.freeze(["url","title","text","icon","thumbnail","iframe"])}toHtmlString(){if(this.iframe&&this.iframe.src)return this.iframeTag()
return this.anchorTag(this.linkBody())}linkText(){return this.text&&this.text.trim()||this.title&&this.title.trim()}linkBody(){if(this.thumbnail)return this.linkThumbnail()
return this.linkText()}}_.type="link"
class d extends _{constructor(e,t,n){super(e,t,n)
this.url="".concat(t,"?").concat(this.ltiEndpointParams(e.url))}ltiEndpointParams(e){return"display=borderless&url=".concat(encodeURIComponent(e))}toHtmlString(){if(this.iframe){this.iframe.src=this.safeUrl()
return this.iframeTag()}return this.anchorTag(this.linkBody())}}class l extends a{constructor(e){super(e)
this.type=l.type}get properties(){return Object.freeze(["url","title","thumbnail","text","width","height"])}toHtmlString(){if(this.thumbnail)return this.anchorTag(this.linkThumbnail())
return this.imageTag(this.safeUrl(),this.width,this.height)}}l.type="image"
class s extends a{constructor(e){super(e)
this.type=s.type}get properties(){return Object.freeze(["html","title","text"])}toHtmlString(){return this.html}}s.type="html"
n.d(t,"a",(function(){return c}))
class c{constructor(e,t,n,r,o){this.contentItems=e
this.messages=t
this.logs=n
this.ltiEndpoint=r
this.processHandler=o
this.showMessages()
this.showLogs()}get loggingEnabled(){return ENV&&ENV.DEEP_LINKING_LOGGING}get typeMap(){return{link:_,ltiResourceLink:d,image:l,html:s}}static fromEvent(e,t){const n=e.data,r=n.content_items,o=n.msg,i=n.log,a=n.errormsg,_=n.errorlog,d=n.ltiEndpoint,l=n.messageType
if("LtiDeepLinkingResponse"!==l)return
return new this(r,{msg:o,errormsg:a},{log:i,errorlog:_},d,t)}process(){return this.processHandler(...arguments)}showMessages(){this.messages.errormsg&&o.a.flashError(this.messages.errormsg)
this.messages.msg&&o.a.flashMessage(this.messages.msg)}showLogs(){if(this.loggingEnabled){this.logs.errorlog&&console.error(this.logs.errorlog)
this.logs.log&&console.log(this.logs.log)}}}}}])

//# sourceMappingURL=142-c-5096517e5b.js.map