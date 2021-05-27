<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Album;
use App\Models\Playlist;
use App\Models\Favtrack;
use DB;

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artists = DB::table('artists')->get();
        //$i = 0;
        foreach ($artists as $artist){//artista por artista
            $albuminfo = Http::get('http://ws.audioscrobbler.com/2.0/?method=artist.gettopalbums&artist='.$artist->name.'&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&format=json')
            ->json()['topalbums']['album'];
            //dd($albuminfo);
            foreach ($albuminfo as $albuminfo){
                $album = Album::create([
                    'name'        => $albuminfo['name'],
                    'artist'      => $albuminfo['artist']['name'],
                    'image'       => $albuminfo['image'][3]['#text'],
                ]);
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
