/*!CK:1072969567!*//*1445884346,*/

if (self.CavalryLogger) { CavalryLogger.start_js(["h+ysD"]); }

__d("ComposerTargetType",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={SELF_USER:"feed",OTHER_USER:"wall",GROUP:"group",PAGE:"page",EVENT:"event",RECOMMENDATION:"recommendation",FUNDRAISER:"fundraiser",EXAMPLE:"example",MARKETPLACE:"marketplace"};},null,{});
__d("ComposerType",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={INLINE:"inline",ADVANCED:"advanced",NORMAL:"normal"};},null,{});
__d("ComposerWaterfallEvent",[],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports={COMPOSER_CANCEL:"composer_cancel",COMPOSER_CANCEL_INTENT:"intent_composer_cancel",COMPOSER_ENTRY:"composer_entry",COMPOSER_NOT_RENDERED:"composer_not_renderer",COMPOSER_POST:"composer_post",COMPOSER_POST_CANCEL:"composer_post_cancel",COMPOSER_POST_FAILURE:"composer_post_failure",COMPOSER_POST_FAILURE_FATAL:"composer_post_fatal_failure",COMPOSER_POST_FAILURE_GIVEUP:"composer_post_giveup_failure",COMPOSER_POST_SUCCESS:"composer_post_success",COMPOSER_POST_COMPLETED:"composer_post_completed",COMPOSER_WRITTEN:"composer_written",ALBUM_ADD:"add_album",ALBUM_CANCEL:"cancel_album",ALBUM_INTENT:"intent_album",ALBUM_REMOVE:"remove_album",FRIEND_TAG_ADD:"add_friend_tag",FRIEND_TAG_CANCEL:"cancel_friend_tag",FRIEND_TAG_INTENT:"intent_friend_tag",FRIEND_TAG_REMOVE:"remove_friend_tag",FRIEND_TAG_SEARCH:"search_friend_tag",FRIEND_SHOW_MORE:"show_more_friend_tag",LOCATION_ADD:"add_location",LOCATION_CANCEL:"cancel_location",LOCATION_INTENT:"intent_location",LOCATION_REMOVE:"remove_location",LOCATION_SCROLL:"scroll_location",LOCATION_SEARCH:"search_location",EMBEDS_ADD:"add_embed",EMBEDS_CANCEL:"cancel_embed",EMBEDS_INTENT:"intent_embed",MINUTIAE_ADD:"add_minutiae",MINUTIAE_CANCEL:"cancel_minutiae",MINUTIAE_CHANGE_ICON:"change_icon_minutiae",MINUTIAE_CHANGE_ICON_CANCEL:"change_icon_cancel_minutiae",MINUTIAE_CHANGE_ICON_INTENT:"change_icon_intent_minutiae",MINUTIAE_CHANGE_ICON_SEARCH:"change_icon_search_minutiae",MINUTIAE_INTENT:"intent_minutiae",MINUTIAE_REMOVE:"remove_minutiae",MINUTIAE_SCROLL:"scroll_minutiae",MINUTIAE_SEARCH:"search_minutiae",MINUTIAE_TYPE_CLICK:"type_click_minutiae",MINUTIAE_SEE_MORE:"see_more_minutiae",MINUTIAE_CHAIN_SKIP:"skip_chain_minutiae",MINUTIAE_CHAIN_SUGGEST:"suggest_chain_minutiae",MINUTIAE_ICONPICKER_QUERY:"minutiae_iconpicker_query",MINUTIAE_ICONPICKER_BOOTSTRAP:"minutiae_iconpicker_bootstrap",MINUTIAE_ICONPICKER_SELECT:"minutiae_iconpicker_select",MEDIA_INTENT:"intent_media",MEDIA_CANCEL:"cancel_media",PHOTO_ADD:"add_photo",PHOTO_ADD_FAILURE:"add_photo_failure",PHOTO_ADD_SUCCESS:"add_photo_success",PHOTO_REMOVE:"remove_photo",PRIVACY_ADD:"add_privacy",PRIVACY_CANCEL:"cancel_privacy",PRIVACY_INTENT:"intent_privacy",PRIVACY_SCROLL:"scroll_privacy",PRIVACY_SEE_ALL_LISTS:"see_all_lists_privacy",SELECT_FRIEND_TIMELINE_INTENT:"intent_select_friend_timeline",SELECT_FRIEND_TIMELINE_ADD:"add_select_friend_timeline",SELECT_FRIEND_TIMELINE_CANCEL:"cancel_select_friend_timeline",SERVER_POST_BEGIN:"server_composer_post_begin",SERVER_POST_FAILURE:"server_composer_post_failure",SERVER_POST_SUCCESS:"server_composer_post_succeeded",POST_POST_WITH_TAG_BEGIN:"post_post_with_tag_begin",POST_POST_WITH_TAG_FAILURE:"post_post_with_tag_failure",POST_POST_WITH_TAG_SUCCESS:"post_post_with_tag_success",TARGET_SELECTOR_INTENT:"intent_target_selector",TARGET_SELECTOR_CANCEL:"cancel_target_selector",VIDEO_ADD:"add_video",VIDEO_ADD_FAILURE:"add_video_failure",VIDEO_ADD_SUCCESS:"add_video_success",VIDEO_REMOVE:"remove_video"};},null,{});
__d('BlueBar',['Arbiter','BizSiteIdentifier.brands','DOM','DOMQuery','Event','Locale','Run','SubscriptionsHandler','csx','getElementPosition','memoize'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r){if(c.__markCompiled)c.__markCompiled();var s;function t(event){if(h.inform('BlueBar/homeClick')===false)event.preventDefault();}function u(){if(s){s.release();s=null;}w.getBar=i.isBizSite()?v("div._16xo"):v("div._4f7n");w.getNavRoot=v("div._uaw");}function v(x){return r(function(){return k.scry(document,x)[0];});}var w={init:function(){var x,y=v("div._2gyk")(),z=v("div._2gyj")(),aa=q(y);j.setAttributes(z,{style:(x={},x[m.isRTL()?'marginLeft':'marginRight']=aa.width+'px',x)});},listen:function(x){if(!s){s=new o();n.onUnload(u);}s.addSubscriptions(l.listen(x,'click',t));},getBar:i.isBizSite()?v("div._16xo"):v("div._4f7n"),getNavRoot:v("div._uaw")};f.exports=w;},null);
__d('ComposerXStore',['Arbiter','ge'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j={};function k(m,n){return 'ComposerX/'+m+'/'+n;}var l={set:function(m,n,o){if(!j[m])j[m]={};j[m][n]=o;h.inform(k(m,n),{},h.BEHAVIOR_STATE);},get:function(m,n){if(j[m])return j[m][n];return null;},getAllForComposer:function(m){return j[m]||{};},waitForComponents:function(m,n,o){h.registerCallback(o,n.map(k.bind(null,m)));}};h.subscribe('page_transition',function(){for(var m in j)if(!i(m))delete j[m];});f.exports=l;},null);
__d('fileSliceName',['UserAgent_DEPRECATED'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i='slice',j;if(j=h.chrome()){if(j<21)i='webkitSlice';}else if(j=h.firefox()){if(j<13)i='mozSlice';}else if(!(j=h.safari()))if(h.webkit())i='webkitSlice';f.exports=i;},null);
__d('fileSlice',['fileSliceName'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();var i=b.File&&b.File.prototype[h];f.exports=i;},null);
__d('VideoUploadFeatureDetector',['UserAgent_DEPRECATED','fileSlice'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j={supportsChunking:function(){return typeof i==='function'&&this.supportsXHR();},supportsFullProgress:function(){return !h.firefox();},supportsFileAPI:function(){return 'FileList' in window;},supportsFileReading:function(){return 'FileReader' in window&&'DataView' in window;},supportsXHR:function(){return 'FormData' in window;}};f.exports=j;},null);
__d('ComposerXDragDropUtils',['Arbiter','CSS','DOMQuery','Parent','VideoUploadFeatureDetector','csx','cx'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n){if(c.__markCompiled)c.__markCompiled();var o={handleDragEnterAndLeave:function(p){var q=j.scry(k.byClass(p,"_119"),"._2wr");h.subscribe('dragenter',function(r,s){if(p==s.element)q.forEach(i.hide);});h.subscribe('dragleave',function(r,s){if(p==s.element)q.forEach(i.show);});},filterImages:function(p){var q=l.supportsFileAPI(),r=[];for(var s=0;s<p.length;s++)if(p[s].type.match('image/*')){r.push(p[s]);}else if(q&&p[s].type.match('video/*'))r.push(p[s]);return r;}};f.exports=o;},null);
__d('ComposerXSessionIDs',['DOM','cx','uuid'],function a(b,c,d,e,f,g,h,i,j){if(c.__markCompiled)c.__markCompiled();var k={},l={getSessionID:function(m){return k[m];},resetSessionID:function(m){k[m]=j();},createSessionIDInput:function(m){return h.create('input',{type:'hidden',name:'composer_session_id',className:"_5r_b",value:m});}};f.exports=l;},null);
__d('ShareModeConst',[],function a(b,c,d,e,f,g){if(c.__markCompiled)c.__markCompiled();var h={SELF_PAGE:'selfpage',PAGE:'page',SELF_POST:'self',FRIEND:'friend',GROUP:'group',ALBUM:'album',MESSAGE:'message',ONE_CLICK:'oneclick',EVENT:'event',UNKNOWN:'unknown'};f.exports=h;},null);
__d('ComposerXMarauderLogger',['Event','ComposerTargetType','ComposerType','ComposerWaterfallEvent','ComposerXSessionIDs','MarauderLogger','ShareModeConst'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n){if(c.__markCompiled)c.__markCompiled();var o={},p=j.NORMAL,q={logEvent:function(r,s,t){if(!t)t={};var u=o[s],v=l.getSessionID(s);if(!u||!v)return;if(t.logOncePerSession){if(!u.loggedEventTypes[v])u.loggedEventTypes[v]={};if(u.loggedEventTypes[v][r])return;u.loggedEventTypes[v][r]=true;}var w=babelHelpers._extends({},t.extraData,{composer_type:p,composer_version:u.composerVersion,target_type:u.targetType,target_id:u.targetID,ref:u.entryPointRef});if(t.logDetails){w.has_photo=u.hasPhoto;w.has_video=u.hasVideo;w.xy_tag_count=u.numXYTags;w.with_tag_count=u.numWithTags;w.tags_user=u.numUserTags;}m.log(r,'composer',w,undefined,undefined,v);},registerComposer:function(r,s,t,u,v){o[r.id]={targetID:v,targetType:s,entryPointRef:t,composerVersion:u,loggedEventTypes:{},hasPhoto:false,hasVideo:false,numWithTags:0,numXYTags:0,numUserTags:0};},getInstance:function(r){return o[r];},updateHasPhoto:function(r,s){if(!o[r])return;o[r].hasPhoto=s;},updateHasVideo:function(r,s){if(!o[r])return;o[r].hasVideo=s;},updateNumWithTags:function(r,s){if(!o[r])return;o[r].numWithTags=s;},updateNumXYTags:function(r,s){if(!o[r])return;o[r].numXYTags=s;o[r].numWithTags=o[r].numWithTags-s;},updateNumUserTags:function(r,s){if(!o[r])return;o[r].numUserTags=s;},listenForPostEvents:function(r,s){if(!s)return [];return [h.listen(s,'submit',function(){q.logPost(r);}),h.listen(s,'success',function(){q.logPostSuccess(r);}),h.listen(s,'error',function(event){q.logPostFailure(r,{error_info:{error_code:event.data.response.error,error_description:event.data.response.errorDescription,error_summary:event.data.response.errorSummary}});})];},setShareMode:function(r,s){var t=o[r];if(!t)return;switch(s){case n.SELF_POST:t.targetType=i.SELF_USER;break;case n.FRIEND:t.targetType=i.OTHER_USER;break;case n.PAGE:case n.SELF_PAGE:t.targetType=i.PAGE;break;case n.GROUP:t.targetType=i.GROUP;break;default:t.targetType=i.OTHER;}},logEntry:function(r,s){if(typeof s==='string')return;q.logEvent(k.COMPOSER_ENTRY,r,{logOncePerSession:true,extraData:s});},logCompleted:function(r,s){q.logEvent(k.COMPOSER_POST_COMPLETED,r,{extraData:s});},logPost:function(r,s){q.logEvent(k.COMPOSER_POST,r,{extraData:s});},logPostSuccess:function(r,s){q.logEvent(k.COMPOSER_POST_SUCCESS,r,{extraData:s});},logPostFailure:function(r,s){q.logEvent(k.COMPOSER_POST_FAILURE,r,{extraData:s});}};f.exports=q;},null);
__d('BanzaiNectar',['Banzai'],function a(b,c,d,e,f,g,h){if(c.__markCompiled)c.__markCompiled();function i(k){return {log:function(l,m,n){var o={e:m,a:n};h.post('nectar:'+l,o,k);}};}var j=i();j.create=i;f.exports=j;},null);
__d('AccessibilityLogger',['AsyncSignal','Cookie'],function a(b,c,d,e,f,g,h,i){if(c.__markCompiled)c.__markCompiled();var j={COOKIE:'a11y',DECAY_MS:6*60*60*1000,DEFAULT:{sr:0,'sr-ts':Date.now(),jk:0,'jk-ts':Date.now(),kb:0,'kb-ts':Date.now(),hcm:0,'hcm-ts':Date.now()},getCookie:function(){var k=j.DEFAULT,l=i.get(j.COOKIE);if(l){l=JSON.parse(l);for(var m in k)if(m in l)k[m]=l[m];}return k;},logKey:function(k,l){var m=j.getCookie();m[k]++;var n=Date.now();if(n-m[k+'-ts']>j.DECAY_MS){new h('/ajax/accessibilitylogging',{eventName:l,times_pressed:m[k]}).send();m[k+'-ts']=n;m[k]=0;}i.set(j.COOKIE,JSON.stringify(m));},logHCM:function(){j.logKey('hcm','hcm_users');},logSRKey:function(){j.logKey('sr','sr_users');},logJKKey:function(){j.logKey('jk','jk_users');},logFocusIn:function(){j.logKey('kb','kb_users');}};f.exports=j;},null);
__d('OnVisible',['Arbiter','DOM','Event','Parent','Run','Vector','ViewportBounds','coalesce','queryThenMutateDOM'],function a(b,c,d,e,f,g,h,i,j,k,l,m,n,o,p){if(c.__markCompiled)c.__markCompiled();var q=[],r,s=0,t=[],u,v,w,x,y;function z(){q.forEach(function(fa){fa.remove();});if(v){v.remove();u.remove();r.unsubscribe();v=u=r=null;}s=0;q.length=0;}function aa(){if(!q.length){z();return;}t.length=0;w=m.getScrollPosition().y;x=m.getViewportDimensions().y;y=n.getTop();for(var fa=0;fa<q.length;++fa){var ga=q[fa];if(isNaN(ga.elementHeight))t.push(fa);ga.elementHeight=m.getElementDimensions(ga.element).y;ga.elementPos=m.getElementPosition(ga.element);ga.hidden=k.byClass(ga.element,'hidden_elem');if(ga.scrollArea){ga.scrollAreaHeight=m.getElementDimensions(ga.scrollArea).y;ga.scrollAreaY=m.getElementPosition(ga.scrollArea).y;}}s=fa;}function ba(){for(var fa=Math.min(q.length,s)-1;fa>=0;--fa){var ga=q[fa];if(!ga.elementPos||ga.removed){q.splice(fa,1);continue;}if(ga.hidden)continue;var ha=w+x+ga.buffer,ia=false;if(ha>ga.elementPos.y){var ja=w+y-ga.buffer,ka=w+y+x+ga.buffer,la=ga.elementPos.y+ga.elementHeight,ma=!ga.strict||ja<ga.elementPos.y&&ka>la;ia=ma;if(ia&&ga.scrollArea){var na=ga.scrollAreaY+ga.scrollAreaHeight+ga.buffer;ia=ga.elementPos.y>ga.scrollAreaY-ga.buffer&&ga.elementPos.y<na;}}if(ga.inverse?!ia:ia){ga.remove();ga.handler(t.indexOf(fa)!==-1);}}}function ca(){da();if(q.length)return;v=j.listen(window,'scroll',da);u=j.listen(window,'resize',da);r=h.subscribe('dom-scroll',da);}function da(){p(aa,ba,'OnVisible/positionCheck');}function ea(fa,ga,ha,ia,ja,ka){'use strict';this.element=fa;this.handler=ga;this.strict=ha;this.buffer=o(ia,300);this.inverse=o(ja,false);this.scrollArea=ka||null;if(this.scrollArea)this.scrollAreaListener=this.$OnVisible1();if(q.length===0)l.onLeave(z);ca();q.push(this);}ea.prototype.remove=function(){'use strict';if(this.removed)return;this.removed=true;if(this.scrollAreaListener)this.scrollAreaListener.remove();};ea.prototype.reset=function(){'use strict';this.elementHeight=null;this.removed=false;if(this.scrollArea)this.scrollAreaListener=this.$OnVisible1();q.indexOf(this)===-1&&q.push(this);ca();};ea.prototype.setBuffer=function(fa){'use strict';this.buffer=fa;da();};ea.prototype.checkBuffer=function(){'use strict';da();};ea.prototype.getElement=function(){'use strict';return this.element;};ea.prototype.$OnVisible1=function(){'use strict';return j.listen(i.find(this.scrollArea,'.uiScrollableAreaWrap'),'scroll',this.checkBuffer);};Object.assign(ea,{checkBuffer:da});f.exports=ea;},null);
__d("XPrivacyRemindersDismissController",["XController"],function a(b,c,d,e,f,g){c.__markCompiled&&c.__markCompiled();f.exports=c("XController").create("\/privacy\/reminders\/dismiss\/",{type:{type:"String",required:true},log_plite:{type:"Bool",defaultValue:false}});},null,{});