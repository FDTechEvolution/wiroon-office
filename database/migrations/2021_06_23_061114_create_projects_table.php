<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->index();
            $table->string('name');
            $table->date('docdate');
            $table->date('startdate');
            $table->date('enddate');
            $table->decimal('totalamt');
            $table->enum('status', ['ACTIVE', 'INACTIVE', 'HOLD'])->default('INACTIVE')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
