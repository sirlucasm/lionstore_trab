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
    <link rel="stylesheet" href="/css/carrinho.css">
</head>
<body>
    <div>
        <div>
            @include('layouts.head')
            <div class="container content">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="my-5">
                    <h3>Meu carrinho</h3>
                </div>
                <div class="items">
                    @if($items->count() > 0)
                        @foreach($items as $item)
                            <div class="item col-lg-3 col-md-6 col-sm-12">
                                <div class="row justify-content-center">
                                    <img src="{{ $item->product->url_image }}" width="90px"/>
                                </div>
                                <div class="item-texts">
                                    <a href="#">{{$item->product->name}}</a>
                                    <div class="item-stars">
                                        @for($i = 0; $i < $item->product->stars; $i++)
                                            <i class="bi bi-star-fill"></i>
                                        @endfor
                                    </div>
                                    <div class="item-prices">
                                        <div>
                                            @if($item->product->new_price)
                                                <p>R$ {{$item->product->price}}</p>
                                            @endif
                                        </div>
                                        <div>
                                            @if(!$item->product->new_price)
                                                <h3>R$ {{$item->product->price}}</h3>
                                            @else
                                                <h3>R$ {{$item->product->new_price}}</h3>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="quantity-input row justify-content-start">
                                    <form method="post" action="{{ route('carrinho.updateQuantity', ['cart'=> $item->id]) }}">
                                        @csrf
                                        <input type="number" onchange="this.form.submit()" value="{{$item->quantity}}" name="quantity" min="1" max="{{$item->product->stock}}"/>
                                    </form>
                                </div>
                                <div class="delete-btn row justify-content-center">
                                    <a href="{{route('carrinho.delete', ['cart'=> $item->id])}}">Excluir produto</a>
                                </div>
                            </div>
                        @endforeach
                        <div>
                            <div class="row justify-content-end">
                                <h4>Total: R${{ $totalPrice }}</h4>
                            </div>
                        </div>
                        <div class="buy-btn row justify-content-end">
                            <a href=""><i class="bi bi-cart"></i> Finalizar compra</a>
                        </div>
                    @else
                        <div>
                            <spam>Nenhum produto no carrinho ainda :(</spam>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>
