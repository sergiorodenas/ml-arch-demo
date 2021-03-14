<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TrainModel extends Command
{
    protected $signature = 'model:train';
    protected $description = 'Trains the model';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Training logic

        /**
         * Redis::lrange('names', 5, 10);
         * https://laravel.com/docs/8.x/redis
         */

        return 0;
    }
}
