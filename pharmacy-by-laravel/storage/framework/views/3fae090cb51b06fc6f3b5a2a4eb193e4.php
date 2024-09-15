<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Blank - Layout | DashLite Admin Template</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="<?php echo e(asset('css/dashlite.css')); ?>">
    <link id="skin-default" rel="stylesheet" href="<?php echo e(asset('css/theme.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/editors/quill.css')); ?>">


</head>

<body class="nk-main ">
     <!-- wrap  -->
     <div class="nk-wrap ">

        <?php echo $__env->make('admin-layout.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('admin-layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!-- content -->
        <section class="nk-content ">
            <?php echo $__env->yieldContent('content'); ?>
        </section>
        <!-- content -->

    </div>
    <!-- wrap -->


    <!-- app-root -->
    <!-- JavaScript -->
    <script src="<?php echo e(asset('js/bundle.js')); ?>"></script>
    <script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
    <script src="<?php echo e(asset('js/quill.js')); ?>"></script>
    <script src="<?php echo e(asset('js/charts/gd-pharmacy.js')); ?>"></script>





</body>

</html>
<?php /**PATH D:\xampp\htdocs\laravel\pharmacy-by-laravel\resources\views/admin-layout/home.blade.php ENDPATH**/ ?>