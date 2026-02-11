@extends('layouts.app')

@section('title', 'Alugueis')
@section('content')
<div>
    <h1>Faça um novo alguel<h1>
</div>
<div>
    @forelse($aluguels as $aluguel)
        <div class="aluguel">
            <form action="{{ route('aluguels.update', $aluguel) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <input type="checkbox" name="done" {{ $aluguel->done ? 'checked' : '' }}>
                    <div style="flex:1;">
                        <input type="text" name="title" value="{{ $aluguel->title }}">
                        <div class="muted">#{{ $aluguel->id }} • {{ $aluguel->created_at->format('d/m/Y H:i') }}</div>
                    </div>

                    <button type="submit">Salvar</button>
                </div>
            </form>

            <form action="{{ route('aluguels.destroy', $aluguel) }}" method="POST" style="margin-top:10px;">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Excluir essa Aluguel?')">Excluir</button>
            </form>
        </div>
    @empty
        <p>Nenhuma tarefa cadastrada ainda.</p>
    @endforelse
</div>