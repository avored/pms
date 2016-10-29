<?php

namespace Mage2\Framework\Form;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Session\SessionInterface;
use Illuminate\Filesystem\Filesystem;

class FormGenerator {

    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The URL generator instance.
     *
     * @var \Illuminate\Contracts\Routing\UrlGenerator
     */
    protected $url;

    /**
     * The View factory instance.
     *
     * @var \Illuminate\Contracts\View\Factory
     */
    protected $view;

    /**
     * The CSRF token used by the form builder.
     *
     * @var string
     */
    protected $csrfToken;

    /**
     * The session store implementation.
     *
     * @var \Illuminate\Session\SessionInterface
     */
    protected $session;

    /**
     * The current model instance for the form.
     *
     * @var mixed
     */
    protected $model;

    /**
     * Create a new form generator instance.
     *
     * @param  \Illuminate\Filesystem\                      $fileSystem
     * @param  \Illuminate\Contracts\Routing\UrlGenerator   $url
     * @param  \Illuminate\Contracts\View\Factory           $view
     * @param  string                                       $csrfToken
     */
    public function __construct(Filesystem $fileSystem, UrlGenerator $url, Factory $view, $csrfToken) {
        $this->files = $fileSystem;
        $this->url = $url;
        $this->view = $view;
        $this->csrfToken = $csrfToken;
    }

    /**
     * get the text field using stub template 
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $fieldName
     * @param  string  $label
     * @return $stub
     */
    public function text($fieldName, $label = "") {
        $stub = $this->files->get($this->getStub('text'));
        
        $this->replaceFieldName($stub, $fieldName)->replaceLabel($stub, $label);
        return $stub;
    }

    /**
     * Replace the dummy field name for the given stub.
     *
     * @param  string  $stub
     * @param  string  $fieldName
     * @return $this
     */
    protected function replaceFieldName(&$stub, $fieldName) {
        $stub = str_replace('DUMMYFIELDNAME', $fieldName, $stub);
        return $this;
    }
    /**
     * Replace the label for the given stub.
     *
     * @param  string  $stub
     * @param  string  $fieldName
     * @return $this
     */
    protected function replaceLabel(&$stub, $label) {
        $stub = str_replace('DUMMYLABEL', $label, $stub);
        return $this;
    }

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub($name) {
        return __DIR__ . "/stubs/{$name}.stub";
    }

    /**
     * Set the session store implementation.
     *
     * @param  \Illuminate\Session\SessionInterface $session
     *
     * @return $this
     */
    public function setSessionStore(SessionInterface $session) {
        $this->session = $session;
        return $this;
    }

}
