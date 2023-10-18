<?php namespace Mequy\Leabio\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * InputForm Form Widget
 *
 * @link https://docs.octobercms.com/3.x/extend/forms/form-widgets.html
 */
class InputForm extends FormWidgetBase
{
    protected $defaultAlias = 'leabio_input_form';

    public function init()
    {
    }

    public function render()
    {
        $this->prepareVars();
        dd($this->vars['name']);
        return $this->makePartial('inputform');
    }

    public function prepareVars()
    {
        $this->vars['id'] = $this->model->id;
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    public function loadAssets()
    {
        $this->addCss('css/inputform.css');
        $this->addJs('js/inputform.js');
    }

    public function getSaveValue($value)
    {
        return $value;
    }
}
