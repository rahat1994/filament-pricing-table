<?php

namespace RahatBaksh\FilamentPricingTable;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPricingTable implements Plugin
{
    public static function make(): static
    {
        return new self;
    }

    public function boot(Panel $panel): void
    {
        dd($panel);
    }
    // TODO: Implement register() method.

    public function register(Panel $panel): void
    {
    }

    public function getId(): string
    {
        return 'rahat-baksh-filament-pricing-table';
    }
}
