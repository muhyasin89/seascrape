<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNextPrevKeymanagementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('project')) {
            Schema::table('about_key_management', function (Blueprint $table) {
                    $table->integer('next')->nullable();
                    $table->integer('prev')->nullable();
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
        Schema::table('about_key_management', function (Blueprint $table) {
            $table->dropColumn('next');
            $table->dropColumn('prev');
        });
    }
}
