<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkflowStageTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('workflow_stages', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('workflow_type_id');
            $table->string('name');
            $table->integer('previous_stage')->default(0);
            $table->timestamps();

            $table->foreign('workflow_type_id')
                    ->references('id')->on('workflow_types')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('workflow_stages');
    }

}
