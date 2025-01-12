<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <link rel="icon" href="{{ asset('assets/images/' . site('favicon')) }}">
    <title> {{ $page_title }} | {{ site('name') }}</title>
    <meta name="author" content="support@altusfund.net">
    <meta name="description" content="{{ $short_description }}">
    <meta property="og:url" content="{{ request()->url }}">
    <meta property="og:title" content="{{ $page_title }} | {{ site('name') }}">
    <meta property="og:description" content="{{ $short_description }}">
    <meta property="og:image" content="{{ asset('assets/images/' . site('cover')) }}">
    <meta name="robots" content="{{ site('robot') }}">

    <link rel="preload" href="/finatex-next.vercel.app/_next/static/media/c9a5bc6a7c948fb0-s.p.woff2" as="font"
        crossorigin="" type="font/woff2">
    <link rel="preload" as="image"
        imagesrcset="/finatex-next.vercel.app/_next/images/LogoWhite.png&w=1920&q=75 1x, /finatex-next.vercel.app/_next/images/LogoWhite.png&w=3840&q=75 2x"
        fetchpriority="high">
    <link rel="preload" as="image"
        imagesrcset="/finatex-next.vercel.app/_next/images/slider/slider6.png&w=3840&q=75 1x" fetchpriority="high">
    <link rel="stylesheet" href="/finatex-next.vercel.app/_next/static/css/82b6793241c718d6.css" crossorigin=""
        data-precedence="next">
    <link rel="stylesheet" href="/finatex-next.vercel.app/_next/static/css/6a06c721d3d9652c.css" crossorigin=""
        data-precedence="next">
    <link rel="stylesheet" href="/finatex-next.vercel.app/_next/static/css/73c00cd95dc66651.css" crossorigin=""
        data-precedence="next">
    <link rel="stylesheet" href="/finatex-next.vercel.app/_next/static/css/4df78f2cd73d6b26.css" crossorigin=""
        data-precedence="next">


    <meta name="next-size-adjust">

    <link rel="preconnect" href="https://fonts.gstatic.com">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


    <style type="text/css">
        .rfm-marquee-container {
            overflow-x: hidden;
            display: flex;
            flex-direction: row;
            position: relative;
            width: var(--width);
            transform: var(--transform);
        }

        .rfm-marquee-container:hover div {
            animation-play-state: var(--pause-on-hover);
        }

        .rfm-marquee-container:active div {
            animation-play-state: var(--pause-on-click);
        }

        .rfm-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
        }

        .rfm-overlay::before,
        .rfm-overlay::after {
            background: linear-gradient(to right, var(--gradient-color), rgba(255, 255, 255, 0));
            content: "";
            height: 100%;
            position: absolute;
            width: var(--gradient-width);
            z-index: 2;
            pointer-events: none;
            touch-action: none;
        }

        .rfm-overlay::after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .rfm-overlay::before {
            left: 0;
            top: 0;
        }

        .rfm-marquee {
            flex: 0 0 auto;
            min-width: var(--min-width);
            z-index: 1;
            display: flex;
            flex-direction: row;
            align-items: center;
            animation: scroll var(--duration) linear var(--delay) var(--iteration-count);
            animation-play-state: var(--play);
            animation-delay: var(--delay);
            animation-direction: var(--direction);
        }

        @keyframes scroll {
            0% {
                transform: translateX(0%);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        .rfm-initial-child-container {
            flex: 0 0 auto;
            display: flex;
            min-width: auto;
            flex-direction: row;
            align-items: center;
        }

        .rfm-child {
            transform: var(--transform);
        }
    </style>

    <style>
        .fixed {
            position: fixed;
        }

        .bottom-0 {
            bottom: 0px;
        }

        .right-0 {
            right: 0px;
        }

        .left-0 {
            left: 0px;
        }

        .z-50 {
            z-index: 50;
        }

        .mb-5 {
            margin-bottom: 1.25rem;
        }

        .w-10 {
            width: 2.5rem;
        }

        .h-10 {
            height: 2.5rem;
        }

        .animated-image {
            animation: growAnimation 3s infinite;

        }

        .shadow {
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow);
        }

        .mr-2 {
            margin-right: 0.5rem;
        }
    </style>

</head>

<body class="__className_aaf875" data-new-gr-c-s-check-loaded="14.1190.0" data-gr-ext-installed="">
    <div class="bg-black overflow-x-hidden">
        <header id="header" class="style-five style-six">
            <div class="top-nav style-one bg-dark">
                <div class="container flex items-center justify-between h-[44px]">
                    <div class="left-block flex items-center">
                        <div class="location flex items-center max-lg:hidden"><svg xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                class="text-white text-xl">
                                <path
                                    d="M128,64a40,40,0,1,0,40,40A40,40,0,0,0,128,64Zm0,64a24,24,0,1,1,24-24A24,24,0,0,1,128,128Zm0-112a88.1,88.1,0,0,0-88,88c0,31.4,14.51,64.68,42,96.25a254.19,254.19,0,0,0,41.45,38.3,8,8,0,0,0,9.18,0A254.19,254.19,0,0,0,174,200.25c27.45-31.57,42-64.85,42-96.25A88.1,88.1,0,0,0,128,16Zm0,206c-16.53-13-72-60.75-72-118a72,72,0,0,1,144,0C200,161.23,144.53,209,128,222Z">
                                </path>
                            </svg><span class="ml-2 caption1 text-white">{{ site('address') }}, {{ site('city') }},
                                {{ site('state') }}, {{ site('country') }}</span></div>
                        <div class="mail lg:ml-7 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                class="text-white text-xl">
                                <path
                                    d="M224,48H32a8,8,0,0,0-8,8V192a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V56A8,8,0,0,0,224,48Zm-96,85.15L52.57,64H203.43ZM98.71,128,40,181.81V74.19Zm11.84,10.85,12,11.05a8,8,0,0,0,10.82,0l12-11.05,58,53.15H52.57ZM157.29,128,216,74.18V181.82Z">
                                </path>
                            </svg><span class="ml-2 caption1 text-white">{{ site('email') }}</span></div>
                    </div>
                    <div class="right-block flex items-center gap-5">
                        <div class="select-block-x relative">
                            <select onchange="doGTranslate(this);"
                                class="border-none outline-none text-white p-2 caption2">
                                <option value="">Language</option>
                                <option value="en|af">Afrikaans</option>
                                <option value="en|sq">Albanian</option>
                                <option value="en|ar">Arabic</option>
                                <option value="en|hy">Armenian</option>
                                <option value="en|az">Azerbaijani</option>
                                <option value="en|eu">Basque</option>
                                <option value="en|be">Belarusian</option>
                                <option value="en|bg">Bulgarian</option>
                                <option value="en|ca">Catalan</option>
                                <option value="en|zh-CN">Chinese (Simplified)</option>
                                <option value="en|zh-TW">Chinese (Traditional)</option>
                                <option value="en|hr">Croatian</option>
                                <option value="en|cs">Czech</option>
                                <option value="en|da">Danish</option>
                                <option value="en|nl">Dutch</option>
                                <option value="en|en">English</option>
                                <option value="en|et">Estonian</option>
                                <option value="en|tl">Filipino</option>
                                <option value="en|fi">Finnish</option>
                                <option value="en|fr">French</option>
                                <option value="en|gl">Galician</option>
                                <option value="en|ka">Georgian</option>
                                <option value="en|de">German</option>
                                <option value="en|el">Greek</option>
                                <option value="en|ht">Haitian Creole</option>
                                <option value="en|iw">Hebrew</option>
                                <option value="en|hi">Hindi</option>
                                <option value="en|hu">Hungarian</option>
                                <option value="en|is">Icelandic</option>
                                <option value="en|id">Indonesian</option>
                                <option value="en|ga">Irish</option>
                                <option value="en|it">Italian</option>
                                <option value="en|ja">Japanese</option>
                                <option value="en|ko">Korean</option>
                                <option value="en|lv">Latvian</option>
                                <option value="en|lt">Lithuanian</option>
                                <option value="en|mk">Macedonian</option>
                                <option value="en|ms">Malay</option>
                                <option value="en|mt">Maltese</option>
                                <option value="en|no">Norwegian</option>
                                <option value="en|fa">Persian</option>
                                <option value="en|pl">Polish</option>
                                <option value="en|pt">Portuguese</option>
                                <option value="en|ro">Romanian</option>
                                <option value="en|ru">Russian</option>
                                <option value="en|sr">Serbian</option>
                                <option value="en|sk">Slovak</option>
                                <option value="en|sl">Slovenian</option>
                                <option value="en|es">Spanish</option>
                                <option value="en|sw">Swahili</option>
                                <option value="en|sv">Swedish</option>
                                <option value="en|th">Thai</option>
                                <option value="en|tr">Turkish</option>
                                <option value="en|uk">Ukrainian</option>
                                <option value="en|ur">Urdu</option>
                                <option value="en|vi">Vietnamese</option>
                                <option value="en|cy">Welsh</option>
                                <option value="en|yi">Yiddish</option>
                            </select><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                fill="currentColor" viewBox="0 0 256 256" class="text-xs text-white icon -right-2">
                                <path
                                    d="M216.49,104.49l-80,80a12,12,0,0,1-17,0l-80-80a12,12,0,0,1,17-17L128,159l71.51-71.52a12,12,0,0,1,17,17Z">
                                </path>
                            </svg>
                            <div id="google_translate_element2"></div>
                        </div>
                    </div>
                    <div class="line h-6 w-px bg-grey max-sm:hidden"> </div>
                    <div class="list-social flex items-center gap-2.5 style-one max-sm:hidden"><a
                            class="item rounded-full w-7 h-7 border-grey border-2 flex items-center justify-center"
                            target="_blank" href="https://www.facebook.com/"><i
                                class="icon-facebook text-sm"></i></a><a
                            class="item rounded-full w-7 h-7 border-grey border-2 flex items-center justify-center"
                            target="_blank" href="https://www.linkedin.com/"><i class="icon-in text-xs"></i></a><a
                            class="item rounded-full w-7 h-7 border-grey border-2 flex items-center justify-center"
                            target="_blank" href="https://www.twitter.com/"><i
                                class="icon-twitter text-[10px]"></i></a><a
                            class="item rounded-full w-7 h-7 border-grey border-2 flex items-center justify-center"
                            target="_blank" href="https://www.instagram.com/"><i
                                class="icon-insta text-[10px]"></i></a><a
                            class="item rounded-full w-7 h-7 border-grey border-2 flex items-center justify-center"
                            target="_blank" href="https://www.youtube.com/"><i
                                class="icon-youtube text-[10px]"></i></a></div>
                </div>
            </div>

            <div class="header-menu style-six ">
                <div class="container">
                    <div class="header-main">
                        <div class="main flex items-center justify-between lg:h-20 h-16 py-4 px-7 rounded-full"><a
                                class="menu-left-block" href="/"><img alt="logo" fetchpriority="high"
                                    width="1800" height="1600" decoding="async" data-nimg="1"
                                    class="w-[149px] max-sm:w-[128px]" style="color:transparent"
                                    srcset="/finatex-next.vercel.app/_next/images/LogoWhite.png&w=1920&q=75 1x, /finatex-next.vercel.app/_next/images/LogoWhite.png&w=3840&q=75 2x"
                                    src="/finatex-next.vercel.app/_next/images/LogoWhite.png&w=3840&q=75"></a>
                            <div class="menu-center-block h-full">
                                <ul class="menu-nav flex items-center xl:gap-2 h-full">
                                    <li
                                        class="nav-item text-white h-full flex items-center justify-center home active">
                                        <a class="nav-link text-title flex items-center gap-1"
                                            href="/"><span>Home</span></a>
                                    </li>
                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('about') }}"><span>About</span></a>

                                    </li>
                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('service') }}"><span>Services</span></a>

                                    </li>
                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('trades') }}"><span>Live Trades</span></a>

                                    </li>
                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('pricing') }}"><span>Pricing</span></a>

                                    </li>
                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('faqs') }}"><span>FAQs</span></a>

                                    </li>

                                    <li class="nav-item text-white h-full flex items-center justify-center "><a
                                            class="nav-link text-title flex items-center gap-1"
                                            href="{{ route('contact') }}"><span>Contact</span></a>

                                    </li>
                                </ul>
                            </div>
                            <div class="menu-right-block flex items-center"><a
                                    class="max-lg:hidden button-main bg-orange text-white rounded-full hover:bg-black"
                                    href="{{ route('user.register') }}">Get Started</a>
                                <div class="menu-humburger hidden pointer" onclick="openNav()"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 256 256" class="text-2xl text-white">
                                        <path
                                            d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z">
                                        </path>
                                    </svg></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="menu-mobile-block" class="false">
                    <div class="menu-mobile-main text-white">
                        <div class="container">
                            <div class="close-btn py-5 flex items-center justify-end" onclick="closeNav()"><svg
                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                    fill="currentColor" viewBox="0 0 256 256" class="text-white text-2xl">
                                    <path
                                        d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z">
                                    </path>
                                </svg></div>
                            <ul class="menu-nav-mobile h-full pt-1 pb-1">
                                <li class="nav-item-mobile h-full flex-column gap-2 pt-2 pb-2 pl-3 pr-3 pointer home ">
                                    <a class="nav-link-mobile flex items-center justify-between" href="/"><span
                                            class="body2 font-semibold">Home </span></a>

                                </li>
                                <li
                                    class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer about ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('about') }}"><span class="body2 font-semibold">About
                                        </span></a>

                                </li>
                                <li
                                    class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer services ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('service') }}"><span class="body2 font-semibold">Services
                                        </span></a>

                                </li>
                                <li class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer case ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('trades') }}"><span class="body2 font-semibold">Live Trades
                                        </span></a>

                                </li>
                                <li class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer case ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('pricing') }}"><span class="body2 font-semibold">Pricing
                                        </span></a>

                                </li>
                                <li
                                    class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer pages ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('faqs') }}"><span class="body2 font-semibold">FAQs </span></a>

                                </li>

                                <li
                                    class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer contact ">
                                    <a class="nav-link-mobile flex items-center justify-between"
                                        href="{{ route('contact') }}"><span class="body2 font-semibold">Contact
                                        </span></a>

                                </li>

                                <li
                                    class="nav-item-mobile h-full flex-column gap-2 pt-4 pb-2 pl-3 pr-3 pointer contact ">
                                    <a class="button-main bg-orange text-white rounded-full hover:bg-black"
                                        href="{{ route('user.login') }}">Member Area</a>

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        @yield('contents')

        <footer id="footer" class="style-six">
            <div class="style-one">
                <div class="footer-block bg-dark pt-[60px]">
                    <div class="container">
                        <div class="flex max-lg:flex-col max-lg:items-start gap-y-10 pb-10">
                            <div class="lg:w-1/4">
                                <div class="footer-company-infor flex flex-col justify-between gap-5"><img
                                        alt="Logo" loading="lazy" width="4000" height="3000"
                                        decoding="async" data-nimg="1" class="footer-logo w-[145px]"
                                        style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/LogoWhite.png&w=3840&q=75 1x"
                                        src="/finatex-next.vercel.app/_next/images/LogoWhite.png&w=3840&q=75">
                                    <div class="text caption1 text-white">We are a diversified company specialized in
                                        providing comprehensive cryptocurrency solutions for individuals and businesses.
                                    </div>
                                    <div class="list-social flex items-center gap-2.5 style-one"><a
                                            class="item rounded-full w-7 h-7 border-2 border-grey flex items-center justify-center"
                                            target="_blank" href="https://www.facebook.com/"><i
                                                class="icon-facebook text-sm"></i></a><a
                                            class="item rounded-full w-7 h-7 border-2 border-grey flex items-center justify-center"
                                            target="_blank" href="https://www.linkedin.com/"><i
                                                class="icon-in text-sm"></i></a><a
                                            class="item rounded-full w-7 h-7 border-2 border-grey flex items-center justify-center"
                                            target="_blank" href="https://www.twitter.com/"><i
                                                class="icon-twitter text-xs"></i></a><a
                                            class="item rounded-full w-7 h-7 border-2 border-grey flex items-center justify-center"
                                            target="_blank" href="https://www.instagram.com/"><i
                                                class="icon-insta text-xs"></i></a><a
                                            class="item rounded-full w-7 h-7 border-2 border-grey flex items-center justify-center"
                                            target="_blank" href="https://www.youtube.com/"><i
                                                class="icon-youtube text-xs"></i></a></div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="footer-navigate flex items-center justify-center gap-20">
                                    <div class="footer-nav-item">
                                        <div class="item-heading text-button-sm text-white">Quick Links</div>
                                        <ul class="list-nav mt-1">
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('about') }}">About us</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('service') }}">Services</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('pricing') }}">Pricing</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-nav-item max-sm:hidden">
                                        <div class="item-heading text-button-sm text-white">Pages</div>
                                        <ul class="list-nav mt-1">
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('faqs') }}">FAQs</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('user.register') }}">Get Started</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('user.login') }}">Login Member Area</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="{{ route('trades') }}">Live Trades</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-nav-item">
                                        <div class="item-heading text-button-sm text-white">Knowledge</div>
                                        <ul class="list-nav mt-1">
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="https://binance.com/" target="_blank">Binance</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="https://blockchain.com/" target="_blank">Blockchain</a></li>
                                            <li class="mt-3"><a
                                                    class="caption1 has-line-before line-white text-surface hover-underline"
                                                    href="https://coinmarketcap.com/" target="_blank">Market</a></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="lg:w-1/4">
                                <div class="company-contact">
                                    <div class="heading text-button-sm text-white">Newsletter</div>
                                    <div class="mt-3 flex items-center"><svg width="36" height="36"
                                            viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M26.43 16.1254C25.785 16.1254 25.275 15.6004 25.275 14.9704C25.275 14.4154 24.72 13.2604 23.79 12.2554C22.875 11.2804 21.87 10.7104 21.03 10.7104C20.385 10.7104 19.875 10.1854 19.875 9.55539C19.875 8.92539 20.4 8.40039 21.03 8.40039C22.53 8.40039 24.105 9.21039 25.485 10.6654C26.775 12.0304 27.6 13.7254 27.6 14.9554C27.6 15.6004 27.075 16.1254 26.43 16.1254Z"
                                                fill="#C1D8FF"></path>
                                            <path
                                                d="M31.8446 16.125C31.1996 16.125 30.6896 15.6 30.6896 14.97C30.6896 9.645 26.3546 5.325 21.0446 5.325C20.3996 5.325 19.8896 4.8 19.8896 4.17C19.8896 3.54 20.3996 3 21.0296 3C27.6296 3 32.9996 8.37 32.9996 14.97C32.9996 15.6 32.4746 16.125 31.8446 16.125Z"
                                                fill="#C1D8FF"></path>
                                            <path
                                                d="M17.685 21.315L12.78 26.22C12.24 25.74 11.715 25.245 11.205 24.735C9.66 23.175 8.265 21.54 7.02 19.83C5.79 18.12 4.8 16.41 4.08 14.715C3.36 13.005 3 11.37 3 9.81C3 8.79 3.18 7.815 3.54 6.915C3.9 6 4.47 5.16 5.265 4.41C6.225 3.465 7.275 3 8.385 3C8.805 3 9.225 3.09 9.6 3.27C9.99 3.45 10.335 3.72 10.605 4.11L14.085 9.015C14.355 9.39 14.55 9.735 14.685 10.065C14.82 10.38 14.895 10.695 14.895 10.98C14.895 11.34 14.79 11.7 14.58 12.045C14.385 12.39 14.1 12.75 13.74 13.11L12.6 14.295C12.435 14.46 12.36 14.655 12.36 14.895C12.36 15.015 12.375 15.12 12.405 15.24C12.45 15.36 12.495 15.45 12.525 15.54C12.795 16.035 13.26 16.68 13.92 17.46C14.595 18.24 15.315 19.035 16.095 19.83C16.635 20.355 17.16 20.865 17.685 21.315Z"
                                                fill="#C1D8FF"></path>
                                            <path
                                                d="M32.9554 27.4955C32.9554 27.9155 32.8804 28.3505 32.7304 28.7705C32.6854 28.8905 32.6404 29.0105 32.5804 29.1305C32.3254 29.6705 31.9954 30.1805 31.5604 30.6605C30.8254 31.4705 30.0154 32.0555 29.1004 32.4305C29.0854 32.4305 29.0704 32.4455 29.0554 32.4455C28.1704 32.8055 27.2104 33.0005 26.1754 33.0005C24.6454 33.0005 23.0104 32.6405 21.2854 31.9055C19.5604 31.1705 17.8354 30.1805 16.1254 28.9355C15.5404 28.5005 14.9554 28.0655 14.4004 27.6005L19.3054 22.6955C19.7254 23.0105 20.1004 23.2505 20.4154 23.4155C20.4904 23.4455 20.5804 23.4905 20.6854 23.5355C20.8054 23.5805 20.9254 23.5955 21.0604 23.5955C21.3154 23.5955 21.5104 23.5055 21.6754 23.3405L22.8154 22.2155C23.1904 21.8405 23.5504 21.5555 23.8954 21.3755C24.2404 21.1655 24.5854 21.0605 24.9604 21.0605C25.2454 21.0605 25.5454 21.1205 25.8754 21.2555C26.2054 21.3905 26.5504 21.5855 26.9254 21.8405L31.8904 25.3655C32.2804 25.6355 32.5504 25.9505 32.7154 26.3255C32.8654 26.7005 32.9554 27.0755 32.9554 27.4955Z"
                                                fill="#2868D8"></path>
                                        </svg>
                                        <div class="text ml-4">
                                            <div class="caption2 text-surface">Need help? 24/7 </div>
                                            <div class="fw-700 text-white mt-1">{{ site('phone') }}</div>
                                        </div>
                                    </div>
                                    <div class="locate mt-3 flex items-center"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-surface">
                                            <path
                                                d="M128,66a38,38,0,1,0,38,38A38,38,0,0,0,128,66Zm0,64a26,26,0,1,1,26-26A26,26,0,0,1,128,130Zm0-112a86.1,86.1,0,0,0-86,86c0,30.91,14.34,63.74,41.47,94.94a252.32,252.32,0,0,0,41.09,38,6,6,0,0,0,6.88,0,252.32,252.32,0,0,0,41.09-38c27.13-31.2,41.47-64,41.47-94.94A86.1,86.1,0,0,0,128,18Zm0,206.51C113,212.93,54,163.62,54,104a74,74,0,0,1,148,0C202,163.62,143,212.93,128,224.51Z">
                                            </path>
                                        </svg>
                                        <div class="caption1 text-surface ml-2">{{ site('address') }},
                                            {{ site('city') }}, {{ site('state') }},
                                            {{ site('country') }}</div>
                                    </div>
                                    <form
                                        class="send-block mt-5 flex items-center h-[46px] rounded-lg overflow-hidden">
                                        <input class="caption1 text-secondary h-full w-full pr-4 pl-3" type="text"
                                            placeholder="Your email address" required=""><button
                                            class="flex items-center justify-center w-[46px] h-[46px] bg-blue flex-shrink-0"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                fill="currentColor" viewBox="0 0 256 256" class="text-white">
                                                <path
                                                    d="M227.32,28.68a16,16,0,0,0-15.66-4.08l-.15,0L19.57,82.84a16,16,0,0,0-2.42,29.84l85.62,40.55,40.55,85.62A15.86,15.86,0,0,0,157.74,248q.69,0,1.38-.06a15.88,15.88,0,0,0,14-11.51l58.2-191.94c0-.05,0-.1,0-.15A16,16,0,0,0,227.32,28.68ZM157.83,231.85l-.05.14L118.42,148.9l47.24-47.25a8,8,0,0,0-11.31-11.31L107.1,137.58,24,98.22l.14,0L216,40Z">
                                                </path>
                                            </svg></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="border-line"></div>
                        <div class="footer-bottom flex items-center justify-between pt-3 pb-3">
                            <div class="left-block flex items-center">
                                <div class="copy-right text-surface caption1">©2024 {{ site('name') }}. All Rights
                                    Reserved.</div>
                            </div>
                            <div class="nav-link flex items-center gap-2.5"><a
                                    class="text-surface caption1 hover-underline" href="{{ route('tos') }}">Terms Of
                                    Services</a><span class="text-surface caption1">|</span><a
                                    class="text-surface caption1 hover-underline"
                                    href="{{ route('privacy') }}">Privacy
                                    Policy</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <a href="https://wa.me/31685018131" target="_blank" class="fixed bottom-0 left-0 z-50 mb-5">
            <img src="/whatsapp.png" alt="" class="w-10 h-10 animated-image shadow mr-2">
        </a>


    </div>



    <script type="text/javascript">
        function googleTranslateElementInit2() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                autoDisplay: false
            }, 'google_translate_element2');
        }
    </script>
    <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2">
    </script>


    <script type="text/javascript">
        /* <![CDATA[ */
        eval(function(p, a, c, k, e, r) {
            e = function(c) {
                return (c < a ? '' : e(parseInt(c / a))) + ((c = c % a) > 35 ? String.fromCharCode(c + 29) : c
                    .toString(36))
            };
            if (!''.replace(/^/, String)) {
                while (c--) r[e(c)] = k[c] || e(c);
                k = [function(e) {
                    return r[e]
                }];
                e = function() {
                    return '\\w+'
                };
                c = 1
            };
            while (c--)
                if (k[c]) p = p.replace(new RegExp('\\b' + e(c) + '\\b', 'g'), k[c]);
            return p
        }('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',
            43, 43,
            '||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'
            .split('|'), 0, {}))
        /* ]]> */
    </script>

    <script>
        function openNav() {
            document.getElementById("menu-mobile-block").classList.toggle("open")
        }

        function closeNav() {
            document.getElementById("menu-mobile-block").classList.toggle("open")
        }
    </script>
    <script>
        const modalBtn = document.querySelector('.modal-video-main')

        function openVideo() {
            modalBtn.classList.toggle('open')
        }
    </script>


    {{-- livechat --}}
    {!! json_decode(site('livechat')) !!}

</body>

</html>
