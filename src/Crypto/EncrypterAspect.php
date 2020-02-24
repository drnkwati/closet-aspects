<?php

namespace Closet\Aspects\Crypto;

interface EncrypterAspect
{
    /**
     * Encrypt the given value.
     *
     * @param  mixed  $value
     * @return mixed
     */
    public function encrypt($value);

    /**
     * Decrypt the given value.
     *
     * @param  mixed  $payload
     * @return mixed
     */
    public function decrypt($payload);
}
