<?php

namespace AlwaysCurious\FilamentFooter\Commands;

use Illuminate\Console\Command;

class FilamentFooterCommand extends Command
{
    public $signature = 'filament-footer';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
