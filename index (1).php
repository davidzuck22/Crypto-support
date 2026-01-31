<?php 
require("moduls/init.php");
echo"<title>$config->title &raquo; $config->desc </title>";
if(isset($_SESSION["user"])) { header("location: dashboard/"); } $recent=date("U")-900;
$onlinequery=mysql_query("SELECT * FROM b_users WHERE lasttime>'$recent'");
$ucount=mysql_num_rows($onlinequery);
?>


<!DOCTYPE html>
<html dir="ltr" lang="en-US" prefix="og: https://ogp.me/ns#">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="profile" href="https://gmpg.org/xfn/11">




    <!-- All in One SEO 4.3.1.1 - aioseo.com -->
    <meta name="description"
        content="The world&#039;s safest way to invest Trusted by many since 2016 with over $13billion in trade profits. Get Started! Login Automatic order processing Your crypto is securely and instantly delivered to your personal wallet. We accept CurrencyRate.Today Global Coverage As one of the leading companies in the financial market, we have been able to" />
  
  
    <script type="application/ld+json" class="aioseo-schema">
			{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/blockexchange.live\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/blockexchange.live\/#listItem","position":1,"item":{"@type":"WebPage","@id":"https:\/\/blockexchange.live\/","name":"Home","description":"The world's safest way to invest  Trusted by many since 2016 with over $13billion in trade profits. Get Started! Login Automatic order processing Your crypto is securely and instantly delivered to your personal wallet. We accept CurrencyRate.Today Global Coverage As one of the leading companies in the financial market, we have been able to","url":"https:\/\/blockexchange.live\/"}}]},{"@type":"Organization","@id":"https:\/\/blockexchange.live\/#organization","name":"BlockExchange.live","url":"https:\/\/blockexchange.live\/","logo":{"@type":"ImageObject","url":"https:\/\/i0.wp.com\/blockexchange.live\/wp-content\/uploads\/2021\/06\/oxfx-tran.png?fit=300%2C230&ssl=1","@id":"https:\/\/blockexchange.live\/#organizationLogo","width":300,"height":230},"image":{"@id":"https:\/\/blockexchange.live\/#organizationLogo"}},{"@type":"WebPage","@id":"https:\/\/blockexchange.live\/#webpage","url":"https:\/\/blockexchange.live\/","name":"Home - BlockExchange.live","description":"The world's safest way to invest Trusted by many since 2016 with over $13billion in trade profits. Get Started! Login Automatic order processing Your crypto is securely and instantly delivered to your personal wallet. We accept CurrencyRate.Today Global Coverage As one of the leading companies in the financial market, we have been able to","inLanguage":"en-US","isPartOf":{"@id":"https:\/\/blockexchange.live\/#website"},"breadcrumb":{"@id":"https:\/\/blockexchange.live\/#breadcrumblist"},"datePublished":"2021-06-25T15:45:42+00:00","dateModified":"2022-09-27T19:20:54+00:00"},{"@type":"WebSite","@id":"https:\/\/blockexchange.live\/#website","url":"https:\/\/blockexchange.live\/","name":"BlockExchange.live","description":"Doing more of what works!","inLanguage":"en-US","publisher":{"@id":"https:\/\/blockexchange.live\/#organization"},"potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/blockexchange.live\/?s={search_term_string}"},"query-input":"required name=search_term_string"}}]}
		</script>
    <!-- All in One SEO -->
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = '2cf7305cfd7b20340d60c51bb7a00da4f93221ca';
_smartsupp.offsetY = 50; // move along the Y axis by 100 pixels
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>

    <style type="text/css">
        /*google translate Dropdown */

        #google_translate_element select {
            background: #f6edfd;
            color: #383ffa;
            border: none;
            border-radius: 3px;
            padding: 6px 8px
        }

        /*google translate link | logo */
        .goog-logo-link {
            display: none !important;
        }

        .goog-te-gadget {
            color: transparent !important;
        }

        /* google translate banner-frame */

        .goog-te-banner-frame {
            display: none !important;
        }

        #goog-gt-tt,
        .goog-te-balloon-frame {
            display: none !important;
        }

        .goog-text-highlight {
            background: none !important;
            box-shadow: none !important;
        }

        body {
            top: 0 !important;
        }
    </style>
    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>
    <style>
        h1,
        h2,
        h3 {
            color: var(--primary_color);
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            padding: 8px;
            color: #fff;
        }

        #customers tr:nth-child(even) {
            background-color: #3D3D3D;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #ef8f1a;
            color: white;
        }
    </style>
 
    <!-- This site uses the Google Analytics by MonsterInsights plugin v8.12.1 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <!-- Note: MonsterInsights is not currently configured on this site. The site owner needs to authenticate with Google Analytics in the MonsterInsights settings panel. -->
    <!-- No UA code set -->
    <!-- / Google Analytics by MonsterInsights -->
    <script>
        window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "https:\/\/blockexchange.live\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.1.1" } };
        /*! This file is auto-generated */
        !function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { var a = String.fromCharCode, e = (p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0), i.toDataURL()); return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]); case "emoji": return !s([129777, 127995, 8205, 129778, 127999], [129777, 127995, 8203, 129778, 127999]) }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);
    </script>
    
    <style>
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='gtranslate-style-css'
        href='../css/gtranslate-style246a4d.css' media='all' />
    <link rel='stylesheet' id='astra-theme-css-css'
        href='../css/main.min05da.css' media='all' />
    <style id='astra-theme-css-inline-css'>
        .ast-no-sidebar .entry-content .alignfull {
            margin-left: calc(-50vw + 50%);
            margin-right: calc(-50vw + 50%);
            max-width: 100vw;
            width: 100vw;
        }

        .ast-no-sidebar .entry-content .alignwide {
            margin-left: calc(-41vw + 50%);
            margin-right: calc(-41vw + 50%);
            max-width: unset;
            width: unset;
        }

        .ast-no-sidebar .entry-content .alignfull .alignfull,
        .ast-no-sidebar .entry-content .alignfull .alignwide,
        .ast-no-sidebar .entry-content .alignwide .alignfull,
        .ast-no-sidebar .entry-content .alignwide .alignwide,
        .ast-no-sidebar .entry-content .wp-block-column .alignfull,
        .ast-no-sidebar .entry-content .wp-block-column .alignwide {
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-gallery,
        .blocks-gallery-grid {
            margin: 0;
        }

        .wp-block-separator {
            max-width: 100px;
        }

        .wp-block-separator.is-style-wide,
        .wp-block-separator.is-style-dots {
            max-width: none;
        }

        .entry-content .has-2-columns .wp-block-column:first-child {
            padding-right: 10px;
        }

        .entry-content .has-2-columns .wp-block-column:last-child {
            padding-left: 10px;
        }

        @media (max-width: 782px) {
            .entry-content .wp-block-columns .wp-block-column {
                flex-basis: 100%;
            }

            .entry-content .has-2-columns .wp-block-column:first-child {
                padding-right: 0;
            }

            .entry-content .has-2-columns .wp-block-column:last-child {
                padding-left: 0;
            }
        }

        body .entry-content .wp-block-latest-posts {
            margin-left: 0;
        }

        body .entry-content .wp-block-latest-posts li {
            list-style: none;
        }

        .ast-no-sidebar .ast-container .entry-content .wp-block-latest-posts {
            margin-left: 0;
        }

        .ast-header-break-point .entry-content .alignwide {
            margin-left: auto;
            margin-right: auto;
        }

        .entry-content .blocks-gallery-item img {
            margin-bottom: auto;
        }

        .wp-block-pullquote {
            border-top: 4px solid #555d66;
            border-bottom: 4px solid #555d66;
            color: #40464d;
        }

        :root {
            --ast-container-default-xlg-padding: 6.67em;
            --ast-container-default-lg-padding: 5.67em;
            --ast-container-default-slg-padding: 4.34em;
            --ast-container-default-md-padding: 3.34em;
            --ast-container-default-sm-padding: 6.67em;
            --ast-container-default-xs-padding: 2.4em;
            --ast-container-default-xxs-padding: 1.4em;
            --ast-code-block-background: #EEEEEE;
            --ast-comment-inputs-background: #FAFAFA;
        }

        html {
            font-size: 93.75%;
        }

        a,
        .page-title {
            color: var(--ast-global-color-0);
        }

        a:hover,
        a:focus {
            color: var(--ast-global-color-1);
        }

        body,
        button,
        input,
        select,
        textarea,
        .ast-button,
        .ast-custom-button {
            font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Oxygen-Sans, Ubuntu, Cantarell, Helvetica Neue, sans-serif;
            font-weight: inherit;
            font-size: 15px;
            font-size: 1rem;
            line-height: 1.6em;
        }

        blockquote {
            color: var(--ast-global-color-3);
        }

        .site-title {
            font-size: 35px;
            font-size: 2.3333333333333rem;
            display: block;
        }

        .site-header .site-description {
            font-size: 15px;
            font-size: 1rem;
            display: none;
        }

        .entry-title {
            font-size: 30px;
            font-size: 2rem;
        }

        h1,
        .entry-content h1 {
            font-size: 40px;
            font-size: 2.6666666666667rem;
            line-height: 1.4em;
        }

        h2,
        .entry-content h2 {
            font-size: 30px;
            font-size: 2rem;
            line-height: 1.25em;
        }

        h3,
        .entry-content h3 {
            font-size: 25px;
            font-size: 1.6666666666667rem;
            line-height: 1.2em;
        }

        h4,
        .entry-content h4 {
            font-size: 20px;
            font-size: 1.3333333333333rem;
            line-height: 1.2em;
        }

        h5,
        .entry-content h5 {
            font-size: 18px;
            font-size: 1.2rem;
            line-height: 1.2em;
        }

        h6,
        .entry-content h6 {
            font-size: 15px;
            font-size: 1rem;
            line-height: 1.25em;
        }

        ::selection {
            background-color: var(--ast-global-color-0);
            color: #ffffff;
        }

        body,
        h1,
        .entry-title a,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-3);
        }

        .tagcloud a:hover,
        .tagcloud a:focus,
        .tagcloud a.current-item {
            color: #ffffff;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
        }

        input:focus,
        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="url"]:focus,
        input[type="password"]:focus,
        input[type="reset"]:focus,
        input[type="search"]:focus,
        textarea:focus {
            border-color: var(--ast-global-color-0);
        }

        input[type="radio"]:checked,
        input[type=reset],
        input[type="checkbox"]:checked,
        input[type="checkbox"]:hover:checked,
        input[type="checkbox"]:focus:checked,
        input[type=range]::-webkit-slider-thumb {
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            box-shadow: none;
        }

        .site-footer a:hover+.post-count,
        .site-footer a:focus+.post-count {
            background: var(--ast-global-color-0);
            border-color: var(--ast-global-color-0);
        }

        .single .nav-links .nav-previous,
        .single .nav-links .nav-next {
            color: var(--ast-global-color-0);
        }

        .entry-meta,
        .entry-meta * {
            line-height: 1.45;
            color: var(--ast-global-color-0);
        }

        .entry-meta a:hover,
        .entry-meta a:hover *,
        .entry-meta a:focus,
        .entry-meta a:focus *,
        .page-links>.page-link,
        .page-links .page-link:hover,
        .post-navigation a:hover {
            color: var(--ast-global-color-1);
        }

        #cat option,
        .secondary .calendar_wrap thead a,
        .secondary .calendar_wrap thead a:visited {
            color: var(--ast-global-color-0);
        }

        .secondary .calendar_wrap #today,
        .ast-progress-val span {
            background: var(--ast-global-color-0);
        }

        .secondary a:hover+.post-count,
        .secondary a:focus+.post-count {
            background: var(--ast-global-color-0);
            border-color: var(--ast-global-color-0);
        }

        .calendar_wrap #today>a {
            color: #ffffff;
        }

        .page-links .page-link,
        .single .post-navigation a {
            color: var(--ast-global-color-0);
        }

        .widget-title {
            font-size: 21px;
            font-size: 1.4rem;
            color: var(--ast-global-color-3);
        }

        .ast-logo-title-inline .site-logo-img {
            padding-right: 1em;
        }

        .site-logo-img img {
            transition: all 0.2s linear;
        }

        .ast-page-builder-template .hentry {
            margin: 0;
        }

        .ast-page-builder-template .site-content>.ast-container {
            max-width: 100%;
            padding: 0;
        }

        .ast-page-builder-template .site-content #primary {
            padding: 0;
            margin: 0;
        }

        .ast-page-builder-template .no-results {
            text-align: center;
            margin: 4em auto;
        }

        .ast-page-builder-template .ast-pagination {
            padding: 2em;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-thumbnail {
            margin-top: 0;
        }

        .ast-page-builder-template .entry-header.ast-header-without-markup {
            margin-top: 0;
            margin-bottom: 0;
        }

        .ast-page-builder-template .entry-header.ast-no-title.ast-no-meta {
            margin-bottom: 0;
        }

        .ast-page-builder-template.single .post-navigation {
            padding-bottom: 2em;
        }

        .ast-page-builder-template.single-post .site-content>.ast-container {
            max-width: 100%;
        }

        .ast-page-builder-template .entry-header {
            margin-top: 4em;
            margin-left: auto;
            margin-right: auto;
            padding-left: 20px;
            padding-right: 20px;
        }

        .single.ast-page-builder-template .entry-header {
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template .ast-archive-description {
            margin: 4em auto 0;
            padding-left: 20px;
            padding-right: 20px;
        }

        .ast-page-builder-template.ast-no-sidebar .entry-content .alignwide {
            margin-left: 0;
            margin-right: 0;
        }

        @media (max-width:921px) {
            #ast-desktop-header {
                display: none;
            }
        }

        @media (min-width:921px) {
            #ast-mobile-header {
                display: none;
            }
        }

        .wp-block-buttons.aligncenter {
            justify-content: center;
        }

        @media (max-width:921px) {

            .ast-theme-transparent-header #primary,
            .ast-theme-transparent-header #secondary {
                padding: 0;
            }
        }

        @media (max-width:921px) {
            .ast-plain-container.ast-no-sidebar #primary {
                padding: 0;
            }
        }

        .ast-plain-container.ast-no-sidebar #primary {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media (min-width:1200px) {
            .wp-block-group .has-background {
                padding: 20px;
            }
        }

        @media (min-width:1200px) {

            .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignwide,
            .ast-page-builder-template.ast-no-sidebar .entry-content .wp-block-cover.alignfull {
                padding-right: 0;
                padding-left: 0;
            }
        }

        @media (min-width:1200px) {

            .wp-block-cover-image.alignwide .wp-block-cover__inner-container,
            .wp-block-cover.alignwide .wp-block-cover__inner-container,
            .wp-block-cover-image.alignfull .wp-block-cover__inner-container,
            .wp-block-cover.alignfull .wp-block-cover__inner-container {
                width: 100%;
            }
        }

        .wp-block-columns {
            margin-bottom: unset;
        }

        .wp-block-image.size-full {
            margin: 2rem 0;
        }

        .wp-block-separator.has-background {
            padding: 0;
        }

        .wp-block-gallery {
            margin-bottom: 1.6em;
        }

        .wp-block-group {
            padding-top: 4em;
            padding-bottom: 4em;
        }

        .wp-block-group__inner-container .wp-block-columns:last-child,
        .wp-block-group__inner-container :last-child,
        .wp-block-table table {
            margin-bottom: 0;
        }

        .blocks-gallery-grid {
            width: 100%;
        }

        .wp-block-navigation-link__content {
            padding: 5px 0;
        }

        .wp-block-group .wp-block-group .has-text-align-center,
        .wp-block-group .wp-block-column .has-text-align-center {
            max-width: 100%;
        }

        .has-text-align-center {
            margin: 0 auto;
        }

        @media (min-width:1200px) {

            .wp-block-cover__inner-container,
            .alignwide .wp-block-group__inner-container,
            .alignfull .wp-block-group__inner-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .wp-block-group.alignnone,
            .wp-block-group.aligncenter,
            .wp-block-group.alignleft,
            .wp-block-group.alignright,
            .wp-block-group.alignwide,
            .wp-block-columns.alignwide {
                margin: 2rem 0 1rem 0;
            }
        }

        @media (max-width:1200px) {
            .wp-block-group {
                padding: 3em;
            }

            .wp-block-group .wp-block-group {
                padding: 1.5em;
            }

            .wp-block-columns,
            .wp-block-column {
                margin: 1rem 0;
            }
        }

        @media (min-width:921px) {
            .wp-block-columns .wp-block-group {
                padding: 2em;
            }
        }

        @media (max-width:544px) {

            .wp-block-cover-image .wp-block-cover__inner-container,
            .wp-block-cover .wp-block-cover__inner-container {
                width: unset;
            }

            .wp-block-cover,
            .wp-block-cover-image {
                padding: 2em 0;
            }

            .wp-block-group,
            .wp-block-cover {
                padding: 2em;
            }

            .wp-block-media-text__media img,
            .wp-block-media-text__media video {
                width: unset;
                max-width: 100%;
            }

            .wp-block-media-text.has-background .wp-block-media-text__content {
                padding: 1em;
            }
        }

        .wp-block-image.aligncenter {
            margin-left: auto;
            margin-right: auto;
        }

        .wp-block-table.aligncenter {
            margin-left: auto;
            margin-right: auto;
        }

        @media (min-width:544px) {
            .entry-content .wp-block-media-text.has-media-on-the-right .wp-block-media-text__content {
                padding: 0 8% 0 0;
            }

            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 0 0 0 8%;
            }

            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-bottom-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-left>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-top-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-right>*,
            .ast-plain-container .site-content .entry-content .has-custom-content-position.is-position-center-left>* {
                margin: 0;
            }
        }

        @media (max-width:544px) {
            .entry-content .wp-block-media-text .wp-block-media-text__content {
                padding: 8% 0;
            }

            .wp-block-media-text .wp-block-media-text__media img {
                width: auto;
                max-width: 100%;
            }
        }

        .wp-block-button.is-style-outline .wp-block-button__link {
            border-color: var(--ast-global-color-0);
            border-top-width: 2px;
            border-right-width: 2px;
            border-bottom-width: 2px;
            border-left-width: 2px;
        }

        .wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color),
        .wp-block-button.wp-block-button__link.is-style-outline:not(.has-text-color) {
            color: var(--ast-global-color-0);
        }

        .wp-block-button.is-style-outline .wp-block-button__link:hover,
        .wp-block-button.is-style-outline .wp-block-button__link:focus {
            color: #ffffff !important;
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .post-page-numbers.current .page-link,
        .ast-pagination .page-numbers.current {
            color: #ffffff;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            border-radius: 2px;
        }

        @media (max-width:921px) {
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }

        @media (max-width:544px) {
            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }

        @media (min-width:544px) {
            .entry-content>.alignleft {
                margin-right: 20px;
            }

            .entry-content>.alignright {
                margin-left: 20px;
            }

            .wp-block-group.has-background {
                padding: 20px;
            }
        }

        h1.widget-title {
            font-weight: inherit;
        }

        h2.widget-title {
            font-weight: inherit;
        }

        h3.widget-title {
            font-weight: inherit;
        }

        @media (max-width:921px) {

            .ast-separate-container #primary,
            .ast-separate-container #secondary {
                padding: 1.5em 0;
            }

            #primary,
            #secondary {
                padding: 1.5em 0;
                margin: 0;
            }

            .ast-left-sidebar #content>.ast-container {
                display: flex;
                flex-direction: column-reverse;
                width: 100%;
            }

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single {
                padding: 1.5em 2.14em;
            }

            .ast-author-box img.avatar {
                margin: 20px 0 0 0;
            }
        }

        @media (min-width:922px) {

            .ast-separate-container.ast-right-sidebar #primary,
            .ast-separate-container.ast-left-sidebar #primary {
                border: 0;
            }

            .search-no-results.ast-separate-container #primary {
                margin-bottom: 4em;
            }
        }

        .wp-block-button .wp-block-button__link {
            color: #ffffff;
        }

        .wp-block-button .wp-block-button__link:hover,
        .wp-block-button .wp-block-button__link:focus {
            color: #ffffff;
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        .elementor-widget-heading h1.elementor-heading-title {
            line-height: 1.4em;
        }

        .elementor-widget-heading h2.elementor-heading-title {
            line-height: 1.25em;
        }

        .elementor-widget-heading h3.elementor-heading-title {
            line-height: 1.2em;
        }

        .elementor-widget-heading h4.elementor-heading-title {
            line-height: 1.2em;
        }

        .elementor-widget-heading h5.elementor-heading-title {
            line-height: 1.2em;
        }

        .elementor-widget-heading h6.elementor-heading-title {
            line-height: 1.25em;
        }

        .wp-block-button .wp-block-button__link {
            border: none;
            background-color: var(--ast-global-color-0);
            color: #ffffff;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1em;
            border-radius: 2px;
            padding: 15px 30px;
        }

        .wp-block-button.is-style-outline .wp-block-button__link {
            border-style: solid;
            border-top-width: 2px;
            border-right-width: 2px;
            border-left-width: 2px;
            border-bottom-width: 2px;
            border-color: var(--ast-global-color-0);
            padding-top: calc(15px - 2px);
            padding-right: calc(30px - 2px);
            padding-bottom: calc(15px - 2px);
            padding-left: calc(30px - 2px);
        }

        @media (max-width:921px) {
            .wp-block-button .wp-block-button__link {
                border: none;
                padding: 15px 30px;
            }

            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }

        @media (max-width:544px) {
            .wp-block-button .wp-block-button__link {
                border: none;
                padding: 15px 30px;
            }

            .wp-block-button.is-style-outline .wp-block-button__link {
                padding-top: calc(15px - 2px);
                padding-right: calc(30px - 2px);
                padding-bottom: calc(15px - 2px);
                padding-left: calc(30px - 2px);
            }
        }

        .menu-toggle,
        button,
        .ast-button,
        .ast-custom-button,
        .button,
        input#submit,
        input[type="button"],
        input[type="submit"],
        input[type="reset"] {
            border-style: solid;
            border-top-width: 0;
            border-right-width: 0;
            border-left-width: 0;
            border-bottom-width: 0;
            color: #ffffff;
            border-color: var(--ast-global-color-0);
            background-color: var(--ast-global-color-0);
            border-radius: 2px;
            padding-top: 10px;
            padding-right: 40px;
            padding-bottom: 10px;
            padding-left: 40px;
            font-family: inherit;
            font-weight: inherit;
            line-height: 1em;
        }

        button:focus,
        .menu-toggle:hover,
        button:hover,
        .ast-button:hover,
        .ast-custom-button:hover .button:hover,
        .ast-custom-button:hover,
        input[type=reset]:hover,
        input[type=reset]:focus,
        input#submit:hover,
        input#submit:focus,
        input[type="button"]:hover,
        input[type="button"]:focus,
        input[type="submit"]:hover,
        input[type="submit"]:focus {
            color: #ffffff;
            background-color: var(--ast-global-color-1);
            border-color: var(--ast-global-color-1);
        }

        @media (min-width:544px) {
            .ast-container {
                max-width: 100%;
            }
        }

        @media (max-width:544px) {

            .ast-separate-container .ast-article-post,
            .ast-separate-container .ast-article-single,
            .ast-separate-container .comments-title,
            .ast-separate-container .ast-archive-description {
                padding: 1.5em 1em;
            }

            .ast-separate-container #content .ast-container {
                padding-left: 0.54em;
                padding-right: 0.54em;
            }

            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 1em;
                margin-bottom: 1.5em;
            }

            .ast-separate-container .ast-comment-list .bypostauthor {
                padding: .5em;
            }

            .ast-search-menu-icon.ast-dropdown-active .search-field {
                width: 170px;
            }
        }

        @media (max-width:921px) {
            .ast-mobile-header-stack .main-header-bar .ast-search-menu-icon {
                display: inline-block;
            }

            .ast-header-break-point.ast-header-custom-item-outside .ast-mobile-header-stack .main-header-bar .ast-search-icon {
                margin: 0;
            }

            .ast-comment-avatar-wrap img {
                max-width: 2.5em;
            }

            .ast-separate-container .ast-comment-list li.depth-1 {
                padding: 1.5em 2.14em;
            }

            .ast-separate-container .comment-respond {
                padding: 2em 2.14em;
            }

            .ast-comment-meta {
                padding: 0 1.8888em 1.3333em;
            }
        }

        @media (min-width:545px) {

            .ast-page-builder-template .comments-area,
            .single.ast-page-builder-template .entry-header,
            .single.ast-page-builder-template .post-navigation,
            .single.ast-page-builder-template .ast-single-related-posts-container {
                max-width: 1240px;
                margin-left: auto;
                margin-right: auto;
            }
        }

        .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
            margin-left: -6.67em;
            margin-right: -6.67em;
            width: auto;
        }

        @media (max-width: 1200px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.4em;
                margin-right: -2.4em;
            }
        }

        @media (max-width: 768px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -2.14em;
                margin-right: -2.14em;
            }
        }

        @media (max-width: 544px) {
            .ast-no-sidebar.ast-separate-container .entry-content .alignfull {
                margin-left: -1em;
                margin-right: -1em;
            }
        }

        .ast-no-sidebar.ast-separate-container .entry-content .alignwide {
            margin-left: -20px;
            margin-right: -20px;
        }

        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignfull,
        .ast-no-sidebar.ast-separate-container .entry-content .wp-block-column .alignwide {
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }

        @media (max-width:921px) {
            .site-title {
                display: block;
            }

            .site-header .site-description {
                display: none;
            }

            .entry-title {
                font-size: 30px;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }
        }

        @media (max-width:544px) {
            .site-title {
                display: block;
            }

            .site-header .site-description {
                display: none;
            }

            .entry-title {
                font-size: 30px;
            }

            h1,
            .entry-content h1 {
                font-size: 30px;
            }

            h2,
            .entry-content h2 {
                font-size: 25px;
            }

            h3,
            .entry-content h3 {
                font-size: 20px;
            }
        }

        @media (max-width:921px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (max-width:544px) {
            html {
                font-size: 85.5%;
            }
        }

        @media (min-width:922px) {
            .ast-container {
                max-width: 1240px;
            }
        }

        @media (min-width:922px) {
            .site-content .ast-container {
                display: flex;
            }
        }

        @media (max-width:921px) {
            .site-content .ast-container {
                flex-direction: column;
            }
        }

        @media (min-width:922px) {

            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu:hover>.sub-menu,
            .main-header-menu .sub-menu .menu-item.ast-left-align-sub-menu.focus>.sub-menu {
                margin-left: -0px;
            }
        }

        blockquote {
            padding: 1.2em;
        }

        :root .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }

        :root .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }

        :root .wp-block-button .has-ast-global-color-0-color {
            color: var(--ast-global-color-0);
        }

        :root .wp-block-button .has-ast-global-color-0-background-color {
            background-color: var(--ast-global-color-0);
        }

        :root .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }

        :root .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }

        :root .wp-block-button .has-ast-global-color-1-color {
            color: var(--ast-global-color-1);
        }

        :root .wp-block-button .has-ast-global-color-1-background-color {
            background-color: var(--ast-global-color-1);
        }

        :root .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }

        :root .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }

        :root .wp-block-button .has-ast-global-color-2-color {
            color: var(--ast-global-color-2);
        }

        :root .wp-block-button .has-ast-global-color-2-background-color {
            background-color: var(--ast-global-color-2);
        }

        :root .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }

        :root .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }

        :root .wp-block-button .has-ast-global-color-3-color {
            color: var(--ast-global-color-3);
        }

        :root .wp-block-button .has-ast-global-color-3-background-color {
            background-color: var(--ast-global-color-3);
        }

        :root .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }

        :root .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }

        :root .wp-block-button .has-ast-global-color-4-color {
            color: var(--ast-global-color-4);
        }

        :root .wp-block-button .has-ast-global-color-4-background-color {
            background-color: var(--ast-global-color-4);
        }

        :root .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }

        :root .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }

        :root .wp-block-button .has-ast-global-color-5-color {
            color: var(--ast-global-color-5);
        }

        :root .wp-block-button .has-ast-global-color-5-background-color {
            background-color: var(--ast-global-color-5);
        }

        :root .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }

        :root .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }

        :root .wp-block-button .has-ast-global-color-6-color {
            color: var(--ast-global-color-6);
        }

        :root .wp-block-button .has-ast-global-color-6-background-color {
            background-color: var(--ast-global-color-6);
        }

        :root .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }

        :root .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }

        :root .wp-block-button .has-ast-global-color-7-color {
            color: var(--ast-global-color-7);
        }

        :root .wp-block-button .has-ast-global-color-7-background-color {
            background-color: var(--ast-global-color-7);
        }

        :root .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }

        :root .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }

        :root .wp-block-button .has-ast-global-color-8-color {
            color: var(--ast-global-color-8);
        }

        :root .wp-block-button .has-ast-global-color-8-background-color {
            background-color: var(--ast-global-color-8);
        }

        :root {
            --ast-global-color-0: #0170B9;
            --ast-global-color-1: #3a3a3a;
            --ast-global-color-2: #3a3a3a;
            --ast-global-color-3: #4B4F58;
            --ast-global-color-4: #F5F5F5;
            --ast-global-color-5: #FFFFFF;
            --ast-global-color-6: #E5E5E5;
            --ast-global-color-7: #424242;
            --ast-global-color-8: #000000;
        }

        :root {
            --ast-border-color: #dddddd;
        }

        .ast-single-entry-banner {
            -js-display: flex;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background: #eeeeee;
        }

        .ast-single-entry-banner[data-banner-layout="layout-1"] {
            max-width: 1200px;
            background: inherit;
            padding: 20px 0;
        }

        .ast-single-entry-banner[data-banner-width-type="custom"] {
            margin: 0 auto;
            width: 100%;
        }

        .ast-single-entry-banner+.site-content .entry-header {
            margin-bottom: 0;
        }

        header.entry-header .entry-title {
            text-transform: capitalize;
        }

        header.entry-header>*:not(:last-child) {
            margin-bottom: 10px;
        }

        .ast-archive-entry-banner {
            -js-display: flex;
            display: flex;
            flex-direction: column;
            justify-content: center;
            text-align: center;
            position: relative;
            background: #eeeeee;
        }

        .ast-archive-entry-banner[data-banner-width-type="custom"] {
            margin: 0 auto;
            width: 100%;
        }

        .ast-archive-entry-banner[data-banner-layout="layout-1"] {
            background: inherit;
            padding: 20px 0;
            text-align: left;
        }

        body.archive .ast-archive-description {
            max-width: 1200px;
            width: 100%;
            text-align: left;
            padding-top: 3em;
            padding-right: 3em;
            padding-bottom: 3em;
            padding-left: 3em;
        }

        body.archive .ast-archive-description .ast-archive-title,
        body.archive .ast-archive-description .ast-archive-title * {
            font-size: 40px;
            font-size: 2.6666666666667rem;
            text-transform: capitalize;
        }

        body.archive .ast-archive-description>*:not(:last-child) {
            margin-bottom: 10px;
        }

        @media (max-width:921px) {
            body.archive .ast-archive-description {
                text-align: left;
            }
        }

        @media (max-width:544px) {
            body.archive .ast-archive-description {
                text-align: left;
            }
        }

        .ast-breadcrumbs .trail-browse,
        .ast-breadcrumbs .trail-items,
        .ast-breadcrumbs .trail-items li {
            display: inline-block;
            margin: 0;
            padding: 0;
            border: none;
            background: inherit;
            text-indent: 0;
        }

        .ast-breadcrumbs .trail-browse {
            font-size: inherit;
            font-style: inherit;
            font-weight: inherit;
            color: inherit;
        }

        .ast-breadcrumbs .trail-items {
            list-style: none;
        }

        .trail-items li::after {
            padding: 0 0.3em;
            content: "\00bb";
        }

        .trail-items li:last-of-type::after {
            display: none;
        }

        h1,
        .entry-content h1,
        h2,
        .entry-content h2,
        h3,
        .entry-content h3,
        h4,
        .entry-content h4,
        h5,
        .entry-content h5,
        h6,
        .entry-content h6 {
            color: var(--ast-global-color-2);
        }

        @media (max-width:921px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        @media (max-width:544px) {

            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-firstrow .ast-builder-grid-row>*:first-child,
            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-3-lastrow .ast-builder-grid-row>*:last-child {
                grid-column: 1 / -1;
            }
        }

        .site-below-footer-wrap {
            padding-top: 20px;
            padding-bottom: 20px;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            background-color: #eeeeee;
            ;
            min-height: 80px;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] .ast-builder-grid-row,
        .site-below-footer-wrap[data-section="section-below-footer-builder"] .site-footer-section {
            align-items: flex-start;
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-inline .site-footer-section {
            display: flex;
            margin-bottom: 0;
        }

        .ast-builder-grid-row-full .ast-builder-grid-row {
            grid-template-columns: 1fr;
        }

        @media (max-width:921px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }

            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-tablet-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }

            .ast-builder-grid-row-container.ast-builder-grid-row-tablet-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width:544px) {
            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-inline .site-footer-section {
                display: flex;
                margin-bottom: 0;
            }

            .site-below-footer-wrap[data-section="section-below-footer-builder"].ast-footer-row-mobile-stack .site-footer-section {
                display: block;
                margin-bottom: 10px;
            }

            .ast-builder-grid-row-container.ast-builder-grid-row-mobile-full .ast-builder-grid-row {
                grid-template-columns: 1fr;
            }
        }

        .site-below-footer-wrap[data-section="section-below-footer-builder"] {
            display: grid;
        }

        @media (max-width:921px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .site-below-footer-wrap[data-section="section-below-footer-builder"] {
                display: grid;
            }
        }

        .ast-footer-copyright {
            text-align: center;
        }

        .ast-footer-copyright {
            color: #3a3a3a;
        }

        @media (max-width:921px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }

        @media (max-width:544px) {
            .ast-footer-copyright {
                text-align: center;
            }
        }

        .ast-footer-copyright.ast-builder-layout-element {
            display: flex;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-footer-copyright.ast-builder-layout-element {
                display: flex;
            }
        }

        .elementor-widget-heading .elementor-heading-title {
            margin: 0;
        }

        .elementor-page .ast-menu-toggle {
            color: unset !important;
            background: unset !important;
        }

        .elementor-post.elementor-grid-item.hentry {
            margin-bottom: 0;
        }

        .woocommerce div.product .elementor-element.elementor-products-grid .related.products ul.products li.product,
        .elementor-element .elementor-wc-products .woocommerce[class*='columns-'] ul.products li.product {
            width: auto;
            margin: 0;
            float: none;
        }

        .ast-left-sidebar .elementor-section.elementor-section-stretched,
        .ast-right-sidebar .elementor-section.elementor-section-stretched {
            max-width: 100%;
            left: 0 !important;
        }

        .elementor-template-full-width .ast-container {
            display: block;
        }

        @media (max-width:544px) {
            .elementor-element .elementor-wc-products .woocommerce[class*="columns-"] ul.products li.product {
                width: auto;
                margin: 0;
            }

            .elementor-element .woocommerce .woocommerce-result-count {
                float: none;
            }
        }

        .ast-header-break-point .main-header-bar {
            border-bottom-width: 1px;
        }

        @media (min-width:922px) {
            .main-header-bar {
                border-bottom-width: 1px;
            }
        }

        .main-header-menu .menu-item,
        #astra-footer-menu .menu-item,
        .main-header-bar .ast-masthead-custom-menu-items {
            -js-display: flex;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -moz-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -webkit-flex-direction: column;
            -moz-box-orient: vertical;
            -moz-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
        }

        .main-header-menu>.menu-item>.menu-link,
        #astra-footer-menu>.menu-item>.menu-link {
            height: 100%;
            -webkit-box-align: center;
            -webkit-align-items: center;
            -moz-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -js-display: flex;
            display: flex;
        }

        .ast-header-break-point .main-navigation ul .menu-item .menu-link .icon-arrow:first-of-type svg {
            top: .2em;
            margin-top: 0px;
            margin-left: 0px;
            width: .65em;
            transform: translate(0, -2px) rotateZ(270deg);
        }

        .ast-mobile-popup-content .ast-submenu-expanded>.ast-menu-toggle {
            transform: rotateX(180deg);
            overflow-y: auto;
        }

        .ast-separate-container .blog-layout-1,
        .ast-separate-container .blog-layout-2,
        .ast-separate-container .blog-layout-3 {
            background-color: transparent;
            background-image: none;
        }

        .ast-separate-container .ast-article-post {
            background-color: var(--ast-global-color-5);
            ;
        }

        @media (max-width:921px) {
            .ast-separate-container .ast-article-post {
                background-color: var(--ast-global-color-5);
                ;
            }
        }

        @media (max-width:544px) {
            .ast-separate-container .ast-article-post {
                background-color: var(--ast-global-color-5);
                ;
            }
        }

        .ast-separate-container .ast-article-single:not(.ast-related-post),
        .ast-separate-container .comments-area .comment-respond,
        .ast-separate-container .comments-area .ast-comment-list li,
        .ast-separate-container .ast-woocommerce-container,
        .ast-separate-container .error-404,
        .ast-separate-container .no-results,
        .single.ast-separate-container .ast-author-meta,
        .ast-separate-container .related-posts-title-wrapper,
        .ast-separate-container.ast-two-container #secondary .widget,
        .ast-separate-container .comments-count-wrapper,
        .ast-box-layout.ast-plain-container .site-content,
        .ast-padded-layout.ast-plain-container .site-content,
        .ast-separate-container .comments-area .comments-title,
        .ast-narrow-container .site-content {
            background-color: var(--ast-global-color-5);
            ;
        }

        @media (max-width:921px) {

            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title,
            .ast-narrow-container .site-content {
                background-color: var(--ast-global-color-5);
                ;
            }
        }

        @media (max-width:544px) {

            .ast-separate-container .ast-article-single:not(.ast-related-post),
            .ast-separate-container .comments-area .comment-respond,
            .ast-separate-container .comments-area .ast-comment-list li,
            .ast-separate-container .ast-woocommerce-container,
            .ast-separate-container .error-404,
            .ast-separate-container .no-results,
            .single.ast-separate-container .ast-author-meta,
            .ast-separate-container .related-posts-title-wrapper,
            .ast-separate-container.ast-two-container #secondary .widget,
            .ast-separate-container .comments-count-wrapper,
            .ast-box-layout.ast-plain-container .site-content,
            .ast-padded-layout.ast-plain-container .site-content,
            .ast-separate-container .comments-area .comments-title,
            .ast-narrow-container .site-content {
                background-color: var(--ast-global-color-5);
                ;
            }
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
            content: unset;
        }

        .ast-hfb-header .ast-builder-menu-mobile .main-header-menu,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .menu-link,
        .ast-hfb-header .ast-builder-menu-mobile .main-navigation .menu-item .sub-menu .menu-link {
            border-style: none;
        }

        .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
            top: 0;
        }

        @media (max-width:921px) {
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }

            .ast-builder-menu-mobile .main-navigation .menu-item-has-children>.menu-link:after {
                content: unset;
            }
        }

        @media (max-width:544px) {
            .ast-builder-menu-mobile .main-navigation .menu-item.menu-item-has-children>.ast-menu-toggle {
                top: 0;
            }
        }

        .ast-builder-menu-mobile .main-navigation {
            display: block;
        }

        @media (max-width:921px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }

        @media (max-width:544px) {
            .ast-header-break-point .ast-builder-menu-mobile .main-navigation {
                display: block;
            }
        }

        :root {
            --e-global-color-astglobalcolor0: #0170B9;
            --e-global-color-astglobalcolor1: #3a3a3a;
            --e-global-color-astglobalcolor2: #3a3a3a;
            --e-global-color-astglobalcolor3: #4B4F58;
            --e-global-color-astglobalcolor4: #F5F5F5;
            --e-global-color-astglobalcolor5: #FFFFFF;
            --e-global-color-astglobalcolor6: #E5E5E5;
            --e-global-color-astglobalcolor7: #424242;
            --e-global-color-astglobalcolor8: #000000;
        }
    </style>
    <link rel='stylesheet' id='pa-frontend-css'
        href='../css/pa-frontend-f5661b19c.min701f.css'
        media='all' />
    <link rel='stylesheet' id='wp-block-library-css'
        href='../css/style.min6a4d.css' media='all' />
    <style id='wp-block-library-inline-css'>
        .has-text-align-justify {
            text-align: justify;
        }
    </style>
    <style id='ce4wp-subscribe-style-inline-css'>
        .wp-block-ce4wp-subscribe {
            max-width: 840px;
            margin: 0 auto
        }

        .wp-block-ce4wp-subscribe .title {
            margin-bottom: 0
        }

        .wp-block-ce4wp-subscribe .subTitle {
            margin-top: 0;
            font-size: 0.8em
        }

        .wp-block-ce4wp-subscribe .disclaimer {
            margin-top: 5px;
            font-size: 0.8em
        }

        .wp-block-ce4wp-subscribe .disclaimer .disclaimer-label {
            margin-left: 10px
        }

        .wp-block-ce4wp-subscribe .inputBlock {
            width: 100%;
            margin-bottom: 10px
        }

        .wp-block-ce4wp-subscribe .inputBlock input {
            width: 100%
        }

        .wp-block-ce4wp-subscribe .inputBlock label {
            display: inline-block
        }

        .wp-block-ce4wp-subscribe .submit-button {
            margin-top: 25px;
            display: block
        }

        .wp-block-ce4wp-subscribe .required-text {
            display: inline-block;
            margin: 0;
            padding: 0;
            margin-left: 0.3em
        }

        .wp-block-ce4wp-subscribe .onSubmission {
            height: 0;
            max-width: 840px;
            margin: 0 auto
        }

        .wp-block-ce4wp-subscribe .firstNameSummary .lastNameSummary {
            text-transform: capitalize
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-notification {
            display: flex;
            flex-direction: row;
            align-items: center;
            padding: 13px 10px;
            width: 100%;
            height: 40px;
            border-style: solid;
            border-color: orange;
            border-width: 1px;
            border-left-width: 4px;
            border-radius: 3px;
            background: rgba(255, 133, 15, 0.1);
            flex: none;
            order: 0;
            flex-grow: 1;
            margin: 0px 0px
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-text {
            font-style: normal;
            font-weight: normal;
            font-size: 16px;
            line-height: 20px;
            display: flex;
            align-items: center;
            color: #571600;
            margin-left: 9px
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-icon {
            color: orange
        }

        .wp-block-ce4wp-subscribe .ce4wp-inline-warning-arrow {
            color: #571600;
            margin-left: auto
        }

        .wp-block-ce4wp-subscribe .ce4wp-banner-clickable {
            cursor: pointer
        }

        .ce4wp-link {
            cursor: pointer
        }

        .no-flex {
            display: block
        }

        .sub-header {
            margin-bottom: 1em
        }
    </style>
    <link rel='stylesheet' id='mediaelement-css'
        href='../css/mediaelementplayer-legacy.min1f61.css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'
        href='../css/wp-mediaelement.min6a4d.css' media='all' />
    <style id='global-styles-inline-css'>
        body {
            --wp--preset--color--black: #000000;
            --wp--preset--color--cyan-bluish-gray: #abb8c3;
            --wp--preset--color--white: #ffffff;
            --wp--preset--color--pale-pink: #f78da7;
            --wp--preset--color--vivid-red: #cf2e2e;
            --wp--preset--color--luminous-vivid-orange: #ff6900;
            --wp--preset--color--luminous-vivid-amber: #fcb900;
            --wp--preset--color--light-green-cyan: #7bdcb5;
            --wp--preset--color--vivid-green-cyan: #00d084;
            --wp--preset--color--pale-cyan-blue: #8ed1fc;
            --wp--preset--color--vivid-cyan-blue: #0693e3;
            --wp--preset--color--vivid-purple: #9b51e0;
            --wp--preset--color--ast-global-color-0: var(--ast-global-color-0);
            --wp--preset--color--ast-global-color-1: var(--ast-global-color-1);
            --wp--preset--color--ast-global-color-2: var(--ast-global-color-2);
            --wp--preset--color--ast-global-color-3: var(--ast-global-color-3);
            --wp--preset--color--ast-global-color-4: var(--ast-global-color-4);
            --wp--preset--color--ast-global-color-5: var(--ast-global-color-5);
            --wp--preset--color--ast-global-color-6: var(--ast-global-color-6);
            --wp--preset--color--ast-global-color-7: var(--ast-global-color-7);
            --wp--preset--color--ast-global-color-8: var(--ast-global-color-8);
            --wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
            --wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
            --wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
            --wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
            --wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
            --wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
            --wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
            --wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
            --wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
            --wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
            --wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
            --wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
            --wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
            --wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
            --wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
            --wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
            --wp--preset--duotone--midnight: url('#wp-duotone-midnight');
            --wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
            --wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
            --wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
            --wp--preset--font-size--small: 13px;
            --wp--preset--font-size--medium: 20px;
            --wp--preset--font-size--large: 36px;
            --wp--preset--font-size--x-large: 42px;
            --wp--preset--spacing--20: 0.44rem;
            --wp--preset--spacing--30: 0.67rem;
            --wp--preset--spacing--40: 1rem;
            --wp--preset--spacing--50: 1.5rem;
            --wp--preset--spacing--60: 2.25rem;
            --wp--preset--spacing--70: 3.38rem;
            --wp--preset--spacing--80: 5.06rem;
        }

        body {
            margin: 0;
            --wp--style--global--content-size: var(--wp--custom--ast-content-width-size);
            --wp--style--global--wide-size: var(--wp--custom--ast-wide-width-size);
        }

        .wp-site-blocks>.alignleft {
            float: left;
            margin-right: 2em;
        }

        .wp-site-blocks>.alignright {
            float: right;
            margin-left: 2em;
        }

        .wp-site-blocks>.aligncenter {
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
        }

        .wp-site-blocks>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        .wp-site-blocks>*+* {
            margin-block-start: 24px;
        }

        body {
            --wp--style--block-gap: 24px;
        }

        body .is-layout-flow>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        body .is-layout-flow>*+* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        body .is-layout-constrained>* {
            margin-block-start: 0;
            margin-block-end: 0;
        }

        body .is-layout-constrained>*+* {
            margin-block-start: 24px;
            margin-block-end: 0;
        }

        body .is-layout-flex {
            gap: 24px;
        }

        body .is-layout-flow>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-flow>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-flow>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignleft {
            float: left;
            margin-inline-start: 0;
            margin-inline-end: 2em;
        }

        body .is-layout-constrained>.alignright {
            float: right;
            margin-inline-start: 2em;
            margin-inline-end: 0;
        }

        body .is-layout-constrained>.aligncenter {
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained> :where(:not(.alignleft):not(.alignright):not(.alignfull)) {
            max-width: var(--wp--style--global--content-size);
            margin-left: auto !important;
            margin-right: auto !important;
        }

        body .is-layout-constrained>.alignwide {
            max-width: var(--wp--style--global--wide-size);
        }

        body .is-layout-flex {
            display: flex;
        }

        body .is-layout-flex {
            flex-wrap: wrap;
            align-items: center;
        }

        body .is-layout-flex>* {
            margin: 0;
        }

        body {
            padding-top: 0px;
            padding-right: 0px;
            padding-bottom: 0px;
            padding-left: 0px;
        }

        a:where(:not(.wp-element-button)) {
            text-decoration: none;
        }

        .wp-element-button,
        .wp-block-button__link {
            background-color: #32373c;
            border-width: 0;
            color: #fff;
            font-family: inherit;
            font-size: inherit;
            line-height: inherit;
            padding: calc(0.667em + 2px) calc(1.333em + 2px);
            text-decoration: none;
        }

        .has-black-color {
            color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-color {
            color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-color {
            color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-color {
            color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-color {
            color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-color {
            color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-color {
            color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-color {
            color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-color {
            color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-color {
            color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-color {
            color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-color {
            color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-color {
            color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-color {
            color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-color {
            color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-color {
            color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-color {
            color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-color {
            color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-color {
            color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-color {
            color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-color {
            color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-black-background-color {
            background-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-background-color {
            background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-background-color {
            background-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-background-color {
            background-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-background-color {
            background-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-background-color {
            background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-background-color {
            background-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-background-color {
            background-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-background-color {
            background-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-background-color {
            background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-background-color {
            background-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-background-color {
            background-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-background-color {
            background-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-background-color {
            background-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-background-color {
            background-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-background-color {
            background-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-background-color {
            background-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-background-color {
            background-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-background-color {
            background-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-background-color {
            background-color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-black-border-color {
            border-color: var(--wp--preset--color--black) !important;
        }

        .has-cyan-bluish-gray-border-color {
            border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
        }

        .has-white-border-color {
            border-color: var(--wp--preset--color--white) !important;
        }

        .has-pale-pink-border-color {
            border-color: var(--wp--preset--color--pale-pink) !important;
        }

        .has-vivid-red-border-color {
            border-color: var(--wp--preset--color--vivid-red) !important;
        }

        .has-luminous-vivid-orange-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-amber-border-color {
            border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
        }

        .has-light-green-cyan-border-color {
            border-color: var(--wp--preset--color--light-green-cyan) !important;
        }

        .has-vivid-green-cyan-border-color {
            border-color: var(--wp--preset--color--vivid-green-cyan) !important;
        }

        .has-pale-cyan-blue-border-color {
            border-color: var(--wp--preset--color--pale-cyan-blue) !important;
        }

        .has-vivid-cyan-blue-border-color {
            border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
        }

        .has-vivid-purple-border-color {
            border-color: var(--wp--preset--color--vivid-purple) !important;
        }

        .has-ast-global-color-0-border-color {
            border-color: var(--wp--preset--color--ast-global-color-0) !important;
        }

        .has-ast-global-color-1-border-color {
            border-color: var(--wp--preset--color--ast-global-color-1) !important;
        }

        .has-ast-global-color-2-border-color {
            border-color: var(--wp--preset--color--ast-global-color-2) !important;
        }

        .has-ast-global-color-3-border-color {
            border-color: var(--wp--preset--color--ast-global-color-3) !important;
        }

        .has-ast-global-color-4-border-color {
            border-color: var(--wp--preset--color--ast-global-color-4) !important;
        }

        .has-ast-global-color-5-border-color {
            border-color: var(--wp--preset--color--ast-global-color-5) !important;
        }

        .has-ast-global-color-6-border-color {
            border-color: var(--wp--preset--color--ast-global-color-6) !important;
        }

        .has-ast-global-color-7-border-color {
            border-color: var(--wp--preset--color--ast-global-color-7) !important;
        }

        .has-ast-global-color-8-border-color {
            border-color: var(--wp--preset--color--ast-global-color-8) !important;
        }

        .has-vivid-cyan-blue-to-vivid-purple-gradient-background {
            background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
        }

        .has-light-green-cyan-to-vivid-green-cyan-gradient-background {
            background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
        }

        .has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
        }

        .has-luminous-vivid-orange-to-vivid-red-gradient-background {
            background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
        }

        .has-very-light-gray-to-cyan-bluish-gray-gradient-background {
            background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
        }

        .has-cool-to-warm-spectrum-gradient-background {
            background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
        }

        .has-blush-light-purple-gradient-background {
            background: var(--wp--preset--gradient--blush-light-purple) !important;
        }

        .has-blush-bordeaux-gradient-background {
            background: var(--wp--preset--gradient--blush-bordeaux) !important;
        }

        .has-luminous-dusk-gradient-background {
            background: var(--wp--preset--gradient--luminous-dusk) !important;
        }

        .has-pale-ocean-gradient-background {
            background: var(--wp--preset--gradient--pale-ocean) !important;
        }

        .has-electric-grass-gradient-background {
            background: var(--wp--preset--gradient--electric-grass) !important;
        }

        .has-midnight-gradient-background {
            background: var(--wp--preset--gradient--midnight) !important;
        }

        .has-small-font-size {
            font-size: var(--wp--preset--font-size--small) !important;
        }

        .has-medium-font-size {
            font-size: var(--wp--preset--font-size--medium) !important;
        }

        .has-large-font-size {
            font-size: var(--wp--preset--font-size--large) !important;
        }

        .has-x-large-font-size {
            font-size: var(--wp--preset--font-size--x-large) !important;
        }

        .wp-block-navigation a:where(:not(.wp-element-button)) {
            color: inherit;
        }

        .wp-block-pullquote {
            font-size: 1.5em;
            line-height: 1.6;
        }
    </style>
    <link rel='stylesheet' id='copy-the-code-css'
        href='../css/copy-the-code61da.css' media='all' />
    <link rel='stylesheet' id='mcwp-crypto-css-css'
        href='../css/stylec245.css' media='all' />
    <link rel='stylesheet' id='mcwp-crypto-datatable-css-css'
        href='../css/datatable-stylec245.css'
        media='all' />
    <link rel='stylesheet' id='hfe-style-css'
        href='../css/header-footer-elementor1f62.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-css'
        href='../css/elementor-icons.min3b94.css' media='all' />
    <link rel='stylesheet' id='elementor-frontend-css'
        href='../css/frontend.min5900.css' media='all' />
    <style id='elementor-frontend-inline-css'>
        .elementor-kit-37 {
            --e-global-color-primary: #6EC1E4;
            --e-global-color-secondary: #54595F;
            --e-global-color-text: #7A7A7A;
            --e-global-color-accent: #61CE70;
            --e-global-color-085d85c: #830410;
            --e-global-color-016161e: #54595F;
            --e-global-typography-primary-font-family: "Roboto";
            --e-global-typography-primary-font-weight: 600;
            --e-global-typography-secondary-font-family: "Roboto Slab";
            --e-global-typography-secondary-font-weight: 400;
            --e-global-typography-text-font-family: "Roboto";
            --e-global-typography-text-font-weight: 400;
            --e-global-typography-accent-font-family: "Roboto";
            --e-global-typography-accent-font-weight: 500;
        }

        .elementor-section.elementor-section-boxed>.elementor-container {
            max-width: 1140px;
        }

        .e-container {
            --container-max-width: 1140px;
        }

        .elementor-widget:not(:last-child) {
            margin-bottom: 20px;
        }

        .elementor-element {
            --widgets-spacing: 20px;
        }

            {}

        h1.entry-title {
            display: var(--page-title-display);
        }

        .elementor-kit-37 e-page-transition {
            background-color: #FFBC7D;
        }

        @media(max-width:1024px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 1024px;
            }

            .e-container {
                --container-max-width: 1024px;
            }
        }

        @media(max-width:767px) {
            .elementor-section.elementor-section-boxed>.elementor-container {
                max-width: 767px;
            }

            .e-container {
                --container-max-width: 767px;
            }
        }

        .elementor-widget-heading .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-stacked .elementor-drop-cap {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-text-editor.elementor-drop-cap-view-framed .elementor-drop-cap,
        .elementor-widget-text-editor.elementor-drop-cap-view-default .elementor-drop-cap {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-divider {
            --divider-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider .elementor-divider__text {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-divider.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon,
        .elementor-widget-divider.elementor-view-default .elementor-icon {
            color: var(--e-global-color-secondary);
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-divider.elementor-view-framed .elementor-icon,
        .elementor-widget-divider.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-image-box .elementor-image-box-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-image-box .elementor-image-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-icon.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon,
        .elementor-widget-icon.elementor-view-default .elementor-icon {
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon.elementor-view-framed .elementor-icon,
        .elementor-widget-icon.elementor-view-default .elementor-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-stacked .elementor-icon {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box.elementor-view-framed .elementor-icon,
        .elementor-widget-icon-box.elementor-view-default .elementor-icon {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-box .elementor-icon-box-title,
        .elementor-widget-icon-box .elementor-icon-box-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-icon-box .elementor-icon-box-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-star-rating .elementor-star-rating__title {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-image-gallery .gallery-item .gallery-caption {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-icon-list .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-icon-list .elementor-icon-list-text {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-icon-list .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-widget-icon-list .elementor-icon-list-item>a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-counter .elementor-counter-number-wrapper {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-counter .elementor-counter-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-progress .elementor-progress-wrapper .elementor-progress-bar {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-progress .elementor-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-testimonial .elementor-testimonial-job {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-title,
        .elementor-widget-tabs .elementor-tab-title a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-tabs .elementor-tab-title.elementor-active,
        .elementor-widget-tabs .elementor-tab-title.elementor-active a {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-tabs .elementor-tab-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-tabs .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-accordion .elementor-accordion-icon,
        .elementor-widget-accordion .elementor-accordion-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-accordion .elementor-accordion-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-accordion .elementor-active .elementor-accordion-icon,
        .elementor-widget-accordion .elementor-active .elementor-accordion-title {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-accordion .elementor-active .elementor-accordion-icon svg {
            fill: var(--e-global-color-accent);
        }

        .elementor-widget-accordion .elementor-accordion-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-accordion .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-toggle .elementor-toggle-title,
        .elementor-widget-toggle .elementor-toggle-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-toggle .elementor-toggle-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-toggle .elementor-tab-title.elementor-active a,
        .elementor-widget-toggle .elementor-tab-title.elementor-active .elementor-toggle-icon {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-toggle .elementor-toggle-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-toggle .elementor-tab-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-alert .elementor-alert-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-alert .elementor-alert-description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-digits::after {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-digits {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-label {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-countdown .eael-countdown-finish-message .expiry-title {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .eael-countdown-finish-text {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-creative-button .eael-creative-button .cretive-button-text,
        .elementor-widget-eael-creative-button .eael-creative-button--winona::after,
        .elementor-widget-eael-creative-button .eael-creative-button--rayen::before,
        .elementor-widget-eael-creative-button .eael-creative-button--tamaya::after,
        .elementor-widget-eael-creative-button .eael-creative-button--tamaya::before {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-dual-color-header .eael-dch-separator-wrap i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-item-user .eael-facebook-feed-username {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-header .eael-facebook-feed-post-time {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-content .eael-facebook-feed-message {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-host {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-preview-wrap .eael-facebook-feed-url-preview .eael-facebook-feed-url-description {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-facebook-feed .eael-facebook-feed-overlay .eael-facebook-feed-item .eael-facebook-feed-item-overlay,
        .elementor-widget-eael-facebook-feed .eael-facebook-feed-card .eael-facebook-feed-item .eael-facebook-feed-item-inner .eael-facebook-feed-item-footer {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-prefix {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-strings,
        .elementor-widget-eael-fancy-text .typed-cursor {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-fancy-text .eael-fancy-text-suffix {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-feature-list .connector-type-classic .connector {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:before,
        .elementor-widget-eael-feature-list .connector-type-modern .eael-feature-list-item:after {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title>a,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title:visited {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title,
        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-feature-list .eael-feature-list-content-box .eael-feature-list-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-price {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-caption-head .fg-item-ratings {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-item-category span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-filter-trigger>span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .fg-layout-3-filter-controls li.control {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-filterable-gallery .eael-gallery-load-more .eael-filterable-gallery-load-more-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-meta-posted-on {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-entry-meta>span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-entry-title,
        .elementor-widget-eael-post-grid .eael-entry-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-post-grid .eael-grid-post-excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-grid .post-meta-categories li,
        .elementor-widget-eael-post-grid .post-meta-categories li a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-post-timeline .eael-timeline-post-title .eael-timeline-post-title-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-post-timeline .eael-timeline-post-excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-count-wrap {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-progress-bar .eael-progressbar-half-circle-after span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-simple-menu .eael-simple-menu>li>a,
        .eael-simple-menu-container .eael-simple-menu-toggle-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-simple-menu .eael-simple-menu li ul li>a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-eael-twitter-feed .eael-twitter-feed-item .eael-twitter-feed-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-eael-wpforms .eael-contact-form-description,
        .elementor-widget-eael-wpforms .wpforms-description {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field label {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]),
        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field textarea,
        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-field select {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-eael-wpforms .eael-wpforms .wpforms-submit-container .wpforms-submit {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-retina .hfe-retina-image-container .hfe-retina-img {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-retina .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-copyright .hfe-copyright-wrapper a,
        .elementor-widget-copyright .hfe-copyright-wrapper {
            color: var(--e-global-color-text);
        }

        .elementor-widget-copyright .hfe-copyright-wrapper,
        .elementor-widget-copyright .hfe-copyright-wrapper a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-navigation-menu a.hfe-menu-item,
        .elementor-widget-navigation-menu a.hfe-sub-menu-item {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item,
        .elementor-widget-navigation-menu .sub-menu a.hfe-sub-menu-item {
            color: var(--e-global-color-text);
        }

        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item:hover,
        .elementor-widget-navigation-menu .sub-menu a.hfe-sub-menu-item:hover,
        .elementor-widget-navigation-menu .menu-item.current-menu-item a.hfe-menu-item,
        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item.highlighted,
        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item:focus {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent a.hfe-menu-item:before,
        .elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent a.hfe-menu-item:after {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-navigation-menu .hfe-nav-menu-layout:not(.hfe-pointer__framed) .menu-item.parent .sub-menu .hfe-has-submenu-container a:after {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-navigation-menu .hfe-pointer__framed .menu-item.parent a.hfe-menu-item:before,
        .elementor-widget-navigation-menu .hfe-pointer__framed .menu-item.parent a.hfe-menu-item:after {
            border-color: var(--e-global-color-accent);
        }

        .elementor-widget-navigation-menu .sub-menu li a.hfe-sub-menu-item,
        .elementor-widget-navigation-menu nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-widget-navigation-menu nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-widget-navigation-menu nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-widget-navigation-menu nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item.elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-navigation-menu .menu-item a.hfe-menu-item.elementor-button:hover {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-page-title .elementor-heading-title,
        .elementor-widget-page-title .hfe-page-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-page-title .hfe-page-title-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-page-title .hfe-page-title-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-site-title .elementor-heading-title,
        .elementor-widget-hfe-site-title .hfe-heading a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-hfe-site-title .hfe-heading-text {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-site-title .hfe-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-site-title .hfe-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-site-tagline .hfe-site-tagline {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-hfe-site-tagline .hfe-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-site-tagline .hfe-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-site-logo .hfe-site-logo-container .hfe-site-logo-img {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-site-logo .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-hfe-search-button input[type="search"].hfe-search-form__input,
        .elementor-widget-hfe-search-button .hfe-search-icon-toggle {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-hfe-search-button .hfe-search-form__input {
            color: var(--e-global-color-text);
        }

        .elementor-widget-hfe-search-button .hfe-search-form__input::placeholder {
            color: var(--e-global-color-text);
        }

        .elementor-widget-hfe-search-button .hfe-search-form__container,
        .elementor-widget-hfe-search-button .hfe-search-icon-toggle .hfe-search-form__input,
        .elementor-widget-hfe-search-button .hfe-input-focus .hfe-search-icon-toggle .hfe-search-form__input {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-hfe-search-button .hfe-search-form__input:focus::placeholder {
            color: var(--e-global-color-text);
        }

        .elementor-widget-hfe-search-button .hfe-search-form__container button#clear-with-button,
        .elementor-widget-hfe-search-button .hfe-search-form__container button#clear,
        .elementor-widget-hfe-search-button .hfe-search-icon-toggle button#clear {
            color: var(--e-global-color-text);
        }

        .elementor-widget-text-path {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-ib-desc .premium_banner_title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium_banner_content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-link {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-addon-banner .premium-banner-link:hover {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-blog .premium-blog-filters-container li a.category {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-filters-container li a.active {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-link:before,
        .elementor-widget-premium-addon-blog .premium-blog-post-link:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title,
        .elementor-widget-premium-addon-blog .premium-blog-entry-title a {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-entry-title:hover a {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-cats-container a {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-meta-data {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-content {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-blog .premium-blog-post-tags-container {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers {
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container .page-numbers:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-pagination-container span.current {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog ul.slick-dots li {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-blog ul.slick-dots li.slick-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-blog .premium-blog-wrap .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-button .premium-button .premium-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper svg,
        .elementor-widget-premium-addon-button .premium-button-text-icon-wrapper svg path,
        .elementor-widget-premium-addon-button .premium-drawable-icon {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button,
        .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinhor:before,
        .elementor-widget-premium-addon-button .premium-button.premium-button-style2-shutinver:before,
        .elementor-widget-premium-addon-button .premium-button-style5-radialin:before,
        .elementor-widget-premium-addon-button .premium-button-style5-rectin:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper svg,
        .elementor-widget-premium-addon-button .premium-button:hover .premium-button-text-icon-wrapper svg path,
        .elementor-widget-premium-addon-button .premium-button:hover .premium-drawable-icon {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-button .premium-button-none:hover,
        .elementor-widget-premium-addon-button .premium-button-style1:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutouthor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutoutver:before,
        .elementor-widget-premium-addon-button .premium-button-style2-shutinhor,
        .elementor-widget-premium-addon-button .premium-button-style2-shutinver,
        .elementor-widget-premium-addon-button .premium-button-style2-dshutinhor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-dshutinver:before,
        .elementor-widget-premium-addon-button .premium-button-style2-scshutouthor:before,
        .elementor-widget-premium-addon-button .premium-button-style2-scshutoutver:before,
        .elementor-widget-premium-addon-button .premium-button-style3-after:hover,
        .elementor-widget-premium-addon-button .premium-button-style3-before:hover,
        .elementor-widget-premium-addon-button .premium-button-style4-icon-wrapper,
        .elementor-widget-premium-addon-button .premium-button-style5-radialin,
        .elementor-widget-premium-addon-button .premium-button-style5-radialout:before,
        .elementor-widget-premium-addon-button .premium-button-style5-rectin,
        .elementor-widget-premium-addon-button .premium-button-style5-rectout:before,
        .elementor-widget-premium-addon-button .premium-button-style6-bg,
        .elementor-widget-premium-addon-button .premium-button-style6:before {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:before {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-button .premium-button-style7 .premium-button-text-icon-wrapper:after {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget .premium-carousel-wrapper .slick-arrow:hover svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li svg {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-carousel-widget ul.slick-dots li.slick-active svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure span {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-amount,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .top-back,
        .elementor-widget-premium-countdown-timer .premium-countdown-flip .premium-countdown-figure .bottom-back {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-countdown-timer .countdown .countdown-section .countdown-period,
        .elementor-widget-premium-countdown-timer .premium-countdown-label {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-countdown-timer .countdown_separator {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-countdown-timer .premium-countdown-exp-message {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon svg,
        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-icon .icon-bg {
            background: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-counter .premium-counter-title .premium-counter-title-val {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-desc {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area .premium-counter-init {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area span#prefix {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-counter .premium-counter-area span#suffix {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-dual-header .premium-dual-header-first-span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-dual-header .premium-dual-header-second-header {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-dual-header.premium-bg-text-yes .elementor-widget-container:before {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-text {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-svg-text .premium-fancy-list-items {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-fancy-text .premium-fancy-text-wrapper:not(.auto-fade) .premium-fancy-text,
        .elementor-widget-premium-addon-fancy-text .premium-fancy-text svg g>text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .typed-cursor {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .premium-prefix-text,
        .elementor-widget-premium-addon-fancy-text .premium-suffix-text {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-fancy-text .loading .premium-loading-bar {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-img-name,
        .elementor-widget-premium-img-gallery .premium-gallery-img-name a {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-img-desc,
        .elementor-widget-premium-img-gallery .premium-gallery-img-desc a {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image i,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image svg,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link svg {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image span,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover i,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover svg,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover svg {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .pa-gallery-magnific-image:hover span,
        .elementor-widget-premium-img-gallery .pa-gallery-img-link:hover span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.category {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-cats-container li a.active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn .premium-loader {
            border-color: var(--e-global-color-secondary);
            border-top-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-img-gallery .premium-gallery-load-more-btn:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-icon-text p {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-drawable-icon svg,
        .elementor-widget-premium-icon-list .premium-drawable-icon svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper svg,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-wrapper .premium-bullet-list-icon-text p {
            text-shadow: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-icon-text p {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-wrapper i,
        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-icon-text p {
            text-shadow: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-drawable-icon svg {
            fill: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-icon-text p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-text span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-text span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur:hover .premium-bullet-list-text span {
            text-shadow: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-content:hover .premium-bullet-list-text span {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-blur .premium-bullet-list-content:hover .premium-bullet-list-text span {
            text-shadow: var(--e-global-color-primary);
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-badge span {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-badge span {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-divider:not(:last-child):after {
            border-top-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list .premium-bullet-list-divider-inline:not(:last-child):after {
            border-left-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-icon-list li.premium-bullet-list-content:not(:last-of-type) .premium-bullet-list-connector .premium-icon-connector-content:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button .premium-image-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-drawable-icon {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-image-button-text-icon-wrapper i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button:hover .premium-drawable-icon {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-style3:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:before {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-none:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-style4-icon-wrapper,
        .elementor-widget-premium-addon-image-button .premium-image-button-style1:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-style3:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-horizontal:hover,
        .elementor-widget-premium-addon-image-button .premium-image-button-overlap-effect-vertical:hover,
        .elementor-widget-premium-addon-image-button .premium-button-style6-bg,
        .elementor-widget-premium-addon-image-button .premium-button-style6:before {
            background-color: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-effect:after,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:before,
        .elementor-widget-premium-addon-image-button .premium-image-button-squares-square-container:after {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-drawable-icon {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-drawable-icon:hover {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i,
        .elementor-widget-premium-addon-image-separator .premium-image-separator-container>svg {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-image-separator .premium-image-separator-container i:hover,
        .elementor-widget-premium-addon-image-separator .premium-image-separator-container>svg:hover {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-maps .premium-maps-info-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-maps .premium-maps-info-desc {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn svg * {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-text:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg,
        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-trigger-btn:hover {
            background: var(--e-global-color-text);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-secondary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-modal-box .premium-modal-box-modal-lower-close:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-text);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-nav-menu-item:hover>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:before,
        .elementor-widget-premium-nav-menu .premium-nav-widget-container:not(.premium-nav-pointer-framed) .premium-menu-link-parent:after {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:before,
        .elementor-widget-premium-nav-menu .premium-nav-pointer-framed .premium-menu-link-parent:after {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu>.premium-active-item>.premium-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-premium-nav-menu .premium-nav-menu-item>.premium-menu-link>.premium-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu:not(.premium-hamburger-menu):not(.premium-nav-slide):not(.premium-nav-dropdown) .premium-main-nav-menu .premium-sub-menu .premium-sub-menu-item:hover,
        .elementor-widget-premium-nav-menu.premium-hamburger-menu .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link,
        .elementor-widget-premium-nav-menu.premium-nav-slide .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link,
        .elementor-widget-premium-nav-menu.premium-nav-dropdown .premium-main-nav-menu .premium-sub-menu>.premium-sub-menu-item:hover>.premium-sub-menu-link {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-nav-menu .premium-main-nav-menu .premium-sub-menu .premium-active-item .premium-sub-menu-link .premium-dropdown-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-nav-menu .premium-sub-menu-item .premium-sub-menu-link .premium-sub-item-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-person .premium-person-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-person .premium-person-list-item i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-person .premium-person-list-item:hover i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-person .premium-persons-container .slick-arrow {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-person .premium-persons-container .slick-arrow:hover {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container svg,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container svg * {
            fill: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon-container i,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-icon,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-image {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-table-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-slashed-price-value {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-currency {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-value {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-separator {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-duration {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-span {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list .premium-pricing-list-span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-feature-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-item svg,
        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-item svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-list-tooltip {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-description-container {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-button {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-price-button:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-pricing-badge-container .corner span {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-left .corner {
            border-top-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-triangle.premium-badge-right .corner {
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-circle,
        .elementor-widget-premium-addon-pricing-table .premium-badge-stripe .corner,
        .elementor-widget-premium-addon-pricing-table .premium-badge-flag .corner {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-right .corner::before {
            border-left: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-pricing-table .premium-badge-flag.premium-badge-left .corner::after {
            border-right: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-base,
        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-inner {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle div,
        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-circle-progress {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-left-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-right-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-content svg,
        .elementor-widget-premium-addon-progressbar .premium-progressbar-circle-content svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-center-label {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-percentage {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-arrow {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-pin {
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-left {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-progressbar .premium-progressbar-hf-label-right {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-img-wrapper {
            border-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-person-name {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-separator {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-company-link {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-testimonials .premium-testimonial-text-wrapper {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-title .premium-title-header {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-title.premium-title-stroke-yes .premium-title-text {
            -webkit-text-fill-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style8 .premium-title-text[data-animation="shiny"] {
            --base-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style2 {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-title .premium-title-style3 {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-title .premium-title-style5 {
            border-bottom: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style6 {
            border-bottom: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style6:before {
            border-bottom-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-style7-stripe {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-header svg,
        .elementor-widget-premium-addon-title .premium-title-header svg * {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-title .premium-title-bg-text:before {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-play-icon {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-play-icon-container:hover .premium-video-box-play-icon {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-text {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-description-container:hover .premium-video-box-text {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-description-container {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-sticky-close i {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-addon-video-box .premium-video-box-sticky-infobar {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-addon-video-box .premium-youtube-vid-title {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-tooltip {
            color: var(--e-global-color-primary);
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-tooltip span {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.right .premium-vscroll-tooltip::after {
            border-left-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-inner .premium-vscroll-dots.left .premium-vscroll-tooltip::after {
            border-right-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots .premium-vscroll-nav-link span {
            background-color: var(--e-global-color-primary);
            border-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots li.active .premium-vscroll-nav-link span {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-dots {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item .premium-vscroll-nav-link:hover {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item {
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active .premium-vscroll-nav-link:hover {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-premium-vscroll .premium-vscroll-nav-menu .premium-vscroll-nav-item.active {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-theme-site-logo .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-theme-site-title .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-theme-page-title .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-theme-post-title .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-theme-post-excerpt .elementor-widget-container {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-theme-post-content {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-theme-post-featured-image .widget-image-caption {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-theme-archive-title .elementor-heading-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-archive-posts .elementor-post__title,
        .elementor-widget-archive-posts .elementor-post__title a {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-archive-posts .elementor-post__meta-data {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-archive-posts .elementor-post__excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-archive-posts .elementor-post__read-more {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-archive-posts a.elementor-post__read-more {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-archive-posts .elementor-post__card .elementor-post__badge {
            background-color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-archive-posts .elementor-pagination {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-archive-posts .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-archive-posts .e-load-more-message {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-archive-posts .elementor-posts-nothing-found {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-posts .elementor-post__title,
        .elementor-widget-posts .elementor-post__title a {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-posts .elementor-post__meta-data {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-posts .elementor-post__excerpt p {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-posts .elementor-post__read-more {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-posts a.elementor-post__read-more {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-posts .elementor-post__card .elementor-post__badge {
            background-color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-posts .elementor-pagination {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-posts .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-posts .e-load-more-message {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-portfolio a .elementor-portfolio-item__overlay {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-portfolio .elementor-portfolio-item__title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-portfolio .elementor-portfolio__filter {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-portfolio .elementor-portfolio__filter.elementor-active {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-gallery .elementor-gallery-item__title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-gallery .elementor-gallery-item__description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-gallery {
            --galleries-title-color-normal: var(--e-global-color-primary);
            --galleries-title-color-hover: var(--e-global-color-secondary);
            --galleries-pointer-bg-color-hover: var(--e-global-color-accent);
            --gallery-title-color-active: var(--e-global-color-secondary);
            --galleries-pointer-bg-color-active: var(--e-global-color-accent);
        }

        .elementor-widget-gallery .elementor-gallery-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-form .elementor-field-group>label,
        .elementor-widget-form .elementor-field-subgroup label {
            color: var(--e-global-color-text);
        }

        .elementor-widget-form .elementor-field-group>label {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-form .elementor-field-type-html {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-form .elementor-field-group .elementor-field {
            color: var(--e-global-color-text);
        }

        .elementor-widget-form .elementor-field-group .elementor-field,
        .elementor-widget-form .elementor-field-subgroup label {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-form .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-form .e-form__buttons__wrapper__button-next {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-form .elementor-button[type="submit"] {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-form .e-form__buttons__wrapper__button-previous {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-form .elementor-message {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-form .e-form__indicators__indicator,
        .elementor-widget-form .e-form__indicators__indicator__label {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-form {
            --e-form-steps-indicator-inactive-primary-color: var(--e-global-color-text);
            --e-form-steps-indicator-active-primary-color: var(--e-global-color-accent);
            --e-form-steps-indicator-completed-primary-color: var(--e-global-color-accent);
            --e-form-steps-indicator-progress-color: var(--e-global-color-accent);
            --e-form-steps-indicator-progress-background-color: var(--e-global-color-text);
            --e-form-steps-indicator-progress-meter-color: var(--e-global-color-text);
        }

        .elementor-widget-form .e-form__indicators__indicator__progress__meter {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-login .elementor-field-group>a {
            color: var(--e-global-color-text);
        }

        .elementor-widget-login .elementor-field-group>a:hover {
            color: var(--e-global-color-accent);
        }

        .elementor-widget-login .elementor-form-fields-wrapper label {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-login .elementor-field-group .elementor-field {
            color: var(--e-global-color-text);
        }

        .elementor-widget-login .elementor-field-group .elementor-field,
        .elementor-widget-login .elementor-field-subgroup label {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-login .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-login .elementor-widget-container .elementor-login__logged-in-message {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-slides .elementor-slide-heading {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-slides .elementor-slide-description {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-slides .elementor-slide-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-nav-menu .elementor-nav-menu .elementor-item {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item {
            color: var(--e-global-color-text);
            fill: var(--e-global-color-text);
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:hover,
        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.elementor-item-active,
        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item.highlighted,
        .elementor-widget-nav-menu .elementor-nav-menu--main .elementor-item:focus {
            color: var(--e-global-color-accent);
            fill: var(--e-global-color-accent);
        }

        .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:before,
        .elementor-widget-nav-menu .elementor-nav-menu--main:not(.e--pointer-framed) .elementor-item:after {
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-nav-menu .e--pointer-framed .elementor-item:before,
        .elementor-widget-nav-menu .e--pointer-framed .elementor-item:after {
            border-color: var(--e-global-color-accent);
        }

        .elementor-widget-nav-menu {
            --e-nav-menu-divider-color: var(--e-global-color-text);
        }

        .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-item,
        .elementor-widget-nav-menu .elementor-nav-menu--dropdown .elementor-sub-item {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-animated-headline .elementor-headline-dynamic-wrapper path {
            stroke: var(--e-global-color-accent);
        }

        .elementor-widget-animated-headline .elementor-headline-plain-text {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-animated-headline .elementor-headline {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-animated-headline {
            --dynamic-text-color: var(--e-global-color-secondary);
        }

        .elementor-widget-animated-headline .elementor-headline-dynamic-text {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-hotspot .widget-image-caption {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-hotspot {
            --hotspot-color: var(--e-global-color-primary);
            --hotspot-box-color: var(--e-global-color-secondary);
            --tooltip-color: var(--e-global-color-secondary);
        }

        .elementor-widget-hotspot .e-hotspot__label {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-hotspot .e-hotspot__tooltip {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-price-list .elementor-price-list-header {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-price-list .elementor-price-list-price {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-price-list .elementor-price-list-description {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-price-list .elementor-price-list-separator {
            border-bottom-color: var(--e-global-color-secondary);
        }

        .elementor-widget-price-table {
            --e-price-table-header-background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-price-table .elementor-price-table__heading {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__subheading {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table .elementor-price-table__price {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__original-price {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__period {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__features-list {
            --e-price-table-features-list-color: var(--e-global-color-text);
        }

        .elementor-widget-price-table .elementor-price-table__features-list li {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__features-list li:before {
            border-top-color: var(--e-global-color-text);
        }

        .elementor-widget-price-table .elementor-price-table__button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-price-table .elementor-price-table__additional_info {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-price-table .elementor-price-table__ribbon-inner {
            background-color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-flip-box .elementor-flip-box__front .elementor-flip-box__layer__description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-flip-box .elementor-flip-box__back .elementor-flip-box__layer__description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-flip-box .elementor-flip-box__button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-call-to-action .elementor-cta__title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-call-to-action .elementor-cta__description {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-call-to-action .elementor-cta__button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-call-to-action .elementor-ribbon-inner {
            background-color: var(--e-global-color-accent);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-media-carousel .elementor-carousel-image-overlay {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-testimonial-carousel .elementor-testimonial__text {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-testimonial-carousel .elementor-testimonial__name {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-testimonial-carousel .elementor-testimonial__title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-reviews .elementor-testimonial__header,
        .elementor-widget-reviews .elementor-testimonial__name {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-reviews .elementor-testimonial__text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-table-of-contents {
            --header-color: var(--e-global-color-secondary);
            --item-text-color: var(--e-global-color-text);
            --item-text-hover-color: var(--e-global-color-accent);
            --marker-color: var(--e-global-color-text);
        }

        .elementor-widget-table-of-contents .elementor-toc__header,
        .elementor-widget-table-of-contents .elementor-toc__header-title {
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-table-of-contents .elementor-toc__list-item {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-countdown .elementor-countdown-item {
            background-color: var(--e-global-color-primary);
        }

        .elementor-widget-countdown .elementor-countdown-digits {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-countdown .elementor-countdown-label {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-countdown .elementor-countdown-expire--message {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-search-form input[type="search"].elementor-search-form__input {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-search-form .elementor-search-form__input,
        .elementor-widget-search-form .elementor-search-form__icon,
        .elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button,
        .elementor-widget-search-form .elementor-lightbox .dialog-lightbox-close-button:hover,
        .elementor-widget-search-form.elementor-search-form--skin-full_screen input[type="search"].elementor-search-form__input {
            color: var(--e-global-color-text);
            fill: var(--e-global-color-text);
        }

        .elementor-widget-search-form .elementor-search-form__submit {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
            background-color: var(--e-global-color-secondary);
        }

        .elementor-widget-author-box .elementor-author-box__name {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-author-box .elementor-author-box__bio {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-author-box .elementor-author-box__button {
            color: var(--e-global-color-secondary);
            border-color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-author-box .elementor-author-box__button:hover {
            border-color: var(--e-global-color-secondary);
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-post-navigation span.post-navigation__prev--label {
            color: var(--e-global-color-text);
        }

        .elementor-widget-post-navigation span.post-navigation__next--label {
            color: var(--e-global-color-text);
        }

        .elementor-widget-post-navigation span.post-navigation__prev--label,
        .elementor-widget-post-navigation span.post-navigation__next--label {
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-post-navigation span.post-navigation__prev--title,
        .elementor-widget-post-navigation span.post-navigation__next--title {
            color: var(--e-global-color-secondary);
            font-family: var(--e-global-typography-secondary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-secondary-font-weight);
        }

        .elementor-widget-post-info .elementor-icon-list-item:not(:last-child):after {
            border-color: var(--e-global-color-text);
        }

        .elementor-widget-post-info .elementor-icon-list-icon i {
            color: var(--e-global-color-primary);
        }

        .elementor-widget-post-info .elementor-icon-list-icon svg {
            fill: var(--e-global-color-primary);
        }

        .elementor-widget-post-info .elementor-icon-list-text,
        .elementor-widget-post-info .elementor-icon-list-text a {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-post-info .elementor-icon-list-item {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-sitemap .elementor-sitemap-title {
            color: var(--e-global-color-primary);
            font-family: var(--e-global-typography-primary-font-family), Sans-serif;
            font-weight: var(--e-global-typography-primary-font-weight);
        }

        .elementor-widget-sitemap .elementor-sitemap-item,
        .elementor-widget-sitemap span.elementor-sitemap-list,
        .elementor-widget-sitemap .elementor-sitemap-item a {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-sitemap .elementor-sitemap-item {
            color: var(--e-global-color-text);
        }

        .elementor-widget-blockquote .elementor-blockquote__content {
            color: var(--e-global-color-text);
        }

        .elementor-widget-blockquote .elementor-blockquote__author {
            color: var(--e-global-color-secondary);
        }

        .elementor-widget-lottie {
            --caption-color: var(--e-global-color-text);
        }

        .elementor-widget-lottie .e-lottie__caption {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-video-playlist .e-tabs-header .e-tabs-title {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-header .e-tabs-videos-count {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-header .e-tabs-header-right-side i {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-header .e-tabs-header-right-side svg {
            fill: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tab-title .e-tab-title-text {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-video-playlist .e-tab-title .e-tab-title-text a {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tab-title .e-tab-duration {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-title-text {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-title-text a {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-items-wrapper .e-tab-title:where(.e-active, :hover) .e-tab-duration {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-items-wrapper .e-section-title {
            color: var(--e-global-color-text);
        }

        .elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-wrapper .e-inner-tab-title a {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content .e-inner-tab-text {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content button {
            color: var(--e-global-color-text);
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
        }

        .elementor-widget-video-playlist .e-tabs-inner-tabs .e-inner-tabs-content-wrapper .e-inner-tab-content button:hover {
            color: var(--e-global-color-text);
        }

        .elementor-widget-paypal-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-paypal-button .elementor-message {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-stripe-button .elementor-button {
            font-family: var(--e-global-typography-accent-font-family), Sans-serif;
            font-weight: var(--e-global-typography-accent-font-weight);
            background-color: var(--e-global-color-accent);
        }

        .elementor-widget-stripe-button .elementor-message {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-widget-progress-tracker .current-progress-percentage {
            font-family: var(--e-global-typography-text-font-family), Sans-serif;
            font-weight: var(--e-global-typography-text-font-weight);
        }

        .elementor-27 .elementor-element.elementor-element-c3673e1:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-c3673e1>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #230101;
        }

        .elementor-27 .elementor-element.elementor-element-c3673e1>.elementor-background-overlay {
            background-color: #3F0102;
            background-image: url("wp-content/uploads/2021/10/BG.jpg");
            opacity: 0.13;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-c3673e1 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 40px 40px 40px 40px;
        }

        .elementor-27 .elementor-element.elementor-element-728ef77 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Lato", Sans-serif;
            font-size: 60px;
            font-weight: 700;
        }

        .elementor-27 .elementor-element.elementor-element-c507b82 {
            color: #FFFFFF;
            font-family: "Lato", Sans-serif;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-43ceaf1 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-weight: bold;
            fill: #FFFFFF;
            color: #FFFFFF;
            background-color: #010304;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-d5c9397 .elementor-button .elementor-align-icon-right {
            margin-left: 12px;
        }

        .elementor-27 .elementor-element.elementor-element-d5c9397 .elementor-button .elementor-align-icon-left {
            margin-right: 12px;
        }

        .elementor-27 .elementor-element.elementor-element-d5c9397 .elementor-button {
            font-family: "Lato", Sans-serif;
            font-weight: bold;
            fill: #3F0102;
            color: #3F0102;
            background-color: #FFFFFF;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-544b2f1:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #01071000;
        }

        .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 0px 0px 0px 20px;
        }

        .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-3857d19 img {
            width: 100%;
            max-width: 100%;
        }

        .elementor-27 .elementor-element.elementor-element-3857d19>.elementor-widget-container {
            padding: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-54499b2:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-54499b2>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-54499b2 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-54499b2>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-f9c2daa>.elementor-element-populated {
            padding: 100px 100px 100px 100px;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9.elementor-view-stacked .elementor-icon {
            background-color: #BF1723;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9.elementor-view-framed .elementor-icon,
        .elementor-27 .elementor-element.elementor-element-a8529b9.elementor-view-default .elementor-icon {
            fill: #BF1723;
            color: #BF1723;
            border-color: #BF1723;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9 {
            --icon-box-icon-margin: 15px;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-title,
        .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-title a {
            font-family: "Lato", Sans-serif;
            font-size: 28px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-description {
            color: #000000;
            font-family: "Roboto", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-15fd4b3:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-15fd4b3>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-15fd4b3 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: -80px;
            margin-bottom: -2px;
        }

        .elementor-27 .elementor-element.elementor-element-15fd4b3>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-b2c885e>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-c7f85cf>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-27 .elementor-element.elementor-element-0f31f27 img {
            width: 30%;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-d32559a>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-27 .elementor-element.elementor-element-e642ca6:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-e642ca6>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-e642ca6 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-e642ca6>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-00fa71d>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-e8d741c>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-27 .elementor-element.elementor-element-76fd4d4 {
            text-align: center;
        }

        .elementor-27 .elementor-element.elementor-element-76fd4d4 .elementor-heading-title {
            color: #000000;
            font-family: "Lato", Sans-serif;
            font-size: 19px;
            font-weight: bold;
        }

        .elementor-27 .elementor-element.elementor-element-442759b .elementor-image-carousel-wrapper .elementor-image-carousel .swiper-slide-image {
            border-radius: -1px -1px -1px -1px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-45612ce>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -24px;
        }

        .elementor-27 .elementor-element.elementor-element-e835758:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-e835758>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-e835758 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-e835758>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-25f37f27 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-25f37f27>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-10d2e97b {
            --spacer-size: 80px;
        }

        .elementor-27 .elementor-element.elementor-element-6382e8f5 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-6382e8f5>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated,
        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated>.elementor-background-overlay,
        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-background-slideshow {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 5px;
            --e-column-margin-right: 5px;
            --e-column-margin-left: 5px;
        }

        .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-106b41e img {
            width: 50%;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699.ekit-equal-height-enable,
        .elementor-27 .elementor-element.elementor-element-6e800699.ekit-equal-height-enable .elementor-widget-container,
        .elementor-27 .elementor-element.elementor-element-6e800699.ekit-equal-height-enable .ekit-wid-con,
        .elementor-27 .elementor-element.elementor-element-6e800699.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 50px 30px 50px 30px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #3F0102;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #3F0102;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox .box-body>p {
            color: #000000;
            font-family: "Roboto", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox:hover .box-body>p {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-6e800699>.elementor-widget-container {
            margin: -48px 00px 00px 00px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated,
        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated>.elementor-background-overlay,
        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-background-slideshow {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 5px;
            --e-column-margin-right: 5px;
            --e-column-margin-left: 5px;
        }

        .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-8c5a899 img {
            width: 39%;
        }

        .elementor-27 .elementor-element.elementor-element-8c5a899>.elementor-widget-container {
            margin: 11px 11px 11px 11px;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24.ekit-equal-height-enable,
        .elementor-27 .elementor-element.elementor-element-3f3a3a24.ekit-equal-height-enable .elementor-widget-container,
        .elementor-27 .elementor-element.elementor-element-3f3a3a24.ekit-equal-height-enable .ekit-wid-con,
        .elementor-27 .elementor-element.elementor-element-3f3a3a24.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 50px 30px 50px 30px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #f5f5f5;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #3F0102;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #3F0102;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox .box-body>p {
            color: #000000;
            font-family: "Roboto", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox:hover .box-body>p {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-3f3a3a24>.elementor-widget-container {
            margin: -48px 00px 00px 00px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated,
        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated>.elementor-background-overlay,
        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-background-slideshow {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 05px 05px 05px 05px;
            --e-column-margin-right: 05px;
            --e-column-margin-left: 05px;
        }

        .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-06bd17d img {
            width: 50%;
        }

        .elementor-27 .elementor-element.elementor-element-06bd17d>.elementor-widget-container {
            margin: 14px 14px 14px 14px;
            padding: -1px 0px 92px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8.ekit-equal-height-enable,
        .elementor-27 .elementor-element.elementor-element-71abe2a8.ekit-equal-height-enable .elementor-widget-container,
        .elementor-27 .elementor-element.elementor-element-71abe2a8.ekit-equal-height-enable .ekit-wid-con,
        .elementor-27 .elementor-element.elementor-element-71abe2a8.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 50px 30px 50px 30px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #f5f5f5;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #3F0102;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #3F0102;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox .box-body>p {
            color: #000000;
            font-family: "Roboto", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox:hover .box-body>p {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-71abe2a8>.elementor-widget-container {
            margin: -48px 00px 00px 00px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated,
        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated>.elementor-background-overlay,
        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-background-slideshow {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin: 5px 5px 5px 5px;
            --e-column-margin-right: 5px;
            --e-column-margin-left: 5px;
        }

        .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-56b8324 img {
            width: 50%;
        }

        .elementor-27 .elementor-element.elementor-element-56b8324>.elementor-widget-container {
            margin: 25px 25px 25px 25px;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4.ekit-equal-height-enable,
        .elementor-27 .elementor-element.elementor-element-54d03af4.ekit-equal-height-enable .elementor-widget-container,
        .elementor-27 .elementor-element.elementor-element-54d03af4.ekit-equal-height-enable .ekit-wid-con,
        .elementor-27 .elementor-element.elementor-element-54d03af4.ekit-equal-height-enable .ekit-wid-con .elementskit-infobox {
            height: 100%;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox {
            background-color: #FFFFFF00;
            padding: 50px 30px 50px 30px;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-color: #f5f5f5;
            border-radius: 5px 5px 5px 5px;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox .elementskit-info-box-title {
            padding: 0px 0px 0px 0px;
            color: #3F0102;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox:hover .elementskit-info-box-title {
            color: #3F0102;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox .box-body>p {
            color: #000000;
            font-family: "Roboto", Sans-serif;
            font-size: 16px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox:hover .box-body>p {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox p {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-54d03af4>.elementor-widget-container {
            margin: -48px 00px 00px 00px;
            padding: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-37b4b0de:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-37b4b0de>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-37b4b0de {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 0px 100px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-37b4b0de>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-36430ad4>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: -1px;
        }

        .elementor-27 .elementor-element.elementor-element-acdf661 .elementor-heading-title {
            color: #000000;
            font-family: "Poppins", Sans-serif;
            font-size: 24px;
            font-weight: 700;
        }

        .elementor-27 .elementor-element.elementor-element-acdf661>.elementor-widget-container {
            padding: 0px 0px 0px 20px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-69c3c409.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-69c3c409.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-283b386 {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-283b386>.elementor-widget-container {
            margin: 20px 0px 0px 0px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-242e696e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-242e696e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .ekit-btn-wraper {
            text-align: center;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn {
            padding: 20px 57px 20px 57px;
            font-family: "Poppins", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #ffffff;
            background-color: #A30516;
            border-style: none;
            border-radius: 999px 999px 999px 999px;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn:hover {
            color: #ffffff;
            background-color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn:hover svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn>i,
        .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn>svg {
            margin-right: 5px;
        }

        .rtl .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn>i,
        .rtl .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn>svg {
            margin-left: 5px;
            margin-right: 0;
        }

        .elementor-27 .elementor-element.elementor-element-5e0b804c>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-5e0b804c:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-5e0b804c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-5e0b804c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-5e0b804c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-6459a0d7 img {
            width: 90%;
        }

        .elementor-27 .elementor-element.elementor-element-6459a0d7>.elementor-widget-container {
            margin: 20px 20px 20px 20px;
        }

        .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title {
            color: #010101;
            margin: 015px 0px 0px 0px;
            font-family: "Poppins", Sans-serif;
            font-size: 44px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 54px;
        }

        .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title>span {
            color: #000000;
            font-weight: 300;
        }

        .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title:hover>span {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper p {
            color: #010101;
            font-family: "Lato", Sans-serif;
            font-size: 16px;
            font-weight: 400;
            margin: 30px 0px 20px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .ekit-btn-wraper {
            text-align: left;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn {
            padding: 20px 47px 20px 47px;
            font-family: "Poppins", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            text-transform: uppercase;
            letter-spacing: 1px;
            text-shadow: 0px 0px 0px rgba(0, 0, 0, 0.3);
            color: #FFFFFF;
            background-color: #010710;
            border-style: none;
            border-radius: 999px 999px 999px 999px;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn svg path {
            stroke: #FFFFFF;
            fill: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn:hover {
            color: #ffffff;
            background-color: #6B0000;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn:hover svg path {
            stroke: #ffffff;
            fill: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn>i,
        .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn>svg {
            margin-right: 5px;
        }

        .rtl .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn>i,
        .rtl .elementor-27 .elementor-element.elementor-element-6532f96a .elementskit-btn>svg {
            margin-left: 5px;
            margin-right: 0;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-container {
            min-height: 680px;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-shape-top .elementor-shape-fill {
            fill: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-shape-top svg {
            height: 100px;
            transform: translateX(-50%) rotateY(180deg);
        }

        .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-shape-bottom svg {
            height: 100px;
            transform: translateX(-50%) rotateY(180deg);
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-piechart-title {
            color: #010101;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
            line-height: 54px;
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-single-piechart p {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd .withcontent p {
            font-family: "Lato", Sans-serif;
            font-size: 16px;
            font-weight: 500;
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-single-piechart {
            text-align: center;
            padding: 50px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-single-piechart span.ekit-chart-content {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-214c8efd>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f .ekit-piechart-title {
            color: #010101;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
            line-height: 54px;
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f .ekit-single-piechart p {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f .withcontent p {
            font-family: "Lato", Sans-serif;
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f .ekit-single-piechart {
            text-align: center;
            padding: 50px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f .ekit-single-piechart span.ekit-chart-content {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-2185027f>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-piechart-title {
            color: #010101;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
            line-height: 54px;
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-single-piechart p {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668 .withcontent p {
            font-family: "Lato", Sans-serif;
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-single-piechart {
            text-align: center;
            padding: 50px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-single-piechart span.ekit-chart-content {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-4c723668>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-piechart-title {
            color: #010101;
            font-family: "Poppins", Sans-serif;
            font-size: 22px;
            font-weight: 500;
            line-height: 54px;
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-single-piechart p {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db .withcontent p {
            font-family: "Lato", Sans-serif;
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-single-piechart {
            text-align: center;
            padding: 50px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-single-piechart span.ekit-chart-content {
            color: #010101;
        }

        .elementor-27 .elementor-element.elementor-element-1ef940db>.elementor-widget-container {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-e09ab6d:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-e09ab6d>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-e09ab6d>.elementor-background-overlay {
            background-image: url("wp-content/uploads/2021/10/BG.jpg");
            opacity: 1;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-e09ab6d {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-7c2533e>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-7c2533e>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-5a8a8f8>.elementor-background-overlay {
            opacity: 0.5;
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-5a8a8f8 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-f42c5fa>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-f42c5fa>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-2c7d290 .elementskit-section-title-wraper .elementskit-section-title {
            color: #FFFFFF;
            margin: 15px 0px 20px 0px;
            font-family: "Poppins", Sans-serif;
            font-size: 36px;
            font-weight: 500;
            line-height: 42px;
        }

        .elementor-27 .elementor-element.elementor-element-2c7d290 .elementskit-section-title-wraper .elementskit-section-title>span {
            color: #000000;
            padding: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-2c7d290 .elementskit-section-title-wraper .elementskit-section-title:hover>span {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-0a0c81a {
            text-align: center;
            color: #FFFFFF;
            font-weight: 600;
        }

        .elementor-27 .elementor-element.elementor-element-2d8fe87:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-2d8fe87>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-2d8fe87 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-2d8fe87>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-642e833>.elementor-element-populated {
            padding: 0px 10px 0px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-1453445 .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-1453445 .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-a81812c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-a81812c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-bdbb2aa .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-bdbb2aa .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-5a8c31c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .elementor-repeater-item-5a8c31c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-button {
            display: inline-block;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-item {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .header .title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing.style-1 .eael-pricing-item .header:after,
        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing.style-3 .eael-pricing-item .header:after {
            background: #dbdbdb;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .eael-pricing-tag .price-tag .original-price,
        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .eael-pricing-tag .price-tag .original-price .price-currency {
            color: #5E0000;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .eael-pricing-tag .price-tag .sale-price,
        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .eael-pricing-tag .price-tag .sale-price .price-currency {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .body ul li {
            color: #020202;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .body ul li .li-icon img {
            height: 20px;
            width: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .body ul li .li-icon svg {
            height: 20px;
            width: 20px;
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .body ul li .li-icon i {
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing-item .body ul li .li-icon {
            width: 20px;
            height: 20px;
        }

        div.tooltipster-base.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border,
        div.tooltipster-base.tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background {
            border-top-color: #3d3d3d;
        }

        div.tooltipster-base.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border,
        .tooltipster-base.tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background {
            border-right-color: #3d3d3d;
        }

        div.tooltipster-base.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border,
        div.tooltipster-base.tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background {
            border-left-color: #3d3d3d;
        }

        div.tooltipster-base.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border,
        div.tooltipster-base.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background {
            border-bottom-color: #3d3d3d;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button img {
            height: 16px;
            width: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button svg {
            height: 16px;
            width: 16px;
            fill: #fff;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button i {
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button {
            color: #fff;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button:hover {
            color: #f9f9f9;
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-d0eb4c4 .eael-pricing .eael-pricing-button:hover svg {
            fill: #f9f9f9;
        }

        .elementor-27 .elementor-element.elementor-element-924a284>.elementor-element-populated {
            padding: 0px 10px 0px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-1453445 .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-1453445 .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-a81812c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-a81812c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-bdbb2aa .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-bdbb2aa .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-5a8c31c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .elementor-repeater-item-5a8c31c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-button {
            display: inline-block;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-item {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .header .title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing.style-1 .eael-pricing-item .header:after,
        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing.style-3 .eael-pricing-item .header:after {
            background: #dbdbdb;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .eael-pricing-tag .price-tag .original-price,
        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .eael-pricing-tag .price-tag .original-price .price-currency {
            color: #5E0000;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .eael-pricing-tag .price-tag .sale-price,
        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .eael-pricing-tag .price-tag .sale-price .price-currency {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .body ul li {
            color: #020202;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .body ul li .li-icon img {
            height: 20px;
            width: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .body ul li .li-icon svg {
            height: 20px;
            width: 20px;
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .body ul li .li-icon i {
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing-item .body ul li .li-icon {
            width: 20px;
            height: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button img {
            height: 16px;
            width: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button svg {
            height: 16px;
            width: 16px;
            fill: #fff;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button i {
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button {
            color: #fff;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button:hover {
            color: #f9f9f9;
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-da6fe93 .eael-pricing .eael-pricing-button:hover svg {
            fill: #f9f9f9;
        }

        .elementor-27 .elementor-element.elementor-element-ff8bdf6>.elementor-element-populated {
            padding: 0px 10px 0px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-1453445 .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-1453445 .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-a81812c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-a81812c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-bdbb2aa .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-bdbb2aa .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-5a8c31c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .elementor-repeater-item-5a8c31c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-button {
            display: inline-block;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-1 .eael-pricing-item.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-2 .eael-pricing-item.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-3 .eael-pricing-item.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-4 .eael-pricing-item.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-item.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-image.featured:before {
            content: "Popular";
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-item {
            background-color: #FFFFFF;
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .header .title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-1 .eael-pricing-item .header:after,
        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-3 .eael-pricing-item .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .eael-pricing-tag .price-tag .original-price,
        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .eael-pricing-tag .price-tag .original-price .price-currency {
            color: #5E0000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .eael-pricing-tag .price-tag .sale-price,
        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .eael-pricing-tag .price-tag .sale-price .price-currency {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .body ul li {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .body ul li .li-icon img {
            height: 20px;
            width: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .body ul li .li-icon svg {
            height: 20px;
            width: 20px;
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .body ul li .li-icon i {
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing-item .body ul li .li-icon {
            width: 20px;
            height: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-3 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-4 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-image.ribbon-2:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-3 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-4 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing.style-5 .eael-pricing-image.ribbon-3:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-item.ribbon-4:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-image.ribbon-4:before {
            font-size: 10px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button img {
            height: 16px;
            width: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button svg {
            height: 16px;
            width: 16px;
            fill: #fff;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button i {
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button {
            color: #fff;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button:hover {
            color: #f9f9f9;
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-c6ca6dc .eael-pricing .eael-pricing-button:hover svg {
            fill: #f9f9f9;
        }

        .elementor-27 .elementor-element.elementor-element-44d7def>.elementor-element-populated {
            padding: 0px 10px 0px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-1453445 .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-1453445 .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-a81812c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-a81812c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-bdbb2aa .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-bdbb2aa .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-5a8c31c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .elementor-repeater-item-5a8c31c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-button {
            display: inline-block;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-1 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-2 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-4 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-image.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-item {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .header .title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-1 .eael-pricing-item .header:after,
        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item .header:after {
            background: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .eael-pricing-tag .price-tag .original-price,
        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .eael-pricing-tag .price-tag .original-price .price-currency {
            color: #5E0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .eael-pricing-tag .price-tag .sale-price,
        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .eael-pricing-tag .price-tag .sale-price .price-currency {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .body ul li {
            color: #020202;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .body ul li .li-icon img {
            height: 20px;
            width: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .body ul li .li-icon svg {
            height: 20px;
            width: 20px;
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .body ul li .li-icon i {
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing-item .body ul li .li-icon {
            width: 20px;
            height: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-4 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-image.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-4 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-image.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-item.ribbon-4:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-image.ribbon-4:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-1 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-2 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-3 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-4 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing.style-5 .eael-pricing-image.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button img {
            height: 16px;
            width: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button svg {
            height: 16px;
            width: 16px;
            fill: #fff;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button i {
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button {
            color: #fff;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button:hover {
            color: #f9f9f9;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-e071b8c .eael-pricing .eael-pricing-button:hover svg {
            fill: #f9f9f9;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-1453445 .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-1453445 .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-a81812c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-a81812c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-bdbb2aa .li-icon i {
            color: #020101;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-bdbb2aa .li-icon svg {
            color: #020101 !important;
            fill: #020101 !important;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-5a8c31c .li-icon i {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .elementor-repeater-item-5a8c31c .li-icon svg {
            color: #00C853 !important;
            fill: #00C853 !important;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-button {
            display: inline-block;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-1 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-2 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-4 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-item.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-image.featured:before {
            content: "Hot Pick";
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-item {
            border-style: solid;
            border-width: 0px 0px 0px 0px;
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing {
            border-radius: 4px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .header .title {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
            background: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-1 .eael-pricing-item .header:after,
        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item .header:after {
            background: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .eael-pricing-tag .price-tag .original-price,
        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .eael-pricing-tag .price-tag .original-price .price-currency {
            color: #5E0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .eael-pricing-tag .price-tag .sale-price,
        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .eael-pricing-tag .price-tag .sale-price .price-currency {
            color: #00C853;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .body ul li {
            color: #020202;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .body ul li .li-icon img {
            height: 20px;
            width: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .body ul li .li-icon svg {
            height: 20px;
            width: 20px;
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .body ul li .li-icon i {
            font-size: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing-item .body ul li .li-icon {
            width: 20px;
            height: 20px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-4 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-item.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-image.ribbon-2:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-4 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-item.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-image.ribbon-3:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-item.ribbon-4:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-image.ribbon-4:before {
            font-size: 10px;
            background: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-1 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-2 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-3 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-4 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-item.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing.style-5 .eael-pricing-image.ribbon-2:after {
            border-bottom-color: #8F0000;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button img {
            height: 16px;
            width: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button svg {
            height: 16px;
            width: 16px;
            fill: #fff;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button i {
            font-size: 16px;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button {
            color: #fff;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button:hover {
            color: #f9f9f9;
            background: #5A0101;
        }

        .elementor-27 .elementor-element.elementor-element-84cddfc .eael-pricing .eael-pricing-button:hover svg {
            fill: #f9f9f9;
        }

        .elementor-27 .elementor-element.elementor-element-6852f6fc>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-30e0773f {
            --e-image-carousel-slides-to-show: 3;
        }

        .elementor-27 .elementor-element.elementor-element-30e0773f .swiper-wrapper {
            display: flex;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-30e0773f .elementor-image-carousel-wrapper .elementor-image-carousel .swiper-slide-image {
            border-radius: 6px 6px 6px 6px;
        }

        .elementor-27 .elementor-element.elementor-element-eeec418 {
            padding: 20px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-60add55:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated,
        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated>.elementor-background-overlay,
        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-background-slideshow {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated {
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.5);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-8c18cf1:not(.elementor-widget-image) .elementor-widget-container {
            -webkit-mask-image: url(wp-content/plugins/elementor/assets/mask-shapes/circle.svg);
            -webkit-mask-size: contain;
            -webkit-mask-position: center center;
            -webkit-mask-repeat: no-repeat;
        }

        .elementor-27 .elementor-element.elementor-element-8c18cf1.elementor-widget-image .elementor-widget-container img {
            -webkit-mask-image: url(wp-content/plugins/elementor/assets//mask-shapes/circle.svg );
            -webkit-mask-size: contain;
            -webkit-mask-position: center center;
            -webkit-mask-repeat: no-repeat;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc.elementor-position-right .elementor-image-box-img {
            margin-left: 15px;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc.elementor-position-left .elementor-image-box-img {
            margin-right: 15px;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc.elementor-position-top .elementor-image-box-img {
            margin-bottom: 15px;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-wrapper .elementor-image-box-img {
            width: 50%;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-img img {
            transition-duration: 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-title {
            color: #8E0412;
            font-family: "Montserrat", Sans-serif;
            font-weight: bold;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-description {
            color: #000000;
            font-size: 17px;
            font-weight: 400;
        }

        .elementor-27 .elementor-element.elementor-element-3850fcc>.elementor-widget-container {
            padding: 20px 20px 20px 20px;
        }

        .elementor-27 .elementor-element.elementor-element-1ee2b9c:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-1ee2b9c>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-image: url("wp-content/uploads/2021/06/sof__3bg2.png");
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: auto;
        }

        .elementor-27 .elementor-element.elementor-element-1ee2b9c {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 80px 0px 80px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-1ee2b9c>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-d583f5f {
            text-align: center;
        }

        .elementor-27 .elementor-element.elementor-element-d583f5f .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Montserrat", Sans-serif;
            font-size: 30px;
            font-weight: 600;
        }

        .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper .elementskit-section-title {
            color: #FCFCFC;
            margin: 0px 0px 020px 0px;
            font-family: "Poppins", Sans-serif;
            font-size: 24px;
            font-weight: 500;
            line-height: 35px;
        }

        .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper .elementskit-section-title>span {
            color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper .elementskit-section-title:hover>span {
            color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper p {
            color: #FFFFFF;
            font-family: "Lato", Sans-serif;
            font-size: 13px;
            font-weight: 400;
            line-height: 26px;
            margin: -11px -11px -11px -11px;
        }

        .elementor-27 .elementor-element.elementor-element-1867afd6>.elementor-container>.elementor-column>.elementor-widget-wrap {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementor-repeater-item-42f3647 {
            background-color: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementor-repeater-item-c46744c {
            background-color: #ffffff;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial-slider .slick-slide {
            margin-right: 15px;
            margin-left: 15px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-tootltip-testimonial .elementskit-commentor-content,
        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-single-testimonial-slider,
        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial_card {
            padding: 55px 25px 55px 25px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-tootltip-testimonial .elementskit-commentor-content,
        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-single-testimonial-slider,
        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial_card {
            border-radius: 10px 10px 10px 10px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementkit-testimonial-col {
            align-self: center;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-commentor-content {
            padding: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-single-testimonial-slider .elementskit-commentor-content>p {
            color: #8c8c8c;
            margin: 15px 0px 30px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial_card .elementskit-commentor-coment {
            color: #8c8c8c;
            margin: 15px 0px 30px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-stars>li>a,
        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-stars>li>span {
            color: #fec42d;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-stars>li:not(:last-child) {
            margin-right: 5px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-stars {
            margin: 0px 0px 0px 0px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-single-testimonial-slider .elementskit-border-hr {
            width: 40px;
            height: 2px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-profile-info .elementskit-author-name {
            color: #000000;
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-profile-info .elementskit-author-des {
            color: rgba(0, 0, 0, 0.5);
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-commentor-image>img {
            border-style: solid;
            border-width: 5px 5px 5px 5px;
            border-color: #ffffff;
            box-shadow: 20px 20px 40px 0px rgba(0, 0, 0, 0.1);
        }

        .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-commentor-bio .elementskit-commentor-image>img {
            height: 80px;
            width: 80px;
        }

        .elementor-27 .elementor-element.elementor-element-5fe16c9:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-5fe16c9>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F8F8F8;
        }

        .elementor-27 .elementor-element.elementor-element-5fe16c9 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 100px 50px 100px 50px;
        }

        .elementor-27 .elementor-element.elementor-element-5fe16c9>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-bd791fa {
            text-align: center;
        }

        .elementor-27 .elementor-element.elementor-element-bd791fa .elementor-heading-title {
            color: #5E0000;
            font-family: "Montserrat", Sans-serif;
            font-size: 31px;
            font-weight: bold;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-48bc644.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-48bc644.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-48bc644.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-e8eeeee .elementor-counter-number-wrapper {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 40px;
            font-weight: 200;
        }

        .elementor-27 .elementor-element.elementor-element-e8eeeee .elementor-counter-title {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 14px;
            font-weight: 600;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-dadfe2f.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-dadfe2f.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-dadfe2f.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-dadfe2f>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
            margin-bottom: 0px;
        }

        .elementor-27 .elementor-element.elementor-element-8b90097 .elementor-counter-number-wrapper {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 40px;
            font-weight: 200;
        }

        .elementor-27 .elementor-element.elementor-element-8b90097 .elementor-counter-title {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-2c2266f.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-2c2266f.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-2c2266f.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-4e1c1fd .elementor-counter-number-wrapper {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 40px;
            font-weight: 200;
        }

        .elementor-27 .elementor-element.elementor-element-4e1c1fd .elementor-counter-title {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 14px;
            font-weight: 600;
            line-height: 20px;
        }

        .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-11b004e.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-11b004e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-27 .elementor-element.elementor-element-11b004e.elementor-column>.elementor-widget-wrap {
            justify-content: center;
        }

        .elementor-27 .elementor-element.elementor-element-0166a2b .elementor-counter-number-wrapper {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 40px;
            font-weight: 200;
        }

        .elementor-27 .elementor-element.elementor-element-0166a2b .elementor-counter-title {
            color: #000000;
            font-family: "Montserrat", Sans-serif;
            font-size: 14px;
            font-weight: 600;
        }

        .elementor-27 .elementor-element.elementor-element-2d493f7:not(.elementor-motion-effects-element-type-background),
        .elementor-27 .elementor-element.elementor-element-2d493f7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #F8F8F8;
        }

        .elementor-27 .elementor-element.elementor-element-2d493f7 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-2d493f7>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .elementor-widget-container {
            text-align: center;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button {
            font-family: "Roboto", Sans-serif;
            font-weight: 600;
            border-radius: 6px;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button .premium-button-text-icon-wrapper span {
            color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button.premium-button-style2-shutinhor:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button.premium-button-style2-shutinver:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-radialin:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-rectin:before {
            background-color: #000000;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button:hover .premium-button-text-icon-wrapper span {
            color: #FFFFFF;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-none:hover,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style1:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-shutouthor:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-shutoutver:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-shutinhor,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-shutinver,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-dshutinhor:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-dshutinver:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-scshutouthor:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style2-scshutoutver:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style3-after:hover,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style3-before:hover,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style4-icon-wrapper,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-radialin,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-radialout:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-rectin,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style5-rectout:before,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style6-bg,
        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button-style6:before {
            background-color: #730101;
        }

        .elementor-27 .elementor-element.elementor-element-a15148a .premium-button:hover {
            border-radius: 6px;
        }

        :root {
            --page-title-display: none;
        }

        body.elementor-page-27:not(.elementor-motion-effects-element-type-background),
        body.elementor-page-27>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: transparent;
            background-image: linear-gradient(140deg, #3F0102 34%, #A30516 76%);
        }

        @media(min-width:768px) {
            .elementor-27 .elementor-element.elementor-element-69c3c409 {
                width: 53.183%;
            }

            .elementor-27 .elementor-element.elementor-element-242e696e {
                width: 46.817%;
            }

            .elementor-27 .elementor-element.elementor-element-3b9ad0a {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-60add55 {
                width: 49.333%;
            }

            .elementor-27 .elementor-element.elementor-element-a539676 {
                width: 25%;
            }
        }

        @media(max-width:1024px) {
            .elementor-27 .elementor-element.elementor-element-6382e8f5 {
                padding: -2px -2px -2px -2px;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6e800699>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-3f3a3a24>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-71abe2a8>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-54d03af4>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-2f22d08d .elementskit-btn {
                padding: 20px 30px 20px 30px;
            }

            .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title {
                font-size: 30px;
                line-height: 40px;
            }

            .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-shape-top svg {
                height: 24px;
            }

            .elementor-27 .elementor-element.elementor-element-6f32600d>.elementor-shape-bottom svg {
                height: 15px;
            }

            .elementor-27 .elementor-element.elementor-element-9adb134>.elementor-element-populated {
                margin: 0px 0px 30px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-2c7d290 .elementskit-section-title-wraper .elementskit-section-title {
                font-size: 32px;
                line-height: 42px;
            }

            .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial-slider .slick-slide {
                margin-right: 10px;
                margin-left: 10px;
            }
        }

        @media(max-width:767px) {
            .elementor-27 .elementor-element.elementor-element-c3673e1 {
                padding: 25px 25px 36px 25px;
            }

            .elementor-27 .elementor-element.elementor-element-728ef77 .elementor-heading-title {
                font-size: 56px;
            }

            .elementor-27 .elementor-element.elementor-element-c507b82 {
                font-size: 17px;
                line-height: 1.4em;
            }

            .elementor-27 .elementor-element.elementor-element-c507b82>.elementor-widget-container {
                padding: 010px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-d6aa1a2 {
                width: 100%;
            }

            .elementor-27 .elementor-element.elementor-element-43ceaf1 .elementor-button {
                font-size: 13px;
                padding: 15px 60px 15px 60px;
            }

            .elementor-27 .elementor-element.elementor-element-51413c0 {
                width: 100%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-51413c0.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-51413c0.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-51413c0.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-d5c9397 .elementor-button {
                font-size: 13px;
                padding: 15px 60px 15px 60px;
            }

            .elementor-27 .elementor-element.elementor-element-544b2f1 {
                width: 100%;
            }

            .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-544b2f1>.elementor-element-populated {
                padding: 20px 20px -5px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-3857d19 img {
                width: 100%;
                max-width: 100%;
            }

            .elementor-27 .elementor-element.elementor-element-54499b2 {
                padding: 20px 20px 20px 20px;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-f9c2daa.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-f9c2daa.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-f9c2daa.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-f9c2daa>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-f9c2daa>.elementor-element-populated {
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-title,
            .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-title a {
                font-size: 20px;
                line-height: 1.3em;
            }

            .elementor-27 .elementor-element.elementor-element-a8529b9 .elementor-icon-box-description {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-a8529b9>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-15fd4b3 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-b2c885e {
                width: 33.333333%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-b2c885e.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-b2c885e>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-c7f85cf {
                width: 33.333333%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-c7f85cf.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-c7f85cf>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-0f31f27>.elementor-widget-container {
                margin: -36px -36px -36px -36px;
            }

            .elementor-27 .elementor-element.elementor-element-d32559a {
                width: 33.333333%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-d32559a.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-d32559a>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-e642ca6 {
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-00fa71d {
                width: 33.333333%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-00fa71d.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-00fa71d>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-e8d741c.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-e8d741c>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-e8d741c>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-442759b {
                --e-image-carousel-slides-to-show: 5;
            }

            .elementor-27 .elementor-element.elementor-element-442759b .swiper-wrapper {
                display: flex;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-442759b>.elementor-widget-container {
                padding: 0px 0px 0px 0px;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-45612ce.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-45612ce>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: -1px;
            }

            .elementor-27 .elementor-element.elementor-element-25f37f27 {
                padding: 5px 5px 5px 5px;
            }

            .elementor-27 .elementor-element.elementor-element-10d2e97b {
                --spacer-size: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6382e8f5 {
                padding: 20px 20px 30px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf {
                width: 100%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-f4f1daf>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-106b41e img {
                width: 30%;
            }

            .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox {
                border-width: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6e800699 .elementskit-infobox .box-body>p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-6e800699>.elementor-widget-container {
                margin: -16px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c {
                width: 100%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-8c5a899 img {
                width: 22%;
            }

            .elementor-27 .elementor-element.elementor-element-8c5a899>.elementor-widget-container {
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox {
                padding: 20px 20px 20px 20px;
                border-width: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-3f3a3a24 .elementskit-infobox .box-body>p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-3f3a3a24>.elementor-widget-container {
                margin: -16px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7 {
                width: 100%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-06bd17d img {
                width: 30%;
            }

            .elementor-27 .elementor-element.elementor-element-06bd17d>.elementor-widget-container {
                margin: 23px 23px 23px 23px;
            }

            .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox {
                padding: 20px 20px 20px 20px;
                border-width: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-71abe2a8 .elementskit-infobox .box-body>p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-71abe2a8>.elementor-widget-container {
                margin: -16px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030 {
                width: 100%;
            }

            .elementor-bc-flex-widget .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030>.elementor-element-populated {
                margin: 5px 5px 5px 5px;
                --e-column-margin-right: 5px;
                --e-column-margin-left: 5px;
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-56b8324 img {
                width: 27%;
            }

            .elementor-27 .elementor-element.elementor-element-56b8324>.elementor-widget-container {
                margin: 21px 21px 21px 21px;
            }

            .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox {
                padding: 20px 20px 20px 20px;
                border-width: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-54d03af4 .elementskit-infobox .box-body>p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-54d03af4>.elementor-widget-container {
                margin: -16px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-37b4b0de {
                padding: 50px 0px 50px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-acdf661 {
                text-align: center;
            }

            .elementor-27 .elementor-element.elementor-element-acdf661>.elementor-widget-container {
                margin: -6px 0px 10px 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-283b386 {
                text-align: center;
            }

            .elementor-27 .elementor-element.elementor-element-5e0b804c {
                margin-top: -25px;
                margin-bottom: 0px;
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title {
                color: #000000;
                font-size: 26px;
                line-height: 29px;
            }

            .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper .elementskit-section-title>span {
                line-height: 0.1em;
            }

            .elementor-27 .elementor-element.elementor-element-468d7ff9 .elementskit-section-title-wraper p {
                color: #000000;
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-468d7ff9>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6532f96a>.elementor-widget-container {
                margin: 0px 0px 30px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-6f32600d {
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-piechart-title {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-single-piechart p {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-214c8efd .withcontent p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-214c8efd .ekit-single-piechart span.ekit-chart-content {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-2185027f .ekit-piechart-title {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-2185027f .ekit-single-piechart p {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-2185027f .withcontent p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-2185027f .ekit-single-piechart span.ekit-chart-content {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-2185027f>.elementor-widget-container {
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-piechart-title {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-single-piechart p {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-4c723668 .withcontent p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-4c723668 .ekit-single-piechart span.ekit-chart-content {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-4c723668>.elementor-widget-container {
                padding: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-piechart-title {
                color: #000000;
                margin: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-single-piechart p {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-1ef940db .withcontent p {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-1ef940db .ekit-single-piechart span.ekit-chart-content {
                color: #000000;
            }

            .elementor-27 .elementor-element.elementor-element-e09ab6d>.elementor-background-overlay {
                background-image: url("wp-content/uploads/2021/10/BG.jpg");
            }

            .elementor-27 .elementor-element.elementor-element-e09ab6d {
                margin-top: -18px;
                margin-bottom: -18px;
                padding: 1px 1px 1px 1px;
            }

            .elementor-27 .elementor-element.elementor-element-2c7d290 .elementskit-section-title-wraper .elementskit-section-title {
                color: #FFFFFF;
                font-size: 28px;
            }

            .elementor-27 .elementor-element.elementor-element-0a0c81a {
                text-align: center;
                font-size: 16px;
            }

            .elementor-27 .elementor-element.elementor-element-0a0c81a>.elementor-widget-container {
                margin: -41px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-2d8fe87 {
                padding: 20px 0px 20px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-d02d7aa {
                padding: 20px 20px 20px 20px;
            }

            .elementor-27 .elementor-element.elementor-element-30e0773f {
                --e-image-carousel-slides-to-show: 2;
            }

            .elementor-27 .elementor-element.elementor-element-3b9ad0a {
                width: 10%;
            }

            .elementor-27 .elementor-element.elementor-element-60add55 {
                width: 80%;
            }

            .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated,
            .elementor-27 .elementor-element.elementor-element-60add55>.elementor-element-populated>.elementor-background-overlay,
            .elementor-27 .elementor-element.elementor-element-60add55>.elementor-background-slideshow {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-8c18cf1 img {
                width: 70%;
            }

            .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-img {
                margin-bottom: 15px;
            }

            .elementor-27 .elementor-element.elementor-element-3850fcc .elementor-image-box-description {
                font-size: 13px;
            }

            .elementor-27 .elementor-element.elementor-element-3850fcc>.elementor-widget-container {
                margin: -50px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-a539676 {
                width: 10%;
            }

            .elementor-27 .elementor-element.elementor-element-1ee2b9c {
                margin-top: -34px;
                margin-bottom: 0px;
            }

            .elementor-27 .elementor-element.elementor-element-d583f5f {
                text-align: center;
            }

            .elementor-27 .elementor-element.elementor-element-d583f5f .elementor-heading-title {
                font-size: 29px;
            }

            .elementor-27 .elementor-element.elementor-element-d583f5f>.elementor-widget-container {
                margin: 0px 0px 0px 0px;
                padding: 5px 10px 5px 10px;
            }

            .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper .elementskit-section-title {
                margin: -5px -5px -5px -5px;
            }

            .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper .elementskit-section-title>span {
                font-size: 1px;
            }

            .elementor-27 .elementor-element.elementor-element-417eb7f3 .elementskit-section-title-wraper p {
                margin: 0px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-417eb7f3>.elementor-widget-container {
                margin: -26px 0px 0px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-7bd4263e .elementskit-testimonial-slider .slick-slide {
                margin-right: 10px;
                margin-left: 10px;
            }

            .elementor-27 .elementor-element.elementor-element-5fe16c9 {
                margin-top: -76px;
                margin-bottom: 0px;
                padding: 15px 15px 15px 15px;
            }

            .elementor-27 .elementor-element.elementor-element-2d493f7 {
                padding: 0px 0px 18px 0px;
            }

            .elementor-27 .elementor-element.elementor-element-a15148a .premium-button {
                font-size: 13px;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-27 .elementor-element.elementor-element-f4f1daf {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-21c0538c {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-6c2166a7 {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-752e7030 {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-69c3c409 {
                width: 70%;
            }

            .elementor-27 .elementor-element.elementor-element-242e696e {
                width: 30%;
            }

            .elementor-27 .elementor-element.elementor-element-24d6b3f6 {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-5f1a6974 {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-55d81ecc {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-9adb134 {
                width: 25%;
            }

            .elementor-27 .elementor-element.elementor-element-f42c5fa {
                width: 100%;
            }

            .elementor-27 .elementor-element.elementor-element-5bbaa77b {
                width: 100%;
            }
        }

        .elementor-42 .elementor-element.elementor-element-3470259:not(.elementor-motion-effects-element-type-background),
        .elementor-42 .elementor-element.elementor-element-3470259>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #010710;
        }

        .elementor-42 .elementor-element.elementor-element-3470259 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-3470259>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-99bb8cc>.elementor-element-populated {
            padding: 0px 0px 0px 0px;
        }

        .elementor-42 .elementor-element.elementor-element-bf29411 img {
            width: 120%;
        }

        .elementor-bc-flex-widget .elementor-42 .elementor-element.elementor-element-b55408d.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-42 .elementor-element.elementor-element-b55408d.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-42 .elementor-element.elementor-element-b55408d>.elementor-element-populated {
            margin: 0px 0px 0px 25px;
            --e-column-margin-right: 0px;
            --e-column-margin-left: 25px;
        }

        .elementor-42 .elementor-element.elementor-element-bc7be78 {
            text-align: center;
            color: #FFFFFF;
            font-family: "Roboto", Sans-serif;
            font-size: 13px;
            font-weight: 400;
            width: auto;
            max-width: auto;
        }

        .elementor-42 .elementor-element.elementor-element-bc7be78>.elementor-widget-container {
            margin: 0px 0px -23px 0px;
        }

        .elementor-bc-flex-widget .elementor-42 .elementor-element.elementor-element-459e823.elementor-column .elementor-widget-wrap {
            align-items: center;
        }

        .elementor-42 .elementor-element.elementor-element-459e823.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: center;
            align-items: center;
        }

        .elementor-42 .elementor-element.elementor-element-b179f4e .elementor-button .elementor-align-icon-right {
            margin-left: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-b179f4e .elementor-button .elementor-align-icon-left {
            margin-right: 0px;
        }

        .elementor-42 .elementor-element.elementor-element-b179f4e .elementor-button {
            font-family: "Lato", Sans-serif;
            font-size: 12px;
            font-weight: 500;
            background-color: #9F0515;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-nav-menu__toggle,
        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-nav-menu-icon {
            margin: 0 auto;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 li.menu-item a {
            justify-content: space-between;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 li .elementor-button-wrapper {
            text-align: space-between;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903.hfe-menu-item-flex-end li .elementor-button-wrapper {
            text-align: right;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 .elementor-menu-toggle,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            color: #000000;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown .menu-item a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
            background-color: #fff;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu a.hfe-sub-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-5b05903 .elementor-menu-toggle:hover,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-sub-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item:hover {
            color: #9F0515;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            font-size: 12px;
            font-weight: 400;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-menu-item {
            padding-left: 65px;
            padding-right: 65px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-sub-menu-item {
            padding-left: calc(65px + 20px);
            padding-right: 65px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown .menu-item ul ul a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown-expandible .menu-item ul ul a.hfe-sub-menu-item {
            padding-left: calc(65px + 40px);
            padding-right: 65px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown .menu-item ul ul ul a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown-expandible .menu-item ul ul ul a.hfe-sub-menu-item {
            padding-left: calc(65px + 60px);
            padding-right: 65px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown .menu-item ul ul ul ul a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown-expandible .menu-item ul ul ul ul a.hfe-sub-menu-item {
            padding-left: calc(65px + 80px);
            padding-right: 65px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            padding-top: 23px;
            padding-bottom: 23px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-nav-menu__layout-horizontal:not(.hfe-dropdown) ul.sub-menu,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-nav-menu__layout-expandible.menu-is-active,
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-nav-menu__layout-vertical:not(.hfe-dropdown) ul.sub-menu {
            margin-top: 11px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .hfe-dropdown.menu-is-active {
            margin-top: 11px;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 .sub-menu li.menu-item:not(:last-child),
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown li.menu-item:not(:last-child),
        .elementor-42 .elementor-element.elementor-element-5b05903 nav.hfe-dropdown-expandible li.menu-item:not(:last-child) {
            border-bottom-style: none;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 div.hfe-nav-menu-icon {
            color: #9F0515;
        }

        .elementor-42 .elementor-element.elementor-element-5b05903 div.hfe-nav-menu-icon svg {
            fill: #9F0515;
        }

        .elementor-42 .elementor-element.elementor-element-70961e7:not(.elementor-motion-effects-element-type-background),
        .elementor-42 .elementor-element.elementor-element-70961e7>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #010710;
        }

        .elementor-42 .elementor-element.elementor-element-70961e7 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-70961e7>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-9005363:not(.elementor-motion-effects-element-type-background)>.elementor-widget-wrap,
        .elementor-42 .elementor-element.elementor-element-9005363>.elementor-widget-wrap>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #000000;
        }

        .elementor-42 .elementor-element.elementor-element-9005363>.elementor-element-populated {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-9005363>.elementor-element-populated>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-26cb766:not(.elementor-motion-effects-element-type-background),
        .elementor-42 .elementor-element.elementor-element-26cb766>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #000000;
        }

        .elementor-42 .elementor-element.elementor-element-26cb766 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-26cb766>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-42 .elementor-element.elementor-element-8cdfb11 .elementor-heading-title {
            color: #FFFFFF;
            font-family: "Arial", Sans-serif;
            font-weight: 500;
        }

        .elementor-42 .elementor-element.elementor-element-15bbf57>.elementor-element-populated {
            text-align: center;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__toggle,
        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu-icon {
            margin: 0 auto;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 li.menu-item a {
            justify-content: space-between;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 li .elementor-button-wrapper {
            text-align: space-between;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987.hfe-menu-item-flex-end li .elementor-button-wrapper {
            text-align: right;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-wrapper .hfe-side {
            width: 300px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-open.left {
            left: -300px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-open.right {
            right: -300px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-content {
            padding: 30px;
            background-color: #FFFFFF;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item {
            padding-left: 15px;
            padding-right: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-sub-menu-item {
            padding-left: calc(15px + 20px);
            padding-right: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul a.hfe-sub-menu-item {
            padding-left: calc(15px + 40px);
            padding-right: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul ul a.hfe-sub-menu-item {
            padding-left: calc(15px + 60px);
            padding-right: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul ul ul a.hfe-sub-menu-item {
            padding-left: calc(15px + 80px);
            padding-right: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-sub-menu-item {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 a.hfe-sub-menu-item {
            font-family: "Arial", Sans-serif;
            font-weight: 200;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu a.hfe-sub-menu-item {
            color: #000000;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu a.hfe-sub-menu-item:hover,
        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item.current-menu-item a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item.highlighted,
        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item:focus {
            color: #5A0101;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 .elementor-menu-toggle,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            color: #FFFFFF;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown .menu-item a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown .menu-item a.hfe-sub-menu-item {
            background-color: #000000;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            font-family: "Arial", Sans-serif;
            font-weight: 200;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-sub-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-menu-item,
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu li.menu-item:not(:last-child),
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li.menu-item:not(:last-child),
        .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li.menu-item:not(:last-child) {
            border-bottom-style: none;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 div.hfe-nav-menu-icon {
            color: #5A0101;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 div.hfe-nav-menu-icon svg {
            fill: #5A0101;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-close {
            color: #4F0000;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-close svg {
            fill: #4F0000;
        }

        .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item.elementor-button {
            color: #FFFFFF;
            background-color: #000000;
            border-radius: 40px 40px 40px 40px;
        }

        :root {
            --page-title-display: none;
        }

        body.elementor-page-42 {
            padding: 0px 0px 0px 0px;
        }

        @media(min-width:768px) {
            .elementor-42 .elementor-element.elementor-element-62b49b3 {
                width: 15%;
            }

            .elementor-42 .elementor-element.elementor-element-ee4e58e {
                width: 35%;
            }

            .elementor-42 .elementor-element.elementor-element-b55408d {
                width: 23%;
            }

            .elementor-42 .elementor-element.elementor-element-459e823 {
                width: 15%;
            }

            .elementor-42 .elementor-element.elementor-element-ca305d3 {
                width: 12%;
            }
        }

        @media(max-width:1024px) {
            .elementor-42 .elementor-element.elementor-element-bc7be78 {
                font-size: 12px;
            }

            .elementor-42 .elementor-element.elementor-element-b179f4e .elementor-button {
                font-size: 10px;
            }
        }

        @media(max-width:767px) {
            .elementor-42 .elementor-element.elementor-element-b179f4e .elementor-button {
                font-size: 9px;
                line-height: 2em;
            }

            .elementor-42 .elementor-element.elementor-element-70961e7 {
                margin-top: 0px;
                margin-bottom: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-9005363>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-26cb766 {
                margin-top: -5px;
                margin-bottom: 5px;
                padding: 5px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-2e667e9 {
                width: 18%;
            }

            .elementor-bc-flex-widget .elementor-42 .elementor-element.elementor-element-2e667e9.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-2e667e9.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-2e667e9>.elementor-element-populated {
                margin: 0px 0px 0px -5px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: -5px;
            }

            .elementor-42 .elementor-element.elementor-element-1a885b1 img {
                width: 75%;
            }

            .elementor-42 .elementor-element.elementor-element-1a885b1>.elementor-widget-container {
                margin: -1px -4px 0px 5px;
            }

            .elementor-42 .elementor-element.elementor-element-798bc32 {
                width: 45%;
            }

            .elementor-bc-flex-widget .elementor-42 .elementor-element.elementor-element-798bc32.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-798bc32.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-798bc32>.elementor-element-populated {
                margin: 10px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-42 .elementor-element.elementor-element-8cdfb11 {
                text-align: left;
            }

            .elementor-42 .elementor-element.elementor-element-8cdfb11 .elementor-heading-title {
                font-size: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-8cdfb11>.elementor-widget-container {
                margin: -3px 0px 0px -15px;
            }

            .elementor-42 .elementor-element.elementor-element-2e3a611 {
                width: 19%;
            }

            .elementor-42 .elementor-element.elementor-element-15bbf57 {
                width: 18%;
            }

            .elementor-bc-flex-widget .elementor-42 .elementor-element.elementor-element-15bbf57.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-15bbf57.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-42 .elementor-element.elementor-element-15bbf57>.elementor-element-populated {
                margin: 0px 0px 0px 5px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 5px;
                padding: -1px 0px 0px 0px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__toggle,
            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu-icon {
                margin: 0 auto;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 li.menu-item a {
                justify-content: space-between;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 li .elementor-button-wrapper {
                text-align: space-between;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987.hfe-menu-item-flex-end li .elementor-button-wrapper {
                text-align: right;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-wrapper .hfe-side {
                width: 200px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-open.left {
                left: -200px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-open.right {
                right: -200px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-content {
                padding: 10px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item {
                padding-left: 15px;
                padding-right: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-sub-menu-item {
                padding-left: calc(15px + 20px);
                padding-right: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul a.hfe-sub-menu-item {
                padding-left: calc(15px + 40px);
                padding-right: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul ul a.hfe-sub-menu-item {
                padding-left: calc(15px + 60px);
                padding-right: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu__layout-vertical .menu-item ul ul ul ul a.hfe-sub-menu-item {
                padding-left: calc(15px + 80px);
                padding-right: 15px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-sub-menu-item {
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-flyout-wrapper .hfe-nav-menu>li.menu-item:first-child {
                margin-top: 0px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 a.hfe-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 a.hfe-sub-menu-item {
                font-size: 13px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu li a.hfe-sub-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-sub-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li a.hfe-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-menu-item,
            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li a.hfe-sub-menu-item {
                font-size: 10px;
                line-height: 0.8em;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu li.menu-item:first-child {
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .sub-menu li.menu-item:last-child {
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li.menu-item:first-child {
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown li.menu-item:last-child {
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible {
                border-radius: 10px 10px 10px 10px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li.menu-item:first-child {
                border-top-left-radius: 10px;
                border-top-right-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 nav.hfe-dropdown-expandible li.menu-item:last-child {
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                overflow: hidden;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu-icon {
                font-size: 20px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .hfe-nav-menu-icon svg {
                font-size: 20px;
                line-height: 20px;
                height: 20px;
                width: 20px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987 .menu-item a.hfe-menu-item.elementor-button {
                padding: 10px 25px 10px 25px;
            }

            .elementor-42 .elementor-element.elementor-element-56b0987>.elementor-widget-container {
                margin: -7px 0px -12px 0px;
                padding: 8px 8px 8px 8px;
            }
        }

        /* Start custom CSS */
        .cp {
            margin-top: -100px
        }

        /* End custom CSS */
        .elementor-220 .elementor-element.elementor-element-37a05191:not(.elementor-motion-effects-element-type-background),
        .elementor-220 .elementor-element.elementor-element-37a05191>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #010710;
        }

        .elementor-220 .elementor-element.elementor-element-37a05191 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 70px 0px 20px 0px;
        }

        .elementor-220 .elementor-element.elementor-element-37a05191>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        .elementor-220 .elementor-element.elementor-element-5b6aa10f>.elementor-element-populated {
            margin: 0px 80px 0px 0px;
            --e-column-margin-right: 80px;
            --e-column-margin-left: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-472f2f7 img {
            width: 24%;
        }

        .elementor-220 .elementor-element.elementor-element-6ee9cfc9 {
            color: rgba(255, 255, 255, 0.65);
            font-size: 14px;
            font-weight: 300;
        }

        .elementor-bc-flex-widget .elementor-220 .elementor-element.elementor-element-e48dd77.elementor-column .elementor-widget-wrap {
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-e48dd77.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-2b73d642 {
            text-align: left;
        }

        .elementor-220 .elementor-element.elementor-element-2b73d642 .elementor-heading-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }

        body.rtl .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }

        body:not(.rtl) .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-199a482c {
            --e-icon-list-icon-size: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-text {
            color: rgba(255, 255, 255, 0.38);
            padding-left: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>a {
            font-size: 14px;
            font-weight: 300;
        }

        .elementor-bc-flex-widget .elementor-220 .elementor-element.elementor-element-675387de.elementor-column .elementor-widget-wrap {
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-675387de.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-2ddec2d1 {
            text-align: left;
        }

        .elementor-220 .elementor-element.elementor-element-2ddec2d1 .elementor-heading-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }

        body.rtl .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }

        body:not(.rtl) .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 {
            --e-icon-list-icon-size: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-text {
            color: rgba(255, 255, 255, 0.38);
            padding-left: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>a {
            font-size: 14px;
            font-weight: 300;
        }

        .elementor-bc-flex-widget .elementor-220 .elementor-element.elementor-element-1e5083d5.elementor-column .elementor-widget-wrap {
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-1e5083d5.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
            align-content: flex-start;
            align-items: flex-start;
        }

        .elementor-220 .elementor-element.elementor-element-7cf51d79 {
            text-align: left;
        }

        .elementor-220 .elementor-element.elementor-element-7cf51d79 .elementor-heading-title {
            color: #ffffff;
            font-size: 18px;
            font-weight: 500;
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:last-child) {
            padding-bottom: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items:not(.elementor-inline-items) .elementor-icon-list-item:not(:first-child) {
            margin-top: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item {
            margin-right: calc(5px/2);
            margin-left: calc(5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items.elementor-inline-items {
            margin-right: calc(-5px/2);
            margin-left: calc(-5px/2);
        }

        body.rtl .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            left: calc(-5px/2);
        }

        body:not(.rtl) .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-items.elementor-inline-items .elementor-icon-list-item:after {
            right: calc(-5px/2);
        }

        .elementor-220 .elementor-element.elementor-element-31382513 {
            --e-icon-list-icon-size: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-text {
            color: rgba(255, 255, 255, 0.38);
            padding-left: 0px;
        }

        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>.elementor-icon-list-text,
        .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>a {
            font-size: 14px;
            font-weight: 300;
        }

        .elementor-220 .elementor-element.elementor-element-72aba41:not(.elementor-motion-effects-element-type-background),
        .elementor-220 .elementor-element.elementor-element-72aba41>.elementor-motion-effects-container>.elementor-motion-effects-layer {
            background-color: #010710;
        }

        .elementor-220 .elementor-element.elementor-element-72aba41 {
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
        }

        .elementor-220 .elementor-element.elementor-element-72aba41>.elementor-background-overlay {
            transition: background 0.3s, border-radius 0.3s, opacity 0.3s;
        }

        @media(max-width:1024px) {
            .elementor-220 .elementor-element.elementor-element-37a05191 {
                padding: 50px 20px 50px 20px;
            }

            .elementor-220 .elementor-element.elementor-element-5b6aa10f>.elementor-element-populated {
                margin: 0% 15% 0% 0%;
                --e-column-margin-right: 15%;
                --e-column-margin-left: 0%;
            }

            .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>a {
                font-size: 13px;
            }

            .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>a {
                font-size: 13px;
            }

            .elementor-220 .elementor-element.elementor-element-1e5083d5>.elementor-element-populated {
                margin: 0px 0px 0px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
            }

            .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>a {
                font-size: 13px;
            }
        }

        @media(max-width:767px) {
            .elementor-220 .elementor-element.elementor-element-37a05191 {
                padding: 35px 20px 35px 20px;
            }

            .elementor-220 .elementor-element.elementor-element-5b6aa10f>.elementor-element-populated {
                margin: 0px 0px 50px 0px;
                --e-column-margin-right: 0px;
                --e-column-margin-left: 0px;
                padding: 0px 0px 0px 0px;
            }

            .elementor-220 .elementor-element.elementor-element-6ee9cfc9 {
                text-align: left;
            }

            .elementor-220 .elementor-element.elementor-element-e48dd77 {
                width: 33%;
            }

            .elementor-220 .elementor-element.elementor-element-e48dd77>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-220 .elementor-element.elementor-element-2b73d642 {
                text-align: left;
            }

            .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-199a482c .elementor-icon-list-item>a {
                font-size: 13px;
            }

            .elementor-220 .elementor-element.elementor-element-675387de {
                width: 33%;
            }

            .elementor-220 .elementor-element.elementor-element-675387de>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-220 .elementor-element.elementor-element-2ddec2d1 {
                text-align: left;
            }

            .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-66af1e32 .elementor-icon-list-item>a {
                font-size: 13px;
            }

            .elementor-220 .elementor-element.elementor-element-1e5083d5 {
                width: 33%;
            }

            .elementor-220 .elementor-element.elementor-element-1e5083d5>.elementor-element-populated {
                padding: 0px 0px 0px 0px;
            }

            .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>.elementor-icon-list-text,
            .elementor-220 .elementor-element.elementor-element-31382513 .elementor-icon-list-item>a {
                font-size: 13px;
            }

            .elementor-bc-flex-widget .elementor-220 .elementor-element.elementor-element-06e5d61.elementor-column .elementor-widget-wrap {
                align-items: center;
            }

            .elementor-220 .elementor-element.elementor-element-06e5d61.elementor-column.elementor-element[data-element_type="column"]>.elementor-widget-wrap.elementor-element-populated {
                align-content: center;
                align-items: center;
            }

            .elementor-220 .elementor-element.elementor-element-06e5d61.elementor-column>.elementor-widget-wrap {
                justify-content: center;
            }

            .elementor-220 .elementor-element.elementor-element-06e5d61>.elementor-widget-wrap>.elementor-widget:not(.elementor-widget__width-auto):not(.elementor-widget__width-initial):not(:last-child):not(.elementor-absolute) {
                margin-bottom: 0px;
            }
        }

        @media(min-width:768px) {
            .elementor-220 .elementor-element.elementor-element-5b6aa10f {
                width: 40%;
            }

            .elementor-220 .elementor-element.elementor-element-e48dd77 {
                width: 20%;
            }

            .elementor-220 .elementor-element.elementor-element-675387de {
                width: 20%;
            }

            .elementor-220 .elementor-element.elementor-element-1e5083d5 {
                width: 20%;
            }

            .elementor-220 .elementor-element.elementor-element-2bc3716 {
                width: 15%;
            }

            .elementor-220 .elementor-element.elementor-element-06e5d61 {
                width: 70%;
            }

            .elementor-220 .elementor-element.elementor-element-5895442 {
                width: 14.561%;
            }
        }

        @media(max-width:1024px) and (min-width:768px) {
            .elementor-220 .elementor-element.elementor-element-5b6aa10f {
                width: 35%;
            }

            .elementor-220 .elementor-element.elementor-element-e48dd77 {
                width: 20%;
            }

            .elementor-220 .elementor-element.elementor-element-675387de {
                width: 20%;
            }

            .elementor-220 .elementor-element.elementor-element-1e5083d5 {
                width: 20%;
            }
        }
    </style>
    <link rel='stylesheet' id='swiper-css'
        href='../css/swiper.min48f5.css' media='all' />
    <link rel='stylesheet' id='elementor-pro-css'
        href='../css/frontend.minac9e.css' media='all' />
    <link rel='stylesheet' id='font-awesome-5-all-css'
        href='../css/all.min2dc8.css' media='all' />
    <link rel='stylesheet' id='font-awesome-4-shim-css'
        href='../css/v4-shims.min5900.css' media='all' />
    <link rel='stylesheet' id='she-header-style-css'
        href='../css/she-header-style2846.css'
        media='all' />
    <link rel='stylesheet' id='hfe-widgets-style-css'
        href='../css/frontend1f62.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-ekiticons-css'
        href='../css/ekiticons1102.css'
        media='all' />
    <link rel='stylesheet' id='cp-base-css'
        href='../css/cp_base6a4d.css' media='all' />
    <link rel='stylesheet' id='cp-light-css'
        href='../css/cp_light6a4d.css' media='all' />
    <link rel='stylesheet' id='ekit-widget-styles-css'
        href='../css/widget-styles1102.css'
        media='all' />
    <link rel='stylesheet' id='ekit-responsive-css'
        href='../css/responsive1102.css' media='all' />
    <link rel='stylesheet' id='eael-general-css'
        href='../css/general.min7e15.css'
        media='all' />
    <link rel='stylesheet' id='um_fonticons_ii-css'
        href='../css/um-fonticons-ii21bb.css' media='all' />
    <link rel='stylesheet' id='um_fonticons_fa-css'
        href='../css/um-fonticons-fa21bb.css' media='all' />
    <link rel='stylesheet' id='select2-css'
        href='../css/select2.min4819.css' media='all' />
    <link rel='stylesheet' id='um_crop-css'
        href='../css/um-crop21bb.css' media='all' />
    <link rel='stylesheet' id='um_modal-css'
        href='../css/um-modal21bb.css' media='all' />
    <link rel='stylesheet' id='um_styles-css'
        href='../css/um-styles21bb.css' media='all' />
    <link rel='stylesheet' id='um_profile-css'
        href='../css/um-profile21bb.css' media='all' />
    <link rel='stylesheet' id='um_account-css'
        href='../css/um-account21bb.css' media='all' />
    <link rel='stylesheet' id='um_misc-css'
        href='../css/um-misc21bb.css' media='all' />
    <link rel='stylesheet' id='um_fileupload-css'
        href='../css/um-fileupload21bb.css' media='all' />
    <link rel='stylesheet' id='um_datetime-css'
        href='./css/pickadate/default21bb.css' media='all' />
    <link rel='stylesheet' id='um_datetime_date-css'
        href='../css/pickadate/default.date21bb.css' media='all' />
    <link rel='stylesheet' id='um_datetime_time-css'
        href='../css/pickadate/default.time21bb.css' media='all' />
    <link rel='stylesheet' id='um_raty-css'
        href='../css/um-raty21bb.css' media='all' />
    <link rel='stylesheet' id='um_scrollbar-css'
        href='../css/simplebar21bb.css' media='all' />
    <link rel='stylesheet' id='um_tipsy-css'
        href='../css/um-tipsy21bb.css' media='all' />
    <link rel='stylesheet' id='um_responsive-css'
        href='../css/um-responsive21bb.css' media='all' />
    <link rel='stylesheet' id='um_default_css-css'
        href='../css/um-old-default21bb.css' media='all' />
    <link rel='stylesheet' id='google-fonts-1-css'
        href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CLato%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPoppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CMontserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.1.1'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-shared-0-css'
        href='../css/fontawesome.min52d5.css'
        media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-solid-css'
        href='../css/solid.min52d5.css' media='all' />
    <link rel='stylesheet' id='elementor-icons-fa-regular-css'
        href='../css/regular.min52d5.css' media='all' />
    <link rel='stylesheet' id='jetpack_css-css' href='../css/jetpack0264.css'
        media='all' />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src='../js/jquery.mina7a0.js' id='jquery-core-js'></script>
    <script src='../js/jquery-migrate.mind617.js' id='jquery-migrate-js'></script>
    <!--[if IE]>
<script src='wp-content/themes/astra/assets/js/minified/flexibility.min.js?ver=4.0.2' id='astra-flexibility-js'></script>
<script id='astra-flexibility-js-after'>
flexibility(document.documentElement);
</script>
<![endif]-->
    <script src='../js/v4-shims.min5900.js'
        id='font-awesome-4-shim-js'></script>
    <script src='../js/she-header2846.js'
        id='she-header-js'></script>
    <script src='../js/um-gdpr.min21bb.js' id='um-gdpr-js'></script>
    <link rel="https://api.w.org/" href="wp-json/index.html" />
    <link rel="alternate" type="application/json" href="../js/27.json" />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="wp-includes/wlwmanifest.html" />
    <meta name="generator" content="WordPress 6.1.1" />
    <link rel='shortlink' href='index.html' />
    <link rel="alternate" type="application/json+oembed"
        href="../js/embedbdeb.json" />
    <link rel="alternate" type="text/xml+oembed"
        href="wp-json/oembed/1.0/embed2267?url=https%3A%2F%2Fcron-metal.com%2F&amp;format=xml" />
    <style type='text/css'>
        .ae_data .elementor-editor-element-setting {
            display: none !important;
        }
    </style>
    <style type="text/css">
        .um_request_name {
            display: none !important;
        }
    </style>
    <style>
        img#wpstats {
            display: none
        }
    </style>
    <!-- HappyForms global container -->
    <script type="text/javascript">HappyForms = {};</script>
    <!-- End of HappyForms global container -->
    <meta name="generator"
        content="Elementor 3.11.1; features: e_dom_optimization, e_optimized_assets_loading, a11y_improvements; settings: css_print_method-internal, google_font-enabled, font_display-auto">
    <style>
        .recentcomments a {
            display: inline !important;
            padding: 0 !important;
            margin: 0 !important;
        }
    </style>
    
    <style id="wp-custom-css">
        .cp-logout {
            display: none;
        }

        .cp-username {
            display: none
        }

        .cp {
            padding-top: 0px margin: 0px 0px 0px 0;
        }
    </style>
</head>

<body data-rsssl=1 itemtype='https://schema.org/WebPage' itemscope='itemscope'
    class="home page-template page-template-elementor_header_footer page page-id-27 wp-custom-logo ehf-header ehf-template-astra ehf-stylesheet-astra ast-desktop ast-page-builder-template ast-no-sidebar astra-4.0.2 ast-single-post ast-inherit-site-logo-transparent ast-hfb-header elementor-default elementor-template-full-width elementor-kit-37 elementor-page elementor-page-27">
    <!--
<iframe src="https://widget.coinlib.io/widget?type=horizontal_v2&theme=dark&pref_coin_id=1505&invert_hover=" width="100%" height="36px" scrolling="auto" marginwidth="0" marginheight="0" frameborder="0" border="0" style="border:0;margin:0;padding:0;"></iframe>
-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-dark-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0.49803921568627" />
                    <feFuncG type="table" tableValues="0 0.49803921568627" />
                    <feFuncB type="table" tableValues="0 0.49803921568627" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-grayscale">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-red">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 1" />
                    <feFuncG type="table" tableValues="0 0.27843137254902" />
                    <feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-midnight">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0 0" />
                    <feFuncG type="table" tableValues="0 0.64705882352941" />
                    <feFuncB type="table" tableValues="0 1" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-magenta-yellow">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.78039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.94901960784314" />
                    <feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-purple-green">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
                    <feFuncG type="table" tableValues="0 1" />
                    <feFuncB type="table" tableValues="0.44705882352941 0.4" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none"
        style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
        <defs>
            <filter id="wp-duotone-blue-orange">
                <feColorMatrix color-interpolation-filters="sRGB" type="matrix"
                    values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
                <feComponentTransfer color-interpolation-filters="sRGB">
                    <feFuncR type="table" tableValues="0.098039215686275 1" />
                    <feFuncG type="table" tableValues="0 0.66274509803922" />
                    <feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
                    <feFuncA type="table" tableValues="1 1" />
                </feComponentTransfer>
                <feComposite in2="SourceGraphic" operator="in" />
            </filter>
        </defs>
    </svg>
    <a class="skip-link screen-reader-text" href="#content" role="link" title="Skip to content">
        Skip to content</a>




    <div class="hfeed site" id="page">
        <header id="masthead" itemscope="itemscope" itemtype="https://schema.org/WPHeader">
            <p class="main-title bhf-hidden" itemprop="headline"><a href="/" title=""
                    rel="home"><b>Notchchainfx.live</b></a></p>
            <div data-elementor-type="wp-post" data-elementor-id="42" class="elementor elementor-42">
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-3470259 she-header-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="3470259" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:60,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-99bb8cc"
                            data-id="99bb8cc" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-f7f0270 elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="f7f0270" data-element_type="section">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-62b49b3"
                                            data-id="62b49b3" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-bf29411 elementor-widget elementor-widget-image"
                                                    data-id="bf29411" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                       <a href=""><b>NOTCHCHAIN FX</b></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-ee4e58e"
                                            data-id="ee4e58e" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-b55408d"
                                            data-id="b55408d" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-bc7be78 elementor-widget__width-auto elementor-widget elementor-widget-text-editor"
                                                    data-id="bc7be78" data-element_type="widget"
                                                    data-widget_type="text-editor.default">
                                                    <div class="elementor-widget-container">
                                                        <p><a href="../about.php">About</a>       
                                                                       <a
                                                                href="../contact.php">Contact</a>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--<div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-459e823"
                                            data-id="459e823" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-b179f4e elementor-mobile-align-center elementor-widget elementor-widget-button"
                                                    data-id="b179f4e" data-element_type="widget"
                                                    data-widget_type="button.default">
                                                    <div class="elementor-widget-container">
                                                       <!-- <div class="elementor-button-wrapper">
                                                            <a href="https://blockexchange.live#plan"
                                                                class="elementor-button-link elementor-button elementor-size-xs"
                                                                role="button">
                                                                <span class="elementor-button-content-wrapper">
                                                                    <span class="elementor-button-text">Promo
                                                                        Plans</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>-->
                                        <div class="elementor-column elementor-col-20 elementor-inner-column elementor-element elementor-element-ca305d3"
                                            data-id="ca305d3" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-5b05903 hfe-menu-item-space-between hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                    data-id="5b05903" data-element_type="widget"
                                                    data-settings="{&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:65,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:23,&quot;sizes&quot;:[]},&quot;distance_from_menu&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:11,&quot;sizes&quot;:[]},&quot;hamburger_align&quot;:&quot;center&quot;,&quot;hamburger_menu_align&quot;:&quot;space-between&quot;,&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;distance_from_menu_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                                    data-widget_type="navigation-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="hfe-nav-menu hfe-layout-expandible hfe-nav-menu-layout expandible"
                                                            data-layout="expandible">
                                                            <div class="hfe-nav-menu__toggle elementor-clickable">
                                                                <div class="hfe-nav-menu-icon">
                                                                    <i aria-hidden="true" tabindex="0"
                                                                        class="icon icon-burger-menu"></i>
                                                                </div>
                                                            </div>
                                                            <nav class="hfe-dropdown-expandible hfe-nav-menu__layout-expandible hfe-nav-menu__submenu-arrow"
                                                                data-toggle-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;icon icon-burger-menu&quot;&gt;&lt;/i&gt;"
                                                                data-close-icon="&lt;i aria-hidden=&quot;true&quot; tabindex=&quot;0&quot; class=&quot;far fa-window-close&quot;&gt;&lt;/i&gt;"
                                                                data-full-width="yes">
                                                                <ul id="menu-1-5b05903" class="hfe-nav-menu">
                                                                    <li id="menu-item-20"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                        <a href="../about.php"
                                                                            class="hfe-menu-item">About</a></li>
                                                                            
                                                                    <li id="menu-item-820"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                        <a href="../login.php" class="hfe-menu-item">Login</a>
                                                                    </li>
                                                                    <li id="menu-item-819"
                                                                        class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                        <a href="../register.php"
                                                                            class="hfe-menu-item">Register</a></li>
                                                                </ul>
                                                            </nav>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
                <section
                    class="elementor-section elementor-top-section elementor-element elementor-element-70961e7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="70961e7" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9005363"
                            data-id="9005363" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <section
                                    class="elementor-section elementor-inner-section elementor-element elementor-element-26cb766 elementor-hidden-desktop elementor-hidden-tablet she-header-yes elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                    data-id="26cb766" data-element_type="section"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;transparent&quot;:&quot;yes&quot;,&quot;transparent_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;scroll_distance&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:60,&quot;sizes&quot;:[]},&quot;scroll_distance_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;scroll_distance_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2e667e9"
                                            data-id="2e667e9" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-1a885b1 elementor-widget elementor-widget-image"
                                                    data-id="1a885b1" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-798bc32"
                                            data-id="798bc32" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8cdfb11 elementor-widget elementor-widget-heading"
                                                    data-id="8cdfb11" data-element_type="widget"
                                                    data-widget_type="heading.default">
                                                    <div class="elementor-widget-container">
                                                        <h2 class="elementor-heading-title elementor-size-default">
                                                            <b>NOTCHCHAIN FX</b></h2>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2e3a611"
                                            data-id="2e3a611" data-element_type="column">
                                            <div class="elementor-widget-wrap">
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-15bbf57"
                                            data-id="15bbf57" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-56b0987 hfe-menu-item-space-between hfe-menu-item-space-between hfe-submenu-icon-arrow hfe-link-redirect-child elementor-widget elementor-widget-navigation-menu"
                                                    data-id="56b0987" data-element_type="widget"
                                                    data-settings="{&quot;dropdown_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;10&quot;,&quot;right&quot;:&quot;10&quot;,&quot;bottom&quot;:&quot;10&quot;,&quot;left&quot;:&quot;10&quot;,&quot;isLinked&quot;:true},&quot;hamburger_align_mobile&quot;:&quot;center&quot;,&quot;hamburger_menu_align_mobile&quot;:&quot;space-between&quot;,&quot;width_flyout_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:200,&quot;sizes&quot;:[]},&quot;padding_flyout_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;menu_top_space_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;toggle_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:20,&quot;sizes&quot;:[]},&quot;padding_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;10&quot;,&quot;right&quot;:&quot;25&quot;,&quot;bottom&quot;:&quot;10&quot;,&quot;left&quot;:&quot;25&quot;,&quot;isLinked&quot;:false},&quot;hamburger_align&quot;:&quot;center&quot;,&quot;hamburger_menu_align&quot;:&quot;space-between&quot;,&quot;width_flyout_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:300,&quot;sizes&quot;:[]},&quot;width_flyout_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_flyout_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;padding_flyout_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_horizontal_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_menu_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_top_space&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;menu_top_space_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;dropdown_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;dropdown_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_horizontal_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_horizontal_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding_vertical_dropdown_item_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_width_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;toggle_border_radius_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;close_flyout_size&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;close_flyout_size_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;close_flyout_size_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;padding&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true},&quot;padding_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;top&quot;:&quot;&quot;,&quot;right&quot;:&quot;&quot;,&quot;bottom&quot;:&quot;&quot;,&quot;left&quot;:&quot;&quot;,&quot;isLinked&quot;:true}}"
                                                    data-widget_type="navigation-menu.default">
                                                    <div class="elementor-widget-container">
                                                        <div class="hfe-nav-menu__toggle elementor-clickable hfe-flyout-trigger"
                                                            tabindex="0">
                                                            <div class="hfe-nav-menu-icon">
                                                                <i aria-hidden="true" tabindex="0"
                                                                    class="icon icon-burger-menu"></i>
                                                            </div>
                                                        </div>
                                                        <div class="hfe-flyout-wrapper" data-last-item="cta">
                                                            <div class="hfe-flyout-overlay elementor-clickable"></div>
                                                            <div class="hfe-flyout-container">
                                                                <div id="hfe-flyout-content-id-56b0987"
                                                                    class="hfe-side hfe-flyout-right hfe-flyout-open"
                                                                    data-layout="right" data-flyout-type="normal">
                                                                    <div class="hfe-flyout-content push">
                                                                        <nav>
                                                                            <ul id="menu-1-56b0987"
                                                                                class="hfe-nav-menu">
                                                                                <li id="menu-item-20"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                                    <a href="../about.php"
                                                                                        class="hfe-menu-item">About</a>
                                                                                </li>
                                                                                
                                                                                <li id="menu-item-820"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                                    <a href="../login.php"
                                                                                        class="hfe-menu-item">Login</a>
                                                                                </li>
                                                                                <li id="menu-item-819"
                                                                                    class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu">
                                                                                    <a href="../register.php"
                                                                                        class="hfe-menu-item">Register</a>
                                                                                </li>
                                                                            </ul>
                                                                        </nav>
                                                                        <div class="elementor-clickable hfe-flyout-close"
                                                                            tabindex="0">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </header>

        <div id="content" class="site-content">
            <div class="ast-container">
                <div data-elementor-type="wp-page" data-elementor-id="27" class="elementor elementor-27">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-c3673e1 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="c3673e1" data-element_type="section" id="up"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-narrow">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-1dfb094"
                                data-id="1dfb094" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-728ef77 elementor-widget elementor-widget-heading"
                                        data-id="728ef77" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">The world's
                                                safest way to invest</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c507b82 elementor-widget elementor-widget-text-editor"
                                        data-id="c507b82" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Trusted by many since 2016 with over $13billion in trade profits.</p>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-bf062f6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="bf062f6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-d6aa1a2"
                                                data-id="d6aa1a2" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-43ceaf1 elementor-mobile-align-left elementor-widget elementor-widget-button"
                                                        data-id="43ceaf1" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="../register.php"
                                                                    class="elementor-button-link elementor-button elementor-size-lg"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-text">Get
                                                                            Started!</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-9b8cafc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="9b8cafc" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-51413c0"
                                                data-id="51413c0" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d5c9397 elementor-mobile-align-left elementor-widget elementor-widget-button"
                                                        data-id="d5c9397" data-element_type="widget"
                                                        data-widget_type="button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-button-wrapper">
                                                                <a href="../login.php"
                                                                    class="elementor-button-link elementor-button elementor-size-lg"
                                                                    role="button">
                                                                    <span class="elementor-button-content-wrapper">
                                                                        <span
                                                                            class="elementor-button-icon elementor-align-icon-right">
                                                                            <i aria-hidden="true"
                                                                                class="fas fa-arrow-circle-right"></i>
                                                                        </span>
                                                                        
                                                                        <span class="elementor-button-text">Login</span>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-544b2f1"
                                data-id="544b2f1" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-3857d19 elementor-invisible elementor-widget elementor-widget-image"
                                        data-id="3857d19" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;bounceIn&quot;,&quot;_animation_delay&quot;:100,&quot;_animation_mobile&quot;:&quot;bounceIn&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="337" height="252"
                                                src="../images/site-thumbnail-e1632164888325.png" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-54499b2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="54499b2" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-f9c2daa"
                                data-id="f9c2daa" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a8529b9 elementor-view-default elementor-vertical-align-top elementor-widget elementor-widget-icon-box"
                                        data-id="a8529b9" data-element_type="widget"
                                        data-widget_type="icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-icon-box-wrapper">
                                                <div class="elementor-icon-box-content">
                                                    <h3 class="elementor-icon-box-title">
                                                        <span>
                                                            Automatic order processing </span>
                                                    </h3>
                                                    <p class="elementor-icon-box-description">
                                                        Your crypto is securely and instantly delivered to your personal
                                                        wallet. </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-15fd4b3 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="15fd4b3" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b2c885e"
                                data-id="b2c885e" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-c7f85cf"
                                data-id="c7f85cf" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-0f31f27 elementor-widget elementor-widget-image"
                                        data-id="0f31f27" data-element_type="widget" data-widget_type="image.default">

                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d32559a"
                                    data-id="d32559a" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e642ca6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e642ca6" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-00fa71d"
                                data-id="00fa71d" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-e8d741c"
                                data-id="e8d741c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-76fd4d4 elementor-widget elementor-widget-heading"
                                        data-id="76fd4d4" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">We accept</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-442759b elementor-widget elementor-widget-image-carousel"
                                        data-id="442759b" data-element_type="widget"
                                        data-settings="{&quot;navigation&quot;:&quot;none&quot;,&quot;autoplay_speed&quot;:500,&quot;slides_to_show_mobile&quot;:&quot;5&quot;,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;speed&quot;:500,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="image-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-carousel-wrapper swiper-container" dir="ltr">
                                                <div class="elementor-image-carousel swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="../images/sepa.png" alt="sepa" width="70px" />
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="../images/visa.png" alt="visa" width="70px" />
                                                        </figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="../images/klarma.png"
                                                                alt="klarma" width="70px" /></figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="swiper-slide-inner"><img decoding="async"
                                                                class="swiper-slide-image"
                                                                src="../images/master-card.png"
                                                                alt="master card" width="70px"/></figure>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <figure class="swiper-slide-inner">
                                                            <img decoding="async" class="swiper-slide-image"
                                                                src="../images/neteller.png"
                                                                alt="neteller" width="70px" />
                                                        </figure>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-45612ce"
                                data-id="45612ce" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e835758 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="e835758" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-62af937"
                                data-id="62af937" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-dfff78a elementor-widget elementor-widget-shortcode"
                                        data-id="dfff78a" data-element_type="widget"
                                        data-widget_type="shortcode.default">
                                        <div class="elementor-widget-container">




                                            <div class="elementor-shortcode"><!-- Cryptocurrency Price Widget -->
                                                <script>!function () { var e = document.getElementsByTagName("script"), t = e[e.length - 1], n = document.createElement("script"); function r() { var e = crCryptocoinPriceWidget.init({ base: "USD,EUR,CNY,GBP", items: "BTC,ETH,LTC,XMR,DASH", backgroundColor: "000000", streaming: "1", rounded: "1", boxShadow: "1", border: "1" }); t.parentNode.insertBefore(e, t) } n.src = "/co-in.io/widget/pricelist721e.js?items=BTC%2CETH%2CLTC%2CXMR%2CDASH", n.async = !0, n.readyState ? n.onreadystatechange = function () { "loaded" != n.readyState && "complete" != n.readyState || (n.onreadystatechange = null, r()) } : n.onload = function () { r() }, t.parentNode.insertBefore(n, null) }();</script>
                                                <a href="https://currencyrate.today/" rel="noopener"
                                                    target="_blank">CurrencyRate.Today</a><!-- /Cryptocurrency Price Widget -->
                                            </div>
                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-25f37f27 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="25f37f27" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1f252ad4"
                                data-id="1f252ad4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-10d2e97b elementor-widget elementor-widget-spacer"
                                        data-id="10d2e97b" data-element_type="widget" data-widget_type="spacer.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-spacer">
                                                <div class="elementor-spacer-inner"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-6382e8f5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="6382e8f5" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-f4f1daf elementor-invisible"
                                data-id="f4f1daf" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;slideInLeft&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-106b41e elementor-widget elementor-widget-image"
                                        data-id="106b41e" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6e800699 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                        data-id="6e800699" data-element_type="widget"
                                        data-widget_type="elementskit-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con"> <!-- link opening -->
                                                <!-- end link opening -->

                                                <div
                                                    class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-   ">
                                                    <div class="box-body">
                                                        <h3 class="elementskit-info-box-title">
                                                            Global Coverage </h3>
                                                        <p>As one of the leading companies in the financial market, we
                                                            have been able to operate in different countries globally.
                                                        </p>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-21c0538c elementor-invisible"
                                data-id="21c0538c" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;slideInRight&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8c5a899 elementor-widget elementor-widget-image"
                                        data-id="8c5a899" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3f3a3a24 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                        data-id="3f3a3a24" data-element_type="widget"
                                        data-widget_type="elementskit-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con"> <!-- link opening -->
                                                <a href="#" target="_self" rel="" class="ekit_global_links">
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Extreme security </h3>
                                                            <p>Trust is our currency. We are committed to the security
                                                                of your money and the protection of your account. That
                                                                is how we earn your trust.</p>
                                                        </div>


                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-6c2166a7 elementor-invisible"
                                data-id="6c2166a7" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;slideInLeft&quot;,&quot;animation_delay&quot;:&quot;200&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-06bd17d elementor-widget elementor-widget-image"
                                        data-id="06bd17d" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">

                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-71abe2a8 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                        data-id="71abe2a8" data-element_type="widget"
                                        data-widget_type="elementskit-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con"> <!-- link opening -->
                                                <a href="#" target="_self" rel="" class="ekit_global_links">
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                Great advices </h3>
                                                            <p>We provide experts who are ready to give the best trading
                                                                advices</p>
                                                        </div>


                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-752e7030 elementor-invisible"
                                data-id="752e7030" data-element_type="column"
                                data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;,&quot;animation_delay&quot;:&quot;200&quot;,&quot;background_background&quot;:&quot;classic&quot;,&quot;animation_mobile&quot;:&quot;slideInRight&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-56b8324 elementor-widget elementor-widget-image"
                                        data-id="56b8324" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">


                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-54d03af4 ekit-equal-height-disable elementor-widget elementor-widget-elementskit-icon-box"
                                        data-id="54d03af4" data-element_type="widget"
                                        data-widget_type="elementskit-icon-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con"> <!-- link opening -->
                                                <a href="#" target="_self" rel="" class="ekit_global_links">
                                                    <!-- end link opening -->

                                                    <div
                                                        class="elementskit-infobox text-center text- icon-lef-right-aligin elementor-animation-   ">
                                                        <div class="box-body">
                                                            <h3 class="elementskit-info-box-title">
                                                                24/7 Customer Service </h3>
                                                            <p>Top-notch Customer Care services available
                                                                round-the-clock.</p>
                                                        </div>


                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-37b4b0de elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="37b4b0de" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-36430ad4"
                                data-id="36430ad4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-acdf661 elementor-widget elementor-widget-heading"
                                        data-id="acdf661" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">NOTCHCHAIN FX
                                               </h2>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-3c011e6d elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="3c011e6d" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-69c3c409"
                                                data-id="69c3c409" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-283b386 elementor-widget elementor-widget-text-editor"
                                                        data-id="283b386" data-element_type="widget"
                                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Get started with the easiest and most secure platform to
                                                                buy, sell, trade, and earn cryptocurrencies.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-242e696e"
                                                data-id="242e696e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2f22d08d elementor-widget elementor-widget-elementskit-button"
                                                        data-id="2f22d08d" data-element_type="widget"
                                                        data-widget_type="elementskit-button.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="ekit-wid-con">
                                                                <div class="ekit-btn-wraper">
                                                                    <a href="../register.php"
                                                                        class="elementskit-btn  whitespace--normal">


                                                                        Get Started today </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>



                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-5e0b804c elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5e0b804c" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6c573bec"
                                data-id="6c573bec" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6459a0d7 elementor-widget elementor-widget-image"
                                        data-id="6459a0d7" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInRight&quot;}"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img decoding="async" width="337" height="252"
                                                src="../images/site-thumbnail-e1632164888325.png">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-559fd07b"
                                data-id="559fd07b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-468d7ff9 elementor-widget elementor-widget-elementskit-heading"
                                        data-id="468d7ff9" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-heading.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div
                                                    class="ekit-heading elementskit-section-title-wraper text_left   ekit_heading_tablet-   ekit_heading_mobile-text_left">
                                                    <h2 class="ekit-heading--title elementskit-section-title ">Trade
                                                        with Notchchainfx.live on the go.</h2>
                                                    <div class='ekit-heading__description'>
                                                        <p>With impressive interest rates, tools, trade managers &amp;
                                                            guides, Notchchainfx.live is the smartest way to plan,
                                                            save &amp; invest.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-6532f96a elementor-widget elementor-widget-elementskit-button"
                                        data-id="6532f96a" data-element_type="widget"
                                        data-widget_type="elementskit-button.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-btn-wraper">
                                                    <a href="../register.php"
                                                        class="elementskit-btn  whitespace--normal">


                                                        Learn more </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>


                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-6f32600d elementor-section-height-min-height elementor-section-boxed elementor-section-height-default elementor-section-items-middle"
                        data-id="6f32600d" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;shape_divider_top&quot;:&quot;tilt&quot;,&quot;shape_divider_bottom&quot;:&quot;tilt&quot;}">

                        <div class="elementor-shape elementor-shape-top" data-negative="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
                            </svg>
                        </div>
                        <div class="elementor-shape elementor-shape-bottom" data-negative="false">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                                <path class="elementor-shape-fill" d="M0,6V0h1000v100L0,6z" />
                            </svg>
                        </div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-24d6b3f6"
                                data-id="24d6b3f6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-214c8efd elementor-widget elementor-widget-elementskit-piechart"
                                        data-id="214c8efd" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-piechart.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-single-piechart withcontent">


                                                    <div class="colorful-chart piechart" data-color="#7F1501"
                                                        data-size="170" data-linewidth="8" data-percent="98">


                                                        <span class="ekit-chart-content">98&#37;</span>






                                                    </div>
                                                    <h2 class="ekit-piechart-title">Speed</h2>

                                                    <p>We have employed tech experts to speed up our blockchain services
                                                    </p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5f1a6974"
                                data-id="5f1a6974" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2185027f elementor-widget elementor-widget-elementskit-piechart"
                                        data-id="2185027f" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-piechart.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">

                                                <div class="ekit-single-piechart withcontent">


                                                    <div class="colorful-chart piechart" data-color="#7F1501"
                                                        data-size="170" data-linewidth="8" data-percent="43">


                                                        <span class="ekit-chart-content">43&#37;</span>






                                                    </div>
                                                    <h2 class="ekit-piechart-title">Digital Currencies</h2>

                                                    <p>We accept a few digital currencies</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-55d81ecc"
                                data-id="55d81ecc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-4c723668 elementor-widget elementor-widget-elementskit-piechart"
                                        data-id="4c723668" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-piechart.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-single-piechart withcontent">


                                                    <div class="colorful-chart piechart" data-color="#7F1501"
                                                        data-size="170" data-linewidth="8" data-percent="100">


                                                        <span class="ekit-chart-content">100&#37;</span>






                                                    </div>
                                                    <h2 class="ekit-piechart-title">Security</h2>

                                                    <p>No risk involved in your investments.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9adb134"
                                data-id="9adb134" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-1ef940db elementor-widget elementor-widget-elementskit-piechart"
                                        data-id="1ef940db" data-element_type="widget"
                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                        data-widget_type="elementskit-piechart.default">
                                        <div class="elementor-widget-container">
                                            <div class="ekit-wid-con">
                                                <div class="ekit-single-piechart withcontent">


                                                    <div class="colorful-chart piechart" data-color="#7F1501"
                                                        data-size="170" data-linewidth="8" data-percent="99">


                                                        <span class="ekit-chart-content">99&#37;</span>






                                                    </div>
                                                    <h2 class="ekit-piechart-title">Simple User Interface</h2>

                                                    <p>NOTCHCHAIN FX is a simple, elegant, and secure platform to
                                                        invest with no risk.</p>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!--<section
                        class="elementor-section elementor-top-section elementor-element elementor-element-e09ab6d elementor-section-boxed elementor-section-height-default elementor-section-height-default" id="plan"
                        data-id="e09ab6d" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7c2533e"
                                data-id="7c2533e" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-5a8a8f8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="5a8a8f8" data-element_type="section"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay"></div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f42c5fa"
                                                data-id="f42c5fa" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-2c7d290 elementor-widget elementor-widget-elementskit-heading"
                                                        data-id="2c7d290" data-element_type="widget"
                                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                                        data-widget_type="elementskit-heading.default">
                                                        <div class="elementor-widget-container">

                                                            <div class="ekit-wid-con">
                                                                <div
                                                                    class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                                    <h2
                                                                        class="ekit-heading--title elementskit-section-title ">
                                                                        Our Investment Plans</h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="elementor-element elementor-element-0a0c81a elementor-widget elementor-widget-text-editor"
                                                        data-id="0a0c81a" data-element_type="widget"
                                                        data-settings="{&quot;_animation_mobile&quot;:&quot;fadeInUp&quot;}"
                                                        data-widget_type="text-editor.default">
                                                        <div class="elementor-widget-container">
                                                            <p>Broker Leading Plans</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2d8fe87 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2d8fe87" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-691a974"
                                data-id="691a974" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-91363d7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="91363d7" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">



                                            

                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-642e833"
                                                data-id="642e833" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d0eb4c4 eael-pricing-content-align-center eael-pricing-button-align-center elementor-widget elementor-widget-eael-pricing-table"
                                                        data-id="d0eb4c4" data-element_type="widget"
                                                        data-widget_type="eael-pricing-table.default">
                                                        <div class="elementor-widget-container ">
                                                            <div class="eael-pricing style-1">
                                                                <div class="eael-pricing-item ">
                                                                    <div class="header">
                                                                        <h2 class="title">GEM <br> Plan</h2>
                                                                    </div>
                                                                    <div class="eael-pricing-tag">
                                                                        <span class="price-tag"><span
                                                                                class="original-price"><span
                                                                                    class="price-currency">$
                                                                                    500 </span></span>
                                                                            <span class="price-period"> </span>
                                                                    </div>
                                                                    <div class="body">
                                                                        <ul>
                                                                            <li class="elementor-repeater-item-1453445">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Deposit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-a81812c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>$500
                                                                                </span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-bdbb2aa">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Profit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-5a8c31c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>
                                                                                    $500
                                                                                </span>


                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <a href="register" class="eael-pricing-button">
                                                                            Choose Plan </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-642e833"
                                                data-id="642e833" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d0eb4c4 eael-pricing-content-align-center eael-pricing-button-align-center elementor-widget elementor-widget-eael-pricing-table"
                                                        data-id="d0eb4c4" data-element_type="widget"
                                                        data-widget_type="eael-pricing-table.default">
                                                        <div class="elementor-widget-container ">
                                                            <div class="eael-pricing style-1">
                                                                <div class="eael-pricing-item ">
                                                                    <div class="header">
                                                                        <h2 class="title">ENTERPRISE <br> Plan</h2>
                                                                    </div>
                                                                    <div class="eael-pricing-tag">
                                                                        <span class="price-tag"><span
                                                                                class="original-price"><span
                                                                                    class="price-currency">$
                                                                                    1,000 </span></span>
                                                                            <span class="price-period"> </span>
                                                                    </div>
                                                                    <div class="body">
                                                                        <ul>
                                                                            <li class="elementor-repeater-item-1453445">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Deposit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-a81812c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>$1,000
                                                                                </span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-bdbb2aa">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Profit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-5a8c31c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>
                                                                                    $1,000
                                                                                </span>


                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <a href="register" class="eael-pricing-button">
                                                                            Choose Plan </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-642e833"
                                                data-id="642e833" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d0eb4c4 eael-pricing-content-align-center eael-pricing-button-align-center elementor-widget elementor-widget-eael-pricing-table"
                                                        data-id="d0eb4c4" data-element_type="widget"
                                                        data-widget_type="eael-pricing-table.default">
                                                        <div class="elementor-widget-container ">
                                                            <div class="eael-pricing style-1">
                                                                <div class="eael-pricing-item ">
                                                                    <div class="header">
                                                                        <h2 class="title">Plan 1 <br> Plan</h2>
                                                                    </div>
                                                                    <div class="eael-pricing-tag">
                                                                        <span class="price-tag"><span
                                                                                class="original-price"><span
                                                                                    class="price-currency">$
                                                                                    3000 </span></span>
                                                                            <span class="price-period"> </span>
                                                                    </div>
                                                                    <div class="body">
                                                                        <ul>
                                                                            <li class="elementor-repeater-item-1453445">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Deposit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-a81812c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>$3000
                                                                                </span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-bdbb2aa">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Profit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-5a8c31c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>
                                                                                    $3000
                                                                                </span>


                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <a href="register" class="eael-pricing-button">
                                                                            Choose Plan </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-642e833"
                                                data-id="642e833" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-d0eb4c4 eael-pricing-content-align-center eael-pricing-button-align-center elementor-widget elementor-widget-eael-pricing-table"
                                                        data-id="d0eb4c4" data-element_type="widget"
                                                        data-widget_type="eael-pricing-table.default">
                                                        <div class="elementor-widget-container ">
                                                            <div class="eael-pricing style-1">
                                                                <div class="eael-pricing-item ">
                                                                    <div class="header">
                                                                        <h2 class="title">Real Estate <br> Plan</h2>
                                                                    </div>
                                                                    <div class="eael-pricing-tag">
                                                                        <span class="price-tag"><span
                                                                                class="original-price"><span
                                                                                    class="price-currency">$
                                                                                    100,000 </span></span>
                                                                            <span class="price-period"> </span>
                                                                    </div>
                                                                    <div class="body">
                                                                        <ul>
                                                                            <li class="elementor-repeater-item-1453445">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Deposit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-a81812c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>$100,000
                                                                                </span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-bdbb2aa">


                                                                                <span class="li-icon"
                                                                                    style="color:#020101;fill:#020101;">
                                                                                    <i class="fas fa-check"></i>
                                                                                </span>


                                                                                <span>Minimum Profit</span>


                                                                            </li>
                                                                            <li class="elementor-repeater-item-5a8c31c">


                                                                                <span class="li-icon"
                                                                                    style="color:#00C853;fill:#00C853;">
                                                                                    <i class=""></i>
                                                                                </span>


                                                                                <span>
                                                                                    $100,000
                                                                                </span>


                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="footer">
                                                                        <a href="register" class="eael-pricing-button">
                                                                            Choose Plan </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            



                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </section>-->
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-d02d7aa elementor-section-height-default elementor-section-boxed elementor-section-height-default"
                        data-id="d02d7aa" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6852f6fc"
                                data-id="6852f6fc" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-30e0773f elementor-widget elementor-widget-image-carousel"
                                        data-id="30e0773f" data-element_type="widget"
                                        data-settings="{&quot;slides_to_show&quot;:&quot;3&quot;,&quot;slides_to_scroll&quot;:&quot;1&quot;,&quot;navigation&quot;:&quot;none&quot;,&quot;pause_on_hover&quot;:&quot;no&quot;,&quot;pause_on_interaction&quot;:&quot;no&quot;,&quot;autoplay_speed&quot;:10,&quot;speed&quot;:1000,&quot;image_spacing_custom&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:15,&quot;sizes&quot;:[]},&quot;slides_to_show_mobile&quot;:&quot;2&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;infinite&quot;:&quot;yes&quot;,&quot;image_spacing_custom_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;image_spacing_custom_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]}}"
                                        data-widget_type="image-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-carousel-wrapper swiper-container" dir="rtl">
                                                <div class="elementor-image-carousel swiper-wrapper">

                                                    <!-- TradingView Widget BEGIN -->
                                                    <div class="tradingview-widget-container">

                                                        <script type="text/javascript"
                                                            src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
                                                            async>
                                                                {
                                                                    "symbols": [
                                                                        {
                                                                            "proName": "FOREXCOM:SPXUSD",
                                                                            "title": "S&P 500"
                                                                        },
                                                                        {
                                                                            "proName": "FOREXCOM:NSXUSD",
                                                                            "title": "US 100"
                                                                        },
                                                                        {
                                                                            "proName": "FX_IDC:EURUSD",
                                                                            "title": "EUR/USD"
                                                                        },
                                                                        {
                                                                            "proName": "BITSTAMP:BTCUSD",
                                                                            "title": "Bitcoin"
                                                                        },
                                                                        {
                                                                            "proName": "BITSTAMP:ETHUSD",
                                                                            "title": "Ethereum"
                                                                        }
                                                                    ],
                                                                        "showSymbolLogo": true,
                                                                            "colorTheme": "light",
                                                                                "isTransparent": false,
                                                                                    "displayMode": "adaptive",
                                                                                        "locale": "en"
                                                                }
                                                            </script>
                                                    </div>
                                                    <!-- TradingView Widget END -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-eeec418 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="eeec418" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-3b9ad0a"
                                data-id="3b9ad0a" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-60add55"
                                data-id="60add55" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8c18cf1 elementor-widget elementor-widget-image"
                                        data-id="8c18cf1" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="336" height="416"
                                                src="../images/assange.png"
                                                class="attachment-large size-large wp-image-870" alt="imae"
                                                loading="lazy" />
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3850fcc elementor-position-top elementor-vertical-align-top elementor-widget elementor-widget-image-box"
                                        data-id="3850fcc" data-element_type="widget"
                                        data-widget_type="image-box.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-image-box-wrapper">
                                                <div class="elementor-image-box-content">
                                                    <h3 class="elementor-image-box-title">Julian Assange</h3>
                                                    <p class="elementor-image-box-description">“Bitcoin actually has the
                                                        balance and incentives right, and that is why it is starting to
                                                        take off.”</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-a539676"
                                data-id="a539676" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-1ee2b9c elementor-section-full_width elementor-section-height-default elementor-section-height-default"
                        data-id="1ee2b9c" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-1e7c7626"
                                data-id="1e7c7626" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-d583f5f elementor-widget elementor-widget-heading"
                                        data-id="d583f5f" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">What Our Clients
                                                Say</h2>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6f7e8cdc elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="6f7e8cdc" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3dfc3ae"
                                                data-id="3dfc3ae" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-417eb7f3 elementor-widget elementor-widget-elementskit-heading"
                                                        data-id="417eb7f3" data-element_type="widget"
                                                        data-widget_type="elementskit-heading.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="ekit-wid-con">
                                                                <div
                                                                    class="ekit-heading elementskit-section-title-wraper text_center   ekit_heading_tablet-   ekit_heading_mobile-">
                                                                    <h2
                                                                        class="ekit-heading--title elementskit-section-title ">
                                                                        Popular Investors</h2>
                                                                    <div class='ekit-heading__description'>
                                                                        <p>Success stories from our famous investors.
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-1867afd6 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default"
                                        data-id="1867afd6" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-5bbaa77b"
                                                data-id="5bbaa77b" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-7bd4263e elementor-widget elementor-widget-elementskit-testimonial"
                                                        data-id="7bd4263e" data-element_type="widget"
                                                        data-widget_type="elementskit-testimonial.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="ekit-wid-con">
                                                                <div class="elementskit-testimonial-slider ekit_testimonial_style_5 slick-slider arrow_inside "
                                                                    data-config="{&quot;rtl&quot;:false,&quot;arrows&quot;:false,&quot;dots&quot;:false,&quot;pauseOnHover&quot;:true,&quot;autoplay&quot;:true,&quot;speed&quot;:1000,&quot;slidesPerGroup&quot;:1,&quot;slidesPerView&quot;:3,&quot;loop&quot;:false,&quot;breakpoints&quot;:{&quot;320&quot;:{&quot;slidesPerView&quot;:&quot;1&quot;,&quot;slidesPerGroup&quot;:1},&quot;768&quot;:{&quot;slidesPerView&quot;:&quot;2&quot;,&quot;slidesPerGroup&quot;:1},&quot;1024&quot;:{&quot;slidesPerView&quot;:&quot;3&quot;,&quot;slidesPerGroup&quot;:1}}}">
                                                                    <div class="swiper-container">
                                                                        <div class="slick-list swiper-wrapper">







                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> blockexchange.live has incredibly done me well through my journey of trading cryptocurrencies. I recommend them whenever you want to make success in crypto trading 🥰..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="../images/client1.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Segovia Gabriela</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> This platform is the best trading platform. Intuitive interface, security-focused, and responsive team.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="../images/client2.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Suarj Patil</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> This company has one of the best investment program, they make it easy to invest and also withdraw in a quick and relaxed manner, thier performance is top notch in the crypto system. It&#039;s a nice experience😊.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="../images/client3.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Elin Max</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> The user interface is easy to navigate, making it ideal for both novice and experienced traders that&#039;s why I love it here..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="../images/client4.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Karie Heller</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> Great for novice and experienced traders.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 17.32.00.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Silvestre Lima</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> BlockExchange.live is a game-changer. Easy to use platform with a great community. Highly recommend!.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 17.30.17.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Rudra Mishra</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> I wholeheartedly recommend this investment company to anyone looking to make smart financial decisions and achieve their financial goals. The team&#039;s expertise and customer service are second to none, and I have no doubt that you will continue to be a valuable resource for your clients for years to come..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 17.28.17.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Helen K Augsburg</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> Always having satisfied acquaintance with this platform, great company ❤️💯.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 17.12.19.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Pens Trips</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> The customer support team was always there to assist me whenever I had a question or concern.
Thank you, BlockExchange.live, for providing a reliable and user-friendly platform..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 17.03.40.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Marco Aurelio Marquinho</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> Dijital varlık ticareti dünyasına dahil olmak isteyenler için blok takası ideal bir seçimdir. Dijital varlıklarla ticaret yapmak için güvenli ve verimli bir yol sağlar, oldukça havalı.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 16.50.09.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Timea Horvathne</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> I am happy to tell you that, as far as I know, BlockExchange.live is a legitimate platform for trading cryptocurrencies.
BlockExchange.live is a decentralized exchange..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 16.45.57.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Micheal Shawn Ross</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> Blockexchange.live has always been a supportive platform, introducing the crypto world to new bies, and also making sure, each and everyone using their platform will have a reason to smile at the end..
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2023-05-17 at 16.38.22.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Reinhardt Torsten</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                                                                                                        <div class="swiper-slide">
                                                                                <div class="slick-slide">
                                                                                    <div
                                                                                        class="elementskit-single-testimonial-slider elementskit-testimonial-slider-block-style elementskit-testimonial-slider-block-style-two   elementor-repeater-item-42f3647">
                                                                                        <div
                                                                                            class="elementskit-commentor-header">
                                                                                            <ul
                                                                                                class="elementskit-stars">
                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star active"></i></a>
                                                                                                </li>

                                                                                                <li><a><i
                                                                                                            class="eicon-star-o"></i></a>
                                                                                                </li>

                                                                                            </ul>

                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-content">
                                                                                            <p> I recently had the pleasure of using BlockExchange.live for my trading needs, and I must say that I am thoroughly impressed with their platform. The user interface is intuitive and easy to navigate, and the customer service team is always available and responsive to my inquiries. The transaction speeds are lightning-fast, and the fees are reasonable. Overall, I would highly recommend BlockExchange.live to anyone looking for a reliable and efficient trading platform. Thank you, BlockExchange.live, for an excellent trading experience!&quot;.
                                                                                            </p>
                                                                                        </div>

                                                                                        <div
                                                                                            class="elementskit-commentor-bio">
                                                                                            <div
                                                                                                class="elementkit-commentor-details ">
                                                                                                <div
                                                                                                    class="elementskit-commentor-image ekit-testimonial--avatar">
                                                                                                    <img decoding="async"
                                                                                                        width="1440"
                                                                                                        height="1438"
                                                                                                        src="cloud/uploads/WhatsApp Image 2022-11-06 at 23.06.55.jpg"
                                                                                                        alt="">
                                                                                                </div>
                                                                                                <div
                                                                                                    class="elementskit-profile-info">
                                                                                                    <strong
                                                                                                        class="elementskit-author-name">Dauda Nasiru</strong>
                                                                                                    <span
                                                                                                        class="elementskit-author-des"></span>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            





                                                                        </div>
                                                                    </div>
                                                                    <ul
                                                                        class="slick-dots swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>








                            </div>
                        </div>












                    </section>




                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-5fe16c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="5fe16c9" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-432032c"
                                data-id="432032c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-bd791fa elementor-widget elementor-widget-heading"
                                        data-id="bd791fa" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">About Us</h2>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-d29f905 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="d29f905" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-48bc644"
                                                data-id="48bc644" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-e8eeeee elementor-widget elementor-widget-counter"
                                                        data-id="e8eeeee" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="2016"
                                                                        data-from-value="2016">2016</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix"></span>
                                                                </div>
                                                                <div class="elementor-counter-title">Market Entry Year
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-2c2266f"
                                                data-id="2c2266f" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-4e1c1fd elementor-widget elementor-widget-counter"
                                                        data-id="4e1c1fd" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="99"
                                                                        data-from-value="134"
                                                                        data-delimiter=",">80</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix">%</span>
                                                                </div>
                                                                <div class="elementor-counter-title">Countries supported
                                                                    and 48 US States</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-11b004e"
                                                data-id="11b004e" data-element_type="column">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-0166a2b elementor-widget elementor-widget-counter"
                                                        data-id="0166a2b" data-element_type="widget"
                                                        data-widget_type="counter.default">
                                                        <div class="elementor-widget-container">
                                                            <div class="elementor-counter">
                                                                <div class="elementor-counter-number-wrapper">
                                                                    <span
                                                                        class="elementor-counter-number-prefix"></span>
                                                                    <span class="elementor-counter-number"
                                                                        data-duration="2000" data-to-value="100"
                                                                        data-from-value="0" data-delimiter=",">20</span>
                                                                    <span
                                                                        class="elementor-counter-number-suffix">+</span>
                                                                </div>
                                                                <div class="elementor-counter-title">Language Support
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>


                    </section>






























                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-2d493f7 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="2d493f7" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a1ad67c"
                                data-id="a1ad67c" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-a15148a elementor-widget elementor-widget-premium-addon-button"
                                        data-id="a15148a" data-element_type="widget"
                                        data-widget_type="premium-addon-button.default">
                                        <div class="elementor-widget-container">


                                            <a class="premium-button premium-button-none premium-btn-lg premium-button-none"
                                                href="../register.php">
                                                <div class="premium-button-text-icon-wrapper">
                                                    <span>
                                                        Get Financial freedom - Sign Up now! </span>
                                                </div>
                                            </a>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div> <!-- ast-container -->
        </div><!-- #content -->
        <div class="hfe-before-footer-wrap">
            <div class='footer-width-fixer'>
                <div data-elementor-type="wp-post" data-elementor-id="220" class="elementor elementor-220">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-37a05191 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="37a05191" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-5b6aa10f"
                                data-id="5b6aa10f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-472f2f7 elementor-widget elementor-widget-image"
                                        data-id="472f2f7" data-element_type="widget" data-widget_type="image.default">

                                       <a href="../">NOTCHCHAIN FX</a>
                                    </div>

                                    <div class="elementor-element elementor-element-6ee9cfc9 elementor-widget elementor-widget-text-editor"
                                        data-id="6ee9cfc9" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <p>Notchchainfx.live is one of the world&#8217;s largest investment
                                                companies, offering a large selection of low-cost mutual funds, ETFs,
                                                advice, and related services.</p>
                                        </div>
                                    </div>
                        
                                </div>
                            </div>
                            
<style>
    .facebook-custom,
.twitter-custom,
.instagram-custom,
.linkedin-custom,
.youtube-custom{
  color: #9F0515;
}

.fa{
    padding:3px;
}
</style>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-e48dd77"
                                data-id="e48dd77" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-2b73d642 elementor-widget elementor-widget-heading"
                                        data-id="2b73d642" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Quick Links</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-199a482c elementor-align-left elementor-mobile-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="199a482c" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="../">

                                                        <span class="elementor-icon-list-text">Home</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="../about.php">

                                                        <span class="elementor-icon-list-text">About</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="../contact.php">

                                                        <span class="elementor-icon-list-text">Contact</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="../login.php">

                                                        <span class="elementor-icon-list-text">Login</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="../register.php">

                                                        <span class="elementor-icon-list-text">Register</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                          
                         
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-72aba41 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="72aba41" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-2bc3716"
                                data-id="2bc3716" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <section
                                class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-06e5d61"
                                data-id="06e5d61" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </section>
                            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-5895442"
                                data-id="5895442" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <footer class="site-footer" id="colophon" itemtype="https://schema.org/WPFooter" itemscope="itemscope"
            itemid="#colophon">
            <div class="site-below-footer-wrap ast-builder-grid-row-container site-footer-focus-item ast-builder-grid-row-full ast-builder-grid-row-tablet-full ast-builder-grid-row-mobile-full ast-footer-row-stack ast-footer-row-tablet-stack ast-footer-row-mobile-stack"
                data-section="section-below-footer-builder">
                <div class="ast-builder-grid-row-container-inner">
                    <div class="ast-builder-footer-grid-columns site-below-footer-inner-wrap ast-builder-grid-row">
                        <div class="site-footer-below-section-1 site-footer-section site-footer-section-1">
                            <div class="ast-builder-layout-element ast-flex site-footer-focus-item ast-footer-copyright"
                                data-section="section-footer-builder">
                                <div class="ast-footer-copyright">
                                    <p>Copyright &copy; 2026 Notchchainfx.live</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </footer><!-- #colophon -->
    </div><!-- #page -->

    <div id="um_upload_single" style="display:none"></div>
    <div id="um_view_photo" style="display:none">

        <a href="javascript:void(0);" data-action="um_remove_modal" class="um-modal-close"
            aria-label="Close view photo modal">
            <i class="um-faicon-times"></i>
        </a>

        <div class="um-modal-body photo">
            <div class="um-modal-photo"></div>
        </div>

    </div>

    <!--Start of Tawk.to Script (0.7.2)-->

    <!--Start of Tawk.to Script (0.7.2)-->

        <!--End of Tawk.to Script (0.7.2)-->
        <!-- Click to Chat - https://holithemes.com/plugins/click-to-chat/  v3.22 -->
        <span class="ht_ctc_chat_data" data-no_number=""
            data-settings="{&quot;number&quot;:&quot;17024209111&quot;,&quot;pre_filled&quot;:&quot;&quot;,&quot;dis_m&quot;:&quot;show&quot;,&quot;dis_d&quot;:&quot;show&quot;,&quot;css&quot;:&quot;display: none; cursor: pointer; z-index: 99999999;&quot;,&quot;pos_d&quot;:&quot;position: fixed; bottom: 15px; left: 15px;&quot;,&quot;pos_m&quot;:&quot;position: fixed; bottom: 15px; left: 15px;&quot;,&quot;schedule&quot;:&quot;no&quot;,&quot;se&quot;:150,&quot;ani&quot;:&quot;no-animations&quot;,&quot;url_target_d&quot;:&quot;_blank&quot;,&quot;ga&quot;:&quot;yes&quot;,&quot;fb&quot;:&quot;yes&quot;}"></span>
        <style id="eael-inline-css">
            .tooltipster-fall,
            .tooltipster-grow.tooltipster-show {
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-base {
                display: flex;
                pointer-events: none;
                position: absolute
            }

            .tooltipster-box {
                flex: 1 1 auto
            }

            .tooltipster-content {
                box-sizing: border-box;
                max-height: 100%;
                max-width: 100%;
                overflow: auto
            }

            .tooltipster-ruler {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: fixed;
                right: 0;
                top: 0;
                visibility: hidden
            }

            .tooltipster-fade {
                opacity: 0;
                -webkit-transition-property: opacity;
                -moz-transition-property: opacity;
                -o-transition-property: opacity;
                -ms-transition-property: opacity;
                transition-property: opacity
            }

            .tooltipster-fade.tooltipster-show {
                opacity: 1
            }

            .tooltipster-grow {
                -webkit-transform: scale(0, 0);
                -moz-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0);
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform;
                -webkit-backface-visibility: hidden
            }

            .tooltipster-grow.tooltipster-show {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-swing {
                opacity: 0;
                -webkit-transform: rotateZ(4deg);
                -moz-transform: rotateZ(4deg);
                -o-transform: rotateZ(4deg);
                -ms-transform: rotateZ(4deg);
                transform: rotateZ(4deg);
                -webkit-transition-property: -webkit-transform, opacity;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform
            }

            .tooltipster-swing.tooltipster-show {
                opacity: 1;
                -webkit-transform: rotateZ(0);
                -moz-transform: rotateZ(0);
                -o-transform: rotateZ(0);
                -ms-transform: rotateZ(0);
                transform: rotateZ(0);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 1);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -moz-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -ms-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -o-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                transition-timing-function: cubic-bezier(.23, .635, .495, 2.4)
            }

            .tooltipster-fall {
                -webkit-transition-property: top;
                -moz-transition-property: top;
                -o-transition-property: top;
                -ms-transition-property: top;
                transition-property: top;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-fall.tooltipster-initial {
                top: 0 !important
            }

            .tooltipster-fall.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                top: 0 !important;
                opacity: 0
            }

            .tooltipster-slide {
                -webkit-transition-property: left;
                -moz-transition-property: left;
                -o-transition-property: left;
                -ms-transition-property: left;
                transition-property: left;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-slide.tooltipster-initial {
                left: -40px !important
            }

            .tooltipster-slide.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                left: 0 !important;
                opacity: 0
            }

            @keyframes  tooltipster-fading {
                0% {
                    opacity: 0
                }

                100% {
                    opacity: 1
                }
            }

            .tooltipster-update-fade {
                animation: tooltipster-fading .4s
            }

            @keyframes  tooltipster-rotating {
                25% {
                    transform: rotate(-2deg)
                }

                75% {
                    transform: rotate(2deg)
                }

                100% {
                    transform: rotate(0)
                }
            }

            .tooltipster-update-rotate {
                animation: tooltipster-rotating .6s
            }

            @keyframes  tooltipster-scaling {
                50% {
                    transform: scale(1.1)
                }

                100% {
                    transform: scale(1)
                }
            }

            .tooltipster-update-scale {
                animation: tooltipster-scaling .6s
            }

            .tooltipster-sidetip .tooltipster-box {
                background: #565656;
                border: 2px solid #000;
                border-radius: 4px
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-box {
                margin-top: 8px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-box {
                margin-right: 8px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-box {
                margin-left: 8px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-box {
                margin-bottom: 8px
            }

            .tooltipster-sidetip .tooltipster-content {
                color: #fff;
                line-height: 18px;
                padding: 6px 14px
            }

            .tooltipster-sidetip .tooltipster-arrow {
                overflow: hidden;
                position: absolute
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                height: 10px;
                margin-left: -10px;
                top: 0;
                width: 20px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                right: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                left: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                bottom: 0;
                height: 10px;
                margin-left: -10px;
                width: 20px
            }

            .tooltipster-sidetip .tooltipster-arrow-background,
            .tooltipster-sidetip .tooltipster-arrow-border {
                height: 0;
                position: absolute;
                width: 0
            }

            .tooltipster-sidetip .tooltipster-arrow-background {
                border: 10px solid transparent
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background {
                border-bottom-color: #565656;
                left: 0;
                top: 3px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background {
                border-left-color: #565656;
                left: -3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background {
                border-right-color: #565656;
                left: 3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background {
                border-top-color: #565656;
                left: 0;
                top: -3px
            }

            .tooltipster-sidetip .tooltipster-arrow-border {
                border: 10px solid transparent;
                left: 0;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border {
                border-bottom-color: #000
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border {
                border-left-color: #000
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border {
                border-right-color: #000
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border {
                border-top-color: #000
            }

            .tooltipster-sidetip .tooltipster-arrow-uncropped {
                position: relative
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped {
                top: -10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped {
                left: -10px
            }

            .clearfix::before,
            .clearfix::after {
                content: " ";
                display: table;
                clear: both
            }

            .eael-testimonial-slider.nav-top-left,
            .eael-testimonial-slider.nav-top-right,
            .eael-team-slider.nav-top-left,
            .eael-team-slider.nav-top-right,
            .eael-logo-carousel.nav-top-left,
            .eael-logo-carousel.nav-top-right,
            .eael-post-carousel.nav-top-left,
            .eael-post-carousel.nav-top-right,
            .eael-product-carousel.nav-top-left,
            .eael-product-carousel.nav-top-right {
                padding-top: 40px
            }

            .eael-contact-form input[type=text],
            .eael-contact-form input[type=email],
            .eael-contact-form input[type=url],
            .eael-contact-form input[type=tel],
            .eael-contact-form input[type=date],
            .eael-contact-form input[type=number],
            .eael-contact-form textarea {
                background: #fff;
                box-shadow: none;
                -webkit-box-shadow: none;
                float: none;
                height: auto;
                margin: 0;
                outline: 0;
                width: 100%
            }

            .eael-contact-form input[type=submit] {
                border: 0;
                float: none;
                height: auto;
                margin: 0;
                padding: 10px 20px;
                width: auto;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-contact-form.placeholder-hide input::-webkit-input-placeholder,
            .eael-contact-form.placeholder-hide textarea::-webkit-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input::-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea::-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-ms-input-placeholder,
            .eael-contact-form.placeholder-hide textarea:-ms-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea:-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-custom-radio-checkbox input[type=checkbox],
            .eael-custom-radio-checkbox input[type=radio] {
                -webkit-appearance: none;
                -moz-appearance: none;
                border-style: solid;
                border-width: 0;
                outline: none;
                min-width: 1px;
                width: 15px;
                height: 15px;
                background: #ddd;
                padding: 3px
            }

            .eael-custom-radio-checkbox input[type=checkbox]:before,
            .eael-custom-radio-checkbox input[type=radio]:before {
                content: "";
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                display: block
            }

            .eael-custom-radio-checkbox input[type=checkbox]:checked:before,
            .eael-custom-radio-checkbox input[type=radio]:checked:before {
                background: #999;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-custom-radio-checkbox input[type=radio] {
                border-radius: 50%
            }

            .eael-custom-radio-checkbox input[type=radio]:before {
                border-radius: 50%
            }

            .eael-post-elements-readmore-btn {
                font-size: 12px;
                font-weight: 500;
                -webkit-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
                display: inline-block
            }

            .elementor-lightbox .dialog-widget-content {
                width: 100%;
                height: 100%
            }

            .eael-contact-form-align-left,
            .elementor-widget-eael-weform.eael-contact-form-align-left .eael-weform-container {
                margin: 0 auto 0 0
            }

            .eael-contact-form-align-center,
            .elementor-widget-eael-weform.eael-contact-form-align-center .eael-weform-container {
                float: none;
                margin: 0 auto
            }

            .eael-contact-form-align-right,
            .elementor-widget-eael-weform.eael-contact-form-align-right .eael-weform-container {
                margin: 0 0 0 auto
            }

            .eael-force-hide {
                display: none !important
            }

            .eael-d-none {
                display: none !important
            }

            .eael-d-block {
                display: block !important
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating {
                display: none
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating~.count {
                display: none
            }

            .eael-pricing {
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .eael-pricing .eael-pricing-item {
                width: 100%;
                height: auto;
                margin: 0
            }

            .eael-pricing .eael-pricing-button {
                display: none;
                padding: 12px 25px;
                background: #00c853;
                font-size: 14px;
                font-weight: 600;
                color: #fff;
                text-transform: uppercase;
                text-decoration: none;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                border-radius: 4px
            }

            .eael-pricing .eael-pricing-button:hover {
                background: #03b048
            }

            .eael-pricing .eael-pricing-item ul {
                padding: 0px;
                margin: 0px;
                list-style: none
            }

            .eael-pricing .eael-pricing-item ul li.disable-item {
                text-decoration: line-through;
                opacity: .5
            }

            .eael-pricing .eael-pricing-item ul li span.li-icon {
                color: #00c853;
                margin-right: 6px;
                margin-left: 6px
            }

            .eael-pricing .eael-pricing-item ul li.disable-item span.li-icon {
                color: #ef5350
            }

            .eael-pricing.style-1 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-1 .eael-pricing-item {
                border: 1px solid rgba(9, 9, 9, .1);
                padding: 30px;
                border-radius: 5px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1:hover {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1 .eael-pricing-item.featured {
                position: relative
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-4:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 30px;
                right: -55px;
                z-index: 10;
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
                width: 200px;
                padding: 7px 0;
                white-space: nowrap
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-left.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-left.ribbon-4:before {
                right: auto;
                left: -55px;
                -webkit-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .eael-pricing.style-1 .eael-pricing-item .header {
                display: block;
                position: relative;
                z-index: 0;
                padding-bottom: 15px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .header:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-1 .eael-pricing-item .header .title {
                font-weight: 700;
                line-height: 30px;
                margin: 0px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700
            }

            .eael-pricing.style-1 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 0px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            .eael-pricing.style-1 .eael-pricing-item.featured-large {
                padding: 60px 0px
            }

            .eael-pricing.style-2 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-2 .eael-pricing-item {
                padding: 30px 0px;
                border-radius: 5px;
                margin: 0px;
                border: 1px solid rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-2 .eael-pricing-item.featured {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22)
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: inline-block;
                position: relative;
                width: 80px;
                height: 80px;
                background: #00c853;
                border-radius: 50%;
                margin-bottom: 30px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s;
                overflow: hidden
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon,
            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon i {
                font-size: 30px;
                color: #fff;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon {
                background: #43a047
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon i {
                color: #fff
            }

            .eael-pricing.style-2 .eael-pricing-item .header {
                background: #c8e6c9;
                padding: 25px 30px;
                margin-bottom: 15px;
                position: relative;
                z-index: 0
            }

            .eael-pricing.style-2 .eael-pricing-item.featured .header:after {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
                z-index: -1;
                background: rgba(255, 255, 255, .4)
            }

            .eael-pricing.style-2 .eael-pricing-item .header .title {
                font-size: 28px;
                font-weight: 700;
                line-height: 40px;
                margin: 0px
            }

            .eael-pricing.style-2 .eael-pricing-item .header .subititle {
                font-size: 14px;
                font-weight: 600;
                color: #6d6d6d
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700;
                color: #00c853
            }

            .eael-pricing.style-2 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 15px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            @media  only screen and (min-width: 768px)and (max-width: 992px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    width: 100%;
                    margin: 0 auto 30px auto
                }
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item {
                    width: 100%
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    margin: 0 auto 30px auto
                }
            }

            .eael-pricing-content-align-center .eael-pricing {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing {
                text-align: right
            }

            .eael-pricing-content-align-center .eael-pricing.style-4 {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing .eael-pricing-item.ribbon-4:before,
            .eael-pricing-content-align-right .eael-pricing .eael-pricing-item.ribbon-4:before {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing.style-4 {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing.style-4 {
                text-align: right
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag {
                padding-left: 45px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag:before {
                left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-left: 30px;
                padding-right: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-right: 30px;
                padding-left: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(-80%);
                -ms-transform: translateX(-80%);
                transform: translateX(-80%)
            }

            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(80%);
                -ms-transform: translateX(80%);
                transform: translateX(80%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item:hover .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                transform: translateX(0%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                margin: 0;
                width: 100%
            }

            .eael-pricing-button-align-right .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                text-align: right
            }

            .eael-pricing-button-align-center .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-4 .footer {
                text-align: center
            }

            .eael-pricing-button-align-left .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                text-align: left
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                padding-right: 30px
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                padding-left: 30px
            }

            .only-in-pro {
                width: 100%;
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding: 15px;
                min-width: 200px;
                background: #ef5350;
                color: #fff;
                text-align: center
            }

            .only-in-pro .title {
                font-family: "Roboto", sans-serif;
                font-size: 24px;
                line-height: 40px;
                margin: 0px
            }

            div.tooltipster-sidetip.tooltipster-base.tooltipster-right .tooltipster-arrow {
                position: absolute;
                top: 50%
            }

            div.tooltipster-sidetip.tooltipster-top div.tooltipster-box {
                margin-bottom: 0px !important
            }

            div.tooltipster-sidetip.tooltipster-bottom div.tooltipster-box {
                margin-top: 0px !important
            }

            .tooltipster-base.tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                top: auto;
                bottom: -8px
            }

            div.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                top: -8px;
                bottom: auto
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing.style-1 .eael-pricing-item .price-tag {
                    display: block
                }
            }

            .tooltipster-fall,
            .tooltipster-grow.tooltipster-show {
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-base {
                display: flex;
                pointer-events: none;
                position: absolute
            }

            .tooltipster-box {
                flex: 1 1 auto
            }

            .tooltipster-content {
                box-sizing: border-box;
                max-height: 100%;
                max-width: 100%;
                overflow: auto
            }

            .tooltipster-ruler {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: fixed;
                right: 0;
                top: 0;
                visibility: hidden
            }

            .tooltipster-fade {
                opacity: 0;
                -webkit-transition-property: opacity;
                -moz-transition-property: opacity;
                -o-transition-property: opacity;
                -ms-transition-property: opacity;
                transition-property: opacity
            }

            .tooltipster-fade.tooltipster-show {
                opacity: 1
            }

            .tooltipster-grow {
                -webkit-transform: scale(0, 0);
                -moz-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0);
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform;
                -webkit-backface-visibility: hidden
            }

            .tooltipster-grow.tooltipster-show {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-swing {
                opacity: 0;
                -webkit-transform: rotateZ(4deg);
                -moz-transform: rotateZ(4deg);
                -o-transform: rotateZ(4deg);
                -ms-transform: rotateZ(4deg);
                transform: rotateZ(4deg);
                -webkit-transition-property: -webkit-transform, opacity;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform
            }

            .tooltipster-swing.tooltipster-show {
                opacity: 1;
                -webkit-transform: rotateZ(0);
                -moz-transform: rotateZ(0);
                -o-transform: rotateZ(0);
                -ms-transform: rotateZ(0);
                transform: rotateZ(0);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 1);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -moz-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -ms-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -o-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                transition-timing-function: cubic-bezier(.23, .635, .495, 2.4)
            }

            .tooltipster-fall {
                -webkit-transition-property: top;
                -moz-transition-property: top;
                -o-transition-property: top;
                -ms-transition-property: top;
                transition-property: top;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-fall.tooltipster-initial {
                top: 0 !important
            }

            .tooltipster-fall.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                top: 0 !important;
                opacity: 0
            }

            .tooltipster-slide {
                -webkit-transition-property: left;
                -moz-transition-property: left;
                -o-transition-property: left;
                -ms-transition-property: left;
                transition-property: left;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-slide.tooltipster-initial {
                left: -40px !important
            }

            .tooltipster-slide.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                left: 0 !important;
                opacity: 0
            }

            @keyframes  tooltipster-fading {
                0% {
                    opacity: 0
                }

                100% {
                    opacity: 1
                }
            }

            .tooltipster-update-fade {
                animation: tooltipster-fading .4s
            }

            @keyframes  tooltipster-rotating {
                25% {
                    transform: rotate(-2deg)
                }

                75% {
                    transform: rotate(2deg)
                }

                100% {
                    transform: rotate(0)
                }
            }

            .tooltipster-update-rotate {
                animation: tooltipster-rotating .6s
            }

            @keyframes  tooltipster-scaling {
                50% {
                    transform: scale(1.1)
                }

                100% {
                    transform: scale(1)
                }
            }

            .tooltipster-update-scale {
                animation: tooltipster-scaling .6s
            }

            .tooltipster-sidetip .tooltipster-box {
                background: #565656;
                border: 2px solid #000;
                border-radius: 4px
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-box {
                margin-top: 8px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-box {
                margin-right: 8px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-box {
                margin-left: 8px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-box {
                margin-bottom: 8px
            }

            .tooltipster-sidetip .tooltipster-content {
                color: #fff;
                line-height: 18px;
                padding: 6px 14px
            }

            .tooltipster-sidetip .tooltipster-arrow {
                overflow: hidden;
                position: absolute
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                height: 10px;
                margin-left: -10px;
                top: 0;
                width: 20px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                right: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                left: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                bottom: 0;
                height: 10px;
                margin-left: -10px;
                width: 20px
            }

            .tooltipster-sidetip .tooltipster-arrow-background,
            .tooltipster-sidetip .tooltipster-arrow-border {
                height: 0;
                position: absolute;
                width: 0
            }

            .tooltipster-sidetip .tooltipster-arrow-background {
                border: 10px solid transparent
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background {
                border-bottom-color: #565656;
                left: 0;
                top: 3px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background {
                border-left-color: #565656;
                left: -3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background {
                border-right-color: #565656;
                left: 3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background {
                border-top-color: #565656;
                left: 0;
                top: -3px
            }

            .tooltipster-sidetip .tooltipster-arrow-border {
                border: 10px solid transparent;
                left: 0;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border {
                border-bottom-color: #000
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border {
                border-left-color: #000
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border {
                border-right-color: #000
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border {
                border-top-color: #000
            }

            .tooltipster-sidetip .tooltipster-arrow-uncropped {
                position: relative
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped {
                top: -10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped {
                left: -10px
            }

            .clearfix::before,
            .clearfix::after {
                content: " ";
                display: table;
                clear: both
            }

            .eael-testimonial-slider.nav-top-left,
            .eael-testimonial-slider.nav-top-right,
            .eael-team-slider.nav-top-left,
            .eael-team-slider.nav-top-right,
            .eael-logo-carousel.nav-top-left,
            .eael-logo-carousel.nav-top-right,
            .eael-post-carousel.nav-top-left,
            .eael-post-carousel.nav-top-right,
            .eael-product-carousel.nav-top-left,
            .eael-product-carousel.nav-top-right {
                padding-top: 40px
            }

            .eael-contact-form input[type=text],
            .eael-contact-form input[type=email],
            .eael-contact-form input[type=url],
            .eael-contact-form input[type=tel],
            .eael-contact-form input[type=date],
            .eael-contact-form input[type=number],
            .eael-contact-form textarea {
                background: #fff;
                box-shadow: none;
                -webkit-box-shadow: none;
                float: none;
                height: auto;
                margin: 0;
                outline: 0;
                width: 100%
            }

            .eael-contact-form input[type=submit] {
                border: 0;
                float: none;
                height: auto;
                margin: 0;
                padding: 10px 20px;
                width: auto;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-contact-form.placeholder-hide input::-webkit-input-placeholder,
            .eael-contact-form.placeholder-hide textarea::-webkit-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input::-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea::-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-ms-input-placeholder,
            .eael-contact-form.placeholder-hide textarea:-ms-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea:-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-custom-radio-checkbox input[type=checkbox],
            .eael-custom-radio-checkbox input[type=radio] {
                -webkit-appearance: none;
                -moz-appearance: none;
                border-style: solid;
                border-width: 0;
                outline: none;
                min-width: 1px;
                width: 15px;
                height: 15px;
                background: #ddd;
                padding: 3px
            }

            .eael-custom-radio-checkbox input[type=checkbox]:before,
            .eael-custom-radio-checkbox input[type=radio]:before {
                content: "";
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                display: block
            }

            .eael-custom-radio-checkbox input[type=checkbox]:checked:before,
            .eael-custom-radio-checkbox input[type=radio]:checked:before {
                background: #999;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-custom-radio-checkbox input[type=radio] {
                border-radius: 50%
            }

            .eael-custom-radio-checkbox input[type=radio]:before {
                border-radius: 50%
            }

            .eael-post-elements-readmore-btn {
                font-size: 12px;
                font-weight: 500;
                -webkit-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
                display: inline-block
            }

            .elementor-lightbox .dialog-widget-content {
                width: 100%;
                height: 100%
            }

            .eael-contact-form-align-left,
            .elementor-widget-eael-weform.eael-contact-form-align-left .eael-weform-container {
                margin: 0 auto 0 0
            }

            .eael-contact-form-align-center,
            .elementor-widget-eael-weform.eael-contact-form-align-center .eael-weform-container {
                float: none;
                margin: 0 auto
            }

            .eael-contact-form-align-right,
            .elementor-widget-eael-weform.eael-contact-form-align-right .eael-weform-container {
                margin: 0 0 0 auto
            }

            .eael-force-hide {
                display: none !important
            }

            .eael-d-none {
                display: none !important
            }

            .eael-d-block {
                display: block !important
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating {
                display: none
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating~.count {
                display: none
            }

            .eael-pricing {
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .eael-pricing .eael-pricing-item {
                width: 100%;
                height: auto;
                margin: 0
            }

            .eael-pricing .eael-pricing-button {
                display: none;
                padding: 12px 25px;
                background: #00c853;
                font-size: 14px;
                font-weight: 600;
                color: #fff;
                text-transform: uppercase;
                text-decoration: none;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                border-radius: 4px
            }

            .eael-pricing .eael-pricing-button:hover {
                background: #03b048
            }

            .eael-pricing .eael-pricing-item ul {
                padding: 0px;
                margin: 0px;
                list-style: none
            }

            .eael-pricing .eael-pricing-item ul li.disable-item {
                text-decoration: line-through;
                opacity: .5
            }

            .eael-pricing .eael-pricing-item ul li span.li-icon {
                color: #00c853;
                margin-right: 6px;
                margin-left: 6px
            }

            .eael-pricing .eael-pricing-item ul li.disable-item span.li-icon {
                color: #ef5350
            }

            .eael-pricing.style-1 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-1 .eael-pricing-item {
                border: 1px solid rgba(9, 9, 9, .1);
                padding: 30px;
                border-radius: 5px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1:hover {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1 .eael-pricing-item.featured {
                position: relative
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-4:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 30px;
                right: -55px;
                z-index: 10;
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
                width: 200px;
                padding: 7px 0;
                white-space: nowrap
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-left.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-left.ribbon-4:before {
                right: auto;
                left: -55px;
                -webkit-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .eael-pricing.style-1 .eael-pricing-item .header {
                display: block;
                position: relative;
                z-index: 0;
                padding-bottom: 15px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .header:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-1 .eael-pricing-item .header .title {
                font-weight: 700;
                line-height: 30px;
                margin: 0px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700
            }

            .eael-pricing.style-1 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 0px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            .eael-pricing.style-1 .eael-pricing-item.featured-large {
                padding: 60px 0px
            }

            .eael-pricing.style-2 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-2 .eael-pricing-item {
                padding: 30px 0px;
                border-radius: 5px;
                margin: 0px;
                border: 1px solid rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-2 .eael-pricing-item.featured {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22)
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: inline-block;
                position: relative;
                width: 80px;
                height: 80px;
                background: #00c853;
                border-radius: 50%;
                margin-bottom: 30px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s;
                overflow: hidden
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon,
            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon i {
                font-size: 30px;
                color: #fff;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon {
                background: #43a047
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon i {
                color: #fff
            }

            .eael-pricing.style-2 .eael-pricing-item .header {
                background: #c8e6c9;
                padding: 25px 30px;
                margin-bottom: 15px;
                position: relative;
                z-index: 0
            }

            .eael-pricing.style-2 .eael-pricing-item.featured .header:after {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
                z-index: -1;
                background: rgba(255, 255, 255, .4)
            }

            .eael-pricing.style-2 .eael-pricing-item .header .title {
                font-size: 28px;
                font-weight: 700;
                line-height: 40px;
                margin: 0px
            }

            .eael-pricing.style-2 .eael-pricing-item .header .subititle {
                font-size: 14px;
                font-weight: 600;
                color: #6d6d6d
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700;
                color: #00c853
            }

            .eael-pricing.style-2 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 15px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            @media  only screen and (min-width: 768px)and (max-width: 992px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    width: 100%;
                    margin: 0 auto 30px auto
                }
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item {
                    width: 100%
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    margin: 0 auto 30px auto
                }
            }

            .eael-pricing-content-align-center .eael-pricing {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing {
                text-align: right
            }

            .eael-pricing-content-align-center .eael-pricing.style-4 {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing .eael-pricing-item.ribbon-4:before,
            .eael-pricing-content-align-right .eael-pricing .eael-pricing-item.ribbon-4:before {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing.style-4 {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing.style-4 {
                text-align: right
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag {
                padding-left: 45px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag:before {
                left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-left: 30px;
                padding-right: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-right: 30px;
                padding-left: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(-80%);
                -ms-transform: translateX(-80%);
                transform: translateX(-80%)
            }

            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(80%);
                -ms-transform: translateX(80%);
                transform: translateX(80%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item:hover .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                transform: translateX(0%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                margin: 0;
                width: 100%
            }

            .eael-pricing-button-align-right .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                text-align: right
            }

            .eael-pricing-button-align-center .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-4 .footer {
                text-align: center
            }

            .eael-pricing-button-align-left .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                text-align: left
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                padding-right: 30px
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                padding-left: 30px
            }

            .only-in-pro {
                width: 100%;
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding: 15px;
                min-width: 200px;
                background: #ef5350;
                color: #fff;
                text-align: center
            }

            .only-in-pro .title {
                font-family: "Roboto", sans-serif;
                font-size: 24px;
                line-height: 40px;
                margin: 0px
            }

            div.tooltipster-sidetip.tooltipster-base.tooltipster-right .tooltipster-arrow {
                position: absolute;
                top: 50%
            }

            div.tooltipster-sidetip.tooltipster-top div.tooltipster-box {
                margin-bottom: 0px !important
            }

            div.tooltipster-sidetip.tooltipster-bottom div.tooltipster-box {
                margin-top: 0px !important
            }

            .tooltipster-base.tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                top: auto;
                bottom: -8px
            }

            div.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                top: -8px;
                bottom: auto
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing.style-1 .eael-pricing-item .price-tag {
                    display: block
                }
            }

            .tooltipster-fall,
            .tooltipster-grow.tooltipster-show {
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-base {
                display: flex;
                pointer-events: none;
                position: absolute
            }

            .tooltipster-box {
                flex: 1 1 auto
            }

            .tooltipster-content {
                box-sizing: border-box;
                max-height: 100%;
                max-width: 100%;
                overflow: auto
            }

            .tooltipster-ruler {
                bottom: 0;
                left: 0;
                overflow: hidden;
                position: fixed;
                right: 0;
                top: 0;
                visibility: hidden
            }

            .tooltipster-fade {
                opacity: 0;
                -webkit-transition-property: opacity;
                -moz-transition-property: opacity;
                -o-transition-property: opacity;
                -ms-transition-property: opacity;
                transition-property: opacity
            }

            .tooltipster-fade.tooltipster-show {
                opacity: 1
            }

            .tooltipster-grow {
                -webkit-transform: scale(0, 0);
                -moz-transform: scale(0, 0);
                -o-transform: scale(0, 0);
                -ms-transform: scale(0, 0);
                transform: scale(0, 0);
                -webkit-transition-property: -webkit-transform;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform;
                -webkit-backface-visibility: hidden
            }

            .tooltipster-grow.tooltipster-show {
                -webkit-transform: scale(1, 1);
                -moz-transform: scale(1, 1);
                -o-transform: scale(1, 1);
                -ms-transform: scale(1, 1);
                transform: scale(1, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-swing {
                opacity: 0;
                -webkit-transform: rotateZ(4deg);
                -moz-transform: rotateZ(4deg);
                -o-transform: rotateZ(4deg);
                -ms-transform: rotateZ(4deg);
                transform: rotateZ(4deg);
                -webkit-transition-property: -webkit-transform, opacity;
                -moz-transition-property: -moz-transform;
                -o-transition-property: -o-transform;
                -ms-transition-property: -ms-transform;
                transition-property: transform
            }

            .tooltipster-swing.tooltipster-show {
                opacity: 1;
                -webkit-transform: rotateZ(0);
                -moz-transform: rotateZ(0);
                -o-transform: rotateZ(0);
                -ms-transform: rotateZ(0);
                transform: rotateZ(0);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 1);
                -webkit-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -moz-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -ms-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                -o-transition-timing-function: cubic-bezier(.23, .635, .495, 2.4);
                transition-timing-function: cubic-bezier(.23, .635, .495, 2.4)
            }

            .tooltipster-fall {
                -webkit-transition-property: top;
                -moz-transition-property: top;
                -o-transition-property: top;
                -ms-transition-property: top;
                transition-property: top;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-fall.tooltipster-initial {
                top: 0 !important
            }

            .tooltipster-fall.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                top: 0 !important;
                opacity: 0
            }

            .tooltipster-slide {
                -webkit-transition-property: left;
                -moz-transition-property: left;
                -o-transition-property: left;
                -ms-transition-property: left;
                transition-property: left;
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1);
                -webkit-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -moz-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -ms-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                -o-transition-timing-function: cubic-bezier(.175, .885, .32, 1.15);
                transition-timing-function: cubic-bezier(.175, .885, .32, 1.15)
            }

            .tooltipster-slide.tooltipster-initial {
                left: -40px !important
            }

            .tooltipster-slide.tooltipster-dying {
                -webkit-transition-property: all;
                -moz-transition-property: all;
                -o-transition-property: all;
                -ms-transition-property: all;
                transition-property: all;
                left: 0 !important;
                opacity: 0
            }

            @keyframes  tooltipster-fading {
                0% {
                    opacity: 0
                }

                100% {
                    opacity: 1
                }
            }

            .tooltipster-update-fade {
                animation: tooltipster-fading .4s
            }

            @keyframes  tooltipster-rotating {
                25% {
                    transform: rotate(-2deg)
                }

                75% {
                    transform: rotate(2deg)
                }

                100% {
                    transform: rotate(0)
                }
            }

            .tooltipster-update-rotate {
                animation: tooltipster-rotating .6s
            }

            @keyframes  tooltipster-scaling {
                50% {
                    transform: scale(1.1)
                }

                100% {
                    transform: scale(1)
                }
            }

            .tooltipster-update-scale {
                animation: tooltipster-scaling .6s
            }

            .tooltipster-sidetip .tooltipster-box {
                background: #565656;
                border: 2px solid #000;
                border-radius: 4px
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-box {
                margin-top: 8px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-box {
                margin-right: 8px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-box {
                margin-left: 8px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-box {
                margin-bottom: 8px
            }

            .tooltipster-sidetip .tooltipster-content {
                color: #fff;
                line-height: 18px;
                padding: 6px 14px
            }

            .tooltipster-sidetip .tooltipster-arrow {
                overflow: hidden;
                position: absolute
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                height: 10px;
                margin-left: -10px;
                top: 0;
                width: 20px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                right: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow {
                height: 20px;
                margin-top: -10px;
                left: 0;
                top: 0;
                width: 10px
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                bottom: 0;
                height: 10px;
                margin-left: -10px;
                width: 20px
            }

            .tooltipster-sidetip .tooltipster-arrow-background,
            .tooltipster-sidetip .tooltipster-arrow-border {
                height: 0;
                position: absolute;
                width: 0
            }

            .tooltipster-sidetip .tooltipster-arrow-background {
                border: 10px solid transparent
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-background {
                border-bottom-color: #565656;
                left: 0;
                top: 3px
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-background {
                border-left-color: #565656;
                left: -3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-background {
                border-right-color: #565656;
                left: 3px;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-background {
                border-top-color: #565656;
                left: 0;
                top: -3px
            }

            .tooltipster-sidetip .tooltipster-arrow-border {
                border: 10px solid transparent;
                left: 0;
                top: 0
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-border {
                border-bottom-color: #000
            }

            .tooltipster-sidetip.tooltipster-left .tooltipster-arrow-border {
                border-left-color: #000
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-border {
                border-right-color: #000
            }

            .tooltipster-sidetip.tooltipster-top .tooltipster-arrow-border {
                border-top-color: #000
            }

            .tooltipster-sidetip .tooltipster-arrow-uncropped {
                position: relative
            }

            .tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow-uncropped {
                top: -10px
            }

            .tooltipster-sidetip.tooltipster-right .tooltipster-arrow-uncropped {
                left: -10px
            }

            .clearfix::before,
            .clearfix::after {
                content: " ";
                display: table;
                clear: both
            }

            .eael-testimonial-slider.nav-top-left,
            .eael-testimonial-slider.nav-top-right,
            .eael-team-slider.nav-top-left,
            .eael-team-slider.nav-top-right,
            .eael-logo-carousel.nav-top-left,
            .eael-logo-carousel.nav-top-right,
            .eael-post-carousel.nav-top-left,
            .eael-post-carousel.nav-top-right,
            .eael-product-carousel.nav-top-left,
            .eael-product-carousel.nav-top-right {
                padding-top: 40px
            }

            .eael-contact-form input[type=text],
            .eael-contact-form input[type=email],
            .eael-contact-form input[type=url],
            .eael-contact-form input[type=tel],
            .eael-contact-form input[type=date],
            .eael-contact-form input[type=number],
            .eael-contact-form textarea {
                background: #fff;
                box-shadow: none;
                -webkit-box-shadow: none;
                float: none;
                height: auto;
                margin: 0;
                outline: 0;
                width: 100%
            }

            .eael-contact-form input[type=submit] {
                border: 0;
                float: none;
                height: auto;
                margin: 0;
                padding: 10px 20px;
                width: auto;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-contact-form.placeholder-hide input::-webkit-input-placeholder,
            .eael-contact-form.placeholder-hide textarea::-webkit-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input::-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea::-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-ms-input-placeholder,
            .eael-contact-form.placeholder-hide textarea:-ms-input-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-contact-form.placeholder-hide input:-moz-placeholder,
            .eael-contact-form.placeholder-hide textarea:-moz-placeholder {
                opacity: 0;
                visibility: hidden
            }

            .eael-custom-radio-checkbox input[type=checkbox],
            .eael-custom-radio-checkbox input[type=radio] {
                -webkit-appearance: none;
                -moz-appearance: none;
                border-style: solid;
                border-width: 0;
                outline: none;
                min-width: 1px;
                width: 15px;
                height: 15px;
                background: #ddd;
                padding: 3px
            }

            .eael-custom-radio-checkbox input[type=checkbox]:before,
            .eael-custom-radio-checkbox input[type=radio]:before {
                content: "";
                width: 100%;
                height: 100%;
                padding: 0;
                margin: 0;
                display: block
            }

            .eael-custom-radio-checkbox input[type=checkbox]:checked:before,
            .eael-custom-radio-checkbox input[type=radio]:checked:before {
                background: #999;
                -webkit-transition: all .25s linear 0s;
                -o-transition: all .25s linear 0s;
                transition: all .25s linear 0s
            }

            .eael-custom-radio-checkbox input[type=radio] {
                border-radius: 50%
            }

            .eael-custom-radio-checkbox input[type=radio]:before {
                border-radius: 50%
            }

            .eael-post-elements-readmore-btn {
                font-size: 12px;
                font-weight: 500;
                -webkit-transition: all 300ms ease-in-out;
                -o-transition: all 300ms ease-in-out;
                transition: all 300ms ease-in-out;
                display: inline-block
            }

            .elementor-lightbox .dialog-widget-content {
                width: 100%;
                height: 100%
            }

            .eael-contact-form-align-left,
            .elementor-widget-eael-weform.eael-contact-form-align-left .eael-weform-container {
                margin: 0 auto 0 0
            }

            .eael-contact-form-align-center,
            .elementor-widget-eael-weform.eael-contact-form-align-center .eael-weform-container {
                float: none;
                margin: 0 auto
            }

            .eael-contact-form-align-right,
            .elementor-widget-eael-weform.eael-contact-form-align-right .eael-weform-container {
                margin: 0 0 0 auto
            }

            .eael-force-hide {
                display: none !important
            }

            .eael-d-none {
                display: none !important
            }

            .eael-d-block {
                display: block !important
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating {
                display: none
            }

            .theme-martfury .elementor-wc-products .woocommerce ul.products li.product .product-inner .mf-rating .eael-star-rating.star-rating~.count {
                display: none
            }

            .eael-pricing {
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center
            }

            .eael-pricing .eael-pricing-item {
                width: 100%;
                height: auto;
                margin: 0
            }

            .eael-pricing .eael-pricing-button {
                display: none;
                padding: 12px 25px;
                background: #00c853;
                font-size: 14px;
                font-weight: 600;
                color: #fff;
                text-transform: uppercase;
                text-decoration: none;
                -webkit-transition: .3s;
                -o-transition: .3s;
                transition: .3s;
                border-radius: 4px
            }

            .eael-pricing .eael-pricing-button:hover {
                background: #03b048
            }

            .eael-pricing .eael-pricing-item ul {
                padding: 0px;
                margin: 0px;
                list-style: none
            }

            .eael-pricing .eael-pricing-item ul li.disable-item {
                text-decoration: line-through;
                opacity: .5
            }

            .eael-pricing .eael-pricing-item ul li span.li-icon {
                color: #00c853;
                margin-right: 6px;
                margin-left: 6px
            }

            .eael-pricing .eael-pricing-item ul li.disable-item span.li-icon {
                color: #ef5350
            }

            .eael-pricing.style-1 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-1 .eael-pricing-item {
                border: 1px solid rgba(9, 9, 9, .1);
                padding: 30px;
                border-radius: 5px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1:hover {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-1 .eael-pricing-item.featured {
                position: relative
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-1 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-4:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 30px;
                right: -55px;
                z-index: 10;
                font-size: 13px;
                font-weight: 600;
                text-transform: uppercase;
                -webkit-transform: rotate(45deg);
                -ms-transform: rotate(45deg);
                transform: rotate(45deg);
                width: 200px;
                padding: 7px 0;
                white-space: nowrap
            }

            .eael-pricing .eael-pricing-item .eael-pricing-image.ribbon-left.ribbon-4:before,
            .eael-pricing .eael-pricing-item.ribbon-left.ribbon-4:before {
                right: auto;
                left: -55px;
                -webkit-transform: rotate(-45deg);
                -ms-transform: rotate(-45deg);
                transform: rotate(-45deg)
            }

            .eael-pricing.style-1 .eael-pricing-item .header {
                display: block;
                position: relative;
                z-index: 0;
                padding-bottom: 15px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .header:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-1 .eael-pricing-item .header .title {
                font-weight: 700;
                line-height: 30px;
                margin: 0px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-1 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700
            }

            .eael-pricing.style-1 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 0px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-1 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            .eael-pricing.style-1 .eael-pricing-item.featured-large {
                padding: 60px 0px
            }

            .eael-pricing.style-2 {
                position: relative;
                z-index: 0;
                text-align: center
            }

            .eael-pricing.style-2 .eael-pricing-item {
                padding: 30px 0px;
                border-radius: 5px;
                margin: 0px;
                border: 1px solid rgba(9, 9, 9, .1)
            }

            .eael-pricing.style-2 .eael-pricing-item.featured {
                -webkit-box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22);
                box-shadow: 0 14px 28px rgba(0, 0, 0, .25), 0 10px 10px rgba(0, 0, 0, .22)
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-1:before {
                content: "";
                position: absolute;
                width: 100%;
                height: 3px;
                background: #00c853;
                top: 0px;
                left: 0px;
                right: 0px;
                z-index: 1;
                border-radius: 5px 5px 0px 0px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: #00c853;
                color: #fff;
                top: 35px;
                right: -15px;
                z-index: 10;
                font-size: 10px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 10px
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-2:after {
                content: "";
                position: absolute;
                top: 20px;
                right: -15px;
                width: 0;
                height: 0;
                border-bottom: 15px solid #00c853;
                border-right: 15px solid rgba(0, 0, 0, 0);
                z-index: 9;
                opacity: .9
            }

            .eael-pricing.style-2 .eael-pricing-item.ribbon-3:before {
                content: "Featured";
                position: absolute;
                width: auto;
                background: rgba(0, 0, 0, .6);
                color: #fff;
                top: 15px;
                right: 15px;
                z-index: 10;
                font-size: 11px;
                font-weight: 600;
                text-transform: uppercase;
                padding: 5px 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: inline-block;
                position: relative;
                width: 80px;
                height: 80px;
                background: #00c853;
                border-radius: 50%;
                margin-bottom: 30px;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s;
                overflow: hidden
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon,
            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon {
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-icon .icon i {
                font-size: 30px;
                color: #fff;
                -webkit-transition: .5s;
                -o-transition: .5s;
                transition: .5s
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon {
                background: #43a047
            }

            .eael-pricing.style-2 .eael-pricing-item:hover .eael-pricing-icon .icon i {
                color: #fff
            }

            .eael-pricing.style-2 .eael-pricing-item .header {
                background: #c8e6c9;
                padding: 25px 30px;
                margin-bottom: 15px;
                position: relative;
                z-index: 0
            }

            .eael-pricing.style-2 .eael-pricing-item.featured .header:after {
                content: "";
                position: absolute;
                width: 100%;
                height: 100%;
                top: 0px;
                left: 0px;
                right: 0px;
                bottom: 0px;
                z-index: -1;
                background: rgba(255, 255, 255, .4)
            }

            .eael-pricing.style-2 .eael-pricing-item .header .title {
                font-size: 28px;
                font-weight: 700;
                line-height: 40px;
                margin: 0px
            }

            .eael-pricing.style-2 .eael-pricing-item .header .subititle {
                font-size: 14px;
                font-weight: 600;
                color: #6d6d6d
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                position: relative;
                z-index: 0;
                padding: 15px 0px;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                content: "";
                position: absolute;
                width: 140px;
                height: 1px;
                bottom: 0px;
                left: 0px;
                right: 0px;
                margin: 0 auto;
                z-index: 1;
                background: rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag {
                position: relative;
                display: inline-block;
                font-size: 28px;
                font-weight: 500;
                line-height: 0px;
                margin: 0px auto
            }

            .eael-pricing.style-2 .eael-pricing-item .price-tag .price-currency {
                font-size: 24px;
                font-weight: 700;
                color: #00c853
            }

            .eael-pricing.style-2 .eael-pricing-item .price-period {
                color: #999
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul {
                display: block;
                width: 100%;
                margin-bottom: 15px
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li {
                display: block;
                width: 100%;
                height: auto;
                padding: 10px 15px;
                font-size: 14px;
                color: #6d6d6d;
                border-bottom: 1px solid rgba(9, 9, 9, .04)
            }

            .eael-pricing.style-2 .eael-pricing-item .body ul li:last-child {
                border: none
            }

            @media  only screen and (min-width: 768px)and (max-width: 992px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    width: 100%;
                    margin: 0 auto 30px auto
                }
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing {
                    display: block
                }

                .eael-pricing .eael-pricing-item {
                    width: 100%
                }

                .eael-pricing .eael-pricing-item,
                .eael-pricing.style-2 .eael-pricing-item,
                .eael-pricing.style-4 .eael-pricing-item {
                    margin: 0 auto 30px auto
                }
            }

            .eael-pricing-content-align-center .eael-pricing {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing {
                text-align: right
            }

            .eael-pricing-content-align-center .eael-pricing.style-4 {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing .eael-pricing-item.ribbon-4:before,
            .eael-pricing-content-align-right .eael-pricing .eael-pricing-item.ribbon-4:before {
                text-align: center
            }

            .eael-pricing-content-align-left .eael-pricing.style-4 {
                text-align: left
            }

            .eael-pricing-content-align-right .eael-pricing.style-4 {
                text-align: right
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag {
                padding-left: 45px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .price-tag:before {
                left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-left: 30px;
                padding-right: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .footer,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .header,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .footer {
                padding-right: 30px;
                padding-left: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-left .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-left: 30px
            }

            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .body ul li,
            .eael-pricing-content-align-right .eael-pricing.style-4 .eael-pricing-item .body ul li {
                padding-right: 30px
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(-80%);
                -ms-transform: translateX(-80%);
                transform: translateX(-80%)
            }

            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item .header:after {
                -webkit-transform: translateX(80%);
                -ms-transform: translateX(80%);
                transform: translateX(80%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-3 .eael-pricing-item:hover .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-3 .eael-pricing-item:hover .header:after {
                -webkit-transform: translateX(0%);
                -ms-transform: translateX(0%);
                transform: translateX(0%)
            }

            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .header:after,
            .eael-pricing-content-align-left .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-1 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-left .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after,
            .eael-pricing-content-align-right .eael-pricing.style-2 .eael-pricing-item .eael-pricing-tag:after {
                margin: 0;
                width: 100%
            }

            .eael-pricing-button-align-right .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                text-align: right
            }

            .eael-pricing-button-align-center .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-center .eael-pricing.style-4 .footer {
                text-align: center
            }

            .eael-pricing-button-align-left .eael-pricing.style-1 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-3 .footer,
            .eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                text-align: left
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-right .eael-pricing.style-4 .footer {
                padding-right: 30px
            }

            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-2 .footer,
            .eael-pricing-content-align-center.eael-pricing-button-align-left .eael-pricing.style-4 .footer {
                padding-left: 30px
            }

            .only-in-pro {
                width: 100%;
                -webkit-display: flex;
                display: -webkit-box;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                -webkit-box-pack: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding: 15px;
                min-width: 200px;
                background: #ef5350;
                color: #fff;
                text-align: center
            }

            .only-in-pro .title {
                font-family: "Roboto", sans-serif;
                font-size: 24px;
                line-height: 40px;
                margin: 0px
            }

            div.tooltipster-sidetip.tooltipster-base.tooltipster-right .tooltipster-arrow {
                position: absolute;
                top: 50%
            }

            div.tooltipster-sidetip.tooltipster-top div.tooltipster-box {
                margin-bottom: 0px !important
            }

            div.tooltipster-sidetip.tooltipster-bottom div.tooltipster-box {
                margin-top: 0px !important
            }

            .tooltipster-base.tooltipster-sidetip.tooltipster-top .tooltipster-arrow {
                top: auto;
                bottom: -8px
            }

            div.tooltipster-sidetip.tooltipster-bottom .tooltipster-arrow {
                top: -8px;
                bottom: auto
            }

            @media  only screen and (max-width: 480px) {
                .eael-pricing.style-1 .eael-pricing-item .price-tag {
                    display: block
                }
            }
        </style>
        <link rel='stylesheet' id='e-animations-css'
            href='../css/animations.min5900.css' media='all' />
        <script src='../js/form-styles0264.js'
            id='contact-form-styles-js'></script>
        <script id='ce4wp_form_submit-js-extra'>
            var ce4wp_form_submit_data = { "siteUrl": "https:\/\/blockexchange.live", "url": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php", "nonce": "9060598df6", "listNonce": "96012fc14e", "activatedNonce": "0223a033a0" };
        </script>
        <script src='../js/submit4957.js'
            id='ce4wp_form_submit-js'></script>
        <script id='astra-theme-js-js-extra'>
            var astra = { "break_point": "921", "isRtl": "", "is_scroll_to_id": "", "is_scroll_to_top": "" };
        </script>
        <script src='../js/frontend.min05da.js'
            id='astra-theme-js-js'></script>
        <script id='ht_ctc_app_js-js-extra'>
            var ht_ctc_chat_var = { "number": "17024209111", "pre_filled": "", "dis_m": "show", "dis_d": "show", "css": "display: none; cursor: pointer; z-index: 99999999;", "pos_d": "position: fixed; bottom: 15px; left: 15px;", "pos_m": "position: fixed; bottom: 15px; left: 15px;", "schedule": "no", "se": "150", "ani": "no-animations", "url_target_d": "_blank", "ga": "yes", "fb": "yes" };
        </script>
        <script src='../js/app06fc.js'
            id='ht_ctc_app_js-js'></script>
        <script id='pa-frontend-js-extra'>
            var PremiumSettings = { "ajaxurl": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php", "nonce": "4372be96a0" };
        </script>
        <script src='../js/pa-frontend-f5661b19c.min701f.js' id='pa-frontend-js'></script>
        <script src='../js/photon.min1c52.js' id='jetpack-photon-js'></script>
        <script id='copy-the-code-js-extra'>
            var copyTheCode = { "trim_lines": "", "remove_spaces": "1", "copy_content_as": "", "previewMarkup": "<h2>Hello World<\/h2>", "buttonMarkup": "<button class=\"copy-the-code-button\" title=\"\"><\/button>", "buttonSvg": "<svg viewBox=\"-21 0 512 512\" xmlns=\"http:\/\/www.w3.org\/2000\/svg\"><path d=\"m186.667969 416c-49.984375 0-90.667969-40.683594-90.667969-90.667969v-218.664062h-37.332031c-32.363281 0-58.667969 26.300781-58.667969 58.664062v288c0 32.363281 26.304688 58.667969 58.667969 58.667969h266.664062c32.363281 0 58.667969-26.304688 58.667969-58.667969v-37.332031zm0 0\"><\/path><path d=\"m469.332031 58.667969c0-32.40625-26.261719-58.667969-58.664062-58.667969h-224c-32.40625 0-58.667969 26.261719-58.667969 58.667969v266.664062c0 32.40625 26.261719 58.667969 58.667969 58.667969h224c32.402343 0 58.664062-26.261719 58.664062-58.667969zm0 0\"><\/path><\/svg>", "selectors": [{ "selector": "pre", "style": "button", "button_text": "Copy", "button_title": "Copy to Clipboard", "button_copy_text": "Copied!", "button_position": "inside", "copy_format": "" }], "selector": "pre", "settings": { "selector": "pre", "button-text": "Copy", "button-title": "Copy to Clipboard", "button-copy-text": "Copied!", "button-position": "inside", "copy-format": "default" }, "string": { "title": "Copy to Clipboard", "copy": "Copy", "copied": "Copied!" }, "image-url": "https:\/\/blockexchange.live\/wp-content\/plugins\/copy-the-code\/\/assets\/images\/copy-1.svg", "redirect_url": "" };
        </script>
        <script src='../js/copy-the-code61da.js'
            id='copy-the-code-js'></script>
        <script
            src='../js/jquery.dataTables.minc245.js'
            id='mcwp-crypto-datatable-js-js'></script>
        <script
            src='../js/dataTables.responsive.minc245.js'
            id='mcwp-crypto-datatable-resp-js'></script>
        <script id='mcwp-crypto-common-js-extra'>
            var mcwpajax = { "url": "https:\/\/blockexchange.live\/wp-content\/plugins\/cryptocurrency-widgets-pack\/", "ajax_url": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php" };
        </script>
        <script src='../js/commonc245.js'
            id='mcwp-crypto-common-js'></script>
        <script id='eael-general-js-extra'>
            var localize = { "ajaxurl": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php", "nonce": "bb819307d2", "i18n": { "added": "Added ", "compare": "Compare", "loading": "Loading..." }, "eael_translate_text": { "required_text": "is a required field", "invalid_text": "Invalid", "billing_text": "Billing", "shipping_text": "Shipping" }, "page_permalink": "https:\/\/blockexchange.live\/", "cart_redirectition": "", "cart_page_url": "", "el_breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } };
        </script>
        <script
            src='../js/general.min7e15.js'
            id='eael-general-js'></script>
        <script src='../js/eael-277530.js'
            id='eael-27-js'></script>
        <script src='../js/frontend-script1102.js'
            id='elementskit-framework-js-frontend-js'></script>
        <script id='elementskit-framework-js-frontend-js-after'>
            var elementskit = {
                resturl: 'https://blockexchange.live/wp-json/elementskit/v1/',
            }


        </script>
        <script src='../js/widget-scripts1102.js'
            id='ekit-widget-scripts-js'></script>
        <script src='../js/select2.full.min4819.js'
            id='select2-js'></script>
        <script src='../js/underscore.mind584.js' id='underscore-js'></script>
        <script id='wp-util-js-extra'>
            var _wpUtilSettings = { "ajax": { "url": "\/wp-admin\/admin-ajax.php" } };
        </script>
        <script src='../js/wp-util.min6a4d.js' id='wp-util-js'></script>
        <script src='../js/um-crop.min21bb.js'
            id='um_crop-js'></script>
        <script src='../js/um-modal.min21bb.js'
            id='um_modal-js'></script>
        <script src='../js/um-jquery-form.min21bb.js'
            id='um_jquery_form-js'></script>
        <script src='../js/um-fileupload21bb.js'
            id='um_fileupload-js'></script>
        <script src='../js/picker21bb.js'
            id='um_datetime-js'></script>
        <script src='../js/picker.date21bb.js'
            id='um_datetime_date-js'></script>
        <script src='../js/picker.time21bb.js'
            id='um_datetime_time-js'></script>
        <script src='../js/regenerator-runtime.min3937.js'
            id='regenerator-runtime-js'></script>
        <script src='../js/wp-polyfill.min2c7c.js' id='wp-polyfill-js'></script>
        <script src='../js/hooks.min6c65.js' id='wp-hooks-js'></script>
        <script src='../js/i18n.mine57b.js' id='wp-i18n-js'></script>
        <script id='wp-i18n-js-after'>
            wp.i18n.setLocaleData({ 'text direction\u0004ltr': ['ltr'] });
        </script>
        <script src='../js/um-raty.min21bb.js'
            id='um_raty-js'></script>
        <script src='../js/um-tipsy.min21bb.js'
            id='um_tipsy-js'></script>
        <script src='../js/imagesloaded.mineda1.js' id='imagesloaded-js'></script>
        <script src='../js/masonry.min3a05.js' id='masonry-js'></script>
        <script src='../js/jquery.masonry.minef70.js' id='jquery-masonry-js'></script>
        <script src='../js/simplebar.min21bb.js'
            id='um_scrollbar-js'></script>
        <script src='../js/um-functions.min21bb.js'
            id='um_functions-js'></script>
        <script src='../js/um-responsive.min21bb.js'
            id='um_responsive-js'></script>
        <script src='../js/um-conditional.min21bb.js'
            id='um_conditional-js'></script>
        <script id='um_scripts-js-extra'>
            var um_scripts = { "max_upload_size": "536870912", "nonce": "f4112106e0" };
        </script>
        <script src='../js/um-scripts.min21bb.js'
            id='um_scripts-js'></script>
        <script src='../js/um-profile.min21bb.js'
            id='um_profile-js'></script>
        <script src='../js/um-account.min21bb.js'
            id='um_account-js'></script>
        <script src='../js/frontend1f62.js'
            id='hfe-frontend-js-js'></script>
        <script src='../js/jquery-numerator.min3958.js'
            id='jquery-numerator-js'></script>
        <script src='../js/waypoints.min05da.js'
            id='elementor-waypoints-js'></script>
        <script
            src='../js/lottie.min2dc8.js'
            id='lottie-js-js'></script>
        <script src='../js/webpack-pro.runtime.minac9e.js'
            id='elementor-pro-webpack-runtime-js'></script>
        <script src='../js/webpack.runtime.min5900.js'
            id='elementor-webpack-runtime-js'></script>
        <script src='../js/frontend-modules.min5900.js'
            id='elementor-frontend-modules-js'></script>
        <script id='elementor-pro-frontend-js-before'>
            var ElementorProFrontendConfig = { "ajaxurl": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php", "nonce": "853478ac37", "urls": { "assets": "https:\/\/blockexchange.live\/wp-content\/plugins\/elementor-pro\/assets\/", "rest": "https:\/\/blockexchange.live\/wp-json\/" }, "shareButtonsNetworks": { "facebook": { "title": "Facebook", "has_counter": true }, "twitter": { "title": "Twitter" }, "linkedin": { "title": "LinkedIn", "has_counter": true }, "pinterest": { "title": "Pinterest", "has_counter": true }, "reddit": { "title": "Reddit", "has_counter": true }, "vk": { "title": "VK", "has_counter": true }, "odnoklassniki": { "title": "OK", "has_counter": true }, "tumblr": { "title": "Tumblr" }, "digg": { "title": "Digg" }, "skype": { "title": "Skype" }, "stumbleupon": { "title": "StumbleUpon", "has_counter": true }, "mix": { "title": "Mix" }, "telegram": { "title": "Telegram" }, "pocket": { "title": "Pocket", "has_counter": true }, "xing": { "title": "XING", "has_counter": true }, "whatsapp": { "title": "WhatsApp" }, "email": { "title": "Email" }, "print": { "title": "Print" } }, "facebook_sdk": { "lang": "en_US", "app_id": "" }, "lottie": { "defaultAnimationUrl": "https:\/\/blockexchange.live\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json" } };
        </script>
        <script src='../js/frontend.minac9e.js'
            id='elementor-pro-frontend-js'></script>
        <script src='../js/core.min3f14.js' id='jquery-ui-core-js'></script>
        <script id='elementor-frontend-js-before'>
            var elementorFrontendConfig = { "environmentMode": { "edit": false, "wpPreview": false, "isScriptDebug": false }, "i18n": { "shareOnFacebook": "Share on Facebook", "shareOnTwitter": "Share on Twitter", "pinIt": "Pin it", "download": "Download", "downloadImage": "Download image", "fullscreen": "Fullscreen", "zoom": "Zoom", "share": "Share", "playVideo": "Play Video", "previous": "Previous", "next": "Next", "close": "Close" }, "is_rtl": false, "breakpoints": { "xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600 }, "responsive": { "breakpoints": { "mobile": { "label": "Mobile", "value": 767, "default_value": 767, "direction": "max", "is_enabled": true }, "mobile_extra": { "label": "Mobile Extra", "value": 880, "default_value": 880, "direction": "max", "is_enabled": false }, "tablet": { "label": "Tablet", "value": 1024, "default_value": 1024, "direction": "max", "is_enabled": true }, "tablet_extra": { "label": "Tablet Extra", "value": 1200, "default_value": 1200, "direction": "max", "is_enabled": false }, "laptop": { "label": "Laptop", "value": 1366, "default_value": 1366, "direction": "max", "is_enabled": false }, "widescreen": { "label": "Widescreen", "value": 2400, "default_value": 2400, "direction": "min", "is_enabled": false } } }, "version": "3.11.1", "is_static": false, "experimentalFeatures": { "e_dom_optimization": true, "e_optimized_assets_loading": true, "a11y_improvements": true, "theme_builder_v2": true, "landing-pages": true, "kit-elements-defaults": true, "page-transitions": true, "notes": true, "form-submissions": true, "e_scroll_snap": true }, "urls": { "assets": "https:\/\/blockexchange.live\/wp-content\/plugins\/elementor\/assets\/" }, "swiperClass": "swiper-container", "settings": { "page": [], "editorPreferences": [] }, "kit": { "active_breakpoints": ["viewport_mobile", "viewport_tablet"], "global_image_lightbox": "yes", "lightbox_enable_counter": "yes", "lightbox_enable_fullscreen": "yes", "lightbox_enable_zoom": "yes", "lightbox_enable_share": "yes", "lightbox_title_src": "title", "lightbox_description_src": "description" }, "post": { "id": 27, "title": "Home%20-%20OXFX%20Investment", "excerpt": "", "featuredImage": false } };
        </script>
        <script src='../js/frontend.min5900.js'
            id='elementor-frontend-js'></script>
        <script src='../js/elements-handlers.minac9e.js'
            id='pro-elements-handlers-js'></script>
        <script src='../js/animate-circle1102.js'
            id='animate-circle-js'></script>
        <script id='elementskit-elementor-js-extra'>
            var ekit_config = { "ajaxurl": "https:\/\/blockexchange.live\/wp-admin\/admin-ajax.php", "nonce": "fc4f5ea50c" };
        </script>
        <script src='../js/elementor1102.js'
            id='elementskit-elementor-js'></script>
        <script src='../js/swiper.min1102.js'
            id='swiper-js'></script>
        <script id='wpforms-elementor-js-extra'>
            var wpformsElementorVars = { "captcha_provider": "recaptcha", "recaptcha_type": "v2" };
        </script>
        <script src='../js/frontend.minee47.js'
            id='wpforms-elementor-js'></script>
        <script>
            /(trident|msie)/i.test(navigator.userAgent) && document.getElementById && window.addEventListener && window.addEventListener("hashchange", function () { var t, e = location.hash.substring(1); /^[A-z0-9_-]+$/.test(e) && (t = document.getElementById(e)) && (/^(?:a|select|input|button|textarea)$/i.test(t.tagName) || (t.tabIndex = -1), t.focus()) }, !1);
        </script>
        <script src='/js/e-202308.js' defer></script>
        <script>
            _stq = window._stq || [];
            _stq.push(['view', { v: 'ext', blog: '194916703', post: '27', tz: '0', srv: 'blockexchange.live', j: '1:11.8.4' }]);
            _stq.push(['clickTrackerInit', '194916703', '27']);
        </script>
        <script type="text/javascript">
            jQuery(window).on('load', function () {
                jQuery('input[name="um_request"]').val('');
            });
        </script>
</body>

<!-- Mirrored from blockexchange.live/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 20 Feb 2023 05:59:09 GMT -->

</html>
