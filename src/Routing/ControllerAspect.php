<?php

namespace Closet\Aspects\Routing;

use Closet\Container\ContainerAspect;

interface ControllerAspect
{
    /**
     * Get the middleware assigned to the controller.
     *
     * @return array
     */
    public function getMiddleware();

    /**
     * @return ContainerAspect
     */
    public function getIoc();
}
