(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[38,630],{"6vK/":function(e,t,n){"use strict"
var r=n("rePB")
var a=n("Ff2n")
var i=n("1OyB")
var o=n("vuIU")
var c=n("md7G")
var s=n("foSv")
var l=n("Ji7U")
n("DEX3")
var d=n("q1tI")
var u=n.n(d)
var h=n("17x9")
var f=n.n(h)
var b=n("TSYQ")
var p=n.n(b)
var m=n("3zPy")
var v=n.n(m)
var y=n("n12J")
var g=n("PJ1B")
var _=n("J2CL")
var x=n("dpqJ")
var O=n("cClk")
var k=n("nAyT")
var S=n("II2N")
var j=n("4Awi")
var w=n("jtGx")
var C=n("BTe1")
var A=n("oXx0")
function B(e){var t=e.colors,n=e.typography
e.spacing
return{fontFamily:n.fontFamily,fontWeight:n.fontWeightNormal,lineHeight:n.lineHeightCondensed,fontSize:n.fontSizeMedium,simpleColor:t.textBrand,simpleSelectedBackground:t.backgroundLightest,simpleSelectedBorderColor:t.borderMedium,simpleSelectedColor:t.textDarkest,minimalColor:t.textDarkest,minimalHoverBorderColor:t.borderMedium,minimalSelectedBorderColor:t.borderBrand}}B.canvas=function(e){return{simpleColor:e["ic-brand-primary"],simpleSelectedColor:e["ic-brand-font-color-dark"],minimalColor:e["ic-brand-font-color-dark"],minimalSelectedBorderColor:e["ic-brand-primary"]}}
var I,z,F,L,H
var T={componentId:"cyAHS",template:function(e){return"\n\n.cyAHS_bGBk{-moz-user-select:none;-ms-user-select:none;-webkit-user-select:none;cursor:pointer;font-family:".concat(e.fontFamily||"inherit",";font-size:").concat(e.fontSize||"inherit",";font-weight:").concat(e.fontWeight||"inherit",";line-height:").concat(e.lineHeight||"inherit",";user-select:none}\n\n.cyAHS_bGBk[aria-disabled],.cyAHS_bGBk[aria-selected]{cursor:default}\n\n.cyAHS_bGBk[aria-disabled]{opacity:0.5}\n\n.cyAHS_bGBk:focus{outline:none}\n\n.cyAHS_GKUc,.cyAHS_cAug{white-space:nowrap}\n\n.cyAHS_cAug{border:0.0625rem solid transparent;border-top-left-radius:0.1875rem;border-top-right-radius:0.1875rem;box-sizing:border-box;color:").concat(e.simpleColor||"inherit",";margin-bottom:-0.0625rem;margin-right:0.2em;padding:0.7em 1em}\n\n.cyAHS_cAug:first-of-type{margin-left:0}\n\n.cyAHS_cAug:not([aria-selected]):not([aria-disabled]):hover,.cyAHS_cAug[aria-selected]{background:").concat(e.simpleSelectedBackground||"inherit",";border-color:").concat(e.simpleSelectedBorderColor||"inherit","}\n\n.cyAHS_cAug:hover,.cyAHS_cAug[aria-disabled],.cyAHS_cAug[aria-selected]{color:").concat(e.simpleSelectedColor||"inherit","}\n\n.cyAHS_cAug[aria-selected]{border-bottom-color:").concat(e.simpleSelectedBackground||"inherit",";z-index:1}\n\n@keyframes cyAHS_epeh{to{opacity:1;transform:translateZ(0) scaleX(1)}}\n\n.cyAHS_GKUc{color:").concat(e.minimalColor||"inherit",';line-height:1;padding:1rem 1.25rem;position:relative;z-index:1}\n\n.cyAHS_GKUc:after{bottom:-0.0625rem;content:"";height:0.25rem;left:0;opacity:0;position:absolute;transform:translateZ(0) scaleX(0.01);width:100%}\n\n.cyAHS_GKUc[aria-disabled]{font-weight:400}\n\n.cyAHS_GKUc:not([aria-selected]):not([aria-disabled]):hover{border-bottom-color:').concat(e.minimalHoverBorderColor||"inherit","}\n\n.cyAHS_GKUc[aria-selected]:after{animation-duration:0.2s;animation-fill-mode:forwards;animation-name:cyAHS_epeh;animation-timing-function:ease-out;background-color:").concat(e.minimalSelectedBorderColor||"inherit","}")},root:"cyAHS_bGBk",minimal:"cyAHS_GKUc",simple:"cyAHS_cAug",selectedTab:"cyAHS_epeh"}
var D=(I=Object(A["a"])(),z=Object(_["themeable"])(B,T),I(F=z(F=(H=L=function(e){Object(l["a"])(t,e)
function t(){var e
var n
Object(i["a"])(this,t)
for(var r=arguments.length,a=new Array(r),o=0;o<r;o++)a[o]=arguments[o]
n=Object(c["a"])(this,(e=Object(s["a"])(t)).call.apply(e,[this].concat(a)))
n.handleClick=function(e){if(n.props.disabled)return
n.props.onClick(n.props.index,e)}
n.handleKeyDown=function(e){if(n.props.disabled)return
n.props.onKeyDown(n.props.index,e)}
return n}Object(o["a"])(t,[{key:"render",value:function(){var e
var t=this.props,n=t.id,i=t.variant,o=t.selected,c=t.disabled,s=t.controls,l=t.children,d=Object(a["a"])(t,["id","variant","selected","disabled","controls","children"])
return u.a.createElement(y["a"],Object.assign({},Object(w["b"])(d),{as:"div",role:"tab",id:n,onClick:this.handleClick,onKeyDown:this.handleKeyDown,className:p()((e={},Object(r["a"])(e,T.root,true),Object(r["a"])(e,T[i],true),e)),"aria-selected":o?"true":null,"aria-disabled":c?"true":null,"aria-controls":s,tabIndex:o&&!c?"0":null}),l)}}])
t.displayName="Tab"
return t}(d["Component"]),L.propTypes={variant:f.a.oneOf(["simple","minimal"]),id:f.a.string.isRequired,index:f.a.number.isRequired,controls:f.a.string.isRequired,disabled:f.a.bool,selected:f.a.bool,onClick:f.a.func,onKeyDown:f.a.func,children:f.a.node},L.defaultProps={children:null,variant:"simple",disabled:false,selected:false,onClick:function(){},onKeyDown:function(){}},H))||F)||F)
var G=n("KBqg")
var W=function(e){var t=e.colors,n=e.breakpoints
return{minimalBackground:t.backgroundLightest,small:n.small,medium:n.medium,large:n.large}}
n.d(t,"a",(function(){return N}))
var M,K,U,R,P,E
var V={componentId:"cMXVf",template:function(e){return"\n\n.cMXVf_bXVH{display:flex;flex-flow:row wrap}\n\n.cMXVf_GKUc{background:".concat(e.minimalBackground||"inherit","}")},tabs:"cMXVf_bXVH",minimal:"cMXVf_GKUc"}
var N=(M=Object(k["a"])("7.0.0",null,"Use Tabs from ui-tabs instead."),K=Object(A["a"])(),U=Object(_["themeable"])(W,V),M(R=K(R=U(R=(E=P=function(e){Object(l["a"])(t,e)
function t(e){var n
Object(i["a"])(this,t)
n=Object(c["a"])(this,Object(s["a"])(t).call(this))
n.handleClick=function(e,t){var r=n.getTab(e)
r.props.disabled||n.setSelected(e)}
n.handleKeyDown=function(e,t){var r=n.selectedIndex
var a=false
if(t.keyCode===v.a.codes.up||t.keyCode===v.a.codes.left){r=n.getIndex(r,-1)
a=true}else if(t.keyCode===v.a.codes.down||t.keyCode===v.a.codes.right){r=n.getIndex(r,1)
a=true}a&&t.preventDefault()
n.setSelected(r)}
n.handleFocusableRef=function(e){n._focusable=e}
n.state={}
"undefined"===typeof e.selectedIndex&&(n.state.selectedIndex=e.defaultSelectedIndex)
n._tabs=[]
n._panels=[]
return n}Object(o["a"])(t,[{key:"componentDidMount",value:function(){this.props.focus&&this.focus()}},{key:"componentDidUpdate",value:function(e){this.props.focus&&!e.focus&&this.focus()}},{key:"setSelected",value:function(e){var t=this
var n
this.isValidIndex(e),"[TabList] Invalid tab index: '".concat(e,"'.")
var r=function(){"undefined"!==typeof n&&"function"===typeof t.props.onChange&&t.props.onChange(e,n)}
if("undefined"===typeof this.props.selectedIndex)this.setState((function(t,a){n=t.selectedIndex
if(e!==n){r()
return{selectedIndex:e}}return t}))
else{n=this.props.selectedIndex
e!==n&&r()}}},{key:"getIndex",value:function(e,t){var n=this.tabs.length
var r=t<0?t+n:t
this.isValidIndex(e),"[Tablist] Invalid tab index: '".concat(e,"'")
var a=e
do{a=(a+r)%n}while(this.getTab(a).props.disabled)
return a}},{key:"isValidIndex",value:function(e){return e>=0&&e<this.tabs.length}},{key:"getTab",value:function(e){return this._tabs[e]}},{key:"createTab",value:function(e,t,n,r){var a=this
var i=r.id||t
return Object(d["createElement"])(D,{variant:this.props.variant,ref:function(t){a._tabs[e]=t
"function"===typeof r.tabRef&&r.tabRef(t)},key:"tab-".concat(i),id:"tab-".concat(i),controls:"panel-".concat(i),index:e,selected:n,disabled:r.disabled,children:r.title,onClick:this.handleClick,onKeyDown:this.handleKeyDown})}},{key:"clonePanel",value:function(e,t,n,r){var a=this
var i=r.props.id||t
return Object(S["a"])(r,{ref:function(t){a._panels[e]=t},id:"panel-".concat(i),labelledBy:"tab-".concat(i),selected:n,key:"panel-".concat(i),variant:this.props.variant,padding:r.props.padding||this.props.padding,textAlign:r.props.textAlign||this.props.textAlign,maxHeight:r.maxHeight||this.props.maxHeight,minHeight:r.minHeight||this.props.minHeight})}},{key:"focus",value:function(){this._focusable&&"function"===typeof this._focusable.focus&&this._focusable.focus()}},{key:"render",value:function(){var e=this
var t=[]
var n=[]
var i=this.tabIds
var o=this.props,c=o.children,s=o.size,l=o.maxWidth,d=o.elementRef,h=o.variant,f=o.margin,b=(o.onChange,Object(a["a"])(o,["children","size","maxWidth","elementRef","variant","margin","onChange"]))
var m=u.a.Children.toArray(c).filter((function(e){return Object(j["a"])(e,[G["a"]])})).findIndex((function(t,n){return!t.props.disabled&&n===e.selectedIndex}))
var v=0
m=m>=0?m:0
u.a.Children.forEach(c,(function(r){if(Object(j["a"])(r,[G["a"]])){var a=!r.props.disabled&&m===v
var o=i[v]
n.push(e.createTab(v,o,a,r.props))
t.push(e.clonePanel(v,o,a,r))
v++}else t.push(r)}))
return u.a.createElement(y["a"],Object.assign({},Object(w["b"])(b),{elementRef:d,maxWidth:l||this.theme[s],margin:f,as:"div",className:p()(Object(r["a"])({},V[h],true))}),u.a.createElement(g["a"],{ref:this.handleFocusableRef},(function(e){var t=e.focusVisible
return u.a.createElement(y["a"],{as:"div",display:"flex",position:"relative",borderRadius:"medium",withFocusOutline:t,shouldAnimateFocus:false,role:"tablist",className:V.tabs},n)})),t)}},{key:"selectedIndex",get:function(){return"undefined"===typeof this.props.selectedIndex?this.state.selectedIndex:this.props.selectedIndex}},{key:"tabIds",get:function(){var e=this._tabIds||[]
var t=e.length-this.tabs.length
while(t++<0)e.push(Object(C["a"])("Tab"))
this._tabIds=e
return e}},{key:"tabs",get:function(){return u.a.Children.toArray(this.props.children).map((function(e){return Object(j["a"])(e,[G["a"]])&&e}))}}])
t.displayName="TabList"
return t}(d["Component"]),P.propTypes={children:x["a"].oneOf([G["a"],null]),variant:f.a.oneOf(["simple","minimal"]),defaultSelectedIndex:f.a.number,selectedIndex:Object(O["a"])(f.a.number,"onChange","defaultSelectedIndex"),onChange:f.a.func,focus:f.a.bool,size:f.a.oneOf(["small","medium","large"]),maxWidth:f.a.oneOfType([f.a.string,f.a.number]),maxHeight:f.a.oneOfType([f.a.string,f.a.number]),minHeight:f.a.oneOfType([f.a.string,f.a.number]),margin:_["ThemeablePropTypes"].spacing,padding:_["ThemeablePropTypes"].spacing,textAlign:f.a.oneOf(["start","center","end"]),elementRef:f.a.func},P.defaultProps={variant:"simple",focus:false,defaultSelectedIndex:0,padding:void 0,textAlign:void 0,size:void 0,maxWidth:void 0,maxHeight:void 0,minHeight:void 0,selectedIndex:void 0,onChange:void 0,margin:void 0,children:null,elementRef:function(e){}},P.Panel=G["a"],P.Tab=D,E))||R)||R)||R)},KBqg:function(e,t,n){"use strict"
var r=n("rePB")
var a=n("Ff2n")
var i=n("1OyB")
var o=n("vuIU")
var c=n("md7G")
var s=n("foSv")
var l=n("Ji7U")
var d=n("q1tI")
var u=n.n(d)
var h=n("17x9")
var f=n.n(h)
var b=n("TSYQ")
var p=n.n(b)
var m=n("n12J")
var v=n("oXx0")
var y=n("J2CL")
var g=n("jtGx")
var _=n("XQb/")
function x(e){var t=e.colors,n=e.borders
e.spacing
return{color:t.textDarkest,background:t.backgroundLightest,borderColor:t.borderMedium,borderWidth:n.widthSmall,borderStyle:n.style}}x.canvas=function(e){return{color:e["ic-brand-font-color-dark"]}}
n.d(t,"a",(function(){return A}))
var O,k,S,j,w
var C={componentId:"cDwzl",template:function(e){return"\n\n.cDwzl_caGd,.cDwzl_bGBk{box-sizing:border-box}\n\n.cDwzl_caGd{background:".concat(e.background||"inherit",";border-color:").concat(e.borderColor||"inherit",";border-style:").concat(e.borderStyle||"inherit",";border-width:").concat(e.borderWidth||"inherit",";color:").concat(e.color||"inherit",";width:100%}\n\n.cDwzl_cLQw{overflow:auto}\n\n.cDwzl_GKUc,.cDwzl_cAug{flex-basis:100%;min-width:1px}\n\n.cDwzl_GKUc .cDwzl_caGd,.cDwzl_cAug .cDwzl_caGd{border-bottom:none;border-left:none;border-right:none}")},content:"cDwzl_caGd",root:"cDwzl_bGBk",overflow:"cDwzl_cLQw",minimal:"cDwzl_GKUc",simple:"cDwzl_cAug"}
var A=(O=Object(v["a"])(),k=Object(y["themeable"])(x,C),O(S=k(S=(w=j=function(e){Object(l["a"])(t,e)
function t(){Object(i["a"])(this,t)
return Object(c["a"])(this,Object(s["a"])(t).apply(this,arguments))}Object(o["a"])(t,[{key:"render",value:function(){var e,t
var n=this.props,i=n.selected,o=n.disabled,c=n.labelledBy,s=n.variant,l=n.id,d=n.maxHeight,h=n.padding,f=n.textAlign,b=n.children,v=Object(a["a"])(n,["selected","disabled","labelledBy","variant","id","maxHeight","padding","textAlign","children"])
var y=!i||!!o
return u.a.createElement("div",Object.assign({},Object(g["b"])(v),{className:p()((e={},Object(r["a"])(e,C.root,true),Object(r["a"])(e,C[s],true),e)),role:"tabpanel",id:l,"aria-labelledby":c,"aria-hidden":y?"true":null}),u.a.createElement(_["a"],{type:"fade",in:!y,unmountOnExit:true,transitionExit:false},u.a.createElement(m["a"],{className:p()((t={},Object(r["a"])(t,C.content,true),Object(r["a"])(t,C.overflow,d),t)),maxHeight:d,as:"div",padding:h,textAlign:f},b)))}}])
t.displayName="TabPanel"
return t}(d["Component"]),j.propTypes={title:f.a.node.isRequired,children:f.a.node,variant:f.a.oneOf(["simple","minimal"]),maxHeight:f.a.string,id:f.a.string,labelledBy:f.a.string,selected:f.a.bool,disabled:f.a.bool,padding:y["ThemeablePropTypes"].spacing,textAlign:f.a.oneOf(["start","center","end"]),tabRef:f.a.func},j.defaultProps={children:null,maxHeight:void 0,disabled:false,textAlign:void 0,id:null,variant:"simple",labelledBy:null,selected:false,padding:"small",tabRef:function(e){}},w))||S)||S)},PJ1B:function(e,t,n){"use strict"
var r=n("1OyB")
var a=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var c=n("Ji7U")
n("DEX3")
var s=n("q1tI")
var l=n("17x9")
var d=n.n(l)
var u=n("yfCu")
var h=n("i/8D")
var f={keyboard:"keyboard",pointer:"pointer"}
var b=[]
var p=[]
var m=f.keyboard
var v=0
var y={}
var g=function(e){if("html"===e.target.nodeName.toLowerCase())return
_(m,f.pointer)
b.forEach((function(e){return e.remove()}))}
var _=function(e,t){if(e===t)return
m=t
Object.keys(y).forEach((function(n){return y[n](e,t)}))}
var x=function(){_(m,f.keyboard)}
var O=function(){_(m,f.pointer)}
var k=function(){if(0===b.length){b.push(Object(u["a"])(document,"mousemove",g,true))
b.push(Object(u["a"])(document,"mousedown",g,true))
b.push(Object(u["a"])(document,"mouseup",g,true))
b.push(Object(u["a"])(document,"pointermove",g,true))
b.push(Object(u["a"])(document,"pointerdown",g,true))
b.push(Object(u["a"])(document,"pointerup",g,true))
b.push(Object(u["a"])(document,"touchmove",g,true))
b.push(Object(u["a"])(document,"touchstart",g,true))
b.push(Object(u["a"])(document,"touchend",g,true))}}
var S=function(){if(0===p.length){p.push(Object(u["a"])(document,"keydown",x,true))
p.push(Object(u["a"])(document,"mousedown",O,true))
p.push(Object(u["a"])(document,"pointerdown",O,true))
p.push(Object(u["a"])(document,"touchstart",O,true))}}
var j=function(){b.forEach((function(e){return e.remove()}))
b=[]
p.forEach((function(e){return e.remove()}))
p=[]}
var w=function(e){var t=e.onInputModeChange
var n=v++
"function"===typeof t&&(y[n]=t)
if(h["a"]){S()
k()}return{isKeyboardMode:function(){return m===f.keyboard},remove:function(){1===v&&j()
delete y[n]
v--}}}
var C=n("K7t/")
var A=n("kR0I")
var B=n("w0Sv")
n.d(t,"a",(function(){return I}))
var I=function(e){Object(c["a"])(t,e)
function t(){var e
var n
Object(r["a"])(this,t)
for(var a=arguments.length,c=new Array(a),s=0;s<a;s++)c[s]=arguments[s]
n=Object(i["a"])(this,(e=Object(o["a"])(t)).call.apply(e,[this].concat(c)))
n._focusListener=null
n._blurListener=null
n._inputModeListener=null
n.state={focused:false,focusable:false}
n.handleInputModeChange=function(){n.forceUpdate()}
n.handleFocus=function(e){n.removeFocusListener()
n.setState({focused:true})}
n.handleBlur=function(e){n.removeBlurListener()
n.setState({focused:false})}
return n}Object(a["a"])(t,[{key:"componentDidMount",value:function(){var e=this.focusable,t=this.focused
this.addFocusableListeners(e,t)
this._inputModeListener=w({onInputModeChange:this.handleInputModeChange})
this.setState({focusable:e,focused:t})}},{key:"getSnapshotBeforeUpdate",value:function(e,t){var n=this.props,r=n.render,a=n.children
e.children===a&&e.render===r||this.removeFocusableListeners()
return null}},{key:"componentDidUpdate",value:function(e,t){var n=this.focusable
if(!n&&this.state.focusable){this.removeFocusableListeners()
this.setState({focusable:false,focused:false})}else if(n!==this.state.focusable){this.removeFocusableListeners()
this.state.focused&&n.focus()
this.addFocusableListeners(n,this.state.focused)
this.setState({focusable:n})}else this.addFocusableListeners(n,this.state.focused)}},{key:"componentWillUnmount",value:function(){if(this._inputModeListener){this._inputModeListener.remove()
this._inputModeListener=null}this.removeFocusableListeners()}},{key:"addFocusableListeners",value:function(e,t){if(!e)return
t&&!this._blurListener?this._blurListener=Object(u["a"])(e,"blur",this.handleBlur,true):this._focusListener||(this._focusListener=Object(u["a"])(e,"focus",this.handleFocus,true))}},{key:"removeFocusableListeners",value:function(){this.removeFocusListener()
this.removeBlurListener()}},{key:"removeFocusListener",value:function(){if(this._focusListener){this._focusListener.remove()
this._focusListener=null}}},{key:"removeBlurListener",value:function(){if(this._blurListener){this._blurListener.remove()
this._blurListener=null}}},{key:"focus",value:function(){var e=this.focusable
e&&e.focus()}},{key:"isFocusVisible",value:function(e,n){if(!e||!n)return false
if(this._inputModeListener&&this._inputModeListener.isKeyboardMode())return true
var r=e.tagName,a=e.type,i=e.isContentEditable
if("INPUT"==r&&t.inputTypes[a])return true
if("TEXTAREA"==r)return true
if(i)return true
return false}},{key:"render",value:function(){var e=this.props,t=e.children,n=e.render,r=void 0===n?t:n
var a=this.state,i=a.focusable,o=a.focused
return"function"===typeof r?r({focused:o,focusable:i,focusVisible:this.isFocusVisible(i,o)}):null}},{key:"focused",get:function(){return Object(C["a"])(this)}},{key:"focusable",get:function(){var e=Object(A["a"])(this,(function(){return true}),true)||[]
var t=e&&e.length||0
"[Focusable] Exactly one focusable child is required (".concat(t," found).")
e=!!e&&e[0]
return!(!e||"function"!==typeof e.focus)&&e}},{key:"focusVisible",get:function(){var e=this.state,t=e.focusable,n=e.focused
return this.isFocusVisible(t,n)}}])
t.displayName="Focusable"
return t}(s["Component"])
I.propTypes={children:d.a.func,render:d.a.func}
I.defaultProps={children:null,render:void 0}
I.inputTypes={text:true,search:true,url:true,tel:true,email:true,password:true,number:true,date:true,month:true,week:true,time:true,datetime:true,"datetime-local":true}
Object(B["a"])(I)},"gSD+":function(e,t,n){"use strict"
var r=n("rePB")
var a=n("1OyB")
var i=n("vuIU")
var o=n("md7G")
var c=n("foSv")
var s=n("Ji7U")
var l=n("q1tI")
var d=n.n(l)
var u=n("17x9")
var h=n.n(u)
var f=n("TSYQ")
var b=n.n(f)
var p=n("n12J")
var m=n("J2CL")
var v=n("RhCJ")
var y=n("nAyT")
var g=n("KgFQ")
var _=n("jtGx")
var x=n("oXx0")
function O(e){var t=e.borders,n=e.colors,r=e.spacing,a=e.typography
return{fontFamily:a.fontFamily,fontWeight:a.fontWeightNormal,lineHeight:a.lineHeightFit,h1FontSize:a.fontSizeXXLarge,h1FontWeight:a.fontWeightLight,h2FontSize:a.fontSizeXLarge,h2FontWeight:a.fontWeightNormal,h3FontSize:a.fontSizeLarge,h3FontWeight:a.fontWeightBold,h4FontSize:a.fontSizeMedium,h4FontWeight:a.fontWeightBold,h5FontSize:a.fontSizeSmall,h5FontWeight:a.fontWeightNormal,primaryInverseColor:n.textLightest,primaryColor:n.textDarkest,secondaryColor:n.textDark,secondaryInverseColor:n.textLight,brandColor:n.textBrand,warningColor:n.textWarning,errorColor:n.textDanger,successColor:n.textSuccess,borderPadding:r.xxxSmall,borderColor:n.borderMedium,borderWidth:t.widthSmall,borderStyle:t.style}}O.canvas=function(e){return{primaryColor:e["ic-brand-font-color-dark"],brandColor:e["ic-brand-primary"]}}
n.d(t,"a",(function(){return I}))
var k,S,j,w,C,A
var B={componentId:"emyav",template:function(e){return"\n\n.emyav_bGBk{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;font-family:".concat(e.fontFamily||"inherit",";line-height:").concat(e.lineHeight||"inherit",";margin:0;text-rendering:optimizeLegibility}\n\ninput.emyav_bGBk[type]{-moz-appearance:none;-webkit-appearance:none;appearance:none;background:none;border:none;border-radius:0;box-shadow:none;box-sizing:border-box;color:inherit;display:block;height:auto;line-height:inherit;margin:-6px 0 0 0;outline:0;padding:0;text-align:start;width:100%}\n\n[dir=ltr] input.emyav_bGBk[type]{text-align:left}\n\n[dir=rtl] input.emyav_bGBk[type]{text-align:right}\n\ninput.emyav_bGBk[type]:focus{outline:none}\n\n.emyav_fIqS{font-size:").concat(e.h1FontSize||"inherit",";font-weight:").concat(e.h1FontWeight||"inherit","}\n\n.emyav_eABG{font-size:").concat(e.h2FontSize||"inherit",";font-weight:").concat(e.h2FontWeight||"inherit","}\n\n.emyav_dlZd{font-size:").concat(e.h3FontSize||"inherit",";font-weight:").concat(e.h3FontWeight||"inherit","}\n\n.emyav_bAmB{font-size:").concat(e.h4FontSize||"inherit",";font-weight:").concat(e.h4FontWeight||"inherit","}\n\n.emyav_eRZv{font-size:").concat(e.h5FontSize||"inherit",";font-weight:").concat(e.h5FontWeight||"inherit","}\n\n.emyav_dTMd{border-top:").concat(e.borderWidth||"inherit"," ").concat(e.borderStyle||"inherit"," ").concat(e.borderColor||"inherit",";padding-top:").concat(e.borderPadding||"inherit","}\n\n.emyav_evMo{border-bottom:").concat(e.borderWidth||"inherit"," ").concat(e.borderStyle||"inherit"," ").concat(e.borderColor||"inherit",";padding-bottom:").concat(e.borderPadding||"inherit","}\n\n.emyav_fAVi{color:inherit}\n\n.emyav_qFsi{color:").concat(e.primaryColor||"inherit","}\n\n.emyav_bLsb{color:").concat(e.secondaryColor||"inherit","}\n\n.emyav_ezBQ{color:").concat(e.primaryInverseColor||"inherit","}\n\n.emyav_dlnd{color:").concat(e.secondaryInverseColor||"inherit","}\n\n.emyav_ZpoW{font-size:inherit;font-weight:inherit;line-height:inherit;margin:0}\n\n.emyav_bOQC{display:block;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}")},root:"emyav_bGBk",h1:"emyav_fIqS",h2:"emyav_eABG",h3:"emyav_dlZd",h4:"emyav_bAmB",h5:"emyav_eRZv","border-top":"emyav_dTMd","border-bottom":"emyav_evMo","color-inherit":"emyav_fAVi","color-primary":"emyav_qFsi","color-secondary":"emyav_bLsb","color-primary-inverse":"emyav_ezBQ","color-secondary-inverse":"emyav_dlnd",reset:"emyav_ZpoW",ellipsis:"emyav_bOQC"}
var I=(k=Object(y["a"])("7.0.0",null,"Use Heading from ui-heading instead."),S=Object(x["a"])(),j=Object(m["themeable"])(O,B),k(w=S(w=j(w=(A=C=function(e){Object(s["a"])(t,e)
function t(){Object(a["a"])(this,t)
return Object(o["a"])(this,Object(c["a"])(t).apply(this,arguments))}Object(i["a"])(t,[{key:"render",value:function(){var e
var n=this.props,a=n.border,i=n.children,o=n.color,c=n.level,s=n.ellipsis,l=n.margin,u=n.elementRef
var h=Object(g["a"])(t,this.props,(function(){return"reset"===c?"span":c}))
var f=p["a"].omitViewProps(Object(_["a"])(this.props,t.propTypes),t)
return d.a.createElement(p["a"],Object.assign({},f,{className:b()((e={},Object(r["a"])(e,B.root,true),Object(r["a"])(e,B[c],true),Object(r["a"])(e,B["color-".concat(o)],o),Object(r["a"])(e,B["border-".concat(a)],"none"!==a),Object(r["a"])(e,B.ellipsis,s),e)),as:h,margin:l,elementRef:u}),i)}}])
t.displayName="Heading"
return t}(l["Component"]),C.propTypes={border:h.a.oneOf(["none","top","bottom"]),children:v["a"],color:h.a.oneOf(["primary","secondary","primary-inverse","secondary-inverse","inherit"]),level:h.a.oneOf(["h1","h2","h3","h4","h5","reset"]),as:h.a.elementType,ellipsis:h.a.bool,margin:m["ThemeablePropTypes"].spacing,elementRef:h.a.func},C.defaultProps={children:null,margin:void 0,elementRef:void 0,border:"none",color:"inherit",level:"h2",ellipsis:false},A))||w)||w)||w)},w0Sv:function(e,t,n){"use strict"
n.d(t,"a",(function(){return a}))
var r=n("VCL8")
var a=function(){return r["polyfill"].apply(void 0,arguments)}}}])

//# sourceMappingURL=38-c-5321d6faa0.js.map