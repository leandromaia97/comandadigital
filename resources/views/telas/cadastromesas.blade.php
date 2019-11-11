@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Mesas</title>
</head>
<body>
    @section('content')
    <div class="col-md-4 col-xs-3"></div>
    <div class="container col-md-4">
        <h3 class="text-center">
            <small class="text-muted">Cadastro de Mesas</small>
        </h3>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body mx-auto">
                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-7">
                            <label for="codigomesa">Código</label>
                            <input type="text" class="form-control @error('codigomesa') is-invalid @enderror" id="codigomesa" placeholder="Código">
                            @error('codigomesa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-5">
                            <label for="capacidade">Capacidade</label>
                            <input type="text" class="form-control @error('capacidade') is-invalid @enderror" id="capacidade" placeholder="Capacidade">
                            @error('capacidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control @error('status') is-invalid @enderror" id="status">
                              <option value="">Selecionar</option>
                              <option value="Livre">Livre</option>
                              <option value="Ocupada">Ocupada</option>
                              <option value="Parcialmente ocupada">Parcialmente ocupada</option>
                              <option value="Reservada">Reservada</option>
                              <option value="Sem condições de utilização">Sem condições de utilização</option>
                            </select>
                            @error('status')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="mesasmescladas">Mesas mescladas</label>
                            <textarea class="form-control @error('mesasmescladas') is-invalid @enderror" rows="5" id="mesasmescladas" placeholder="Descreva as mesas que foram unidas"></textarea>
                            @error('mesasmescladas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <a href="" class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('VerMesas')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-4 col-xs-3"></div>
    @endsection
</body>
</html>
