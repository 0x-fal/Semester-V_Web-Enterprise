@extends('layouts.app')

@section('title', 'Home - Inaklug Indonesia')

@section('content')

<!-- Section 1: Hero Banner Tentang Kami -->
<section class="tentang-hero-section">
    <div class="tentang-hero-image">
        <img src="{{ asset('images/becak.png') }}" alt="Tentang Kami" class="w-100">
        <div class="tentang-hero-overlay">
            <div class="container">
                <h1 class="tentang-hero-title">HUBUNGI KAMI</h1>
            </div>
        </div>
    </div>
</section>

<style>

    .contact-section {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 50px 40px;
        border-radius: 1px;
    }

    .contact-section h2 {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 35px;
        letter-spacing: 2px;
    }

    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 25px;
        margin-bottom: 25px;
    }

    .form-group {
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        font-size: 13px;
        color: #666;
        margin-bottom: 8px;
        font-weight: 400;
    }

    .form-group input,
    .form-group textarea {
        padding: 12px 15px;
        border: 1px solid #e0e0e0;
        border-radius: 4px;
        font-size: 14px;
        color: #333;
        transition: border-color 0.3s ease;
        font-family: inherit;
    }

    .form-group input:focus,
    .form-group textarea:focus {
        outline: none;
        border-color: #4a90e2;
    }

    .form-group textarea {
        resize: vertical;
        min-height: 120px;
    }

    .form-group-full {
        grid-column: 1 / -1;
    }

    .form-footer {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 35px;
    }

    .submit-btn {
        padding: 15px 50px;
        background-color: transparent;
        color: #4a90e2;
        border: 2px solid #4a90e2;
        border-radius: 30px;
        font-size: 14px;
        font-weight: 500;
        cursor: pointer;
        transition: all 0.3s ease;
        letter-spacing: 1px;
    }

    .submit-btn:hover {
        background-color: #4a90e2;
        color: white;
    }

    .location-section {
        max-width: 800px;
        margin: 0 auto;
        background-color: #ffffff;
        padding: 50px 40px;
        padding-bottom: 60px;
        border-radius: 1px;
    }

    .location-section h2 {
        font-size: 18px;
        font-weight: 600;
        color: #333;
        margin-bottom: 35px;
        letter-spacing: 2px;
    }

    .office {
        margin-bottom: 30px;
    }

    .office h3 {
        font-size: 15px;
        font-weight: 600;
        color: #333;

    }

    .office p {
        font-size: 13px;
        color: #666;
        line-height: 1.6;
        margin: 0;
    }

    #alertBox {
        animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
        from {
            transform: translateX(400px);
            opacity: 0;
        }
        to {
            transform: translateX(0);
            opacity: 1;
        }
    }

    @media (max-width: 768px) {
        .contact-section {
            padding: 30px 20px;
        }

        .location-section {
            padding: 30px 20px;
        }

        .form-row {
            grid-template-columns: 1fr;
            gap: 20px;
        }

        .form-footer {
            flex-direction: column;
            gap: 20px;
            align-items: flex-start;
        }

        .submit-btn {
            width: 100%;
        }
    }
</style>

<!-- reCAPTCHA Script -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<section>
    <div class="contact-section">
        <h2>KIRIM PESAN</h2>
        
        <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label for="nama">Nama*</label>
                    <input type="text" id="nama" name="nama" required>
                </div>
                
                <div class="form-group">
                    <label for="email">Email*</label>
                    <input type="email" id="email" name="email" required>
                </div>
            </div>
            
            <div class="form-row">
                <div class="form-group">
                    <label for="perusahaan">Perusahaan/Organisasi</label>
                    <input type="text" id="perusahaan" name="perusahaan">
                </div>
                
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="tel" id="telepon" name="telepon"
                    pattern="^\+?[0-9\s\-]{10,15}$"
                    title="Input telephone number 10-15 digit (optional, starts with +)">
            </div>
            </div>
            
            <div class="form-row">
                <div class="form-group form-group-full">
                    <label for="pesan">Isi Pesan*</label>
                    <textarea id="pesan" name="pesan" placeholder="Isi Pesan*" required></textarea>
                </div>
            </div>

            <!-- Divider -->
            <div class="container">
                <div class="section-divider"></div>
            </div>
            
            <div class="form-footer">
                <!-- reCAPTCHA Widget -->
                <div class="g-recaptcha" data-sitekey="6LduIAMsAAAAADB6oBI5EN25Mn0n0qNglSzRRK6K"></div>
                
                <button type="submit" class="submit-btn">KIRIM PESAN</button>
            </div>
        </form>
    </div>

    <!-- Alert Success/Error -->
    <div id="alertBox" style="display: none; position: fixed; top: 20px; right: 20px; padding: 20px; background: #4CAF50; color: white; border-radius: 5px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); z-index: 9999;">
        <span id="alertMessage"></span>
    </div>

    <!-- Divider -->
    <div class="container">
        <div class="section-divider"></div>
    </div>

    <!-- Section Lokasi Kami -->
    <div class="location-section">
        <h2>LOKASI KAMI</h2>
        <br>
        <div class="office">
            <h3>Kantor Pusat</h3>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone: (6285) 286754052 - Fax: (6285) 286754052</p>
            <p>Hotline: +6285286754052 / +6285286754052</p>
        </div>
        
        <div class="office">
            <h3>Kantor Cabang</h3>
            <p>Gedung Ir. H. M. Suseno - Jl. R.P Soeroso No.6, Menteng, Jakarta Pusat</p>
            <p>Phone: (6285) 286754052 - Fax: (6285) 286754052</p>
            <p>Hotline: +6285286754052 / +6285286754052</p>
        </div>
    </div>
</section>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();
    
    console.log('Form submitted'); // Debug
    
    // Cek apakah reCAPTCHA sudah dicentang
    var recaptchaResponse = grecaptcha.getResponse();
    
    if (recaptchaResponse.length === 0) {
        showAlert('Mohon centang "I\'m not a robot" terlebih dahulu!', 'error');
        return false;
    }
    
    console.log('reCAPTCHA valid'); // Debug
    
    // Ambil data form
    var formData = new FormData(this);
    
    // Kirim via AJAX
    fetch(this.action, {
        method: 'POST',
        body: formData,
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => {
        console.log('Response status:', response.status); // Debug
        
        if (!response.ok) {
            throw new Error('HTTP error! status: ' + response.status);
        }
        return response.json();
    })
    .then(data => {
        console.log('Response data:', data); // Debug
        
        if (data.success) {
            showAlert('Pesan berhasil terkirim! Terima kasih.', 'success');
            document.getElementById('contactForm').reset();
            grecaptcha.reset();
        } else {
            showAlert(data.message || 'Terjadi kesalahan. Silakan coba lagi.', 'error');
        }
    })
    .catch(error => {
        console.error('Fetch error:', error); // Debug
        showAlert('Terjadi kesalahan: ' + error.message, 'error');
    });
});

function showAlert(message, type) {
    var alertBox = document.getElementById('alertBox');
    var alertMessage = document.getElementById('alertMessage');
    
    console.log('Showing alert:', message, type); // Debug
    
    alertMessage.textContent = message;
    alertBox.style.background = type === 'success' ? '#4CAF50' : '#f44336';
    alertBox.style.display = 'block';
    
    setTimeout(function() {
        alertBox.style.display = 'none';
    }, 5000);
}
</script>

@endsection