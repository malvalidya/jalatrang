@extends('layouts.app')

@section('title', 'Berita & Informasi')

@section('content')

<section class="page-hero">
    <div class="container" style="max-width:1250px">
        <div class="crumb"><a href="#">Beranda</a> Berita</div>
        <h1>Berita &amp; Informasi</h1>
        <p>Informasi terkini dari Desa Jalatrang</p>
    </div>
</section>

<div class="berita-wrap">
    <div class="berita-layout">

        {{-- SIDEBAR (1 kolom) --}}
        <div>
            <div class="filter-card">
                <div class="filter-header">
                    <i class="bi bi-funnel-fill me-2"></i>Filter Berita
                </div>
                <div class="filter-body">
                    <form method="GET" action="{{ route('berita.index') }}">
                        <label class="form-label">Kata Kunci</label>
                        <input type="text" name="kata_kunci" class="form-control mb-3"
                               value="{{ request('kata_kunci') }}" placeholder="Cari berita...">

                        <label class="form-label">Kategori</label>
                        <select name="kategori" class="form-select mb-3">
                            <option value="">Semua Kategori</option>
                            @foreach (['Olahraga', 'Pendidikan', 'Potensi', 'Pembangunan'] as $k)
                                <option value="{{ $k }}" @selected(request('kategori') == $k)>{{ $k }}</option>
                            @endforeach
                        </select>

                        <button type="submit" class="btn btn-primary w-100 mb-2">Cari</button>
                        <a href="{{ route('berita.index') }}" class="btn btn-outline-secondary w-100">Reset</a>
                    </form>
                </div>
            </div>

            <a href="{{ route('berita.create') }}" class="btn btn-success w-100 mt-3">+ Tambah Berita</a>
        </div>

        {{-- DAFTAR BERITA (3 kolom, lebar sama dengan sidebar) --}}
        <div class="berita-main">
            <div class="berita-list">
                @forelse ($beritas as $berita)
                    <div class="card card-berita">
                        <img class="thumb"
                             src="{{ $berita->gambar ?: 'https://placehold.co/600x300?text=Berita+Desa' }}"
                             alt="{{ $berita->judul }}">

                        <div class="card-body">
                            <div>
                                <span class="badge-kategori">{{ $berita->kategori }}</span>
                                <span class="tgl-berita">
                                    <i class="bi bi-calendar3"></i> {{ $berita->created_at->format('d M Y') }}
                                </span>
                            </div>

                            <h3 class="judul-berita">
                                <a href="{{ route('berita.show', $berita) }}" class="text-decoration-none text-dark">
                                    {{ $berita->judul }}
                                </a>
                            </h3>

                            <p class="excerpt-berita">{{ Str::limit(strip_tags($berita->isi), 120) }}</p>

                            <div class="mb-3">
                                <span class="tag-pill">#{{ Str::slug($berita->kategori) }}</span>
                                <span class="tag-pill">#desa</span>
                            </div>

                            <div class="berita-footer">
                                <span><i class="bi bi-eye-fill"></i> {{ number_format($berita->dilihat) }}</span>
                                <a href="{{ route('berita.show', $berita) }}" class="btn btn-outline-primary btn-sm">
                                    Baca <i class="bi bi-arrow-right"></i>
                                </a>
                            </div>

                            <div class="mt-3 pt-3 border-top d-flex gap-2">
                                <a href="{{ route('berita.edit', $berita) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                                <form action="{{ route('berita.destroy', $berita) }}" method="POST"
                                      onsubmit="return confirm('Yakin hapus berita ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-muted" style="grid-column:1/-1">Berita tidak ditemukan.</p>
                @endforelse
            </div>

            @if ($beritas->total() > 0)
                <p class="text-muted small mt-4 mb-2 text-center">
                    Menampilkan {{ $beritas->firstItem() }} - {{ $beritas->lastItem() }} dari {{ $beritas->total() }} hasil
                </p>
            @endif

            <div class="mt-2">
                {{ $beritas->links() }}
            </div>
        </div>

    </div>
</div>
@endsection