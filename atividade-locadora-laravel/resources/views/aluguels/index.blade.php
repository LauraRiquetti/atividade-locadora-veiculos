@extends('layouts.app')

@section('title', 'Lista de Alugueis')
@section('content')



<h1> Lista de Alugueis</h1>
<table class="table table-bordered table-hover align-middle">
    <thead class="table-light">
        <tr>
            <th>Modelo do Carro</th>
            <th>Cliente</th>
            <th>Data de Início</th>
            <th>Final Previsto</th>
            <th>Data da Entrega</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @forelse($aluguels as $aluguel)
        <tr>
            <td>{{$carro->modelo }}</td>
            <td>{{$cliente-> nome}}</td>
            <td>{{$aluguel->data_inicio}}</td>
            <td>{{$aluguel->data_final_prevista}}</td>
            <td>{{$aluguel->data_final_entregue}}</td>
            <td>{{$aluguel->status}}</td>
            <td>
                <a href="{{ route('carros.edit', $carro) }}" class="btn btn-sm btn-warning">
                        Editar
                </a>
            </td>
        </tr>
         @empty
            <tr>
                <td colspan="8" class="text-center">Nenhum aluguel cadastrado.</td>
            </tr>
        @endforelse
    </tbody>
</table>
<div class="mb-1">
    <nav class="navbar navbar-expand-lg bg-white border-bottom">
        <div class="container">
            <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('carros.create') }}">Cadastrar Aluguies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('carros.index') }}">Listar de Alugueis</a>
                </li>
                
            </ul>
        </div>
    </nav>
</div>
@endsection