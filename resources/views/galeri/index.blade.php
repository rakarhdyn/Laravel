@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('galeri.create') }}" class="btn btn-md btn-success mb-3">TAMBAH Galeri</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($galeris as $galeri)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/galeris/').$galeri->gambar }}" class="rounded" style="width: 150px">
                                </td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('galeri.destroy', $galeri->id) }}" method="POST">
                                        <a href="{{ route('galeri.edit', $galeri->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data galeri belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $galeris->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection