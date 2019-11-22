<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNextPrevProjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('project')) {
            Schema::table('project', function (Blueprint $table) {
                $table->string('title');
                $table->string('next')->nullable();
                $table->string('prev')->nullable();
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
        if(Schema::hasTable('project')) {
            Schema::table('project', function ($table) {
                $table->dropColumn('title');
                $table->dropColumn('next');
                $table->dropColumn('prev');
            });
        }
    }
}
