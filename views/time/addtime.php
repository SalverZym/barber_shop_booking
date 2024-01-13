<?php
use yii\helpers\SessionHelper;
use yii\widgets\Pjax;
?>
<!DOCTYPE html>
<!-- saved from url=(0058)https://b630792.yclients.com/company/721230/select-time?o= -->
<html style="--yclients-ui-kit-color-primary: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-primary-agile: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-primary-text: hsla(47.764705882352935,100%,6%,1); --yclients-ui-kit-color-secondary-text: #808080; --yclients-ui-kit-color-link: #000000; --yclients-ui-kit-color-background-default: #ffffff; --yclients-ui-kit-color-background-dark: #f0f0f0; --yclients-ui-kit-color-placeholder-shadow: rgba(0, 0, 0, 0.44); --yclients-ui-kit-color-border-gray: #f5f5f5; --yclients-ui-kit-color-border-active: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-border-picture: hsla(47.764705882352935,100%,6%,0.04); --yclients-ui-kit-color-border-grey-on-bg-grey: #E8E8E8; --yclients-ui-kit-color-icons-primary-text: hsla(47.764705882352935,100%,6%,1); --yclients-ui-kit-color-icons-secondary-text: #aaaaaa; --yclients-ui-kit-color-icons-grey: #AAAAAA; --yclients-ui-kit-color-icons-grey-bg: #F0F0F0; --yclients-ui-kit-color-icons-color-agile: hsla(47.764705882352935,100%,30%,1); --yclients-ui-kit-color-icons-color-bg: hsla(47.764705882352935,100%,50%,0.1); --yclients-ui-kit-color-color-agile-text: hsla(47.764705882352935,100%,30%,1); --yclients-ui-kit-color-icons-agile-bg: hsla(47.764705882352935,100%,50%,0.4); --yclients-ui-kit-color-banner-accent-bg: #FFFFFF; --yclients-ui-kit-color-banner-accent-bg-image: linear-gradient(0deg, hsla(47.764705882352935,100%,50%,0.3), hsla(47.764705882352935,100%,50%,0.3)); --yclients-ui-kit-color-input-bg: #ffffff; --yclients-ui-kit-color-input-default-border: #ececec; --yclients-ui-kit-color-input-icon-left: #808080; --yclients-ui-kit-color-input-icon-right: #d0d0d0; --yclients-ui-kit-color-input-active-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-btn-primary-default-bg: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-btn-primary-text: #000000; --yclients-ui-kit-color-btn-primary-secondary-text: hsla(0,0%,0%,0.6); --yclients-ui-kit-color-btn-primary-default-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-btn-label-text: #000000; --yclients-ui-kit-color-btn-label-bg: #ffffff; --yclients-ui-kit-color-btn-hover-press-bg: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-btn-hover-press-bg-image: linear-gradient(0deg, hsla(47.764705882352935,100%,95%,0.4), hsla(47.764705882352935,100%,95%,0.4)); --yclients-ui-kit-color-btn-hover-press-border: hsla(47.764705882352935,100%,95%,0.4); --yclients-ui-kit-color-btn-secondary-default-bg: #ffffff; --yclients-ui-kit-color-btn-secondary-text: #000000; --yclients-ui-kit-color-btn-secondary-default-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-btn-secondary-hover-press-bg: #ffffff; --yclients-ui-kit-color-btn-secondary-hover-press-bg-image: linear-gradient(0deg, hsla(47.764705882352935,100%,50%,0.2), hsla(47.764705882352935,100%,50%,0.2)); --yclients-ui-kit-color-btn-secondary-hover-press-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-tab-category-default-text: #000000; --yclients-ui-kit-color-tab-category-default-bg: #f5f5f5; --yclients-ui-kit-color-tab-category-default-border: #f5f5f5; --yclients-ui-kit-color-tab-category-active-text: #000000; --yclients-ui-kit-color-tab-category-active-bg: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-tab-category-active-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-tab-stroke-default-text: #808080; --yclients-ui-kit-color-tab-stroke-default-border: #f5f5f5; --yclients-ui-kit-color-tab-stroke-active-text: hsla(47.764705882352935,100%,6%,1); --yclients-ui-kit-color-tab-stroke-active-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-calendar-month-default: #808080; --yclients-ui-kit-color-timeslot-active-text: #000000; --yclients-ui-kit-color-timeslot-active-bg: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-timeslot-active-border: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-timeslot-default-text: #000000; --yclients-ui-kit-color-timeslot-default-bg: #ffffff; --yclients-ui-kit-color-timeslot-default-border: #EDEDED; --yclients-ui-kit-color-timeslot-today-bg: #F5F5F5; --yclients-ui-kit-color-timeslot-today-border: #F5F5F5; --yclients-ui-kit-color-timeslot-today-text-disabled: #CDCECE; --yclients-ui-kit-color-signal-colors-success: #69ce14; --yclients-ui-kit-color-signal-colors-success-bg: #edf9e3; --yclients-ui-kit-color-signal-colors-success-border: #edf9e3; --yclients-ui-kit-color-signal-colors-warning: #ffcb00; --yclients-ui-kit-color-signal-colors-warning-bg: #ffea99; --yclients-ui-kit-color-signal-colors-warning-border: #ffea99; --yclients-ui-kit-color-signal-colors-danger: #ff5d1a; --yclients-ui-kit-color-signal-colors-danger-bg: #ffece4; --yclients-ui-kit-color-signal-colors-danger-border: #ffece4; --yclients-ui-kit-color-long-text-cropping-color: #ffffff; --yclients-ui-kit-color-search-selected-text: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-city-select-bg: #F5F5F5; --yclients-ui-kit-color-star-text: #808080; --yclients-ui-kit-color-star: #FFCB00; --yclients-ui-kit-color-tag-text: hsla(47.764705882352935,100%,6%,1); --yclients-ui-kit-color-tag-bg: hsla(47.764705882352935,100%,92%,1); --yclients-ui-kit-color-tag-border: hsla(0,0%,0%,0.02); --yclients-ui-kit-color-pin-active: #000000; --yclients-ui-kit-color-pin-default: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-loyalty-button-text: hsla(47.764705882352935,100%,6%,1); --yclients-ui-kit-color-loyalty-button-bg: hsla(47.764705882352935,100%,90%,1); --yclients-ui-kit-color-loyalty-button-border: hsla(0,0%,0%,0.04); --yclients-ui-kit-color-loyalty-card-text: hsla(0,0%,0%,0.9); --yclients-ui-kit-color-loyalty-card-secondary-text: hsla(0,0%,0%,0.4); --yclients-ui-kit-color-loyalty-card-logo-border: hsla(0,0%,0%,0.04); --yclients-ui-kit-color-loyalty-card-border: hsla(0,0%,0%,0); --yclients-ui-kit-color-loyalty-card-bg-from: hsla(47.764705882352935,100%,50%,0.8); --yclients-ui-kit-color-loyalty-card-bg-to: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-loyalty-card-shadow: hsla(47.764705882352935,100%,50%,0.4); --yclients-ui-kit-color-switch-bg: #CCCCCC; --yclients-ui-kit-color-label-text: #000000; --yclients-ui-kit-color-label-bg: hsla(47.764705882352935,100%,50%,1); --yclients-ui-kit-color-label-border: hsla(47.764705882352935,100%,50%,1);" lang="ru-RU"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script type="text/javascript">!function(){var e,t,n,i,r={passive:!0,capture:!0},a=new Date,o=function(){i=[],t=-1,e=null,f(addEventListener)},c=function(i,r){e||(e=r,t=i,n=new Date,f(removeEventListener),u())},u=function(){if(t>=0&&t<n-a){var r={entryType:"first-input",name:e.type,target:e.target,cancelable:e.cancelable,startTime:e.timeStamp,processingStart:e.timeStamp+t};i.forEach((function(e){e(r)})),i=[]}},s=function(e){if(e.cancelable){var t=(e.timeStamp>1e12?new Date:performance.now())-e.timeStamp;"pointerdown"==e.type?function(e,t){var n=function(){c(e,t),a()},i=function(){a()},a=function(){removeEventListener("pointerup",n,r),removeEventListener("pointercancel",i,r)};addEventListener("pointerup",n,r),addEventListener("pointercancel",i,r)}(t,e):c(t,e)}},f=function(e){["mousedown","keydown","touchstart","pointerdown"].forEach((function(t){return e(t,s,r)}))},p="hidden"===document.visibilityState?0:1/0;addEventListener("visibilitychange",(function e(t){"hidden"===document.visibilityState&&(p=t.timeStamp,removeEventListener("visibilitychange",e,!0))}),!0),o(),self.webVitals={firstInputPolyfill:function(e){i.push(e),u()},resetFirstInputPolyfill:o,get firstHiddenTime(){return p}}}();</script>

    <title>Батя. Черняховского 20</title>
    <!--<base href="/">--><base href=".">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <script src="./Батя. Черняховского 20_files/empty-storage-if-not-exist.js" type="text/javascript"></script>
    <style>@charset "UTF-8";@font-face{font-family:Inter;src:url(inter-thin.edb371061375075f.ttf) format("truetype");font-weight:100;font-style:normal}@font-face{font-family:Inter;src:url(inter-extra-light.de1642355fa969d5.ttf) format("truetype");font-weight:200;font-style:normal}@font-face{font-family:Inter;src:url(inter-light.c1350cd2cfdafefc.ttf) format("truetype");font-weight:300;font-style:normal}@font-face{font-family:Inter;src:url(inter-regular.0fdeb2931d05200e.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Inter;src:url(inter-medium.b9d1825c254cd73b.ttf) format("truetype");font-weight:500;font-style:normal}@font-face{font-family:Inter;src:url(inter-semibold.e8331194cc39db45.ttf) format("truetype");font-weight:600;font-style:normal}@font-face{font-family:Inter;src:url(inter-bold.a2753c92736fd328.ttf) format("truetype");font-weight:700;font-style:normal}@font-face{font-family:Inter;src:url(inter-extra-bold.b7197d1427d9852f.ttf) format("truetype");font-weight:800;font-style:normal}@font-face{font-family:Inter;src:url(inter-black.7a0c9838fc6b0810.ttf) format("truetype");font-weight:900;font-style:normal}html{--safe-area-top:0px;--safe-area-bottom:0px;--ion-safe-area-left:0px;--ion-safe-area-right:0px}html,body{font-family:Inter,serif;margin:0;padding:0;width:100%;height:100%;background:var(--yclients-ui-kit-color-grey-background);color:var(--yclients-ui-kit-color-black);--yclients-ui-kit-h1-font-weight:800;--yclients-ui-kit-h1-font-size:32px;--yclients-ui-kit-h1-lineHeight:32px;--yclients-ui-kit-windowHeader-font-size:17px;--yclients-ui-kit-windowHeader-font-weight:600;--yclients-ui-kit-windowHeader-lineHeight:20px;--yclients-ui-kit-font-subtext-size:13px;--yclients-ui-kit-font-subtext-lineHeight:16px;--yclients-ui-kit-font-subtext-weight:normal;--yclients-ui-kit-font-label-size:15px;--yclients-ui-kit-font-label-weight:normal;--yclients-ui-kit-font-label-lineHeight:16px;--yclients-ui-kit-color-brand:#fcce2c;--yclients-ui-kit-color-grey-main:#808080;--yclients-ui-kit-color-grey-background:#f5f5f5;--yclients-ui-kit-color-black:#292b33;--yclients-ui-kit-color-white:#fff;--yclients-ui-kit-textarea-border-radius:4px;--yclients-ui-kit-textarea-border:1px solid #f2f2f2;--yclients-ui-kit-textarea-background-color:#f2f2f2;--yclients-ui-kit-textarea-placeholder-color:#f2f2f2;--yclients-ui-kit-logo-border-radius:8px;--yclients-ui-kit-logo-size-medium:64px;--yclients-ui-kit-rating-star-image:url(/assets/icon/review/star.svg);--yclients-ui-kit-rating-star-image-selected:url(/assets/icon/review/star-selected.svg);--yclients-ui-kit-rating-star-image2:url(/assets/icon/review/star2.svg);--yclients-ui-kit-rating-star-image2-selected:url(/assets/icon/review/star2-selected.svg);--yclients-ui-kit-rating-star-big-size:24px;--yclients-ui-kit-rating-star-offset:0}*{box-sizing:border-box}*:focus{outline:none}</style><link rel="stylesheet" href="./Батя. Черняховского 20_files/styles.4648623d45e2675f.css" media="all" onload="this.media=&#39;all&#39;"><noscript><link rel="stylesheet" href="styles.4648623d45e2675f.css"></noscript><style>@charset "UTF-8";.disabled[_ngcontent-jbu-c128]{width:100%;height:100%}.disabled-info[_ngcontent-jbu-c128]{position:relative;padding:24px 16px;margin:0 auto;top:50%;transform:translateY(-50%);width:100%;display:flex;align-items:center;justify-content:center;flex-direction:column}h1[_ngcontent-jbu-c128]{padding-top:16px;text-align:center;padding-bottom:48px}.disabled-icon[_ngcontent-jbu-c128]{width:40px;height:40px}.disabled-text[_ngcontent-jbu-c128]{text-align:center;padding-top:12px}</style><style>@charset "UTF-8";.hidden[_nghost-jbu-c129]{display:none}[_nghost-jbu-c129]{display:block;height:0}.language-selector[_ngcontent-jbu-c129]{position:fixed;bottom:16px;right:16px}</style><style>@charset "UTF-8";[_nghost-jbu-c131]{display:block;position:fixed;inset:0;width:100%;z-index:11000;overflow:hidden}[_nghost-jbu-c131]   .swipe-area[_ngcontent-jbu-c131]{height:28px;color:var(--yclients-ui-kit-color-white);width:100%;text-align:center;position:relative}[_nghost-jbu-c131]   .swipe-area[_ngcontent-jbu-c131]   .swipe-anchor[_ngcontent-jbu-c131]{height:4px;width:32px;border-radius:8px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:var(--yclients-ui-kit-color-grey-main)}[_nghost-jbu-c131]   .swipe-area.with-app-header[_ngcontent-jbu-c131]{height:16px}[_nghost-jbu-c131]   .swipe-area.with-app-header[_ngcontent-jbu-c131]   .swipe-anchor[_ngcontent-jbu-c131]{top:100%;transform:translate(-50%,-100%)}.background[_ngcontent-jbu-c131]{width:100%;height:100%;position:absolute;z-index:10500;opacity:0;will-change:auto;background-color:#000000a6;top:0;transition:opacity .2s ease-in}.dirty[_nghost-jbu-c131]   .background[_ngcontent-jbu-c131]{opacity:0}.showed[_nghost-jbu-c131]   .background[_ngcontent-jbu-c131]{opacity:1}.modal[_ngcontent-jbu-c131]{will-change:auto;display:block;position:absolute;bottom:0;z-index:11000;background-color:#fff;width:100%;transform:translateY(100%);border-top-right-radius:8px;border-top-left-radius:8px;transition:transform .2s ease-in;max-height:90%;overflow:auto}.dirty[_nghost-jbu-c131]   .modal[_ngcontent-jbu-c131]{transform:translateY(100%)}.showed[_nghost-jbu-c131]   .modal[_ngcontent-jbu-c131]{transform:translate(0)}.modal_transparent[_ngcontent-jbu-c131]{background-color:transparent}.modal.full-height[_ngcontent-jbu-c131]{max-height:100vh;height:100%;display:flex;flex-direction:column;border-radius:0}.modal.full-height[_ngcontent-jbu-c131]   .content-container[_ngcontent-jbu-c131]{flex:1 1 auto;overflow:scroll}.window-header[_ngcontent-jbu-c131]{position:relative}.window-header[_ngcontent-jbu-c131]   ui-kit-header[_ngcontent-jbu-c131]{position:static;padding-top:0}.window-header[_ngcontent-jbu-c131]   .back[_ngcontent-jbu-c131], .window-header[_ngcontent-jbu-c131]   .arrow[_ngcontent-jbu-c131]{cursor:pointer;height:24px;position:absolute;left:16px;top:50%;transform:translateY(-50%)}.title[_ngcontent-jbu-c131]{text-align:center;height:56px;line-height:40px;color:#000;font-size:17px;font-weight:500;vertical-align:middle;padding:8px;box-sizing:border-box;border-bottom:.5px solid #f2f5ff}@media (min-width: 500px){[_nghost-jbu-c131]   .swipe-area[_ngcontent-jbu-c131]{display:none}.modal[_ngcontent-jbu-c131]{max-width:392px;left:50%;top:50%;bottom:auto;border-radius:8px;transform:translate(-50%,-50%);opacity:1;transition:opacity .2s ease-in}.dirty[_nghost-jbu-c131]   .modal[_ngcontent-jbu-c131]{opacity:0;transform:translate(-50%,-50%)}.showed[_nghost-jbu-c131]   .modal[_ngcontent-jbu-c131]{opacity:1;transform:translate(-50%,-50%)}.modal.full-height[_ngcontent-jbu-c131]{max-width:600px}}</style><meta name="theme-color" content="#ffffff"><style>@charset "UTF-8";[_nghost-jbu-c53]   .background[_ngcontent-jbu-c53]{position:fixed;inset:0;background-color:transparent;opacity:.3;z-index:20000}[_nghost-jbu-c53]   .loader[_ngcontent-jbu-c53]{position:fixed;top:50%;left:50%;transform:translate(-50%,-50%);z-index:20001;background:var(--yclients-ui-kit-color-black);border-radius:5px;padding:8px 10px;opacity:.3}</style><style>@charset "UTF-8";[_nghost-jbu-c52]{display:block}.loader[_ngcontent-jbu-c52]{display:flex;height:100%;width:100%;justify-content:center;align-items:center}.loader__svg_color-white[_ngcontent-jbu-c52]   path[_ngcontent-jbu-c52], .loader__svg_color-white[_ngcontent-jbu-c52]   rect[_ngcontent-jbu-c52]{fill:var(--yclients-ui-kit-color-white)}.loader__svg_color-primary[_ngcontent-jbu-c52]   path[_ngcontent-jbu-c52], .loader__svg_color-primary[_ngcontent-jbu-c52]   rect[_ngcontent-jbu-c52]{fill:var(--yclients-ui-kit-color-primary-agile)}</style><style>@charset "UTF-8";[_nghost-jbu-c102]{display:none}body.mobile.landscape   [_nghost-jbu-c102]{display:block}body.mobile.landscape   [_nghost-jbu-c102]   .background[_ngcontent-jbu-c102]{position:fixed;inset:0;background-color:#00000040;z-index:20000}body.mobile.landscape   [_nghost-jbu-c102]   .container[_ngcontent-jbu-c102]{position:fixed;background:#fff;top:calc(50% - 75px);left:0;width:70%;min-height:150px;margin:0 15%;padding:24px;box-sizing:border-box;border-radius:10px;z-index:90000}body.mobile.landscape   [_nghost-jbu-c102]   .container[_ngcontent-jbu-c102]   img[_ngcontent-jbu-c102]{margin:0 auto;display:block;width:40px;height:40px}body.mobile.landscape   [_nghost-jbu-c102]   .container[_ngcontent-jbu-c102]   p[_ngcontent-jbu-c102]{margin-top:16px;text-align:center;font-size:17px;line-height:20px}</style><style>@charset "UTF-8";.loyalty-block[_ngcontent-jbu-c121]{width:100%;max-width:600px;position:fixed;background-color:var(--yclients-ui-kit-color-background-default);padding:16px 8px 24px;z-index:1000}.container[_ngcontent-jbu-c121]{background-color:var(--yclients-ui-kit-color-white);padding:0 8px;height:max-content}.select-date-time-header[_ngcontent-jbu-c121]{border-bottom-color:var(--yclients-ui-kit-color-white);height:70px;max-height:70px;display:block}</style><style></style><style>@charset "UTF-8";[_nghost-jbu-c146]{display:block;margin-top:16px;transition:all .2s;height:max-content}.month-block-label[_ngcontent-jbu-c146]{margin-left:12px;margin-right:12px;margin-bottom:16px;min-width:80px;text-align:center;text-transform:uppercase;font-style:normal;font-weight:400;font-size:13px;line-height:16px;letter-spacing:.04em;cursor:pointer;color:var(--yclients-ui-kit-color-secondary-text);transition-property:background-color,background-image,color,border-color,opacity,box-shadow,border-radius;transition-duration:.2s}@media (max-width: 310px){.month-block-label[_ngcontent-jbu-c146]{min-width:60px}}.month-block-label--active[_ngcontent-jbu-c146]{color:var(--yclients-ui-kit-color-primary-text);font-style:normal;font-weight:500;font-size:13px;line-height:16px;cursor:default}.month-block-label-empty[_ngcontent-jbu-c146]{cursor:default}.times-container[_ngcontent-jbu-c146]{padding-top:136px;overflow-y:auto;min-height:calc(100vh - 86px)}.times-container_shifted[_ngcontent-jbu-c146]{padding-top:226px}.times-container-continue_btn[_ngcontent-jbu-c146]{padding-bottom:87px}.times-container-no-days[_ngcontent-jbu-c146]{padding-top:45px}.loader[_ngcontent-jbu-c146]{width:100%;height:100%}.loader-dates[_ngcontent-jbu-c146]{top:70px;position:relative}.times[_ngcontent-jbu-c146]{height:100%;animation:appear .5s linear}.times[_ngcontent-jbu-c146]   .brand-link[_ngcontent-jbu-c146]{padding:40px 0}.day-box[_ngcontent-jbu-c146]{margin-bottom:4px}.day-box[_ngcontent-jbu-c146]:last-child{margin-right:16px}@keyframes appear{0%{opacity:0}to{opacity:1}}.month-block[_ngcontent-jbu-c146]{display:flex;justify-content:space-between;position:fixed;top:calc(57px + var(--safe-area-top));left:0;right:0;z-index:100;background-color:var(--yclients-ui-kit-color-background-default);padding-top:25px;padding-bottom:12px;max-width:600px;margin:0 auto}.month-block__shifted[_ngcontent-jbu-c146]{top:156px}.calendar-days-box[_ngcontent-jbu-c146]{position:fixed;top:calc(122px + var(--safe-area-top));left:0;right:0;z-index:100;background-color:var(--yclients-ui-kit-color-background-default);padding-bottom:12px;max-width:600px;margin:0 auto}.calendar-days-box__shifted[_ngcontent-jbu-c146]{top:220px}.not-allowed[_ngcontent-jbu-c146]{border:1px solid #f6f6f6;border-radius:16px;padding:16px 0}</style><style>@charset "UTF-8";[_nghost-jbu-c95]{display:block;position:fixed;inset:0;width:100%;z-index:11000;overflow:hidden}[_nghost-jbu-c95]   .swipe-area[_ngcontent-jbu-c95]{height:28px;color:var(--yclients-ui-kit-color-white);width:100%;text-align:center;position:relative}[_nghost-jbu-c95]   .swipe-area[_ngcontent-jbu-c95]   .swipe-anchor[_ngcontent-jbu-c95]{height:4px;width:32px;border-radius:8px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);background:var(--yclients-ui-kit-color-grey-main)}[_nghost-jbu-c95]   .swipe-area.with-app-header[_ngcontent-jbu-c95]{height:16px}[_nghost-jbu-c95]   .swipe-area.with-app-header[_ngcontent-jbu-c95]   .swipe-anchor[_ngcontent-jbu-c95]{top:100%;transform:translate(-50%,-100%)}.background[_ngcontent-jbu-c95]{width:100%;height:100%;position:absolute;z-index:10500;opacity:0;will-change:auto;background-color:#000000a6;top:0;transition:opacity .2s ease-in}.dirty[_nghost-jbu-c95]   .background[_ngcontent-jbu-c95]{opacity:0}.showed[_nghost-jbu-c95]   .background[_ngcontent-jbu-c95]{opacity:1}.modal[_ngcontent-jbu-c95]{will-change:auto;display:block;position:absolute;bottom:0;z-index:11000;background-color:#fff;width:100%;transform:translateY(100%);border-top-right-radius:8px;border-top-left-radius:8px;transition:transform .2s ease-in;max-height:90%;overflow:auto}.dirty[_nghost-jbu-c95]   .modal[_ngcontent-jbu-c95]{transform:translateY(100%)}.showed[_nghost-jbu-c95]   .modal[_ngcontent-jbu-c95]{transform:translate(0)}.modal_transparent[_ngcontent-jbu-c95]{background-color:transparent}.window-header[_ngcontent-jbu-c95]{position:relative}.window-header[_ngcontent-jbu-c95]   ui-kit-header[_ngcontent-jbu-c95]{position:static;padding-top:0}.window-header[_ngcontent-jbu-c95]   .back[_ngcontent-jbu-c95], .window-header[_ngcontent-jbu-c95]   .arrow[_ngcontent-jbu-c95]{cursor:pointer;height:24px;position:absolute;left:16px;top:50%;transform:translateY(-50%)}.title[_ngcontent-jbu-c95]{text-align:center;height:56px;line-height:40px;color:#000;font-size:17px;font-weight:500;vertical-align:middle;padding:8px;box-sizing:border-box;border-bottom:.5px solid #f2f5ff}@media (min-width: 500px){[_nghost-jbu-c95]   .swipe-area[_ngcontent-jbu-c95]{display:none}.modal[_ngcontent-jbu-c95]{max-width:392px;left:50%;top:50%;bottom:auto;border-radius:8px;transform:translate(-50%,-50%);opacity:1;transition:opacity .2s ease-in}.dirty[_nghost-jbu-c95]   .modal[_ngcontent-jbu-c95]{opacity:0;transform:translate(-50%,-50%)}.showed[_nghost-jbu-c95]   .modal[_ngcontent-jbu-c95]{opacity:1;transform:translate(-50%,-50%)}}</style><style>@charset "UTF-8";[_nghost-jbu-c91]{display:block;position:fixed;top:0;padding-top:var(--safe-area-top);left:0;right:0;z-index:100;background-color:var(--yclients-ui-kit-color-white);border-bottom:1px solid var(--yclients-ui-kit-color-border-gray);max-width:600px}.without-border[_nghost-jbu-c91]:not(.dark){border-color:var(--yclients-ui-kit-color-white)}.without-border[_nghost-jbu-c91]{border:none}.transparent[_nghost-jbu-c91]{background-color:transparent;border:none}.dark[_nghost-jbu-c91]{background-color:var(--yclients-ui-kit-color-background-dark)}.dark.title[_nghost-jbu-c91]{overflow:hidden;display:flex}.light-gray[_nghost-jbu-c91]{background-color:#f6f6f6}.top[_ngcontent-jbu-c91]{display:flex;width:100%;min-height:56px;padding:0 16px;justify-content:space-between;align-items:center}.box[_ngcontent-jbu-c91]{flex:1;display:flex;justify-content:center;overflow:hidden}.box[_ngcontent-jbu-c91]   .leading[_ngcontent-jbu-c91]{margin-right:auto;padding:8px;margin-left:-8px}.box[_ngcontent-jbu-c91]:nth-child(2){flex:4}.box[_ngcontent-jbu-c91]   .trailing[_ngcontent-jbu-c91]{display:flex;margin-left:auto;padding:8px;margin-right:-8px;white-space:nowrap}.box[_ngcontent-jbu-c91]   .title[_ngcontent-jbu-c91]{overflow:hidden;display:flex}.box   .title   :not(.dark)[_nghost-jbu-c91]{position:relative}.box   .title   :not(.dark)[_nghost-jbu-c91]:after{content:"";height:100%;width:1px;position:absolute;top:0;right:-1px;box-shadow:0 0 10px 10px #fff}.window-header[_ngcontent-jbu-c91]{padding:0 12px;margin-top:8px;margin-bottom:8px;text-align:center}.label-medium[_ngcontent-jbu-c91]{color:var(--yclients-ui-kit-color-brand)}.line-clamp[_ngcontent-jbu-c91]{display:-webkit-box;--max-lines: 2;--line-height: 24px;max-height:calc(var(--line-height) * var(--max-lines));overflow:hidden;-webkit-line-clamp:var(--max-lines);-webkit-box-orient:vertical;font-style:normal;font-weight:500;font-size:17px;line-height:24px}.line-clamp_nowrap[_ngcontent-jbu-c91]{white-space:nowrap}.clickable[_ngcontent-jbu-c91]{cursor:pointer}@media (min-width: 600px){[_nghost-jbu-c91]{margin:0 auto}}.header__icon[_ngcontent-jbu-c91]{display:block;font-size:24px}</style><style>[_nghost-jbu-c45]{-webkit-user-select:none;user-select:none;width:1em;height:1em;line-height:1;font-size:inherit;color:currentColor}[_nghost-jbu-c45]:after{display:block;content:" ";width:inherit;height:inherit}[_nghost-jbu-c45]:not(:empty):after{display:none}[_nghost-jbu-c45]     svg{display:block;width:inherit;height:inherit;line-height:inherit}</style><link type="image/x-icon" rel="shortcut icon" href="https://assets.yclients.com/general/0/0c/0cba12aa594a5d0_20220622132027.png"><style>@charset "UTF-8";[_nghost-jbu-c54]{display:block;width:100%;max-width:600px;padding-left:16px;overflow-x:scroll;overflow-x:scroll!important;transform:translateZ(0);scrollbar-color:rgba(0,0,0,.2) transparent;scrollbar-width:thin;transition:all .2s}[_nghost-jbu-c54]:hover::-webkit-scrollbar-thumb{background-color:#0003}[_nghost-jbu-c54]::-webkit-scrollbar-thumb:hover{background-color:#0000004d}[_nghost-jbu-c54]::-webkit-scrollbar{width:6px;height:6px}[_nghost-jbu-c54]::-webkit-scrollbar-thumb{-webkit-transition:background-color 2s ease-out;transition:background-color 2s ease-out;border-radius:6px}[_nghost-jbu-c54]   .flex-container[_ngcontent-jbu-c54]{display:flex;width:max-content;min-width:max-content;max-width:100%}</style><style>@charset "UTF-8";[_nghost-jbu-c141]{display:flex;justify-content:center;align-items:center;width:52px;-webkit-tap-highlight-color:transparent;cursor:pointer;-webkit-user-select:none;user-select:none}.subtext[_ngcontent-jbu-c141]{color:var(--yclients-ui-kit-color-secondary-text);font-style:normal;font-weight:400;font-size:13px;line-height:16px}.label[_ngcontent-jbu-c141]{display:flex;justify-content:center;align-items:center;height:32px;width:32px;margin-top:16px;border-radius:50%;transition:all .2s;font-style:normal;font-weight:400;font-size:15px;line-height:20px;color:var(--yclients-ui-kit-color-timeslot-default-text)}.center[_ngcontent-jbu-c141]{height:64px;display:flex;flex-direction:column;justify-content:space-between;align-items:center}.pressed[_nghost-jbu-c141]   .label[_ngcontent-jbu-c141]{color:var(--yclients-ui-kit-color-timeslot-active-text);background-color:var(--yclients-ui-kit-color-timeslot-active-bg);box-shadow:0 0 0 1px var(--yclients-ui-kit-color-timeslot-active-border) inset}.disabled[_nghost-jbu-c141]{cursor:not-allowed;opacity:.2}</style><script type="text/javascript" src="./Батя. Черняховского 20_files/tag.js"></script><style>@charset "UTF-8";[_nghost-jbu-c98]{display:flex;flex-direction:column;align-items:center;width:100%;z-index:1000}[_nghost-jbu-c98]   .row[_ngcontent-jbu-c98]{display:flex;justify-content:center;white-space:nowrap}[_nghost-jbu-c98]   .brand-link__text[_ngcontent-jbu-c98]{font-style:normal;font-weight:500;font-size:17px;line-height:24px;color:var(--yclients-ui-kit-color-icons-secondary-text);padding-right:5px}[_nghost-jbu-c98]   .brand-link__text[_ngcontent-jbu-c98], [_nghost-jbu-c98]   .brand-link__image[_ngcontent-jbu-c98], [_nghost-jbu-c98]   .brand-link__subtitle[_ngcontent-jbu-c98]{cursor:pointer}[_nghost-jbu-c98]   .brand-link__subtitle[_ngcontent-jbu-c98]{font-style:normal;font-weight:400;font-size:15px;line-height:20px;color:var(--yclients-ui-kit-color-icons-secondary-text);margin-top:8px}[_nghost-jbu-c98]   .brand-link__image[_ngcontent-jbu-c98]{width:90px;height:24px}</style><style>@charset "UTF-8";[_nghost-jbu-c209]{display:block;border:1px solid var(--yclients-ui-kit-color-timeslot-default-border);border-radius:24px;padding:0 4px;margin-bottom:8px}.label-block[_ngcontent-jbu-c209]{display:flex;height:45px;align-items:center}.label-block-title[_ngcontent-jbu-c209]{color:var(--yclients-ui-kit-color-black);font-style:normal;font-weight:500;font-size:13px;line-height:16px;text-align:center;margin-left:auto;padding-left:45px;text-transform:uppercase;letter-spacing:.04em}.label-block-collapse-icon[_ngcontent-jbu-c209]{margin-left:auto;padding-right:15px;padding-left:15px;cursor:pointer;transform:rotate(180deg);color:var(--yclients-ui-kit-color-primary-agile)}.label-block-collapsed-icon-drop[_ngcontent-jbu-c209]{padding-left:15px;transform:rotate(0)}.time-interval[_ngcontent-jbu-c209]{margin:4px;flex:0 1 calc(33.33333% - 8px);width:106px;min-width:85px}@media (max-width: 310px){.time-interval[_ngcontent-jbu-c209]{flex:0 1 calc(50% - 8px)}}@media (max-width: 370px){  .time-interval .label{font-size:14px}}.time-interval-blocks[_ngcontent-jbu-c209]{display:flex;flex-wrap:wrap;padding-bottom:4px}</style><style>@charset "UTF-8";[_nghost-jbu-c156]{padding:12px;display:flex;justify-content:center;align-items:center;border-width:1px;border-style:solid;border-radius:20px;transition:all .2s;-webkit-tap-highlight-color:transparent;cursor:pointer;-webkit-user-select:none;user-select:none;white-space:nowrap;color:var(--yclients-ui-kit-color-timeslot-default-text);border-color:var(--yclients-ui-kit-color-timeslot-default-border);background-color:var(--yclients-ui-kit-color-timeslot-default-bg)}[_nghost-jbu-c156]   .label[_ngcontent-jbu-c156]{font-style:normal;font-weight:400;font-size:15px;line-height:20px}.active[_nghost-jbu-c156]{color:var(--yclients-ui-kit-color-timeslot-active-text);border-color:var(--yclients-ui-kit-color-timeslot-active-border);background-color:var(--yclients-ui-kit-color-timeslot-active-bg)}</style></head>
<body style="overflow: scroll;">
<app-root ng-version="13.3.11">
    <div class="app-wrapper">
        <app-disabled _nghost-jbu-c128="">
            <app-localization-host _nghost-jbu-c129="" class="ng-star-inserted"></app-localization-host>
            <router-outlet class="ng-star-inserted"></router-outlet>
            <app-select-date-time-page _nghost-jbu-c121="" class="ng-star-inserted">
                <app-header-wrapper _ngcontent-jbu-c121="" class="select-date-time-header" _nghost-jbu-c137="">
                    <ui-kit-header _ngcontent-jbu-c137="" _nghost-jbu-c91="" class="ng-star-inserted">
                        <div _ngcontent-jbu-c91="" class="top"><div _ngcontent-jbu-c91="" class="box">
                                <div _ngcontent-jbu-c91="" class="leading clickable">
                                    <ui-kit-svg-icon _ngcontent-jbu-c91="" class="header__icon ng-star-inserted" _nghost-jbu-c45="" data-locator="pointer_back">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.7071 3.29289C11.0976 3.68342 11.0976 4.31658 10.7071 4.70711L3.41421 12L10.7071 19.2929C11.0976 19.6834 11.0976 20.3166 10.7071 20.7071C10.3166 21.0976 9.68342 21.0976 9.29289 20.7071L1.29289 12.7071C0.902369 12.3166 0.902369 11.6834 1.29289 11.2929L9.29289 3.29289C9.68342 2.90237 10.3166 2.90237 10.7071 3.29289Z" fill="currentColor"></path>
                                        </svg>
                                    </ui-kit-svg-icon>
                                </div>
                            </div>
                            <div _ngcontent-jbu-c91="" class="box">
                                <div _ngcontent-jbu-c91="" class="title">
                                    <span _ngcontent-jbu-c91="" class="window-header line-clamp ng-star-inserted"> Выбрать дату и время </span>
                                </div>
                            </div>
                            <div _ngcontent-jbu-c91="" class="box">
                                <div _ngcontent-jbu-c91="" class="trailing" data-locator="personal_account_btn"></div>
                            </div>
                        </div>
                    </ui-kit-header>
                    <app-modal _ngcontent-jbu-c137="" class="hide-plate ng-tns-c95-1 ng-star-inserted" _nghost-jbu-c95="" style="height: 0px;">
                        <div _ngcontent-jbu-c95="" class="background ng-tns-c95-1"></div><div _ngcontent-jbu-c95="" class="modal ng-tns-c95-1 ng-star-inserted" data-locator="expanded_modal_popup"><div _ngcontent-jbu-c95="" class="window-header ng-tns-c95-1"><div _ngcontent-jbu-c95="" class="swipe-area ng-tns-c95-1 ng-star-inserted"><div _ngcontent-jbu-c95="" class="swipe-anchor ng-tns-c95-1"></div></div></div><div _ngcontent-jbu-c95="" uikithandlechildscroll="" class="ng-tns-c95-1 ng-trigger ng-trigger-routeAnimations"></div></div></app-modal>
                    </app-header-wrapper>
                <div _ngcontent-jbu-c121="" class="container">
                    <app-new-select-time _ngcontent-jbu-c121="" _nghost-jbu-c146="">
                        <div _ngcontent-jbu-c146="" class="month-block"><p
                                    _ngcontent-jbu-c146="" class="month-block-label month-block-label-empty ng-star-inserted"></p><p
                                    _ngcontent-jbu-c146="" class="month-block-label month-block-label--active" data-locator="current_month"></p><p
                                    _ngcontent-jbu-c146="" class="month-block-label ng-star-inserted" data-locator="next_month"></p>
                        </div>
                        <app-loader _ngcontent-jbu-c146="" class="loader loader-dates" _nghost-jbu-c52="">
                            <ui-kit-horizontal-scrollable  _ngcontent-jbu-c146="" class="calendar-days-box ng-star-inserted" _nghost-jbu-c54="">
                                <div id="calendar-days"  _ngcontent-jbu-c54="" class="flex-container">
                                </div>
                            </ui-kit-horizontal-scrollable>
                        </app-loader>
                        <div _ngcontent-jbu-c146="" class="times-container">

                            <app-loader _ngcontent-jbu-c146="" class="loader" _nghost-jbu-c52="">
                                <?php Pjax::begin([
                                        'id'=>'select_time',
                                        'timeout'=>1000000,
                                ]);?>
                                <div _ngcontent-jbu-c146="" class="times ng-star-inserted" data-locator="timeslots_group">
                                    <?php foreach ($times as $k=>$v):?>
                                    <app-collapsed-time-intervals _ngcontent-jbu-c146="" _nghost-jbu-c209="" data-locator="timeslots_group_title" class="ng-star-inserted">
                                        <div _ngcontent-jbu-c209="" role="button" class="label-block">
                                            <p _ngcontent-jbu-c209="" data-locator="day_block_title" class="label-block-title"><?=$k;?></p>
                                            <div _ngcontent-jbu-c209="" data-locator="day_block_collapse_icon" class="label-block-collapse-icon label-block-collapsed-icon-drop">
                                                <ui-kit-svg-icon _ngcontent-jbu-c209="" _nghost-jbu-c45="">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.37534 4.21913C7.74056 3.92696 8.25951 3.92696 8.62473 4.21913L13.6247 8.21913C14.056 8.56414 14.1259 9.19343 13.7809 9.62469C13.4359 10.056 12.8066 10.1259 12.3753 9.78087L8.00004 6.28062L3.62473 9.78087C3.19347 10.1259 2.56418 10.056 2.21917 9.62469C1.87416 9.19343 1.94408 8.56414 2.37534 8.21913L7.37534 4.21913Z" fill="currentColor"></path>
                                                    </svg>
                                                </ui-kit-svg-icon>
                                            </div>
                                        </div>
                                        <div _ngcontent-jbu-c209="" class="time-interval-blocks ng-star-inserted">
                                            <?php foreach ($v as $key=>$val):?>
                                            <app-time-interval _ngcontent-jbu-c209="" class="time-interval ng-star-inserted" _nghost-jbu-c156="" data-locator="timeslot">
                                                <p _ngcontent-jbu-c156="" class="label"><?= $val;?></p>
                                            </app-time-interval>
                                            <?php endforeach;?>
                                        </div>
                                    </app-collapsed-time-intervals>
                                    <?php endforeach;?>
                                    <app-brand-link _ngcontent-jbu-c146="" class="brand-link" _nghost-jbu-c98="">
                                        <div _ngcontent-jbu-c98="" class="row">
                                            <span _ngcontent-jbu-c98="" class="brand-link__text">Работает на</span>
                                            <img _ngcontent-jbu-c98="" alt="background-logo" class="brand-link__image" src="./Батя. Черняховского 20_files/yclients.svg">
                                        </div>
                                    </app-brand-link>
                                </div>
                                <?php Pjax::end();?>
                            </app-loader>
                        </div>
                    </app-new-select-time>
                </div>
            </app-select-date-time-page>
        </app-disabled>
        <app-lock-landscape _nghost-jbu-c102="" class="ng-star-inserted">
            <div _ngcontent-jbu-c102="" class="background"></div>
            <div _ngcontent-jbu-c102="" class="container"><img _ngcontent-jbu-c102="" src="./Батя. Черняховского 20_files/inverted-phone.svg" alt=""><p _ngcontent-jbu-c102="">Будет удобнее, если повернуть устройство вертикально</p></div></app-lock-landscape><!----></div><app-company-favicon></app-company-favicon><ui-kit-modal _nghost-jbu-c131="" class="ng-tns-c131-0" style="height: 0px;"><div _ngcontent-jbu-c131="" class="background ng-tns-c131-0"></div><div _ngcontent-jbu-c131="" class="modal ng-tns-c131-0" data-locator="expanded_modal_popup"><div _ngcontent-jbu-c131="" class="window-header ng-tns-c131-0"><div _ngcontent-jbu-c131="" class="swipe-area ng-tns-c131-0 ng-star-inserted"><div _ngcontent-jbu-c131="" class="swipe-anchor ng-tns-c131-0"></div></div><!----><!----></div><div _ngcontent-jbu-c131="" uikithandlechildscroll="" class="content-container ng-tns-c131-0 ng-trigger ng-trigger-routeAnimations"><template _ngcontent-jbu-c131="" class="ng-tns-c131-0"></template><!----></div></div></ui-kit-modal></app-root>
<script>

</script>

<script src="/web/assets/79a4884f/jquery.js"></script>
<script src="/web/assets/a006455d/yii.js"></script>
<script>
    $(document).ready(function () {
        let monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"]
        dayNames = ["ВС", "ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ"]
        now = new Date();

        let daysContainer = document.querySelector("#calendar-days");

        let moth_block = document.querySelector('.month-block')
        previos = moth_block.childNodes[0]
        curent = moth_block.childNodes[1]
        next = moth_block.childNodes[2];
        let montsButtons = [previos, curent, next];

        let flag1=false,
            flag2=false;


        function addDaysNow(){

            let date=new Date();
            <?php $date=date("Y-m-d");?>

            let now_d = date.getMonth();
            <?php $now_month=date("m");?>
            <?php while (date("m", strtotime("$date"))==$now_month){?>
                daysContainer.innerHTML+=`<app-day-box _ngcontent-jbu-c146="" class="day-box ng-star-inserted <?= SessionHelper::Time($date);?>" data-time="<?=$date;?>" _nghost-jbu-c141 data-locator="working_day"><div _ngcontent-jbu-c141="" class="center">
                                   <p _ngcontent-jbu-c141="" class="subtext">${dayNames[date.getDay()]}</p>
                                   <p _ngcontent-jbu-c141="" class="label" data-locator="working_day_number">${[date.getDate()]}</p></div></app-day-box>`;
                date.setDate(date.getDate() + 1);
                <?php $date=date( "Y-m-d", strtotime('+1 day', strtotime("$date")));?>
            <?php
            }
            ?>
        }

        function addDaysNext(month){

            let date = new Date(now.getFullYear(), month, 1);

            <?php if((date("m", strtotime("+1 month"))) < date("m")):?>
                <?php $date=date("Y-m-d", mktime(0,0,0, date("m")+1, 01, date("Y")+1 ));?>
            <?php else:?>
                <?php $date=date("Y-m-d", mktime(0,0,0, date("m")+1, 01, date("Y")));?>
            <?php endif;?>

            <?php $now_month=date("m", strtotime("+1 month"));?>
            <?php while (date("m", strtotime("$date"))==$now_month){?>
                daysContainer.innerHTML+=`<app-day-box _ngcontent-jbu-c146="" class="day-box ng-star-inserted <?= SessionHelper::Time($date);?>" data-time="<?=$date;?>" _nghost-jbu-c141 data-locator="working_day"><div _ngcontent-jbu-c141="" class="center">
                                   <p _ngcontent-jbu-c141="" class="subtext">${dayNames[date.getDay()]}</p>
                                   <p _ngcontent-jbu-c141="" class="label" data-locator="working_day_number">${[date.getDate()]}</p></div></app-day-box>`;
                date.setDate(date.getDate() + 1);
                <?php $date=date( "Y-m-d", strtotime('+1 day', strtotime("$date")));?>
            <?php
            }
            ?>
        }

        function changeMonth(a) {
            montsButtons[2 - a].innerHTML = `${monthNames[now.getMonth() + 1]}`;
            montsButtons[1 - a].innerHTML = `${monthNames[now.getMonth()]}`;
            montsButtons[0 + (2 * a)].innerHTML = ``;
            daysContainer.innerHTML = ``;
            if(a==0){
                addDaysNow();
            }else if(a==1){
                addDaysNext(now.getMonth() + 1);
            }

        }

        function makeButton(){
            if(flag1 && flag2){
                $('app-new-select-time').append("<ui-kit-button _ngcontent-kgn-c199=\"\" class=\"fixed-button ng-star-inserted\" _nghost-kgn-c42=\"\" data-locator=\"continue_btn\">" +
                    "<a href="+`http://barbershop/web/time/session?date=${(monthNames.indexOf(curent.innerHTML)<now.getMonth())? now.getFullYear()+1: now.getFullYear()}-${("0"+(monthNames.indexOf(curent.innerHTML)+1)).slice(-2)}-${("0"+flag1).slice(-2)}&time=${flag2}:00`+">"+
                    "<button _ngcontent-kgn-c42=\"\" class=\"button type-primary size-medium full-width\" tabindex=\"0\">" +
                    "<span _ngcontent-kgn-c42=\"\" class=\"button__row\">" +
                    "<div _ngcontent-kgn-c42=\"\" class=\"button__label\" data-locator=\"selected_service_count\">" +
                    "</div>" +
                    "<div _ngcontent-kgn-c42=\"\" class=\"button__start-icon\"></div>" +
                    "<div _ngcontent-kgn-c42=\"\" class=\"button__content\">Продолжить</div></span>" +
                    "<span _ngcontent-kgn-c42=\"\" class=\"button__caption\"></span></button>" +
                    "</a>"+
                    "</ui-kit-button>");
            }
        }

        function reqAjax(date) {
            $.ajax({
                url: 'show',
                method: 'get',
                data: {date: date},
                success: function () {
                    console.log('suc')
                    $.pjax({
                        type       : 'GET',
                        url        : 'show',
                        container  : '#select_time',
                        data       : {date: date},
                        push       : true,
                        replace    : false,
                        timeout    : 1000000000,
                        "scrollTo" : false
                    })
                },
                error: function () {
                    console.log('error');
                }
            });
        }

        makeButton();

        let sessionDate="<?=\Yii::$app->session->get('time');?>".slice(0, 10),
            day_boxes=document.querySelectorAll('.day-box');

        if(sessionDate) {
            if (Number(sessionDate.slice(5, 7)) > (now.getMonth()+1)) {
                changeMonth(1);
            } else {
                changeMonth(0);
            }
            reqAjax(`${sessionDate}`);
        }else {
            changeMonth(0);
            reqAjax("<?= date("Y-m-d");?>");
        }


        curent.innerHTML = `${monthNames[now.getMonth()]}`;
        next.innerHTML = `${monthNames[now.getMonth() + 1]}`;

        next.addEventListener('click', function () {
            changeMonth(1);
        });

        if (previos.innerHTML != null) {
            previos.addEventListener('click', function () {
                changeMonth(0);
            });
        }

        $('#calendar-days').on('click', 'app-day-box',function (){
            $(this).siblings().removeClass('pressed');
            $(this).addClass('pressed');
            flag1=$(this).find('p.label').html();
            makeButton();
            reqAjax(`${$(this).data('time')}`);
        });


        $('.time-interval').click(function (){
            $('.time-interval-blocks').children().removeClass('active');
            $(this).addClass('active');
            flag2=$(this).find('p.label').html();
            makeButton();
        });

        $(document).on('pjax:complete', function (){

            function makeButton(){
                if(flag1 && flag2){
                    $('app-new-select-time').append("<ui-kit-button _ngcontent-kgn-c199=\"\" class=\"fixed-button ng-star-inserted\" _nghost-kgn-c42=\"\" data-locator=\"continue_btn\">" +
                        "<a href="+`http://barbershop/web/time/session?date=${(monthNames.indexOf(curent.innerHTML)<now.getMonth())? now.getFullYear()+1: now.getFullYear()}-${("0"+(monthNames.indexOf(curent.innerHTML)+1)).slice(-2)}-${("0"+flag1).slice(-2)}&time=${flag2}:00`+">"+
                        "<button _ngcontent-kgn-c42=\"\" class=\"button type-primary size-medium full-width\" tabindex=\"0\">" +
                        "<span _ngcontent-kgn-c42=\"\" class=\"button__row\">" +
                        "<div _ngcontent-kgn-c42=\"\" class=\"button__label\" data-locator=\"selected_service_count\">" +
                        "</div>" +
                        "<div _ngcontent-kgn-c42=\"\" class=\"button__start-icon\"></div>" +
                        "<div _ngcontent-kgn-c42=\"\" class=\"button__content\">Продолжить</div></span>" +
                        "<span _ngcontent-kgn-c42=\"\" class=\"button__caption\"></span></button>" +
                        "</a>"+
                        "</ui-kit-button>");
                }
            }

            $('.time-interval').click(function (){
                $('.time-interval-blocks').children().removeClass('active');
                $(this).addClass('active');
                flag2=$(this).find('p.label').html();
                makeButton();
            });
        });

    });

</script>
<div class="notification-area"></div></body></html>
<style>@charset "UTF-8";@font-face{font-family:Inter;src:url(inter-thin.edb371061375075f.ttf) format("truetype");font-weight:100;font-style:normal}@font-face{font-family:Inter;src:url(inter-extra-light.de1642355fa969d5.ttf) format("truetype");font-weight:200;font-style:normal}@font-face{font-family:Inter;src:url(inter-light.c1350cd2cfdafefc.ttf) format("truetype");font-weight:300;font-style:normal}@font-face{font-family:Inter;src:url(inter-regular.0fdeb2931d05200e.ttf) format("truetype");font-weight:400;font-style:normal}@font-face{font-family:Inter;src:url(inter-medium.b9d1825c254cd73b.ttf) format("truetype");font-weight:500;font-style:normal}@font-face{font-family:Inter;src:url(inter-semibold.e8331194cc39db45.ttf) format("truetype");font-weight:600;font-style:normal}@font-face{font-family:Inter;src:url(inter-bold.a2753c92736fd328.ttf) format("truetype");font-weight:700;font-style:normal}@font-face{font-family:Inter;src:url(inter-extra-bold.b7197d1427d9852f.ttf) format("truetype");font-weight:800;font-style:normal}@font-face{font-family:Inter;src:url(inter-black.7a0c9838fc6b0810.ttf) format("truetype");font-weight:900;font-style:normal}.app-wrapper{display:block;max-width:600px;height:100%;margin:0 auto}.container{padding:57px 16px 40px}.horizontal-line{display:block;width:calc(100% + 40px);margin-left:-20px;margin-right:-20px;height:1px;background:#f2f5ff}.horizontal-line--list-item{margin-left:0;width:calc(100% + 20px)}.horizontal-line--list-item:last-child{display:none}.translucent{opacity:.5}.notification-area{max-height:100%;position:fixed;top:var(--safe-area-top);left:0;right:0;z-index:100000}.separate-line{height:1px;width:100%;background-color:#e6ecff}.big-separate-line{height:1px;margin-left:-16px;width:calc(100% + 32px);background-color:#f2f2f2}.fixed-button{position:fixed;bottom:24px;left:16px;right:16px}@media(min-width:600px){.fixed-button{margin:0 auto;width:568px;max-width:calc(100% - 32px)}}.cdk-virtual-scroll-viewport{overflow-x:scroll!important;transform:translateZ(0);scrollbar-color:rgba(0,0,0,.2) transparent;scrollbar-width:thin}.cdk-virtual-scroll-viewport:hover::-webkit-scrollbar-thumb{background-color:#0003}.cdk-virtual-scroll-viewport::-webkit-scrollbar-thumb:hover{background-color:#0000004d}.cdk-virtual-scroll-viewport::-webkit-scrollbar{width:6px;height:6px}.cdk-virtual-scroll-viewport::-webkit-scrollbar-thumb{-webkit-transition:background-color 2s ease-out;transition:background-color 2s ease-out;border-radius:6px}p,h1,h2,h3{margin:0;padding:0}a{margin:0;padding:0;text-decoration:none;color:var(--yclients-ui-kit-color-primary-text)}h1{font-size:var(--yclients-ui-kit-h1-font-size);font-weight:var(--yclients-ui-kit-h1-font-weight);line-height:var(--yclients-ui-kit-h1-lineHeight);font-style:normal}h2{font-style:normal;font-weight:700;font-size:17px;line-height:20px}h3{font-style:normal;font-weight:600;font-size:17px;line-height:22px}.window-header{font-style:normal;font-weight:var(--yclients-ui-kit-windowHeader-font-weight);font-size:var(--yclients-ui-kit-windowHeader-font-size);line-height:var(--yclients-ui-kit-windowHeader-lineHeight)}.upper-text{font-style:normal;font-weight:400;font-size:17px;line-height:20px}.button-text{font-style:normal;font-weight:500;font-size:17px;line-height:20px}.base-text{font-style:normal;font-weight:400;font-size:16px;line-height:20px}.price{font-style:normal;font-weight:700;font-size:16px;line-height:20px}.label{font-style:normal;font-weight:var(--yclients-ui-kit-font-label-weight);font-size:var(--yclients-ui-kit-font-label-size);line-height:var(--yclients-ui-kit-font-label-lineHeight)}.label-medium{font-style:normal;font-weight:500;font-size:15px;line-height:16px}.window-subheader{font-style:normal;font-weight:400;font-size:14px;line-height:16px}.subtext{font-style:normal;font-weight:var(--yclients-ui-kit-font-subtext-weight);font-size:var(--yclients-ui-kit-font-subtext-size);line-height:var(--yclients-ui-kit-font-subtext-lineHeight)}.overflow-ellipsis{text-overflow:ellipsis;white-space:nowrap;overflow:hidden}.capitalize{text-transform:capitalize}.text-center{text-align:center}input,textarea{border:none;border-radius:0;padding:0;margin:0;outline:none;-webkit-appearance:none;appearance:none;font-family:Inter,serif;resize:none}input[type=text],input[type=submit],textarea{-webkit-appearance:none}button{outline:none;border:none}html{--safe-area-top: 0px;--safe-area-bottom: 0px;--ion-safe-area-left: 0px;--ion-safe-area-right: 0px}html.native-ios{--safe-area-top: env(safe-area-inset-top, 0px);--safe-area-bottom: env(safe-area-inset-bottom, 0px);--ion-safe-area-left: env(safe-area-inset-left, 0px);--ion-safe-area-right: env(safe-area-inset-right, 0px);margin-top:var(--safe-area-top);height:calc(100% - var(--safe-area-top));-webkit-tap-highlight-color:transparent;overflow:hidden;position:fixed;inset:0}html.native-ios body{-webkit-overflow-scrolling:auto;overflow:scroll}html.position-fixed-hack{overflow:hidden;position:fixed;inset:0}html.position-fixed-hack body{-webkit-overflow-scrolling:auto;overflow:scroll}html.native-android{-webkit-tap-highlight-color:transparent}html,body{font-family:Inter,serif;margin:0;padding:0;width:100%;height:100%;background:var(--yclients-ui-kit-color-grey-background);color:var(--yclients-ui-kit-color-black);--yclients-ui-kit-h1-font-weight: 800;--yclients-ui-kit-h1-font-size: 32px;--yclients-ui-kit-h1-lineHeight: 32px;--yclients-ui-kit-windowHeader-font-size: 17px;--yclients-ui-kit-windowHeader-font-weight: 600;--yclients-ui-kit-windowHeader-lineHeight: 20px;--yclients-ui-kit-font-subtext-size: 13px;--yclients-ui-kit-font-subtext-lineHeight: 16px;--yclients-ui-kit-font-subtext-weight: normal;--yclients-ui-kit-font-label-size: 15px;--yclients-ui-kit-font-label-weight: normal;--yclients-ui-kit-font-label-lineHeight: 16px;--yclients-ui-kit-color-brand: #fcce2c;--yclients-ui-kit-color-grey-main: #808080;--yclients-ui-kit-color-grey-background: #f5f5f5;--yclients-ui-kit-color-black: #292b33;--yclients-ui-kit-color-white: #fff;--yclients-ui-kit-textarea-border-radius: 4px;--yclients-ui-kit-textarea-border: 1px solid #f2f2f2;--yclients-ui-kit-textarea-background-color: #f2f2f2;--yclients-ui-kit-textarea-placeholder-color: #f2f2f2;--yclients-ui-kit-logo-border-radius: 8px;--yclients-ui-kit-logo-size-medium: 64px;--yclients-ui-kit-rating-star-image: url(/assets/icon/review/star.svg);--yclients-ui-kit-rating-star-image-selected: url(/assets/icon/review/star-selected.svg);--yclients-ui-kit-rating-star-image2: url(/assets/icon/review/star2.svg);--yclients-ui-kit-rating-star-image2-selected: url(/assets/icon/review/star2-selected.svg);--yclients-ui-kit-rating-star-big-size: 24px;--yclients-ui-kit-rating-star-offset: 0}body.mobile.landscape{overflow:hidden!important}body.mobile{-webkit-user-select:none;user-select:none}*{box-sizing:border-box}*:focus{outline:none}.show-header{z-index:99999!important}.hide-plate .modal{height:0}.disable-scroll{position:fixed;width:100%;overflow-y:scroll;overscroll-behavior:contain}</style>
