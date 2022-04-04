@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('paket.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PAKET</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">DESKRIPSI</th>
                                <th scope="col">HARGA</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($pakets as $paket)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/pakets/').$paket->gambar }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $paket->nama }}</td>
                                <td>{!! $paket->deskripsi !!}</td>
                                <td>{!! $paket->harga !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('paket.destroy', $paket->id) }}" method="POST">
                                        <a href="{{ route('paket.edit', $paket->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data paket belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $pakets->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection