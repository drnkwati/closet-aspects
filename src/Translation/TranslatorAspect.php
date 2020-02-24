<?php

namespace Closet\Aspects\Translation;

interface TranslatorAspect
{
    /**
     * Get the translation for a given key.
     *
     * @param  string  $key
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    public function trans($key, array $replace = array(), $locale = null);

    /**
     * Translate only the keys for the given array.
     *
     * @param  array $values
     * @param  array   $replace
     * @param  string  $locale
     * @param  boolean  $transKey
     * @return mixed
     */
    // public function transArray(array $values, array $replace = array(), $locale = null, $transKey = true);

    /**
     * Translate keys for the given array.
     *
     * @param  array $values
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    public function transKeys(array $values, array $replace = array(), $locale = null);

    /**
     * Translate only the values for the given array.
     *
     * @param  array $values
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    public function transValues(array $values, array $replace = array(), $locale = null);

    /**
     * Translate keys for the given array.
     *
     * @param  mixed $values
     * @param  string  $pattern
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    // public function transMatch(
    //     $values, array $replace = array(), $locale = null, $pattern = "|<[^>]+>(.*)</[^>]+>|U"
    // );
}
