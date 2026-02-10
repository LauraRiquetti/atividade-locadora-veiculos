@extends('layouts.app')

@section('title', 'Carros')
@section('content')



<h1> Lista de Carros</h1>
<table class="table table-bordered table-hover align-middle">
    <thead class="table-light">
        <tr>
            <th>Modelo</th>
            <th>Placa</th>
            <th>Marca</th>
            <th>Ano</th>
            <th>Preço da Diária</th>
            <th>Descrição</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($carros as $carro)
        <tr>
            <td>{{$carro->modelo }}</td>
            <td>{{$carro-> placa}}</td>
            <td>{{$carro->marca}}</td>
            <td>{{$carro->ano}}</td>
            <td>{{$carro->preco_diaria}}</td>
            <td>{{$carro->descricao}}</td>
            <td>{{$carro->status}}</td>
        </tr>
         @empty
            <tr>
                <td colspan="8" class="text-center">Nenhum carro cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="mb-1">
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="resources/views/carros/create.blade.php">Cadastrar carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resources/views/carros/index.blade.php">Listar de Carros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resources/views/carros/edit.blade.php">Editar Carros</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endsection