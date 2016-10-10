<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image_filename');
            $table->string('name');
            $table->text('description');
            $table->integer('order', false, false)->default(0);
            $table->decimal('price')->default(0.00);
            $table->boolean('active')->default(true);
            $table->boolean('hiddenxs')->default(false);
            $table->integer('categories_id')->unsigned()->index()->nullable();
            $table->foreign('categories_id')->references('id')->on('categories')->onDelete('set null');
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
        Schema::drop('items');
    }
}
