(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[119],{"18NU":function(e,t,r){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=a
var n=r("fgJ1")
function a(e,t){var r={}
Object.keys(t).forEach((function(a){r[(0,n.camelize)("".concat(e,"-").concat(a))]=t[a]}))
return r}},"3gDV":function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=o
var a=n(r("MVZn"))
var i=n(r("18NU"))
function o(e){var t=e.typography,r=e.colors,n=e.borders,o=e.spacing,d=e.shadows,l=e.stacking,c=e.breakpoints
return(0,a.default)({fontFamily:t.fontFamily,color:r.oxford,background:r.white,borderColor:r.tiara,colorInverse:r.white,backgroundInverse:r.oxford,borderColorInverse:"transparent",debugOutlineColor:r.borderDebug,backgroundLight:r.porcelain,borderStyle:n.style,arrowSize:"0.5rem",xSmallMaxWidth:c.xSmall,smallMaxWidth:c.small,mediumMaxWidth:c.medium,largeMaxWidth:c.large},(0,i.default)("margin",o),(0,i.default)("padding",o),(0,i.default)("shadow",d),(0,i.default)("stacking",l),(0,i.default)("border",n))}},Bvk4:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=void 0
var a=n(r("Od2c"))
var i=n(r("NGgq"))
var o
var d=a.default?function(){var e=document.documentElement
var t=e.getAttribute("dir")||(0,i.default)(e).direction
if(!o){o=new MutationObserver((function(){t=e.getAttribute("dir")}))
o.observe(e,{attributes:true})}return function(r){if("undefined"===typeof r||r===e)return t
return(0,i.default)(r).direction}}():function(){}
t.default=d},E8fo:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=o
var a=n(r("kH7O"))
var i=n(r("dnp3"))
function o(e){var t=e&&(0,a.default)(e)
var r=(0,i.default)(t)
return r&&(r.defaultView||r.parentWindow)}},J26S:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=o
r("k9XI")
var a=n(r("cZ6H"))
var i=r("fgJ1")
function o(e,t,r,n){if("string"!==typeof r||(0,a.default)(t))return
return r.split(" ").map((function(r){if("auto"===r||"0"===r)return r
if("none"===r)return"0"
var a=(0,i.camelize)("".concat(n,"-").concat(r))
var o=t[a]
"[".concat(e,"] '").concat(a,"' is an invalid '").concat(n,"' value.")
return o||"0"})).join(" ").trim()}},NGgq:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=d
var a=n(r("kH7O"))
var i=n(r("E8fo"))
var o=n(r("Od2c"))
function d(e){var t={}
if(o.default){var r=e&&(0,a.default)(e)
t=r?(0,i.default)(e).getComputedStyle(r):{}}return t}},SOtm:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.makeTextDirectionContext=c
t.getTextDirectionContext=u
t.TextDirectionContextTypes=t.DIRECTION=void 0
var a=n(r("lSNA"))
var i=n(r("17x9"))
var o="@@bidirectional"
var d={ltr:"ltr",rtl:"rtl"}
t.DIRECTION=d
var l=(0,a.default)({},o,i.default.shape({dir:i.default.oneOf(Object.values(d))}))
t.TextDirectionContextTypes=l
function c(e){return(0,a.default)({},o,{dir:e})}function u(e){if(e)return e[o]}},U8gY:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.shorthandPropType=v
t.default=t.SPACING=t.SIZES=t.BACKGROUNDS=t.BORDER_RADII=t.BORDER_WIDTHS=t.STACKING_TYPES=t.SHADOW_TYPES=void 0
var a=n(r("17x9"))
var i={resting:"resting",above:"above",topmost:"topmost",none:"none"}
t.SHADOW_TYPES=i
var o={deepest:"deepest",below:"below",resting:"resting",above:"above",topmost:"topmost"}
t.STACKING_TYPES=o
var d={0:"0",none:"none",small:"small",medium:"medium",large:"large"}
t.BORDER_WIDTHS=d
var l={0:"0",none:"none",small:"small",medium:"medium",large:"large"}
t.BORDER_RADII=l
var c={default:"default",inverse:"inverse",transparent:"transparent"}
t.BACKGROUNDS=c
var u={xSmall:"x-small",small:"small",medium:"medium",large:"large",xLarge:"x-large"}
t.SIZES=u
var s={0:"0",none:"none",auto:"auto",xxxSmall:"xxx-small",xxSmall:"xx-small",xSmall:"x-small",small:"small",medium:"medium",large:"large",xLarge:"x-large",xxLarge:"xx-large"}
t.SPACING=s
var f={shadow:a.default.oneOf(Object.values(i)),stacking:a.default.oneOf(Object.values(o)),borderWidth:v(Object.values(d)),borderRadius:v(Object.values(l)),background:a.default.oneOf(Object.values(c)),size:a.default.oneOf(Object.values(u)),spacing:v(Object.values(s))}
t.default=f
function v(e){return function(t,r,n,a){var i=t[r]
if("undefined"===typeof i)return
var o=typeof i
if("string"!==o)return new Error("Invalid ".concat(a," `").concat(r,"` of type `").concat(o,"` supplied to `").concat(n,"`, expected ")+"a string.")
var d=i.split(" ")
var l=d.length
if(!(l>0&&l<5))return new Error("Invalid ".concat(a," `").concat(r,"` `").concat(i,"` supplied to `").concat(n,"`, expected ")+"between one and four of the following valid values: `".concat(e.join(", "),"`."))
for(var c=0;c<l;c++){var u=e.indexOf(d[c])
if(-1===u)return new Error("Invalid ".concat(a," `").concat(r,"` `").concat(d[c],"` supplied to `").concat(n,"`, expected ")+"a one of `".concat(e.join(", "),"`."))}}}},ZUxZ:function(e,t,r){"use strict"
var n=r("284h")
var a=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=void 0
var i=a(r("MVZn"))
var o=a(r("lSNA"))
var d=a(r("lwsE"))
var l=a(r("W8MJ"))
var c=a(r("a1gu"))
var u=a(r("Nsbk"))
var s=a(r("7W2i"))
r("k9XI")
var f=n(r("q1tI"))
var v=a(r("17x9"))
var b=a(r("TSYQ"))
var h=a(r("NWYN"))
var g=a(r("J26S"))
a(r("NGgq"))
var p=a(r("U8gY"))
var m=r("zqXc")
var x=n(r("uJP3"))
var _=r("YGEp")
var z=a(r("dx2O"))
var A=a(r("iV4t"))
var y=r("4dGC")
var X=a(r("3gDV"))
var w={componentId:"czbXA",template:function(e){return"\n\n.czbXA_bGBk{box-sizing:border-box;font-family:".concat(e.fontFamily||"inherit",";max-width:100%}\n\n.czbXA_UeJS{display:block}\n\n.czbXA_cuDs{display:inline-block;vertical-align:middle}\n\n.czbXA_desw{display:flex}\n\n.czbXA_cKQL{display:inline-flex;vertical-align:middle}\n\n.czbXA_EMjX{text-align:start}\n\n[dir=ltr] .czbXA_EMjX{text-align:left}\n\n[dir=rtl] .czbXA_EMjX{text-align:right}\n\n.czbXA_ImeN,[dir=ltr] .czbXA_ImeN,[dir=rtl] .czbXA_ImeN{text-align:center}\n\n.czbXA_dBtH{text-align:end}\n\n[dir=ltr] .czbXA_dBtH{text-align:right}\n\n[dir=rtl] .czbXA_dBtH{text-align:left}\n\n.czbXA_bQna{outline:0.0625rem dashed ").concat(e.debugOutlineColor||"inherit","}\n\n.czbXA_dHtp{border-color:").concat(e.borderColor||"inherit",";border-style:").concat(e.borderStyle||"inherit","}\n\n.czbXA_dHtp.czbXA_fzxW{border-color:").concat(e.borderColorInverse||"inherit","}\n\n.czbXA_fZwI{background:").concat(e.background||"inherit",";color:").concat(e.color||"inherit","}\n\n.czbXA_fzxW{background:").concat(e.backgroundInverse||"inherit",";color:").concat(e.colorInverse||"inherit","}\n\n.czbXA_dUgE{background:").concat(e.backgroundLight||"inherit",";color:").concat(e.color||"inherit","}\n\n.czbXA_dIzR{max-width:").concat(e.xSmallMaxWidth||"inherit","}\n\n.czbXA_VCXp{max-width:").concat(e.smallMaxWidth||"inherit","}\n\n.czbXA_fKcQ{max-width:").concat(e.mediumMaxWidth||"inherit","}\n\n.czbXA_cnhd{max-width:").concat(e.largeMaxWidth||"inherit","}\n\n.czbXA_GJxv{max-width:100vw}\n\n.czbXA_fQrx{z-index:").concat(e.stackingTopmost||"inherit","}\n\n.czbXA_dtZX{z-index:").concat(e.stackingAbove||"inherit","}\n\n.czbXA_fCiV{z-index:").concat(e.stackingBelow||"inherit","}\n\n.czbXA_dJEE{z-index:").concat(e.stackingDeepest||"inherit","}\n\n.czbXA_fxuY{box-shadow:").concat(e.shadowTopmost||"inherit","}\n\n.czbXA_bxuL{box-shadow:").concat(e.shadowResting||"inherit","}\n\n.czbXA_bIta{box-shadow:").concat(e.shadowAbove||"inherit","}\n\n.czbXA_fhgP{overflow-x:hidden}\n\n.czbXA_dzYG{overflow-x:auto}\n\n.czbXA_divt{overflow-y:hidden}\n\n.czbXA_fKlg{overflow-y:auto}")},root:"czbXA_bGBk","display--block":"czbXA_UeJS","display--inline-block":"czbXA_cuDs","display--flex":"czbXA_desw","display--inline-flex":"czbXA_cKQL","textAlign--start":"czbXA_EMjX","textAlign--center":"czbXA_ImeN","textAlign--end":"czbXA_dBtH",debug:"czbXA_bQna",border:"czbXA_dHtp","background--inverse":"czbXA_fzxW","background--default":"czbXA_fZwI","background--light":"czbXA_dUgE","size--x-small":"czbXA_dIzR","size--small":"czbXA_VCXp","size--medium":"czbXA_fKcQ","size--large":"czbXA_cnhd","size--fullscreen":"czbXA_GJxv","stacking--topmost":"czbXA_fQrx","stacking--above":"czbXA_dtZX","stacking--below":"czbXA_fCiV","stacking--deepest":"czbXA_dJEE","shadow--topmost":"czbXA_fxuY","shadow--resting":"czbXA_bxuL","shadow--above":"czbXA_bIta","overflowX--hidden":"czbXA_fhgP","overflowX--auto":"czbXA_dzYG","overflowY--hidden":"czbXA_divt","overflowY--auto":"czbXA_fKlg"}
var O=function(e){(0,s.default)(t,e)
function t(){var e
var r;(0,d.default)(this,t)
for(var n=arguments.length,a=new Array(n),i=0;i<n;i++)a[i]=arguments[i]
r=(0,c.default)(this,(e=(0,u.default)(t)).call.apply(e,[this].concat(a)))
r.handleElementRef=function(e){"function"===typeof r.props.elementRef&&r.props.elementRef(e)
r._element=e}
return r}(0,l.default)(t,[{key:"componentDidMount",value:function(){this._element,this.props.margin}},{key:"render",value:function(){var e
var r=this.props,n=r.children,a=r.textAlign,d=r.background,l=r.display,c=r.debug,u=r.width,s=r.height,v=r.minWidth,h=r.minHeight,g=r.maxWidth,p=r.maxHeight,m=r.overflowX,x=r.overflowY,_=r.stacking,z=r.shadow,X=r.size,O=r.className
var k=(0,A.default)(t,this.props)
return f.default.createElement(k,Object.assign({},(0,y.omitProps)(this.props,t.propTypes),{className:(0,b.default)((e={},(0,o.default)(e,w.root,true),(0,o.default)(e,w.border,this.hasBorder),(0,o.default)(e,w.debug,c),(0,o.default)(e,w["textAlign--".concat(a)],a),(0,o.default)(e,w["background--".concat(d)],d),(0,o.default)(e,w["display--".concat(l)],l&&"auto"!==l),(0,o.default)(e,w["overflowX--".concat(m)],m&&"visible"!==m),(0,o.default)(e,w["overflowY--".concat(x)],x&&"visible"!==x),(0,o.default)(e,w["size--".concat(X)],X&&"auto"!==X),(0,o.default)(e,w["stacking--".concat(_)],_),(0,o.default)(e,w["shadow--".concat(z)],z&&"none"!==z),(0,o.default)(e,O,O),e)),style:(0,i.default)({},this.spacingStyle,this.borderStyle,{width:u,height:s,minWidth:v,minHeight:h,maxWidth:g,maxHeight:p},this.styleProps),ref:this.handleElementRef}),n)}},{key:"hasBorder",get:function(){var e=this.props.borderWidth
return e&&"0"!==e&&"none"!==e}},{key:"borderStyle",get:function(){var e=this.props,t=e.borderRadius,r=e.borderWidth
if(this.dir===x.DIRECTION.rtl){t=(0,m.mirrorShorthandCorners)(t)
r=(0,m.mirrorShorthandEdges)(r)}return{borderRadius:(0,g.default)("View",this.theme,t,"borderRadius"),borderWidth:(0,g.default)("View",this.theme,r,"borderWidth")}}},{key:"spacingStyle",get:function(){var e=this.props,t=e.margin,r=e.padding
if("rtl"===this.dir){t=(0,m.mirrorShorthandEdges)(t)
r=(0,m.mirrorShorthandEdges)(r)}return{margin:(0,g.default)("View",this.theme,t,"margin"),padding:(0,g.default)("View",this.theme,r,"padding")}}},{key:"styleProps",get:function(){var e=this.props,t=e.cursor,r=e.style
var n=(0,y.pickProps)(r||{},{},["top","left","position","display","transform","overflow","minWidth","minHeight","filter","flexBasis","backgroundImage"])
t&&(n.cursor=t)
return n}}])
t.displayName="View"
return t}(f.Component)
O.propTypes={as:v.default.elementType,elementRef:v.default.func,display:v.default.oneOf(["auto","block","inline-block","flex","inline-flex"]),overflowX:v.default.oneOf(["auto","hidden","visible"]),overflowY:v.default.oneOf(["auto","hidden","visible"]),margin:p.default.spacing,padding:p.default.spacing,height:v.default.oneOfType([v.default.string,v.default.number]),width:v.default.oneOfType([v.default.string,v.default.number]),maxHeight:v.default.oneOfType([v.default.string,v.default.number]),maxWidth:v.default.oneOfType([v.default.string,v.default.number]),minHeight:v.default.oneOfType([v.default.string,v.default.number]),minWidth:v.default.oneOfType([v.default.string,v.default.number]),children:v.default.node,textAlign:v.default.oneOf(["start","center","end"]),borderWidth:p.default.borderWidth,borderRadius:p.default.borderWidth,background:v.default.oneOf(["default","inverse","light","transparent"]),shadow:p.default.shadow,stacking:p.default.stacking,cursor:_.cursor,debug:v.default.bool}
O.defaultProps={display:"auto",textAlign:void 0,overflowX:"visible",overflowY:"visible",shadow:void 0,stacking:void 0,debug:false,cursor:void 0,borderWidth:void 0,borderRadius:void 0,margin:void 0,padding:void 0,elementRef:void 0,background:void 0,children:null,width:void 0,height:void 0,maxWidth:void 0,maxHeight:void 0,minWidth:void 0,minHeight:void 0}
var k=(0,z.default)("5.4.0",{size:"maxWidth"})((0,x.default)()((0,h.default)(X.default,w)(O)))
k.omitViewProps=function(e,t){false
return(0,y.omitProps)(e,k.propTypes)}
var T=k
t.default=T},dnp3:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.default=i
var a=n(r("kH7O"))
function i(e){var t=e&&(0,a.default)(e)
return t&&t.ownerDocument||document}},fgJ1:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
t.camelize=i
t.pascalize=o
var a=n(r("7/N2"))
function i(e){return e.replace(/-([a-z])/g,(function(e){return e[1].toUpperCase()}))}function o(e){return(0,a.default)(i(e))}},uJP3:function(e,t,r){"use strict"
var n=r("TqRt")
Object.defineProperty(t,"__esModule",{value:true})
Object.defineProperty(t,"DIRECTION",{enumerable:true,get:function(){return f.DIRECTION}})
t.default=void 0
var a=n(r("MVZn"))
var i=n(r("lwsE"))
var o=n(r("W8MJ"))
var d=n(r("a1gu"))
var l=n(r("Nsbk"))
var c=n(r("7W2i"))
var u=n(r("17x9"))
var s=n(r("b7MV"))
var f=r("SOtm")
var v=n(r("Bvk4"))
var b=(0,s.default)((function(e){var t,r
return r=t=function(e){(0,c.default)(t,e)
function t(){var e
var r;(0,i.default)(this,t)
for(var n=arguments.length,a=new Array(n),o=0;o<n;o++)a[o]=arguments[o]
r=(0,d.default)(this,(e=(0,l.default)(t)).call.apply(e,[this].concat(a)))
r._defaultDirection=(0,v.default)()
return r}(0,o.default)(t,[{key:"dir",get:function(){var e=(0,f.getTextDirectionContext)(this.context)||{}
return e.dir||this.props.dir||this._defaultDirection}},{key:"rtl",get:function(){return this.dir===f.DIRECTION.rtl}},{key:"ltr",get:function(){return this.dir===f.DIRECTION.ltr}}])
return t}(e),t.propTypes=(0,a.default)({},e.propTypes,{dir:u.default.oneOf(Object.values(f.DIRECTION))}),t.contextTypes=(0,a.default)({},e.contextTypes,f.TextDirectionContextTypes),r}))
t.default=b},zqXc:function(e,t,r){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.mirrorShorthandEdges=n
t.mirrorShorthandCorners=a
function n(e){if("string"!==typeof e)return
var t=e.split(" ")
if(4===t.length){var r=[t[3],t[1]]
t[1]=r[0]
t[3]=r[1]}return t.join(" ")}function a(e){if("string"!==typeof e)return
var t=e.split(" ")
if(2===t.length){var r=[t[1],t[0]]
t[0]=r[0]
t[1]=r[1]}3===t.length&&t.push(t[1])
if(4===t.length){var n=[t[1],t[0],t[3],t[2]]
t[0]=n[0]
t[1]=n[1]
t[2]=n[2]
t[3]=n[3]}return t.join(" ")}}}])

//# sourceMappingURL=119-c-c1939e16d2.js.map