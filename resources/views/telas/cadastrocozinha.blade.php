@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Cozinha</title>
</head>
<body>
    @section('content')
    <div class="col-md-3 col-xs-3"></div>
    <div class="container col-md-6">
        <h3 class="text-center">
            <small class="text-muted">Cadastro de Cozinha</small>
        </h3>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body">
                <form method="POST" action="">
                    <div class="form-row">               
                        <div class="form-group col-md-5">
                            <label for="codigocozinha">Código</label>
                            <input type="text" class="form-control @error('codigocozinha') is-invalid @enderror" id="codigocozinha" placeholder="Código">
                            @error('codigocozinha')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricaocozinha">Descrição</label>
                        <textarea class="form-control @error('descricaocozinha') is-invalid @enderror" rows="5" id="descricaocozinha" placeholder="Descrição da cozinha"></textarea>
                        @error('descricaocozinha')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <a href="" class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
