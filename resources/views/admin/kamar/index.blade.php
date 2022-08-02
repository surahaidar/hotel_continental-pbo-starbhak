@extends('layouts.main')

@section('content')
<h1 class="text-center">Kamar</h1>

<a href="/kamar/tambahkamar" class="btn btn-success mt-5 mb-4">tambah</a>
<table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">No Kamar</th>
            <th scope="col">Harga</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Tipe Kamar</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    @php
        $no=1
    @endphp
    <tbody>
        @foreach ($data as $row)            
        <tr>
            <th scope="row">{{ $loop->iteration  }}</th>
            <td>{{ $row->nokamar }}</td>
            <td>{{ $row->harga }}</td>
            <td>{{ $row->kapasitas }}</td>
            <td>{{ $row->tipe }}</td>
            <td style="display: flex;">
                <form action="/deletedatakamar/{{$row->id}}" method="post" style="margin-right: 20px">
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  @method('delete')
                </form>
                <a type="button" href="/tampilankamar/{{$row->id}}" class="btn btn-warning">Edit</a>                                                         
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection