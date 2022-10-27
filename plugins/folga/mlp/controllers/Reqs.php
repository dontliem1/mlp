<?php namespace Folga\Mlp\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Reqs extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Folga.Mlp', 'mlp', 'mlp-reqs');
    }
}
