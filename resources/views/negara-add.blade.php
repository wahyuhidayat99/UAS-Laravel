@extends('layouts.ass')

@section('body')
    <h1 class="mb-0">Add Negara</h1>
    <hr />
    <form action="negara" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection