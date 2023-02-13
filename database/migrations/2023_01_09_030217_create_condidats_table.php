<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('condidats', function (Blueprint $table) {
            $table->id();
            $table->string('photo',100)->nullable();
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('sex',50);
            $table->string('email',50)->unique();
            $table->string('phone',10)->unique();
            $table->date('birth_day');
            $table->string('birth_place',50);
            $table->string('address');
            $table->string('numeroID',50);
            $table->string('photoID')->nullable();
            $table->string('grade',50);
            $table->string('spiciality',50);
            $table->string('diplom')->nullable();
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
        Schema::dropIfExists('condidats');
    }
};
