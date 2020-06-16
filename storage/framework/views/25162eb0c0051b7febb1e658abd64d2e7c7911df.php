<?php $__env->startSection('content'); ?>
<div class="container">
    
    <div class="row">
        <div class="col-md-12">
            <h1>
                Edit Car
                <a href="<?php echo e(route('home')); ?>" style="float:right;" class="btn btn-primary pull-right">Go Back</a>
            </h1>

        </div>
    </div>
    <form method="post" action="<?php echo e(route('update')); ?>" enctype="application/x-www-form-urlencoded">
        <input type="hidden" name="id" value="<?php echo e($car->id); ?>">
        <?php echo e(csrf_field()); ?>

    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Seller Name</label>
            <input type="text" name="car_seller" value="<?php echo e($car->car_seller); ?>" class="form-control" id="validationDefault01" placeholder="Car Seller Name" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Seller Address</label>
            <input type="text" name="seller_address" value="<?php echo e($car->seller_address); ?>" class="form-control" id="validationDefault02" placeholder="Seller Address" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Seller Contact No</label>
            <input type="text" name="seller_contact_no" value="<?php echo e($car->seller_contact_no); ?>" class="form-control" id="validationDefaultUsername" placeholder="Seller Contact No" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Car Price</label>
            <input type="text" name="car_price" value="<?php echo e($car->car_price); ?>" class="form-control" id="validationDefault01" placeholder="Car Price" value="Car Price" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Car Engine</label>
            <input type="text" name="car_engine" value="<?php echo e($car->car_engine); ?>" class="form-control" id="validationDefault02" placeholder="Car Model" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Year</label>
            <input type="text" name="year" value="<?php echo e($car->year); ?>" class="form-control" id="validationDefaultUsername" placeholder="Year" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <label for="validationDefault01">Color</label>
            <input type="text" name="color" value="<?php echo e($car->color); ?>" class="form-control" id="validationDefault01" placeholder="Color" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefault02">Maker</label>
            <input type="text" name="maker" value="<?php echo e($car->maker); ?>" class="form-control" id="validationDefault02" placeholder="Maker" value="" required>
        </div>
        <div class="col-md-4">
            <label for="validationDefaultUsername">Meter Reading</label>
            <input type="text" name="reading" value="<?php echo e($car->reading); ?>" class="form-control" id="validationDefaultUsername" placeholder="Meter Reading" aria-describedby="inputGroupPrepend2" required>
        </div>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-4">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </div>
    </form>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/haroon/Desktop/workplace/carcrud/resources/views/edit.blade.php ENDPATH**/ ?>