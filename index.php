<?php
$GLOBALS['_ta_campaign_key'] = 'b4139e33d506890472044baad2d293a7';
$GLOBALS['_ta_debug_mode'] = false; //To enable debug mode, set to true or load this script with a '?debug_key=b4139e33d506890472044baad2d293a7' parameter

require 'bootloader.php';

$campaign_id = '23fg6i';

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

<!DOCTYPE html><html lang="en-US"><head><meta charSet="utf-8"/><meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/><title>emptysomehow</title><meta name="author" content="emptysomehow"/><meta name="generator" content="Starfield Technologies; Go Daddy Website Builder 8.0.0000"/><link rel="manifest" href="/manifest.webmanifest"/><link rel="apple-touch-icon" sizes="57x57" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:57,h:57,m"/><link rel="apple-touch-icon" sizes="60x60" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:60,h:60,m"/><link rel="apple-touch-icon" sizes="72x72" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:72,h:72,m"/><link rel="apple-touch-icon" sizes="114x114" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:114,h:114,m"/><link rel="apple-touch-icon" sizes="120x120" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:120,h:120,m"/><link rel="apple-touch-icon" sizes="144x144" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:144,h:144,m"/><link rel="apple-touch-icon" sizes="152x152" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:152,h:152,m"/><link rel="apple-touch-icon" sizes="180x180" href="//img1.wsimg.com/isteam/ip/static/pwa-app/logo-default.png/:/rs=w:180,h:180,m"/><meta property="og:url" content="https://emptysomehow.appspot.com/"/>
<meta property="og:site_name" content="emptysomehow"/>
<meta property="og:title" content="Available For Hire"/>
<meta property="og:description" content="Get to know me!"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://img1.wsimg.com/isteam/stock/87345"/>
<meta property="og:locale" content="en_US"/>
<meta name="twitter:card" content="summary"/>
<meta name="twitter:title" content="emptysomehow"/>
<meta name="twitter:description" content="Available For Hire"/>
<meta name="twitter:image" content="http://img1.wsimg.com/isteam/stock/87345"/>
<meta name="twitter:image:alt" content="emptysomehow"/>
<meta name="theme-color" content="#e0e0e3"/><script type="text/javascript" src="https://img1.wsimg.com/poly/v2/polyfill.min.js?unknown=polyfill&amp;flags=gated&amp;features=default%2Cfetch%2CArray.prototype.%40%40iterator%2CArray.prototype.find%2CArray.prototype.findIndex%2CFunction.name%2CNumber.isFinite%2CPromise%2CString.prototype.repeat%2CMath.sign%2CMath.trunc%2CArray.prototype.includes%2CObject.entries%2CObject.values%2CIntersectionObserver%2CIntl.~locale.en-US" crossorigin></script>
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
Copyright 2017 The Playfair Display Project Authors (https://github.com/clauseggers/Playfair-Display), with Reserved Font Name "Playfair Display".

This Font Software is licensed under the SIL Open Font License, Version 1.1.
This license is copied below, and is also available with a FAQ at: http://scripts.sil.org/OFL

—————————————————————————————-
SIL OPEN FONT LICENSE Version 1.1 - 26 February 2007
—————————————————————————————-
*/
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTjYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTPYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTLYgEM86xRbPQ.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 400;
  src: local('Playfair Display Regular'), local('PlayfairDisplay-Regular'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFiD-vYSZviVYUb_rj3ij__anPXDTzYgEM86xQ.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWoe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWEe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lWAe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 700;
  src: local('Playfair Display Bold'), local('PlayfairDisplay-Bold'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBYf9lW4e5j5hNKc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWoe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* vietnamese */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWEe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lWAe5j5hNKe1_w.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Playfair Display';
  font-style: normal;
  font-weight: 900;
  src: local('Playfair Display Black'), local('PlayfairDisplay-Black'), url(https://img1.wsimg.com/gfonts/s/playfairdisplay/v18/nuFlD-vYSZviVYUb_rj3ij__anPXBb__lW4e5j5hNKc.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}

/*
Digitized data copyright 2010-2011, Google Corporation.

Licensed under the Apache License, Version 2.0 (the "License");
you may not use this file except in compliance with the License.
You may obtain a copy of the License at

    http://www.apache.org/licenses/LICENSE-2.0

Unless required by applicable law or agreed to in writing, software
distributed under the License is distributed on an "AS IS" BASIS,
WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
See the License for the specific language governing permissions and
limitations under the License.
*/
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hmIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hvIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hnIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hoIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hkIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hlIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 300;
  src: local('Open Sans Light Italic'), local('OpenSans-LightItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWyV9hrIqOxjaPX.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Udc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0ddc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Vdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0adc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Wdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Xdc1GAK6bt6o.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 400;
  src: local('Open Sans Italic'), local('OpenSans-Italic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem6YaGs126MiZpBA-UFUK0Zdc1GAK6b.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhmIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhvIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhnIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhoIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhkIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhlIqOxjaPXZSk.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: italic;
  font-weight: 700;
  src: local('Open Sans Bold Italic'), local('OpenSans-BoldItalic'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/memnYaGs126MiZpBA-UFUKWiUNhrIqOxjaPX.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 300;
  src: local('Open Sans Light'), local('OpenSans-Light'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN_r8OUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWJ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFUZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWZ0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFWp0bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFW50bf8pkAp6a.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 400;
  src: local('Open Sans Regular'), local('OpenSans-Regular'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem8YaGs126MiZpBA-UFVZ0bf8pkAg.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 700;
  src: local('Open Sans Bold'), local('OpenSans-Bold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN7rgOUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
/* cyrillic-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOX-hpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
}
/* cyrillic */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOVuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
}
/* greek-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXuhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+1F00-1FFF;
}
/* greek */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0370-03FF;
}
/* vietnamese */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXehpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0102-0103, U+0110-0111, U+1EA0-1EF9, U+20AB;
}
/* latin-ext */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOXOhpKKSTj5PW.woff2) format('woff2');
  unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
}
/* latin */
@font-face {
  font-family: 'Open Sans';
  font-style: normal;
  font-weight: 800;
  src: local('Open Sans ExtraBold'), local('OpenSans-ExtraBold'), url(https://img1.wsimg.com/gfonts/s/opensans/v17/mem5YaGs126MiZpBA-UN8rsOUuhpKKSTjw.woff2) format('woff2');
  unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
}
</style>
<link rel="stylesheet" href="//img1.wsimg.com/blobby/go/b428ff9a-2be3-4db7-9a90-8590200c54b5/gpub/4ce1a7c86682e5e8/styles.css"/>
<link data-glamor="cxs-default-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b428ff9a-2be3-4db7-9a90-8590200c54b5/gpub/b2e54f786488656e/styles.css"/>
<style data-glamor="cxs-media-sheet" type="text/css"></style>
<style data-glamor="cxs-xs-sheet" type="text/css">@media (max-width: 767px){.x .c1-r{padding-top:32px}}@media (max-width: 767px){.x .c1-s{padding-bottom:32px}}@media (max-width: 767px){.x .c1-23{width:100%}}@media (max-width: 767px){.x .c1-7g > :nth-child(n){margin-bottom:24px}}@media (max-width: 767px){.x .c1-7h  > :last-child{margin-bottom:0 !important}}@media (max-width: 767px){.x .c1-8e > p > ul{margin-left:0}}@media (max-width: 767px){.x .c1-8f > p > ul{margin-right:0}}@media (max-width: 767px){.x .c1-8g > p > ul{padding-left:24px}}@media (max-width: 767px){.x .c1-8o{flex-direction:column}}@media (max-width: 767px){.x .c1-8s{display:flex}}</style>
<link data-glamor="cxs-sm-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b428ff9a-2be3-4db7-9a90-8590200c54b5/gpub/4405fa3c32252db7/styles.css"/>
<link data-glamor="cxs-md-sheet" rel="stylesheet" href="//img1.wsimg.com/blobby/go/b428ff9a-2be3-4db7-9a90-8590200c54b5/gpub/7197a9ea83ab8c66/styles.css"/>
<style data-glamor="cxs-lg-sheet" type="text/css">@media (min-width: 1280px){.x .c1-f{font-size:16px}}@media (min-width: 1280px){.x .c1-1t{width:1160px}}@media (min-width: 1280px){.x .c1-34{font-size:32px}}@media (min-width: 1280px){.x .c1-44{font-size:14px}}@media (min-width: 1280px){.x .c1-5l{font-size:44px}}@media (min-width: 1280px){.x .c1-5v{font-size:22px}}@media (min-width: 1280px){.x .c1-8x{font-size:12px}}</style>
<style data-glamor="cxs-xl-sheet" type="text/css">@media (min-width: 1536px){.x .c1-g{font-size:18px}}@media (min-width: 1536px){.x .c1-1u{width:1280px}}@media (min-width: 1536px){.x .c1-35{font-size:36px}}@media (min-width: 1536px){.x .c1-45{font-size:16px}}@media (min-width: 1536px){.x .c1-5m{font-size:48px}}@media (min-width: 1536px){.x .c1-5w{font-size:24px}}@media (min-width: 1536px){.x .c1-8y{font-size:14px}}</style>
<style type="text/css">.page-inner { background-color: rgb(255, 255, 255); min-height: 100vh; }</style></head>
<body class="x  x-fonts-playfair-display" context="[object Object]"><div id="layout-b-428-ff-9-a-2-be-3-4-db-7-9-a-90-8590200-c-54-b-5" class="layout layout-layout layout-layout-layout-27 locale-en-US lang-en"><div data-ux="Page" id="page-4742" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-4 c1-5 c1-6 c1-7 c1-8 c1-9 c1-a c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div page-inner c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div id="fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6" class="widget widget-header widget-header-header-9"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-h c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Header" data-aid="HEADER_WIDGET" class="x-el x-el-div x-el x-el widget-header-header-9 c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-aid x-d-ux c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div><section data-ux="Section" data-aid="HEADER_SECTION" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-k c1-b c1-c c1-l c1-m c1-n c1-o c1-p c1-q c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-u c1-b c1-c c1-v c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-w c1-b c1-c c1-d c1-x c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContainerFluid" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-13 c1-b c1-c c1-d c1-14 c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-15 c1-b c1-c c1-16 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-17 c1-18 c1-19 c1-1a c1-12 c1-1b c1-1c c1-1d c1-1e c1-1f c1-1g c1-1h c1-1i c1-b c1-c c1-1j c1-d c1-1k c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1v c1-1w c1-1x c1-b c1-c c1-d c1-1y c1-1z c1-20 c1-e c1-f c1-g x-d-ux"></div><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-21 c1-22 c1-12 c1-c c1-23 c1-24 c1-d c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0" title="emptysomehow" href="/" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4744.click,click"><div id="bs-1"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-4745" logoText="emptysomehow" class="x-el x-el-h3 c1-2k c1-2 c1-28 c1-29 c1-2l c1-y c1-z c1-1g c1-1h c1-12 c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-22 c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-34 c1-35 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-21 c1-4 c1-22 c1-2z c1-31 c1-33 c1-34 c1-35 x-d-ux x-d-aid x-d-route">emptysomehow</span></h3></div></a></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-36 c1-b c1-c c1-d c1-1z c1-20 c1-e c1-f c1-g x-d-ux"></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1c c1-1d c1-1e c1-19 c1-1a c1-1f c1-1g c1-18 c1-1h c1-17 c1-1i c1-b c1-c c1-d c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1d c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><nav data-ux="Nav" data-aid="HEADER_NAV_RENDERED" class="x-el x-el-nav c1-1 c1-2 c1-12 c1-37 c1-1b c1-1e c1-38 c1-39 c1-b c1-c c1-d c1-3a c1-e c1-f c1-g x-d-ux x-d-aid"><ul data-ux="List" id="n-47434746-navId" class="x-el x-el-ul c1-1 c1-2 c1-1g c1-1h c1-17 c1-18 c1-3b c1-3c c1-3d c1-t c1-3e c1-1a c1-3f c1-19 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><li data-ux="ListItemInline" class="x-el x-el-li c1-1 c1-2 c1-3g c1-17 c1-3h c1-21 c1-3i c1-3j c1-3k c1-3l c1-t c1-3m c1-b c1-c c1-3n c1-3o c1-d c1-e c1-f c1-g x-d-ux"><div id="bs-2"><script>var n=document.querySelector('[data-aid="HEADER_NAV_RENDERED"]');n.offsetHeight>0&&n.offsetWidth>0&&(Number(window.vctElements)||(window.vctElements=0),window.vctElements++);</script><a rel="" typography="NavAlpha" data-ux="NavLinkDropdown" data-toggle-ignore="true" id="4748" data-aid="NAV_MORE" ignoreCloseAttr="data-ignore-close" data-edit-interactive="true" href="#" class="x-el x-el-a c1-3p c1-3q c1-27 c1-28 c1-29 c1-1b c1-2b c1-1c c1-3r c1-3s c1-3t c1-3u c1-3v c1-3w c1-3x c1-3y c1-b c1-2y c1-3z c1-30 c1-40 c1-41 c1-42 c1-43 c1-44 c1-45 x-d-ux x-d-toggle-ignore x-d-aid x-d-edit-interactive" data-tccl="ux2.HEADER.header9.Nav.Default.Link.Dropdown.4749.click,click"><div style="pointer-events:none;display:flex;align-items:center" data-aid="NAV_DROPDOWN"><span style="margin-right:4px">More</span><svg viewBox="0 0 24 24" fill="currentColor" width="16px" height="16px" data-ux="Icon" class="x-el x-el-svg c1-1 c1-2 c1-46 c1-21 c1-47 c1-48 c1-49 c1-t c1-b c1-3z c1-42 c1-43 c1-44 c1-45 x-d-ux"><path fill-rule="evenodd" d="M19.774 7.86c.294-.335.04-.839-.423-.84L4.538 7c-.447-.001-.698.48-.425.81l7.204 8.693a.56.56 0 0 0 .836.011l7.621-8.654z"></path></svg></div></a></div></li></ul></nav></div></div></div></nav></div><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-b c1-c c1-d c1-4a c1-e c1-f c1-g x-d-ux"><nav data-ux="Block" class="x-el x-el-nav c1-1 c1-2 c1-4 c1-15 c1-b c1-c c1-16 c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-18 c1-1h c1-17 c1-1c c1-1d c1-1e c1-19 c1-1a c1-1f c1-1i c1-b c1-c c1-4e c1-4f c1-4g c1-4h c1-d c1-1l c1-1m c1-1n c1-1o c1-1p c1-1q c1-1r c1-1s c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-4j c1-4k c1-3e c1-1a c1-3f c1-19 c1-1i c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-4p c1-4q c1-3e c1-1a c1-3f c1-19 c1-1i c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" data-aid="HEADER_LOGO_RENDERED" class="x-el x-el-div c1-1b c1-22 c1-12 c1-1e c1-c c1-23 c1-24 c1-d c1-3a c1-e c1-f c1-g x-d-ux x-d-aid"><a rel="" typography="LinkAlpha" data-ux="Link" data-page="2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0" title="emptysomehow" href="/" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-2c c1-2d c1-2e c1-2f c1-12 c1-b c1-2g c1-c c1-2h c1-2i c1-2j c1-d c1-e c1-f c1-g x-d-ux x-d-page" data-tccl="ux2.HEADER.header9.Logo.Default.Link.Default.4750.click,click"><div id="bs-3"><h3 typography="HeadingGamma" data-ux="LogoHeading" id="logo-container-4751" logoText="emptysomehow" class="x-el x-el-h3 c1-2k c1-2 c1-28 c1-29 c1-2l c1-y c1-z c1-1g c1-1h c1-12 c1-2m c1-2n c1-2o c1-2p c1-2q c1-2r c1-2s c1-2t c1-2u c1-2v c1-2w c1-2x c1-22 c1-2y c1-2z c1-30 c1-31 c1-32 c1-33 c1-34 c1-35 x-d-ux"><span data-ux="Element" data-aid="HEADER_LOGO_TEXT_RENDERED" data-route="logo/logoText" class="x-el x-el-span c1-21 c1-4 c1-22 c1-2z c1-31 c1-33 c1-34 c1-35 x-d-ux x-d-aid x-d-route">emptysomehow</span></h3></div></a></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-4j c1-4k c1-3e c1-1a c1-3f c1-19 c1-1i c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"></div></div></nav></div></div></div><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-3e c1-3f c1-1g c1-1h c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-t c1-b c1-c c1-4r c1-4s c1-4t c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-1b c1-1e c1-1c c1-b c1-c c1-4u c1-4v c1-d c1-e c1-f c1-g x-d-ux"><figure data-ux="WrapperImage" data-route="hasMedia:mediaData" class="x-el x-el-figure c1-1 c1-2 c1-t c1-21 c1-1g c1-18 c1-1h c1-17 c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux x-d-route"><img src="//img1.wsimg.com/isteam/stock/87345/:/rs=h:1000,cg:true,m" srcSet="//img1.wsimg.com/isteam/stock/87345/:/rs=h:1000,cg:true,m,
//img1.wsimg.com/isteam/stock/87345/:/rs=h:1500,cg:true,m 1.5x,
//img1.wsimg.com/isteam/stock/87345/:/rs=h:2000,cg:true,m 2x,
//img1.wsimg.com/isteam/stock/87345/:/rs=h:3000,cg:true,m 3x" alt="image227" data-ux="Image" data-aid="BACKGROUND_IMAGE_RENDERED" data-ht="Inset" class="x-el x-el-img c1-1 c1-2 c1-12 c1-4w c1-y c1-z c1-1g c1-1h c1-49 c1-4x c1-b c1-c c1-23 c1-4y c1-1j c1-4t c1-4z c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-ht"/><script>(function(){Number(window.vctElements)||(window.vctElements=0),window.vctElements++;var i=new Image();i.onload=window.markVisuallyComplete;i.srcset="//img1.wsimg.com/isteam/stock/87345/:/rs=h:1000,cg:true,m, //img1.wsimg.com/isteam/stock/87345/:/rs=h:1500,cg:true,m 1.5x, //img1.wsimg.com/isteam/stock/87345/:/rs=h:2000,cg:true,m 2x, //img1.wsimg.com/isteam/stock/87345/:/rs=h:3000,cg:true,m 3x";i.src="//img1.wsimg.com/isteam/stock/87345/:/rs=h:1000,cg:true,m";})()</script></figure></div><div data-ux="Hero" class="x-el x-el-div c1-1 c1-2 c1-2m c1-1b c1-1w c1-1d c1-1e c1-1c c1-10 c1-11 c1-50 c1-51 c1-52 c1-b c1-c c1-1j c1-53 c1-54 c1-55 c1-56 c1-57 c1-58 c1-59 c1-d c1-5a c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-1b c1-1w c1-1e c1-1c c1-5b c1-4 c1-b c1-c c1-5c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-5d c1-4 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-17 c1-18 c1-19 c1-1a c1-12 c1-5e c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="HeroHeading" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-5f c1-2 c1-28 c1-29 c1-5g c1-y c1-z c1-1g c1-5h c1-13 c1-4 c1-t c1-22 c1-2y c1-5i c1-30 c1-5j c1-x c1-5k c1-5l c1-5m x-d-ux x-d-aid x-d-route">Available For Hire</h1><div id="bs-4"><div data-ux="Element" id="tagline-container-4752" class="x-el x-el-div c1-1 c1-2 c1-28 c1-29 c1-5g c1-w c1-b c1-c c1-d c1-4a c1-e c1-f c1-g x-d-ux"><h1 typography="HeadingAlpha" data-ux="Tagline" data-aid="HEADER_TAGLINE_RENDERED" data-route="tagline" class="x-el x-el-h1 c1-5f c1-2 c1-28 c1-29 c1-5g c1-y c1-z c1-1g c1-5h c1-5n c1-21 c1-4 c1-c c1-t c1-22 c1-2y c1-30 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route">Available For Hire</h1><span data-ux="Element" data-size="xxlarge" data-scaler-id="scaler-tagline-container-4752" class="x-el x-el-span c1-5o c1-5p c1-13 c1-3m c1-5q c1-5r c1-5i c1-22 c1-5j c1-5k c1-5l c1-5m x-d-ux x-d-size x-d-scaler-id">Available For Hire</span><span data-ux="Element" data-size="xlarge" data-scaler-id="scaler-tagline-container-4752" class="x-el x-el-span c1-5o c1-5p c1-13 c1-3m c1-5q c1-5r c1-2z c1-22 c1-31 c1-33 c1-34 c1-35 x-d-ux x-d-size x-d-scaler-id">Available For Hire</span><span data-ux="Element" data-size="large" data-scaler-id="scaler-tagline-container-4752" class="x-el x-el-span c1-5o c1-5p c1-13 c1-3m c1-5q c1-5r c1-5s c1-22 c1-5t c1-5u c1-5v c1-5w x-d-ux x-d-size x-d-scaler-id">Available For Hire</span></div></div></div><div typography="BodyAlpha" data-ux="HeroText" data-aid="HEADER_TAGLINE2_RENDERED" data-route="tagline2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-5x c1-1g c1-5h c1-5y c1-5z c1-60 c1-61 c1-21 c1-4 c1-5d c1-y c1-z c1-b c1-3g c1-c c1-30 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Get to know me!</span></p></div><div id="bs-5" style="max-width:100%"><a tcclTracking="click" typography="ButtonAlpha" data-ux="Button" data-aid="HEADER_CTA_BTN" href="/" target="" data-tccl="ux2.header.cta_button.click,click" data-page="2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0" class="x-el x-el-a c1-3p c1-3q c1-67 c1-1v c1-3k c1-68 c1-69 c1-6a c1-21 c1-2m c1-27 c1-2b c1-29 c1-28 c1-12 c1-4w c1-6b c1-6c c1-6d c1-6e c1-6f c1-b c1-6g c1-63 c1-6h c1-3z c1-6i c1-6j c1-6k c1-6l c1-42 c1-6m c1-6n c1-6o c1-6p c1-6q c1-6r c1-43 c1-6s c1-6t c1-6u c1-6v c1-44 c1-45 x-d-ux x-d-aid x-d-tccl x-d-page">Contact Me</a></div></div></div></div></div></div></div></section> </div></div></div></div><div id="4224954c-d028-4762-8894-1d0038caf9a6" class="widget widget-about widget-about-about-9"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="ABOUT_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-6w c1-3q c1-28 c1-29 c1-6x c1-17 c1-18 c1-1g c1-u c1-6y c1-6z c1-b c1-c c1-70 c1-30 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">About Me</span></h2><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-72 c1-73 c1-74 c1-b c1-c c1-4e c1-4f c1-4g c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-77 c1-78 c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/0" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-72 c1-1h c1-74 c1-1e c1-b c1-c c1-4e c1-4f c1-79 c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-3f c1-78 c1-1b c1-1e c1-1c c1-b c1-c c1-7a c1-7b c1-4l c1-4m c1-7c c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="0" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-4 c1-7d c1-1c c1-2m c1-7e c1-7f c1-b c1-c c1-7g c1-7h c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED0" data-route="cards.headline" data-field-route="/card/0" class="x-el x-el-h4 c1-7i c1-2 c1-28 c1-29 c1-7j c1-17 c1-18 c1-1g c1-1h c1-b c1-7k c1-5s c1-30 c1-5t c1-5u c1-5v c1-5w x-d-ux x-d-aid x-d-route x-d-field-route">My Experience</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED0" data-route="cards.description" data-field-route="/card/0" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-5x c1-1g c1-1h c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-b c1-8d c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-8h c1-8i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">I graduated from college having majored in journalism with a minor in business communication. I have been working as an office manager for the past three years as well as freelancing as a copy editor. I have also been carrying HR duties when needed.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-77 c1-78 c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/1" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-72 c1-1h c1-74 c1-1e c1-b c1-c c1-4e c1-4f c1-79 c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-3f c1-78 c1-1b c1-1e c1-1c c1-b c1-c c1-7a c1-7b c1-4l c1-4m c1-7c c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="1" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-4 c1-7d c1-1c c1-2m c1-7e c1-7f c1-b c1-c c1-7g c1-7h c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED1" data-route="cards.headline" data-field-route="/card/1" class="x-el x-el-h4 c1-7i c1-2 c1-28 c1-29 c1-7j c1-17 c1-18 c1-1g c1-1h c1-b c1-7k c1-5s c1-30 c1-5t c1-5u c1-5v c1-5w x-d-ux x-d-aid x-d-route x-d-field-route">My Skillset</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED1" data-route="cards.description" data-field-route="/card/1" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-5x c1-1g c1-1h c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-b c1-8d c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-8h c1-8i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">I possess a sharp eye for detail, which I use to find even the smallest errors in text. I work well under pressure and can produce high-quality work in short periods of time. I have strong interpersonal skills and work with a wide variety of people.</span></p></div></div></div></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-77 c1-78 c1-b c1-c c1-4l c1-4m c1-4n c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Grid" data-field-id="cards" data-field-route="/card/2" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-72 c1-1h c1-74 c1-1e c1-b c1-c c1-4e c1-4f c1-79 c1-4h c1-d c1-e c1-f c1-g x-d-ux x-d-field-id x-d-field-route"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-3f c1-78 c1-1b c1-1e c1-1c c1-b c1-c c1-7a c1-7b c1-4l c1-4m c1-7c c1-4o c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="ContentBasic" index="2" class="x-el x-el-div x-el c1-1 c1-2 c1-1b c1-1w c1-4 c1-7d c1-1c c1-2m c1-7e c1-7f c1-b c1-c c1-7g c1-7h c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h4 typography="HeadingDelta" data-ux="ContentHeading" data-aid="ABOUT_HEADLINE_RENDERED2" data-route="cards.headline" data-field-route="/card/2" class="x-el x-el-h4 c1-7i c1-2 c1-28 c1-29 c1-7j c1-17 c1-18 c1-1g c1-1h c1-b c1-7k c1-5s c1-30 c1-5t c1-5u c1-5v c1-5w x-d-ux x-d-aid x-d-route x-d-field-route">My Goals</h4><div typography="BodyAlpha" data-ux="ContentText" alignment="center" data-aid="ABOUT_DESCRIPTION_RENDERED2" data-route="cards.description" data-field-route="/card/2" class="x-el x-el-p c1-1 c1-2 c1-28 c1-29 c1-5x c1-1g c1-1h c1-7l c1-7m c1-7n c1-7o c1-7p c1-7q c1-7r c1-7s c1-7t c1-7u c1-7v c1-7w c1-7x c1-7y c1-7z c1-80 c1-81 c1-82 c1-83 c1-84 c1-85 c1-86 c1-87 c1-88 c1-89 c1-8a c1-8b c1-8c c1-b c1-8d c1-c c1-30 c1-8e c1-8f c1-8g c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route x-d-field-route x-rt"><p style="margin:0"><span class="x-el x-el-span c1-8h c1-8i c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux">I am looking for an opportunity to work with a team that runs on clear communication.I want to align myself with a company I believe in and where I can create positive change. I am always looking to learn more and am open to taking on challenging projects.</span></p></div></div></div></div></div></div></div></section> </div></div></div><div id="b07196c6-0368-41a7-ba98-c13b2a64e1f3" class="widget widget-download widget-download-download-1"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8j c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><h2 typography="HeadingBeta" data-ux="SectionHeading" data-aid="DOWNLOAD_SECTION_TITLE_RENDERED" data-route="sectionTitle" class="x-el x-el-h2 c1-6w c1-3q c1-28 c1-29 c1-6x c1-17 c1-18 c1-1g c1-u c1-6y c1-6z c1-b c1-c c1-70 c1-30 c1-71 c1-d c1-e c1-f c1-g x-d-ux x-d-aid x-d-route"><span data-ux="Element" class="">Resume</span></h2></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-72 c1-1h c1-74 c1-b c1-c c1-4e c1-4f c1-79 c1-4h c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" data-aid="DOWNLOAD_DOCUMENTS_RENDERED" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-76 c1-3f c1-78 c1-b c1-c c1-4l c1-4m c1-7c c1-4o c1-d c1-8k c1-8l c1-8m c1-e c1-f c1-g x-d-ux x-d-aid"><div data-ux="Block" class="x-el x-el-div c1-1 c1-2 c1-8n c1-1b c1-1e c1-1c c1-67 c1-1v c1-10 c1-11 c1-50 c1-b c1-c c1-8o c1-d c1-e c1-f c1-g x-d-ux"><span typography="BodyAlpha" data-ux="Text" data-aid="DOWNLOAD_FILE_NAME_RENDERED" class="x-el x-el-span c1-1 c1-2 c1-28 c1-29 c1-5x c1-1g c1-1h c1-8p c1-b c1-2y c1-c c1-30 c1-d c1-e c1-f c1-g x-d-ux x-d-aid">Files coming soon.</span></div></div></div></div></section> </div></div></div><div id="84018e6c-a859-4f30-b691-b5ffe8050167" class="widget widget-footer widget-footer-footer-4"><div data-ux="Widget" class="x-el x-el-div x-el c1-1 c1-2 c1-3 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux c1-1 c1-2 c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div><section data-ux="Section" class="x-el x-el-section c1-1 c1-2 c1-3 c1-i c1-j c1-b c1-c c1-r c1-s c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Layout" class="x-el x-el-div c1-1 c1-2 c1-2m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-1f c1-b c1-c c1-s c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><div data-ux="Container" class="x-el x-el-div c1-1 c1-2 c1-y c1-z c1-10 c1-11 c1-12 c1-2m c1-8q c1-j c1-b c1-c c1-1j c1-d c1-1k c1-e c1-1t c1-f c1-1u c1-g x-d-ux"><ul data-ux="NavFooter" class="x-el x-el-ul c1-1 c1-2 c1-8r c1-3e c1-1a c1-3f c1-19 c1-1g c1-18 c1-1h c1-17 c1-1i c1-b c1-c c1-8s c1-8o c1-d c1-e c1-f c1-g x-d-ux"></ul></div><p typography="DetailsBeta" data-ux="FooterText" data-aid="FOOTER_BUSINESS_NAME_RENDERED" data-route="businessName" class="x-el x-el-p c1-8t c1-3q c1-28 c1-29 c1-5x c1-1g c1-5h c1-63 c1-b c1-7k c1-8u c1-8v c1-8w c1-8x c1-8y x-d-ux x-d-aid x-d-route">emptysomehow</p></div><div data-ux="Grid" class="x-el x-el-div c1-1 c1-2 c1-1b c1-4b c1-4c c1-4d c1-1g c1-18 c1-1h c1-17 c1-1c c1-2m c1-b c1-c c1-d c1-e c1-f c1-g x-d-ux"><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-1a c1-3f c1-19 c1-b c1-c c1-d c1-8z c1-90 c1-e c1-f c1-g x-d-ux"><div typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_COPYRIGHT_RENDERED" data-route="copyright" class="x-el x-el-p c1-8t c1-3q c1-28 c1-29 c1-5x c1-1g c1-1h c1-b c1-91 c1-8u c1-30 c1-8v c1-92 c1-8w c1-8x c1-8y x-d-ux x-d-aid x-d-route x-rt"><p style="margin:0"><span>Copyright © 2020 emptysomehow - All Rights Reserved.</span></p></div></div><div data-ux="GridCell" class="x-el x-el-div c1-1 c1-2 c1-4b c1-1d c1-4i c1-75 c1-12 c1-3e c1-1a c1-3f c1-19 c1-b c1-c c1-d c1-8z c1-90 c1-e c1-f c1-g x-d-ux"><p typography="DetailsBeta" data-ux="FooterDetails" data-aid="FOOTER_POWERED_BY_RENDERED" data-route="poweredBy" class="x-el x-el-p c1-8t c1-3q c1-28 c1-29 c1-5x c1-93 c1-1h c1-b c1-91 c1-8u c1-30 c1-8v c1-94 c1-1p c1-8w c1-8x c1-8y x-d-ux x-d-aid x-d-route"><span>Powered by GoDaddy <a rel="nofollow noopener" typography="LinkAlpha" data-ux="Link" target="_blank" href="https://www.godaddy.com/websites/website-builder?isc=pwugc&amp;utm_source=wsb&amp;utm_medium=applications&amp;utm_campaign=en-us_corp_applications_base" class="x-el x-el-a c1-25 c1-26 c1-27 c1-28 c1-29 c1-2a c1-2b c1-93 c1-b c1-70 c1-8u c1-2h c1-95 c1-96 c1-8v c1-94 c1-1p c1-8w c1-8x c1-8y x-d-ux" data-tccl="ux2.FOOTER.footer4.Layout.Default.Link.Default.4754.click,click">Website Builder</a></span></p></div></div></div></div></section> </div></div></div></div></div></div>
<script type="text/javascript" src="//img1.wsimg.com/ceph-p3-01/website-builder-data-prod/static/widgets/UX.3.55.53.js" crossorigin></script>
<script type="text/javascript">window.cxs && window.cxs.setOptions({ prefix: "c2-" });</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/c6ee7c4aa5bfbb53/script.js" crossorigin></script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/2c17300d98a3b3c6/script.js" crossorigin></script>
<script type="text/javascript">window.wsb['context-bs-1'] = {"renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE","fonts":["playfair-display","default",""],"colors":["#e0e0e3"],"fontScale":"medium","locale":"en-US","language":"en","internalLinks":{},"isHomepage":true,"navigationMap":{"2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0":{"isFlyoutMenu":false,"active":true,"pageId":"2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0","name":"Home","href":"\u002F","target":"","visible":true,"requiresAuth":false,"rel":"","type":"page","showInFooter":false}},"theme":"Theme27"};</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-1',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"emptysomehow"},"fontPackLogoId":null,"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/1aff2d600074f107/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-2',componentName:'NavOverflow',props:props,context:context,contextKey:'context-bs-1'});
})({"style":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"activeStyle":{"marginHorizontal":"-6px","marginVertical":"-6px","paddingHorizontal":"6px","paddingVertical":"6px"},"label":"More","parentId":"n-47434746-navId","toggleId":"4747-moreId","navigation":[],"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Nav","groupType":"Default"});</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-3',componentName:'LogoText',props:props,context:context,contextKey:'context-bs-1'});
})({"logoStyle":{"textAlign":"center"},"logo":{"logoText":"emptysomehow"},"fontPackLogoId":null,"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Logo","groupType":"Default"});</script>
<script type="text/javascript" src="//img1.wsimg.com/blobby/go/gpub/9024daa7fc990e3a/script.js" crossorigin></script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-4',componentName:'DynamicTagline',props:props,context:context,contextKey:'context-bs-1'});
})({"children":"Available For Hire","scaledFontSizes":["xxlarge","xlarge","large"],"style":{},"tag":"h1","data-aid":"HEADER_TAGLINE_RENDERED","data-route":"tagline","widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">!function(n){var t={};function o(e){if(t[e])return t[e].exports;var r=t[e]={i:e,l:!1,exports:{}};return n[e].call(r.exports,r,r.exports,o),r.l=!0,r.exports}o.m=n,o.c=t,o.d=function(n,t,e){o.o(n,t)||Object.defineProperty(n,t,{configurable:!1,enumerable:!0,get:e})},o.n=function(n){var t=n&&n.__esModule?function(){return n.default}:function(){return n};return o.d(t,"a",t),t},o.o=function(n,t){return Object.prototype.hasOwnProperty.call(n,t)},o.p="",o(o.s=0)}([function(n,t,o){"use strict";window.wsb=window.wsb||{},window.wsb.CTAButton=window.wsb.CTAButton||o(1).components.CTAButton},function(n,t){n.exports=Core}]);</script>
<script type="text/javascript">(function(props,context) {
  Core.utils.renderBootstrap({elId:'bs-5',componentName:'CTAButton',props:props,context:context,contextKey:'context-bs-1'});
})({"ctaButton":{"enabled":true,"label":"Contact Me","pageId":"2dbc3c68-54c1-4511-8f4b-14af5ec7c5f0","widgetId":""},"data-aid":"HEADER_CTA_BTN","style":{"width":"auto","marginTop":"small"},"data-tccl":"ux2.header.cta_button.click,click","widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","section":"alt","category":"neutral","locale":"en-US","renderMode":"PUBLISH","viewDevice":"TABLET_RENDER_DEVICE"},{"widgetId":"fbdec8e3-e483-4850-9e5e-d0c2f6f0ccd6","widgetType":"HEADER","widgetPreset":"header9","section":"alt","category":"neutral","fontSize":"medium","fontFamily":"alternate","group":"Hero","groupType":"Default"});</script>
<script type="text/javascript">Number(window.vctElements)||(window.vctElements=0),window.vctElements++,window.markVisuallyComplete();</script>
<script type="text/javascript">document.getElementById('page-4742').addEventListener('click', function() {}, false);</script>
<script type="text/javascript">function tccl_dpsid(){for(var t="dps_site_id=",i=document.cookie.split(";"),e=0;e<i.length;e++){for(var n=i[e];" "==n.charAt(0);)n=n.substring(1);if(0==n.indexOf(t))return n.substring(t.length,n.length)}return null}_trfd.push({"tccl.baseHost":"secureserver.net"}),_trfd.push({"websiteId":"b428ff9a-2be3-4db7-9a90-8590200c54b5"}),_trfd.push({"pd":"2020-01-17T21:26:34.199Z"}),_trfd.push({ap:"IPv2",ds:tccl_dpsid()||"-1"});function addTccl(){if(Number(window.vctElements)&&!window.VISUAL_COMPLETE)setTimeout(addTccl,500);else{var t=document.createElement("script");t.setAttribute("src","//img1.wsimg.com/tcc/tcc_l.combined.1.0.6.min.js"),document.body.appendChild(t)}}addTccl();</script></body></html>
