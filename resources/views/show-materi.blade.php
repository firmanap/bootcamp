@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 m-auto">
                            <h4 class="fw-semibold m-auto">{{ $materi->judul }}</h4>
                        </div>
                    </div>


                </div>

                <div class="card-body">

                    <div class="text-body">
                        {{ $materi->deskripsi }}
                    </div>

                    <div class="row justify-content-center m-auto">
                        <hr>
                        <div class="col-md-6 text-sm-start">
                            <a href="/form-ujian/{{ $materi->id }}" class="btn btn-info text-white">Lakukan Test</a>
                        </div>
                        <div class="col-md-6 text-secondary text-sm-end m-auto">
                            Author : {{ $materi->author }} - Email : {{ $materi->emailAuthor }}
                        </div>
                    </div>

                    <div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
