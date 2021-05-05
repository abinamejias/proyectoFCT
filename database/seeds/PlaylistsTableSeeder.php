<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

$track = testRequestVariable($_GET['track']);

class PlaylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Playlist::create([
            'track' => $track, /**Hay que hacer un trigger */
        ]);
    }
}
