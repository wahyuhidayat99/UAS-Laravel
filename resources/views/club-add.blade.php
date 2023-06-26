@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Add Club</h1>
    <hr />
    <form action="club" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="nama">
            </div>
        </div>
        <div class="mb-3">
            <label for="negara">Negara</label>
            <select name="id_negara" id="negara" class="form-control" name="id" required>
                <option value="">--pilih--</option>
                @foreach ($negara as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection