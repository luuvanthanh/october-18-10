<?php

namespace Mequy\Leabio\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;
use Mequy\Leabio\Models\Patient as ModelsPatient;

class Patient extends Controller
{
    public $data;
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Mequy.Leabio', 'main-menu-item');
        // pass all data from model to screen partial.
        $this->data = ModelsPatient::all();
    }
}
