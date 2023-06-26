@extends('layouts.ass')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Pemain</h1>
        <a href="pemain-add" class="btn btn-primary">Add</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover table-bordered border border-2">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>ID</th>
                <th>Nama</th>
                <th>No punggung</th>
                <th>Klub</th>
                <th>Negara</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listpemain as $data)
                <tr>
                    <td>{{$loop->iteration}} </td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->no_punggung}}</td>
                    <td>{{$data->club['nama']}}</td>
                    <td>{{$data->negara['nama']}}</td>

                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="pemain-edit/{{$data->id}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="/pemain/{{$data->id}}" method="POST"  class="btn btn-danger p-0" >
                                @csrf
                                @method('DELETE')
                                <button type = "submit" name="submit" class="btn btn-danger m-0" onclick="return confirm('Delete?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>    
    </table>    
@endsection
