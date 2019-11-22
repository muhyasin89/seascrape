<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTableNewsletterSlug extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('newsletters')){
        Schema::table('newsletters',function(Blueprint $table){
            $table->string('slug');
            $table->string('type');
            });

            DB::statement('ALTER TABLE `newsletters` MODIFY `content` LONGTEXT');
            DB::statement('ALTER TABLE `newsletters` MODIFY `description` TEXT');
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('newsletters')) {
            Schema::table('newsletters', function ($table) {
                $table->dropColumn('slug');
            });
        }
    }
}
