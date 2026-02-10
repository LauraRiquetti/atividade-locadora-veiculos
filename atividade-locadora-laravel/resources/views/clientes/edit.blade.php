@extends('layouts.app')

@section('title', 'Carros')
@section('content')

@forelse($clientes as $cliente)
    <div class="cliente">
        <form action="{{ route('clientes.update', $cliente) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <input type="checkbox" name="done" {{ $cliente->done ? 'checked' : '' }}>
                <div style="flex:1;">
                    <input type="text" name="title" value="{{ $cliente->title }}">
                    <div class="muted">#{{ $cliente->id }} • {{ $cliente->created_at->format('d/m/Y H:i') }}</div>
                </div>

                <button type="submit">Salvar Alterações</button>
            </div>
        </form>

        <form action="{{ route('clientes.destroy', $cliente) }}" method="POST" style="margin-top:10px;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Excluir esse carro?')">Excluir</button>
        </form>
    </div>
@endforelse