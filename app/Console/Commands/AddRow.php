<?php

namespace App\Console\Commands;

use App\Events\MakeNewRowEvent;
use Illuminate\Console\Command;

class AddRow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:row';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adding new row';

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
    public function handle() {
        event(new MakeNewRowEvent('Fire! Your row is added!'));
    }
}
