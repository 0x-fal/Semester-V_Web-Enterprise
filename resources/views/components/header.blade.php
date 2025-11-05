<header>
        <nav class="navbar navbar-expand-xl navbar-custom fixed-top">
            <div class="container">
                <div class="row w-100 align-items-center">

                    <div class="col-lg-3 col-md-4 col-6">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('images/logo-inaklug.png') }}" alt="Inaklug Logo">
                            <span>Inaklug</span>
                        </a>
                    </div>

                    <div class="col-lg-6 d-none d-xl-block">
                        <ul class="navbar-nav justify-content-center">
                            <li class="nav-item">
                                {{-- Cek apakah nama rute saat ini 'home', jika ya, tambahkan 'active' --}}
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a>
                            </li>
                            <li class="nav-item">
                                {{-- Link anchor # tidak bisa pakai routeIs, karena bukan route halaman --}}
                                <a class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('hubungi') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a>
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

            <div class="collapse navbar-collapse d-xl-none" id="navbarNav">
                 <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('layanan') ? 'active' : '' }}" href="{{ route('layanan') }}">Layanan</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('artikel') ? 'active' : '' }}" href="{{ route('artikel') }}">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('hubungi') ? 'active' : '' }}" href="{{ route('hubungi') }}">Hubungi Kami</a></li>

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
    </header>