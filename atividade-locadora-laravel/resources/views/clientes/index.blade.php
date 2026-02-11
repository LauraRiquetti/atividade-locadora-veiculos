@extends('layouts.app')

@section('title', 'Clientes')
@section('content')



<h1> Lista de Carros</h1>
<div>
    <table class="table table-bordered table-hover align-middle">
        <thead class="table-light">
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Status</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @forelse($clientes as $cliente)
            <tr>
                <td>{{$cliente->nome}}</td>
                <td>{{$cliente->email}}</td>
                <td>{{$cliente->status}}</td>
                <td>
                    <a href="{{ route('carros.edit', $carro) }}" class="btn btn-sm btn-warning">
                            Editar
                    </a>
                </td>
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
                        <a class="nav-link active" aria-current="page" href="{{ route('clientes.create') }}">Cadastrar clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('clientes.index') }}">Listar de clientes</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
@endsection