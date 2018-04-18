<!--
/**
 * Created by PhpStorm.
 * Company: MuellerTek
 * User: Micheal Mueller
 * Date: 4/17/2018
 * Time: 11:07 AM
 */
-->
@extends('layouts.master')

@section('content')
    <!-- Header Carousel -->

    <header id="first" class="">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Citizen Warfare</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
                <div class="button">
                    <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-xs btn-sm">Toggle Video</a> &nbsp;
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <a href="/getstarted" class="btn btn-lg btn-primary">
                                <div class="">Get Started</div>
                            </a>
                        </div>
                        <div class="col-md-4"></div>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <video muted autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="images/ollisar.jpg" id="video-background">
                <source id='video' src='video/background-vid.webm' type='video/webm'>
            </video>
        </div>
    </header>


@endsection