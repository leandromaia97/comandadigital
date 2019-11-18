@extends('layouts.inicial')
@section('title', 'Page Title')
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Usúario - ComandaDigital</title>
</head>
<body>
  @section('content')
    <div class="col-md-3"></div>
    <div class="container col-md-6">
      <div class="alert alert-success" role="alert">
        Você foi cadastrado com sucesso. Bem-vindo!
      </div>
    </div>
    <div class="col-md-3"></div>
  @endsection
</body>
</html>