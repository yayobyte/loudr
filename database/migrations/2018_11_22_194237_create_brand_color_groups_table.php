<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandColorGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_color_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('color_hierarchy');
            $table->integer('id_brand');
            $table->integer('rgb_r');
            $table->integer('rgb_g');
            $table->integer('rgb_b');
            $table->integer('cmyk_c');
            $table->integer('cmyk_m');
            $table->integer('cmyk_y');
            $table->integer('cmyk_k');
            $table->integer('hsl_h');
            $table->integer('hsl_s');
            $table->integer('hsl_l');
            $table->string('hex');
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
        Schema::dropIfExists('brand_color_groups');
    }
}
