<?php namespace Mequy\Leabio\Components;

use Cms\Classes\ComponentBase;
use Mequy\Leabio\Models\Patient;

/**
 * ApiPatient Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class ApiPatient extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'apiPatient Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function onRun()
    {
        $data = Patient::all();

        return response()->json([
            'data' => $data
        ]);
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }
}
