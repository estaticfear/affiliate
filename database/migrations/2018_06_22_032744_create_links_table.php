<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('campaign_id')->unsigned();
            $table->integer('publisher_id')->unsigned();
            $table->string('link');
            $table->decimal('cpc_enterprise', 10, 0)->default(0)->comment('Cost per click for enterprise');
            $table->decimal('cpc_publisher', 10, 0)->default(0)->comment('Cost per click for publisher');
            $table->datetime('date_begin')->nullable()->comment('Ngay bat dau campaign');
            $table->datetime('date_end')->nullable()->comment('Ngay ket thuc campaign');
            $table->tinyInteger('status')->default(1)->comment('1: Hoat dong, 2: Ket thuc');
            $table->tinyInteger('payment_status')->default(1)->comment('1: Chua Thanh Toan, 2: Da Thanh Toan');
            $table->integer('pageview')->unsigned()->default(0);
            $table->timestamps();
            $table->index(['campaign_id', 'publisher_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('links');
    }
}
