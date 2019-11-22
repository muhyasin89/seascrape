<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewsletterStatus extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('newsletter_log')) {
            DB::statement('ALTER TABLE `newsletter_log` MODIFY `keterangan` VARCHAR(255) ');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(Schema::hasTable('newsletter_log')) {
            Schema::table('newsletter_log', function ($table) {
                $table->dropColumn('status');
            });
        }
    }
}
