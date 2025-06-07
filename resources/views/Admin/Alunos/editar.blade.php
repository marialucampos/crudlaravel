@extends('layout.site')
@section('titulo','Editar Aluno')

@section('conteudo')
<div class='container'>
    <h4 class='center' style="margin-top: 40px; color: #4d7230; font-weight: bold;">
        Editando Aluno
    </h4>

    @if ($errors->any())
        <div class="card-panel red lighten-4 red-text text-darken-4">
            <ul style="margin: 0;">
                @foreach ($errors->all() as $error)
                    <li>• {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class='row'>
        <form 
            action="{{ route('admin.alunos.atualizar', $linha->id) }}" 
            method="post" 
            enctype="multipart/form-data"
            class="col s12 z-depth-1" 
            style="padding: 24px; border-radius: 12px; background: #f9f9f9"
        >
            @csrf
            @method('PUT')

            @include('admin.alunos._form')

            <div class="right-align">
                <button class="btn" style="background-color: #4d7230;">
                    Atualizar
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
