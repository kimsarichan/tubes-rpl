/* START Telerik.Sitefinity.Web.SitefinityJS.Telerik.Sitefinity.js */
Type.registerNamespace("Telerik.Sitefinity");
$sitefinity=Telerik.Sitefinity;
Telerik.Sitefinity.cloneObject=function(jsObject){if(typeof jsObject=="undefined"||jsObject==null){return jsObject;
}if(jsObject instanceof Array||typeof jsObject.length=="number"){var clonedArray=[];
var elementCopy=null;
for(var i=0,len=jsObject.length;
i<len;
i++){elementCopy=jsObject[i];
elementCopy=Telerik.Sitefinity.cloneObject(elementCopy);
clonedArray.push(elementCopy);
}return clonedArray;
}var clone={};
for(var memberName in jsObject){var memberValue=jsObject[memberName];
clone[memberName]=memberValue instanceof Array?Array.clone(memberValue):memberValue;
}return clone;
};
function Telerik$Sitefinity$isBrokenArray(obj){if(obj!=null&&typeof obj=="object"&&!(obj instanceof Array)){var isBrokenArray=typeof obj.length=="number"&&typeof obj.concat=="function"&&typeof obj.join=="function"&&typeof obj.pop=="function"&&typeof obj.push=="function"&&typeof obj.reverse=="function"&&typeof obj.shift=="function"&&typeof obj.slice=="function"&&typeof obj.splice=="function"&&typeof obj.sort=="function"&&typeof obj.toString=="function"&&typeof obj.unshift=="function"&&typeof obj.valueOf=="function";
return isBrokenArray;
}else{return false;
}}Telerik.Sitefinity.isBrokenArray=Telerik$Sitefinity$isBrokenArray;
function Telerik$Sitefinity$fixArray(jsArray){if(typeof jsArray!="undefined"&&jsArray!=null){if(jsArray instanceof Array||Array.prototype.isPrototypeOf(jsArray)||jsArray.constructor==Array){return jsArray;
}else{if(typeof jsArray.length=="number"){try{var copy=[];
var len=jsArray.length;
for(var i=0;
i<len;
i++){copy.push(jsArray[i]);
}return copy;
}catch(castError){return null;
}}else{try{var copy=[];
for(var propName in jsArray){if(!isNaN(parseInt(propName))){copy.push(jsArray[propName]);
}}return copy;
}catch(e){return null;
}}}}return null;
}Telerik.Sitefinity.fixArray=Telerik$Sitefinity$fixArray;
function Telerik$Sitefinity$fixObjectForSerialization(obj){var objType=typeof obj;
if(obj==null||objType!="object"){return obj;
}else{if(Telerik$Sitefinity$isBrokenArray(obj)){obj=Telerik$Sitefinity$fixArray(obj);
}for(var propName in obj){var val=obj[propName];
var fixed=Telerik$Sitefinity$fixObjectForSerialization(val);
obj[propName]=fixed;
}return obj;
}}Telerik.Sitefinity.fixObjectForSerialization=Telerik$Sitefinity$fixObjectForSerialization;
Telerik.Sitefinity.getEmptyGuid=function(){return"00000000-0000-0000-0000-000000000000";
};
Telerik.Sitefinity.encodeWcfString=function(wcfString){if(typeof(wcfString)==typeof("")&&wcfString!=null&&wcfString.length>0){var encoded=wcfString;
var encodeMap=Telerik.Sitefinity._Implementation.get_encodeWcfMap();
for(var codeSymbol in encodeMap){encoded=encoded.replace(codeSymbol,encodeMap[codeSymbol],"g");
}return encoded;
}else{return"";
}};
Telerik.Sitefinity.decodeWcfString=function(wcfString){if(typeof(wcfString)==typeof("")&&wcfString!=null&&wcfString.length>0){var decoded=wcfString;
var decodeMap=Telerik.Sitefinity._Implementation.get_decodeWcfMap();
for(var decodeSymbol in decodeMap){decoded=decoded.replace(decodeSymbol,decodeMap[decodeSymbol],"g");
}return decoded;
}else{return"";
}};
Telerik.Sitefinity.stripHtml=function(text){var div=document.createElement("div");
div.innerHTML="<b>txt</b><br/>  another word";
var txt=div.textContent;
delete div;
return txt;
};
Telerik.Sitefinity.cleanjQueryData=function(domElement){domElement.innerHTML=templateElement.innerHTML.replace(/ jQuery\d+="(?:\d+|null)"/g,"");
domElement.instantiateIn(itemContainer,null,dataItem);
};
Telerik.Sitefinity.centerWindowHorizontally=function(radWindow,topOffset){var viewPortWidth=$(window).width();
var viewPortScrollTop=$(window).scrollTop();
var viewPortScrollLeft=$(window).scrollLeft();
var windowWidth=radWindow.get_width();
var y=parseInt(topOffset||50+viewPortScrollTop);
var x=parseInt((viewPortWidth-windowWidth)/2)+viewPortScrollLeft;
radWindow.moveTo(x,y);
};
Telerik.Sitefinity.setUrlParameter=function(url,parameterName,parameterValue){if((url==null)||(url.length==0)){url=document.location.href;
}var urlParts=url.split("?");
var newQueryString="";
var parameterNameLower=parameterName.toLowerCase();
if(urlParts.length>1){var parameters=urlParts[1].split("&");
for(var i=0,length=parameters.length;
i<length;
i++){var parameterParts=parameters[i].split("=");
if(parameterParts[0].toLowerCase()!=parameterNameLower){if(newQueryString==""){newQueryString="?";
}else{newQueryString+="&";
}newQueryString+=parameterParts[0]+"="+parameterParts[1];
}}}if(newQueryString==""){newQueryString="?";
}else{newQueryString+="&";
}newQueryString+=parameterName+"="+parameterValue;
return urlParts[0]+newQueryString;
};
Telerik.Sitefinity.setPropertyValueInCookie=function(cookieKey,property,value){if(jQuery&&typeof(jQuery.cookie)==="function"){var cookieValue=jQuery.cookie(cookieKey);
var properties=[];
var hasPropertyValue=false;
if(cookieValue!=null){properties=Telerik.Sitefinity.JSON.parse(cookieValue);
for(var i=0;
i<properties.length;
i++){if(properties[i].Key==property){properties[i].Value=value;
hasPropertyValue=true;
}}}if(!hasPropertyValue){var propertyObject={};
propertyObject.Key=property;
propertyObject.Value=value;
properties.push(propertyObject);
}jQuery.cookie(cookieKey,Telerik.Sitefinity.JSON.stringify(properties),{expires:2020});
}else{throw new Error("jQuery.cookie library is not loaded!");
}};
if(!this.Telerik.Sitefinity.JSON){this.Telerik.Sitefinity.JSON={};
}(function(){function f(n){return n<10?"0"+n:n;
}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(key){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null;
};
String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(key){return this.valueOf();
};
}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;
function quote(string){escapable.lastIndex=0;
return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];
return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4);
})+'"':'"'+string+'"';
}function str(key,holder){var i,k,v,length,mind=gap,partial,value=holder[key];
if(value&&typeof value==="object"&&typeof value.toJSON==="function"){value=value.toJSON(key);
}if(typeof rep==="function"){value=rep.call(holder,key,value);
}switch(typeof value){case"string":return quote(value);
case"number":return isFinite(value)?String(value):"null";
case"boolean":case"null":return String(value);
case"object":if(!value){return"null";
}gap+=indent;
partial=[];
if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;
for(i=0;
i<length;
i+=1){partial[i]=str(i,value)||"null";
}v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";
gap=mind;
return v;
}if(rep&&typeof rep==="object"){length=rep.length;
for(i=0;
i<length;
i+=1){k=rep[i];
if(typeof k==="string"){v=str(k,value);
if(v){partial.push(quote(k)+(gap?": ":":")+v);
}}}}else{for(k in value){if(Object.hasOwnProperty.call(value,k)){v=str(k,value);
if(v){partial.push(quote(k)+(gap?": ":":")+v);
}}}}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";
gap=mind;
return v;
}}if(typeof Telerik.Sitefinity.JSON.stringify!=="function"){Telerik.Sitefinity.JSON.stringify=function(value,replacer,space){var i;
gap="";
indent="";
if(typeof space==="number"){for(i=0;
i<space;
i+=1){indent+=" ";
}}else{if(typeof space==="string"){indent=space;
}}rep=replacer;
if(replacer&&typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")){throw new Error("JSON.stringify");
}return str("",{"":value});
};
}if(typeof Telerik.Sitefinity.JSON.parse!=="function"){Telerik.Sitefinity.JSON.parse=function(text,reviver){var j;
function walk(holder,key){var k,v,value=holder[key];
if(value&&typeof value==="object"){for(k in value){if(Object.hasOwnProperty.call(value,k)){v=walk(value,k);
if(v!==undefined){value[k]=v;
}else{delete value[k];
}}}}return reviver.call(holder,key,value);
}text=String(text);
cx.lastIndex=0;
if(cx.test(text)){text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4);
});
}if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");
return typeof reviver==="function"?walk({"":j},""):j;
}throw new SyntaxError("JSON.parse");
};
}}());
Telerik.Sitefinity.CommandEventArgs=function(commandName,commandArgument){this._commandName=commandName;
this._commandArgument=commandArgument;
this._cancel=null;
Telerik.Sitefinity.CommandEventArgs.initializeBase(this);
};
Telerik.Sitefinity.CommandEventArgs.prototype={initialize:function(){Telerik.Sitefinity.CommandEventArgs.callBaseMethod(this,"initialize");
},dispose:function(){Telerik.Sitefinity.CommandEventArgs.callBaseMethod(this,"dispose");
},get_commandName:function(){return this._commandName;
},get_commandArgument:function(){return this._commandArgument;
},get_cancel:function(){return this._cancel;
},set_cancel:function(value){this._cancel=value;
}};
Telerik.Sitefinity.CommandEventArgs.registerClass("Telerik.Sitefinity.CommandEventArgs",Sys.CancelEventArgs);
Telerik.Sitefinity.WorkflowDialogClosedEventArgs=function(commandName,operationName,contextBag,executeCommandOnClose){this._commandName=commandName;
this._operationName=operationName;
this._contextBag=contextBag;
this._executeCommandOnClose=executeCommandOnClose;
this._cancel=null;
Telerik.Sitefinity.WorkflowDialogClosedEventArgs.initializeBase(this);
};
Telerik.Sitefinity.WorkflowDialogClosedEventArgs.prototype={initialize:function(){Telerik.Sitefinity.WorkflowDialogClosedEventArgs.callBaseMethod(this,"initialize");
},dispose:function(){Telerik.Sitefinity.WorkflowDialogClosedEventArgs.callBaseMethod(this,"dispose");
},get_commandName:function(){return this._commandName;
},get_operationName:function(){return this._operationName;
},get_contextBag:function(){return this._contextBag;
},get_executeCommandOnClose:function(){return this._executeCommandOnClose;
},get_cancel:function(){return this._cancel;
},set_cancel:function(value){this._cancel=value;
}};
Telerik.Sitefinity.WorkflowDialogClosedEventArgs.registerClass("Telerik.Sitefinity.WorkflowDialogClosedEventArgs",Sys.CancelEventArgs);
Telerik.Sitefinity.PreventCommandEventArgs=function(commandName,commandArgument){Telerik.Sitefinity.PreventCommandEventArgs.initializeBase(this);
this._cancel=false;
};
Telerik.Sitefinity.PreventCommandEventArgs.prototype={get_cancel:function(){return this._cancel;
},set_cancel:function(value){this._cancel=value;
}};
Telerik.Sitefinity.PreventCommandEventArgs.registerClass("Telerik.Sitefinity.PreventCommandEventArgs",Telerik.Sitefinity.CommandEventArgs);
Telerik.Sitefinity.DialogClosedEventArgs=function(isCreated,isUpdated,dataItem,context){this._isCreated=isCreated;
this._isUpdated=isUpdated;
this._dataItem=dataItem;
this._context=null;
if(context){this._context=context;
}Telerik.Sitefinity.DialogClosedEventArgs.initializeBase(this);
};
Telerik.Sitefinity.DialogClosedEventArgs.prototype={initialize:function(){Telerik.Sitefinity.DialogClosedEventArgs.callBaseMethod(this,"initialize");
},dispose:function(){Telerik.Sitefinity.DialogClosedEventArgs.callBaseMethod(this,"dispose");
},get_isCreated:function(){return this._isCreated;
},get_isUpdated:function(){return this._isUpdated;
},get_dataItem:function(){return this._dataItem;
},get_context:function(){return this._context;
}};
Telerik.Sitefinity.DialogClosedEventArgs.registerClass("Telerik.Sitefinity.DialogClosedEventArgs",Sys.CancelEventArgs);
Telerik.Sitefinity.FormCreatedEventArgs=function(isNew,dataKey,dataItem,commandName,params,context,commandArgument){this._isNew=isNew;
this._dataKey=dataKey;
this._dataItem=dataItem;
this._commandName=commandName;
this._params=params;
this._context=null;
if(context){this._context=context;
}this._commandArgument=commandArgument;
Telerik.Sitefinity.FormCreatedEventArgs.initializeBase(this);
};
Telerik.Sitefinity.FormCreatedEventArgs.prototype={initialize:function(){Telerik.Sitefinity.FormCreatedEventArgs.callBaseMethod(this,"initialize");
},dispose:function(){Telerik.Sitefinity.FormCreatedEventArgs.callBaseMethod(this,"dispose");
},get_isNew:function(){return this._isNew;
},get_dataKey:function(){return this._dataKey;
},get_dataItem:function(){return this._dataItem;
},get_commandName:function(){return this._commandName;
},get_params:function(){return this._params;
},get_context:function(){return this._context;
},get_commandArgument:function(){return this._commandArgument;
}};
Telerik.Sitefinity.FormCreatedEventArgs.registerClass("Telerik.Sitefinity.FormCreatedEventArgs",Sys.EventArgs);
Telerik.Sitefinity.FormClosingEventArgs=function(isNew,isDirty,dataItem,context,commandArgument){this._isNew=isNew;
this._isDirty=isDirty;
this._dataItem=dataItem;
this._context=context;
this._commandArgument=commandArgument;
Telerik.Sitefinity.FormClosingEventArgs.initializeBase(this);
};
Telerik.Sitefinity.FormClosingEventArgs.prototype={initialize:function(){Telerik.Sitefinity.FormClosingEventArgs.callBaseMethod(this,"initialize");
},dispose:function(){Telerik.Sitefinity.FormClosingEventArgs.callBaseMethod(this,"dispose");
},get_isNew:function(){return this._isNew;
},get_isDirty:function(){return this._isDirty;
},get_dataItem:function(){return this._dataItem;
},get_context:function(){return this._context;
},get_commandArgument:function(){return this._commandArgument;
}};
Telerik.Sitefinity.FormClosingEventArgs.registerClass("Telerik.Sitefinity.FormClosingEventArgs",Sys.CancelEventArgs);
String.prototype.trim=function(){return this.replace(/^\s+|\s+$/g,"");
};
String.prototype.ltrim=function(){return this.replace(/^\s+/,"");
};
String.prototype.rtrim=function(){return this.replace(/\s+$/,"");
};
String.prototype.utf8Encode=function(){return unescape(encodeURIComponent(this));
};
String.prototype.utf8Decode=function(){var res="";
try{res=decodeURIComponent(escape(this));
}catch(err){res=decodeURIComponent(this);
}return res;
};
String.prototype.base64Encode=function(){var keyStr="ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=";
var output="";
var chr1,chr2,chr3,enc1,enc2,enc3,enc4;
var i=0;
input=this.utf8Encode();
while(i<this.length){chr1=this.charCodeAt(i++);
chr2=this.charCodeAt(i++);
chr3=this.charCodeAt(i++);
enc1=chr1>>2;
enc2=((chr1&3)<<4)|(chr2>>4);
enc3=((chr2&15)<<2)|(chr3>>6);
enc4=chr3&63;
if(isNaN(chr2)){enc3=enc4=64;
}else{if(isNaN(chr3)){enc4=64;
}}output=output+keyStr.charAt(enc1)+keyStr.charAt(enc2)+keyStr.charAt(enc3)+keyStr.charAt(enc4);
}return output;
};
Type.registerNamespace("Telerik.Sitefinity._Implementation");
Telerik.Sitefinity._Implementation.get_encodeWcfMap=function(){var encodeMap=new Array();
encodeMap["."]="__dot__";
encodeMap["]"]="__rsb__";
encodeMap["["]="__lsb__";
encodeMap["}"]="__rcb__";
encodeMap["{"]="__lcb__";
encodeMap["`"]="__gr__";
encodeMap[","]="__cm__";
encodeMap[" "]="__sp__";
encodeMap["="]="__eq__";
encodeMap["#"]="__pd__";
encodeMap["?"]="__qm__";
encodeMap[":"]="__cl__";
return encodeMap;
};
Telerik.Sitefinity._Implementation.get_decodeWcfMap=function(){var encodeMap=get_encodeWcfMap();
var decodeMap=new Array();
for(var codeEntry in encodeMap){decodeMap[encodeMap[codeEntry]]=codeEntry;
}return decodeMap;
};
if(!Array.prototype.indexOf){Array.prototype.indexOf=function(elt){var len=this.length;
var from=Number(arguments[1])||0;
from=(from<0)?Math.ceil(from):Math.floor(from);
if(from<0){from+=len;
}for(;
from<len;
from++){if(from in this&&this[from]===elt){return from;
}}return -1;
};
}
/* END Telerik.Sitefinity.Web.SitefinityJS.Telerik.Sitefinity.js */
/* START Telerik.Sitefinity.Web.SitefinityJS.Utility.Querystring.js */
Type.registerNamespace("Telerik.Sitefinity.Web.SitefinityJS.Utility");
Telerik.Sitefinity.Web.SitefinityJS.Utility.Querystring=function(qs){this.params={};
this.keys=new Array();
if(qs==null){qs=location.search.substring(1,location.search.length);
}if(qs.length==0){return;
}qs=qs.replace(/\+/g," ");
var args=qs.split("&");
for(var i=0;
i<args.length;
i++){var pair=args[i].split("=");
var name=decodeURIComponent(pair[0]).toLowerCase();
var value=(pair.length==2)?decodeURIComponent(pair[1]):name;
this.params[name]=value;
this.keys[i]=name;
}};
Telerik.Sitefinity.Web.SitefinityJS.Utility.Querystring.prototype={get:function(key,default_){var value=this.params[key.toLowerCase()];
return(value!=null)?value:default_;
},contains:function(key){var value=this.params[key.toLowerCase()];
return(value!=null);
},set:function(key,value){var lowerKey=key.toLowerCase();
if(this.keys.indexOf(lowerKey)==-1){this.keys.push(lowerKey);
}this.params[lowerKey]=value;
},toString:function(appendQuestionMark){if(this.keys.length>0){var query=appendQuestionMark?"?":"";
for(var i=0;
i<this.keys.length;
i++){if(i>0){query+="&";
}query+=this.keys[i]+"="+this.params[this.keys[i]];
}return query;
}return"";
}};

