@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Edit Negara</h1>
    <hr />
    <form action="/negara/{{$negara->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Negara</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $negara->nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection