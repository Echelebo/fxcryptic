@php

    use App\Models\DepositCoin;

    $logos = DepositCoin::inRandomOrder()->take(20)->get('logo_url');

    $page_title = 'About ' . site('name');
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
                    <div class="caption1 text-white">About Us</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">About Us</div>
                    <div class="sub-heading mt-4 text-white font-normal">{{ site('name') }} uses advanced blockchain
                        protocol trained on extensive trading data and algorithms to analyze market trends and execute
                        profitable trades with high precision..</div>
                </div>
            </div>
        </div>
        <div class="about-block lg:py-[100px] sm:py-16 py-10 bg-white">
            <div class="container">
                <div class="row flex max-lg:flex-col lg:items-center gap-y-6">
                    <div class="w-full lg:w-1/2">
                        <div class="bg-img w-full overflow-hidden rounded-3xl"><img alt="" loading="lazy"
                                width="4000" height="4000" decoding="async" data-nimg="1" class="w-full h-full block"
                                srcset="/finatex-next.vercel.app/_next/images/component/assessment.png&w=3840&q=75 1x"
                                src="/finatex-next.vercel.app/_next/images/component/assessment.png&w=3840&q=75"
                                style="color: transparent;"></div>
                    </div>
                    <div class="w-full lg:w-1/2 flex-col lg:pl-20">
                        <div class="heading3">Financial assessment</div>
                        <div class="nav-infor mt-8">
                            <div class="list-nav flex items-center gap-10 border-b border-line w-fit">
                                <div
                                    class="text-button-sm has-line-before line-2px line-blue cursor-pointer capitalize active">
                                    about us</div>
                                <div class="text-button-sm has-line-before line-2px line-blue cursor-pointer capitalize ">
                                    mission</div>
                                <div class="text-button-sm has-line-before line-2px line-blue cursor-pointer capitalize ">
                                    vision</div>
                            </div>
                            <div class="description item-filter show">
                                <div class="title text-secondary mt-4">We are devoted team providing premium cryptocurrency
                                    solutions. Explore our mission, values, and achievements as we empower clients for a
                                    secure financial future.</div>
                                <div class="more-infor mt-6">
                                    <div class="infor flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Identification of monthly income</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Creation of savings and investment plan</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Management and calculation of monthly expenses</div>
                                    </div>
                                </div>
                            </div>
                            <div class="description item-filter hide">
                                <div class="title body3 text-secondary mt-4">Our mission is to provide comprehensive and
                                    personalized cryptocurrency solutions that empower our clients to achieve their
                                    financial
                                    goals and secure their future.</div>
                                <div class="more-infor mt-6">
                                    <div class="infor flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Management and calculation of monthly expenses</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Identification of monthly income</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Creation of savings and investment plan</div>
                                    </div>
                                </div>
                            </div>
                            <div class="description item-filter hide">
                                <div class="title body3 text-secondary mt-4">Our unwavering vision is to be the most
                                    trusted and preferred partner in achieving crypto-trading success, diligently guiding
                                    our
                                    valued clients toward a secure and prosperous future.</div>
                                <div class="more-infor mt-6">
                                    <div class="infor flex items-center gap-3"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                            class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Creation of savings and investment plan</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Management and calculation of monthly expenses</div>
                                    </div>
                                    <div class="infor flex items-center gap-3 mt-3"><svg
                                            xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-xl">
                                            <path
                                                d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                            </path>
                                        </svg>
                                        <div class="text-button">Identification of monthly income</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="button-block flex items-center gap-5 md:mt-10 mt-6 pb-2"><a
                                class="button-main text-white bg-blue hover-button-black text-button rounded-full"
                                href="{{ route('user.register') }}">Get started</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="counter-block lg:pb-[100px] sm:pb-16 pb-10">
                <div class="grid xl:grid-cols-4 grid-cols-2 gap-y-8">
                    <div class="item">
                        <div class="flex flex-col items-center">
                            <div class="count-block flex items-center">
                                <div class="counter heading3">2.3</div><span class="heading3">k</span>
                            </div>
                            <div class="body1 text-secondary text-center">Business Setup Growth</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="flex flex-col items-center">
                            <div class="count-block flex items-center">
                                <div class="counter heading3">1.77</div><span class="heading3">k</span>
                            </div>
                            <div class="body1 text-secondary text-center">Business Problem Solving</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="flex flex-col items-center">
                            <div class="count-block flex items-center">
                                <div class="counter heading3">298</div><span class="heading3">k</span>
                            </div>
                            <div class="body1 text-secondary text-center">Goal achiever</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="flex flex-col items-center">
                            <div class="count-block flex items-center">
                                <div class="counter heading3">246</div><span class="heading3">k</span>
                            </div>
                            <div class="body1 text-secondary text-center">Passive income earners</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="service-block bg-surface lg:py-[100px] sm:py-16 py-10">
            <div class="container">
                <div class="text-heading flex items-center justify-center">
                    <div class="">
                        <div class="heading3 text-center">Our Services</div>
                        <div class="desc text-secondary text-center mt-3">Customized cryptocurrency services designed to
                            meet
                            your unique needs and drive your financial success</div>
                    </div>
                </div>
                <div class="list-service grid xl:grid-cols-4 sm:grid-cols-2 gap-8 md:mt-10 mt-6 gap-y-10">
                    <div class="service-item py-8 px-7 bg-white rounded-lg hover-box-shadow"><a
                            class="service-item-main flex flex-col justify-between h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center gap-4"><i
                                    class="icon-coin-chair text-blue md:text-5xl text-4xl"></i>
                                <div class="heading7 hover:text-blue duration-300">Cryptocurrency Trading</div>
                            </div>
                            <div class="text-secondary mt-4">Experience the excitement and potential of the cryptocurrency
                                market with our expert trading services.</div>
                            <div class="read-more flex items-center gap-1 mt-4">
                                <div class="text-button-sm">Explore Plan</div><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                    class="text-blue text-sm duration-300">
                                    <path
                                        d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z">
                                    </path>
                                </svg>
                            </div>
                        </a></div>
                    <div class="service-item py-8 px-7 bg-white rounded-lg hover-box-shadow"><a
                            class="service-item-main flex flex-col justify-between h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center gap-4"><i
                                    class="icon-hand-tick text-blue md:text-5xl text-4xl"></i>
                                <div class="heading7 hover:text-blue duration-300">Portfolio Management</div>
                            </div>
                            <div class="text-secondary mt-4">We analyze market trends, manage risks, and optimize your
                                portfolio to maximize returns and achieve your financial goals.</div>
                            <div class="read-more flex items-center gap-1 mt-4">
                                <div class="text-button-sm">Explore Plan</div><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                    class="text-blue text-sm duration-300">
                                    <path
                                        d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z">
                                    </path>
                                </svg>
                            </div>
                        </a></div>
                    <div class="service-item py-8 px-7 bg-white rounded-lg hover-box-shadow"><a
                            class="service-item-main flex flex-col justify-between h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center gap-4"><i
                                    class="icon-hand-house text-blue md:text-5xl text-4xl"></i>
                                <div class="heading7 hover:text-blue duration-300">Investment Advice</div>
                            </div>
                            <div class="text-secondary mt-4">Our team of experienced advisors will guide you in making
                                informed investment, whether you're a beginner trader.</div>
                            <div class="read-more flex items-center gap-1 mt-4">
                                <div class="text-button-sm">Explore Plan</div><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                    class="text-blue text-sm duration-300">
                                    <path
                                        d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z">
                                    </path>
                                </svg>
                            </div>
                        </a></div>
                    <div class="service-item py-8 px-7 bg-white rounded-lg hover-box-shadow"><a
                            class="service-item-main flex flex-col justify-between h-full" href="{{ route('service') }}">
                            <div class="heading flex items-center gap-4"><i
                                    class="icon-gear-warning text-blue md:text-5xl text-4xl"></i>
                                <div class="heading7 hover:text-blue duration-300">Risk Management</div>
                            </div>
                            <div class="text-secondary mt-4">We employ industry-leading tools and techniques to protect
                                your investments and minimize potential losses.</div>
                            <div class="read-more flex items-center gap-1 mt-4">
                                <div class="text-button-sm">Explore Plan</div><svg xmlns="http://www.w3.org/2000/svg"
                                    width="1em" height="1em" fill="currentColor" viewBox="0 0 256 256"
                                    class="text-blue text-sm duration-300">
                                    <path
                                        d="M184.49,136.49l-80,80a12,12,0,0,1-17-17L159,128,87.51,56.49a12,12,0,1,1,17-17l80,80A12,12,0,0,1,184.49,136.49Z">
                                    </path>
                                </svg>
                            </div>
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
