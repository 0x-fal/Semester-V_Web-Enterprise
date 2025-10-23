<?php $__env->startSection('title', 'Home - Inaklug Indonesia'); ?>

<?php $__env->startSection('content'); ?>

<!-- Section 1: Hero Banner Tentang Kami -->
<section class="tentang-hero-section">
    <div class="tentang-hero-image">
        <img src="<?php echo e(asset('images/studytour.png')); ?>" alt="Tentang Kami" class="w-100">
        <div class="tentang-hero-overlay">
            <div class="container">
                <h1 class="tentang-hero-title">TENTANG KAMI</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Profil Perusahaan dengan Visi Misi -->
<section class="profil-section py-5">
    <div class="container">
        <h2 class="profil-heading mb-4">Profil</h2>
        <p class="profil-text mb-5">
            Didirikan pada tahun 2018, ini membuktikan bahwa INAKLUG merupakan konsultan pendidikan internasional 
            yang berpengalaman, terbesar, terpercaya, dan juga memiliki jam terbang tinggi untuk melayani para anak-anak 
            muda Indonesia untuk menuntut ilmu di berbagai negara maju dunia.
        </p>

        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <img src="<?php echo e(asset('images/visi.png')); ?>" alt="Profil Inaklug" class="img-fluid rounded shadow-sm">
            </div>
            <div class="col-md-6">
                <img src="<?php echo e(asset('images/misi.png')); ?>" alt="Tim Inaklug" class="img-fluid rounded shadow-sm">
            </div>
        </div>

        <div class="row text-start">
            <div class="col-md-6 mb-4">
                <h3 class="visi-misi-heading">Visi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang 
                    tangguh, mandiri, dan profesional.
                </p>
            </div>

            <div class="col-md-6 mb-4">
                <h3 class="visi-misi-heading">Misi</h3>
                <p class="visi-misi-text">
                    Membangun Sumber Daya Indonesia yang mempunyai daya saing tinggi, tangguh secara internasional untuk 
                    menghadapi persaingan di era globalisasi serta membangun karakter pemimpin Indonesia masa depan yang 
                    tangguh, mandiri, dan profesional.
                </p>
            </div>
        </div>

        <div class="text-center mt-5">
            <a href="#" class="btn-outline-custom">Layanan Kami</a>
        </div>
    </div>
</section>


<!-- Section 3: Hubungi Kami -->
<section class="hubungi-section py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">HUBUNGI KAMI</h2>
        
        <div class="text-center mb-4">
            <h4 class="kantor-title">KANTOR PUSAT</h4>
            <p class="kantor-text">Gedung Ir. H. M. Soepeno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p class="kantor-text">Phone: (+62 21) 398 38706 - Fax: (+62 21) 316 1701</p>
            <p class="kantor-text">Hotline: +628151904071 / +628119898167</p>
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
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH /home/miharu/Documents/Mercu Buana Sem.5/Kamis/Enterprise/Project_Satu/resources/views/tentang.blade.php ENDPATH**/ ?>