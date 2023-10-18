<?php namespace Mequy\Leabio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMequyLeabioMeals extends Migration
{
    public function up()
    {
        Schema::create('mequy_leabio_meals', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('unit')->nullable();
            $table->string('calo')->nullable();
            $table->string('fat')->nullable();
            $table->string('road')->nullable();
            $table->string('protein')->nullable();
            $table->string('fiber')->nullable();
            $table->string('avatar')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mequy_leabio_meals');
    }
}
