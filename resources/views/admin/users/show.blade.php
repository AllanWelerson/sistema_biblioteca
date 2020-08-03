@extends('layouts.app')

@section('content')
{{--    <div class="row justify-content-end">--}}
{{--        <a href="{{route('admin.users.create')}}"--}}
{{--           class="btn btn-primary"--}}
{{--           title="Novo Cadastro">--}}
{{--            Novo Cadastro--}}
{{--        </a>--}}
{{--    </div>--}}
    <h1 class="text-center">Usuário</h1>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-bordered ">
                <tbody>
                    <tr>
                        <th>Nome</th>
                        <td>{{$user->name}}</td>
                    </tr>
                    <tr>
                        <th>E-Mail</th>
                        <td>{{$user->email}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h1 class="text-center">Endereço</h1>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-bordered ">
                <tbody>
                <tr>
                    <th>Descrição</th>
                    <td>{{$user->address->description}}</td>
                </tr>
                <tr>
                    <th>Cep</th>
                    <td>{{$user->address->cep}}</td>
                </tr>
                <tr>
                    <th>Número</th>
                    <td>{{$user->address->number}}</td>
                </tr>
                <tr>
                    <th>Complemento</th>
                    <td>{{$user->address->complement}}</td>
                </tr>
                <tr>
                    <th>Bairro</th>
                    <td>{{$user->address->neighborhood}}</td>
                </tr>
                <tr>
                    <th>Cidade</th>
                    <td>{{$user->address->city}}</td>
                </tr>
                <tr>
                    <th>Estado</th>
                    <td>{{$user->address->state}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
