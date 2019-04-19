!function(t){var i;window.UIkit&&(i=t(UIkit)),"function"==typeof define&&define.amd&&define("uikit-tooltip",["uikit"],function(){return i||t(UIkit)})}(function(t){"use strict";var i,o,e;return t.component("tooltip",{defaults:{offset:5,pos:"top",animation:!1,delay:0,cls:"",activeClass:"uk-active",src:function(t){var i=t.attr("title");return void 0!==i&&t.data("cached-title",i).removeAttr("title"),t.data("cached-title")}},tip:"",boot:function(){t.$html.on("mouseenter.tooltip.uikit focus.tooltip.uikit","[data-uk-tooltip]",function(i){var o=t.$(this);o.data("tooltip")||(t.tooltip(o,t.Utils.options(o.attr("data-uk-tooltip"))),o.trigger("mouseenter"))})},init:function(){var o=this;i||(i=t.$('<div class="uk-tooltip"></div>').appendTo("body")),this.on({focus:function(t){o.show()},blur:function(t){o.hide()},mouseenter:function(t){o.show()},mouseleave:function(t){o.hide()}})},show:function(){if(this.tip="function"==typeof this.options.src?this.options.src(this.element):this.options.src,o&&clearTimeout(o),e&&clearInterval(e),"string"==typeof this.tip&&this.tip.length){i.stop().css({top:-2e3,visibility:"hidden"}).removeClass(this.options.activeClass).show(),i.html('<div class="uk-tooltip-inner">'+this.tip+"</div>");var s=this,n=t.$.extend({},this.element.offset(),{width:this.element[0].offsetWidth,height:this.element[0].offsetHeight}),l=i[0].offsetWidth,f=i[0].offsetHeight,a="function"==typeof this.options.offset?this.options.offset.call(this.element):this.options.offset,p="function"==typeof this.options.pos?this.options.pos.call(this.element):this.options.pos,h=p.split("-"),c={display:"none",visibility:"visible",top:n.top+n.height+f,left:n.left};if("fixed"==t.$html.css("position")||"fixed"==t.$body.css("position")){var r=t.$("body").offset(),d=t.$("html").offset(),u={top:d.top+r.top,left:d.left+r.left};n.left-=u.left,n.top-=u.top}"left"!=h[0]&&"right"!=h[0]||"right"!=t.langdirection||(h[0]="left"==h[0]?"right":"left");var m={bottom:{top:n.top+n.height+a,left:n.left+n.width/2-l/2},top:{top:n.top-f-a,left:n.left+n.width/2-l/2},left:{top:n.top+n.height/2-f/2,left:n.left-l-a},right:{top:n.top+n.height/2-f/2,left:n.left+n.width+a}};t.$.extend(c,m[h[0]]),2==h.length&&(c.left="left"==h[1]?n.left:n.left+n.width-l);var v=this.checkBoundary(c.left,c.top,l,f);if(v){switch(v){case"x":p=2==h.length?h[0]+"-"+(c.left<0?"left":"right"):c.left<0?"right":"left";break;case"y":p=2==h.length?(c.top<0?"bottom":"top")+"-"+h[1]:c.top<0?"bottom":"top";break;case"xy":p=2==h.length?(c.top<0?"bottom":"top")+"-"+(c.left<0?"left":"right"):c.left<0?"right":"left"}h=p.split("-"),t.$.extend(c,m[h[0]]),2==h.length&&(c.left="left"==h[1]?n.left:n.left+n.width-l)}c.left-=t.$body.position().left,o=setTimeout(function(){i.css(c).attr("class",["uk-tooltip","uk-tooltip-"+p,s.options.cls].join(" ")),s.options.animation?i.css({opacity:0,display:"block"}).addClass(s.options.activeClass).animate({opacity:1},parseInt(s.options.animation,10)||400):i.show().addClass(s.options.activeClass),o=!1,e=setInterval(function(){s.element.is(":visible")||s.hide()},150)},parseInt(this.options.delay,10)||0)}},hide:function(){if(!this.element.is("input")||this.element[0]!==document.activeElement)if(o&&clearTimeout(o),e&&clearInterval(e),i.stop(),this.options.animation){var t=this;i.fadeOut(parseInt(this.options.animation,10)||400,function(){i.removeClass(t.options.activeClass)})}else i.hide().removeClass(this.options.activeClass)},content:function(){return this.tip},checkBoundary:function(i,o,e,s){var n="";return(i<0||i-t.$win.scrollLeft()+e>window.innerWidth)&&(n+="x"),(o<0||o-t.$win.scrollTop()+s>window.innerHeight)&&(n+="y"),n}}),t.tooltip});