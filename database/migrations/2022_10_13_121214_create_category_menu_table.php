<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_menu', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained('category_models')->onDelete('cascade');
            $table->foreignId('menu_id')->constrained('menu_models')->onDelete('cascade');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_menu');
    }
}

