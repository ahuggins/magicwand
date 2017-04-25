<?php

namespace AHuggins\Wand;

class WandServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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
            __DIR__ . '/../magicwand' => basepath('wand')
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            AHuggins\Wand\WandConsoleKernel::class,
            AHuggins\Wand\Kernel::class
        );
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