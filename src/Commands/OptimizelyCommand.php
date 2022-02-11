<?php

namespace Astrogoat\Optimizely\Commands;

use Illuminate\Console\Command;

class OptimizelyCommand extends Command
{
    public $signature = 'optimizely';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
