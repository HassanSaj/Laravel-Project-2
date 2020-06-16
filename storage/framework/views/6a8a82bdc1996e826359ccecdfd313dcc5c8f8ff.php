<?php $__env->startSection('content'); ?>
    <div class="container" style="background-color: #fafafa; border-radius: 20px;">
        <h3 class="align-middle" style="padding-top: 20px;">Cars Data</h3>

        <div class="row">
            <div class="col-md-12">
                <a href="<?php echo e(route('create')); ?>" class="btn btn-primary float-lg-right"><i class="fa fa-plus fa-1x"></i> Add Car</a>
            </div>
        </div>

        <form method="post" action="<?php echo e(route('search')); ?>" enctype="application/x-www-form-urlencoded">
            <?php echo e(csrf_field()); ?>

            <div class="row">
                <div class="col-md-4">
                    <label for="validationDefault01">Car Seller Name</label>
                    <input type="text" name="car_seller" class="form-control" id="validationDefault01" placeholder="Car Seller Name" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02">Car Engine</label>
                    <input type="text" name="car_engine" class="form-control" id="validationDefault02" placeholder="Car Engine" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefaultUsername">Year</label>
                    <input type="text" name="year" class="form-control" id="validationDefaultUsername" placeholder="Year" aria-describedby="inputGroupPrepend2">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <label for="validationDefault01">Car Price</label>
                    <input type="text" name="car_price" class="form-control" id="validationDefault01" placeholder="Car Price" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault01">Color</label>
                    <input type="text" name="color" class="form-control" id="validationDefault01" placeholder="Color" value="">
                </div>
                <div class="col-md-4">
                    <label for="validationDefault02">Maker</label>
                    <input type="text" name="maker" class="form-control" id="validationDefault02" placeholder="Maker" value="">
                </div>
            </div>
            <br/>
            <div class="row">
                <div class="col-md-4">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
        <br/>
        <div class="row justify-content-center">
            
            
            

            
            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert"> <i class="fa fa-thumbs-up fa-2x"></i>
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>

            
            
            
            
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Seller Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Contact No</th>
                    <th scope="col">Price</th>
                    <th scope="col">Engine</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Maker</th>
                    <th scope="col">Meter Reading</th>
                    <th scope="col" style="width: 15%;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th scope="row"><?php echo e($car->id); ?></th>
                        <td><?php echo e($car->car_seller); ?></td>
                        <td><?php echo e($car->seller_address); ?></td>
                        <td><?php echo e($car->seller_contact_no); ?></td>
                        <td><?php echo e($car->car_price); ?></td>
                        <td><?php echo e($car->car_engine); ?></td>
                        <td><?php echo e($car->year); ?></td>
                        <td><?php echo e($car->color); ?></td>
                        <td><?php echo e($car->maker); ?></td>
                        <td><?php echo e($car->reading); ?></td>
                        <td>
                            <button class="btn btn-warning"><a style="color: green;" href="<?php echo e(route('edit',$car->id)); ?>"><i class="fa fa-edit fa-1x"></i></a></button>
                            <button class="btn btn-danger" onclick="alertFunc()"><a href="<?php echo e(route('delete',$car->id)); ?>"><i class="fa fa-trash fa-1x"></i></a></button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>

    </div>
<script>
function alertFunc(){
    var con = confirm('Are you want to delete');
    if(con == true){
        return true;
    }
    else{
        return false;
    }
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp2\Main xampp\htdocs\MainRepo1\resources\views/home.blade.php ENDPATH**/ ?>