<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('pro_name');
            $table->string('pro_desc');
            $table->string('pro_img');
            $table->string('pro_img');
            $table->Number('cid');
            $table->string('batch_number');
            $table->string('HSN_code');
            $table->string('composition');
            $table->string('paking');
            $table->string('formula');
            $table->string('molecular_mass');
            $table->string('active_life');
            $table->string('anabolic');
            $table->string('dosage');
            $table->DateTime('Exp');
            $table->DateTime('Mfg');
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
        Schema::dropIfExists('product');
    }
}
