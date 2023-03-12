<!--- WHO WE ARE : start --->
<div class="container">
    <div class="row py-5 my-5">
        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter">
            <h2 class="font-weight-normal text-6 line-height-2 mb-4">
                <strong>
                    <mark>
                        <?php echo e($bizKimiz->where("order", 1)->first()->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale'))); ?>

                    </mark>
                </strong>
            </h2>
            <?php echo e($bizKimiz->where("order", 1)->first()->getTranslatedAttribute('text', \Illuminate\Support\Facades\Session::get('locale'))); ?>

            <br>
            <a href="#" class="learn-more text-color-primary font-weight-semibold text-2">
                <?php echo e(__('physmart.viewMore')); ?>

                <i class="ps-2 fas fa-chevron-right text-2"></i></a>
        </div>
        <div class="col-lg-8 mt-5 mt-lg-0">
            <div class="row">

                <?php $__currentLoopData = $bizKimiz->where("order", ">", 1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-6 mb-4 mb-lg-5 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="icon-<?php echo e($item->icon); ?> icons "></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="font-weight-bold mb-2"><mark><?php echo e($item->getTranslatedAttribute('title', \Illuminate\Support\Facades\Session::get('locale'))); ?></mark></h4>
                                <p class="mb-0"><?php echo e($item->getTranslatedAttribute('text', \Illuminate\Support\Facades\Session::get('locale'))); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </div>
    </div>
</div>
<!--- WHO WE ARE : end ---><?php /**PATH C:\xampp\htdocs\smarty\resources\views/frontend/main/whoweare.blade.php ENDPATH**/ ?>