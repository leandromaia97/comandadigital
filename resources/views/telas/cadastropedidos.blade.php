@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pedidos</title>
</head>
<body>
    @section('content')
    <div class="col-md-3 col-xs-3"></div>
    <div class="container col-md-6">
        <h3 class="text-center">
            <small class="text-muted">Cadastro de Pedidos</small>
        </h3>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body mx-auto">
                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="numeromesa">Número da Mesa</label>
                            <input type="text" class="form-control" id="numeromesa" placeholder="Mesa 01">
                        </div>
                        <div class="form-group col-md-7">
                            <label for="nome">Nome do Cliente</label>
                            <input type="text" class="form-control" id="nome" placeholder="Nome do cliente">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="comida">Comidas</label>
                            <textarea class="form-control" rows="5" id="comida" placeholder="Itens:"></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="bebida">Bebidas</label>
                            <textarea class="form-control" rows="5" id="bebida" placeholder="Itens:"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observações</label>
                        <textarea class="form-control" rows="3" id="observacao" placeholder="Observações"></textarea>
                    </div>
                    <a href="" class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('VerPedidos')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
