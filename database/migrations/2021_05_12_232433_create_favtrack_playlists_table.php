<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFavtrackPlaylistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('favtrack_playlists', function (Blueprint $table) {
            $table->id();
            $table->foreignId('favtracks_id')
                ->references('id')
                ->on('favtracks');
            $table->foreignId('playlists_id')
                ->references('id')
                ->on('playlists');
            $table->timestamps();  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('favtrack_playlists');
    }
}
