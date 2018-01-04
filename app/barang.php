<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public $table = "barang";
    protected $fillable = [
        'site_code', 'item_code', 'item_name', 'qty', 'vendor_type', 'vendor_code', 'vendor_name', 'stock_date', 'order_day','lead_time','typology','avg_sales_n','avg_sales_p','stock_day','tg_capacity','boost_sales','price','max_order'
    ];
}
