<?php $__env->startSection('title'); ?>
    Add Product
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Product</div>
        <div class="ps-3">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 p-0">
                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header py-3 bg-transparent">
                    <h5 class="mb-0">Edit New Product</h5> <span class="bg-light-success text-capitalize"><?php echo e(session('message')); ?></span>
                </div>
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <form class="row g-3" action="<?php echo e(route('update-product')); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="col-12">
                                <label class="form-label">Product title</label>
                                <input type="text" class="form-control" name="book_title" value="<?php echo e($product->book_title); ?>">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Author Name</label>
                                <select class="form-select" name="book_author_id">
                                    <option value="<?php echo e($product_author->id); ?>"><?php echo e($product_author->author_name); ?></option>
                                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($author->id); ?>"><?php echo e($author->author_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Category/Subject</label>
                                <select class="form-select" name="book_category_id">
                                    <option value="<?php echo e($product_category->id); ?>"><?php echo e($product_category->category_name); ?></option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->category_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Publisher</label>
                                <select class="form-select" name="book_publisher_id">
                                    <option value="<?php echo e($product_publisher->id); ?>"><?php echo e($product_publisher->publisher_name); ?></option>
                                <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($publisher->id); ?>"><?php echo e($publisher->publisher_name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Edition</label>
                                <select class="form-select" name="edition">
                                    <option value="<?php echo e($product->edition); ?>"><?php echo e($product->edition); ?></option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Language</label>
                                <select class="form-select" name="language">
                                    <option value="<?php echo e($product->language); ?>"><?php echo e($product->language); ?></option>
                                    <option value="Bangla">Bangla</option>
                                    <option value="English">English</option>
                                    <option value="Arabic">Arabic</option>
                                    <option value="Bangla and English">Bangla and English</option>
                                    <option value="Bangla and Arabic">Bangla and Arabic</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Price</label>
                                <input type="number" class="form-control" name="book_price" value="<?php echo e($product->book_price); ?>">
                            </div>
                            <div class="col-12 col-md-6">
                                <label class="form-label">Number Of Page</label>
                                <input type="number" class="form-control" name="pages" value="<?php echo e($product->pages); ?>">
                            </div>

                            <div class="col-9">
                                <label class="form-label">Images</label>
                                <input class="form-control" type="file" name="book_image">
                            </div>
                            <div class="col-3">
                                <img src="<?php echo e(asset($product->book_image)); ?>" alt="img" height="70" width="60" class="img-circle">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Book Summary or description</label>
                                <textarea class="form-control" name="book_summary" rows="4" cols="4" id="editor1"><?php echo e($product->book_summary); ?></textarea>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Tags</label>
                                <?php $tags = "";
                                    if($product->tag)
                                    $tags = explode(',',$product->tag)
                                ?>

                                <select class="multiple-select" name="tag[]" data-placeholder="Choose anything" multiple="multiple">
                                    <?php if($tags): ?>
                                    <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oneTag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($oneTag); ?>" selected><?php echo e($oneTag); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>



                                    <option value="Best Seller" >Best Seller</option>
                                    <option value="Popular" >Popular</option>
                                    <option value="Motivational" >Motivational</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <input type="hidden" value="<?php echo e($product -> id); ?>" name="product_id">
                                <button class="btn btn-primary px-4">Update Book Info</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--end row-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/admin/product/edit-product.blade.php ENDPATH**/ ?>