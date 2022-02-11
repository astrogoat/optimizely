<?php

namespace Astrogoat\Optimizely\Settings;

use Helix\Lego\Settings\AppSettings;
use Astrogoat\Optimizely\Actions\OptimizelyAction;

class OptimizelySettings extends AppSettings
{
    public string $account_id;

    protected array $rules = [
        'account_id' => ['required'],
    ];

    protected static array $actions = [
        // OptimizelyAction::class,
    ];

    // public static function encrypted(): array
    // {
    //     return ['access_token'];
    // }

    public function description(): string
    {
        return 'Interact with Optimizely.';
    }
}
