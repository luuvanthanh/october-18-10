<?php

namespace Mequy\Leabio\Components;

use Cms\Classes\ComponentBase;
use Mequy\Leabio\Models\Patient;
use October\Rain\Support\Facades\Flash;
use Redirect;
use Validator;

/**
 * AddForm Component
 *
 * @link https://docs.octobercms.com/3.x/extend/cms-components.html
 */
class AddForm extends ComponentBase
{
    public $data;
    public $productId;
    public function componentDetails()
    {
        return [
            'name' => 'Add Form Component',
            'description' => 'Add item'
        ];
    }

    public function onRun()
    {
        $this->data = 'THANHLUUVAN';
    }

    /**
     * @link https://docs.octobercms.com/3.x/element/inspector-types.html
     */
    public function defineProperties()
    {
        return [];
    }

    public function onSave()
    {
        $data = post();
        $validator = Validator::make(
            $data,
            [
                'name' => 'required',
                'gender' => 'required',
                'height' => 'required',
                'weight' => 'required',
                'address' => 'required',
                'phone' => 'required',
                'age' => 'required',
                'monthly_income' => 'required',
                'family_members' => 'required',
                'working_status' => 'required',
            ]
        );

        if ($validator->fails()) {
            
            return Redirect::back()->withErrors($validator);
        } else {
            Patient::create($data);

            Flash::success('Data has been saved successfully.');

            return Redirect::back();
        }
    }
}
