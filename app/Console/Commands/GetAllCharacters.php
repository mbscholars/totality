<?php

namespace App\Console\Commands;

use App\Actions\GetCharactersAction;
use Illuminate\Console\Command;

class GetAllCharacters extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'characters:fetch';

    /**
     * The console Fetches all characters from the api.
     *
     * @var string
     */
    protected $description = 'Fetches all characters from the api';

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
        $bar = $this->output->createProgressBar(100);
        $this->info('Getting Characters from the API');
        $this->newLine();
        $bar->start(40);
        
        
        GetCharactersAction::run();
        
        $bar->finish();
        $this->newLine();
        $this->info('Characters were successfully imported into the database');

    }
}
