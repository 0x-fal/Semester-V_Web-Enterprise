@extends('layouts.app')

@section('title', 'Home - Inaklug Indonesia')

@section('content')

<!-- Section 1: Hero Section -->
<section class="hero-section">
    <div class="hero-image">
        <img src="{{ asset('images/picgedung.png') }}" alt="Building" class="w-100">
        <div class="hero-overlay">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-box">
                        <h1>INGIN KULIAH DAN BERKARIR<br>DI LUAR NEGERI ?</h1>
                        <a href="#" class="btn btn-hero">SELENGKAPNYA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section 2: Tentang Kami -->
<section id="tentang" class="tentang-section py-5">
    <div class="container">
        <div class="text-center">
            <h2 class="section-title">TENTANG KAMI</h2>
            <p class="section-description mx-auto">
                INAKLUG adalah Konsultan Pendidikan Internasional di Indonesia yang sudah 
                <br>memberangkatkan lebih dari 1000 mahasiswa Indonesia yang ingin kuliah, perjalanan 
                <br>wisata dan berkarir di negara maju di dunia.
            </p>
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
                    <img src="{{ asset('images/bachelor.png') }}" alt="Studi S1" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S1 - Bachelor</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="{{ asset('images/master.png') }}" alt="Studi S2" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S2 - Master</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="{{ asset('images/phd.jpg') }}" alt="Studi S3" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Studi S3 - Ph.D</h3>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row g-4">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="{{ asset('images/bahasajerman.png') }}" alt="Kursus Bahasa" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Kursus Bahasa Asing</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="{{ asset('images/studytour.png') }}" alt="Study Tour" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Study Tour</h3>
                    </div>
                </div>
            </div>
            
            <div class="col-12 col-md-6 col-lg-4">
                <div class="layanan-card">
                    <img src="{{ asset('images/ausbildung.jpg') }}" alt="Ausbildung" class="w-100">
                    <div class="layanan-overlay">
                        <h3>Ausbildung</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section 4: Mitra Kami -->
<section class="mitra-section">
    <div class="container">
        <h2 class="section-title text-center mb-5">MITRA KAMI</h2>
        
        <div class="row g-4 justify-content-center">
            <div class="col-md-3 col-sm-6">
                <div class="mitra-logo">
                    <img src="{{ asset('images/aviation.jpg') }}" alt="Education Partner" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="mitra-logo">
                    <img src="{{ asset('images/adrew.png') }}" alt="St Andrews College" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="mitra-logo">
                    <img src="{{ asset('images/htw.png') }}" alt="NTW College" class="img-fluid">
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="mitra-logo">
                    <img src="{{ asset('images/studygroup.png') }}" alt="Study Group" class="img-fluid">
                </div>
            </div>
        </div>
        
        <!-- Konseling Box -->
        <div class="konseling-box">
            <div class="konseling-content">
                <h3>GRATIS KONSELING STUDI DI LUAR NEGERI</h3>
                <p>Konsultasi seputar kuliah / bekerja di Luar Negeri</p>
            </div>
            <div class="konseling-action">
                <a href="#" class="btn-konseling">MULAI KONSULTASI</a>
            </div>
        </div>
    </div>
</section>

<!-- Section 5: Artikel Terbaru -->
 <!-- Articles Section -->
    <section class="articles-section" id="artikel">
        <div class="container">
            <h2>ARTIKEL TERBARU</h2>
            <div class="row g-4">
                <!-- Article 1 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('images/studijerman.png') }}" alt="Article 1" class="article-image article-1">
                        <div class="article-content-1">
                            <p class="article-description">5 Fakta yang Harus Kamu Ketahui Sebelum Studi ke Jerman</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article 2 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('images/korona.png') }}" alt="Article 2" class="article-image article-2">
                        <div class="article-content-2">
                            <p class="article-description">Uni Eropa Menghadapi Virus Korona</p>
                        </div>
                    </div>
                </div>
                
                <!-- Article 3 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('images/bahasajerman.png') }}" alt="Article 3" class="article-image article-3">
                        <div class="article-content-3">
                            <p class="article-description">Belajar Bahasa Jerman Bersama Goethe Insistut
                        </div>
                    </div>
                </div>
                
                <!-- Article 4 -->
                <div class="col-lg-5 col-md-6">
                    <div class="article-card">
                        <img src="{{ asset('images/gatescambride.png') }}" alt="Article 4" class="article-image article-4">
                        <div class="article-content-4">
                            <p class="article-description">Apa Itu Gates Cambridge? Yuk Cari Tahu</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center">
                <a href="#" class="btn-more-articles">LAINNYA</a>
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

@endsection