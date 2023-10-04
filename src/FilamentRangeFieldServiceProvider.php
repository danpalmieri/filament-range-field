<?php

namespace Yepsua\Filament;

use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Assets\Css;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentRangeFieldServiceProvider extends PackageServiceProvider
{
    /**
     * {@inheritDoc}
     *
     * @param Package $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-range-field')
            ->hasAssets()
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('custom-stylesheet', _DIR_ . '/../resources/dist/css/filament-forms-range-component.min.css'),
        ], package: 'danpalmieri/filament-range-field');
    }
}
