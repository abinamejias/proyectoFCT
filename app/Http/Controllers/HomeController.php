<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Playlist;
use App\Models\Favtrack;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $favtracks = DB::table('favtracks')->get();
        $playlists = DB::table('playlists')->get();
        return view('home', compact('favtracks'), compact('playlists'));
    }

    public function store(Request $request)
    {
        $playlists = Playlist::create($request->all());

        return back();
    }

    public function show($id)
    {
        $favtracks = DB::table('favtracks')->get();
        $playlistsinfo = Playlist::find($id);
        return view('show_playlist', [
            'playlistsinfo' => $playlistsinfo,
            'favtracks' => $favtracks
        ]);
    }
}
