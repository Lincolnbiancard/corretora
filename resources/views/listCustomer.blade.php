@extends('layout')

@section('content')
<a id="btn-action" href="{{ url('formcustomer') }}" class="btn btn-primary">Adicionar Cliente</a>
    <div class="row align-content-center">
            <table class="lin-table">
                <thead>
                    <tr>
                        <th>Cliente</th>
                        <th>Corretor Preferencial</th>
                        <th>Corretores Secundários</th>
                        <th>Atualizar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    @if(isset($newCostumers))
                        @foreach($newCostumers as $customer)
                            <tr>
                                <td>{{ $customer->id . " - " . $customer->name}}</td>
                                    @if(is_null($customer->brokers['name']))
                                        <td>Sem corretor associado</td>
                                    @else
                                        <td>{{ $customer->brokers['name'] }}</td>
                                    @endif
                                <td>
                                    @foreach($customer->overBrokers as $broker)
                                        {{$broker['name']}}
                                        @if(!$loop->last)
                                            ,
                                        @endif
                                    @endforeach
                                </td>
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
                    @endif
                    @foreach($customers as $customer)
                        <tr>
                            <td>{{ $customer->id . " - " . $customer->name}}</td>
                            @if(is_null($customer->brokers['name']))
                                <td>Sem corretor associado</td>
                            @else
                                <td>{{ $customer->brokers['name'] }}</td>
                            @endif
                            <td>
                                @foreach($customer->overBrokers as $broker)
                                    {{$broker['name']}}
                                    @if(!$loop->last)
                                        ,
                                    @endif
                                @endforeach
                            </td>
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
