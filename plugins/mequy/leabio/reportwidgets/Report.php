<?php namespace Mequy\Leabio\ReportWidgets;

use Backend\Classes\ReportWidgetBase;
use Exception;

/**
 * Report Report Widget
 *
 * @link https://docs.octobercms.com/3.x/extend/backend/report-widgets.html
 */
class Report extends ReportWidgetBase
{
    protected $defaultAlias = 'ReportReportWidget';

    public function defineProperties()
    {
        return [
            'name' => [
                'title' => 'Name',
                'default' => 'Report Report Widget',
                'type' => 'string',
                'validation' => [
                    'required' => [
                        'message' => 'The Name field is required'
                    ],
                    'regex' => [
                        'message' => 'The Name field can contain only Latin letters.',
                        'pattern' => '^[a-zA-Z]+$'
                    ]
                ]
            ],
        ];
    }

    public function render()
    {
        try {
            $this->prepareVars();
        }
        catch (Exception $ex) {
            $this->vars['error'] = $ex->getMessage();
        }

        return $this->makePartial('report');
    }

    public function prepareVars()
    {
    }

    protected function loadAssets()
    {
    }
}
