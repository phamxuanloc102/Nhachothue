<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Baiviet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function (Blueprint $table) {
            $table->increments( 'id');
            $table->integer( 'level');
            $table->string( 'tennguoidang');
            $table->string( 'sodienthoai');
            $table->string( 'tieude');
            $table->string( 'sonha');
            $table->string( 'tenduong');
            $table->string( 'phuong');
            $table->string( 'quan');
            $table->string( 'dientich');
            $table->string( 'giatien');
            $table->string( 'noidung');
            $table->string( 'hinhanh');
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
        Schema::dropIfExists('baiviet');
    }
}
