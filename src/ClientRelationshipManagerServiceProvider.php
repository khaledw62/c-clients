<?php

namespace Codetoon\ClientRelationshipManager;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Codetoon\ClientRelationshipManager\Commands\ClientRelationshipManagerCommand;

class ClientRelationshipManagerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('c-clients')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_c-clients_table')
            ->hasCommand(ClientRelationshipManagerCommand::class)
            ->hasInstallCommand(function(InstallCommand $command) {
                $command
                    ->startWith(function(InstallCommand $command) {
                        $command->info('Hello, and welcome to my great new package!');
                    })
                    ->publishConfigFile()
                    ->publishAssets()
                    ->publishMigrations()
                    ->askToRunMigrations()
                    ->copyAndRegisterServiceProviderInApp()
                    ->askToStarRepoOnGitHub('codetoon/c-clients')
                    ->endWith(function(InstallCommand $command) {
                        $command->info('Have a great day!');
                    });
        });
    }
}
