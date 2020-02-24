<?php

namespace Closet\Aspects\Events;

interface EmitterAspect
{
    public function on($events, $listener);

    public function emit($event, $payload = array());
}
