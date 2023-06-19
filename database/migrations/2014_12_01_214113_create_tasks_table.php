<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id'); // id - работника
            $table->unsignedBigInteger('director_id'); // id - постановщика задачи (Админа/Директора)
            $table->string('title'); // название таски
            $table->text('description'); // описание таски
            $table->unsignedBigInteger('status'); // статус таски (в процессе / выполнена)
            $table->unsignedBigInteger('work_time'); // рабочее время на выполнение таски в мин
            $table->unsignedBigInteger('month'); // месяц таски (май)
            $table->unsignedBigInteger('year'); // год таски (2023)
            $table->timestamps();

            $table->index('director_id', 'task_director_idx');
            $table->foreign('director_id', 'task_director_fk')
                ->on('users')->references('id');

            $table->index('employee_id', 'task_employee_idx');
            $table->foreign('employee_id', 'task_employee_fk')
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
        Schema::dropIfExists('tasks');
    }
}
