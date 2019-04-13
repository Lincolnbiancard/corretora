@extends('layout')

@section('content')

    <div class="container py-0">
        <div class="row">
            <div class="mx-auto col-sm-6">
                        <!-- form user info -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Atualizando Ação {{ $shares->name }}</h4>
                            </div>
                            <div class="card-body">
                            <form class="form" role="form" action="{{ url('/share/' . $shares->id) }}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="_method" value="PUT">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Nome Ação</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="name" value="{{ $shares->name }}"  name="name" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Preço UN</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="base_price" value="{{ $shares->base_price }}"  name="base_price" type="text">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label">Total</label>
                                        <div class="col-lg-9">
                                            <input class="form-control" id="amount" value="{{ $shares->amount }}"  name="amount" type="text">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-9">
                                            
                                            <input type="submit" class="btn btn-primary" value="Salvar">
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