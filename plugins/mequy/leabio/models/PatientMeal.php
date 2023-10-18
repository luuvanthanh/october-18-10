<?php namespace Mequy\Leabio\Models;

use Model;

/**
 * Model
 */
class PatientMeal extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var bool timestamps are disabled.
     * Remove this line if timestamps are defined in the database table.
     */
    public $timestamps = false;

    protected $fillable = [
        'patient_id',
        'meal_id',
        'quantity'
    ];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'mequy_leabio_patient_meal';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
