<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class GoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'go';

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
//        dd(777);
//        $file = File::get(public_path('robots.txt'));
//	    Storage::disk('s3')->put('files/file-1.txt', $file);

//        $getFile = Storage::disk('s3')->get('Wallpapers/Assorti (HD Wallpapers. Part 277 (20).jpg');
//        Storage::disk('local')->put('from_s3/file-2.jpg', $getFile);

//        Storage::disk('s3');
//        Storage::disk('s3')->makeDirectory('directory');

    }
}
