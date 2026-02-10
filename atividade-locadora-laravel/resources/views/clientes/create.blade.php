@extends('layouts.app')
@section('title', 'Adicionar CLiente')
@section('content')


<div class="form">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Nome Completo</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Insira o modelo do carro">
    </div>
    <div class="mb-3">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" class="form-control" id="inputEmail4">
    </div>
    <div class="mb-3">
        <label for="inputPassword4" class="form-label">Insira a sua senha</label>
        <input type="password" class="form-control" id="inputPassword4">
    </div>
     <div class="mb-3">
    <label for="inputPassword4" class="form-label">Confirme sua senha</label>
    <input type="password" class="form-control" id="inputPassword4">
    </div>
    <div class="mb-3">
        <label for="inputState" class="form-label">Status do Cliente</label>
        <select id="inputState" class="form-select">
        <option selected>Escolha...</option>
        <option>Ativo</option>
        <option>Inativo</option>
        </select>
    </div>
    <div class="mb-4">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
</div>>