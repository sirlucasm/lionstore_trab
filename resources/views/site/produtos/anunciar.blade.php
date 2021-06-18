<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anunciar produto</title>
    {{-- favicon --}}
    <link rel="icon" href="https://img.icons8.com/ios/452/lion.png" type="image/png" />

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>
    <!-- style css -->
    <link rel="stylesheet" href="/css/anunciar.css">
</head>
<body>
    <div>
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div>
            @include('layouts.head')
            <div class="my-container container">
                <div>
                    <h2 class="h2">Anunciar produto</h2>
                </div>
                <div class="form-container">
                    <form action="{{route('produtos.create')}}" class="form-area" method="post">
                        @csrf
                        <input type="hidden" class="form-control form-input" name="status" value="1" aria-label="status" aria-describedby="basic-addon1">
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nome produto</span>
                            </div>
                            <input required type="text" class="form-control form-input" name="name" aria-label="Nome produto" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Descrição</span>
                            </div>
                            <textarea required class="form-control form-input" name="description" aria-label="Descrição" aria-describedby="basic-addon1"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Preço (com '.')</span>
                            </div>
                            <input required type="text" class="form-control form-input" name="price" aria-label="Preço" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Marca</span>
                            </div>
                            <input required type="text" class="form-control form-input" name="marca" aria-label="Marca" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Modelo</span>
                            </div>
                            <input required type="text" class="form-control form-input" name="modelo" aria-label="Modelo" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Imagem produto (URL)</span>
                            </div>
                            <input required type="text" class="form-control form-input" name="url_image" aria-label="Imagem produto (URL)" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Tag do produto</span>
                            </div>
                            <input type="text" class="form-control form-input" name="tag" aria-label="Tag do produto" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Preço de promoção (com '.')</span>
                            </div>
                            <input type="text" class="form-control form-input" name="new_price" aria-label="Preço promoção" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Estoque</span>
                            </div>
                            <input type="number" class="form-control form-input" name="stock" aria-label="Estoque" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Categoria</span>
                            </div>
                            <select class="form-control form-input" name="product_category_id">
                                @foreach($categories as $key => $category)
                                    <option value={{$category->id}}>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div>
                                <button class="btn btn-danger btn-edit">Anunciar meu produto</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
