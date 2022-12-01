<?php $__env->startSection('title'); ?>
    Manage Author
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Categories</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Manage Author</li>
                </ol>
            </nav>
        </div>
    </div>

    <!--end breadcrumb-->
    <h6 class="mb-0 md-6 text-uppercase">All Author Info </h6> <span class="bg-light-success text-capitalize"><?php echo e(session('message')); ?></span>
    <hr/>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table align-middle table-hover" style="width:100%">
                    <thead class="table-secondary">
                    <tr>
                        <th>SL No.</th>
                        <th>Author Name</th>
                        <th>Image</th>
                        <th>Author Biography</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                    ?>
                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($i++); ?></td>
                            <td><?php echo e($author -> author_name); ?></td>
                            <td><img src="<?php echo e(asset($author -> author_image)); ?>" class="rounded-circle" width="44" height="44" alt=""></td>
                            <td><?php echo substr($author -> author_biography, 0, 50); ?></td>
                            <?php if($author -> status): ?>
                                <td><span class="badge bg-light-success text-success w-100">Active</span></td>
                            <?php else: ?>
                                <td><span class="badge bg-light-warning text-danger w-100">Inactive</span></td>
                            <?php endif; ?>
                            <td>
                                <div class="actions d-flex">
                                    <a href="<?php echo e(route('edit-author', ['id' =>  $author -> id ])); ?>" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-fill"></i> Edit</a>&nbsp;

                                    <form action="<?php echo e(route('delete-author')); ?>" method="post">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="author_id" value="<?php echo e($author->id); ?>">
                                        <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you Sure to delete this author info?')"><i class="bi bi-trash-fill"></i> Delete</button>&nbsp;
                                    </form>

                                    <?php if($author -> status): ?>
                                        <a href="<?php echo e(route('author-status', ['id' =>  $author -> id ])); ?>" class="btn btn-sm btn-outline-success"><i class="fa-solid fa-circle-check"></i> Published</a>
                                    <?php else: ?>
                                        <a href="<?php echo e(route('author-status', ['id' =>  $author -> id ])); ?>" class="btn btn-sm btn-outline-warning"><i class="fa-regular fa-circle-xmark"></i> Publish</a>
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

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/admin/author/manage-author.blade.php ENDPATH**/ ?>