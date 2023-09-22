<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeServiceCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:service {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This Command is used to create new service';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $name = $this->argument('name');
        $servicePath = app_path('Services/' . $name . '.php');

        if (File::exists($servicePath)) {
            $this->error('Service already exists!');
            return;
        }

        $stub = <<<STUB
            <?php

            namespace App\Services;

            class $name
            {
                // Your service implementation goes here
            }
            STUB;

        File::put($servicePath, $stub);

        $this->info('Service created successfully!');
    }
}
