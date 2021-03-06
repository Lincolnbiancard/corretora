<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Corretora</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active"><a class="nav-link" href="{{ url('init') }}">ÍNICIO</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('broker') }}">Corretores</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('customer') }}">Clientes</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('share') }}">Ações</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('listhistory') }}">Movimentação de Ações</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('csv') }}">Arquivo CSV</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('listbought') }}">Ranking de Ações</a></li>
            <li class="nav-item active"><a class="nav-link" href="#">     </a></li>
            <li class="nav-item active"><a class="nav-link" href="{{ url('formhistory') }}">Comprar/Vender Ações</a></li>
            
        </ul>
    </div>
</nav>

@yield('content')
