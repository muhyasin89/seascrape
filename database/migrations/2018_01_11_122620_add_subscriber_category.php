<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSubscriberCategory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('subscriber')) {
            Schema::table('subscriber', function (Blueprint $table) {
                $table->integer('category_id')->unsigned();
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
        Schema::table('subscriber', function (Blueprint $table) {
            $table->dropColumn('category_id');
        });
    }
}
