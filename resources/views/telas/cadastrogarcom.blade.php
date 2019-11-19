@extends('layouts.app')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Garçom - ComandaDigital</title>
</head>
<body>
    @section('content')
    <div class="col-md-3 col-xs-3"></div>
    <div class="container col-md-6">
        <h3 class="text-center">
            <small class="text-muted">Cadastro de Garçom</small>
        </h3>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body mx-auto">
                <form method="POST" action="{{route('SalvarGarcom')}}">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" class="form-control @error('cpf') is-invalid @enderror" id="cpf" placeholder="CPF">
                            @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-7">
                            <label for="rg">RG</label>
                            <input type="text" name="rg" class="form-control @error('rg') is-invalid @enderror" id="rg" placeholder="RG">
                            @error('rg')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="idgarcom">ID do Garçom</label>
                            <input type="text" name="idgarcom" class="form-control @error('idgarcom') is-invalid @enderror" id="idgarcom" placeholder="Id do garçom">
                            @error('idgarcom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-7">
                            <label for="nomegarcom">Nome e Sobrenome</label>
                            <input type="text" name="nomegarcom" class="form-control @error('nomegarcom') is-invalid @enderror" id="nomegarcom" placeholder="Nome e sobrenome">
                            @error('nomegarcom')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('VerGarcons')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
