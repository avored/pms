<?php

namespace Mage2\Core\Foundation;

use Illuminate\Foundation\Application as LaravelApplication;

class Application extends LaravelApplication
{


    /**
     * Get the path to the application configuration files.
     *
     * @param string $path Optionally, a path to append to the config path
     * @return string
     */
    public function configPath($path = '')
    {
        $baseModulePath = $this->baseModulePath();
        return $baseModulePath . DIRECTORY_SEPARATOR . 'Mage2' . DIRECTORY_SEPARATOR . "Core" . DIRECTORY_SEPARATOR . "config";
    }


    /**
     * Get the path to the database directory.
     *
     * @param string $path Optionally, a path to append to the database path
     * @return string
     */
    public function databasePath($path = '')
    {
        $baseModulePath = $this->baseModulePath();
        return $baseModulePath . DIRECTORY_SEPARATOR . 'Mage2' . DIRECTORY_SEPARATOR . "Core" . DIRECTORY_SEPARATOR . "database";
    }


    /**
     * Get the path to the language files.
     *
     * @return string
     */
    public function langPath()
    {
        $baseModulePath = $this->baseModulePath();
        return $baseModulePath . DIRECTORY_SEPARATOR . 'Mage2' . DIRECTORY_SEPARATOR . "Core" . DIRECTORY_SEPARATOR . "views" . DIRECTORY_SEPARATOR . "lang";
    }


    /**
     * Get the path to the base module .
     *
     * @param NULL
     * @return string
     */
    public function baseModulePath($path = '')
    {
        return $this->basePath . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . "base";
    }


}
