<?php
$GLOBALS['_ta_campaign_key'] = '80ced6518dd2db6c4f16601a0fc5484c';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=80ced6518dd2db6c4f16601a0fc5484c' parameter

require 'bootloader.php';

$campaign_id = '1sa5c4';

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










<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>indesaned</title><meta name="author" content="indesaned"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://indesaned.appspot.com/"/>
<meta property="og:site_name" content="indesaned"/>
<meta property="og:title" content="Busy Mom, Healthy Food"/>
<meta property="og:description" content="Join me in my love of food &amp; drink!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/732RjwJ"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="indesaned"/>
<meta name="twitter:description" content="Busy Mom, Healthy Food"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/732RjwJ"/>
<meta name="twitter:image:alt" content="indesaned"/>
<meta name="theme-color" content="#b09175"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright (c) 2011 by Brian J. Bonislawsky DBA Astigmatic (AOETI) (astigma@astigmatic.com), with Reserved Font Name "Righteous"

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* latin-ext */
@font-face {
  font-family: 'Righteous';
  font-style: normal;
  font-weight: 400;
  src: local('Righteous'), local('Righteous-Regular'), url(https://img1.wsimg.com/gfonts/s/righteous/v8/1cXxaUPXBpj2rGoU7C9WhnGFq8Kk1doH.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Righteous';
  font-style: normal;
  font-weight: 400;
  src: local('Righteous'), local('Righteous-Regular'), url(https://img1.wsimg.com/gfonts/s/righteous/v8/1cXxaUPXBpj2rGoU7C9WiHGFq8Kk1Q.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Copyright 2010 The Josefin Sans Project Authors (https://github.com/ThomasJockin/JosefinSansFont-master), with Reserved Font Name "Josefin Sans".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUAnx4Vn8siqM7.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUA3x4Vn8siqM7.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Josefin Sans Regular'), local('JosefinSans-Regular'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3aZQNVED7rKGKxtqIqX5EUDXx4Vn8sig.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhtdF0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhtdV0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 600;
  src: local('Josefin Sans SemiBold'), local('JosefinSans-SemiBold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ec0lhte10hoJky_A.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* vietnamese */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5EctlltdF0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5EctlltdV0hoJky_MiS.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Josefin Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Josefin Sans Bold'), local('JosefinSans-Bold'), url(https://img1.wsimg.com/gfonts/s/josefinsans/v14/Qw3FZQNVED7rKGKxtqIqX5Ectllte10hoJky_A.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/0c369ee6-1198-485c-a360-c22a3b5d9fa1/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0c369ee6-1198-485c-a360-c22a3b5d9fa1/gpub/c1802277bc15a34f/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-l{padding-top:40px}}@media (max-width: 767px){.x .c1-m{padding-bottom:40px}}@media (max-width: 767px){.x .c1-20{width:100%}}@media (max-width: 767px){.x .c1-5v > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-5w  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-82{padding-bottom:32px}}@media (max-width: 767px){.x .c1-86{display:flex}}@media (max-width: 767px){.x .c1-87{flex-direction:column}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0c369ee6-1198-485c-a360-c22a3b5d9fa1/gpub/9d44877b25a9c29f/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/0c369ee6-1198-485c-a360-c22a3b5d9fa1/gpub/52a89c24ed898d45/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-2p{font-size:32px}}@media (min-width: 1280px){.x .c1-3w{width:1160px}}@media (min-width: 1280px){.x .c1-4a{font-size:44px}}@media (min-width: 1280px){.x .c1-4l{font-size:22px}}@media (min-width: 1280px){.x .c1-5h{font-size:14px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-2q{font-size:36px}}@media (min-width: 1536px){.x .c1-3x{width:1280px}}@media (min-width: 1536px){.x .c1-4b{font-size:48px}}@media (min-width: 1536px){.x .c1-4m{font-size:24px}}@media (min-width: 1536px){.x .c1-5i{font-size:16px}}</style>
<style type="text/css">.page-inner { background-color: rgb(22, 22, 22); min-height: 100vh; }</style></head>
<body class="x  x-fonts-righteous" context="[object Object]"><div id="layout-0-c-369-ee-6-1198-485-c-a-360-c-22-a-3-b-5-d-9-fa-1" class="layout layout-layout layout-layout-layout-9 locale-en-US lang-en"><div data-ux="Page" id="page-1947" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="799892f5-0e44-4aba-8f35-ac6e797b2297" class="widget widget-header widget-header-header-9"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-n c1-b c1-c c1-d c1-o c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-p c1-q c1-r c1-s c1-3 c1-b c1-c c1-d c1-t c1-u c1-v c1-w c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-12 c1-13 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-17 c1-18 c1-19 c1-1a c1-1b c1-1c c1-1d c1-b c1-c c1-1e c1-1f c1-1g c1-1h c1-d c1-1i c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-1l c1-11 c1-1m c1-1n c1-1o c1-1p c1-14 c1-1q c1-1r c1-b c1-c c1-1s c1-1t c1-1u c1-1v c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1w c1-1x c1-1y c1-1z c1-11 c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="b0f318c4-87f1-46c8-8e03-c6bce7d28abd" title="indesaned" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1951.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1952" logoText="indesaned" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-18 c1-1a c1-11 c1-b c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-22 c1-23 c1-1y c1-4 c1-2l c1-2r c1-2e c1-2s c1-b c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-field-id x-d-field-route">indesaned</span></h3></div></a></div></div></div><div data-ux="Grid" id="n-19481954-navBarId" class="x-el x-el-div c1-1 c1-2 c1-2t c1-15 c1-16 c1-2u c1-18 c1-19 c1-1a c1-1b c1-b c1-c c1-1e c1-1f c1-1g c1-1h c1-d c1-2v c1-2w c1-2x c1-2y c1-2z c1-30 c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-31 c1-32 c1-1m c1-1n c1-1o c1-1p c1-14 c1-1d c1-1c c1-1q c1-b c1-c c1-1s c1-1t c1-1u c1-1v c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1w c1-1x c1-1y c1-1z c1-11 c1-c c1-20 c1-21 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="b0f318c4-87f1-46c8-8e03-c6bce7d28abd" title="indesaned" href="/" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-b c1-2d c1-c c1-2e c1-2f c1-2g c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.1955.click,click"><div id="bs-2"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-1956" logoText="indesaned" class="x-el x-el-h3 c1-1 c1-2 c1-25 c1-26 c1-2h c1-2i c1-2j c1-18 c1-1a c1-11 c1-b c1-2k c1-2l c1-2m c1-2n c1-2o c1-2p c1-2q x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-field-id="logo" data-field-route="/logo" class="x-el x-el-span c1-22 c1-23 c1-1y c1-4 c1-2l c1-2r c1-2e c1-2s c1-b c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-aid x-d-field-id x-d-field-route">indesaned</span></h3></div></a></div></div></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-p c1-33 c1-b c1-c c1-34 c1-d c1-35 c1-36 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-14 c1-37 c1-38 c1-1j c1-39 c1-3a c1-p c1-b c1-c c1-d c1-3b c1-e c1-f c1-g x-d-ux"><div id="guacBg1957" role="img" data-guac-image="loading" data-ux="Background" data-ht="Fill" data-aid="BACKGROUND_IMAGE_RENDERED" data-field-id="background" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-3c c1-3d c1-3e c1-3f c1-3g c1-p c1-4 c1-3h c1-3i c1-3j c1-3k c1-b c1-c c1-d c1-35 c1-e c1-f c1-g x-d-guac-image x-d-ux x-d-ht x-d-aid x-d-field-id"><script>Number(window.vctElements)||(window.vctElements=0),window.vctElements++;new guacImage('//img1.wsimg.com/isteam/stock/732RjwJ/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg1957'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0) 0%, rgba(22, 22, 22, 0) 100%)"],"shouldMarkVisuallyComplete":true})</script></div></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2u c1-18 c1-2j c1-1a c1-2i c1-h c1-1m c1-b c1-c c1-d c1-3b c1-3l c1-3m c1-2z c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-3o c1-1o c1-3p c1-14 c1-34 c1-3q c1-1c c1-b c1-c c1-d c1-3r c1-3s c1-3t c1-3l c1-2z c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-3y c1-3z c1-3p c1-3o c1-40 c1-41 c1-b c1-c c1-d c1-42 c1-43 c1-e c1-f c1-g x-d-ux"><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-1q c1-b c1-c c1-d c1-44 c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-2i c1-2j c1-3p c1-3o c1-11 c1-45 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1w c1-1x c1-25 c1-26 c1-2h c1-2i c1-2j c1-18 c1-1a c1-2t c1-1z c1-46 c1-47 c1-2m c1-48 c1-o c1-49 c1-4a c1-4b x-d-ux x-d-aid x-d-route">Busy Mom, Healthy Food</h1><div id="bs-3"><div data-ux="Element" typography="HeadingAlpha" id="tagline-container-1958" class="x-el x-el-div c1-1w c1-1x c1-25 c1-26 c1-2h c1-n c1-1z c1-46 c1-47 c1-2m c1-48 c1-1i c1-49 c1-4a c1-4b x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-1w c1-1x c1-25 c1-26 c1-2h c1-2i c1-2j c1-18 c1-1a c1-4c c1-1y c1-4 c1-47 c1-1z c1-46 c1-2m c1-48 c1-49 c1-4a c1-4b x-d-ux x-d-aid x-d-route">Busy Mom, Healthy Food</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-1958" class="x-el x-el-span c1-1w c1-1x c1-4d c1-4e c1-2t c1-4f c1-4g c1-4h c1-47 c1-1z c1-48 c1-49 c1-4a c1-4b x-d-ux x-d-size x-d-scaler-id">Busy Mom, Healthy Food</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-1958" class="x-el x-el-span c1-1w c1-1x c1-4d c1-4e c1-2t c1-4f c1-4g c1-4h c1-2l c1-1z c1-2n c1-2o c1-2p c1-2q x-d-ux x-d-size x-d-scaler-id">Busy Mom, Healthy Food</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-1958" class="x-el x-el-span c1-1w c1-1x c1-4d c1-4e c1-2t c1-4f c1-4g c1-4h c1-4i c1-1z c1-4j c1-4k c1-4l c1-4m x-d-ux x-d-size x-d-scaler-id">Busy Mom, Healthy Food</span></div></div></div><div typography="BodyBeta" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-4o c1-1a c1-4p c1-4q c1-4r c1-4s c1-4t c1-b c1-4i c1-2m c1-4j c1-4k c1-4l c1-4m x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Join me in my love of food &amp; drink!</span></p></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-4z c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-4" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="b0f318c4-87f1-46c8-8e03-c6bce7d28abd" class="x-el x-el-a c1-50 c1-1x c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-1y c1-1q c1-24 c1-28 c1-26 c1-25 c1-11 c1-4 c1-b c1-57 c1-4v c1-3g c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-t c1-u c1-5e c1-5f c1-5g c1-5h c1-5i x-d-ux x-d-aid x-d-tccl x-d-page">My Recipes</a></div></div></div></div></div></div></div></div></section> </div></div></div><div id="b1b262cf-4cd6-42ca-8de6-b16c088d7c3b" class="widget widget-about widget-about-about-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-1w c1-1x c1-25 c1-26 c1-5j c1-2i c1-2j c1-18 c1-5k c1-37 c1-1q c1-1z c1-47 c1-2k c1-2m c1-48 c1-44 c1-49 c1-4a c1-4b x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Hello there!</span></h2><div data-ux="ContentCards" class="x-el x-el-div x-el c1-1 c1-2 c1-1q c1-1c c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-14 c1-15 c1-16 c1-2u c1-18 c1-19 c1-5l c1-1b c1-b c1-c c1-1e c1-1f c1-5m c1-1h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-1n c1-s c1-1p c1-14 c1-b c1-c c1-5n c1-5o c1-1s c1-1t c1-5p c1-1v c1-d c1-5q c1-5r c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/0" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-14 c1-34 c1-1d c1-1q c1-5s c1-4 c1-5t c1-5u c1-41 c1-1j c1-b c1-c c1-5v c1-5w c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-field-id="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-5x c1-2i c1-2j c1-18 c1-1a c1-1q c1-5y c1-b c1-5z c1-4i c1-2m c1-4j c1-4k c1-4l c1-4m x-d-ux x-d-aid x-d-field-id x-d-field-route">Busy?</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-field-id="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-1a c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-1j c1-b c1-6s c1-c c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6t c1-6u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Multiple kids and full time jobs make dinner time a stressful time when it should be something we enjoy. Let's get back to that!</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-1n c1-s c1-1p c1-14 c1-b c1-c c1-5n c1-5o c1-1s c1-1t c1-5p c1-1v c1-d c1-5q c1-5r c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/1" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-14 c1-34 c1-1d c1-1q c1-5s c1-4 c1-5t c1-5u c1-41 c1-1j c1-b c1-c c1-5v c1-5w c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-field-id="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-5x c1-2i c1-2j c1-18 c1-1a c1-1q c1-5y c1-b c1-5z c1-4i c1-2m c1-4j c1-4k c1-4l c1-4m x-d-ux x-d-aid x-d-field-id x-d-field-route">Picky Eaters?</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-field-id="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-1a c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-1j c1-b c1-6s c1-c c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6t c1-6u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">Your kitchen isn't a restaurant or a cafeteria. Dinner time would be so much nicer with less ordering and more enjoying! Find things everyone at the table will love!</span></p></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-1n c1-s c1-1p c1-14 c1-b c1-c c1-5n c1-5o c1-1s c1-1t c1-5p c1-1v c1-d c1-5q c1-5r c1-e c1-f c1-g x-d-ux"><div data-ux="ContentCard" data-field-id="cards" data-field-route="/card/2" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-14 c1-34 c1-1d c1-1q c1-5s c1-4 c1-5t c1-5u c1-41 c1-1j c1-b c1-c c1-5v c1-5w c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><h4 typography="HeadingDelta" data-ux="ContentCardHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-field-id="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-1 c1-2 c1-25 c1-26 c1-5x c1-2i c1-2j c1-18 c1-1a c1-1q c1-5y c1-b c1-5z c1-4i c1-2m c1-4j c1-4k c1-4l c1-4m x-d-ux x-d-aid x-d-field-id x-d-field-route">Not a Great Cook?</h4><div typography="BodyAlpha" data-ux="ContentCardText" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-field-id="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-1a c1-60 c1-61 c1-62 c1-63 c1-64 c1-65 c1-66 c1-67 c1-68 c1-69 c1-6a c1-6b c1-6c c1-6d c1-6e c1-6f c1-6g c1-6h c1-6i c1-6j c1-6k c1-6l c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-1j c1-b c1-6s c1-c c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-field-id x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-6t c1-6u c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">No problem! I'm no Martha Stewart. I don't even particularly like to cook. I do like my family to eat well, though, and I like to do that as simply and naturally as possible.&nbsp;</span></p></div></div></div></div></div></section> </div></div></div><div id="f19d09ca-59b3-4c68-80c6-c79744369fb9" class="widget widget-subscribe widget-subscribe-subscribe-3"><div data-ux="WidgetBanner" class="x-el x-el-div x-el c1-1 c1-2 c1-6v c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><div id="guacBg1959" role="img" data-ux="Background" data-aid="SECTION_BACKGROUND" treatmentData="[object Object]" class="x-el x-el-div c1-1 c1-2 c1-6w c1-3d c1-3e c1-3f c1-6x c1-3j c1-6y c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><section data-ux="SectionBanner" class="x-el x-el-section c1-1 c1-2 c1-6z c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-70 c1-b c1-c c1-d c1-71 c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingAlpha" data-ux="SectionBannerHeading" data-aid="SECTION_TITLE_REND" data-route="sectionTitle" class="x-el x-el-h2 c1-1w c1-1x c1-25 c1-26 c1-2h c1-2i c1-2j c1-18 c1-72 c1-1q c1-1z c1-73 c1-47 c1-2m c1-48 c1-49 c1-4a c1-4b x-d-ux x-d-aid x-d-route">Join My Mailing List</h2><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="f19d09ca-59b3-4c68-80c6-c79744369fb9-bootstrap-container"><span data-ux="Element" class="x-el x-el-span c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-aid="SUBSCRIBE_INNER_FORM_REND" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2u c1-18 c1-19 c1-1a c1-1b c1-b c1-c c1-1e c1-1f c1-1g c1-1h c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-74 c1-11 c1-1m c1-1n c1-1o c1-1p c1-b c1-c c1-75 c1-76 c1-77 c1-1s c1-1t c1-1u c1-1v c1-d c1-3r c1-3s c1-3t c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="Text" data-aid="FORM_DESC_REND" data-route="description" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-78 c1-1q c1-b c1-73 c1-c c1-2m c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Be the first to hear about my latest recipes and food adventures!</p><form data-ux="Form" aria-live="polite" class="x-el x-el-form c1-1 c1-2 c1-1a c1-14 c1-34 c1-1c c1-1d c1-1q c1-3g c1-b c1-c c1-d c1-36 c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-route="inputPlaceholder" class="x-el x-el-div c1-1 c1-2 c1-79 c1-4 c1-b c1-c c1-d c1-3m c1-7a c1-7b c1-7c c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="InputFloatLabel" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><input type="text" typography="InputAlpha" data-ux="InputFloatLabel" id="input1960" value="" data-aid="d7s9fy9s-18hf-sdfh-9f94-d1ns893k83d3" class="x-el x-el-input c1-1 c1-2 c1-7d c1-7e c1-4 c1-7f c1-7g c1-7h c1-7i c1-7j c1-7k c1-7l c1-7m c1-7n c1-7o c1-b c1-73 c1-58 c1-2m c1-7p c1-5a c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-5d c1-5g c1-5h c1-5i x-d-ux x-d-aid"/><label typography="InputAlpha" data-ux="InputFloatLabelLabel" for="input1960" class="x-el x-el-label c1-1 c1-2 c1-25 c1-26 c1-4g c1-7y c1-7z c1-80 c1-81 c1-b c1-73 c1-58 c1-2m c1-5d c1-5g c1-5h c1-5i x-d-ux">Email</label></div></div></div><div data-ux="Block" data-route="subscribeButtonLabel" class="x-el x-el-div c1-1 c1-2 c1-4 c1-b c1-c c1-d c1-7a c1-e c1-f c1-g x-d-ux x-d-route"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-p c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><button tcclTracking="click" typography="ButtonAlpha" data-ux="Button" type="submit" data-tccl="ux2.gem-subscribe.submit_form.click,click" data-aid="SUBSCRIBE_SUBMIT_BUTTON_REND" class="x-el x-el-button c1-50 c1-1x c1-51 c1-52 c1-53 c1-54 c1-55 c1-56 c1-1y c1-1q c1-24 c1-28 c1-26 c1-25 c1-11 c1-4 c1-b c1-57 c1-4v c1-3g c1-58 c1-59 c1-5a c1-5b c1-5c c1-5d c1-t c1-u c1-5e c1-5f c1-5g c1-5h c1-5i x-d-ux x-d-tccl x-d-aid">Sign up</button></div></div></form></div></div></span></div></div></div></div></section><script>new guacImage('//img1.wsimg.com/isteam/stock/ka7xkk1/:/rs=w:{width},h:{height},cg:true,m/cr=w:{width},h:{height},a:cc',document.getElementById('guacBg1959'),{"useTreatmentData":true,"backgroundLayers":["linear-gradient(to bottom, rgba(22, 22, 22, 0.24) 0%, rgba(22, 22, 22, 0.24) 100%)"]})</script></div> </div></div></div><div id="c0a75842-1dbc-4814-9fca-a5c6783c37ef" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-h c1-i c1-j c1-b c1-c c1-l c1-m c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-1q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-s c1-b c1-c c1-82 c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-x c1-y c1-z c1-10 c1-11 c1-1q c1-83 c1-84 c1-b c1-c c1-3u c1-d c1-3v c1-e c1-3w c1-f c1-3x c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-85 c1-1m c1-3o c1-1o c1-3p c1-18 c1-2j c1-1a c1-2i c1-b c1-c c1-86 c1-87 c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="BodyAlpha" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-78 c1-4v c1-b c1-46 c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">indesaned</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-14 c1-15 c1-16 c1-2u c1-18 c1-2j c1-1a c1-2i c1-1d c1-1q c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-3o c1-1o c1-3p c1-b c1-c c1-d c1-88 c1-89 c1-e c1-f c1-g x-d-ux"><div typography="BodyAlpha" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-18 c1-1a c1-b c1-8a c1-c c1-2m c1-d c1-8b c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 indesaned - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-15 c1-1j c1-1k c1-3n c1-11 c1-1m c1-3o c1-1o c1-3p c1-b c1-c c1-d c1-88 c1-89 c1-e c1-f c1-g x-d-ux"><p typography="BodyAlpha" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-1 c1-2 c1-25 c1-26 c1-4n c1-8c c1-1a c1-b c1-8a c1-c c1-2m c1-d c1-8d c1-71 c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" data-aid="FOOTER_POWERED_BY_RENDERED_LINK" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-22 c1-23 c1-24 c1-25 c1-26 c1-27 c1-28 c1-8c c1-b c1-8e c1-c c1-2e c1-8f c1-8g c1-d c1-8d c1-71 c1-e c1-f c1-g x-d-ux x-d-aid" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.1961.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.66.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/eb81d896d09f350/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1d60b452de0e239d/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","fonts":["righteous","default",""],"colors":["#b09175"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"b0f318c4-87f1-46c8-8e03-c6bce7d28abd":{"isFlyoutMenu":false,"active":true,"pageId":"b0f318c4-87f1-46c8-8e03-c6bce7d28abd","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme9","paintJob":"MVP"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"indesaned"},"fontPackLogoId":null,"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logo":{"logoText":"indesaned"},"fontPackLogoId":null,"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","section":"default","category":"neutral","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/e374870201fcd502/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"tag":"h1","typography":"HeadingAlpha","children":"Busy Mom, Healthy Food","scaledFontSizes":["xxlarge","xlarge","large"],"style":{},"data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"My Recipes","pageId":"b0f318c4-87f1-46c8-8e03-c6bce7d28abd","widgetId":"","url":"","target":""},"data-aid":"HEADER_CTA_BTN","data-field-id":"ctaButton","data-field-route":"\u002FctaButton","data-tccl":"ux2.header.cta_button.click,click","widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","section":"default","category":"accent","locale":"en-US","renderMode":"PUBLISH"},{"widgetId":"799892f5-0e44-4aba-8f35-ac6e797b2297","widgetType":"HEADER","widgetPreset":"header9","section":"default","category":"accent","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9eeddcbe4280d360/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-f19d09ca-59b3-4c68-80c6-c79744369fb9-bootstrap-container'] = {"renderMode":"PUBLISH","fonts":["righteous","default",""],"colors":["#b09175"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"b0f318c4-87f1-46c8-8e03-c6bce7d28abd":{"isFlyoutMenu":false,"active":true,"pageId":"b0f318c4-87f1-46c8-8e03-c6bce7d28abd","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme9"};</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/0c369ee6-1198-485c-a360-c22a3b5d9fa1/gpub/bef1f62548b71f6e/script.js" crossorigin></script>
<script type="text/javascript">document.getElementById('page-1947').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"0c369ee6-1198-485c-a360-c22a3b5d9fa1"}),_trfd.push({"pd":"2020-02-13T14:03:44.157Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
