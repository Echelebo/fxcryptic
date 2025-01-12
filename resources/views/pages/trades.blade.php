@php

    $page_title = 'Our live trading';
    $short_description = 'Watch live trading done by our trading team as they execute these trades';

@endphp

{{-- layout --}}
@extends('layouts.fronty')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<link rel="stylesheet" href="{{ asset('assets/css/gradient.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/fonts.css') }}">

{{-- material icon cdn --}}
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

{{-- sweet alert css --}}

<link rel="preconnect" href="https://fonts.gstatic.com">

<link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Anek+Telugu:wght@100;200;300;400;500;600;700;800&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">





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
                    <div class="caption1 text-white">Live Trades</div>
                </div>
                <div class="text-nav xl:w-1/2 md:w-3/5">
                    <div class="heading3 text-white">Live Trades</div>
                    <div class="sub-heading mt-4 text-white font-normal">Watch live trading done by our trading team as they
                        execute these trades.</div>
                </div>
            </div>
        </div>

        <section class="mt-[100px]">
            <div class="container">
                <div class="w-full px-5 md:px-20 py-5 ">
                    <div class="w-full flex justify-center ts-gray-2 rounded-lg p-5">
                        <div class="w-full" id="recentTradesContainer">
                            <div class="w-full grid grid-cols-1 gap-3 mt-2 text-xs" id="recentTrades">
                                @foreach (recentTradesAll() as $data)
                                    <div
                                        class="recent-trade w-full ts-gray-3 rounded-lg p-2 grid grid-cols-4 lg:grid-cols-7 @if ($data['type'] == 1) text-green-500 @else text-red-500 @endif">
                                        <p class="recent_trade_time"></p>
                                        <p>{{ $data['country'] }}</p>
                                        <p>{{ $data['exchange'] }}</p>
                                        <p>{{ $data['bot'] }}</p>
                                        <p>{{ $data['pair'] }}</p>
                                        <p>{{ $data['amount'] }}</p>
                                        <p>{{ $data['profit'] }}</p>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
            for (let i = 0; i < 100 && i < trades.length; i++) {
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
@endsection
