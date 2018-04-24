@extends('layouts.master')

@section('content')

    <!-- Promo Block -->
    <section class="g-bg-cover g-bg-pos-center g-bg-img-hero g-bg-black-opacity-0_3--after g-flex-centered g-py-150" style="background-image: url('assets/images/ollisar.jpg');">
        <div class="container g-bg-cover__inner">
            <div class="row">
                <div class="col-md-5 align-self-center g-overflow-hidden g-mb-30 g-mb-0--md">
                    <!-- Promo Block Content -->
                    <h2 class="g-color-white g-font-size-30 g-font-size-45--md text-uppercase g-line-height-1 g-mb-5" data-animation="fadeInUp" data-animation-delay="200" data-animation-duration="1500">Amazing</h2>
                    <h3 class="g-color-primary g-font-weight-700 g-font-size-40 g-font-size-60--md text-uppercase g-line-height-1 g-mb-20" data-animation="fadeInLeft" data-animation-delay="500" data-animation-duration="2000">Features</h3>
                    <p class="g-color-white-opacity-0_8 g-font-size-28 g-mb-15" data-animation="fadeInUp" data-animation-delay="1100" data-animation-duration="1500">Unify bootstrap template</p>
                    <div data-animation="fadeInRight" data-animation-delay="1400" data-animation-duration="1500">
                        <p class="g-color-white-opacity-0_8 g-font-size-18 g-mb-20 g-mb-0--md">Youtube, Vimeo and custom iframe supported</p>
                    </div>
                    <!-- End Promo Block Content -->
                </div>

                <div class="col-md-7 g-overflow-hidden">
                    <div class="g-brd-around g-brd-7 g-brd-white" data-animation="fadeInRight" data-animation-delay="1700" data-animation-duration="1500">
                        <!-- Promo Block - Video -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <video class="js-video-audio u-video-v1 mb-0" poster="" preload data-plyr='{"controls" : ["play-large"]}'>
                                <source src="assets/video/background-vid.mp4" type="video/mp4;">
                                <source src="assets/video/background-vid.webm" type="video/webm;">
                            </video>
                        </div>
                        <!-- End Promo Block - Video -->

                        <!-- Promo Block - Info -->
                        <ul class="u-video-v1-info">
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank">View test video</a> &copy; Test Director
                            </li>
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank">Test Director &ndash; &ldquo;test video&rdquo;</a> &copy; Test Director
                            </li>
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank"> View test video</a> on <i class="fa fa-youtube"></i> Youtube
                            </li>
                            <li class="u-video-v1-info__item">
                                <a href="#!" target="_blank"> View test video</a> on <i class="fa fa-vimeo"></i> Vimeo
                            </li>
                        </ul>
                        <!-- End Promo Block - Info -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Promo Block -->

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-70">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
            <div class="col-lg-9">
                <h1 class="h2 g-color-white g-font-weight-600 mb-2">We are Unify</h1>
                <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
                <p class="lead mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
            </div>
        </div>
        <!-- End Heading -->

        <div class="row">
            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-087 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Creative ideas</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                        <a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-035 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Excellent features</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                        <a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-lg-4 g-mb-30">
                <!-- Icon Blocks -->
                <div class="media g-mb-15">
                    <div class="d-flex mr-4">
              <span class="g-color-primary g-font-size-30">
                  <i class="icon-education-141 u-line-icon-pro"></i>
                </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-white g-font-weight-600 mb-20">Fully responsive</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                        <a class="g-color-main g-color-primary--hover g-font-weight-600 g-font-size-12 g-text-underline--none--hover text-uppercase" href="#!">Learn More</a>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </section>
    <!-- End Icon Blocks -->

    <!-- Video Intro -->
    <section class="g-bg-secondary">
        <div class="container g-pt-100 g-pb-70">
            <div class="row justify-content-between">
                <div class="col-lg-5 g-mb-30">
                    <div class="mb-2">
                        <div class="d-inline-block g-width-30 g-height-2 g-pos-rel g-top-minus-4 g-bg-primary mr-2"></div>
                        <span class="g-color-gray-dark-v3 g-font-weight-600 g-font-size-12 text-uppercase">Testimonials</span>
                    </div>
                    <h2 class="h1 g-color-black g-font-weight-600 g-mb-35">
                        <span class="g-color-primary">What</span> People<br>Say about <span class="g-color-primary">Unify</span>
                    </h2>

                    <!-- Carousel -->
                    <div id="carouselCus1" class="js-carousel js-carousel_single-item-thumbs5__slides g-pb-35" data-infinite="true" data-fade="true" data-lazy-load="progressive" data-animation="linear" data-pagi-classes="u-carousel-indicators-v1 g-bottom-0">
                        <div class="js-slide">
                            <p class="g-font-style-italic g-font-size-17 mb-4">Dear Htmlstream team, I just bought the Unify template some weeks ago. The template is really nice and offers quite a large set of options.</p>
                            <div class="media">
                                <img class="d-flex align-self-center g-brd-around g-brd-3 g-brd-white g-width-50 g-height-50 rounded-circle mr-3" data-lazy="assets/img-temp/100x100/img7.jpg" alt="Image Description">
                                <div class="media-body align-self-center">
                                    <h4 class="g-color-black g-font-weight-600 g-font-size-13 text-uppercase g-mb-0">Daniel Ramirez</h4>
                                    <span class="d-block g-color-gray-dark-v4 g-font-size-12">Lead Designer, Google Inc.</span>
                                </div>
                            </div>
                        </div>

                        <div class="js-slide">
                            <p class="g-font-style-italic g-font-size-17 mb-4">Hi there purchased a couple of days ago and the site looks great, big thanks to the htmlstream guys, they gave me some great help with some fiddly setup issues.</p>
                            <div class="media">
                                <img class="d-flex align-self-center g-brd-around g-brd-3 g-brd-white g-width-50 g-height-50 rounded-circle mr-3" data-lazy="assets/img-temp/100x100/img5.jpg" alt="Image Description">
                                <div class="media-body align-self-center">
                                    <h4 class="g-color-black g-font-weight-600 g-font-size-13 text-uppercase g-mb-0">Sara Anderson</h4>
                                    <span class="d-block g-color-gray-dark-v4 g-font-size-12">Developer, Microsoft Inc.</span>
                                </div>
                            </div>
                        </div>

                        <div class="js-slide">
                            <p class="g-font-style-italic g-font-size-17 mb-4">I'm very impressed with the theme and customer support! Thanks</p>
                            <div class="media">
                                <img class="d-flex align-self-center g-brd-around g-brd-3 g-brd-white g-width-50 g-height-50 rounded-circle mr-3" data-lazy="assets/img-temp/100x100/img4.jpg" alt="Image Description">
                                <div class="media-body align-self-center">
                                    <h4 class="g-color-black g-font-weight-600 g-font-size-13 text-uppercase g-mb-0">Alisa Gomez</h4>
                                    <span class="d-block g-color-gray-dark-v4 g-font-size-12">HR, Airbnb Inc.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Carousel -->
                </div>

                <div class="col-lg-6 g-mt-50 g-mb-30">
                    <!-- Article -->
                    <article class="u-shadow-v21 u-shadow-v21--hover g-pos-rel g-bg-white g-transition-0_3 g-pa-10 rounded">
                        <img class="img-fluid w-100" src="assets/img-temp/500x320/img1.jpg" alt="Image Description">
                        <div class="g-absolute-centered g-px-50 g-py-200">
                            <a class="js-fancybox d-inline-block" href="javascript:;" data-src="//www.youtube.com/embed/BNpiwOkKIJ8?autoplay=1" data-speed="350" data-caption="Single Image">
                  <span class="u-icon-v3 g-bg-primary g-color-white g-bg-black--hover g-rounded-50x g-cursor-pointer">
                        <i class="g-font-size-17 g-pos-rel g-left-2 fa fa-play"></i>
                      </span>
                            </a>
                        </div>
                    </article>
                    <!-- End Article -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Video Intro -->

    <!-- Blog News -->
    <section class="container g-pt-100 g-pb-60">
        <!-- Heading -->
        <div class="row justify-content-center text-center g-mb-50">
            <div class="col-lg-9">
                <h2 class="h2 g-color-black g-font-weight-600 mb-2">Follow the Latest News</h2>
                <div class="d-inline-block g-width-30 g-height-2 g-bg-primary mb-2"></div>
                <p class="lead mb-0">We are a creative studio focusing on culture, luxury, editorial &amp; art. Somewhere between sophistication and simplicity.</p>
            </div>
        </div>
        <!-- End Heading -->

        <div class="row">
            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Grid Overlap Blocks -->
                <article>
                    <img class="img-fluid w-100" src="assets/img-temp/400x270/img7.jpg" alt="Image Description">
                    <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                        <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                        <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                            <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Announcing a free plan for small teams</a>
                        </h2>
                        <p class="g-color-gray-dark-v4 g-line-height-1_8">At Wake, our mission has always been focused on bringing openness and transparency.</p>
                        <a class="g-font-size-13" href="#!">Read more...</a>
                    </div>
                </article>
                <!-- End Blog Grid Overlap Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Grid Overlap Blocks -->
                <article>
                    <img class="img-fluid w-100" src="assets/img-temp/400x270/img3.jpg" alt="Image Description">
                    <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                        <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">1 June 2017</span>
                        <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                            <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">Exclusive interview with InVision's CEO</a>
                        </h2>
                        <p class="g-color-gray-dark-v4 g-line-height-1_8">Clark Valberg is the founder and CEO of InVision. If you are a designer...</p>
                        <a class="g-font-size-13" href="#!">Read more...</a>
                    </div>
                </article>
                <!-- End Blog Grid Overlap Blocks -->
            </div>

            <div class="col-sm-6 col-lg-4 g-mb-30">
                <!-- Blog Grid Overlap Blocks -->
                <article>
                    <img class="img-fluid w-100" src="assets/img-temp/400x270/img2.jpg" alt="Image Description">
                    <div class="g-width-80x g-bg-white g-pos-rel g-z-index-1 g-pa-30 g-mt-minus-50 mx-auto">
                        <span class="d-block g-color-gray-dark-v4 g-font-weight-600 g-font-size-12 text-uppercase mb-2">31 May 2017</span>
                        <h2 class="h5 g-color-black g-font-weight-600 mb-3">
                            <a class="u-link-v5 g-color-black g-color-primary--hover g-cursor-pointer" href="#!">A UX strategy for the Ultimate Product Launch</a>
                        </h2>
                        <p class="g-color-gray-dark-v4 g-line-height-1_8">In an attempt to answer those questions, I poured over the biggest collections of design.</p>
                        <a class="g-font-size-13" href="#!">Read more...</a>
                    </div>
                </article>
                <!-- End Blog Grid Overlap Blocks -->
            </div>
        </div>
    </section>
    <!-- End Blog News -->

    <!-- Counter -->
    <section class="container-fluid g-pa-20">
        <div class="dzsparallaxer auto-init height-is-based-on-content use-loading mode-scroll loaded dzsprx-readyall g-bg-cover g-bg-black-opacity-0_6--after" data-options="{direction: 'fromtop', animation_duration: 25, direction: 'reverse'}">
            <!-- Promo Block - Parallax Video -->
            <div class="dzsparallaxer--target" style="width: 2294.03px; height: 200%; transform: translate3d(0px, -260.85px, 0px);" data-forcewidth_ratio="1.77">
                <div class="js-bg-video g-pos-abs w-100 h-100" data-hs-bgv-type="vimeo" data-hs-bgv-id="167434033" data-hs-bgv-loop="1" style="position: relative;">
                    <div class="hs-video-preview" style="background-image: url('https://i.vimeocdn.com/video/573450806_640.jpg'); display: none;">
                    </div>
                    <div id="hsVimeoPlayer0" class="hs-vimeo hs-bg-video" data-hs-bgv-id="167434033" data-hs-bgv-loop="1" data-vimeo-initialized="true">
                        <video muted autoplay="" loop="" class="fillWidth fadeIn wow collapse show in" data-wow-delay="0.5s" poster="assets/images/ollisar.jpg" id="video-background">
                            <source id='video' src='/assets/video/background-video-720-2.webm' type='video/webm'>
                        </video>
                    </div>
                </div>
            </div>
            <!-- End Promo Block - Parallax Video -->

            <div class="row text-center g-min-height-450 g-flex-centered g-pos-rel g-z-index-1">
                <div class="col-sm-8 col-md-7 col-lg-4 px-5 px-sm-0">
                    <span class="d-block g-color-white-opacity-0_8 g-font-weight-600 text-uppercase mb-2">Submitted By:Arthmael</span>
                    <h2 class="h1 g-color-white g-font-weight-600 mb-0">This Month's Featured Video</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- End Counter -->

    <!-- Icon Blocks -->
    <section class="container g-pt-100 g-pb-10">
        <div class="row">
            <div class="col-md-6 text-md-right g-mb-40">
                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Creative ideas</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-education-087 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Excellent features</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-education-035 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="media-body mr-4">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Fully responsive</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                    <div class="d-flex">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-education-141 u-line-icon-pro"></i>
              </span>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>

            <div class="col-md-6 g-mb-40">
                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-finance-256 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Clean code</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-primary rounded-circle">
                <i class="icon-science-020 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Extensive documentation</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->

                <!-- Icon Blocks -->
                <div class="media g-mb-40">
                    <div class="d-flex mr-4">
              <span class="u-icon-v2 g-color-white g-bg-black rounded-circle">
                <i class="icon-finance-009 u-line-icon-pro"></i>
              </span>
                    </div>
                    <div class="media-body">
                        <h3 class="h5 g-color-black g-font-weight-600 mb-20">Modern design</h3>
                        <p class="g-color-gray-dark-v4">We strive to embrace and drive change in our industry which allows us to keep our clients relevant.</p>
                    </div>
                </div>
                <!-- End Icon Blocks -->
            </div>
        </div>
    </section>
    <!-- End Icon Blocks -->

    <!-- Cube Portfolio Blocks - Content -->
    <div class="container-fluid g-px-4 g-mb-4">
        <div class="cbp" data-controls="#filterControls1" data-animation="quicksand" data-x-gap="5" data-y-gap="5" data-media-queries='[{"width": 1500, "cols": 4}, {"width": 1100, "cols": 4}, {"width": 800, "cols": 3}, {"width": 480, "cols": 2}, {"width": 300, "cols": 1}]'>
            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img8.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Branding work</h3>
                            <span class="d-block g-color-white-opacity-0_8">Identity, Design</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img8.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img15.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Development</h3>
                            <span class="d-block g-color-white-opacity-0_8">Design</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img15.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img9.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Project planner</h3>
                            <span class="d-block g-color-white-opacity-0_8">Graphic, Identity</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img9.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img10.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Design</h3>
                            <span class="d-block g-color-white-opacity-0_8">Graphic</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img10.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img12.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Creative agency</h3>
                            <span class="d-block g-color-white-opacity-0_8">Identity</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img12.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img16.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Production</h3>
                            <span class="d-block g-color-white-opacity-0_8">Graphic</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img16.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item design">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img13.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Photography</h3>
                            <span class="d-block g-color-white-opacity-0_8">Design</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img13.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->

            <!-- Cube Portfolio Blocks - Item -->
            <div class="cbp-item graphic identity">
                <div class="u-block-hover g-parent">
                    <img class="img-fluid g-transform-scale-1_1--parent-hover g-transition-0_5 g-transition--ease-in-out" src="assets/img-temp/400x270/img14.jpg" alt="Image description">
                    <div class="d-flex w-100 h-100 u-block-hover__additional--fade u-block-hover__additional--fade-in g-bg-bluegray-opacity-0_5 opacity-0 g-opacity-1--parent-hover g-pos-abs g-top-0 g-left-0 g-transition-0_3 g-transition--ease-in g-pa-20">
                        <div class="d-flex align-items-start flex-column mb-auto">
                            <h3 class="h5 g-color-white g-font-weight-600 mb-1">Social strategy</h3>
                            <span class="d-block g-color-white-opacity-0_8">Graphic, Identity</span>
                        </div>
                        <ul class="align-items-end flex-column list-inline mt-auto ml-auto mb-0">
                            <li class="list-inline-item">
                                <a class="u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="#!">
                                    <i class="icon-communication-095 u-line-icon-pro"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="cbp-lightbox u-icon-v2 u-icon-size--sm g-brd-white g-color-black g-bg-white rounded-circle" href="assets/img-temp/400x270/img14.jpg">
                                    <i class="icon-communication-017 u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Cube Portfolio Blocks - Item -->
        </div>
    </div>
    <!-- End Cube Portfolio Blocks - Content -->
    
    
@endsection