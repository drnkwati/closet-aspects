<?php
namespace Closet\Aspects\Foundation;

use Closure;

interface BootstrapperAspect
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public static function bootstrap(ApplicationAspect $app);

    /**
     * Merge the given configuration with the existing configuration.
     *
     * @param  string  $path
     * @param  string  $key
     * @return void
     */
    public static function bootMergeConfigFrom($path, $key, ApplicationAspect $app);

    /**
     * Load the given routes file if routes are not already cached.
     *
     * @param  mixed  $path
     * @return void
     */
    public static function bootLoadRoutesFrom($path, ApplicationAspect $app);

    /**
     * Register a view file namespace.
     *
     * @param  string  $path
     * @param  string  $namespace
     * @return void
     */
    public static function bootLoadViewsFrom($path, $namespace, ApplicationAspect $app);

    /**
     * Register a translation file namespace.
     *
     * @param  string  $path
     * @param  string  $namespace
     * @return void
     */
    public static function bootLoadTranslationsFrom($path, $namespace, ApplicationAspect $app);

    /**
     * Register a database migration path.
     *
     * @param  array|string  $paths
     * @return void
     */
    public static function bootLoadMigrationsFrom(ApplicationAspect $app, Closure $call = null);
}
