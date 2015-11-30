/*!CK:1356893124!*//*1445884413,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["j6fU3"]); }

__d('getInlineBoundingRect',['Rect'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();function i(j,k){var l=j.getClientRects();if(!k||l.length===0)return h.getElementBounds(j);var m,n=false;for(var o=0;o<l.length;o++){var p=new h(Math.round(l[o].top),Math.round(l[o].right),Math.round(l[o].bottom),Math.round(l[o].left),'viewport').convertTo('document'),q=p.getPositionVector(),r=q.add(p.getDimensionVector());if(!m||q.x<=m.l&&q.y>m.t){if(n)break;m=new h(q.y,r.x,r.y,q.x,'document');}else{m.t=Math.min(m.t,q.y);m.b=Math.max(m.b,r.y);m.r=r.x;}if(p.contains(k))n=true;}if(!m)m=h.getElementBounds(j);return m;}f.exports=i;},null);
__d('AccessibleLayer',['DOM','Event','Focus','fbt'],function a(b,c,d,e,f,g,h,i,j,k){if(c.__markCompiled)c.__markCompiled();function l(m){'use strict';this._layer=m;}l.prototype.enable=function(){'use strict';this._afterShowSubscription=this._layer.subscribe('aftershow',this._onAfterShow.bind(this));};l.prototype.disable=function(){'use strict';this._listener&&this._listener.remove();this._afterShowSubscription.unsubscribe();this._listener=this._afterShowSubscription=null;};l.prototype._closeListener=function(event){'use strict';var m=this._layer.getCausalElement();if(m)if(m.tabIndex==-1){m.tabIndex=0;j.setWithoutOutline(m);}else j.set(m);this._layer.hide();};l.prototype._onAfterShow=function(){'use strict';var m=this._layer.getContentRoot();if(h.scry(m,'.layer_close_elem')[0])return;var n=h.create('a',{className:'accessible_elem layer_close_elem',href:'#',role:'button'},[k._("Close popup and return")]);h.appendContent(m,n);this._listener=i.listen(n,'click',this._closeListener.bind(this));};f.exports=l;},null);
__d('ContextualDialogARIA',['DOM'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();function i(j){'use strict';this._layer=j;}i.prototype.enable=function(){'use strict';this._subscription=this._layer.subscribe('beforeshow',this._addAriaAttribute.bind(this));};i.prototype.disable=function(){'use strict';this._subscription.unsubscribe();this._subscription=null;};i.prototype._addAriaAttribute=function(){'use strict';var j=this._layer.getCausalElement();if(!j)return;var k=h.scry(this._layer.getRoot(),'.accessible_elem');if(k.length)j.setAttribute('aria-describedby',h.getID(k[0]));};f.exports=i;},null);
__d('LayerDestroyOnHide',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();function h(i){'use strict';this._layer=i;}h.prototype.enable=function(){'use strict';var i=this._layer.destroy.bind(this._layer);this._subscription=this._layer.subscribe('hide',function(){setTimeout(i,0);});};h.prototype.disable=function(){'use strict';if(this._subscription){this._subscription.unsubscribe();this._subscription=null;}};Object.assign(h.prototype,{_subscription:null});f.exports=h;},null);
__d('LayerMouseHooks',['Arbiter','ContextualThing','Event','Layer'],function a(b,c,d,e,f,g,h,i,j,k){if(c.__markCompiled)c.__markCompiled();var l=new h();function m(n){'use strict';this._layer=n;this._subscriptions=[];this._currentlyActive=false;}m.prototype.enable=function(){'use strict';this._subscriptions=[l.subscribe('mouseenter',this._handleActive.bind(this)),l.subscribe('mouseleave',this._handleInactive.bind(this)),this._layer.subscribe('hide',(function(){this._currentlyActive=false;}).bind(this))];};m.prototype.disable=function(){'use strict';while(this._subscriptions.length)this._subscriptions.pop().unsubscribe();this._subscriptions=[];this._currentlyActive=false;};m.prototype._handleActive=function(n,o){'use strict';if(!this._currentlyActive&&this._isNodeWithinStack(o)){this._layer.inform('mouseenter');this._currentlyActive=true;}};m.prototype._handleInactive=function(n,o){'use strict';if(this._currentlyActive)if(!o||!this._isNodeWithinStack(o)){this._layer.inform('mouseleave');this._currentlyActive=false;}};m.prototype._isNodeWithinStack=function(n){'use strict';return i.containsIncludingLayers(this._layer.getContentRoot(),n);};k.subscribe('show',function(n,o){var p=o.getContentRoot(),q=[j.listen(p,'mouseenter',function(){l.inform('mouseenter',p);}),j.listen(p,'mouseleave',function(s){l.inform('mouseleave',s.getRelatedTarget());})],r=o.subscribe('hide',function(){while(q.length)q.pop().remove();r.unsubscribe();q=r=null;});});f.exports=m;},null);
__d('ContextualDialogArrow',['CSS','DOM','JSXDOM','Locale','Style','Vector','cx'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n){if(c.__markCompiled)c.__markCompiled();var o={bottom:"_53ik",top:"_53il",right:"_53im",left:"_53in"},p={above:'bottom',below:'top',left:'right',right:'left'};function q(r){'use strict';this._layer=r;}q.prototype.enable=function(){'use strict';this._subscription=this._layer.subscribe(['adjust','reposition'],this._handle.bind(this));h.addClass(this._layer.getContentRoot(),"_5v-0");};q.prototype.disable=function(){'use strict';this._subscription.unsubscribe();this._subscription=null;h.removeClass(this._layer.getContentRoot(),"_5v-0");};q.prototype._handle=function(r,s){'use strict';if(r==='adjust'){this._repositionArrow(s);}else this._repositionRoot(s);};q.prototype._repositionRoot=function(r){'use strict';var s=r.getAlignment();if(s=='center')return;var t=this._layer.getRoot(),u=this._layer.getContext(),v=r.isVertical(),w=this._layer.getArrowDimensions(),x=w.offset,y=w.length,z=m.getElementDimensions(u),aa=v?z.x:z.y;if(aa>=y+x*2)return;var ba=y/2+x,ca=aa/2,da=parseInt(ba-ca,10);if(v){var ea=null;if(s=='left'){ea=k.isRTL()?'right':'left';}else ea=k.isRTL()?'left':'right';var fa=parseInt(l.get(t,ea),10);l.set(t,ea,fa-da+'px');}else{var ga=parseInt(l.get(t,'top'),10);l.set(t,'top',ga-da+'px');}};q.prototype._repositionArrow=function(r){'use strict';var s=this._layer.getContentRoot(),t=r.getPosition(),u=p[t];for(var v in o)h.conditionClass(s,o[v],u===v);if(t=='none')return;if(!this._arrow)this._arrow=j.i({className:"_53io"});if(!i.contains(s,this._arrow))i.appendContent(s,this._arrow);l.set(this._arrow,'top','');l.set(this._arrow,'left','');l.set(this._arrow,'right','');l.set(this._arrow,'margin','');var w=q.getOffsetPercent(r),x=q.getOffset(r,w,this._layer),y=q.getOffsetSide(r);l.set(this._arrow,y,w+'%');l.set(this._arrow,'margin-'+y,x+'px');};q.getOffsetPercent=function(r){'use strict';var s=r.getAlignment(),t=r.getPosition();if(t=='above'||t=='below')if(s=='center'){return 50;}else if(s=='right')return 100;return 0;};q.getOffsetSide=function(r){'use strict';var s=r.isVertical();return s?k.isRTL()?'right':'left':'top';};q.getOffset=function(r,s,t){'use strict';var u=t.getArrowDimensions(),v=u.offset,w=u.length,x=r.getAlignment(),y=x=='center'?0:v;y+=w*s/100;if(x!='left')y*=-1;return y;};Object.assign(q.prototype,{_subscription:null,_arrow:null});f.exports=q;},null);
__d('ContextualDialogDefaultTheme',['cx'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i={wrapperClassName:"_53ip",arrowDimensions:{offset:15,length:16}};f.exports=i;},null);
__d('ContextualDialogKeepInViewport',['ContextualLayerDimensions','Event','Style','Vector','throttle'],function a(b,c,d,e,f,g,h,i,j,k,l){if(c.__markCompiled)c.__markCompiled();function m(n){'use strict';this._layer=n;this._listeners=[];this._subscription=null;this._minimumTop=null;}m.prototype.enable=function(){'use strict';var n=this._layer.getArrowDimensions();this._arrowOffset=n.offset;var o=n.length;this._arrowBuffer=this._arrowOffset+o;this._subscription=this._layer.subscribe(['show','hide','reposition'],(function(p,q){if(this._layer.isFixed())return;if(p=='reposition'){this._calculateMinimumTop(q);this._adjustForScroll();}else if(p=='show'){this._attachScroll();this._adjustForScroll();}else this._detachScroll();}).bind(this));if(this._layer.isShown())this._attachScroll();};m.prototype.disable=function(){'use strict';if(this._layer.isShown())this._detachScroll();this._subscription.unsubscribe();this._subscription=null;};m.prototype._attachScroll=function(){'use strict';var n=l(this._adjustForScroll.bind(this)),o=this._layer.getContextScrollParent()||window;this._listeners=[i.listen(o,'scroll',n),i.listen(window,'resize',n)];};m.prototype._detachScroll=function(){'use strict';while(this._listeners.length)this._listeners.pop().remove();this._listeners=[];};m.prototype._getContentHeight=function(){'use strict';if(!this._layer._contentWrapper)return 0;return k.getElementDimensions(this._layer._contentWrapper).y;};m.prototype._getContextY=function(){'use strict';return k.getElementPosition(this._layer.getContext()).y;};m.prototype._calculateMinimumTop=function(n){'use strict';if(n.isVertical())return;this._minimumTop=this._getContextY()-(this._getContentHeight()-this._arrowBuffer)+n.getOffsetY();};m.prototype._adjustForScroll=function(){'use strict';var n=this._layer.getOrientation(),o=this._layer.getContent();if(n.isVertical()||!o)return;var p=h.getViewportRect(this._layer),q=p.b-this._minimumTop;if(q<0)return;var r=this._getContentHeight(),s=r-(this._arrowBuffer+this._arrowOffset),t=Math.max(0,Math.min(s,s-(q-r)));j.set(o,'top',-t+'px');};f.exports=m;},null);
__d('ContextualDialogFitInViewport_PUSHSAFE',['Style','Vector'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j=50,k=10;function l(m){'use strict';this._layer=m;this._contentHeight=null;this._contextY=null;}l.prototype.enable=function(){'use strict';var m=this._layer.getArrowDimensions();this._arrowOffset=m.offset;var n=m.length;this._arrowBuffer=this._arrowOffset+n;this._subscription=this._layer.subscribe(['reposition'],(function(o,p){if(!this._layer.isFixed()||p.isVertical())return;this._adjustPosition();}).bind(this));};l.prototype.disable=function(){'use strict';this._subscription.unsubscribe();this._subscription=null;};l.prototype._getContentHeight=function(){'use strict';return i.getElementDimensions(this._layer._contentWrapper).y;};l.prototype._getContextY=function(){'use strict';return i.getElementPosition(this._layer.getContext(),'viewport').y;};l.prototype._adjustPosition=function(){'use strict';var m=this._getContextY(),n=this._getContentHeight();if(m===this._contextY&&n===this._contentHeight)return;this._contextY=m;this._contentHeight=n;var o=i.getViewportDimensions().y,p=Math.min(Math.max(0,m+n+k-o),Math.max(0,m-j),n-this._arrowOffset-this._arrowBuffer);h.set(this._layer.getContent(),'top',-p+'px');};f.exports=l;},null);
__d('ContextualDialog',['ContextualDialogARIA','AccessibleLayer','ContextualDialogArrow','ContextualDialogDefaultTheme','ContextualDialogKeepInViewport','ContextualDialogFitInViewport_PUSHSAFE','ContextualLayer','CSS','DOM','Event','JSXDOM','LayerButtons','LayerFormHooks','LayerRefocusOnHide','LayerHideOnTransition','LayerMouseHooks','Style','csx','cx','invariant','removeFromArray','shield'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z,aa,ba,ca){if(c.__markCompiled)c.__markCompiled();var da,ea,fa=0,ga=300;da=babelHelpers.inherits(ha,n);ea=da&&da.prototype;function ha(ia,ja){'use strict';ea.constructor.call(this,ia,ja);this._footer=null;}ha.prototype._configure=function(ia,ja){'use strict';Object.assign(ia,ia.theme||k);var ka=ia.arrowBehavior||j;ia.addedBehaviors=ia.addedBehaviors||[];ia.addedBehaviors.push(ka);ea._configure.call(this,ia,ja);this._footer=p.scry(ja,"div._572u")[0];if(this._footer)if(this._footer.children.length===1&&this._footer.children[0].nodeName==='DIV'&&this._footer.children[0].children.length===0){this._footer.parentNode.removeChild(this._footer);}else o.addClass(this.getContentRoot(),"_kc");if(ia.hoverContext)this._registerHoverHandlers(ia.hoverContext,ia.hoverShowDelay,ia.hoverHideDelay);};ha.prototype._registerHoverHandlers=function(ia,ja,ka){'use strict';if(ja==null)ja=fa;if(ka==null)ka=ga;var la,ma,na=(function(event){clearTimeout(ma);la=setTimeout(ca(this.show,this),ja);}).bind(this),oa=(function(event){if(this._isHoverLocked())return;clearTimeout(la);ma=setTimeout(this.hide.bind(this),ka);}).bind(this),pa=q.listen(ia,'mouseenter',na),qa=q.listen(ia,'mouseleave',oa),ra=this.subscribe('mouseenter',na),sa=this.subscribe('mouseleave',oa);this.subscribe('destroy',function(){clearTimeout(ma);pa.remove();qa.remove();ra.unsubscribe();sa.unsubscribe();});};ha.prototype._getDefaultBehaviors=function(){'use strict';var ia=ea._getDefaultBehaviors.call(this);ba(ia,v);return ia.concat([i,u,l,m,s,t,w,h]);};ha.prototype._buildWrapper=function(ia,ja){'use strict';this._innerWrapper=r.div(null,ja);var ka=ea._buildWrapper.call(this,ia,this._innerWrapper);o.addClass(ka,ia.wrapperClassName);this.replaceEntireLayerContents(ja);!(this.getContent()===ja)?aa(0):undefined;this.setWidth(ia.width);return ka;};ha.prototype.getContentRoot=function(){'use strict';!!!this._innerWrapper?aa(0):undefined;return this._innerWrapper;};ha.prototype.setContent=function(ia){'use strict';aa(0);};ha.prototype.replaceEntireLayerContents=function(ia){'use strict';this._content=null;p.empty(this.getContentRoot());this.setInnerContent(ia);};ha.prototype.setInnerContent=function(ia){'use strict';o.addClass(ia,"_53ij");if(this.getContent()){p.replace(this.getContent(),ia);}else p.appendContent(this.getContentRoot(),ia);this._content=ia;this.isShown()&&this.updatePosition();};ha.prototype.setWidth=function(ia){'use strict';x.set(this.getContentRoot(),'width',ia?Math.floor(ia)+'px':'');return this;};ha.prototype.getFooter=function(){'use strict';return this._footer;};ha.prototype.lockHover=function(){'use strict';this._hoverLocked=true;return this;};ha.prototype.unlockHover=function(){'use strict';this._hoverLocked=false;return this;};ha.prototype._isHoverLocked=function(){'use strict';return !!this._hoverLocked;};ha.setContext=function(ia,ja){'use strict';ia.setContext(ja);};f.exports=ha;},null);
__d('ContextualDialogXUITheme',['cx'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i={wrapperClassName:"_53ii",arrowDimensions:{offset:12,length:16}};f.exports=i;},null);
__d('Hovercard',['AccessibleLayer','Arbiter','AsyncRequest','ContextualDialog','ContextualDialogXUITheme','ContextualThing','DOM','Event','JSXDOM','LayerAutoFocus','LayerRefocusOnHide','Parent','Style','Vector','clickRefAction','csx','cx','getInlineBoundingRect','fbt'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z){if(c.__markCompiled)c.__markCompiled();var aa={},ba={},ca=null,da=null,ea=null,fa=null,ga=150,ha=700,ia=1000,ja=250,ka=50,la=null,ma=null,na=null,oa=null;function pa(event){var fb=s.byTag(event.getTarget(),'a');eb.processNode(fb)&&event.stop();}function qa(fb){da=fb;if(!ra(fb)){var gb;if(!fb||!(gb=sa(fb))||cb(fb)){ba.moveToken&&ba.moveToken.remove();ba={};return false;}if(ba.node!=fb){ba.moveToken&&ba.moveToken.remove();ba={node:fb,endpoint:gb,pos:null};}}return true;}function ra(fb){return fb&&ca&&ba.node==fb;}function sa(fb){return fb.getAttribute('data-hovercard');}function ta(fb){var gb=n.scry(fb,"^._5jmm ._2orz").length;if(gb)return;if(!fb.leaveToken){var hb=o.listen(fb,'mouseleave',function(){clearTimeout(la);clearTimeout(ma);hb.remove();fb.leaveToken=null;da=null;if(!eb.contains(fb))eb.hide();});fb.leaveToken=hb;}if(!ba.moveToken)ba.moveToken=o.listen(fb,'mousemove',function(event){ba.pos=u.getEventPosition(event);});clearTimeout(la);clearTimeout(ma);clearTimeout(oa);oa=null;var ib=ga,jb=ca?ja:ha;if(fb.getAttribute('data-hovercard-instant'))ib=jb=ka;la=setTimeout(xa.bind(null,fb),ib);ma=setTimeout(ua.bind(null,fb),jb);}function ua(fb,gb){if(ba.node!=fb)return;var hb=aa[sa(fb)];if(hb){wa(hb);}else if(gb){wa(ab());}else{var ib=ca?ja:ha;na=setTimeout(ua.bind(null,fb,true),ia-ib);}}function va(){eb.hide(true);clearTimeout(ma);}function wa(fb){var gb=ba.node,hb=ca,ib=hb!=gb,jb=gb.getAttribute('data-hovercard-position');jb&&fb.setPosition(jb);if(fa){var kb=fa.getContentRoot();if(!m.containsIncludingLayers(kb,gb))fa.hide();}if(!n.contains(document.body,gb)){eb.hide(true);return;}ca=gb;fa=fb;fb.setContextWithBounds(gb,y(gb,ba.pos)).show();i.inform('Hovercard/show');if(ib)setTimeout(function(){v('himp',ca,null,'FORCE',{ft:{evt:39}});},0);}function xa(fb){if(fb.id&&aa[fb.id]!=null)return;var gb=sa(fb);if(aa[gb]!=null)return;ya(gb);var hb=function(){eb.dirty(gb);va();};new j(gb).setData({endpoint:gb}).setMethod('GET').setReadOnly(true).setErrorHandler(hb).setTransportErrorHandler(hb).send();}function ya(fb){aa[fb]=false;}function za(fb){var gb=ba.node.getAttribute('data-hovercard-offset-x')||0;fb.setOffsetX(parseInt(gb,10));var hb=ba.node.getAttribute('data-hovercard-offset-y')||0;fb.setOffsetY(parseInt(hb,10));}var ab=function(){if(!ea){ea=new k({width:275,theme:l},p.div({className:"_7lk"},z._("Loading...")));ea.disableBehavior(h).disableBehavior(q).disableBehavior(r);bb(ea);}var fb=ba.node.getAttribute('data-hovercard-position');ea.setPosition(fb);za(ea);return ea;};function bb(fb){var gb=[fb.subscribe('mouseenter',function(){clearTimeout(oa);oa=null;da=ba.node;}),fb.subscribe('mouseleave',function(){fb.hide();da=null;}),fb.subscribe('destroy',function(){while(gb.length)gb.pop().unsubscribe();gb=null;})];}function cb(fb){return s.byClass(fb,"_7lu")!==null;}var db=true,eb={hide:function(fb){if(!ca)return;if(fb){clearTimeout(oa);oa=null;if(fa)fa.hide();da=null;ca=null;fa=null;}else{var gb=ba.node.getAttribute('data-hovercard-instant')?ka:ja;if(oa===null)oa=setTimeout(eb.hide.bind(null,true),gb);}},setDialog:function(fb,gb){gb.disableBehavior(h).disableBehavior(q).disableBehavior(r);aa[fb]=gb;bb(gb);if(ba.endpoint==fb&&da==ba.node){ab().hide();za(gb);wa(gb);}},getDialog:function(fb){return aa[fb];},contains:function(fb){if(fa)return m.containsIncludingLayers(fa.getContentRoot(),fb);return false;},dirty:function(fb){var gb=aa[fb];if(gb){gb.destroy();delete aa[fb];}},dirtyAll:function(){for(var fb in aa){var gb=aa[fb];gb&&eb.dirty(fb);}i.inform('Hovercard/dirty');},processNode:function(fb){if(fb&&qa(fb)){ta(fb);return true;}return false;},setDirtyAllOnPageTransition:function(fb){db=fb;},getLoadingDelay:function(){return ia;},getHideDelay:function(){return ja;}};(function(){o.listen(document.documentElement,'mouseover',pa);o.listen(window,'scroll',function(){if(ca&&t.isFixed(ca))eb.hide(true);});i.subscribe('page_transition',function(){va();db&&eb.dirtyAll();},i.SUBSCRIBE_NEW);})();f.exports=eb;},null);