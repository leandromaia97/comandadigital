@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Garçons</title>
</head>
<body>
    @section('content')
    <div class="col-md-2 col-xs-3"></div>
    <div class="container col-md-8">
        <h3 class="text-center">
            <small class="text-muted">Garçons</small>
        </h3>
        <table class="table table-bordered table-striped table-responsive-xl shadow-sm p-3 mb-5 bg-white rounded">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">RG</th>
                <th scope="col">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('CadastroGarcom')}}" class="btn btn-primary mr-1">Cadastrar Garçom</a>
            <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="col-md-2 col-xs-3"></div>
    @endsection
</body>
</html>
