@extends('layout')

@section('content')
<a href="{{ url('formhistory') }}" class="btn btn-primary btn-sm">Ações</a>

    {{-- Buscar --}}
    <form style=" margin-top: 15px;" action="{{  url('listhistory') }}" method="POST">
            <div class="input-group">
                {{ csrf_field() }}
                <input type="text" class="form-control col-sm-8" name="criterio" placeholder="Digite um ID, uma letra ou palavra">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Buscar</button>
                </span>
            </div><!-- /input-group -->
    </form>
    
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Ação</th>
                        <th>Quantidade</th>
                        <th>Preço Médio</th>
                        <th>Última Movimentação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($history as $h)
                        <tr>
                            <td>{{ $h->customers->name }}</td>
                            <td>{{ $h->shares->name }}</td>
                            <td>{{ $h->quantity }}</td>
                            <td>{{ $h->base_price }}</td>
                            <td>{{ $h->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
