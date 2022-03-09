<?php

namespace Astrogoat\Optimizely\Settings;

use Helix\Lego\Settings\AppSettings;
use Illuminate\Validation\Rule;

class OptimizelySettings extends AppSettings
{
    public string $account_id;

    public function rules() : array
    {
        return [
            'account_id' => Rule::requiredIf($this->enabled === true),
        ];
    }

    public function description(): string
    {
        return 'Interact with Optimizely.';
    }
}
