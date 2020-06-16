<?php $__env->startSection('content'); ?>
<div class="container" style="background-color: #fafafa; border-radius: 20px;">
    
    <div class="row">
        <div class="col-md-12">
        <h1 style="padding-top: 20px; font-family:inherit;">
        Add New Car
        <a href="<?php echo e(route('home')); ?>" style="float:right;" class="btn btn-primary pull-right"><i class="fa fa-arrow-left"></i>  Back</a>
        </h1>

        </div>
    </div>
    <form method="post" action="<?php echo e(route('store')); ?>" enctype="application/x-www-form-urlencoded">
        <?php echo e(csrf_field()); ?>

    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Seller Name</label>
            <input type="text" name="car_seller" class="form-control" id="validationDefault01" placeholder="Car Seller Name" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Seller Address</label>
            <input type="text" name="seller_address" class="form-control" id="validationDefault02" placeholder="Seller Address" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Seller Contact No</label>
            <input type="text" name="seller_contact_no" class="form-control" id="validationDefaultUsername" placeholder="Seller Contact No" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Price</label>
            <input type="text" name="car_price" class="form-control" id="validationDefault01" placeholder="Car Price" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Car Engine</label>
            <input type="text" name="car_engine" class="form-control" id="validationDefault02" placeholder="Car Engine" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Year</label>
            <input type="text" name="year" class="form-control" id="validationDefaultUsername" placeholder="Year" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Color</label>
            <input type="text" name="color" class="form-control" id="validationDefault01" placeholder="Color" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Maker</label>
            <input type="text" name="maker" class="form-control" id="validationDefault02" placeholder="Maker" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Meter Reading</label>
            <input type="text" name="reading" class="form-control" id="validationDefaultUsername" placeholder="Meter Reading" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4" style="padding-bottom: 20px;">
            <button class="btn btn-success" type="submit">Submit</button>
        </div>
    </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\carscrud\resources\views/create.blade.php ENDPATH**/ ?>