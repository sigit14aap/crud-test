<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use Session;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang= barang::all();
        return view('home',compact('barang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'site_code' => 'required|string|max:255',
        'item_code' => 'required|string|max:255',
        'item_name' => 'required|string|max:255',
        'qty' => 'required|integer|min:1',
        'vendor_type' => 'required|integer|min:1',
        'vendor_code' => 'required|string|max:255',
        'vendor_name'=> 'required|string|min:5|max:255',
        'stock_date'=> 'required|date',
        'order_day'=> 'required|integer|min:1',
        'lead_time'=> 'required|integer|min:1',
        'typology'=> 'required|string|max:255',
        'avg_sales_n'=> 'required|numeric|min:1',
        'avg_sales_p'=> 'required|numeric|min:1',
        'stock_day'=> 'required|integer|min:1',
        'tg_capacity'=> 'required|integer|min:1',
        'boost_sales'=> 'required|integer|min:1',
        'price'=> 'required|numeric|min:1',
        'max_order'=> 'required|numeric|min:1',
        ]);

        $barang = new barang;
        $barang->site_code = $request->site_code;
        $barang->item_code = $request->item_code;
        $barang->item_name = $request->item_name;
        $barang->qty = $request->qty;
        $barang->vendor_type = $request->vendor_type;
        $barang->vendor_code = $request->vendor_code;
        $barang->vendor_name = $request->vendor_name;
        $barang->stock_date = $request->stock_date;
        $barang->order_day = $request->order_day;
        $barang->lead_time = $request->lead_time;
        $barang->typology = $request->typology;
        $barang->avg_sales_n = $request->avg_sales_n;
        $barang->avg_sales_p = $request->avg_sales_p;
        $barang->stock_day = $request->stock_day;
        $barang->tg_capacity = $request->tg_capacity;
        $barang->boost_sales = $request->boost_sales;
        $barang->price = $request->price;
        $barang->max_order = $request->max_order;
        $barang->save();
        if($barang){
            Session::flash('success_msg', 'Berhasil Ditambahkan!');
        }else{
            Session::flash('error_msg', 'Gagal Ditambahkan!');
        }
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang= barang::find($id);
        if (is_null($barang)) {
            Session::flash('error_msg', 'Data Tidak Ditemukan!');
            return redirect()->route('home');
        }else{
        return view('edit',compact('barang'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cek = barang::where('id','=', $id)->first();
        if (is_null($cek)) {
            Session::flash('error_msg', 'Data Tidak Ditemukan!');
            return redirect()->route('home');
        }else{
        $this->validate($request,[
        'site_code' => 'required|string|max:255',
        'item_code' => 'required|string|max:255',
        'item_name' => 'required|string|max:255',
        'qty' => 'required|integer|min:1',
        'vendor_type' => 'required|integer|min:1',
        'vendor_code' => 'required|string|max:255',
        'vendor_name'=> 'required|string|min:5|max:255',
        'stock_date'=> 'required|date',
        'order_day'=> 'required|integer|min:1',
        'lead_time'=> 'required|integer|min:1',
        'typology'=> 'required|string|max:255',
        'avg_sales_n'=> 'required|numeric|min:1',
        'avg_sales_p'=> 'required|numeric|min:1',
        'stock_day'=> 'required|integer|min:1',
        'tg_capacity'=> 'required|integer|min:1',
        'boost_sales'=> 'required|integer|min:1',
        'price'=> 'required|numeric|min:1',
        'max_order'=> 'required|numeric|min:1',
        ]);
        $update = barang::find($id);
        $update->site_code = $request->site_code;
        $update->item_code = $request->item_code;
        $update->item_name = $request->item_name;
        $update->qty = $request->qty;
        $update->vendor_type = $request->vendor_type;
        $update->vendor_code = $request->vendor_code;
        $update->vendor_name = $request->vendor_name;
        $update->stock_date = $request->stock_date;
        $update->order_day = $request->order_day;
        $update->lead_time = $request->lead_time;
        $update->typology = $request->typology;
        $update->avg_sales_n = $request->avg_sales_n;
        $update->avg_sales_p = $request->avg_sales_p;
        $update->stock_day = $request->stock_day;
        $update->tg_capacity = $request->tg_capacity;
        $update->boost_sales = $request->boost_sales;
        $update->price = $request->price;
        $update->max_order = $request->max_order;
        $update->save();
        if($update){
            Session::flash('success_msg', 'Berhasil Diubah!');
        }else{
            Session::flash('error_msg', 'Gagal Diubah!');
        }
        return redirect()->route('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cek = barang::where('id','=', $id)->first();
        if (is_null($cek)) {
            Session::flash('error_msg', 'Data Tidak Ditemukan!');
            return redirect()->route('home');
        }else{
        $x = barang::where('id','=', $id)->delete();
        Session::flash('success_msg', 'Berhasil Dihapus!');
        return redirect()->route('home');
        }
    }
}
