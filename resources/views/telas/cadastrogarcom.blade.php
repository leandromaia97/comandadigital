@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Garçom</title>
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
                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="codigo">CPF</label>
                            <input type="text" class="form-control" id="codigo" placeholder="CPF">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="nome">RG</label>
                            <input type="text" class="form-control" id="nome" placeholder="RG">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="nome">ID do Garçom</label>
                            <input type="text" class="form-control" id="nome" placeholder="ID Garçom">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="entrega">Nome Completo</label>
                            <input type="text" class="form-control" id="entrega" placeholder="Nome completo">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
