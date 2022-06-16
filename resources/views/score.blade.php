@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><h3 class="h3 text-center">Nilai</h3></div>

                <div class="card-body">
                    <div class="text-center">
                        <h1 class="h1 text-success" style="font-size:100px;">{{ $score }}</h1>
                    </div>

                    <div class="text-center">
                        <a href="/home" class="btn btn-outline-secondary">Kembali</a>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
@endsection
