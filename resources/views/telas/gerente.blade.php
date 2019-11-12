@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gerente - ComandaDigital</title>
</head>
<body>
    @section('content')
    <div class="container-fluid">

        <div class="col-md-3 col-xs-3"></div>

        <div class="col-md-auto col-xs-auto">
            <div class="row">
                <div class="col-md-2 col-xs-3">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width:auto">
                        <img src="images/pedidos-icon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Pedidos</h5>
                            <a href="{{route('VerPedidos')}}" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/dinheiro-icon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Conta</h5>
                            <a href="#" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/mesas-icon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Mesas</h5>
                            <a href="{{route('VerMesas')}}" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/cozinha-icon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Cozinha</h5>
                            <a href="{{route('CadastroCozinha')}}" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/comidas-icon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Produtos</h5>
                            <a href="{{route('VerProdutos')}}" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/garcom-icon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Garçom</h5>
                            <a href="{{route('VerGarcons')}}" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="card text-center shadow p-3 mb-5 bg-white rounded" style="width: auto;">
                        <img src="images/relatorios-icon.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold">Relatórios</h5>
                            <a href="#" class="btn btn-light">Acessar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-md-3 col-xs-3"></div>

    </div>
    @endsection
</body>
</html>
