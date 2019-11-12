@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pedidos - ComandaDigital</title>
</head>
<body>
    @section('content')
    <div class="col-md-2 col-xs-3"></div>
    <div class="container col-md-8">
        <h3 class="text-center">
            <small class="text-muted">Lista de Pedidos</small>
        </h3>
        <table class="table table-bordered table-striped table-responsive-xl shadow-sm p-3 mb-5 bg-white rounded">
            <thead>
                <tr>
                <th scope="col">Mesa</th>
                <th scope="col">Cliente</th>
                <th scope="col">Comidas</th>
                <th scope="col">Bebidas</th>
                <th scope="col">Observações</th>
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
                <td></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td></td>
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
                <td></td>
                </tr>
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('CadastroPedidos')}}" class="btn btn-primary mr-1">Cadastrar Pedido</a>
            <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="col-md-2 col-xs-3"></div>
    @endsection
</body>
</html>
