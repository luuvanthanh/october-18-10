<?php

namespace Mequy\Leabio\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use Illuminate\Http\Request;
use Mequy\Leabio\Models\PatientMeal;

/**
 * Resource Controller Backend Controller
 *
 * @link https://docs.octobercms.com/3.x/extend/system/controllers.html
 */
class ResourceController extends Controller
{
    public $implement = [
        \Backend\Behaviors\FormController::class,
        \Backend\Behaviors\ListController::class,
    ];

    /**
     * @var string formConfig file
     */
    public $formConfig = 'config_form.yaml';

    /**
     * @var string listConfig file
     */
    public $listConfig = 'config_list.yaml';

    /**
     * @var array required permissions
     */
    public $requiredPermissions = ['mequy.leabio.resourcecontroller'];

    /**
     * __construct the controller
     */
    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('Mequy.Leabio', 'leabio', 'resourcecontroller');
    }

    public function create(Request $request)
    {  
        $data = PatientMeal::create($request->all());
        if ($data) {
            return response()->json([
                'data' => $data
            ]);
        }else {
            return response()->json(['error' => 'Add patient meal fail']);
        }
    }
}
