@extends('layout.main');

@section('title')
    Prodotti;
@endsection

@section('mainContent')
<div class="container background_main">
    <section>
      <div class="wrapper">
        @if(!empty($type))
            @foreach($type as  $key => $pastas)
                
                <h2>{{$key}}</h2>
                <ul class="list_type_pasta">
                    @foreach($pastas as $prodotto)
                        <li>
                        <div class="products_box">
                            <a href="{{route('dettaglio-prodotto', $prodotto['id'])}}"> <h3>{{$prodotto["titolo"]}}</h3></a>
                            <img src="{{$prodotto["src"]}}" alt="pasta image">
                        </div>
                        </li>
                        
                    @endforeach
                </ul>                
            @endforeach
        @endif        
      </div>
    </section> 
  </div>    

@endsection