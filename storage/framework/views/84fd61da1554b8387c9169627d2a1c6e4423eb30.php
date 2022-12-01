<?php $__env->startSection('title'); ?>
    Home
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!--*************** Slider ******************-->
    <section class="slider">

        <div class="row  ">
            <div class="col-md-12">
                <div class="slider-content p-0">
                    <h1>Reader?</h1>
                    <h2>Read, listen and discover.</h2>
                    <a href="" class="mt-4 btn btn-started">Get Strarted</a>
                </div>
            </div>
        </div>
    </section>

    <!--  best seller features -->
    <section class="product-ebook mt-5 p-0-135">
        <div class="row   bg-light border">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-md">
                    <a class="navbar-brand" href="#" style="">Best Seller Books</a>
                    <a href="<?php echo e(route('book')); ?>" class="btn btn-outline-primary float-end">View all</a>
                </div>
            </nav>
            <?php $__currentLoopData = $productBestSeller; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 3));
                ?>
                <div class="home-book-best text-center pt-2" data-wow-duration="1s" data-wow-delay="0.1s" data-wow-offset="0">
                    <div class="author-books-info bg-white">
                        <div class="team_img">
                            <img src="<?php echo e(asset($book->book_image)); ?>" alt="team-image">
                            <ul class="social">
                                <li><a href="<?php echo e(route('product-details',['id' => $book->id ])); ?>"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <?php if(Session::get('customerID')): ?>
                                <li><a href="#" class="add-bag"><i class="fa fa-cart-plus"></i></a></li>
                                <?php else: ?>
                                    <li><a href="<?php echo e(route('customer-login')); ?>" class="add-bag"><i class="fa fa-cart-plus"></i></a></li>
                                <?php endif; ?>
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
    </section>

    <!--  product slider -->
    <section class="product-ebook-slider mt-5 p-0-135">
        <div class="row  border">
            <div class="bbb_viewed_title_container pt-2">
                <h3 class="bbb_viewed_title ">New Releases</h3>
                <div class="bbb_viewed_nav_container ">
                    <div class="bbb_viewed_nav bbb_viewed_next"><i class="fas fa-chevron-right" title="next"></i></div>
                    <div class="bbb_viewed_nav bbb_viewed_prev"><i class="fas fa-chevron-left" title="prev"></i></div>
                </div>
            </div>
            <div class="bbb_viewed_slider_container bg-light">
                <div class="owl-carousel owl-theme bbb_viewed_slider">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                            $bookTitle = implode(' ', array_slice(explode(' ', $book->book_title), 0, 4));
                        ?>
                        <div class="owl-item">
                            <div class="author-books-info slider-books-info">
                                <div class="team_img book_img">
                                    <img src="<?php echo e(asset($book->book_image)); ?>" alt="image">
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
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <!--*************** Ebook Product latest ******************-->

    <section class="product-ebook mt-5 p-0-135">
        <div class="hr-line">
            <hr class="hr-text" data-content="Latest Ebooks | See More ">
        </div>
        <div class="row  ">
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $bookTitle = implode(' ', array_slice(explode(' ', $product->book_title), 0, 4));
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>">
                                    <img src ="<?php echo e(asset($product->book_image)); ?>">
                                </a>
                            </a>
                            <span class="product-discount-label">-23%</span>
                            <ul class="product-links">
                                <li><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                                <h3 class="title"><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><?php echo e($bookTitle); ?></a></h3>
                                <div class="price">৳<?php echo e($product -> book_price); ?> <span>৳<?php echo e($product -> book_price + 10); ?></span></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!--*************** hr line ******************-->
    <div class="hr-line-new p-0-135">
        <hr class="mt-5 hr-section">
        <div class="hr-line-section-text text-center">
            <span class="hr-text-new">
                Categories
                <span> | </span>
            <a href="<?php echo e(route('categories')); ?>">See More</a>
            </span>
        </div>
    </div>

    <!--*************** categories home ******************-->
    <section class="categories-home p-0-135">




        <div class="row  ">
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $categoryName = implode(' ', array_slice(explode(' ', $category -> category_name), 0, 3));
                ?>
                <div class="col-3 mt-2">
                    <a href="<?php echo e(route('category-books',['category_id' => $category->id])); ?>" class="btn btn-category-home"><span><?php echo e($categoryName); ?></span></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <div class="col-3 mt-2">
                <a href="<?php echo e(route('categories')); ?>" class="btn btn-category-home"><span>All Subjects</span> <span> &nbsp; <i class="fa-solid fa-chevron-right"></i></span></a>
            </div>
        </div>
    </section>

    <!--*************** Ebook Product Most Popular ******************-->
    <section class="product-ebook  p-0-135 mt-5">
        <!--*************** hr line ******************-->
        <div class="hr-line">
            <hr class="hr-text" data-content="Most Popular | See More ">
        </div>
        <div class="row">
            <?php $__currentLoopData = $productsTag; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $bookTitle = implode(' ', array_slice(explode(' ', $product->book_title), 0, 4));
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>">
                                    <img src ="<?php echo e(asset($product->book_image)); ?>">
                                </a>
                            </a>
                            <ul class="product-links">
                                <li><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><?php echo e($bookTitle); ?></a></h3>
                            <div class="price">৳<?php echo e($product -> book_price); ?> <span>৳<?php echo e($product -> book_price + 10); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>


    <!--*************** hr line ******************-->
    <div class="hr-line p-0-135">
        <a href="<?php echo e(route('authors')); ?>"><hr class="hr-text" data-content="Popular Authors | See More "></a>
    </div>
    <!--*************** Writers slider ******************-->
    <section class="writers-slider p-0-135">
        <div class="row  ">
            <div class="col-md-12">
                <div class="author-logo-slider">
                    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item">
                        <a href=""><img src ="<?php echo e(asset($author -> author_image)); ?>" alt="sadathossain">
                            <h6 class="text-center"><a href="<?php echo e(route('author-books', ['author_id' => $author->id])); ?>"><?php echo e($author -> author_name); ?></a></h6>
                        </a>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </section>

    <!--*************** product-ebook free ******************-->
    <section class="product-ebook  p-0-135">
        <div class="hr-line">
            <hr class="hr-text" data-content="Free Ebooks | See More ">
        </div>
        <div class="row  ">
            <?php $__currentLoopData = $productsASC; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php
                    $bookTitle = implode(' ', array_slice(explode(' ', $product->book_title), 0, 4));
                ?>
                <div class="col-md-3 col-sm-6">
                    <div class="product-grid">
                        <div class="product-image">
                            <a href="#" class="image">
                                <a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>">
                                    <img src ="<?php echo e(asset($product->book_image)); ?>">
                                </a>
                            </a>
                            <ul class="product-links">
                                <li><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><i class="fa fa-search"></i></a></li>
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-random"></i></a></li>
                            </ul>
                            <a href="" class="add-to-cart">Add to Cart</a>
                        </div>
                        <div class="product-content">
                            <h3 class="title"><a href="<?php echo e(route('product-details', ['id' => $product->id ])); ?>"><?php echo e($bookTitle); ?></a></h3>
                            <div class="price">৳<?php echo e($product -> book_price - $product -> book_price); ?> <span>৳<?php echo e($product -> book_price + 10); ?></div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </section>

    <!--*************** hr line ******************-->











<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/home/home.blade.php ENDPATH**/ ?>