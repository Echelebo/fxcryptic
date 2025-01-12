@php

    $page_title = 'Contact Us';
    $short_description = 'We are available 24/7. You can reach us via any of the means below.';

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
                    <div class="caption1 text-white">Contact us</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">Contact us</div>
                    <div class="sub-heading mt-4 text-white font-normal">Explore our Contact Us page for prompt assistance
                        from our dedicated team.</div>
                </div>
            </div>
        </div>
        <div class="form-contact style-one lg:py-[100px] sm:py-16 py-10">
            <div class="container flex items-center justify-center">
                <div class="xm:w-5/6 w-full flex max-xl:flex-col xl:items-center gap-y-8">
                    <div class="w-full xl:w-2/5">
                        <div class="infor bg-blue rounded-xl p-10">
                            <div class="heading5 text-white">Get it touch</div>
                            <div class="body3 text-white mt-2">We will get back to you within 24 hours, or call us everyday
                            </div>
                            <div class="list-social flex flex-wrap items-center gap-3 md:mt-10 mt-6"><a
                                    class="item rounded-full w-12 h-12 flex items-center justify-center bg-surface"
                                    href="https://www.facebook.com/" target="_blank"><i
                                        class="icon-facebook text-black"></i></a><a
                                    class="item rounded-full w-12 h-12 flex items-center justify-center bg-surface"
                                    href="https://www.linkedin.com/" target="_blank"><i
                                        class="icon-in text-black"></i></a><a
                                    class="item rounded-full w-12 h-12 flex items-center justify-center bg-surface"
                                    href="https://www.twitter.com/" target="_blank"><i
                                        class="icon-twitter text-sm text-black ml-1"></i></a><a
                                    class="item rounded-full w-12 h-12 flex items-center justify-center bg-surface"
                                    href="https://www.instagram.com/" target="_blank"><i
                                        class="icon-insta text-sm text-black"></i></a><a
                                    class="item rounded-full w-12 h-12 flex items-center justify-center bg-surface"
                                    href="https://www.youtube.com/" target="_blank"><i
                                        class="icon-youtube text-xs text-black"></i></a></div>
                            <div class="list-more-infor md:mt-10 mt-6">
                                <div class="item flex items-center gap-3">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-2xl">
                                            <path
                                                d="M128,20A108,108,0,1,0,236,128,108.12,108.12,0,0,0,128,20Zm0,192a84,84,0,1,1,84-84A84.09,84.09,0,0,1,128,212Zm68-84a12,12,0,0,1-12,12H128a12,12,0,0,1-12-12V72a12,12,0,0,1,24,0v44h44A12,12,0,0,1,196,128Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="line-y"></div>
                                    <div class="text-button normal-case text-white">8AM - 6PM, Mon - sun</div>
                                </div>
                                <div class="item flex items-center gap-3 mt-5">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-2xl">
                                            <path
                                                d="M231.88,175.08A56.26,56.26,0,0,1,176,224C96.6,224,32,159.4,32,80A56.26,56.26,0,0,1,80.92,24.12a16,16,0,0,1,16.62,9.52l21.12,47.15,0,.12A16,16,0,0,1,117.39,96c-.18.27-.37.52-.57.77L96,121.45c7.49,15.22,23.41,31,38.83,38.51l24.34-20.71a8.12,8.12,0,0,1,.75-.56,16,16,0,0,1,15.17-1.4l.13.06,47.11,21.11A16,16,0,0,1,231.88,175.08Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="line-y"> </div>
                                    <div class="text-button normal-case text-white">{{ site('phone') }}</div>
                                </div>
                                <div class="item flex items-center gap-3 mt-5">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-2xl">
                                            <path
                                                d="M224,44H32A12,12,0,0,0,20,56V192a20,20,0,0,0,20,20H216a20,20,0,0,0,20-20V56A12,12,0,0,0,224,44ZM193.15,68,128,127.72,62.85,68ZM44,188V83.28l75.89,69.57a12,12,0,0,0,16.22,0L212,83.28V188Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="line-y"> </div>
                                    <div class="text-button normal-case text-white">{{ site('email') }}</div>
                                </div>
                                <div class="item flex items-center gap-3 mt-5">
                                    <div
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                            fill="currentColor" viewBox="0 0 256 256" class="text-blue text-2xl">
                                            <path
                                                d="M128,60a44,44,0,1,0,44,44A44.05,44.05,0,0,0,128,60Zm0,64a20,20,0,1,1,20-20A20,20,0,0,1,128,124Zm0-112a92.1,92.1,0,0,0-92,92c0,77.36,81.64,135.4,85.12,137.83a12,12,0,0,0,13.76,0,259,259,0,0,0,42.18-39C205.15,170.57,220,136.37,220,104A92.1,92.1,0,0,0,128,12Zm31.3,174.71A249.35,249.35,0,0,1,128,216.89a249.35,249.35,0,0,1-31.3-30.18C80,167.37,60,137.31,60,104a68,68,0,0,1,136,0C196,137.31,176,167.37,159.3,186.71Z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="line-y"> </div>
                                    <div class="text-button normal-case text-white">{{ site('address') }},
                                        {{ site('city') }}, {{ site('state') }},
                                        {{ site('country') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full xl:w-3/5 xl:pl-20">
                        <form action="{{ route('contact-validate') }}" method="post" enctype="multipart/form-data"
                            class="form-block flex flex-col justify-between gap-5">
                            @csrf
                            <div class="heading">
                                <div class="heading5">Request a support</div>
                                <div class="body3 text-secondary mt-2">We will get back to you within 24 hours, or chat us
                                    on
                                    WhatsApp everyday</div>
                            </div>
                            <div class="grid sm:grid-cols-2 gap-5">
                                <div class="w-full"><input
                                        class="w-full bg-surface text-secondary caption1 px-4 py-3 rounded-lg"
                                        placeholder="Email" required="" name="email" type="email"></div>
                                <div class="w-full"><input
                                        class="w-full bg-surface text-secondary caption1 px-4 py-3 rounded-lg"
                                        placeholder="Subject" required="" type="text" name="subject"></div>


                                <div class="col-span-2 w-full">
                                    <textarea class="w-full bg-surface text-secondary caption1 px-4 py-3 rounded-lg" name="message" rows="4"
                                        placeholder="Your Message" required=""></textarea>
                                </div>
                            </div>
                            <div class="button-block"><button
                                    class="button-main hover:border-blue bg-blue text-white text-button rounded-full">Submit
                                    request</button></div>
                        </form>
                    </div>
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
