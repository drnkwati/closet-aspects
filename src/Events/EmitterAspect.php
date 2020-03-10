<?php
namespace Closet\Aspects\Events;

interface EmitterAspect
{
    /**
     * @param $events
     * @param $listener
     */
    public function on($events, $listener);

    /**
     * @param $event
     * @param array $payload
     */
    public function emit($event, $payload = array());
}
