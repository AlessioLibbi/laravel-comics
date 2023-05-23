@extends('layouts.app')

@section('content')
  
    <div class="content-box">
        <div class="jumbo">
            <img class="jumbo-img" src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
        <h3>CURRENT SERIES</h3>

        <div class="content-container">
             <div class="row row-cols-6 g-3">
                @foreach ($card as $single_card)
                    <div class="col d-flex">
                        <div class="card">
                            <img src="{{ $single_card['thumb'] }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $single_card['series'] }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <button>LOAD MORE</button>
    </div>
    

    
@endsection