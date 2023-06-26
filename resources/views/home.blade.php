@extends('layouts.app')
@include('layouts.navbar')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">       
                <div class="card-header" style="background-color: #1abc9c; color: #fff;">{{ __('Pemain') }}</div>

                <div class="card-body" style="background-color: #f2f2f2;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="data:image/jpeg;base64,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" alt="Gambar Pemain 1" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://images.tokopedia.net/img/JFrBQq/2022/11/14/54d36c57-d9a7-45b0-9617-f707da9617fa.jpg" alt="Gambar Pemain 2" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://images.tokopedia.net/img/JFrBQq/2022/11/14/f366a2a2-3a97-4c67-a3b7-4e607b1ada5b.jpg" alt="Gambar Pemain 3" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: #1abc9c; color: #fff;">{{ __('negara') }}</div>

                <div class="card-body" style="background-color: #f2f2f2;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Flag_of_Argentina.svg/240px-Flag_of_Argentina.svg.png" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Flag_of_Portugal.svg/225px-Flag_of_Portugal.svg.png" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Flag_of_Brazil.svg/1280px-Flag_of_Brazil.svg.png" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="background-color: #1abc9c; color: #fff;">{{ __('Club') }}</div>

                <div class="card-body" style="background-color: #f2f2f2;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://upload.wikimedia.org/wikipedia/id/thumb/4/47/FC_Barcelona_%28crest%29.svg/1200px-FC_Barcelona_%28crest%29.svg.png" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://cdn.kibrispdr.org/data/411/gambar-klub-sepak-bola-7.webp" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="player-profile" style="background-color: #fff; padding: 20px; text-align: center;">
                                <img src="https://assets.stickpng.com/thumbs/580b57fcd9996e24bc43c4d8.png" alt="" class="img-fluid" style="border-radius: 0%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
