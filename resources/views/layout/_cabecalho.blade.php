<html>
<head>
  <title>@yield('titulo')</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <!--Custom CSS-->
  <style>
    nav.green-custom {
      background-color: #4d7230 !important;
      box-shadow: 0 2px 4px rgba(0,0,0,0.2);
    }

    nav .brand-logo {
      font-weight: bold;
      padding-left: 20px;
    }

    nav ul a {
      font-weight: 500;
      font-size: 1rem;
      transition: background 0.3s;
    }

    nav ul a:hover {
      background-color: rgba(255, 255, 255, 0.1);
    }

    .sidenav li > a {
      font-weight: 500;
      color: #4d7230;
    }

    .sidenav li > a:hover {
      background-color: #f0f0f0;
    }
  </style>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>

  <nav class="green-custom">
    <div class="nav-wrapper">
      <a href="/" class="brand-logo">Faculdade</a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="/">Home</a></li>
        @if(Auth::guest()) 
              <li><a href="{{route('login')}}">Login</a></li>
        @else
        <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
        <li><a href="{{ route('admin.alunos') }}">Alunos</a></li>
        <li><a href="#">{{Auth::user()->name}}</a></li>
        <li><a href="{{ route('login.sair') }}">Sair</a></li>
        @endif
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile">
    <li><a href="/">Home</a></li>
    @if(Auth::guest()) 
      <li><a href="{{route('login')}}">Login</a></li>
    @else
      <li><a href="{{ route('admin.cursos') }}">Cursos</a></li>
      <li><a href="{{ route('admin.alunos') }}">Alunos</a></li>
      <li><a href="#">{{Auth::user()->name}}</a></li>
      <li><a href="{{ route('login.sair') }}">Sair</a></li>
    @endif
  </ul>

  <!--Import jQuery and Materialize JS-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var elems = document.querySelectorAll('.sidenav');
      M.Sidenav.init(elems);
    });
  </script>
</body>
</html>
