@extends('layouts.app')

@section('title', $berita->judul)

@section('content')
<div class="container my-4" style="max-width:1000px">
    <a href="{{ route('berita.index') }}" class="text-decoration-none">← Kembali ke Berita</a>

    <div class="card mt-3 border-0 shadow-sm" style="border-radius:12px; overflow:hidden;">
        <img src="{{ asset('storage/' . $berita->gambar) }}"
            alt="{{ $berita->judul }}"
            class="card-img-top"
            style="max-height:400px; object-fit:cover;">
        <div class="card-body p-4">
            <span class="badge badge-kategori text-white">
             {{ $berita->kategori->nama ?? 'Tanpa Kategori' }}
            </span>
            <small class="text-muted ms-1">
                {{ $berita->created_at->format('d M Y') }} • {{ $berita->user->name }} • <i class="bi bi-eye"></i> {{ $berita->dilihat }}
            </small>
            <h2 class="mt-3">{{ $berita->judul }}</h2>
            <p>{!! nl2br(e($berita->isi)) !!}</p>
            <div class="mb-3">
             @foreach ($berita->tags as $tag)
             <a href="{{ route('berita.index', ['tag' => $tag->id]) }}"
            class="tag-pill text-decoration-none">#{{ $tag->nama }}</a>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection