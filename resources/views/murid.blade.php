@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-12 m-auto">
                                <h4 class="fw-semibold m-auto">Murid Terdaftar</h4>
                            </div>
                        </div>


                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Murid</th>
                                <th>Email</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @php( $no = 1)
                            @foreach($data as $row)
                            <tr>
                                <td class="m-auto">{{ $no++ }}</td>
                                <td class="m-auto">{{ $row['name'] }}</td>
                                <td class="m-auto">{{ $row['email'] }}</td>
                                <td class="m-auto text-center">
                                    <form action="{{ route('delete.murid',$row->id) }}" method="POST">
{{--                                        <a class="btn btn-outline-success btn-sm" href="{{ route('sisw.edit',$row->id) }}">Ubah</a>--}}
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
                                </td>
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
