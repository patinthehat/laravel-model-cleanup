<?php

namespace Spatie\DatabaseCleanup;

use Illuminate\Database\Eloquent\Builder;

interface GetsCleanedUp
{
    public static function cleanUpModels(Builder $query) : Builder;
}