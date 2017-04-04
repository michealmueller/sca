@extends('master')

@section('content')
    <!-- Header Carousel -->

    <header id="first" class="">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">Star Citizen Armada</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
                <div class="button">
                    <a href="#video-background" id="toggleVideo" data-toggle="collapse" class="btn btn-xs btn-sm">Toggle Video</a> &nbsp;
                </div>
                <div class="col-md-12">
                    <a href="/getstarted" class="btn btn-primary btn-xl page-scroll">Get Started</a>
                </div>
            </div>
        </div>
        <div>
            <video muted autoplay="" loop="" class="fillWidth fadeIn wow collapse in" data-wow-delay="0.5s" poster="images/ollisar.jpg" id="video-background">
                <source id='video' src='video/background-vid.webm' type='video/webm'>
            </video>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Star Citizen Armada <small>Current News</small>
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class=" panel-heading ">
                        <h4><i class="fa fa-fw fa-check"></i> Custom Tournament Setup</h4>
                    </div>
                    <div class="panel-body">
                        <p>Arena Commander to Star Marine, customize your tournament from specific maps, weapons, to ships and ship loadouts.
                            <br><br> OH, You dont want to share your ship loadout? That is fine, Sharing is not always caring. </p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4><i class="fa fa-fw fa-gift"></i> Focused and Dedicated to Star Citizen</h4>
                    </div>
                    <div class="panel-body ">
                        <p>As Star Citizen Progress's and evolves, so shall we. </p>
                        <!--<a href="#" class="btn btn-default">Learn More</a>-->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading ">
                        <h4><i class="fa fa-fw fa-compass"></i> Easy to Use</h4>
                    </div>
                    <div class="panel-body ">
                        <p>Our Platform is easy and quick to use, create a tournament to imortalize your skills to show
                            off to your friends, or your orginization.</p>
                        <p>Create a simple 2 man/team tournament to an entire league.</p>
                        <p>More information on our Getting Started Page.</p>
                        <a class="btn-block SCButton" href="getstarted.php"><div class="textplacing-news">Get Started</div></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Open Tournaments-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Open Tournaments</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
        </div>
        <!-- /.row -->

        <!-- Recent Tournaments-->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Recent Tournaments</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a class="linkhover" href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover" ></div>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <div class="img-responsive img-portfolio img-hover"></div>
                </a>
            </div>
        </div>
        <!-- /.row -->
        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Star Citizen Armada Features</h2>
            </div>
            <div class="col-md-6">
                <p>We at Star Citizen Armada want you to give you all
                    the tools you need to effectively run your tournament, Be it Star Marine or Arena Commander.
                    Our System is designed around Star Citizen's game mechanics.</p>
                <ul>
                    <li>Supports Star Marine</li>
                    <li>Supports Arena Commander</li>
                    <li>The only Star Citizen dedicated Tournament System</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/SC3.png" alt="">
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well ">
            <div class="row">
                <div class="col-md-8">
                    <p>To get started visit our Getting Started page, this page will walk you through getting registered
                        and how to create your first tournament.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn-block SCButton" href="#"><div class="textplacing">Get Started Now!</div></a>
                </div>
            </div>
        </div>

        <hr>
@endsection