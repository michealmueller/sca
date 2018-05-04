<?php

namespace App\Http\Controllers;

use App\Profile;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RssController as Rss;


class ProfileController extends Controller
{
    private $user;
    private $data;
    private $rss;

    public function __construct()
    {
        $this->user = new User;
        $this->rss = new Rss;
        $this->data = [
            'feeddata'  => $this->rss->fetch(3),
            'comments'  => null,
            'team'      => null,
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(!Auth::check()){
            return route('login');
        }

        $this->data['user'] = Auth::user();
        return view('main')->with('data', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        switch ($request->editing){
            case 'updateName';
                $updated = DB::table('users')->update([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname
                ]);
                if($updated){
                    session()->put('success', 'Successfully updated your Name');
                    return back();
                }else{
                    session()->put('error', 'Could not update your Name');
                }
                break;
            case 'updateUsername';
                $updated = DB::table('users')->update([
                    'username' => $request->username,
                ]);
                if($updated){
                    session()->put('success', 'Successfully updated your Name');
                    return back();
                }else{
                    session()->put('error', 'Could not update Username');
                }
                break;
            case 'updateEmail';
                $updated = DB::table('users')->update([
                    'email' => $request->email,
                ]);
                if($updated){
                    session()->put('success', 'Successfully updated your Email');
                    return back();
                }else{
                    session()->put('error', 'Could not update Email');
                }
                break;
            case 'updateCallsign';
                $updated = DB::table('users')->update([
                    'call_sign' => $request->callsign,
                ]);
                if($updated){
                    session()->put('success', 'Successfully updated your Call Sign');
                    return back();
                }else{
                    session()->put('error', 'Could not update Call Sign');
                }
                break;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
