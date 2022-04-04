@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pemesan</th>
                                <th scope="col">Email</th>
                                <th scope="col">No Telepon</th>
                                <th scope="col">Nama Paket</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pesans as $pesan)
                            <tr>
                                <td>{{ $pesan->nama_pemesan}}</td>
                                <td>{!! $pesan->email !!}</td>
                                <td>{{ $pesan->no_tlp }}</td>
                                <td>{!! $pesan->nama_paket !!}</td>
                                <td>{!! $pesan->harga !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('pesan.destroy', $pesan->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data About belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection