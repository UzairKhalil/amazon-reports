<?php

namespace Techxa\AmazonReports;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AmazonReportsServiceProvider extends PackageServiceProvider
{
    public static string $name = 'laravel-amazon-reports';

    public static string $viewNamespace = 'laravel-amazon-reports';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('headings', __DIR__.'/../resources/dist/amazonreports.css')->loadedOnRequest(),
        ], 'techxa/laravel-amazon-reports');
    }
}