/* END Telerik.Sitefinity.Web.SitefinityJS.Utility.Querystring.js */
/* START Telerik.Sitefinity.Web.Scripts.Url.js */
var Url={encode:function(string){return this._urlEncode(this._utf8Encode(string));
},decode:function(string){return this._utf8Decode(this._urlDecode(string));
},_urlEncode:function(clearString){var output="";
var x=0;
clearString=clearString.toString();
var regex=/(^[a-zA-Z0-9_.]*)/;
while(x<clearString.length){var match=regex.exec(clearString.substr(x));
if(match!=null&&match.length>1&&match[1]!=""){output+=match[1];
x+=match[1].length;
}else{if(clearString[x]==" "){output+="+";
}else{var charCode=clearString.charCodeAt(x);
var hexVal=charCode.toString(16);
output+="%"+(hexVal.length<2?"0":"")+hexVal.toUpperCase();
}x++;
}}return output;
},_urlDecode:function(encodedString){var output=encodedString;
var binVal,thisString;
var myregexp=/(%[^%]{2})/;
while((match=myregexp.exec(output))!=null&&match.length>1&&match[1]!=""){binVal=parseInt(match[1].substr(1),16);
thisString=String.fromCharCode(binVal);
output=output.replace(match[1],thisString);
}return output;
},_utf8Encode:function(string){var utftext="";
if(string){string=string.replace(/\r\n/g,"\n");
for(var n=0;
n<string.length;
n++){var c=string.charCodeAt(n);
if(c<128){utftext+=String.fromCharCode(c);
}else{if((c>127)&&(c<2048)){utftext+=String.fromCharCode((c>>6)|192);
utftext+=String.fromCharCode((c&63)|128);
}else{utftext+=String.fromCharCode((c>>12)|224);
utftext+=String.fromCharCode(((c>>6)&63)|128);
utftext+=String.fromCharCode((c&63)|128);
}}}}return utftext;
},_utf8Decode:function(utftext){var string="";
var i=0;
var c=c1=c2=0;
if(utftext){while(i<utftext.length){c=utftext.charCodeAt(i);
if(c<128){string+=String.fromCharCode(c);
i++;
}else{if((c>191)&&(c<224)){c2=utftext.charCodeAt(i+1);
string+=String.fromCharCode(((c&31)<<6)|(c2&63));
i+=2;
}else{c2=utftext.charCodeAt(i+1);
c3=utftext.charCodeAt(i+2);
string+=String.fromCharCode(((c&15)<<12)|((c2&63)<<6)|(c3&63));
i+=3;
}}}}return string;
}};

