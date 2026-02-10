@extends('layouts.app')
@section('title', 'Adicionar Carros')
@section('content')


<div class="form">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Modelo do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira o modelo do carro">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Placa do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira a placa do carro">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Marca do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira a marca do carro">
    </div>
     <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Ano do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira o ano do carro">
    </div>
     <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Preço do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira o preço do carro">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label">Descrição do Carro</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Insira uma pequena descrição do carro">
    </div>
    <div class="mb-3">
        <label for="inputState" class="form-label">Status</label>
        <select id="inputState" class="form-select">
        <option selected>Escolha...</option>
        <option>Disponível</option>
        <option>Alugado</option>
        <option>Manutenção</option>
        </select>
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>>