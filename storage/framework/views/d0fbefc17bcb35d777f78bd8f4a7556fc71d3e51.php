<?php $__env->startSection('title'); ?>
    Manage Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Products</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <h6 class="mb-0 md-6 text-uppercase">All Product Info </h6> <span class="bg-light-success text-capitalize"><?php echo e(session('message')); ?></span>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-middle table-hover" style="width:100%">
                    <thead class="table-secondary">
                    <tr>
                        <th>SL No.</th>
                        <th>Book Name</th>
                        <th>Image</th>
                        <th>Author</th>
                        <th>Category</th>
                        <th>Publisher</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <?php
                               $title = implode(' ', array_slice(explode(' ', $product -> book_title), 0, 3));
                            ?>
                            <td ><?php echo e($title); ?></td>
                            <td><img src="<?php echo e(asset($product -> book_image)); ?>" class="rounded-circle" width="44" height="44" alt=""></td>
                            <td><?php echo e($product -> author_name); ?></td>
                            <td><?php echo e(substr($product -> category_name , 0, 20)); ?></td>
                            <?php
                                $Publisher = implode(' ', array_slice(explode(' ', $product -> publisher_name), 0, 1));
                            ?>
                            <td><?php echo e($Publisher); ?></td>
                            <td><?php echo e($product -> book_price); ?></td>
                            <?php if($product -> status): ?>
                                <td><span class="badge bg-light-success text-success w-100">Active</span></td>
                            <?php else: ?>
                                <td><span class="badge bg-light-warning text-danger w-100">Inactive</span></td>
                            <?php endif; ?>
                            <td>
                                <div class="actions d-flex">
                                    <a href="<?php echo e(route('edit-product', ['id' =>  $product -> id ])); ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>&nbsp;

                                    <form action="<?php echo e(route('delete-product')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you Sure to delete this author info?')"><i class="bi bi-trash-fill"></i></button>&nbsp;
                                    </form>

                                    <?php if($product -> status): ?>
                                        <a href="<?php echo e(route('product-status', ['id' =>  $product -> id ])); ?>" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-check"></i> Published</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('product-status', ['id' =>  $product -> id ])); ?>" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-circle-xmark"></i> Publish</a>
                                    <?php endif; ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </table>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/admin/product/manage-product.blade.php ENDPATH**/ ?>