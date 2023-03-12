<?php if($brands->count() > 0): ?>
    <!--- BRANDS : start --->
    <div class="container">
        <div class="row py-5 my-5">
            <div class="col">
                <div class="owl-carousel owl-theme mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <img style="width: 180px;height: 60px" class="img-fluid opacity-2" src="<?php echo e(\TCG\Voyager\Facades\Voyager::image( $item->img )); ?>" alt="<?php echo e($item->title); ?>">
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>
    <!--- BRANDS : end --->
<?php endif; ?><?php /**PATH C:\xampp\htdocs\smarty\resources\views/frontend/main/brands.blade.php ENDPATH**/ ?>