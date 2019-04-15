@extends('layout')

@section('content')
<a  id="btn-action" href="{{ url('formshare') }}" class="btn btn-primary">Adicionar Ação</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Posição</th>
                        <th>Ação</th>
                        <th>Preço Médio</th>]
                        <th>Qtde Comprada</th>
                        <th>Total</th>
                    </tr>
                </thead>
                {{-- CORPO TABELA --}}
                <tbody>
                        {{$cont = 1}}
                        @foreach($history as $h)
                            <tr>
                                <td>{{ $cont++ . 'º' }}</td>
                                <td>{{ $h->shares['name'] }}</td>
                                <td>{{ $h->shares['base_price'] }}</td>
                                <td>{{ $h->count }}</td>
                                <td>{{ $h->shares['amount'] }}</td>
                            </tr>
                        @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
