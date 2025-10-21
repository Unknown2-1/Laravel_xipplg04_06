<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Exclusive Automotive</title>

    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
  </head>

  <body>
    <nav class="nav">
      <div class="nav-logo"><span>EXCLUSIVE</span> AUTOMOTIVE</div>
      <div class="nav-icons">
        <i class="fas fa-search"></i>
        <i class="fas fa-bars"></i>
      </div>
    </nav>

    <!-- HERO SECTION -->
    <div class="hero-container">
      <video autoplay loop muted class="hero-video">
        <source src="{{ asset('videos/vid.mp4') }}" type="video/mp4" />
      </video>

      <div class="hero-content">
        <div>
          <h1 class="hero-title">REVUELTO</h1>
          <p class="hero-subtitle">
            V12 hybrid HPEV pertama yang ada di Indonesia dari Exclusive
            Automotive
          </p>
          <div class="hero-buttons">
            <button class="hero-btn hero-btn-red">TEMUKAN</button>
            <button class="hero-btn hero-btn-white">BELI SEKARANG</button>
          </div>
        </div>
      </div>

      <div class="scroll-indicator">
        <i class="fas fa-chevron-down"></i>
      </div>
    </div>

    <!-- PRODUK TERLARIS -->
    <section class="section bg-black">
      <div class="container">
        <h2 class="section-title">PRODUK TERLARIS</h2>
        <div class="product-grid">
          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('images/revuelto.png') }}" alt="Revuelto supercar" />
              <div class="model-slide-info">
                <h3>REVUELTO</h3>
                <div class="model-details">
                  <span class="new">NEW</span>
                  <span>IDR 22.500.000.000</span>
                  <span>1,001 HP</span>
                </div>
              </div>
            </div>
          </div>

          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('images/huracan.png') }}" alt="Huracan supercar" />
              <div class="model-slide-info">
                <h3>HURACAN</h3>
                <div class="model-details">
                  <span>IDR 6.000.000.000</span>
                  <span>640 HP</span>
                </div>
              </div>
            </div>
          </div>

          <div class="model-slide">
            <div class="relative">
              <img src="{{ asset('images/aventador.png') }}" alt="Aventador supercar" />
              <div class="model-slide-info">
                <h3>AVENTADOR SVJ</h3>
                <div class="model-details">
                  <span>IDR 22.000.000.000</span>
                  <span>759 HP</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="btn-view-all">
          <button>VIEW ALL MODELS</button>
        </div>
      </div>
    </section>

    <!-- MODAL -->
    <div id="modelsModal" class="modal">
      <div class="modal-content">
        <span class="close-modal">&times;</span>
        <h2>All Exclusive Automotive Models</h2>
        <div class="models-container">
          <!-- Models akan diisi oleh JavaScript -->
        </div>
      </div>
    </div>

    <!-- PERFORMA -->
    <section class="section bg-gradient-bottom">
      <div class="container">
        <h2 class="section-title">PEFORMA HEWAN BUAS</h2>
        <div class="performance-grid">
          <div>
            <img src="{{ asset('images/revuelto.png') }}" alt="Revuelto engine" style="width: 100%" />
          </div>
          <div class="specs-info">
            <div class="specs-grid">
              <div class="performance-item">
                <div class="performance-number">6.5L</div>
                <div class="performance-text">NATURALLY ASPIRATED V12</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">3.0s</div>
                <div class="performance-text">0-100 KM/H</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">&gt;350</div>
                <div class="performance-text">TOP SPEED (KM/H)</div>
              </div>
              <div class="performance-item">
                <div class="performance-number">1,001</div>
                <div class="performance-text">TOTAL POWER (HP)</div>
              </div>
            </div>

            <div style="margin-top: 2rem">
              <p>
                Revuelto adalah mobil sport hibrida plug-in pertama dari
                Lamborghini, menggabungkan mesin V12 bertenaga tinggi dengan
                tiga motor listrik. Revuelto secara resmi menggantikan Aventador
                sebagai model flagship Lamborghini, menandai era baru bagi
                supercar Italia ini.
              </p>
              <button>SPESIFIKASI</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- KOLEKSI -->
    <section class="section bg-black">
      <div class="container">
        <div class="collection-header">
          <h2>KOLEKSI</h2>
          <button>
            LIHAT SEMUA
            <i class="fas fa-arrow-right"></i>
          </button>
        </div>

        <div class="collection-grid">
          <div class="hover-scale">
            <img src="{{ asset('images/gt3rs 600.png') }}" alt="Porsche GT3 RS" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('images/Lamborghini_Aventador_600x400.png') }}" alt="Lamborghini Aventador" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('images/Mclaren_Senna_600x400.png') }}" alt="McLaren Senna" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('images/McLaren_P1_GTR_2015_600x400.png') }}" alt="McLaren P1 GTR" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('images/Porsche_600x400.png') }}" alt="Classic Porsche" />
          </div>
          <div class="hover-scale">
            <img src="{{ asset('images/Porsche_Boxster_600x400.png') }}" alt="Porsche Boxster" />
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer">
      <div class="container">
        <div class="footer-grid">
          <div class="footer-column">
            <h4>PRODUK</h4>
            <ul>
              <li><a href="#">Lamborghini</a></li>
              <li><a href="#">Mclaren</a></li>
              <li><a href="#">Porsche</a></li>
              <li><a href="#">Limited Editions</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>KEPEMILIKAN</h4>
            <ul>
              <li><a href="#">Services</a></li>
              <li><a href="#">Garansi</a></li>
              <li><a href="#">Spare Parts</a></li>
              <li><a href="#">Layanan Keuangan</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>MOTORSPORT</h4>
            <ul>
              <li><a href="#">GT3</a></li>
              <li><a href="#">Super Trofeo</a></li>
              <li><a href="#">GT2</a></li>
              <li><a href="#">Driving Academy</a></li>
            </ul>
          </div>

          <div class="footer-column">
            <h4>PERUSAHAAN</h4>
            <ul>
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">Karier</a></li>
              <li><a href="#">Keberlanjutan</a></li>
              <li><a href="#">Kontak</a></li>
            </ul>
          </div>
        </div>

        <div class="footer-bottom">
          <div class="footer-brand">
            <div class="logo"><span>EXCLUSIVE</span> AUTOMOTIVE</div>
            <div class="social-icons">
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
              <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
          </div>

          <div class="footer-copyright">
            <div>© 2025 Exclusive Automotive. All Rights Reserved.</div>
            <div class="footer-links">
              <a href="#">Privacy Policy</a>
              <a href="#">Terms of Use</a>
              <a href="#">Cookies</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- JAVASCRIPT -->
    <script src="{{ asset('js/script.js') }}"></script>
  </body>
</html>
