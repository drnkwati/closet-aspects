<?php
namespace Closet\Aspects\Database;

interface ModelAspect
{
    /**
     * Get the possible list of values for a field.
     *
     * @return array
     */
    public function listFor($field);

    /**
     * Get the validation rules for a field.
     *
     * @return array|string
     */
    public function ruleFor($field);

    /**
     * Get the validation rules for an action. insert, update, delete ...
     *
     * @return array
     */
    public function rulesFor($action);

    /**
     * Get the attributes for creating form elements.
     *
     * @return array
     */
    public function elementsFor($action);

    /**
     * Set or Get the bound container.
     *
     * @param  \ArrayAccess       $arrayAccessContainer
     * @return \ArrayAccess|null
     */
    // public static function ioc($arrayAccessContainer = null);
}
