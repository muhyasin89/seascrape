<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddImageServiceEquipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('service_equipment')) {
            Schema::table('service_equipment', function (Blueprint $table) {
                $table->string('image');

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
        if(Schema::hasTable('service_equipment')) {
            Schema::table('service_equipment', function ($table) {
                $table->dropColumn('image');
            });
        }
    }
}
