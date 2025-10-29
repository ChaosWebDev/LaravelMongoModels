<?php

namespace Chaoswd\Mongo\Models\Providers;

use Illuminate\Support\ServiceProvider;
use Chaoswd\Mongo\Models\Commands\MakeMongoModelCommand;

class MongoModelsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeMongoModelCommand::class,
            ]);
        }
    }

    public function register()
    {
        //
    }
}
