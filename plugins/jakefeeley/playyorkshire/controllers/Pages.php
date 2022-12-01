<?php namespace JakeFeeley\PlayYorkshire\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Pages extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        '001' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('JakeFeeley.PlayYorkshire', 'main-menu-page');
    }
}
