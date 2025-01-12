@php
    use App\Models\Bot;

    $page_title = 'Our pricing';
    $short_description =
        'We have vering portfolio ranges for our pricing plans. Select any that best fits your pocket.';

    $bots = Bot::get();

@endphp

{{-- layout --}}
@extends('layouts.fronty')





@section('contents')
    <main class="content">
        <div class="breadcrumb-block w-full lg:h-[400px] sm:h-[360px] h-[320px] relative">
            <div class="bg-img w-full h-full absolute top-0 left-0 z-[-1]"><img alt="banner" loading="lazy" width="4000"
                    height="3000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
                    srcset="/finatex-next.vercel.app/_next/images/banner/case-studies.png&w=3840&q=75 1x"
                    src="/finatex-next.vercel.app/_next/images/banner/case-studies.png&w=3840&q=75"
                    style="color: transparent;"></div>
            <div class="container relative h-full flex items-center">
                <div class="heading-nav flex items-center gap-1 absolute top-8 left-4 py-1.5 px-4 rounded-full bg-line"><a
                        class="hover:underline caption1 text-white" href="/">Home</a><svg
                        xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor"
                        viewBox="0 0 256 256" class="text-white">
                        <path
                            d="M141.66,133.66l-80,80a8,8,0,0,1-11.32-11.32L124.69,128,50.34,53.66A8,8,0,0,1,61.66,42.34l80,80A8,8,0,0,1,141.66,133.66Zm80-11.32-80-80a8,8,0,0,0-11.32,11.32L204.69,128l-74.35,74.34a8,8,0,0,0,11.32,11.32l80-80A8,8,0,0,0,221.66,122.34Z">
                        </path>
                    </svg>
                    <div class="caption1 text-white">Our Pricing Plans</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">Pricing plans</div>
                    <div class="sub-heading mt-4 text-white font-normal">Discover transparent pricing options tailored to
                        your budget on our Pricing page.</div>
                </div>
            </div>
        </div>
        <div class="pricing-block style-pricing">
            <div class="pricing-main lg:py-[100px] sm:py-16 py-10">
                <div class="container">
                    <div class="heading flex flex-col items-center gap-y-8">
                        <div class="title text-center">
                            <div class="heading3">Pricing</div>
                            <div class="body1 mt-2">Choose a plan that’s right for you</div>
                        </div>
                    </div>
                    <div class="list-pricing show lg:mt-[60px] mt-8">
                        <div class="flex max-lg:flex-col gap-8">

                            @foreach ($bots as $bot)
                                <div class="w-full lg:w-1/3">
                                    <div class="pricing-item py-9 px-6 rounded-xl box-shadow">
                                        <div class="heading6">{{ $bot->name }}</div>
                                        <div class="price flex items-end gap-2 mt-5">
                                            <div class="heading2">${{ $bot->min }}</div>
                                            <div class="body3">/ {{ $bot->duration }} {{ $bot->duration_type }}</div>
                                        </div>
                                        <div class="button-block w-full mt-6"><a
                                                class="button-main text-center block hover:text-white hover:bg-blue bg-white border border-blue text-black text-button w-full py-3 rounded-full"
                                                href="{{ route('user.login') }}">Get Started</a></div>
                                        <div class="list-feature md:mt-10 mt-6 flex flex-col gap-3">
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">24/7 Support</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Market Updates</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Insurance</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Unlimited Trading</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Investment Advices</div>
                                            </div>
                                            <div class="item flex items-center gap-4"> <svg
                                                    xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                                    fill="currentColor" viewBox="0 0 256 256" class="text-blue text-3xl">
                                                    <path
                                                        d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm45.66,85.66-56,56a8,8,0,0,1-11.32,0l-24-24a8,8,0,0,1,11.32-11.32L112,148.69l50.34-50.35a8,8,0,0,1,11.32,11.32Z">
                                                    </path>
                                                </svg>
                                                <div class="body3">Unlimited Signals</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-block style-two relative lg:h-[120px] h-[180px]">
            <div class="bg-cta w-full h-full absolute top-0 left-0 z-[-1]"><img alt="" loading="lazy" width="5000"
                    height="5000" decoding="async" data-nimg="1" class="w-full h-full object-cover"
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
