@extends('layout')

@section('content')
<a href="formbroker" id="btn-action" class="btn btn-primary">Adicionar Corretor</a>
    <div class="row align-content-center">
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
                            <a type="submit" method="get" href="broker/{{ $broker->id }}" class="btn btn-primary btn-sm">Atualizar</a></td>
                        <td>
                            <form action="broker/{{ $broker->id }}" method="post">     
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
