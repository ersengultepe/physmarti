<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    <div class="header-body border-top-0">
        <div class="header-top header-top-borders">
            <div class="container h-100">
                <div class="header-row h-100">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item nav-item-borders py-2 d-none d-sm-inline-flex">
                                        <span class="ps-0"><i class="far fa-dot-circle text-4 text-color-primary" style="top: 1px;"></i> <?php echo wordwrap($contact->address,75,"<br>\n"); ?></span>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2">
                                        <a href="tel:<?php echo e(str_replace(' ', '', $contact->tel)); ?>"><i class="fab fa-whatsapp text-4 text-color-primary" style="top: 0;"></i> <?php echo e($contact->tel); ?></a>
                                    </li>
                                    <li class="nav-item nav-item-borders py-2 d-none d-md-inline-flex">
                                        <a href="mailto:<?php echo e($contact->email); ?>"><i class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i> <?php echo e($contact->email); ?></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <?php if($blogs->count() > 0): ?>
                                        <li class="nav-item nav-item-borders py-2 d-none d-lg-inline-flex">
                                            <a href="#"><?php echo e(__('physmart.blogs')); ?></a>
                                        </li>
                                    <?php endif; ?>

                                    <?php if(\Illuminate\Support\Facades\Session::get('locale') === 'en'): ?>
                                            <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                                <a class="nav-link" href="<?php echo e(route('lang', 'en')); ?>" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="<?php echo e(asset("/porto/img/blank.gif")); ?>" class="flag flag-us" alt="English" /> English
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                                    <a class="dropdown-item" href="<?php echo e(route('lang', 'tr')); ?>">
                                                        <img src="<?php echo e(asset("/porto/img/blank.gif")); ?>" class="flag flag-tr" alt="Türkçe" /> Türkçe</a>
                                                </div>
                                            </li>
                                    <?php else: ?>
                                            <li class="nav-item nav-item-borders py-2 pe-0 dropdown">
                                                <a class="nav-link" href="<?php echo e(route('lang', 'tr')); ?>" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <img src="<?php echo e(asset("/porto/img/blank.gif")); ?>" class="flag flag-tr" alt="Türkçe" /> Türkçe
                                                    <i class="fas fa-angle-down"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownLanguage">
                                                    <a class="dropdown-item" href="<?php echo e(route('lang', 'en')); ?>">
                                                        <img src="<?php echo e(asset("/porto/img/blank.gif")); ?>" class="flag flag-us" alt="English" /> English</a>
                                                </div>
                                            </li>
                                    <?php endif; ?>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="<?php echo e(url('/')); ?>">
                                <img alt="Porto" width="180" height="50" data-sticky-width="82" data-sticky-height="40" src="<?php echo e(asset('images/phy/logo.png')); ?>">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-stripe order-2 order-lg-1" style="color:black">
                            <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">

                                <?php echo menu('physmart', 'layouts.menuPhy'); ?>


                            </div>
                            <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH C:\xampp\htdocs\smarty\resources\views/layouts/header.blade.php ENDPATH**/ ?>