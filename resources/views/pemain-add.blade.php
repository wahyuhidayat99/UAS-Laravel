@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Add Pemain</h1>
    <hr />
    <form action="pemain" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="no_punggung" class="form-control" placeholder="No_punggung">   
            </div>
        </div>
        <div class="row mb-3">
        <div class="mb-3">
            <label for="club">Club</label>
            <select name="id_club" id="club" class="form-control" name="id" required>
                <option value="">--pilih--</option>
                @foreach ($club as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
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
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection