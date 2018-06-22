<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampaignsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('campaigns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned();
            $table->integer('enterprise_id')->unsigned();
            $table->string('title');
            $table->string('link');
            $table->string('thumbnail')->nullable();
            $table->decimal('cpc_enterprise', 10, 0)->default(0)->comment('Cost per click for enterprise');
            $table->decimal('cpc_publisher', 10, 0)->default(0)->comment('Cost per click for publisher');
            $table->datetime('date_begin')->nullable()->comment('Ngay bat dau campaign');
            $table->datetime('date_end')->nullable()->comment('Ngay ket thuc campaign');
            $table->tinyInteger('status')->default(1)->comment('1: Hoat dong, 2: Ket thuc');
            $table->integer('pageview')->unsigned()->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->index(['page_id', 'enterprise_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('campaigns');
    }
}
