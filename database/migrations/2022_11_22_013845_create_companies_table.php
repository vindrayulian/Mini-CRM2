<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->String('firstnama');
            $table->String('lastnama');
            $table->String('gender');
            $table->unsignedBigInteger('company_id')->nullable();
 
            $table->foreign('company_id')->references('id')->on('perusahaans')->onDelete('set null');
            $table->String('email');
            $table->String('hobi');
            $table->bigInteger('nohp');
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
        Schema::dropIfExists('companies');
    }
}
