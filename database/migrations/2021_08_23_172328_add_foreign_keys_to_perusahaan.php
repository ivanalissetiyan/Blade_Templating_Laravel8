<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPerusahaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('perusahaan', function (Blueprint $table) {
            $table->foreign('alamat_id', 'alamat_id_fk1')->references('id')->on('alamat')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('perusahaan', function (Blueprint $table) {
            $table->dropForeign('alamat_id_fk1');
        });
    }
}
