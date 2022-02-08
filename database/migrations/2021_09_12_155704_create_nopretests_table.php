<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNopretestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nopretests', function (Blueprint $table) {
            $table->id();
            $table->string('user_name');
            $table->string('name_user');
            $table->string('email');
            $table->string('password');
            $table->string('gender');
            $table->integer('year');
            $table->string('uni');
            $table->string('stdid');
            $table->string('birth_date');
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
        Schema::dropIfExists('nopretests');
    }
}
