@extends('layouts.app')

@section('content')
    <div class="row justify-content-end">
        <a href="{{route('admin.users.index')}}"
           class="btn btn-primary"
           title="Lista de Usuários">
            Lista de Usuários
        </a>
    </div>
    <h1 class="text-center">Cadastro de Usuários</h1>
    <form action="{{route('admin.users.store')}}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-8">
                <fieldset>
                    <legend>Dados Usuário</legend>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="name">Name</label>
                            <input type="text" required name="name" id="name" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="email">E-mail</label>
                            <input type="email" required name="email" id="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="password">Password</label>
                            <input type="password" required name="password" id="password" class="form-control">
                        </div>
                    </div>
                </fieldset>


                <fieldset>
                    <legend>Endereço</legend>
                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="description">Descrição</label>
                            <input type="text" required name="description" id="description" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="cep">CEP</label>
                            <input type="text" required name="cep" id="cep" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="number">Número</label>
                            <input type="number" required name="number" id="number" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="complement">Complemento</label>
                            <input type="text" required name="complement" id="complement" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="city">Cidade</label>
                            <input type="text" required name="city" id="city" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="neighborhood">Bairro</label>
                            <input type="text" required name="neighborhood" id="neighborhood" class="form-control">
                        </div>
                    </div>

                    <div class="form-row mb-3">
                        <div class="col">
                            <label for="state">Estado</label>
                            <input type="text" required name="state" id="state" class="form-control">
                        </div>
                    </div>
                </fieldset>

            </div>
        </div>
        <div class="row justify-content-center">
            <button type="reset" class="btn btn-outline-dark mr-4">Limpar</button>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
@endsection
