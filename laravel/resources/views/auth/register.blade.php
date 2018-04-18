@extends('layouts.master')

@section('content')
    <header id="first" style="height: 30%">
        <div class="header-content" style="height: 30%">
            <div class="inner">
                <h1 class="cursive">Citizen Warfare</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
            </div>
        </div>
    </header>
    <!-- Signup -->
    <section class="container g-py-100">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-9 col-lg-6">
                <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                    <div class="text-center mb-4">
                        <h2 class="h2 g-color-white g-font-weight-600">Signup</h2>
                    </div>

                    <!-- Form -->
                    <form class="g-py-15">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-finance-067 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="email" placeholder="John">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-finance-067 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="tel" placeholder="Doe">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <div class="input-group">
                  <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                        <i class="icon-communication-062 u-line-icon-pro"></i>
                      </span>
                                <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="email" placeholder="johndoe@gmail.com">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-media-094 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-6 mb-4">
                                <div class="input-group">
                    <span class="input-group-addon g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                          <i class="icon-media-094 u-line-icon-pro"></i>
                        </span>
                                    <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-brd-primary--hover g-py-15 g-px-15" type="password" placeholder="Password">
                                </div>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-13 g-pl-25">
                                <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                    <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                </div>
                                I accept the <a href="#!">Terms and Conditions</a>
                            </label>
                        </div>

                        <button class="btn btn-md btn-block u-btn-primary rounded-0 g-py-15 mb-5" type="button">Signup</button>

                        <div class="d-flex justify-content-center text-center g-mb-30">
                            <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                            <span class="align-self-center g-color-gray-dark-v3 mx-4">OR</span>
                            <div class="d-inline-block align-self-center g-width-50 g-height-1 g-bg-gray-light-v1"></div>
                        </div>

                        <!-- Form Social Icons -->
                        <ul class="list-inline text-center mb-4">
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-facebook rounded-circle" href="/auth/facebook">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-facebook"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-twitter rounded-circle" href="/auth/twitter">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item g-mx-2">
                                <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-google-plus rounded-circle" href="/auth/google">
                                    <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                                    <i class="g-font-size-default g-line-height-0_8 u-icon__elem-hover fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Form Social Icons -->
                    </form>
                    <!-- End Form -->

                    <footer class="text-center">
                        <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Already have an account? <a class="g-font-weight-600" href="page-signup5.html">signin</a>
                        </p>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <!-- End Signup -->

    <!-- Footer -->
    <div id="contacts-section" class="g-bg-black-opacity-0_9 g-color-white-opacity-0_8 g-py-60">
        <div class="container">
            <div class="row">
                <!-- Footer Content -->
                <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">About Us</h2>
                    </div>

                    <p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
                </div>
                <!-- End Footer Content -->

                <!-- Footer Content -->
                <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Latest Posts</h2>
                    </div>

                    <article>
                        <h3 class="h6 g-mb-2">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Incredible template</a>
                        </h3>
                        <div class="small g-color-white-opacity-0_6">May 8, 2017</div>
                    </article>

                    <hr class="g-brd-white-opacity-0_1 g-my-10">

                    <article>
                        <h3 class="h6 g-mb-2">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New features</a>
                        </h3>
                        <div class="small g-color-white-opacity-0_6">June 23, 2017</div>
                    </article>

                    <hr class="g-brd-white-opacity-0_1 g-my-10">

                    <article>
                        <h3 class="h6 g-mb-2">
                            <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">New terms and conditions</a>
                        </h3>
                        <div class="small g-color-white-opacity-0_6">September 15, 2017</div>
                    </article>
                </div>
                <!-- End Footer Content -->

                <!-- Footer Content -->
                <div class="col-lg-3 col-md-6 g-mb-40 g-mb-0--lg">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Useful Links</h2>
                    </div>

                    <nav class="text-uppercase1">
                        <ul class="list-unstyled g-mt-minus-10 mb-0">
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">About Us</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Portfolio</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Our Services</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-brd-bottom g-brd-white-opacity-0_1 g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Latest Jobs</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                            <li class="g-pos-rel g-py-10">
                                <h4 class="h6 g-pr-20 mb-0">
                                    <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Contact Us</a>
                                    <i class="fa fa-angle-right g-absolute-centered--y g-right-0"></i>
                                </h4>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End Footer Content -->

                <!-- Footer Content -->
                <div class="col-lg-3 col-md-6">
                    <div class="u-heading-v2-3--bottom g-brd-white-opacity-0_8 g-mb-20">
                        <h2 class="u-heading-v2__title h6 text-uppercase mb-0">Our Contacts</h2>
                    </div>

                    <address class="g-bg-no-repeat g-font-size-12 mb-0" style="background-image: url(../../assets/img/maps/map2.png);">
                        <!-- Location -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-map-marker"></i>
              </span>
                            </div>
                            <p class="mb-0">795 Folsom Ave, Suite 600, <br> San Francisco, CA 94107 795</p>
                        </div>
                        <!-- End Location -->

                        <!-- Phone -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-phone"></i>
              </span>
                            </div>
                            <p class="mb-0">(+123) 456 7890 <br> (+123) 456 7891</p>
                        </div>
                        <!-- End Phone -->

                        <!-- Email and Website -->
                        <div class="d-flex g-mb-20">
                            <div class="g-mr-10">
              <span class="u-icon-v3 u-icon-size--xs g-bg-white-opacity-0_1 g-color-white-opacity-0_6">
                <i class="fa fa-globe"></i>
              </span>
                            </div>
                            <p class="mb-0">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="mailto:info@htmlstream.com">info@htmlstream.com</a>
                                <br>
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">www.htmlstream.com</a>
                            </p>
                        </div>
                        <!-- End Email and Website -->
                    </address>
                </div>
                <!-- End Footer Content -->
            </div>
        </div>
    </div>
    <!-- End Footer -->

    <!-- Copyright Footer -->
    <footer class="g-bg-gray-dark-v1 g-color-white-opacity-0_8 g-py-20">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-center text-md-left g-mb-10 g-mb-0--md">
                    <div class="d-lg-flex">
                        <small class="d-block g-font-size-default g-mr-10 g-mb-10 g-mb-0--md">2017 © All Rights Reserved.</small>
                        <ul class="u-list-inline">
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Privacy Policy</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Terms of Use</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">License</a>
                            </li>
                            <li class="list-inline-item">
                                <span>|</span>
                            </li>
                            <li class="list-inline-item">
                                <a class="g-color-white-opacity-0_8 g-color-white--hover" href="#!">Support</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4 align-self-center">
                    <ul class="list-inline text-center text-md-right mb-0">
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Skype">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-skype"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Linkedin">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Pinterest">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-pinterest"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Twitter">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-10" data-toggle="tooltip" data-placement="top" title="Dribbble">
                            <a href="#!" class="g-color-white-opacity-0_5 g-color-white--hover">
                                <i class="fa fa-dribbble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Copyright Footer -->
    <a class="js-go-to u-go-to-v1" href="#!" data-type="fixed" data-position='{
     "bottom": 15,
     "right": 15
   }' data-offset-top="400" data-compensation="#js-header" data-show-effect="zoomIn">
        <i class="hs-icon hs-icon-arrow-top"></i>
    </a>
@endsection
