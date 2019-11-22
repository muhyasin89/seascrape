<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsletter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('newsletters')) {
            Schema::create('newsletters', function (Blueprint $table) {
                $table->increments('id');
                $table->string('title');
                $table->string('content');
                $table->longText('description');
                if(Schema::hasTable('images')) {
                    $table->integer('image_id')->unsigned();
                    $table->foreign('image_id')->references('id')->on('images')->onDelete('cascade');
                }

                $table->dateTime('date');
                $table->boolean('publish');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newsletters');
    }
}
