<?php

namespace AlwaysCurious\FilamentFooter\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AlwaysCurious\FilamentFooter\FilamentFooter
 */
class FilamentFooter extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \AlwaysCurious\FilamentFooter\FilamentFooter::class;
    }
}
