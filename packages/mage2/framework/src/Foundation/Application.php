<?php
namespace Mage2\Framework\Foundation;

use Illuminate\Foundation\Application as LaravelApplication;

class Application  extends LaravelApplication{

    protected $namespace = "Mage2\System\\";
    /**
     * Get the path to the bootstrap directory.
     *
     * @return string
     */
    public function bootstrapPath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'storage' . DIRECTORY_SEPARATOR . "framework" . DIRECTORY_SEPARATOR. "bootstrap";
    }

    /**
     * Get the path to the bootstrap directory.
     *
     * @return string
     */
    public function baseModulePath()
    {
        return $this->basePath.DIRECTORY_SEPARATOR.'modules' . DIRECTORY_SEPARATOR . "base";
    }
    
       /**
     * Bind all of the application paths in the container.
     *
     * @return void
     */
    protected function bindPathsInContainer()
    {
        $this->instance('path', $this->path());
        $this->instance('path.module', $this->baseModulePath());
        $this->instance('path.base', $this->basePath());
        $this->instance('path.lang', $this->langPath());
        $this->instance('path.config', $this->configPath());
        $this->instance('path.public', $this->publicPath());
        $this->instance('path.storage', $this->storagePath());
        $this->instance('path.database', $this->databasePath());
        $this->instance('path.resources', $this->resourcePath());
        $this->instance('path.bootstrap', $this->bootstrapPath());
    }
}