/* END Telerik.Sitefinity.Web.Scripts.Url.js */
/* START SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.js */
Type.registerNamespace("SitefinityWebApp.Widgets.AutocompleteSearch");

SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget = function (element) {
    SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.initializeBase(this, [element]);

    this._searchTextBox = null;
    this._searchButton = null;
    this._wordsMode = null;
    this._resultsUrl = null;
    this._indexCatalogue = null;

    this._keyPressDelegate = null;
    this._clickDelegate = null;
};

SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.prototype = {

    initialize: function () {
        SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.callBaseMethod(this, "initialize");

        if (this._searchTextBox) {
            this._keyPressDelegate = Function.createDelegate(this, this._keyPressHandler);
            $addHandler(this._searchTextBox, "keypress", this._keyPressDelegate);
        }

        if (this._searchButton) {
            this._clickDelegate = Function.createDelegate(this, this._clickHandler);
            $addHandler(this._searchButton, "click", this._clickDelegate);
        }
    },

    dispose: function () {
        if (this._searchTextBox && this._keyPressDelegate) {
            if (this._searchTextBox) {
                $removeHandler(this._searchTextBox, "keypress", this._keyPressDelegate);
            }
            delete this._keyPressDelegate;
        }
        if (this._searchButton && this._clickDelegate) {
            if (this._searchButton) {
                $removeHandler(this._searchButton, "click", this._clickDelegate);
            }
            delete this._clickDelegate;
        }
        SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.callBaseMethod(this, "dispose");
    },

    /* -------------------- Public methods ---------------- */

    navigateToResults: function (e) {
        if (!e) var e = window.event;

        if (e.stopPropagation) {
            e.stopPropagation();
        }
        else {
            e.cancelBubble = true;
        }
        if (e.preventDefault) {
            e.preventDefault();
        }
        else {
            e.returnValue = false;
        }

        if (this._searchTextBox.value && this._indexCatalogue) {
            window.location = this.getLocation();
        }
    },

    getLocation: function () {
        var query = this._searchTextBox.value;
        var separator = (this._resultsUrl.indexOf("?") == -1) ? "?" : "&";
        var indexCatalogue = String.format("{0}indexCatalogue={1}", separator, Url.encode(this._indexCatalogue));
        var searchQuery = String.format("&searchQuery={0}", Url.encode(query));
        var wordsMode = String.format("&wordsMode={0}", this._wordsMode);
        var url = this._resultsUrl + indexCatalogue + searchQuery + wordsMode;

        return url;
    },

    /* -------------------- Event handlers ---------------- */

    _keyPressHandler: function (e) {
        if (!e) var e = window.event;

        var keyCode = null;
        if (e.keyCode) {
            keyCode = e.keyCode;
        }
        else {
            keyCode = e.charCode;
        }

        if (keyCode == 13) {
            this.navigateToResults(e);
        }
    },

    _clickHandler: function (e) {
        this.navigateToResults(e);
    },

    /* -------------------- properties ---------------- */

    get_searchTextBox: function () {
        return this._searchTextBox;
    },
    set_searchTextBox: function (value) {
        this._searchTextBox = value;
    },

    get_searchButton: function () {
        return this._searchButton;
    },
    set_searchButton: function (value) {
        this._searchButton = value;
    },

    get_wordsMode: function () {
        return this._wordsMode;
    },
    set_wordsMode: function (value) {
        this._wordsMode = value;
    },

    get_resultsUrl: function () {
        return this._resultsUrl;
    },
    set_resultsUrl: function (value) {
        this._resultsUrl = value;
    },

    get_indexCatalogue: function () {
        return this._indexCatalogue;
    },
    set_indexCatalogue: function (value) {
        this._indexCatalogue = value;
    }
};
SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.registerClass("SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget", Sys.UI.Control);

