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
                        <h2 class="h2 g-color-white g-font-weight-600">Create Team</h2>
                    </div>
                    {{ Form::open(['url'=>'/team-registration', 'method'=>'post']) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('team_name', 'Team Name:') }}
                        {{ Form::text('team_name', old('team_name'), ['class'=>'form-control','placeholder'=>'Team Name', 'required']) }}
                    </div>
                    <div class="form-group ">
                        {{ Form::label('team_website', 'Team Website') }}
                        {{ Form::text('team_website', old('team_website'), ['class'=>'form-control', 'id'=>'team_website','placeholder'=>'Team Web Site']) }}
                    </div>
                    <div class="form-group">
                        <hr>
                    </div>
                    <div class="row">
                        {{ Form::submit('Create Team',['class'=>'btn btn-success form-control', 'style'=>'color:#ffffff;']) }}
                    </div>
                    @include('shared.errors')
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </section>
@endsection