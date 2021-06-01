<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataDetail1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_detail_1', function (Blueprint $table) {
            $table->id();

            $table->bigInteger("data_id")->nullable();
            $table->string("uraian", 255)->default("");
            $table->decimal("jumlah", 8, 0)->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_detail_1');
    }
}
