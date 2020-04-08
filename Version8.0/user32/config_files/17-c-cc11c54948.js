(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[17],{"21i1":function(e,t,n){"use strict"
var i=n("yiTI")
var o=n("xe+K")
function r(e,t,n,i){const o=!n
const r=o?t:"function"===typeof i?i:t[n]
false
return r}var a=n("ouhR")
var s=n.n(a)
const l=!ENV.use_rce_enhancements&&n("rkWX").default
function c(e,t,n){e.css("display","none")
const r=t.onFocus
t.onFocus=function(){ENV.use_rce_enhancements||g.showSidebar()
r instanceof Function&&r(...arguments)}
i["a"].loadOnTarget(e,t,(t,i)=>{const r=b(e)
const a=m(s()(t))
a.data("remoteEditor",i)
r.trigger(o["a"],i)
n&&n(i)})}function d(e){const t=b(e)
const n=t.attr("id")
const i="tinymce-parent-of-".concat(n)
if(t.parent().attr("id")!==i)return t.wrap("<div id='".concat(i,"' style='visibility: hidden'></div>"))}function u(){s()(".mce-resizehandle").attr("aria-hidden",true)}let h=0
function _(){return"random_editor_id_".concat(h++)}function f(e){const t=s()(e)
const n="attr"in t?t.attr("id"):t.id
n&&""!=n||t.attr("id",_())}function m(e){const t=b(e)
const n=t.attr("id")
if(!n||""==n)return t
const i=s()("#".concat(n))
if(i.length<=0)return t
return i}const p="with the new RCE you don't need to call this method, it is a no op since there is no sidebar"
const g={preloadRemoteModule(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:()=>{}
return i["a"].preload(e)},initSidebar:r(p,(function(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{}
ENV.use_rce_enhancements||l.init(e)})),showSidebar:r(p,()=>{ENV.use_rce_enhancements||l.show()}),hideSidebar:r(p,()=>{ENV.use_rce_enhancements||l.hide()}),loadNewEditor(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}
let n=arguments.length>2?arguments[2]:void 0
let i=b(e)
if(i.length<=0)return
f(i)
t=s.a.extend({},t)
const o=e=>{t.focus&&this.activateRCE(i)
n&&n(e)}
i=this.freshNode(i)
if(t.manageParent){delete t.manageParent
d(i)}c(i,t,o)
u()},callOnRCE(e,t){let n=b(e)
n=this.freshNode(n)
for(var i=arguments.length,r=new Array(i>2?i-2:0),a=2;a<i;a++)r[a-2]=arguments[a]
return Object(o["d"])(n,t,...r)},destroyRCE(e){let t=b(e)
t=this.freshNode(t)
Object(o["b"])(t)
ENV.use_rce_enhancements||l.hide()},activateRCE(e){let t=b(e)
t=this.freshNode(t)
Object(o["c"])(t)
ENV.use_rce_enhancements||l.show()},freshNode:m,ensureID:f}
function b(e){return e.length?e:s()(e)}t["a"]=g},Cvk5:function(e,t,n){"use strict"
n.r(t)
var i=n("pQTu")
var o=n("m0r6")
Object(o["a"])(JSON.parse('{"ar":{"editor_accessibility":{"accessibles":{"background_color":"لون الخلفية، اضغط لأسفل للتحديد","forecolor":"لون النص، اضغط لأسفل للتحديد"},"titles":{"font_size":"حجم الخط، اضغط لأسفل للتحديد","formatting":"التنسيق، اضغط لأسفل للتحديد","rte_help":"منطقة نص منسق. اضغط على ALT+F8 للمساعدة"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"cy":{"editor_accessibility":{"accessibles":{"background_color":"Lliw\'r Cefndir, pwyswch i lawr i ddewis","forecolor":"Lliw\'r Testun, pwyswch i lawr i ddewis"},"titles":{"font_size":"Maint y Ffont, pwyswch i lawr i ddewis","formatting":"Fformat, pwyswch i lawr i ddewis","rte_help":"Ardal Testun Cyfoethog. Pwyswch ALT+F8 i gael help"}},"rich_content_editor_2708ef21":"Golygydd Cynnwys Cyfoethog"},"da":{"editor_accessibility":{"accessibles":{"background_color":"Baggrundsfarve, tryk ned for at vælge","forecolor":"Tekstfarve, tryk ned for at vælge"},"titles":{"font_size":"Skriftstørrelse, tryk ned for at vælge","formatting":"Formatering, tryk ned for at vælge","rte_help":"Område med RTF. Tryk på ALT+F8 for hjælp"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"da-x-k12":{"editor_accessibility":{"accessibles":{"background_color":"Baggrundsfarve, tryk ned for at vælge","forecolor":"Tekstfarve, tryk ned for at vælge"},"titles":{"font_size":"Skriftstørrelse, tryk ned for at vælge","formatting":"Formatering, tryk ned for at vælge","rte_help":"Område med RTF. Tryk på ALT+F8 for hjælp"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"de":{"editor_accessibility":{"accessibles":{"background_color":"Hintergrundfarbe, zum Auswählen Pfeil-nach-unten drücken","forecolor":"Textfarbe, zum Auswahlen Pfeil-nach-unten drücken"},"titles":{"font_size":"Schriftgröße, zum Auswählen Pfeil-nach-unten drücken","formatting":"Formatierung, zum Auswählen Pfeil-nach-unten drücken","rte_help":"Rich Text-Bereich. Für Hilfe \\u003cAlt\\u003e+F8 drücken"}},"rich_content_editor_2708ef21":"Rich-Content-Editor"},"el":{"editor_accessibility":{"accessibles":{"background_color":"Χρώμα Φόντου, πιέστε για επιλογή","forecolor":"Χρώμα Κειμένου, πιέστε για επιλογή"},"titles":{"font_size":"Μέγεθος Γραμματοσειράς, πιέστε για επιλογή","formatting":"Μορφοποίηση, πατήστε κάτω για επιλογή","rte_help":"\\u003cmrk mid=\\"6144\\" mtype=\\"seg\\"\\u003eΠεριοχή Rich Text.\\u003c/mrk\\u003e \\u003cmrk mid=\\"6145\\" mtype=\\"seg\\"\\u003eΠατήστε ALT+F8 για βοήθεια\\u003c/mrk\\u003e"}},"rich_content_editor_2708ef21":"Επεξεργαστής Πλούσιου Περιεχομένου-rich content"},"en-AU":{"editor_accessibility":{"accessibles":{"background_color":"Background Colour, press down to select","forecolor":"Text Colour, press down to select"},"titles":{"font_size":"Font Size, press down to select","formatting":"Formatting, press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help."}},"rich_content_editor_2708ef21":"Rich Content Editor"},"en-AU-x-unimelb":{"editor_accessibility":{"accessibles":{"background_color":"Background Colour, press down to select","forecolor":"Text Colour, press down to select"},"titles":{"font_size":"Font Size, press down to select","formatting":"Formatting, press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help."}},"rich_content_editor_2708ef21":"Rich Content Editor"},"en-CA":{"editor_accessibility":{"accessibles":{"background_color":"Background Color, press down to select","forecolor":"Text Color, press down to select"},"titles":{"font_size":"Font Size, press down to select","formatting":"Formatting, press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"en-GB":{"editor_accessibility":{"accessibles":{"background_color":"Background colour. Press down to select","forecolor":"Text colour. Press down to select"},"titles":{"font_size":"Font size. Press down to select","formatting":"Formatting. Press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"en-GB-x-lbs":{"editor_accessibility":{"accessibles":{"background_color":"Background colour. Press down to select","forecolor":"Text colour. Press down to select"},"titles":{"font_size":"Font size. Press down to select","formatting":"Formatting. Press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"en-GB-x-ukhe":{"editor_accessibility":{"accessibles":{"background_color":"Background colour. Press down to select","forecolor":"Text colour. Press down to select"},"titles":{"font_size":"Font size. Press down to select","formatting":"Formatting. Press down to select","rte_help":"Rich Text Area. Press ALT+F8 for help"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"es":{"editor_accessibility":{"accessibles":{"background_color":"Color de fondo, pulse abajo para seleccionar","forecolor":"Color de texto, pulse abajo para seleccionar"},"titles":{"font_size":"Tamaño del texto, pulse abajo para seleccionar","formatting":"Formato, pulse abajo para seleccionar","rte_help":"Área del texto enriquecido. Presione ALT+F8 para ayuda"}},"rich_content_editor_2708ef21":"Editor de contenido enriquecido"},"fa":{"editor_accessibility":{"accessibles":{"background_color":"رنگ پس زمینه، کلید down را برای انتخاب فشار دهید","forecolor":"رنگ متن، کلید down را برای انتخاب فشار دهید"},"titles":{"font_size":"اندازه قلم، کلید down را برای انتخاب فشار دهید","formatting":"در حال قالب بندی، کلید down را برای انتخاب فشار دهید","rte_help":"قسمت دارای متن غنی. ALT+F8 را برای راهنمایی فشار دهید."}},"rich_content_editor_2708ef21":"ویرایشگر محتوای غنی"},"fi":{"editor_accessibility":{"accessibles":{"background_color":"Taustaväri, valitse painamalla alas","forecolor":"Tekstin väri, valitse painamalla alas"},"titles":{"font_size":"Fontin koko, valitse painamalla alas","formatting":"Muotoilu, valitse painamalla alas","rte_help":"RTF-muoto Ohjeet painamalla ALT+F8"}},"rich_content_editor_2708ef21":"Rikas sisältöeditori"},"fr":{"editor_accessibility":{"accessibles":{"background_color":"Couleur de fond. Appuyez pour sélectionner.","forecolor":"Couleur du texte. Appuyez pour sélectionner."},"titles":{"font_size":"Taille du texte. Appuyez pour sélectionner.","formatting":"Mise en forme. Appuyez pour sélectionner.","rte_help":"Zone de texte enrichi. Presser ALT+F8 pour obtenir de l\'aide"}},"rich_content_editor_2708ef21":"Éditeur de texte enrichi"},"fr-CA":{"editor_accessibility":{"accessibles":{"background_color":"Couleur de fond. Appuyez pour sélectionner.","forecolor":"Couleur du texte. Appuyez pour sélectionner."},"titles":{"font_size":"Taille du texte. Appuyez pour sélectionner.","formatting":"Mise en forme. Appuyez pour sélectionner.","rte_help":"Zone de texte enrichi. Presser ALT+F8 pour obtenir de l\'aide"}},"rich_content_editor_2708ef21":"Éditeur de texte enrichi"},"he":{"editor_accessibility":{"accessibles":{"background_color":"צבע רקע, יש להקיש כדי לבחור","forecolor":"צבע טקסט, יש להקיש כדי לבחור"},"titles":{"font_size":"גודל אות, יש להקיש כדי לבחור","formatting":"עיצוב, יש להקיש כדי לבחור","rte_help":"איזור תוכן עשיר. יש להקיש ALT+F8 לעזרה"}},"rich_content_editor_2708ef21":"עורך תוכן עשיר"},"ht":{"editor_accessibility":{"accessibles":{"background_color":"Koulè Fon, peze anba pou ka seleksyone","forecolor":"Koulè Tèks, peze anba pou ka seleksyone"},"titles":{"font_size":"Gwosè Tèks, peze anba pou ka seleksyone","formatting":"Fòmataj, peze anba pou ka seleksyone","rte_help":"Zòn Tèks Rich. Peze ALT+F8 pou èd"}},"rich_content_editor_2708ef21":"Editè Kontni Rich"},"hu":{"editor_accessibility":{"accessibles":{"background_color":"Háttérszín, nyomja le a kiválasztáshoz","forecolor":"Szövegszín, nyomja le a kiválasztáshoz"},"titles":{"font_size":"Betűméret, nyomja le a kiválasztáshoz","formatting":"Formázás, nyomja le a kiválasztáshoz","rte_help":"Vizuális szövegterület, nyomja le az ALT+F8-at a segítséghez"}},"rich_content_editor_2708ef21":"Vizuális szövegszerkesztő"},"hy":{"editor_accessibility":{"accessibles":{"background_color":"Ֆոնի գույն, ընտրելու համար սեղմեք ներքև","forecolor":"Տեքստի գույն, ընտրելու համար սեղմեք ներքև"},"titles":{"font_size":"Տառերի չափ, ընտրելու համար սեղմեք ներքև","formatting":"Ֆորմատավորում, ընտրելու համար սեղմեք ներքև","rte_help":"Ֆորմատավորված տեքստի դաշտ, տեղեկությունների համար սեղմել ALT+F8 "}},"rich_content_editor_2708ef21":"Ֆորմատավորված տեքստի խմբագիր"},"is":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrunnslitur, ýttu á niðurör til að velja","forecolor":"Textalitur, ýttu á niðurör til að velja"},"titles":{"font_size":"Stafastærð, ýttu á niðurör til að velja","formatting":"Forsníð, ýttu á niðurör til að velja","rte_help":"Mótað textasvæði. Ýttu á ALT+F8 til að fá hjálp"}},"rich_content_editor_2708ef21":"Rich Content ritill"},"it":{"editor_accessibility":{"accessibles":{"background_color":"Colore sfondo, premi per selezionare","forecolor":"Colore testo, premi per selezionare"},"titles":{"font_size":"Dimensioni carattere, premi per selezionare","formatting":"Formattazione, premi per selezionare","rte_help":"Area di testo RTF. Premi ALT+F8 per la Guida"}},"rich_content_editor_2708ef21":"Editor di contenuti avanzati"},"ja":{"editor_accessibility":{"accessibles":{"background_color":"背景色、押して選択","forecolor":"テキスト色、押して選択"},"titles":{"font_size":"フォント サイズ、押して選択","formatting":"書式設定、押して選択","rte_help":"リッチテキストエリア。ヘルプへは、ALT+F8を押してください"}},"rich_content_editor_2708ef21":"リッチ コンテンツ エディタ"},"ko":{"editor_accessibility":{"accessibles":{"background_color":"배경색, 선택하려면 누름","forecolor":"텍스트 색, 선택하려면 누름"},"titles":{"font_size":"글자 크기, 선택하려면 누름","formatting":"서식, 선택하려면 누름","rte_help":"Rich Text Area. Press ALT+F8 for help"}}},"mi":{"editor_accessibility":{"accessibles":{"background_color":"Tae Papamuri, ki te pēhi ki raro tīpako","forecolor":"Tae Kuputuhi, ki te pēhi ki raro tīpako"},"titles":{"font_size":"Rahi Momotuhi, ki te pēhi ki raro tīpako","formatting":"Whakahōputu, ki te pēhi ki raro tīpako","rte_help":"Horahanga Kupu Taunaki. Pēhi ALT + K8 no te tauturu"}},"rich_content_editor_2708ef21":"Ētita Ihirangi Whai Rawa"},"nb":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrunnsfarge, trykk nedover for å velge","forecolor":"Tekstfarge, trykk nedover for å velge"},"titles":{"font_size":"Skriftstørrelse, trykk nedover for å velge","formatting":"Formatering, trykk nedover for å velge","rte_help":"Riktekstområde. Trykk ALT+F8 for hjelp"}},"rich_content_editor_2708ef21":"Rich innholdsredigering"},"nb-x-k12":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrunnsfarge, trykk nedover for å velge","forecolor":"Tekstfarge, trykk nedover for å velge"},"titles":{"font_size":"Skriftstørrelse, trykk nedover for å velge","formatting":"Formatering, trykk nedover for å velge","rte_help":"Riktekstområde. Trykk ALT+F8 for hjelp"}},"rich_content_editor_2708ef21":"Rich innholdsredigering"},"nl":{"editor_accessibility":{"accessibles":{"background_color":"Achtergrondkleur, er op drukken om een optie te selecteren","forecolor":"Tekstkleur, er op drukken om een optie te selecteren"},"titles":{"font_size":"Tekstkleur, er op drukken om een optie te selecteren","formatting":"Opmaak, er op drukken om een optie te selecteren","rte_help":"Rich Text Area. Druk ALT+F8 voor hulp"}},"rich_content_editor_2708ef21":"Rich Content Editor"},"nn":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrunnsfarge, trykk ned for å velje","forecolor":"Tekstfarge, trykk ned for å velje"},"titles":{"font_size":"Skriftstorleik, trykk ned for å velje","formatting":"Formatering, trykk ned for å velje","rte_help":"Område for rikt tekstformat. Trykk ALT+F8 for hjelp"}},"rich_content_editor_2708ef21":"Redigeringsprogram for rikt innhald"},"pl":{"editor_accessibility":{"accessibles":{"background_color":"Kolor tła; naciskaj do dołu, aby wybrać","forecolor":"Kolor tekstu; naciskaj do dołu, aby wybrać"},"titles":{"font_size":"Rozmiar czcionki; naciskaj do dołu, aby wybrać","formatting":"Formatowanie; naciskaj do dołu, aby wybrać","rte_help":"Obszar Rich Text. Wciśnij ALT+F8 po pomoc"}},"rich_content_editor_2708ef21":"Edytor wzbogaconej zawartości"},"pt":{"editor_accessibility":{"accessibles":{"background_color":"Cor de fundo, premir para baixo para selecionar","forecolor":"Cor do texto, premir para baixo para selecionar"},"titles":{"font_size":"Tamanho da letra, premir para baixo para selecionar","formatting":"Formatação, premir para baixo para selecionar","rte_help":"Área Rich Text. Pressione ALT+F8 para ajuda"}},"rich_content_editor_2708ef21":"Editor de conteúdo avançado"},"pt-BR":{"editor_accessibility":{"accessibles":{"background_color":"Cor de fundo, pressione para selecionar","forecolor":"Cor do texto, pressione para selecionar"},"titles":{"font_size":"Tamanho da fonte, pressione para selecionar","formatting":"Formatação, pressione para selecionar","rte_help":"Área de conteúdo enriquecido. Pressione ALT + F8 para obter ajuda"}},"rich_content_editor_2708ef21":"Editor de conteúdo avançado"},"ru":{"editor_accessibility":{"accessibles":{"background_color":"Цвет фона, нажмите стрелку вниз, чтобы выбрать","forecolor":"Цвет текста, нажмите стрелку вниз, чтобы выбрать"},"titles":{"font_size":"Размер шрифта, нажмите стрелку вниз, чтобы выбрать","formatting":"Форматирование, нажмите стрелку вниз, чтобы выбрать","rte_help":"Область форматированного текста. Нажмите ALT + F8 для справки"}},"rich_content_editor_2708ef21":"Редактор форматированного текста"},"sl":{"editor_accessibility":{"accessibles":{"background_color":"Barva ozadja; za izbiro pritisnite navzdol.","forecolor":"Barva besedila; za izbiro pritisnite navzdol."},"titles":{"font_size":"Velikost pisave; za izbiro pritisnite navzdol.","formatting":"Oblikovanje; za izbiro pritisnite navzdol.","rte_help":"Območje besedila Za pomoč pritisnite ALT+F8."}},"rich_content_editor_2708ef21":"Urejevalnik"},"sv":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrundsfärg, tryck ner för att välja","forecolor":"Textfärg, tryck ner för att välja"},"titles":{"font_size":"Typsnittsstorlek, tryck ner för att välja","formatting":"Formatering, tryck ner för att välja","rte_help":"RTF-område. Tryck ALT+F8 för hjälp"}},"rich_content_editor_2708ef21":"Innehållsredigeraren"},"sv-x-k12":{"editor_accessibility":{"accessibles":{"background_color":"Bakgrundsfärg, tryck ner för att välja","forecolor":"Textfärg, tryck ner för att välja"},"titles":{"font_size":"Typsnittsstorlek, tryck ner för att välja","formatting":"Formatering, tryck ner för att välja","rte_help":"RTF-område. Tryck ALT+F8 för hjälp"}},"rich_content_editor_2708ef21":"Innehållsredigeraren"},"tr":{"editor_accessibility":{"accessibles":{"background_color":"Arkaplan rengi, aşağı tuşa basın ve seçin","forecolor":"Yazı rengi, aşağı tuşa basın ve seçin"},"titles":{"font_size":"Yazı büyüklüğü, aşağı tuşa basın ve seçin","formatting":"Format, aşağı tuşa basın ve seçin","rte_help":"Zengin Metin Alanı. Yardım için ALT+F8 e basın"}},"rich_content_editor_2708ef21":"Zengin İçerik Editörü"},"uk":{"editor_accessibility":{"accessibles":{"background_color":"Колір фону, натисніть внизу, щоб обрати","forecolor":"Колір тексту, натисніть внизу, щоб обрати"},"titles":{"font_size":"Розмір шрифту, натисніть внизу, щоб обрати","formatting":"Форматування, натисніть внизу, щоб вибрати","rte_help":"Багатофункціональна область тексту. Натисніть ALT+F8 для довідки"}},"rich_content_editor_2708ef21":"Покращений редактор контенту"},"zh-Hans":{"editor_accessibility":{"accessibles":{"background_color":"背景颜色，按下即可选择","forecolor":"文本颜色，按下即可选择"},"titles":{"font_size":"字体大小，按下即可选择","formatting":"格式，按下即可选择","rte_help":"富文本区域，按 Alt+ F8 寻求帮助"}},"rich_content_editor_2708ef21":"富内容编辑器"},"zh-Hant":{"editor_accessibility":{"accessibles":{"background_color":"背景顏色，按下以選擇","forecolor":"文字顏色，按下以選擇"},"titles":{"font_size":"字體大小，按下以選擇","formatting":"格式化，按下以選擇","rte_help":"富文本區域。按 ALT+F8 求助"}},"rich_content_editor_2708ef21":"富內容編輯器"}}'))
n("jQeR")
n("0sPK")
var r=i["default"].scoped("editor_accessibility")
var a=n("ouhR")
var s=n.n(a)
n.d(t,"default",(function(){return l}))
class l{constructor(e){this.editor=e
this.id_prepend=e.id
this.$el=s()("#".concat(e.editorContainer.id))}accessiblize(){this._cacheElements()
this._addTitles()
this._addLabels()
this._accessiblizeMenubar()
this._removeStatusbarFromTabindex()}_cacheElements(){this.$iframe=this.$el.find(".mce-edit-area iframe")}_addLabels(){this.$el.attr("aria-label",r.t("Rich Content Editor"))
s()(this.editor.getBody()).attr("aria-label",s()('label[for="'.concat(this.id_prepend,'"]')).text())
this.$el.find("div[aria-label='Font Sizes']").attr("aria-label",r.t("titles.font_size","Font Size, press down to select"))
this.$el.find("div.mce-listbox.mce-last:not([aria-label])").attr("aria-label",r.t("titles.formatting","Formatting, press down to select"))
this.$el.find("div[aria-label='Text color']").attr("aria-label",r.t("accessibles.forecolor","Text Color, press down to select"))
this.$el.find("div[aria-label='Background color'").attr("aria-label",r.t("accessibles.background_color","Background Color, press down to select"))}_addTitles(){this.$iframe.attr("title",r.t("titles.rte_help","Rich Text Area. Press ALT+F8 for help"))}_accessiblizeMenubar(){const e=this.$el.find(".mce-menubar")
const t=e.find(".mce-menubtn").first()
e.hide()
this.editor.addShortcut("Alt+F9","",()=>{e.show()
t.focus()
this.editor.addShortcut("Alt+F9","",()=>t.focus())})}_removeStatusbarFromTabindex(){const e=this.$el.find(".mce-statusbar > .mce-container-body")
e.attr("tabindex",-1)}}},rkWX:function(e,t,n){"use strict"
n.r(t)
var i=n("ouhR")
var o=n.n(i)
var r=n("yiTI")
function a(e){r["a"].loadSidebarOnTarget(o()("#editor_tabs").get(0),e)}const s={instance:void 0,pendingShow:false,initializing:false,subscriptions:{},init(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{}
if(!this.instance&&!this.initializing){this.initializing=true
const e=e=>{this.initializing=false
this.instance=e
this.pendingShow&&this.show()}
a(e)}this.subscriptions=e},show(){if(this.instance){this.instance.show()
this.subscriptions.show&&this.subscriptions.show()}else this.pendingShow=true},hide(){if(this.instance){this.instance.hide()
this.subscriptions.hide&&this.subscriptions.hide()}else this.pendingShow=false},reset(){this.instance=void 0
this.initializing=false
this.subscriptions={}}}
t["default"]=s},yiTI:function(e,t,n){"use strict"
var i=n("VTBJ")
var o=n("ODXe")
var r=n("ouhR")
var a=n.n(r)
var s=n("GLiE")
var l=n.n(s)
var c=n("x1Tw")
function d(e){let t=e
let n=null
return e=>{null===n&&(n=c["a"].post("/api/v1/jwts/refresh",{jwt:t}).then(e=>{n=null
t=e.data.token
return t}))
"function"===typeof e&&n.then(e)
return n}}var u=n("HIhM")
class h{constructor(e,t,n,i){this.formatBtnGroup="bold italic underline forecolor backcolor removeformat alignleft aligncenter alignright"
this.positionBtnGroup="outdent indent superscript subscript bullist numlist"
this.fontBtnGroup="ltr rtl fontsizeselect formatselect check_a11y"
this.baseURL=e.baseURL
this.maxButtons=t.maxVisibleEditorButtons
this.extraButtons=t.editorButtons
this.instConfig=t
this.viewportWidth=n
this.idAttribute=i}defaultConfig(){return{selector:"#".concat(this.idAttribute),toolbar:this.toolbar(),[!window.ENV.use_rce_enhancements&&"theme"]:"modern",[!window.ENV.use_rce_enhancements&&"skin"]:false,directionality:Object(u["b"])(),plugins:"autolink,media,paste,table,lists,".concat(window.ENV.use_rce_enhancements?",instructure-ui-icons,instructure_condensed_buttons,instructure_documents":"textcolor",",link,directionality,a11y_checker,wordcount"),external_plugins:{instructure_image:"/javascripts/tinymce_plugins/instructure_image/plugin.js",instructure_links:"/javascripts/tinymce_plugins/instructure_links/plugin.js",instructure_embed:"/javascripts/tinymce_plugins/instructure_embed/plugin.js",instructure_equation:"/javascripts/tinymce_plugins/instructure_equation/plugin.js",instructure_external_tools:"/javascripts/tinymce_plugins/instructure_external_tools/plugin.js",instructure_record:"/javascripts/tinymce_plugins/instructure_record/plugin.js"},language_load:false,convert_urls:false,menubar:true,branding:false,remove_script_host:true,resize:true,block_formats:"Paragraph=p;Header 2=h2;Header 3=h3;Header 4=h4;Preformatted=pre",valid_elements:"@[id|class|style|title|dir<ltr?rtl|lang|xml::lang|onclick|ondblclick|onmousedown|onmouseup|onmouseover|onmousemove|onmouseout|onkeypress|onkeydown|onkeyup],a[rel|rev|charset|hreflang|tabindex|accesskey|type|name|href|target|title|class|onfocus|onblur],strong/b,em/i,strike,u,#p,-ol[type|compact],-ul[type|compact],-li,br,img[longdesc|usemap|src|border|alt=|title|hspace|vspace|width|height|align],-sub,-sup,-blockquote,-table[border=0|cellspacing|cellpadding|width|frame|rules|height|align|summary|bgcolor|background|bordercolor],-tr[rowspan|width|height|align|valign|bgcolor|background|bordercolor],tbody,thead,tfoot,#td[colspan|rowspan|width|height|align|valign|bgcolor|background|bordercolor|scope],#th[colspan|rowspan|width|height|align|valign|scope],caption,-div,-span,-code,-pre,address,-h1,-h2,-h3,-h4,-h5,-h6,hr[size|noshade],-font[face|size|color],dd,dl,dt,cite,abbr,acronym,del[datetime|cite],ins[datetime|cite],object[classid|width|height|codebase|*],param[name|value|_value],embed[type|width|height|src|*],script[src|type],map[name],area[shape|coords|href|alt|target],bdo,col[align|char|charoff|span|valign|width],colgroup[align|char|charoff|span|valign|width],dfn,kbd,label[for],legend,q[cite],samp,small,tt,var,big,figure,figcaption,source,track,mark,article,aside,details,footer,header,nav,section,summary,time",extended_valid_elements:"@[id|accesskey|class|dir|lang|style|tabindex|title|contenteditable|contextmenu|draggable|dropzone|hidden|longdesc|spellcheck|translate|align|role|aria-labelledby|aria-atomic|aria-busy|aria-controls|aria-describedby|aria-disabled|aria-dropeffect|aria-flowto|aria-grabbed|aria-haspopup|aria-hidden|aria-invalid|aria-label|aria-labelledby|aria-live|aria-owns|aria-relevant|aria-autocomplete|aria-checked|aria-disabled|aria-expanded|aria-haspopup|aria-hidden|aria-invalid|aria-label|aria-level|aria-multiline|aria-multiselectable|aria-orientation|aria-pressed|aria-readonly|aria-required|aria-selected|aria-sort|aria-valuemax|aria-valuemin|aria-valuenow|aria-valuetext],iframe[id|data-media-type|title|src|width|height|name|align|style|class|sandbox|allowfullscreen|webkitallowfullscreen|mozallowfullscreen|allow],i[iclass],a[hidden|href|target|rel|media|hreflang|type|charset|name|rev|shape|coords|download|alt],#p,li[value],-ol[reversed|start|type|compact],pre[width],table[border|summary|width|frame|rules|cellspacing|cellpadding|bgcolor],tbody[char|charoff|valign],td[colspan|rowspan|headers|abbr|axis|scope|align|char|charoff|valign|nowrap|bgcolor|width|height],tfoot[char|charoff|valign],th[colspan|rowspan|headers|scope|abbr|axis|align|char|charoff|valign|nowrap|bgcolor|width|height],thead[char|charoff|valign],tr[char|charoff|valign|bgcolor],-ul[compact],video[name|src|allowfullscreen|muted|poster|width|height|controls|playsinline],audio[name|src|muted|controls],annotation[href|xref|definitionURL|encoding|cd|name|src],annotation-xml[href|xref|definitionURL|encoding|cd|name|src],maction[href|xref|mathcolor|mathbackground|actiontype|selection],maligngroup[href|xref|mathcolor|mathbackground|groupalign],malignmark[href|xref|mathcolor|mathbackground|edge],math[xmlns|href|xref|display|maxwidth|overflow|altimg|altimg-width|altimg-height|altimg-valign|alttext|cdgroup|mathcolor|mathbackground|scriptlevel|displaystyle|scriptsizemultiplier|scriptminsize|infixlinebreakstyle|decimalpoint|mathvariant|mathsize|width|height|valign|form|fence|separator|lspace|rspace|stretchy|symmetric|maxsize|minsize|largeop|movablelimits|accent|linebreak|lineleading|linebreakstyle|linebreakmultchar|indentalign|indentshift|indenttarget|indentalignfirst|indentshiftfirst|indentalignlast|indentshiftlast|depth|lquote|rquote|linethickness|munalign|denomalign|bevelled|voffset|open|close|separators|notation|subscriptshift|superscriptshift|accentunder|align|rowalign|columnalign|groupalign|alignmentscope|columnwidth|rowspacing|columnspacing|rowlines|columnlines|frame|framespacing|equalrows|equalcolumns|side|minlabelspacing|rowspan|columnspan|edge|stackalign|charalign|charspacing|longdivstyle|position|shift|location|crossout|length|leftoverhang|rightoverhang|mslinethickness|selection],menclose[href|xref|mathcolor|mathbackground|notation],merror[href|xref|mathcolor|mathbackground],mfenced[href|xref|mathcolor|mathbackground|open|close|separators],mfrac[href|xref|mathcolor|mathbackground|linethickness|munalign|denomalign|bevelled],mglyph[href|xref|mathcolor|mathbackground|src|alt|width|height|valign],mi[href|xref|mathcolor|mathbackground|mathvariant|mathsize],mlabeledtr[href|xref|mathcolor|mathbackground],mlongdiv[href|xref|mathcolor|mathbackground|longdivstyle|align|stackalign|charalign|charspacing],mmultiscripts[href|xref|mathcolor|mathbackground|subscriptshift|superscriptshift],mn[href|xref|mathcolor|mathbackground|mathvariant|mathsize],mo[href|xref|mathcolor|mathbackground|mathvariant|mathsize|form|fence|separator|lspace|rspace|stretchy|symmetric|maxsize|minsize|largeop|movablelimits|accent|linebreak|lineleading|linebreakstyle|linebreakmultchar|indentalign|indentshift|indenttarget|indentalignfirst|indentshiftfirst|indentalignlast|indentshiftlast],mover[href|xref|mathcolor|mathbackground|accent|align],mpadded[href|xref|mathcolor|mathbackground|height|depth|width|lspace|voffset],mphantom[href|xref|mathcolor|mathbackground],mprescripts[href|xref|mathcolor|mathbackground],mroot[href|xref|mathcolor|mathbackground],mrow[href|xref|mathcolor|mathbackground],ms[href|xref|mathcolor|mathbackground|mathvariant|mathsize|lquote|rquote],mscarries[href|xref|mathcolor|mathbackground|position|location|crossout|scriptsizemultiplier],mscarry[href|xref|mathcolor|mathbackground|location|crossout],msgroup[href|xref|mathcolor|mathbackground|position|shift],msline[href|xref|mathcolor|mathbackground|position|length|leftoverhang|rightoverhang|mslinethickness],mspace[href|xref|mathcolor|mathbackground|mathvariant|mathsize],msqrt[href|xref|mathcolor|mathbackground],msrow[href|xref|mathcolor|mathbackground|position],mstack[href|xref|mathcolor|mathbackground|align|stackalign|charalign|charspacing],mstyle[href|xref|mathcolor|mathbackground|scriptlevel|displaystyle|scriptsizemultiplier|scriptminsize|infixlinebreakstyle|decimalpoint|mathvariant|mathsize|width|height|valign|form|fence|separator|lspace|rspace|stretchy|symmetric|maxsize|minsize|largeop|movablelimits|accent|linebreak|lineleading|linebreakstyle|linebreakmultchar|indentalign|indentshift|indenttarget|indentalignfirst|indentshiftfirst|indentalignlast|indentshiftlast|depth|lquote|rquote|linethickness|munalign|denomalign|bevelled|voffset|open|close|separators|notation|subscriptshift|superscriptshift|accentunder|align|rowalign|columnalign|groupalign|alignmentscope|columnwidth|rowspacing|columnspacing|rowlines|columnlines|frame|framespacing|equalrows|equalcolumns|side|minlabelspacing|rowspan|columnspan|edge|stackalign|charalign|charspacing|longdivstyle|position|shift|location|crossout|length|leftoverhang|rightoverhang|mslinethickness|selection],msub[href|xref|mathcolor|mathbackground|subscriptshift],msubsup[href|xref|mathcolor|mathbackground|subscriptshift|superscriptshift],msup[href|xref|mathcolor|mathbackground|superscriptshift],mtable[href|xref|mathcolor|mathbackground|align|rowalign|columnalign|groupalign|alignmentscope|columnwidth|width|rowspacing|columnspacing|rowlines|columnlines|frame|framespacing|equalrows|equalcolumns|displaystyle|side|minlabelspacing],mtd[href|xref|mathcolor|mathbackground|rowspan|columnspan|rowalign|columnalign|groupalign],mtext[href|xref|mathcolor|mathbackground|mathvariant|mathsize|width|height|depth|linebreak],mtr[href|xref|mathcolor|mathbackground|rowalign|columnalign|groupalign],munder[href|xref|mathcolor|mathbackground|accentunder|align],munderover[href|xref|mathcolor|mathbackground|accent|accentunder|align],none[href|xref|mathcolor|mathbackground],semantics[href|xref|definitionURL|encoding]",non_empty_elements:"td th iframe video audio object script a i area base basefont br col frame hr img input isindex link meta param embed source wbr track",content_css:window.ENV.url_to_what_gets_loaded_inside_the_tinymce_editor_css,browser_spellcheck:true,init_instance_callback:e=>{$("#".concat(e.id)).parent().css("visibility","visible")},show_media_upload:!!INST.kalturaSettings&&!INST.kalturaSettings.hide_rte_button}}external_buttons(){let e=""
for(let t=0;this.extraButtons&&t<this.extraButtons.length;t++)this.extraButtons.length<=this.maxButtons||t<this.maxButtons-1?e="".concat(e," instructure_external_button_").concat(this.extraButtons[t].id):e.match(/instructure_external_button_clump/)||(e+=" instructure_external_button_clump")
return e}buildInstructureButtons(){let e=" instructure_image instructure_equation".concat(window.ENV.use_rce_enhancements?" lti_tool_dropdown":"")
e+=this.external_buttons()
this.instConfig&&this.instConfig.allowMediaComments&&this.instConfig.kalturaSettings&&!this.instConfig.kalturaSettings.hide_rte_button&&(e+=" instructure_record")
const t=this.instConfig&&this.instConfig.equellaEnabled?" instructure_equella":""
e+=t
return e}balanceButtons(e){const t="table media instructure_links unlink".concat(e)
let n=""
let i=""
let o=""
if(this.viewportWidth<359&&this.viewportWidth>0){n=this.formatBtnGroup
i="".concat(this.positionBtnGroup," ").concat(t)
o=this.fontBtnGroup}else if(this.viewportWidth<1200){n="".concat(this.formatBtnGroup," ").concat(this.positionBtnGroup)
i="".concat(t," ").concat(this.fontBtnGroup)}else n="".concat(this.formatBtnGroup," ").concat(this.positionBtnGroup," ").concat(t," ").concat(this.fontBtnGroup)
return window.ENV.use_rce_enhancements?[n,i,o]:[n,i,o].map(e=>e.split(" ").join(","))}toolbar(){const e=this.buildInstructureButtons()
return this.balanceButtons(e)}}function _(e,t,i){if(void 0==i)var o=false
else o=i
return{auto_focus:t,setup(t){const i=a()("#"+t.id)
t.on("keyup",e=>{a()(document).trigger("editorKeyUp",[e])})
t.on("change",()=>{i.trigger("change")})
t.on("keyup keydown click mousedown",()=>{o&&t.selection&&i.data("last_bookmark",t.selection.getBookmark(1))})
ENV.use_rce_enhancements||t.on("init",()=>{const e=e=>e.default?e.default:e
const i=e(n("Cvk5"))
new i(t).accessiblize()})
t.on("init",()=>{a()(window).triggerHandler("resize")
a()(t.contentDocument).bind("DOMNodeInserted",t=>{let n,i=t.target
1===i.nodeType&&"IMG"===i.nodeName&&(n=a()(i).data("url"))&&a()(i).attr("src",e.activeEditor.documentBaseURI.toAbsolute(n))})
"onfocusout"in t.contentWindow||a()(t.contentWindow).blur(e=>{if(!t.removed&&t.undoManager.typing){t.undoManager.typing=false
t.undoManager.add()}})})}}}var f=n("u7Gu")
function m(e,t,n,o,r){const a=new h(r,f["a"],e,t)
const s=void 0
return Object(i["a"])({},a.defaultConfig(),{},_(r,s,o),{},n.tinyOptions||{})}var p=m
var g=n("An8g")
var b=n("pQTu")
var k=n("m0r6")
Object(k["a"])(JSON.parse('{"ar":{"ExternalToolsPlugin":{"more_external_tools":"مزيد من الأدوات الخارجية"}},"cy":{"ExternalToolsPlugin":{"more_external_tools":"Mwy o Adnoddau Allanol"}},"da":{"ExternalToolsPlugin":{"more_external_tools":"Flere eksterne værktøjer"}},"da-x-k12":{"ExternalToolsPlugin":{"more_external_tools":"Flere eksterne værktøjer"}},"de":{"ExternalToolsPlugin":{"more_external_tools":"Weitere externe Tools"}},"el":{"ExternalToolsPlugin":{"more_external_tools":"Περισσότερα Εξωτερικά Εργαλεία"}},"en-AU":{"ExternalToolsPlugin":{"more_external_tools":"More External Tools"}},"en-AU-x-unimelb":{"ExternalToolsPlugin":{"more_external_tools":"More External Tools"}},"en-CA":{"ExternalToolsPlugin":{"more_external_tools":"More External Tools"}},"en-GB":{"ExternalToolsPlugin":{"more_external_tools":"More external tools"}},"en-GB-x-ukhe":{"ExternalToolsPlugin":{"more_external_tools":"More external tools"}},"es":{"ExternalToolsPlugin":{"more_external_tools":"Más herramientas externas"}},"fa":{"ExternalToolsPlugin":{"more_external_tools":"ابزارهای بیرونی دیگر"}},"fi":{"ExternalToolsPlugin":{"more_external_tools":"Lisää ulkoisia työkaluja"}},"fr":{"ExternalToolsPlugin":{"more_external_tools":"Plus d’outils externes"}},"fr-CA":{"ExternalToolsPlugin":{"more_external_tools":"Plus d’outils externes"}},"he":{"ExternalToolsPlugin":{"more_external_tools":"כלים חיצוניים נוספים"}},"ht":{"ExternalToolsPlugin":{"more_external_tools":"Plis Zouti Ekstèn"}},"hu":{"ExternalToolsPlugin":{"more_external_tools":"További külső eszközök"}},"hy":{"ExternalToolsPlugin":{"more_external_tools":"Լրացուցիչ արտաքին գործիքներ"}},"is":{"ExternalToolsPlugin":{"more_external_tools":"Fleiri ytri tæki"}},"it":{"ExternalToolsPlugin":{"more_external_tools":"Altri strumenti esterni"}},"ja":{"ExternalToolsPlugin":{"more_external_tools":"その他の外部ツール"}},"ko":{"ExternalToolsPlugin":{"more_external_tools":"더 많은 외부 도구"}},"mi":{"ExternalToolsPlugin":{"more_external_tools":"Ētahi atu Utauta waho"}},"nb":{"ExternalToolsPlugin":{"more_external_tools":"Flere eksterne verktøy"}},"nb-x-k12":{"ExternalToolsPlugin":{"more_external_tools":"Flere eksterne verktøy"}},"nl":{"ExternalToolsPlugin":{"more_external_tools":"Meerdere externe tools"}},"nn":{"ExternalToolsPlugin":{"more_external_tools":"Fleire eksterne verktøy"}},"pl":{"ExternalToolsPlugin":{"more_external_tools":"Więcej zewnętrznych narzędzi"}},"pt":{"ExternalToolsPlugin":{"more_external_tools":"Mais ferramentas externas"}},"pt-BR":{"ExternalToolsPlugin":{"more_external_tools":"Mais ferramentas externas"}},"ru":{"ExternalToolsPlugin":{"more_external_tools":"Больше внешних инструментов"}},"sv":{"ExternalToolsPlugin":{"more_external_tools":"Fler externa verktyg"}},"sv-x-k12":{"ExternalToolsPlugin":{"more_external_tools":"Fler externa verktyg"}},"tr":{"ExternalToolsPlugin":{"more_external_tools":"Daha Fazla Harici Araç"}},"zh-Hans":{"ExternalToolsPlugin":{"more_external_tools":"更多外部工具"}},"zh-Hant":{"ExternalToolsPlugin":{"more_external_tools":"更多外部工具"}}}'))
n("jQeR")
n("0sPK")
var v=b["default"].scoped("ExternalToolsPlugin")
var w=n("5Ky4")
a.a.fn.dropdownList=function(e){if(this.length){let n=a()("#instructure_dropdown_list")
if("hide"==e||"remove"==e||n.data("current_dropdown_initiator")==this[0]){n.remove().data("current_dropdown_initiator",null)
return}e=a.a.extend({},a.a.fn.dropdownList.defaults,e)
var t=n.children("div.list")
if(!t.length){n=a()("<div id='instructure_dropdown_list'><div class='list ui-widget-content'></div></div>").appendTo("body")
a()(document).mousedown(e=>{n.data("current_dropdown_initiator")&&!a()(e.target).closest("#instructure_dropdown_list").length&&n.hide().data("current_dropdown_initiator",null)}).mouseup(e=>{if(n.data("current_dropdown_initiator")&&!a()(e.target).closest("#instructure_dropdown_list").length){n.hide()
setTimeout(()=>{n.data("current_dropdown_initiator",null)},100)}}).add(this).add(n).keydown(e=>{if(n.data("current_dropdown_initiator")){const t=n.find(".ui-state-hover,.ui-state-active")
if(38==e.keyCode){t.length&&t.prev().length?t.removeClass("ui-state-hover ui-state-active").addClass("minimal").prev().addClass("ui-state-hover").removeClass("minimal").find("span").focus():$item.focus()
return false}if(40==e.keyCode){t.length?t.next().length&&t.removeClass("ui-state-hover ui-state-active").addClass("minimal").next().addClass("ui-state-hover").removeClass("minimal").find("span").focus():n.find(".option:first").addClass("ui-state-hover").removeClass("minimal").find("span").focus()
return false}if(13==e.keyCode&&t.length){t.click()
return false}n.hide().data("current_dropdown_initiator",null)}})
n.find(".option").removeClass("ui-state-hover ui-state-active").addClass("minimal")
n.click(e=>{n.hide().data("current_dropdown_initiator",null)})
t=n.children("div.list")}n.data("current_dropdown_initiator",this[0])
e.width&&n.width(e.width)
e.height&&n.find(".list").css("maxHeight",e.height)
t.empty()
a.a.each(e.options,(e,n)=>{const i=a()("<div class='option minimal' style='cursor: pointer; padding: 2px 5px; overflow: hidden; white-space: nowrap;'>  <span tabindex='-1'>"+e+"</span></div>").appendTo(t)
function o(){i.parent().find("div.option").removeClass("ui-state-hover ui-state-active").addClass("minimal")}a.a.isFunction(n)?i.addClass("ui-state-default").bind({mouseenter(){o()
i.addClass("ui-state-hover").removeClass("minimal")},mouseleave:o,mousedown(e){e.preventDefault()
o()
i.addClass("ui-state-active").removeClass("minimal")},mouseup:o,click:n}):i.addClass("ui-state-disabled").bind({mousedown(e){e.preventDefault()}})})
const i=this.offset(),o=this.outerHeight()
this.outerWidth()
n.css({whiteSpace:"nowrap",position:"absolute",top:i.top+o,left:i.left+5,right:""}).hide().show()
n.offset().left+n.width()>a()(window).width()&&n.css({left:"",right:0})}return this}
a.a.fn.dropdownList.defaults={height:250,width:"auto"}
n("JI1W")
var x={buttonConfig(e,t){const n={title:e.name,classes:"widget btn instructure_external_tool_button"}
if(ENV.use_rce_enhancements){n.id=e.id
n.onAction=()=>t.execCommand("instructureExternalButton".concat(e.id))
n.description=e.description}else n.cmd="instructureExternalButton".concat(e.id)
e.canvas_icon_class?n.icon="hack-to-avoid-mce-prefix ".concat(e.canvas_icon_class):n.image=e.icon_url
return n},clumpedButtonMapping:(e,t,n)=>e.reduce((e,i)=>{let o
o=i.canvas_icon_class?"<i class='".concat(Object(w["a"])(i.canvas_icon_class),"' data-tool-id='").concat(i.id,"'></i>"):"<img src='".concat(Object(w["a"])(i.icon_url),"' data-tool-id='").concat(i.id,"'/>")
o+="&nbsp;".concat(Object(w["a"])(i.name))
e[o]=function(){n(i,t)}
return e},{}),attachClumpedDropdown(e,t,n){e.dropdownList({options:t})
n.on("click",()=>{e.dropdownList("hide")})}}
var y=n("mykf")
var T=n("xe+K")
const E=function(e,t){this.id=e.id
this.selectedContent=e.selection.getContent()
this.selectionDetails={node:e.selection.getNode(),range:e.selection.getRng()}
this.$editorEl=t
this.getEditor=function(){if(void 0!==this.$editorEl)return this.$editorEl
return a()("#"+this.id)}
this.createLink=function(e,t,n){Object(T["d"])(this.getEditor(),"create_link",{url:e,classes:t,selectedContent:this.selectedContent,dataAttributes:n,selectionDetails:this.selectionDetails})}}
var C=E
var z=n("iklP")
n("YGE8")
n("p6Wi")
class A{fetchYouTubeTitle(e,t){const n=ENV.JWT
const i=ENV.RICH_CONTENT_APP_HOST
const o="//".concat(i,"/api/youtube_title?vid_id=").concat(e)
a.a.ajax({headers:{Authorization:"Bearer ".concat(n)},url:o}).success(n=>{n.id===e&&t(n.title)}).error(e=>{t(null,e)})}titleYouTubeText(e){const t=a.a.youTubeID(e.attr("href"))
this.fetchYouTubeTitle(t,(n,i)=>{if(i){console.error('failed to get video title from youtube for "'.concat(t,'":'),i.responseText)
const n=(+e.attr("data-ytt-failcnt")||0)+1
e.attr("data-ytt-failcnt",n)}else{e.text(n)
e.attr("data-preview-alt",n)}})}}const F=["instructure_scribd_file"]
const P=["instructure_scribd_file"]
const j=new WeakMap
function R(e){const t=e.closest("img").attr("src")
return"<img src='"+Object(w["a"])(t)+"'/>"}function B(e){e.nodeChanged()
return new C(e)}function L(e,t){let n=e.replace(/(auto_open|inline_disabled)/g,"")
t.find(".auto_show_inline_content").attr("checked")&&(n+=" auto_open")
t.find(".disable_inline_content").attr("checked")&&(n+=" inline_disabled")
return n}function N(e,t,n,i){const o=e.find("#instructure_link_prompt_form")
o.off("submit")
o.on("submit",(function(o){o.preventDefault()
o.stopPropagation()
e.data("editor")
const r=a()(this).find(".prompt").val()
const s=e.find(".inst-link-preview-alt input").val()
const l=L(n.call(),e)
const c={"preview-alt":s}
e.dialog("close")
t.createLink(r,l,c)
i.call()}))}function O(e){const t=B(e)
const n=t.getEditor()
var i=a()("#instructure_link_prompt")
let o=""
i.removeClass("for_inline_content").find(".disable_enhancement").hide().end().find(".auto_show").hide().end().find(".insert_button").text("Insert Link").end().find(".disable_inline_content").attr("checked",false).end().find(".auto_show_inline_content").attr("checked",false)
if(0==i.length){i=a()(document.createElement("div"))
Object(z["b"])("BookmarkService",(function(e){const t=i.data("editor")
const n=a()("<div style='text-align: left; margin-left: 20px;'/>")
let r,s
for(const i in e){r=e[i].user_service
if(r){s=a()("<a href='#' class='bookmark_service no-hover'/>")
s.addClass(r.service)
s.data("service",r)
s.attr("title","Find links using "+r.service)
const e=a()("<img/>")
e.attr("src","/images/"+r.service+"_small_icon.png")
s.append(e)
s.click((function(e){e.preventDefault()
a()("#instructure_link_prompt").dialog("close")
Object(z["a"])(a()(this).data("service").service,e=>{a()("#instructure_link_prompt").dialog("close")
Object(T["d"])(t,"create_link",{title:e.title,url:e.url,classes:o})})}))
n.append(s)
n.append("&nbsp;&nbsp;")}}i.find("#instructure_link_prompt_form").after(n)}))
i.append("<p><em>This will make the selected text a link, or insert a new link if nothing is selected.</em></p> <label for='instructure_link_prompt_form_input'>Paste or type a url or wiki page in the box below:</label><form id='instructure_link_prompt_form' class='form-inline'><input type='text' id='instructure_link_prompt_form_input' class='prompt' class='btn' value='http://'/> <button type='submit' class='insert_button btn'>Insert Link</button></form>").append("<div class='actions'></div><div class='clear'></div>").append('<div class="inst-link-preview-alt" style="display: none;"><label>Alt text for inline preview: <input type="text" style="display: block;" /></label></div>').append("<div class='disable_enhancement' style='display: none;'><input type='checkbox' class='disable_inline_content' id='disable_inline_content'/><label for='disable_inline_content'> Disable inline previews for this link</label></div>").append("<div class='auto_show' style='display: none;'><input type='checkbox' class='auto_show_inline_content' id='auto_show_inline_content'/><label for='auto_show_inline_content'> Auto-open the inline preview for this link</label></div>")
i.find(".disable_inline_content").change((function(){a()(this).attr("checked")&&i.find(".auto_show_inline_content").attr("checked",false)
i.find(".auto_show").showIf(!a()(this).attr("checked")&&i.hasClass("for_inline_content_can_auto_show"))}))
i.find(".actions").delegate(".embed_image_link","click",e=>{const t=i.data("editor")
const n=a()(e.target)
e.preventDefault()
Object(T["d"])(t,"insert_code",R(n))
i.dialog("close")})
i.find(".actions").delegate(".embed_youtube_link","click",e=>{e.preventDefault()
i.find("#instructure_link_prompt_form").triggerHandler("submit")})
i.find("#instructure_link_prompt_form .prompt").bind("change keyup",(function(){const e=i.find(".inst-link-preview-alt")
e.hide()
a()("#instructure_link_prompt .actions").empty()
const t=a()(this).val()
const n=i.data("original_data")
if(n&&t==n.url){i.toggleClass("for_inline_content",n.for_inline_content).toggleClass("for_inline_content_can_auto_show",n.for_inline_content_can_auto_show).find(".disable_enhancement").showIf(n.for_inline_content).end().find(".auto_show").showIf(n.for_inline_content_can_auto_show)
o=n.prior_classes}else{i.removeClass("for_inline_content").removeClass("for_inline_content_can_auto_show")
const e=new RegExp("("+F.join("|")+")","g")
o=o.replace(e,"")}let r=!i.hasClass("for_inline_content")
const s=!i.hasClass("for_inline_content_can_auto_show")
if(t.match(/\.(gif|png|jpg|jpeg)$/)){var l=a()(document.createElement("div"))
l.css("textAlign","center")
var c=a()(document.createElement("img"))
c.attr("src",t)
c.addClass("embed_image_link")
c.css("cursor","pointer")
const e=new Image
e.src=t
var d=function t(){e.complete?(e.height<100||e.height>100&&e.height<200)&&c.height(e.height):setTimeout(t,500)}
setTimeout(d,500)
c.height(100)
c.attr("title","Click to Embed the Image")
l.append(c)
a()("#instructure_link_prompt .actions").append(l)}else if(t.match(INST.youTubeRegEx)){e.show()
const n=a.a.youTubeID(t)
l=a()(document.createElement("div"))
l.css("textAlign","center")
!i.find(".disable_inline_content").attr("checked")&&i.hasClass("for_inline_content_can_auto_show")&&i.find(".auto_show").show()
r=false
i.find(".disable_enhancement").show()
c=a()(document.createElement("img"))
c.attr("src","http://img.youtube.com/vi/"+n+"/2.jpg")
c.css({paddingLeft:100,background:"url(/images/youtube_logo.png) no-repeat left center",height:90,display:"inline-block"})
c.attr("alt",t)
c.addClass("embed_youtube_link")
c.css("cursor","pointer")
c.attr("title","Click to Embed YouTube Video")
l.append(c)
a()("#instructure_link_prompt .actions").append(l)}if(r){i.find(".disable_enhancement").hide()
i.find(".disable_inline_content").attr("checked",false)}if(s){i.find(".auto_show").hide()
i.find(".auto_show_inline_content").attr("checked",false)}}))
i.attr("id","instructure_link_prompt")
a()("body").append(i)}const r=function(){return o}
const s=function(){I(e,true)}
N(i,t,r,s)
i.data("editor",n)
i.data("original_data",null)
let l=e.selection.getNode()
while("A"!=l.nodeName&&"BODY"!=l.nodeName&&l.parentNode)l=l.parentNode
const c="A"==l.nodeName?a()(l):null
if(c){i.find(".prompt").val(c.attr("href")).change()
i.find(".inst-link-preview-alt input").val(c.data("preview-alt"))
o=(c.attr("class")||"").replace(/youtube_link_to_box/,"")
var d=new RegExp("("+F.join("|")+")");(c.attr("class")||"").match(d)&&i.addClass("for_inline_content").find(".disable_enhancement").show()
d=new RegExp("("+P.join("|")+")");(c.attr("class")||"").match(d)&&i.addClass("for_inline_content_can_auto_show").find(".auto_show").show()
i.data("original_data",{url:c.attr("href"),for_inline_content:i.hasClass("for_inline_content"),for_inline_content_can_auto_show:i.hasClass("for_inline_content_can_auto_show"),prior_classes:o,preview_alt:c.data("preview-alt")})
i.find(".disable_inline_content").attr("checked",c.hasClass("inline_disabled")).triggerHandler("change")
i.find(".auto_show_inline_content").attr("checked",c.hasClass("auto_open")).triggerHandler("change")
i.find(".insert_button").text("Update Link")}else i.find(".prompt").val("").change()
i.dialog({width:425,height:"auto",title:"Link to Website URL",open(){a()(this).find(".prompt").focus().select()}})}function I(e,t){I.counter=I.counter||0
true==t&&0!=I.counter?I.counter=(I.counter+1)%5:a()(e.getBody()).find("a").each((function(){const e=new A
const t=a()(this)
if(t.attr("href")&&!t.hasClass("inline_disabled")&&t.attr("href").match(INST.youTubeRegEx)){const n=+t.attr("data-ytt-failcnt")||0
t.addClass("youtube_link_to_box")
t.text()===t.attr("href")&&n<1&&e.titleYouTubeText(t)}}))}function S(e){if(j.get(e)||void 0===e.on)return
e.on("PreProcess",(function(e){a()(e.node).find("a.youtube_link_to_box").removeClass("youtube_link_to_box")
a()(e.node).find("img.iframe_placeholder").each((function(){const e=a()(this)
const t=a()("<iframe/>")
const n=e.attr("height")||e.css("height")
const i=e.hasClass("fullWidth")?"100%":e.attr("width")||e.css("width")
e.attr("width",i)
e.css("width",i)
t.attr("src",e.attr("rel"))
t.attr("style",e.attr("_iframe_style"))
if(!t[0].style.height.length){t.attr("height",n)
t.css("height",n)}if(!t[0].style.width.length){t.attr("width",i)
t.css("width",i)}a()(this).after(t)
a()(this).remove()}))}))
e.on("change",()=>{I(e)})
e.on("SetContent",()=>{I(e,"contentJustSet")})
j.set(e,true)}var V={buttonToImg:R,prepEditorForDialog:B,buildLinkClasses:L,bindLinkSubmit:N,renderDialog:O,updateLinks:I,initEditor:S}
n("q1tI")
var D=n("i8i4")
var M=n.n(D)
const q={get more_external_tools(){return Object(w["a"])(v.t("more_external_tools","More External Tools"))}}
const H={init(e,t,i){V.initEditor(e)
if(!i||!i.editorButtons||!i.editorButtons.length)return
let o={open:function(){for(var e=arguments.length,t=new Array(e),n=0;n<e;n++)t[n]=arguments[n]
return setTimeout(()=>o.open(...t),50)}}
Promise.all([n.e(7),n.e(550)]).then(n.bind(null,"/wcz")).then(t=>{let n=t.default
const i=document.createElement("div")
document.body.appendChild(i)
M.a.render(Object(g["a"])(n,{win:window,editor:e,contextAssetString:ENV.context_asset_string,iframeAllowances:Object(y["a"])(),resourceSelectionUrl:a()("#context_external_tool_resource_selection_url").attr("href"),deepLinkingOrigin:ENV.DEEP_LINKING_POST_MESSAGE_ORIGIN}),i,(function(){o=this}))})
const r=[]
const s=[]
for(let t=0;i.editorButtons&&t<i.editorButtons.length;t++){const n=i.editorButtons[t]
const a=()=>o.open(n)
if(ENV.use_rce_enhancements){s.push(x.buttonConfig(n,e))
e.addCommand("instructureExternalButton".concat(n.id),a)}else if(i.editorButtons.length>i.maxVisibleEditorButtons&&t>=i.maxVisibleEditorButtons-1)r.push(n)
else{e.addCommand("instructureExternalButton".concat(n.id),a)
e.addButton("instructure_external_button_".concat(n.id),x.buttonConfig(n,e))}}s.length&&ENV.use_rce_enhancements&&e.ui.registry.addButton("lti_tool_dropdown",{onAction:()=>{const e=new CustomEvent("tinyRCE/onExternalTools",{detail:{ltiButtons:s}})
document.dispatchEvent(e)},icon:"lti",tooltip:"Apps"})
if(r.length){const t=function(){const t=x.clumpedButtonMapping(r,e,e=>o.open(e))
x.attachClumpedDropdown(a()("#".concat(this._id)),t,e)}
ENV.use_rce_enhancements?e.ui.registry.addButton("instructure_external_button_clump",{title:q.more_external_tools,image:"/images/downtick.png",onAction:t}):e.addButton("instructure_external_button_clump",{title:q.more_external_tools,image:"/images/downtick.png",onkeyup(e){if(32===e.keyCode||13===e.keyCode){e.stopPropagation()
t.call(this)}},onclick:t})}}}
var G=H
function W(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{}
const t=["equationCB","linksCB","imagePickerCB","equellaCB","externalToolCB","recordCB"]
t.forEach(t=>{void 0===e[t]&&(e[t]=function(){})})
document.addEventListener("tinyRCE/initEquation",t=>{let i=t.detail
Promise.all([n.e(2),n.e(577)]).then(n.bind(null,"F+Bh")).then(t=>{let n=t.default
const o=new n(i.ed)
e.equationCB(o)})})
document.addEventListener("tinyRCE/initLinks",t=>{let n=t.detail
V.renderDialog(n.ed)
e.linksCB()})
document.addEventListener("tinyRCE/initImagePicker",t=>{Promise.all([n.e(2),n.e(8),n.e(9),n.e(76),n.e(121),n.e(549)]).then(n.bind(null,"Dwgn")).then(n=>{let i=n.default
const o=new i(t.detail.ed,t.detail.selectedNode)
e.imagePickerCB(o)})})
document.addEventListener("tinyRCE/initEquella",t=>{n.e(650).then(n.bind(null,"gg/z")).then(n=>{let i=n.default
i(t.detail.ed)
e.equellaCB()})})
document.addEventListener("tinyRCE/initExternalTools",t=>{G.init(t.detail.ed,t.detail.url,f["a"])
e.externalToolCB()})
document.addEventListener("tinyRCE/initRecord",t=>{Promise.all([n.e(42),n.e(651)]).then(n.bind(null,"xR7n")).then(n=>{let i=n.default
i.insertEditor(t.detail.ed)
e.recordCB()})})}const U={call(e){if("exists?"===e)return true
for(var t=arguments.length,n=new Array(t>1?t-1:0),i=1;i<t;i++)n[i-1]=arguments[i]
return this[e](...n)},focus(){if(void 0!==tinymce){const e=tinymce.get(this._textareaEl.id)
e&&e.focus(true)}}}
const K={show(){$("#editor_tabs").show()},hide(){$("#editor_tabs").hide()}}
const J={wrapEditor(e){const t=Object(i["a"])({},U,{},e)
return Object.assign(e,t)},wrapSidebar(e){const t=Object(i["a"])({},K,{},e)
return Object.assign(e,t)}}
var Y=J
var Z=n("Cf7h")
var Q=n("/1jZ")
async function X(e){return new Promise((t,n)=>{let i=e.mceInstance()
if(i)t(i)
else{const n=setInterval(()=>{i=e.mceInstance()
if(i){clearInterval(n)
t(i)}},1e3)}})}function ee(){if(!ENV.context_asset_string)return null
let e,t
const n=ENV.current_user_id
if(ENV.use_rce_enhancements&&!ENV.RICH_CONTENT_CAN_UPLOAD_FILES){t=n
e="user"}else{var i=Object(Z["a"])(ENV.context_asset_string,false)
var r=Object(o["a"])(i,2)
e=r[0]
t=r[1]}return{canUploadFiles:ENV.RICH_CONTENT_CAN_UPLOAD_FILES,containingContext:{contextType:e,contextId:t,userId:n},contextType:e,contextId:t,filesTabDisabled:ENV.RICH_CONTENT_FILES_TAB_DISABLED,host:ENV.RICH_CONTENT_APP_HOST,jwt:ENV.JWT,refreshToken:d(ENV.JWT),themeUrl:ENV.active_brand_config_json_url,liveRegion:()=>document.getElementById("flash_screenreader_holder")}}let te
const ne={preload(e){(window.requestIdleCallback||window.setTimeout)(()=>this.loadRCE(e))},loadOnTarget(e,t,n){var i,o
const r=this.getTargetTextarea(e)
const a=this.getRenderingTarget(r,t.getRenderingTarget)
const s=this.createRCEProps(r,t);(null===(i=ENV)||void 0===i?void 0:null===(o=i.FEATURES)||void 0===o?void 0:o.la_620_old_rce_init_fix)?this.loadRCE(e=>{e.renderIntoDiv(a,s,async e=>{const t=await X(e)
t.on("init",()=>n(r,Y.wrapEditor(e)))})}):this.loadRCE(e=>{e.renderIntoDiv(a,s,e=>{e.mceInstance().on("init",()=>n(r,Y.wrapEditor(e)))})})},loadSidebarOnTarget(e,t){if(ENV.RICH_CONTENT_SKIP_SIDEBAR)return
const n=ee()
this.loadRCE(i=>{i.renderSidebarIntoDiv(e,n,e=>{t(Y.wrapSidebar(e))})})},loadingCallbacks:[],RCE:null,loadRCE(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:()=>{}
te||(te=(window.ENV.use_rce_enhancements?Promise.all([n.e(3),n.e(4),n.e(6),n.e(5),n.e(7),n.e(8),n.e(9),n.e(10),n.e(11),n.e(13),n.e(14),n.e(16),n.e(20),n.e(18),n.e(19),n.e(22),n.e(31),n.e(37),n.e(38),n.e(39),n.e(40),n.e(44),n.e(36),n.e(48),n.e(51),n.e(61),n.e(76),n.e(68),n.e(69),n.e(244)]).then(n.bind(null,"Idzl")):Promise.all([n.e(3),n.e(4),n.e(6),n.e(5),n.e(11),n.e(13),n.e(16),n.e(20),n.e(18),n.e(19),n.e(22),n.e(27),n.e(48),n.e(84),n.e(87),n.e(83),n.e(110),n.e(119),n.e(245)]).then(n.bind(null,"66gZ"))).then(e=>{this.RCE=e
W()
return e}))
return te.then(()=>{this.loadingCallbacks.forEach(e=>e(this.RCE))
this.loadingCallbacks=[]
e(this.RCE)})},getTargetTextarea:e=>"textarea"===a()(e).get(0).type?a()(e).get(0):a()(e).find("textarea").get(0),getRenderingTarget(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:void 0
let n
n="undefined"===typeof t?a()(e).parent().get(0):t(e)
a()(n).addClass("ic-RichContentEditor")
return n},_attrsToMirror(e){const t=["name"]
const n=l.a.reduce(e.attributes,(e,t)=>{e[t.name]=t.value
return e},{})
return l.a.pick(n,t)},createRCEProps(e,t){const n=e.offsetWidth
const o=e.offsetHeight
o&&(t.tinyOptions=Object(i["a"])({height:o},t.tinyOptions||{}))
const r=ENV.LOCALE
const a=Object.keys(Q["a"]).map(e=>({id:e,label:Q["a"][e]})).sort((e,t)=>e.id===r?-1:t.id===r?1:e.label.localeCompare(t.label,r))
const s={enabled:ENV.use_rce_enhancements&&ENV.rce_auto_save,rce_auto_save_max_age_ms:Number.isNaN(ENV.rce_auto_save_max_age_ms)?36e5:ENV.rce_auto_save_max_age_ms}
return{defaultContent:e.value||t.defaultContent,editorOptions:p.bind(null,n,e.id,t,null),language:ENV.LOCALE,mirroredAttrs:this._attrsToMirror(e),onFocus:t.onFocus,onBlur:t.onBlur,textareaClassName:e.className,textareaId:e.id,trayProps:ee(),languages:a,autosave:s}}}
t["a"]=ne}}])

//# sourceMappingURL=17-c-cc11c54948.js.map