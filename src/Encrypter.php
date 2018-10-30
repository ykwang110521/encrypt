<?php

namespace Encrypt;

use Encrypt\Interfaces\Factory;

class Encrypter implements Factory
{
    private $iv;

    private $key;

    public function __construct($iv, $key)
    {
        $this->iv = $iv;
        $this->key = $key;
    }

    public function encrypt($string)
    {
        $encrypted = openssl_encrypt($string, 'AES-256-CBC', $this->key, OPENSSL_RAW_DATA, $this->iv);
        return base64_encode($encrypted);
    }

    public function decrypt($string)
    {
        return openssl_decrypt(base64_decode($string), 'AES-256-CBC', $this->key, OPENSSL_RAW_DATA, $this->iv);
    }

}