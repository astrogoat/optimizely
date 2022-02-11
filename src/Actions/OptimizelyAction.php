<?php

namespace Astrogoat\Optimizely\Actions;

use Helix\Lego\Apps\Actions\Action;

class OptimizelyAction extends Action
{
    public static function actionName(): string
    {
        return 'Optimizely action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}
