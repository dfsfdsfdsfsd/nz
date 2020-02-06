<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = 'e04fo3';

$ta = new TALoader($campaign_id);


if ($ta->suppress_response()) {//Do not send any output when hybrid mode is enabled and a visitor is being filtered (after hybrid page was generated)
    exit;
}

$response = $ta->get_response();
$visitor = $ta->get_visitor();

/*
 * Advanced users: uncomment lines below during development to expose variables you may want to use in your custom code:
 */
//print_r($response);
//print_r($visitor);
//exit;
/*
 * Don't forget to re-comment the lines above before sending live traffic
 */

/*
Note: when using hybrid mode, please use one of our built-in functions as your final step when routing your visitors:
    print header_redirect("http://url.com"); //performs a 302 header redirect (or a window.location=xxx in JS)
    print load_fullscreen_iframe("http://url.com"); //Loads a fullscreen iframe of the specified URL
    print paste_html("http://url.com"); //Downloads HTML in specified URL and outputs it to the screen (uses JS to insert the HTML in hybrid mode)
(These functions will automatically output either regular HTML or JS code depending on what the visitor's browser is expecting)
*/

switch ($response['action']) {
    case 'header_redirect':
        print header_redirect($response['url']); //Uses <script>window.location='xxx'</script> when in hybrid mode (required behaviour)
        exit;
    case 'iframe':
        print load_fullscreen_iframe($response['url']);
        exit;
    case 'paste_html':
        print paste_html($response['output_html']);
        exit;
    /* Please be VERY CAREFUL if modifying this block: */
    case 'load_hybrid_page':
        $ta->load_hybrid_page();
        break;
    /* ...it is needed for hybrid mode to function correctly */
}

/*
 * Note: if using the "Remain on Safe Page" action for Filtered Visitors, append your safe page's HTML/PHP code after the closing PHP tag below:
 */
?>






