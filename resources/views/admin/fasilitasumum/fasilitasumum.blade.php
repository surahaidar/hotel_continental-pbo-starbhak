@extends('layouts.main')

@section('content')
<h1 class="text-center">Fasilitas Umum</h1>

<a href="/tambahkamar" class="btn btn-success mt-5 mb-4">tambah</a>
<table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Kamar</th>
            <th scope="col">Nama</th>
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
            <td>{{ $row->kamar }}</td>
            <td>{{ $row->nama }}</td>
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