<?php namespace Mequy\Leabio\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateMequyLeabioPatients extends Migration
{
    public function up()
    {
        Schema::create('mequy_leabio_patients', function($table)
        {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('gender')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->integer('age')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('family_members')->nullable();
            $table->string('working_status')->nullable();
            $table->string('avatar')->nullable();
            $table->string('question')->nullable();
            $table->string('sodium')->nullable();
            $table->string('eat_and_drink')->nullable();
            $table->string('v_d')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('mequy_leabio_patients');
    }
}
