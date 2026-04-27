@extends('layouts.app')
@section('title', 'Svi clanci')
@section('content')
<div class="container mt-4">
    <h1>Svi clanci ({{ $clanci->count() }})</h1>

    @forelse($clanci as $clanak)
        <div class="card mb-3">
            <div class="card-body">
                <h5>{{ $clanak->naslov }}</h5>
                <p class="text-muted">
                    {{ $clanak->autor }} |
                    {{ $clanak->kategorija }} |
                    {{ $clanak->created_at->format('d.m.Y.') }} |
                    <span class="badge bg-secondary">{{ $clanak->komentari->count() }} komentara</span>
                </p>
                <p>{{ Str::limit($clanak->sadrzaj, 150) }}</p>
                <a href="{{ route('clanci.show', $clanak->id) }}" class="btn btn-primary btn-sm">Citaj vise</a>
            </div>
        </div>
    @empty
        <p class="text-muted">Nema objavljenih clanaka.</p>
    @endforelse
</div>
@endsection