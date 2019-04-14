@extends('layout')

@section('content')

<a href="{{ url('formhistory') }}" class="btn btn-primary btn-sm">Ações</a>

    {{-- Buscar --}}
    <form style=" margin-top: 15px;" action="{{  url('search/history') }}" method="POST">
            <div class="input-group">
                {{ csrf_field() }}
                <input type="text" class="form-control col-sm-8" name="search" placeholder="Digite um ID, uma letra ou palavra" required>
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
                        <th>Movimentação</th>
                        <th>Última Movimentação</th>
                    </tr>
                </thead>
                <tbody>
                    @if(count((array)$history) != 1)
                        <tr>
                            <td>{{ $history->customers->name }}</td>
                            <td>{{ $history->shares['name'] }}</td>
                            <td>{{ $history->quantity }}</td>
                            <td>{{ $history->base_price }}</td>
                            <td>{{ $history->type }}</td>
                            <td>{{ $history->updated_at }}</td>
                        </tr>
                    @else
                        @foreach($history as $h)
                            <tr>
                                <td>{{ $h->customers->name }}</td>
                                <td>{{ $h->shares['name'] }}</td>
                                <td>{{ $h->quantity }}</td>
                                <td>{{ $h->base_price }}</td>
                                <td>{{ $h->type }}</td>
                                <td>{{ $h->updated_at }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
