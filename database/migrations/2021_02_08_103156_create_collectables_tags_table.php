<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollectablesTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collectables_tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('collectable_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->foreign('collectable_id')
                ->references('id')
                ->on('collectables')
                ->onDelete('cascade');
            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('collectables_tags');
    }
}
