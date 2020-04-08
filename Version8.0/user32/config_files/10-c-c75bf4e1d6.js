(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[10],{"5Shj":function(t,e,n){"use strict"
var o=n("Ff2n")
var r=n("1OyB")
var a=n("vuIU")
var i=n("md7G")
var c=n("foSv")
var f=n("Ji7U")
var s=n("q1tI")
var u=n.n(s)
var p=n("17x9")
var d=n.n(p)
var l=n("u9uf")
var v=n("J2CL")
var h=n("nAyT")
var m=n("oXx0")
var g=n("bZJi")
var b=n("AdN2")
var y=function(t){var e=t.typography,n=t.spacing
return{fontFamily:e.fontFamily,fontWeight:e.fontWeightNormal,fontSize:e.fontSizeSmall,padding:n.small}}
n.d(e,"a",(function(){return k}))
var w,O,T,j,S,C
var N={componentId:"eZLSb",template:function(t){return"\n\n.eZLSb_bGBk{box-sizing:border-box;display:block;font-family:".concat(t.fontFamily||"inherit",";font-size:").concat(t.fontSize||"inherit",";font-weight:").concat(t.fontWeight||"inherit",";padding:").concat(t.padding||"inherit","}")},root:"eZLSb_bGBk"}
var k=(w=Object(h["a"])("7.0.0",null,"Use Tooltip from ui-tooltip instead."),O=Object(m["a"])(),T=Object(v["themeable"])(y,N),w(j=O(j=T(j=(C=S=function(t){Object(f["a"])(e,t)
function e(){Object(r["a"])(this,e)
return Object(i["a"])(this,Object(c["a"])(e).apply(this,arguments))}Object(a["a"])(e,[{key:"render",value:function(){var t=this.props,e=t.children,n=t.tip,r=t.variant,a=t.on,i=t.placement,c=t.mountNode,f=t.positionTarget,s=t.constrain,p=Object(o["a"])(t,["children","tip","variant","on","placement","mountNode","positionTarget","constrain"])
return u.a.createElement(g["a"],Object.assign({},p,{renderTip:n,on:a,color:"inverse"===r?"primary":"primary-inverse",placement:i,mountNode:c,positionTarget:f,constrain:s}),e)}}])
e.displayName="Tooltip"
return e}(s["Component"]),S.propTypes={children:d.a.oneOfType([d.a.node,d.a.func]).isRequired,tip:d.a.node.isRequired,as:d.a.elementType,on:d.a.oneOfType([d.a.oneOf(["click","hover","focus"]),d.a.arrayOf(d.a.oneOf(["click","hover","focus"]))]),variant:d.a.oneOf(["default","inverse"]),placement:l["a"].placement,mountNode:l["a"].mountNode,positionTarget:d.a.oneOfType([b["a"],d.a.func]),constrain:l["a"].constrain},S.defaultProps={on:void 0,variant:"inverse",placement:"top",mountNode:null,positionTarget:void 0,constrain:"window"},C))||j)||j)||j)},AXvA:function(t,e,n){"use strict"
n.d(e,"a",(function(){return r}))
var o=n("HMVb")
function r(t,e){var n=Object.keys(t)
if(1!==n.length)throw new Error("Expected exactly one key in query object.")
var r=n[0]
var i=["minHeight","maxHeight","minWidth","maxWidth"]
if(-1===i.indexOf(r))throw new Error("Invalid key `".concat(r,"` in query object. Valid keys should consist of one of the following: ")+"".concat(i.join(", ")," (case sensitive)"))
var c=t[r]
if("string"!==typeof c&&"number"!==typeof c)throw new Error("The value of the query object must be a string or number.")
if(!c)throw new Error("No value supplied for query object")
return"(".concat(a(r.toLowerCase()),": ").concat(Object(o["a"])(c,e),"px)")}function a(t){return t.slice(0,3)+"-"+t.slice(3)}},HMVb:function(t,e,n){"use strict"
var o=n("ODXe")
var r=n("i/8D")
var a=n("DUTp")
var i=n("IPIv")
var c={}
function f(t,e){if(!r["a"])return 16
var n=t||Object(a["a"])(t).documentElement
if(!e&&c[n])return c[n]
var o=parseInt(Object(i["a"])(n).getPropertyValue("font-size"))
c[n]=o
return o}var s=n("CyAq")
n.d(e,"a",(function(){return u}))
function u(t,e){var n=e||document.body
if(!t||"number"===typeof t)return t
var r=Object(s["a"])(t),a=Object(o["a"])(r,2),i=a[0],c=a[1]
return"rem"===c?i*f():"em"===c?i*f(n):i}},bZJi:function(t,e,n){"use strict"
var o=n("Ff2n")
var r=n("VTBJ")
var a=n("1OyB")
var i=n("vuIU")
var c=n("md7G")
var f=n("foSv")
var s=n("Ji7U")
var u=n("q1tI")
var p=n.n(u)
var d=n("17x9")
var l=n.n(d)
var v=n("nAyT")
var h=n("KgFQ")
var m=n("jtGx")
var g=n("sQ3t")
var b=n("E+IV")
var y=n("UCAh")
var w=n("BTe1")
var O=n("J2CL")
var T=n("oXx0")
var j=n("jsCG")
var S=n("AdN2")
var C=function(t){var e=t.typography,n=t.spacing
return{fontFamily:e.fontFamily,fontWeight:e.fontWeightNormal,fontSize:e.fontSizeSmall,padding:n.small}}
n.d(e,"a",(function(){return A}))
var N,k,x,E,F,I
var W={componentId:"eZLSb",template:function(t){return"\n\n.eZLSb_bGBk{box-sizing:border-box;display:block;font-family:".concat(t.fontFamily||"inherit",";font-size:").concat(t.fontSize||"inherit",";font-weight:").concat(t.fontWeight||"inherit",";padding:").concat(t.padding||"inherit","}")},root:"eZLSb_bGBk"}
var A=(N=Object(v["a"])("8.0.0",{tip:"renderTip",variant:"color"}),k=Object(T["a"])(),x=Object(O["themeable"])(C,W),N(E=k(E=x(E=(I=F=function(t){Object(s["a"])(e,t)
function e(){var t
var n
Object(a["a"])(this,e)
for(var o=arguments.length,r=new Array(o),i=0;i<o;i++)r[i]=arguments[i]
n=Object(c["a"])(this,(t=Object(f["a"])(e)).call.apply(t,[this].concat(r)))
n._id=Object(w["a"])("Tooltip")
n.state={hasFocus:false}
n.handleFocus=function(t){n.setState({hasFocus:true})}
n.handleBlur=function(t){n.setState({hasFocus:false})}
return n}Object(i["a"])(e,[{key:"renderTrigger",value:function(){var t=this.props,n=t.children,o=t.as
var a=this.state.hasFocus
var i={"aria-describedby":this._id}
if(o){var c=Object(h["a"])(e,this.props)
var f=Object(m["a"])(this.props,e.propTypes)
return p.a.createElement(c,Object.assign({},f,i),n)}return"function"===typeof n?n({focused:a,getTriggerProps:function(t){return Object(r["a"])({},i,{},t)}}):Object(g["a"])(this.props.children,i)}},{key:"render",value:function(){var t=this
var e=this.props,n=e.renderTip,r=e.isShowingContent,a=e.defaultIsShowingContent,i=e.on,c=e.placement,f=e.mountNode,s=e.constrain,u=e.offsetX,d=e.offsetY,l=e.positionTarget,v=e.onShowContent,h=e.onHideContent,g=e.tip,y=(e.variant,Object(o["a"])(e,["renderTip","isShowingContent","defaultIsShowingContent","on","placement","mountNode","constrain","offsetX","offsetY","positionTarget","onShowContent","onHideContent","tip","variant"]))
var w=this.props.variant
w=w?"default"===w?"primary-inverse":"primary":this.props.color
return p.a.createElement(j["a"],Object.assign({},Object(m["b"])(y),{isShowingContent:r,defaultIsShowingContent:a,on:i,shouldRenderOffscreen:true,shouldReturnFocus:false,placement:c,color:"primary"===w?"primary-inverse":"primary",mountNode:f,constrain:s,shadow:"none",offsetX:u,offsetY:d,positionTarget:l,renderTrigger:function(){return t.renderTrigger()},onShowContent:v,onHideContent:h,onFocus:this.handleFocus,onBlur:this.handleBlur}),p.a.createElement("span",{id:this._id,className:W.root,role:"tooltip"},n?Object(b["a"])(n):g))}}])
e.displayName="Tooltip"
return e}(u["Component"]),F.propTypes={children:l.a.oneOfType([l.a.node,l.a.func]).isRequired,renderTip:l.a.oneOfType([l.a.node,l.a.func]),isShowingContent:l.a.bool,defaultIsShowingContent:l.a.bool,as:l.a.elementType,on:l.a.oneOfType([l.a.oneOf(["click","hover","focus"]),l.a.arrayOf(l.a.oneOf(["click","hover","focus"]))]),color:l.a.oneOf(["primary","primary-inverse"]),placement:y["a"].placement,mountNode:y["a"].mountNode,constrain:y["a"].constrain,offsetX:l.a.oneOfType([l.a.string,l.a.number]),offsetY:l.a.oneOfType([l.a.string,l.a.number]),positionTarget:l.a.oneOfType([S["a"],l.a.func]),onShowContent:l.a.func,onHideContent:l.a.func,tip:l.a.node,variant:l.a.oneOf(["default","inverse"])},F.defaultProps={renderTip:void 0,isShowingContent:void 0,defaultIsShowingContent:false,on:void 0,color:"primary",placement:"top",mountNode:null,constrain:"window",offsetX:0,offsetY:0,positionTarget:void 0,onShowContent:function(t){},onHideContent:function(t,e){e.documentClick}},I))||E)||E)||E)},eGSd:function(t,e,n){"use strict"
n.d(e,"a",(function(){return o}))
function o(t){var e=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0
var n=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{}
var o,r,a,i
var c=0
var f=[]
var s=false
if("function"!==typeof t)throw new TypeError("Expected a function")
var u=!!n.leading
var p="maxWait"in n
var d=!("trailing"in n)||!!n.trailing
var l=p?Math.max(+n.maxWait||0,e):0
function v(e){var n=o
var i=r
o=r=void 0
c=e
if(true!==s){a=t.apply(i,n)
return a}}function h(t){c=t
f.push(setTimeout(b,e))
return u?v(t):a}function m(t){var n=t-i
var o=t-c
var r=e-n
return p?Math.min(r,l-o):r}function g(t){var n=t-i
var o=t-c
return"undefined"===typeof i||n>=e||n<0||p&&o>=l}function b(){var t=Date.now()
if(g(t))return y(t)
f.push(setTimeout(b,m(t)))}function y(t){T()
if(d&&o)return v(t)
o=r=void 0
return a}function w(){s=true
T()
c=0
o=i=r=void 0}function O(){return 0===f.length?a:y(Date.now())}function T(){f.forEach((function(t){return clearTimeout(t)}))
f=[]}function j(){var t=Date.now()
var n=g(t)
for(var c=arguments.length,s=new Array(c),u=0;u<c;u++)s[u]=arguments[u]
o=s
r=this
i=t
if(n){if(0===f.length)return h(i)
if(p){f.push(setTimeout(b,e))
return v(i)}}0===f.length&&f.push(setTimeout(b,e))
return a}j.cancel=w
j.flush=O
return j}},gCYW:function(t,e,n){"use strict"
n.d(e,"a",(function(){return c}))
var o=n("QF4Q")
var r=n("i/8D")
var a=n("EgqM")
var i=n("DUTp")
function c(t){var e={top:0,left:0,height:0,width:0}
if(!r["a"])return e
var n=Object(o["a"])(t)
if(!n)return e
if(n===window)return{left:window.pageXOffset,top:window.pageYOffset,width:window.innerWidth,height:window.innerHeight,right:window.innerWidth+window.pageXOffset,bottom:window.innerHeight+window.pageYOffset}
var f=t===document?document:Object(i["a"])(n)
var s=f&&f.documentElement
if(!s||!Object(a["a"])(s,n))return e
var u=n.getBoundingClientRect()
var p
for(p in u)e[p]=u[p]
if(f!==document){var d=f.defaultView.frameElement
if(d){var l=c(d)
e.top+=l.top
e.bottom+=l.top
e.left+=l.left
e.right+=l.left}}return{top:e.top+(window.pageYOffset||s.scrollTop)-(s.clientTop||0),left:e.left+(window.pageXOffset||s.scrollLeft)-(s.clientLeft||0),width:(null==e.width?n.offsetWidth:e.width)||0,height:(null==e.height?n.offsetHeight:e.height)||0,right:f.body.clientWidth-e.width-e.left,bottom:f.body.clientHeight-e.height-e.top}}},u9uf:function(t,e,n){"use strict"
n.d(e,"a",(function(){return c}))
var o=n("17x9")
var r=n.n(o)
var a=n("AdN2")
var i=n("AXvA")
var c={validQuery:function(t,e,n){try{Object(i["a"])(t[e])}catch(t){return new Error("Invalid query prop supplied to `".concat(n,"`. ").concat(t.message))}},placement:r.a.oneOf(["top","end","bottom","start","top start","start top","start center","start bottom","bottom start","bottom center","bottom end","end bottom","end center","end top","top end","top center","center end","center start","top stretch","bottom stretch","end stretch","start stretch","offscreen"]),mountNode:r.a.oneOfType([a["a"],r.a.func]),constrain:r.a.oneOfType([a["a"],r.a.func,r.a.oneOf(["window","scroll-parent","parent","none"])])}}}])

//# sourceMappingURL=10-c-c75bf4e1d6.js.map