<?php
    use App\Models\Product;
?>

<?php $__env->startSection('title'); ?>
    Categories
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<!--*************** Slider ******************-->
<section class="genres-banner p-0-135 mt-5">
    <div class="row c-mr-0">
        <div class="col-md-12">
            <img src="<?php echo e('frontEndAsset'); ?>/image/genres/banner1.jpg" class="img-fluid img-thumbnail" style="width: 100%; height: 15rem">
        </div>
    </div>
</section>

<!--*************** Subjects / Genres ******************-->

<!--*************** Slider ******************-->
<section class="genres-search p-0-135 ">
    <div class="row c-mr-0">
        <div class="col-md-12">
            <hr>
            <div class="row height-s-box d-flex justify-content-center align-items-center">
                <div class="col-md-8">
                    <div class="input-group">
                        <i class="fa fa-search search-icon-g"></i>
                        <input type="text" class="form-control gen-s-input-text" placeholder="Search your favourite subjects or categories">
                        <div class="input-group-append">
                            <button class="btn btn-outline-warning btn-lg btn-gen-s" type="button"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
</section>

<!--*************** author bio ******************-->
<section class="author-bio p-0-135 ">
    <div class="row c-mr-0 bg-light border pb-5">

        <div class="col-md-12 text-center mt-2">
            <div class="section-title">
                <h3 class="title">Book Categories</h3>
            </div>
        </div>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <div class="carbon-example flex-wrapper">
                <?php if($category->category_image): ?>
                <img src="<?php echo e($category->category_image); ?>" alt="img">
                <?php else: ?>
                    <img src="<?php echo e('frontEndAsset/image/genres/general.png'); ?>" alt="img">
                <?php endif; ?>
                <div class=" inner-wrapper">
                    <?php
                        $word = Str::of($category->category_name)->wordCount();
                        $productCountByCategory = Product::productCountByCategory($category->id);
                    ?>
                    <?php if($word <= 3): ?>
                    <p><a href="<?php echo e(route('category-books',['category_id' => $category->id])); ?>"><?php echo e($category->category_name); ?></a> </p>
                    <?php else: ?>
                        <p><a style="font-size: 15px" href="<?php echo e(route('category-books',['category_id' => $category->id])); ?>"><?php echo e($category->category_name); ?> </a></p>
                    <?php endif; ?>
                    <p class="fine-print"><i class="fa fa-book-open"></i>&nbsp; <?php echo e($productCountByCategory); ?> books</p>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/category/category.blade.php ENDPATH**/ ?>