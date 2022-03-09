<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateOptimizelySettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('optimizely.enabled', false);
        $this->migrator->add('optimizely.account_id', '');
    }

    public function down()
    {
        $this->migrator->delete('optimizely.enabled');
        $this->migrator->delete('optimizely.account_id');
    }
}
