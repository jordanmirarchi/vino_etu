<!DOCTYPE html><html lang="en"><head>
  <meta charset="utf-8">
  <title>Vino - Un gestionnaire de celliers par Kalimotxo Inc.</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="Vino est une application web de gestion de plusieurs celliers">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <style type="text/css">@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:300;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmSU5fBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu72xKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu5mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7mxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7WxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu7GxKKTU1Kvnz.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:400;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOmCnqEu92Fr1Mu4mxKKTU1Kg.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCRc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fABc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCBc4AMP6lbBP.woff2) format('woff2');unicode-range:U+1F00-1FFF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0370-03FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fCxc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fChc4AMP6lbBP.woff2) format('woff2');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Roboto';font-style:normal;font-weight:500;font-display:swap;src:url(https://fonts.gstatic.com/s/roboto/v29/KFOlCnqEu92Fr1MmEU9fBBc4AMP6lQ.woff2) format('woff2');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
  <style type="text/css">@font-face{font-family:'Material Icons';font-style:normal;font-weight:400;src:url(https://fonts.gstatic.com/s/materialicons/v113/flUhRq6tzZclQEJ-Vdg-IuiaDsNcIhQ8tQ.woff2) format('woff2');}.material-icons{font-family:'Material Icons';font-weight:normal;font-style:normal;font-size:24px;line-height:1;letter-spacing:normal;text-transform:none;display:inline-block;white-space:nowrap;word-wrap:normal;direction:ltr;-webkit-font-feature-settings:'liga';-webkit-font-smoothing:antialiased;}</style>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <style type="text/css">@font-face{font-family:'Dancing Script';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/dancingscript/v19/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Rep6hNX6plRPjLo.woff) format('woff');unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;}@font-face{font-family:'Dancing Script';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/dancingscript/v19/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03ROp6hNX6plRPjLo.woff) format('woff');unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;}@font-face{font-family:'Dancing Script';font-style:normal;font-weight:700;font-display:swap;src:url(https://fonts.gstatic.com/s/dancingscript/v19/If2cXTr6YS-zF4S-kcSWSVi_sxjsohD9F50Ruu7B1i03Sup6hNX6plRP.woff) format('woff');unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;}</style>
<style>@charset "UTF-8";body,html{height:100%;}body{margin:0;font-family:Roboto,Helvetica Neue,sans-serif;}:root{--couleur-primaire:#4c1920;--couleur-primaire-800:#29060a;--couleur-secondaire:#184c44;--couleur-logo:#96694f;--couleur-gris-200:#fafafa;--couleur-gris-900:#2a2a2a;--texte-pale:var(--couleur-gris-200);--texte-fonce:var(var(--couleur-gris-900));--elevation-3:#ffffffaa;--voile-noir-100:#00000020;--espacement:1rem;--espacement-petit:calc(var(--espacement) * 0.5);--espacement-mini:calc(var(--espacement) * 0.25);--headerHauteur:60px;--footerHauteur:60px;}*{box-sizing:border-box;}body{color:var(--couleur-gris-900);background-color:var(--couleur-gris-200);}</style><link rel="stylesheet" href="/assets/angular/styles.3e6b26af479df51abe15.css" media="print" onload="this.media='all'"><noscript><link rel="stylesheet" href="/assets/angular/styles.3e6b26af479df51abe15.css"></noscript></head>
<body>
  <app-root></app-root>
<script src="/assets/angular/runtime.503ca7b8ac6b7046c1d9.js" defer></script><script src="/assets/angular/polyfills.fee973bc1f60dfe9b029.js" defer></script><script src="/assets/angular/main.5c3cedc1b6b73857b985.js" defer></script>

</body></html>