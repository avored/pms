<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatusTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('statuses', function(Blueprint $table) {
            $table->increments('id');
            $table->enum('belongs_to', ['PROJECT', 'TASK']);
            $table->string('name');
            $table->tinyInteger('is_default')->default(0);
            $table->tinyInteger('is_completed')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('statuses');
    }

}
