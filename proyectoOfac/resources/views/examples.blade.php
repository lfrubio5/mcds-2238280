<html>
<head>
<title>Retos </title>
</head>
<body>

<div class="container">
@foreach ($users as $user)
    @if ( $user->gender  === "Female")
    <br>
      @switch($user->role)
        @case("Admin")
            La dama {{ $user->fullname }} Es Administrador@
        @break
        @case("Editor")
            La dama {{ $user->fullname }} Es Editor@
        @break
        @default
          sin relacion
         Ninguno
      @endswitch
    @elseif( $user->gender === "Male")
    <br>
      @switch($user->role)
        @case("Admin")
            El Caballero {{ $user->fullname }} Es Administrador@
        @break
        @case("Editor")
            El Caballero {{ $user->fullname }} Es Editor@
        @break
        @default
          sin relacion
         Ninguno
      @endswitch
    @else
        El Genero de usuario {{ $user->fullname }} es transgenero<br>
    @endif
@endforeach
</div>
</body>
</html>