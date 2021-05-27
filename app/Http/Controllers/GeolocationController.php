<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Album;
use App\Models\Playlist;
use App\Models\Favtrack;
use DB;

class GeolocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get user ip address
        $ip_address = $_SERVER['REMOTE_ADDR'];
        //get user ip address details with geoplugin.net
        $geopluginURL = 'http://www.geoplugin.net/php.gp?id='.$ip_address;
        $addrDetailsArr = unserialize(file_get_contents($geopluginURL));  
        //dd($addrDetailsArr['geoplugin_countryName']);
        $geoAlbums = Http::get('http://ws.audioscrobbler.com/2.0/?method=geo.gettoptracks&country='.$addrDetailsArr['geoplugin_countryName'].'&api_key=915e43bd2c345fdb1aa3e2c00aca0c03&format=json')
        ->json()['tracks']['track'];
        dump($geoAlbums);

        return view('geolocation', [
            'addrDetailsArr' => $addrDetailsArr,
            'geoAlbums' => collect($geoAlbums)->take(8),
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
        //
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
