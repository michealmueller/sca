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
                <form method="post" action="/teamregistration">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="team_name">Team Name:</label>
                        <input id="team_name" type="text" class="form-control" name="team_name" placeholder="Team Name" value="{{old('team_name')}}" required >
                    </div>
                    <div class="form-group" id="member_wrapper">
                        <label for="team_members">Team Members:</label>
                        <button class="btn btn-sm btn-primary pull-right" id="AddMore">Add Team Member</button>
                        <div><input id="team_members" type="text" class="form-control" name="team_members[]" placeholder="Team Members" required></div>
                    </div>
                    <div class="form-group ">
                        <label for="team_website">Team Website:</label>
                        <input id="team_website" type="text" class="form-control" name="team_website" placeholder="Team Website" value="{{ old('team_website') }}">
                    </div>
                    <div class="form-group">
                        <hr>
                    </div>
                    <div class="row">
                        <input class="btn btn-success form-control" type="submit" value="Create Team" />
                    </div>
                    @include('shared.errors')
                </form>
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