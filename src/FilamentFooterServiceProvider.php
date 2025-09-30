<?php

namespace AlwaysCurious\FilamentFooter;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AlwaysCurious\FilamentFooter\Commands\FilamentFooterCommand;

class FilamentFooterServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('filament-footer')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_filament_footer_table')
            ->hasCommand(FilamentFooterCommand::class);
    }
}
