@extends('layouts.app')

@section('content')
    <div class="row justify-content-end">
        <a href="{{route('admin.users.create')}}"
           class="btn btn-primary"
           title="Novo Cadastro">
            Novo Cadastro
        </a>
    </div>
    <h1 class="text-center">Usuários</h1>
    <div class="row justify-content-center">
        <div class="col-10">
            <table class="table table-bordered ">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>E-Mail</th>
                    <th>Detalhes</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{route('admin.users.show', ['user' => $user->id])}}">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row justify-content-center">
        {{ $users->links() }}
    </div>
@endsection
