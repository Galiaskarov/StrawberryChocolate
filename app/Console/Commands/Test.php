<?php

namespace App\Console\Commands;

use App\Models\Coment;
use App\Models\Post;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'start:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Schema::dropIfExists('posts');

        dd(Post::all()->toArray());
        //Coment::create(['title' => 'lol3', 'post_id' => 1]);

        Coment::whereIn('title', [
            'coment1forPost2',
            'lol',
            'lol2'
        ])->delete();


        dd(Coment::all()->toArray());

    }
}
