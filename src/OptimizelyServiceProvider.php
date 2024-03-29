<?php

namespace Astrogoat\Optimizely;

use Astrogoat\Optimizely\Settings\OptimizelySettings;
use Helix\Lego\Apps\App;
use Helix\Lego\Apps\Services\IncludeFrontendViews;
use Helix\Lego\LegoManager;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class OptimizelyServiceProvider extends PackageServiceProvider
{
    public function registerApp(App $app)
    {
        return $app
            ->name('optimizely')
            ->settings(OptimizelySettings::class)
            ->migrations([
                __DIR__ . '/../database/migrations/settings',
            ])->includeFrontendViews(function (IncludeFrontendViews $views) {
                return $views->addToHead(['optimizely::script'], 100);
            });
    }

    public function registeringPackage()
    {
        $this->callAfterResolving('lego', function (LegoManager $lego) {
            $lego->registerApp(fn (App $app) => $this->registerApp($app));
        });
    }

    public function configurePackage(Package $package): void
    {
        $package->name('optimizely')->hasViews()->hasConfigFile();
    }
}
