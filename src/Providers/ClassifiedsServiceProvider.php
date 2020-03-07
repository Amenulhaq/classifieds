<?php

namespace Laraclass\Classifieds\Providers;

use Illuminate\Support\ServiceProvider;

class ClassifiedsServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        // Load view
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'classifieds');

        // Load translation
        $this->loadTranslationsFrom(__DIR__ . '/../../resources/lang', 'classifieds');

        // Load migrations
        $this->loadMigrationsFrom(__DIR__ . '/../../database/migrations');

        // Call pblish redources function
        $this->publishResources();

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfig();
        $this->registerClassifieds();
        $this->registerFacade();
        $this->registerBindings();
        //$this->registerCommands();
    }


    /**
     * Register the application bindings.
     *
     * @return void
     */
    protected function registerClassifieds()
    {
        $this->app->bind('classifieds', function($app) {
            return new Classifieds($app);
        });
    }

    /**
     * Register the vault facade without the user having to add it to the app.php file.
     *
     * @return void
     */
    public function registerFacade() {
        $this->app->booting(function()
        {
            $loader = \Illuminate\Foundation\AliasLoader::getInstance();
            $loader->alias('Classifieds', 'Lavalite\Classifieds\Facades\Classifieds');
        });
    }

    /**
     * Register bindings for the provider.
     *
     * @return void
     */
    public function registerBindings() {
        // Bind facade
        $this->app->bind('laraclass.classifieds', function ($app) {
            return $this->app->make('Laraclass\Classifieds\Classifieds');
        });

                // Bind Classified to repository
        $this->app->bind(
            'Laraclass\Classifieds\Interfaces\ClassifiedRepositoryInterface',
            \Laraclass\Classifieds\Repositories\Eloquent\ClassifiedRepository::class
        );

        $this->app->register(\Laraclass\Classifieds\Providers\AuthServiceProvider::class);
        
        $this->app->register(\Laraclass\Classifieds\Providers\RouteServiceProvider::class);
            }

    /**
     * Merges user's and classifieds's configs.
     *
     * @return void
     */
    protected function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php', 'laraclass.classifieds'
        );
    }

    /**
     * Register scaffolding command
     */
    protected function registerCommands()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\MakeClassifieds::class,
            ]);
        }
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['laraclass.classifieds'];
    }

    /**
     * Publish resources.
     *
     * @return void
     */
    private function publishResources()
    {
        // Publish configuration file
        $this->publishes([__DIR__ . '/../../config/config.php' => config_path('laraclass/classifieds.php')], 'config');

        // Publish admin view
        $this->publishes([__DIR__ . '/../../resources/views' => base_path('resources/views/vendor/classifieds')], 'view');

        // Publish language files
        $this->publishes([__DIR__ . '/../../resources/lang' => base_path('resources/lang/vendor/classifieds')], 'lang');

        // Publish public files and assets.
        $this->publishes([__DIR__ . '/public/' => public_path('/')], 'public');
    }
}
