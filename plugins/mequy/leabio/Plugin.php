<?php

namespace Mequy\Leabio;

use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            'Mequy\Leabio\Components\AddForm' => 'addForm',
            'Mequy\Leabio\Components\ApiPatient' => 'apiPatient'
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }

    public function registerFormWidgets()
    {
        return [
            \Mequy\Leabio\FormWidgets\InputForm::class => 'inputform'
        ];
    }

    public function registerReportWidgets()
    {
        return [
            'Mequy\Leabio\ReportWidgets\Report' => [
                'label'   => 'name report',
                'context' => 'dashboard',
            ],
        ];
    }

    public function registerApiResources()
    {
        return [
           'Mequy\Leabio\Controllers\ResourceController' => 'patient'
        ];
    }
}
