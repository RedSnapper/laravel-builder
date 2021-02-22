<?php

namespace RS\Builder\Console;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'builder:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install files for builder integration';

    public function handle()
    {

        (new Filesystem)->copyDirectory(__DIR__.'/../../stubs/cms', base_path('cms'));
        (new Filesystem)->copy(__DIR__.'/../../config/builder.php', config_path('builder.php'));



        $this->info('Builder files installed successfully.');
    }
}