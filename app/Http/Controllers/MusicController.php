<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Album;
use App\Models\Playlist;
use App\Models\Favtrack;
use DB;

class MusicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topAlbums = Http::get('http://ws.audioscrobbler.com/2.0/?method=tag.gettopalbums&tag=2020&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&format=json')
        ->json()['albums']['album'];

        /*dump($topAlbums);*/
        
        return view('index', [
            'topAlbums' => collect($topAlbums)->take(12),
        ]);
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
        $favtracks = Favtrack::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($album=null,$artist=null)
    {
        if($album == null || $artist == null){
            abort(403,'La función necesita al menos un album y un artista');
        }
        $album = Http::get('http://ws.audioscrobbler.com/2.0/?method=album.getinfo&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&artist='.$artist.'&album='.$album.'&format=json')
        ->json();

        dump($album);

        $playlists = DB::table('playlists')->get();
        $favtracks = DB::table('favtracks')->get();

        return view('show',[
            'album' => ($album),
            'playlists' => ($playlists),
            'favtracks' => ($favtracks),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
