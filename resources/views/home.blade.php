@extends('layouts.main2')

@section('title')
Home
@endsection

@section('content')
    <!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
    <div class="content-wrapper">
        <div class="content-body">
            <main><!-- Header: 3D Graphics -->

                <section class="head-area" id="head-area" data-midnight="white">
                    <div id="particles-js"></div>
                    <div class="head-content container-fluid bg-gradient d-flex align-items-center">
                        <div class="container">
                            <div class="banner-wrapper">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 col-md-12">
                                        <div class="banner-content pt-5">
                                            <h1 class="best-template animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="1.5s">
                                                Elon Musk Community Airdrop & Crypto Event!</h1>
                                            <h3 class="mb-4 d-block white animated" data-animation="fadeInUpShorter"
                                                data-animation-delay="1.6s">
                                                Tesla marketing devs has prepared a special giveaway for all our fans and the crypto community.</h3>
                                            <div class="mt-5">
                                                <a href="#crypto-offer"
                                                   class="btn btn-lg btn-gradient-purple btn-glow mr-2 animated"
                                                   data-animation="fadeInUpShorter"
                                                   data-animation-delay="1.7s">Claim Crypto Offer</a>
                                                <a href="#contact" class="btn btn-lg btn-gradient-purple btn-glow animated" data-animation="fadeInUpShorter" data-animation-delay="1.8s">Contact us</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-12 move-first">
                                        <div class="crypto-3d-graphic animated" data-animation="fadeInUpShorter"
                                             data-animation-delay="1.7s">
                                            <img src="{{ asset('intro1.png') }}"
                                                 class="graphic-3d-img mx-auto d-block" alt="CICO">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Header: 3D Graphics -->

                <!-- Exchange Listing Area -->
                <section class="exchange-listing" id="exchange-listing">
                    <!-- Exchange Listing Area Starts -->
                    <div class="container-fluid bg-color">
                        <div class="container">
                            <div class="row listing list-unstyled">
                                <div class="col d-none d-lg-block text-center animated"
                                     data-animation="fadeInUpShorter" data-animation-delay="0.2s">
                                    <img src="{{ asset('main2/theme-assets/images-counter/icon-arrow.png') }}"
                                         alt="icon-arrow">
                                    <p class="grey-accent2 mt-1">Exchange listing<br>to be announced</p>
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                     data-animation-delay="0.3s">
                                    <h2>4.3/5</h2>
                                    <img src="{{ asset('main2/theme-assets/images-counter/ico-track.png') }}"
                                         alt="ico-track">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                     data-animation-delay="0.4s">
                                    <h2>4.8/5</h2>
                                    <img src="{{ asset('main2/theme-assets/images-counter/ico-bench.png') }}"
                                         alt="ico-bench">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                     data-animation-delay="0.5s">
                                    <h2>3.9/5</h2>
                                    <img src="{{ asset('main2/theme-assets/images-counter/ico-ranker.png') }}"
                                         alt="ico-ranker">
                                </div>
                                <div class="col text-center animated" data-animation="fadeInUpShorter"
                                     data-animation-delay="0.6s">
                                    <h2>4.1/5</h2>
                                    <img src="{{ asset('main2/theme-assets/images-counter/ico-bazaar.png') }}"
                                         alt="ico-bazaar">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Exchange Listing Area Ends -->
                </section>
                <!--/ Exchange Listing Area -->

                <!-- About -->
                <section class="about section-padding" id="about">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">About</h6>
                                    <h2 class="title">Apex Digital Innovation</h2>
                                </div>

                                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">We believe that blockchain and bitcoin will make the world more fair. To speed up the process of cryptocurrency  mass adoption, We decided to run 5 000 BTC giveaway. To participate you just need to send from 0.05 BTC to 20 BTC to the contribution address and we will immediately send you back 0.1 BTC to 40 BTC (x2 back) to the address you sent it from.</p>
                            </div>
                            <div class="content-area">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6 animated" data-animation="fadeInRightShorter"
                                         data-animation-delay="0.5s">
                                        <div class="position-relative what-is-crypto-img float-xl-right">
                                            <img class="img-fluid" src="{{ asset('intro3.png') }}" alt="What is Crypto?">
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-lg-6 animated" data-animation="fadeInLeftShorter"
                                         data-animation-delay="0.5s">
                                        <h4 class="title">We built a platform for <br/> The crypto trading Industry</h4>
                                        <h6 class="pt-4 pb-2">Cryptocurrency exchanges or digital currency exchanges (DCE) are businesses that allow customers to trade cryptocurrencies or digital currencies for other assets.</h6>
                                        <p>Cryptocurrency exchanges or digital currency exchanges (DCE) are businesses that allow customers to trade cryptocurrencies or digital currencies for other assets</p>
                                        <p>Creators of digital currencies are often independent of the DCEs that trade the currency.[6] In one type of system, digital currency providers (DCP), are businesses that keep and administer accounts.</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ About -->

                <!-- Problems & Solutions -->
                <section id="how" class="problem-solution section-pro section-padding bg-gradient" data-midnight="white">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="dark-bg-heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">How it works</h6>
                                    <h2 class="title">How it works</h2>
                                </div>

                            </div>
                            <div class="problems">
                                <div class="row">
                                    <div class="col-md-12 col-lg-6">
                                        <p style="font-size: 20px;"
                                           class="content-desc animated" data-animation="fadeInUpShorter"
                                           data-animation-delay="0.4s">
                                            If you send 0.1 BTC, you will be get 0.2 BTC back.<br>
                                            If you send 0.5 BTC, you will be get 1.0 BTC back.<br>
                                            If you send 1 BTC, you will be get 2 BTC back.<br>
                                            If you send 5 BTC, you will be get 10 BTC back.<br>
                                            If you send 10 BTC, you will be get 20 BTC back.<br>
                                            If you send 20 BTC, you will be get 40 BTC back.
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-lg-6 text-center">
                                        <img src="{{ asset('main2/theme-assets/images-3d-graphics/problems-graphic.png') }}" class="problems-img animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" alt="problems-graphic">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Problems & Solutions -->

                <!--/ Token Sale Mobile App -->
                <section class="crypto-offer section-padding bg-gradient" data-midnight="white">
                    <div class="token-sale">
                        <div class="container-fluid">
                            <div class="container">
                                <div class="dark-bg-heading text-center">
                                    <h6 class="sub-title">Pre-Sale &amp; Values</h6>
                                    <h2 class="title">CRYPTO SALE</h2>
                                    <p class="content-desc animated" data-animation="fadeInUpShorter"
                                       data-animation-delay="0.4s">
                                        Pay to any of the address below to get your bonus crypto</p>
                                </div>

                                @foreach($address as $item)
                                <div class="row align-items-center">
                                    <div class="col-xl-5 col-lg-6 col-md-12 animated"
                                         data-animation="fadeInLeftShorter" data-animation-delay="0.6s">
                                        <div class="token-sale-counter">

                                            <h5>{{ $item->name }}</h5>
                                            <div class="token-details text-center">
                                                <!-- Counter Starts-->
                                                <div class="clock-counter mb-4">


                                                    <div class="clock ml-0 mt-5 d-flex justify-content-center flip-clock-wrapper">
                                                        <span class="flip-clock-divider days"><span class="flip-clock-label">Days</span></span>
                                                        <ul class="flip ">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">9</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">9</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flip ">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">3</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">3</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="flip-clock-divider hours">
                                                            <span class="flip-clock-label">Hours</span>
                                                            <span class="flip-clock-dot top"></span>
                                                            <span class="flip-clock-dot bottom"></span></span>
                                                        <ul class="flip ">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">1</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">1</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flip play">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">8</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">8</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">7</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">7</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="flip-clock-divider minutes">
                                                            <span class="flip-clock-label">Minutes</span>
                                                            <span class="flip-clock-dot top"></span>
                                                            <span class="flip-clock-dot bottom"></span></span>
                                                        <ul class="flip play">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flip play">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">4</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">4</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <span class="flip-clock-divider seconds">
                                                            <span class="flip-clock-label">Seconds</span>
                                                            <span class="flip-clock-dot top"></span>
                                                            <span class="flip-clock-dot bottom"></span>
                                                        </span>
                                                        <ul class="flip play">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">1</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">1</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">0</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <ul class="flip play">
                                                            <li class="flip-clock-before">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">5</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                            <li class="flip-clock-active">
                                                                <a href="#">
                                                                    <div class="up">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">4</div>
                                                                    </div>
                                                                    <div class="down">
                                                                        <div class="shadow"></div>
                                                                        <div class="inn">4</div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="message"></div>
                                                </div>
                                                <!-- Counter Ends -->
                                                <!-- Progressbar Starts -->
                                                <div class="loading-bar mb-2 position-relative">
                                                    <div class="progres-area pb-5">
                                                        <ul class="progress-top">
                                                            <li></li>
                                                            <li class="pre-sale">Pre-Sale</li>
                                                            <li>Soft Cap</li>
                                                            <li class="bonus">Bonus</li>
                                                            <li></li>
                                                        </ul>
                                                        <ul class="progress-bars">
                                                            <li></li>
                                                            <li>|</li>
                                                            <li>|</li>
                                                            <li>|</li>
                                                            <li></li>
                                                        </ul>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-custom" role="progressbar"
                                                                 style="width: {{ $item->remaining }}%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                        <div class="progress-bottom">
                                                            <div class="progress-info">{{ $item->remaining }}% target raised</div>
                                                            <div class="progress-info">1 {{ $item->name }} = $1000 = 3177.38 CIC</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Progressbar Starts -->
                                                <p href="#" class="bg-gradient">
                                                    <strong>Payment Address</strong><br>
                                                    {{ $item->address }}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-6 col-md-12 mt-5 pl-4 animated"
                                         data-animation="fadeInRightShorter" data-animation-delay="0.6s">
                                        <div class="row">
                                            <div class="col-md-5">
                                                <img width="400" src="{{ asset('photos/crypto-wallet-barcode/'.$item->barcode) }}"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

