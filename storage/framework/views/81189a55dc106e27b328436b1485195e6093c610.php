<?php $__env->startSection('main-content'); ?>
<?php $__env->startSection('title', 'Tambah Data'); ?>
<div class="container col-lg-12">
  <h2>Tambah Data</h2>
  <hr>


<form role="form" action="<?php echo e(route('barang.store')); ?>" method="post">
<?php echo e(csrf_field()); ?>

<div class="col-md-6" style="float: left;">
  <div class="form-group">
	  <label for="site_code">Site Code</label>
	  <input type="text" class="form-control" name="site_code" required>
	</div>
	<?php if($errors->has('site_code')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('site_code')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="item_code">Item Code</label>
	  <input type="text" class="form-control" name="item_code" required>
	</div>
	<?php if($errors->has('item_code')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('item_code')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="item_name">Item Name</label>
	  <input type="text" class="form-control" name="item_name" required>
	</div>
	<?php if($errors->has('item_name')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('item_name')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="qty">Quantity</label>
	  <input type="number" class="form-control" name="qty" required>
	</div>
	<?php if($errors->has('qty')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('qty')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="vendor_type">Vendor Type</label>
	  <input type="number" class="form-control" name="vendor_type" required>
	</div>
	<?php if($errors->has('vendor_type')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('qty')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="vendor_code">Vendor Code</label>
	  <input type="text" class="form-control" name="vendor_code" required>
	</div>
	<?php if($errors->has('vendor_code')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('vendor_code')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="vendor_name">Vendor Name</label>
	  <input type="text" class="form-control" name="vendor_name" required>
	</div>
	<?php if($errors->has('vendor_name')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('vendor_name')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="stock_date">Stock Date</label>
	  <input type="date" class="form-control" name="stock_date" required>
	</div>
	<?php if($errors->has('stock_date')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('stock_date')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="order_day">Order Day</label>
	  <input type="number" class="form-control" name="order_day" required>
	</div>
	<?php if($errors->has('order_day')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('order_day')); ?>.
    </div>
    <?php endif; ?>
</div>
<div class="col-md-6" style="float: right;">
	<div class="form-group">
	  <label for="lead_time">Lead Time</label>
	  <input type="number" class="form-control" name="lead_time" required>
	</div>
	<?php if($errors->has('lead_time')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('lead_time')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="typology">Typology</label>
	  <input type="text" class="form-control" name="typology" required>
	</div>
	<?php if($errors->has('typology')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('typology')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="avg_sales_n">AVG Sales N</label>
	  <input type="number" class="form-control" name="avg_sales_n" step=".01" required>
	</div>
	<?php if($errors->has('avg_sales_n')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('avg_sales_n')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="avg_sales_p">AVG Sales P</label>
	  <input type="number" class="form-control" name="avg_sales_p" step=".01" required>
	</div>
	<?php if($errors->has('avg_sales_p')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('avg_sales_p')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="stock_day">Stock Day</label>
	  <input type="number" class="form-control" name="stock_day" required>
	</div>
	<?php if($errors->has('stock_day')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('stock_day')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="tg_capacity">TG Capacity (pcs)</label>
	  <input type="number" class="form-control" name="tg_capacity" required>
	</div>
	<?php if($errors->has('tg_capacity')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('tg_capacity')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="boost_sales">Boost Sales (%)</label>
	  <input type="number" class="form-control" name="boost_sales" required>
	</div>
	<?php if($errors->has('boost_sales')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('boost_sales')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="price">Price</label>
	  <input type="number" class="form-control" name="price" step=".01" required>
	</div>
	<?php if($errors->has('price')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('price')); ?>.
    </div>
    <?php endif; ?>

	<div class="form-group">
	  <label for="max_order">Max Order</label>
	  <input type="number" class="form-control" name="max_order" required>
	</div>
	<?php if($errors->has('max_order')): ?>
    <div class="alert alert-danger">
    <strong>Error!</strong> <?php echo e($errors->first('max_order')); ?>.
    </div>
    <?php endif; ?>
</div>
<div style="margin-bottom: 20px;">                                                  
    <button type="submit" class="btn btn-primary btn-lg btn-block"><i class="fa fa-plus-square-o fa-lg" aria-hidden="true"></i>&nbsp;Tambah data</button>
  </div><br>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>