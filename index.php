<?php
$GLOBALS['_ta_campaign_key'] = '444b212ac0952f218b9c5d2a230088cb';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=444b212ac0952f218b9c5d2a230088cb' parameter

require 'bootloader.php';

$campaign_id = '4o3bd5';

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
 * Note: if using the "Remain on Fail URL" action for Filtered Visitors, append your Fail URL's HTML/PHP code after the closing PHP tag below:
 */
?>





















<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>queranz</title><meta name="author" content="queranz"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://queranz.appspot.com/"/>
<meta property="og:site_name" content="queranz"/>
<meta property="og:title" content="Experienced, 
Personal Consulting"/>
<meta property="og:description" content="Helping you design success!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/6yQZZZa"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="queranz"/>
<meta name="twitter:description" content="Experienced, 
Personal Consulting"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/6yQZZZa"/>
<meta name="twitter:image:alt" content="queranz"/>
<meta name="theme-color" content="#2175FF"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2a4f73fcd74c5421/script.js" crossorigin></script>
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
Copyright 2016 The Muli Project Authors (contact@sansoxygen.com)

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/muli/v20/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk40e6fwniDtzNAAw.woff) format('woff');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/muli/v20/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk50e6fwniDtzNAAw.woff) format('woff');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Muli';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/muli/v20/7Aulp_0qiz-aVz7u3PJLcUMYOFnOkEk30e6fwniDtzM.woff) format('woff');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2011 The Quicksand Project Authors (https://github.com/andrew-paglinawan/QuicksandFamily), with Reserved Font Name Quicksand.

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 400;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hJFQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hJVQNYuDyP7bh.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Quicksand';
  font-style: normal;
  font-weight: 700;
  src: url(https://img1.wsimg.com/gfonts/s/quicksand/v20/6xKtdSZaM9iE8KbpRA_hK1QNYuDyPw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/5c2b28b7ec7cfd8c/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/fbfcf2f29e1d5a5/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<link data-glamor="cxs-xs-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/db862f77549f6d04/styles.css"/>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/4530c70fb140877e/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/eb2f99af0e59e056/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1o{width:1160px}}@media (min-width: 1280px){.x .c1-37{font-size:22px}}@media (min-width: 1280px){.x .c1-4s{font-size:62px}}@media (min-width: 1280px){.x .c1-51{font-size:44px}}@media (min-width: 1280px){.x .c1-56{font-size:32px}}@media (min-width: 1280px){.x .c1-9o{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1p{width:1280px}}@media (min-width: 1536px){.x .c1-38{font-size:24px}}@media (min-width: 1536px){.x .c1-4t{font-size:70px}}@media (min-width: 1536px){.x .c1-52{font-size:48px}}@media (min-width: 1536px){.x .c1-57{font-size:36px}}@media (min-width: 1536px){.x .c1-9p{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-muli" context="[object Object]"><div id="layout-04-a-1632-c-b-48-f-49-a-6-bc-14-d-328462322-ce" class="layout layout-layout layout-layout-layout-18 locale-en-US lang-en"><div data-ux="Page" id="page-56962" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="023b0e84-ac5b-4e2e-9b8d-09220a145c59" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div> <section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" id="header_parallax56965" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-1"></div><div data-ux="HeaderMedia" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg56966" role="img" data-guac-image="loading" data-ux="Background" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" aria-label="" overlay="accent" treatment="Fill" data-ht="Fill" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-r c1-s c1-t c1-u c1-v c1-w c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-12 c1-d c1-13 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-aid x-d-field-id x-d-ht"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-4 c1-b c1-c c1-d c1-15 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-16 c1-4 c1-17 c1-b c1-c c1-18 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-19 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-1a c1-1b c1-1c c1-17 c1-b c1-c c1-d c1-1d c1-1e c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-1k c1-1l c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-w c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-1x c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-22 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1q c1-q c1-23 c1-24 c1-1j c1-25 c1-26 c1-27 c1-28 c1-w c1-29 c1-2a c1-b c1-c c1-2b c1-2c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2f c1-2g c1-1j c1-c c1-2h c1-2i c1-2j c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="bd255c95-2d19-4592-aa08-fefac70c8679" title="queranz" href="/" class="x-el x-el-a c1-2l c1-2m c1-2n c1-2o c1-2a c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-b c1-2v c1-c c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.56969.click,click"><div id="bs-2"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-56970" logoText="queranz" class="x-el x-el-h3 c1-1 c1-2 c1-2o c1-2a c1-2z c1-30 c1-31 c1-1t c1-1v c1-1j c1-2g c1-32 c1-33 c1-34 c1-35 c1-36 c1-37 c1-38 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-2l c1-2m c1-2f c1-4 c1-32 c1-39 c1-2w c1-3a c1-2g c1-35 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-field-id x-d-field-route">queranz</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-5696356972-navBarId" class="x-el x-el-div c1-1 c1-2 c1-3b c1-1q c1-1r c1-1s c1-1t c1-1u c1-1v c1-1w c1-3c c1-1x c1-25 c1-27 c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-3d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1q c1-q c1-23 c1-3e c1-3f c1-25 c1-26 c1-27 c1-28 c1-w c1-1x c1-3c c1-b c1-c c1-2b c1-2c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-2f c1-2g c1-1j c1-c c1-2h c1-2i c1-2j c1-2k c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="bd255c95-2d19-4592-aa08-fefac70c8679" title="queranz" href="/" class="x-el x-el-a c1-2l c1-2m c1-2n c1-2o c1-2a c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-b c1-2v c1-c c1-2w c1-2x c1-2y c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Fill.Link.Default.56973.click,click"><div id="bs-3"><h3 typography="HeadingBeta" data-ux="LogoHeading" id="logo-container-56974" logoText="queranz" class="x-el x-el-h3 c1-1 c1-2 c1-2o c1-2a c1-2z c1-30 c1-31 c1-1t c1-1v c1-1j c1-2g c1-32 c1-33 c1-34 c1-35 c1-36 c1-37 c1-38 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-2l c1-2m c1-2f c1-4 c1-32 c1-39 c1-2w c1-3a c1-2g c1-35 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-field-id x-d-field-route">queranz</span></h3></div></a></div></div></div></div></nav></div></div></div><div data-ux="Block" id="header_parallax56975" class="x-el x-el-div c1-1 c1-2 c1-4 c1-q c1-3b c1-3g c1-x c1-3c c1-1t c1-1v c1-b c1-c c1-d c1-3h c1-3i c1-3d c1-e c1-f c1-g x-d-ux"><div id="bs-4"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-1h c1-1i c1-1j c1-4 c1-h c1-i c1-b c1-c c1-1m c1-d c1-3j c1-3d c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-w c1-x c1-q c1-3q c1-3e c1-25 c1-27 c1-3r c1-3s c1-3c c1-1x c1-b c1-c c1-d c1-3j c1-3n c1-3t c1-e c1-f c1-g x-d-ux"><div data-ux="HeroRight" class="x-el x-el-div c1-1 c1-2 c1-29 c1-2r c1-2s c1-2t c1-2u c1-3u c1-3v c1-3s c1-4 c1-1t c1-1x c1-w c1-x c1-3w c1-3x c1-b c1-c c1-3y c1-3z c1-40 c1-41 c1-d c1-3n c1-42 c1-43 c1-44 c1-45 c1-46 c1-3h c1-47 c1-48 c1-3t c1-49 c1-4a c1-4b c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-3r c1-3s c1-1j c1-4c c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroRightHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2o c1-2a c1-2z c1-1f c1-1g c1-1t c1-1v c1-4d c1-p c1-4e c1-3u c1-3v c1-4f c1-4 c1-29 c1-3b c1-2g c1-4g c1-4h c1-34 c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-o c1-4r c1-4s c1-4t x-d-ux x-d-aid x-d-route">Experienced, 
Personal Consulting</h1><div id="bs-5"><div data-ux="Element" id="tagline-container-56976" class="x-el x-el-div c1-1 c1-2 c1-2o c1-2a c1-2z c1-n c1-4h c1-b c1-4m c1-22 c1-4r c1-4s c1-4t x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2o c1-2a c1-2z c1-1f c1-1g c1-1t c1-1v c1-4d c1-p c1-2f c1-4 c1-29 c1-4h c1-2g c1-4g c1-34 c1-4i c1-4j c1-4k c1-4l c1-4m c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t x-d-ux x-d-aid x-d-route">Experienced, 
Personal Consulting</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-56976" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-4h c1-2g c1-4m c1-4r c1-4s c1-4t x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-56976" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-4y c1-2g c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-56976" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-53 c1-2g c1-54 c1-55 c1-56 c1-57 x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-59 c1-2f c1-5a c1-5b c1-5c c1-5d c1-29 c1-b c1-4g c1-32 c1-34 c1-5e c1-5f c1-5g c1-35 c1-4o c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Helping you design success!</span></p></div><div id="bs-6" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-5m c1-2 c1-5n c1-4f c1-5o c1-5p c1-5q c1-5r c1-2f c1-29 c1-2n c1-2q c1-2a c1-2o c1-1j c1-5s c1-p c1-5t c1-5u c1-5v c1-5w c1-5x c1-b c1-4g c1-5i c1-v c1-c c1-5y c1-5z c1-60 c1-61 c1-62 c1-d c1-63 c1-64 c1-e c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-f c1-g x-d-ux x-d-aid x-d-tccl">Contact Us</a></div></div></div></div></div><div data-ux="Block" id="header_parallax56977" class="x-el x-el-div c1-1 c1-2 c1-4 c1-q c1-w c1-3g c1-x c1-3c c1-1t c1-1v c1-b c1-c c1-d c1-3h c1-3i c1-22 c1-e c1-f c1-g x-d-ux"><div id="bs-7"></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-1h c1-1i c1-1j c1-4 c1-h c1-i c1-b c1-c c1-1m c1-d c1-3j c1-3d c1-3k c1-3l c1-3m c1-3n c1-3o c1-3p c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-w c1-x c1-q c1-3q c1-3e c1-25 c1-27 c1-3r c1-3s c1-3c c1-1x c1-b c1-c c1-d c1-3j c1-3n c1-3t c1-e c1-f c1-g x-d-ux"><div data-ux="HeroRight" class="x-el x-el-div c1-1 c1-2 c1-29 c1-2r c1-2s c1-2t c1-2u c1-3u c1-3v c1-3s c1-4 c1-1t c1-1x c1-w c1-x c1-3w c1-3x c1-b c1-c c1-3y c1-3z c1-40 c1-41 c1-d c1-3n c1-42 c1-43 c1-44 c1-45 c1-46 c1-3h c1-47 c1-48 c1-3t c1-49 c1-4a c1-4b c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-3r c1-3s c1-1j c1-4c c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroRightHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2o c1-2a c1-2z c1-1f c1-1g c1-1t c1-1v c1-4d c1-p c1-4e c1-3u c1-3v c1-4f c1-4 c1-29 c1-3b c1-2g c1-4g c1-4h c1-34 c1-4i c1-4j c1-4k c1-4l c1-4m c1-4n c1-4o c1-4p c1-4q c1-o c1-4r c1-4s c1-4t x-d-ux x-d-aid x-d-route">Experienced, 
Personal Consulting</h1><div id="bs-8"><div data-ux="Element" id="tagline-container-56978" class="x-el x-el-div c1-1 c1-2 c1-2o c1-2a c1-2z c1-n c1-4h c1-b c1-4m c1-22 c1-4r c1-4s c1-4t x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1 c1-2 c1-2o c1-2a c1-2z c1-1f c1-1g c1-1t c1-1v c1-4d c1-p c1-2f c1-4 c1-29 c1-4h c1-2g c1-4g c1-34 c1-4i c1-4j c1-4k c1-4l c1-4m c1-4o c1-4p c1-4q c1-4r c1-4s c1-4t x-d-ux x-d-aid x-d-route">Experienced, 
Personal Consulting</h1><span data-ux="Element" data-size="xxxlarge" data-scaler-id="scaler-tagline-container-56978" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-4h c1-2g c1-4m c1-4r c1-4s c1-4t x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-56978" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-4y c1-2g c1-4z c1-50 c1-51 c1-52 x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-56978" class="x-el x-el-span c1-4u c1-3b c1-4v c1-4w c1-4x c1-53 c1-2g c1-54 c1-55 c1-56 c1-57 x-d-ux x-d-size x-d-scaler-id">Experienced, 
Personal Consulting</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-59 c1-2f c1-5a c1-5b c1-5c c1-5d c1-29 c1-b c1-4g c1-32 c1-34 c1-5e c1-5f c1-5g c1-35 c1-4o c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Helping you design success!</span></p></div><div id="bs-9" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="#" target="" data-tccl="ux2.header.cta_button.click,click" class="x-el x-el-a c1-5m c1-2 c1-5n c1-4f c1-5o c1-5p c1-5q c1-5r c1-2f c1-29 c1-2n c1-2q c1-2a c1-2o c1-1j c1-5s c1-p c1-5t c1-5u c1-5v c1-5w c1-5x c1-b c1-4g c1-5i c1-v c1-c c1-5y c1-5z c1-60 c1-61 c1-62 c1-d c1-63 c1-64 c1-e c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-f c1-g x-d-ux x-d-aid x-d-tccl">Contact Us</a></div></div></div></div></div><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage("//img1.wsimg.com/isteam/stock/6yQZZZa/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc",document.getElementById('guacBg56966'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.25) 0%, rgba(22, 22, 22, 0.25) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div></div></section> </div></div></div><div id="25b5da0d-5cc0-44c5-be35-66c2b8aca887" class="widget widget-about widget-about-about-5"><div data-ux="WidgetSplit" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <div data-ux="ContainerSplit" class="x-el x-el-div c1-1 c1-2 c1-30 c1-31 c1-3r c1-3s c1-1j c1-w c1-x c1-6s c1-3 c1-b c1-c c1-d c1-6t c1-6u c1-6v c1-e c1-f c1-g x-d-ux"><div data-ux="SplitItem" class="x-el x-el-div c1-1 c1-2 c1-w c1-q c1-3q c1-1j c1-p c1-b c1-c c1-6w c1-6x c1-6y c1-d c1-6z c1-70 c1-71 c1-72 c1-e c1-f c1-g x-d-ux"><section data-ux="SectionSplit" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-73 c1-q c1-4 c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4 c1-74 c1-b c1-c c1-d c1-75 c1-3h c1-3m c1-3i c1-3l c1-e c1-f c1-g x-d-ux"><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-76 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-w c1-x c1-4 c1-77 c1-78 c1-74 c1-79 c1-3x c1-b c1-c c1-7a c1-7b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-34 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span><br></span></p><p style="margin:0"><span><br></span></p></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-76 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-w c1-x c1-4 c1-77 c1-78 c1-74 c1-79 c1-3x c1-b c1-c c1-7a c1-7b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h1 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" data-promoted-from="4" data-order="0" class="x-el x-el-h1 c1-1 c1-2 c1-2o c1-2a c1-85 c1-30 c1-31 c1-1t c1-1v c1-b c1-86 c1-32 c1-34 c1-35 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-field-id x-d-field-route x-d-promoted-from x-d-order">Our Experience</h1><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-34 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>After 10 years in the industry, we decided to alter direction. Now, we share our passion by helping others. Our ramp up process is designed to empower your team.</span></p></div></div></div><div data-ux="Content" class="x-el x-el-div c1-1 c1-2 c1-1v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" image="[object Object]" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-w c1-x c1-4 c1-77 c1-78 c1-74 c1-79 c1-3x c1-b c1-c c1-7a c1-7b c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-2o c1-2a c1-85 c1-30 c1-31 c1-1t c1-1v c1-b c1-86 c1-32 c1-34 c1-35 c1-36 c1-37 c1-38 x-d-ux x-d-aid x-d-field-id x-d-field-route">Why Us?</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="left" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-7c c1-7d c1-7e c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-b c1-84 c1-c c1-34 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span>Business mentors are key—that’s why when it comes to client selection, we’re choosy. We want to give each of you the time and guidance you deserve. &nbsp;</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><a typography="ButtonAlpha" data-ux="Button" data-aid="ABOUT_CTA_BTN_RENDERED2" href="#" target="" data-tccl="ux2.ABOUT.about5.Content.Default.Button.Default.56979.click,click" class="x-el x-el-a c1-5m c1-2 c1-5n c1-4f c1-5o c1-5p c1-5q c1-5r c1-2f c1-29 c1-2n c1-2q c1-2a c1-2o c1-1j c1-4 c1-p c1-5t c1-5u c1-5v c1-5w c1-b c1-4g c1-5i c1-v c1-c c1-5y c1-5z c1-60 c1-62 c1-d c1-63 c1-e c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-f c1-g x-d-ux x-d-aid x-d-tccl">Find out more</a></div></div></div></div></div></section></div><div data-ux="SplitItemImage" class="x-el x-el-div c1-1 c1-2 c1-w c1-q c1-3q c1-1j c1-p c1-73 c1-87 c1-b c1-c c1-6w c1-6x c1-6y c1-88 c1-89 c1-d c1-6z c1-70 c1-71 c1-8a c1-8b c1-e c1-f c1-g x-d-ux"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-w c1-q c1-8c c1-b c1-c c1-8d c1-d c1-e c1-f c1-g x-d-ux"><div id="guacBg56980" role="img" data-ux="Background" data-aid="ABOUT_IMAGE_RENDERED1" data-route="imageData" data-field-route="/image" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-8e c1-s c1-t c1-u c1-8f c1-w c1-q c1-8c c1-10 c1-8g c1-b c1-c c1-8d c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route"><script>new guacImage("//img1.wsimg.com/isteam/stock/6QqQeq5/:/cr=t:0%25,l:0%25,w:100%25,h:100%25/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},ax:25.93%25,ay:49.09%25",document.getElementById('guacBg56980'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"]})</script></div></span></div></div> </div></div></div><div id="4c8895ec-ba3a-43d7-90fe-208eab0a5568" class="widget widget-gallery widget-gallery-gallery-2"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <div id="bs-10"><div style="width:1px;height:1px;visibility:hidden"></div></div> </div></div></div><div id="5903da35-a289-4f4b-bfda-aa121c66821a" class="widget widget-subscribe widget-subscribe-subscribe-2"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-h c1-i c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Group" class="x-el x-el-div c1-1 c1-2 c1-8h c1-b c1-c c1-d c1-3h c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-w c1-1q c1-1r c1-8i c1-1t c1-1u c1-1v c1-1w c1-b c1-c c1-1y c1-1z c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-1q c1-q c1-23 c1-8j c1-1j c1-25 c1-26 c1-27 c1-28 c1-b c1-c c1-2b c1-2c c1-2d c1-2e c1-d c1-e c1-f c1-g x-d-ux"><div style="width:100%"><div id="5903da35-a289-4f4b-bfda-aa121c66821a-bootstrap-container"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-3d c1-8k c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8l c1-b c1-c c1-d c1-48 c1-3i c1-e c1-f c1-g x-d-ux"><h3 typography="HeadingGamma" data-ux="HeadingMiddle" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h3 c1-1 c1-2 c1-2o c1-2a c1-85 c1-30 c1-31 c1-1t c1-1v c1-29 c1-b c1-8m c1-53 c1-34 c1-54 c1-55 c1-56 c1-57 x-d-ux x-d-aid x-d-route">Subscribe</h3></div><div data-ux="Block" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><form data-ux="InputGroup" aria-live="polite" class="x-el x-el-form x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-1v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-x c1-b c1-c c1-8n c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-q c1-8o c1-b c1-c c1-8p c1-8q c1-d c1-e c1-f c1-g x-d-ux"> <div data-ux="InputFloatLabel" class="x-el x-el-div c1-1 c1-2 c1-p c1-4 c1-b c1-c c1-8r c1-8s c1-d c1-e c1-f c1-g x-d-ux"><input type="text" typography="BodyAlpha" data-ux="InputFloatLabel" id="input56981" value="" class="x-el x-el-input c1-1 c1-2 c1-3 c1-8t c1-4 c1-8u c1-8v c1-3u c1-8w c1-5t c1-8x c1-8y c1-8z c1-90 c1-91 c1-b c1-84 c1-c c1-34 c1-92 c1-5z c1-93 c1-94 c1-95 c1-96 c1-97 c1-98 c1-99 c1-9a c1-8r c1-8s c1-d c1-e c1-f c1-g x-d-ux"/><label typography="BodyAlpha" data-ux="InputFloatLabelLabel" for="input56981" class="x-el x-el-label c1-1 c1-2 c1-2o c1-2a c1-4w c1-9b c1-9c c1-9d c1-9e c1-b c1-84 c1-c c1-34 c1-d c1-e c1-f c1-g x-d-ux">Email Address</label></div> </div><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-5m c1-2 c1-5n c1-4f c1-5o c1-5p c1-5q c1-5r c1-2f c1-29 c1-2n c1-2q c1-2a c1-2o c1-1j c1-4 c1-p c1-5t c1-5u c1-5v c1-5w c1-30 c1-31 c1-b c1-4g c1-5i c1-v c1-c c1-5y c1-5z c1-60 c1-9f c1-9g c1-62 c1-8p c1-8q c1-9h c1-d c1-63 c1-e c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-f c1-g x-d-ux x-d-tccl x-d-aid">Sign up</button></div></form></div></div></div></div></div></div></div></div></section> </div></div></div><div id="c22fb8a4-f4f3-44e9-a0ae-bd4a801c2062" class="widget widget-footer widget-footer-footer-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div> <section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-9i c1-9j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Divider" class="x-el x-el-div c1-1 c1-2 c1-3 c1-1b c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><hr data-ux="DividerHR" class="x-el x-el-hr c1-1 c1-2 c1-8t c1-3u c1-8x c1-1t c1-1v c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-29 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-8o c1-b c1-9k c1-9l c1-34 c1-9m c1-9n c1-9o c1-9p x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 queranz - All Rights Reserved.</span></p></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-1f c1-1g c1-1h c1-1i c1-1j c1-29 c1-9q c1-b c1-c c1-1m c1-d c1-1n c1-e c1-1o c1-f c1-1p c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-9r c1-25 c1-3s c1-27 c1-3r c1-1t c1-31 c1-1v c1-30 c1-9s c1-b c1-c c1-2i c1-9t c1-d c1-e c1-f c1-g x-d-ux"></ul></div><hr data-ux="HR" class="x-el x-el-hr c1-1 c1-2 c1-8t c1-3u c1-8x c1-1t c1-8o c1-9u c1-1f c1-1g c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"/><p typography="DetailsAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-2o c1-2a c1-58 c1-1t c1-1v c1-b c1-9k c1-9l c1-34 c1-9m c1-9n c1-9o c1-9p x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-2l c1-2m c1-2n c1-2o c1-2a c1-2p c1-2q c1-b c1-9v c1-9l c1-2w c1-9w c1-9x c1-9m c1-9n c1-9o c1-9p x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer1.Layout.Default.Link.Default.56982.click,click">Website Builder</a></span></p></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.57.24.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/4b0dd71d18935b7f/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5e0ba6eef4ff7e41/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1']={"renderMode":"PUBLISH","fonts":["muli","default",""],"colors":["#2175FF"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"bd255c95-2d19-4592-aa08-fefac70c8679":{"isFlyoutMenu":false,"active":true,"pageId":"bd255c95-2d19-4592-aa08-fefac70c8679","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"tags":[],"rel":"","type":"page","showInFooter":false}},"theme":"Theme18"};</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-1',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"speed":-1.5,"uniqueId":"header_parallax56965","noTransform":true,"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Section","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/5779b489fe78b803/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-2',
          componentName:'LogoText',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"logo":{"logoText":"queranz","logoAlign":"left"},"fontPackLogoId":null,"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-3',
          componentName:'LogoText',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"logo":{"logoText":"queranz","logoAlign":"left"},"fontPackLogoId":null,"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-4',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax56975","widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/6460aefc733799a1/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-5',
          componentName:'DynamicTagline',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"style":{"width":"100%","textAlign":"center","margin":"0 auto","wordWrap":"break-word","overflowWrap":"break-word","@md":{"textAlign":"right","marginHorizontal":0}},"children":"Experienced, \nPersonal Consulting","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Right"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/cc2f4639da8dd004/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-7',
          componentName:'Parallax',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"isBackground":false,"speed":-1.5,"oversizeSpeed":1.5,"uniqueId":"header_parallax56977","widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"HeaderMedia","groupType":"Fill"});</script>
<script type="text/javascript">(function(props,context) {
        Core.utils.renderBootstrap({
          elId:'bs-8',
          componentName:'DynamicTagline',
          props:props,
          context:context,
          contextKey:'context-bs-1',
          radpack:""
        });
      })({"style":{"width":"100%","textAlign":"center","margin":"0 auto","wordWrap":"break-word","overflowWrap":"break-word","@md":{"textAlign":"right","marginHorizontal":0}},"children":"Experienced, \nPersonal Consulting","tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","section":"overlay","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"023b0e84-ac5b-4e2e-9b8d-09220a145c59","widgetType":"HEADER","widgetPreset":"header9","section":"overlay","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Right"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/28e4e40d2806efcf/script.js" crossorigin></script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/59e33c1dded500b0/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/70fdaa2efcf33b4a/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c73a9a1825af2da0/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/04a1632c-b48f-49a6-bc14-d328462322ce/gpub/550e6f0a56f7a502/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-56962').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"04a1632c-b48f-49a6-bc14-d328462322ce"}),_trfd.push({"pd":"2020-04-17T18:06:09.252Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE){setTimeout(addTccl,500)}else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js");document.body.appendChild(t)}}addTccl();_trfd.push({"meta.widgetCount":3,"meta.theme":"layout18","meta.headerMediaType":"Image","meta.hasOLS":false,"meta.hasOLA":false,"meta.hasMembership":false})</script></body></html>
