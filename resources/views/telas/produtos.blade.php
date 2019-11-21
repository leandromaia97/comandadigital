@extends('layouts.app')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos - ComandaDigital</title>
</head>
<body>
    @section('content')
    <div class="col-md-2 col-xs-3"></div>
    <div class="container col-md-8">
        <h3 class="text-center">
            <small class="text-muted">Lista de Produtos</small>
        </h3>
        <table class="table table-bordered table-striped table-responsive-xl shadow-sm p-3 mb-5 bg-white rounded">
            <thead>
                <tr>
                <th scope="col">Código</th>
                <th scope="col">Nome</th>
                <th scope="col">Descrição</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Data de Entrega</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultado as $produto)
                <tr>
                    <td>{{ $produto->codigo_produto }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->descricao }}</td>
                    <td>R$ {{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->data_entrega }}</td>
                </tr>
                @endforeach             
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            <a href="{{route('CadastroProdutos')}}" class="btn btn-primary mr-1">Cadastrar Produtos</a>
            <a href="{{route('ViewGerente')}}" class="btn btn-primary">Voltar</a>
        </div>
    </div>
    <div class="col-md-2 col-xs-3"></div>
    @endsection
</body>
</html>
