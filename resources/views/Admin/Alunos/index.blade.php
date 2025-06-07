@extends('layout.site')
@section('titulo','Alunos')
@section('conteudo')

<style>
    .btn-green {
        background-color: #4d7230 !important;
        color: white !important;
    }

    .btn-green:hover {
        background-color: #3a5d24 !important;
    }

    .btn-action {
        flex: 1;
        padding: 6px 8px;
        font-size: 0.9rem;
        text-align: center;
    }

    .action-buttons {
        display: flex;
        gap: 6px;
    }

    .modern-table {
        width: 100%;
        border-collapse: collapse;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

   .modern-table th {
    background-color: #f5f5f5;
    color: #333;
    padding: 12px;
    text-align: left;
    font-weight: 600;
    border-bottom: 2px solid #ddd;
}


    .modern-table td {
        padding: 12px;
        vertical-align: middle;
        border-bottom: 1px solid #e0e0e0;
    }

    .modern-table tr:hover {
        background-color: #f1f8f4;
    }

    .img-thumb {
        width: 70px;
        height: 70px;
        object-fit: cover;
        border-radius: 8px;
        border: 1px solid #ccc;
    }

    .table-container {
        overflow-x: auto;
        margin-top: 30px;
    }

    .center-btn {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
</style>

<div class='container'>
    <h3 class='center'>Lista de Alunos</h3>

    @if(session('success'))
        <div class="card-panel green lighten-4 green-text text-darken-4">{{ session('success') }}</div>
    @endif

    <div class="table-container">
        <table class="modern-table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Celular</th>
                    <th>Curso</th>
                    <th>Imagem</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rows as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->nome }}</td>
                        <td>{{ $row->celular }}</td>
                        <td>{{ $row->curso->titulo ?? 'N/A' }}</td>
                        <td>
                            @if($row->imagem)
                                <img class="img-thumb" src="{{ asset($row->imagem) }}" alt="{{ $row->titulo }}">
                            @else
                                N/A
                            @endif
                        </td>
                        <td>
                            <div class="action-buttons">
                                <a class="btn btn-green btn-action" href="{{ route('admin.alunos.editar', $row->id) }}">Alterar</a>
                                <a class="btn red btn-action" href="{{ route('admin.alunos.excluir', $row->id) }}" onclick="return confirm('Confirma exclusão?')">Excluir</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="row center-btn">
        <a class="btn btn-green" href="{{ route('admin.alunos.adicionar') }}">Adicionar Aluno</a>
    </div>
</div>
@endsection
