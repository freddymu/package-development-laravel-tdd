<?php


namespace freddymu\Press;


use freddymu\Press\Console\ProcessCommand;
use Illuminate\Support\ServiceProvider;

class PressBaseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->registerResources();
    }

    public function register()
    {
        $this->commands([
            ProcessCommand::class
        ]);
    }

    private function registerResources()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}