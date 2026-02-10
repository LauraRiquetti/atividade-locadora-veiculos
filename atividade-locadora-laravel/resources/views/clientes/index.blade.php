@extends('layouts.app')

@section('title', 'Clientes')
@section('content')



<h1> Lista de Carros</h1>
<table class="table table-bordered table-hover align-middle">
    <thead class="table-light">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($carros as $carro)
        <tr>
            <td>{{$cliente->nome}}</td>
            <td>{{$cliente->email}}</td>
            <td>{{$cliente->status}}</td>
        </tr>
         @empty
            <tr>
                <td colspan="8" class="text-center">Nenhum cliente cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="mb-1">
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="resources/views/carros/create.blade.php">Cadastrar clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resources/views/carros/index.blade.php">Lista de clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="resources/views/carros/edit.blade.php">Editar clientes</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
@endsection