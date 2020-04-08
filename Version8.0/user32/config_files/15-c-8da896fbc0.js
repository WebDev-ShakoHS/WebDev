(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[15,578],{"0crz":function(e,t,i){"use strict"
var s=i("ouhR")
var r=i.n(s)
var n=i("pQTu")
var a=i("m0r6")
Object(a["a"])(JSON.parse('{"ar":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"إظهار النص المقتبس","word_separator":" "}}},"cy":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"dangos testun wedi’i ddyfynnu","word_separator":" "}}},"da":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"vis tekst i gåseøjne","word_separator":" "}}},"da-x-k12":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"vis tekst i gåseøjne","word_separator":" "}}},"de":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"zitierten Text zeigen","word_separator":" "}}},"el":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"προβολή κειμένου που παρατίθεται"}}},"en-AU":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"en-AU-x-unimelb":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"en-CA":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"en-GB":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"en-GB-x-lbs":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"en-GB-x-ukhe":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"show quoted text","word_separator":" "}}},"es":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"mostrar texto citado","word_separator":" "}}},"fa":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"نمایش متن نقل شده","word_separator":" "}}},"fi":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"näytä lainattu teksti","word_separator":" "}}},"fr":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"afficher le texte entre guillemets","word_separator":" "}}},"fr-CA":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"afficher le texte entre guillemets","word_separator":" "}}},"he":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"מציג ציטוט","word_separator":" "}}},"ht":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"afiche tèks site","word_separator":" "}}},"hu":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"idézett szöveg megjelenítése","word_separator":" "}}},"hy":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"ցույց տալ մեջբերվող տեքստը","word_separator":"-"}}},"is":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"Sýna ívitnaðan texta","word_separator":" "}}},"it":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"mostra testo citato","word_separator":" "}}},"ja":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"引用したテキストを表示","word_separator":" "}}},"ko":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"인용된 텍스트 표시","word_separator":" "}}},"mi":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"whakaatu kuputuhi faahiti","word_separator":"-"}}},"nb":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"vis den merkede teksten","word_separator":" "}}},"nb-x-k12":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"vis den merkede teksten","word_separator":" "}}},"nl":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"geciteerde tekst tonen","word_separator":" "}}},"nn":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"vis sitert tekst","word_separator":" "}}},"pl":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"pokaż cytowany fragment tekstu","word_separator":" "}}},"pt":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"exibir texto citado","word_separator":" "}}},"pt-BR":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"exibir texto citado","word_separator":" "}}},"ru":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"показать цитированный текст","word_separator":" "}}},"sl":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"prikaži citirano besedilo","word_separator":" "}}},"sv":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"visa citerad text","word_separator":" "}}},"sv-x-k12":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"visa citerad text","word_separator":" "}}},"tr":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"alıntılanan metni göster","word_separator":" "}}},"uk":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"Показати цитований текст","word_separator":" "}}},"zh-Hans":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"显示引用的文本","word_separator":" "}}},"zh-Hant":{"lib":{"text_helper":{"ellipsis":"...","quoted_text_toggle":"顯示引用的文字","word_separator":" "}}}}'))
i("jQeR")
i("0sPK")
var o=n["default"].scoped("lib.text_helper")
var l=i("5Ky4")
var c,u,d
c="LINK-PLACEHOLDER"
u=/\b((?:https?:\/\/|www\d{0,3}[.]|[a-z0-9.\-]+[.][a-z]{2,4}\/)(?:[^\s()<>]+|\([^\s()<>]*\))+(?:\([^\s()<>]*\)|[^\s`!()\[\]{};:'".,<>?«»“”‘’]))|(LINK-PLACEHOLDER)/gi
t["a"]=d={quoteClump:function(e){return"<div class='quoted_text_holder'> <a href='#' class='show_quoted_text_link'>"+Object(l["a"])(o.t("quoted_text_toggle","show quoted text"))+"</a> <div class='quoted_text' style='display: none;'> "+r.a.raw(e.join("\n"))+" </div> </div>"},formatMessage:function(e){var t,i,s,r,n,a,o,h
r=[]
n=[]
e=e.replace(u,(function(e,t){var i
n.push(e===c?c:(i=e,"http://"===i.slice(0,7)||"https://"===i.slice(0,8)||(i="http://"+i),r.push(i),"<a href='"+Object(l["a"])(i)+"'>"+Object(l["a"])(e)+"</a>"))
return c}))
e=Object(l["a"])(e)
e=e.replace(new RegExp(c,"g"),(function(e,t){return n.shift()}))
e=e.replace(/\n/g,"<br />\n")
a=[]
o=[]
h=e.split("\n")
for(t=0,i=h.length;t<i;t++){s=h[t]
if(s.match(/^(&gt;|>)/))o.push(s)
else{o.length&&a.push(d.quoteClump(o))
o=[]
a.push(s)}}o.length&&a.push(d.quoteClump(o))
return a.join("\n")},delimit:function(e){var t,i,s,r,n
if(isNaN(e))return String(e)
n=e<0?"-":""
t=Math.abs(e)
if(Infinity===t)return String(e)
i=Math.floor(t)
r=t===i?"":String(t).replace(/^\d+\./,".")
while(i>=1e3){s=String(i).replace(/\d+(\d\d\d)$/,",$1")
i=Math.floor(i/1e3)
r=s+r}return n+String(i)+r},truncateText:function(e,t){var i,s,r,n,a,l
null==t&&(t={})
s=null!=(n=t.max)?n:30
i=o.t("ellipsis","...")
l=o.t("word_separator"," ")
e=(null!=e?e:"").replace(/\s+/g,l).trim()
if(!e||e.length<=s)return e
a=0
while(true){r=e.indexOf(l,a+1)
if(r<0||r>s-i.length)break
a=r}a||(a=s-i.length)
return e.substring(0,a)+i},plainText:function(e){return e.replace(/(<([^>]+)>)/gi,"")}}},B1vq:function(e,t,i){"use strict"
var s=i("ouhR")
var r=i.n(s)
i("s/PJ")
r.a.fn.scrollToVisible=function(e){const t={}
const i=r()(e)
if(0===i.length)return
let s=i.offset(),n=i.outerWidth(),a=i.outerHeight(),o=s.top,l=o+a,c=s.left,u=c+n,d="html,body"==this.selector?r.a.windowScrollTop():this.scrollTop(),h=this.scrollLeft(),_=this.outerHeight(),g=this.outerWidth()
if("html,body"!=this.selector){let e=r()("body").offset()
this.each((function(){try{e=r()(this).offset()
return false}catch(e){}}))
o-=e.top
l-=e.top
c-=e.left
u-=e.left}if("HTML"==this[0].tagName||"BODY"==this[0].tagName){_=r()(window).height()
r()("#wizard_box:visible").length>0&&(_-=r()("#wizard_box:visible").height())
g=r()(window).width()
o-=d
c-=h
l-=d
u-=h}o<0||_<a&&l>_?t.scrollTop=o+d:l>_&&(t.scrollTop=l+d-_+20)
c<0?t.scrollLeft=c+h:u>g&&(t.scrollLeft=u+h-g+20)
1==t.scrollTop&&(t.scrollTop=0)
1==t.scrollLeft&&(t.scrollLeft=0)
this.scrollTop(t.scrollTop)
this.scrollLeft(t.scrollLeft)
return this}},iklP:function(e,t,i){"use strict"
var s=i("pQTu")
var r=i("m0r6")
Object(r["a"])(JSON.parse('{"ar":{"findLinkForService":{"buttons":{"search":"بحث","search_by_tag":"بحث حسب العلامة"},"errors":{"search_failed":"فشل البحث، الرجاء المحاولة مرة أخرى."},"no_description":"بلا وصف","no_results_found":"لم يتم العثور على نتائج","status":{"diigo_search_throttling":"يقوم Diigo بتقييد المستخدمين إلى بحث واحد كل عشر ثوان.  يرجى الانتظار...","searching":"جارٍ البحث..."},"titles":{"bookmark_search":"البحث في الإشارات المرجعية: %{service_name}"}}},"cy":{"findLinkForService":{"buttons":{"search":"Chwilio","search_by_tag":"Chwilio yn ôl tag"},"errors":{"search_failed":"Mae\'r broses chwilio wedi methu, rhowch gynnig arall arni."},"no_description":"Dim disgrifiad","no_results_found":"Heb ddod o hyd i ganlyniadau","status":{"diigo_search_throttling":"Mae Diigo yn cyfyngu defnyddwyr i chwilio dim ond unwaith bob deg eiliad.  Arhoswch funud...","searching":"Wrthi\'n chwilio..."},"titles":{"bookmark_search":"Chwilio am nod tudalen: %{service_name}"}}},"da":{"findLinkForService":{"buttons":{"search":"Søg","search_by_tag":"Søg efter tag"},"errors":{"search_failed":"Søgning mislykkede, prøv igen."},"no_description":"Ingen beskrivelse","no_results_found":"Der blev ikke fundet resultater","status":{"diigo_search_throttling":"Diigo begrænser brugerne til en søgning hvert tiende sekund.  Vent venligst ...","searching":"Søger ..."},"titles":{"bookmark_search":"Bogmærkesøgning: %{service_name}"}}},"da-x-k12":{"findLinkForService":{"buttons":{"search":"Søg","search_by_tag":"Søg efter tag"},"errors":{"search_failed":"Søgning mislykkede, prøv igen."},"no_description":"Ingen beskrivelse","no_results_found":"Der blev ikke fundet resultater","status":{"diigo_search_throttling":"Diigo begrænser brugerne til en søgning hvert tiende sekund.  Vent venligst ...","searching":"Søger ..."},"titles":{"bookmark_search":"Bogmærkesøgning: %{service_name}"}}},"de":{"findLinkForService":{"buttons":{"search":"Suchen","search_by_tag":"Suche nach Tag"},"errors":{"search_failed":"Suche fehlgeschlagen. Bitte erneut versuchen"},"no_description":"Keine Beschreibung","no_results_found":"Keine Ergebnisse gefunden","status":{"diigo_search_throttling":"Diigo beschränkt den Benutzer auf eine Suche alle zehn Sekunden.  Bitte warten Sie ...","searching":"Suche läuft ..."},"titles":{"bookmark_search":"Lesezeichensuche: %{service_name}"}}},"el":{"findLinkForService":{"buttons":{"search":"Αναζήτηση","search_by_tag":"Αναζήτηση βάσει Ετικέτας"},"errors":{"search_failed":"Η αναζήτηση απέτυχε, παρακαλώ δοκιμάστε ξανά."},"no_description":"Δεν υπάρχει περιγραφή","no_results_found":"Δεν βρέθηκαν αποτελέσματα","status":{"diigo_search_throttling":"\\u003cmrk mid=\\"1417\\" mtype=\\"seg\\"\\u003eΤο Diigo περιορίζει τους χρήστες σε μία αναζήτηση ανά δέκα δευτερόλεπτα.\\u003c/mrk\\u003e  \\u003cmrk mid=\\"1418\\" mtype=\\"seg\\"\\u003eΠαρακαλώ περιμένετε...\\u003c/mrk\\u003e","searching":"Αναζήτηση..."},"titles":{"bookmark_search":"\\u003cmrk mid=\\"1431\\" mtype=\\"seg\\"\\u003eΑναζήτηση Σελιδοδείκτη:\\u003c/mrk\\u003e \\u003cmrk mid=\\"1432\\" mtype=\\"seg\\"\\u003e%{service_name}\\u003c/mrk\\u003e"}}},"en-AU":{"findLinkForService":{"buttons":{"search":"Search","search_by_tag":"Search by Tag"},"errors":{"search_failed":"Search failed, please try again."},"no_description":"No description","no_results_found":"No Results Found","status":{"diigo_search_throttling":"Diigo limits users to one search every ten seconds.  Please wait...","searching":"Searching..."},"titles":{"bookmark_search":"Bookmark Search: %{service_name}"}}},"en-CA":{"findLinkForService":{"buttons":{"search":"Search","search_by_tag":"Search by Tag"},"errors":{"search_failed":"Search failed, please try again."},"no_description":"No description","no_results_found":"No Results Found","status":{"diigo_search_throttling":"Diigo limits users to one search every ten seconds.  Please wait...","searching":"Searching..."},"titles":{"bookmark_search":"Bookmark Search: %{service_name}"}}},"en-GB":{"findLinkForService":{"buttons":{"search":"Search","search_by_tag":"Search by tag"},"errors":{"search_failed":"Search failed, please try again."},"no_description":"No description","no_results_found":"No results found","status":{"diigo_search_throttling":"Diigo limits users to one search every ten seconds.  Please wait...","searching":"Searching..."},"titles":{"bookmark_search":"Bookmark Search: %{service_name}"}}},"en-GB-x-ukhe":{"findLinkForService":{"buttons":{"search":"Search","search_by_tag":"Search by tag"},"errors":{"search_failed":"Search failed, please try again."},"no_description":"No description","no_results_found":"No results found","status":{"diigo_search_throttling":"Diigo limits users to one search every ten seconds.  Please wait...","searching":"Searching..."},"titles":{"bookmark_search":"Bookmark Search: %{service_name}"}}},"es":{"findLinkForService":{"buttons":{"search":"Buscar","search_by_tag":"Buscar por etiqueta"},"errors":{"search_failed":"Error en la búsqueda; intente de nuevo."},"no_description":"Sin descripción","no_results_found":"No se encontraron resultados","status":{"diigo_search_throttling":"Diigo limita a los usuarios a una búsqueda cada diez segundos.  Espere...","searching":"Buscando..."},"titles":{"bookmark_search":"Búsqueda de marcadores: %{service_name}"}}},"fa":{"findLinkForService":{"buttons":{"search":"جستجو","search_by_tag":"جستجو بر اساس برچسب"},"errors":{"search_failed":"جستجو انجام نشد، لطفا دوباره سعی کنید."},"no_description":"شرح موجود نیست","no_results_found":"نتیجه ای یافت نشد","status":{"diigo_search_throttling":"Diigo کاربران را به یک جستجو در هر ده ثانیه محدود می کند. لطفا صبر کنید...","searching":"درحال جستجو..."},"titles":{"bookmark_search":"نشانه گذاری جستجو: %{service_name}"}}},"fi":{"findLinkForService":{"buttons":{"search":"Hae","search_by_tag":"Hae merkin perusteella"},"errors":{"search_failed":"Haku epäonnistui, yritä uudelleen."},"no_description":"Ei kuvausta","no_results_found":"Tuloksia ei löytynyt","status":{"diigo_search_throttling":"Diigo rajoittaa käyttäjiä yhteen hakuun kymmenen sekunnin välein.  Odota hetki...","searching":"Haku on käynnissä..."},"titles":{"bookmark_search":"Kirjanmerkin haku: %{service_name}"}}},"fr":{"findLinkForService":{"buttons":{"search":"Rechercher","search_by_tag":"Rechercher par étiquette"},"errors":{"search_failed":"Échec de la recherche, veuillez réessayer."},"no_description":"Aucune description","no_results_found":"Aucun résultat trouvé","status":{"diigo_search_throttling":"Diigo limite les utilisateurs à une recherche toutes les 10 secondes.  Veuillez patienter...","searching":"Recherche en cours..."},"titles":{"bookmark_search":"Recherche dans les favoris : %{service_name}"}}},"fr-CA":{"findLinkForService":{"buttons":{"search":"Rechercher","search_by_tag":"Rechercher par étiquette"},"errors":{"search_failed":"Échec de la recherche, veuillez réessayer."},"no_description":"Aucune description","no_results_found":"Aucun résultat trouvé","status":{"diigo_search_throttling":"Diigo limite les utilisateurs à une recherche toutes les dix secondes.  Veuillez patienter...","searching":"Recherche en cours..."},"titles":{"bookmark_search":"Recherche d’un signet : %{service_name}"}}},"he":{"findLinkForService":{"buttons":{"search":"חיפוש","search_by_tag":"חיפוש לפי תגיות"},"errors":{"search_failed":"החיפוש נכשל, יש לנסות שוב"},"no_description":"אין תיאור","no_results_found":"לא נמצאו תוצאות","status":{"diigo_search_throttling":"דייגו מגביל משתמשים לחיפוש אחד כל עשר שניות. נא להמתין...","searching":"מחפש..."},"titles":{"bookmark_search":"סימון מאפייני החיפוש %{service_name} לגישה ישירה"}}},"ht":{"findLinkForService":{"buttons":{"search":"Chèche","search_by_tag":"Cheche pa Etikèt"},"errors":{"search_failed":"Rechèch echwe, tanpri eseye ankò."},"no_description":"Pa gen deskripsyon","no_results_found":"Nou pa jwenn rezilta","status":{"diigo_search_throttling":"Diigo limite itilizatè yo a yon rechèch chak dis segonn.  Tanpri tann...","searching":"Chèche..."},"titles":{"bookmark_search":"Make Rechèch: %{service_name}"}}},"hu":{"findLinkForService":{"buttons":{"search":"Keresés","search_by_tag":"Keresés címke alapján"},"errors":{"search_failed":"A keresés sikertelen, kérjük, próbálja újra. "},"no_description":"Nincs leírás","no_results_found":"Nincs találat","status":{"diigo_search_throttling":"A Diigo korlátozása alapján tíz másodpercenként egy keresést lehet végrehajtani. Kérjük, várjon...","searching":"Keresés..."},"titles":{"bookmark_search":"Könyvjelző keresése: %{service_name}"}}},"hy":{"findLinkForService":{"buttons":{"search":"Որոնել","search_by_tag":"Որոնում ըստ պիտակի"},"errors":{"search_failed":"Որոնումը չհաջողվեց, փորձեք կրկին:"},"no_description":"Նկարագրություն չկա","no_results_found":"Ոչ մի արդյունք չի գտնվել","status":{"diigo_search_throttling":"Diigo-ն օգտատերերի համար սահմանել է որոնում տասը վայրկյան պարբերականությամբ:  Խնդրում ենք սպասել... ","searching":"Որոնումը ընթացքում է..."},"titles":{"bookmark_search":"Էջանիշի որոնում՝ %{service_name}"}}},"is":{"findLinkForService":{"buttons":{"search":"Leita","search_by_tag":"Leita eftir merki"},"errors":{"search_failed":"Leit tókst ekki, reyndu aftur."},"no_description":"Engin lýsing","no_results_found":"Engar niðurstöður fundust","status":{"diigo_search_throttling":"Diigo takmarkar notendur við eina leit á hverjum tíu sekúndum.  Augnablik...","searching":"Leita..."},"titles":{"bookmark_search":"Bókamerkjaleit: %{service_name}"}}},"it":{"findLinkForService":{"buttons":{"search":"Cerca","search_by_tag":"Cerca per tag"},"errors":{"search_failed":"Ricerca non riuscita. Riprova."},"no_description":"Nessuna descrizione","no_results_found":"Nessun risultato trovato","status":{"diigo_search_throttling":"Diigo limita gli utenti a una ricerca ogni dieci secondi.  Attendi...","searching":"Ricerca in corso..."},"titles":{"bookmark_search":"Aggiungi ricerca ai preferiti: %{service_name}"}}},"ja":{"findLinkForService":{"buttons":{"search":"検索","search_by_tag":"タグで検索"},"errors":{"search_failed":"検索に失敗しました。もう一度やり直してください。"},"no_description":"説明なし","no_results_found":"一致するものが見つかりませんでした","status":{"diigo_search_throttling":"Diigo によりユーザーは検索を１0秒ごとに1回に制限されています。  お待ちください...","searching":"検索しています..."},"titles":{"bookmark_search":"ブックマーク検索: %{service_name}"}}},"ko":{"findLinkForService":{"buttons":{"search":"검색","search_by_tag":"태그로 검색"},"errors":{"search_failed":"검색에 실패했습니다. 다시 시도하시기 바랍니다."},"no_description":"설명 없음","no_results_found":"찾은 결과 없음","status":{"diigo_search_throttling":"Diigo는 매 10초마다 한 번의 검색만 허용합니다. 기다려 주십시오...","searching":"검색 중..."},"titles":{"bookmark_search":"북마크 검색: %{service_name}"}}},"mi":{"findLinkForService":{"buttons":{"search":"Rapu","search_by_tag":"Rapu i te Tūtohu"},"errors":{"search_failed":"I rahua te rapunga, tēnā koa ngana anō koa."},"no_description":"Kāore he whakaahuatanga","no_results_found":"Kaore he hua","status":{"diigo_search_throttling":"Diigo aukati ai i ngā kaiwhakamahi ki te rapu ia tekau hēkona i te wā  Tēnā koa tatari ....","searching":"Rapu ana ..."},"titles":{"bookmark_search":"Pukatohu Rapu %{service_name}"}}},"nb":{"findLinkForService":{"buttons":{"search":"Søk","search_by_tag":"Søk basert på merke"},"errors":{"search_failed":"Søk mislyktes, vennligst prøv igjen."},"no_description":"Ingen beskrivelse","no_results_found":"Ingen resultater funnet","status":{"diigo_search_throttling":"Diigo begrenser brukere til ett søk hvert tiende sekund.  Vennligst vent…","searching":"Søker..."},"titles":{"bookmark_search":"Bokmerke søk: %{service_name}"}}},"nb-x-k12":{"findLinkForService":{"buttons":{"search":"Søk","search_by_tag":"Søk basert på merke"},"errors":{"search_failed":"Søk mislyktes, vennligst prøv igjen."},"no_description":"Ingen beskrivelse","no_results_found":"Ingen resultater funnet","status":{"diigo_search_throttling":"Diigo begrenser brukere til ett søk hvert tiende sekund.  Vennligst vent…","searching":"Søker..."},"titles":{"bookmark_search":"Bokmerke søk: %{service_name}"}}},"nl":{"findLinkForService":{"buttons":{"search":"Zoeken","search_by_tag":"Zoeken op label"},"errors":{"search_failed":"Zoeken mislukt, probeer het opnieuw."},"no_description":"Geen beschrijving","no_results_found":"Geen resultaten gevonden","status":{"diigo_search_throttling":"Diigo beperkt gebruikers tot één zoekopdracht per tien seconden.  Een ogenblik geduld...","searching":"Bezig met zoeken..."},"titles":{"bookmark_search":"Zoekopdracht aan bladwijzer: %{service_name}"}}},"nn":{"findLinkForService":{"buttons":{"search":"Søk","search_by_tag":"Søk etter tag"},"errors":{"search_failed":"Søket mislukkast, prøv på nytt seinare."},"no_description":"Inga skildring","no_results_found":"Finn ikkje resultat","status":{"diigo_search_throttling":"Med Diigo er du avgrensa til eit søk kvart tiande sekund. Vent...","searching":"Søker..."},"titles":{"bookmark_search":"Bokmerk søket: %{service_name}"}}},"pl":{"findLinkForService":{"buttons":{"search":"Wyszukaj","search_by_tag":"Wyszukaj według etykiety"},"errors":{"search_failed":"Wyszukiwanie nie powiodło się, ponów próbę."},"no_description":"Brak opisu","no_results_found":"Brak wyników","status":{"diigo_search_throttling":"Witryna Diigo ogranicza użytkownikom możliwość wyszukiwania do jednej próby co dziesięć sekund.  Prosimy czekać...","searching":"Trwa wyszukiwanie..."},"titles":{"bookmark_search":"Dodaj wyszukiwanie do ulubionych: %{service_name}"}}},"pt":{"findLinkForService":{"buttons":{"search":"Pesquisar","search_by_tag":"Pesquisar por tag"},"errors":{"search_failed":"Falha na pesquisa, tente novamente."},"no_description":"Sem descrição","no_results_found":"Nenhum resultado encontrado","status":{"diigo_search_throttling":"O Diigo limita os utilizadores a uma pesquisa a cada dez segundos.  É favor aguardar...","searching":"A pesquisar..."},"titles":{"bookmark_search":"Pesquisa de Bookmark: %{service_name}"}}},"pt-BR":{"findLinkForService":{"buttons":{"search":"Pesquisar","search_by_tag":"Pesquisar por tag"},"errors":{"search_failed":"Falha na pesquisa, tente novamente."},"no_description":"Sem descrição","no_results_found":"Nenhum resultado encontrado","status":{"diigo_search_throttling":"O Diigo limita os usuários a uma pesquisa a cada dez segundos.  Por favor, aguarde...","searching":"Pesquisando..."},"titles":{"bookmark_search":"Pesquisa dos favoritos: %{service_name}"}}},"ru":{"findLinkForService":{"buttons":{"search":"Поиск","search_by_tag":"Поиск по тегу"},"errors":{"search_failed":"Сбой поиска, повторите попытку"},"no_description":"Описание отсутствует","no_results_found":"Результаты не найдены","status":{"diigo_search_throttling":"Diigo позволяет пользователям выполнять один поиск раз в десять секунд.  Подождите...","searching":"Идет поиск..."},"titles":{"bookmark_search":"Сделать закладку для поиска: %{service_name}"}}},"sv":{"findLinkForService":{"buttons":{"search":"Sök","search_by_tag":"Sök efter tagg"},"errors":{"search_failed":"Sökning misslyckades, försök igen."},"no_description":"Ingen beskrivning","no_results_found":"Inga resultat hittades","status":{"diigo_search_throttling":"Diigo begränsar användare till en sökning var 10 sekund.  Vänta ...","searching":"Söker ..."},"titles":{"bookmark_search":"Bokmärkessökning: %{service_name}"}}},"sv-x-k12":{"findLinkForService":{"buttons":{"search":"Sök","search_by_tag":"Sök efter tagg"},"errors":{"search_failed":"Sökning misslyckades, försök igen."},"no_description":"Ingen beskrivning","no_results_found":"Inga resultat hittades","status":{"diigo_search_throttling":"Diigo begränsar användare till en sökning var 10 sekund.  Vänta ...","searching":"Söker ..."},"titles":{"bookmark_search":"Bokmärkessökning: %{service_name}"}}},"tr":{"findLinkForService":{"buttons":{"search":"Ara","search_by_tag":"Etikete göre Ara"},"errors":{"search_failed":"Arama işlemi başarısız, lütfen tekrar deneyin."},"no_description":"Açıklama Yok","no_results_found":"Hiç Sonuç Bulunamadı","status":{"diigo_search_throttling":"Diigo kullanıcıları her 10 saniyede bir arama yapabilecek şekilde sınırlıyor. Lütfen bekleyiniz...","searching":"Aranıyor..."},"titles":{"bookmark_search":"Yer İmi Arama: %{service_name}"}}},"zh-Hans":{"findLinkForService":{"buttons":{"search":"搜索","search_by_tag":"按标签搜索"},"errors":{"search_failed":"搜索失败，请重试。"},"no_description":"无描述","no_results_found":"未找到结果","status":{"diigo_search_throttling":"Diigo 限制用户每 10 秒搜索一次。  请稍等...","searching":"正在搜索..."},"titles":{"bookmark_search":"书签搜索：%{service_name}"}}},"zh-Hant":{"findLinkForService":{"buttons":{"search":"搜尋","search_by_tag":"透過標籤搜尋"},"errors":{"search_failed":"搜尋失敗，請再試一次。"},"no_description":"沒有說明","no_results_found":"找不到結果","status":{"diigo_search_throttling":"Diigo 限制使用者每十秒鐘搜尋一次。  請稍候...","searching":"正在搜尋..."},"titles":{"bookmark_search":"書籤搜尋：%{service_name}"}}}}'))
i("jQeR")
i("0sPK")
var n=s["default"].scoped("findLinkForService")
var a=i("ouhR")
var o=i.n(a)
var l=i("5Ky4")
var c=i("0crz")
i("jYyc")
i("Z+Ib")
i("YGE8")
i.d(t,"b",(function(){return u}))
i.d(t,"a",(function(){return h}))
function u(e,t,i){o.a.isArray(e)||(e=[e])
const s="/services?service_types=".concat(e.join(","))
o.a.ajaxJSON(s,"GET",{},e=>{t&&t(e)},e=>{i&&i(e)})}let d
function h(e,t){let i=o()("#instructure_bookmark_search")
if(!i.length){i=o()("<div id='instructure_bookmark_search'/>")
i.append("".concat("<form id='bookmark_search_form' style='margin-bottom: 5px;'><img src='/images/blank.png'/>&nbsp;&nbsp;<input type='text' class='query' style='width: 230px;'/><button class='btn search_button' type='submit'>").concat(Object(l["a"])(n.t("buttons.search","Search")),"</button></form>"))
i.append("<div class='results' style='max-height: 200px; overflow: auto;'/>")
i.find("form").submit(t=>{t.preventDefault()
t.stopPropagation()
const s=new Date
if("diigo"==e&&d&&s-d<15e3){setTimeout(()=>{i.find("form").submit()},15e3-(s-d))
i.find(".results").empty().append(Object(l["a"])(n.t("status.diigo_search_throttling","Diigo limits users to one search every ten seconds.  Please wait...")))
return}i.find(".results").empty().append(Object(l["a"])(n.t("status.searching","Searching...")))
d=new Date
const r=i.find(".query").val()
const a=o.a.replaceTags(i.data("reference_url"),"query",r)
o.a.ajaxJSON(a,"GET",{},e=>{i.find(".results").empty()
e.length||i.find(".results").append(Object(l["a"])(n.t("no_results_found","No Results Found")))
for(const t in e){e[t].short_title=e[t].title
e[t].title==e[t].description&&(e[t].short_title=c["a"].truncateText(e[t].description,{max:30}))
o()("<div class='bookmark'/>").appendTo(i.find(".results")).append(o()('<a class="bookmark_link" style="font-weight: bold;"/>').attr({href:e[t].url,title:e[t].title}).text(e[t].short_title)).append(o()("<div style='margin: 5px 10px; font-size: 0.8em;'/>").text(e[t].description||n.t("no_description","No description")))}},()=>{i.find(".results").empty().append(Object(l["a"])(n.t("errors.search_failed","Search failed, please try again.")))})})
i.delegate(".bookmark_link","click",(function(e){e.preventDefault()
const s=o()(this).attr("href")
const r=o()(this).attr("title")||o()(this).text()
i.dialog("close")
t({url:s,title:r})}))}i.find(".search_button").text("delicious"==e?n.t("buttons.search_by_tag","Search by Tag"):n.t("buttons.search","Search"))
i.find("form img").attr("src","/images/".concat(e,"_small_icon.png"))
let s="/search/bookmarks?q=%7B%7B+query+%7D%7D&service_type=%7B%7B+service_type+%7D%7D"
s=o.a.replaceTags(s,"service_type",e)
i.data("reference_url",s)
i.find(".results").empty().end().find(".query").val("")
i.dialog({title:n.t("titles.bookmark_search","Bookmark Search: %{service_name}",{service_name:o.a.titleize(e)}),open(){i.find("input:visible:first").focus().select()},width:400})}},mykf:function(e,t,i){"use strict"
const s=()=>{const e=ENV.LTI_LAUNCH_FRAME_ALLOWANCES||[]
return e.join("; ")}
t["a"]=s},p6Wi:function(e,t,i){"use strict"
var s=i("pQTu")
var r=i("m0r6")
Object(r["a"])(JSON.parse('{"ar":{"buttons":{"cancel":"إلغاء","delete":"حذف"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"هل ترغب بالتأكيد في حذف هذا؟"}}},"cy":{"buttons":{"cancel":"Canslo","delete":"Dileu"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Ydych chi’n siŵr eich bod am ddileu hyn?"}}},"da":{"buttons":{"cancel":"Annuller","delete":"Slet"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på, at du vil slette dette?"}}},"da-x-k12":{"buttons":{"cancel":"Annuller","delete":"Slet"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på, at du vil slette dette?"}}},"de":{"buttons":{"cancel":"Abbrechen","delete":"Löschen"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Möchten Sie dies wirklich löschen?"}}},"el":{"buttons":{"cancel":"Ακύρωση","delete":"Διαγραφή"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Είστε σίγουρος/η ότι επιθυμείτε να το διαγράψετε;"}}},"en-AU":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-AU-x-unimelb":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-CA":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-GB":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"en-GB-x-lbs":{"buttons":{"cancel":"Cancel","delete":"Delete"}},"en-GB-x-ukhe":{"buttons":{"cancel":"Cancel","delete":"Delete"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Are you sure you want to delete this?"}}},"es":{"buttons":{"cancel":"Cancelar","delete":"Eliminar"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"¿Seguro que desea eliminarlo?"}}},"fa":{"buttons":{"cancel":"لغو","delete":"حذف"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"مطمئنید که می خواهید این مورد حذف شود؟"}}},"fi":{"buttons":{"cancel":"Peruuta","delete":"Poista"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Haluatko varmasti poistaa tämän?"}}},"fr":{"buttons":{"cancel":"Annuler","delete":"Supprimer"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Voulez-vous vraiment supprimer cet élément ?"}}},"fr-CA":{"buttons":{"cancel":"Annuler","delete":"Supprimer"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Voulez-vous vraiment supprimer cet élément?"}}},"he":{"buttons":{"cancel":"ביטול","delete":"ביטול"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"בטוח/ה שרוצה לבטל זאת?"}}},"ht":{"buttons":{"cancel":"Anile","delete":"Efase"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Ou kwè vrèman ou vle efase sa a?"}}},"hu":{"buttons":{"cancel":"Mégse","delete":"Törlés"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Biztos benne, hogy törli ezt?"}}},"hy":{"buttons":{"cancel":"Չեղյալ համարել","delete":"Ջնջել"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Դուք իսկապե՞ս ցանկանում եք ջնջել սա:"}}},"is":{"buttons":{"cancel":"Hætta við","delete":"Eyða"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Viltu örugglega eyða þessu?"}}},"it":{"buttons":{"cancel":"Annulla","delete":"Elimina"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vuoi eliminare questo?"}}},"ja":{"buttons":{"cancel":"キャンセル","delete":"削除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"これを削除してもよろしいですか?"}}},"ko":{"buttons":{"cancel":"취소","delete":"삭제"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"삭제하시겠습니까?"}}},"mi":{"buttons":{"cancel":"Whakakore","delete":"Muku"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"E tino hiahia ana koe ki te muku i tēnei?"}}},"nb":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du ønsker å slette dette?"}}},"nb-x-k12":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du ønsker å slette dette?"}}},"nl":{"buttons":{"cancel":"Annuleren","delete":"Verwijderen"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Weet je zeker dat je dit wilt verwijderen?"}}},"nn":{"buttons":{"cancel":"Avbryt","delete":"Slett"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Er du sikker på at du vil slette dette?"}}},"pl":{"buttons":{"cancel":"Anuluj","delete":"Usuń"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Czy na pewno chcesz usunąć ten element?"}}},"pt":{"buttons":{"cancel":"Cancelar","delete":"Excluir"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Tem certeza de que deseja excluir isto?"}}},"pt-BR":{"buttons":{"cancel":"Cancelar","delete":"Excluir"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Tem certeza que deseja excluir isto?"}}},"ru":{"buttons":{"cancel":"Отменить","delete":"Удалить"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Действительно хотите удалить?"}}},"sl":{"buttons":{"cancel":"Prekliči","delete":"Odstrani"}},"sv":{"buttons":{"cancel":"Avbryt","delete":"Ta bort"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vill du verkligen radera det här?"}}},"sv-x-k12":{"buttons":{"cancel":"Avbryt","delete":"Ta bort"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Vill du verkligen radera det här?"}}},"tr":{"buttons":{"cancel":"İptal","delete":"Sil"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"Bunu silmek istediğinize emin misiniz?"}}},"uk":{"buttons":{"cancel":"Скасувати","delete":"Видалити"}},"zh-Hans":{"buttons":{"cancel":"取消","delete":"删除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"是否确定要删除它?"}}},"zh-Hant":{"buttons":{"cancel":"取消","delete":"刪除"},"instructure_misc_plugins":{"confirms":{"default_delete_thing":"您是否確定要刪除？"}}}}'))
i("jQeR")
i("0sPK")
var n=s["default"].scoped("instructure_misc_plugins")
var a=i("ouhR")
var o=i.n(a)
var l=i("5Ky4")
var c=i("JD5e")
i("jYyc")
i("YGE8")
i("B1vq")
i("s/PJ")
o.a.fn.setOptions=function(e,t){let i=e?"<option value=''>"+Object(l["a"])(e)+"</option>":""
null==t&&(t=[])
t.forEach(e=>{const t=Object(l["a"])(e)
i+='<option value="'+t+'">'+t+"</option>"})
return this.html(o.a.raw(i))}
o.a.fn.ifExists=function(e){this.length&&e.call(this,this)
return this}
o.a.fn.scrollbarWidth=function(){const e=o()('<div style="width:50px;height:50px;overflow:hidden;position:absolute;top:-200px;left:-200px;"><div style="height:100px;"></div>').appendTo(this),t=e.find("div")
const i=t.innerWidth()
e.css("overflow-y","scroll")
const s=t.innerWidth()
e.remove()
return i-s}
o.a.fn.dim=function(e){return this.animate({opacity:.4},e)}
o.a.fn.undim=function(e){return this.animate({opacity:1},e)}
o.a.fn.confirmDelete=function(e){e=o.a.extend({},o.a.fn.confirmDelete.defaults,e)
const t=this
let i=null
let s=true
e.noMessage=e.noMessage||e.no_message
const r=function(){if(!s){e.cancelled&&o.a.isFunction(e.cancelled)&&e.cancelled.call(t)
return}e.confirmed||(e.confirmed=function(){t.dim()})
e.confirmed.call(t)
if(e.url){e.success||(e.success=function(e){t.fadeOut("slow",()=>{t.remove()})})
const s=e.prepareData?e.prepareData.call(t,i):{}
s.authenticity_token=Object(c["a"])()
o.a.ajaxJSON(e.url,"DELETE",s,i=>{e.success.call(t,i)},(i,s,r,n)=>{e.error&&o.a.isFunction(e.error)?e.error.call(t,i,s,r,n):o.a.ajaxJSON.unhandledXHRs.push(s)})}else{e.success||(e.success=function(){t.fadeOut("slow",()=>{t.remove()})})
e.success.call(t)}}
if(e.message&&!e.noMessage&&!o.a.skipConfirmations){if(e.dialog){s=false
const t="object"===typeof e.dialog?e.dialog:{}
const a=e.url.includes("assignments")?"btn-danger":"btn-primary"
i=o()(e.message).dialog(o.a.extend({},{modal:true,close:r,buttons:[{text:n.t("#buttons.cancel","Cancel"),click(){o()(this).dialog("close")}},{text:n.t("#buttons.delete","Delete"),class:a,click(){s=true
o()(this).dialog("close")}}]},t))
return}s=confirm(e.message)}r()}
o.a.fn.confirmDelete.defaults={get message(){return n.t("confirms.default_delete_thing","Are you sure you want to delete this?")}}
o.a.fn.fragmentChange=function(e){if(e&&true!==e){const i=(window.location.search||"").replace(/^\?/,"").split("&")
let s=null
for(var t=0;t<i.length;t++){const e=i[t]
e&&0===e.indexOf("hash=")&&(s="#"+e.substring(5))}this.bind("document_fragment_change",e)
const r=this
let n=false
for(t=0;t<o.a._checkFragments.fragmentList.length;t++){const e=o.a._checkFragments.fragmentList[t]
e.doc[0]==r[0]&&(n=true)}n||o.a._checkFragments.fragmentList.push({doc:r,fragment:""})
o()(window).bind("hashchange",o.a._checkFragments)
setTimeout(()=>{s&&s.length>0?r.triggerHandler("document_fragment_change",s):r&&r[0]&&r[0].location&&r[0].location.hash.length>0&&r.triggerHandler("document_fragment_change",r[0].location.hash)},500)}else this.triggerHandler("document_fragment_change",this[0].location.hash)
return this}
o.a._checkFragments=function(){const e=o.a._checkFragments.fragmentList
for(let t=0;t<e.length;t++){const i=e[t]
const s=i.doc
if(s[0].location.hash!=i.fragment){s.triggerHandler("document_fragment_change",s[0].location.hash)
i.fragment=s[0].location.hash
o.a._checkFragments.fragmentList[t]=i}}}
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
let i=this.offset()
e&&e.offset&&(i=e.offset)
const s=this.width()
const r=this.height()
const n=(e.container||this).zIndex()
t=o()(document.createElement("div"))
t.css({width:s+6,height:r+6,top:i.top-3,left:i.left-3,zIndex:n+1,position:"absolute",display:"block","-moz-border-radius":5,opacity:.8,border:"2px solid #870",backgroundColor:"#fd0"})
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
o.a.fn.fillWindowWithMe=function(e){const t=o.a.extend({minHeight:400},e),i=o()(this),s=o()("#wrapper"),r=o()("#main"),n=o()("#not_right_side"),a=o()(window),l=o()(this).add(t.alsoResize)
function c(){l.height(0)
const e=a.height()-(s.offset().top+s.outerHeight())+(r.height()-n.height()),c=Math.max(400,e)
l.height(c)
o.a.isFunction(t.onResize)&&t.onResize.call(i,c)}c()
a.unbind("resize.fillWindowWithMe").bind("resize.fillWindowWithMe",c)
return this}
o.a.fn.autoGrowInput=function(e){e=o.a.extend({maxWidth:1e3,minWidth:0,comfortZone:70},e)
this.filter("input:text").each((function(){let t=e.minWidth||o()(this).width(),i="",s=o()(this),r=o()("<tester/>").css({position:"absolute",top:-9999,left:-9999,width:"auto",fontSize:s.css("fontSize"),fontFamily:s.css("fontFamily"),fontWeight:s.css("fontWeight"),letterSpacing:s.css("letterSpacing"),whiteSpace:"nowrap"}),n=function(){setTimeout(()=>{if(i===(i=s.val()))return
r.text(i)
const n=r.width(),a=n+e.comfortZone>=t?n+e.comfortZone:t,o=s.width(),l=a<o&&a>=t||a>t&&a<e.maxWidth
l&&s.width(a)})}
r.insertAfter(s)
o()(this).bind("keyup keydown blur update change",n)}))
return this}
o.a}}])

//# sourceMappingURL=15-c-8da896fbc0.js.map