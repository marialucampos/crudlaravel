@extends('layout.site')
@section('titulo', 'Login')

@section('conteudo')
<div class="container">
    <div class="row" style="margin-top: 60px;">
        <div class="col s12 m6 offset-m3">
            <div class="card-panel z-depth-1" style="padding: 32px; border-radius: 12px; background: #f9f9f9;">
                <h4 class="center" style="color: #4d7230; font-weight: bold;">Login</h4>

                @if ($errors->any())
                    <div class="card-panel red lighten-4 red-text text-darken-4">
                        <ul style="margin: 0;">
                            @foreach ($errors->all() as $error)
                                <li>• {{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.entrar') }}" method="POST">
                    {{ csrf_field() }}

                    <div class="input-field">
                        <input type="text" name="email" id="email" required>
                        <label for="email">E-mail</label>
                    </div>

                    <div class="input-field">
                        <input type="password" name="senha" id="senha" required>
                        <label for="senha">Senha</label>
                    </div>

                    <div class="right-align">
                        <button class="btn" style="background-color: #4d7230;">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
