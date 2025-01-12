@php
    use App\Models\Bot;
    use Faker\Factory as Faker;

    $page_title = 'Home';
    $faker = Faker::create();

    $bots = Bot::get();

    $short_description = site('seo_description');

@endphp
@extends('layouts.front')


@section('contents')
    <main class="content">
        <div class="slider-block style-six">
            <div class="slider-main">
                <div class="slider-item slider-first">
                    <div class="bg-img"><img alt="bgslider" fetchpriority="high" width="4000" height="3000" decoding="async"
                            data-nimg="1" class="w-full h-full object-cover" style="color:transparent"
                            srcset="/finatex-next.vercel.app/_next/images/slider/slider6.png&w=3840&q=75 1x"
                            src="/finatex-next.vercel.app/_next/images/slider/slider6.png&w=3840&q=75"></div>
                    <div class="container">
                        <div class="text-content">
                            <div class="heading2">
                                <div class="relative overflow-hidden"><span
                                        class="block text-white relative overflow-hidden">Discover the Power of </span><span
                                        class="block text-white absolute top-0 left-0 w-full h-full">Discover the Power of
                                    </span></div>
                                <div class="relative overflow-hidden"><span
                                        class="block text-white relative overflow-hidden">Blockchain with
                                        {{ site('name') }}</span><span
                                        class="block text-white absolute top-0 left-0 w-full h-full">Blockchain with
                                        {{ site('name') }}</span></div>
                            </div>
                            <div class="body2 md:mt-6 mt-4 text-white xl:w-1/2 sm:w-2/3 w-full">Our platform offers you the
                                flexibility to manage your cryptocurrency on-the-go. Whether you're at home, at work, or on
                                the move, you can easily make use out of your cryptocurrency, trade crypto, and more with
                                just a few clicks.</div>
                            <div class="button-block md:mt-7 mt-5"><a
                                    class="button-main bg-orange text-white hover:bg-white hover:text-black rounded-full"
                                    href="{{ route('user.register') }}">Get Started</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="brand-block py-9 bg-black">
            <div class="container">
                <div class="list-brand">
                    <div class="rfm-marquee-container "
                        style="--pause-on-hover: running; --pause-on-click: running; --width: 100%; --transform: none;">
                        <div class="rfm-marquee"
                            style="--play: running; --direction: normal; --duration: 24.199375s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                            <div class="rfm-initial-child-container">
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                            data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                            data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                            data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                            data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                            data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                                <div class="rfm-child" style="--transform: none;">
                                    <div
                                        class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                        <img alt="1" loading="lazy" width="300" height="300"
                                            decoding="async" data-nimg="1"
                                            class="h-full w-auto duration-500 relative object-cover"
                                            srcset="/finatex-next.vercel.app/_next/images/partner/Logo.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo.png&w=640&q=75 2x"
                                            src="/finatex-next.vercel.app/_next/images/partner/Logo.png&w=640&q=75"
                                            style="color: transparent;">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rfm-marquee"
                            style="--play: running; --direction: normal; --duration: 24.199375s; --delay: 0s; --iteration-count: infinite; --min-width: 100%;">
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo-1.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo-2.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo-3.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo-4.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo-5.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                            <div class="rfm-child" style="--transform: none;">
                                <div
                                    class="brand-item relative flex items-center justify-center md:h-[34px] h-[30px] md:mx-14 mx-10">
                                    <img alt="1" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="h-full w-auto duration-500 relative object-cover"
                                        srcset="/finatex-next.vercel.app/_next/images/partner/Logo.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/partner/Logo.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/partner/Logo.png&w=640&q=75"
                                        style="color: transparent;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-block style-six lg:mt-[100px] sm:mt-16 mt-10">
            <div class="container">
                <div class="video w-full sm:py-9 py-4 sm:px-10 px-5 rounded-3xl overflow-hidden relative max-sm:h-[300px]">
                    <div class="bg-img w-full h-full rounded-2xl overflow-hidden"><img alt="" loading="lazy"
                            width="5000" height="5000" decoding="async" data-nimg="1"
                            class="w-full h-full object-cover" style="color:transparent"
                            srcset="/finatex-next.vercel.app/_next/images/component/thumbnail6.png&w=3840&q=75 1x"
                            src="/finatex-next.vercel.app/_next/images/component/thumbnail6.png&w=3840&q=75"></div><span
                        class="absolute sm:w-20 w-16 sm:h-20 h-16 top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 flex items-center justify-center bg-white rounded-full cursor-pointer duration-300 text-critical hover:bg-critical hover:text-white"
                        onclick="openVideo()"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                            fill="currentColor" viewBox="0 0 256 256" class="sm:text-4xl text-3xl">
                            <path
                                d="M240,128a15.74,15.74,0,0,1-7.6,13.51L88.32,229.65a16,16,0,0,1-16.2.3A15.86,15.86,0,0,1,64,216.13V39.87a15.86,15.86,0,0,1,8.12-13.82,16,16,0,0,1,16.2.3L232.4,114.49A15.74,15.74,0,0,1,240,128Z">
                            </path>
                        </svg></span>
                </div>
            </div>
        </div>
        <div class="count-number-block style-six">
            <div class="container flex items-center justify-center">
                <div class="lg:w-5/6 w-full">
                    <div class="capitalize text-white text-center text-2xl font-medium lg:mt-10 mt-7">{{ site('name') }}
                        is a leading
                        blockchain platform that provides cutting-edge solutions for businesses and individuals seeking to
                        leverage the power of blockchain technology. </div>
                    <div class="grid xl:grid-cols-4 grid-cols-2 gap-y-8 lg:mt-10 mt-7">
                        <div class="item">
                            <div class="flex flex-col items-center">
                                <div class="count-block flex items-center">
                                    <div class="counter heading3 text-white">2.3</div><span
                                        class="heading3 text-white">k</span>
                                </div>
                                <div class="body1 text-white text-center">Business Setup Growth</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex flex-col items-center">
                                <div class="count-block flex items-center">
                                    <div class="counter heading3 text-white">1.77</div><span
                                        class="heading3 text-white">k</span>
                                </div>
                                <div class="body1 text-white text-center">Business Problem Solving</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex flex-col items-center">
                                <div class="count-block flex items-center">
                                    <div class="counter heading3 text-white">298</div><span
                                        class="heading3 text-white">k</span>
                                </div>
                                <div class="body1 text-white text-center">Goal achiever</div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="flex flex-col items-center">
                                <div class="count-block flex items-center">
                                    <div class="counter heading3 text-white">246</div><span
                                        class="heading3 text-white">k</span>
                                </div>
                                <div class="body1 text-white text-center">Passive income earners</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal-video-block">
            <div class="modal-video-main ">
                <div class="video-block h-full w-full">
                    <iframe src="https://www.youtube.com/embed/RaQKTgGyyyo" title="YouTube video player"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share">
                    </iframe>
                </div>
            </div>
        </div>
        <div class="service-block style-six lg:pt-[100px] sm:pt-16 pt-10">
            <div class="container flex flex-col items-center">
                <div class="heading3 lg:w-7/12 text-white text-center">Our services</div>
                <div class="body3 text-surface text-center mt-6 w-full lg:w-1/2 sm:w-2/3">Customized cryptocurrency
                    services designed to meet
                    your unique needs and drive your financial success <a
                        class="text-button duration-300 underline ml-2 text-white hover:text-orange"
                        href="{{ route('service') }}">View case</a></div>
                <div class="list-service grid lg:grid-cols-3 sm:grid-cols-2 gap-10 gap-y-20 mt-20">
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10" href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-pc-code text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Cryptocurrency Trading
                            </div>
                            <div class="text-placehover mt-3">Experience the excitement and potential of the cryptocurrency
                                market with our expert trading services.</div>
                        </a></div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10" href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-code text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Portfolio Management
                            </div>
                            <div class="text-placehover mt-3">We analyze market trends, manage risks, and optimize your
                                portfolio to maximize returns and achieve your financial goals.</div>
                        </a></div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10" href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-lamp-gear text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Investment Advice
                            </div>
                            <div class="text-placehover mt-3">Our team of experienced advisors will guide you in making
                                informed investment, whether you're a beginner trader.</div>
                        </a></div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10" href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-text-pen text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Risk Management
                            </div>
                            <div class="text-placehover mt-3">We employ industry-leading tools and techniques to protect
                                your investments and minimize potential losses.</div>
                        </a></div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10" href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-chart text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Research and Analysis
                            </div>
                            <div class="text-placehover mt-3">We provide timely reports, market updates, and data-driven
                                insights to help you make informed trading decisions.</div>
                        </a></div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow"><a
                            class="service-item-main block h-full px-8 pb-7 md:pt-14 pt-10"
                            href="{{ route('service') }}">
                            <div
                                class="icon md:w-[100px] w-20 md:h-[100px] h-20 flex items-center justify-center rounded-2xl">
                                <i class="icon-vali text-white md:text-5xl text-4xl"></i>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Education and Resources
                            </div>
                            <div class="text-placehover mt-3">Expand your knowledge and skills in cryptocurrency trading
                                through our educational resources.</div>
                        </a></div>
                </div>
            </div>
        </div>
        <div class="about-block style-six pt-[100px] bg-on-surface">
            <div class="container">
                <div class="flex max-lg:flex-col items-center justify-between gap-y-8">
                    <div class="w-full lg:w-1/2 sm:w-2/3 xl:px-16 px-10">
                        <div class="bg-img w-full"><img alt="img" loading="lazy" width="4000" height="4000"
                                decoding="async" data-nimg="1" class="w-full" style="color:transparent"
                                srcset="/finatex-next.vercel.app/_next/images/component/earth6.png&w=3840&q=75 1x"
                                src="/finatex-next.vercel.app/_next/images/component/earth6.png&w=3840&q=75"></div>
                    </div>
                    <div class="w-full xl:w-5/12 lg:w-1/2">
                        <div class="text-button-uppercase text-orange">People Trust Us</div>
                        <div class="heading3 text-white mt-3">The #1 blockchain firm</div>
                        <div class="body1 text-placehover mt-10">At {{ site('name') }}, we're passionate about helping
                            investors
                            succeed in today's competitive crypto landscape. With years of experience in the industry, we
                            understand the unique challenges & opportunities that cryptocurrency traders face when it comes
                            to making profit
                            and exploring leverage.</div>
                        <div class="flex items-center gap-4 mt-9">
                            <div class="flex items-center">
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[3]">
                                    <img alt="" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="full h-full rounded-full" style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/member/avatar3.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/member/avatar3.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/member/avatar3.png&w=640&q=75">
                                </div>
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[2] -ml-3">
                                    <img alt="" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="full h-full rounded-full" style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/member/avatar4.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/member/avatar4.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/member/avatar4.png&w=640&q=75">
                                </div>
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[1] -ml-3">
                                    <img alt="" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="full h-full rounded-full" style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/member/avatar5.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/member/avatar5.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/member/avatar5.png&w=640&q=75">
                                </div>
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[2] -ml-3 max-[450px]:hidden">
                                    <img alt="" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="full h-full rounded-full" style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/member/avatar1.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/member/avatar1.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/member/avatar1.png&w=640&q=75">
                                </div>
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[1] -ml-3 max-[400px]:hidden">
                                    <img alt="" loading="lazy" width="300" height="300" decoding="async"
                                        data-nimg="1" class="full h-full rounded-full" style="color:transparent"
                                        srcset="/finatex-next.vercel.app/_next/images/member/avatar2.png&w=384&q=75 1x, /finatex-next.vercel.app/_next/images/member/avatar2.png&w=640&q=75 2x"
                                        src="/finatex-next.vercel.app/_next/images/member/avatar2.png&w=640&q=75">
                                </div>
                                <div
                                    class="img sm:w-12 w-10 sm:h-12 h-10 rounded-full overflow-hidden bg-placehover p-0.5 z-[0] -ml-3">
                                    <span
                                        class="w-full h-full flex items-center justify-center bg-white rounded-full text-button">1M</span>
                                </div>
                            </div>
                            <div class="text-button text-white">Trusted by 3M+ People around <br
                                    class="max-xl:hidden max-lg:block max-[400px]:hidden"> the globe</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pricing-block style-six">
            <div class="pricing-main text-white lg:py-[100px] sm:py-16 py-10">
                <div class="container">
                    <div class="heading flex max-lg:flex-col lg:items-center justify-between gap-y-5">
                        <div class="title">
                            <div class="uppercase text-xs font-bold text-orange">Pricing</div>
                            <div class="lg:text-center heading3 text-white mt-3">Choose The <span class="text-orange">Plan
                                    & Pricing</span></div>
                        </div>

                    </div>
                    <div class="list-pricing show lg:mt-[60px] mt-10">
                        <div class="flex max-lg:flex-wrap gap-8">
                            @foreach ($bots as $bot)
                                <div class="w-full lg:w-1/3">
                                    <div
                                        class="pricing-item border border-secondary py-9 px-6 rounded-xl box-shadow duration-500">
                                        <div class="heading7 text-orange text-center">{{ $bot->name }}</div>
                                        <div class="price text-center justify-center flex items-end gap-2 mt-3">
                                            <div class="heading2">${{ $bot->min }}</div>
                                            <div class="body3">/ {{ $bot->duration }} {{ $bot->duration_type }}</div>
                                        </div>
                                        <div class="text-center text-white mt-3">Daily Return.</div>
                                        <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">24/7 Support</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Market Updates</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Insurance</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Unlimited Trading</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Investment Advices</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256"
                                                    class="text-orange text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Unlimited Signals</div>
                                            </div>
                                        </div>
                                        <div class="button-block w-full mt-6"><a
                                                class="button-main text-center block hover:text-white hover:bg-orange bg-white border border-orange text-black text-button w-full py-3"
                                                href="{{ route('user.login') }}">Get Started</a></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-block style-six style-second">
            <div class="container">
                <div class="uppercase text-xs font-bold text-orange">How we work</div>
                <div class="heading flex max-lg:flex-col lg:items-center justify-between gap-8 gap-y-4 mt-3">
                    <div class="heading3 text-white">Streamlining Your <br>Blockchain Experience</div>
                    <div class="body2 text-placehover lg:w-1/2">Efficiently navigate the world of blockchain with our
                        streamlined approach, from discovery and planning to development and ongoing support.</div>
                </div>
                <div class="list-service grid xl:grid-cols-4 sm:grid-cols-2 gap-8 gap-y-20 mt-20">
                    <div class="service-item rounded-2xl border border-line hover-box-shadow">
                        <div class="service-item-main block h-full px-8 pb-7 md:pt-12 pt-8">
                            <div
                                class="icon bg-orange md:w-20 w-16 md:h-20 h-16 flex items-center justify-center rounded-2xl">
                                <span class="heading4 text-white">01</span>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Consultation</div>
                            <div class="text-placehover mt-3">We understand your business requirements and goals, analyzing
                                challenges and opportunities to devise an effective blockchain strategy.</div>
                        </div>
                    </div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow">
                        <div class="service-item-main block h-full px-8 pb-7 md:pt-12 pt-8">
                            <div
                                class="icon bg-orange md:w-20 w-16 md:h-20 h-16 flex items-center justify-center rounded-2xl">
                                <span class="heading4 text-white">02</span>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Planning and Strategy
                            </div>
                            <div class="text-placehover mt-3">We develop a tailored plan and roadmap, defining objectives,
                                timelines, and milestones for successful implementation</div>
                        </div>
                    </div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow">
                        <div class="service-item-main block h-full px-8 pb-7 md:pt-12 pt-8">
                            <div
                                class="icon bg-orange md:w-20 w-16 md:h-20 h-16 flex items-center justify-center rounded-2xl">
                                <span class="heading4 text-white">03</span>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Blockchain Development
                            </div>
                            <div class="text-placehover mt-3">Our skilled team creates robust and scalable blockchain
                                solutions, including smart contracts and decentralized applications (DApps).</div>
                        </div>
                    </div>
                    <div class="service-item rounded-2xl border border-line hover-box-shadow">
                        <div class="service-item-main block h-full px-8 pb-7 md:pt-12 pt-8">
                            <div
                                class="icon bg-orange md:w-20 w-16 md:h-20 h-16 flex items-center justify-center rounded-2xl">
                                <span class="heading4 text-white">04</span>
                            </div>
                            <div class="heading7 text-white hover:text-orange duration-300 mt-6">Deployment and Support
                            </div>
                            <div class="text-placehover mt-3">We deploy your blockchain solution securely, integrate it
                                into your infrastructure, provide training, and offer ongoing support and maintenance.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="form-request-block style-two style-six relative"
            style="background-image:url('/finatex-next.vercel.app/images/cta/bg-cta6.png')">
            <div class="container h-full py-[60px]">
                <div class="flex max-lg:flex-col lg:items-center justify-between gap-8 h-full">
                    <div class="lg:w-1/2">
                        <div class="heading2 text-white">Let’s build<br>future together</div>
                        <div class="caption1 text-surface mt-4">Cryptocurrency Trading Just Got Easy. Refer your friends
                            and colleagues, earn<br>money in the process!</div>
                    </div>
                    <div class="lg:w-1/2">
                        <form class="form-block rounded-xl bg-white p-7 flex flex-col justify-between gap-5">
                            <div class="heading6 text-white">Need Help?</div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div class="max-sm:col-span-2"><input
                                        class="w-full bg-surface caption1 px-4 py-3 rounded-lg" type="text"
                                        placeholder="Name" required=""></div>
                                <div class="max-sm:col-span-2"><input
                                        class="w-full bg-surface caption1 px-4 py-3 rounded-lg" type="email"
                                        placeholder="Email" required=""></div>
                                <div class="col-span-2 select-block relative"><select
                                        class="w-full bg-surface caption1 pl-4 py-3 rounded-lg" name="form">
                                        <option value="Financial Planning">Financial Planning</option>
                                        <option value="Business Planning">Business Planning</option>
                                        <option value="Development Planning">Development Planning</option>
                                    </select><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                        fill="currentColor" viewBox="0 0 256 256"
                                        class="absolute top-1/2 -translate-y-1/2 right-4">
                                        <path
                                            d="M213.66,101.66l-80,80a8,8,0,0,1-11.32,0l-80-80A8,8,0,0,1,53.66,90.34L128,164.69l74.34-74.35a8,8,0,0,1,11.32,11.32Z">
                                        </path>
                                    </svg></div>
                                <div class="col-span-2">
                                    <textarea class="w-full bg-surface caption1 px-4 py-3 rounded-lg" name="message" rows="3"
                                        placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="button-block"><button
                                    class="button-main bg-orange text-white hover:bg-white hover:text-black text-button rounded-full">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('scripts')
    {{-- spining image --}}

    <script>
        const circle = document.querySelector('.circle');
        const images = document.querySelectorAll('.floating-image');
        const numImages = images.length;
        const deviceWidth = window.innerWidth;

        let radius;
        if (deviceWidth > 766) {
            radius = Math.min(circle.clientWidth / 2, circle.clientHeight / 2) - 25;
        } else {
            radius = deviceWidth; // Use a specific value for small deviceWidth
        }

        function moveImageInCircleAndSpin(img, centerX, centerY, angle) {
            const x = centerX + radius * Math.cos(angle);
            const y = centerY + radius * Math.sin(angle);
            const rotation = angle * (180 / Math.PI);

            img.style.left = `${x}px`;
            img.style.top = `${y}px`;
            img.style.transform = `translate(-50%, -50%) rotate(${rotation}deg)`;

            const newAngle = angle + 0.01; // Adjust the rotation speed here
            const randomDelay = Math.random() * 10; // Small delay to adjust rotation phase
            setTimeout(() => {
                moveImageInCircleAndSpin(img, centerX, centerY, newAngle);
            }, randomDelay);
        }

        function initializeImagePositions() {
            const centerX = circle.clientWidth / 2;
            const centerY = circle.clientHeight / 2;

            images.forEach((img, index) => {
                const angle = (index / numImages) * 2 * Math.PI;
                moveImageInCircleAndSpin(img, centerX, centerY, angle);
            });
        }

        initializeImagePositions();
    </script>


    {{-- moving image --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.looping-image').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 5,
                    },
                    600: {
                        items: 10,
                    },
                    1000: {
                        items: 10,
                    }
                }
            });

            $('.reviews').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 6000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    }
                }
            });

            $('.deposits').owlCarousel({
                loop: true,
                margin: 5,
                autoplay: true,
                autoplayTimeout: 3000,
                autoplaySpeed: 600,
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 3,
                    }
                }
            });
        });
    </script>


    {{-- globe --}}
    <script src="//unpkg.com/globe.gl"></script>
    <script>
        fetch("{{ route('places') }}").then(res => res.json()).then(places => {

            const globeInstance = Globe()
                .globeImageUrl("{{ asset('/asset/images/earth-night.jpg') }}")
                .backgroundImageUrl("{{ asset('/asset/images/ts-gray-1.png') }}")
                .labelsData(places.features)
                .labelLat(d => d.properties.latitude)
                .labelLng(d => d.properties.longitude)
                .labelText(d => d.properties.name)
                .labelSize(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                .labelDotRadius(d => Math.sqrt(d.properties.pop_max) * 4e-4)
                .labelColor(() => 'rgba(255, 165, 0, 0.75)')
                .labelResolution(2)

            (document.getElementById('globeViz'))


        });
    </script>

    {{-- schuffle recent trades --}}
    <script>
        function updateTradeTimes() {
            const tradeTimeElements = document.querySelectorAll('.recent_trade_time');
            const currentTime = new Date().toLocaleTimeString();

            tradeTimeElements.forEach((element) => {
                element.textContent = currentTime;
            });
        }

        function shuffleAndDisplayRecentTrades() {
            const tradesDiv = document.getElementById('recentTrades');
            const trades = Array.from(tradesDiv.children);

            trades.sort(() => Math.random() - 0.5); // Shuffle the array

            // Remove the existing trade divs
            while (tradesDiv.firstChild) {
                tradesDiv.removeChild(tradesDiv.firstChild);
            }

            // Append the first 10 shuffled trade divs back to the container
            for (let i = 0; i < 20 && i < trades.length; i++) {
                tradesDiv.appendChild(trades[i]);
            }

            updateTradeTimes(); // Update trade times after shuffling
        }

        // Initial shuffle and display
        shuffleAndDisplayRecentTrades();

        // Set interval to shuffle and update times every second (1000 milliseconds)
        setInterval(shuffleAndDisplayRecentTrades, 1000);

        // update every 5 minutes
        function updateRecentTrades() {
            // Use jQuery to make an AJAX request to the server
            $.ajax({
                url: window.location.href,
                method: 'GET',
                dataType: 'html',
                success: function(response) {
                    // Update the content of the recentTradesContainer div
                    var targetDiv = '#recentTradesContainer';
                    $(targetDiv).html($(response).find(targetDiv).html());
                    updateTradeTimes();
                    $('#deposits').html($(response).find('#deposits').html());

                },
                error: function(xhr, status, error) {
                    console.error('Error fetching data:', error);
                }
            });
        }

        setInterval(updateRecentTrades, 10000);
    </script>

    {{-- apply bot class --}}
    <script>
        const divElement = document.getElementById('hows-bot');
        const classes = ['hows-bot-orange', 'hows-bot-green', 'hows-bot-blue', 'hows-bot-purple'];
        let currentIndex = 0;

        function applyNextClass() {
            divElement.className = classes[currentIndex];
            currentIndex = (currentIndex + 1) % classes.length;
        }

        setInterval(applyNextClass, 5000);
    </script>
@endsection
