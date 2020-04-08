(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[235,553],{"0jNN":function(e,t,n){"use strict"
var a=Object.prototype.hasOwnProperty
var s=Array.isArray
var r=function(){var e=[]
for(var t=0;t<256;++t)e.push("%"+((t<16?"0":"")+t.toString(16)).toUpperCase())
return e}()
var i=function(e){while(e.length>1){var t=e.pop()
var n=t.obj[t.prop]
if(s(n)){var a=[]
for(var r=0;r<n.length;++r)"undefined"!==typeof n[r]&&a.push(n[r])
t.obj[t.prop]=a}}}
var o=function(e,t){var n=t&&t.plainObjects?Object.create(null):{}
for(var a=0;a<e.length;++a)"undefined"!==typeof e[a]&&(n[a]=e[a])
return n}
var d=function e(t,n,r){if(!n)return t
if("object"!==typeof n){if(s(t))t.push(n)
else{if(!t||"object"!==typeof t)return[t,n];(r&&(r.plainObjects||r.allowPrototypes)||!a.call(Object.prototype,n))&&(t[n]=true)}return t}if(!t||"object"!==typeof t)return[t].concat(n)
var i=t
s(t)&&!s(n)&&(i=o(t,r))
if(s(t)&&s(n)){n.forEach((function(n,s){if(a.call(t,s)){var i=t[s]
i&&"object"===typeof i&&n&&"object"===typeof n?t[s]=e(i,n,r):t.push(n)}else t[s]=n}))
return t}return Object.keys(n).reduce((function(t,s){var i=n[s]
a.call(t,s)?t[s]=e(t[s],i,r):t[s]=i
return t}),i)}
var c=function(e,t){return Object.keys(t).reduce((function(e,n){e[n]=t[n]
return e}),e)}
var l=function(e,t,n){var a=e.replace(/\+/g," ")
if("iso-8859-1"===n)return a.replace(/%[0-9a-f]{2}/gi,unescape)
try{return decodeURIComponent(a)}catch(e){return a}}
var _=function(e,t,n){if(0===e.length)return e
var a=e
"symbol"===typeof e?a=Symbol.prototype.toString.call(e):"string"!==typeof e&&(a=String(e))
if("iso-8859-1"===n)return escape(a).replace(/%u[0-9a-f]{4}/gi,(function(e){return"%26%23"+parseInt(e.slice(2),16)+"%3B"}))
var s=""
for(var i=0;i<a.length;++i){var o=a.charCodeAt(i)
if(45===o||46===o||95===o||126===o||o>=48&&o<=57||o>=65&&o<=90||o>=97&&o<=122){s+=a.charAt(i)
continue}if(o<128){s+=r[o]
continue}if(o<2048){s+=r[192|o>>6]+r[128|63&o]
continue}if(o<55296||o>=57344){s+=r[224|o>>12]+r[128|o>>6&63]+r[128|63&o]
continue}i+=1
o=65536+((1023&o)<<10|1023&a.charCodeAt(i))
s+=r[240|o>>18]+r[128|o>>12&63]+r[128|o>>6&63]+r[128|63&o]}return s}
var u=function(e){var t=[{obj:{o:e},prop:"o"}]
var n=[]
for(var a=0;a<t.length;++a){var s=t[a]
var r=s.obj[s.prop]
var o=Object.keys(r)
for(var d=0;d<o.length;++d){var c=o[d]
var l=r[c]
if("object"===typeof l&&null!==l&&-1===n.indexOf(l)){t.push({obj:r,prop:c})
n.push(l)}}}i(t)
return e}
var f=function(e){return"[object RegExp]"===Object.prototype.toString.call(e)}
var b=function(e){if(!e||"object"!==typeof e)return false
return!!(e.constructor&&e.constructor.isBuffer&&e.constructor.isBuffer(e))}
var p=function(e,t){return[].concat(e,t)}
e.exports={arrayToObject:o,assign:c,combine:p,compact:u,decode:l,encode:_,isBuffer:b,isRegExp:f,merge:d}},"3UD+":function(e,t){e.exports=function(e){if(!e.webpackPolyfill){var t=Object.create(e)
t.children||(t.children=[])
Object.defineProperty(t,"loaded",{enumerable:true,get:function(){return t.l}})
Object.defineProperty(t,"id",{enumerable:true,get:function(){return t.i}})
Object.defineProperty(t,"exports",{enumerable:true})
t.webpackPolyfill=1}return t}},"5nFh":function(e,t,n){"use strict"
n.d(t,"a",(function(){return g}))
var a=n("VTBJ")
var s=n("1OyB")
var r=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var d=n("Ji7U")
var c=n("q1tI")
var l=n("17x9")
var _=n.n(l)
var u=n("cClk")
var f=n("BTe1")
var b=n("9yTY")
var p=function(e){var t=e.expanded
return{expanded:!t}}
var g=function(e){Object(d["a"])(t,e)
function t(e){var n
Object(s["a"])(this,t)
n=Object(i["a"])(this,Object(o["a"])(t).call(this))
n.handleToggle=function(e){n.isControlled()||n.setState(p)
n.props.onToggle(e,!n.expanded)}
n.state={expanded:n.isControlled(e)?e.expanded:!!e.defaultExpanded}
n._contentId=Object(f["a"])("Expandable__content")
return n}Object(r["a"])(t,[{key:"isControlled",value:function(){var e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:this.props
return"boolean"===typeof e.expanded}},{key:"componentWillReceiveProps",value:function(e){this.isControlled()&&!this.isControlled(e)&&this.props.expanded!==this.state.expanded&&this.setState(p)}},{key:"render",value:function(){var e=this
var t=this.props,n=t.children,s=t.render,r=void 0===s?n:s
return"function"===typeof r?r({expanded:this.expanded,getToggleProps:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{}
return Object(a["a"])({"aria-controls":e._contentId,"aria-expanded":e.expanded,onClick:Object(b["a"])(e.handleToggle,t.onClick)},t)},getDetailsProps:function(t){return{id:e._contentId}}}):null}},{key:"expanded",get:function(){return this.isControlled()?this.props.expanded:this.state.expanded}}])
t.displayName="Expandable"
return t}(c["Component"])
g.propTypes={expanded:Object(u["a"])(_.a.bool,"onToggle","defaultExpanded"),defaultExpanded:_.a.bool,onToggle:_.a.func,children:_.a.func,render:_.a.func}
g.defaultProps={defaultExpanded:false,onToggle:function(e,t){},expanded:void 0,children:null,render:void 0}},"6V2X":function(e,t,n){"use strict"
var a=n("An8g")
var s=n("Ff2n")
var r=n("pQTu")
var i=n("m0r6")
Object(i["a"])(JSON.parse('{"ar":{"copy_to_64f8456b":"نسخ إلى..."},"cy":{"copy_to_64f8456b":"Copïo I..."},"da":{"copy_to_64f8456b":"Kopier til ..."},"da-x-k12":{"copy_to_64f8456b":"Kopier til ..."},"de":{"copy_to_64f8456b":"Kopieren nach ..."},"en-AU":{"copy_to_64f8456b":"Copy To..."},"en-CA":{"copy_to_64f8456b":"Copy To..."},"en-GB":{"copy_to_64f8456b":"Copy To..."},"en-GB-x-ukhe":{"copy_to_64f8456b":"Copy To..."},"es":{"copy_to_64f8456b":"Copiar a..."},"fi":{"copy_to_64f8456b":"Kopioi kohteeseen..."},"fr":{"copy_to_64f8456b":"Copier dans..."},"fr-CA":{"copy_to_64f8456b":"Copier à…"},"ht":{"copy_to_64f8456b":"Kopye Nan..."},"is":{"copy_to_64f8456b":"Afrita til…"},"it":{"copy_to_64f8456b":"Copia a..."},"ja":{"copy_to_64f8456b":"コピー先..."},"mi":{"copy_to_64f8456b":"Tārua kī ..."},"nb":{"copy_to_64f8456b":"Kopier til..."},"nb-x-k12":{"copy_to_64f8456b":"Kopier til..."},"nl":{"copy_to_64f8456b":"Kopiëren naar..."},"nn":{"copy_to_64f8456b":"Kopier til..."},"pl":{"copy_to_64f8456b":"Kopiuj do..."},"pt":{"copy_to_64f8456b":"Copiar para..."},"pt-BR":{"copy_to_64f8456b":"Cópia para..."},"ru":{"copy_to_64f8456b":"Копировать в..."},"sv":{"copy_to_64f8456b":"Kopiera till..."},"sv-x-k12":{"copy_to_64f8456b":"Kopiera till..."},"zh-Hans":{"copy_to_64f8456b":"复制到..."},"zh-Hant":{"copy_to_64f8456b":"複製到..."}}'))
n("jQeR")
n("0sPK")
var o=r["default"].scoped("direct_share_course_tray")
var d=n("q1tI")
var c=n.n(d)
var l=n("xGaD")
n.d(t,"a",(function(){return u}))
const _=Object(d["lazy"])(()=>Promise.all([n.e(6),n.e(5),n.e(8),n.e(23),n.e(100),n.e(135),n.e(566)]).then(n.bind(null,"mftS")))
function u(e){let t=e.sourceCourseId,n=e.contentSelection,r=e.onDismiss,i=Object(s["a"])(e,["sourceCourseId","contentSelection","onDismiss"])
return c.a.createElement(l["a"],Object.assign({label:o.t("Copy To..."),placement:"end",onDismiss:r,padding:"0 1.5rem"},i),Object(a["a"])(_,{sourceCourseId:t,contentSelection:n,onCancel:r}))}},B1vq:function(e,t,n){"use strict"
var a=n("ouhR")
var s=n.n(a)
n("s/PJ")
s.a.fn.scrollToVisible=function(e){const t={}
const n=s()(e)
if(0===n.length)return
let a=n.offset(),r=n.outerWidth(),i=n.outerHeight(),o=a.top,d=o+i,c=a.left,l=c+r,_="html,body"==this.selector?s.a.windowScrollTop():this.scrollTop(),u=this.scrollLeft(),f=this.outerHeight(),b=this.outerWidth()
if("html,body"!=this.selector){let e=s()("body").offset()
this.each((function(){try{e=s()(this).offset()
return false}catch(e){}}))
o-=e.top
d-=e.top
c-=e.left
l-=e.left}if("HTML"==this[0].tagName||"BODY"==this[0].tagName){f=s()(window).height()
s()("#wizard_box:visible").length>0&&(f-=s()("#wizard_box:visible").height())
b=s()(window).width()
o-=_
c-=u
d-=_
l-=u}o<0||f<i&&d>f?t.scrollTop=o+_:d>f&&(t.scrollTop=d+_-f+20)
c<0?t.scrollLeft=c+u:l>b&&(t.scrollLeft=l+u-b+20)
1==t.scrollTop&&(t.scrollTop=0)
1==t.scrollLeft&&(t.scrollLeft=0)
this.scrollTop(t.scrollTop)
this.scrollLeft(t.scrollLeft)
return this}},CyXg:function(e,t,n){"use strict"
n.d(t,"a",(function(){return f}))
var a=n("VTBJ")
var s=n("1OyB")
var r=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var d=n("Ji7U")
var c=n("q1tI")
var l=n.n(c)
var _=n("hPGw")
var u=l.a.createElement("path",{d:"M994.034 1226.26c-18.796 27.296-49.269 27.3-68.067 0L574.893 716.424C556.096 689.128 567.713 667 600.852 667h718.297c33.133 0 44.757 22.125 25.959 49.424L994.034 1226.26z",fillRule:"evenodd",stroke:"none",strokeWidth:"1"})
var f=function(e){Object(d["a"])(t,e)
function t(){Object(s["a"])(this,t)
return Object(i["a"])(this,Object(o["a"])(t).apply(this,arguments))}Object(r["a"])(t,[{key:"render",value:function(){return l.a.createElement(_["a"],Object.assign({},this.props,{name:"IconMiniArrowDown",viewBox:"0 0 1920 1920"}),u)}}])
t.displayName="IconMiniArrowDownSolid"
return t}(c["Component"])
f.glyphName="mini-arrow-down"
f.variant="Solid"
f.propTypes=Object(a["a"])({},_["a"].propTypes)},GXQz:function(e,t,n){"use strict"
n.r(t)
var a=n("ANjH")
var s=n("An8g")
var r=n("q1tI")
var i=n.n(r)
var o=n("i8i4")
var d=n.n(o)
var c=n("/MKj")
var l=n("17x9")
var _=n.n(l)
var u=n("VTJ5")
var f=n("pQTu")
var b=n("m0r6")
Object(b["a"])(JSON.parse('{"ar":{"loading_bde52856":"يتم الآن التحميل...","loading_data_ecd89ba":"جاري تحميل البيانات..","mastery_paths_breakdown_6e0b5fce":"تصنيف مسارات الإتقان"},"cy":{"loading_bde52856":"Wrthi’n llwytho","loading_data_ecd89ba":"Wrthi’n llwytho data...","mastery_paths_breakdown_6e0b5fce":"Dadansoddi Llwybrau Meistroli"},"da":{"loading_bde52856":"Indlæser","loading_data_ecd89ba":"Indlæsning af data ...","mastery_paths_breakdown_6e0b5fce":"Opdeling af læringsstier"},"da-x-k12":{"loading_bde52856":"Indlæser","loading_data_ecd89ba":"Indlæsning af data ...","mastery_paths_breakdown_6e0b5fce":"Opdeling af læringsstier"},"de":{"loading_bde52856":"Wird geladen","loading_data_ecd89ba":"Daten werden geladen ...","mastery_paths_breakdown_6e0b5fce":"Übersicht der Leistungsziel-Pfade"},"el":{"loading_bde52856":"Φόρτωση"},"en-AU":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data","mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-AU-x-unimelb":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data","mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-CA":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data..","mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-GB":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"en-GB-x-lbs":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"en-GB-x-ukhe":{"loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"es":{"loading_bde52856":"Cargando","loading_data_ecd89ba":"Cargando datos...","mastery_paths_breakdown_6e0b5fce":"Desglose de los caminos del dominio"},"fa":{"loading_bde52856":"در حال بارگذاری","loading_data_ecd89ba":"در حال بارگذاری داده ها ...","mastery_paths_breakdown_6e0b5fce":"از کار افتادن مسیرهای تسلط"},"fi":{"loading_bde52856":"Ladataan","loading_data_ecd89ba":"Ladataan tietoja...","mastery_paths_breakdown_6e0b5fce":"Hallintapolkujen erittely"},"fr":{"loading_bde52856":"En cours de chargement","loading_data_ecd89ba":"Chargement des données...","mastery_paths_breakdown_6e0b5fce":"Répartition des parcours de maîtrise"},"fr-CA":{"loading_bde52856":"Chargement","loading_data_ecd89ba":"Chargement des données...","mastery_paths_breakdown_6e0b5fce":"Répartition des parcours de maîtrise"},"he":{"loading_bde52856":"טוען","loading_data_ecd89ba":"טוען נתונים...","mastery_paths_breakdown_6e0b5fce":"מסלולי התמחות לא תקינים"},"ht":{"loading_bde52856":"Chajman","loading_data_ecd89ba":"Chajman Done...","mastery_paths_breakdown_6e0b5fce":"Repatisyon Pakou Prensipal"},"hu":{"loading_bde52856":"Töltődik","loading_data_ecd89ba":"Adatok betöltése...","mastery_paths_breakdown_6e0b5fce":"Jártassági útvonal üzemzavar"},"hy":{"loading_bde52856":"Բեռնում է"},"is":{"loading_bde52856":"Sæki","loading_data_ecd89ba":"Sæki gögn...","mastery_paths_breakdown_6e0b5fce":"Sundurliðun tileinkunarslóðar"},"it":{"loading_bde52856":"Caricamento in corso","loading_data_ecd89ba":"Caricamento dei dati in corso...","mastery_paths_breakdown_6e0b5fce":"Analisi percorsi di acquisizione padronanza"},"ja":{"loading_bde52856":"読み込み中","loading_data_ecd89ba":"データをロード中...","mastery_paths_breakdown_6e0b5fce":"熟達の過程の内訳"},"mi":{"loading_bde52856":"E tukuake ana","loading_data_ecd89ba":"Te utanga raraunga","mastery_paths_breakdown_6e0b5fce":"Papatau Mana Ara"},"nb":{"loading_bde52856":"Laster","loading_data_ecd89ba":"Laster data...","mastery_paths_breakdown_6e0b5fce":"Læringsstier Sammendrag"},"nb-x-k12":{"loading_bde52856":"Laster","loading_data_ecd89ba":"Laster data...","mastery_paths_breakdown_6e0b5fce":"Læringsstier Sammendrag"},"nl":{"loading_bde52856":"Bezig met laden...","loading_data_ecd89ba":"Gegevens laden..","mastery_paths_breakdown_6e0b5fce":"Uitsplitsing Mastery Paths"},"nn":{"loading_bde52856":"Lastar","loading_data_ecd89ba":"Lastar data..","mastery_paths_breakdown_6e0b5fce":"Sjå meistringssti-detaljar"},"pl":{"loading_bde52856":"Trwa ładowanie","loading_data_ecd89ba":"Wczytywanie danych...","mastery_paths_breakdown_6e0b5fce":"Podział ścieżek biegłości na grupy"},"pt":{"loading_bde52856":"Carregando","loading_data_ecd89ba":"A carregar dados...","mastery_paths_breakdown_6e0b5fce":"Falhas no Circuito Principal"},"pt-BR":{"loading_bde52856":"Carregando","loading_data_ecd89ba":"Carregando dados...","mastery_paths_breakdown_6e0b5fce":"Quebra de Caminhos de Domínio"},"ru":{"loading_bde52856":"Загрузка","loading_data_ecd89ba":"Загрузка данных...","mastery_paths_breakdown_6e0b5fce":"Разбивка Пути усвоения"},"sl":{"loading_bde52856":"Nalaganje","loading_data_ecd89ba":"Nalaganje podatkov ...","mastery_paths_breakdown_6e0b5fce":"Razčlenitev napredovanj v odličnosti"},"sv":{"loading_bde52856":"Laddar","loading_data_ecd89ba":"Läser in data ...","mastery_paths_breakdown_6e0b5fce":"Detaljerad information om måluppfyllelse"},"sv-x-k12":{"loading_bde52856":"Laddar","loading_data_ecd89ba":"Läser in data ...","mastery_paths_breakdown_6e0b5fce":"Detaljerad information om måluppfyllelse"},"tr":{"loading_bde52856":"Yükleniyor","mastery_paths_breakdown_6e0b5fce":"Yeterlilik Süreçleri Dökümü"},"uk":{"loading_bde52856":"Завантаження","loading_data_ecd89ba":"Завантаження даних...","mastery_paths_breakdown_6e0b5fce":"Розподіл Шляхів Майстерності"},"zh-Hans":{"loading_bde52856":"加载","loading_data_ecd89ba":"正在加载数据……","mastery_paths_breakdown_6e0b5fce":"掌握途径故障"},"zh-Hant":{"loading_bde52856":"正在載入","loading_data_ecd89ba":"載入資料中..","mastery_paths_breakdown_6e0b5fce":"精通路徑分解"}}'))
n("jQeR")
n("0sPK")
var p=f["default"].scoped("cyoe_assignment_sidebar_breakdown_graphs")
var g=n("MdYG")
Object(b["a"])(JSON.parse('{"ar":{"lowerbound_to_upperbound_352a3c0b":"من %{lowerBound}+ إلى %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} من إجمالي %{totalStudents} طالب","view_range_student_details_8116d68a":"عرض تفاصيل نطاق الطالب"},"cy":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ at %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} allan o %{totalStudents} o fyfyrwyr","view_range_student_details_8116d68a":"Gweld manylion defnyddiwr ar gyfer yr ystod"},"da":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} ud af %{totalStudents} studerende","view_range_student_details_8116d68a":"Se område i studerendes detaljer"},"da-x-k12":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} ud af %{totalStudents} elever","view_range_student_details_8116d68a":"Se område i elevens detaljer"},"de":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ bis %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} von %{totalStudents} Studenten","view_range_student_details_8116d68a":"Studentendetails nach Bereichen anzeigen"},"en-AU":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"en-AU-x-unimelb":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"en-CA":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"en-GB":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"en-GB-x-lbs":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"en-GB-x-ukhe":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ to %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} out of %{totalStudents} students","view_range_student_details_8116d68a":"View range student details"},"es":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ hasta %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} de %{totalStudents} estudiantes","view_range_student_details_8116d68a":"Ver la gama de detalles del estudiante"},"fa":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ به %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} از %{totalStudents} دانشجو","view_range_student_details_8116d68a":"مشاهده بازه بندی اطلاعات دانشجو"},"fi":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ kohteeseen %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents}/%{totalStudents} opiskelijaa","view_range_student_details_8116d68a":"Tarkastele opiskelijatietojen vaihteluväliä"},"fr":{"lowerbound_to_upperbound_352a3c0b":"de %{lowerBound}+ à %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} sur %{totalStudents} élèves","view_range_student_details_8116d68a":"Voir les détails de l\'ensemble d\'élèves"},"fr-CA":{"lowerbound_to_upperbound_352a3c0b":"de %{lowerBound}+ à %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} sur %{totalStudents} étudiants","view_range_student_details_8116d68a":"Voir les détails de l\'ensemble d\'étudiant"},"he":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ ל %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} מתוך %{totalStudents} תלמידים","view_range_student_details_8116d68a":"הצגת פרטי קבוצת תלמידים"},"ht":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ a %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} sou %{totalStudents} elèv","view_range_student_details_8116d68a":"Afichaj detay gam elèv"},"hu":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ - %{upperBound}"},"is":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} af  %{totalStudents} nemendum","view_range_student_details_8116d68a":"Skoða upplýsingar um nemendahóp"},"it":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ a %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} su %{totalStudents} studenti","view_range_student_details_8116d68a":"Visualizza dettagli studenti intervallo"},"ja":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ から%{upperBound} へ","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} %{totalStudents} の受講生","view_range_student_details_8116d68a":"範囲の受講生の詳細を見る"},"mi":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ ki %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} I roto i %{totalStudents} ngā akonga","view_range_student_details_8116d68a":"Tiro whānui ngā taipitopito ākonga"},"nb":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} av %{totalStudents} studenter","view_range_student_details_8116d68a":"Vis studentdetaljserie"},"nb-x-k12":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} av %{totalStudents} elever","view_range_student_details_8116d68a":"Vis elevdetaljserie"},"nl":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ naar %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} van %{totalStudents} cursisten","view_range_student_details_8116d68a":"Weergavebereik cursistgegevens"},"nn":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ til %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} av %{totalStudents} studentar","view_range_student_details_8116d68a":"Sjå studentdetaljar innan området"},"pl":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ do %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} z %{totalStudents} uczestników","view_range_student_details_8116d68a":"Wyświetl szczegóły uczestników z zakresu"},"pt":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ a %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} de %{totalStudents} alunos","view_range_student_details_8116d68a":"Ver intervalo de detalhes do aluno"},"pt-BR":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ para %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} de %{totalStudents} alunos","view_range_student_details_8116d68a":"Visualizar detalhes do aluno do intervalo"},"ru":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ до %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} из %{totalStudents} учащихся","view_range_student_details_8116d68a":"Просмотреть сведения об учащихся из диапазона"},"sl":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ do %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} od %{totalStudents} študentov","view_range_student_details_8116d68a":"Ogled podrobnosti o študentu za razpon"},"sv":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ till %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} av %{totalStudents} studenter","view_range_student_details_8116d68a":"Visa intervall för studentdetaljer"},"sv-x-k12":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ till %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} av %{totalStudents} elever","view_range_student_details_8116d68a":"Visa intervall för elevdetaljer"},"uk":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ до %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents}з %{totalStudents}студентів","view_range_student_details_8116d68a":"Переглянути детальну інформацію про студента"},"zh-Hans":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ 到 %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents} %{totalStudents}个学生","view_range_student_details_8116d68a":"查看学生详细信息范围"},"zh-Hant":{"lowerbound_to_upperbound_352a3c0b":"%{lowerBound}+ 至 %{upperBound}","rangestudents_out_of_totalstudents_students_e5ee60e1":"%{rangeStudents}  %{totalStudents} 個學生","view_range_student_details_8116d68a":"查看範圍學生詳細資料"}}'))
var m=f["default"].scoped("cyoe_assignment_sidebar_breakdown_graph_bar")
_.a.string,_.a.number,_.a.func
var h=Object(s["a"])("div",{className:"crs-bar__horizontal-inside"})
class v extends i.a.Component{constructor(){super(...arguments)
this.selectRange=e=>{this.props.openSidebar(e.target)
this.props.selectRange(this.props.rangeIndex)}}renderInnerBar(){const e=Math.min(this.props.rangeStudents/this.props.totalStudents*100,100)
const t={width:e+"%"}
return e>0?Object(s["a"])("div",{style:t,className:"crs-bar__horizontal-inside-fill"}):null}render(){const e=this.props,t=e.rangeStudents,n=e.totalStudents
return Object(s["a"])("div",{className:"crs-bar__container"},void 0,Object(s["a"])("div",{className:"crs-bar__horizontal-outside"},void 0,h,this.renderInnerBar()),Object(s["a"])("div",{className:"crs-bar__bottom"},void 0,Object(s["a"])("span",{className:"crs-bar__info"},void 0,m.t("%{lowerBound}+ to %{upperBound}",{upperBound:this.props.upperBound,lowerBound:this.props.lowerBound})),Object(s["a"])("button",{className:"crs-link-button",onClick:this.selectRange,title:m.t("View range student details")},void 0,m.t("%{rangeStudents} out of %{totalStudents} students",{rangeStudents:t,totalStudents:n}))))}}var y=v
_.a.object,_.a.array,_.a.func,_.a.number,_.a.bool
class k extends i.a.Component{renderContent(){return this.props.isLoading?Object(s["a"])("div",{className:"crs-breakdown-graph__loading"},void 0,Object(s["a"])(u["a"],{renderTitle:p.t("Loading"),size:"small"}),Object(s["a"])("p",{},void 0,p.t("Loading Data.."))):this.renderBars()}renderBars(){const e=this.props,t=e.ranges,n=e.assignment,a=e.enrolled,r=e.openSidebar,i=e.selectRange
return t.map((e,t)=>{let o=e.size,d=e.scoring_range
return Object(s["a"])(y,{rangeIndex:t,rangeStudents:o,totalStudents:a,upperBound:Object(g["b"])(d.upper_bound,n,true),lowerBound:Object(g["b"])(d.lower_bound,n,false),openSidebar:r,selectRange:i},t)})}render(){return Object(s["a"])("div",{className:"crs-breakdown-graph"},void 0,Object(s["a"])("h2",{},void 0,p.t("Mastery Paths Breakdown")),this.renderContent())}}var w=k
var S=n("Xx/m")
var j=n("7Hz5")
var O=n("IRk9")
Object(b["a"])(JSON.parse('{"ar":{"close_details_sidebar_ff8f663d":"إغلاق الشريط الجانبي للتفاصيل"},"cy":{"close_details_sidebar_ff8f663d":"Cau’r bar manylion ar yr ochr"},"da":{"close_details_sidebar_ff8f663d":"Luk sidepaneldetaljer"},"da-x-k12":{"close_details_sidebar_ff8f663d":"Luk sidepaneldetaljer"},"de":{"close_details_sidebar_ff8f663d":"Details-Seitenleiste schließen"},"en-AU":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"en-AU-x-unimelb":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"en-CA":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"en-GB":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"en-GB-x-lbs":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"en-GB-x-ukhe":{"close_details_sidebar_ff8f663d":"Close details sidebar"},"es":{"close_details_sidebar_ff8f663d":"Cerrar la barra lateral de detalles"},"fa":{"close_details_sidebar_ff8f663d":"بستن نوار کناری جزئیات"},"fi":{"close_details_sidebar_ff8f663d":"Sulje tietojen sivupalkki"},"fr":{"close_details_sidebar_ff8f663d":"Fermer la barre latérale des détails"},"fr-CA":{"close_details_sidebar_ff8f663d":"Fermer la barre latérale des détails"},"he":{"close_details_sidebar_ff8f663d":"סגירת פירוט סרגל צדי"},"ht":{"close_details_sidebar_ff8f663d":"Fèmen detay ba lateral yo"},"is":{"close_details_sidebar_ff8f663d":"Loka hliðarslárupplýsingum"},"it":{"close_details_sidebar_ff8f663d":"Chiudi barra laterale dettagli"},"ja":{"close_details_sidebar_ff8f663d":"詳細のサイドバーを閉じる"},"mi":{"close_details_sidebar_ff8f663d":"Katia kōrero paetaha"},"nb":{"close_details_sidebar_ff8f663d":"Lukk detaljsidefeltet"},"nb-x-k12":{"close_details_sidebar_ff8f663d":"Lukk detaljsidefeltet"},"nl":{"close_details_sidebar_ff8f663d":"Zijbalk met details sluiten"},"nn":{"close_details_sidebar_ff8f663d":"Lukk detalj-sidestolpen"},"pl":{"close_details_sidebar_ff8f663d":"Zamknij pasek boczny ze szczegółami"},"pt":{"close_details_sidebar_ff8f663d":"Fechar detalhes da barra lateral"},"pt-BR":{"close_details_sidebar_ff8f663d":"Fechar barra lateral de detalhes"},"ru":{"close_details_sidebar_ff8f663d":"Закрыть боковую панель с деталями"},"sl":{"close_details_sidebar_ff8f663d":"Zapri stransko vrstico s podrobnostmi"},"sv":{"close_details_sidebar_ff8f663d":"Stäng sidofältet för detaljer"},"sv-x-k12":{"close_details_sidebar_ff8f663d":"Stäng sidofältet för detaljer"},"tr":{"close_details_sidebar_ff8f663d":"Ayrıntılar kenar çubuğunu kapat"},"uk":{"close_details_sidebar_ff8f663d":"Закрити деталі бічної панелі"},"zh-Hans":{"close_details_sidebar_ff8f663d":"关闭详细信息侧边栏"},"zh-Hant":{"close_details_sidebar_ff8f663d":"關閉詳細側邊欄"}}'))
var z=f["default"].scoped("cyoe_assignment_sidebar_breakdown_details")
var x=n("KIj7")
var E=n("S4Kx")
var A=n("CyXg")
var C=n("HsON")
var D=n("TSYQ")
var T=n.n(D)
Object(b["a"])(JSON.parse('{"ar":{"mastery_paths_breakdown_6e0b5fce":"تصنيف مسارات الإتقان"},"cy":{"mastery_paths_breakdown_6e0b5fce":"Dadansoddi Llwybrau Meistroli"},"da":{"mastery_paths_breakdown_6e0b5fce":"Opdeling af læringsstier"},"da-x-k12":{"mastery_paths_breakdown_6e0b5fce":"Opdeling af læringsstier"},"de":{"mastery_paths_breakdown_6e0b5fce":"Übersicht der Leistungsziel-Pfade"},"en-AU":{"mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-AU-x-unimelb":{"mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-CA":{"mastery_paths_breakdown_6e0b5fce":"Mastery Paths Breakdown"},"en-GB":{"mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"en-GB-x-lbs":{"mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"en-GB-x-ukhe":{"mastery_paths_breakdown_6e0b5fce":"Mastery paths breakdown"},"es":{"mastery_paths_breakdown_6e0b5fce":"Desglose de los caminos del dominio"},"fa":{"mastery_paths_breakdown_6e0b5fce":"از کار افتادن مسیرهای تسلط"},"fi":{"mastery_paths_breakdown_6e0b5fce":"Hallintapolkujen erittely"},"fr":{"mastery_paths_breakdown_6e0b5fce":"Répartition des parcours de maîtrise"},"fr-CA":{"mastery_paths_breakdown_6e0b5fce":"Répartition des parcours de maîtrise"},"he":{"mastery_paths_breakdown_6e0b5fce":"מסלולי התמחות לא תקינים"},"ht":{"mastery_paths_breakdown_6e0b5fce":"Repatisyon Pakou Prensipal"},"hu":{"mastery_paths_breakdown_6e0b5fce":"Jártassági útvonal üzemzavar"},"is":{"mastery_paths_breakdown_6e0b5fce":"Sundurliðun tileinkunarslóðar"},"it":{"mastery_paths_breakdown_6e0b5fce":"Analisi percorsi di acquisizione padronanza"},"ja":{"mastery_paths_breakdown_6e0b5fce":"熟達の過程の内訳"},"mi":{"mastery_paths_breakdown_6e0b5fce":"Papatau Mana Ara"},"nb":{"mastery_paths_breakdown_6e0b5fce":"Læringsstier Sammendrag"},"nb-x-k12":{"mastery_paths_breakdown_6e0b5fce":"Læringsstier Sammendrag"},"nl":{"mastery_paths_breakdown_6e0b5fce":"Uitsplitsing Mastery Paths"},"nn":{"mastery_paths_breakdown_6e0b5fce":"Sjå meistringssti-detaljar"},"pl":{"mastery_paths_breakdown_6e0b5fce":"Podział ścieżek biegłości na grupy"},"pt":{"mastery_paths_breakdown_6e0b5fce":"Falhas no Circuito Principal"},"pt-BR":{"mastery_paths_breakdown_6e0b5fce":"Quebra de Caminhos de Domínio"},"ru":{"mastery_paths_breakdown_6e0b5fce":"Разбивка Пути усвоения"},"sl":{"mastery_paths_breakdown_6e0b5fce":"Razčlenitev napredovanj v odličnosti"},"sv":{"mastery_paths_breakdown_6e0b5fce":"Detaljerad information om måluppfyllelse"},"sv-x-k12":{"mastery_paths_breakdown_6e0b5fce":"Detaljerad information om måluppfyllelse"},"tr":{"mastery_paths_breakdown_6e0b5fce":"Yeterlilik Süreçleri Dökümü"},"uk":{"mastery_paths_breakdown_6e0b5fce":"Розподіл Шляхів Майстерності"},"zh-Hans":{"mastery_paths_breakdown_6e0b5fce":"掌握途径故障"},"zh-Hant":{"mastery_paths_breakdown_6e0b5fce":"精通路徑分解"}}'))
var N=f["default"].scoped("cyoe_assignment_sidebar_student_ranges_view")
const B=_.a.shape,I=_.a.string
B({course_id:I.isRequired,trigger_assignment:I.isRequired})
const L=_.a.shape,M=_.a.arrayOf,P=_.a.string,R=_.a.number
L({course_id:R,name:P,title:P,grading_scheme:P,grading_type:P.isRequired,points_possible:R.isRequired,submission_types:M(P)})
const G=_.a.shape,J=_.a.number
G({range:J,student:J})
const V=_.a.shape,W=_.a.string,U=_.a.number
V({id:U.isRequired,name:W.isRequired,avatar_url:W})
Object(b["a"])(JSON.parse('{"ar":{"select_student_name_caaff244":"تحديد طالب %{name}"},"cy":{"select_student_name_caaff244":"Dewiswch fyfyriwr %{name}"},"da":{"select_student_name_caaff244":"Vælg studerende %{name}"},"da-x-k12":{"select_student_name_caaff244":"Vælg elev %{name}"},"de":{"select_student_name_caaff244":"Student auswählen %{name}"},"en-AU":{"select_student_name_caaff244":"Select student %{name}"},"en-AU-x-unimelb":{"select_student_name_caaff244":"Select student %{name}"},"en-CA":{"select_student_name_caaff244":"Select student %{name}"},"en-GB":{"select_student_name_caaff244":"Select student %{name}"},"en-GB-x-lbs":{"select_student_name_caaff244":"Select student %{name}"},"en-GB-x-ukhe":{"select_student_name_caaff244":"Select student %{name}"},"es":{"select_student_name_caaff244":"Seleccionar estudiante %{name}"},"fa":{"select_student_name_caaff244":"انتخاب دانشجوی %{name}"},"fi":{"select_student_name_caaff244":"Valitse opiskelija %{name}"},"fr":{"select_student_name_caaff244":"Sélectionner un élève %{name}"},"fr-CA":{"select_student_name_caaff244":"Sélectionner un étudiant %{name}"},"he":{"select_student_name_caaff244":"בחירת התלמיד %{name}"},"ht":{"select_student_name_caaff244":"Seleksyone elèv %{name}"},"is":{"select_student_name_caaff244":"Velja nemanda %{name}"},"it":{"select_student_name_caaff244":"Seleziona studente %{name}"},"ja":{"select_student_name_caaff244":"受講生の選択%{name}"},"mi":{"select_student_name_caaff244":"Tīpako ākonga %{name}"},"nb":{"select_student_name_caaff244":"Velg student %{name}"},"nb-x-k12":{"select_student_name_caaff244":"Velg elev %{name}"},"nl":{"select_student_name_caaff244":"Cursist selecteren %{name}"},"nn":{"select_student_name_caaff244":"Vel student %{name}"},"pl":{"select_student_name_caaff244":"Wybierz uczestnika %{name}"},"pt":{"select_student_name_caaff244":"Seleccionar aluno %{name}"},"pt-BR":{"select_student_name_caaff244":"Selecionar aluno %{name}"},"ru":{"select_student_name_caaff244":"Выбрать учащегося %{name}"},"sl":{"select_student_name_caaff244":"Izberi študenta %{name}"},"sv":{"select_student_name_caaff244":"Välj student %{name}"},"sv-x-k12":{"select_student_name_caaff244":"Välj elev %{name}"},"uk":{"select_student_name_caaff244":"Вибрати студента %{name}"},"zh-Hans":{"select_student_name_caaff244":"选择学生%{name}"},"zh-Hant":{"select_student_name_caaff244":"選取學生%{name}"}}'))
var q=f["default"].scoped("cyoe_assignment_sidebar_student_range_itme")
class F extends i.a.Component{constructor(){super(...arguments)
this.selectStudent=()=>{this.props.selectStudent(this.props.studentIndex)}}render(){const e=this.props.student.user.avatar_image_url||"/images/messages/avatar-50.png"
const t=this.props.student.trend
const n=T()({"crs-student__trend-icon":true,"crs-student__trend-icon__positive":1===t,"crs-student__trend-icon__neutral":0===t,"crs-student__trend-icon__negative":-1===t})
const a=null!==t&&void 0!==t
return Object(s["a"])("div",{className:"crs-student-range__item"},void 0,Object(s["a"])("img",{src:e,className:"crs-student__avatar",onClick:this.selectStudent}),Object(s["a"])("button",{className:"crs-student__name crs-link-button",onClick:this.selectStudent,"aria-label":q.t("Select student %{name}",{name:this.props.student.user.name})},void 0,this.props.student.user.name),a&&Object(s["a"])("span",{className:n}))}}_.a.object,_.a.func
class H extends i.a.Component{render(){this.props.range.students
return Object(s["a"])("div",{className:"crs-student-range"},void 0,this.props.range.students.map((e,t)=>Object(s["a"])(F,{student:e,studentIndex:t,selectStudent:this.props.onStudentSelect},e.user.id)))}}_.a.array,_.a.func,_.a.object
class Q extends i.a.Component{constructor(e){super()
this.handleToggle=e=>{this.setState({selectedRange:e})}
this.state={selectedRange:e.selectedPath.range}}renderTabs(){return this.props.ranges.map((e,t)=>{const n=this.state.selectedRange===t
const a=Object(g["b"])(e.scoring_range.lower_bound,this.props.assignment,false)
const r=Object(g["b"])(e.scoring_range.upper_bound,this.props.assignment,true)
const i="> ".concat(a," - ").concat(r)
return Object(s["a"])(E["a"],{as:"div",padding:"xxx-small"},void 0,Object(s["a"])(x["a"],{variant:"filled",expanded:n,summary:i,onToggle:()=>this.handleToggle(t),size:"large",iconExpanded:A["a"],icon:C["a"]},t,Object(s["a"])(H,{range:e,onStudentSelect:this.props.selectStudent})))})}render(){const e=!!this.props.student
const t=T()({"crs-ranges-view":true,"crs-ranges-view__hidden":e})
return Object(s["a"])("div",{className:t},void 0,Object(s["a"])("header",{className:"crs-ranges-view__header"},void 0,Object(s["a"])("h4",{},void 0,N.t("Mastery Paths Breakdown"))),this.renderTabs())}}Object(b["a"])(JSON.parse('{"ar":{"back_2900f52a":"عودة","loading_bde52856":"يتم الآن التحميل...","loading_data_ecd89ba":"جاري تحميل البيانات..","not_submitted_7d05fdb4":"لم يتم إرسالها","send_message_6ccc90e8":"إرسال رسالة","submitted_submitdate_bdd3bf09":"تم الإرسال: %{submitDate}","view_next_student_9fc72fef":"عرض الطالب التالي","view_previous_student_90000459":"عرض الطالب السابق","view_submission_ff3da5d":"عرض الإرسال"},"cy":{"back_2900f52a":"Yn ôl","loading_bde52856":"Wrthi’n llwytho","loading_data_ecd89ba":"Wrthi’n llwytho data...","not_submitted_7d05fdb4":"Heb Gyflwyno","send_message_6ccc90e8":"Anfon Neges","submitted_submitdate_bdd3bf09":"Wedi cyflwyno: %{submitDate}","view_next_student_9fc72fef":"gweld y myfyriwr nesaf","view_previous_student_90000459":"gweld y myfyriwr blaenorol","view_submission_ff3da5d":"Gweld Cyflwyniad"},"da":{"back_2900f52a":"Tilbage","loading_bde52856":"Indlæser","loading_data_ecd89ba":"Indlæsning af data ...","not_submitted_7d05fdb4":"Ikke indsendt","send_message_6ccc90e8":"Send besked","submitted_submitdate_bdd3bf09":"Afleveret: %{submitDate}","view_next_student_9fc72fef":"se næste studerende","view_previous_student_90000459":"se tidligere studerende","view_submission_ff3da5d":"Vis aflevering"},"da-x-k12":{"back_2900f52a":"Tilbage","loading_bde52856":"Indlæser","loading_data_ecd89ba":"Indlæsning af data ...","not_submitted_7d05fdb4":"Ikke indsendt","send_message_6ccc90e8":"Send besked","submitted_submitdate_bdd3bf09":"Afleveret: %{submitDate}","view_next_student_9fc72fef":"se næste elev","view_previous_student_90000459":"se tidligere elev","view_submission_ff3da5d":"Vis aflevering"},"de":{"back_2900f52a":"Zurück","loading_bde52856":"Wird geladen","loading_data_ecd89ba":"Daten werden geladen ...","not_submitted_7d05fdb4":"Nicht abgegeben","send_message_6ccc90e8":"Nachricht senden","submitted_submitdate_bdd3bf09":"Abgegeben am: %{submitDate}","view_next_student_9fc72fef":"Nächsten Studenten anzeigen","view_previous_student_90000459":"Vorherigen Studenten anzeigen","view_submission_ff3da5d":"Abgabe anzeigen"},"el":{"back_2900f52a":"Πίσω","loading_bde52856":"Φόρτωση"},"en-AU":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data","not_submitted_7d05fdb4":"Not Submitted","send_message_6ccc90e8":"Send Message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"view next student","view_previous_student_90000459":"view previous student","view_submission_ff3da5d":"View Submission"},"en-AU-x-unimelb":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data","not_submitted_7d05fdb4":"Not Submitted","send_message_6ccc90e8":"Send Message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"view next student","view_previous_student_90000459":"view previous student","view_submission_ff3da5d":"View Submission"},"en-CA":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data..","not_submitted_7d05fdb4":"Not Submitted","send_message_6ccc90e8":"Send Message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"view next student","view_previous_student_90000459":"view previous student","view_submission_ff3da5d":"View Submission"},"en-GB":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","not_submitted_7d05fdb4":"Not submitted","send_message_6ccc90e8":"Send message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"View next student","view_previous_student_90000459":"View previous student","view_submission_ff3da5d":"View submission"},"en-GB-x-lbs":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","not_submitted_7d05fdb4":"Not submitted","send_message_6ccc90e8":"Send message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"View next student","view_previous_student_90000459":"View previous student","view_submission_ff3da5d":"View submission"},"en-GB-x-ukhe":{"back_2900f52a":"Back","loading_bde52856":"Loading","loading_data_ecd89ba":"Loading Data…","not_submitted_7d05fdb4":"Not submitted","send_message_6ccc90e8":"Send message","submitted_submitdate_bdd3bf09":"Submitted: %{submitDate}","view_next_student_9fc72fef":"View next student","view_previous_student_90000459":"View previous student","view_submission_ff3da5d":"View submission"},"es":{"back_2900f52a":"Volver","loading_bde52856":"Cargando","loading_data_ecd89ba":"Cargando datos...","not_submitted_7d05fdb4":"No entregado","send_message_6ccc90e8":"Enviar mensaje","submitted_submitdate_bdd3bf09":"Entregado: %{submitDate}","view_next_student_9fc72fef":"ver siguiente estudiante","view_previous_student_90000459":"ver estudiante anterior","view_submission_ff3da5d":"Ver entrega"},"fa":{"back_2900f52a":"بازگشت","loading_bde52856":"در حال بارگذاری","loading_data_ecd89ba":"در حال بارگذاری داده ها ...","not_submitted_7d05fdb4":"ارسال نشده است","send_message_6ccc90e8":"ارسال پیام","submitted_submitdate_bdd3bf09":"ارسال شده: %{submitDate}","view_next_student_9fc72fef":"مشاهده دانشجوی بعدی","view_previous_student_90000459":"مشاهده دانشجوی قبلی","view_submission_ff3da5d":"مشاهده مورد ارسالی"},"fi":{"back_2900f52a":"Takaisin","loading_bde52856":"Ladataan","loading_data_ecd89ba":"Ladataan tietoja...","not_submitted_7d05fdb4":"Ei lähetetty","send_message_6ccc90e8":"Lähetä viesti","submitted_submitdate_bdd3bf09":"Lähetetty: %{submitDate}","view_next_student_9fc72fef":"tarkastele seuraavaa opiskelija","view_previous_student_90000459":"tarkastele edellistä opiskelijaa","view_submission_ff3da5d":"Näytä lähetystä"},"fr":{"back_2900f52a":"Retour","loading_bde52856":"En cours de chargement","loading_data_ecd89ba":"Chargement des données...","not_submitted_7d05fdb4":"Non soumis","send_message_6ccc90e8":"Envoyer message","submitted_submitdate_bdd3bf09":"Soumis : %{submitDate}","view_next_student_9fc72fef":"voir l\'élève suivant","view_previous_student_90000459":"voir l\'élève précédent","view_submission_ff3da5d":"Voir la soumission"},"fr-CA":{"back_2900f52a":"Retour","loading_bde52856":"Chargement","loading_data_ecd89ba":"Chargement des données...","not_submitted_7d05fdb4":"Non soumis","send_message_6ccc90e8":"Envoyer un message","submitted_submitdate_bdd3bf09":"Soumis : %{submitDate}","view_next_student_9fc72fef":"voir l\'étudiant suivant","view_previous_student_90000459":"voir l\'étudiant précédent","view_submission_ff3da5d":"Voir l’envoi"},"he":{"back_2900f52a":"חזרה","loading_bde52856":"טוען","loading_data_ecd89ba":"טוען נתונים...","not_submitted_7d05fdb4":"לא הוגש","send_message_6ccc90e8":"שליחת הודעה","submitted_submitdate_bdd3bf09":"הוגש: %{submitDate}","view_next_student_9fc72fef":"הצגת התלמיד הבא","view_previous_student_90000459":"הצגת התלמיד הקודם","view_submission_ff3da5d":"הצגת הגשה"},"ht":{"back_2900f52a":"Retounen","loading_bde52856":"Chajman","loading_data_ecd89ba":"Chajman Done...","not_submitted_7d05fdb4":"Pa Soumèt","send_message_6ccc90e8":"Voye Mesaj","submitted_submitdate_bdd3bf09":"Soumèt: %{submitDate}","view_next_student_9fc72fef":"afichaj pwochen elèv","view_previous_student_90000459":"afichaj elèv pase","view_submission_ff3da5d":"Afichaj Soumisyon"},"hu":{"back_2900f52a":"Vissza","loading_bde52856":"Töltődik","loading_data_ecd89ba":"Adatok betöltése...","not_submitted_7d05fdb4":"Nincs beküldve","send_message_6ccc90e8":"Üzenetküldés","view_next_student_9fc72fef":"következő hallgató megtekintése","view_previous_student_90000459":"előző hallgató megtekintése","view_submission_ff3da5d":"Beadandó megtekintése"},"hy":{"back_2900f52a":"Վերադառնալ","loading_bde52856":"Բեռնում է"},"is":{"back_2900f52a":"Til baka","loading_bde52856":"Sæki","loading_data_ecd89ba":"Sæki gögn...","not_submitted_7d05fdb4":"Ekki lagt fram","send_message_6ccc90e8":"Senda skilaboð","submitted_submitdate_bdd3bf09":"Skilað: %{submitDate}","view_next_student_9fc72fef":"skoða næsta nemanda","view_previous_student_90000459":"skoða fyrri nemanda","view_submission_ff3da5d":"Skoða skil"},"it":{"back_2900f52a":"Indietro","loading_bde52856":"Caricamento in corso","loading_data_ecd89ba":"Caricamento dei dati in corso...","not_submitted_7d05fdb4":"Non inviato","send_message_6ccc90e8":"Invia messaggio","submitted_submitdate_bdd3bf09":"Inviato: %{submitDate}","view_next_student_9fc72fef":"visualizza studente successivo","view_previous_student_90000459":"visualizza studente precedente","view_submission_ff3da5d":"Visualizza consegna"},"ja":{"back_2900f52a":"戻る","loading_bde52856":"読み込み中","loading_data_ecd89ba":"データをロード中...","not_submitted_7d05fdb4":"未提出","send_message_6ccc90e8":"メッセージを送信","submitted_submitdate_bdd3bf09":"提出しました：%{submitDate}","view_next_student_9fc72fef":"次の受講生を見る","view_previous_student_90000459":"前の受講生を見る","view_submission_ff3da5d":"提出を見る"},"mi":{"back_2900f52a":"Hoki ki muri","loading_bde52856":"E tukuake ana","loading_data_ecd89ba":"Te utanga raraunga","not_submitted_7d05fdb4":"E Kore E Tukua","send_message_6ccc90e8":"Tukua Karere","submitted_submitdate_bdd3bf09":"Kua tukuna %{submitDate}","view_next_student_9fc72fef":"Tiro ākonga i muri mai","view_previous_student_90000459":"Tiro ākonga o mua","view_submission_ff3da5d":"Tiro Tāpaetanga"},"nb":{"back_2900f52a":"Tilbake","loading_bde52856":"Laster","loading_data_ecd89ba":"Laster data...","not_submitted_7d05fdb4":"Ikke levert","send_message_6ccc90e8":"Send melding","submitted_submitdate_bdd3bf09":"Levert: %{submitDate}","view_next_student_9fc72fef":"vis neste student","view_previous_student_90000459":"vis forrige student","view_submission_ff3da5d":"Vis innlevering"},"nb-x-k12":{"back_2900f52a":"Tilbake","loading_bde52856":"Laster","loading_data_ecd89ba":"Laster data...","not_submitted_7d05fdb4":"Ikke levert","send_message_6ccc90e8":"Send melding","submitted_submitdate_bdd3bf09":"Levert: %{submitDate}","view_next_student_9fc72fef":"vis neste elev","view_previous_student_90000459":"vis forrige elev","view_submission_ff3da5d":"Vis innlevering"},"nl":{"back_2900f52a":"Terug","loading_bde52856":"Bezig met laden...","loading_data_ecd89ba":"Gegevens laden..","not_submitted_7d05fdb4":"Niet ingediend","send_message_6ccc90e8":"Bericht versturen","submitted_submitdate_bdd3bf09":"Ingeleverd: %{submitDate}","view_next_student_9fc72fef":"volgende cursist weergeven","view_previous_student_90000459":"vorige cursist weergeven","view_submission_ff3da5d":"Inlevering weergeven"},"nn":{"back_2900f52a":"Tilbake","loading_bde52856":"Lastar","loading_data_ecd89ba":"Lastar data..","not_submitted_7d05fdb4":"Ikkje levert","send_message_6ccc90e8":"Send melding","submitted_submitdate_bdd3bf09":"Innlevert %{submitDate}","view_next_student_9fc72fef":"vis neste student","view_previous_student_90000459":"vis førre student","view_submission_ff3da5d":"Vis innlevering"},"pl":{"back_2900f52a":"Wstecz","loading_bde52856":"Trwa ładowanie","loading_data_ecd89ba":"Wczytywanie danych...","not_submitted_7d05fdb4":"Nie wysłano","send_message_6ccc90e8":"Wyślij wiadomość","submitted_submitdate_bdd3bf09":"Wysłano: %{submitDate}","view_next_student_9fc72fef":"Wyświetl kolejnego uczestnika","view_previous_student_90000459":"Wyświetl poprzedniego uczestnika","view_submission_ff3da5d":"Wyświetl wysłane materiały"},"pt":{"back_2900f52a":"Voltar","loading_bde52856":"Carregando","loading_data_ecd89ba":"A carregar dados...","not_submitted_7d05fdb4":"Não Entregue","send_message_6ccc90e8":"Enviar Mensagem","submitted_submitdate_bdd3bf09":"Submetido: %{submitDate}","view_next_student_9fc72fef":"ver próximo aluno","view_previous_student_90000459":"ver aluno anterior","view_submission_ff3da5d":"Ver Submissão"},"pt-BR":{"back_2900f52a":"Voltar","loading_bde52856":"Carregando","loading_data_ecd89ba":"Carregando dados...","not_submitted_7d05fdb4":"Não Enviado","send_message_6ccc90e8":"Enviar mensagem","submitted_submitdate_bdd3bf09":"Enviado: %{submitDate}","view_next_student_9fc72fef":"exibir próximo aluno","view_previous_student_90000459":"exibir aluno anterior","view_submission_ff3da5d":"Visualizar envio"},"ru":{"back_2900f52a":"Назад","loading_bde52856":"Загрузка","loading_data_ecd89ba":"Загрузка данных...","not_submitted_7d05fdb4":"Не отправлено","send_message_6ccc90e8":"Отправить сообщение","submitted_submitdate_bdd3bf09":"Отправлено: %{submitDate}","view_next_student_9fc72fef":"просмотреть следующего учащегося","view_previous_student_90000459":"просмотреть предыдущего учащегося","view_submission_ff3da5d":"Просмотреть отправленные материалы"},"sl":{"back_2900f52a":"Nazaj","loading_bde52856":"Nalaganje","loading_data_ecd89ba":"Nalaganje podatkov ...","not_submitted_7d05fdb4":"Ni oddano.","send_message_6ccc90e8":"Pošlji sporočilo","submitted_submitdate_bdd3bf09":"Poslano: %{submitDate}","view_next_student_9fc72fef":"ogled naslednjega študenta","view_previous_student_90000459":"ogled prejšnjega študenta","view_submission_ff3da5d":"Ogled oddaje"},"sv":{"back_2900f52a":"Tillbaka","loading_bde52856":"Laddar","loading_data_ecd89ba":"Läser in data ...","not_submitted_7d05fdb4":"Inte inlämnad","send_message_6ccc90e8":"Skicka meddelande","submitted_submitdate_bdd3bf09":"Inlämnad: %{submitDate}","view_next_student_9fc72fef":"visa nästa student","view_previous_student_90000459":"visa föregående student","view_submission_ff3da5d":"Visa inlämning"},"sv-x-k12":{"back_2900f52a":"Tillbaka","loading_bde52856":"Laddar","loading_data_ecd89ba":"Läser in data ...","not_submitted_7d05fdb4":"Inte inlämnad","send_message_6ccc90e8":"Skicka meddelande","submitted_submitdate_bdd3bf09":"Inlämnad: %{submitDate}","view_next_student_9fc72fef":"visa nästa elev","view_previous_student_90000459":"visa föregående elev","view_submission_ff3da5d":"Visa inlämning"},"tr":{"back_2900f52a":"Geri","loading_bde52856":"Yükleniyor","send_message_6ccc90e8":"Mesaj Gönder"},"uk":{"back_2900f52a":"Назад","loading_bde52856":"Завантаження","loading_data_ecd89ba":"Завантаження даних...","not_submitted_7d05fdb4":"Не відправлено","send_message_6ccc90e8":"Відправити повідомлення","submitted_submitdate_bdd3bf09":"Відправлено: %{submitDate}","view_next_student_9fc72fef":"переглянути наступного студента","view_previous_student_90000459":"переглянути попереднього студента","view_submission_ff3da5d":"Переглянути відправлення"},"zh-Hans":{"back_2900f52a":"后退","loading_bde52856":"加载","loading_data_ecd89ba":"正在加载数据……","not_submitted_7d05fdb4":"未提交","send_message_6ccc90e8":"发送消息","submitted_submitdate_bdd3bf09":"已提交%{submitDate}","view_next_student_9fc72fef":"查看下一个学生","view_previous_student_90000459":"查看上一个学生","view_submission_ff3da5d":"查看提交的作业"},"zh-Hant":{"back_2900f52a":"返回","loading_bde52856":"正在載入","loading_data_ecd89ba":"載入資料中..","not_submitted_7d05fdb4":"未提交","send_message_6ccc90e8":"傳送訊息","submitted_submitdate_bdd3bf09":"已提交：%{submitDate}","view_next_student_9fc72fef":"查看下一個學生","view_previous_student_90000459":"查看上一個學生","view_submission_ff3da5d":"檢視提交項目"}}'))
var K=f["default"].scoped("cyoe_assignment_sidebar_student_details_view")
var Y=n("Pm+R")
_.a.object,_.a.number
class X extends i.a.Component{render(){const e=this.props.trend
const t=T()({"crs-student__trend-icon":true,"crs-student__trend-icon__positive":1===e,"crs-student__trend-icon__neutral":0===e,"crs-student__trend-icon__negative":-1===e})
const n=null!==e&&void 0!==e
const a=Y["a"].getCategory(this.props.assignment).id
return Object(s["a"])("div",{className:"crs-student-details__assignment"},void 0,Object(s["a"])("i",{className:"icon-".concat(a," crs-student-details__assignment-icon crs-icon-").concat(a)}),Object(s["a"])("div",{className:"crs-student-details__assignment-name"},void 0,this.props.assignment.name),Object(s["a"])("div",{className:"crs-student-details__assignment-score"},void 0,Object(s["a"])("div",{},void 0,Object(g["b"])(this.props.assignment.score,this.props.assignment,true)),n&&Object(s["a"])("span",{className:t})))}}_.a.shape,_.a.string,_.a.number,_.a.arrayOf,_.a.func,_.a.bool
var Z=Object(s["a"])("i",{"aria-hidden":true,className:"icon-arrow-open-left"})
var $=Object(s["a"])("i",{"aria-hidden":true,className:"icon-arrow-open-left"})
var ee=Object(s["a"])("i",{"aria-hidden":true,className:"icon-email crs-icon-email"})
var te=Object(s["a"])("i",{"aria-hidden":true,className:"icon-arrow-open-right"})
class ne extends i.a.Component{componentDidUpdate(e){this.props.student&&!e.student&&setTimeout(()=>this.backButton.focus(),100)}renderHeader(){if(!this.props.student)return null
return Object(s["a"])("header",{className:"crs-student-details__header"},void 0,i.a.createElement("button",{className:"crs-breakdown__link crs-back-button",ref:e=>{this.backButton=e},onClick:this.props.unselectStudent},Z,K.t("Back")))}renderStudentProfile(){const e=this.props,t=e.student,n=e.triggerAssignment
const a=n.assignment
const r=t.avatar_image_url||"/images/messages/avatar-50.png"
const i="/conversations?context_id=course_".concat(a.course_id,"&user_id=").concat(t.id,"&user_name=").concat(t.name)
return Object(s["a"])("section",{className:"crs-student-details__profile-content"},void 0,Object(s["a"])("button",{className:"Button Button--icon-action student-details__prev-student","aria-label":K.t("view previous student"),onClick:this.props.selectPrevStudent,type:"button"},void 0,$),Object(s["a"])("div",{className:"crs-student-details__profile-inner-content"},void 0,Object(s["a"])("img",{src:r,"aria-hidden":true,className:"crs-student-details__profile-image"}),Object(s["a"])("h3",{className:"crs-student-details__name"},void 0,t.name),Object(s["a"])("a",{target:"_blank",rel:"noopener noreferrer",href:i,className:"crs-breakdown__link"},void 0,ee,K.t("Send Message"))),Object(s["a"])("button",{className:"Button Button--icon-action student-details__next-student","aria-label":K.t("view next student"),onClick:this.props.selectNextStudent,type:"button"},void 0,te))}renderTriggerAssignment(){const e=this.props,t=e.student,n=e.triggerAssignment
const a=n||{},r=a.assignment,i=a.submission
const o="/courses/".concat(r.course_id,"/assignments/").concat(r.id,"/submissions/").concat(t.id)
let d=null
d=i?i.submitted_at?K.l("date.formats.long",new Date(i.submitted_at)):null:K.t("Not Submitted")
return Object(s["a"])("section",{className:"crs-student-details__score-content"},void 0,Object(s["a"])("h3",{className:"crs-student-details__score-number"},void 0,Object(g["a"])(i.grade,r)),Object(s["a"])("div",{className:"crs-student-details__score-title"},void 0,r.name),d?Object(s["a"])("div",{className:"crs-student-details__score-date"},void 0,K.t("Submitted: %{submitDate}",{submitDate:d})):null,Object(s["a"])("a",{target:"_blank",rel:"noopener noreferrer",href:o,className:"crs-breakdown__link"},void 0,K.t("View Submission")))}renderFollowOnAssignments(){const e=this.props.followOnAssignments||[]
return Object(s["a"])("section",{},void 0,e.map((e,t)=>Object(s["a"])(X,{assignment:e.assignment,score:e.score,trend:e.trend},t)))}renderContent(){if(this.props.isLoading)return Object(s["a"])("div",{className:"crs-student-details__loading"},void 0,Object(s["a"])(u["a"],{renderTitle:K.t("Loading"),size:"small"}),Object(s["a"])("p",{},void 0,K.t("Loading Data..")))
if(this.props.student)return Object(s["a"])("div",{},void 0,this.renderStudentProfile(),this.renderTriggerAssignment(),this.renderFollowOnAssignments())
return null}render(){const e=!this.props.student
const t=T()({"crs-student-details":true,"crs-student-details__hidden":e})
return Object(s["a"])("div",{className:t},void 0,this.renderHeader(),this.renderContent())}}_.a.array,_.a.object,_.a.func,_.a.bool
class ae extends i.a.Component{constructor(){super(...arguments)
this.unselectStudent=()=>{this.props.selectStudent(null)}
this.selectPrevStudent=()=>{let e=this.props.selectedPath.student
const t=this.props.ranges[this.props.selectedPath.range]
e>0?e-=1:e=t.size-1
this.props.selectStudent(e)}
this.selectNextStudent=()=>{let e=this.props.selectedPath.student
const t=this.props.ranges[this.props.selectedPath.range]
e<t.size-1?e+=1:e=0
this.props.selectStudent(e)}}render(){const e=this.props,t=e.selectedPath,n=e.ranges,a=e.students
const r=null!==t.student?n[t.range].students[t.student].user:null
const o=null!==t.student&&r?a[r.id]:null
return Object(s["a"])(j["a"],{open:this.props.showDetails,placement:"end",shouldContainFocus:true,defaultFocusElement:()=>this.closeButton},void 0,Object(s["a"])("div",{className:"crs-breakdown-details"},void 0,Object(s["a"])("div",{className:"crs-breakdown-details__content"},void 0,Object(s["a"])("span",{className:"crs-breakdown-details__closeButton"},void 0,i.a.createElement(S["a"],{variant:"icon",ref:e=>{this.closeButton=e},onClick:this.props.closeSidebar},Object(s["a"])("span",{className:"crs-breakdown-details__closeButtonIcon"},void 0,Object(s["a"])(O["a"],{title:z.t("Close details sidebar")})))),Object(s["a"])(Q,{assignment:this.props.assignment,ranges:n,selectedPath:t,selectStudent:this.props.selectStudent,student:r}),Object(s["a"])(ne,{isLoading:this.props.isStudentDetailsLoading,student:r,triggerAssignment:o&&o.triggerAssignment,followOnAssignments:o&&o.followOnAssignments,selectPrevStudent:this.selectPrevStudent,selectNextStudent:this.selectNextStudent,unselectStudent:this.unselectStudent}))))}}const se=Object(c["connect"])(e=>({assignment:e.assignment,ranges:e.ranges,enrolled:e.enrolled,isLoading:e.isInitialDataLoading}))(w)
const re=Object(c["connect"])(e=>({isStudentDetailsLoading:e.isStudentDetailsLoading,selectedPath:e.selectedPath,assignment:e.assignment,ranges:e.ranges,students:e.studentCache,showDetails:e.showDetails}))(ae)
class ie{constructor(e,t){this.store=e
this.actions=t}renderGraphs(e){const t={openSidebar:this.actions.openSidebar,selectRange:this.actions.selectRange}
d.a.render(Object(s["a"])(c["Provider"],{store:this.store},void 0,i.a.createElement(se,t)),e)}renderDetails(e){const t={selectRange:this.actions.selectRange,selectStudent:this.actions.selectStudent,closeSidebar:this.actions.closeSidebar}
d.a.render(Object(s["a"])(c["Provider"],{store:this.store},void 0,i.a.createElement(re,t)),e)}}var oe=n("sINF")
var de=n("VTBJ")
var ce=n("GLiE")
var le=n.n(ce)
const _e=(e,t)=>(n,a)=>{n=void 0===n?t:n
if(e[a.type]){let t=n
le.a.isObject(n)?t=Object(de["a"])({},n):Array.isArray(n)&&(t=n.slice())
return e[a.type](t,a)}return n}
const ue=(e,t)=>t.payload
const fe=function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:""
return(t,n)=>void 0===t?e:t}
var be=n("x1Tw")
const pe={call(e,t){let n=e.apiUrl,a=e.jwt
return Object(be["a"])({url:n+t,dataType:"json",headers:{Authorization:"Bearer "+a}}).then(e=>e.data)},loadInitialData(e){const t="/students_per_range?trigger_assignment=".concat(e.assignment.id)
return pe.call(e,t)},loadStudent(e,t){const n="/student_details?trigger_assignment=".concat(e.assignment.id,"&student_id=").concat(t)
return pe.call(e,n)}}
var ge=pe
function me(e){const t=e.split("_")
return t.map((e,t)=>0!==t&&e.length?e.charAt(0).toUpperCase()+e.slice(1).toLowerCase():e.toLowerCase()).join("")}function he(e){const t=t=>({type:e,payload:t})
t.type=e
t.toString=()=>e
return t}function ve(e){const t={}
const n={}
e.forEach(e=>{const a=he(e)
const s=me(a.type)
n[s]=a
t[a.type]=a.type})
return{actionTypes:t,actions:n}}const ye=["SET_INITIAL_DATA","SET_SCORING_RANGES","SET_RULE","SET_ENROLLED","SET_ASSIGNMENT","SET_ERRORS","SET_STUDENT_DETAILS","SELECT_RANGE","ADD_STUDENT_TO_CACHE","SELECT_STUDENT","OPEN_SIDEBAR","CLOSE_SIDEBAR","LOAD_INITIAL_DATA_START","LOAD_INITIAL_DATA_END","LOAD_STUDENT_DETAILS_START","LOAD_STUDENT_DETAILS_END"]
const ke=ve(ye),we=ke.actions,Se=ke.actionTypes
we.closeSidebarFrd=we.closeSidebar
we.closeSidebar=()=>(e,t)=>{const n=t().sidebarTrigger
e(we.closeSidebarFrd())
n.focus()}
we.loadInitialData=e=>(e,t)=>{e(we.loadInitialDataStart())
ge.loadInitialData(t()).then(t=>{e(we.setInitialData(t))
e(we.loadInitialDataEnd())}).catch(t=>{e(we.setErrors(t))
e(we.loadInitialDataEnd())})}
we.loadStudent=e=>(t,n)=>{t(we.loadStudentDetailsStart())
ge.loadStudent(n(),e).then(n=>{t(we.addStudentToCache({studentId:e,data:n}))
t(we.loadStudentDetailsEnd())}).catch(e=>{t(we.loadStudentDetailsEnd())
t(we.setErrors(e))})}
we.selectStudent=e=>(t,n)=>{t({type:Se.SELECT_STUDENT,payload:e})
const a=n(),s=a.studentCache,r=a.ranges,i=a.selectedPath
const o=r[i.range].students[e]
o&&!s[o.user.id.toString()]&&t(we.loadStudent(o.user.id.toString()))}
const je=_e({[Se.ADD_STUDENT_TO_CACHE]:(e,t)=>{const n=t.payload,a=n.studentId,s=n.data
e[a]={followOnAssignments:s.follow_on_assignments,triggerAssignment:s.trigger_assignment}
return e}},{})
const Oe=_e({[Se.LOAD_INITIAL_DATA_START]:()=>true,[Se.LOAD_INITIAL_DATA_END]:()=>false},false)
const ze=_e({[Se.LOAD_STUDENT_DETAILS_START]:()=>true,[Se.LOAD_STUDENT_DETAILS_END]:()=>false},false)
const xe=_e({[Se.SET_ERRORS]:(e,t)=>[...Array.from(t.payload),...Array.from(e)]},[])
const Ee=_e({[Se.SET_INITIAL_DATA]:(e,t)=>t.payload.ranges,[Se.SET_SCORING_RANGES]:ue},[])
const Ae=_e({[Se.SET_ASSIGNMENT]:ue},{})
const Ce=_e({[Se.SET_INITIAL_DATA]:(e,t)=>t.payload.rule,[Se.SET_RULE]:ue},{course_id:"",trigger_assignment:""})
const De=_e({[Se.SET_INITIAL_DATA]:(e,t)=>t.payload.enrolled,[Se.SET_ENROLLED]:ue},0)
const Te=_e({[Se.OPEN_SIDEBAR]:(e,t)=>t.payload,[Se.CLOSE_SIDEBAR]:()=>null},null)
const Ne=_e({[Se.OPEN_SIDEBAR]:()=>true,[Se.CLOSE_SIDEBAR]:()=>false,[Se.SELECT_RANGE]:(e,t)=>null!==t.payload},false)
const Be=_e({[Se.SELECT_RANGE]:(e,t)=>{e.range=t.payload
return e},[Se.SELECT_STUDENT]:(e,t)=>{e.student=t.payload
return e},[Se.CLOSE_SIDEBAR]:e=>{e.student=null
return e}},{range:0,student:null})
var Ie=Object(a["combineReducers"])({apiUrl:fe(),jwt:fe(),studentCache:je,isInitialDataLoading:Oe,isStudentDetailsLoading:ze,errors:xe,ranges:Ee,assignment:Ae,rule:Ce,enrolled:De,sidebarTrigger:Te,showDetails:Ne,selectedPath:Be})
const Le=Object(a["applyMiddleware"])(oe["default"])(a["createStore"])
function Me(e){return Le(Ie,e)}var Pe=Me
const Re={init:(e,t)=>{const n=window.ENV
if(null!=e&&n.CONDITIONAL_RELEASE_SERVICE_ENABLED&&null!=n.CONDITIONAL_RELEASE_ENV.rule){const s=n.CONDITIONAL_RELEASE_ENV,r=s.assignment,i=s.jwt,o=s.stats_url
const d=document.createElement("div")
d.setAttribute("id","crs-details")
t.appendChild(d)
r.submission_types=Array.isArray(r.submission_types)?r.submission_types:[r.submission_types]
const c={assignment:r,jwt:i,apiUrl:o}
const l=Pe(c)
const _=Object(a["bindActionCreators"])(we,l.dispatch)
const u=new ie(l,_)
u.renderGraphs(e)
u.renderDetails(d)
_.loadInitialData()
return u}}}
t["default"]=Re},HsON:function(e,t,n){"use strict"
n.d(t,"a",(function(){return f}))
var a=n("VTBJ")
var s=n("1OyB")
var r=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var d=n("Ji7U")
var c=n("q1tI")
var l=n.n(c)
var _=n("hPGw")
var u=l.a.createElement("path",{d:"M1225.982 926.244c27.296 18.796 27.3 49.268 0 68.067l-509.835 351.074c-27.297 18.796-49.425 7.18-49.425-25.96V601.13c0-33.133 22.125-44.758 49.425-25.96l509.835 351.075z",fillRule:"evenodd",stroke:"none",strokeWidth:"1"})
var f=function(e){Object(d["a"])(t,e)
function t(){Object(s["a"])(this,t)
return Object(i["a"])(this,Object(o["a"])(t).apply(this,arguments))}Object(r["a"])(t,[{key:"render",value:function(){return l.a.createElement(_["a"],Object.assign({},this.props,{name:"IconMiniArrowEnd",viewBox:"0 0 1920 1920",bidirectional:true}),u)}}])
t.displayName="IconMiniArrowEndSolid"
return t}(c["Component"])
f.glyphName="mini-arrow-end"
f.variant="Solid"
f.propTypes=Object(a["a"])({},_["a"].propTypes)},KIj7:function(e,t,n){"use strict"
var a=n("rePB")
var s=n("VTBJ")
var r=n("1OyB")
var i=n("vuIU")
var o=n("md7G")
var d=n("foSv")
var c=n("Ji7U")
var l=n("q1tI")
var _=n.n(l)
var u=n("17x9")
var f=n.n(u)
var b=n("TSYQ")
var p=n.n(b)
var g=n("Xx/m")
var m=n("rf+m")
var h=n("y2yB")
var v=n("5nFh")
var y=n("J2CL")
var k=n("cClk")
var w=n("jtGx")
var S=n("/UXv")
var j=n("oXx0")
function O(e){var t=e.colors,n=e.spacing,a=e.borders,s=e.typography
return{fontFamily:s.fontFamily,fontWeight:s.fontWeightNormal,lineHeight:s.lineHeight,textColor:t.textDarkest,fontSizeSmall:s.fontSizeSmall,fontSizeMedium:s.fontSizeMedium,fontSizeLarge:s.fontSizeLarge,smallIconSize:"0.5rem",mediumIconSize:"0.75rem",largeIconSize:"1rem",iconMargin:n.xxSmall,iconColor:t.textDarkest,togglePadding:n.xxSmall,toggleBorderRadius:a.radiusMedium,toggleBorderWidth:a.widthMedium,toggleBorderStyle:a.style,toggleFocusBorderColor:t.borderBrand,filledBackgroundColor:t.backgroundLight,filledBorderWidth:a.widthSmall,filledBorderStyle:a.style,filledBorderColor:t.borderMedium,filledBorderRadius:a.radiusMedium,filledPadding:n.small}}O["canvas"]=function(e){return{toggleFocusBorderColor:e["ic-brand-primary"],iconColor:e["ic-brand-font-color-dark"],textColor:e["ic-brand-font-color-dark"]}}
n.d(t,"a",(function(){return T}))
var z,x,E,A,C
var D={componentId:"MlJlv",template:function(e){return"\n\n.MlJlv_bGBk{font-family:".concat(e.fontFamily||"inherit",";font-weight:").concat(e.fontWeight||"inherit",";line-height:").concat(e.lineHeight||"inherit","}\n\n.MlJlv_doqw .MlJlv_ebWM,.MlJlv_doqw .MlJlv_cjSw{font-size:").concat(e.fontSizeSmall||"inherit","}\n\n.MlJlv_doqw .MlJlv_dnnz{font-size:").concat(e.smallIconSize||"inherit","}\n\n.MlJlv_doqw .MlJlv_dUEG{-webkit-padding-end:0;-webkit-padding-start:calc(").concat(e.smallIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-inline-end:0;padding-inline-start:calc(").concat(e.smallIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n[dir=ltr] .MlJlv_doqw .MlJlv_dUEG{padding-left:calc(").concat(e.smallIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-right:0}\n\n[dir=rtl] .MlJlv_doqw .MlJlv_dUEG{padding-left:0;padding-right:calc(").concat(e.smallIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n.MlJlv_ycrn .MlJlv_ebWM,.MlJlv_ycrn .MlJlv_cjSw{font-size:").concat(e.fontSizeMedium||"inherit","}\n\n.MlJlv_ycrn .MlJlv_dnnz{font-size:").concat(e.mediumIconSize||"inherit","}\n\n.MlJlv_ycrn .MlJlv_dUEG{-webkit-padding-end:0;-webkit-padding-start:calc(").concat(e.mediumIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-inline-end:0;padding-inline-start:calc(").concat(e.mediumIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n[dir=ltr] .MlJlv_ycrn .MlJlv_dUEG{padding-left:calc(").concat(e.mediumIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-right:0}\n\n[dir=rtl] .MlJlv_ycrn .MlJlv_dUEG{padding-left:0;padding-right:calc(").concat(e.mediumIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n.MlJlv_cMDj .MlJlv_ebWM,.MlJlv_cMDj .MlJlv_cjSw{font-size:").concat(e.fontSizeLarge||"inherit","}\n\n.MlJlv_cMDj .MlJlv_dnnz{font-size:").concat(e.largeIconSize||"inherit","}\n\n.MlJlv_cMDj .MlJlv_dUEG{-webkit-padding-end:0;-webkit-padding-start:calc(").concat(e.largeIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-inline-end:0;padding-inline-start:calc(").concat(e.largeIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n[dir=ltr] .MlJlv_cMDj .MlJlv_dUEG{padding-left:calc(").concat(e.largeIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",");padding-right:0}\n\n[dir=rtl] .MlJlv_cMDj .MlJlv_dUEG{padding-left:0;padding-right:calc(").concat(e.largeIconSize||"inherit"," + ").concat(e.togglePadding||"inherit",")}\n\n.MlJlv_cjSw{-moz-appearance:none;-moz-user-select:none;-ms-user-select:none;-webkit-appearance:none;-webkit-user-select:none;appearance:none;background:transparent;border:none;box-sizing:border-box;color:").concat(e.textColor||"inherit",";cursor:pointer;font-family:").concat(e.fontFamily||"inherit",";margin:0;outline:none;overflow:visible;padding:0;position:relative;text-decoration:none;touch-action:manipulation;user-select:none}\n\n.MlJlv_cjSw::-moz-focus-inner{margin:0;padding:0}\n\n.MlJlv_cjSw:before{border:").concat(e.toggleBorderWidth||"inherit"," ").concat(e.toggleBorderStyle||"inherit"," ").concat(e.toggleFocusBorderColor||"inherit",";border-radius:calc(").concat(e.toggleBorderRadius||"inherit",'*1.5);bottom:-0.375rem;content:"";left:-0.375rem;opacity:0;pointer-events:none;position:absolute;right:-0.375rem;top:-0.375rem}\n\n.MlJlv_cjSw:focus:before{opacity:1}\n\n.MlJlv_cjSw:active,.MlJlv_cjSw:focus,.MlJlv_cjSw:hover{color:').concat(e.textColor||"inherit",";text-decoration:none}\n\n.MlJlv_cvfe{display:block;width:100%}\n\n.MlJlv_doNn{align-items:center;box-sizing:border-box;display:flex;position:relative;text-align:start}\n\n[dir=ltr] .MlJlv_doNn{text-align:left}\n\n[dir=rtl] .MlJlv_doNn{text-align:right}\n\n.MlJlv_dnnz{color:").concat(e.iconColor||"inherit","}\n\n.MlJlv_dnnz>svg{display:block}\n\n.MlJlv_fuNk{-webkit-margin-end:").concat(e.iconMargin||"inherit",";-webkit-margin-start:0;margin-inline-end:").concat(e.iconMargin||"inherit",";margin-inline-start:0}\n\n[dir=ltr] .MlJlv_fuNk{margin-left:0;margin-right:").concat(e.iconMargin||"inherit","}\n\n[dir=rtl] .MlJlv_fuNk{margin-left:").concat(e.iconMargin||"inherit",";margin-right:0}\n\n.MlJlv_fhZl{-webkit-margin-end:0;-webkit-margin-start:").concat(e.iconMargin||"inherit",";margin-inline-end:0;margin-inline-start:").concat(e.iconMargin||"inherit","}\n\n[dir=ltr] .MlJlv_fhZl{margin-left:").concat(e.iconMargin||"inherit",";margin-right:0}\n\n[dir=rtl] .MlJlv_fhZl{margin-left:0;margin-right:").concat(e.iconMargin||"inherit","}\n\n.MlJlv_btWg{flex-grow:1;min-width:0.0625rem}\n\n.MlJlv_fFWz .MlJlv_btWg{flex:1}\n\n.MlJlv_ebWM{box-sizing:border-box;color:").concat(e.textColor||"inherit",";padding-top:").concat(e.togglePadding||"inherit","}\n\n.MlJlv_eFWP{display:none}\n\n.MlJlv_cMGi{display:block}\n\n@keyframes MlJlv_dFUU{to{opacity:1}}\n\n.MlJlv_caGd{animation-duration:0.3s;animation-fill-mode:forwards;animation-name:MlJlv_dFUU;opacity:0.01}")},root:"MlJlv_bGBk",small:"MlJlv_doqw",details:"MlJlv_ebWM",toggle:"MlJlv_cjSw",icon:"MlJlv_dnnz",indentDetails:"MlJlv_dUEG",medium:"MlJlv_ycrn",large:"MlJlv_cMDj",fluidWidth:"MlJlv_cvfe",summary:"MlJlv_doNn",iconStart:"MlJlv_fuNk",iconEnd:"MlJlv_fhZl",summaryText:"MlJlv_btWg",positionIconAtEnd:"MlJlv_fFWz",hiddenDetails:"MlJlv_eFWP",expandedDetails:"MlJlv_cMGi",content:"MlJlv_caGd",contentAnimation:"MlJlv_dFUU"}
var T=(z=Object(j["a"])(),x=Object(y["themeable"])(O,D),z(E=x(E=(C=A=function(e){Object(c["a"])(t,e)
function t(){var e
var n
Object(r["a"])(this,t)
for(var a=arguments.length,s=new Array(a),i=0;i<a;i++)s[i]=arguments[i]
n=Object(o["a"])(this,(e=Object(d["a"])(t)).call.apply(e,[this].concat(s)))
n.shouldAnimateContent=false
n.getButtonRef=function(e){return n._button=e}
return n}Object(i["a"])(t,[{key:"focus",value:function(){this._button.focus()}},{key:"componentDidMount",value:function(){this.shouldAnimateContent=true}},{key:"renderSummary",value:function(e){var t=this.props,n=t.summary,a=t.iconPosition
return _.a.createElement("span",{className:D.summary},"start"===a&&this.renderIcon(e),_.a.createElement("span",{className:D.summaryText},n),"end"===a&&this.renderIcon(e))}},{key:"renderToggle",value:function(e,n){var r=this.props,i=r.variant,o=r.fluidWidth
var d=Object(s["a"])({},Object(w["a"])(this.props,t.propTypes),{},e,{children:this.renderSummary()})
var c=this.renderSummary(n)
return"filled"===i?_.a.createElement(g["a"],Object.assign({},d,{fluidWidth:true,buttonRef:this.getButtonRef}),c):d.href?_.a.createElement("a",Object.assign({},d,{className:p()(D.toggle,D[i],Object(a["a"])({},D.fluidWidth,o)),ref:this.getButtonRef}),c):_.a.createElement("button",Object.assign({},d,{type:"button",className:p()(D.toggle,D[i],Object(a["a"])({},D.fluidWidth,o)),ref:this.getButtonRef}),c)}},{key:"renderIcon",value:function(e){var t
var n=this.props.iconPosition
var s=e?this.props.iconExpanded:this.props.icon
return this.props.children?_.a.createElement("span",{className:p()(D.icon,(t={},Object(a["a"])(t,D.iconStart,"start"===n),Object(a["a"])(t,D.iconEnd,"end"===n),t))},_.a.createElement(s,null)):null}},{key:"renderDetails",value:function(e,t){var n
var s=this.props,r=s.children,i=s.size,o=s.iconPosition,d=s.fluidWidth
return _.a.createElement("div",Object.assign({},t,{className:p()(D.details,(n={},Object(a["a"])(n,D[i],i),Object(a["a"])(n,D.hiddenDetails,!e),Object(a["a"])(n,D.expandedDetails,e),Object(a["a"])(n,D.indentDetails,"start"===o&&!d),n))}),r&&e&&this.renderContent())}},{key:"renderContent",value:function(){return _.a.createElement("div",{className:p()(Object(a["a"])({},D.content,this.shouldAnimateContent))},this.props.children)}},{key:"render",value:function(){var e,t=this
var n=this.props,s=n.variant,r=n.iconPosition,i=n.fluidWidth
var o="end"===r&&("filled"===s||i)
var d=(e={},Object(a["a"])(e,D.root,true),Object(a["a"])(e,D[this.props.size],true),Object(a["a"])(e,D.positionIconAtEnd,o),e)
return _.a.createElement(v["a"],Object(w["c"])(this.props,v["a"].propTypes),(function(e){var n=e.expanded,a=e.getToggleProps,s=e.getDetailsProps
return _.a.createElement("div",{className:p()(d)},t.renderToggle(a(),n),t.renderDetails(n,s()))}))}},{key:"focused",get:function(){return Object(S["a"])(this._button)}}])
t.displayName="ToggleDetails"
return t}(l["Component"]),A.propTypes={variant:f.a.oneOf(["default","filled"]),summary:f.a.node.isRequired,expanded:Object(k["a"])(f.a.bool,"onToggle","defaultExpanded"),defaultExpanded:f.a.bool,onToggle:f.a.func,icon:f.a.func,iconExpanded:f.a.func,iconPosition:f.a.oneOf(["start","end"]),fluidWidth:f.a.bool,children:f.a.node,size:f.a.oneOf(["small","medium","large"])},A.defaultProps={variant:"default",size:"medium",fluidWidth:false,icon:m["a"],iconExpanded:h["a"],iconPosition:"start",defaultExpanded:false,onToggle:function(e,t){},children:null,expanded:void 0},C))||E)||E)},KuFa:function(e,t,n){"use strict"
n.r(t)
var a=n("An8g")
var s=n("u7Gu")
var r=n("EcmN")
var i=n("ouhR")
var o=n.n(i)
n("q1tI")
var d=n("i8i4")
var c=n.n(d)
var l=n("x1Tw")
var _=n("Qyje")
var u=n.n(_)
var f=n("Et5h")
var b=n("7FZx")
var p=n("FIFq")
var g=n.n(p)
var m=function(e,t){return function(){return e.apply(t,arguments)}},h=function(e,t){for(var n in t)v.call(t,n)&&(e[n]=t[n])
function a(){this.constructor=e}a.prototype=t.prototype
e.prototype=new a
e.__super__=t.prototype
return e},v={}.hasOwnProperty
var y=function(e){h(t,e)
function t(){this.toggleSpeedgraderLink=m(this.toggleSpeedgraderLink,this)
return t.__super__.constructor.apply(this,arguments)}t.prototype.initialize=function(){t.__super__.initialize.apply(this,arguments)
return this.model.on("change:published",this.toggleSpeedgraderLink)}
t.prototype.toggleSpeedgraderLink=function(){return this.model.get("published")?this.$el.removeClass("hidden"):this.$el.addClass("hidden")}
return t}(g.a.View)
var k=n("goGJ")
var w=n("oMlh")
var S=n("GXQz")
n("Z+Ib")
var j=n("y8OA")
var O=n("H4Sz")
var z=n("mKSb")
var x=n("i+HM")
var E=n("ppA4")
var A=n("6V2X")
const C=new j["default"]
C.init({itemType:"assignment",page:"show"})
function D(e){if("0"!==e){l["a"].put("/api/v1/courses/".concat(ENV.COURSE_ID,"/gradebook_settings"),u.a.stringify({gradebook_settings:{filter_rows_by:{student_group_id:e}}}))
ENV.selected_student_group_id=e
N()
T()}}function T(){const e=ENV.SETTINGS.filter_speed_grader_by_student_group&&!ENV.selected_student_group_id
const t=document.getElementById("speed_grader_link_mount_point")
t&&c.a.render(Object(a["a"])(x["a"],{disabled:e,href:ENV.speed_grader_url,disabledTip:r["a"].t("Must select a student group first")}),t)}function N(){const e=document.getElementById("student_group_filter_mount_point")
e&&c.a.render(Object(a["a"])(z["a"],{categories:ENV.group_categories,label:r["a"].t("Select Group to Grade"),onChange:D,value:ENV.selected_student_group_id}),e)}const B=Promise.all([n.e(2),n.e(62),n.e(580)]).then(n.bind(null,"/j35"))
o()(()=>{const e=o()("#assignment_publish_button")
if(e.length>0){const t=new f["a"]({id:e.attr("data-id"),unpublishable:!e.hasClass("disabled"),published:e.hasClass("published")})
t.doNotParse()
new y({model:t,el:"#assignment-speedgrader-link"}).render()
const n=new b["a"]({model:t,el:e})
n.render()
n.on("publish",()=>o()("#moderated_grading_button").show())
n.on("unpublish",()=>o()("#moderated_grading_button").hide())}B.then(()=>{o()("#sequence_footer").moduleSequenceFooter({courseID:ENV.COURSE_ID,assetType:"Assignment",assetID:ENV.ASSIGNMENT_ID,location:window.location})})
return Object(k["a"])()})
o()(()=>o()("#content").on("click","#mark-as-done-checkbox",(function(){return w["a"].toggle(this)})))
function I(e){let t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1]
e&&e.preventDefault()
c.a.render(Object(a["a"])(E["a"],{open:t,sourceCourseId:ENV.COURSE_ID,contentShare:{content_type:"assignment",content_id:ENV.ASSIGNMENT_ID},onDismiss:()=>{I(null,false)
o()(".al-trigger").focus()}}),document.getElementById("direct-share-mount-point"))}function L(e){let t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1]
e&&e.preventDefault()
c.a.render(Object(a["a"])(A["a"],{open:t,sourceCourseId:ENV.COURSE_ID,contentSelection:{assignments:[ENV.ASSIGNMENT_ID]},onDismiss:()=>{L(null,false)
o()(".al-trigger").focus()}}),document.getElementById("direct-share-mount-point"))}o()(()=>{o()(".direct-share-send-to-menu-item").click(I)
o()(".direct-share-copy-to-menu-item").click(L)})
o()(()=>{if(ENV.speed_grader_url){ENV.SETTINGS.filter_speed_grader_by_student_group&&N()
T()}})
o()(()=>{o()(".upload_submissions_link").click(e=>{e.preventDefault()
o()("#re_upload_submissions_form").slideToggle()})
o()(".download_submissions_link").click((function(e){e.preventDefault()
s["a"].downloadSubmissions(o()(this).attr("href"))
o()(".upload_submissions_link").slideDown()}))
o()("#re_upload_submissions_form").submit((function(e){const t=o()(this).getFormData()
if(t.submissions_zip){if(!t.submissions_zip.match(/\.zip$/)){e.preventDefault()
e.stopPropagation()
o()(this).formErrors({submissions_zip:r["a"].t("Please upload files as a .zip")})}}else{e.preventDefault()
e.stopPropagation()}}))
o()("#edit_assignment_form").bind("assignment_updated",(e,t)=>{t.assignment&&t.assignment.peer_reviews?o()(".assignment_peer_reviews_link").slideDown():o()(".assignment_peer_reviews_link").slideUp()})})
o()(()=>{const e=document.getElementById("crs-graphs")
const t=document.getElementById("not_right_side")
S["default"].init(e,t)
document.getElementById("assignment_external_tools")&&O["a"].attach(document.getElementById("assignment_external_tools"),"assignment_view",parseInt(ENV.COURSE_ID,10),parseInt(ENV.ASSIGNMENT_ID,10))})},MdYG:function(e,t,n){"use strict"
var a=n("pQTu")
var s=n("m0r6")
Object(s["a"])(JSON.parse('{"ar":{"gpa_scale_6710e2ee":"مقياس المعدل التراكمي","letter_grade_f00fedc4":"الدرجة بالأحرف","other_ddacb37d":"أخرى","percent_448ea947":"النسبة المئوية","points_bceb5005":"النقاط"},"cy":{"gpa_scale_6710e2ee":"Graddfa GPA","letter_grade_f00fedc4":"gradd llythyren","other_ddacb37d":"arall","percent_448ea947":"canran","points_bceb5005":"pwynt"},"da":{"gpa_scale_6710e2ee":"GPA-skala","letter_grade_f00fedc4":"bogstavkarakter","other_ddacb37d":"andet","percent_448ea947":"procent","points_bceb5005":"point"},"da-x-k12":{"gpa_scale_6710e2ee":"GPA-skala","letter_grade_f00fedc4":"bogstavvurdering","other_ddacb37d":"andet","percent_448ea947":"procent","points_bceb5005":"point"},"de":{"gpa_scale_6710e2ee":"GPA-Skala","letter_grade_f00fedc4":"Buchstaben-Note","other_ddacb37d":"sonstige","percent_448ea947":"Prozent","points_bceb5005":"Punkte"},"el":{"letter_grade_f00fedc4":"Βαθμολόγηση με Γράμματα","percent_448ea947":"ποσοστό","points_bceb5005":"Μόρια"},"en-AU":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"percent","points_bceb5005":"points"},"en-AU-x-unimelb":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"percent","points_bceb5005":"points"},"en-CA":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"percent","points_bceb5005":"points"},"en-GB":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"per cent","points_bceb5005":"points"},"en-GB-x-lbs":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"per cent","points_bceb5005":"points"},"en-GB-x-ukhe":{"gpa_scale_6710e2ee":"GPA scale","letter_grade_f00fedc4":"letter grade","other_ddacb37d":"other","percent_448ea947":"per cent","points_bceb5005":"points"},"es":{"gpa_scale_6710e2ee":"Escala del GPA","letter_grade_f00fedc4":"Calificación por letra","other_ddacb37d":"otro","percent_448ea947":"porcentaje","points_bceb5005":"puntos"},"fa":{"gpa_scale_6710e2ee":"مقایس معدل","letter_grade_f00fedc4":"نمره با حروف الفبا","other_ddacb37d":"سایر","percent_448ea947":"درصد","points_bceb5005":"امتیازها"},"fi":{"gpa_scale_6710e2ee":"GPA-asteikko","letter_grade_f00fedc4":"kirjainarvosana","other_ddacb37d":"muu","percent_448ea947":"prosenttia","points_bceb5005":"pisteet"},"fr":{"gpa_scale_6710e2ee":"Échelle MPC","letter_grade_f00fedc4":"notation par lettre","other_ddacb37d":"autre","percent_448ea947":"pour cent","points_bceb5005":"points"},"fr-CA":{"gpa_scale_6710e2ee":"Échelle MPC","letter_grade_f00fedc4":"notation par lettre","other_ddacb37d":"autre","percent_448ea947":"pour cent","points_bceb5005":"points"},"he":{"gpa_scale_6710e2ee":"סולם ההערכה GPA","letter_grade_f00fedc4":"הערכה מילולית","other_ddacb37d":"אחר","percent_448ea947":"אחוז","points_bceb5005":"נקודות"},"ht":{"gpa_scale_6710e2ee":"Echèl GPA","letter_grade_f00fedc4":"kategori lèt","other_ddacb37d":"lòt","percent_448ea947":"pousantaj","points_bceb5005":"pwen"},"hu":{"gpa_scale_6710e2ee":"GPA skála","letter_grade_f00fedc4":"Betű alapú érdemjegy ","other_ddacb37d":"Egyéb","percent_448ea947":"százalék","points_bceb5005":"pontszám"},"is":{"gpa_scale_6710e2ee":"Meðaleinkunnakvarði","letter_grade_f00fedc4":"bókstafseinkunn","other_ddacb37d":"annað","percent_448ea947":"hlutfall","points_bceb5005":"punktar"},"it":{"gpa_scale_6710e2ee":"Scala GPA","letter_grade_f00fedc4":"voto in lettere","other_ddacb37d":"altro","percent_448ea947":"percentuale","points_bceb5005":"punti"},"ja":{"gpa_scale_6710e2ee":"GPA スケール","letter_grade_f00fedc4":"レター グレード","other_ddacb37d":"その他","percent_448ea947":"パーセント","points_bceb5005":"点数"},"mi":{"gpa_scale_6710e2ee":"tauine GPA","letter_grade_f00fedc4":"kōeke reta","other_ddacb37d":"te tahi atu","percent_448ea947":"ōrau","points_bceb5005":"Ngā koinga"},"nb":{"gpa_scale_6710e2ee":"Tallkarakterskala","letter_grade_f00fedc4":"Bokstavkarakter","other_ddacb37d":"annen","percent_448ea947":"prosent","points_bceb5005":"poeng"},"nb-x-k12":{"gpa_scale_6710e2ee":"Tallvurderingsskala","letter_grade_f00fedc4":"Bokstavvurdering","other_ddacb37d":"annen","percent_448ea947":"prosent","points_bceb5005":"poeng"},"nl":{"gpa_scale_6710e2ee":"Gemiddeld eindcijfer","letter_grade_f00fedc4":"beoordeling in lettervorm","other_ddacb37d":"andere","percent_448ea947":"percentage","points_bceb5005":"punten"},"nn":{"gpa_scale_6710e2ee":"GPA-skala","letter_grade_f00fedc4":"bokstavkarakter","other_ddacb37d":"anna","percent_448ea947":"prosent","points_bceb5005":"poeng"},"pl":{"gpa_scale_6710e2ee":"Skala GPA","letter_grade_f00fedc4":"ocena literowa","other_ddacb37d":"inne","percent_448ea947":"procent","points_bceb5005":"punkty"},"pt":{"gpa_scale_6710e2ee":"Escala GPA","letter_grade_f00fedc4":"nota por letra","other_ddacb37d":"outro","percent_448ea947":"percentagem","points_bceb5005":"pontos"},"pt-BR":{"gpa_scale_6710e2ee":"escala GPA","letter_grade_f00fedc4":"nota por conceito","other_ddacb37d":"outro","percent_448ea947":"porcentagem","points_bceb5005":"pontos"},"ru":{"gpa_scale_6710e2ee":"Система оценки GPA","letter_grade_f00fedc4":"буквенная оценка","other_ddacb37d":"другое","percent_448ea947":"процент","points_bceb5005":"баллов"},"sl":{"gpa_scale_6710e2ee":"Lestvica GPA","letter_grade_f00fedc4":"črkovna ocena","other_ddacb37d":"drugo","percent_448ea947":"odstotek","points_bceb5005":"točk"},"sv":{"gpa_scale_6710e2ee":"Skala för genomsnittsbetyg","letter_grade_f00fedc4":"bokstavsomdöme","other_ddacb37d":"övriga","percent_448ea947":"procent","points_bceb5005":"poäng"},"sv-x-k12":{"gpa_scale_6710e2ee":"Skala för genomsnittsbetyg","letter_grade_f00fedc4":"bokstavsomdöme","other_ddacb37d":"övriga","percent_448ea947":"procent","points_bceb5005":"poäng"},"tr":{"gpa_scale_6710e2ee":"GNO ölçeği","other_ddacb37d":"diğer","percent_448ea947":"yüzde"},"uk":{"gpa_scale_6710e2ee":"GPA масштаб","letter_grade_f00fedc4":"оцінка у вигляді літери","other_ddacb37d":"інше","percent_448ea947":"відсоток","points_bceb5005":"бали"},"zh-Hans":{"gpa_scale_6710e2ee":"GPA 绩点","letter_grade_f00fedc4":"字母评分","other_ddacb37d":"其他","percent_448ea947":"百分率","points_bceb5005":"分值"},"zh-Hant":{"gpa_scale_6710e2ee":"GPA 比例","letter_grade_f00fedc4":"字母分級","other_ddacb37d":"其他","percent_448ea947":"百分比","points_bceb5005":"分數"}}'))
n("jQeR")
n("0sPK")
var r=a["default"].scoped("cyoe_assignment_sidebar_grading_types")
const i={points:{get label(){return r.t("points")},key:"points"},percent:{get label(){return r.t("percent")},key:"percent"},letter_grade:{get label(){return r.t("letter grade")},key:"letter_grade"},gpa_scale:{get label(){return r.t("GPA scale")},key:"gpa_scale"},other:{get label(){return r.t("other")},key:"other"}}
var o=i
Object(s["a"])(JSON.parse('{"ar":{"score_pts_adcb1af3":"%{score} نقاط"},"cy":{"score_pts_adcb1af3":"%{score} pwynt"},"da":{"score_pts_adcb1af3":"%{score} point"},"da-x-k12":{"score_pts_adcb1af3":"%{score} point"},"de":{"score_pts_adcb1af3":"%{score} Pkte."},"en-AU":{"score_pts_adcb1af3":"%{score} pts"},"en-AU-x-unimelb":{"score_pts_adcb1af3":"%{score} pts"},"en-CA":{"score_pts_adcb1af3":"%{score} pts"},"en-GB":{"score_pts_adcb1af3":"%{score} pts"},"en-GB-x-lbs":{"score_pts_adcb1af3":"%{score} pts"},"en-GB-x-ukhe":{"score_pts_adcb1af3":"%{score} pts"},"es":{"score_pts_adcb1af3":"%{score} pts"},"fa":{"score_pts_adcb1af3":"%{score} امتیاز"},"fi":{"score_pts_adcb1af3":"%{score} pistettä"},"fr":{"score_pts_adcb1af3":"%{score} pts"},"fr-CA":{"score_pts_adcb1af3":"%{score} pts"},"he":{"score_pts_adcb1af3":"%{score} נקודות"},"ht":{"score_pts_adcb1af3":"%{score} pwen"},"hu":{"score_pts_adcb1af3":"%{score} pont"},"is":{"score_pts_adcb1af3":"%{score} punktar"},"it":{"score_pts_adcb1af3":"%{score} pt"},"ja":{"score_pts_adcb1af3":"%{score} pts"},"mi":{"score_pts_adcb1af3":"%{score} ngā koinga"},"nb":{"score_pts_adcb1af3":"%{score} p"},"nb-x-k12":{"score_pts_adcb1af3":"%{score} poeng"},"nl":{"score_pts_adcb1af3":"%{score} punten"},"nn":{"score_pts_adcb1af3":"%{score} poeng"},"pl":{"score_pts_adcb1af3":"%{score} pkt"},"pt":{"score_pts_adcb1af3":"%{score} pts"},"pt-BR":{"score_pts_adcb1af3":"%{score} pts"},"ru":{"score_pts_adcb1af3":"%{score} баллов"},"sl":{"score_pts_adcb1af3":"%{score} točk"},"sv":{"score_pts_adcb1af3":"%{score} poäng"},"sv-x-k12":{"score_pts_adcb1af3":"%{score} poäng"},"tr":{"score_pts_adcb1af3":"%{score} puan"},"uk":{"score_pts_adcb1af3":"%{score}балів"},"zh-Hans":{"score_pts_adcb1af3":"%{score} 分"},"zh-Hant":{"score_pts_adcb1af3":"%{score}分數"}}'))
var d=a["default"].scoped("cyoe_assignment_sidebar_score")
var c=n("HbFp")
n.d(t,"b",(function(){return b}))
n.d(t,"a",(function(){return v}))
const l=e=>{const t=c["a"].parse(e)
return!isNaN(t)&&isFinite(t)}
const _=e=>!!e&&!!e.grading_scheme
const u=e=>{const t=e?e.grading_type:o.percent.key
if((t===o.letter_grade.key||t===o.gpa_scale.key)&&!_(e))return o.percent.key
return t}
const f=(e,t)=>{const n=u(t)
return n===o.points.key?g(e,t):n===o.letter_grade.key||n===o.gpa_scale.key?m(e,t):h(e)}
const b=(e,t,n)=>{e||(e=n?"1":"0")
return p(f(e,t),t)}
const p=(e,t)=>{const n=u(t)
return n===o.points.key?d.t("%{score} pts",{score:d.n(e,{precision:2,strip_insignificant_zeros:true})}):n===o.letter_grade.key||n===o.gpa_scale.key?e:d.n(e,{precision:2,percentage:true,strip_insignificant_zeros:true})}
const g=(e,t)=>{if(!l(e))return e
if(0===e)return"0"
const n=c["a"].parse(e)
const a=Number(t.points_possible)||100
return parseFloat((n*a).toFixed(2))}
const m=(e,t)=>{if(""===e)return""
const n=c["a"].parse(e)
const a={letter:null,score:-Infinity}
for(const e in t.grading_scheme){const s=c["a"].parse(t.grading_scheme[e])
if(s<=n&&s>a.score||0===s&&s>n){a.score=s
a.letter=e}}return a.letter?a.letter:n}
const h=e=>{if(!l(e))return e
return Math.floor(100*e)}
const v=(e,t)=>{if("string"===typeof e&&t.grading_type!==o.letter_grade.key&&t.grading_type!==o.gpa_scale.key){const n=c["a"].parse(e.replace(/%$/,""))
if(!isNaN(n))return p(n,t)}return e}},"Pm+R":function(e,t,n){"use strict"
var a=n("GLiE")
var s=n.n(a)
var r=n("pQTu")
var i=n("m0r6")
Object(i["a"])(JSON.parse('{"ar":{"assignments_1e02582c":"المهام","discussions_a5f96392":"مناقشات","other_1c6d9c79":"أخرى","quizzes_7e598f57":"الاختبارات","wiki_6603e81b":"Wiki"},"cy":{"assignments_1e02582c":"Aseiniadau","discussions_a5f96392":"Trafodaethau","other_1c6d9c79":"Arall","quizzes_7e598f57":"Cwisiau","wiki_6603e81b":"Wici"},"da":{"assignments_1e02582c":"Opgaver","discussions_a5f96392":"Diskussioner","other_1c6d9c79":"Anden","quizzes_7e598f57":"Test","wiki_6603e81b":"Wiki"},"da-x-k12":{"assignments_1e02582c":"Opgaver","discussions_a5f96392":"Diskussioner","other_1c6d9c79":"Anden","quizzes_7e598f57":"Quizzer","wiki_6603e81b":"Wiki"},"de":{"assignments_1e02582c":"Aufgaben","discussions_a5f96392":"Diskussionen","other_1c6d9c79":"Sonstige","quizzes_7e598f57":"Quizze","wiki_6603e81b":"Wiki"},"el":{"assignments_1e02582c":"Εργασίες","discussions_a5f96392":"Συζητήσεις","quizzes_7e598f57":"Κουίζ"},"en-AU":{"assignments_1e02582c":"Assignments","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Quizzes","wiki_6603e81b":"Wiki"},"en-AU-x-unimelb":{"assignments_1e02582c":"Assignments","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Quizzes","wiki_6603e81b":"Wiki"},"en-CA":{"assignments_1e02582c":"Assignments","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Quizzes","wiki_6603e81b":"Wiki"},"en-GB":{"assignments_1e02582c":"Assignments","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Quizzes","wiki_6603e81b":"Wiki"},"en-GB-x-lbs":{"assignments_1e02582c":"Tasks","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Surveys","wiki_6603e81b":"Wiki"},"en-GB-x-ukhe":{"assignments_1e02582c":"Assignments","discussions_a5f96392":"Discussions","other_1c6d9c79":"Other","quizzes_7e598f57":"Quizzes","wiki_6603e81b":"Wiki"},"es":{"assignments_1e02582c":"Tareas","discussions_a5f96392":"Foros de discusión","other_1c6d9c79":"Otro","quizzes_7e598f57":"Evaluaciones","wiki_6603e81b":"Wiki"},"fa":{"assignments_1e02582c":"تکلیف ها","discussions_a5f96392":"بحث ها","other_1c6d9c79":"سایر","quizzes_7e598f57":"آزمون‌ها","wiki_6603e81b":"ویکی"},"fi":{"assignments_1e02582c":"Tehtävät","discussions_a5f96392":"Keskustelut","other_1c6d9c79":"Muu","quizzes_7e598f57":"Tietovisat","wiki_6603e81b":"Wiki"},"fr":{"assignments_1e02582c":"Tâches","discussions_a5f96392":"Discussions","other_1c6d9c79":"Autres","quizzes_7e598f57":"Questionnaires","wiki_6603e81b":"Wiki"},"fr-CA":{"assignments_1e02582c":"Tâches","discussions_a5f96392":"Discussions","other_1c6d9c79":"Autre","quizzes_7e598f57":"Questionnaires","wiki_6603e81b":"Wiki"},"he":{"assignments_1e02582c":"משימות","discussions_a5f96392":"דיונים","other_1c6d9c79":"אחר","quizzes_7e598f57":"בחנים","wiki_6603e81b":"וויקי"},"ht":{"assignments_1e02582c":"Sesyon","discussions_a5f96392":"Diskisyon","other_1c6d9c79":"Lòt","quizzes_7e598f57":"Quiz","wiki_6603e81b":"Wiki"},"hu":{"assignments_1e02582c":"Feladatok","discussions_a5f96392":"Fórumok","other_1c6d9c79":"Egyéb","quizzes_7e598f57":"Kvízek","wiki_6603e81b":"Wiki"},"hy":{"assignments_1e02582c":"Հանձնարարություններ","discussions_a5f96392":"Քննարկումներ","quizzes_7e598f57":"Թեստեր"},"is":{"assignments_1e02582c":"Verkefni","discussions_a5f96392":"Umræður","other_1c6d9c79":"Annað","quizzes_7e598f57":"Próf","wiki_6603e81b":"Wiki"},"it":{"assignments_1e02582c":"Compiti","discussions_a5f96392":"Discussioni","other_1c6d9c79":"Altro","quizzes_7e598f57":"Quiz","wiki_6603e81b":"Wiki"},"ja":{"assignments_1e02582c":"課題","discussions_a5f96392":"ディスカッション","other_1c6d9c79":"その他","quizzes_7e598f57":"クイズ","wiki_6603e81b":"ウィキ"},"ko":{"assignments_1e02582c":"과제","discussions_a5f96392":"토론","quizzes_7e598f57":"퀴즈"},"mi":{"assignments_1e02582c":"Ngā whakataunga","discussions_a5f96392":"Ngā Kōrerorero","other_1c6d9c79":"Ētahi atu","quizzes_7e598f57":"Ngā Quizzes","wiki_6603e81b":"Wiki"},"nb":{"assignments_1e02582c":"Oppgaver","discussions_a5f96392":"Diskusjoner","other_1c6d9c79":"Annen","quizzes_7e598f57":"Tester","wiki_6603e81b":"Wiki"},"nb-x-k12":{"assignments_1e02582c":"Oppgaver","discussions_a5f96392":"Diskusjoner","other_1c6d9c79":"Annen","quizzes_7e598f57":"Tester","wiki_6603e81b":"Wiki"},"nl":{"assignments_1e02582c":"Opdrachten","discussions_a5f96392":"Discussies","other_1c6d9c79":"Overige","quizzes_7e598f57":"Toetsen","wiki_6603e81b":"Wiki"},"nn":{"assignments_1e02582c":"Oppgåver","discussions_a5f96392":"Diskusjonar","other_1c6d9c79":"Anna","quizzes_7e598f57":"Quizar","wiki_6603e81b":"Wiki"},"pl":{"assignments_1e02582c":"Zadania","discussions_a5f96392":"Dyskusje","other_1c6d9c79":"Inne","quizzes_7e598f57":"Testy","wiki_6603e81b":"Wiki"},"pt":{"assignments_1e02582c":"Tarefas","discussions_a5f96392":"Discussões","other_1c6d9c79":"Outro","quizzes_7e598f57":"Testes","wiki_6603e81b":"Wiki"},"pt-BR":{"assignments_1e02582c":"Tarefas","discussions_a5f96392":"Fóruns","other_1c6d9c79":"Outro","quizzes_7e598f57":"Testes","wiki_6603e81b":"Wiki"},"ru":{"assignments_1e02582c":"Задания","discussions_a5f96392":"Дискуссии","other_1c6d9c79":"Другое","quizzes_7e598f57":"Контрольные работы","wiki_6603e81b":"Wiki"},"sl":{"assignments_1e02582c":"Naloge:","discussions_a5f96392":"Razprave","other_1c6d9c79":"Drugo","quizzes_7e598f57":"Kvizi","wiki_6603e81b":"Wiki"},"sv":{"assignments_1e02582c":"Uppgifter","discussions_a5f96392":"Diskussioner","other_1c6d9c79":"Annat","quizzes_7e598f57":"Quiz","wiki_6603e81b":"Wiki"},"sv-x-k12":{"assignments_1e02582c":"Uppgifter","discussions_a5f96392":"Diskussioner","other_1c6d9c79":"Annat","quizzes_7e598f57":"Quiz","wiki_6603e81b":"Wiki"},"tr":{"assignments_1e02582c":"Ödevler","discussions_a5f96392":"Tartışmalar","other_1c6d9c79":"Diğer","quizzes_7e598f57":"Kısa sınavlar","wiki_6603e81b":"Wiki"},"uk":{"assignments_1e02582c":"Завдання","discussions_a5f96392":"Обговорення","other_1c6d9c79":"Інше","quizzes_7e598f57":"Контрольні роботи","wiki_6603e81b":"Вікі"},"zh-Hans":{"assignments_1e02582c":"作业","discussions_a5f96392":"讨论","other_1c6d9c79":"其他","quizzes_7e598f57":"测验","wiki_6603e81b":"维基"},"zh-Hant":{"assignments_1e02582c":"作業","discussions_a5f96392":"討論","other_1c6d9c79":"其他","quizzes_7e598f57":"測驗","wiki_6603e81b":"維基"}}'))
n("jQeR")
n("0sPK")
var o=r["default"].scoped("assignment_categories")
const d={label:o.t("Other"),id:"other",submissionTypes:[""]}
const c={list:[{label:o.t("Assignments"),id:"assignment",contentTypeClass:"assignment",submissionTypes:["online_upload","online_text_entry","online_url","on_paper","external_tool","not_graded","media_recording","none"]},{label:o.t("Quizzes"),id:"quiz",contentTypeClass:"quiz",submissionTypes:["online_quiz"]},{label:o.t("Discussions"),id:"discussion",contentTypeClass:"discussion_topic",submissionTypes:["discussion_topic"]},{label:o.t("Wiki"),id:"document",contentTypeClass:"wiki_page",submissionTypes:["wiki_page"]},d]}
c.getCategory=e=>{const t=s.a.find(c.list,t=>e.submission_types.length&&s.a.find(e.submission_types,e=>-1!==t.submissionTypes.indexOf(e)))
return t||c.OTHER}
t["a"]=c},QSc6:function(e,t,n){"use strict"
var a=n("0jNN")
var s=n("sxOR")
var r=Object.prototype.hasOwnProperty
var i={brackets:function(e){return e+"[]"},comma:"comma",indices:function(e,t){return e+"["+t+"]"},repeat:function(e){return e}}
var o=Array.isArray
var d=Array.prototype.push
var c=function(e,t){d.apply(e,o(t)?t:[t])}
var l=Date.prototype.toISOString
var _=s["default"]
var u={addQueryPrefix:false,allowDots:false,charset:"utf-8",charsetSentinel:false,delimiter:"&",encode:true,encoder:a.encode,encodeValuesOnly:false,format:_,formatter:s.formatters[_],indices:false,serializeDate:function(e){return l.call(e)},skipNulls:false,strictNullHandling:false}
var f=function(e){return"string"===typeof e||"number"===typeof e||"boolean"===typeof e||"symbol"===typeof e||"bigint"===typeof e}
var b=function e(t,n,s,r,i,d,l,_,b,p,g,m,h){var v=t
"function"===typeof l?v=l(n,v):v instanceof Date?v=p(v):"comma"===s&&o(v)&&(v=v.join(","))
if(null===v){if(r)return d&&!m?d(n,u.encoder,h,"key"):n
v=""}if(f(v)||a.isBuffer(v)){if(d){var y=m?n:d(n,u.encoder,h,"key")
return[g(y)+"="+g(d(v,u.encoder,h,"value"))]}return[g(n)+"="+g(String(v))]}var k=[]
if("undefined"===typeof v)return k
var w
if(o(l))w=l
else{var S=Object.keys(v)
w=_?S.sort(_):S}for(var j=0;j<w.length;++j){var O=w[j]
if(i&&null===v[O])continue
o(v)?c(k,e(v[O],"function"===typeof s?s(n,O):n,s,r,i,d,l,_,b,p,g,m,h)):c(k,e(v[O],n+(b?"."+O:"["+O+"]"),s,r,i,d,l,_,b,p,g,m,h))}return k}
var p=function(e){if(!e)return u
if(null!==e.encoder&&void 0!==e.encoder&&"function"!==typeof e.encoder)throw new TypeError("Encoder has to be a function.")
var t=e.charset||u.charset
if("undefined"!==typeof e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined")
var n=s["default"]
if("undefined"!==typeof e.format){if(!r.call(s.formatters,e.format))throw new TypeError("Unknown format option provided.")
n=e.format}var a=s.formatters[n]
var i=u.filter;("function"===typeof e.filter||o(e.filter))&&(i=e.filter)
return{addQueryPrefix:"boolean"===typeof e.addQueryPrefix?e.addQueryPrefix:u.addQueryPrefix,allowDots:"undefined"===typeof e.allowDots?u.allowDots:!!e.allowDots,charset:t,charsetSentinel:"boolean"===typeof e.charsetSentinel?e.charsetSentinel:u.charsetSentinel,delimiter:"undefined"===typeof e.delimiter?u.delimiter:e.delimiter,encode:"boolean"===typeof e.encode?e.encode:u.encode,encoder:"function"===typeof e.encoder?e.encoder:u.encoder,encodeValuesOnly:"boolean"===typeof e.encodeValuesOnly?e.encodeValuesOnly:u.encodeValuesOnly,filter:i,formatter:a,serializeDate:"function"===typeof e.serializeDate?e.serializeDate:u.serializeDate,skipNulls:"boolean"===typeof e.skipNulls?e.skipNulls:u.skipNulls,sort:"function"===typeof e.sort?e.sort:null,strictNullHandling:"boolean"===typeof e.strictNullHandling?e.strictNullHandling:u.strictNullHandling}}
e.exports=function(e,t){var n=e
var a=p(t)
var s
var r
if("function"===typeof a.filter){r=a.filter
n=r("",n)}else if(o(a.filter)){r=a.filter
s=r}var d=[]
if("object"!==typeof n||null===n)return""
var l
l=t&&t.arrayFormat in i?t.arrayFormat:t&&"indices"in t?t.indices?"indices":"repeat":"indices"
var _=i[l]
s||(s=Object.keys(n))
a.sort&&s.sort(a.sort)
for(var u=0;u<s.length;++u){var f=s[u]
if(a.skipNulls&&null===n[f])continue
c(d,b(n[f],f,_,a.strictNullHandling,a.skipNulls,a.encode?a.encoder:null,a.filter,a.sort,a.allowDots,a.serializeDate,a.formatter,a.encodeValuesOnly,a.charset))}var g=d.join(a.delimiter)
var m=true===a.addQueryPrefix?"?":""
a.charsetSentinel&&("iso-8859-1"===a.charset?m+="utf8=%26%2310003%3B&":m+="utf8=%E2%9C%93&")
return g.length>0?m+g:""}},Qyje:function(e,t,n){"use strict"
var a=n("QSc6")
var s=n("nmq7")
var r=n("sxOR")
e.exports={formats:r,parse:s,stringify:a}},SLVX:function(e,t,n){"use strict"
n.d(t,"a",(function(){return a}))
function a(e){var t
var n=e.Symbol
if("function"===typeof n)if(n.observable)t=n.observable
else{t=n("observable")
n.observable=t}else t="@@observable"
return t}},bCCX:function(e,t,n){"use strict"
n.r(t);(function(e,a){var s=n("SLVX")
var r
if("undefined"!==typeof self)r=self
else if("undefined"!==typeof window)r=window
else if("undefined"!==typeof e)r=e
else{r=a}var i=Object(s["a"])(r)
t["default"]=i}).call(this,n("yLpj"),n("3UD+")(e))},eAd9:function(e,t,n){(function(t){var n=false
var a
var s
function r(){if("undefined"!==typeof a)return a
var e=document.documentElement
var t=document.createElement("div")
t.setAttribute("style","width:99px;height:99px;position:absolute;top:-9999px;overflow:scroll;")
e.appendChild(t)
a=t.offsetWidth-t.clientWidth
e.removeChild(t)
return a}function i(){return document.documentElement.scrollHeight>window.innerHeight}function o(e){if("undefined"===typeof document||n)return
var t=document.documentElement
s=window.pageYOffset
i()?t.style.width="calc(100% - "+r()+"px)":t.style.width="100%"
t.style.position="fixed"
t.style.top=-s+"px"
t.style.overflow="hidden"
n=true}function d(){if("undefined"===typeof document||!n)return
var e=document.documentElement
e.style.width=""
e.style.position=""
e.style.top=""
e.style.overflow=""
window.scroll(0,s)
n=false}function c(){if(n){d()
return}o()}var l={on:o,off:d,toggle:c}
"undefined"!==typeof e.exports?e.exports=l:t.noScroll=l})(this)},goGJ:function(e,t,n){"use strict"
n.d(t,"a",(function(){return r}))
var a=n("ouhR")
var s=n.n(a)
n("rEd+")
function r(){return s()(".vdd_tooltip_link").tooltip({position:{my:"center bottom",at:"center top-10",collision:"fit fit"},tooltipClass:"center bottom vertical",content(){const e=s()(this).data("tooltipSelector")
try{const t=document.querySelector(e)
return s()(t).html()}catch(e){}}})}},"i+HM":function(e,t,n){"use strict"
var a=n("An8g")
var s=n("VTBJ")
var r=n("q1tI")
var i=n.n(r)
n("17x9")
var o=n("5Shj")
var d=n("EcmN")
function c(e){return i.a.createElement("a",Object.assign({rel:"noopener noreferrer",target:"_blank"},e),d["a"].t("SpeedGrader™"))}function l(e){const t=e.className?"icon-speed-grader ".concat(e.className):"icon-speed-grader"
let n={className:t,href:e.href}
e.disabled&&(n=Object(s["a"])({},n,{"aria-disabled":"true","aria-describedby":e.disabledTip,onClick:e=>{e.preventDefault()},role:"button",style:{opacity:.5}}))
return e.disabled?Object(a["a"])(o["a"],{placement:"bottom",tip:e.disabledTip,variant:"inverse"},void 0,c(n)):c(n)}t["a"]=l},mKSb:function(e,t,n){"use strict"
var a=n("An8g")
n("17x9")
var s=n("sTNg")
var r=n("EcmN")
n("q1tI")
function i(e){return Object(a["a"])("option",{value:e.id},e.id,e.name)}function o(e){return Object(a["a"])("optgroup",{label:e.name},"group_category_".concat(e.id),e.groups.map(e=>i(e)))}function d(e){return Object(a["a"])(s["FormField"],{id:"student-group-filter",label:e.label},void 0,Object(a["a"])("select",{onChange:t=>{e.onChange(t.target.value)},style:{margin:"0",width:"100%"},value:e.value||"0"},void 0,Object(a["a"])("option",{"aria-disabled":"true",disabled:"disabled",value:"0"},"0",r["a"].t("Select One")),e.categories.map(e=>o(e))))}t["a"]=d},mykf:function(e,t,n){"use strict"
const a=()=>{const e=ENV.LTI_LAUNCH_FRAME_ALLOWANCES||[]
return e.join("; ")}
t["a"]=a},nmq7:function(e,t,n){"use strict"
var a=n("0jNN")
var s=Object.prototype.hasOwnProperty
var r=Array.isArray
var i={allowDots:false,allowPrototypes:false,arrayLimit:20,charset:"utf-8",charsetSentinel:false,comma:false,decoder:a.decode,delimiter:"&",depth:5,ignoreQueryPrefix:false,interpretNumericEntities:false,parameterLimit:1e3,parseArrays:true,plainObjects:false,strictNullHandling:false}
var o=function(e){return e.replace(/&#(\d+);/g,(function(e,t){return String.fromCharCode(parseInt(t,10))}))}
var d="utf8=%26%2310003%3B"
var c="utf8=%E2%9C%93"
var l=function(e,t){var n={}
var l=t.ignoreQueryPrefix?e.replace(/^\?/,""):e
var _=Infinity===t.parameterLimit?void 0:t.parameterLimit
var u=l.split(t.delimiter,_)
var f=-1
var b
var p=t.charset
if(t.charsetSentinel)for(b=0;b<u.length;++b)if(0===u[b].indexOf("utf8=")){u[b]===c?p="utf-8":u[b]===d&&(p="iso-8859-1")
f=b
b=u.length}for(b=0;b<u.length;++b){if(b===f)continue
var g=u[b]
var m=g.indexOf("]=")
var h=-1===m?g.indexOf("="):m+1
var v,y
if(-1===h){v=t.decoder(g,i.decoder,p,"key")
y=t.strictNullHandling?null:""}else{v=t.decoder(g.slice(0,h),i.decoder,p,"key")
y=t.decoder(g.slice(h+1),i.decoder,p,"value")}y&&t.interpretNumericEntities&&"iso-8859-1"===p&&(y=o(y))
y&&"string"===typeof y&&t.comma&&y.indexOf(",")>-1&&(y=y.split(","))
g.indexOf("[]=")>-1&&(y=r(y)?[y]:y)
s.call(n,v)?n[v]=a.combine(n[v],y):n[v]=y}return n}
var _=function(e,t,n){var a=t
for(var s=e.length-1;s>=0;--s){var r
var i=e[s]
if("[]"===i&&n.parseArrays)r=[].concat(a)
else{r=n.plainObjects?Object.create(null):{}
var o="["===i.charAt(0)&&"]"===i.charAt(i.length-1)?i.slice(1,-1):i
var d=parseInt(o,10)
if(n.parseArrays||""!==o)if(!isNaN(d)&&i!==o&&String(d)===o&&d>=0&&n.parseArrays&&d<=n.arrayLimit){r=[]
r[d]=a}else r[o]=a
else r={0:a}}a=r}return a}
var u=function(e,t,n){if(!e)return
var a=n.allowDots?e.replace(/\.([^.[]+)/g,"[$1]"):e
var r=/(\[[^[\]]*])/
var i=/(\[[^[\]]*])/g
var o=n.depth>0&&r.exec(a)
var d=o?a.slice(0,o.index):a
var c=[]
if(d){if(!n.plainObjects&&s.call(Object.prototype,d)&&!n.allowPrototypes)return
c.push(d)}var l=0
while(n.depth>0&&null!==(o=i.exec(a))&&l<n.depth){l+=1
if(!n.plainObjects&&s.call(Object.prototype,o[1].slice(1,-1))&&!n.allowPrototypes)return
c.push(o[1])}o&&c.push("["+a.slice(o.index)+"]")
return _(c,t,n)}
var f=function(e){if(!e)return i
if(null!==e.decoder&&void 0!==e.decoder&&"function"!==typeof e.decoder)throw new TypeError("Decoder has to be a function.")
if("undefined"!==typeof e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new Error("The charset option must be either utf-8, iso-8859-1, or undefined")
var t="undefined"===typeof e.charset?i.charset:e.charset
return{allowDots:"undefined"===typeof e.allowDots?i.allowDots:!!e.allowDots,allowPrototypes:"boolean"===typeof e.allowPrototypes?e.allowPrototypes:i.allowPrototypes,arrayLimit:"number"===typeof e.arrayLimit?e.arrayLimit:i.arrayLimit,charset:t,charsetSentinel:"boolean"===typeof e.charsetSentinel?e.charsetSentinel:i.charsetSentinel,comma:"boolean"===typeof e.comma?e.comma:i.comma,decoder:"function"===typeof e.decoder?e.decoder:i.decoder,delimiter:"string"===typeof e.delimiter||a.isRegExp(e.delimiter)?e.delimiter:i.delimiter,depth:"number"===typeof e.depth||false===e.depth?+e.depth:i.depth,ignoreQueryPrefix:true===e.ignoreQueryPrefix,interpretNumericEntities:"boolean"===typeof e.interpretNumericEntities?e.interpretNumericEntities:i.interpretNumericEntities,parameterLimit:"number"===typeof e.parameterLimit?e.parameterLimit:i.parameterLimit,parseArrays:false!==e.parseArrays,plainObjects:"boolean"===typeof e.plainObjects?e.plainObjects:i.plainObjects,strictNullHandling:"boolean"===typeof e.strictNullHandling?e.strictNullHandling:i.strictNullHandling}}
e.exports=function(e,t){var n=f(t)
if(""===e||null===e||"undefined"===typeof e)return n.plainObjects?Object.create(null):{}
var s="string"===typeof e?l(e,n):e
var r=n.plainObjects?Object.create(null):{}
var i=Object.keys(s)
for(var o=0;o<i.length;++o){var d=i[o]
var c=u(d,s[d],n)
r=a.merge(r,c,n)}return a.compact(r)}},oMlh:function(e,t,n){"use strict"
var a=n("ouhR")
var s=n.n(a)
n("jYyc")
t["a"]={toggle(e){const t=s()(e).data.bind(s()(e))
return s.a.ajaxJSON(t("url"),t("isChecked")?"DELETE":"PUT",{},()=>{t("isChecked",!t("isChecked"))
s()(e).toggleClass("btn-success")
s()("i",e).toggleClass("icon-empty icon-complete")
s()(".mark-done-labels span",e).toggleClass("visible")})}}},p6Wi:function(e,t,n){"use strict"
var a=n("pQTu")
var s=n("m0r6")
Object(s["a"])(JSON.parse('{"ar":{"buttons":{"cancel":"إلغاء","delete":"حذف"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"هل ترغب بالتأكيد في حذف هذا؟"}}},"cy":{"buttons":{"cancel":"Canslo","delete":"Dileu"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Ydych chi’n siŵr eich bod am ddileu hyn?"}}},"da":{"buttons":{"cancel":"Annuller","delete":"Slet"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på, at du vil slette dette?"}}},"da-x-k12":{"buttons":{"cancel":"Annuller","delete":"Slet"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på, at du vil slette dette?"}}},"de":{"buttons":{"cancel":"Abbrechen","delete":"Löschen"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Möchten Sie dies wirklich löschen?"}}},"el":{"buttons":{"cancel":"Ακύρωση","delete":"Διαγραφή"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Είστε σίγουρος/η ότι επιθυμείτε να το διαγράψετε;"}}},"en-AU":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-AU-x-unimelb":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-CA":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-GB":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-GB-x-lbs":{"buttons":{"cancel":"Cancel","delete":"Delete"}},"en-GB-x-ukhe":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"es":{"buttons":{"cancel":"Cancelar","delete":"Eliminar"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"¿Seguro que desea eliminarlo?"}}},"fa":{"buttons":{"cancel":"لغو","delete":"حذف"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"مطمئنید که می خواهید این مورد حذف شود؟"}}},"fi":{"buttons":{"cancel":"Peruuta","delete":"Poista"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Haluatko varmasti poistaa tämän?"}}},"fr":{"buttons":{"cancel":"Annuler","delete":"Supprimer"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Voulez-vous vraiment supprimer cet élément ?"}}},"fr-CA":{"buttons":{"cancel":"Annuler","delete":"Supprimer"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Voulez-vous vraiment supprimer cet élément?"}}},"he":{"buttons":{"cancel":"ביטול","delete":"ביטול"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"בטוח/ה שרוצה לבטל זאת?"}}},"ht":{"buttons":{"cancel":"Anile","delete":"Efase"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Ou kwè vrèman ou vle efase sa a?"}}},"hu":{"buttons":{"cancel":"Mégse","delete":"Törlés"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Biztos benne, hogy törli ezt?"}}},"hy":{"buttons":{"cancel":"Չեղյալ համարել","delete":"Ջնջել"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Դուք իսկապե՞ս ցանկանում եք ջնջել սա:"}}},"is":{"buttons":{"cancel":"Hætta við","delete":"Eyða"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Viltu örugglega eyða þessu?"}}},"it":{"buttons":{"cancel":"Annulla","delete":"Elimina"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vuoi eliminare questo?"}}},"ja":{"buttons":{"cancel":"キャンセル","delete":"削除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"これを削除してもよろしいですか?"}}},"ko":{"buttons":{"cancel":"취소","delete":"삭제"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"삭제하시겠습니까?"}}},"mi":{"buttons":{"cancel":"Whakakore","delete":"Muku"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"E tino hiahia ana koe ki te muku i tēnei?"}}},"nb":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du ønsker å slette dette?"}}},"nb-x-k12":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du ønsker å slette dette?"}}},"nl":{"buttons":{"cancel":"Annuleren","delete":"Verwijderen"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Weet je zeker dat je dit wilt verwijderen?"}}},"nn":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du vil slette dette?"}}},"pl":{"buttons":{"cancel":"Anuluj","delete":"Usuń"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Czy na pewno chcesz usunąć ten element?"}}},"pt":{"buttons":{"cancel":"Cancelar","delete":"Excluir"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Tem certeza de que deseja excluir isto?"}}},"pt-BR":{"buttons":{"cancel":"Cancelar","delete":"Excluir"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Tem certeza que deseja excluir isto?"}}},"ru":{"buttons":{"cancel":"Отменить","delete":"Удалить"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Действительно хотите удалить?"}}},"sl":{"buttons":{"cancel":"Prekliči","delete":"Odstrani"}},"sv":{"buttons":{"cancel":"Avbryt","delete":"Ta bort"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vill du verkligen radera det här?"}}},"sv-x-k12":{"buttons":{"cancel":"Avbryt","delete":"Ta bort"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vill du verkligen radera det här?"}}},"tr":{"buttons":{"cancel":"İptal","delete":"Sil"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Bunu silmek istediğinize emin misiniz?"}}},"uk":{"buttons":{"cancel":"Скасувати","delete":"Видалити"}},"zh-Hans":{"buttons":{"cancel":"取消","delete":"删除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"是否确定要删除它?"}}},"zh-Hant":{"buttons":{"cancel":"取消","delete":"刪除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"您是否確定要刪除？"}}}}'))
n("jQeR")
n("0sPK")
var r=a["default"].scoped("instructure_misc_plugins")
var i=n("ouhR")
var o=n.n(i)
var d=n("5Ky4")
var c=n("JD5e")
n("jYyc")
n("YGE8")
n("B1vq")
n("s/PJ")
o.a.fn.setOptions=function(e,t){let n=e?"<option value=''>"+Object(d["a"])(e)+"</option>":""
null==t&&(t=[])
t.forEach(e=>{const t=Object(d["a"])(e)
n+='<option value="'+t+'">'+t+"</option>"})
return this.html(o.a.raw(n))}
o.a.fn.ifExists=function(e){this.length&&e.call(this,this)
return this}
o.a.fn.scrollbarWidth=function(){const e=o()('<div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"><div style="height:100px;"></div>').appendTo(this),t=e.find("div")
const n=t.innerWidth()
e.css("overflow-y","scroll")
const a=t.innerWidth()
e.remove()
return n-a}
o.a.fn.dim=function(e){return this.animate({opacity:.4},e)}
o.a.fn.undim=function(e){return this.animate({opacity:1},e)}
o.a.fn.confirmDelete=function(e){e=o.a.extend({},o.a.fn.confirmDelete.defaults,e)
const t=this
let n=null
let a=true
e.noMessage=e.noMessage||e.no_message
const s=function(){if(!a){e.cancelled&&o.a.isFunction(e.cancelled)&&e.cancelled.call(t)
return}e.confirmed||(e.confirmed=function(){t.dim()})
e.confirmed.call(t)
if(e.url){e.success||(e.success=function(e){t.fadeOut("slow",()=>{t.remove()})})
const a=e.prepareData?e.prepareData.call(t,n):{}
a.authenticity_token=Object(c["a"])()
o.a.ajaxJSON(e.url,"DELETE",a,n=>{e.success.call(t,n)},(n,a,s,r)=>{e.error&&o.a.isFunction(e.error)?e.error.call(t,n,a,s,r):o.a.ajaxJSON.unhandledXHRs.push(a)})}else{e.success||(e.success=function(){t.fadeOut("slow",()=>{t.remove()})})
e.success.call(t)}}
if(e.message&&!e.noMessage&&!o.a.skipConfirmations){if(e.dialog){a=false
const t="object"===typeof e.dialog?e.dialog:{}
const i=e.url.includes("assignments")?"btn-danger":"btn-primary"
n=o()(e.message).dialog(o.a.extend({},{modal:true,close:s,buttons:[{text:r.t("#buttons.cancel","Cancel"),click(){o()(this).dialog("close")}},{text:r.t("#buttons.delete","Delete"),class:i,click(){a=true
o()(this).dialog("close")}}]},t))
return}a=confirm(e.message)}s()}
o.a.fn.confirmDelete.defaults={get message(){return r.t("confirms.default_delete_thing","Are you sure you want to delete this?")}}
o.a.fn.fragmentChange=function(e){if(e&&true!==e){const n=(window.location.search||"").replace(/^\?/,"").split("&")
let a=null
for(var t=0;t<n.length;t++){const e=n[t]
e&&0===e.indexOf("hash=")&&(a="#"+e.substring(5))}this.bind("document_fragment_change",e)
const s=this
let r=false
for(t=0;t<o.a._checkFragments.fragmentList.length;t++){const e=o.a._checkFragments.fragmentList[t]
e.doc[0]==s[0]&&(r=true)}r||o.a._checkFragments.fragmentList.push({doc:s,fragment:""})
o()(window).bind("hashchange",o.a._checkFragments)
setTimeout(()=>{a&&a.length>0?s.triggerHandler("document_fragment_change",a):s&&s[0]&&s[0].location&&s[0].location.hash.length>0&&s.triggerHandler("document_fragment_change",s[0].location.hash)},500)}else this.triggerHandler("document_fragment_change",this[0].location.hash)
return this}
o.a._checkFragments=function(){const e=o.a._checkFragments.fragmentList
for(let t=0;t<e.length;t++){const n=e[t]
const a=n.doc
if(a[0].location.hash!=n.fragment){a.triggerHandler("document_fragment_change",a[0].location.hash)
n.fragment=a[0].location.hash
o.a._checkFragments.fragmentList[t]=n}}}
o.a._checkFragments.fragmentList=[]
o.a.fn.clickLink=function(){const e=this.eq(0)
e.hasClass("disabled_link")||e.click()}
o.a.fn.showIf=function(e){if(o.a.isFunction(e))return this.each((function(t){o()(this).showIf(e.call(this))}))
e?this.show():this.hide()
return this}
o.a.fn.disableIf=function(e){o.a.isFunction(e)&&(e=e.call(this))
this.prop("disabled",!!e)
return this}
o.a.fn.indicate=function(e){e=e||{}
let t
if("remove"==e){t=this.data("indicator")
t&&t.remove()
return}o()(".indicator_box").remove()
let n=this.offset()
e&&e.offset&&(n=e.offset)
const a=this.width()
const s=this.height()
const r=(e.container||this).zIndex()
t=o()(document.createElement("div"))
t.css({width:a+6,height:s+6,top:n.top-3,left:n.left-3,zIndex:r+1,position:"absolute",display:"block","-moz-border-radius":5,opacity:.8,border:"2px solid #870",backgroundColor:"#fd0"})
t.addClass("indicator_box")
t.mouseover((function(){o()(this).stop().fadeOut("fast",(function(){o()(this).remove()}))}))
this.data("indicator")&&this.indicate("remove")
this.data("indicator",t)
o()("body").append(t)
e&&e.singleFlash?t.hide().fadeIn().animate({opacity:.8},500).fadeOut("slow",(function(){o()(this).remove()})):t.hide().fadeIn().animate({opacity:.8},500).fadeOut("slow").fadeIn("slow").animate({opacity:.8},2500).fadeOut("slow",(function(){o()(this).remove()}))
e&&e.scroll&&o()("html,body").scrollToVisible(t)}
o.a.fn.hasScrollbar=function(){return this.length&&this[0].clientHeight<this[0].scrollHeight}
o.a.fn.log=function(e){console.log("%s: %o",e,this)
return this}
o.a.fn.fillWindowWithMe=function(e){const t=o.a.extend({minHeight:400},e),n=o()(this),a=o()("#wrapper"),s=o()("#main"),r=o()("#not_right_side"),i=o()(window),d=o()(this).add(t.alsoResize)
function c(){d.height(0)
const e=i.height()-(a.offset().top+a.outerHeight())+(s.height()-r.height()),c=Math.max(400,e)
d.height(c)
o.a.isFunction(t.onResize)&&t.onResize.call(n,c)}c()
i.unbind("resize.fillWindowWithMe").bind("resize.fillWindowWithMe",c)
return this}
o.a.fn.autoGrowInput=function(e){e=o.a.extend({maxWidth:1e3,minWidth:0,comfortZone:70},e)
this.filter("input:text").each((function(){let t=e.minWidth||o()(this).width(),n="",a=o()(this),s=o()("<tester/>").css({position:"absolute",top:-9999,left:-9999,width:"auto",fontSize:a.css("fontSize"),fontFamily:a.css("fontFamily"),fontWeight:a.css("fontWeight"),letterSpacing:a.css("letterSpacing"),whiteSpace:"nowrap"}),r=function(){setTimeout(()=>{if(n===(n=a.val()))return
s.text(n)
const r=s.width(),i=r+e.comfortZone>=t?r+e.comfortZone:t,o=a.width(),d=i<o&&i>=t||i>t&&i<e.maxWidth
d&&a.width(i)})}
s.insertAfter(a)
o()(this).bind("keyup keydown blur update change",r)}))
return this}
o.a},ppA4:function(e,t,n){"use strict"
var a=n("An8g")
var s=n("VTBJ")
var r=n("ODXe")
var i=n("Ff2n")
var o=n("pQTu")
var d=n("m0r6")
Object(d["a"])(JSON.parse('{"ar":{"cancel_caeb1e68":"إلغاء","content_share_started_successfully_2c37fb79":"تم بدء مشاركة المحتوى بنجاح","error_starting_content_share_18fb1532":"حدث خطأ أثناء بدء مشاركة المحتوى","loading_25990131":"جارٍ التحميل...","send_e3bd0ed0":"إرسال","send_to_b940900a":"إرسال إلى ...","starting_content_share_2d8c2999":"جارٍ بدء مشاركة المحتوى"},"cy":{"cancel_caeb1e68":"Canslo","content_share_started_successfully_2c37fb79":"Rhannu cynnwys wedi dechrau\'n llwyddiannus","error_starting_content_share_18fb1532":"Gwall wrth ddechrau rhannu cynnwys","loading_25990131":"Wrthi’n llwytho...","send_e3bd0ed0":"Anfon","send_to_b940900a":"Anfon At...","starting_content_share_2d8c2999":"Dechrau rhannu cynnwys"},"da":{"cancel_caeb1e68":"Annuller","content_share_started_successfully_2c37fb79":"Indholdsdelingen blev påbegyndt","error_starting_content_share_18fb1532":"Fejl ved påbegyndelse af indholdsdeling","loading_25990131":"Indlæser ...","send_e3bd0ed0":"Send","send_to_b940900a":"Send til ...","starting_content_share_2d8c2999":"Starter indholdsdeling"},"da-x-k12":{"cancel_caeb1e68":"Annuller","content_share_started_successfully_2c37fb79":"Indholdsdelingen blev påbegyndt","error_starting_content_share_18fb1532":"Fejl ved påbegyndelse af indholdsdeling","loading_25990131":"Indlæser ...","send_e3bd0ed0":"Send","send_to_b940900a":"Send til ...","starting_content_share_2d8c2999":"Starter indholdsdeling"},"de":{"cancel_caeb1e68":"Abbrechen","content_share_started_successfully_2c37fb79":"Inhaltsfreigabe erfolgreich gestartet","error_starting_content_share_18fb1532":"Fehler beim Starten der Inhaltsfreigabe","loading_25990131":"Wird geladen ...","send_e3bd0ed0":"Senden","send_to_b940900a":"Senden an ...","starting_content_share_2d8c2999":"Starten der Inhaltsfreigabe"},"el":{"cancel_caeb1e68":"Ακύρωση","loading_25990131":"Φόρτωση...","send_e3bd0ed0":"Αποστολή"},"en-AU":{"cancel_caeb1e68":"Cancel","content_share_started_successfully_2c37fb79":"Content share started successfully","error_starting_content_share_18fb1532":"Error starting content share","loading_25990131":"Loading...","send_e3bd0ed0":"Send","send_to_b940900a":"Send To...","starting_content_share_2d8c2999":"Starting content share"},"en-AU-x-unimelb":{"cancel_caeb1e68":"Cancel","loading_25990131":"Loading...","send_e3bd0ed0":"Send"},"en-CA":{"cancel_caeb1e68":"Cancel","content_share_started_successfully_2c37fb79":"Content share started successfully","error_starting_content_share_18fb1532":"Error starting content share","loading_25990131":"Loading...","send_e3bd0ed0":"Send","send_to_b940900a":"Send To...","starting_content_share_2d8c2999":"Starting content share"},"en-GB":{"cancel_caeb1e68":"Cancel","content_share_started_successfully_2c37fb79":"Content share started successfully","error_starting_content_share_18fb1532":"Error starting content share","loading_25990131":"Loading...","send_e3bd0ed0":"Send","send_to_b940900a":"Send To...","starting_content_share_2d8c2999":"Starting content share"},"en-GB-x-lbs":{"cancel_caeb1e68":"Cancel","loading_25990131":"Loading...","send_e3bd0ed0":"Send"},"en-GB-x-ukhe":{"cancel_caeb1e68":"Cancel","content_share_started_successfully_2c37fb79":"Content share started successfully","error_starting_content_share_18fb1532":"Error starting content share","loading_25990131":"Loading...","send_e3bd0ed0":"Send","send_to_b940900a":"Send To...","starting_content_share_2d8c2999":"Starting content share"},"es":{"cancel_caeb1e68":"Cancelar","content_share_started_successfully_2c37fb79":"El contenido comenzó a compartirse correctamente","error_starting_content_share_18fb1532":"Ocurrió un error al comenzar a compartir contenido","loading_25990131":"Cargando...","send_e3bd0ed0":"Enviar","send_to_b940900a":"Enviar a...","starting_content_share_2d8c2999":"Comenzando a compartir contenido"},"fa":{"cancel_caeb1e68":"لغو","loading_25990131":"در حال بارگذاری...","send_e3bd0ed0":"ارسال"},"fi":{"cancel_caeb1e68":"Peruuta","content_share_started_successfully_2c37fb79":"Sisällön jako aloitettiin onnistuneesti","error_starting_content_share_18fb1532":"Virhe sisällön jaon aloittamisessa","loading_25990131":"Ladataan...","send_e3bd0ed0":"Lähetä","send_to_b940900a":"Lähetä kohteeseen...","starting_content_share_2d8c2999":"Sisällön jako aloitetaan"},"fr":{"cancel_caeb1e68":"Annuler","content_share_started_successfully_2c37fb79":"Le partage de contenu a été lancé avec succès","error_starting_content_share_18fb1532":"Erreur lors du lancement du partage de contenu","loading_25990131":"Chargement...","send_e3bd0ed0":"Envoyer","send_to_b940900a":"Envoyer à...","starting_content_share_2d8c2999":"Lancement du partage de contenu"},"fr-CA":{"cancel_caeb1e68":"Annuler","content_share_started_successfully_2c37fb79":"Le partage de contenu a démarré avec succès","error_starting_content_share_18fb1532":"Une erreur est survenue lors du démarrage du partage de contenu","loading_25990131":"En cours de chargement...","send_e3bd0ed0":"Envoyer","send_to_b940900a":"Envoyer à…","starting_content_share_2d8c2999":"Démarrage du partage de contenu"},"he":{"cancel_caeb1e68":"ביטול","loading_25990131":"טוען...","send_e3bd0ed0":"שליחה"},"ht":{"cancel_caeb1e68":"Anile","content_share_started_successfully_2c37fb79":"Pataj kontni kòmanse ak siksè","error_starting_content_share_18fb1532":"Erè nan demaraj pataj kontni","loading_25990131":"Chajman...","send_e3bd0ed0":"Voye","send_to_b940900a":"Voye Bay...","starting_content_share_2d8c2999":"Demaraj pataj kontni"},"hu":{"cancel_caeb1e68":"Mégse","loading_25990131":"Töltődik...","send_e3bd0ed0":"Küldés"},"hy":{"cancel_caeb1e68":"Չեղյալ համարել","loading_25990131":"Բեռնում է...","send_e3bd0ed0":"Ուղարկել"},"is":{"cancel_caeb1e68":"Hætta við","content_share_started_successfully_2c37fb79":"Efnisdeiling hófst giftusamlega","error_starting_content_share_18fb1532":"Villa við að byrja efnisdeilingu","loading_25990131":"Hleð inn...","send_e3bd0ed0":"Senda","send_to_b940900a":"Senda til…","starting_content_share_2d8c2999":"Byrja efnisdeilingu"},"it":{"cancel_caeb1e68":"Annulla","content_share_started_successfully_2c37fb79":"La condivisione dei contenuti è iniziata con successo","error_starting_content_share_18fb1532":"Errore nell’avvio della condivisione dei contenuti","loading_25990131":"Caricamento in corso...","send_e3bd0ed0":"Invia","send_to_b940900a":"Invia a...","starting_content_share_2d8c2999":"Inizio della condivisione dei contenuti"},"ja":{"cancel_caeb1e68":"キャンセル","content_share_started_successfully_2c37fb79":"コンテンツの共有が正常に開始されました","error_starting_content_share_18fb1532":"コンテンツの共有開始時にエラー","loading_25990131":"読み込み中・・・","send_e3bd0ed0":"送信","send_to_b940900a":"送信先...","starting_content_share_2d8c2999":"コンテンツの共有開始中"},"ko":{"cancel_caeb1e68":"취소","loading_25990131":"로드하는 중...","send_e3bd0ed0":"보내기"},"mi":{"cancel_caeb1e68":"Whakakore","content_share_started_successfully_2c37fb79":"Te tuari ihirangi i timata pai","error_starting_content_share_18fb1532":"He hapa i te wā e timata ana te tuari ihirangi","loading_25990131":"E uta ana ....","send_e3bd0ed0":"Tukua","send_to_b940900a":"Tukua ki ...","starting_content_share_2d8c2999":"E timata tuari ihirangi"},"nb":{"cancel_caeb1e68":"Avbryt","content_share_started_successfully_2c37fb79":"Innholdsdeling startet vellykket","error_starting_content_share_18fb1532":"Avvik under start av innholdsdeling","loading_25990131":"Laster...","send_e3bd0ed0":"Send","send_to_b940900a":"Send til...","starting_content_share_2d8c2999":"Starter innholdsdeling"},"nb-x-k12":{"cancel_caeb1e68":"Avbryt","content_share_started_successfully_2c37fb79":"Innholdsdeling startet vellykket","error_starting_content_share_18fb1532":"Avvik under start av innholdsdeling","loading_25990131":"Laster...","send_e3bd0ed0":"Send","send_to_b940900a":"Send til...","starting_content_share_2d8c2999":"Starter innholdsdeling"},"nl":{"cancel_caeb1e68":"Annuleren","content_share_started_successfully_2c37fb79":"Contentshare is gestart","error_starting_content_share_18fb1532":"Fout bij starten van contentshare","loading_25990131":"Bezig met laden...","send_e3bd0ed0":"Versturen","send_to_b940900a":"Verzenden naar...","starting_content_share_2d8c2999":"Contentshare starten"},"nn":{"cancel_caeb1e68":"Avbryt","content_share_started_successfully_2c37fb79":"Innhaldsdeling er starta","error_starting_content_share_18fb1532":"Det oppstod ein feil under oppstart av innhaldsdeling","loading_25990131":"Lastar...","send_e3bd0ed0":"Send","send_to_b940900a":"Send til...","starting_content_share_2d8c2999":"Startar innhaldsdeling"},"pl":{"cancel_caeb1e68":"Anuluj","content_share_started_successfully_2c37fb79":"Pomyślnie rozpoczęto udostępnianie zawartości","error_starting_content_share_18fb1532":"Błąd podczas udostępniania zawartości","loading_25990131":"Wczytywanie...","send_e3bd0ed0":"Wyślij","send_to_b940900a":"Wyślij do...","starting_content_share_2d8c2999":"Rozpoczynanie udostępniania zawartości"},"pt":{"cancel_caeb1e68":"Cancelar","content_share_started_successfully_2c37fb79":"O partilhamento de conteúdo foi iniciado com sucesso","error_starting_content_share_18fb1532":"Erro ao iniciar o partilhamento de conteúdo","loading_25990131":"A carregar...","send_e3bd0ed0":"Enviar","send_to_b940900a":"Enviar para...","starting_content_share_2d8c2999":"A iniciar o partilhamento de conteúdo"},"pt-BR":{"cancel_caeb1e68":"Cancelar","content_share_started_successfully_2c37fb79":"Compartilhamento de conteúdo iniciado com sucesso","error_starting_content_share_18fb1532":"Erro ao iniciar compartilhamento de conteúdo","loading_25990131":"Carregando...","send_e3bd0ed0":"Enviar","send_to_b940900a":"Enviar para...","starting_content_share_2d8c2999":"Iniciando compartilhamento de conteúdo"},"ru":{"cancel_caeb1e68":"Отменить","content_share_started_successfully_2c37fb79":"Общий доступ к контенту успешно запущен","error_starting_content_share_18fb1532":"Ошибка запуска общего доступа к контенту","loading_25990131":"Выполняется загрузка...","send_e3bd0ed0":"Отправить","send_to_b940900a":"Отправить в...","starting_content_share_2d8c2999":"Запуск общего доступа к контенту"},"sl":{"cancel_caeb1e68":"Prekliči","loading_25990131":"Nalaganje ...","send_e3bd0ed0":"Pošlji"},"sv":{"cancel_caeb1e68":"Avbryt","content_share_started_successfully_2c37fb79":"Innehållsdelning startades","error_starting_content_share_18fb1532":"Fel vid start av innehållsdelning","loading_25990131":"Läser in ...","send_e3bd0ed0":"Skicka","send_to_b940900a":"Skicka till...","starting_content_share_2d8c2999":"Startar innehållsdelning"},"sv-x-k12":{"cancel_caeb1e68":"Avbryt","content_share_started_successfully_2c37fb79":"Innehållsdelning startades","error_starting_content_share_18fb1532":"Fel vid start av innehållsdelning","loading_25990131":"Läser in ...","send_e3bd0ed0":"Skicka","send_to_b940900a":"Skicka till...","starting_content_share_2d8c2999":"Startar innehållsdelning"},"tr":{"cancel_caeb1e68":"İptal","content_share_started_successfully_2c37fb79":"İçerik paylaşımı başarılı bir şekilde başlatıldı","loading_25990131":"Yükleniyor...","send_e3bd0ed0":"Gönder"},"uk":{"cancel_caeb1e68":"Скасувати","loading_25990131":"Завантаження...","send_e3bd0ed0":"Надіслати"},"zh-Hans":{"cancel_caeb1e68":"取消","content_share_started_successfully_2c37fb79":"内容共享已成功启动","error_starting_content_share_18fb1532":"启动内容共享出错","loading_25990131":"加载中……","send_e3bd0ed0":"发送","send_to_b940900a":"发送至...","starting_content_share_2d8c2999":"启动内容共享"},"zh-Hant":{"cancel_caeb1e68":"取消","content_share_started_successfully_2c37fb79":"內容共用已成功開始","error_starting_content_share_18fb1532":"開始內容共用發生錯誤","loading_25990131":"正在載入……","send_e3bd0ed0":"發送","send_to_b940900a":"傳送到...","starting_content_share_2d8c2999":"開始內容共用"}}'))
n("jQeR")
n("0sPK")
var c=o["default"].scoped("direct_share_user_modal")
var l=n("q1tI")
var _=n.n(l)
n("17x9")
var u=n("L+/K")
var f=n("Xx/m")
var b=n("VTJ5")
var p=n("S4Kx")
var g=n("BxIY")
n("qBwj")
var m=n("4Ogu")
n.d(t,"a",(function(){return y}))
const h=Object(l["lazy"])(()=>Promise.all([n.e(6),n.e(5),n.e(8),n.e(23),n.e(144),n.e(556)]).then(n.bind(null,"FB/m")))
var v=Object(a["a"])(b["a"],{renderTitle:"",size:"x-small"})
function y(e){let t=e.contentShare,n=e.courseId,o=Object(i["a"])(e,["contentShare","courseId"])
const d=Object(l["useState"])([]),y=Object(r["a"])(d,2),k=y[0],w=y[1]
const S=Object(l["useState"])(null),j=Object(r["a"])(S,2),O=j[0],z=j[1]
const x=Object(l["useRef"])(o.open)
function E(){w([])
z(null)}function A(e){k.find(t=>t.id===e.id)||w(k.concat([e]))}function C(e){w(k.filter(t=>t.id!==e.id))}function D(){return Object(m["a"])({method:"POST",path:"/api/v1/users/self/content_shares",body:Object(s["a"])({},t,{receiver_ids:k.map(e=>e.id)})})}function T(){z("info")
D().then(()=>z("success")).catch(e=>{console.error(e)
e.response&&console.error(e.response)
z("error")})}function N(){return _.a.createElement(_.a.Fragment,null,Object(a["a"])(f["a"],{onClick:o.onDismiss},void 0,c.t("Cancel")),Object(a["a"])(f["a"],{disabled:0===k.length||null!==O,variant:"primary",margin:"0 0 0 x-small",onClick:T},void 0,c.t("Send")))}const B=Object(a["a"])(p["a"],{as:"div",textAlign:"center"},void 0,Object(a["a"])(b["a"],{renderTitle:c.t("Loading...")}))
if(o.open!==x.current){x.current=o.open
E()}let I=""
"info"===O?I=c.t("Starting content share"):"success"===O?I=c.t("Content share started successfully"):"error"===O&&(I=c.t("Error starting content share"))
const L=I?Object(a["a"])(u["a"],{variant:O},void 0,Object(a["a"])("div",{role:"alert","aria-live":"assertive","aria-atomic":true},void 0,I),"info"===O?v:null):null
return _.a.createElement(g["a"],Object.assign({label:c.t("Send To..."),size:"medium"},o,{footer:Object(a["a"])(N,{})}),Object(a["a"])(l["Suspense"],{fallback:B},void 0,L,Object(a["a"])(h,{courseId:n,selectedUsers:k,onUserSelected:A,onUserRemoved:C})))}},"rf+m":function(e,t,n){"use strict"
n.d(t,"a",(function(){return f}))
var a=n("VTBJ")
var s=n("1OyB")
var r=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var d=n("Ji7U")
var c=n("q1tI")
var l=n.n(c)
var _=n("hPGw")
var u=l.a.createElement("path",{d:"M568.13.012L392 176.142l783.864 783.989L392 1743.87 568.13 1920l960.118-959.87z",fillRule:"evenodd",stroke:"none",strokeWidth:"1"})
var f=function(e){Object(d["a"])(t,e)
function t(){Object(s["a"])(this,t)
return Object(i["a"])(this,Object(o["a"])(t).apply(this,arguments))}Object(r["a"])(t,[{key:"render",value:function(){return l.a.createElement(_["a"],Object.assign({},this.props,{name:"IconArrowOpenEnd",viewBox:"0 0 1920 1920",bidirectional:true}),u)}}])
t.displayName="IconArrowOpenEndSolid"
return t}(c["Component"])
f.glyphName="arrow-open-end"
f.variant="Solid"
f.propTypes=Object(a["a"])({},_["a"].propTypes)},sxOR:function(e,t,n){"use strict"
var a=String.prototype.replace
var s=/%20/g
var r=n("0jNN")
var i={RFC1738:"RFC1738",RFC3986:"RFC3986"}
e.exports=r.assign({default:i.RFC3986,formatters:{RFC1738:function(e){return a.call(e,s,"+")},RFC3986:function(e){return String(e)}}},i)},y2yB:function(e,t,n){"use strict"
n.d(t,"a",(function(){return f}))
var a=n("VTBJ")
var s=n("1OyB")
var r=n("vuIU")
var i=n("md7G")
var o=n("foSv")
var d=n("Ji7U")
var c=n("q1tI")
var l=n.n(c)
var _=n("hPGw")
var u=l.a.createElement("path",{d:"M.08 568.062l176.13-176.13 783.988 783.865 783.74-783.864 176.13 176.13-959.87 960.118z",fillRule:"evenodd",stroke:"none",strokeWidth:"1"})
var f=function(e){Object(d["a"])(t,e)
function t(){Object(s["a"])(this,t)
return Object(i["a"])(this,Object(o["a"])(t).apply(this,arguments))}Object(r["a"])(t,[{key:"render",value:function(){return l.a.createElement(_["a"],Object.assign({},this.props,{name:"IconArrowOpenDown",viewBox:"0 0 1920 1920"}),u)}}])
t.displayName="IconArrowOpenDownSolid"
return t}(c["Component"])
f.glyphName="arrow-open-down"
f.variant="Solid"
f.propTypes=Object(a["a"])({},_["a"].propTypes)},ysUD:function(e,t,n){"use strict"
var a=n("VTBJ")
var s=n("rePB")
var r=n("1OyB")
var i=n("vuIU")
var o=n("md7G")
var d=n("foSv")
var c=n("Ji7U")
var l=n("q1tI")
var _=n.n(l)
var u=n("17x9")
var f=n.n(u)
var b=n("TSYQ")
var p=n.n(b)
var g=n("eAd9")
var m=n.n(g)
var h=n("J2CL")
var v=n("sQ3t")
var y=n("jtGx")
function k(e){var t=e.colors,n=e.borders,a=e.stacking
return{zIndex:a.topmost,background:"rgba(255, 255, 255, 0.75)",borderColor:"transparent",focusBorderColor:t.borderBrand,borderRadius:n.radiusMedium,borderWidth:n.widthSmall}}k.canvas=function(e){return{focusBorderColor:e["ic-brand-primary"]}}
n.d(t,"a",(function(){return x}))
var w,S,j,O
var z={componentId:"fvvQs",template:function(e){return"\n\n.fvvQs_bGBk{background:".concat(e.background||"inherit",";border:").concat(e.borderWidth||"inherit"," solid ").concat(e.borderColor||"inherit",";border-radius:").concat(e.borderRadius||"inherit",";bottom:0;box-sizing:border-box;display:flex;justify-content:center;left:0;outline:none;overflow:auto;position:absolute;right:0;top:0;z-index:").concat(e.zIndex||"inherit","}\n\n.fvvQs_bGBk:focus{border-color:").concat(e.focusBorderColor||"inherit","}\n\n.fvvQs_cMOR{position:fixed}\n\n.fvvQs_dacV{align-items:flex-start}\n\n.fvvQs_cwzs{align-items:center}\n\n.fvvQs_cGWj{align-items:flex-end}\n\n.fvvQs_eFiI{align-items:stretch}")},root:"fvvQs_bGBk",fullscreen:"fvvQs_cMOR",top:"fvvQs_dacV",center:"fvvQs_cwzs",bottom:"fvvQs_cGWj",stretch:"fvvQs_eFiI"}
var x=(w=Object(h["themeable"])(k,z),w(S=(O=j=function(e){Object(c["a"])(t,e)
function t(){var e
var n
Object(r["a"])(this,t)
for(var a=arguments.length,s=new Array(a),i=0;i<a;i++)s[i]=arguments[i]
n=Object(o["a"])(this,(e=Object(d["a"])(t)).call.apply(e,[this].concat(s)))
n.handleElementRef=function(e){n.props.elementRef(e)}
n.contentRef=function(e){n._content=e}
return n}Object(i["a"])(t,[{key:"componentDidMount",value:function(){this.props.fullscreen&&m.a.on()}},{key:"componentWillUnmount",value:function(){this.props.fullscreen&&m.a.off()}},{key:"render",value:function(){var e
var n=Object(v["a"])(this.props.children,{ref:this.contentRef})
var r=p()((e={},Object(s["a"])(e,z.root,true),Object(s["a"])(e,z[this.props.placement],true),Object(s["a"])(e,z.fullscreen,this.props.fullscreen),e))
var i=Object(a["a"])({},Object(y["a"])(this.props,t.propTypes),{className:r,ref:this.handleElementRef})
if("function"===typeof this.props.onClick){i.onClick=this.props.onClick
i.tabIndex=-1}return _.a.createElement("span",i,n)}}])
t.displayName="Mask"
return t}(l["Component"]),j.propTypes={onDismiss:f.a.func,placement:f.a.oneOf(["top","center","bottom","stretch"]),fullscreen:f.a.bool,children:f.a.node,onClick:f.a.func,elementRef:f.a.func},j.defaultProps={placement:"center",fullscreen:false,onDismiss:void 0,children:null,onClick:void 0,elementRef:function(e){}},O))||S)}}])

//# sourceMappingURL=assignment_show-c-42a52f34eb.js.map