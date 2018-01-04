@extends('layouts.app')
@section('main-content')
@section('title', 'Home')
<div class="container col-lg-12">
  <h2>Calculation Order Form</h2>
  <hr>
@if(Session::has('success_msg'))
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ Session::get('success_msg') }}</strong>
    </div>
@elseif(Session::has('error_msg'))
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{ Session::get('error_msg') }}</strong>
    </div>
@endif
  <div style="float: right;margin-bottom: 20px;">                                                  
    <a href="{{route('barang.create')}}"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;Tambah data</button></a>
  </div><br>
  <div class="table-responsive" style="margin-bottom: 100px;">
                            <table id="example" class="display table" style="width: 100%;cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Site Code</th>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Vendor Type</th>
                                        <th>Vendor Code</th>
                                        <th>Vendor Name</th>
                                        <th>Stock Date</th>
                                        <th>Order Day</th>
                                        <th>Lead Time</th>
                                        <th>Typology</th>
                                        <th>AVG Sales N</th>
                                        <th>AVG Sales P</th>
                                        <th>Stock Day</th>
                                        <th>TG Capacity (pcs)</th>
                                        <th>Boost Sales (%)</th>
                                        <th>Price</th>
                                        <th>Max Order</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Site Code</th>
                                        <th>Item Code</th>
                                        <th>Item Name</th>
                                        <th>Quantity</th>
                                        <th>Vendor Type</th>
                                        <th>Vendor Code</th>
                                        <th>Vendor Name</th>
                                        <th>Stock Date</th>
                                        <th>Order Day</th>
                                        <th>Lead Time</th>
                                        <th>Typology</th>
                                        <th>AVG Sales N</th>
                                        <th>AVG Sales P</th>
                                        <th>Stock Day</th>
                                        <th>TG Capacity (pcs)</th>
                                        <th>Boost Sales (%)</th>
                                        <th>Price</th>
                                        <th>Max Order</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>

                                 @foreach($barang as $x)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $x->site_code }}</td>
                                        <td>{{ $x->item_code }}</td>
                                        <td>{{ $x->item_name }}</td>
                                        <td>{{ $x->qty }}</td>
                                        <td>{{ $x->vendor_type }}</td>
                                        <td>{{ $x->vendor_code }}</td>
                                        <td>{{ $x->vendor_name }}</td>
                                        <td>{{ $x->stock_date }}</td>
                                        <td>{{ $x->order_day }}</td>
                                        <td>{{ $x->lead_time }}</td>
                                        <td>{{ $x->typology }}</td>
                                        <td>{{ $x->avg_sales_n }}</td>
                                        <td>{{ $x->avg_sales_p }}</td>
                                        <td>{{ $x->stock_day }}</td>
                                        <td>{{ $x->tg_capacity }}</td>
                                        <td>{{ $x->boost_sales }}</td>
                                        <td>{{ $x->price }}</td>
                                        <td>{{ $x->max_order }}</td>
                                        <td><a href="{{ route('edit',$x->id) }}"><button class="btn btn-primary btn-block btn-md"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button></a></td>
                                <td>
                                 <form id="delete-form-{{ $x->id }}" method="post" action="{{ route('destroy',$x->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                </form>
                                 <button class="btn btn-danger btn-block btn-md" data-toggle="modal" data-target="#myModal{!! $x->id!!}"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="myModal{!! $x->id!!}" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Anda yakin ingin menghapus <strong>{{ $x->item_name }}</strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="" onclick="event.preventDefault();document.getElementById('delete-form-{{ $x->id }}').submit();"><button type="submit" class="btn btn-danger">Hapus</button></a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    <!-- END Modal -->

                                </td>
                                    </tr>
                                    
                                    
                                    @endforeach
                                </tbody>
                            </table>  
                        </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection