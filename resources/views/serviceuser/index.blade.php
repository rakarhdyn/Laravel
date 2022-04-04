<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow rounded">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">TITLE</th>
                                <th scope="col">DESCRIPTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($services as $service)
                            <tr>
                                <td>{{ $service->judul }}</td>
                                <td>{!! $service->deskripsi !!}</td>
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