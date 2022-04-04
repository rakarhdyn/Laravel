@extends('layout\template')

@section('content')
@parent

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <a href="{{ route('about.create') }}" class="btn btn-md btn-success mb-3">TAMBAH ABOUT</a>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">PHONE</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CITY</th>
                                <th scope="col">DESCRIPTION</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($abouts as $about)
                            <tr>
                                <td>{{ $about->telp }}</td>
                                <td>{{ $about->email }}</td>
                                <td>{{ $about->kota }}</td>
                                <td>{!! $about->deskripsi !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('about.destroy', $about->id) }}" method="POST">
                                        <a href="{{ route('about.edit', $about->id) }}" class="btn btn-sm btn-primary">EDIT</a>
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
                    {{ $abouts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection