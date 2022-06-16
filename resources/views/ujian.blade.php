@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6 m-auto">
                            <h4 class="fw-semibold m-auto">Daftar Ujian</h4>
                        </div>
                        <div class="col-md-6 d-flex justify-content-end">
                            <a class="btn btn-dark" href="{{ route('ujian.create') }}">Tambah Ujian</a>
                        </div>
                    </div>


                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Pertanyaan</th>
                                <th>Jawaban</th>
                                <th>Judul Materi</th>
                                <th class="text-center m-auto">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($ujian as $row)
                            <tr>
                                <td>
                                    {{ $row['pertanyaan'] }}
                                </td>
                                <td>
                                    <div class="row-12">
                                        @foreach($jawaban as $rowJ)
                                            @if($rowJ['id_ujian'] == $row['id'])
                                                <div class="col-12 m-auto">
                                                    <p>{{ $rowJ['jawaban'] }}</p>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                                <td>
                                    @foreach($materi as $rowM)
                                        @if($rowM['id'] == $row['id_materi'])
                                            {{ $rowM['judul'] }}
                                        @endif
                                    @endforeach
                                </td>

                                <td class="m-auto text-center">
                                    <form action="{{ route('ujian.destroy',$row->id) }}" method="POST">
                                        <a class="btn btn-outline-success btn-sm" href="{{ route('materi.edit',$row->id) }}">Ubah</a>
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
