<?php

namespace Mage2\Framework\Form;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Session\SessionInterface;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

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
     * The URL generator instance.
     *
     * @var \Illuminate\Http\Request
     */
    protected $request;

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
     * @param  \Illuminate\Http\Request                     $request
     * @param  \Illuminate\Contracts\View\Factory           $view
     * @param  string                                       $csrfToken
     */
    public function __construct(Filesystem $fileSystem, UrlGenerator $url, Request $request ,Factory $view, $csrfToken) {
        $this->files = $fileSystem;
        $this->url = $url;
        $this->request = $request;
        $this->view = $view;
        $this->csrfToken = $csrfToken;
    }

    /**
     * bind the form with model
     * 
     * @todo add attribute feature and etc
     *
     * @param  Object  $model
     * @param  Array  $dummyReplacement
     * @return $stub
     */
    public function bind($model, $dummyReplacement = []) {
        $this->model = $model;
        $stub = $this->open($dummyReplacement);

        return $stub;
    }

    /**
     * get the form open stub template
     * 
     * @todo add attribute feature and etc
     *
     * @param  Array  $dummyReplacement
     * @return $stub
     */
    public function open($dummyReplacement = []) {
        $stub = $this->files->get($this->getStub('form-open'));

        foreach ($dummyReplacement as $dummyText => $replacement) {
            $this->replaceStubText($stub, strtoupper("DUMMY" . $dummyText), $replacement);
        }

        $csrfStub = $this->files->get($this->getStub('_csrf'));
        $this->replaceStubText($csrfStub, "DUMMYCSRF", $this->csrfToken);
        $stub = $stub . $csrfStub;

        
        return $stub;
    }

    /**
     * get the form closestub template
     * @return $stub
     */
    public function close() {
        $stub = $this->files->get($this->getStub('form-close'));
        return $stub;
    }

    /**
     * get the text field using stub template 
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $fieldName
     * @param  string  $label
     * @param  array  $attributes
     * @return $stub
     */
    public function text($fieldName, $label = "", $attributes = []) {

        $stub = $this->files->get($this->getStub('text'));

        $this->replaceStubText($stub, "DUMMYFIELDNAME", $fieldName);
        $this->replaceStubText($stub, "DUMMYLABEL", $label);

        $this->setAttributeTextOfStub($stub, $attributes);

        $this->setErrorStubAndValue($stub, $fieldName);

        return $stub;
    }

    /**
     * get the text field using stub template 
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $buttonText
     * @return $stub
     */
    public function setErrorStubAndValue(&$stub, $fieldName) {

        $errorClass = "";
        $dummyErrorMessageStub = "";
        $errors = $this->request->session()->get('errors');
        $value = (isset($this->model->$fieldName)) ? $this->model->$fieldName : "";

        if(NULL !== $errors && $errors->has($fieldName)) {
        $dummyErrorMessageStub = $this->files->get($this->getStub('error'));
            $this->replaceStubText($dummyErrorMessageStub, "DUMMYERRORMESSAGE" , $errors->first($fieldName));
            $errorClass = "has-error";

            if($this->request->session()->hasOldInput($fieldName)) {
                $value = $this->request->session()->getOldInput($fieldName);
            }
        }

        $this->replaceStubText($stub, "DUMMYERRORTEXT", $dummyErrorMessageStub);
        $this->replaceStubText($stub, "DUMMYERRORCLASS", $errorClass);
        $this->replaceStubText($stub, "DUMMYVALUE", $value);

        return $this;
    }

    /**
     * get the text field using stub template 
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $buttonText
     * @return $stub
     */
    public function setAttributeTextOfStub(&$stub, $attributes = []) {
        $attributeText = $this->getAttributeText($attributes);
        $this->replaceStubText($stub, "DUMMYATTRIBUTES", $attributeText);

        return $this;
    }

    /**
     * get the text field using stub template 
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $buttonText
     * @return $stub
     */
    public function submit($buttonText = "Save", $attributes = []) {
        $stub = $this->files->get($this->getStub('submit'));

        $this->replaceStubText($stub, "DUMMYBUTTONTEXT", $buttonText);
        $this->setAttributeTextOfStub($stub, $attributes);

        return $stub;
    }

    /**
     * get the attribuet text from given array
     * 
     * @todo add attribute feature and etc
     *
     * @param  string  $buttonText
     * @return $stub
     */
    public function getAttributeText($attributes = []) {
        $attributeText = "";
        foreach ($attributes as $attKey => $attVal) {
            $attributeText .= $attKey . "=" . $attVal;
        }

        return $attributeText;
    }


    /**
     * Replace the dummy stub textfor the given stub.
     *
     * @param  string  $stub
     * @param  string  $fieldName
     * @return $this
     */
    protected function replaceStubText(&$stub, $dummyText, $fieldName) {
        $stub = str_replace($dummyText, $fieldName, $stub);
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
