@extends('layouts.index')
@section('content')
    <div class="wrapper">
        <div class="row">
            <div class="col-lg-12">
                <a href="/kriteria/create">
                    <button type="button" class="btn btn-primary mt-3 mb-3">Tambah Data</button>
                </a>
            </div>
        </div>

        @if ($message = Session::get('inserted'))
            <div class="alert alert-success alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif ($message = Session::get('updated'))
            <div class="alert alert-primary alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif ($message = Session::get('deleted'))
            <div class="alert alert-danger alert-dismissible fade show mb-3 mt-3" role="alert">
                {{ $message }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive text-nowrap">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Kriteria</th>
                        <th scope="col">Actions</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($kriteria as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->nama_kriteria }}</td>

                            <td>

                                <a href="{{ url('kriteria/' . $item->id . '/edit') }}">
                                    <button type="button" class="btn btn-success">
                                        <i class="">Edit</i>
                                    </button>
                                </a>

                                <a href="{{ url('kriteria/' . $item->id . '/delete') }}">
                                    <button type="button" class="btn btn-danger">
                                        <i class="">Hapus</i>
                                    </button>
                                </a>
                            </td>
                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
    </div>
@endsection
