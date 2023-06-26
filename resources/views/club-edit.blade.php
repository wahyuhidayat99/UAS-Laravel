@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Edit Club</h1>
    <hr />
    <form action="/club/{{$club->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Club</label>
                <input type="text" name="nama" class="form-control" placeholder="nama" value="{{ $club->nama }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection