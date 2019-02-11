require=function a(b,c,d){function e(g,h){if(!c[g]){if(!b[g]){var i="function"==typeof require&&require;if(!h&&i)return i(g,!0);if(f)return f(g,!0);var j=new Error("Cannot find module '"+g+"'");throw j.code="MODULE_NOT_FOUND",j}var k=c[g]={exports:{}};b[g][0].call(k.exports,function(a){var c=b[g][1][a];return e(c||a)},k,k.exports,a,b,c,d)}return c[g].exports}for(var f="function"==typeof require&&require,g=0;g<d.length;g++)e(d[g]);return e}({1:[function(a,b,c){"use strict";var d=["I","I","II","III","IV","V","VI","VII","VIII","IX","X"],e={decToRoman:function(a){var b=Math.round(a||0);return b<0&&(b=0),b>d.length-1&&(b=d.length-1),d[b]},formatDate:function(a){var b=new Date(a),c=b.getUTCFullYear(),d=b.getUTCMonth()+1,e=b.getUTCDate(),f=b.getUTCHours(),g=b.getUTCMinutes(),h=b.getUTCSeconds();return d<10&&(d="0"+d),e<10&&(e="0"+e),f<10&&(f="0"+f),g<10&&(g="0"+g),h<10&&(h="0"+h),c+"-"+d+"-"+e+" "+f+":"+g+":"+h+" UTC"},formatDepth:function(a){return a.toFixed(1)},formatMagnitude:function(a){return a.toFixed(1)}};b.exports=e},{}],"listwidget/DYFIList":[function(a,b,c){"use strict";var d=a("listwidget/EqList"),e=a("listwidget/Util"),f=function(a){var b;return b=d(a),b.getClassName=function(){return"eqlist dyfilist"},b.getEventAside=function(a){return(a.properties.felt||0)+" responses"},b.getEventTitle=function(a){return a.properties.title},b.getEventValue=function(a){var b=e.decToRoman(a.properties.cdi);return'<span class="roman mmi'+b+'">'+b+"</span>"},b.includeEvent=function(a){return-1!==a.properties.types.indexOf("dyfi")},a=null,b};b.exports=f},{"listwidget/EqList":"listwidget/EqList","listwidget/Util":1}],"listwidget/EqList":[function(a,b,c){"use strict";var d=a("listwidget/Util"),e="https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/",f=e+"significant_month.geojson",g=e+"significant_week.geojson",h=e+"significant_day.geojson",i=e+"significant_hour.geojson",j=e+"all_month.geojson",k=e+"all_week.geojson",l=e+"all_day.geojson",m=e+"all_hour.geojson",n=e+"4.5_month.geojson",o=e+"4.5_week.geojson",p=e+"4.5_day.geojson",q=e+"4.5_hour.geojson",r=e+"2.5_month.geojson",s=e+"2.5_week.geojson",t=e+"2.5_day.geojson",u=e+"2.5_hour.geojson",v=e+"1.0_month.geojson",w=e+"1.0_week.geojson",x=e+"1.0_day.geojson",y=e+"1.0_hour.geojson",z=function(a){var b,c,e,g,h,i,j,k,l,m,n,o,p;return b={},c=function(a){e=a.container||document.createElement("div"),h=a.feed||f,i=a.includeEvent||null,j=a.compareEvents||null,g=a.css||null,!1!==a.load&&b.load()},k=function(a){var b=document.createElement("p");return b.className="error",b.innerHTML=a,b},l=function(){e.innerHTML=""},m=function(){var a=new XMLHttpRequest;a.open("GET",h,!0),a.addEventListener("load",function(){p(JSON.parse(a.responseText))}),a.send()},n=function(a){var c,d=a.slice(0),e=a.length-1;for(c=i||b.includeEvent;e>=0;e--)c(a[e])||d.splice(e,1);return d},o=function(){var a=e.appendChild(document.createElement("p"));a.className="eqlist-loading",a.innerHTML='Fetching list of earthquakes. If this takes longer than is reasonable, you can <a href="'+h+'">view the source data</a>.'},p=b.render=function(a){var c,d=n(a.features),f=0,g=d.length,h=[];if(0===g)return l(),void e.appendChild(k("No Events Found."));for(d.sort(j||b.compareEvents),f=0;f<g;f++)h.push(b.getEventMarkup(d[f]));l(),c=document.createElement("ol"),c.className=b.getClassName().toLowerCase(),c.innerHTML=h.join(""),e.appendChild(c)},b.compareEvents=function(a,b){return b.properties.time-a.properties.time},b.getClassName=function(){return"EqList"},b.getEventAside=function(a){return d.formatDepth(a.geometry.coordinates[2])+" km"},b.getEventMarkup=function(a){var c=a.properties;return['<li class="eqitem">','<span class="value">',b.getEventValue(a),"</span>",'<a class="title" href="',c.url,'">',b.getEventTitle(a),"</a>",'<div class="row">','<span class="subtitle column mobile-three-of-four">',b.getEventSubtitle(a),"</span>",'<span class="aside column mobile-one-of-four">',b.getEventAside(a),"</span>","</div>","</li>"].join("")},b.getEventSubtitle=function(a){return d.formatDate(a.properties.time)},b.getEventTitle=function(a){return a.properties.place},b.getEventValue=function(a){return d.formatMagnitude(a.properties.mag)},b.includeEvent=function(){return!0},b.load=function(){o(),m()},c(a||{}),a=null,b};z.SIG_URL_MONTH=f,z.SIG_URL_WEEK=g,z.SIG_URL_DAY=h,z.SIG_URL_HOUR=i,z.ALL_URL_MONTH=j,z.ALL_URL_WEEK=k,z.ALL_URL_DAY=l,z.ALL_URL_HOUR=m,z.M45_URL_MONTH=n,z.M45_URL_WEEK=o,z.M45_URL_DAY=p,z.M45_URL_HOUR=q,z.M25_URL_MONTH=r,z.M25_URL_WEEK=s,z.M25_URL_DAY=t,z.M25_URL_HOUR=u,z.M1_URL_MONTH=v,z.M1_URL_WEEK=w,z.M1_URL_DAY=x,z.M1_URL_HOUR=y,b.exports=z},{"listwidget/Util":1}],"listwidget/PAGERList":[function(a,b,c){"use strict";var d=a("listwidget/EqList"),e=a("listwidget/Util"),f=function(a){var b;return b=d(a),b.getClassName=function(){return"eqlist pagerlist"},b.getEventAside=function(a){var b=e.decToRoman(a.properties.mmi);return'<span class="roman mmi'+b+'">'+b+"</span>"},b.getEventTitle=function(a){return a.properties.title},b.getEventValue=function(a){return'<span class="pager-alertlevel pager-alertlevel-'+a.properties.alert+'">'+a.properties.alert[0].toUpperCase()+a.properties.alert.slice(1)+"</span>"},b.includeEvent=function(a){return-1!==a.properties.types.indexOf("losspager")},a=null,b};b.exports=f},{"listwidget/EqList":"listwidget/EqList","listwidget/Util":1}],"listwidget/ShakeMapList":[function(a,b,c){"use strict";var d=a("listwidget/EqList"),e=a("listwidget/Util"),f=function(a){var b;return b=d(a),b.getClassName=function(){return"eqlist shakemaplist"},b.getEventAside=function(a){return a.id},b.getEventTitle=function(a){return a.properties.title},b.getEventValue=function(a){var b=e.decToRoman(a.properties.mmi);return'<span class="roman mmi'+b+'">'+b+"</span>"},b.includeEvent=function(a){return-1!==a.properties.types.indexOf("shakemap")},a=null,b};b.exports=f},{"listwidget/EqList":"listwidget/EqList","listwidget/Util":1}]},{},[]);