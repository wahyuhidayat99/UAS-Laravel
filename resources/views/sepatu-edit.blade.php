@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Edit Sepatu</h1>
    <hr />
    <form action="/sepatu/{{$sepatu->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Sepatu</label>
                <input type="text" name="sepatu" class="form-control" placeholder="sepatu" value="{{ $sepatu->sepatu }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Ukuran</label>
                <input type="text" name="ukuran" class="form-control" placeholder="ukuran" value="{{ $sepatu->ukuran }}" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection