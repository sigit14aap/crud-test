<?php

use Illuminate\Database\Seeder;
use App\barang;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	foreach (range(1, 50) as $loop) {
	        barang::create([
	        'site_code'	=> str_random(20).rand(1000,10000),
	        'item_code'	=> str_random(20).rand(1000,10000),
	        'item_name'	=> str_random(20).rand(1000,10000),
	        'qty'	=> rand(10,100),
	        'vendor_type' => rand(1,50),
	        'vendor_code' => str_random(2).rand(100,1000),
	        'vendor_name' => str_random(100),
	        'stock_date' => date('Y-m-d'),
	        'order_day' => rand(1,10),
	        'lead_time' => rand(1,10),
	        'typology'	=> str_random(10),
	        'avg_sales_n'	=> rand(1,100),
	        'avg_sales_p'	=> rand(1,100),
	        'stock_day' => rand(1,50),
	        'tg_capacity' => rand(1,100),
	        'boost_sales' => rand(1,20),
	        'price' => rand(1000,10000),
	        'max_order' => rand(30,100),
			]);
		}
    }
}
