@extends('layouts.master')

@section('content')
    <!-- Login -->
<section class="container g-py-150">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-6">
            <div class="g-brd-around g-brd-gray-light-v4 rounded g-py-40 g-px-30">
                <header id="first" class="">
                    <div class="header-content">
                        <div class="inner">
                            <h1 class="cursive">Citizen Warfare</h1>
                            <h4>The Premier Tournament System for Star Citizen.</h4>
                            <hr>
                            <h3>Login</h3>
                        </div>
                    </div>
                </header>

                <!-- Form -->
                <form class="g-py-15" style="padding-top: 25px;">
                    <div class="mb-4">
                        <div class="input-group-prepend g-brd-primary--focus">
                          <span class="input-group-text g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                              <i class="icon-finance-067 u-line-icon-pro"></i>
                            </span>
                            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-py-15 g-px-15" id="validationServer01"
                                   type="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="g-mb-35">
                        <div class="input-group-prepend g-brd-primary--focus">
                          <span class="input-group-text g-width-45 g-brd-gray-light-v4 g-color-gray-dark-v5">
                              <i class="icon-media-094 u-line-icon-pro"></i>
                            </span>
                            <input class="form-control g-color-black g-bg-white g-bg-white--focus g-brd-gray-light-v4 g-py-15 g-px-15" id="validationServer02"
                                   type="password" placeholder="Password" required>
                            <div class="valid-feedback" >
                                Good to go!
                            </div>
                        </div>
                        <div class="row justify-content-between">
                            <div class="col align-self-center">
                                <label class="form-check-inline u-check g-color-gray-dark-v5 g-font-size-12 g-pl-25 mb-0">
                                    <input class="g-hidden-xs-up g-pos-abs g-top-0 g-left-0" type="checkbox">
                                    <div class="u-check-icon-checkbox-v6 g-absolute-centered--y g-left-0">
                                        <i class="fa g-rounded-2" data-check-icon="&#xf00c"></i>
                                    </div>
                                    Keep signed in
                                </label>
                            </div>
                            <div class="col align-self-center text-right">
                                <a class="g-font-size-12" href="{{ route('password.request') }}">Forgot password?</a>
                            </div>
                        </div>
                    </div>

                    <div class="mb-5">
                        <button class="btn btn-md btn-block u-btn-primary g-py-13" type="button">Login</button>
                    </div>

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
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-twitter rounded-circle" href="/auth/twitter">
                                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item g-mx-2">
                            <a class="u-icon-v1 u-icon-size--sm u-icon-slide-up--hover g-color-white g-bg-google-plus rounded-circle" href="/auth/google">
                                <i class="g-font-size-default g-line-height-1 u-icon__elem-regular fa fa-google-plus"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- End Form Social Icons -->
                </form>
                <!-- End Form -->

                <footer class="text-center">
                    <p class="g-color-gray-dark-v5 g-font-size-13 mb-0">Don't have an account? <a class="g-font-weight-600" href="{{ route('register') }}">signup</a>
                    </p>
                </footer>
            </div>
        </div>
    </div>
</section>
<!-- End Login -->
@endsection
