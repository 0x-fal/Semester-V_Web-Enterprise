<header>
        <nav class="navbar navbar-expand-lg navbar-custom fixed-top">
            <div class="container">
                <div class="row w-100 align-items-center">

                    <div class="col-lg-3 col-md-4 col-6">
                        <a class="navbar-brand" href="#">
                            <img src="<?php echo e(asset('images/logo-inaklug.png')); ?>" alt="Inaklug Logo">
                            <span>Inaklug</span>
                        </a>
                    </div>

                    <div class="col-lg-6 d-none d-lg-block">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item">
                                
                                <a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(request()->routeIs('tentang') ? 'active' : ''); ?>" href="<?php echo e(route('tentang')); ?>">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php echo e(request()->routeIs('layanan') ? 'active' : ''); ?>" href="<?php echo e(route('layanan')); ?>">Layanan</a>
                            </li>
                            <li class="nav-item">
                                
                                <a class="nav-link" href="#artikel">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#hubungi-kami">Hubungi Kami</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-8 col-6">
                        <div class="nav-actions-wrapper">
                             <div class="search-box">
                                <i class="fas fa-search icon-magnifier"></i>
                                <input type="text" placeholder="Ketik pencarian">
                            </div>
                            <a href="#" class="btn btn-custom-primary">DAFTAR ON-LINE</a>

                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="collapse navbar-collapse d-lg-none" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>" href="<?php echo e(route('home')); ?>">Home</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('tentang') ? 'active' : ''); ?>" href="<?php echo e(route('tentang')); ?>">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link <?php echo e(request()->routeIs('layanan') ? 'active' : ''); ?>" href="<?php echo e(route('layanan')); ?>">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#hubungi-kami">Hubungi Kami</a></li>

                    <!-- Mobile Search Box -->
                    <div class="mobile-search-box">
                        <i class="fas fa-search icon-magnifier"></i>
                        <input type="text" placeholder="Ketik pencarian">
                    </div>

                    <!-- Mobile Button Daftar -->
                    <a href="#" class="mobile-btn-daftar">DAFTAR ON-LINE</a>
                </ul>
            </div>
        </nav>
    </header><?php /**PATH /home/miharu/Documents/Mercu Buana Sem.5/Kamis/Enterprise/Project_Satu/resources/views/components/header.blade.php ENDPATH**/ ?>