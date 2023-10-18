<?php namespace Mequy\Leabio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMequyLeabioPatientMeal extends Migration
{
    public function up()
    {
        Schema::create('mequy_leabio_patient_meal', function($table)
        {
            $table->increments('id')->unsigned();
            $table->integer('patient_id')->unsigned();
            $table->integer('meal_id')->unsigned();
            $table->integer('quantity')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mequy_leabio_patient_meal');
    }
}
