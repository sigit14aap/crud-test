@extends('layouts.app')
@section('main-content')
@section('title', 'Ubah Data')
<div class="container col-lg-12">
  <h2>Ubah Data</h2>
  <hr>


<form role="form" action="{{ route('update',$barang->id) }}" method="post">
{{ csrf_field() }}
<div class="col-md-6" style="float: left;">
  <div class="form-group">
      <label for="site_code">Site Code</label>
      <input type="text" class="form-control" value="{{$barang->site_code}}" name="site_code" required>
    </div>
    @if ($errors->has('site_code'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('site_code') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="item_code">Item Code</label>
      <input type="text" class="form-control" name="item_code" value="{{$barang->item_code}}" required>
    </div>
    @if ($errors->has('item_code'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('item_code') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="item_name">Item Name</label>
      <input type="text" class="form-control" name="item_name" value="{{$barang->item_name}}" required>
    </div>
    @if ($errors->has('item_name'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('item_name') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="qty">Quantity</label>
      <input type="number" class="form-control" name="qty" value="{{$barang->qty}}" required>
    </div>
    @if ($errors->has('qty'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('qty') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="vendor_type">Vendor Type</label>
      <input type="number" class="form-control" name="vendor_type" value="{{$barang->vendor_type}}"  required>
    </div>
    @if ($errors->has('vendor_type'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('qty') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="vendor_code">Vendor Code</label>
      <input type="text" class="form-control" name="vendor_code" value="{{$barang->vendor_code}}" required>
    </div>
    @if ($errors->has('vendor_code'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('vendor_code') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="vendor_name">Vendor Name</label>
      <input type="text" class="form-control" name="vendor_name" value="{{$barang->vendor_name}}" required>
    </div>
    @if ($errors->has('vendor_name'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('vendor_name') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="stock_date">Stock Date</label>
      <input type="date" class="form-control" name="stock_date" value="{{$barang->stock_date}}" required>
    </div>
    @if ($errors->has('stock_date'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('stock_date') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="order_day">Order Day</label>
      <input type="number" class="form-control" name="order_day" value="{{$barang->order_day}}" required>
    </div>
    @if ($errors->has('order_day'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('order_day') }}.
    </div>
    @endif
</div>
<div class="col-md-6" style="float: right;">
    <div class="form-group">
      <label for="lead_time">Lead Time</label>
      <input type="number" class="form-control" name="lead_time" value="{{$barang->lead_time}}" required>
    </div>
    @if ($errors->has('lead_time'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('lead_time') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="typology">Typology</label>
      <input type="text" class="form-control" name="typology" value="{{$barang->typology}}" required>
    </div>
    @if ($errors->has('typology'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('typology') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="avg_sales_n">AVG Sales N</label>
      <input type="number" class="form-control" name="avg_sales_n" step=".01" value="{{$barang->avg_sales_n}}" required>
    </div>
    @if ($errors->has('avg_sales_n'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('avg_sales_n') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="avg_sales_p">AVG Sales P</label>
      <input type="number" class="form-control" name="avg_sales_p" step=".01" value="{{$barang->avg_sales_p}}" required>
    </div>
    @if ($errors->has('avg_sales_p'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('avg_sales_p') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="stock_day">Stock Day</label>
      <input type="number" class="form-control" name="stock_day" value="{{$barang->stock_day}}" required>
    </div>
    @if ($errors->has('stock_day'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('stock_day') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="tg_capacity">TG Capacity (pcs)</label>
      <input type="number" class="form-control" name="tg_capacity" value="{{$barang->tg_capacity}}" required>
    </div>
    @if ($errors->has('tg_capacity'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('tg_capacity') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="boost_sales">Boost Sales (%)</label>
      <input type="number" class="form-control" name="boost_sales" value="{{$barang->boost_sales}}" required>
    </div>
    @if ($errors->has('boost_sales'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('boost_sales') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="price">Price</label>
      <input type="number" class="form-control" name="price" value="{{$barang->price}}" step=".01" required>
    </div>
    @if ($errors->has('price'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('price') }}.
    </div>
    @endif

    <div class="form-group">
      <label for="max_order">Max Order</label>
      <input type="number" class="form-control" name="max_order" value="{{$barang->max_order}}" required>
    </div>
    @if ($errors->has('max_order'))
    <div class="alert alert-danger">
    <strong>Error!</strong> {{ $errors->first('max_order') }}.
    </div>
    @endif
</div>
<div style="margin-bottom: 20px;">                                                  
    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>&nbsp;Ubah data</button>
  </div><br>
</form>
</div>
@endsection