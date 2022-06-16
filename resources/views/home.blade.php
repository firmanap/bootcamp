@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-12 m-auto">
                            <h4 class="fw-semibold m-auto">Daftar Materi Tersedia</h4>
                        </div>
                    </div>


                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Materi</th>
                                <th class="text-center">Nilai</th>
                                <th class="text-center m-auto"></th>
                            </tr>
                        </thead>
                        <tbody>
                        @php( $no = 1 )
                        @foreach( $data as $row )
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row['judul'] }}</td>
                                <td class="m-auto text-center">
                                    @foreach($nilai as $rowN)
                                        @if($rowN['id_materi'] == $row['id'] && $rowN['id_user'] == session()->get('id_user'))
                                            {{ $rowN['nilai'] }}
                                        @endif

                                    @endforeach
                                </td>
                                <td class="m-auto text-center"><a class="btn btn-outline-success btn-sm" href="{{ route('materi.show', $row->id) }}">Belajar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
