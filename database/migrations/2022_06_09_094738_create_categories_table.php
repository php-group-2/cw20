<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id(); // PRIMARY KEY
            $table->string('name');
            $table->foreignId('parent_id')->nullable(); // FOREIGN KEY
            $table->enum('status', ['show', 'notShow'])->default('show');
            $table->timestamps();
            $table->foreign('parent_id')
                ->references('id')
                ->on('categories')
                ->cascadeOnDelete(); // parent_id -->> categories(id)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
