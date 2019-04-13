@extends('layout')

@section('content')
<a href="{{ url('formcustomer') }}" class="btn btn-primary btn-sm">Add Cliente</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Corretor Preferencial</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>

                        @foreach($customers as $customer)
                            <tr>
                                <td>{{ $customer->id . " - " . $customer->name}}</td>
                                <td>{{ $customer->brokers->name }}</td>
                                <td>
                                    <a type="submit" method="get" href="customer/{{ $customer->id }}" class="btn btn-primary btn-sm">Atualizar</a></td>
                                    <td>
                                    <form action="customer/{{ $customer->id }}" method="post">     
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
