<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->increments('id');
            $table->string('site_code');
            $table->string('item_code');
            $table->string('item_name');
            $table->integer('qty');
            $table->integer('vendor_type');
            $table->string('vendor_code');
            $table->string('vendor_name');
            $table->date('stock_date');
            $table->integer('order_day');
            $table->integer('lead_time');
            $table->string('typology');
            $table->float('avg_sales_n',8,2);
            $table->float('avg_sales_p',8,2);
            $table->integer('stock_day');
            $table->integer('tg_capacity');
            $table->integer('boost_sales');
            $table->decimal('price',8,2);
            $table->integer('max_order');
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
        Schema::dropIfExists('barang');
    }
}
