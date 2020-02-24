<?php
namespace Closet\Aspects\Database;

interface ModelAspect
{
    const FIELD_UID = 'uid';
    const FIELD_EMAIL = 'email';
    const FIELD_PASSWORD = 'password';
    const FIELD_LOCALE = 'language';

    const INFO_TABLE = '_table_';
    const INFO_TUPLE = '_tuple_';
    const INFO_FIELD = '_field_';
    const INFO_VALUE = '_value_';

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
    public function rulesFor($action = null);

    /**
     * Get the attributes for creating form elements.
     *
     * @return array
     */
    public function elementsFor($action = null);

    /**
     * Set or Get the bound container.
     *
     * @param  \ArrayAccess       $arrayAccessContainer
     * @return \ArrayAccess|null
     */
    public static function ioc($arrayAccessContainer = null);
}
