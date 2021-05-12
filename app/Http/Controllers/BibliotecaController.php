<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BibliotecaController extends Controller
{
    $favtracks = DB::table('favtracks')->get();
    return view()
}
