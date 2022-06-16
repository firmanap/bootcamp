@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header"><h3 class="fw-semibold m-auto h3">Ujian</h3></div>

                    <div class="card-body">
                        <form action="{{ route('score') }}" method="POST">
                            @csrf

                            @php($no = 1)
                            @foreach($ujian as $row)
                                <div class="mb-3 row-12">
                                    <label for="exampleInputEmail1" class="form-label fw-bolder h5">{{ $no++ }}.
                                        {{ $row['pertanyaan'] }}</label>
                                    <div>
                                        @foreach($jawaban as $rows)
                                            @if($rows['id_ujian'] == $row['id'])
                                                <div class="form-check form-check-inline col-2">
                                                    <input type="text" name="materi" value="{{ $id_materi }}" hidden>
                                                    <input class="form-check-input" type="radio" name="p{{ $row['id'] }}" id="inlineRadio1" value="{{ $rows['id'] }}">
                                                    <label class="form-check-label" for="inlineRadio{{ $row['id'] }}">{{ $rows['jawaban'] }}</label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                            <button type="submit" class="btn btn-primary">Selesai</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
