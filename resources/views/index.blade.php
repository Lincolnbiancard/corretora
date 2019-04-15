@extends('layout')

@section('content')

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
  <div class="container">
      <div class="row">
      <div class="col-md-3">
        <div class="card-counter primary">
          <i class="fa fa-code-fork"></i>
          <span class="count-numbers">Clientes: {{ $qtdeCliente }}</span>
          <span class="count-name">Clientes cadastrados</span>
        </div>
      </div>

      <div class="col-md-3">
        <div class="card-counter success">
          <i class="fa fa-database"></i>
          <span class="count-numbers">Ações: {{ $acoesVendidas }} </span>
          <span class="count-name">Total de ações vendidas</span>
        </div>
      </div>
    </div>
  </div>

@endsection