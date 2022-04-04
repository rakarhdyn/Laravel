@extends('layout\template_user')

@section('content')
@parent
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <form action="{{ route('paketuser.store') }}" method="POST" enctype="multipart/form-data">

                        @csrf

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Pemesan</label>
                            <input type="text" class="form-control @error('nama_pemesan') is-invalid @enderror" name="nama_pemesan" value="{{ old('nama_pemesan') }}" placeholder="Masukkan Nama Pemesan">

                            <!-- error message untuk nama -->
                            @error('nama_pemesan')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukkan Email">

                            <!-- error message untuk nama -->
                            @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">No Telepon</label>
                            <input type="number" class="form-control @error('no_tlp') is-invalid @enderror" name="no_tlp" value="{{ old('no_tlp') }}" placeholder="Masukkan Nomor Telfon">

                            <!-- error message untuk nama -->
                            @error('no_tlp')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="font-weight-bold">Nama Paket</label>
                            <input type="text" class="form-control @error('nama_paket') is-invalid @enderror" name="nama_paket" value="{{ old('nama_paket') }}" placeholder="Masukkan Nama Paket">

                            <!-- error message untuk nama -->
                            @error('nama_paket')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="font-weight-bold">HARGA</label>
                            <input type="text" class="form-control @error('harga') is-invalid @enderror" name="harga" rows="5" placeholder="Masukkan Harga">{{ old('harga') }}

                            <!-- error message untuk harga -->
                            @error('harga')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <button type="reset" class="btn btn-md btn-warning">RESET</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection