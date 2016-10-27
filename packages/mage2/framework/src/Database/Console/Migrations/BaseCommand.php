<?php

namespace Mage2\Framework\Database\Console\Migrations;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Console\Command;

class BaseCommand extends Command
{
    /**
     * Get the path to the migration directory.
     *
     * @return string
     */
    protected function getMigrationPath($moduleName)
    {
        $path = $this->laravel->baseModulePath(). DIRECTORY_SEPARATOR. $moduleName . DIRECTORY_SEPARATOR . 'database' . DIRECTORY_SEPARATOR . 'migrations';


        if(!File::isDirectory($path)) {
            $result = File::makeDirectory($path);
            dd($result);
        }
        return $path;
    }

    /**
     * Get all of the migration paths.
     *
     * @return array
     */
    protected function getMigrationPaths()
    {
        // Here, we will check to see if a path option has been defined. If it has
        // we will use the path relative to the root of this installation folder
        // so that migrations may be run for any path within the applications.
        if ($this->input->hasOption('path') && $this->option('path')) {
            return [$this->laravel->basePath().'/'.$this->option('path')];
        }

        return array_merge(
            [$this->getMigrationPath()], $this->migrator->paths()
        );
    }
}
