@extends('layouts.main')

@section('content')
<h1 class="text-center">fasilitas kamar</h1>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    tambah
  </button>  
<table class="table table-light table-striped">
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">No Kamar</th>
            <th scope="col">Harga</th>
            <th scope="col">Kapasitas</th>
            <th scope="col">Tipe</th>
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
                <form action="/deletedatafasilitasumum/{{$row->id}}" method="post" style="margin-right: 20px">
                  @csrf
                  <button type="submit" class="btn btn-danger">Hapus</button>
                  @method('delete')
                </form>
                <a type="button" href="/tampilanfasilitasumum/{{$row->id}}" class="btn btn-warning">Edit</a>                                                         
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="container">
                <h1 class="text-center mb-4">Tambah Kamar</h1>
                  <div class="row justify-content-center">
                      <div class="col-8">
                          <div class="card">
                              <div class="card-body" style="width: 90%">
                                  <form method="POST" action="/insertdatakamar">
                                    @csrf
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">No Kamar</label>
                                        <input type="text" name="no_kamar" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
                                        {{-- @error('namaguru')
                                        <div class="text-danger">
                                          {{message}}
                                        </div>
                                        @enderror --}}
              
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Harga Kamar</label>
                                        <input type="text" name="harga" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
                                        {{-- @error('namaguru')
                                        <div class="text-danger">
                                          {{message}}
                                        </div>
                                        @enderror --}}
              
                                      </div>
                                      <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Kapasitas Kamar</label>
                                        <input type="text" name="kapasitas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              
                                        {{-- @error('namaguru')
                                        <div class="text-danger">
                                          {{message}}
                                        </div>
                                        @enderror --}}
                                      </div>
              
                                      <select class="form-select" name="tipe" aria-label="Default select example" style="width: 100%" name="">
                                          <option selected>Pilih Tipe Kamar</option>
                                          <option value="1">Superior</option>
                                          <option value="2">Deluxe</option>
                                        </select>
              
                                      
              
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
{{-- End Modal Tambah --}}

@endsection