<?php

namespace AHuggins\Wand;

use Illuminate\Support\ServiceProvider;

class WandServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [];

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../routes/wand.php' => base_path('routes/wand.php'),
            __DIR__ . '/../magicwand' => base_path('wand'),
            __DIR__ . '/KernelToCopy.php' => app_path('Wand/Kernel.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array_values($this->commands);
    }
}
