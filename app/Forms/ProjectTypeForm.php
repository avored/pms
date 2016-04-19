<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class ProjectTypeForm extends Form {

    public function buildForm() {
        $this
                ->add('title', 'text', [
                    'rules' => 'required'
                ])
                ->add('description', 'textarea', [
                    'rules' => 'max:5000'
                ]);
    }

}
