@php

    $page_title = 'FAQs';
    $short_description = 'Below are some frequently asked questions from our users';

    $faqs = [
        [
            'question' => 'What is ' . site('name') . '?',
            'answer' =>
                site('name') .
                ' is an advanced trading platform that utilizes Artificial technology to analyze market trends and execute trades with high precision.',
        ],
        [
            'question' => 'How can I get started with ' . site('name') . '?',
            'answer' =>
                'Getting started is simple. Sign up for an account, complete the verification process, and you can begin trading.',
        ],
        [
            'question' => 'Is my personal information secure with ' . site('name') . '?',
            'answer' =>
                'Yes, we take data security seriously. We employ industry-standard measures to protect your information.',
        ],
        [
            'question' => 'Can I trade on ' . site('name') . ' from anywhere?',
            'answer' =>
                'Absolutely ' . site('name') . ' allows you to trade from anywhere with an internet connection.',
        ],

        [
            'question' => 'Do I need prior trading experience to use ' . site('name') . '?',
            'answer' =>
                'No, ' .
                site('name') .
                ' is designed for both beginners and experienced traders. We offer educational resources to help you get started.',
        ],
        [
            'question' => 'What fees are associated with using ' . site('name') . '?',
            'answer' =>
                'We charge competitive fees, which are transparently displayed on our platform. There are no hidden charges.',
        ],
        [
            'question' => 'Can I withdraw my profits easily?',
            'answer' =>
                'Yes, withdrawing your profits is straightforward. You can initiate withdrawals through your account.',
        ],
        [
            'question' => 'Is customer support available?',
            'answer' =>
                'Absolutely. Our customer support team is here to assist you with any questions or issues you may have.',
        ],
        [
            'question' => 'How often are trading signals generated?',
            'answer' =>
                site('name') .
                ' generates trading signals continuously, ensuring you have access to up-to-date market information.',
        ],
    ];

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
                    <div class="caption1 text-white">FAQs</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">FAQs</div>
                    <div class="sub-heading mt-4 text-white font-normal">Explore our frequently asked questions and our
                        answers to them.</div>
                </div>
            </div>
        </div>
        <div class="faq-block lg:py-[100px] sm:py-16 py-10">
            <div class="container flex items-center justify-center">
                <div class="w-full lg:w-2/3">
                    @foreach ($faqs as $faq)
                        <div class="w-full ts-gray-3-x p-3 rounded-lg">
                            <h3 class="w-full text-2xl rescron-font-bold">
                                {{ $faq['question'] }}
                            </h3>
                            <p class="w-full">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
        <div class="more-question-block mb-[100px]">
            <div class="container">
                <div class="row flex items-center justify-center">
                    <div class="w-full lg:w-2/3">
                        <div class="content bg-gradient-blue rounded-xl flex flex-col items-center gap-4 py-8 px-7">
                            <div class="bg-img w-[120px]"><img alt="" loading="lazy" width="4000" height="4000"
                                    decoding="async" data-nimg="1" class="w-full"
                                    srcset="/finatex-next.vercel.app/_next/images/component/avatar-group.png&w=3840&q=75 1x"
                                    src="/finatex-next.vercel.app/_next/images/component/avatar-group.png&w=3840&q=75"
                                    style="color: transparent;"></div>
                            <div class="text text-center">
                                <div class="heading6 text-white">Still have questions?</div>
                                <div class="body3 text-white mt-2">Can’t find the answer you’re looking for? Please chat to
                                    our friendly team.</div>
                            </div><a class="button-main hover:bg-black bg-blue text-white rounded-full"
                                href="https://wa.me/31685018131">WhatsApp Chat</a>
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
