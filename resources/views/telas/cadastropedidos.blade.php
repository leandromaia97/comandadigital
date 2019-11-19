@extends('layouts.app')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pedidos - ComandaDigital</title>
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
                <form method="POST" action="{{route('SalvarPedido')}}">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="numeromesa">Número da Mesa</label>
                            <input type="text" name="numeromesa" class="form-control @error('numeromesa') is-invalid @enderror" id="numeromesa" placeholder="Mesa 01">
                            @error('numeromesa')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-7">
                            <label for="nomecliente">Nome do Cliente</label>
                            <input type="text" name="nomecliente" class="form-control @error('nomecliente') is-invalid @enderror" id="nomecliente" placeholder="Nome do cliente">
                            @error('nomecliente')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="comidas">Comidas</label>
                            <textarea name="comidas" class="form-control @error('comidas') is-invalid @enderror" rows="5" id="comidas" placeholder="Itens:"></textarea>
                            @error('comidas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="bebidas">Bebidas</label>
                            <textarea name="bebidas" class="form-control @error('bebidas') is-invalid @enderror" rows="5" id="bebidas" placeholder="Itens:"></textarea>
                            @error('bebidas')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="observacao">Observações</label>
                        <textarea name="observacoes" class="form-control @error('observacoes') is-invalid @enderror" rows="3" id="observacao" placeholder="Observações"></textarea>
                        @error('observacoes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('VerPedidos')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
