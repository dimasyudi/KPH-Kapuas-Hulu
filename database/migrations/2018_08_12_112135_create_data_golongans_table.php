<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataGolongansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_golongans', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nip');
            $table->date('tmt_cpns');
            $table->date('tmt_pns');
            $table->string('pangkat');
            $table->string('golongan');
            $table->string('eselon');
            $table->date('gajiberkala')->nullable();
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
        Schema::dropIfExists('data_golongans');
    }
}
