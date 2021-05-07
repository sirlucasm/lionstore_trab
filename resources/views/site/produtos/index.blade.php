<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    {{-- favicon --}}
    <link rel="icon" href="https://img.icons8.com/ios/452/lion.png" type="image/png" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- style css -->
    <link rel="stylesheet" href="/css/produtos.css">
</head>
<body>
    <div>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            @include('layouts.head')
            @include('layouts.filters')
            <div class="container content">
                <div class="my-5">
                    @if(isset($query))
                        <h3>Resultados da busca: {{$query}}</h3>
                    @endif
                </div>
                <div class="products row">
                    @foreach($products as $product)
                        <div class="product col-lg-3 col-md-6 col-sm-12">
                            <div class="row justify-content-center">
                                <img src="{{ $product->url_image }}" width="200px"/>
                            </div>
                            <div class="product-texts">
                                <a href="#">{{$product->name}}</a>
                                <div class="product-description">
                                    <p>{{$product->description}}</p>
                                </div>
                                <div class="product-stars">
                                    @for($i = 0; $i < $product->stars; $i++)
                                        <i class="bi bi-star-fill"></i>
                                    @endfor
                                </div>
                                <div class="product-prices">
                                    <div>
                                        @if($product->new_price)
                                            <p>R$ {{$product->price}}</p>
                                        @endif
                                    </div>
                                    <div>
                                        @if(!$product->new_price)
                                            <h3>R$ {{$product->price}}</h3>
                                        @else
                                            <h3>R$ {{$product->new_price}}</h3>
                                        @endif
                                    </div>
                                </div>
                                <div class="product-aviso row justify-content-center">
                                    <span>A VISTA NO BOLETO 15% DE DESCONTO</span>
                                </div>
                            </div>
                            <div class="buy-btn row justify-content-center">
                                <a href=""><i class="bi bi-cart"></i> Comprar</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</body>
</html>
