<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ApiDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'ApiDB';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill the database with api data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //$albums = Album::create($request->all());
        //$tracks = Tracks::create($request->all());
    }
}
