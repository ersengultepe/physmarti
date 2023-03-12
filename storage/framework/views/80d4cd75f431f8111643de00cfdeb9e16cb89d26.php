<?php $__env->startSection('js'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div role="main" class="main">

        <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 align-self-center p-static order-2 text-center">
                        <h1 class="text-dark font-weight-bold text-8"><?php echo e($blog->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale'))); ?></h1>
                    </div>
                    <div class="col-md-12 align-self-center order-1">
                        <ul class="breadcrumb d-block text-center">
                            <li><a href="<?php echo e(route('homepage')); ?>"><?php echo e(__('physmart.homePage')); ?></a></li>
                            <li><?php echo e(__('physmart.blogs')); ?></li>
                            <li class="active"><?php echo e($blog->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale'))); ?></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <div class="container py-4">

            <div class="row">

                <div class="col-lg-12 order-lg-1">
                    <div class="blog-posts single-post">

                        <article class="post post-large blog-single-post border-0 m-0 p-0">
                            <div class="post-image ms-0">
                                <a href="<?php echo e(route('phyblogs', ['slug' => $blog->slug])); ?>">
                                    <img src="<?php echo e(asset($blog->image)); ?>" style="    max-width: 450px;max-height: 600px;"
                                         class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                </a>
                            </div>
                            <div class="post-content ms-0">

                                <?php echo $blog->getTranslatedAttribute('body', \Illuminate\Support\Facades\Session::get('locale')); ?>


                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\smarty\resources\views/frontend/pages/baseblog.blade.php ENDPATH**/ ?>