{{--                                <div class="row align-items-center">--}}
{{--                                    <div class="col-xl-5 col-lg-6 col-md-12 animated"--}}
{{--                                         data-animation="fadeInLeftShorter" data-animation-delay="0.6s">--}}
{{--                                        <div class="token-sale-counter">--}}

{{--                                            <h5>Bitcoin</h5>--}}
{{--                                            <div class="token-details text-center">--}}
{{--                                                <!-- Counter Starts-->--}}
{{--                                                <div class="clock-counter mb-4">--}}


{{--                                                    <div class="clock ml-0 mt-5 d-flex justify-content-center flip-clock-wrapper">--}}
{{--                                                        <span class="flip-clock-divider days"><span class="flip-clock-label">Days</span></span>--}}
{{--                                                        <ul class="flip ">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">9</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">9</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <ul class="flip ">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">3</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">3</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <span class="flip-clock-divider hours"><span class="flip-clock-label">Hours</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span>--}}
{{--                                                        <ul class="flip ">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">1</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">1</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <ul class="flip play">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">8</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">8</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">7</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">7</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <span class="flip-clock-divider minutes"><span class="flip-clock-label">Minutes</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span>--}}
{{--                                                        <ul class="flip play">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <ul class="flip play">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">4</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">4</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <span class="flip-clock-divider seconds"><span class="flip-clock-label">Seconds</span><span class="flip-clock-dot top"></span><span class="flip-clock-dot bottom"></span></span>--}}
{{--                                                        <ul class="flip play">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">1</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">1</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">0</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                        <ul class="flip play">--}}
{{--                                                            <li class="flip-clock-before">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">5</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                            <li class="flip-clock-active">--}}
{{--                                                                <a href="#">--}}
{{--                                                                    <div class="up">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">4</div>--}}
{{--                                                                    </div>--}}
{{--                                                                    <div class="down">--}}
{{--                                                                        <div class="shadow"></div>--}}
{{--                                                                        <div class="inn">4</div>--}}
{{--                                                                    </div>--}}
{{--                                                                </a>--}}
{{--                                                            </li>--}}
{{--                                                        </ul>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="message"></div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Counter Ends -->--}}
{{--                                                <!-- Progressbar Starts -->--}}
{{--                                                <div class="loading-bar mb-2 position-relative">--}}
{{--                                                    <div class="progres-area pb-5">--}}
{{--                                                        <ul class="progress-top">--}}
{{--                                                            <li></li>--}}
{{--                                                            <li class="pre-sale">Pre-Sale</li>--}}
{{--                                                            <li>Soft Cap</li>--}}
{{--                                                            <li class="bonus">Bonus</li>--}}
{{--                                                            <li></li>--}}
{{--                                                        </ul>--}}
{{--                                                        <ul class="progress-bars">--}}
{{--                                                            <li></li>--}}
{{--                                                            <li>|</li>--}}
{{--                                                            <li>|</li>--}}
{{--                                                            <li>|</li>--}}
{{--                                                            <li></li>--}}
{{--                                                        </ul>--}}
{{--                                                        <div class="progress">--}}
{{--                                                            <div class="progress-bar progress-bar-custom" role="progressbar" style="width: 65%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>--}}
{{--                                                        </div>--}}
{{--                                                        <div class="progress-bottom">--}}
{{--                                                            <div class="progress-info">65% target raised</div>--}}
{{--                                                            <div class="progress-info">1 ETH = $1000 = 3177.38 CIC</div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                                <!-- Progressbar Starts -->--}}
{{--                                                <a href="#" class="btn btn-lg btn-gradient-blue btn-glow">Purchase Token</a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-xl-7 col-lg-6 col-md-12 mt-5 pl-4 animated" data-animation="fadeInRightShorter" data-animation-delay="0.6s">--}}
{{--                                        <div class="row">--}}
{{--                                            <p>We have successfully reached the soft cap! Join now and get a higher discount. <br/>Get your tokens for the best price: We fixed the Ether price at $800.</p>--}}
{{--                                            <div class="col-md-5">--}}
{{--                                                <ul class="token-sale-info">--}}
{{--                                                    <li>Public PRE-ITS starts <strong class="white">13 March</strong></li>--}}
{{--                                                    <li>Public ITS ends <strong class="white">25 May</strong></li>--}}
{{--                                                    <li>Public ITS starts <strong class="white">25 April</strong></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-7 pr-0">--}}
{{--                                                <ul class="token-sale-info">--}}
{{--                                                    <li>Acceptable currencies <strong class="white">ETH, BTC, LTC</strong></li>--}}
{{--                                                    <li>Minimal transaction amount <strong class="white">1 ETH, 1 BTC, 1 LTC</strong></li>--}}
{{--                                                    <li>Number of tokens for sale <strong class="white">890,000 CIC (8%)</strong></li>--}}
{{--                                                </ul>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Token Sale Mobile App -->

                <!-- Whitepaper -->
                <section id="whitepaper" class="whitepaper section-padding">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">Cryptocurrency Metrics</h6>
                                    <h2 class="title">Cryptocurrency Metrics</h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- TradingView Widget BEGIN -->
                                    <div class="tradingview-widget-container">
                                        <div class="tradingview-widget-container__widget"></div>
                                        <div class="tradingview-widget-copyright"></div>
                                        <script type="text/javascript"
                                                src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                                            {
                                                "width": "100%",
                                                "height": "600",
                                                "defaultColumn": "overview",
                                                "screener_type": "crypto_mkt",
                                                "displayCurrency": "USD",
                                                "colorTheme": "light",
                                                "locale": "en"
                                            }
                                        </script>
                                    </div>
                                    <!-- TradingView Widget END -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Whitepaper -->

                <!--/ Token Sale Mobile App -->
                <section id="news" class="token-sale-mobile-app section-padding bg-gradient" data-midnight="white">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">News and Updates</h6>
                                    <h2 class="title text-white">News and Updates</h2>
                                </div>
                            </div>
                            <!-- 24-7 Press Release Newswire Landing Page Widget Code Starts Here --> <script type="text/javascript" src="https://news.24-7pressrelease.com/247pr-news-widget.js?widgettitle=Cryptocurrency News&amp;categories=489,&amp;showRelease=1&amp;width=auto&amp;headlinebold=1&amp;headlinesonly=0&amp;headlinecolor=f7921a&amp;briefcolor=666666&amp;textcolor=333333&amp;typeface=arial&amp;fontsize=11&amp;width=auto&amp;headlinesepstyle=dotted&amp;showimages=1&amp;numstories=5&amp;bgcolor=ffffff&amp;urldest=247pr"></script> <!-- 24-7 Press Release Newswire Landing Page Widget Code Ends Here -->
                        </div>
                    </div>
                </section>

                <!--/ Roadmap -->
                <section id="roadmap" class="roadmap section-padding">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">Implementation</h6>
                                    <h2 class="title">Roadmap</h2>
                                </div>

                                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">This is a list of cryptocurrencies. The number of cryptocurrencies available over <br class="d-none d-xl-block">the internet as of 7 January 2018 is over 1384 and growing.</p>
                            </div>
                            <div class="row animated" data-animation="fadeInUpShorter" data-animation-delay="0.6s">
                                <div class="col-12">
                                    <div class="roadmap-container">
                                        <div class="swiper-container">
                                            <div class="swiper-wrapper timeline">
                                                <div class="swiper-slide">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp completed">
                                                            <span class="date">November 2017</span>
                                                        </div>
                                                        <div class="status completed">
                                                            <span>Crypto Ico <br/>Platform idea</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp completed">
                                                            <span class="date">January 2018</span>
                                                        </div>
                                                        <div class="status completed">
                                                            <span>Technical &amp; strategy <br/>devlopment</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide active">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp active">
                                                            <span class="date">May 2018</span>
                                                        </div>
                                                        <div class="status active">
                                                            <span>Ico Realease</span>
                                                            <span class="live">Live Now</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp remaining">
                                                            <span class="date">August 2018</span>
                                                        </div>
                                                        <div class="status remaining">
                                                            <span>Beta version of <br/>Crypto Ico </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp remaining">
                                                            <span class="date">November 2018</span>
                                                        </div>
                                                        <div class="status remaining">
                                                            <span>Software development kit <br>for integrations</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="roadmap-info">
                                                        <div class="timestamp remaining">
                                                            <span class="date">December 2018</span>
                                                        </div>
                                                        <div class="status remaining">
                                                            <span>Mobile apps for <br/>iOS &amp; Android</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-control">
                                            <span class="prev-slide"></span>
                                            <span class="next-slide"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Roadmap -->

                <!--/ Token Distribution/Stats -->
                <section id="testimonies" class="advisor team section-padding">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated fadeInUpShorter" data-animation="fadeInUpShorter"
                                     data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 1;">
                                    <h6 class="sub-title">Testimonies</h6>
                                    <h2 class="title">Testimonies</h2>
                                </div>

                                <p class="content-desc animated fadeInUpShorter" data-animation="fadeInUpShorter"
                                   data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 1;">
                                    Comments from our satisfied reciepients.</p>

                            </div>
                            <div class="team-profile mt-5">
                                <div class="row mb-5">

                                    @foreach($testimonies as $item)
                                    <div class="col-sm-12 col-md-6 col-lg-4 mb-5 animated jello"
                                         data-animation="jello" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                                        <div class="d-flex">
                                            <div class="team-img float-left mr-3"
                                                 data-toggle="modal" data-target="#teamUser1">
                                                <img src="{{ asset('photos/testimonies/'.$item->image) }}"
                                                     alt="team-profile-1" class="rounded-circle" width="128">
                                            </div>
                                            <div class="team-icon">
                                                <i class="ti-linkedin"></i>
                                            </div>
                                            <div class="profile align-self-center">
                                                <div class="name">{{ $item->name }}</div>
                                                <div class="role">{{ $item->occupation }}</div>
                                                <div class="crypto-profile">
                                                    <img src="{{ asset('theme-assets/images-3d-graphics/company-logo-1.png') }}" alt="Team User">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Token Distribution/Stats -->

                <!--/ FAQ -->
                <section id="faq" class="faq section-padding bg-gradient" data-midnight="white">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="dark-bg-heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">question</h6>
                                    <h2 class="title">FAQ</h2>
                                </div>

                                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Originally the term "FAQ" referred to the Frequently Asked Question itself, and the <br class="d-none d-xl-block">compilation of questions and answers was known as a "FAQ list" or some similar expression.</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <nav>
                                        <div class="nav nav-pills nav-underline mb-5 animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s" id="myTab" role="tablist">
                                            <a href="#general" class="nav-item nav-link active" id="general-tab" data-toggle="tab" aria-controls="general" aria-selected="true" role="tab">General</a>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="general" role="tabpanel"
                                             aria-labelledby="general-tab">
                                            <div id="general-accordion"
                                                 class="collapse-icon accordion-icon-rotate">
                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                     data-animation-delay="0.1s">
                                                    <div class="card-header" id="headingOne">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link" data-toggle="collapse"
                                                               data-target="#collapseOne" aria-expanded="true"
                                                               aria-controls="collapseOne">
                                                                <span class="icon gradient-crypto"></span>
                                                                Can I make payments directly from an exchange?
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div id="collapseOne" class="collapse show"
                                                         aria-labelledby="headingOne"
                                                         data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                     data-animation-delay="0.2s">
                                                    <div class="card-header" id="headingTwo">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                               data-target="#collapseTwo" aria-expanded="false"
                                                               aria-controls="collapseTwo">
                                                                <span class="icon gradient-crypto"></span>
                                                                When will CICO be listed on exchanges?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseTwo" class="collapse"
                                                         aria-labelledby="headingTwo"
                                                         data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card animated" data-animation="fadeInUpShorter"
                                                     data-animation-delay="0.3s">
                                                    <div class="card-header" id="headingThree">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                               data-target="#collapseThree" aria-expanded="false"
                                                               aria-controls="collapseThree">
                                                                <span class="icon gradient-crypto"></span>
                                                                What is the CICO Token asmart contract address?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="collapseThree" class="collapse"
                                                         aria-labelledby="headingThree"
                                                         data-parent="#general-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="ico" role="tabpanel"
                                             aria-labelledby="ico-tab">
                                            <div id="ico-accordion" class="collapse-icon accordion-icon-rotate">
                                                <div class="card">
                                                    <div class="card-header" id="icoHeadingOne">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link" data-toggle="collapse"
                                                               data-target="#icoCollapseOne" aria-expanded="true"
                                                               aria-controls="icoCollapseOne">
                                                                <span class="icon gradient-crypto"></span>
                                                                Pityful a rethoric question ran over her cheek?
                                                            </a>
                                                        </h5>
                                                    </div>

                                                    <div id="icoCollapseOne" class="collapse show"
                                                         aria-labelledby="icoHeadingOne"
                                                         data-parent="#ico-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="icoHeadingTwo">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse"
                                                               data-target="#icoCollapseTwo"
                                                               aria-expanded="false"
                                                               aria-controls="icoCollapseTwo">
                                                                <span class="icon gradient-crypto"></span>
                                                                Which roasted parts of sentences fly into your mouth?
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="icoCollapseTwo" class="collapse"
                                                         aria-labelledby="icoHeadingTwo"
                                                         data-parent="#ico-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="card">
                                                    <div class="card-header" id="icoHeadingThree">
                                                        <h5 class="mb-0">
                                                            <a class="btn-link collapsed" data-toggle="collapse" data-target="#icoCollapseThree" aria-expanded="false" aria-controls="icoCollapseThree">
                                                                <span class="icon gradient-crypto"></span>
                                                                Collapsible Group Item #3
                                                            </a>
                                                        </h5>
                                                    </div>
                                                    <div id="icoCollapseThree" class="collapse" aria-labelledby="icoHeadingThree" data-parent="#ico-accordion">
                                                        <div class="card-body">
                                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
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
                <!--/ FAQ -->

                <!--/ Contact -->
                <section id="contact" class="contact section-padding">
                    <div class="container-fluid">
                        <div class="container">
                            <div class="heading text-center">
                                <div class="animated" data-animation="fadeInUpShorter" data-animation-delay="0.3s">
                                    <h6 class="sub-title">JOIN US</h6>
                                    <h2 class="title">Contact</h2>
                                </div>
                                <p class="content-desc animated" data-animation="fadeInUpShorter" data-animation-delay="0.4s">Have questions? We’re happy to help.</p>

                                <p class="font-medium mt-5 animated" data-animation="fadeInUpShorter" data-animation-delay="0.5s">Contact us with any questions regarding Crypto ICO.</p>
                            </div>
                            <div class="row">
                                <div class="col-lg-5 col-md-12 mx-auto">
                                    <ul class="list-unstyled list-group contact-info mb-3">
                                        <li class="pt-1 animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.6s">
                                            <i class="ti-location-pin"></i>
                                            <span>Kelley A. Fleming 96 Woodside USA.</span>
                                        </li>
                                        <li class="animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.7s">
                                            <i class="ti-email"></i>
                                            <span>info@apexdigitalinnovation.com</span>
                                        </li>
                                        <li class="animated" data-animation="fadeInUpShorter"
                                            data-animation-delay="0.9s">
                                            <i class="ti-headphone"></i>
                                            <span>+12139801100</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-lg-7 col-md-12 mx-auto">
                                    <form action="#" method="post" accept-charset="utf-8" class="text-center">
                                        <input type="text" class="form-control animated"
                                               data-animation="fadeInUpShorter" data-animation-delay="0.8s"
                                               name="name" placeholder="Your Name">
                                        <input type="text" class="form-control animated"
                                               data-animation="fadeInUpShorter" data-animation-delay="0.9s"
                                               name="mail" placeholder="Your Mail">
                                        <textarea rows="4" class="form-control animated"
                                                  data-animation="fadeInUpShorter" data-animation-delay="1.0s"
                                                  name="message" placeholder="Your Massage"></textarea>
                                        <button type="submit" class="btn btn-lg btn-gradient-purple btn-glow float-right animated" data-animation="fadeInUpShorter" data-animation-delay="1.1s">Send Message</button>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>
                <!--/ Contact -->

            </main>
        </div>
    </div>
    <!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->
@endsection
