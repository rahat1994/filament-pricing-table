<?php

namespace RahatBaksh\FilamentPricingTable\Commands;

use Illuminate\Console\Command;

class FilamentPricingTableCommand extends Command
{
    public $signature = 'filament-pricing-table';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
