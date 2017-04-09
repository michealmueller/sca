@extends('master')

@section('content')
    <header id="first" style="height: 30%;">
        <div class="" style="height: 30%;">
            <div class="inner">
                <h1 class="cursive">Star Citizen Armada</h1>
                <h4>The Premier Tournament System for Star Citizen.</h4>
                <hr>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 well">
                    {{ Form::open(['url'=>'/team-registration', 'method'=>'post']) }}
                    {{ csrf_field() }}
                    <div class="form-group">
                        {{ Form::label('team_name', 'Team Name:') }}
                        {{ Form::text('team_name', old('team_name'), ['class'=>'form-control', 'required']) }}
                    </div>
                    <div class="form-group" id="member_wrapper">
                        {{ Form::label('members', 'Members') }}
                        {{ Form::button('Add Team Member',['id'=>'AddMore','class'=>'btn btn-sm btn-primary pull-right']) }}
                        {{ Form::text('team_members[]', old('team_members'), ['class'=>'form-control','id'=>'team_members', 'required']) }}<a href="#" class="remove_field">&nbsp;</a>
                    </div>
                    <div class="form-group ">
                        {{ Form::label('team_website', 'Team Website') }}
                        {{ Form::text('team_website', old('team_website'), ['class'=>'form-control', 'id'=>'team_website']) }}
                    </div>
                    <div class="form-group">
                        <hr>
                    </div>
                    <div class="row">
                        {{ Form::submit('Create Team',['class'=>'btn btn-success form-control']) }}
                    </div>
                    @include('shared.errors')
                {{ Form::close() }}
            </div>
            <div class="col-md-4">
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>

        </div>
        <hr>
@endsection