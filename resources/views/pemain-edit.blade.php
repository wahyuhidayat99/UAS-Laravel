@extends('layouts.ass')
 
@section('body')
    <h1 class="mb-0">Edit Pemain</h1>
    <hr />
    <form action="/pemain/{{$pemain->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="{{ $pemain->nama }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No punggung</label>
                <input type="text" name="no_punggung" class="form-control" placeholder="No_punggung" value="{{ $pemain->no_punggung }}" >
            </div>
        </div>
        <div class="row">
        <div class="mb-3">
            <label for="club">Club</label>
            <select name="id_club" id="club" class="form-control" name="id" required>
                <option value="{{$pemain->club->id}}">{{$pemain->club->nama}}</option>
                @foreach ($club as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
            <div class="mb-3">
            <label for="negara">Negara</label>
            <select name="id_negara" id="negara" class="form-control" name="id" required>
                <option value="{{$pemain->negara->id}}">--pilih--</option>
                @foreach ($negara as $index)
                <option value="{{$index->id}}">{{$index->nama}}</option>
                @endforeach
            </select>
        </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection