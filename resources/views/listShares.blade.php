@extends('layout')

@section('content')
<a href="{{ url('formshare') }}" class="btn btn-primary btn-sm">Add Ação</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Ação</th>
                        <th>Preço UN</th>
                        <th>Total</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                {{-- CORPO TABELA --}}
                <tbody>
                        @foreach($shares as $share)
                            <tr>
                                <td>{{ $share->name }}</td>
                                <td>{{ $share->base_price }}</td>
                                <td>{{ $share->amount }}</td>
                                <td>
                                    <a type="submit" method="get" href="share/show/{{ $share->id }}" class="btn btn-primary btn-sm">Atualizar</a></td>
                                <td>
                                    <form action="share/destroy/{{ $share->id }}" method="post">     
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