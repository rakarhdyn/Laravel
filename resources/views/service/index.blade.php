@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('service.create') }}" class="btn btn-md btn-success mb-3">TAMBAH SERVIS</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td>{{ $service->judul }}</td>
                                <td>{!! $service->deskripsi !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('service.destroy', $service->id) }}" method="POST">
                                        <a href="{{ route('service.edit', $service->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                    {{ $services->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection