<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeServiceProjectNewsPrevNextTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('news')) {
            DB::statement('ALTER TABLE `news` MODIFY `prev` INTEGER ');
            DB::statement('ALTER TABLE `news` MODIFY `next` INTEGER ');
        }

        if(Schema::hasTable('service_equipment')){
            DB::statement('ALTER TABLE `news` MODIFY `prev` INTEGER ');
            DB::statement('ALTER TABLE `news` MODIFY `next` INTEGER ');
        }

        if(Schema::hasTable('project')){
            DB::statement('ALTER TABLE `news` MODIFY `prev` INTEGER ');
            DB::statement('ALTER TABLE `news` MODIFY `next` INTEGER ');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
