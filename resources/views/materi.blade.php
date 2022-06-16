@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <h4 class="fw-semibold m-auto">Materi Terdaftar</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a class="btn btn-dark" href="{{ route('materi.create') }}">Tambah Materi</a>
                        </div>
                    </div>

                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Author</th>
                                <th>Judul Materi</th>
                                <th class="text-center m-auto">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php( $no = 1 )
                        @foreach($data as $row)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row['author'] }}</td>
                                <td>{{ $row['judul'] }}</td>
                                <td class="m-auto text-center">
                                    <form action="{{ route('materi.destroy',$row->id) }}" method="POST">
                                        <a class="btn btn-outline-success btn-sm" href="{{ route('materi.edit',$row->id) }}">Ubah</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                                    </form>
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
