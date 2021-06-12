<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu Perfil</title>
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
    <link rel="stylesheet" href="/css/meuPerfil.css">
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
                    <h2 class="h2">Editar perfil</h2>
                </div>
                <div class="form-container">
                    <form action="{{route('user.edit')}}" class="form-area" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Nome completo</span>
                            </div>
                            <input type="text" class="form-control form-input" placeholder="{{Auth::user()->full_name}}" name="full_name" aria-label="Nome" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Email</span>
                            </div>
                            <input type="email" class="form-control form-input" placeholder="{{Auth::user()->email}}" name="email" aria-label="Email" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">CPF</span>
                            </div>
                            <input type="text" class="form-control form-input" placeholder="{{Auth::user()->cpf_cnpj}}" name="cpf_cnpj" aria-label="Nome" aria-describedby="basic-addon1">
                        </div>
                        <div class="row">
                            <div>
                                <button class="btn btn-danger btn-edit">Salvar alterações</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
