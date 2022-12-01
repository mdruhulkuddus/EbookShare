<?php $__env->startSection('title'); ?>
    login
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!--start content-->
<section class="authentication-login">
        <div class="authentication-card mt-5">
            <div class="card shadow rounded-0 border">
                <div class="row g-0">
                    <div class="col-md-6 bg-login d-flex align-items-center justify-content-center">
                        <img src="<?php echo e(asset('frontEndAsset/image/login/login-img.jpg')); ?>" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title">Sign In</h5>
                            <?php if(session('message')): ?>
                            <span><?php echo e(session('message')); ?></span>
                                <hr>
                            <?php else: ?>
                            <p class="card-text mb-3 login-label-text-op">Join and boost your knowledge!</p>
                            <?php endif; ?>
                            <form class="form-body" action="<?php echo e(route('customer-login-check')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="row g-3">
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email or Phone</label>
                                        <div class="ms-auto position-relative">
                                            <input type="text" name="user_name" class="form-control radius-30 radius-30 ps-5 login-input" id="inputEmailAddress" placeholder="Enter email or phone">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Enter Password</label>
                                        <div class="ms-auto position-relative">
                                            <input type="password" name="user_password" class="form-control radius-30 ps-5 login-input" id="inputChoosePassword"  placeholder="Enter Password">
                                        </div>
                                    </div>








                                    <div class="col-12">
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-primary radius-30 login-input">Sign In</button>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <p class="mb-0 login-label-text-op">Don't have an account yet? <a href="<?php echo e(route('customer-signup')); ?>">Sign up here</a></p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

<!--end page main-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/customer/customer-login.blade.php ENDPATH**/ ?>