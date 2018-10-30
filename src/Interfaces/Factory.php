<?php

namespace Encrypt\Interfaces;

interface Factory
{
    public function encrypt($string);

    public function decrypt($string);
}