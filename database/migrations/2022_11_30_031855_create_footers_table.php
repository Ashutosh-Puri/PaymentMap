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
        Schema::create('footers', function (Blueprint $table) {
            $table->id()->index();
            $table->tinyInteger('status')->default(0);
            $table->string('lable_1');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('social_1')->nullable();
            $table->string('social_1_url')->nullable();
            $table->string('social_2')->nullable();
            $table->string('social_2_url')->nullable();
            $table->string('social_3')->nullable();
            $table->string('social_3_url')->nullable();
            $table->string('social_4')->nullable();
            $table->string('social_4_url')->nullable();

            $table->string('lable_2');
            $table->string('link_1_name');
            $table->string('link_1_url')->nullable();
            $table->string('link_2_name');
            $table->string('link_2_url')->nullable();
            $table->string('link_3_name');
            $table->string('link_3_url')->nullable();
            $table->string('link_4_name');
            $table->string('link_4_url')->nullable();

            $table->string('lable_3');
            $table->string('link_5_name');
            $table->string('link_5_url')->nullable();
            $table->string('link_6_name');
            $table->string('link_6_url')->nullable();
            $table->string('link_7_name');
            $table->string('link_7_url')->nullable();
            $table->string('link_8_name');
            $table->string('link_8_url')->nullable();

            $table->string('lable_4');
            $table->string('discription');

            $table->string('devloper_name');
            $table->string('devloper_company');
            $table->string('devloper_site');

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
        Schema::dropIfExists('footers');
    }
};
