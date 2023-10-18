<?php

namespace Mequy\Leabio\Models;

use Model;
use Mequy\Leabio\Models\Meal;

/**
 * Model
 */
class Patient extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;
    protected $fillable = [
        'name',
        'gender',
        'height',
        'weight',
        'address',
        'phone',
        'age',
        'monthly_income',
        'family_members',
        'working_status',
        'question',
        'sodium',
        'eat_and_drink',
        'v_d'
    ];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'mequy_leabio_patients';

    /**
     * @var array rules for validation.
     */
    public $rules = [];

    public $jsonable = ['question', 'sodium', 'eat_and_drink', 'v_d'];

    public $attachOne = [
        'avatar' => 'System\Models\File'
    ];

    public $belongsToMany = [
        'meals' => [
            Meal::class,
            'table' => 'mequy_leabio_patient_meal',
            'key' => 'patient_id',
            'otherKey' => 'meal_id',
            'pivot' => ['quantity']
        ]
    ];

    public function scopeFieldFilter($query, $val)
    {
        dd(1);
        $id = Patient::where('name', 'LIKE', '%' . $val . '%')->lists('id');
        return $query->whereIn('id', $id);
    }
}
