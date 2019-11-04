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
        <div class="card">
            <div class="card-body mx-auto">
                <form method="POST" action="">
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="codigo">Código</label>
                        <input type="text" class="form-control" id="codigo" placeholder="Código">
                        </div>
                        <div class="form-group col-md-8">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" placeholder="Nome">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <textarea class="form-control" rows="5" id="descricao" placeholder="Descrição do produto"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="preco">Preço</label>
                        <div class="input-group-prepend">
                            <span class="input-group-text">R$</span>
                            <input type="text" class="form-control col-md-4" id="preco" aria-label="Preço" placeholder="0,00">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-4">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" class="form-control" id="quantidade" placeholder="Quantidade">
                        </div>
                        <div class="form-group col-md-6">
                        <label for="entrega">Data de entrega</label>
                        <input type="text" class="form-control" id="entrega" placeholder="DD/MM/AAAA">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{route('VerProdutos')}}" class="btn btn-primary">Voltar</a>
                </form>
            </div>
        </div>
    </div>
   <div class="col-md-3 col-xs-3"></div>
    @endsection
</body>
</html>
