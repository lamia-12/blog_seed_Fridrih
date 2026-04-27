@extends('layouts.app')
@section('title', $clanak->naslov)
@section('content')
<div class="container mt-4" style="max-width:760px">
    <a href="{{ route('clanci.index') }}" class="btn btn-secondary mb-3">&larr; Natrag</a>
    <h1>{{ $clanak->naslov }}</h1>
    <p class="text-muted">
        {{ $clanak->autor }} · {{ $clanak->kategorija }} ·
        {{ $clanak->created_at->format('d.m.Y.') }}
    </p>
    <hr>
    <div>{!! nl2br(e($clanak->sadrzaj)) !!}</div>

    <hr class="mt-5">
    <h3>Komentari ({{ $clanak->komentari->count() }})</h3>

    @forelse($clanak->komentari as $komentar)
        <div class="card mb-2">
            <div class="card-body">
                <strong>{{ $komentar->ime_autora }}</strong>
                <small class="text-muted">{{ $komentar->created_at->diffForHumans() }}</small>
                <p class="mb-0 mt-1">{{ $komentar->tekst }}</p>
            </div>
        </div>
    @empty
        <p class="text-muted">Nema odobrenih komentara.</p>
    @endforelse
</div>
@endsection