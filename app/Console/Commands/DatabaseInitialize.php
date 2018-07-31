<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class DatabaseInitialize extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:databaseInitialize {--truncate=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fakerを使ってデータベースを初期化(db:seed)';

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
     * @return mixed
     */
    public function handle()
    {
        $tables = [
            'accesses',
            'links',
            'link_tag',
            'tags',
        ];

        if($this->option('truncate') == true){
            echo "Truncating";
            foreach($tables as $table){
                DB::table($table)->truncate();
                echo ".";
            }
            echo "done\n";
        }

        echo "Creating : Link";
        $this->createLinkDataSet();
        echo "done\n";

        echo "Creating : Tag";
        $this->createTagDataSet();
        echo "done\n";
    }

    public function createLinkDataSet()
    {
        for ($i = 0; $i < 50; $i++) { 
            factory(\App\ORM\Link::class, 1)->create()
            ->each(function ($link) {
                $num = rand(1, 20);
                factory(\App\ORM\LinkTag::class, 5)->create([
                    'link_id' => $link->id,
                ]);
                factory(\App\ORM\Access::class, $num)->create([
                    'link_id' => $link->id,
                ]);
            });
            if ($i % 5 == 0) {
                echo ".";
            }
        }
    }

    public function createTagDataSet()
    {
        for ($i = 0; $i < 25; $i++) { 
            factory(\App\ORM\Tag::class, 1)->create();
            if ($i % 5 == 0) {
                echo ".";
            }
        }
    }
}
