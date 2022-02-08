<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cares', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->integer('11');
            $table->integer('12');
            $table->integer('13');
            $table->integer('14');
            $table->integer('15');
            $table->integer('16');
            $table->integer('17');
            $table->integer('18');
            $table->integer('19');
            $table->integer('20');
            $table->integer('21');
            $table->integer('22');
            $table->integer('23');
            $table->integer('24');
            $table->integer('25');
            $table->integer('26');
            $table->integer('27');
            $table->integer('28');
            $table->integer('29');
            $table->integer('30');
            $table->integer('31');
            $table->integer('32');
            $table->integer('33');
            $table->integer('34');
            $table->integer('35');
            

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
        Schema::dropIfExists('cares');
    }
}
