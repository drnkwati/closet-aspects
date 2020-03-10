<?php
namespace Closet\Aspects\Foundation;

use Closet\Aspects\Events\EmitterAspect;
use Closet\Aspects\Container\ContainerAspect;

interface ApplicationAspect extends ContainerAspect, EmitterAspect
{
    /**
     * Get the base path of the Laravel installation.
     *
     * @return string
     */
    public function basePath();

    /**
     * Register all of the configured providers.
     *
     * @return void
     */
    public function registerConfiguredProviders();

    /**
     * Determine if we are running in the console.
     *
     * @return bool
     */
    public function runningInConsole();

    /**
     * Boot the application's service providers.
     *
     * @return void
     */
    public function boot();

    /**
     * Register a new boot listener.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function booting($callback);

    /**
     * Register a new "booted" listener.
     *
     * @param  mixed  $callback
     * @return void
     */
    public function booted($callback);

    /**
     * Get the translation for a given key.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return string|array
     */
    public function translate($key);

    /**
     * Get the default locale being used.
     *
     * @return string
     */
    public function getLocale();
}
