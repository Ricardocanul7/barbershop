<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotoHasTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_has_tags', function (Blueprint $table) {
            $table->unsignedBigInteger('photo_id');
            $table->unsignedBigInteger('tag_id');
            $table->primary(['photo_id', 'tag_id'], 'photo_tag_id_primary');
            $table->foreign('photo_id')->references('id')->on('photo_gallery');
            $table->foreign('tag_id')->references('id')->on('tags');
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
        Schema::dropIfExists('photo_has_tags');
    }
}
