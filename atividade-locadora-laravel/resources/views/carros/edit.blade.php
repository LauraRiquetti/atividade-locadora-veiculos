@extends('layouts.app')

@section('title', 'Carros')
@section('content')

@forelse($carros as $carro)
    <div class="carro">
        <form action="{{ route('carros.update', $carro) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <input type="checkbox" name="done" {{ $carro->done ? 'checked' : '' }}>
                <div style="flex:1;">
                    <input type="text" name="title" value="{{ $carro->title }}">
                    <div class="muted">#{{ $carro->id }} • {{ $carro->created_at->format('d/m/Y H:i') }}</div>
                </div>

                <button type="submit">Salvar Alterações</button>
            </div>
        </form>

        <form action="{{ route('carros.destroy', $carro) }}" method="POST" style="margin-top:10px;">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Excluir esse carro?')">Excluir</button>
        </form>
    </div>
@endforelse