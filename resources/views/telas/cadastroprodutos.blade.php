@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Produtos</title>
</head>
<body>
    @section('content')
    <div class="col-md-3 col-xs-3"></div>
    <div class="container col-md-6">
        <h3 class="text-center">
            <small class="text-muted">Cadastro de Produtos</small>
        </h3>
        <div class="card shadow-sm p-3 mb-5 bg-white rounded">
            <div class="card-body mx-auto">
                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-5">
                            <label for="codigoproduto">Código</label>
                            <input type="text" class="form-control @error('codigoproduto') is-invalid @enderror" id="codigoproduto" placeholder="Código">
                            @error('codigoproduto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-7">
                            <label for="nomeproduto">Nome</label>
                            <input type="text" class="form-control @error('nomeproduto') is-invalid @enderror" id="nomeproduto" placeholder="Nome">
                            @error('nomeproduto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricaoproduto">Descrição</label>
                        <textarea class="form-control @error('descricaoproduto') is-invalid @enderror" rows="5" id="descricaoproduto" placeholder="Descrição do produto"></textarea>
                        @error('descricaoproduto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="precoproduto">Preço</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control @error('precoproduto') is-invalid @enderror col-md-4" id="precoproduto" aria-label="Preço" placeholder="0,00">
                        </div>
                        @error('precoproduto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="quantidadeproduto">Quantidade</label>
                            <input type="text" class="form-control @error('quantidadeproduto') is-invalid @enderror" id="quantidadeproduto" placeholder="Quantidade">
                            @error('quantidadeproduto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="entregaproduto">Data de entrega</label>
                            <input type="text" class="form-control @error('entregaproduto') is-invalid @enderror" id="entregaproduto" placeholder="DD/MM/AAAA">
                            @error('entregaproduto')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <a href="" class="btn btn-primary">Cadastrar</a>
                    <a href="{{route('VerProdutos')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