SitefinityWebApp.Widgets.AutocompleteSearch.WordsMode = function () {
    /// <summary>
    /// Represents the different client side words modes
    /// </summary>
};

SitefinityWebApp.Widgets.AutocompleteSearch.WordsMode.prototype = {
    AllWords: 0,
    AnyWord: 1
};
SitefinityWebApp.Widgets.AutocompleteSearch.WordsMode.registerEnum("Telerik.Sitefinity.Web.UI.Fields.FieldDisplayMode");

/* END SitefinityWebApp.Widgets.AutocompleteSearch.AutocompleteSearchWidget.js */
/* START Telerik.Sitefinity.Search.Impl.Web.UI.Scripts.SearchBox.js */
Type.registerNamespace("Telerik.Sitefinity.Services.Search.Web.UI.Public");

Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox = function (element) {
    Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox.initializeBase(this, [element]);

    this._searchTextBox = null;
    this._searchButton = null;
    this._wordsMode = null;
    this._resultsUrl = null;
    this._indexCatalogue = null;

    this._keyPressDelegate = null;
    this._clickDelegate = null;
}

Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox.prototype = {

    initialize: function () {
        Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox.callBaseMethod(this, "initialize");

        if (this._searchTextBox) {
            this._keyPressDelegate = Function.createDelegate(this, this._keyPressHandler);
            $addHandler(this._searchTextBox, "keypress", this._keyPressDelegate);
        }

        if (this._searchButton) {
            this._clickDelegate = Function.createDelegate(this, this._clickHandler);
            $addHandler(this._searchButton, "click", this._clickDelegate);
        }
    },

    dispose: function () {
        if (this._searchTextBox && this._keyPressDelegate) {
            if (this._searchTextBox) {
                $removeHandler(this._searchTextBox, "keypress", this._keyPressDelegate);
            }
            delete this._keyPressDelegate;
        }
        if (this._searchButton && this._clickDelegate) {
            if (this._searchButton) {
                $removeHandler(this._searchButton, "click", this._clickDelegate);
            }
            delete this._clickDelegate;
        }
        Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox.callBaseMethod(this, "dispose");
    },

    /* -------------------- Public methods ---------------- */

    navigateToResults: function (e) {
        if (!e) var e = window.event;

        if (e.stopPropagation) {
            e.stopPropagation();
        }
        else {
            e.cancelBubble = true;
        }
        if (e.preventDefault) {
            e.preventDefault();
        }
        else {
            e.returnValue = false;
        }

        if (this._searchTextBox.value && this._indexCatalogue) {
            window.location = this.getLocation();
        }
    },

    getLocation: function () {
        var query = this._searchTextBox.value;
        var separator = (this._resultsUrl.indexOf("?") == -1) ? "?" : "&";
        var indexCatalogue = String.format("{0}indexCatalogue={1}", separator, Url.encode(this._indexCatalogue));
        var searchQuery = String.format("&searchQuery={0}", Url.encode(query));
        var wordsMode = String.format("&wordsMode={0}", this._wordsMode);
        var url = this._resultsUrl + indexCatalogue + searchQuery + wordsMode;

        return url;
    },

    /* -------------------- Event handlers ---------------- */

    _keyPressHandler: function (e) {
        if (!e) var e = window.event;

        var keyCode = null;
        if (e.keyCode) {
            keyCode = e.keyCode;
        }
        else {
            keyCode = e.charCode;
        }

        if (keyCode == 13) {
            this.navigateToResults(e);
        }
    },

    _clickHandler: function (e) {
        this.navigateToResults(e);
    },

    /* -------------------- properties ---------------- */

    get_searchTextBox: function () {
        return this._searchTextBox;
    },
    set_searchTextBox: function (value) {
        this._searchTextBox = value;
    },

    get_searchButton: function () {
        return this._searchButton;
    },
    set_searchButton: function (value) {
        this._searchButton = value;
    },

    get_wordsMode: function () {
        return this._wordsMode;
    },
    set_wordsMode: function (value) {
        this._wordsMode = value;
    },

    get_resultsUrl: function () {
        return this._resultsUrl;
    },
    set_resultsUrl: function (value) {
        this._resultsUrl = value;
    },

    get_indexCatalogue: function () {
        return this._indexCatalogue;
    },
    set_indexCatalogue: function (value) {
        this._indexCatalogue = value;
    }
};
Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox.registerClass("Telerik.Sitefinity.Services.Search.Web.UI.Public.SearchBox", Sys.UI.Control);

