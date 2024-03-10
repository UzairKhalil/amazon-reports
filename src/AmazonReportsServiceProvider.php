<?php

namespace Techxa\AmazonReports;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Techxa\AmazonReports\Commands\AmazonReportsCommand;
use Techxa\AmazonReports\Testing\TestsAmazonReports;

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
            Css::make('headings', __DIR__ . '/../resources/dist/amazonreports.css')->loadedOnRequest(),
        ], 'techxa/laravel-amazon-reports');
    }
}
