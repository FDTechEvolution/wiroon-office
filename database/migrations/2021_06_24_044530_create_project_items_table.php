<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('project_id')->index();
            $table->bigInteger('provider_id')->index();
            $table->string('name');
            $table->enum('type', ['domain', 'server', 'hosting', 'email', 'design']);
            $table->decimal('amount');
            $table->text('description')->nullable();
            $table->enum('status', ['CO', 'VO'])->default('CO')->nullable();
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
        Schema::dropIfExists('project_items');
    }
}
