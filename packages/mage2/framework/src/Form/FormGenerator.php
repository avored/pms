<?php

namespace Mage2\Framework\Form;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Contracts\View\Factory;
use Illuminate\Session\SessionInterface;

class FormGenerator {


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
     * @param  \Illuminate\Contracts\Routing\UrlGenerator $url
     * @param  \Illuminate\Contracts\View\Factory         $view
     * @param  string                                     $csrfToken
     */
    public function __construct(UrlGenerator $url, Factory $view, $csrfToken)
    {
        $this->url = $url;
        $this->view = $view;
        $this->csrfToken = $csrfToken;
    }

    public function label() {
        return "test";
    }

    /**
     * Set the session store implementation.
     *
     * @param  \Illuminate\Session\SessionInterface $session
     *
     * @return $this
     */
    public function setSessionStore(SessionInterface $session)
    {
        $this->session = $session;
        return $this;
    }
}