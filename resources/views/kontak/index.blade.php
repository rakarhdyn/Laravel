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
                                <th scope="col">NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">PHONE</th>
                                <th scope="col">MESSAGE</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($kontaks as $kontak)
                            <tr>
                                <td>{{ $kontak->nama }}</td>
                                <td>{{ $kontak->email }}</td>
                                <td>{{ $kontak->telp }}</td>
                                <td>{!! $kontak->pesan !!}</td>
                                <td class="text-center">
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kontak.destroy', $kontak->id) }}" method="POST">

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
                    {{ $kontaks->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('footer')
@endsection