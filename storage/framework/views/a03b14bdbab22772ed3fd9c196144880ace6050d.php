<footer id="footer" class="ccc">
    <div class="container">
        <div class="footer-ribbon">
            <span style="font-family: 'Gemunu Libre', sans-serif;"><?php echo e(__('physmart.Contact Us')); ?></span>
        </div>
        <div class="row py-5 my-4">
            <div class="col-md-6 mb-4 mb-lg-0">
                <a href="index.html" class="logo pe-0 pe-lg-3">
                    <img alt="physmart medical systems" style="margin-top: -11%;width: 40%;" src="<?php echo e(asset('images/phy/physmart-footer-logo.png')); ?>" class="opacity-7 bottom-4">
                </a>
                <p class="mt-2 mb-2"><?php echo e(__('physmart.companyPurposeAbstract')); ?></p>
            </div>
            <div class="col-md-6">
                <h5 class="text-3 mb-3"><?php echo e(__('physmart.CONTACT')); ?></h5>
                <div class="row">
                    <div class="col-md-6">
                        <ul class="list list-icons list-icons-lg">
                            <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0"><?php echo $contact->address; ?></p></li>
                            <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:<?php echo e(str_replace(' ', '', $contact->tel)); ?>"><?php echo e($contact->tel); ?></a></p></li>
                            <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:<?php echo e($contact->email); ?>"><?php echo e($contact->email); ?></a></p></li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <ul class="list list-icons list-icons-sm">
                            <li><i class="fas fa-angle-right"></i><a href="#" class="link-hover-style-1 ms-1"> <?php echo e(__('physmart.frequentlyAskedQuestions')); ?></a></li>
                            <li><i class="fas fa-angle-right"></i><a href="#" class="link-hover-style-1 ms-1"><?php echo e(__('physmart.sitemap')); ?> </a></li>
                            <li><i class="fas fa-angle-right"></i><a href="<?php echo e(route('contact')); ?>" class="link-hover-style-1 ms-1"> <?php echo e(__('physmart.contact')); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright footer-copyright-style-2">
        <div class="container py-2">
            <div class="row py-4">
                <div class="col d-flex align-items-center justify-content-center">
                    <p>© Copyright 2019. <?php echo e(__('physmart.copyright')); ?></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\xampp\htdocs\smarty\resources\views/layouts/footer.blade.php ENDPATH**/ ?>