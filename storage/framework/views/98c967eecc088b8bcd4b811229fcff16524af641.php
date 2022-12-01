<?php
$i = 0;
?>

<?php $__env->startSection('title'); ?>
    all books
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <section class="all-category-display p-0-135 mt-5">
        <div class="row c-mr-0">
            <div class="col-md-3">
                <div class="row col-md-12">
                    <label class="form-control category-all-title">Subjects</label>
                    <div class="category-all-check border bg-light" style="">
                        <ul class="list-group" style="">
                            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('features-books',['id' => $category->id, 'feature' => 'category'])); ?>">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        <?php echo e($category->category_name); ?>

                                    </li>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="row col-md-12 mt-2">
                    <label class="form-control category-all-title">Publishers</label>
                    <div class="category-all-check border" style="">
                        <ul class="list-group" style="">
                            <?php $__currentLoopData = $publishers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $publisher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('features-books',['id' => $publisher->id, 'feature' => 'publisher'])); ?>">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        <?php echo e($publisher->publisher_name); ?>

                                    </li>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
                <div class="row col-md-12 mt-2">
                    <label class="form-control category-all-title">Authors</label>
                    <div class="category-all-check border" style="">
                        <ul class="list-group" style="">
                            <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e(route('features-books',['id' => $author->id, 'feature' => 'author'])); ?>">
                                    <li class="list-group-item">
                                        <input class="form-check-input me-1" type="checkbox">
                                        <?php echo e($author->author_name); ?>

                                    </li>
                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-9">
                <div class="row c-mr-0  bg-light pt-3">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 2));
                            $i++;
                        ?>








                        <div class="col-md-3 col-sm-6 col-xs-12 text-center" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                            <div class="author-books-info bg-white">
                                <div class="team_img">
                                    <img style="height: 200px" src="<?php echo e(asset($book->book_image)); ?>" alt="book-image">
                                    <ul class="social">
                                        <li><a href="<?php echo e(route('product-details',['id' => $book->id ])); ?>"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#"><i class="fa fa-cart-plus"></i></a></li>
                                    </ul>
                                </div>
                                <div class="book-here-content">
                                    <?php if($book->book_title != $bookTitle): ?>
                                    <h3 class="title"><a href="<?php echo e(route('product-details',['id' => $book->id])); ?>"><?php echo e($bookTitle.'...'); ?></a></h3>
                                    <?php else: ?>
                                        <h3 class="title"><a href="<?php echo e(route('product-details',['id' => $book->id ])); ?>"><?php echo e($bookTitle); ?></a></h3>
                                    <?php endif; ?>
                                    <span class="price"> ৳<?php echo e($book->book_price); ?> <span> <strike>৳<?php echo e($book->book_price + 10); ?></strike></span></span>
                                </div>
                            </div>
                        </div><!--- END COL -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/book/all-book.blade.php ENDPATH**/ ?>