<?php

namespace App\Http\Controllers;

use App\Rss;
use Carbon\Carbon;
use dg\rssphp\src\Feed;
use dg\rssphp\src\FeedException;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;

class RssController extends Controller implements ShouldQueue
{
    //for running in the background so it does not effect loading.
    use InteractsWithQueue, SerializesModels;

    private $rsi;
    private $inn;
    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetch($recordNum)
    {
        //
        return DB::table('rsses')->orderBy('rss_pubDate', 'DESC')->take($recordNum)->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \dg\rssphp\src\FeedException
     */
    public function store()
    {
        //TODO::move this to Laravel cron later.
        $rsi_url = 'https://robertsspaceindustries.com/comm-link/rss';
        $inn_url = 'http://imperialnews.network/category/blog/feed/';
        try {
            $this->inn = Feed::loadRss($inn_url);
        } catch (FeedException $e) {
        }

        foreach($this->inn->item as $post){
            if(DB::table('rsses')->where('rss_title', $post->title)->count() <= 0){
                //if the title does not exist add to DB
                //fix date first then add
                $postDate = Carbon::parse($post->pubDate);
                $feed[] = DB::table('rsses')->insert([
                    'rss_title' => $post->title,
                    'rss_link' => $post->link,
                    'rss_pubDate' => $postDate,
                    'created_at' => Carbon::now(),
                    ]);
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function show(Rss $rss)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function edit(Rss $rss)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rss $rss)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rss  $rss
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rss $rss)
    {
        //
    }
}
