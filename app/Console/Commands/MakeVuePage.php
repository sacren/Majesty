<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeVuePage extends Command
{
    protected $signature = 'make:vuepage {name}';
    protected $description = 'Create a new Vue page';

    public function handle()
    {
        $name = $this->argument('name');
        $path = resource_path("js/Pages/{$name}.vue");

        if (File::exists($path)) {
            $this->error("Page {$name} already exists!");
            return;
        }

        File::put($path, $this->getStub());

        $this->info("Page {$name} created successfully.");
    }

    protected function getStub()
    {
        return <<<EOT
<template>
    <div>
        <h1>{$this->argument('name')}</h1>
    </div>
</template>

<script>
export default {
    name: '{$this->argument('name')}',
};
</script>

EOT;
    }
}
