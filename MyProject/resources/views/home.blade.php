@extends('layout.main');
@php

  $data = config("pasta");

  $lunga = [];
  $corta = [];
  $cortissima = [];

  foreach ($data as $key => $pastaType) {
    $pastaType ["id"] = $key;
    if ($pastaType["tipo"] == "lunga") {
      $lunga[] = $pastaType;
    } elseif ($pastaType["tipo"] == "corta") {
      $corta[] = $pastaType;
    } elseif ($pastaType["tipo"] == "cortissima") {
      $cortissima[] = $pastaType;
    }
  }
  

@endphp



    @section('mainContent')
      
        <div class="container background_main">
          <section>
            <div class="wrapper_home">
              @if(!empty($lunga))
                <h2>LUNGA</h2>
                <ul class="list_type_pasta">
                  @foreach($lunga as $prodotto)
                    <li>
                      <div class="products_box">
                        <a href="prodotti/show/{{$prodotto["id"]}}"> <h3>{{$prodotto["titolo"]}}</h3></a>
                        <img src="{{$prodotto["src"]}}" alt="pasta image">
                      </div>
                    </li>
                    
                  @endforeach
                </ul> 
              @endif        
            </div>
          </section> 

          <section>
            <div class="wrapper_home">
              @if(!empty($corta))
                <h2>CORTA</h2>
                <ul class="list_type_pasta">
                  @foreach($corta as $prodotto)
                    <li>
                      <div class="products_box">
                        <a href="prodotti/show/{{$prodotto["id"]}}"> <h3>{{$prodotto["titolo"]}}</h3></a>
                        <img src="{{$prodotto["src"]}}" alt="pasta image">
                      </div>
                    </li>                
                  @endforeach
                </ul> 
              @endif           
            </div>
          </section>

          <section>
            <div class="wrapper_home">
              @if(!empty($prodotto))
                <h2>CORTISSIMA</h2>
                <ul class="list_type_pasta">
                  @foreach($cortissima as $prodotto)
                    <li>
                      <div class="products_box">
                        <a href="prodotti/show/{{$prodotto["id"]}}"> <h3>{{$prodotto["titolo"]}}</h3></a>
                        <img src="{{$prodotto["src"]}}" alt="pasta image">
                      </div>
                    </li>               
                  @endforeach
                </ul>
              @endif            
            </div>
          </section>  
        </div>    
    @endsection
  