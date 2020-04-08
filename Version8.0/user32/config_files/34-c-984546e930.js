(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[34],{"2rMq":function(e,t,n){var o;(function(){"use strict"
var r=!!("undefined"!==typeof window&&window.document&&window.document.createElement)
var a={canUseDOM:r,canUseWorkers:"undefined"!==typeof Worker,canUseEventListeners:r&&!!(window.addEventListener||window.attachEvent),canUseViewport:r&&!!window.screen}
o=function(){return a}.call(t,n,t,e),void 0!==o&&(e.exports=o)})()},"2zs7":function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.canUseDOM=void 0
var o=n("2rMq")
var r=a(o)
function a(e){return e&&e.__esModule?e:{default:e}}var l=r.default
var s=l.canUseDOM?window.HTMLElement:{}
t.canUseDOM=l.canUseDOM
t.default=s},"9rZX":function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
var o=n("qFS3")
var r=a(o)
function a(e){return e&&e.__esModule?e:{default:e}}t.default=r.default
e.exports=t["default"]},NPsS:function(e,t,n){"use strict"
var o=false
var r=function(){}
if(o){var a=function(e,t){var n=arguments.length
t=new Array(n>1?n-1:0)
for(var o=1;o<n;o++)t[o-1]=arguments[o]
var r=0
var a="Warning: "+e.replace(/%s/g,(function(){return t[r++]}))
"undefined"!==typeof console&&console.error(a)
try{throw new Error(a)}catch(e){}}
r=function(e,t,n){var o=arguments.length
n=new Array(o>2?o-2:0)
for(var r=2;r<o;r++)n[r-2]=arguments[r]
if(void 0===t)throw new Error("`warning(condition, format, ...args)` requires a warning message argument")
e||a.apply(null,[t].concat(n))}}e.exports=r},QEso:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t]
for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e}
var r="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"===typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e}
var a=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n]
o.enumerable=o.enumerable||false
o.configurable=true
"value"in o&&(o.writable=true)
Object.defineProperty(e,o.key,o)}}return function(t,n,o){n&&e(t.prototype,n)
o&&e(t,o)
return t}}()
var l=n("q1tI")
var s=g(l)
var u=n("17x9")
var i=g(u)
var f=n("VKEO")
var c=C(f)
var p=n("S1to")
var d=g(p)
var v=n("Ye7m")
var h=C(v)
var m=n("fbhf")
var y=C(m)
var b=n("2zs7")
var O=g(b)
function C(e){if(e&&e.__esModule)return e
var t={}
if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])
t.default=e
return t}function g(e){return e&&e.__esModule?e:{default:e}}function w(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function _(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function S(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t)
e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:false,writable:true,configurable:true}})
t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}var E={overlay:"ReactModal__Overlay",content:"ReactModal__Content"}
var M=9
var P=27
var N=0
var R=function(e){S(t,e)
function t(e){w(this,t)
var n=_(this,(t.__proto__||Object.getPrototypeOf(t)).call(this,e))
n.setOverlayRef=function(e){n.overlay=e
n.props.overlayRef&&n.props.overlayRef(e)}
n.setContentRef=function(e){n.content=e
n.props.contentRef&&n.props.contentRef(e)}
n.afterClose=function(){var e=n.props,t=e.appElement,o=e.ariaHideApp,r=e.htmlOpenClassName,a=e.bodyOpenClassName
a&&y.remove(document.body,a)
r&&y.remove(document.getElementsByTagName("html")[0],r)
if(o&&N>0){N-=1
0===N&&h.show(t)}if(n.props.shouldFocusAfterRender)if(n.props.shouldReturnFocusAfterClose){c.returnFocus()
c.teardownScopedFocus()}else c.popWithoutFocus()
n.props.onAfterClose&&n.props.onAfterClose()}
n.open=function(){n.beforeOpen()
if(n.state.afterOpen&&n.state.beforeClose){clearTimeout(n.closeTimer)
n.setState({beforeClose:false})}else{if(n.props.shouldFocusAfterRender){c.setupScopedFocus(n.node)
c.markForFocusLater()}n.setState({isOpen:true},(function(){n.setState({afterOpen:true})
n.props.isOpen&&n.props.onAfterOpen&&n.props.onAfterOpen({overlayEl:n.overlay,contentEl:n.content})}))}}
n.close=function(){n.props.closeTimeoutMS>0?n.closeWithTimeout():n.closeWithoutTimeout()}
n.focusContent=function(){return n.content&&!n.contentHasFocus()&&n.content.focus()}
n.closeWithTimeout=function(){var e=Date.now()+n.props.closeTimeoutMS
n.setState({beforeClose:true,closesAt:e},(function(){n.closeTimer=setTimeout(n.closeWithoutTimeout,n.state.closesAt-Date.now())}))}
n.closeWithoutTimeout=function(){n.setState({beforeClose:false,isOpen:false,afterOpen:false,closesAt:null},n.afterClose)}
n.handleKeyDown=function(e){e.keyCode===M&&(0,d.default)(n.content,e)
if(n.props.shouldCloseOnEsc&&e.keyCode===P){e.stopPropagation()
n.requestClose(e)}}
n.handleOverlayOnClick=function(e){null===n.shouldClose&&(n.shouldClose=true)
n.shouldClose&&n.props.shouldCloseOnOverlayClick&&(n.ownerHandlesClose()?n.requestClose(e):n.focusContent())
n.shouldClose=null}
n.handleContentOnMouseUp=function(){n.shouldClose=false}
n.handleOverlayOnMouseDown=function(e){n.props.shouldCloseOnOverlayClick||e.target!=n.overlay||e.preventDefault()}
n.handleContentOnClick=function(){n.shouldClose=false}
n.handleContentOnMouseDown=function(){n.shouldClose=false}
n.requestClose=function(e){return n.ownerHandlesClose()&&n.props.onRequestClose(e)}
n.ownerHandlesClose=function(){return n.props.onRequestClose}
n.shouldBeClosed=function(){return!n.state.isOpen&&!n.state.beforeClose}
n.contentHasFocus=function(){return document.activeElement===n.content||n.content.contains(document.activeElement)}
n.buildClassName=function(e,t){var o="object"===("undefined"===typeof t?"undefined":r(t))?t:{base:E[e],afterOpen:E[e]+"--after-open",beforeClose:E[e]+"--before-close"}
var a=o.base
n.state.afterOpen&&(a=a+" "+o.afterOpen)
n.state.beforeClose&&(a=a+" "+o.beforeClose)
return"string"===typeof t&&t?a+" "+t:a}
n.attributesFromObject=function(e,t){return Object.keys(t).reduce((function(n,o){n[e+"-"+o]=t[o]
return n}),{})}
n.state={afterOpen:false,beforeClose:false}
n.shouldClose=null
n.moveFromContentToOverlay=null
return n}a(t,[{key:"componentDidMount",value:function(){this.props.isOpen&&this.open()}},{key:"componentDidUpdate",value:function(e,t){false
this.props.isOpen&&!e.isOpen?this.open():!this.props.isOpen&&e.isOpen&&this.close()
this.props.shouldFocusAfterRender&&this.state.isOpen&&!t.isOpen&&this.focusContent()}},{key:"componentWillUnmount",value:function(){this.state.isOpen&&this.afterClose()
clearTimeout(this.closeTimer)}},{key:"beforeOpen",value:function(){var e=this.props,t=e.appElement,n=e.ariaHideApp,o=e.htmlOpenClassName,r=e.bodyOpenClassName
r&&y.add(document.body,r)
o&&y.add(document.getElementsByTagName("html")[0],o)
if(n){N+=1
h.hide(t)}}},{key:"render",value:function(){var e=this.props,t=e.id,n=e.className,r=e.overlayClassName,a=e.defaultStyles
var l=n?{}:a.content
var u=r?{}:a.overlay
return this.shouldBeClosed()?null:s.default.createElement("div",{ref:this.setOverlayRef,className:this.buildClassName("overlay",r),style:o({},u,this.props.style.overlay),onClick:this.handleOverlayOnClick,onMouseDown:this.handleOverlayOnMouseDown},s.default.createElement("div",o({id:t,ref:this.setContentRef,style:o({},l,this.props.style.content),className:this.buildClassName("content",n),tabIndex:"-1",onKeyDown:this.handleKeyDown,onMouseDown:this.handleContentOnMouseDown,onMouseUp:this.handleContentOnMouseUp,onClick:this.handleContentOnClick,role:this.props.role,"aria-label":this.props.contentLabel},this.attributesFromObject("aria",this.props.aria||{}),this.attributesFromObject("data",this.props.data||{}),{"data-testid":this.props.testId}),this.props.children))}}])
return t}(l.Component)
R.defaultProps={style:{overlay:{},content:{}},defaultStyles:{}}
R.propTypes={isOpen:i.default.bool.isRequired,defaultStyles:i.default.shape({content:i.default.object,overlay:i.default.object}),style:i.default.shape({content:i.default.object,overlay:i.default.object}),className:i.default.oneOfType([i.default.string,i.default.object]),overlayClassName:i.default.oneOfType([i.default.string,i.default.object]),bodyOpenClassName:i.default.string,htmlOpenClassName:i.default.string,ariaHideApp:i.default.bool,appElement:i.default.instanceOf(O.default),onAfterOpen:i.default.func,onAfterClose:i.default.func,onRequestClose:i.default.func,closeTimeoutMS:i.default.number,shouldFocusAfterRender:i.default.bool,shouldCloseOnOverlayClick:i.default.bool,shouldReturnFocusAfterClose:i.default.bool,role:i.default.string,contentLabel:i.default.string,aria:i.default.object,data:i.default.object,children:i.default.node,shouldCloseOnEsc:i.default.bool,overlayRef:i.default.func,contentRef:i.default.func,id:i.default.string,testId:i.default.string}
t.default=R
e.exports=t["default"]},S1to:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=l
var o=n("ZDLa")
var r=a(o)
function a(e){return e&&e.__esModule?e:{default:e}}function l(e,t){var n=(0,r.default)(e)
if(!n.length){t.preventDefault()
return}var o=t.shiftKey
var a=n[0]
var l=n[n.length-1]
if(e===document.activeElement){if(!o)return
s=l}var s
l!==document.activeElement||o||(s=a)
a===document.activeElement&&o&&(s=l)
if(s){t.preventDefault()
s.focus()
return}var u=/(\bChrome\b|\bSafari\b)\//.exec(navigator.userAgent)
var i=null!=u&&"Chrome"!=u[1]&&null==/\biPod\b|\biPad\b/g.exec(navigator.userAgent)
if(!i)return
var f=n.indexOf(document.activeElement)
f>-1&&(f+=o?-1:1)
if("undefined"===typeof n[f]){t.preventDefault()
s=o?l:a
s.focus()
return}t.preventDefault()
n[f].focus()}e.exports=t["default"]},VCL8:function(e,t,n){"use strict"
n.r(t)
n.d(t,"polyfill",(function(){return l}))
function o(){var e=this.constructor.getDerivedStateFromProps(this.props,this.state)
null!==e&&void 0!==e&&this.setState(e)}function r(e){function t(t){var n=this.constructor.getDerivedStateFromProps(e,t)
return null!==n&&void 0!==n?n:null}this.setState(t.bind(this))}function a(e,t){try{var n=this.props
var o=this.state
this.props=e
this.state=t
this.__reactInternalSnapshotFlag=true
this.__reactInternalSnapshot=this.getSnapshotBeforeUpdate(n,o)}finally{this.props=n
this.state=o}}o.__suppressDeprecationWarning=true
r.__suppressDeprecationWarning=true
a.__suppressDeprecationWarning=true
function l(e){var t=e.prototype
if(!t||!t.isReactComponent)throw new Error("Can only polyfill class components")
if("function"!==typeof e.getDerivedStateFromProps&&"function"!==typeof t.getSnapshotBeforeUpdate)return e
var n=null
var l=null
var s=null
"function"===typeof t.componentWillMount?n="componentWillMount":"function"===typeof t.UNSAFE_componentWillMount&&(n="UNSAFE_componentWillMount")
"function"===typeof t.componentWillReceiveProps?l="componentWillReceiveProps":"function"===typeof t.UNSAFE_componentWillReceiveProps&&(l="UNSAFE_componentWillReceiveProps")
"function"===typeof t.componentWillUpdate?s="componentWillUpdate":"function"===typeof t.UNSAFE_componentWillUpdate&&(s="UNSAFE_componentWillUpdate")
if(null!==n||null!==l||null!==s){var u=e.displayName||e.name
var i="function"===typeof e.getDerivedStateFromProps?"getDerivedStateFromProps()":"getSnapshotBeforeUpdate()"
throw Error("Unsafe legacy lifecycles will not be called for components using new component APIs.\n\n"+u+" uses "+i+" but also contains the following legacy lifecycles:"+(null!==n?"\n  "+n:"")+(null!==l?"\n  "+l:"")+(null!==s?"\n  "+s:"")+"\n\nThe above lifecycles should be removed. Learn more about this warning here:\nhttps://fb.me/react-async-component-lifecycle-hooks")}if("function"===typeof e.getDerivedStateFromProps){t.componentWillMount=o
t.componentWillReceiveProps=r}if("function"===typeof t.getSnapshotBeforeUpdate){if("function"!==typeof t.componentDidUpdate)throw new Error("Cannot polyfill getSnapshotBeforeUpdate() for components that do not define componentDidUpdate() on the prototype")
t.componentWillUpdate=a
var f=t.componentDidUpdate
t.componentDidUpdate=function(e,t,n){var o=this.__reactInternalSnapshotFlag?this.__reactInternalSnapshot:n
f.call(this,e,t,o)}}return e}},VKEO:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.handleBlur=i
t.handleFocus=f
t.markForFocusLater=c
t.returnFocus=p
t.popWithoutFocus=d
t.setupScopedFocus=v
t.teardownScopedFocus=h
var o=n("ZDLa")
var r=a(o)
function a(e){return e&&e.__esModule?e:{default:e}}var l=[]
var s=null
var u=false
function i(){u=true}function f(){if(u){u=false
if(!s)return
setTimeout((function(){if(s.contains(document.activeElement))return
var e=(0,r.default)(s)[0]||s
e.focus()}),0)}}function c(){l.push(document.activeElement)}function p(){var e=null
try{if(0!==l.length){e=l.pop()
e.focus()}return}catch(t){console.warn(["You tried to return focus to",e,"but it is not in the DOM anymore"].join(" "))}}function d(){l.length>0&&l.pop()}function v(e){s=e
if(window.addEventListener){window.addEventListener("blur",i,false)
document.addEventListener("focus",f,true)}else{window.attachEvent("onBlur",i)
document.attachEvent("onFocus",f)}}function h(){s=null
if(window.addEventListener){window.removeEventListener("blur",i)
document.removeEventListener("focus",f)}else{window.detachEvent("onBlur",i)
document.detachEvent("onFocus",f)}}},Ye7m:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.assertNodeList=u
t.setElement=i
t.validateElement=f
t.hide=c
t.show=p
t.documentNotReadyOrSSRTesting=d
t.resetForTesting=v
var o=n("NPsS")
var r=l(o)
var a=n("2zs7")
function l(e){return e&&e.__esModule?e:{default:e}}var s=null
function u(e,t){if(!e||!e.length)throw new Error("react-modal: No elements were found for selector "+t+".")}function i(e){var t=e
if("string"===typeof t&&a.canUseDOM){var n=document.querySelectorAll(t)
u(n,t)
t="length"in n?n[0]:n}s=t||s
return s}function f(e){if(!e&&!s){(0,r.default)(false,["react-modal: App element is not defined.","Please use `Modal.setAppElement(el)` or set `appElement={el}`.","This is needed so screen readers don't see main content","when modal is opened. It is not recommended, but you can opt-out","by setting `ariaHideApp={false}`."].join(" "))
return false}return true}function c(e){f(e)&&(e||s).setAttribute("aria-hidden","true")}function p(e){f(e)&&(e||s).removeAttribute("aria-hidden")}function d(){s=null}function v(){s=null}},ZDLa:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.default=u
var o=/input|select|textarea|button|object/
function r(e){var t=e.offsetWidth<=0&&e.offsetHeight<=0
if(t&&!e.innerHTML)return true
var n=window.getComputedStyle(e)
return t?"visible"!==n.getPropertyValue("overflow")||e.scrollWidth<=0&&e.scrollHeight<=0:"none"==n.getPropertyValue("display")}function a(e){var t=e
while(t){if(t===document.body)break
if(r(t))return false
t=t.parentNode}return true}function l(e,t){var n=e.nodeName.toLowerCase()
var r=o.test(n)&&!e.disabled||"a"===n&&e.href||t
return r&&a(e)}function s(e){var t=e.getAttribute("tabindex")
null===t&&(t=void 0)
var n=isNaN(t)
return(n||t>=0)&&l(e,!n)}function u(e){return[].slice.call(e.querySelectorAll("*"),0).filter(s)}e.exports=t["default"]},fbhf:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.dumpClassLists=a
var o={}
var r={}
function a(){}var l=function(e,t){e[t]||(e[t]=0)
e[t]+=1
return t}
var s=function(e,t){e[t]&&(e[t]-=1)
return t}
var u=function(e,t,n){n.forEach((function(n){l(t,n)
e.add(n)}))}
var i=function(e,t,n){n.forEach((function(n){s(t,n)
0===t[n]&&e.remove(n)}))}
t.add=function(e,t){return u(e.classList,"html"==e.nodeName.toLowerCase()?o:r,t.split(" "))}
t.remove=function(e,t){return i(e.classList,"html"==e.nodeName.toLowerCase()?o:r,t.split(" "))}},qFS3:function(e,t,n){"use strict"
Object.defineProperty(t,"__esModule",{value:true})
t.bodyOpenClassName=t.portalClassName=void 0
var o=Object.assign||function(e){for(var t=1;t<arguments.length;t++){var n=arguments[t]
for(var o in n)Object.prototype.hasOwnProperty.call(n,o)&&(e[o]=n[o])}return e}
var r=function(){function e(e,t){for(var n=0;n<t.length;n++){var o=t[n]
o.enumerable=o.enumerable||false
o.configurable=true
"value"in o&&(o.writable=true)
Object.defineProperty(e,o.key,o)}}return function(t,n,o){n&&e(t.prototype,n)
o&&e(t,o)
return t}}()
var a=n("q1tI")
var l=O(a)
var s=n("i8i4")
var u=O(s)
var i=n("17x9")
var f=O(i)
var c=n("QEso")
var p=O(c)
var d=n("Ye7m")
var v=b(d)
var h=n("2zs7")
var m=O(h)
var y=n("VCL8")
function b(e){if(e&&e.__esModule)return e
var t={}
if(null!=e)for(var n in e)Object.prototype.hasOwnProperty.call(e,n)&&(t[n]=e[n])
t.default=e
return t}function O(e){return e&&e.__esModule?e:{default:e}}function C(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function g(e,t){if(!e)throw new ReferenceError("this hasn't been initialised - super() hasn't been called")
return!t||"object"!==typeof t&&"function"!==typeof t?e:t}function w(e,t){if("function"!==typeof t&&null!==t)throw new TypeError("Super expression must either be null or a function, not "+typeof t)
e.prototype=Object.create(t&&t.prototype,{constructor:{value:e,enumerable:false,writable:true,configurable:true}})
t&&(Object.setPrototypeOf?Object.setPrototypeOf(e,t):e.__proto__=t)}var _=t.portalClassName="ReactModalPortal"
var S=t.bodyOpenClassName="ReactModal__Body--open"
var E=void 0!==u.default.createPortal
var M=function(){return E?u.default.createPortal:u.default.unstable_renderSubtreeIntoContainer}
function P(e){return e()}var N=function(e){w(t,e)
function t(){var e
var n,r,a
C(this,t)
for(var s=arguments.length,i=Array(s),f=0;f<s;f++)i[f]=arguments[f]
return a=(n=(r=g(this,(e=t.__proto__||Object.getPrototypeOf(t)).call.apply(e,[this].concat(i))),r),r.removePortal=function(){!E&&u.default.unmountComponentAtNode(r.node)
var e=P(r.props.parentSelector)
e.removeChild(r.node)},r.portalRef=function(e){r.portal=e},r.renderPortal=function(e){var n=M()
var a=n(r,l.default.createElement(p.default,o({defaultStyles:t.defaultStyles},e)),r.node)
r.portalRef(a)},n),g(r,a)}r(t,[{key:"componentDidMount",value:function(){if(!h.canUseDOM)return
E||(this.node=document.createElement("div"))
this.node.className=this.props.portalClassName
var e=P(this.props.parentSelector)
e.appendChild(this.node)
!E&&this.renderPortal(this.props)}},{key:"getSnapshotBeforeUpdate",value:function(e){var t=P(e.parentSelector)
var n=P(this.props.parentSelector)
return{prevParent:t,nextParent:n}}},{key:"componentDidUpdate",value:function(e,t,n){if(!h.canUseDOM)return
var o=this.props,r=o.isOpen,a=o.portalClassName
e.portalClassName!==a&&(this.node.className=a)
var l=n.prevParent,s=n.nextParent
if(s!==l){l.removeChild(this.node)
s.appendChild(this.node)}if(!e.isOpen&&!r)return
!E&&this.renderPortal(this.props)}},{key:"componentWillUnmount",value:function(){if(!h.canUseDOM||!this.node||!this.portal)return
var e=this.portal.state
var t=Date.now()
var n=e.isOpen&&this.props.closeTimeoutMS&&(e.closesAt||t+this.props.closeTimeoutMS)
if(n){e.beforeClose||this.portal.closeWithTimeout()
setTimeout(this.removePortal,n-t)}else this.removePortal()}},{key:"render",value:function(){if(!h.canUseDOM||!E)return null
!this.node&&E&&(this.node=document.createElement("div"))
var e=M()
return e(l.default.createElement(p.default,o({ref:this.portalRef,defaultStyles:t.defaultStyles},this.props)),this.node)}}],[{key:"setAppElement",value:function(e){v.setElement(e)}}])
return t}(a.Component)
N.propTypes={isOpen:f.default.bool.isRequired,style:f.default.shape({content:f.default.object,overlay:f.default.object}),portalClassName:f.default.string,bodyOpenClassName:f.default.string,htmlOpenClassName:f.default.string,className:f.default.oneOfType([f.default.string,f.default.shape({base:f.default.string.isRequired,afterOpen:f.default.string.isRequired,beforeClose:f.default.string.isRequired})]),overlayClassName:f.default.oneOfType([f.default.string,f.default.shape({base:f.default.string.isRequired,afterOpen:f.default.string.isRequired,beforeClose:f.default.string.isRequired})]),appElement:f.default.instanceOf(m.default),onAfterOpen:f.default.func,onRequestClose:f.default.func,closeTimeoutMS:f.default.number,ariaHideApp:f.default.bool,shouldFocusAfterRender:f.default.bool,shouldCloseOnOverlayClick:f.default.bool,shouldReturnFocusAfterClose:f.default.bool,parentSelector:f.default.func,aria:f.default.object,data:f.default.object,role:f.default.string,contentLabel:f.default.string,shouldCloseOnEsc:f.default.bool,overlayRef:f.default.func,contentRef:f.default.func}
N.defaultProps={isOpen:false,portalClassName:_,bodyOpenClassName:S,role:"dialog",ariaHideApp:true,closeTimeoutMS:0,shouldFocusAfterRender:true,shouldCloseOnEsc:true,shouldCloseOnOverlayClick:true,shouldReturnFocusAfterClose:true,parentSelector:function(){return document.body}}
N.defaultStyles={overlay:{position:"fixed",top:0,left:0,right:0,bottom:0,backgroundColor:"rgba(255, 255, 255, 0.75)"},content:{position:"absolute",top:"40px",left:"40px",right:"40px",bottom:"40px",border:"1px solid #ccc",background:"#fff",overflow:"auto",WebkitOverflowScrolling:"touch",borderRadius:"4px",outline:"none",padding:"20px"}};(0,y.polyfill)(N)
t.default=N},uvL4:function(e,t,n){"use strict"
var o=n("9rZX")
var r=n.n(o)
const a=document.getElementById("application")
a&&r.a.setAppElement(document.getElementById("application"))
t["a"]=r.a}}])

//# sourceMappingURL=34-c-984546e930.js.map