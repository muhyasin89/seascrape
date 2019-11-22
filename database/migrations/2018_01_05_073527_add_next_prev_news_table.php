<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNextPrevNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('news')) {
            Schema::table('news', function (Blueprint $table) {
                $table->string('next')->nullable();
                $table->string('prev')->nullable();

                DB::statement('ALTER TABLE `newsletters` MODIFY `content` LONGTEXT');

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
        if(Schema::hasTable('news')) {
            Schema::table('news', function ($table) {
                $table->dropColumn('next');
                $table->dropColumn('prev');
            });
        }
    }
}