Telerik.Sitefinity.Services.Search.Web.UI.Public.WordsMode = function () {
    /// <summary>
    /// Represents the different client side words modes
    /// </summary>
};

Telerik.Sitefinity.Services.Search.Web.UI.Public.WordsMode.prototype = {
    AllWords: 0,
    AnyWord: 1
};
Telerik.Sitefinity.Services.Search.Web.UI.Public.WordsMode.registerEnum("Telerik.Sitefinity.Services.Search.Web.UI.Public.WordsMode");

/* END Telerik.Sitefinity.Search.Impl.Web.UI.Scripts.SearchBox.js */
if(typeof(Sys)!=='undefined')Sys.Application.notifyScriptLoaded();
(function() {
    function loadHandler() {
        var hf = $get('ctl09_TSM');
        if (!hf) return;
        if (!hf._RSM_init) { hf._RSM_init = true; hf.value = ''; }
        hf.value += ';;Telerik.Sitefinity:en-US:b32eae45-c0e9-40fb-a6c7-4789a371d8b6:993d8e92:5b182b17:3b9a1b05;SitefinityWebApp, Version=5.4.4010.0, Culture=neutral, PublicKeyToken=null:en-US:22ef2ad6-63d3-47cd-9151-4d65ed8d8325:807ed534;Telerik.Sitefinity.Search.Impl, Version=5.4.4010.0, Culture=neutral, PublicKeyToken=b28c218413bdf563:en-US:b69a937b-4441-4700-bea2-119dd5c3612a:7561727d';                                    
        Sys.Application.remove_load(loadHandler);
    };
    Sys.Application.add_load(loadHandler);
})();
