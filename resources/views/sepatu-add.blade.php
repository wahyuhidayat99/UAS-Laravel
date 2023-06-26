@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Add Sepatu</h1>
    <hr />
    <form action="sepatu" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="sepatu" class="form-control" placeholder="sepatu">
            </div>
            <div class="col">
                <input type="text" name="ukuran" class="form-control" placeholder="ukuran">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection