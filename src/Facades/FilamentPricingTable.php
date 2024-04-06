<?php

namespace RahatBaksh\FilamentPricingTable\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RahatBaksh\FilamentPricingTable\FilamentPricingTable
 */
class FilamentPricingTable extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \RahatBaksh\FilamentPricingTable\FilamentPricingTable::class;
    }
}
