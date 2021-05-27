<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Track;
use App\Models\Playlist;
use App\Models\Favtrack;
use DB;

class Apicontroller2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $albums = DB::table('albums')->get();
        //$i = 0;
        foreach ($albums as $album){//artista por artista
            //$albuminfo = Http::get('http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist='.$artist->name.'&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&format=json')
            //->json()['topalbums']['album'];
            $trackinfo = Http::get('http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&artist='.$album->artist.'&album='.$album->name.'&format=json')
            ->json();
            //dd($trackinfo);
            if(isset($trackinfo['album'])==TRUE){
                foreach ($trackinfo['album']['tracks']['track'] as $tracks){
                    $track = Track::create([
                        'name'          => $tracks['name'],
                        'duration'      => $tracks['duration'],
                        'albums_id'     => $album->id,
                    ]);
                }
            }
            //$i=$i+1;
        }
        //dump($allAlbums);
        //return view('apitodb', [
            //'allAlbums' => $allAlbums,
        //]);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
