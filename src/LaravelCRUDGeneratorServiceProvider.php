<?php
namespace Imtigger\LaravelCRUD;

use Illuminate\Support\ServiceProvider;

class LaravelCRUDGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(\Imtigger\LaravelCRUD\Console\Commands\MakeCRUD::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/stubs' => resource_path('crud-stubs')
        ]);
    }

}