<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>fortagnada</title><meta name="author" content="fortagnada"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://fortagnada.appspot.com/"/>
<meta property="og:site_name" content="fortagnada"/>
<meta property="og:title" content="Welcome to fortagnada"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/97009"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="fortagnada"/>
<meta name="twitter:description" content="Welcome to fortagnada"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/97009"/>
<meta name="twitter:image:alt" content="fortagnada"/>
<meta name="theme-color" content="#a9970b"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e645c3e6fe995b50/script.js" crossorigin></script>
<script type="text/javascript">"undefined"===typeof _trfq&&(window._trfq=[]);"undefined"==typeof _trfd&&(window._trfd=[]);</script>
<script type="text/javascript">function logTcclEvent(){var t=this.getAttribute("data-tccl");if(window._trfq&&t)try{for(var e=t.split(","),r=e[0],d=e[1],n=e.splice(2),c=[],o=0;o<n.length;o+=2)c.push([n[o],n[o+1]]);window._trfq.push(["cmdLogEvent",d,r,c])}catch(e){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.log",[["error",e.toString()],["data",t]]])}}"undefined"!=typeof window&&"undefined"!=typeof document&&window.addEventListener("DOMContentLoaded",function(){for(var t=document.querySelectorAll("[data-tccl]"),e=0;e<t.length;e++)try{var r=t[e].getAttribute("data-tccl").split(",");t[e].addEventListener(r[1],logTcclEvent)}catch(t){window._trfq.push(["cmdLogEvent","gc_published_site_error","tccl.published.add",[["error",t.toString()]]])}});</script>
<script type="text/javascript">"use strict";

if ('serviceWorker' in navigator) {
  window.addEventListener('load', function () {
    navigator.serviceWorker.register('/sw.js').then(function () {
      console.log('sw: registration complete');
    }).catch(function (err) {
      console.log(err);
    });
  });
}</script>
<style type="text/css">/*
Copyright 2016 The Cabin Project Authors (impallari@gmail.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhquylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhruylEeQ5JZ-Y.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Cabin';
  font-style: normal;
  font-weight: 700;
  src: local('Cabin Bold'), local('Cabin-Bold'), url(https://img1.wsimg.com/gfonts/s/cabin/v14/u-480qWljRw-PdeL2uhluylEeQ5J.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright (c) 2010-2011 by tyPoland Lukasz Dziedzic (team@latofonts.com) with Reserved Font Name "Lato". Licensed under the SIL Open Font License, Version 1.1.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 400;
  src: local('Lato Italic'), local('Lato-Italic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHjxsAXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_FQftx9897sxZ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: italic;
  font-weight: 700;
  src: local('Lato Bold Italic'), local('Lato-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u_w4BMUTPHjxsI5wq_Gwftx9897g.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AUi-qNiXg7eU0.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 100;
  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u8w4BMUTPHh30AXC-qNiXg7Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 300;
  src: local('Lato Light'), local('Lato-Light'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh7USSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjxAwXiWtFCfQ7A.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 400;
  src: local('Lato Regular'), local('Lato-Regular'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6uyw4BMUTPHjx4wXiWtFCc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 700;
  src: local('Lato Bold'), local('Lato-Bold'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh6UVSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* latin-ext */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwaPGQ3q5d0N7w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Lato';
  font-style: normal;
  font-weight: 900;
  src: local('Lato Black'), local('Lato-Black'), url(https://img1.wsimg.com/gfonts/s/lato/v16/S6u9w4BMUTPHh50XSwiPGQ3q5d0.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/a886dc3479b2e20c/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-q{padding-top:32px}}@media (max-width: 767px){.x .c1-r{padding-bottom:32px}}@media (max-width: 767px){.x .c1-2d{width:100%}}@media (max-width: 767px){.x .c1-3x{margin-bottom:24px}}@media (max-width: 767px){.x .c1-4n > :nth-child(n){margin-bottom:16px}}@media (max-width: 767px){.x .c1-4o  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-7g{display:flex}}@media (max-width: 767px){.x .c1-7h{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/f26165a9c81890fd/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/2f0a8c63243bbf72/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1g{width:1160px}}@media (min-width: 1280px){.x .c1-2u{font-size:44px}}@media (min-width: 1280px){.x .c1-3a{font-size:14px}}@media (min-width: 1280px){.x .c1-3n{font-size:12px}}@media (min-width: 1280px){.x .c1-40{font-size:22px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1h{width:1280px}}@media (min-width: 1536px){.x .c1-2v{font-size:48px}}@media (min-width: 1536px){.x .c1-3b{font-size:16px}}@media (min-width: 1536px){.x .c1-3o{font-size:14px}}@media (min-width: 1536px){.x .c1-41{font-size:24px}}</style>
<style type="text/css">.grecaptcha-badge { visibility: hidden; }</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-cabin" context="[object Object]"><div id="layout-b-638311-d-f-10-d-455-c-8640-50347-cac-3-ad-7" class="layout layout-layout layout-layout-layout-11 locale-en-US lang-en"><div data-ux="Page" id="page-12471" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="197dbd3f-ac1a-45fb-84a0-eb636874eecd" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-b c1-c c1-k c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-u c1-v c1-w c1-x c1-y c1-4 c1-z c1-t c1-10 c1-11 c1-12 c1-13 c1-14 c1-15 c1-16 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/></div><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-17 c1-18 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-y c1-1n c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-1u c1-1d c1-1v c1-1w c1-1x c1-1y c1-1z c1-20 c1-b c1-c c1-21 c1-22 c1-23 c1-24 c1-d c1-25 c1-26 c1-27 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-28 c1-1d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-29 c1-2a c1-2b c1-2c c1-1d c1-x c1-1a c1-y c1-19 c1-c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="1df80766-6e44-4134-8818-db11ab1d5e5d" title="fortagnada" href="/" class="x-el x-el-a c1-2f c1-2g c1-2h c1-20 c1-1z c1-2i c1-2j c1-10 c1-11 c1-12 c1-13 c1-b c1-2k c1-c c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.12473.click,click"><div id="bs-1"><h3 typography="HeadingAlpha" data-ux="LogoHeading" id="logo-container-12474" logoText="fortagnada" class="x-el x-el-h3 c1-29 c1-2a c1-20 c1-1z c1-2o c1-16 c1-15 c1-x c1-y c1-1d c1-2b c1-2c c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-2v x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-29 c1-2a c1-2b c1-4 c1-2q c1-2w c1-2l c1-2x c1-2c c1-2s c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-field-id x-d-field-route">fortagnada</span></h3></div></a></div></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-16 c1-15 c1-2y c1-2z c1-1d c1-30 c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><h1 typography="DetailsBeta" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-31 c1-2a c1-20 c1-1z c1-32 c1-16 c1-15 c1-33 c1-y c1-28 c1-z c1-b c1-34 c1-35 c1-36 c1-37 c1-38 c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route">Welcome to fortagnada</h1><div id="bs-2"><div data-ux="Element" id="tagline-container-12475" class="x-el x-el-div c1-1 c1-2 c1-20 c1-1z c1-2o c1-3c c1-b c1-c c1-d c1-3d c1-e c1-f c1-g x-d-ux"><h1 typography="DetailsBeta" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-31 c1-2a c1-20 c1-1z c1-32 c1-16 c1-15 c1-33 c1-y c1-3e c1-2b c1-4 c1-28 c1-c c1-b c1-34 c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Welcome to fortagnada</h1><span data-ux="Element" data-size="small" data-scaler-id="scaler-tagline-container-12475" class="x-el x-el-span c1-29 c1-2a c1-3f c1-3g c1-z c1-3h c1-3i c1-3j c1-35 c1-2c c1-37 c1-39 c1-3a c1-3b x-d-ux x-d-size x-d-scaler-id">Welcome to fortagnada</span><span data-ux="Element" data-size="xsmall" data-scaler-id="scaler-tagline-container-12475" class="x-el x-el-span c1-29 c1-2a c1-3f c1-3g c1-z c1-3h c1-3i c1-3j c1-3k c1-2c c1-3l c1-3m c1-3n c1-3o x-d-ux x-d-size x-d-scaler-id">Welcome to fortagnada</span></div></div></div></div></div></div></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-28 c1-4 c1-3p c1-3q c1-18 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" data-field-id="background" class="x-el x-el-figure c1-1 c1-2 c1-s c1-2b c1-x c1-15 c1-y c1-16 c1-1d c1-3q c1-3p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id"><img src="//img1.wsimg.com/isteam/stock/97009/:/rs=h:500,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/97009/:/rs=h:500,cg:true,m,
//img1.wsimg.com/isteam/stock/97009/:/rs=h:750,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/97009/:/rs=h:1000,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/97009/:/rs=h:1500,cg:true,m 3x" alt="image4" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" class="x-el x-el-img c1-1 c1-2 c1-1d c1-3r c1-19 c1-1a c1-x c1-y c1-3s c1-3q c1-3p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/97009/:/rs=h:500,cg:true,m, //img1.wsimg.com/isteam/stock/97009/:/rs=h:750,cg:true,m 1.5x, //img1.wsimg.com/isteam/stock/97009/:/rs=h:1000,cg:true,m 2x, //img1.wsimg.com/isteam/stock/97009/:/rs=h:1500,cg:true,m 3x";i.src="//img1.wsimg.com/isteam/stock/97009/:/rs=h:500,cg:true,m";})()</script></figure></div></div></div></div></section> </div></div></div><div id="3344378f-5d82-4585-ad86-423eda4fdb29" class="widget widget-about widget-about-about-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-29 c1-2a c1-20 c1-1z c1-3t c1-16 c1-15 c1-x c1-3u c1-3v c1-2c c1-3w c1-2p c1-2r c1-3x c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-29 c1-2a c1-2c c1-3w c1-3y c1-3z c1-40 c1-41 x-d-ux">About Us</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-29 c1-2a c1-42 c1-v c1-w c1-43 c1-y c1-4 c1-2c c1-3w c1-3y c1-3z c1-40 c1-41 x-d-ux"/></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-44 c1-1n c1-b c1-c c1-1o c1-1p c1-45 c1-1r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-47 c1-1y c1-b c1-c c1-21 c1-22 c1-48 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-y c1-1n c1-49 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-4a c1-4b c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/0/image" class="x-el x-el-div c1-1 c1-2 c1-18 c1-28 c1-b c1-c c1-d c1-4e c1-4f c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/3981/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/3981/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/3981/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/3981/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/3981/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image5" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED0" class="x-el x-el-img c1-1 c1-2 c1-1d c1-3r c1-19 c1-1a c1-x c1-y c1-3s c1-3p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-1i c1-49 c1-4g c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="0" id="1dbc0c99-563a-44a1-917d-886b71b3354a" class="x-el x-el-div x-el c1-1 c1-2 c1-1i c1-4h c1-4 c1-4i c1-4j c1-4k c1-4l c1-4m c1-b c1-c c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-y c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-field-id x-d-field-route">Grab interest</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Say something interesting about your business here.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-47 c1-1y c1-b c1-c c1-21 c1-22 c1-48 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-5n c1-1l c1-x c1-1m c1-y c1-1n c1-49 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-4a c1-4b c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/1/image" class="x-el x-el-div c1-1 c1-2 c1-18 c1-28 c1-b c1-c c1-d c1-4e c1-4f c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/90885/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/90885/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/90885/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/90885/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/90885/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image6" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED1" class="x-el x-el-img c1-1 c1-2 c1-1d c1-3r c1-19 c1-1a c1-x c1-y c1-3s c1-3p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-1i c1-49 c1-4g c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="1" id="dbd3f98c-300b-4326-9c48-77df24f2b737" class="x-el x-el-div x-el c1-1 c1-2 c1-1i c1-4h c1-4 c1-4i c1-4j c1-4k c1-4l c1-4m c1-b c1-c c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-y c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-field-id x-d-field-route">Generate excitement</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>What's something exciting your business offers? Say it here.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-47 c1-1y c1-b c1-c c1-21 c1-22 c1-48 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-y c1-1n c1-49 c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-4a c1-4b c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="cards.imageProperties" data-field-route="/card/2/image" class="x-el x-el-div c1-1 c1-2 c1-18 c1-28 c1-b c1-c c1-d c1-4e c1-4f c1-e c1-f c1-g x-d-ux x-d-route x-d-field-route"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><img src="//img1.wsimg.com/isteam/stock/2820/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300" srcSet="//img1.wsimg.com/isteam/stock/2820/:/rs=w:600,h:300,cg:true,m/cr=w:600,h:300,
//img1.wsimg.com/isteam/stock/2820/:/rs=w:900,h:450,cg:true,m/cr=w:900,h:450 1.5x,
//img1.wsimg.com/isteam/stock/2820/:/rs=w:1200,h:600,cg:true,m/cr=w:1200,h:600 2x,
//img1.wsimg.com/isteam/stock/2820/:/rs=w:1800,h:900,cg:true,m/cr=w:1800,h:900 3x" alt="image7" data-ux="Image" data-aid="ABOUT_IMAGE_RENDERED2" class="x-el x-el-img c1-1 c1-2 c1-1d c1-3r c1-19 c1-1a c1-x c1-y c1-3s c1-3p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/></span></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-1w c1-1x c1-1y c1-1i c1-49 c1-4g c1-b c1-c c1-4c c1-4d c1-21 c1-22 c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" index="2" id="835c5a12-c8fb-427a-8dce-cbe406688a56" class="x-el x-el-div x-el c1-1 c1-2 c1-1i c1-4h c1-4 c1-4i c1-4j c1-4k c1-4l c1-4m c1-b c1-c c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-y c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-field-id x-d-field-route">Close the deal</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Give customers a reason to do business with you.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="c93111f1-03f6-4d00-9a75-83999ca69221" class="widget widget-subscribe widget-subscribe-subscribe-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-29 c1-2a c1-20 c1-1z c1-2o c1-16 c1-15 c1-5o c1-5p c1-28 c1-2c c1-2p c1-2q c1-2r c1-2s c1-5q c1-2t c1-2u c1-2v x-d-ux x-d-aid x-d-route">Subscribe</h2><div><div id="c93111f1-03f6-4d00-9a75-83999ca69221-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-y c1-1n c1-b c1-c c1-1o c1-1p c1-1q c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-1u c1-1d c1-1v c1-1w c1-1x c1-1y c1-b c1-c c1-5r c1-5s c1-5t c1-21 c1-22 c1-23 c1-24 c1-d c1-25 c1-26 c1-27 c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-5u c1-28 c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Sign up to hear from us about specials, sales, and events.</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-y c1-1i c1-4h c1-4b c1-4g c1-28 c1-5v c1-b c1-c c1-d c1-5w c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-18 c1-4 c1-b c1-c c1-d c1-5x c1-5y c1-5z c1-4f c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input12476" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-3 c1-60 c1-4 c1-61 c1-62 c1-v c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-w c1-b c1-5i c1-c c1-36 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-d c1-e c1-f c1-g x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input12476" class="x-el x-el-label c1-1 c1-2 c1-20 c1-1z c1-3i c1-6j c1-6k c1-6l c1-6m c1-b c1-6n c1-35 c1-36 c1-37 c1-39 c1-3a c1-3b x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-5y c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-s c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-31 c1-2a c1-6o c1-6p c1-6q c1-6r c1-6s c1-6t c1-2b c1-28 c1-2h c1-2j c1-1z c1-20 c1-1d c1-4 c1-64 c1-6u c1-6v c1-6w c1-b c1-6x c1-2r c1-5v c1-35 c1-6y c1-6a c1-6z c1-70 c1-37 c1-71 c1-72 c1-73 c1-74 c1-39 c1-3a c1-3b x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></section> </div></div></div><div id="27098e09-de9f-4220-ba65-24a70feaffa9" class="widget widget-contact widget-contact-contact-8"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-s c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="CONTACT_SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-29 c1-2a c1-20 c1-1z c1-3t c1-16 c1-15 c1-x c1-3u c1-3v c1-2c c1-3w c1-2p c1-2r c1-3x c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="x-el x-el-span c1-29 c1-2a c1-2c c1-3w c1-3y c1-3z c1-40 c1-41 x-d-ux">Contact Us</span><hr data-ux="SectionHeadingHR" class="x-el x-el-hr c1-29 c1-2a c1-42 c1-v c1-w c1-43 c1-y c1-4 c1-2c c1-3w c1-3y c1-3z c1-40 c1-41 x-d-ux"/></h2><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="CONTACT_INFO_CONTAINER_REND" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-1m c1-44 c1-1n c1-b c1-c c1-1o c1-1p c1-45 c1-1r c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-1u c1-1d c1-1v c1-1w c1-75 c1-1y c1-b c1-c c1-5r c1-5s c1-5t c1-21 c1-22 c1-48 c1-24 c1-d c1-25 c1-26 c1-27 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-76 c1-28 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INTRO_HEADING_REND" data-route="infoTitle" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-18 c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route">Better yet, see us in person!</h4><div typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_INTRO_DESC_REND" data-route="info" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-18 c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>We love our customers, so feel free to visit during normal business hours.</span></p></div></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="CONTACT_INFO_BIZ_NAME_REND" data-route="businessName" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-18 c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-aid x-d-route">fortagnada</h4><p typography="BodyAlpha" data-ux="ContentText" data-route="phone" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-18 c1-3e c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-route">
</p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-77 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-route="hoursTitle" data-aid="CONTACT_HOURS_TITLE_REND" data-field-route="/hours" class="x-el x-el-h4 c1-1 c1-2 c1-20 c1-1z c1-32 c1-16 c1-15 c1-x c1-18 c1-b c1-2p c1-3w c1-36 c1-3y c1-3z c1-40 c1-41 x-d-ux x-d-route x-d-aid x-d-field-route">Hours</h4><div data-ux="Block" data-aid="CONTACT_HOURS_REND" data-route="structuredHours" data-field-route="/hours" class="x-el x-el-div c1-1 c1-2 c1-18 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><div id="bs-3"><table style="border-spacing:0;text-align:left;display:inline-table"><tr data-aid="CONTACT_HOURS_COLLAPSED_REND" style="cursor:pointer"><td style="padding-right:medium"><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_LABEL" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Open today</p></td><td><p typography="BodyAlpha" data-ux="ContentText" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-78 c1-79 c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux"><span rel="" typography="LinkAlpha" data-ux="Link" data-aid="CONTACT_HOURS_COLLAPSED_HR_LABEL" class="x-el x-el-span c1-2f c1-2g c1-2h c1-20 c1-1z c1-2i c1-2j c1-b c1-2k c1-c c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.CONTACT.contact8.Content.Default.Link.Default.12477.click,click">09:00 am – 05:00 pm</span></p></td><td><p typography="BodyAlpha" data-ux="ContentText" data-aid="CONTACT_HOURS_COLLAPSED_ARROW" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><span rel="" typography="LinkAlpha" data-ux="Link" class="x-el x-el-span c1-2f c1-2g c1-2h c1-20 c1-1z c1-1i c1-2j c1-7a c1-b c1-2k c1-c c1-2l c1-2m c1-2n c1-d c1-e c1-f c1-g x-d-ux" data-tccl="ux2.CONTACT.contact8.Group.Default.Link.Default.12478.click,click"><svg viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-2w c1-2b c1-7b c1-7c c1-3s c1-s c1-7d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><path fill-rule="evenodd" d="M19.544 7.236a.773.773 0 0 1-.031 1.06l-7.883 7.743-7.42-7.742a.773.773 0 0 1 0-1.061.699.699 0 0 1 1.017 0l6.433 6.713 6.868-6.745a.698.698 0 0 1 1.016.032"></path></svg></span></p></td></tr></table></div></div><div typography="BodyAlpha" data-ux="ContentText" data-route="hoursCustomMessage" data-aid="CONTACT_HOURS_CUST_MSG_REND" data-field-route="/hours" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-4q c1-4r c1-4s c1-4t c1-4u c1-4v c1-4w c1-4x c1-4y c1-4z c1-50 c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-5e c1-5f c1-5g c1-5h c1-b c1-5i c1-c c1-36 c1-d c1-e c1-f c1-g x-d-ux x-d-route x-d-aid x-d-field-route x-rt"></div></div></div></div></div></div></div></div></section> </div></div></div><div id="66e56ff5-3926-46b3-88e5-3f8d9b1b465e" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-q c1-r c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-28 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-75 c1-b c1-c c1-r c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-19 c1-1a c1-1b c1-1c c1-1d c1-28 c1-7e c1-i c1-b c1-c c1-1e c1-d c1-1f c1-e c1-1g c1-f c1-1h c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-7f c1-1v c1-2z c1-1x c1-2y c1-x c1-15 c1-y c1-16 c1-b c1-c c1-7g c1-7h c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-5u c1-2r c1-b c1-2p c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">fortagnada</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1i c1-1j c1-1k c1-1l c1-x c1-15 c1-y c1-16 c1-4g c1-28 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-2z c1-1x c1-2y c1-b c1-c c1-d c1-7i c1-7j c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-x c1-y c1-b c1-34 c1-35 c1-36 c1-37 c1-7k c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 fortagnada - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1j c1-1s c1-1t c1-46 c1-1d c1-1v c1-2z c1-1x c1-2y c1-b c1-c c1-d c1-7i c1-7j c1-e c1-f c1-g x-d-ux"><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-20 c1-1z c1-4p c1-33 c1-y c1-b c1-34 c1-35 c1-36 c1-37 c1-7l c1-5q c1-39 c1-3a c1-3b x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2f c1-2g c1-2h c1-20 c1-1z c1-2i c1-2j c1-33 c1-b c1-2k c1-35 c1-2l c1-2m c1-2n c1-37 c1-7l c1-5q c1-39 c1-3a c1-3b x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.12479.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.66.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/b04d06c5aa7966fc/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#a9970b"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"1df80766-6e44-4134-8818-db11ab1d5e5d":{"isFlyoutMenu":false,"active":true,"pageId":"1df80766-6e44-4134-8818-db11ab1d5e5d","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme11","paintJob":"LIGHT"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"display":"inline-block"},"logo":{"logoText":"fortagnada"},"isBigLogo":true,"fontPackLogoId":null,"widgetId":"197dbd3f-ac1a-45fb-84a0-eb636874eecd","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"197dbd3f-ac1a-45fb-84a0-eb636874eecd","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","style":{"marginTop":"xsmall","textAlign":"center"},"children":"Welcome to fortagnada","scaledFontSizes":["small","xsmall"],"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"197dbd3f-ac1a-45fb-84a0-eb636874eecd","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"197dbd3f-ac1a-45fb-84a0-eb636874eecd","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/d9df70d794ec7a6a/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-c93111f1-03f6-4d00-9a75-83999ca69221-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["cabin","default",""],"colors":["#a9970b"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"1df80766-6e44-4134-8818-db11ab1d5e5d":{"isFlyoutMenu":false,"active":true,"pageId":"1df80766-6e44-4134-8818-db11ab1d5e5d","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme11"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/771d0a4897a0bf94/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2f76d8ff4bd4eba1/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/b638311d-f10d-455c-8640-50347cac3ad7/gpub/47144202fa2eb9c0/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-12471').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"b638311d-f10d-455c-8640-50347cac3ad7"}),_trfd.push({"pd":"2020-02-06T13:34:11.097Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
