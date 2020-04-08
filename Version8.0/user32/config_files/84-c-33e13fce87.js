(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[84],{"09fR":function(e,t,n){"use strict";(function(e){n.d(t,"c",(function(){return w}))
n.d(t,"b",(function(){return j}))
n.d(t,"a",(function(){return k}))
var r=n("vpQ4")
var o=n("rePB")
n("k9XI")
var i=n("igdM")
var a=n.n(i)
var u=n("cZ6H")
var c=n.n(u)
n("UWfp")
var s="@@themeableDefaultTheme"
var f="GLOBAL_THEME_REGISTRY"
var l=function(){return{defaultThemeKey:null,components:Object(o["a"])({},s,{}),themes:{},registered:[]}}
var p=function(e){var t=l()
if("undefined"===typeof e)return t
Object.keys(t).forEach((function(t){"undefined"===typeof e[t]&&false}))
return e}
e[f]=p(e[f])
var v=function(){return e[f]}
var d=function(){var e=v(),t=e.defaultThemeKey,n=e.registered
return t||n[n.length-1]||s}
var m=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}
if(!e)return t
var n=v().themes[e]
if(n)return n
e!==s&&"[themeable] Could not find theme: '".concat(e,"' in the registry.")
return t}
var h=function(e,t){var n=m(e)
var r=n.variables||{}
var o=c()(t)
if(!o&&n.immutable){"[themeable] Theme, '".concat(n.key,"', is immutable. Cannot apply overrides: ").concat(JSON.stringify(t))
return r}var i=c()(r)
if(!i&&!o)return a()(r,t)
if(i)return t||{}
return r}
var y=function(e,t){var n
if(e)n=h(e,t)
else{var r=v().overrides
var o=c()(r)
n=o||c()(t)?o?t:r:a()(r,t)}return h(d(),n)}
var b=function(e,t){return function(n){var o={}
"function"===typeof e&&(o=e(n))
var i={}
"function"===typeof e[t]&&(i=e[t](n))
c()(i)||c()(o)?c()(o)&&(o=i):o=Object(r["a"])({},o,i)
return o}}
var w=function(e,t){var n=v(),r=n.components
if("function"!==typeof t)return
r[s][e]=t
Object.keys(t).forEach((function(n){r.hasOwnProperty(n)||(r[n]={})
r[n][e]=b(t,n)}))}
var O=function(e){var t=v(),n=t.components
var o=e||d()
return Object(r["a"])({},n[s],n[o])}
var g=function(e,t){var n=v(),r=n.components
return r[e]&&r[e][t]||r[s][t]}
var j=function(e,t){var n=v()
n.registered.length
var r=O(e)
var o={}
var i=y(e,t)
if(c()(i))return
Object.getOwnPropertySymbols(r).forEach((function(e){o[e]=r[e](i)}))
return o}
var k=function(e,t,n){var o=t||d()
var i=m(o)
var a={}
var u=i[e]
if(u)a=u
else{var s=Object(r["a"])({borders:{},breakpoints:{},colors:{},forms:{},media:{},shadows:{},spacing:{},stacking:{},transitions:{},typography:{}},y(t))
var f=g(o,e)
if("function"===typeof f)try{a=f(s)}catch(e){"[themeable] ".concat(e)}}if(c()(n))return i[e]=a
if(i.immutable){"[themeable] Theme '".concat(o,"' is immutable. Cannot apply overrides for '").concat(e.toString(),"': ").concat(JSON.stringify(n))
return a}return c()(a)?n:Object(r["a"])({},a,n)}}).call(this,n("yLpj"))},"284h":function(e,t,n){var r=n("cDf5")
function o(){if("function"!==typeof WeakMap)return null
var e=new WeakMap
o=function(){return e}
return e}function i(e){if(e&&e.__esModule)return e
if(null===e||"object"!==r(e)&&"function"!==typeof e)return{default:e}
var t=o()
if(t&&t.has(e))return t.get(e)
var n={}
var i=Object.defineProperty&&Object.getOwnPropertyDescriptor
for(var a in e)if(Object.prototype.hasOwnProperty.call(e,a)){var u=i?Object.getOwnPropertyDescriptor(e,a):null
u&&(u.get||u.set)?Object.defineProperty(n,a,u):n[a]=e[a]}n["default"]=e
t&&t.set(e,n)
return n}e.exports=i},"4dGC":function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.omitProps=i
t.pickProps=u
var r=Object.prototype.hasOwnProperty
var o=function(e,t){var n={}
for(var o in e){if("theme"===o||"children"===o||"className"===o||"style"===o)continue
if(t.includes(o)||!r.call(e,o))continue
n[o]=e[o]}return n}
function i(e,t,n){var r=Object.keys(t||{})
var i=n?r.concat(n):r
return o(e,i)}function a(e,t){var n={}
var r=t.length
var o=-1
var i
while(++o<r){i=t[o]
i in e&&(n[i]=e[i])}return n}function u(e,t,n){var r=Object.keys(t||{})
var o=n?r.concat(n):r
return a(e,o)}},"7/N2":function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=r
function r(e){return e?e.charAt(0).toUpperCase()+e.slice(1):e}},"70gm":function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=void 0
var o=r(n("aUsF"))
var i=o.default
t.default=i},"7W2i":function(e,t,n){var r=n("SksO")
function o(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function")
e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,writable:true,configurable:true}})
t&&r(e,t)}e.exports=o},B9Yq:function(e,t){e.exports=function(){throw new Error("define cannot be used indirect")}},Bnag:function(e,t){function n(){throw new TypeError("Invalid attempt to spread non-iterable instance")}e.exports=n},EbDI:function(e,t){function n(e){if(Symbol.iterator in Object(e)||"[object Arguments]"===Object.prototype.toString.call(e))return Array.from(e)}e.exports=n},Ijbi:function(e,t){function n(e){if(Array.isArray(e)){for(var t=0,n=new Array(e.length);t<e.length;t++)n[t]=e[t]
return n}}e.exports=n},JIIx:function(e,t,n){"use strict"
var r=n("TqRt")
var o=n("284h")
Object.defineProperty(t,"__esModule",{value:true})
t.default=u
var i=o(n("q1tI"))
var a=r(n("QSkQ"))
function u(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}
var n=i.Children.count(e)
return 0===n?null:"string"===typeof e&&e.length>0||n>1?i.default.createElement("span",t,e):(0,a.default)(Array.isArray(e)?e[0]:e,t)}},MVZn:function(e,t,n){var r=n("lSNA")
function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{}
var o=Object.keys(Object(n))
"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))))
o.forEach((function(t){r(e,t,n[t])}))}return e}e.exports=o},NWYN:function(e,t,n){"use strict"
n.r(t)
var r=n("NSe8")
var o=n("1OyB")
var i=n("vuIU")
var a=n("md7G")
var u=n("foSv")
var c=n("Ji7U")
n("k9XI")
var s=n("q1tI")
var f=n("17x9")
var l=n.n(f)
var p=n("igdM")
var v=n.n(p)
var d=n("JIIx")
var m=n.n(d)
var h=n("rePB")
var y="@@themeable"
var b=Object(h["a"])({},y,l.a.object)
function w(e,t){return Object(h["a"])({},y,{theme:e,immutable:t})}function O(e){if(e)return e[y]}var g=n("ReuC")
var j=n("vpQ4")
var k=n("b7MV")
var x=n("TNh1")
var E=n.n(x)
var S=n("cZ6H")
var T=n.n(S)
var _=n("UWfp")
var P=n("70gm")
var A=n.n(P)
var M=n("kH7O")
var C=n.n(M)
var I=n("vYBF")
var B=n.n(I)
function N(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:""
var t=U(e)
return q(W(t),t)}var D={style:1,keyframes:7,media:4}
function U(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:""
return e.replace(/\/\*[^*]*\*+([^/*][^*]*\*+)*\//gim,"").replace(/@import[^;]*;/gim,"")}function W(e){var t={start:0,end:e.length}
var n=t
var r=e.split("")
r.forEach((function(e,r){switch(e){case"{":n.rules||(n.rules=[])
var o=n
var i=o.rules[o.rules.length-1]
n={start:r+1,parent:o,previous:i}
o.rules.push(n)
break
case"}":n.end=r+1
n=n.parent||t}}))
return t}function z(e,t){var n=e.previous?e.previous.end:e.parent.start
var r=e.start-1
var o=t.substring(n,r)
o=o.replace(/\s+/g," ")
o=o.substring(o.lastIndexOf(";")+1)
return o.trim()}function R(e){if(0!==e.indexOf("@"))return D.style
if(0===e.indexOf("@media"))return D.media
if(e.match(/^@[^\s]*keyframes/))return D.keyframes}function q(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:""
if(e.parent){e.selector=z(e,t)
e.type=R(e.selector)}e.cssText=t.substring(e.start,e.end-1).trim()
e.rules&&e.rules.length>0&&(e.rules=e.rules.map((function(e){return q(e,t)})))
return e}function L(e,t){var n=N(e)
"function"===typeof t&&(n=H(n,t))
return J(n)}function V(e){return e.parent&&e.parent.type===D.keyframes}function Y(e){var t=N(e)
var n=[]
if(t.rules&&t.rules.length>0)n=t.rules.filter(X).map((function(e){return J(e)}))
else{var r=J(t)
r&&(n=[r])}return n}function H(e,t){if(!e)return
if(e.type===D.style)return t(e)
var n=e.rules||[]
var r=Object(j["a"])({},e)
r.rules=n.map((function(e){return H(e,t)}))
return r}function J(e,t){var n=""
var r=t||""
if(e.rules&&e.rules.length>0)n=e.rules.map((function(e){return J(e,n)})).join("\n")
else{n=e.cssText.trim()
n&&(n="  ".concat(n,"\n"))}if(n){var o=e.selector?"".concat(e.selector," {\n"):""
var i=e.selector?"}\n":""
r+="".concat(o).concat(n).concat(i)}return r}var X=function(){var e="-ms-"
var t="-moz-"
var n="-webkit-"
if(B.a.blink)return function(n){var r=n.selector
return!(r.includes(e)||r.includes(t))}
if(B.a.webkit)return function(n){var r=n.selector
return!(r.includes(e)||r.includes(t))}
if(B.a.gecko)return function(t){var r=t.selector
return!(r.includes(e)||r.includes(n))}
if(B.a.msedge)return function(e){var n=e.selector
return!n.includes(t)}
if(B.a.msie)return function(e){var r=e.selector
return!(r.includes(t)||r.includes(n))}
return function(){return true}}()
function Q(e,t,n){var r=e.querySelector("#".concat(n))
var o=n.toLowerCase()
if(t){var i=!r
var a=t
if(i){r=document.createElement("style")
r.setAttribute("scoped",true)
r.setAttribute("type","text/css")
r.id=n}if(!r.scoped){G(e,o)
a=Z(a,"[".concat(o,"]"))}i&&e.insertBefore(r,e.firstChild)
"textContent"in r?r.textContent=a:r.styleSheet.cssText=a}else if(r){r.scoped||F(e,o)
e.removeChild(r)}}function Z(e,t){return L(e,(function(e){var n=Object(j["a"])({},e)
if(!e.isScoped){n.selector=re(e,t)
n.isScoped=true}return n}))}function G(e,t){var n=e.children||e.childNodes
e.setAttribute&&e.setAttribute(t,"")
for(var r=0;r<n.length;r++)G(n[r],t)}function F(e,t){var n=e.children||e.childNodes
e.removeAttribute&&e.removeAttribute(t)
for(var r=0;r<n.length;r++)F(n[r],t)}function K(e){return e.match(/^(_|html|body|\:root)/i)}function $(e){return e.match(/^(\.\S+)/)}function ee(e,t){var n=e.split(":")
n[0]+=t
return n.join(":")}function te(e,t,n){if(K(e))return e
var r=n?ee(e,n):e
return t+r}function ne(e,t){var n=e.trim()
n=n.replace(/(^|[\s>+~]+)((?:\[.+?\]|[^\s>+~=\[])+)/g,(function(e,n,r){var o=arguments[arguments.length-2]
return $(r)||o>0?te(r,n,t):r}))
return n}function re(e,t){var n=e.selector.split(",")
V(e)||(n=n.map((function(e){return ne(e,t)})))
return n.join(",")}function oe(e,t){var n=t?"".concat(t,"-").concat(e):e
return"--".concat(n)}function ie(e,t){var n={}
Object.keys(e||{}).forEach((function(r){n[oe(r,t)]=e[r]}))
return n}function ae(e,t){var n={}
if(e===t||!t)return n
Object.keys(t).forEach((function(r){e[r]!==t[r]&&(n[r]=t[r])}))
return n}var ue=n("Od2c")
var ce=n.n(ue)
var se
function fe(){if("undefined"!==typeof se)return se
return se=ce.a&&!B.a.msedge&&window.CSS&&window.CSS.supports&&window.CSS.supports("color","var(--primary)")}function le(e,t){var n={}
Object.keys(e||{}).forEach((function(e){n[e]="var(".concat(oe(e,t),")")}))
return n}function pe(e,t){var n=ve(e,/@media\s*[^(]*\((--[^)]+)\)?/g)
var r=e
if(n.length>0){var o="function"===typeof t?t():t
n.forEach((function(e){var t=new RegExp(e[1].replace(/[\\^$*+?.()|[\]{}]/g,"\\$&"),"gm")
r=r.replace(t,o[e[1]])}))}return r}function ve(e,t){var n=[]
var r
var o=t
o.lastIndex=0
o=new RegExp(o.source,"g")
while(null!==(r=o.exec(e))){n.push(r)
o.lastIndex===r.index&&o.lastIndex++}return n}function de(){return fe()?he.apply(this,arguments):me.apply(this,arguments)}function me(e,t){var n=e(t)
var r=t?ie(t):{}
n=pe(n,r)
return n}function he(e,t,n){var r=t?le(t,n):{}
var o=e(r)
var i=t?function(){return ie(t)}:{}
o=pe(o,i)
var a=t?ie(t,n):""
o=[o,ye(a)].join("\n")
return o}function ye(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{}
var t=[]
for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&"undefined"!==typeof e[n]&&t.push("".concat(n,": ").concat(e[n]))
return t.length>0?"\n      :root {\n        ".concat(t.join(";\n"),";\n      }\n    "):""}function be(){fe()?Oe.apply(this,arguments):we.apply(this,arguments)}function we(e,t,n,r,o,i){if(!e||T()(t))return
var a=ae(n,t)
var u=""
a&&Object.keys(a).length>0&&(u=me(o,Object(j["a"])({},n,t)))
Q(e,u,i)}function Oe(e,t,n,r){if(!e||T()(t))return
ge(e,r)
var o=ae(n,t)
o&&!T()(o)&&je(e,ie(o,r))}function ge(e,t){var n=e.style
for(var r=n.length-1;r>=0;r--){var o=n[r]
o.indexOf("--".concat(t,"-"))>=0&&e.style.removeProperty(o)}}function je(e,t){Object.keys(t).forEach((function(n){var r=t[n]
r&&e.style.setProperty(n,r)}))}var ke=false
function xe(){if(ke)return
ke=true
if(ce.a){var e=document.documentElement.getAttribute("dir")
e||document.documentElement.setAttribute("dir","ltr")}}var Ee=n("09fR")
var Se=n("QroX")
var Te={}
var _e=Object(k["default"])((function(e,t){var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{}
var r=e.displayName||e.name
var s="".concat(n&&n.componentId||Object(_["a"])())
false
var f=Symbol(s)
var p=n&&"function"===typeof n.template?n.template:function(){return""}
Object(Ee["c"])(f,t)
var v=function(e){var t=O(e)
return t||Te}
var d=function(e){var t=v(e),n=t.theme
return n&&n[f]?Object(j["a"])({},n[f]):Te}
var m=function(e,t){return Object(Ee["a"])(f,e,t)}
var h=function(e){Object(c["a"])(t,e)
function t(){var e
var n
Object(o["a"])(this,t)
for(var i=arguments.length,c=new Array(i),s=0;s<i;s++)c[s]=arguments[s]
n=Object(a["a"])(this,(e=Object(u["a"])(t)).call.apply(e,[this].concat(c)))
n._themeCache=null
n._instanceId=Object(_["a"])(r)
return n}Object(i["a"])(t,[{key:"componentWillMount",value:function(){if(!Se["a"].mounted(s)){var e=m()
var n=de(p,e,s)
Se["a"].mount(s,Y(n))}Object(g["a"])(Object(u["a"])(t.prototype),"componentWillMount",this)&&Object(g["a"])(Object(u["a"])(t.prototype),"componentWillMount",this).call(this)}},{key:"componentDidMount",value:function(){this.applyTheme()
xe()
Object(g["a"])(Object(u["a"])(t.prototype),"componentDidMount",this)&&Object(g["a"])(Object(u["a"])(t.prototype),"componentDidMount",this).call(this)}},{key:"shouldComponentUpdate",value:function(e,n,r){var o=!A()(O(this.context),O(r))
if(o)return true
if(Object(g["a"])(Object(u["a"])(t.prototype),"shouldComponentUpdate",this))return Object(g["a"])(Object(u["a"])(t.prototype),"shouldComponentUpdate",this).call(this,e,n,r)
return!E()(this.props,e)||!E()(this.state,n)||!E()(this.context,r)}},{key:"componentWillUpdate",value:function(e,n,r){A()(e.theme,this.props.theme)&&A()(d(r),d(this.context))||(this._themeCache=null)
Object(g["a"])(Object(u["a"])(t.prototype),"componentWillUpdate",this)&&Object(g["a"])(Object(u["a"])(t.prototype),"componentWillUpdate",this).call(this,e,n,r)}},{key:"componentDidUpdate",value:function(e,n,r){this.applyTheme()
Object(g["a"])(Object(u["a"])(t.prototype),"componentDidUpdate",this)&&Object(g["a"])(Object(u["a"])(t.prototype),"componentDidUpdate",this).call(this,e,n,r)}},{key:"applyTheme",value:function(e){if(T()(this.theme))return
var t=m()
be(e||C()(this),this.theme,t,s,p,this.scope)}},{key:"scope",get:function(){return"".concat(s,"__").concat(this._instanceId)}},{key:"theme",get:function(){if(null!==this._themeCache)return this._themeCache
var e=v(this.context),t=e.immutable
var n=d(this.context)
this.props.theme&&!T()(this.props.theme)&&(n?t?this.props.theme:n=T()(n)?this.props.theme:Object(j["a"])({},n,this.props.theme):n=this.props.theme)
this._themeCache=m(null,n)
return this._themeCache}}])
return t}(e)
h.componentId=s
h.theme=f
h.contextTypes=Object(j["a"])({},e.contextTypes,b)
h.propTypes=Object(j["a"])({},e.propTypes,{theme:l.a.object})
h.generateTheme=m
return h}))
_e.generateTheme=Ee["b"]
var Pe=_e
var Ae=function(e){Object(c["a"])(t,e)
function t(){Object(o["a"])(this,t)
return Object(a["a"])(this,Object(u["a"])(t).apply(this,arguments))}Object(i["a"])(t,[{key:"getChildContext",value:function(){var e=this.props.theme||{}
var t=O(this.context)||{}
if(t.immutable&&t.theme){this.props.theme,this.props.theme
e=t.theme}else t.theme&&(e=v()(t.theme,e))
return w(e,t.immutable||this.props.immutable)}},{key:"render",value:function(){return m()(this.props.children)}}])
t.displayName="ApplyTheme"
return t}(s["Component"])
Ae.propTypes={theme:l.a.object,children:l.a.node,immutable:l.a.bool}
Ae.defaultProps={theme:void 0,children:null,immutable:false}
Ae.childContextTypes=b
Ae.contextTypes=b
Ae.generateTheme=Pe.generateTheme
n.d(t,"default",(function(){return r["a"]}))
n.d(t,"ApplyTheme",(function(){return Ae}))},Nsbk:function(e,t){function n(t){e.exports=n=Object.setPrototypeOf?Object.getPrototypeOf:function(e){return e.__proto__||Object.getPrototypeOf(e)}
return n(t)}e.exports=n},Od2c:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=void 0
var r=!!("undefined"!==typeof window&&window.document&&window.document.createElement)
t.default=r},PJYZ:function(e,t){function n(e){if(void 0===e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
return e}e.exports=n},QSkQ:function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=u
var o=r(n("MVZn"))
n("k9XI")
var i=r(n("q1tI"))
var a=r(n("gS0x"))
function u(e,t){var n=t.ref
var r=e.ref
var u=(0,o.default)({},t)
e.props.style&&t.style&&(u.style=(0,o.default)({},e.props.style,t.style))
u.key=e.key||t.key
Object.keys(t).forEach((function(n){0!==n.indexOf("on")||"function"!==typeof t[n]&&"function"!==typeof e.props[n]||(u[n]=(0,a.default)(e.props[n],t[n]))}))
for(var c=arguments.length,s=new Array(c>2?c-2:0),f=2;f<c;f++)s[f-2]=arguments[f]
if(null==r||null==n)return i.default.cloneElement.apply(i.default,[e,u].concat(s))
"Cloning an element with a ref that will be overwritten because the ref is not a function. Use a composable callback-style ref instead. Ignoring ref: ".concat(r)
return i.default.cloneElement.apply(i.default,[e,(0,o.default)({},u,{ref:function(e){n(e)
r(e)}})].concat(s))}},QroX:function(e,t,n){"use strict";(function(e){var r=n("SDpH")
var o="production"
var i=e.env.DEBUG||"development"===o
var a=Boolean(e.env.DISABLE_SPEEDY_STYLESHEET||i)
var u={}
var c
t["a"]={mount:function(e,t){u[e]||(u[e]=f(t))},mounted:function(e){return e in u},flush:function(){var e=s?window.THEMEABLE_STYLESHEET:c
e&&e.flush()
u={}
c=null
s&&(window.THEMEABLE_STYLESHEET=null)}}
var s=!!("undefined"!==typeof window&&window.document&&window.document.createElement)
function f(e){var t=l()
var n=[]
e.forEach((function(e){e&&n.push(t.insert(e))}))}function l(){var e=s?window.THEMEABLE_STYLESHEET:c
if(!e){e=c=p()
s&&(window.THEMEABLE_STYLESHEET=e)}return e}function p(){var e=new r["StyleSheet"]({speedy:!a})
e.inject()
return e}}).call(this,n("8oxB"))},RIqP:function(e,t,n){var r=n("Ijbi")
var o=n("EbDI")
var i=n("Bnag")
function a(e){return r(e)||o(e)||i()}e.exports=a},SksO:function(e,t){function n(t,r){e.exports=n=Object.setPrototypeOf||function(e,t){e.__proto__=t
return e}
return n(t,r)}e.exports=n},TNh1:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=o
var r=Object.prototype.hasOwnProperty
function o(e,t){if(i(e,t))return true
if("object"!==typeof e||null===e||"object"!==typeof t||null===t)return false
var n=Object.keys(e)
var o=Object.keys(t)
if(n.length!==o.length)return false
for(var a=0;a<n.length;a++)if(!r.call(t,n[a])||!i(e[n[a]],t[n[a]]))return false
return true}function i(e,t){return e===t?0!==e||0!==t||1/e===1/t:e!==e&&t!==t}},TqRt:function(e,t){function n(e){return e&&e.__esModule?e:{default:e}}e.exports=n},UWJt:function(e,t,n){"use strict"
n.r(t)
var r=n("1OyB")
var o=n("vuIU")
var i=n("md7G")
var a=n("foSv")
var u=n("ReuC")
var c=n("Ji7U")
var s=n("i8i4")
var f=n("b7MV")
t["default"]=Object(f["default"])((function(e){var t=e.displayName||e.name
var n={attribute:"data-cid",value:t}
var f="[".concat(n.attribute,'~="').concat(n.value,'"]')
var l=function(e){Object(c["a"])(t,e)
function t(){Object(r["a"])(this,t)
return Object(i["a"])(this,Object(a["a"])(t).apply(this,arguments))}Object(o["a"])(t,[{key:"componentDidMount",value:function(){if(Object(u["a"])(Object(a["a"])(t.prototype),"componentDidMount",this)){var e
for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];(e=Object(u["a"])(Object(a["a"])(t.prototype),"componentDidMount",this)).call.apply(e,[this].concat(r))}this.appendLocatorAttribute()}},{key:"componentDidUpdate",value:function(){if(Object(u["a"])(Object(a["a"])(t.prototype),"componentDidUpdate",this)){var e
for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];(e=Object(u["a"])(Object(a["a"])(t.prototype),"componentDidUpdate",this)).call.apply(e,[this].concat(r))}this.appendLocatorAttribute()}},{key:"componentWillUnmount",value:function(){this._testableUnmounted=true
if(Object(u["a"])(Object(a["a"])(t.prototype),"componentWillUnmount",this)){var e
for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o];(e=Object(u["a"])(Object(a["a"])(t.prototype),"componentWillUnmount",this)).call.apply(e,[this].concat(r))}clearTimeout(this.locatorTimeout)}},{key:"appendLocatorAttribute",value:function(){var e=this
this.locatorTimeout=setTimeout((function(){var t
if(e._testableUnmounted)return
try{t=Object(s["findDOMNode"])(e)||e.DOMNode}catch(e){}if(t&&t.getAttribute){var r=t.getAttribute(n.attribute)
var o="string"===typeof r?r.split(/\s+/):[]
o.includes(n.value)||o.push(n.value)
t.setAttribute(n.attribute,o.join(" "))}}))}}])
return t}(e)
l.selector=f
return l}))},UWfp:function(e,t,n){"use strict"
n.d(t,"a",(function(){return i}))
var r="getRandomVcryp0123456789bfhijklqsuvwxzABCDEFGHIJKLMNOPQSTUWXYZ"
var o=r.length-1
function i(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:""
var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:12
var n="u".concat(u("",t-1))
return e&&false?"".concat(e,"__").concat(n):n}function a(e){var t=[]
while(0<e--)t.push(Math.floor(256*Math.random()))
return t}function u(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:12
var n=""
var i=a(t)
while(0<t--)n+=r[i[t]&o]
return n}},W8MJ:function(e,t){function n(e,t){for(var n=0;n<t.length;n++){var r=t[n]
r.enumerable=r.enumerable||false
r.configurable=true
"value"in r&&(r.writable=true)
Object.defineProperty(e,r.key,r)}}function r(e,t,r){t&&n(e.prototype,t)
r&&n(e,r)
return e}e.exports=r},YGEp:function(e,t,n){"use strict"
n.r(t)
var r={}
n.r(r)
n.d(r,"oneOf",(function(){return u}))
n.d(r,"oneOfEach",(function(){return c}))
n.d(r,"enforceOrder",(function(){return s}))
var o=n("q1tI")
var i=n.n(o)
function a(e){return function(t,n,r){var o=t[n]
if(null===o||"undefined"===typeof o)return new Error("The prop `".concat(n,"` is marked as required in `").concat(r,"`, but its value is `").concat(o,"`"))
for(var i=arguments.length,a=new Array(i>3?i-3:0),u=3;u<i;u++)a[u-3]=arguments[u]
return e.apply(void 0,[t,n,r].concat(a))}}function u(e){function t(t,n,r){var o=i.a.Children.toArray(t[n])
var a=e.map((function(e){return e?f(e):e}))
for(var u=0;u<o.length;u++){var c=o[u]
if(c&&c.type){var s=f(c.type)
if(a.indexOf(s)<0)return new Error("Expected one of ".concat(a.join(", ")," in ").concat(r," but found '").concat(s,"'"))}else if(c)return new Error("Expected one of ".concat(a.join(", ")," in ").concat(r," but found an element with unknown type: ").concat(c))}}t.isRequired=a(t)
return t}function c(e){return function(t,n,r){var o=i.a.Children.toArray(t[n])
var a={}
var u=e.map((function(e){var t=f(e)
a[t]=0
return t}))
for(var c=0;c<o.length;c++){var s=o[c]
if(s&&s.type){var l=f(s.type)
if(u.indexOf(l)<0)return new Error("Expected one of ".concat(u.join(", ")," in ").concat(r," but found '").concat(l,"'"))
a[l]=(a[l]||0)+1}else if(s)return new Error("Expected one of ".concat(u.join(", ")," in ").concat(r," but found an element of unknown type: ").concat(s))}var p=[]
Object.keys(a).forEach((function(e){a[e]>1&&p.push("".concat(a[e]," children of type ").concat(e))
0===a[e]&&p.push("0 children of type ".concat(e))}))
if(p.length>0)return new Error("Expected exactly one of each ".concat(u.join(", ")," in ").concat(r," but found:\n").concat(p.join("\n")))}}function s(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n]
function r(e,t){for(var n=0;n<e.length;n++)if(e[n]!==t[n])return false
return true}function o(e,t){return t.map((function(t){return u(e,t)})).join("\n\n")}function u(e,t){var n=t.map((function(e){return e?f(e):"??"})).map((function(e){return"  <".concat(e," />")})).join("\n")
return"<".concat(e,">\n").concat(n,"\n</").concat(e,">")}function c(e,n,a){var c=i.a.Children.toArray(e[n]).map((function(e){if(e&&e.type)return f(e.type)
if(e)return null}))
for(var s=0;s<t.length;s++){var l=t[s].map((function(e){return e?f(e):"??"}))
if(r(c,l))return}return new Error("Expected children of ".concat(a," in one of the following formats:\n").concat(o(a,t),"\n\n\nInstead of:\n").concat(u(a,c)))}c.isRequired=a(c)
return c}var f=function(e){return"string"===typeof e?e:e.displayName||e.name}
function l(e,t,n){if("input"===e.as){if("children"===t&&e.children||void 0==e.value)return new Error("Prop `value` and not `children` must be supplied if `".concat(n,' as="input"`'))}else if("value"===t&&void 0!=e.value||!e.children)return new Error("Prop `children` and not `value` must be supplied unless `".concat(n,' as="input"`'))
return}function p(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:"onChange"
var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:"defaultValue"
return function(r,o,i){var a=e.apply(null,arguments)
if(a)return a
if(r[o]&&"function"!==typeof r[t])return new Error(["You provided a '".concat(o,"' prop without an '").concat(t,"' handler on '").concat(i,"'. This will render a controlled component. If the component should be uncontrolled and manage its own state, use '").concat(n,"'. Otherwise, set '").concat(t,"'.")].join(""))}}var v=n("17x9")
var d=n.n(v)
var m=d.a.oneOf(["auto","default","none","context-menu","help","pointer","progress","wait","cell","crosshair","text","vertical-text","alias","copy","move","no-drop","not-allowed","grab","grabbing","all-scroll","col-resize","row-resize","n-resize","e-resize","s-resize","w-resize","ne-resize","nw-resize","se-resize","sw-resize","ew-resize","ns-resize","nesw-resize","nwse-resize","zoom-in","zoom-out"])
var h=!!("undefined"!==typeof window&&window.document&&window.document.createElement)
var y=h?d.a.oneOfType([d.a.element,d.a.instanceOf(Element)]):d.a.element
function b(e){for(var t=arguments.length,n=new Array(t>1?t-1:0),r=1;r<t;r++)n[r-1]=arguments[r]
return function(t,r,o){if(null!=t[r]){var i=n.map((function(e){return t[e]})).filter((function(e){return null!=e}))
if(i.length>0)return new Error("Invalid prop `".concat(r,"` supplied to `").concat(o,"`: expected only one of ")+"".concat([r].concat(n).map((function(e){return"`".concat(e,"`")})).join(", ")," to be set."))}return e.apply(null,arguments)}}n.d(t,"Children",(function(){return r}))
n.d(t,"childrenOrValue",(function(){return l}))
n.d(t,"controllable",(function(){return p}))
n.d(t,"cursor",(function(){return m}))
n.d(t,"element",(function(){return y}))
n.d(t,"makeRequirable",(function(){return a}))
n.d(t,"xor",(function(){return b}))
t["default"]={Children:r,childrenOrValue:l,controllable:p,cursor:m,element:y,makeRequirable:a,xor:b}},a1gu:function(e,t,n){var r=n("cDf5")
var o=n("PJYZ")
function i(e,t){if(t&&("object"===r(t)||"function"===typeof t))return t
return o(e)}e.exports=i},b7MV:function(e,t,n){"use strict"
n.r(t)
function r(e){return function(){for(var t=arguments.length,n=new Array(t),r=0;r<t;r++)n[r]=arguments[r]
return function(t){if("function"===typeof e){var r=t.displayName||t.name
var o=e.apply(void 0,[t].concat(n))
o.displayName=r
return o}return t}}}n.d(t,"default",(function(){return r}))},cDf5:function(e,t){function n(e){n="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e}
return n(e)}function r(t){"function"===typeof Symbol&&"symbol"===n(Symbol.iterator)?e.exports=r=function(e){return n(e)}:e.exports=r=function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":n(e)}
return r(t)}e.exports=r},cZ6H:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=o
var r=Object.prototype.hasOwnProperty
function o(e){if("object"!==typeof e)return true
for(var t in e)if(r.call(e,t))return false
return true}},dx2O:function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.warnDeprecatedComponent=l
t.changedPackageWarning=p
t.deprecatePropValues=t.default=void 0
var o=r(n("lwsE"))
var i=r(n("a1gu"))
var a=r(n("Nsbk"))
var u=r(n("7W2i"))
n("k9XI")
var c=r(n("b7MV"))
var s=(0,c.default)((function(e,t,n,r){var c=function(e){(0,u.default)(t,e)
function t(){(0,o.default)(this,t)
return(0,i.default)(this,(0,a.default)(t).apply(this,arguments))}return t}(e)
false
return c}))
t.default=s
var f=function(e){var t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:[]
var n=arguments.length>2?arguments[2]:void 0
return function(r,o,i){var a=t.includes(r[o])
"[".concat(i,"] The '").concat(r[o],"' value for the `").concat(o,"` prop is deprecated. ").concat(n||"")
for(var u=arguments.length,c=new Array(u>3?u-3:0),s=3;s<u;s++)c[s-3]=arguments[s]
return a?null:e.apply(void 0,[r,o,i].concat(c))}}
t.deprecatePropValues=f
function l(e,t,n){"[".concat(t,"] was deprecated in version ").concat(e,". ").concat(n||"")}function p(e,t){return"It has been moved from @instructure/".concat(e," to @instructure/").concat(t,".")}},gS0x:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=r
function r(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n]
return t.filter((function(e,n){if(null==e)return false
var r=o(t,e)
return 1===r.length||n===r[0]})).reduce((function(e,t){if("function"!==typeof t)throw new Error("Invalid Argument Type, must only provide functions, undefined, or null.")
if(null===e)return t
return function(){for(var n=arguments.length,r=new Array(n),o=0;o<n;o++)r[o]=arguments[o]
e.apply(this,r)
t.apply(this,r)}}),null)}function o(e,t){var n=[]
e.forEach((function(e,r){e===t&&n.push(r)}))
return n}},iV4t:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=r
n("k9XI")
function r(e,t,n){if(t.as&&t.as!==e.defaultProps.as)return t.as
if("function"===typeof n)return n()
if(t.href)return"a"
if(t.to){t.as,"[".concat(e.displayName,"] `as` prop should be provided when using `to`")
return"a"}if("function"===typeof t.onClick)return"button"
return e.defaultProps.as||"span"}},igdM:function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=a
var o=r(n("MVZn"))
var i=r(n("RIqP"))
function a(){var e=Array.prototype.slice.call(arguments)
var t={}
e.forEach((function(e){t=u(t,e)}))
return t}function u(e,t){if(c(t)){var n=[].concat((0,i.default)(Object.keys(t)),(0,i.default)(Object.getOwnPropertySymbols(t)))
var r=(0,o.default)({},e)
n.forEach((function(n){c(e[n])&&c(t[n])?r[n]=u(e[n],t[n]):s(t[n])&&s(e[n])?r[n]=(0,i.default)(new Set([].concat((0,i.default)(e[n]),(0,i.default)(t[n])))):s(e[n])?r[n]=(0,i.default)(new Set([].concat((0,i.default)(e[n]),[t[n]]))):r[n]=t[n]}))
return r}return(0,o.default)({},e)}function c(e){return e&&("object"===typeof e||"function"===typeof e)&&!Array.isArray(e)}function s(e){return e&&Array.isArray(e)}},k9XI:function(e,t,n){var r=n("q1tI")
function o(){var e=""
try{e=r.__SECRET_INTERNALS_DO_NOT_USE_OR_YOU_WILL_BE_FIRED.ReactDebugCurrentFrame.getStackAddendum()}catch(e){}return e}function i(e,t,n){if(!t&&false){var r=o()
if("function"!==typeof console[e])throw new Error("'".concat(e,"' is not a valid console method!"))
var i
for(var a=arguments.length,u=new Array(a>3?a-3:0),c=3;c<a;c++)u[c-3]=arguments[c];(i=console)[e].apply(i,["Warning: ".concat(n)].concat(u,[r]))}}t.error=function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n]
return i.apply(void 0,["error"].concat(t))}
t.warn=function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n]
return i.apply(void 0,["warn"].concat(t))}
t.info=function(){var e
return(e=console).info.apply(e,arguments)}
t.assert=function(){var e
return(e=console).assert.apply(e,arguments)}
t.debug=function(){var e
return(e=console).debug.apply(e,arguments)}
t.log=function(){var e
return(e=console).log.apply(e,arguments)}},kH7O:function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=i
var o=r(n("i8i4"))
function i(e){var t="function"===typeof e?e():e
if(t===document)return document.documentElement
if(t instanceof Element||t===window||t&&"undefined"!==typeof t.nodeType)return t
if(t)return o.default.findDOMNode(t)}},lSNA:function(e,t){function n(e,t,n){t in e?Object.defineProperty(e,t,{value:n,enumerable:true,configurable:true,writable:true}):e[t]=n
return e}e.exports=n},lwsE:function(e,t){function n(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}e.exports=n},puQj:function(e,t,n){!function(t,r,o){if(e.exports)e.exports=o()
else{n("B9Yq")(r,o)}}(0,"bowser",(function(){var e=true
function t(t){function n(e){var n=t.match(e)
return n&&n.length>1&&n[1]||""}function r(e){var n=t.match(e)
return n&&n.length>1&&n[2]||""}var o,a=n(/(ipod|iphone|ipad)/i).toLowerCase(),u=/like android/i.test(t),c=!u&&/android/i.test(t),s=/nexus\s*[0-6]\s*/i.test(t),f=!s&&/nexus\s*[0-9]+/i.test(t),l=/CrOS/.test(t),p=/silk/i.test(t),v=/sailfish/i.test(t),d=/tizen/i.test(t),m=/(web|hpw)(o|0)s/i.test(t),h=/windows phone/i.test(t),y=(/SamsungBrowser/i.test(t),!h&&/windows/i.test(t)),b=!a&&!p&&/macintosh/i.test(t),w=!c&&!v&&!d&&!m&&/linux/i.test(t),O=r(/edg([ea]|ios)\/(\d+(\.\d+)?)/i),g=n(/version\/(\d+(\.\d+)?)/i),j=/tablet/i.test(t)&&!/tablet pc/i.test(t),k=!j&&/[^-]mobi/i.test(t),x=/xbox/i.test(t)
if(/opera/i.test(t))o={name:"Opera",opera:e,version:g||n(/(?:opera|opr|opios)[\s\/](\d+(\.\d+)?)/i)}
else if(/opr\/|opios/i.test(t))o={name:"Opera",opera:e,version:n(/(?:opr|opios)[\s\/](\d+(\.\d+)?)/i)||g}
else if(/SamsungBrowser/i.test(t))o={name:"Samsung Internet for Android",samsungBrowser:e,version:g||n(/(?:SamsungBrowser)[\s\/](\d+(\.\d+)?)/i)}
else if(/Whale/i.test(t))o={name:"NAVER Whale browser",whale:e,version:n(/(?:whale)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/MZBrowser/i.test(t))o={name:"MZ Browser",mzbrowser:e,version:n(/(?:MZBrowser)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/coast/i.test(t))o={name:"Opera Coast",coast:e,version:g||n(/(?:coast)[\s\/](\d+(\.\d+)?)/i)}
else if(/focus/i.test(t))o={name:"Focus",focus:e,version:n(/(?:focus)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/yabrowser/i.test(t))o={name:"Yandex Browser",yandexbrowser:e,version:g||n(/(?:yabrowser)[\s\/](\d+(\.\d+)?)/i)}
else if(/ucbrowser/i.test(t))o={name:"UC Browser",ucbrowser:e,version:n(/(?:ucbrowser)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/mxios/i.test(t))o={name:"Maxthon",maxthon:e,version:n(/(?:mxios)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/epiphany/i.test(t))o={name:"Epiphany",epiphany:e,version:n(/(?:epiphany)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/puffin/i.test(t))o={name:"Puffin",puffin:e,version:n(/(?:puffin)[\s\/](\d+(?:\.\d+)?)/i)}
else if(/sleipnir/i.test(t))o={name:"Sleipnir",sleipnir:e,version:n(/(?:sleipnir)[\s\/](\d+(?:\.\d+)+)/i)}
else if(/k-meleon/i.test(t))o={name:"K-Meleon",kMeleon:e,version:n(/(?:k-meleon)[\s\/](\d+(?:\.\d+)+)/i)}
else if(h){o={name:"Windows Phone",osname:"Windows Phone",windowsphone:e}
if(O){o.msedge=e
o.version=O}else{o.msie=e
o.version=n(/iemobile\/(\d+(\.\d+)?)/i)}}else if(/msie|trident/i.test(t))o={name:"Internet Explorer",msie:e,version:n(/(?:msie |rv:)(\d+(\.\d+)?)/i)}
else if(l)o={name:"Chrome",osname:"Chrome OS",chromeos:e,chromeBook:e,chrome:e,version:n(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)}
else if(/edg([ea]|ios)/i.test(t))o={name:"Microsoft Edge",msedge:e,version:O}
else if(/vivaldi/i.test(t))o={name:"Vivaldi",vivaldi:e,version:n(/vivaldi\/(\d+(\.\d+)?)/i)||g}
else if(v)o={name:"Sailfish",osname:"Sailfish OS",sailfish:e,version:n(/sailfish\s?browser\/(\d+(\.\d+)?)/i)}
else if(/seamonkey\//i.test(t))o={name:"SeaMonkey",seamonkey:e,version:n(/seamonkey\/(\d+(\.\d+)?)/i)}
else if(/firefox|iceweasel|fxios/i.test(t)){o={name:"Firefox",firefox:e,version:n(/(?:firefox|iceweasel|fxios)[ \/](\d+(\.\d+)?)/i)}
if(/\((mobile|tablet);[^\)]*rv:[\d\.]+\)/i.test(t)){o.firefoxos=e
o.osname="Firefox OS"}}else if(p)o={name:"Amazon Silk",silk:e,version:n(/silk\/(\d+(\.\d+)?)/i)}
else if(/phantom/i.test(t))o={name:"PhantomJS",phantom:e,version:n(/phantomjs\/(\d+(\.\d+)?)/i)}
else if(/slimerjs/i.test(t))o={name:"SlimerJS",slimer:e,version:n(/slimerjs\/(\d+(\.\d+)?)/i)}
else if(/blackberry|\bbb\d+/i.test(t)||/rim\stablet/i.test(t))o={name:"BlackBerry",osname:"BlackBerry OS",blackberry:e,version:g||n(/blackberry[\d]+\/(\d+(\.\d+)?)/i)}
else if(m){o={name:"WebOS",osname:"WebOS",webos:e,version:g||n(/w(?:eb)?osbrowser\/(\d+(\.\d+)?)/i)};/touchpad\//i.test(t)&&(o.touchpad=e)}else if(/bada/i.test(t))o={name:"Bada",osname:"Bada",bada:e,version:n(/dolfin\/(\d+(\.\d+)?)/i)}
else if(d)o={name:"Tizen",osname:"Tizen",tizen:e,version:n(/(?:tizen\s?)?browser\/(\d+(\.\d+)?)/i)||g}
else if(/qupzilla/i.test(t))o={name:"QupZilla",qupzilla:e,version:n(/(?:qupzilla)[\s\/](\d+(?:\.\d+)+)/i)||g}
else if(/chromium/i.test(t))o={name:"Chromium",chromium:e,version:n(/(?:chromium)[\s\/](\d+(?:\.\d+)?)/i)||g}
else if(/chrome|crios|crmo/i.test(t))o={name:"Chrome",chrome:e,version:n(/(?:chrome|crios|crmo)\/(\d+(\.\d+)?)/i)}
else if(c)o={name:"Android",version:g}
else if(/safari|applewebkit/i.test(t)){o={name:"Safari",safari:e}
g&&(o.version=g)}else if(a){o={name:"iphone"==a?"iPhone":"ipad"==a?"iPad":"iPod"}
g&&(o.version=g)}else o=/googlebot/i.test(t)?{name:"Googlebot",googlebot:e,version:n(/googlebot\/(\d+(\.\d+))/i)||g}:{name:n(/^(.*)\/(.*) /),version:r(/^(.*)\/(.*) /)}
if(!o.msedge&&/(apple)?webkit/i.test(t)){if(/(apple)?webkit\/537\.36/i.test(t)){o.name=o.name||"Blink"
o.blink=e}else{o.name=o.name||"Webkit"
o.webkit=e}!o.version&&g&&(o.version=g)}else if(!o.opera&&/gecko\//i.test(t)){o.name=o.name||"Gecko"
o.gecko=e
o.version=o.version||n(/gecko\/(\d+(\.\d+)?)/i)}if(o.windowsphone||!c&&!o.silk){if(!o.windowsphone&&a){o[a]=e
o.ios=e
o.osname="iOS"}else if(b){o.mac=e
o.osname="macOS"}else if(x){o.xbox=e
o.osname="Xbox"}else if(y){o.windows=e
o.osname="Windows"}else if(w){o.linux=e
o.osname="Linux"}}else{o.android=e
o.osname="Android"}function E(e){switch(e){case"NT":return"NT"
case"XP":return"XP"
case"NT 5.0":return"2000"
case"NT 5.1":return"XP"
case"NT 5.2":return"2003"
case"NT 6.0":return"Vista"
case"NT 6.1":return"7"
case"NT 6.2":return"8"
case"NT 6.3":return"8.1"
case"NT 10.0":return"10"
default:return}}var S=""
if(o.windows)S=E(n(/Windows ((NT|XP)( \d\d?.\d)?)/i))
else if(o.windowsphone)S=n(/windows phone (?:os)?\s?(\d+(\.\d+)*)/i)
else if(o.mac){S=n(/Mac OS X (\d+([_\.\s]\d+)*)/i)
S=S.replace(/[_\s]/g,".")}else if(a){S=n(/os (\d+([_\s]\d+)*) like mac os x/i)
S=S.replace(/[_\s]/g,".")}else c?S=n(/android[ \/-](\d+(\.\d+)*)/i):o.webos?S=n(/(?:web|hpw)os\/(\d+(\.\d+)*)/i):o.blackberry?S=n(/rim\stablet\sos\s(\d+(\.\d+)*)/i):o.bada?S=n(/bada\/(\d+(\.\d+)*)/i):o.tizen&&(S=n(/tizen[\/\s](\d+(\.\d+)*)/i))
S&&(o.osversion=S)
var T=!o.windows&&S.split(".")[0]
j||f||"ipad"==a||c&&(3==T||T>=4&&!k)||o.silk?o.tablet=e:(k||"iphone"==a||"ipod"==a||c||s||o.blackberry||o.webos||o.bada)&&(o.mobile=e)
o.msedge||o.msie&&o.version>=10||o.yandexbrowser&&o.version>=15||o.vivaldi&&o.version>=1||o.chrome&&o.version>=20||o.samsungBrowser&&o.version>=4||o.whale&&1===i([o.version,"1.0"])||o.mzbrowser&&1===i([o.version,"6.0"])||o.focus&&1===i([o.version,"1.0"])||o.firefox&&o.version>=20||o.safari&&o.version>=6||o.opera&&o.version>=10||o.ios&&o.osversion&&o.osversion.split(".")[0]>=6||o.blackberry&&o.version>=10.1||o.chromium&&o.version>=20?o.a=e:o.msie&&o.version<10||o.chrome&&o.version<20||o.firefox&&o.version<20||o.safari&&o.version<6||o.opera&&o.version<10||o.ios&&o.osversion&&o.osversion.split(".")[0]<6||o.chromium&&o.version<20?o.c=e:o.x=e
return o}var n=t("undefined"!==typeof navigator&&navigator.userAgent||"")
n.test=function(e){for(var t=0;t<e.length;++t){var r=e[t]
if("string"===typeof r&&r in n)return true}return false}
function r(e){return e.split(".").length}function o(e,t){var n,r=[]
if(Array.prototype.map)return Array.prototype.map.call(e,t)
for(n=0;n<e.length;n++)r.push(t(e[n]))
return r}function i(e){var t=Math.max(r(e[0]),r(e[1]))
var n=o(e,(function(e){var n=t-r(e)
e+=new Array(n+1).join(".0")
return o(e.split("."),(function(e){return new Array(20-e.length).join("0")+e})).reverse()}))
while(--t>=0){if(n[0][t]>n[1][t])return 1
if(n[0][t]!==n[1][t])return-1
if(0===t)return 0}}function a(e,r,o){var a=n
if("string"===typeof r){o=r
r=void 0}void 0===r&&(r=false)
o&&(a=t(o))
var u=""+a.version
for(var c in e)if(e.hasOwnProperty(c)&&a[c]){if("string"!==typeof e[c])throw new Error("Browser version in the minVersion map should be a string: "+c+": "+String(e))
return i([u,e[c]])<0}return r}function u(e,t,n){return!a(e,t,n)}n.isUnsupportedBrowser=a
n.compareVersions=i
n.check=u
n._detect=t
n.detect=t
return n}))},vYBF:function(e,t,n){"use strict"
var r=n("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=void 0
var o=r(n("puQj"))
var i=o.default
t.default=i},vpQ4:function(e,t,n){"use strict"
n.d(t,"a",(function(){return o}))
var r=n("rePB")
function o(e){for(var t=1;t<arguments.length;t++){var n=null!=arguments[t]?arguments[t]:{}
var o=Object.keys(Object(n))
"function"===typeof Object.getOwnPropertySymbols&&(o=o.concat(Object.getOwnPropertySymbols(n).filter((function(e){return Object.getOwnPropertyDescriptor(n,e).enumerable}))))
o.forEach((function(t){Object(r["a"])(e,t,n[t])}))}return e}}}])

//# sourceMappingURL=84-c-33e13fce87.js.map