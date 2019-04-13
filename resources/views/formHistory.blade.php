@extends('layout')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Compra e Venda de Ações</h4>
                    </div>
                    
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="history/store" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Ação</label>
                                <div class="col-lg-9">
                                    <select id="id_share" name="id_share" placeholder="Ação" 
                                    class="form-control" required="true">
                                            @foreach($shares as $share)
                                                <option value="{{$share->id}}">{{$share->name}}</option>
                                            @endforeach 
                                    </select>
                                </div>
                            </div>  
                        </div>   
                        
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Cliente</label>
                                <div class="col-lg-9">
                                    <select id="id_customer" name="id_customer" placeholder="Ação" 
                                    class="form-control" required="true">
                                            @foreach($customers as $customer)
                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                            @endforeach 
                                    </select>
                                </div>
                            </div>  
                        </div>
                        
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Quantidade</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="quantity" name="quantity" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Tipo</label>
                                <div class="col-lg-9">
                                    <select id="type" name="type" placeholder="Tipo" 
                                    class="form-control" required="true">
                                            <option value="compra">Compra</option>
                                            <option value="venda">Venda</option>
                                    </select>
                                </div>
                            </div>  
                        </div>

                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Preço Médio</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="base_price" name="base_price" type="text">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-9">
                                <input type="submit" class="btn btn-primary" value="Cadastrar">
                                <input type="reset" class="btn btn-secondary" value="Limpar">
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection