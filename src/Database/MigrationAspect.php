<?php
namespace Closet\Aspects\Database;

interface MigrationAspect
{
    public static function install();

    public static function uninstall();

    /**
     * @param array $args
     */
    public static function make(array $args = array());

    /**
     * @param array $args
     */
    public static function drop(array $args = array());

    /**
     * @param array $args
     */
    public static function tidy(array $args = array());

    /**
     * @param array $models
     */
    public static function dump(array $models = array());

    /**
     * @param array $models
     */
    public static function seed(array $models = array());
}
