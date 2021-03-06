<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <title>Cadastrar conta - LionStore</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"
        type="text/javascript"></script>
    {{-- favicon --}}
    <link rel="icon" href="https://img.icons8.com/ios/452/lion.png" type="image/png" />
    <!-- style css -->
    <link rel="stylesheet" href="/css/criarConta.css">
</head>

<body>
    <div class="container">
        <div class="logo-area">
            <div class="logo">
                <a href="/"><img src="/assets/images/logo.png" alt="#"></a>
            </div>
        </div>
        <form action="{{route('user.create')}}" method="post">
            @csrf
            <div class="row">
                <h4>Conta</h4>
                <div class="input-group input-group-icon w-100">
                    <input required type="text" name="full_name" placeholder="Nome completo" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input required type="text" name="cpf_cnpj" placeholder="CPF" />
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input required type="email" name="email" placeholder="Email" />
                    <div class="input-icon"><i class="fa fa-envelope"></i></div>
                </div>
                <div class="input-group input-group-icon">
                    <input required type="password" name="password" placeholder="Senha" />
                    <div class="input-icon"><i class="fa fa-key"></i></div>
                </div>
            </div>
            <div class="row">
                <div class="col-half">
                    <h4>Data de nascimento</h4>
                    <div class="input-group">
                        <div class="col-third">
                            <input required type="text" name="day" placeholder="DD" />
                        </div>
                        <div class="col-third">
                            <input required type="text" name="month" placeholder="MM" />
                        </div>
                        <div class="col-third">
                            <input required type="text" name="year" placeholder="AAAA" />
                        </div>
                    </div>
                </div>
                <div class="col-half">
                    <h4>Genero</h4>
                    <div class="input-group">
                        <input id="gender-male" required type="radio" name="gender" value="MAS" />
                        <label for="gender-male">MAS</label>
                        <input id="gender-female" required type="radio" name="gender" value="FEM" />
                        <label for="gender-female">FEM</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <h4>Termos e condi????o</h4>
                <div class="input-group">
                    <input id="terms" type="checkbox" required />
                    <label for="terms">Aceito os termos e condi????es de ades??o a este servi??o, e por este meio confirmo que li a pol??tica de privacidade.</label>
                </div>
            </div>
            <div class="row">
                <div>
                    <button class="btn btn-danger btn-edit">Criar conta</button>
                </div>
            </div>
        </form>
    </div><!-- /.container -->

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js"></script>
    <!-- Javascript files-->
    <script src="../js/pages/signUp.js"></script>
</body>

</html>
