@extends('layout')

@section('content')
    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Cadastro de Cliente</h4>
                    </div>
                    <div class="card-body">
                        <form class="form" role="form" autocomplete="off" action="customer/store" method="POST">
                            {{ csrf_field() }}
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Nome do Cliente</label>
                                <div class="col-lg-9">
                                    <input class="form-control" id="name" name="name" type="text">
                                </div>
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Corretor Preferencial</label>
                                <div class="col-lg-9">
                                    <select id="preferencial_broker" name="preferencial_broker" placeholder="Corretor Preferencial" 
                                      class="form-control" required="true">
                                            @foreach($brokers as $broker)
                                                <option value="{{$broker->id}}">{{$broker->name}}</option>
                                            @endforeach 
                                    </select>
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
                <!-- /form user info -->
            </div>
        </div>
    </div>
@endsection