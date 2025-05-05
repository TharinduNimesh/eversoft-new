@extends('layouts.app')

@section('title', 'Eversoft | Leading Software Development Company in Sri Lanka')
@section('meta')
    <meta name="description" content="Eversoft is a leading software development company in Sri Lanka, delivering innovative solutions in web, mobile and enterprise applications. Partner with us for cutting-edge software solutions.">
    <meta name="keywords" content="software development, web development, mobile apps, enterprise solutions, IT company Sri Lanka, Eversoft, custom software">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:title" content="Leading Software Development Company in Sri Lanka | Eversoft">
    <meta property="og:description" content="Eversoft is a leading software development company in Sri Lanka, delivering innovative solutions in web, mobile and enterprise applications. Partner with us for cutting-edge software solutions.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ asset('/og-image.webp') }}">
    <meta property="og:site_name" content="Eversoft">
@endsection

@section('content')
    <!-- cursor animation start -->
    <div class="ta-cursor" data-ta-cursor></div>
    <!-- cursor animation end -->

    <!-- sideinfo start -->
    <div class="ta-side-info-wrapper">
        <div class="ta-wrapper">
            <div class="top-wrapper d-flex align-items-center justify-content-between">
                <a class="ta-side-logo" href="index.html">
                    <img src="/assets/img/logo/logo-2.svg" alt="logo">
                </a>
                <button class="ta-info-close" data-ta-close>+</button>
            </div>
            <div class="ta-mobile-menu mt-70"></div>
            <h2 class="ta-title mt-80">I Think your Business Looking for a Good Design? Try <span
                    class="ta-gradient">APPIZ</span> Today</h2>
            <ul class="list-unstyled ta-contact-info mt-80">
                <li>
                    <span class="ta-label mb-15"><i class="fa-sharp fa-solid fa-star-sharp"></i> mail Address</span>
                    <p><a href="mailto:Appiz@gmail.com">Appiz@gmail.com</a></p>
                </li>
                <li>
                    <span class="ta-label mb-15"><i class="fa-sharp fa-solid fa-star-sharp"></i> Phone Number</span>
                    <p><a href="tel:+884897889744">+88 4897 8897 44</a></p>
                </li>
                <li>
                    <span class="ta-label mb-15"><i class="fa-sharp fa-solid fa-star-sharp"></i> our Location</span>
                    <p>Malborne (Australia-2480) </p>
                </li>
            </ul>
            <h4 class="ta-label mt-90 mb-20"><i class="fa-sharp fa-solid fa-star-sharp"></i> Instagram Post</h4>
            <div class="ta-insta-feeds d-flex align-items-center">
                <div class="ta-item">
                    <img src="/assets/img/insta/insta-1.jpg" alt="">
                </div>
                <div class="ta-item">
                    <img src="/assets/img/insta/insta-2.jpg" alt="">
                </div>
                <div class="ta-item">
                    <img src="/assets/img/insta/insta-3.jpg" alt="">
                </div>
                <div class="ta-item">
                    <img src="/assets/img/insta/insta-4.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- sideinfo end -->

    <!-- overlay start -->
    <div class="ta-overlay ta-overlay__dark" data-ta-overlay></div>
    <!-- overlay end -->

    <!-- hero area start -->
    <x-sections.hero />
    <!-- hero area end -->

    <!-- video section start -->
    <div class="ta-video-section ta-nft-video-section position-relative">
        <span class="ta-shape ta-gd-shape position-absolute"><img src="/assets/img/nft/shape/brand-shape.svg"
                alt=""></span>
        <video src="/assets/video/video.mov" loop muted autoplay playsinline></video>
    </div>
    <!-- video section end -->

    <!-- join us section start -->
    <x-sections.join-us />
    <!-- join us section end -->

    <!-- about area start -->
    <x-sections.about-us />
    <!-- about area end -->

    <!-- top collection section start -->
    <div class="ta-collection-section position-relative pt-130" id="collection">
        <div class="shape ta-gd-shape"><img src="/assets/img/nft/shape/collection-shape.svg" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ta-section-heading mb-65 text-center">
                        <h2 class="ta-heading" data-ta-split-text>TOP COLLECTION</h2>
                    </div>
                </div>
            </div>
            <div class="row ta-column-gap-30 mt-none-30">
                <div class="col-xl-6 col-lg-6 mt-30">
                    <div class="ta-collection-box wow tfFadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                        <div class="ta-thumb ta-thumb-zoom">
                            <img src="/assets/img/nft/collections/1.jpg" alt="">
                        </div>
                        <div class="ta-content">
                            <h3 class="ta-title ta-title--fz-30 ta-upp-case">The Forgoes NFT</h3>
                            <span class="ta-price d-block ta-upp-case">Price <strong>#3.5ETH</strong></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-30">
                    <div class="ta-collection-box wow tfFadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="ta-thumb ta-thumb-zoom">
                            <img src="/assets/img/nft/collections/2.jpg" alt="">
                        </div>
                        <div class="ta-content">
                            <h3 class="ta-title ta-title--fz-30 ta-upp-case">Sneaker Heads NFT</h3>
                            <span class="ta-price d-block ta-upp-case">Price <strong>#2.8ETH</strong></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="ta-collection-box wow tfFadeUp" data-wow-duration=".9s" data-wow-delay=".6s">
                        <div class="ta-thumb ta-thumb-zoom">
                            <img src="/assets/img/nft/collections/3.jpg" alt="">
                        </div>
                        <div class="ta-content">
                            <h3 class="ta-title ta-title--fz-20 ta-upp-case">cool cats extending</h3>
                            <span class="ta-price d-block ta-upp-case">Price <strong>#4.5ETH</strong></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="ta-collection-box wow tfFadeUp" data-wow-duration=".9s" data-wow-delay=".8s">
                        <div class="ta-thumb ta-thumb-zoom">
                            <img src="/assets/img/nft/collections/4.jpg" alt="">
                        </div>
                        <div class="ta-content">
                            <h3 class="ta-title ta-title--fz-20 ta-upp-case">women eating nft</h3>
                            <span class="ta-price d-block ta-upp-case">Price <strong>#2.8ETH</strong></span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 mt-30">
                    <div class="ta-collection-box wow tfFadeUp" data-wow-duration=".9s" data-wow-delay="1.0s">
                        <div class="ta-thumb ta-thumb-zoom">
                            <img src="/assets/img/nft/collections/5.jpg" alt="">
                        </div>
                        <div class="ta-content">
                            <h3 class="ta-title ta-title--fz-20 ta-upp-case">man with pipe</h3>
                            <span class="ta-price d-block ta-upp-case">Price <strong>#3.5ETH</strong></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 d-flex justify-content-center">
                    <a href="contact.html" data-ta-nft-button
                        class="ta-button ta-button__wide ta-button__nft ta-radious-10 mt-60">See All Collection</a>
                </div>
            </div>
        </div>
    </div>
    <!-- top collection section end -->

    <!-- roadmap area start -->
    <div class="ta-roadmap-section pt-130 fix position-relative ta-zindex-1">
        <div class="ta-nft-gdbg position-absolute ta-gd-shape"><img src="/assets/img/nft/shape/bg-shape.svg"
                alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ta-section-heading mb-75 text-center">
                        <h2 class="ta-heading ta-upp-case" data-ta-split-text>APPIZ Roadmap</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="ta-roadmap-slider-wrapper ta-owl-nav ta-owl-nav__middle position-relative">
            <div data-roadMap-nav-wrapper></div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="ta-roadmap-box-wrapper owl-carousel" data-ta-roadmap-slider>
                            <div class="ta-roadmap-box">
                                <div class="ta-content">
                                    <div class="count-wrapper d-flex align-items-center justify-content-between mb-15">
                                        <div class="ta-round">
                                            <input type="text" class="knob ta-count" value="0" data-rel="10"
                                                data-linecap="round" data-width="70" data-height="70"
                                                data-bgcolor="#e6e6e6" data-fgcolor="#9296f6" data-thickness=".1"
                                                data-readonly="true" data-skin="tron" data-angleOffset="10" disabled>
                                        </div>
                                        <span class="shape"><img src="/assets/img/nft/shape/border-shape-1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="ta-title ta-title--fz-22 mb-20">Planning</h4>
                                    <p>The first step in planning an NFT <br>project is to decide what your.</p>
                                    <ul class="ta-list-items list-unstyled pt-30">
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Release website and logo</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Grow community</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Launch the project</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ta-roadmap-box">
                                <div class="ta-content">
                                    <div class="count-wrapper d-flex align-items-center justify-content-between mb-15">
                                        <div class="ta-round">
                                            <input type="text" class="knob ta-count" value="0" data-rel="40"
                                                data-linecap="round" data-width="70" data-height="70"
                                                data-bgcolor="#e6e6e6" data-fgcolor="#02fc87" data-thickness=".1"
                                                data-readonly="true" data-skin="tron" data-angleOffset="10" disabled>
                                        </div>
                                        <span class="shape"><img src="/assets/img/nft/shape/border-shape-1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="ta-title ta-title--fz-22 mb-20">Production</h4>
                                    <p>We will help to make NFT art from <br> your preferences and ideas.</p>
                                    <ul class="ta-list-items list-unstyled pt-30">
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Release website and logo</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Grow community</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Launch the project</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ta-roadmap-box">
                                <div class="ta-content">
                                    <div class="count-wrapper d-flex align-items-center justify-content-between mb-15">
                                        <div class="ta-round">
                                            <input type="text" class="knob ta-count" value="0" data-rel="60"
                                                data-linecap="round" data-width="70" data-height="70"
                                                data-bgcolor="#e6e6e6" data-fgcolor="#ffc65f" data-thickness=".1"
                                                data-readonly="true" data-skin="tron" data-angleOffset="10" disabled>
                                        </div>
                                        <span class="shape"><img src="/assets/img/nft/shape/border-shape-1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="ta-title ta-title--fz-22 mb-20">Launch</h4>
                                    <p>NFT Launch is a top multi-chain <br> Defy Launchpad enabling nft.</p>
                                    <ul class="ta-list-items list-unstyled pt-30">
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Release website and logo</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Grow community</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Launch the project</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ta-roadmap-box">
                                <div class="ta-content">
                                    <div class="count-wrapper d-flex align-items-center justify-content-between mb-15">
                                        <div class="ta-round ">
                                            <input type="text" class="knob ta-count" value="0" data-rel="70"
                                                data-linecap="round" data-width="70" data-height="70"
                                                data-bgcolor="#e6e6e6" data-fgcolor="#fd4bd6" data-thickness=".1"
                                                data-readonly="true" data-skin="tron" data-angleOffset="10" disabled>
                                        </div>
                                        <span class="shape"><img src="/assets/img/nft/shape/border-shape-1.png"
                                                alt=""></span>
                                    </div>
                                    <h4 class="ta-title ta-title--fz-22 mb-20">Minting</h4>
                                    <p>Minting means converting digital data into crypto collections or digital.</p>
                                    <ul class="ta-list-items list-unstyled pt-30">
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Release website and logo</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Grow community</p>
                                        </li>
                                        <li><span class="ta-icon"><i class="fal fa-check"></i></span>
                                            <p>Launch the project</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team section start -->
            <div class="ta-team-section pt-130 position-relative pb-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="ta-section-heading mb-75 text-center">
                                <h2 class="ta-heading ta-upp-case" data-ta-split-text>APPIZ team</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            <div class="row mt-none-40">
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".4s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-1.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Andry
                                                    Moray</a></h4>
                                            <span class="ta-designation d-block">Shape Master</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".6s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-2.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Dianne
                                                    Russell</a></h4>
                                            <span class="ta-designation d-block">3D Artist</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay=".8s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-3.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Annette
                                                    Black</a></h4>
                                            <span class="ta-designation d-block">Bit Coin</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay="1.0s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-4.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Jerome
                                                    Bell</a></h4>
                                            <span class="ta-designation d-block">Bit Coin</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay="1.20s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-5.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Theresa
                                                    Webb</a></h4>
                                            <span class="ta-designation d-block">Shape Master</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 mt-80">
                                    <div class="ta-team-box ta-team-box__style-nft wow tfFadeUp" data-wow-duration=".9s"
                                        data-wow-delay="1.40s">
                                        <div class="ta-thumb">
                                            <img class="mt-none-50" src="/assets/img/nft/team/team-6.jpg" alt="">
                                        </div>
                                        <div class="ta-content pt-35">
                                            <h4 class="ta-name ta-case-cap mb-10"><a href="team-details.html">Eleanor
                                                    Pena</a></h4>
                                            <span class="ta-designation d-block">Artist</span>
                                            <div class="ta-social-links d-flex justify-content-center mt-30">
                                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                                <a href="#0"><i class="fab fa-discord"></i></a>
                                                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- team section end -->
        </div>
    </div>
    <!-- roadmap area end -->

    <!-- testimonial section start -->
    <div class="ta-testimonial-section ta-testimonial-section__style-nft position-relative fix">
        <div data-ta-thumb-zoom class="ta-shape ta-shape__1 position-absolute d-none d-xl-block"><img
                src="/assets/img/nft/testimonial/author-rev-1.png" alt=""></div>
        <div data-ta-thumb-zoom class="ta-shape ta-shape__2 position-absolute d-none d-xl-block"><img
                src="/assets/img/nft/testimonial/author-rev-2.png" alt=""></div>
        <div data-ta-thumb-zoom class="ta-shape ta-shape__3 position-absolute d-none d-xl-block"><img
                src="/assets/img/nft/testimonial/author-rev-3.png" alt=""></div>
        <div data-ta-thumb-zoom class="ta-shape ta-shape__4 position-absolute d-none d-xl-block"><img
                src="/assets/img/nft/testimonial/author-rev-4.png" alt=""></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="ta-section-heading mb-55 text-center">
                        <h2 class="ta-heading ta-upp-case" data-ta-split-text>what customer say</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-10">
                    <div class="ta-testimonial-wrapper ta-owl-dots owl-carousel" data-ta-nft-testimonial>
                        <div class="ta-testimonial-box text-center">
                            <div class="ta-content">
                                <p>"Appiz is a user-friendly NFT platform that’s great for beginners and experts alike. You
                                    can set up an account for free and start browsing their huge selection. The platform has
                                    a good suite of tools .”</p>
                            </div>
                            <div class="ta-bottom-wrapper mt-50">
                                <div class="ta-thumb mb-25">
                                    <img src="/assets/img/nft/testimonial/testimonial-1.jpg" alt="">
                                </div>
                                <h4 class="ta-name ta-upp-case">Leslie Alexander</h4>
                                <span class="ta-designation d-block">3D Artist</span>
                            </div>
                        </div>
                        <div class="ta-testimonial-box text-center">
                            <div class="ta-content">
                                <p>"Appiz is a user-friendly NFT platform that’s great for beginners and experts alike. You
                                    can set up an account for free and start browsing their huge selection. The platform has
                                    a good suite of tools .”</p>
                            </div>
                            <div class="ta-bottom-wrapper mt-50">
                                <div class="ta-thumb mb-25">
                                    <img src="/assets/img/nft/testimonial/testimonial-1.jpg" alt="">
                                </div>
                                <h4 class="ta-name ta-upp-case">Leslie Alexander</h4>
                                <span class="ta-designation d-block">3D Artist</span>
                            </div>
                        </div>
                        <div class="ta-testimonial-box text-center">
                            <div class="ta-content">
                                <p>"Appiz is a user-friendly NFT platform that’s great for beginners and experts alike. You
                                    can set up an account for free and start browsing their huge selection. The platform has
                                    a good suite of tools .”</p>
                            </div>
                            <div class="ta-bottom-wrapper mt-50">
                                <div class="ta-thumb mb-25">
                                    <img src="/assets/img/nft/testimonial/testimonial-1.jpg" alt="">
                                </div>
                                <h4 class="ta-name ta-upp-case">Leslie Alexander</h4>
                                <span class="ta-designation d-block">3D Artist</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial section end -->

    <!-- faq section start -->
    <div class="ta-faq-section pt-130 position-relative ta-zindex-1 pb-130" id="faq">
        <div class="ta-nft-gdbg position-absolute ta-gd-shape"><img src="/assets/img/nft/shape/nft-footer-shape.svg"
                alt=""></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="ta-section-heading mb-65">
                        <h2 class="ta-heading ta-upp-case" data-ta-split-text>Frequently Asked Questions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-2 col-lg-3">
                    <div class="ta-faq-tab ta-faq-tab__style-nft pr-30">
                        <nav>
                            <div class="nav d-block" role="tablist">
                                <a class="nav-link ta-upp-case active" id="faq-tab-1-tab" data-bs-toggle="tab"
                                    href="#faq-tab-1" role="tab" aria-controls="faq-tab-1"
                                    aria-selected="true">CRYPTOCURRENCY</a>
                                <a class="nav-link ta-upp-case" id="faq-tab-2-tab" data-bs-toggle="tab"
                                    href="#faq-tab-2" role="tab" aria-controls="faq-tab-2" aria-selected="false">NFT
                                    TOKEN </a>
                                <a class="nav-link ta-upp-case" id="faq-tab-3-tab" data-bs-toggle="tab"
                                    href="#faq-tab-3" role="tab" aria-controls="faq-tab-3"
                                    aria-selected="false">COLLECTION </a>
                                <a class="nav-link ta-upp-case" id="faq-tab-4-tab" data-bs-toggle="tab"
                                    href="#faq-tab-4" role="tab" aria-controls="faq-tab-4"
                                    aria-selected="false">CRYPTO TRADING </a>
                            </div>
                        </nav>
                    </div>
                </div>
                <div class="col-xxl-10 col-lg-9">
                    <div class="tab-content position-relative ta-zindex-1" id="faq-tabContent">
                        <div class="tab-pane ta-faq-wrapper fade active show" id="faq-tab-1" role="tabpanel"
                            aria-labelledby="faq-tab-1-tab">
                            <div class="ta-faq-wrapper">
                                <div class="accordion" id="accordionFaq-1">
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-1-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-1-1" aria-expanded="true"
                                                aria-controls="collapse-1-1">
                                                How to make money with NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-1-1" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-1-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1-2"
                                                aria-expanded="false" aria-controls="collapse-1-2">
                                                What are NFTs and how do they work?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-1-2" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-1-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1-3"
                                                aria-expanded="false" aria-controls="collapse-1-3">
                                                What is the best way to collect NFT?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-1-3" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-1-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1-4"
                                                aria-expanded="false" aria-controls="collapse-1-4">
                                                What is the environmental impact of NTFs?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-4" class="accordion-collapse collapse"
                                            aria-labelledby="heading-1-4" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-1-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-1-5"
                                                aria-expanded="false" aria-controls="collapse-1-5">
                                                What is the future of NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-1-5" class="accordion-collapse collapse"
                                            aria-labelledby="heading-1-5" data-bs-parent="#accordionFaq-1">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane ta-faq-wrapper fade" id="faq-tab-2" role="tabpanel"
                            aria-labelledby="faq-tab-2-tab">
                            <div class="ta-faq-wrapper">
                                <div class="accordion" id="accordionFaq-2">
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-2-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-2-1" aria-expanded="true"
                                                aria-controls="collapse-2-1">
                                                How to make money with NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-2-1" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-2-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2-2"
                                                aria-expanded="false" aria-controls="collapse-2-2">
                                                What are NFTs and how do they work?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2-2" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-2-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2-3"
                                                aria-expanded="false" aria-controls="collapse-2-3">
                                                What is the best way to collect NFT?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2-3" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-2-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2-4"
                                                aria-expanded="false" aria-controls="collapse-2-4">
                                                What is the environmental impact of NTFs?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-4" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2-4" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-2-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-2-5"
                                                aria-expanded="false" aria-controls="collapse-2-5">
                                                What is the future of NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-2-5" class="accordion-collapse collapse"
                                            aria-labelledby="heading-2-5" data-bs-parent="#accordionFaq-2">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane ta-faq-wrapper fade" id="faq-tab-3" role="tabpanel"
                            aria-labelledby="faq-tab-3-tab">
                            <div class="ta-faq-wrapper">
                                <div class="accordion" id="accordionFaq-3">
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-3-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-3-1" aria-expanded="true"
                                                aria-controls="collapse-3-1">
                                                How to make money with NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-3-1" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-3-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3-2"
                                                aria-expanded="false" aria-controls="collapse-3-2">
                                                What are NFTs and how do they work?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3-2" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-3-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3-3"
                                                aria-expanded="false" aria-controls="collapse-3-3">
                                                What is the best way to collect NFT?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3-3" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-3-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3-4"
                                                aria-expanded="false" aria-controls="collapse-3-4">
                                                What is the environmental impact of NTFs?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-4" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3-4" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-3-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-3-5"
                                                aria-expanded="false" aria-controls="collapse-3-5">
                                                What is the future of NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-3-5" class="accordion-collapse collapse"
                                            aria-labelledby="heading-3-5" data-bs-parent="#accordionFaq-3">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane ta-faq-wrapper fade" id="faq-tab-4" role="tabpanel"
                            aria-labelledby="faq-tab-4-tab">
                            <div class="ta-faq-wrapper">
                                <div class="accordion" id="accordionFaq-4">
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-4-1">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse-4-1" aria-expanded="true"
                                                aria-controls="collapse-4-1">
                                                How to make money with NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-1" class="accordion-collapse collapse show"
                                            aria-labelledby="heading-4-1" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-4-2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4-2"
                                                aria-expanded="false" aria-controls="collapse-4-2">
                                                What are NFTs and how do they work?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-2" class="accordion-collapse collapse"
                                            aria-labelledby="heading-4-2" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-4-3">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4-3"
                                                aria-expanded="false" aria-controls="collapse-4-3">
                                                What is the best way to collect NFT?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-3" class="accordion-collapse collapse"
                                            aria-labelledby="heading-4-3" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-4-4">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4-4"
                                                aria-expanded="false" aria-controls="collapse-4-4">
                                                What is the environmental impact of NTFs?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-4" class="accordion-collapse collapse"
                                            aria-labelledby="heading-4-4" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item ta-faq-item ta-faq-item__style-nft">
                                        <h2 class="accordion-header title" id="heading-4-5">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapse-4-5"
                                                aria-expanded="false" aria-controls="collapse-4-5">
                                                What is the future of NFTs?
                                            </button>
                                        </h2>
                                        <div id="collapse-4-5" class="accordion-collapse collapse"
                                            aria-labelledby="heading-4-5" data-bs-parent="#accordionFaq-4">
                                            <div class="accordion-body content">
                                                <p>Non-Fungible in the sense that they are unique and cannot be interchanged
                                                    like fungible assets such as Bitcoin. Let’s take for example if you
                                                    exchange a Bitcoin to get another, nothing changes, you still get the
                                                    same Bitcoin back — it’s the opposite in the case of NFTs.</p>
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
    </div>
@endsection
