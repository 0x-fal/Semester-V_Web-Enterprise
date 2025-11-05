@extends('layouts.app')

@section('title', 'Artikel - Inaklug Indonesia')

@section('content')

<!-- Hero Section dengan Background Image -->
<section class="artikel-hero-section">
    <div class="artikel-hero-image">
        <img src="{{ asset('images/studytogether.jpeg') }}" alt="Artikel" class="w-100">
        <div class="artikel-hero-overlay">
            <div class="container">
                <div class="artikel-hero-content">
                    <span class="artikel-category">TIPS</span>
                    <h1 class="artikel-hero-title">Penting! Cara Mudah agar Bisa Kuliah di<br>Luar Negeri dengan Beasiswa</h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Articles Section (2 Cards) -->
<section class="featured-articles-section py-5">
    <div class="container">
        <div class="row g-4">
            <!-- Article Card 1 -->
            <div class="col-md-6">
                <div class="featured-article-card">
                    <div class="featured-article-image">
                        <img src="{{ asset('images/korona.png') }}" alt="Artikel 1">
                    </div>
                    <div class="featured-article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </div>
            </div>

            <!-- Article Card 2 -->
            <div class="col-md-6">
                <div class="featured-article-card">
                    <div class="featured-article-image">
                        <img src="{{ asset('images/htw.png') }}" alt="Artikel 2">
                    </div>
                    <div class="featured-article-content">
                        <h3>Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ✅ Divider sebelum Artikel Terbaru -->
<div class="container">
    <div class="section-divider"></div>
</div>

<!-- Articles List Section -->
<section class="articles-list-section py-5">
    <div class="container">
        <h2 class="articles-section-title mb-5">ARTIKEL TERBARU</h2>
        
        <div class="articles-list">
            <!-- Article Item 1 -->
            <div class="article-list-item">
                <div class="article-list-image">
                    <img src="{{ asset('images/artikel1.jpg') }}" alt="Article 1">
                </div>
                <div class="article-list-content">
                    <h3 class="article-list-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="article-list-meta">Ciara, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article Item 2 -->
            <div class="article-list-item">
                <div class="article-list-image">
                    <img src="{{ asset('images/artikel2.jpg') }}" alt="Article 2">
                </div>
                <div class="article-list-content">
                    <h3 class="article-list-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="article-list-meta">Ciara, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article Item 3 -->
            <div class="article-list-item">
                <div class="article-list-image">
                    <img src="{{ asset('images/artikel3.jpg') }}" alt="Article 3">
                </div>
                <div class="article-list-content">
                    <h3 class="article-list-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="article-list-meta">Ciara, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article Item 4 -->
            <div class="article-list-item">
                <div class="article-list-image">
                    <img src="{{ asset('images/artikel4.jpg') }}" alt="Article 4">
                </div>
                <div class="article-list-content">
                    <h3 class="article-list-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="article-list-meta">Ciara, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>

            <!-- Article Item 5 -->
            <div class="article-list-item">
                <div class="article-list-image">
                    <img src="{{ asset('images/nurse2.jpg') }}" alt="Article 5">
                </div>
                <div class="article-list-content">
                    <h3 class="article-list-title">Penting! Cara Mudah agar Bisa Kuliah di Luar Negeri dengan Beasiswa</h3>
                    <p class="article-list-meta">Ciara, 18 Feb 2020 12:01 WIB</p>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div class="artikel-pagination">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">←</span>
                        </a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">→</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>

<!-- Divider -->
<div class="container">
    <div class="section-divider"></div>
</div>

<!-- Hubungi Kami Section -->
<section id="hubungi" class="hubungi-section py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">HUBUNGI KAMI</h2>
        
        <div class="text-center mb-4">
            <h4>KANTOR PUSAT</h4>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P. Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone : 085286754052</p>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-md-4">
                <a href="#" class="btn btn-lokasi">LOKASI KAMI</a>
            </div>
            <div class="col-md-4">
                <a href="#" class="btn btn-pesan">KIRIM PESAN</a>
            </div>
        </div>
    </div>
</section>

@endsection