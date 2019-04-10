@extends('layout')

@section('content')
<a href="formbroker" class="btn btn-primary btn-sm">Add Corretor</a>
    <div class="row align-content-center">
        <div class="col-sm">
            Uma de três colunas
        <div class="col-sm">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Corretor</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($brokers as $broker)
                    <tr>
                        <td>{{ $broker->name }}</td>
                        <td>
                            <a type="submit" method="get" href="show/{{ $broker->id }}" class="btn btn-primary btn-sm">Atualizar</a></td>
                        <td>
                            <form action="destroy/{{ $broker->id }}" method="post">     
                                <input class="btn btn-danger btn-sm" type="submit" value="Excluir" />
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
