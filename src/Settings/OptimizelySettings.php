<?php

namespace Astrogoat\Optimizely\Settings;

use Helix\Lego\Settings\AppSettings;

class OptimizelySettings extends AppSettings
{
    public string $account_id;

    protected array $rules = [
        'account_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with Optimizely.';
    }
}
