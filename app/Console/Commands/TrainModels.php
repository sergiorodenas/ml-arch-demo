<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class TrainModels extends Command
{
    protected $signature = 'models:train'; // Model param
    protected $description = 'Trains the model';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // Iterates models and trains each one
        collect(config('ml.models')->each(function(Array $model){
            $id = $model['id']; // This is the identifier of the model
            $type = $model['type']; //classification, regression, clustering
            $algorithm = $model['algorithm'];

            // Training logic

            /**
             * Redis::lrange('names', 5, 10);
             * https://laravel.com/docs/8.x/redis
             */

             // php-ml

             // Generates h5 file and saves it on the declared storage
        }));

        return 0;
    }
}
