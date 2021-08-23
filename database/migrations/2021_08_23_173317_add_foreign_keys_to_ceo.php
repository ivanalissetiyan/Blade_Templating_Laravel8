<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToCeo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ceo', function (Blueprint $table) {
            $table->foreign('perusahaan_id', 'perusahaan_id_fk3')->references('id')->on('perusahaan')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('client_id', 'client_id_fk3')->references('id')->on('perusahaan')->onUpdate('CASCADE')->onDelete('RESTRICT');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ceo', function (Blueprint $table) {
            $table->dropForeign('perusahaan_id_fk3');
            $table->dropForeign('client');
        });
    }
}
