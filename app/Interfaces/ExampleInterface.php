<?php

namespace App\Interfaces;

use Illuminate\Contracts\Routing\UrlRoutable;

interface ExampleInterface extends UrlRoutable
{
    // important: extend UrlRoutable, otherwise route model binding will not work
}
