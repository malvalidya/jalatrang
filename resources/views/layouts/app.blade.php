<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Berita Desa')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
    :root {
        --tb-bg: #10172b;
        --nav-bg: #1c2438;
        --gold: #f5b82e;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: #f4f6fa;
    }

    /* ===== TOPBAR INFO ===== */
    .topbar-info {
        background: var(--tb-bg);
        padding: 8px 30px;
        display: flex;
        align-items: center;
        gap: 20px;
        color: #cbd5e1;
        font-size: 14px;
    }
    .badge-info-terkini {
        background: linear-gradient(90deg, #f59e0b, #ef4444);
        color: #fff;
        font-weight: 700;
        font-size: 13px;
        padding: 6px 14px;
        border-radius: 20px;
        white-space: nowrap;
    }
    .ticker { flex: 1; overflow: hidden; white-space: nowrap; }
    .ticker span {
        display: inline-block;
        padding-left: 100%;
        animation: ticker 25s linear infinite;
    }
    @keyframes ticker {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-100%); }
    }
    .topbar-date { white-space: nowrap; }
    .topbar-date i { color: var(--gold); margin-right: 6px; }

    /* ===== NAVBAR UTAMA ===== */
    .main-nav {
        background: var(--nav-bg);
        padding: 8px 30px 12px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        font-family: 'Oswald', sans-serif;
    }
    .brand-box {
        display: flex;
        align-items: center;
        gap: 12px;
        border: 1px solid rgba(255,255,255,.12);
        border-radius: 12px;
        padding: 8px 18px 8px 12px;
        text-decoration: none;
    }
    .brand-box i { font-size: 34px; color: var(--gold); }
    .brand-title {
        color: #fff;
        font-size: 22px;
        font-weight: 600;
        line-height: 1.1;
        text-transform: uppercase;
        margin: 0;
    }
    .brand-sub {
        color: #94a3b8;
        font-size: 13px;
        font-family: 'Segoe UI', sans-serif;
        text-transform: uppercase;
    }
    .nav-menu {
        display: flex;
        align-items: center;
        gap: 6px;
        list-style: none;
        margin: 0;
        padding: 0;
    }
    .nav-menu a {
        color: #e2e8f0;
        text-decoration: none;
        padding: 8px 14px;
        font-size: 17px;
        border-radius: 14px;
        transition: .2s;
    }
    .nav-menu a:hover { color: var(--gold); }
    .nav-menu a.active {
        color: var(--gold);
        background: rgba(245,184,46,.12);
        border: 1px solid rgba(245,184,46,.5);
    }
    .nav-home {
        background: rgba(239,68,68,.15);
        border-radius: 16px;
        padding: 10px 14px !important;
    }
    .nav-grid {
        border: 1px solid var(--gold);
        border-radius: 14px;
        padding: 8px 12px !important;
        color: var(--gold) !important;
    }

    /* ===== HERO ===== */
    .page-hero {
        background: linear-gradient(135deg, #0f1b4d 0%, #1b2a86 60%, #1f2f9c 100%);
        padding: 70px 0 60px;
        color: #fff;
    }
    .page-hero .crumb a { color: var(--gold); text-decoration: none; margin-right: 14px; }
    .page-hero h1 {
        font-family: 'Oswald', sans-serif;
        font-weight: 600;
        font-size: 40px;
        margin: 18px 0 6px;
    }
    .page-hero p { color: #cbd5e1; margin: 0; }

    /* ===== HALAMAN BERITA ===== */
    .berita-wrap {
        max-width: 1250px;
        margin: 0 auto;
        padding: 45px 15px;
    }
    .berita-layout {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    align-items: start;
}
.berita-main { grid-column: 2 / 5; }
.berita-list {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
}

@media (max-width: 991px) {
    .berita-layout { grid-template-columns: 1fr; }
    .berita-main { grid-column: 1; }
    .berita-list { grid-template-columns: repeat(2, 1fr); }
}
@media (max-width: 575px) {
    .berita-list { grid-template-columns: 1fr; }
}

    .filter-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0,0,0,.06);
        overflow: hidden;
    }
    .filter-header {
        background: #12305f;
        color: #fff;
        font-weight: 700;
        font-size: 16px;
        padding: 12px 18px;
    }
    .filter-body { padding: 16px; }
    .filter-body label { font-weight: 600; font-size: 14px; margin-bottom: 6px; }
    .filter-body .form-control,
    .filter-body .form-select { padding: 8px 12px; font-size: 14px; }
    .filter-body .btn { font-size: 14px; padding: 6px; }

    .card-berita {
        border: 0;
        border-radius: 12px;
        overflow: hidden;
        height: 100%;
        background: #fff;
        box-shadow: 0 2px 10px rgba(0,0,0,.06);
        transition: .2s;
    }
    .card-berita:hover { transform: translateY(-3px); }
    .card-berita .thumb {
        width: 100%;
        height: 154px;
        object-fit: cover;
        display: block;
    }
    .card-berita .card-body {
        padding: 14px 16px 16px;
        display: flex;
        flex-direction: column;
    }
    .badge-kategori {
        background: #12305f;
        color: #fff;
        font-weight: 600;
        font-size: 12px;
        padding: 4px 8px;
        border-radius: 6px;
    }
    .tgl-berita { color: #555; font-size: 14px; margin-left: 4px; }

    .judul-berita {
        font-size: 16px;
        font-weight: 700;
        line-height: 1.35;
        margin: 12px 0 8px;
        color: #111;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .excerpt-berita {
        color: #666;
        font-size: 14px;
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
    .tag-pill {
        background: #f1f3f6;
        color: #555;
        font-size: 11px;
        padding: 2px 8px;
        border-radius: 5px;
        border: 1px solid #e3e6eb;
        margin-right: 3px;
    }
    .berita-footer {
        margin-top: auto;
        display: flex;
        justify-content: space-between;
        align-items: center;
        color: #555;
        font-size: 14px;
    }

    /* ===== PAGINATION ===== */
    .pagination { justify-content: center; margin-top: 10px; }

    /* ===== FOOTER ===== */
    footer.footer-desa {
        background: linear-gradient(135deg, #0b1230, #141d4a);
        color: #cbd5e1;
        padding: 50px 0 0;
        margin-top: 40px;
        font-size: 14px;
    }
    footer.footer-desa h6 {
        color: var(--gold);
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 14px;
        margin-bottom: 14px;
    }
    footer.footer-desa a { color: #cbd5e1; text-decoration: none; display: block; margin-bottom: 8px; }
    footer.footer-desa a:hover { color: var(--gold); }
    .footer-copy {
        border-top: 1px solid rgba(255,255,255,.1);
        text-align: center;
        padding: 16px 0;
        margin-top: 30px;
        font-size: 13px;
    }
</style>
</head>
<body>

    <!-- TOPBAR INFO -->
    <div class="topbar-info">
        <span class="badge-info-terkini"><i class="bi bi-megaphone-fill"></i> INFO TERKINI</span>
        <div class="ticker">
            <span>Sekarang Anda dapat belanja langsung di Warung Desa yang merupakan Warung Online Masyarakat Desa Jalatrang.</span>
        </div>
        <div class="topbar-date">
            <i class="bi bi-clock"></i><span id="tanggal"></span>
        </div>
    </div>

    <!-- NAVBAR -->
    <header class="main-nav">
        <a href="{{ route('berita.index') }}" class="brand-box">
            <i class="bi bi-bank2"></i>
            <div>
                <h1 class="brand-title">PEMERINTAH DESA JALATRANG</h1>
                <div class="brand-sub">KECAMATAN CIPAKU KABUPATEN CIAMIS</div>
            </div>
        </a>

        <ul class="nav-menu">
            <li><a href="#" class="nav-home"><i class="bi bi-house-fill"></i></a></li>
            <li><a href="#">Profil</a></li>
            <li><a href="#">Kependudukan</a></li>
            <li><a href="{{ route('berita.index') }}"
                   class="{{ request()->routeIs('berita.*') ? 'active' : '' }}">Berita</a></li>
            <li><a href="#">Potensi Wisata</a></li>
            <li><a href="#">IDM & SDGs</a></li>
            <li><a href="#">Ketahanan Pangan</a></li>
            <li><a href="#">Keuangan</a></li>
            <li><a href="#">Download</a></li>
            <li><a href="#" class="nav-grid"><i class="bi bi-grid-3x3-gap-fill"></i></a></li>
        </ul>
    </header>

    @if (session('success'))
        <div class="container mt-3" style="max-width:1250px">
            <div class="alert alert-success mb-0">{{ session('success') }}</div>
        </div>
    @endif

    @yield('content')

    <!-- FOOTER -->
    <footer class="footer-desa">
        <div class="container" style="max-width:1250px">
            <div class="row g-4">
                <div class="col-md-4">
                    <strong class="text-white fs-6">PEMERINTAH DESA</strong><br>
                    <strong style="color:var(--gold)" class="fs-5">JALATRANG</strong>
                    <p class="mt-3 mb-0">Jalan Raya Jalatrang No. 1<br>Kecamatan Cipaku, Kabupaten Ciamis</p>
                </div>
                <div class="col-md-2">
                    <h6>Menu</h6>
                    <a href="#">Beranda</a>
                    <a href="{{ route('berita.index') }}">Berita</a>
                    <a href="#">Struktural</a>
                    <a href="#">APBDes</a>
                </div>
                <div class="col-md-3">
                    <h6>Link Terkait</h6>
                    <a href="#">Kemendesa</a>
                    <a href="#">Kab. Ciamis</a>
                    <a href="#">Pemprov</a>
                </div>
                <div class="col-md-3">
                    <h6>Media Sosial</h6>
                    <a href="#"><i class="bi bi-facebook me-2"></i>facebook</a>
                    <a href="#"><i class="bi bi-youtube me-2"></i>youtube</a>
                    <a href="#"><i class="bi bi-instagram me-2"></i>instagram</a>
                </div>
            </div>
        </div>
        <div class="footer-copy">© {{ date('Y') }} Pemerintah Desa Jalatrang — Semua hak dilindungi.</div>
    </footer>

    <script>
        document.getElementById('tanggal').textContent =
            new Date().toLocaleDateString('id-ID', {
                weekday: 'long', day: 'numeric', month: 'long', year: 'numeric'
            });
    </script>
</body>
</html>