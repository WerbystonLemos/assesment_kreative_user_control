@extends('layouts.app')

<script src="{{ asset('js/home/main.js')}}?{{rand()}}"></script>

@extends('loading')

@section('content')
<div class="container-fluid" style="border: 1px solid red">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div>
                <button class="btn btn-sm btn-success">
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
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->status}}</td>
                                <td>
                                    <button class='btn btn-sm btn-warning' title="Editar" onclick="editaUsuario({{$user->id}})">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button class='btn btn-sm btn-danger' title="Deletar">
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

@endsection
