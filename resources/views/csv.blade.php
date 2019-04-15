@extends('layout')

@section('content')

    <div class="container py-3">
        <div class="row">
            <div class="mx-auto col-sm-6">
                <!-- form user info -->
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Upload de Arquivo</h4>
                    </div>
                    
                    <div class="card-body">
                        <form class="form" role="form" enctype="multipart/form-data" action="upload" method="POST">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Arquivo</label>
                                <div class="col-lg-9">
                                    <input name="archive" type="file" placeholder="Selecione um arquivo" accept=".csv" required>
                                </div>
                            </div>

                            {{-- Campos do csv --}}
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label form-control-label">Csv exemplo: Katarina,1,3 </label>
                                <label class="col-lg-7 col-form-label form-control-label">Corretores secundários devem ser separados com "-" Exemplo: 1-2-3 </label>
    
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                <div class="col-lg-9">
                                    <input type="submit" class="btn btn-primary" value="Enviar">
                                </div>
                            </div>
                            
                        </div>                      
                        
                    </form>

                </div>
            </div>
        </div>
    </div>    
@endsection