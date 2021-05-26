<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Auth;
use App\Models\Playlist;
use App\Models\Favtrack;
use App\Models\Lastsong;
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
        $lastsongs = DB::table('lastsongs')->get();
        //dd($lastsongs);
        return view('home', compact('favtracks'), compact('playlists','lastsongs'));
    }

    public function store(Request $request)
    {
        $playlists = Playlist::create($request->all());

        return back();
    }

    public function show($id)
    {
        $favtrack_playlists = DB::table('favtrack_playlists')->get();
        $favtracks = DB::table('favtracks')->get();
        $playlistsinfo = Playlist::find($id);

        return view('show_playlist', [
            'playlistsinfo' => $playlistsinfo,
            'favtrack_playlists' => $favtrack_playlists,
            'favtracks' => $favtracks
        ]);
    }
    
    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('index');
    }
}
