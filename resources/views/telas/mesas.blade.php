@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Produtos</title>
</head>
<body>
    @section('content')
    <div class="col-md-2 col-xs-3"></div>
    <div class="container col-md-8">
        <h3 class="text-center">
            <small class="text-muted">Lista de Mesas</small>
        </h3>
        <table class="table table-bordered table-striped table-responsive-xl">
            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Capacidade</th>
                <th scope="col">Status</th>
                <th scope="col">Mesas mescladas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>

                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>

                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('CadastroMesas')}}" class="btn btn-primary mr-1">Cadastrar Mesa</a>
            <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="col-md-2 col-xs-3"></div>
    @endsection
</body>
</html>
