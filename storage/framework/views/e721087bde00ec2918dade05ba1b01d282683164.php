<?php $__env->startSection('title'); ?>
    Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <section class="user-profile-page">
        <div class="row p-0-135 c-mr-0 gutters-sm ">
            <div class="col-md-4">
                <div class="card ">
                    <div class="card-body profile-page-full">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src=" <?php echo e(asset($customerInfo -> customer_image)); ?>" alt="Admin" class="rounded-circle img-fluid img-thumbnail" >
                            <div class="mt-3">
                                <h4 class="text-capitalize"> <?php echo e($customerInfo -> customer_name); ?></h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">
                                    <i class="fa-brands fa-facebook"></i>
                                    <i class="fa-brands fa-twitter"></i>
                                    <i class="fa-brands fa-instagram"></i>
                                </p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                        <hr class="my-4">

                        <ul class="list-group list-group-flush">
                            <a href="" class="list-group-item list-group-item-action "> <i class="fa-solid fa-book me-5"></i> Books </a>
                            <a href="<?php echo e(route('edit-customer-profile', ['id' => $customerInfo -> id])); ?>" class="list-group-item list-group-item-action"><i class="fa fa-edit me-5"></i> Edit profile</a>
                            <a href="" class="list-group-item list-group-item-action"><i class="fa fa-heart me-5"></i>Wishlist</a>
                            <a href="<?php echo e(route('customer-logout')); ?>" class="list-group-item list-group-item-action"><i class="fa-solid fa-right-from-bracket me-5"></i>Sign Out</a>
                            <a href=""></a>
                        </ul>
                    </div>
                </div>

            </div>

            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value=" <?php echo e($customerInfo -> customer_name); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value=" <?php echo e($customerInfo -> customer_email); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="<?php echo e($customerInfo -> customer_phone); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="text" class="form-control" value="  <?php echo e($customerInfo -> address); ?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Image</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <input type="file" class="form-control" >
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-9 text-secondary">
                                <input type="button" class="btn btn-primary px-4" value="Save Changes">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/customer/edit-customer-profile.blade.php ENDPATH**/ ?>