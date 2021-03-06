<!DOCTYPE html>
<html lang="en" class="no-js">
    <head>

        <meta charset="utf-8">
        <title><?php if (is_single() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="initial-scale=1">
        <meta http-equiv="cleartype" content="on">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

        <link href="https://info.mzalendo.com/static/css/kenya.css" rel="stylesheet" type="text/css" />

        <script type="text/javascript" charset="utf-8">

            window.pombola_settings = {
                google_analytics_account : 'UA-660910-5',
                static_url:                '/static/',
                map_bounds: {
                  north: 5.06,
                  east:  41.91,
                  south: -4.73,
                  west:  33.83
                },
                crosshairs_image: '/static/images/crosshairs.png'
            };

            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', pombola_settings.google_analytics_account);
            ga('send', 'pageview');

        </script>

        <script type="text/javascript" src="https://info.mzalendo.com/static/js/modernizr.js" charset="utf-8"></script>

        <!--[if (lt IE 9) & (!IEMobile)]>
            <script type="text/javascript" src="https://info.mzalendo.com/static/js/respond.js" charset="utf-8"></script>
        <![endif]-->

        <link rel="icon" type="image/png" href="https://info.mzalendo.com/static/images/favicon.png">

        <script src="<?php bloginfo('template_url'); ?>/assets/js/blog.js"></script>
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

        <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/blog.css" />

        <?php wp_head(); ?>

    </head>
    <body <?php body_class(); ?>>

<header class="site-header">
    <div class="wrapper">

        <a href="https://info.mzalendo.com" class="site-header__logo-svg" aria-label="Mzalendo home"><svg width="165" height="40" viewBox="0 0 165 40" xmlns="http://www.w3.org/2000/svg"><title><?php if (is_single() || is_archive()) { wp_title('',true); } else { bloginfo('name'); echo(' &#8212; '); bloginfo('description'); } ?></title><g fill="none" fill-rule="evenodd"><path d="M17.958 9.784c.187.34.37.69.543 1.046.162.328.314.656.454.977-1.26 2.994-1.9 6.082-1.9 9.182 0 3.098.64 6.187 1.9 9.18-.135.31-.28.623-.442.954-.173.355-.356.707-.542 1.046-1.694 3.087-4.62 6.206-5.726 6.206-1.108 0-4.033-3.12-5.727-6.206-.187-.34-.37-.69-.542-1.046-.16-.33-.307-.645-.442-.955 1.26-2.993 1.9-6.082 1.9-9.18 0-3.1-.64-6.19-1.9-9.183.14-.32.292-.65.453-.977.174-.355.356-.707.543-1.046 1.734-3.153 4.652-6.197 5.714-6.197 1.06 0 3.98 3.044 5.714 6.197" fill="#C32810"/><path d="M10.308 10.907c0-3.128.46-5.805 1.142-7.038.175-.12.344-.214.486-.272v14.957c-.926-.646-1.628-3.824-1.628-7.648M14.18 10.907c0-3.128-.462-5.805-1.143-7.038-.175-.12-.343-.214-.486-.272v14.957c.927-.646 1.63-3.824 1.63-7.648M14.18 31.055c0 3.128-.462 5.805-1.143 7.038-.175.118-.343.213-.486.27V23.407c.927.646 1.63 3.823 1.63 7.648M10.308 31.055c0 3.128.46 5.805 1.142 7.038.175.118.344.213.486.27V23.407c-.926.646-1.628 3.823-1.628 7.648M13.75 20.98c0-1.226-.675-2.22-1.506-2.22-.832 0-1.506.994-1.506 2.22 0 1.228.674 2.223 1.506 2.223.83 0 1.505-.995 1.505-2.222" fill="#FFF"/><path d="M17.958 9.775c.187.34.37.69.543 1.046.162.33.314.657.454.978-1.26 2.994-1.9 6.082-1.9 9.182 0 3.1.64 6.188 1.9 9.18-.135.31-.28.624-.442.955-.173.356-.356.707-.542 1.046-1.694 3.088-4.62 6.216-5.726 6.216-1.108 0-4.033-3.128-5.727-6.215-.187-.338-.37-.69-.542-1.045-.16-.33-.307-.645-.442-.955 1.26-2.992 1.9-6.08 1.9-9.18 0-3.1-.64-6.188-1.9-9.182.14-.32.292-.65.453-.977.174-.354.356-.706.543-1.045 1.734-3.153 4.652-6.188 5.714-6.188 1.06 0 3.98 3.035 5.714 6.188zm-5.715 29.34c1.3 0 4.035-2.432 6.25-6.37l3.957 6.844.873-.505-4.274-7.392c.042-.086.087-.167.13-.252.19-.393.36-.763.52-1.132l.062-.146-.044-.1c1.238-2.964 1.87-6.017 1.87-9.082 0-3.066-.632-6.12-1.87-9.082l.044-.102-.063-.146c-.164-.378-.342-.767-.532-1.155-.036-.073-.075-.14-.11-.214l.682-1.183c.61-.024 1.307-.5 1.6-1.01.383-.663 3.723-7.688 3.06-8.07-.663-.383-5.077 6.022-5.46 6.685-.293.508-.357 1.352-.073 1.89l-.366.636c-2.216-3.947-4.956-6.384-6.257-6.384-1.3 0-4.04 2.437-6.256 6.384l-.367-.636c.284-.538.22-1.382-.074-1.89C5.164 6.04.75-.366.086.016c-.662.383 2.678 7.408 3.06 8.07.294.51.992.987 1.6 1.01l.684 1.185c-.036.074-.075.142-.11.215-.19.388-.37.777-.532 1.155l-.063.146.044.102C3.53 14.86 2.9 17.914 2.9 20.98c0 3.065.63 6.118 1.87 9.08l-.045.102.063.146c.158.37.328.74.52 1.133.04.086.088.167.13.253l-4.273 7.392.872.504 3.957-6.846c2.216 3.94 4.95 6.37 6.25 6.37z" fill="#000"/><path d="M55.404 28.18h-2.37c-.618 0-.76-.31-.783-.973l-.26-8.132h-.047l-3.58 8.582c-.19.474-.5.522-.807.522h-.877c-.453 0-.713-.072-.95-.546l-4.102-8.56h-.047l-.142 8.37c0 .664-.308.735-.805.735h-1.945c-.545 0-.806-.19-.806-.69v-.07l.64-14.937c.025-.57.284-.76.735-.76h1.708c.545 0 .758.19.97.64l5.24 10.718h.048l4.743-10.716c.19-.403.45-.64.972-.64h1.66c.474 0 .64.166.664.593l.782 15.127v.072c0 .45-.213.663-.64.663M71.008 28.18H58.964c-.356 0-.546-.285-.546-.617v-.902c0-.33.047-.568.26-.875l7.4-10.98-.026-.023h-6.59c-.427 0-.688-.188-.688-.687v-1.802c0-.355.213-.57.57-.57h11.19c.498 0 .665.286.665.64v.713c0 .426-.05.83-.333 1.233l-7.304 10.787.024.024h7.398c.402 0 .64.214.64.688v1.683c0 .405-.213.69-.617.69M80.614 17.248c-.167-.52-.31-.97-.428-1.374h-.047c-.12.426-.263.9-.428 1.4l-1.494 4.646h3.89l-1.494-4.672zm7.042 10.93H85c-.57 0-.783-.26-.925-.662l-.95-2.75H77.27l-.948 2.844c-.096.31-.285.57-.712.57h-2.703c-.26 0-.38-.167-.38-.38 0-.096 0-.19.048-.284l5.643-15.198c.142-.357.356-.594.807-.594h2.44c.476 0 .737.214.855.522l5.762 15.104c.047.142.07.26.07.354 0 .285-.164.475-.496.475zM99.726 28.18h-9.01c-.498 0-.76-.12-.76-.76V12.386c0-.426.215-.663.664-.663h2.396c.522 0 .71.166.71.71v12.568h6.048c.45 0 .664.26.664.687v1.8c0 .523-.31.69-.712.69M112.365 28.18h-9.2c-.545 0-.782-.143-.782-.736V12.387c0-.402.213-.663.616-.663h9.436c.38 0 .594.19.594.426v.12l-.215 1.92c-.047.498-.355.592-.924.592h-5.737v3.533h5.382c.522 0 .712.262.712.64v1.732c0 .474-.237.687-.688.687h-5.407v3.747h6.19c.425 0 .687.19.687.64v1.756c0 .45-.215.663-.665.663M129.557 28.18h-2.016c-.425 0-.78-.167-1.042-.523l-7.066-9.412h-.047v9.223c0 .52-.237.71-.71.71h-2.207c-.545 0-.782-.117-.782-.687V12.46c0-.617.284-.736.782-.736h1.992c.474 0 .71.142.972.498l7.066 9.484h.048v-9.294c0-.522.26-.688.734-.688h2.3c.618 0 .664.332.664.735v14.984c0 .617-.26.735-.687.735M138.664 14.972h-1.327v10.006h1.683c2.37 0 4.742-1.02 4.742-5.003 0-3.532-1.755-5.003-5.098-5.003m.498 13.207h-4.837c-.474 0-.758-.12-.758-.736v-14.96c0-.523.14-.76.782-.76h3.745c5.88 0 9.697 1.968 9.697 8.276 0 5.69-3.816 8.18-8.63 8.18M157.136 14.57c-2.062 0-3.46 1.826-3.46 5.334 0 3.747 1.28 5.382 3.532 5.382 2.086 0 3.437-1.683 3.437-5.358 0-3.817-1.256-5.358-3.51-5.358m-.045 13.917c-4.767 0-7.445-3.39-7.445-8.487 0-5.075 2.868-8.63 7.587-8.63 4.955 0 7.444 3.674 7.444 8.487 0 5.335-3.13 8.63-7.586 8.63" fill="#FFF"/></g></svg>
        </a>
        <a href="https://info.mzalendo.com/" class="site-header__no-svg-fallback-logo" aria-label="Mzalendo home">Mzalendo</a>

        <span class="site-header__tagline">Eye on Kenyan Parliament</span>

        <ul class="site-header__social">
            <li><a href="https://youtube.com/user/MzalendoKenya" aria-label="YouTube">
                <svg width="52" height="36" viewbox="0 0 52 36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><path d="M51 5.6c-.7-2.2-2.4-4-4.7-4.5C42.3 0 26 0 26 0S9.7 0 5.7 1c-2.2.7-4 2.4-4.6 4.6C0 9.6 0 18 0 18s0 8.4 1 12.4c.7 2.2 2.4 4 4.7 4.5C9.7 36 26 36 26 36s16.3 0 20.3-1c2.3-.7 4-2.4 4.6-4.6C52 26.4 52 18 52 18s0-8.3-1-12.4z" fill="red"/><path fill="#FFF" d="M33 18.4l-13.6-7.7v15.5z"/></g></svg>

            </a></li>
            <li><a href="https://facebook.com/MzalendoWatch" aria-label="Facebook">
                <svg width="36" height="36" viewbox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><rect fill="#3B5998" width="36" height="36" rx="6"/><path d="M24.1 36h-5.5V22.3H14V17h4.6v-4c0-4.5 2.8-7 6.9-7l4 .2V11h-2.7c-2.3 0-2.7 1-2.7 2.6V17h5.3l-.7 5.3h-4.6V36z" fill="#FFF"/></g></svg>

            </a></li>
            <li><a href="https://instagram.com/mzalendowatch" aria-label="Instagram">
                <svg width="36" height="36" viewbox="0 0 36 36" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><rect id="a" width="36" height="36" rx="6"/><radialGradient cx="26.6%" cy="107.7%" fx="26.6%" fy="107.7%" r="99.1%" id="b"><stop stop-color="#FD5" offset="0%"/><stop stop-color="#FD5" offset="10%"/><stop stop-color="#FF543E" offset="50%"/><stop stop-color="#C837AB" offset="100%"/></radialGradient><radialGradient cx="-16.8%" cy="7.2%" fx="-16.8%" fy="7.2%" r="44.3%" id="d"><stop stop-color="#3771C8" offset="0%"/><stop stop-color="#3771C8" offset="12.8%"/><stop stop-color="#60F" stop-opacity="0" offset="100%"/></radialGradient></defs><g fill="none" fill-rule="evenodd"><mask id="c" fill="#fff"><use xlink:href="#a"/></mask><use fill="#3B5998" fill-rule="nonzero" xlink:href="#a"/><path d="M18-2H6.7a10 10 0 0 0-3.9 1 8.6 8.6 0 0 0-4.6 6.5c-.2 1-.2 1.2-.2 6v17.8A10 10 0 0 0-1 33c1 2.2 3 3.9 5.5 4.5l2.9.4a896 896 0 0 0 21.1 0c1.4 0 2.2-.2 3-.4A8.4 8.4 0 0 0 37 33c.6-1.1.8-2.2 1-3.8a849 849 0 0 0 0-22.6 9.8 9.8 0 0 0-1-3.9 8.6 8.6 0 0 0-6.6-4.7L24.5-2H18z" fill="url(#b)" fill-rule="nonzero" mask="url(#c)"/><path d="M18-2H6.7a10 10 0 0 0-3.9 1 8.6 8.6 0 0 0-4.6 6.5c-.2 1-.2 1.2-.2 6v17.8A10 10 0 0 0-1 33c1 2.2 3 3.9 5.5 4.5l2.9.4a896 896 0 0 0 21.1 0c1.4 0 2.2-.2 3-.4A8.4 8.4 0 0 0 37 33c.6-1.1.8-2.2 1-3.8a849 849 0 0 0 0-22.6 9.8 9.8 0 0 0-1-3.9 8.6 8.6 0 0 0-6.6-4.7L24.5-2H18z" fill="url(#d)" fill-rule="nonzero" mask="url(#c)"/><path d="M18 7.1h-4.5a8 8 0 0 0-2.6.6c-.7.3-1.4.6-2 1.2-.6.6-1 1.3-1.2 2a8 8 0 0 0-.5 2.6 78.3 78.3 0 0 0 .5 11.6c.3.7.6 1.4 1.2 2 .6.6 1.2 1 2 1.2a8 8 0 0 0 2.6.5 77.2 77.2 0 0 0 11.6-.5c.7-.3 1.3-.6 2-1.2.6-.6 1-1.3 1.2-2a8 8 0 0 0 .5-2.6 78 78 0 0 0-.5-11.6c-.3-.7-.6-1.4-1.2-2-.7-.6-1.3-1-2-1.2a8 8 0 0 0-2.6-.5H18zm-1 2h5.4c1 0 1.6.3 2 .4a3.4 3.4 0 0 1 2 2c.2.5.4 1 .5 2.1a75.7 75.7 0 0 1-.4 10.8l-.8 1.3c-.4.4-.8.6-1.3.8a6 6 0 0 1-2 .4 75.7 75.7 0 0 1-10.8-.4 3.4 3.4 0 0 1-2-2 6 6 0 0 1-.5-2.1 76.1 76.1 0 0 1 .4-10.8 3.4 3.4 0 0 1 2-2 60.4 60.4 0 0 1 5.4-.4l.1-.1zm6.8 1.8a1.3 1.3 0 1 0 0 2.6 1.3 1.3 0 0 0 0-2.6zM18 12.4a5.6 5.6 0 1 0 0 11.2 5.6 5.6 0 0 0 0-11.2zm0 2a3.6 3.6 0 1 1 0 7.2 3.6 3.6 0 0 1 0-7.2z" fill="#FFF" fill-rule="nonzero" mask="url(#c)"/></g></svg>

            </a></li>
            <li><a href="https://twitter.com/MzalendoWatch" aria-label="Twitter">
                <svg width="36" height="36" viewbox="0 0 36 36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="nonzero" fill="none"><rect fill="#FFF" width="36" height="36" rx="6"/><path d="M29 12c-.8.4-1.6.6-2.5.7 1-.5 1.6-1.4 2-2.4-1 .5-1.8.9-2.8 1a4.3 4.3 0 0 0-7.4 4c-3.5-.2-6.7-2-8.8-4.5-.4.6-.6 1.4-.6 2.1 0 1.5.7 2.8 1.9 3.6-.7 0-1.4-.2-2-.5 0 2.1 1.5 3.8 3.5 4.2a4.4 4.4 0 0 1-2 .1c.6 1.7 2.2 3 4 3A8.7 8.7 0 0 1 8 25c2 1.2 4.2 1.9 6.6 1.9 8 0 12.3-6.5 12.3-12.2v-.6c.8-.6 1.5-1.3 2.1-2.2z" fill="#1DA1F2"/></g></svg>

            </a></li>
        </ul>

    </div>
</header>

<nav class="site-menu">
    <div class="wrapper">

        <a class="site-menu__mobile-toggle js-expanded-toggle" href="#menu">
            <svg width="12" height="10" viewbox="0 0 12 10" xmlns="http://www.w3.org/2000/svg"><path d="M0 4h12v2H0V4zm0 4h12v2H0V8zm0-8h12v2H0V0z" fill="#FFF" fill-rule="nonzero"/></svg>
            Menu
        </a>

        <form class="site-menu__search" action="/search/" method="get" role="search">
            <input class="search-autocomplete-name" type="text" name="q" placeholder="Search&hellip;" aria-label="Enter search term" />
            <button type="submit" aria-label="Search"><svg width="16" height="16" viewbox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"><path d="M15.5 13.6l-3.8-3.2c-.4-.4-.8-.5-1.1-.5a6 6 0 1 0-.7.7c0 .3.1.7.5 1.1l3.2 3.8c.6.6 1.5.7 2 .1.6-.5.5-1.4-.1-2zM6 10a4 4 0 1 1 0-8 4 4 0 0 1 0 8z" fill="#444" fill-rule="nonzero"/></svg></button>
        </form>

        <ul id="menu" class="site-menu__links">

<li>
    <a href="https://info.mzalendo.com/">Home</a>
</li>

<li class="has-submenu">
    <a href="https://info.mzalendo.com/info/parliament-overview">Parliament</a>

    <ul id="submenu-parliament" class="js-hover-dropdown">
        <li>
            <a href="https://info.mzalendo.com/info/parliament-overview">Parliament Overview</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/committee-overview">Committee Overview</a>
        </li>

        <li>
            <a href="https://info.mzalendo.com/hansard/">Hansard</a>
        </li>

        <li>
            <a href="https://info.mzalendo.com/organisation/is/party/">Political Parties</a>
        </li>
    </ul>

</li>

<li class="has-submenu">
    <a href="https://info.mzalendo.com/position/member-national-assembly/?view=grid">MPs</a>

    <ul id="submenu-mps" class="js-hover-dropdown">
        <li><a href="https://info.mzalendo.com/position/member-national-assembly/?view=grid">NA Members</a></li>
        <li><a href="https://info.mzalendo.com/position/senator/?view=grid">Senators</a></li>
        <li><a href="https://info.mzalendo.com/female-representatives/">Women</a></li>
        <li><a href="https://info.mzalendo.com/youthful-mps/">Youthful MPs</a></li>
    </ul>

</li>

<li class="has-submenu">
    <a href="#submenu-research">Research</a>

    <ul id="submenu-research" class="js-hover-dropdown">
        <li>
            <a href="https://info.mzalendo.com/women/">Debunking Myths on Women MPs</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/shujaaz/2015">People’s Shujaaz Awards</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/proposed-bills">National Youth Employment Authority</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/collaboration-outputs">Collaboration Outputs</a>
        </li>
    </ul>

</li>

<li class="has-submenu">
    <a href="https://info.mzalendo.com/info/news">News</a>

    <ul id="submenu-news" class="js-hover-dropdown">
        <li>
          <a href="https://www.mzalendo.com/blog/">Blog</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/newsletter">Newsletter</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/press">Press</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/infographics">Infographics</a>
        </li>
    </ul>

</li>

<li class="has-submenu">
    <a href="https://info.mzalendo.com/info/democracy-resources">Democracy Resources</a>

    <ul id="submenu-democracy-resources" class="js-hover-dropdown">
        <li>
            <a href="https://info.mzalendo.com/info/citizens-rights">Citizens Rights &amp; Responsibilities</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/democracy-faq">Democracy FAQs</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/ministry-overview">Ministry Overview</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/constitution-2010">Constitution 2010</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/democracy-documents">Democracy Documents</a>
        </li>
    </ul>

</li>

<li class="has-submenu">
    <a href="https://info.mzalendo.com/info/mzalendo-overview">About</a>

    <ul id="submenu-about" class="js-hover-dropdown">
        <li>
            <a href="https://info.mzalendo.com/info/mzalendo-overview">Mzalendo Overview</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/site-faq">Site FAQs</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/policies">Policies</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/founders">Founders</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/management">Management</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/partners">Partners</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/scorecard-faq">Scorecard FAQs</a>
        </li>
        <li>
            <a href="https://info.mzalendo.com/info/contact">Contact</a>
        </li>

        <li>
            <a href="https://info.mzalendo.com/help/api">Get the data</a>
        </li>

    </ul>

</li>

        </ul>

    </div>
</nav>

        <div id="page">
            <div class="page-wrapper wrapper">
