<?php
namespace Closet\Aspects\Database;

interface MigrationAspect
{
    // run database migrations
    public static function install();

    // reverse database migrations
    public static function uninstall();

    // create database tables
    /**
     * @param array $args
     */
    public static function make(array $args = array());

    // delete database tables
    /**
     * @param array $args
     */
    public static function drop(array $args = array());

    // remove table data
    /**
     * @param array $args
     */
    public static function tidy(array $args = array());

    // insert innitial table data
    /**
     * @param array $models
     */
    public static function dump(array $models = array());

    // insert test data table
    /**
     * @param array $models
     */
    public static function seed(array $models = array());
}
