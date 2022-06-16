@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header h4">Tambah Ujian</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('ujian.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-2 col-form-label text-md-end">Judul Materi</label>

                            <div class="col-md-8">
                                <select name="judul" id="judul" class="form-control form-select">
                                    @foreach($materi as $row)
                                        <option value="{{ $row['id'] }}">{{ $row['judul'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="pertanyaan" class="col-md-2 col-form-label text-md-end">Pertanyaan</label>

                            <div class="col-md-8">
                                <input id="pertanyaan" type="text" class="form-control " name="pertanyaan" value="{{ old('pertanyaan') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jawaban" class="col-md-2 col-form-label text-md-end">Opsi Jawaban 1</label>

                            <div class="col-md-8">
                                <input id="jawaban1" type="text" class="form-control" name="jawaban1" value="{{ old('jawaban1') }}" required>

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jawaban" class="col-md-2 col-form-label text-md-end">Opsi Jawaban 2</label>

                            <div class="col-md-8">
                                <input id="jawaban2" type="text" class="form-control" name="jawaban2" value="{{ old('jawaban2') }}" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="jawaban" class="col-md-2 col-form-label text-md-end">Jawaban yang benar</label>

                            <div class="form-check form-check-inline col-2 m-lg-2">
                                <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="1">
                                <label class="form-check-label" for="inlineRadio">Opsi Jawaban 1</label>
                            </div>
                            <div class="form-check form-check-inline col-2 m-lg-2">
                                <input class="form-check-input" type="radio" name="jawaban" id="inlineRadio1" value="2">
                                <label class="form-check-label" for="inlineRadio">Opsi Jawaban  2</label>
                            </div>
                        </div>



                        <div class="row mb-0">
                            <div class="col-md-2 offset-md-2">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Tambah') }}
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
