<?php $__env->startSection('title', 'Home - Inaklug Indonesia'); ?>

<?php $__env->startSection('content'); ?>

<!-- Section 1: Hero Banner Tentang Kami -->
<section class="tentang-hero-section">
    <div class="tentang-hero-image">
        <img src="<?php echo e(asset('images/gatescambride.png')); ?>" alt="Tentang Kami" class="w-100">
        <div class="tentang-hero-overlay">
            <div class="container">
                <h1 class="tentang-hero-title">LAYANAN KAMI</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section 3: Layanan Kami -->
<section id="layanan" class="layanan-section py-5 bg-light">
    <div class="layanan-container">
        <h2 class="section-title text-center mb-5">LAYANAN KAMI</h2>
        
        <div class="row g-4 mb-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/bachelor.png')); ?>" alt="Studi S1" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S1 - Bachelor</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/master.png')); ?>" alt="Studi S2" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S2 - Master</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/phd.jpg')); ?>" alt="Studi S3" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S3 - Ph.D</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/bahasajerman.png')); ?>" alt="Kursus Bahasa" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Kursus Bahasa Asing</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/studytour.png')); ?>" alt="Study Tour" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Study Tour</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="<?php echo e(asset('images/ausbildung.jpg')); ?>" alt="Ausbildung" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Ausbildung</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 6: Hubungi Kami -->
<section id="hubungi" class="hubungi-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">HUBUNGI KAMI</h2>
        
        <div class="text-center mb-4">
            <h4>KANTOR PUSAT</h4>
            <p>Gedung H. M. Ag. Soepeno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Telp: (+62 21) 398 18106 - Fax: (+62 21) 316 1201</p>
            <p>Hotline: +628 1215036017 / +628 1198398167</p>
        </div>
        
        <div class="row g-3 justify-content-center">
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-lokasi w-100">LOKASI KAMI</a>
            </div>
            <div class="col-md-4 text-center">
                <a href="#" class="btn btn-pesan w-100">KIRIM PESAN</a>
            </div>
        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/miharu/Documents/Mercu Buana Sem.5/Kamis/Enterprise/Project_Satu/resources/views/layanan.blade.php ENDPATH**/ ?>