<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEfficienciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('efficiencies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('year');
            $table->unsignedBigInteger('month');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('assessment'); // оценка
            $table->timestamps();

            $table->index('employee_id', 'efficiency_employee_idx');
            $table->foreign('employee_id', 'efficiency_employee_fk')
                ->on('users')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('efficiencies');
    }
}
