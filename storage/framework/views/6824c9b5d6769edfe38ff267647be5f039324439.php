<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel = "icon" href ="<?php echo e(asset('frontEndAsset')); ?>/image/title-logo.png" type = "image/x-icon">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />

    <!-- logo slider  -->
    <link rel="stylesheet" href ="<?php echo e(asset('frontEndAsset')); ?>/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!--     for ratings and review -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
    <!-- customer login -->
    <link rel="stylesheet" href ="<?php echo e(asset('adminAsset')); ?>/assets/css/bootstrap-extended.css">

    <link rel="stylesheet" href ="<?php echo e(asset('frontEndAsset')); ?>/css/style.css">
</head>
<body>
<div class="container-fluid p-0">
<!---------- header area Start ------------->
<?php echo $__env->make('frontEnd.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!---------- header area End ------------->


<!---------- Home area start ------------->
    <?php echo $__env->yieldContent('content'); ?>
<!---------- Home area end ------------->


<!---------- Footer area start ------------->
    <?php echo $__env->make('frontEnd.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!---------- Footer area end ------------->


</div>
<script src ="<?php echo e(asset('frontEndAsset')); ?>/js/jquery-3.6.0.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script></script>


<script src ="<?php echo e(asset('frontEndAsset')); ?>/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>

<script src ="<?php echo e(asset('frontEndAsset')); ?>/js/script.js"></script>
</body>
</html>
<?php /**PATH D:\SWE Training\xampp-BITM\htdocs\eBookShare\resources\views/frontEnd/master.blade.php ENDPATH**/ ?>