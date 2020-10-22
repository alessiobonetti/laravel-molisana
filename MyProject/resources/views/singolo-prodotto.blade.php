@extends('layout.main')

@section('mainContent')
    <div class="container">
        <div class="single_product_description">
            <h1>{{$data["titolo"]}}</h1>
            <img src="{{$data["src-h"]}}" alt="" srcset="">
            <img src="{{$data["src-p"]}}" alt="" srcset="">
            <div class="description">
                <p>{!!$data["descrizione"]!!}</p>
            </div>
        </div>
    </div>
@endsection