<?php

namespace Elbojoloco\Stubs;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Foundation\Console\StubPublishCommand as Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class StubPublishCommand extends Command
{
    public function handle(): void
    {
        if (! is_dir($stubsPath = $this->laravel->basePath('stubs'))) {
            (new Filesystem)->makeDirectory($stubsPath);
        }

        collect(File::files(__DIR__.'/../stubs'))->each(function (SplFileInfo $file) use ($stubsPath) {
            $from = $file->getPathname();
            $to = "$stubsPath/{$file->getFilename()}";

            if (! file_exists($to) || $this->option('force')) {
                file_put_contents($to, file_get_contents($from));
            }
        });

        $this->info('Stubs published successfully.');
    }
}
