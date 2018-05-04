@extends('layouts.profile-master')

@section('content')
        <!-- Profile Sidebar -->
        <div class="col-lg-3 g-mb-50 g-mb-0--lg">
            <!-- User Image -->
            <div class="u-block-hover g-pos-rel">
                <figure>
                    <img class="img-fluid w-100 u-block-hover__main--zoom-v1" src="assets/img-temp/400x450/img5.jpg" alt="Image Description">
                </figure>

                <!-- Figure Caption -->
                <figcaption class="u-block-hover__additional--fade g-bg-black-opacity-0_5 g-pa-30">
                    <div class="u-block-hover__additional--fade u-block-hover__additional--fade-up g-flex-middle">
                        <!-- Figure Social Icons -->
                        <ul class="list-inline text-center g-flex-middle-item--bottom g-mb-20">
                            <li class="list-inline-item align-middle g-mx-7">
                                <a class="u-icon-v1 u-icon-size--md g-color-white" href="#modal6" data-modal-target="#modal6" data-modal-effect="slide">
                                    <i class="icon-settings u-line-icon-pro"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- End Figure Social Icons -->
                    </div>
                </figcaption>
                <!-- End Figure Caption -->

                <!-- User Info -->
                <span class="g-pos-abs g-top-20 g-left-0">
                      <a class="btn btn-sm u-btn-primary rounded-0" href="#!">{{ $data['user']->username }}</a>
                    @if(isset($data['user']->firstname))
                        <small class="d-block g-bg-black g-color-white g-pa-5">{{ $data['user']->firstname }} {{ $data['user']->lastname }}</small>
                    @endif
                    </span>
                <!-- End User Info -->
            </div>
            <!-- User Image -->

            <!-- Sidebar Navigation -->
            <div class="list-group list-group-border-0 g-mb-40">
                <ul class="nav flex-column u-nav-v1-1 u-nav-primary" role="tablist" data-target="settings-global" data-tabs-mobile-type="slide-up-down" data-btn-classes="btn btn-md btn-block rounded-0
                u-btn-outline-primary g-mb-20">
                    <li class="nav-item">
                        <a class="nav-link list-group-item justify-content-between active" data-toggle="tab" href="#overview" role="tab">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item justify-content-between " data-toggle="tab" href="#team_management" role="tab">Team Management</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item justify-content-between " data-toggle="tab" href="#comments" role="tab">Comments</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item justify-content-between " data-toggle="tab" href="#billing" role="tab">Billing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link list-group-item justify-content-between " data-toggle="tab" href="#settings" role="tab">Settings</a>
                    </li>
                </ul>
            </div>
            <!-- End Sidebar Navigation -->
        </div>
        <!-- End Profile Sidebar -->


        <div class="col-lg-9">
            <div id="settings-global" class="tab-content">
                @include('settings')
            </div>
        </div>

        <!-- Demo modal window -->
        <div id="modal6" class="text-left g-max-width-600 g-bg-white g-overflow-y-auto g-pa-20" style="display: none;">
            <button type="button" class="close" onclick="Custombox.modal.close();">
                <i class="hs-icon hs-icon-close"></i>
            </button>

            <form method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="avatar" value="upload" >
                <!-- Advanced File Input -->
                    <h4 class="h6 g-font-weight-600 g-color-black g-mb-20">Advanced File input</h4>
                    <div class="jFiler">
                        <input class="js-file-attachment" name="avatar" type="file" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;">
                    </div>
                <!-- End Advanced File Input -->
            </form>


        </div>
        <!-- End Demo modal window -->

@endsection