@extends('layouts.ass')

@section('body')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Sepatu</h1>
        <a href="sepatu-add" class="btn btn-primary">Add</a>
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
                <th>Sepatu</th>
                <th>Ukuran</th>
                <th>Pemain</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listsepatu as $data)
                <tr>
                    <td>{{$loop->iteration}} </td>
                    <td>{{$data->id}}</td>
                    <td>{{$data->sepatu}}</td>
                    <td>{{$data->ukuran}}</td>
                    <td>
                    @foreach($data->pemain as $pemain)
                        - {{$pemain->nama}} <br>
                    @endforeach
                    </td>
                
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="sepatu-edit/{{$data->id}}" type="button" class="btn btn-warning">Edit</a>
                            <form action="/sepatu/{{$data->id}}" method="POST"  class="btn btn-danger p-0" >
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
