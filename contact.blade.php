@extends('layouts.app')

@section('content')
<section class="py-5" style="background: radial-gradient(circle at top, #0f172a, #020617); min-height: 100vh;">
  <div class="container">
    <h2 class="text-center text-light fw-bold mb-2">Contact Me</h2>
    <p class="text-center text-muted mb-5">Silakan tinggalkan komentar di bawah ini 👇</p>

    @if(session('success'))
      <div class="alert alert-success text-center">
        {{ session('success') }}
      </div>
    @endif

    <div class="row g-4">
      <!-- FORM KOMENTAR -->
      <div class="col-md-6">
        <div class="bg-dark p-4 rounded-4 shadow text-white">
          <h5 class="fw-bold mb-4">Tulis Komentar</h5>

          <form action="{{ route('comments.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
              <label class="form-label text-muted">Nama</label>
              <input type="text" name="name" class="form-control bg-black border-secondary text-white" required>
            </div>

            <div class="mb-3">
              <label class="form-label text-muted">Foto Profil (opsional)</label>
              <input type="file" name="avatar" class="form-control bg-black border-secondary text-white">
              <small class="text-muted">Max 5MB</small>
            </div>

            <div class="mb-3">
              <label class="form-label text-muted">Komentar</label>
              <textarea name="message" rows="4" class="form-control bg-black border-secondary text-white" required></textarea>
            </div>

            <button type="submit" class="btn w-100 text-white fw-bold" style="background: linear-gradient(to right, #7f5af0, #8b5cf6); border: none;">
              <i class="bi bi-send-fill me-1"></i> Kirim Komentar
            </button>
          </form>
        </div>
      </div>

      <!-- DAFTAR KOMENTAR -->
      <div class="col-md-6">
        <div class="bg-dark p-4 rounded-4 shadow text-white">
          <h5 class="fw-bold mb-4">Komentar Terbaru ({{ count($comments) }})</h5>

          @forelse($comments as $comment)
            <div class="mb-4 border-bottom pb-3">
              <div class="d-flex align-items-center mb-2">
                @if($comment->avatar)
                  <img src="{{ asset('storage/' . $comment->avatar) }}" class="rounded-circle me-3" width="40" height="40" style="object-fit: cover;">
                @else
                  <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
                    {{ strtoupper(substr($comment->name, 0, 1)) }}
                  </div>
                @endif

                <div>
                  <strong class="text-light">{{ $comment->name }}</strong><br>
                  <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
                </div>
              </div>
              <p class="mb-0 text-light">{{ $comment->message }}</p>
            </div>
          @empty
            <p class="text-muted">Belum ada komentar.</p>
          @endforelse
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
