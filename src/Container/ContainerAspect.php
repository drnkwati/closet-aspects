<?php

namespace Closet\Aspects\Container;

interface ContainerAspect extends \ArrayAccess
{
    /**
     * Determine if the given abstract type has been bound.
     *
     * @param  string  $abstract
     * @return bool
     */
    public function bound($abstract);

    /**
     * Register a shared binding in the container.
     *
     * @param  string  $abstract
     * @param  Closure|string|null  $concrete
     * @return void
     */
    public function singleton($abstract, $concrete = null);

    /**
     * Register a binding with the container.
     *
     * @param  string  $abstract
     * @param  Closure|string|null  $concrete
     * @param  bool  $shared
     * @return void
     */
    public function bind($abstract, $concrete = null, $shared = false);
}
