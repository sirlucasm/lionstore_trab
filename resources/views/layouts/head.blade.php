<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/head.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="head">
        <div class="head-flex">
            <div class="logo-area">
                <a href="/produtos"><img src="/assets/images/logo.png" alt="Logo LionStore"/></a>
            </div>
            <div class="menu">
                <a href="/produtos" class="menu-items menu-items-p dropdown">
                    Produtos
                </a>
                <div class="dropdown-content">
                    <a href="/produtos?c=camisas" class="dropdown-items">Camisas</a>
                    <a href="/produtos?c=calças" class="dropdown-items">Calças</a>
                    <a href="/produtos?c=bermudas" class="dropdown-items">Bermudas</a>
                    <a href="/produtos?c=shorts" class="dropdown-items">Shorts</a>
                    <a href="/produtos?c=joias" class="dropdown-items">Joias</a>
                    <a href="/produtos?c=relogios" class="dropdown-items">Relógios</a>
                    <a href="/produtos?c=calçados" class="dropdown-items">Calçados</a>
                </div>
                <a href="/sobre" class="menu-items">Sobre</a>
                <a href="/meu-historico" class="menu-items">Meu Histórico</a>
                <a href="{{route('produtos.anunciar')}}" class="menu-items">Anunciar</a>
                <a href="/carrinho" class="menu-items menu-cart"><i class="bi bi-cart"></i>   </a>
                <a class="menu-items menu-items-p dropdown-2">
                    <img src="/assets/images/default_pic.png" alt="Default profile picture" />
                </a>
                <div class="dropdown-content-2">
                    <a href="/meu-perfil" class="dropdown-items">Meu perfil</a>
                    <a href="{{route('auth.logout')}}" class="dropdown-items">Sair</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
