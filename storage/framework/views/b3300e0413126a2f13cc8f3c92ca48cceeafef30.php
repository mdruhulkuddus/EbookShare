<?php $__env->startSection('title'); ?>
    Add Publisher
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Publisher</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Add Publisher</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Add New Publisher</h5> <span class="bg-light-success text-capitalize"><?php echo e(session('message')); ?></span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="<?php echo e(route('new-publisher')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="col-12">
                                <label class="form-label">Publisher Title</label>
                                <input type="text" class="form-control" name="publisher_name" placeholder="Publisher Name" required>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Publisher Logo</label>
                                <input class="form-control" type="file" name="publisher_image">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Publisher Biography</label>
                                <textarea class="form-control" name="publisher_biography" placeholder="Write Publisher Bio" rows="4" cols="4" id="editor1"></textarea>
                            </div>

                            <div class="col-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="1" name="status" id="flexCheckDefault" checked>
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Publish on website
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary px-4">Save Publisher Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
<?php $__env->stopSection(); ?>


<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/admin/publisher/add-publisher.blade.php ENDPATH**/ ?>