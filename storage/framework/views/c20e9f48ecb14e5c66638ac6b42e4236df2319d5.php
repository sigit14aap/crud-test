<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', 'Home'); ?>
<div class="container col-lg-12">
  <h2>Calculation Order Form</h2>
  <hr>
<?php if(Session::has('success_msg')): ?>
    <div class="alert alert-success alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong><?php echo e(Session::get('success_msg')); ?></strong>
    </div>
<?php elseif(Session::has('error_msg')): ?>
    <div class="alert alert-danger alert-dismissable">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong><?php echo e(Session::get('error_msg')); ?></strong>
    </div>
<?php endif; ?>
  <div style="float: right;margin-bottom: 20px;">                                                  
    <a href="<?php echo e(route('barang.create')); ?>"><button type="button" class="btn btn-primary btn-lg"><i class="fa fa-plus-square-o" aria-hidden="true"></i>&nbsp;Tambah data</button></a>
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

                                 <?php $__currentLoopData = $barang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $x): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->index + 1); ?></td>
                                        <td><?php echo e($x->site_code); ?></td>
                                        <td><?php echo e($x->item_code); ?></td>
                                        <td><?php echo e($x->item_name); ?></td>
                                        <td><?php echo e($x->qty); ?></td>
                                        <td><?php echo e($x->vendor_type); ?></td>
                                        <td><?php echo e($x->vendor_code); ?></td>
                                        <td><?php echo e($x->vendor_name); ?></td>
                                        <td><?php echo e($x->stock_date); ?></td>
                                        <td><?php echo e($x->order_day); ?></td>
                                        <td><?php echo e($x->lead_time); ?></td>
                                        <td><?php echo e($x->typology); ?></td>
                                        <td><?php echo e($x->avg_sales_n); ?></td>
                                        <td><?php echo e($x->avg_sales_p); ?></td>
                                        <td><?php echo e($x->stock_day); ?></td>
                                        <td><?php echo e($x->tg_capacity); ?></td>
                                        <td><?php echo e($x->boost_sales); ?></td>
                                        <td><?php echo e($x->price); ?></td>
                                        <td><?php echo e($x->max_order); ?></td>
                                        <td><a href="<?php echo e(route('edit',$x->id)); ?>"><button class="btn btn-primary btn-block btn-md"><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></button></a></td>
                                <td>
                                 <form id="delete-form-<?php echo e($x->id); ?>" method="post" action="<?php echo e(route('destroy',$x->id)); ?>">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                                </form>
                                 <button class="btn btn-danger btn-block btn-md" data-toggle="modal" data-target="#myModal<?php echo $x->id; ?>"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                                  <!-- Modal -->
                                    <div class="modal fade" id="myModal<?php echo $x->id; ?>" role="dialog">
                                        <div class="modal-dialog">
                                        
                                          <!-- Modal content-->
                                          <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Hapus</h4>
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            </div>
                                            <div class="modal-body">
                                              <p>Anda yakin ingin menghapus <strong><?php echo e($x->item_name); ?></strong>?</p>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="" onclick="event.preventDefault();document.getElementById('delete-form-<?php echo e($x->id); ?>').submit();"><button type="submit" class="btn btn-danger">Hapus</button></a>
                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            </div>
                                          </div>
                                          
                                        </div>
                                      </div>
                                    <!-- END Modal -->

                                </td>
                                    </tr>
                                    
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>  
                        </div>
</div>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>