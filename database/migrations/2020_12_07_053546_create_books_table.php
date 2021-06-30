<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('cover_image');
            $table->string('back_cover')->nullable();
            $table->text('description');
            $table->integer('isbn')->nullable();
            $table->integer('price')->default(0);
            $table->integer('mrp');
            $table->string('ebook_source')->nullable();
            $table->string('edition')->nullable();
            $table->foreignId('author_id')->constrained('authors');
            $table->foreignId('genres_id')->constrained();
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
        Schema::dropIfExists('books');
    }
}
