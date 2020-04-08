(window["canvasWebpackJsonp"]=window["canvasWebpackJsonp"]||[]).push([[24],{"0jNN":function(e,t,a){"use strict"
var n=Object.prototype.hasOwnProperty
var r=Array.isArray
var i=function(){var e=[]
for(var t=0;t<256;++t)e.push("%"+((t<16?"0":"")+t.toString(16)).toUpperCase())
return e}()
var o=function(e){while(e.length>1){var t=e.pop()
var a=t.obj[t.prop]
if(r(a)){var n=[]
for(var i=0;i<a.length;++i)"undefined"!==typeof a[i]&&n.push(a[i])
t.obj[t.prop]=n}}}
var s=function(e,t){var a=t&&t.plainObjects?Object.create(null):{}
for(var n=0;n<e.length;++n)"undefined"!==typeof e[n]&&(a[n]=e[n])
return a}
var l=function e(t,a,i){if(!a)return t
if("object"!==typeof a){if(r(t))t.push(a)
else{if(!t||"object"!==typeof t)return[t,a];(i&&(i.plainObjects||i.allowPrototypes)||!n.call(Object.prototype,a))&&(t[a]=true)}return t}if(!t||"object"!==typeof t)return[t].concat(a)
var o=t
r(t)&&!r(a)&&(o=s(t,i))
if(r(t)&&r(a)){a.forEach((function(a,r){if(n.call(t,r)){var o=t[r]
o&&"object"===typeof o&&a&&"object"===typeof a?t[r]=e(o,a,i):t.push(a)}else t[r]=a}))
return t}return Object.keys(a).reduce((function(t,r){var o=a[r]
n.call(t,r)?t[r]=e(t[r],o,i):t[r]=o
return t}),o)}
var _=function(e,t){return Object.keys(t).reduce((function(e,a){e[a]=t[a]
return e}),e)}
var c=function(e,t,a){var n=e.replace(/\+/g," ")
if("iso-8859-1"===a)return n.replace(/%[0-9a-f]{2}/gi,unescape)
try{return decodeURIComponent(n)}catch(e){return n}}
var u=function(e,t,a){if(0===e.length)return e
var n=e
"symbol"===typeof e?n=Symbol.prototype.toString.call(e):"string"!==typeof e&&(n=String(e))
if("iso-8859-1"===a)return escape(n).replace(/%u[0-9a-f]{4}/gi,(function(e){return"%26%23"+parseInt(e.slice(2),16)+"%3B"}))
var r=""
for(var o=0;o<n.length;++o){var s=n.charCodeAt(o)
if(45===s||46===s||95===s||126===s||s>=48&&s<=57||s>=65&&s<=90||s>=97&&s<=122){r+=n.charAt(o)
continue}if(s<128){r+=i[s]
continue}if(s<2048){r+=i[192|s>>6]+i[128|63&s]
continue}if(s<55296||s>=57344){r+=i[224|s>>12]+i[128|s>>6&63]+i[128|63&s]
continue}o+=1
s=65536+((1023&s)<<10|1023&n.charCodeAt(o))
r+=i[240|s>>18]+i[128|s>>12&63]+i[128|s>>6&63]+i[128|63&s]}return r}
var d=function(e){var t=[{obj:{o:e},prop:"o"}]
var a=[]
for(var n=0;n<t.length;++n){var r=t[n]
var i=r.obj[r.prop]
var s=Object.keys(i)
for(var l=0;l<s.length;++l){var _=s[l]
var c=i[_]
if("object"===typeof c&&null!==c&&-1===a.indexOf(c)){t.push({obj:i,prop:_})
a.push(c)}}}o(t)
return e}
var f=function(e){return"[object RegExp]"===Object.prototype.toString.call(e)}
var p=function(e){if(!e||"object"!==typeof e)return false
return!!(e.constructor&&e.constructor.isBuffer&&e.constructor.isBuffer(e))}
var v=function(e,t){return[].concat(e,t)}
e.exports={arrayToObject:s,assign:_,combine:v,compact:d,decode:c,encode:u,isBuffer:p,isRegExp:f,merge:l}},"60Hp":function(e,t,a){"use strict"
a.r(t)
var n=a("ODXe")
var r=a("x1Tw")
var i=a("Qyje")
var o=a.n(i)
var s=a("pQTu")
var l=a("m0r6")
Object(l["a"])(JSON.parse('{"ar":{"canvas_failed_to_complete_the_upload_864a4c0f":"فشل Canvas في إكمال التحميل.","canvas_failed_to_initiate_the_upload_8e3824d5":"فشل Canvas في بدء التحميل.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"يتعذر نقل الملف إلى خدمة التخزين. قد تكون الخدمة معطلة أو قد تحتاج إلى إعادة تسجيل الدخول إلى Canvas."},"cy":{"canvas_failed_to_complete_the_upload_864a4c0f":"Mae Canvas wedi methu cwblhau’r broses llwytho i fyny.","canvas_failed_to_initiate_the_upload_8e3824d5":"Mae Canvas wedi methu rhoi’r broses llwytho i fyny ar waith.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Doedd dim modd trosglwyddo ffeil i’r gwasanaeth storio. Efallai nad yw’r gwasanaeth ar gael ar hyn o bryd, neu efallai y bydd angen i chi fewngofnodi eto i Canvas."},"da":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunne ikke afslutte uploaden.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunne ikke påbegynde uploaden.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kunne ikke overføre filen til lagertjenesten. Tjenesten kan være nede, eller du skal måske logge ind på Canvas igen."},"da-x-k12":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunne ikke fuldføre uploaden.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunne ikke påbegynde uploaden.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kunne ikke overføre filen til lagertjenesten. Tjenesten kan være nede, eller du skal måske logge ind på Canvas igen."},"de":{"canvas_failed_to_complete_the_upload_864a4c0f":"Upload fehlgeschlagen","canvas_failed_to_initiate_the_upload_8e3824d5":"Initialisierung des Upload fehlgeschlagen","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Übertragung der Datei in den Speicher-Service ist fehlgeschlagen. Entweder ist der Service heruntergefahren oder Sie müssen sich erneut bei Canvas anmelden."},"en-AU":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"en-AU-x-unimelb":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"en-CA":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"en-GB":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"en-GB-x-lbs":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"en-GB-x-ukhe":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas failed to complete the upload.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas failed to initiate the upload.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."},"es":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas no pudo completar la carga.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas no pudo iniciar la carga.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"No se pudo transmitir el archivo al servicio de almacenamiento. Es posible que el servicio no esté funcionando o que tenga que volver a iniciar sesión en Canvas."},"fi":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas ei onnistunut suorittamaan latausta loppuun.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvasin latauksen aloitus epäonnistui.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Tiedoston siirto tallennuspalveluun epäonnistui. Palvelu saattaa olla alhaalla tai sinun täytyy ehkä kirjautua uudelleen Canvasiin."},"fr":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas n\'a pas réussi à terminer le téléchargement.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas n\'a pas réussi à lancer le téléchargement.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Impossible de transmettre le fichier au service de stockage. Le service peut être en panne ou vous devez peut-être vous reconnecter à Canvas."},"fr-CA":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas a échoué de conclure le téléversement.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas n\'a pu commencer le téléversement.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Impossible d’envoyer le fichier au service de stockage. Le service peut être inactif ou vous pourriez avoir besoin de vous connecter de nouveau à Canvas."},"ht":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas pa reyisi fini telechajman an.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas pa reyisi lanse telechajman an.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Enposib pou transmèt fichye nan sèvis estokaj la. Petèt ke sèvis la an pàn oswa ou ka bezwen rekonekte sou Canvas."},"is":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas tókst ekki að klára upphalið","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas gat ekki byrjað upphalið.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Ekki tókst að senda skjal í geymslu. Annaðhvort liggur þjónustan niðri eða þú þarft að endurinnskrá þig á Canvas."},"it":{"canvas_failed_to_complete_the_upload_864a4c0f":"Impossibile completare il caricamento in Canvas.","canvas_failed_to_initiate_the_upload_8e3824d5":"Impossibile inizializzare il caricamento in Canvas.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Impossibile trasmettere il file al servizio di archiviazione. Il servizio potrebbe essere inattivo o potrebbe essere necessario effettuare nuovamente l\'accesso a Canvas."},"ja":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas はアップロードを完了できませんでした。","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas はアップロードを開始できませんでした。","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"ストレージサービスにファイルを送信できません。サービスが停止しているか、Canvas に再度ログインする必要があるかもしれません。"},"mi":{"canvas_failed_to_complete_the_upload_864a4c0f":"I rahua a Canvas ki te whakaoti i te tukuake.","canvas_failed_to_initiate_the_upload_8e3824d5":"I rahua a Canvas ki te tīmata i te tukuake.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kāore e taea te tuku kōnae ki te ratonga rokiroki. Ka mutu te ratonga, ka hiahia pea koe ki te whakauru atu anō ki Canvas."},"nb":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kan ikke fullføre opplastingen.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunne ikke starte opplastingen.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kan ikke overføre fil til lagringsenhet. Denne tjeneste kan være nede eller du må kanskje logge på Canvas på nytt."},"nb-x-k12":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunne ikke fullføre opplastingen.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunne ikke starte opplastingen.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kunne ikke overføre fil til lagringsenhet. Tjeneste kan være nede eller du må kanskje logge på Canvas på nytt."},"nl":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kan de upload niet uitvoeren.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kan de upload niet initiëren.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kan bestand niet overzetten naar de opslagservice. Misschien is de service niet geactiveerd of moet je je opnieuw aanmelden bij Canvas."},"nn":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunne ikkje fullføre opplastinga.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunne ikkje starte opplastinga.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Kan ikkje overføre fil til lagringsteneste. Tenesta kan vere nede eller du må logge inn i Canvas på nytt."},"pl":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas nie może ukończyć przesyłania.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas nie może rozpocząć przesyłania.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Nie można przesłać pliku do usługi przechowywania. Usługa może być niedostępna lub wymagane jest ponowne zalogowanie w Canvas."},"pt":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas falhou ao concluir o carregamento.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas falhou ao iniciar o carregamento.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Não é possível transmitir o ficheiro para o serviço de armazenamento. O serviço pode estar inativo ou você pode precisar fazer o login novamente no Canvas."},"pt-BR":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas falhou em importar o carregamento.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas falhou em iniciar o carregamento.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Incapaz de transmitir o arquivo para o serviço de armazenamento. O serviço pode estar interrompido ou você precisa fazer login novamente no Canvas."},"ru":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas не удается завершить отправку.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas не удается запустить отправку.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Невозможно передать файл на устройство хранения. Сервис может быть отключен, или вам может быть необходимо выйти и снова войти в Canvas."},"sl":{"canvas_failed_to_complete_the_upload_864a4c0f":"Zaključevanje nalaganja v sistemu Canvas ni uspelo.","canvas_failed_to_initiate_the_upload_8e3824d5":"Zagon nalaganja v sistemu Canvas ni uspel.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Datoteke ni mogoče prenesti v storitev shranjevanja. Storitev morda ne deluje ali pa se morate znova prijaviti v sistem Canvas."},"sv":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunde inte slutföra uppladdningen.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunde inte initiera uppladdningen.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Det går inte att överföra filen till lagringstjänsten. Tjänsten kan ligga nere, eller kan du behöva logga in till Canvas på nytt."},"sv-x-k12":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas kunde inte slutföra uppladdningen.","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas kunde inte initiera uppladdningen.","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"Det går inte att överföra filen till lagringstjänsten. Tjänsten kan ligga nere, eller kan du behöva logga in till Canvas på nytt."},"zh-Hans":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas 无法完成上传。","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas 无法启动上传。","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"无法将文件传输到存储服务。服务可能中断，或者您可能需要重新登录到 Canvas。"},"zh-Hant":{"canvas_failed_to_complete_the_upload_864a4c0f":"Canvas 無法完成上傳。","canvas_failed_to_initiate_the_upload_8e3824d5":"Canvas 無法啟動上傳。","unable_to_transmit_file_to_the_storage_service_the_2d80b29e":"無法將檔案傳輸到儲存空間服務。該服務可能已關閉，或者您可能需要重新登入 Canvas。"}}'))
a("jQeR")
a("0sPK")
var _=s["default"].scoped("upload_file")
var c=a("jpBB")
a.d(t,"uploadFile",(function(){return p}))
a.d(t,"completeUpload",(function(){return v}))
a.d(t,"submissionCommentAttachmentsUpload",(function(){return h}))
a.d(t,"uploadFiles",(function(){return m}))
function u(e){if("Network Error"===e.message){const t=new Error(_.t("Canvas failed to initiate the upload."))
t.originalError=e
return Promise.reject(t)}return Promise.reject(e)}function d(e){if("Network Error"===e.message){const t=new Error(_.t("Unable to transmit file to the storage service. The service may be down or you may need to re-login to Canvas."))
t.originalError=e
return Promise.reject(t)}return Promise.reject(e)}function f(e){if("Network Error"===e.message){const t=new Error(_.t("Canvas failed to complete the upload."))
t.originalError=e
return Promise.reject(t)}return Promise.reject(e)}function p(e,t,a){let n=arguments.length>3&&void 0!==arguments[3]?arguments[3]:r["a"]
if(!a&&!t.url)throw new Error("expected either a file to upload or a url to clone",{file:a,preflightData:t})
if(a&&t.url)throw new Error("can't upload with both a file object and a url to clone",{file:a,preflightData:t})
t.no_redirect=true
t["attachment[context_code]"]&&(t=o.a.stringify(t))
return n.post(e,t).catch(u).then(e=>v(e.data,a,{ajaxLib:n}))}function v(e,t){let a=arguments.length>2&&void 0!==arguments[2]?arguments[2]:{}
const i=a.ajaxLib||r["a"]
e&&e.attachments&&e.attachments[0]&&(e=e.attachments[0])
if(!e)throw new Error("expected a preflightResponse")
if(t&&!e.upload_url)throw new Error("expected a preflightResponse with an upload_url",{preflightResponse:e})
if(!t&&!e.progress)throw new Error("expected a preflightResponse with a progress",{preflightResponse:e})
const s=e,l=s.upload_url,_=s.progress
if(!l)return Object(c["a"])(_,{ajaxLib:i}).catch(f)
let u=e,p=u.file_param,v=u.upload_params,h=u.success_url
p=p||"file"
v=v||{}
h=h||v.success_url
const m=!!h
const g=new FormData
Object.entries(v).forEach(e=>{let t=Object(n["a"])(e,2),a=t[0],r=t[1]
return g.append(a,r)})
t&&g.append(p,t,a.filename)
const y=i.post(l,g,{responseType:m?"document":"json",onUploadProgress:a.onProgress,withCredentials:!m})
return y.catch(d).then(e=>{if(_)return Object(c["a"])(_,{ajaxLib:i}).catch(f)
let t,n={}
if(h){const a=e.data,r=a.Bucket,i=a.Key,o=a.ETag
t=h
n={bucket:r,key:i,etag:o}}else if(201===e.status&&!a.ignoreResult){t=e.data.location
n={}}if(t){a.includeAvatar&&(n.include="avatar")
n=o.a.stringify(n)
n&&(t=-1!==t.indexOf("?")?"".concat(t,"&").concat(n):"".concat(t,"?").concat(n))
return i.get(t).then(e=>{let t=e.data
return t}).catch(f)}return e.data})}function h(e,t,a){const n="/api/v1/courses/".concat(t,"/assignments/").concat(a,"/submissions/self/comments/files")
const r=e.map(e=>{const t={name:e.name,content_type:e.type}
return p(n,t,e)})
return Promise.all(r)}function m(e,t){const a=e.map(e=>e.url?p(t,{url:e.url,name:e.title,content_type:e.mediaType,submit_assignment:false}):p(t,{name:e.name,content_type:e.type},e))
return Promise.all(a)}},QSc6:function(e,t,a){"use strict"
var n=a("0jNN")
var r=a("sxOR")
var i=Object.prototype.hasOwnProperty
var o={brackets:function(e){return e+"[]"},comma:"comma",indices:function(e,t){return e+"["+t+"]"},repeat:function(e){return e}}
var s=Array.isArray
var l=Array.prototype.push
var _=function(e,t){l.apply(e,s(t)?t:[t])}
var c=Date.prototype.toISOString
var u=r["default"]
var d={addQueryPrefix:false,allowDots:false,charset:"utf-8",charsetSentinel:false,delimiter:"&",encode:true,encoder:n.encode,encodeValuesOnly:false,format:u,formatter:r.formatters[u],indices:false,serializeDate:function(e){return c.call(e)},skipNulls:false,strictNullHandling:false}
var f=function(e){return"string"===typeof e||"number"===typeof e||"boolean"===typeof e||"symbol"===typeof e||"bigint"===typeof e}
var p=function e(t,a,r,i,o,l,c,u,p,v,h,m,g){var y=t
"function"===typeof c?y=c(a,y):y instanceof Date?y=v(y):"comma"===r&&s(y)&&(y=y.join(","))
if(null===y){if(i)return l&&!m?l(a,d.encoder,g,"key"):a
y=""}if(f(y)||n.isBuffer(y)){if(l){var b=m?a:l(a,d.encoder,g,"key")
return[h(b)+"="+h(l(y,d.encoder,g,"value"))]}return[h(a)+"="+h(String(y))]}var k=[]
if("undefined"===typeof y)return k
var C
if(s(c))C=c
else{var j=Object.keys(y)
C=u?j.sort(u):j}for(var w=0;w<C.length;++w){var O=C[w]
if(o&&null===y[O])continue
s(y)?_(k,e(y[O],"function"===typeof r?r(a,O):a,r,i,o,l,c,u,p,v,h,m,g)):_(k,e(y[O],a+(p?"."+O:"["+O+"]"),r,i,o,l,c,u,p,v,h,m,g))}return k}
var v=function(e){if(!e)return d
if(null!==e.encoder&&void 0!==e.encoder&&"function"!==typeof e.encoder)throw new TypeError("Encoder has to be a function.")
var t=e.charset||d.charset
if("undefined"!==typeof e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new TypeError("The charset option must be either utf-8, iso-8859-1, or undefined")
var a=r["default"]
if("undefined"!==typeof e.format){if(!i.call(r.formatters,e.format))throw new TypeError("Unknown format option provided.")
a=e.format}var n=r.formatters[a]
var o=d.filter;("function"===typeof e.filter||s(e.filter))&&(o=e.filter)
return{addQueryPrefix:"boolean"===typeof e.addQueryPrefix?e.addQueryPrefix:d.addQueryPrefix,allowDots:"undefined"===typeof e.allowDots?d.allowDots:!!e.allowDots,charset:t,charsetSentinel:"boolean"===typeof e.charsetSentinel?e.charsetSentinel:d.charsetSentinel,delimiter:"undefined"===typeof e.delimiter?d.delimiter:e.delimiter,encode:"boolean"===typeof e.encode?e.encode:d.encode,encoder:"function"===typeof e.encoder?e.encoder:d.encoder,encodeValuesOnly:"boolean"===typeof e.encodeValuesOnly?e.encodeValuesOnly:d.encodeValuesOnly,filter:o,formatter:n,serializeDate:"function"===typeof e.serializeDate?e.serializeDate:d.serializeDate,skipNulls:"boolean"===typeof e.skipNulls?e.skipNulls:d.skipNulls,sort:"function"===typeof e.sort?e.sort:null,strictNullHandling:"boolean"===typeof e.strictNullHandling?e.strictNullHandling:d.strictNullHandling}}
e.exports=function(e,t){var a=e
var n=v(t)
var r
var i
if("function"===typeof n.filter){i=n.filter
a=i("",a)}else if(s(n.filter)){i=n.filter
r=i}var l=[]
if("object"!==typeof a||null===a)return""
var c
c=t&&t.arrayFormat in o?t.arrayFormat:t&&"indices"in t?t.indices?"indices":"repeat":"indices"
var u=o[c]
r||(r=Object.keys(a))
n.sort&&r.sort(n.sort)
for(var d=0;d<r.length;++d){var f=r[d]
if(n.skipNulls&&null===a[f])continue
_(l,p(a[f],f,u,n.strictNullHandling,n.skipNulls,n.encode?n.encoder:null,n.filter,n.sort,n.allowDots,n.serializeDate,n.formatter,n.encodeValuesOnly,n.charset))}var h=l.join(n.delimiter)
var m=true===n.addQueryPrefix?"?":""
n.charsetSentinel&&("iso-8859-1"===n.charset?m+="utf8=%26%2310003%3B&":m+="utf8=%E2%9C%93&")
return h.length>0?m+h:""}},Qyje:function(e,t,a){"use strict"
var n=a("QSc6")
var r=a("nmq7")
var i=a("sxOR")
e.exports={formats:i,parse:r,stringify:n}},jpBB:function(e,t,a){"use strict"
a.d(t,"a",(function(){return i}))
var n=a("x1Tw")
function r(e){return new Promise(t=>{setTimeout(t,e)})}function i(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:{}
const a=t.ajaxLib||n["a"]
const o=e.url,s=e.workflow_state,l=e.results,_=e.message
if("queued"===s||"running"===s){let e=t.interval
e||(e=1e3)
e<100&&(e=100)
return r(e).then(()=>a.get(o)).then(e=>{const a=e.data
return i(a,t)})}return"completed"===s?Promise.resolve(l):Promise.reject(_)}},nmq7:function(e,t,a){"use strict"
var n=a("0jNN")
var r=Object.prototype.hasOwnProperty
var i=Array.isArray
var o={allowDots:false,allowPrototypes:false,arrayLimit:20,charset:"utf-8",charsetSentinel:false,comma:false,decoder:n.decode,delimiter:"&",depth:5,ignoreQueryPrefix:false,interpretNumericEntities:false,parameterLimit:1e3,parseArrays:true,plainObjects:false,strictNullHandling:false}
var s=function(e){return e.replace(/&#(\d+);/g,(function(e,t){return String.fromCharCode(parseInt(t,10))}))}
var l="utf8=%26%2310003%3B"
var _="utf8=%E2%9C%93"
var c=function(e,t){var a={}
var c=t.ignoreQueryPrefix?e.replace(/^\?/,""):e
var u=Infinity===t.parameterLimit?void 0:t.parameterLimit
var d=c.split(t.delimiter,u)
var f=-1
var p
var v=t.charset
if(t.charsetSentinel)for(p=0;p<d.length;++p)if(0===d[p].indexOf("utf8=")){d[p]===_?v="utf-8":d[p]===l&&(v="iso-8859-1")
f=p
p=d.length}for(p=0;p<d.length;++p){if(p===f)continue
var h=d[p]
var m=h.indexOf("]=")
var g=-1===m?h.indexOf("="):m+1
var y,b
if(-1===g){y=t.decoder(h,o.decoder,v,"key")
b=t.strictNullHandling?null:""}else{y=t.decoder(h.slice(0,g),o.decoder,v,"key")
b=t.decoder(h.slice(g+1),o.decoder,v,"value")}b&&t.interpretNumericEntities&&"iso-8859-1"===v&&(b=s(b))
b&&"string"===typeof b&&t.comma&&b.indexOf(",")>-1&&(b=b.split(","))
h.indexOf("[]=")>-1&&(b=i(b)?[b]:b)
r.call(a,y)?a[y]=n.combine(a[y],b):a[y]=b}return a}
var u=function(e,t,a){var n=t
for(var r=e.length-1;r>=0;--r){var i
var o=e[r]
if("[]"===o&&a.parseArrays)i=[].concat(n)
else{i=a.plainObjects?Object.create(null):{}
var s="["===o.charAt(0)&&"]"===o.charAt(o.length-1)?o.slice(1,-1):o
var l=parseInt(s,10)
if(a.parseArrays||""!==s)if(!isNaN(l)&&o!==s&&String(l)===s&&l>=0&&a.parseArrays&&l<=a.arrayLimit){i=[]
i[l]=n}else i[s]=n
else i={0:n}}n=i}return n}
var d=function(e,t,a){if(!e)return
var n=a.allowDots?e.replace(/\.([^.[]+)/g,"[$1]"):e
var i=/(\[[^[\]]*])/
var o=/(\[[^[\]]*])/g
var s=a.depth>0&&i.exec(n)
var l=s?n.slice(0,s.index):n
var _=[]
if(l){if(!a.plainObjects&&r.call(Object.prototype,l)&&!a.allowPrototypes)return
_.push(l)}var c=0
while(a.depth>0&&null!==(s=o.exec(n))&&c<a.depth){c+=1
if(!a.plainObjects&&r.call(Object.prototype,s[1].slice(1,-1))&&!a.allowPrototypes)return
_.push(s[1])}s&&_.push("["+n.slice(s.index)+"]")
return u(_,t,a)}
var f=function(e){if(!e)return o
if(null!==e.decoder&&void 0!==e.decoder&&"function"!==typeof e.decoder)throw new TypeError("Decoder has to be a function.")
if("undefined"!==typeof e.charset&&"utf-8"!==e.charset&&"iso-8859-1"!==e.charset)throw new Error("The charset option must be either utf-8, iso-8859-1, or undefined")
var t="undefined"===typeof e.charset?o.charset:e.charset
return{allowDots:"undefined"===typeof e.allowDots?o.allowDots:!!e.allowDots,allowPrototypes:"boolean"===typeof e.allowPrototypes?e.allowPrototypes:o.allowPrototypes,arrayLimit:"number"===typeof e.arrayLimit?e.arrayLimit:o.arrayLimit,charset:t,charsetSentinel:"boolean"===typeof e.charsetSentinel?e.charsetSentinel:o.charsetSentinel,comma:"boolean"===typeof e.comma?e.comma:o.comma,decoder:"function"===typeof e.decoder?e.decoder:o.decoder,delimiter:"string"===typeof e.delimiter||n.isRegExp(e.delimiter)?e.delimiter:o.delimiter,depth:"number"===typeof e.depth||false===e.depth?+e.depth:o.depth,ignoreQueryPrefix:true===e.ignoreQueryPrefix,interpretNumericEntities:"boolean"===typeof e.interpretNumericEntities?e.interpretNumericEntities:o.interpretNumericEntities,parameterLimit:"number"===typeof e.parameterLimit?e.parameterLimit:o.parameterLimit,parseArrays:false!==e.parseArrays,plainObjects:"boolean"===typeof e.plainObjects?e.plainObjects:o.plainObjects,strictNullHandling:"boolean"===typeof e.strictNullHandling?e.strictNullHandling:o.strictNullHandling}}
e.exports=function(e,t){var a=f(t)
if(""===e||null===e||"undefined"===typeof e)return a.plainObjects?Object.create(null):{}
var r="string"===typeof e?c(e,a):e
var i=a.plainObjects?Object.create(null):{}
var o=Object.keys(r)
for(var s=0;s<o.length;++s){var l=o[s]
var _=d(l,r[l],a)
i=n.merge(i,_,a)}return n.compact(i)}},sxOR:function(e,t,a){"use strict"
var n=String.prototype.replace
var r=/%20/g
var i=a("0jNN")
var o={RFC1738:"RFC1738",RFC3986:"RFC3986"}
e.exports=i.assign({default:o.RFC3986,formatters:{RFC1738:function(e){return n.call(e,r,"+")},RFC3986:function(e){return String(e)}}},o)}}])

//# sourceMappingURL=24-c-d91a41bb50.js.map