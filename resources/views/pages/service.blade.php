@php

    use App\Models\DepositCoin;

    $logos = DepositCoin::inRandomOrder()->take(20)->get('logo_url');

    $page_title = 'Our services ' . site('name');
    $short_description =
        site('name') .
        ' uses advanced protocol trained on extensive trading data and algorithms to analyze market trends and execute profitable trades with high precision.';

@endphp

{{-- layout --}}
@extends('layouts.fronty')





@section('contents')
    <main class="content">
        <div class="breadcrumb-block w-full lg:h-[400px] sm:h-[360px] h-[320px] relative">
            <div class="bg-img w-full h-full absolute top-0 left-0 z-[-1]"><img alt="banner" loading="lazy" width="4000"
                    height="3000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
                    srcset="/finatex-next.vercel.app/_next/images/banner/about1.png&w=3840&q=75 1x"
                    src="/finatex-next.vercel.app/_next/images/banner/about1.png&w=3840&q=75" style="color: transparent;">
            </div>
            <div class="container relative h-full flex items-center">
                <div class="heading-nav flex items-center gap-1 absolute top-8 left-4 py-1.5 px-4 rounded-full bg-line"><a
                        class="hover:underline caption1 text-white" href="/">Home</a><svg
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 256 256" class="text-white">
                        <path
                            d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z">
                        </path>
                    </svg>
                    <div class="caption1 text-white">Our Services</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">Our Services</div>
                    <div class="sub-heading mt-4 text-white font-normal">Customized cryptocurrency services designed to
                        meet
                        your unique needs and drive your financial success.</div>
                </div>
            </div>
        </div>
        <div class="mt-[100px]">
            <div class="container">
                <div class="flex gap-8 max-lg:flex-col-reverse">
                    <div class="w-full lg:w-1/2 flex flex-col justify-between gap-5 pr-10">
                        <div class="heading3">Effective Risk Management Solutions for Financial Stability</div>
                        <div class="body2 text-secondary">We offer reliable Risk Management services to safeguard your
                            assets, ensure financial stability, and navigate rapidly changing business environments. We
                            understand that managing risks is crucial for the sustainability and success of your
                            cryptocurrency.
                        </div>
                        <div class="button-block"><a
                                class="button-main hover:bg-black text-white bg-blue text-button inline-block py-3 px-9 rounded-full"
                                href="#">Discovery</a></div>
                    </div>
                    <div class="w-full lg:w-1/2">
                        <div class="bg-img w-full overflow-hidden rounded-xl"><img alt="" loading="lazy"
                                width="5000" height="5000" decoding="async" data-nimg="1" class="w-full h-full block"
                                srcset="/finatex-next.vercel.app/_next/images/component/bottom-slider-three.png&w=3840&q=75 1x"
                                src="/finatex-next.vercel.app/_next/images/component/bottom-slider-three.png&w=3840&q=75"
                                style="color: transparent;"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-block lg:pt-[100px] sm:pt-16 pt-10">
            <div class="container flex flex-col items-center">
                <div class="list-service grid lg:grid-cols-3 sm:grid-cols-2 gap-8 gap-y-10">
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-coin-chair text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">1</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Cryptocurrency Trading</div>
                            <div class="text-secondary mt-2">Experience the excitement and potential of the cryptocurrency
                                market with our expert trading services.</div>

                        </a></div>
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-hand-tick text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">2</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Portfolio Management</div>
                            <div class="text-secondary mt-2">We analyze market trends, manage risks, and optimize your
                                portfolio to maximize returns and achieve your financial goals.</div>

                        </a></div>
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-hand-house text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">3</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Investment Advice</div>
                            <div class="text-secondary mt-2">Our team of experienced advisors will guide you in making
                                informed investment, whether you're a beginner trader.</div>

                        </a></div>
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-gear-warning text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">4</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Risk Management</div>
                            <div class="text-secondary mt-2">We employ industry-leading tools and techniques to protect
                                your investments and minimize potential losses.</div>

                        </a></div>
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-text-search text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">5</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Research and Analysis</div>
                            <div class="text-secondary mt-2">We provide timely reports, market updates, and data-driven
                                insights to help you make informed trading decisions.</div>

                        </a></div>
                    <div class="service-item p-8 bg-white rounded-lg border border-line hover-box-shadow"><a
                            class="service-item-main h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center justify-between"><i
                                    class="icon-education text-blue md:text-6xl text-5xl"></i>
                                <div class="number heading3 text-placehover">6</div>
                            </div>
                            <div class="heading7 hover:text-blue duration-300 mt-6">Education and Resources</div>
                            <div class="text-secondary mt-2">Expand your knowledge and skills in cryptocurrency trading
                                through our educational resources.</div>

                        </a></div>
                </div>
            </div>
        </div>

        <div class="cta-block style-two relative lg:h-[120px] h-[180px]">
            <div class="bg-cta w-full h-full absolute top-0 left-0 z-[-1]"><img alt="" loading="lazy"
                    width="5000" height="5000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
                    srcset="/finatex-next.vercel.app/_next/images/cta/bg-cta1.png&w=3840&q=75 1x"
                    src="/finatex-next.vercel.app/_next/images/cta/bg-cta1.png&w=3840&q=75" style="color: transparent;">
            </div>
            <div class="container flex items-center justify-between max-lg:flex-col max-lg:justify-center gap-6 h-full">
                <div class="heading5 max-lg:text-center text-white">Looking for a first-class cryptocurrency consultant?
                </div><a class="button-main rounded-full hover:bg-black hover:text-white bg-white text-button px-9 py-3"
                    href="{{ route('user.login') }}">Member Login</a>
            </div>
        </div>
    </main>
@endsection
