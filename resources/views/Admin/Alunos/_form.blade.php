<div class="input-field">
    <input type="text" name="nome" value="{{ isset($linha->nome) ? $linha->nome : '' }}">
    <label>Nome</label>
</div>
<div class="input-field">
    <input type="text" name="celular" value="{{ isset($linha->celular) ? $linha->celular : '' }}">
    <label>Celular</label>

</div>

 <select name="id_curso" required>
    <option value="" disabled {{ !isset($linha->id_curso) ? 'selected' : '' }}>Selecione o curso</option>
    @foreach($cursos as $curso) 
      <option value="{{ $curso->id }}" {{ (isset($linha->id_curso) && $linha->id_curso == $curso->id) ? 'selected' : '' }}>
        {{ $curso->descricao }}
      </option>
    @endforeach
</select>
<label>Curso</label>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" name="arquivo">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
    </div>
</div>
@if(isset($linha->imagem))
<div class="input-field">
    <img width="150" src="{{asset($linha->imagem)}}" />
</div>
@endif