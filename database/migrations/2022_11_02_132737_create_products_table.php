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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('book_title');
            $table->integer('book_author_id');
            $table->integer('book_category_id');
            $table->integer('book_publisher_id');
            $table->string('edition');
            $table->string('language');
            $table->integer('book_price');
            $table->integer('pages')->nullable();
            $table->longText('book_summary')->nullable();
            $table->text('tag')->nullable();
            $table->text('book_image')->nullable();
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('products');
    }
};
