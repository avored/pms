<?php
namespace Mage2\Framework\Foundation;

use Illuminate\Foundation\Application as LaravelApplication;

class Application  extends LaravelApplication{

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
}