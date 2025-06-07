@extends('layout.site')

@section('titulo','Alunos')

@section('conteudo')
<style>
  /* Espaçamento maior entre o cabeçalho e os cards */
  .cards-row {
    margin-top: 190px; /* distância maior do topo */
    justify-content: center; /* centraliza os cards */
  }
  .card-custom {
    max-width: 360px;
    margin: 0 auto 30px auto; /* centraliza e espaço vertical entre cards */
  }
  .card-custom .card-image img {
    height: 180px;
    object-fit: cover;
  }
</style>

<div class="row cards-row">
  <div class="col s12 m6">
    <div class="card card-custom">
      <div class="card-image waves-effect waves-block waves-light">
       <img class="activator" src="{{ asset('img/cursos/cursos.png') }}">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Curso<i class="material-icons right">more_vert</i></span>
        <p><a href="{{route('admin.cursos')}}">Cadastro de Cursos</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Detalhes<i class="material-icons right">close</i></span>
        <p>Aqui voce pode cadastrar os cursos do seu instituto de ensino.</p>
      </div>
    </div>
  </div>

  <div class="col s12 m6">
    <div class="card card-custom">
      <div class="card-image waves-effect waves-block waves-light">
        <img class="activator" src="{{ asset('img/cursos/alunos.png') }}">
      </div>
      <div class="card-content">
        <span class="card-title activator grey-text text-darken-4">Aluno<i class="material-icons right">more_vert</i></span>
        <p><a href="{{route('admin.alunos')}}">Cadastro de Alunos</a></p>
      </div>
      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4">Detalhes<i class="material-icons right">close</i></span>
        <p>Aqui voce pode cadastrar os alunos dos cursos.</p>
      </div>
    </div>
  </div>
</div>
@endsection
