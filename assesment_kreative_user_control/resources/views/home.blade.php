@extends('layouts.app')

<script src="{{ asset('js/home/main.js')}}?{{rand()}}"></script>
<link rel="stylesheet" type="text/css" href="{{asset('css/home/main.css')}}?{{rand()}}"/>

@extends('loading')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <button class="btn btn-sm btn-success" onclick="showFormAddUser()">
                    <i class="bi bi-plus-circle"></i>
                    Adicionar Usuário
                </button>
            </div>

            <div class="">

                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th class="text-center">Status</th>
                            <th class="text-center">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td class="text-center">
                                    @if($user->status == 'ativado')
                                        <i class="bi bi-check-lg text-success"></i>
                                    @elseif($user->status == 'desativado')
                                        <i class="bi bi-ban text-danger"></i>
                                    @endif
                                </td>
                                <td class="text-center">
                                    <button class='btn btn-sm btn-warning' title="Editar" onclick="showEditaUsuario({{$user->id}})">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class='btn btn-sm btn-danger' title="Deletar" onclick="showDeleteUsuario({{$user->id}})">
                                        <i class="bi bi-trash3-fill"></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>
    </div>
</div>

{{-- Modal edit --}}
@include('components.home.modal_edit')
@include('components.home.modal_delete')
@include('components.home.modal_add')

@endsection
