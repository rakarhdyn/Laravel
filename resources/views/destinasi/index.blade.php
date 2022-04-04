@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('destinasi.create') }}" class="btn btn-md btn-success mb-3">TAMBAH DESTINASI</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">IMAGE</th>
                                <th scope="col">NAME</th>

                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($destinasis as $destinasi)
                            <tr>
                                <td class="text-center">
                                    <img src="{{ Storage::url('public/destinasis/').$destinasi->gambar }}" class="rounded" style="width: 150px">
                                </td>
                                <td>{{ $destinasi->nama }}</td>

                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('destinasi.destroy', $destinasi->id) }}" method="POST">
                                        <a href="{{ route('destinasi.edit', $destinasi->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <div class="alert alert-danger">
                                Data Blog belum Tersedia.
                            </div>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $destinasis->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection