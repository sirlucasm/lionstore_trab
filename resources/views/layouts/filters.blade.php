<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="stylesheet" href="/css/filters.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
</head>
<body>
    <div class="filter">
        <div class="filter-title">
            <h4>Filtragem</h4>
        </div>
        <div>
            <div class="filter-search">
                <div class="search-content">
                    <input type="search" class="form-control form-input" placeholder="Busque por itens" name="search" aria-label="Text" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="search-btn">
                <button class="btn btn-danger btn-edit">Buscar</button>
            </div>
        </div>
        <div class="filter-list">
            <ul>
                <li id="lowPrice"><a>Menor preço</a></li>
                <li id="highPrice"><a>Maior preço</a></li>
                <li id="ascAlph"><a>Ordem alfabética [A-Z]</a></li>
                <li id="descAlph"><a>Ordem alfabética [Z-A]</a></li>
                <div>
                    <button onclick="createLink();" class="btn btn-default btn-edit mt-3">Filtrar</button>
                </div>
            </ul>
        </div>
    </div>

    {{--
        href="/produtos?price=0"
        href="/produtos?price=1"
        href="/produtos?alf=0"
        href="/produtos?alf=1"
    --}}

    <script>
        let lowPrice = document.getElementById('lowPrice');
        let highPrice = document.getElementById('highPrice');
        let ascAlph = document.getElementById('ascAlph');
        let descAlph = document.getElementById('descAlph');

        let link = '/produtos?';

        let clicked1 = false;
        let clicked2 = false;
        let clicked3 = false;
        let clicked4 = false;

        lowPrice.addEventListener("click", (event) => {
            if (!clicked1) {
                clicked1 = true;
                lowPrice.classList.add("filter-item-active");
            } else {
                clicked1 = false;
                lowPrice.classList.remove("filter-item-active");
            }
        });

        highPrice.addEventListener("click", (event) => {
            if (!clicked2) {
                clicked2 = true;
                highPrice.classList.add("filter-item-active");
            } else {
                clicked2 = false;
                highPrice.classList.remove("filter-item-active");
            }
        });

        ascAlph.addEventListener("click", (event) => {
            if (!clicked3) {
                clicked3 = true;
                ascAlph.classList.add("filter-item-active");
            } else {
                clicked3 = false;
                ascAlph.classList.remove("filter-item-active");
            }
        });

        descAlph.addEventListener("click", (event) => {
            if (!clicked4) {
                clicked4 = true;
                descAlph.classList.add("filter-item-active");
            } else {
                clicked4 = false;
                descAlph.classList.remove("filter-item-active");
            }
        });

        function createLink() {
            if (clicked1) {
                window.location.href = `${link}price=0`;
                return;
            }
            if (clicked2) {
                window.location.href = `${link}price=1`;
                return;
            }
            if (clicked3) {
                window.location.href = `${link}alf=0`;
                return;
            }
            if (clicked4) {
                window.location.href = `${link}alf=1`;
                return;
            }
            // if (clicked1 && clicked3) {
            //     window.location.href = `${link}price=0&alf=0`;
            //     return;
            // }
            // if (clicked2 && clicked4) {
            //     window.location.href = `${link}price=1&alf=1`;
            //     return;
            // }
            // if (clicked1 && clicked4) {
            //     window.location.href = `${link}price=0&alf=1`;
            //     return;
            // }
            // if (clicked2 && clicked3) {
            //     window.location.href = `${link}price=1&alf=0`;
            //     return;
            // }
        }
    </script>
</body>
</html>
