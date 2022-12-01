<?php $__env->startSection('title'); ?>
    category books
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="author-books-header mt-3 p-0-135 ">
        <div class="row px-3 py-3 border bg-light c-mr-0">
            <div class="card card-body col-md-12 mt-2">
                <h4 class="text-center"><?php echo e($publisherInfo-> publisher_name); ?>'s Books</h4>
            </div>
        </div>
    </section>
    <section id="team" class="p-0-135 mt-2 author-books section-padding">
        <div class="row c-mr-0  bg-light pt-3">

            <?php $__currentLoopData = $publisherBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                ?>
                <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="author-books-info bg-white">
                        <div class="team_img">
                            <img src="<?php echo e(asset($book->book_image)); ?>" alt="team-image">
                            <ul class="social">
                                <li><a href="<?php echo e(route('product-details',['id' => $book->id ])); ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="book-here-content">
                            <h3 class="title"><a href="<?php echo e(route('product-details',['id' => $book->id ])); ?>"><?php echo e($bookTitle); ?></a></h3>
                            <span class="price"> ৳<?php echo e($book->book_price); ?> <span> <strike>৳<?php echo e($book->book_price + 10); ?></strike></span></span>
                        </div>
                    </div>
                </div><!--- END COL -->
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
        <!--- END ROW -->
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/publisher/publisher-book.blade.php ENDPATH**/ ?>