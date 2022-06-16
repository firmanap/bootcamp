@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">Tambah Materi</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('materi.update', $materi->id) }}">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="author" class="col-md-2 col-form-label text-md-end">Nama Author</label>

                            <div class="col-md-8">
                                <input id="author" type="text" class="form-control @error('author') is-invalid @enderror" name="author" value="{{ $materi->author }}" required autocomplete="author">

                                @error('author')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="emailAuthor" class="col-md-2 col-form-label text-md-end">Email Author</label>

                            <div class="col-md-8">
                                <input id="emailAuthor" type="email" class="form-control @error('emailAuthor') is-invalid @enderror" name="emailAuthor" value="{{ $materi->emailAuthor }}" required autocomplete="emailAuthor">

                                @error('emailAuthor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="judul" class="col-md-2 col-form-label text-md-end">Judul Materi</label>

                            <div class="col-md-8">
                                <input id="judul" type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $materi->judul }}" required autocomplete="judul">

                                @error('judul')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="deskripsi" class="col-md-2 col-form-label text-md-end">Deskripsi (isi materi)</label>

                            <div class="col-md-8">
                                <input id="deskripsi" type="text" style="height: 200px; " class="form-control text-body @error('deskripsi') is-invalid @enderror" name="deskripsi" value="{{ $materi->deskripsi }}" required autocomplete="deskripsi">

                                @error('deskripsi')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-2 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Simpan') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
