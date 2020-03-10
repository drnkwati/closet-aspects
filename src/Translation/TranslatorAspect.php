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
     * Translate keys for the given array.
     *
     * @param  array   $values
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    public function transKeys(array $values, array $replace = array(), $locale = null);

    /**
     * Translate only the values for the given array.
     *
     * @param  array   $values
     * @param  array   $replace
     * @param  string  $locale
     * @return mixed
     */
    public function transValues(array $values, array $replace = array(), $locale = null);
}
